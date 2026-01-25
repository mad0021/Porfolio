import type { AppConfig } from '@/types';
import ProjectsApp from '@/components/apps/ProjectsApp';
import SkillsApp from '@/components/apps/SkillsApp';
import AboutApp from '@/components/apps/AboutApp';
import CVApp from '@/components/apps/CVApp';
import LinkedinApp from '@/components/apps/LinkedinApp';
import GithubApp from '@/components/apps/GithubApp';
import SettingsApp from '@/components/apps/SettingsApp';

export const apps: AppConfig[] = [
  {
    id: 'projects',
    title: 'Proyectos',
    icon: 'folder',
    component: ProjectsApp,
    showInDock: true,
    color: "#FF6B6B",
  },
  {
    id: 'skills',
    title: 'Skills',
    icon: 'build',
    component: SkillsApp,
    showInDock: true,
    color: "#4ECDC4",
  },
  {
    id: 'about',
    title: 'Sobre mí',
    icon: 'person',
    component: AboutApp,
    showInDock: true,
    color: "#6C5CE7",
  },
  {
    id: 'cv',
    title: 'CV',
    icon: 'description',
    component: CVApp,
    showInDock: true,
    color: "#FFE66D",
  },
  {
    id: 'linkedin',
    title: 'LinkedIn',
    icon: 'link',
    component: LinkedinApp,
    showInDock: true,
    color: "#0077B5",
  },
  {
    id: 'github',
    title: 'GitHub',
    icon: 'code',
    component: GithubApp,
    showInDock: true,
    color: "#333333",
  },
  {
    id: 'settings',
    title: 'Ajustes',
    icon: 'settings',
    component: SettingsApp,
    showInDock: true,
    color: "#A8A8A8",
  },
];

export const getAppConfig = (id: string): AppConfig | undefined => {
  return apps.find(app => app.id === id);
};
