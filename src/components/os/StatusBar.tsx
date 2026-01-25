import React, { useState, useEffect } from 'react';
import { format } from 'date-fns';
import Icon from '@/components/ui/Icon';

const StatusBar: React.FC = () => {
  const [time, setTime] = useState(new Date());

  useEffect(() => {
    const timer = setInterval(() => {
      setTime(new Date());
    }, 1000);
    return () => clearInterval(timer);
  }, []);

  return (
    <div className="w-full h-8 px-4 flex justify-between items-center text-white/90 text-sm select-none z-50 bg-black/20 backdrop-blur-sm fixed top-0 left-0">
      <div className="font-medium tracking-wide">
        {format(time, 'HH:mm')}
      </div>
      <div className="flex items-center gap-2">
        <Icon name="signal_cellular_alt" size={18} className="opacity-90" />
        <Icon name="wifi" size={18} className="opacity-90" />
        <div className="flex items-center gap-1">
          <span className="text-xs">100%</span>
          <Icon name="battery_full" size={18} className="opacity-90" />
        </div>
      </div>
    </div>
  );
};

export default StatusBar;
