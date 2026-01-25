import React, { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { ExternalLink, Github, Tag } from 'lucide-react';

interface Project {
  id: number;
  title: string;
  description: string;
  tags: string[];
  image: string;
  demoUrl?: string;
  repoUrl?: string;
  category: 'Web' | 'Mobile' | 'Design';
}

const projects: Project[] = [
  {
    id: 1,
    title: "E-Commerce Dashboard",
    description: "Panel de administración completo para tiendas online con análisis de datos en tiempo real y gestión de inventario.",
    tags: ["React", "TypeScript", "Tailwind", "Recharts"],
    image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2670&auto=format&fit=crop",
    demoUrl: "https://example.com",
    repoUrl: "https://github.com",
    category: "Web"
  },
  {
    id: 2,
    title: "Task Manager App",
    description: "Aplicación de gestión de tareas colaborativa con funcionalidades de arrastrar y soltar (Kanban).",
    tags: ["Next.js", "Prisma", "PostgreSQL", "dnd-kit"],
    image: "https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&w=2672&auto=format&fit=crop",
    demoUrl: "https://example.com",
    repoUrl: "https://github.com",
    category: "Web"
  },
  {
    id: 3,
    title: "Weather Mobile App",
    description: "Aplicación del tiempo minimalista con animaciones fluidas y predicciones precisas.",
    tags: ["React Native", "Expo", "API Integration"],
    image: "https://images.unsplash.com/photo-1592210454359-9043f067919b?q=80&w=2670&auto=format&fit=crop",
    category: "Mobile"
  },
  {
    id: 4,
    title: "Finance Tracker",
    description: "Rastreador de gastos personales con visualización de datos y establecimiento de presupuestos.",
    tags: ["Vue.js", "Firebase", "Chart.js"],
    image: "https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2626&auto=format&fit=crop",
    repoUrl: "https://github.com",
    category: "Web"
  }
];

const ProjectsApp: React.FC = () => {
  const [filter, setFilter] = useState<'All' | 'Web' | 'Mobile' | 'Design'>('All');

  const filteredProjects = filter === 'All' 
    ? projects 
    : projects.filter(p => p.category === filter);

  return (
    <div className="h-full w-full bg-background text-onBackground overflow-y-auto custom-scrollbar">
      <div className="max-w-6xl mx-auto p-6 pb-24 space-y-8">
        <div className="flex flex-col md:flex-row justify-between items-center gap-4">
          <div>
            <h2 className="text-3xl font-bold text-primary">Proyectos</h2>
            <p className="text-onSurfaceVariant">Una selección de mis trabajos más recientes</p>
          </div>
          
          {/* Filters */}
          <div className="flex bg-surfaceVariant/50 p-1 rounded-full">
            {['All', 'Web', 'Mobile', 'Design'].map((f) => (
              <button
                key={f}
                onClick={() => setFilter(f as any)}
                className={`px-4 py-2 rounded-full text-sm font-medium transition-colors ${
                  filter === f 
                    ? 'bg-primary text-onPrimary shadow-md' 
                    : 'text-onSurfaceVariant hover:bg-white/10'
                }`}
              >
                {f}
              </button>
            ))}
          </div>
        </div>

        {/* Grid */}
        <motion.div 
          layout
          className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
        >
          <AnimatePresence>
            {filteredProjects.map((project) => (
              <motion.div
                layout
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                exit={{ opacity: 0, scale: 0.9 }}
                key={project.id}
                className="bg-surfaceVariant/30 rounded-3xl overflow-hidden border border-white/5 hover:border-primary/50 transition-colors group flex flex-col h-full"
              >
                {/* Image */}
                <div className="h-48 overflow-hidden relative">
                  <div className="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10" />
                  <img 
                    src={project.image} 
                    alt={project.title} 
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  />
                  <div className="absolute top-4 right-4 z-20">
                    <span className="px-3 py-1 bg-black/50 backdrop-blur-md text-white text-xs rounded-full border border-white/10">
                      {project.category}
                    </span>
                  </div>
                </div>

                {/* Content */}
                <div className="p-6 flex flex-col flex-1 space-y-4">
                  <div>
                    <h3 className="text-xl font-bold text-onSurface mb-2">{project.title}</h3>
                    <p className="text-onSurfaceVariant text-sm line-clamp-3">{project.description}</p>
                  </div>

                  <div className="flex flex-wrap gap-2">
                    {project.tags.map(tag => (
                      <span key={tag} className="px-2 py-1 bg-primary/10 text-primary text-xs rounded-md flex items-center gap-1">
                        <Tag size={12} />
                        {tag}
                      </span>
                    ))}
                  </div>

                  <div className="mt-auto pt-4 flex gap-3">
                    {project.demoUrl && (
                      <a 
                        href={project.demoUrl}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-primary text-onPrimary rounded-xl font-medium hover:bg-primaryContainer hover:text-onPrimaryContainer transition-colors"
                      >
                        <ExternalLink size={16} />
                        Demo
                      </a>
                    )}
                    {project.repoUrl && (
                      <a 
                        href={project.repoUrl}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-surfaceVariant text-onSurfaceVariant rounded-xl font-medium hover:bg-surfaceVariant/80 transition-colors border border-white/5"
                      >
                        <Github size={16} />
                        Code
                      </a>
                    )}
                  </div>
                </div>
              </motion.div>
            ))}
          </AnimatePresence>
        </motion.div>
      </div>
    </div>
  );
};

export default ProjectsApp;
