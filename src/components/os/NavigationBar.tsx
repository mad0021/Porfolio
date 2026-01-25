import React from 'react'
import Icon from '@/components/ui/Icon'
import { useOS } from '@/context/OSContext'

export default function NavigationBar() {
  const { goBack, goHome, toggleRecents } = useOS()
  return (
    <div className="fixed bottom-0 left-0 right-0 h-12 bg-black/30 backdrop-blur flex items-center justify-center gap-12 text-white z-50">
      <button
        aria-label="Back"
        onClick={goBack}
        className="p-2 rounded-full hover:bg-white/10"
      >
        <Icon name="arrow_back" size={24} />
      </button>
      <button
        aria-label="Home"
        onClick={goHome}
        className="p-2 rounded-full hover:bg-white/10"
      >
        <Icon name="home" size={24} />
      </button>
      <button
        aria-label="Recents"
        onClick={toggleRecents}
        className="p-2 rounded-full hover:bg-white/10"
      >
        <Icon name="apps" size={24} />
      </button>
    </div>
  )
}
