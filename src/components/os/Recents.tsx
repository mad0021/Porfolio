import React from 'react'
import { motion, AnimatePresence } from 'framer-motion'
import { useOS } from '@/context/OSContext'
import { apps } from '@/utils/apps'
import Icon from '@/components/ui/Icon'

export default function Recents() {
  const { recentsOpen, isAppsOpen, focusApp, closeApp } = useOS()
  const openApps = apps.filter(a => isAppsOpen[a.id])
  return (
    <AnimatePresence>
      {recentsOpen && (
        <motion.div
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          exit={{ opacity: 0 }}
          className="fixed inset-0 z-50 bg-black/40 backdrop-blur-sm"
          onClick={(e) => {
            if (e.target === e.currentTarget) {
              // close overlay via NavigationBar toggle
            }
          }}
        >
          <div className="absolute inset-x-0 bottom-24 px-6">
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
              {openApps.map((app, i) => (
                <motion.div
                  key={app.id}
                  initial={{ opacity: 0, y: 20, scale: 0.98 }}
                  animate={{ opacity: 1, y: 0, scale: 1 }}
                  transition={{ delay: i * 0.05 }}
                  className="rounded-2xl overflow-hidden bg-surfaceVariant/60 border border-white/10"
                >
                  <div className="flex items-center gap-2 px-4 py-3">
                    <Icon name={app.icon} size={18} className="text-onSurfaceVariant" />
                    <span className="text-sm font-medium text-onSurface">{app.title}</span>
                  </div>
                  <div className="h-36 bg-background" />
                  <div className="flex gap-2 p-3">
                    <button
                      onClick={() => focusApp(app.id)}
                      className="flex-1 px-3 py-2 rounded-xl bg-primary text-onPrimary text-sm font-medium"
                    >
                      Abrir
                    </button>
                    <button
                      onClick={() => closeApp(app.id)}
                      className="px-3 py-2 rounded-xl bg-surface text-onSurface text-sm font-medium"
                    >
                      Cerrar
                    </button>
                  </div>
                </motion.div>
              ))}
            </div>
          </div>
        </motion.div>
      )}
    </AnimatePresence>
  )
}
