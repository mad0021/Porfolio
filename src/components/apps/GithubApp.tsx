import React from 'react';
import { Github, Star, GitFork, ExternalLink, Circle } from 'lucide-react';
import { motion } from 'framer-motion';

// Mock data for GitHub repos
const repos = [
  {
    name: "portfolio-os",
    description: "Un portfolio interactivo que simula un sistema operativo web con React y Tailwind.",
    language: "TypeScript",
    stars: 120,
    forks: 34,
    url: "https://github.com/winteros/portfolio-os"
  },
  {
    name: "react-material-you",
    description: "Componentes de React siguiendo las guías de diseño Material You de Google.",
    language: "JavaScript",
    stars: 89,
    forks: 12,
    url: "https://github.com"
  },
  {
    name: "node-api-starter",
    description: "Boilerplate para APIs REST escalables con Node.js, Express y MongoDB.",
    language: "TypeScript",
    stars: 245,
    forks: 56,
    url: "https://github.com"
  },
  {
    name: "flutter-weather",
    description: "App del clima multiplataforma construida con Flutter y OpenWeatherMap.",
    language: "Dart",
    stars: 67,
    forks: 8,
    url: "https://github.com"
  }
];

const GithubApp: React.FC = () => {
  return (
    <div className="h-full w-full bg-[#0d1117] text-[#c9d1d9] overflow-y-auto custom-scrollbar">
      <div className="max-w-5xl mx-auto p-6 pb-24 space-y-8">
        {/* Profile Header */}
        <div className="flex flex-col items-center justify-center space-y-4 py-8 border-b border-[#30363d]">
          <div className="w-24 h-24 rounded-full overflow-hidden border-2 border-[#30363d]">
             <img 
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2787&auto=format&fit=crop" 
              alt="Profile" 
              className="w-full h-full object-cover"
            />
          </div>
          <div className="text-center">
            <h2 className="text-2xl font-bold text-white">WinterOS</h2>
            <p className="text-[#8b949e]">@winteros</p>
          </div>
          <div className="flex gap-4 text-sm text-[#8b949e]">
            <span><strong className="text-white">45</strong> repos</span>
            <span><strong className="text-white">120</strong> followers</span>
            <span><strong className="text-white">56</strong> following</span>
          </div>
          <a 
            href="https://github.com" 
            target="_blank" 
            rel="noopener noreferrer"
            className="w-full max-w-xs py-2 bg-[#21262d] border border-[#30363d] rounded-md text-center text-sm font-medium text-white hover:bg-[#30363d] transition-colors"
          >
            Ver en GitHub
          </a>
        </div>

        {/* Pinned Repos */}
        <div>
          <h3 className="text-lg font-medium text-white mb-4">Pinned Repositories</h3>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
            {repos.map((repo, index) => (
              <motion.a
                key={repo.name}
                href={repo.url}
                target="_blank"
                rel="noopener noreferrer"
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.1 }}
                className="p-4 rounded-md border border-[#30363d] bg-[#0d1117] hover:bg-[#161b22] transition-colors flex flex-col justify-between gap-4 group"
              >
                <div className="space-y-2">
                  <div className="flex items-center gap-2">
                    <span className="text-[#58a6ff] font-semibold group-hover:underline">
                      {repo.name}
                    </span>
                    <span className="px-2 py-0.5 rounded-full border border-[#30363d] text-xs text-[#8b949e] font-medium">Public</span>
                  </div>
                  <p className="text-sm text-[#8b949e] line-clamp-2">
                    {repo.description}
                  </p>
                </div>
                
                <div className="flex items-center gap-4 text-xs text-[#8b949e]">
                  <div className="flex items-center gap-1">
                    <Circle size={10} className={
                      repo.language === 'TypeScript' ? 'text-[#3178c6] fill-[#3178c6]' : 
                      repo.language === 'JavaScript' ? 'text-[#f1e05a] fill-[#f1e05a]' :
                      'text-[#00B4AB] fill-[#00B4AB]'
                    } />
                    {repo.language}
                  </div>
                  <div className="flex items-center gap-1 hover:text-[#58a6ff]">
                    <Star size={14} />
                    {repo.stars}
                  </div>
                  <div className="flex items-center gap-1 hover:text-[#58a6ff]">
                    <GitFork size={14} />
                    {repo.forks}
                  </div>
                </div>
              </motion.a>
            ))}
          </div>
        </div>

        {/* Contribution Graph Mock */}
        <div className="space-y-2">
           <h3 className="text-lg font-medium text-white mb-4">Contributions</h3>
           <div className="w-full overflow-x-auto border border-[#30363d] rounded-lg p-4 bg-[#0d1117]">
             <div className="flex gap-1 min-w-max">
               {Array.from({ length: 53 }).map((_, w) => (
                 <div key={w} className="flex flex-col gap-1">
                   {Array.from({ length: 7 }).map((_, d) => {
                     // Random contribution level
                     const level = Math.random() > 0.7 ? Math.floor(Math.random() * 4) + 1 : 0;
                     const colors = [
                       'bg-[#161b22]', 
                       'bg-[#0e4429]', 
                       'bg-[#006d32]', 
                       'bg-[#26a641]', 
                       'bg-[#39d353]'
                     ];
                     return (
                       <div 
                        key={d} 
                        className={`w-3 h-3 rounded-sm ${colors[level]}`} 
                       />
                     );
                   })}
                 </div>
               ))}
             </div>
           </div>
        </div>

      </div>
    </div>
  );
};

export default GithubApp;
