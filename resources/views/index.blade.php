<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Buscar Proyecto - Misión Paz</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-secondary": "#ffffff",
            "primary-fixed": "#dde1ff",
            "surface-container-low": "#f3f3f3",
            "on-primary": "#ffffff",
            "on-background": "#1a1c1c",
            "tertiary-fixed": "#dce3ea",
            "surface-tint": "#4559a9",
            "tertiary-fixed-dim": "#c0c7ce",
            "inverse-primary": "#b7c4ff",
            "secondary-container": "#6fbcff",
            "on-tertiary": "#ffffff",
            "surface-container-highest": "#e2e2e2",
            "primary": "#021f71",
            "on-primary-fixed": "#001453",
            "tertiary-container": "#394045",
            "secondary": "#00639a",
            "secondary-fixed-dim": "#95ccff",
            "inverse-surface": "#2f3131",
            "on-error": "#ffffff",
            "on-tertiary-fixed-variant": "#40484d",
            "on-error-container": "#93000a",
            "secondary-fixed": "#cde5ff",
            "error-container": "#ffdad6",
            "surface-dim": "#dadada",
            "primary-container": "#223887",
            "background": "#f9f9f9",
            "on-secondary-fixed": "#001d32",
            "outline-variant": "#c5c5d3",
            "on-surface": "#1a1c1c",
            "surface-variant": "#e2e2e2",
            "on-primary-container": "#92a6fb",
            "on-surface-variant": "#454651",
            "surface-bright": "#f9f9f9",
            "outline": "#757682",
            "inverse-on-surface": "#f1f1f1",
            "primary-fixed-dim": "#b7c4ff",
            "on-tertiary-fixed": "#151c21",
            "surface-container": "#eeeeee",
            "surface": "#f9f9f9",
            "on-primary-fixed-variant": "#2b408f",
            "surface-container-lowest": "#ffffff",
            "on-tertiary-container": "#a4abb2",
            "on-secondary-container": "#004b76",
            "tertiary": "#232a2f",
            "on-secondary-fixed-variant": "#004a75",
            "error": "#ba1a1a",
            "surface-container-high": "#e8e8e8"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px",
            "card": "16px",
            "btn": "8px"
          },
          "spacing": {
            "sm": "12px",
            "md": "24px",
            "base": "8px",
            "gutter": "24px",
            "margin-mobile": "20px",
            "xs": "4px",
            "lg": "48px",
            "xl": "80px",
            "margin-desktop": "64px"
          },
          "fontFamily": {
            "body-md": ["Hanken Grotesk"],
            "headline-lg": ["Hanken Grotesk"],
            "headline-lg-mobile": ["Hanken Grotesk"],
            "headline-md": ["Hanken Grotesk"],
            "display-lg": ["Hanken Grotesk"],
            "label-md": ["Hanken Grotesk"],
            "label-sm": ["Hanken Grotesk"],
            "body-lg": ["Hanken Grotesk"]
          },
          "fontSize": {
            "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
            "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
            "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
            "label-sm": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
          }
        }
      }
    }
  </script>
  <style>
    body {
      background-color: #f4f4f4;
      /* Minimalist background base */
    }

    .glass-panel {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(229, 229, 229, 0.5);
    }

    .ambient-shadow-lvl-1 {
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .ambient-shadow-lvl-2 {
      box-shadow: 0px 4px 12px rgba(2, 31, 113, 0.06);
    }
  </style>
</head>

<body class="font-body-md text-on-surface antialiased min-h-screen flex flex-col">
  <!-- TopNavBar -->
  <header class="bg-surface-container-lowest border-b border-outline-variant w-full sticky top-0 z-50">
    <div class="flex justify-between items-center w-full px-gutter max-w-[1280px] mx-auto h-20">
      <div class="flex items-center gap-md">
        <a class="flex items-center gap-2" href="#">
          <img alt="Logo de Misión Paz" class="h-10 object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuwKSYQSC2Jn6iIPKHRHjzt79qtTfeT6kZUw-21ALowtoCH7-sQ7AbtX1tXkkfTuh_5Og4t2aN_VKqPS_-1nv8GB72BlH751L1hFbfmTuP372ojSRrYwztbyt-iKAiZ5JEHV_0M9NT-3o7zdFGBG5_-GGKiuWpAcYIRV8BQlq6K_qik2ZHo5LODn3cKFXDJT98ASZrTUb03jIst4D384F_ZzjYJX8y-ZgDLh8te39iC_vMimgiTKZghy4PcglLX-tqNX4" />
        </a>
      </div>
      <nav class="hidden md:flex items-center gap-lg">
        <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md hover:bg-surface-container-low px-3 py-2 rounded-md"
          href="#">Inicio</a>
        <!-- Active State Navigation -->
        <a class="text-primary font-bold border-b-2 border-primary pb-1 transition-colors font-body-md text-body-md hover:bg-surface-container-low px-3 py-2 rounded-md scale-[0.98] duration-200 ease-in-out"
          href="#">Repositorio</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md hover:bg-surface-container-low px-3 py-2 rounded-md"
          href="#">Acerca de</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md hover:bg-surface-container-low px-3 py-2 rounded-md"
          href="#">Contacto</a>
      </nav>
      <div class="flex items-center gap-4">
        <button class="md:hidden text-on-surface">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">menu</span>
        </button>
        <button onclick="location.href = '{{ route('login') }}'" class="hidden md:flex bg-primary text-on-primary px-6 py-2 rounded-btn font-label-md text-label-md hover:bg-secondary transition-colors items-center gap-2 ambient-shadow-lvl-2">
          Acceso
        </button>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <main class="flex-grow w-full max-w-[1280px] mx-auto px-gutter py-xl">
    <!-- Hero Search Section -->
    <section class="mb-xl flex flex-col items-center text-center">
      <h1 class="font-display-lg text-display-lg text-primary mb-md">Explorar Repositorio</h1>
      <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-lg">Encuentra investigaciones, proyectos
        de grado y publicaciones académicas de nuestra comunidad universitaria.</p>
      <div class="w-full max-w-3xl flex flex-col sm:flex-row gap-md">
        <div class="relative flex-grow">
          <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
            style="font-variation-settings: 'FILL' 0;">search</span>
          <input
            class="w-full pl-12 pr-4 py-4 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none"
            placeholder="Buscar proyecto por nombre, palabra clave..." type="text" />
        </div>
        <div class="flex gap-sm w-full sm:w-auto">
          <button
            class="flex-1 sm:flex-none bg-primary text-on-primary px-8 py-4 rounded-btn font-label-md text-label-md hover:bg-secondary transition-colors ambient-shadow-lvl-2 whitespace-nowrap">
            Buscar
          </button>
          <button
            class="flex-1 sm:flex-none border-2 border-secondary text-secondary bg-transparent px-6 py-4 rounded-btn font-label-md text-label-md hover:bg-secondary-fixed transition-colors whitespace-nowrap">
            Proyecto al azar
          </button>
        </div>
      </div>
    </section>
    <!-- Two Column Layout -->
    <div class="flex flex-col lg:flex-row gap-lg items-start">
      <!-- Left Column: Filters -->
      <aside
        class="w-full lg:w-1/4 bg-surface-container-lowest p-md rounded-card border border-surface-variant ambient-shadow-lvl-1 sticky top-28">
        <div class="flex items-center justify-between mb-md">
          <h2 class="font-headline-md text-headline-md text-on-surface">Filtros</h2>
          <span class="material-symbols-outlined text-outline"
            style="font-variation-settings: 'FILL' 0;">filter_list</span>
        </div>
        <div class="space-y-md">
          <!-- Academic Program -->
          <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">Programa Académico</label>
            <select
              class="w-full p-3 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none text-on-surface">
              <option value="">Todos los programas</option>
              <option value="teologia">Teología</option>
              <option value="psicologia">Psicología</option>
              <option value="administracion">Administración</option>
            </select>
          </div>
          <!-- Author -->
          <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">Autor</label>
            <input
              class="w-full p-3 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none text-on-surface"
              placeholder="Nombre del autor" type="text" />
          </div>
          <!-- Project Type -->
          <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">Tipo de Proyecto</label>
            <select
              class="w-full p-3 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none text-on-surface">
              <option value="">Todos los tipos</option>
              <option value="pi">Proyecto de Investigación (PI)</option>
              <option value="pg">Proyecto de Grado (PG)</option>
              <option value="pe">Proyecto de Extensión (PE)</option>
            </select>
          </div>
          <!-- Date Range -->
          <div class="flex flex-col gap-xs">
            <label class="font-label-md text-label-md text-on-surface-variant">Rango de Fechas</label>
            <div class="flex items-center gap-2">
              <input
                class="w-1/2 p-3 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none text-on-surface"
                placeholder="Desde" type="number" />
              <span class="text-outline-variant">-</span>
              <input
                class="w-1/2 p-3 rounded-btn border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-4 focus:ring-secondary-fixed-dim/20 transition-all font-body-md text-body-md outline-none text-on-surface"
                placeholder="Hasta" type="number" />
            </div>
          </div>
        </div>
        <div class="mt-lg flex flex-col gap-sm">
          <button
            class="w-full bg-primary text-on-primary px-6 py-3 rounded-btn font-label-md text-label-md hover:bg-secondary transition-colors ambient-shadow-lvl-2">
            Aplicar filtros
          </button>
          <button
            class="w-full bg-transparent text-secondary hover:text-primary px-6 py-3 rounded-btn font-label-md text-label-md transition-colors text-center">
            Limpiar filtros
          </button>
        </div>
      </aside>
      <!-- Right Column: Results Grid -->
      <div class="w-full lg:w-3/4">
        <div class="flex justify-between items-center mb-md">
          <span class="font-body-md text-body-md text-on-surface-variant">Mostrando <strong
              class="text-on-surface">24</strong> resultados</span>
          <div class="flex items-center gap-2">
            <span class="font-label-sm text-label-sm text-on-surface-variant">Ordenar por:</span>
            <select
              class="p-2 rounded-btn border-none bg-transparent font-label-md text-label-md text-primary outline-none cursor-pointer hover:bg-surface-container-low transition-colors">
              <option>Más recientes</option>
              <option>A - Z</option>
              <option>Más citados</option>
            </select>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-md">
          <!-- Card 1 -->
          <article
            class="bg-surface-container-lowest p-md rounded-card border border-surface-variant ambient-shadow-lvl-2 hover:-translate-y-1 transition-transform duration-300 flex flex-col h-full cursor-pointer group">
            <div class="flex items-start justify-between mb-sm">
              <span
                class="bg-secondary-fixed text-on-secondary-fixed px-2 py-1 rounded-full font-label-sm text-label-sm">Proyecto
                de Investigación</span>
              <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                style="font-variation-settings: 'FILL' 0;">bookmark_add</span>
            </div>
            <h3
              class="font-headline-md text-headline-md-mobile text-on-surface mb-2 group-hover:text-secondary transition-colors line-clamp-2">
              Impacto Psicosocial post-pandemia en comunidades rurales</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-md line-clamp-3 flex-grow">Un análisis
              detallado sobre los efectos a largo plazo del aislamiento en el desarrollo cognitivo de menores en zonas
              de difícil acceso en el Valle del Cauca.</p>
            <div class="mt-auto border-t border-outline-variant pt-sm flex flex-col gap-xs">
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">school</span>
                <span class="font-label-sm text-label-sm">Psicología</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">person</span>
                <span class="font-label-sm text-label-sm">Dra. María Fernández</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm"
                  style="font-variation-settings: 'FILL' 0;">calendar_today</span>
                <span class="font-label-sm text-label-sm">Octubre 2023</span>
              </div>
            </div>
          </article>
          <!-- Card 2 -->
          <article
            class="bg-surface-container-lowest p-md rounded-card border border-surface-variant ambient-shadow-lvl-2 hover:-translate-y-1 transition-transform duration-300 flex flex-col h-full cursor-pointer group">
            <div class="flex items-start justify-between mb-sm">
              <span
                class="bg-primary-fixed text-on-primary-fixed px-2 py-1 rounded-full font-label-sm text-label-sm">Proyecto
                de Grado</span>
              <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                style="font-variation-settings: 'FILL' 0;">bookmark_add</span>
            </div>
            <h3
              class="font-headline-md text-headline-md-mobile text-on-surface mb-2 group-hover:text-secondary transition-colors line-clamp-2">
              Modelo de Gestión Administrativa para Pymes Teocéntricas</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-md line-clamp-3 flex-grow">Propuesta
              metodológica para la integración de valores cristianos en la estructura organizacional y toma de
              decisiones empresariales.</p>
            <div class="mt-auto border-t border-outline-variant pt-sm flex flex-col gap-xs">
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">school</span>
                <span class="font-label-sm text-label-sm">Administración</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">person</span>
                <span class="font-label-sm text-label-sm">Carlos Ramírez, Ana Silva</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm"
                  style="font-variation-settings: 'FILL' 0;">calendar_today</span>
                <span class="font-label-sm text-label-sm">Agosto 2023</span>
              </div>
            </div>
          </article>
          <!-- Card 3 -->
          <article
            class="bg-surface-container-lowest p-md rounded-card border border-surface-variant ambient-shadow-lvl-2 hover:-translate-y-1 transition-transform duration-300 flex flex-col h-full cursor-pointer group">
            <div class="flex items-start justify-between mb-sm">
              <span
                class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-1 rounded-full font-label-sm text-label-sm">Proyecto
                de Extensión</span>
              <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                style="font-variation-settings: 'FILL' 0;">bookmark_add</span>
            </div>
            <h3
              class="font-headline-md text-headline-md-mobile text-on-surface mb-2 group-hover:text-secondary transition-colors line-clamp-2">
              Exégesis Aplicada: Liderazgo y Servicio en el Siglo XXI</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-md line-clamp-3 flex-grow">Estudio
              hermenéutico de los textos paulinos aplicados a modelos contemporáneos de liderazgo servicial en
              instituciones educativas.</p>
            <div class="mt-auto border-t border-outline-variant pt-sm flex flex-col gap-xs">
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">school</span>
                <span class="font-label-sm text-label-sm">Teología</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0;">person</span>
                <span class="font-label-sm text-label-sm">Pr. Samuel Ortiz</span>
              </div>
              <div class="flex items-center gap-2 text-on-surface-variant">
                <span class="material-symbols-outlined text-sm"
                  style="font-variation-settings: 'FILL' 0;">calendar_today</span>
                <span class="font-label-sm text-label-sm">Febrero 2024</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Pagination Minimalist -->
        <div class="flex justify-center items-center gap-4 mt-xl">
          <button
            class="p-2 rounded-full border border-outline-variant text-outline-variant hover:text-primary hover:border-primary transition-colors"
            disabled="">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">chevron_left</span>
          </button>
          <div class="flex items-center gap-2">
            <button
              class="w-10 h-10 rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center ambient-shadow-lvl-1">1</button>
            <button
              class="w-10 h-10 rounded-full text-on-surface-variant hover:bg-surface-container-low font-label-md text-label-md flex items-center justify-center transition-colors">2</button>
            <button
              class="w-10 h-10 rounded-full text-on-surface-variant hover:bg-surface-container-low font-label-md text-label-md flex items-center justify-center transition-colors">3</button>
            <span class="text-on-surface-variant">...</span>
            <button
              class="w-10 h-10 rounded-full text-on-surface-variant hover:bg-surface-container-low font-label-md text-label-md flex items-center justify-center transition-colors">8</button>
          </div>
          <button
            class="p-2 rounded-full border border-outline-variant text-on-surface hover:text-primary hover:border-primary transition-colors">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">chevron_right</span>
          </button>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer class="bg-surface-container-highest mt-xl w-full">
    <div
      class="w-full py-lg px-gutter flex flex-col md:flex-row justify-between items-start gap-md max-w-[1280px] mx-auto">
      <div class="flex flex-col gap-sm max-w-sm">
        <span class="text-headline-sm font-headline-sm font-semibold text-primary">Misión Paz - Corporación
          Universitaria</span>
        <p class="font-body-md text-body-md text-on-surface-variant">© 2024 Misión Paz - Corporación Universitaria.
          Todos los derechos reservados. Institución de Educación Superior sujeta a inspección y vigilancia por el
          Ministerio de Educación Nacional.</p>
      </div>
      <div class="flex flex-col sm:flex-row gap-lg mt-md md:mt-0">
        <nav class="flex flex-col gap-2">
          <a class="font-label-sm text-label-sm text-on-surface hover:text-secondary transition-colors"
            href="#">Política de Privacidad</a>
          <a class="font-label-sm text-label-sm text-on-surface hover:text-secondary transition-colors"
            href="#">Términos de Uso</a>
          <a class="font-label-sm text-label-sm text-on-surface hover:text-secondary transition-colors" href="#">Mapa
            del Sitio</a>
          <a class="font-label-sm text-label-sm text-on-surface hover:text-secondary transition-colors"
            href="#">Transparencia</a>
        </nav>
      </div>
    </div>
  </footer>
</body>

</html>