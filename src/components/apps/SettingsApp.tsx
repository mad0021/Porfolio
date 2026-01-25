import React from 'react';
import { useOS } from '@/context/OSContext';
import { Moon, Sun, Monitor, Type, Palette } from 'lucide-react';
import { clsx } from 'clsx';

const wallpapers = [
  "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=2564&auto=format&fit=crop",
  "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?q=80&w=2670&auto=format&fit=crop",
  "https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2672&auto=format&fit=crop",
  "https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=2670&auto=format&fit=crop",
];

const SettingsApp: React.FC = () => {
  const { theme, toggleTheme, wallpaper, setWallpaper } = useOS();

  return (
    <div className="h-full w-full bg-background text-onBackground overflow-y-auto custom-scrollbar">
      <div className="max-w-3xl mx-auto p-6 space-y-8">
        <h2 className="text-3xl font-bold text-primary mb-8">Ajustes</h2>

        {/* Theme Section */}
        <section className="space-y-4">
          <h3 className="text-xl font-medium flex items-center gap-2 text-onSurfaceVariant">
            <Monitor size={20} />
            Apariencia
          </h3>
          <div className="bg-surfaceVariant/30 rounded-3xl p-4 md:p-6 space-y-6">
            <div className="flex items-center justify-between">
              <div className="flex items-center gap-3">
                {theme === 'dark' ? <Moon size={24} /> : <Sun size={24} />}
                <div>
                  <p className="font-medium">Tema del sistema</p>
                  <p className="text-sm text-onSurfaceVariant">
                    {theme === 'dark' ? 'Modo Oscuro' : 'Modo Claro'}
                  </p>
                </div>
              </div>
              <button 
                onClick={toggleTheme}
                className="px-4 py-2 bg-primaryContainer text-onPrimaryContainer rounded-full font-medium hover:opacity-90 transition-opacity"
              >
                Cambiar
              </button>
            </div>
          </div>
        </section>

        {/* Wallpaper Section */}
        <section className="space-y-4">
          <h3 className="text-xl font-medium flex items-center gap-2 text-onSurfaceVariant">
            <Palette size={20} />
            Fondo de pantalla
          </h3>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
            {wallpapers.map((wp, index) => (
              <button
                key={index}
                onClick={() => setWallpaper(wp)}
                className={clsx(
                  "relative aspect-[9/16] rounded-xl overflow-hidden border-2 transition-all hover:scale-105",
                  wallpaper === wp ? "border-primary shadow-lg scale-105" : "border-transparent"
                )}
              >
                <img src={wp} alt={`Wallpaper ${index + 1}`} className="w-full h-full object-cover" />
                {wallpaper === wp && (
                  <div className="absolute inset-0 bg-primary/20 flex items-center justify-center">
                    <div className="w-3 h-3 bg-white rounded-full shadow-md" />
                  </div>
                )}
              </button>
            ))}
          </div>
        </section>

        {/* Language Section (Mock) */}
        <section className="space-y-4">
          <h3 className="text-xl font-medium flex items-center gap-2 text-onSurfaceVariant">
            <Type size={20} />
            Idioma
          </h3>
          <div className="bg-surfaceVariant/30 rounded-3xl p-4">
            <div className="flex items-center justify-between p-2">
              <span>Español</span>
              <div className="w-4 h-4 rounded-full border-2 border-primary bg-primary" />
            </div>
            <div className="flex items-center justify-between p-2 opacity-50 cursor-not-allowed">
              <span>English (Coming soon)</span>
              <div className="w-4 h-4 rounded-full border-2 border-onSurfaceVariant" />
            </div>
          </div>
        </section>

        <div className="pt-8 text-center text-onSurfaceVariant/50 text-sm">
          <p>WinterOS v1.0.0</p>
          <p>Built with React & Tailwind</p>
        </div>
      </div>
    </div>
  );
};

export default SettingsApp;
