import React from 'react';
import { motion } from 'framer-motion';

interface Skill {
  name: string;
  level: number; // 0-100
  category: 'Frontend' | 'Backend' | 'Tools' | 'Soft Skills';
}

const skills: Skill[] = [
  { name: 'React', level: 95, category: 'Frontend' },
  { name: 'TypeScript', level: 90, category: 'Frontend' },
  { name: 'Tailwind CSS', level: 95, category: 'Frontend' },
  { name: 'Next.js', level: 85, category: 'Frontend' },
  { name: 'Node.js', level: 80, category: 'Backend' },
  { name: 'Python', level: 75, category: 'Backend' },
  { name: 'PostgreSQL', level: 70, category: 'Backend' },
  { name: 'Docker', level: 65, category: 'Tools' },
  { name: 'Git', level: 90, category: 'Tools' },
  { name: 'Figma', level: 80, category: 'Tools' },
  { name: 'Comunicación', level: 90, category: 'Soft Skills' },
  { name: 'Liderazgo', level: 85, category: 'Soft Skills' },
];

const SkillsApp: React.FC = () => {
  const categories = Array.from(new Set(skills.map(s => s.category)));

  return (
    <div className="h-full w-full bg-background text-onBackground overflow-y-auto custom-scrollbar">
      <div className="max-w-4xl mx-auto p-6 pb-24 space-y-8">
        <div className="space-y-2">
          <h2 className="text-3xl font-bold text-primary">Habilidades Técnicas</h2>
          <p className="text-onSurfaceVariant">Mi arsenal tecnológico y competencias profesionales</p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {categories.map((category, catIndex) => (
            <motion.div 
              key={category}
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: catIndex * 0.1 }}
              className="bg-surfaceVariant/30 rounded-3xl p-6 space-y-6"
            >
              <h3 className="text-xl font-bold text-primaryContainer bg-onPrimaryContainer px-4 py-1 rounded-full w-fit">
                {category}
              </h3>
              <div className="space-y-4">
                {skills.filter(s => s.category === category).map((skill, index) => (
                  <div key={skill.name} className="space-y-2">
                    <div className="flex justify-between text-sm font-medium">
                      <span>{skill.name}</span>
                      <span className="text-primary">{skill.level}%</span>
                    </div>
                    <div className="h-2 bg-surfaceVariant rounded-full overflow-hidden">
                      <motion.div 
                        initial={{ width: 0 }}
                        animate={{ width: `${skill.level}%` }}
                        transition={{ duration: 1, delay: 0.5 + (index * 0.1) }}
                        className="h-full bg-primary rounded-full"
                      />
                    </div>
                  </div>
                ))}
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default SkillsApp;
