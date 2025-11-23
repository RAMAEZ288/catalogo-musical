// tailwind.config.js (reemplazo definitivo)
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  // safelist: strings + patterns para asegurar que Tailwind incluya estas clases dinámicas
  safelist: [
    'shadow-2xl','ring','ring-offset-2','ring-indigo-300',
    'bg-indigo-600','bg-indigo-700','transition','duration-300','duration-200',
    // patrones para scale/rotate/translate/bg/ring que añadimos desde JS
    { pattern: /^scale-/ },
    { pattern: /^rotate-/ },
    { pattern: /^translate-/ },
    { pattern: /^bg-/ },
    { pattern: /^ring-/ }
  ]
};
