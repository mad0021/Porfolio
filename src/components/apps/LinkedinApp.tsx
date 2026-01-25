import React from 'react';

const LinkedinApp: React.FC = () => {
  return (
    <div className="h-full w-full bg-background text-onBackground p-4 flex flex-col items-center justify-center">
      <h2 className="text-2xl font-bold mb-4">LinkedIn</h2>
      <a 
        href="https://linkedin.com" 
        target="_blank" 
        rel="noopener noreferrer"
        className="px-6 py-3 bg-[#0077b5] text-white rounded-full font-medium"
      >
        Ver Perfil
      </a>
    </div>
  );
};

export default LinkedinApp;
