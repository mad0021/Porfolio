import React from 'react';
import { motion } from 'framer-motion';
import { Calendar, MapPin, Briefcase, GraduationCap, Download } from 'lucide-react';

interface Experience {
  id: number;
  role: string;
  company: string;
  location: string;
  period: string;
  description: string[];
  type: 'work' | 'education';
}

const experiences: Experience[] = [
  {
    id: 1,
    role: "Senior Frontend Engineer",
    company: "Tech Solutions Inc.",
    location: "Madrid, Spain",
    period: "2021 - Presente",
    description: [
      "Liderazgo técnico de un equipo de 5 desarrolladores frontend.",
      "Migración de arquitectura monolítica a micro-frontends.",
      "Mejora del rendimiento de la aplicación principal en un 40%."
    ],
    type: "work"
  },
  {
    id: 2,
    role: "Full Stack Developer",
    company: "Creative Agency",
    location: "Barcelona, Spain",
    period: "2019 - 2021",
    description: [
      "Desarrollo de sitios web corporativos y e-commerce para clientes internacionales.",
      "Implementación de CI/CD pipelines.",
      "Colaboración directa con equipos de diseño y marketing."
    ],
    type: "work"
  },
  {
    id: 3,
    role: "Grado en Ingeniería Informática",
    company: "Universidad Politécnica",
    location: "Madrid, Spain",
    period: "2015 - 2019",
    description: [
      "Especialización en Ingeniería de Software.",
      "Mención de honor en Trabajo de Fin de Grado."
    ],
    type: "education"
  }
];

const CVApp: React.FC = () => {
  return (
    <div className="h-full w-full bg-background text-onBackground overflow-y-auto custom-scrollbar">
      <div className="max-w-4xl mx-auto p-6 pb-24 space-y-8">
        
        {/* Header */}
        <div className="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div>
            <h2 className="text-3xl font-bold text-primary">Curriculum Vitae</h2>
            <p className="text-onSurfaceVariant">Mi trayectoria profesional y académica</p>
          </div>
          <button className="flex items-center gap-2 px-6 py-3 bg-primaryContainer text-onPrimaryContainer rounded-full font-medium hover:bg-opacity-80 transition-colors">
            <Download size={20} />
            Descargar PDF
          </button>
        </div>

        {/* Timeline */}
        <div className="relative border-l-2 border-surfaceVariant ml-3 md:ml-6 space-y-12 py-4">
          {experiences.map((exp, index) => (
            <motion.div 
              key={exp.id}
              initial={{ opacity: 0, x: -20 }}
              animate={{ opacity: 1, x: 0 }}
              transition={{ delay: index * 0.2 }}
              className="relative pl-8 md:pl-12"
            >
              {/* Dot */}
              <div className="absolute -left-[9px] top-0 p-1 bg-background border-2 border-primary rounded-full">
                {exp.type === 'work' ? (
                  <Briefcase size={12} className="text-primary" />
                ) : (
                  <GraduationCap size={12} className="text-primary" />
                )}
              </div>

              {/* Content */}
              <div className="bg-surfaceVariant/30 rounded-3xl p-6 hover:bg-surfaceVariant/50 transition-colors border border-white/5">
                <div className="flex flex-col md:flex-row md:justify-between md:items-start gap-2 mb-4">
                  <div>
                    <h3 className="text-xl font-bold text-onSurface">{exp.role}</h3>
                    <h4 className="text-lg text-primary font-medium">{exp.company}</h4>
                  </div>
                  <div className="flex flex-col items-start md:items-end text-sm text-onSurfaceVariant gap-1">
                    <span className="flex items-center gap-1 bg-surfaceVariant/50 px-2 py-1 rounded">
                      <Calendar size={14} />
                      {exp.period}
                    </span>
                    <span className="flex items-center gap-1">
                      <MapPin size={14} />
                      {exp.location}
                    </span>
                  </div>
                </div>

                <ul className="space-y-2">
                  {exp.description.map((item, i) => (
                    <li key={i} className="flex items-start gap-2 text-onSurfaceVariant/90 leading-relaxed">
                      <span className="mt-2 w-1.5 h-1.5 rounded-full bg-primary shrink-0" />
                      {item}
                    </li>
                  ))}
                </ul>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default CVApp;
