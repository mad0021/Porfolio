import React from 'react';
import { OSProvider } from '@/context/OSContext';
import Desktop from '@/components/layout/Desktop';

function App() {
  return (
    <OSProvider>
      <Desktop />
    </OSProvider>
  );
}

export default App;
