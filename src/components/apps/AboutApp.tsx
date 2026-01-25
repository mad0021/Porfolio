import React from 'react';
import { Mail, MapPin, Globe, Github, Linkedin } from 'lucide-react';
import { motion } from 'framer-motion';

const AboutApp: React.FC = () => {
  return (
    <div className="h-full w-full bg-background text-onBackground overflow-y-auto custom-scrollbar">
      <div className="max-w-4xl mx-auto p-6 pb-24 space-y-8">
        {/* Header Section */}
        <div className="flex flex-col md:flex-row items-center gap-8 py-8">
          <motion.div 
            initial={{ scale: 0 }}
            animate={{ scale: 1 }}
            transition={{ type: "spring", stiffness: 260, damping: 20 }}
            className="w-48 h-48 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0"
          >
            <img 
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2787&auto=format&fit=crop" 
              alt="Profile" 
              className="w-full h-full object-cover"
            />
          </motion.div>
          
          <div className="text-center md:text-left space-y-4">
            <motion.h1 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              className="text-4xl md:text-5xl font-bold text-primary"
            >
              Hola, soy WinterOS
            </motion.h1>
            <motion.h2 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.1 }}
              className="text-xl md:text-2xl text-onSurfaceVariant font-medium"
            >
              Full Stack Developer & UI/UX Enthusiast
            </motion.h2>
            <motion.p 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.2 }}
              className="text-onSurfaceVariant/80 max-w-lg leading-relaxed"
            >
              Apasionado por crear experiencias web únicas y funcionales. 
              Especializado en el ecosistema React y diseño de interfaces modernas.
              Siempre buscando aprender nuevas tecnologías y mejorar mis habilidades.
            </motion.p>
          </div>
        </div>

        {/* Contact Cards */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
          <ContactCard 
            icon={<Mail className="text-primary" />} 
            title="Email" 
            value="contact@winteros.dev" 
            href="mailto:contact@winteros.dev"
            delay={0.3}
          />
          <ContactCard 
            icon={<MapPin className="text-primary" />} 
            title="Ubicación" 
            value="Madrid, España" 
            delay={0.4}
          />
          <ContactCard 
            icon={<Github className="text-primary" />} 
            title="GitHub" 
            value="github.com/winteros" 
            href="https://github.com"
            delay={0.5}
          />
          <ContactCard 
            icon={<Linkedin className="text-primary" />} 
            title="LinkedIn" 
            value="linkedin.com/in/winteros" 
            href="https://linkedin.com"
            delay={0.6}
          />
        </div>

        {/* Bio Section */}
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.7 }}
          className="bg-surfaceVariant/30 rounded-3xl p-6 md:p-8 space-y-4"
        >
          <h3 className="text-2xl font-bold text-primary">Sobre mí</h3>
          <p className="leading-relaxed text-onSurface">
            Con más de 5 años de experiencia en el desarrollo de software, he trabajado en diversos proyectos 
            que van desde aplicaciones web pequeñas hasta sistemas empresariales complejos. 
            Mi enfoque se centra en escribir código limpio, mantenible y eficiente, 
            sin sacrificar la estética y la usabilidad.
          </p>
          <p className="leading-relaxed text-onSurface">
            Cuando no estoy programando, me encontrarás explorando nuevas tendencias de diseño, 
            jugando videojuegos o aprendiendo sobre inteligencia artificial.
          </p>
        </motion.div>
      </div>
    </div>
  );
};

const ContactCard = ({ icon, title, value, href, delay }: { icon: React.ReactNode, title: string, value: string, href?: string, delay: number }) => {
  const Content = (
    <div className="flex items-center gap-4 p-4 bg-surfaceVariant/50 hover:bg-surfaceVariant/80 rounded-2xl transition-colors cursor-pointer border border-white/5">
      <div className="p-3 bg-surface rounded-xl">
        {icon}
      </div>
      <div>
        <h4 className="text-sm text-onSurfaceVariant font-medium">{title}</h4>
        <p className="text-onSurface font-medium">{value}</p>
      </div>
    </div>
  );

  return (
    <motion.div
      initial={{ opacity: 0, x: -20 }}
      animate={{ opacity: 1, x: 0 }}
      transition={{ delay }}
    >
      {href ? <a href={href} target="_blank" rel="noopener noreferrer">{Content}</a> : Content}
    </motion.div>
  );
};

export default AboutApp;
