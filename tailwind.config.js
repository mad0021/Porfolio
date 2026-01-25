/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        // Material Youish colors (can be tweaked)
        primary: '#D0BCFF', // Example generic purple
        onPrimary: '#381E72',
        primaryContainer: '#4F378B',
        onPrimaryContainer: '#EADDFF',
        background: '#141218',
        surface: '#141218', 
        onSurface: '#E6E1E5',
        surfaceVariant: '#49454F',
        onSurfaceVariant: '#CAC4D0',
        outline: '#938F99',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'], // User needs this font, or we fallback
      }
    },
  },
  plugins: [],
}
