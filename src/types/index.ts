import type { ComponentType } from 'react';

export type IconComponent = ComponentType<{
  size?: number;
  className?: string;
}>;

export type AppID = 'projects' | 'skills' | 'about' | 'cv' | 'linkedin' | 'github' | 'settings';

export interface AppConfig {
  id: AppID;
  title: string;
  icon: string;
  component: ComponentType<any>;
  showInDock: boolean;
  color: string;
}

export type Theme = 'light' | 'dark';

export interface OSState {
  theme: Theme;
  wallpaper: string;
  isAppsOpen: Record<AppID, boolean>;
  activeApp: AppID | null;
  appOrder: AppID[]; // For z-index management
  recentsOpen: boolean;
}

export interface OSContextType extends OSState {
  openApp: (appId: AppID) => void;
  closeApp: (appId: AppID) => void;
  minimizeApp: (appId: AppID) => void; // Usually just closing or hiding
  focusApp: (appId: AppID) => void;
  toggleTheme: () => void;
  setWallpaper: (url: string) => void;
  goBack: () => void;
  goHome: () => void;
  toggleRecents: () => void;
}
