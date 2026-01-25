import React from 'react';
import { useOS } from '@/context/OSContext';
import StatusBar from '@/components/os/StatusBar';
import Dock from '@/components/os/Dock';
import AppWindow from '@/components/os/AppWindow';
import NavigationBar from '@/components/os/NavigationBar';
import Recents from '@/components/os/Recents';
import { apps } from '@/utils/apps';

const Desktop: React.FC = () => {
  const { wallpaper } = useOS();

  return (
    <div
      className="w-full h-screen relative overflow-hidden bg-cover bg-center bg-no-repeat bg-fixed"
      style={{ backgroundImage: `url(${wallpaper})` }}
    >
      <div className="absolute inset-0 bg-black/20" />

      <StatusBar />

      <div className="absolute inset-0 pt-8 pb-40 px-4 pointer-events-none">
        {apps.map(app => (
          <div key={app.id} className="pointer-events-auto">
            <AppWindow app={app} />
          </div>
        ))}
      </div>

      <Dock />
      <Recents />
      <NavigationBar />
    </div>
  );
};
export default Desktop;
