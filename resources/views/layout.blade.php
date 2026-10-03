<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Repositorio Misión Paz - Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Inter:wght@400;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-tint": "#4559a9",
                        "on-tertiary-fixed-variant": "#454747",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed": "#1a1c1c",
                        "on-background": "#1a1c1c",
                        "tertiary-fixed": "#e2e2e2",
                        "inverse-on-surface": "#f1f1f1",
                        "secondary-fixed-dim": "#95ccff",
                        "surface": "#f9f9f9",
                        "on-surface": "#1a1c1c",
                        "outline": "#757682",
                        "surface-container-low": "#f3f3f3",
                        "on-primary-fixed-variant": "#2b408f",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#c6c6c7",
                        "on-tertiary-container": "#a9aaaa",
                        "primary": "#021f71",
                        "surface-bright": "#f9f9f9",
                        "surface-container-highest": "#e2e2e2",
                        "on-surface-variant": "#454651",
                        "surface-container": "#eeeeee",
                        "error": "#ba1a1a",
                        "inverse-surface": "#2f3131",
                        "on-primary-container": "#92a6fb",
                        "primary-fixed-dim": "#b7c4ff",
                        "secondary": "#00639a",
                        "surface-container-high": "#e8e8e8",
                        "on-secondary-fixed-variant": "#004a75",
                        "on-primary-fixed": "#001453",
                        "secondary-container": "#6fbcff",
                        "primary-container": "#223887",
                        "background": "#f9f9f9",
                        "on-secondary-fixed": "#001d32",
                        "primary-fixed": "#dde1ff",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "surface-container-lowest": "#ffffff",
                        "inverse-primary": "#b7c4ff",
                        "on-secondary-container": "#004b76",
                        "tertiary": "#27292a",
                        "tertiary-container": "#3d3f3f",
                        "surface-dim": "#dadada",
                        "secondary-fixed": "#cde5ff",
                        "surface-variant": "#e2e2e2",
                        "outline-variant": "#c5c5d3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "gutter": "24px",
                        "margin-desktop": "64px",
                        "unit": "8px",
                        "margin-mobile": "20px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "headline-sm": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "body-sm": ["Inter"],
                        "headline-xl": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-xl": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface text-on-surface font-body-md min-h-screen flex">
    <!-- SideNavBar (from JSON) -->
    <nav
        class="hidden md:flex flex-col h-full py-6 border-r border-outline-variant bg-surface-container-low w-64 fixed left-0 top-0 bottom-0 z-10">
        <!-- Header -->
        <div class="px-6 mb-8 flex flex-col items-center">
            <img alt="Escudo Institucional Misión Paz" class="w-24 h-24 object-contain mb-4"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgzatdLugUL1c3W57vWXw9taxVZmQzs6rgANokY3ORnIPc6q0cx1UsHawN2JzxQ92dEYn1FTd9Fe0hQoCvUpbc5okqEHIwRE1GROR6QnuzJ9PezDySRAvY454z-w9Tt1cwE1wnfnez5G8SFU40Xs6r0TgwpR4GDgUdf7SJxE4s4fieAqKpdJJqjiY83lNqcKV3NNamO0CikbN42sNrpndsFb_sqYvwMnaad5ajkFKZAyp-lmOpVKtM_1DymHNhOw8ChQ" />
            <h1 class="font-headline-md text-headline-md font-bold text-primary text-center">Repositorio</h1>
            <p class="font-body-sm text-body-sm text-on-surface-variant text-center mt-1">Misión Paz</p>
        </div>
        <!-- Navigation Tabs -->
        <ul class="flex-1 px-2 space-y-1">
            <!-- Active Tab: Inicio -->
            <li>
                <a class="flex items-center gap-3 bg-primary-container text-on-primary-container rounded-xl px-4 py-3 mx-2 active:scale-98 transition-transform duration-100 font-label-md text-label-md"
                    href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined" data-weight="fill"
                        style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    Inicio
                </a>
            </li>
            <!-- Inactive Tabs -->
            <li>
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                    href="#">
                    <span class="material-symbols-outlined">folder_open</span>
                    Proyectos
                </a>
            </li>

            <li>
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                    href="{{ route('enlace-publico') }}">
                    <span class="material-symbols-outlined">link</span>
                    Enlace público
                </a>
            </li>

            <li>
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                    href="#">
                    <span class="material-symbols-outlined">school</span>
                    Programas
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                    href="#">
                    <span class="material-symbols-outlined">groups</span>
                    Autores
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                    href="#">
                    <span class="material-symbols-outlined">manage_accounts</span>
                    Usuarios
                </a>
            </li>
        </ul>
        <!-- CTA -->
        <div class="px-6 mb-6">
            <button
                class="w-full bg-primary-container text-on-primary rounded-lg py-3 px-4 font-label-md text-label-md hover:bg-primary-fixed-variant transition-colors shadow-sm">
                Subir Proyecto
            </button>
        </div>
        <!-- Footer Tabs -->
        <div class="px-2 mt-auto border-t border-outline-variant pt-4 space-y-1">
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Configuración
            </a>
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 mx-2 hover:bg-surface-container-highest transition-all rounded-xl active:scale-98 duration-100 font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                Cerrar Sesión
            </a>
        </div>
    </nav>
    <!-- Main Content Area -->
    <main class="flex-1 md:ml-64 p-gutter md:p-margin-desktop bg-surface max-w-container-max w-full">
        <!-- Header Section -->
        <header class="mb-12 flex justify-between items-end border-b border-outline-variant pb-6">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-2">Bienvenido, Dr. Ramírez</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">Resumen general del Repositorio Misión Paz
                </p>
            </div>
            <div class="hidden sm:block">
                <p class="font-body-sm text-body-sm text-on-surface-variant text-right">Última actualización: Hoy, 08:45
                    AM</p>
            </div>
        </header>


        @yield('content')


    </main>
    <!-- Mobile Navigation Placeholder (Hidden on MD+) -->
    <div
        class="md:hidden fixed bottom-0 left-0 right-0 bg-surface-container-lowest border-t border-outline-variant p-2 flex justify-around z-50">
        <a class="flex flex-col items-center p-2 text-primary" href="#">
            <span class="material-symbols-outlined" data-weight="fill"
                style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] mt-1 font-semibold">Inicio</span>
        </a>
        <a class="flex flex-col items-center p-2 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">folder_open</span>
            <span class="text-[10px] mt-1 font-semibold">Proyectos</span>
        </a>
        <a class="flex flex-col items-center p-2 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">menu</span>
            <span class="text-[10px] mt-1 font-semibold">Menú</span>
        </a>
    </div>


    <script>
        // Simple interaction script
        document.querySelector('button[title="Copiar enlace"]')?.addEventListener('click', function () {
            const input = document.getElementById('public-link');
            if (input) {
                input.select();
                document.execCommand('copy');
                const icon = this.querySelector('.material-symbols-outlined');
                if (icon) {
                    const originalText = icon.textContent;
                    icon.textContent = 'check';
                    setTimeout(() => {
                        icon.textContent = originalText;
                    }, 2000);
                }
            }
        });
    </script>
</body>

</html>