import React from 'react';
import { motion } from 'framer-motion';
import { useOS } from '@/context/OSContext';
import { apps } from '@/utils/apps';
import clsx from 'clsx';
import Icon from '@/components/ui/Icon';

const Dock: React.FC = () => {
  const { openApp, isAppsOpen, activeApp } = useOS();

  return (
    <div className="fixed bottom-20 left-1/2 -translate-x-1/2 z-40 w-full max-w-2xl px-4">
      <div className="flex items-center justify-center gap-2 sm:gap-4 p-4 rounded-[2.5rem] bg-surface/80 backdrop-blur-2xl border border-white/5 shadow-2xl">
        {apps.filter(app => app.showInDock).map((app) => {
          const isOpen = isAppsOpen[app.id];
          const isActive = activeApp === app.id;
          const iconName = app.icon;

          return (
            <motion.button
              key={app.id}
              whileHover={{ scale: 1.1, y: -5 }}
              whileTap={{ scale: 0.95 }}
              onClick={() => openApp(app.id)}
              className="relative group flex flex-col items-center gap-1"
            >
              {/* Icon Container (Android 16 style squircle) */}
              <div
                className={clsx(
                  "w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center rounded-[18px] transition-all duration-300 shadow-md group-hover:shadow-xl",
                  isActive ? "ring-2 ring-white ring-offset-2 ring-offset-transparent" : "",
                )}
                style={{ backgroundColor: app.color }}
              >
                <Icon name={iconName} size={24} className="text-white" />
              </div>

              {/* Tooltip */}
              <span className="absolute -top-12 left-1/2 -translate-x-1/2 px-3 py-1 bg-surfaceVariant/90 backdrop-blur text-onSurfaceVariant text-xs font-medium rounded-full opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none shadow-lg">
                {app.title}
              </span>

              {/* Active Indicator (Dot) */}
              {isOpen && (
                <motion.div
                  layoutId="active-dot"
                  className="w-1.5 h-1.5 rounded-full bg-onSurface mt-1"
                />
              )}
            </motion.button>
          );
        })}
      </div>
    </div>
  );
};

export default Dock;
