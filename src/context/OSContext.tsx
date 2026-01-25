import { createContext, useContext, useState, useEffect, type ReactNode } from 'react';
import type { AppID, OSContextType, Theme } from '@/types';

const OSContext = createContext<OSContextType | undefined>(undefined);

const DEFAULT_THEME: Theme = 'dark';
const DEFAULT_WALLPAPER = "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=2564&auto=format&fit=crop";

type ProviderProps = { children: ReactNode };

export function OSProvider({ children }: ProviderProps) {
  // Initialize state from localStorage or defaults
  const [theme, setThemeState] = useState<Theme>(() => {
    const saved = localStorage.getItem('os_theme');
    return (saved as Theme) || DEFAULT_THEME;
  });

  const [wallpaper, setWallpaperState] = useState<string>(() => {
    const saved = localStorage.getItem('os_wallpaper');
    return saved || DEFAULT_WALLPAPER;
  });

  const [isAppsOpen, setIsAppsOpen] = useState<Record<AppID, boolean>>({
    projects: false,
    skills: false,
    about: false,
    cv: false,
    linkedin: false,
    github: false,
    settings: false,
  });

  const [activeApp, setActiveApp] = useState<AppID | null>(null);
  const [appOrder, setAppOrder] = useState<AppID[]>([]);
  const [recentsOpen, setRecentsOpen] = useState<boolean>(false);

  // Persist theme and wallpaper
  useEffect(() => {
    localStorage.setItem('os_theme', theme);
    document.documentElement.classList.remove('light', 'dark');
    document.documentElement.classList.add(theme);
  }, [theme]);

  useEffect(() => {
    localStorage.setItem('os_wallpaper', wallpaper);
  }, [wallpaper]);

  const openApp = (appId: AppID) => {
    setIsAppsOpen(prev => ({ ...prev, [appId]: true }));
    focusApp(appId);
  };

  const closeApp = (appId: AppID) => {
    setIsAppsOpen(prev => ({ ...prev, [appId]: false }));
    setAppOrder(prev => prev.filter(id => id !== appId));
    if (activeApp === appId) {
      setActiveApp(null);
    }
  };

  const minimizeApp = (appId: AppID) => {
    // For now, minimize just removes focus or we can implement a specific minimized state later
    // If we want it to disappear from view but stay "open" in background (like Android home button)
    // We might just set activeApp to null but keep isAppsOpen true.
    if (activeApp === appId) {
      setActiveApp(null);
    }
  };

  const focusApp = (appId: AppID) => {
    setActiveApp(appId);
    setAppOrder(prev => {
      const filtered = prev.filter(id => id !== appId);
      return [...filtered, appId];
    });
  };

  const toggleTheme = () => {
    setThemeState(prev => (prev === 'light' ? 'dark' : 'light'));
  };

  const setWallpaper = (url: string) => {
    setWallpaperState(url);
  };
  
  const goBack = () => {
    if (activeApp) setActiveApp(null);
  };
  
  const goHome = () => {
    if (activeApp) {
      closeApp(activeApp);
    } else {
      setActiveApp(null);
    }
    setRecentsOpen(false);
  };
  
  const toggleRecents = () => {
    setRecentsOpen(prev => !prev);
  };

  return (
    <OSContext.Provider
      value={{
        theme,
        wallpaper,
        isAppsOpen,
        activeApp,
        appOrder,
        openApp,
        closeApp,
        minimizeApp,
        focusApp,
        toggleTheme,
        setWallpaper,
        goBack,
        goHome,
        toggleRecents,
        recentsOpen,
      }}
    >
      {children}
    </OSContext.Provider>
  );
}

export function useOS() {
  const context = useContext(OSContext);
  if (context === undefined) {
    throw new Error('useOS must be used within an OSProvider');
  }
  return context;
}
