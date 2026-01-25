import React from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { useOS } from '@/context/OSContext';
import type { AppConfig } from '@/types';
import clsx from 'clsx';
import Icon from '@/components/ui/Icon';

interface AppWindowProps {
  app: AppConfig;
}

const AppWindow: React.FC<AppWindowProps> = ({ app }) => {
  const { isAppsOpen, closeApp, minimizeApp, focusApp, activeApp, appOrder } = useOS();
  const isOpen = isAppsOpen[app.id];
  const isActive = activeApp === app.id;

  const zIndex = appOrder.indexOf(app.id) + 10;

  return (
    <AnimatePresence>
      {isOpen && (
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          exit={{ opacity: 0, y: 30 }}
          transition={{ type: "spring", damping: 30, stiffness: 300 }}
          style={{ zIndex }}
          className={clsx(
            "fixed inset-0 pt-8 pb-12 overflow-hidden flex flex-col",
            isActive ? "" : ""
          )}
          onClick={() => focusApp(app.id)}
        >
          <div className="flex-1 bg-background overflow-auto relative rounded-t-[28px]">
            <app.component />
          </div>
        </motion.div>
      )}
    </AnimatePresence>
  );
};

export default AppWindow;
