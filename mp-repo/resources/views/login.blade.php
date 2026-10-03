<!DOCTYPE html>

<html class="h-full bg-surface" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Iniciar Sesión - Repositorio de Proyectos Misión Paz</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Source+Sans+3:wght@400;600&amp;display=swap"
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
                        "tertiary-fixed": "#e2e2e2",
                        "inverse-on-surface": "#f1f1f1",
                        "background": "#f9f9f9",
                        "outline-variant": "#c5c5d3",
                        "surface-container-highest": "#e2e2e2",
                        "primary": "#021f71",
                        "on-secondary-fixed": "#001d32",
                        "tertiary": "#272929",
                        "on-primary-container": "#92a6fb",
                        "on-secondary-fixed-variant": "#004a75",
                        "error-container": "#ffdad6",
                        "surface-tint": "#4559a9",
                        "surface-container-high": "#e8e8e8",
                        "on-primary-fixed-variant": "#2b408f",
                        "primary-fixed-dim": "#b7c4ff",
                        "surface-dim": "#dadada",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "secondary-container": "#6fbcff",
                        "inverse-surface": "#303030",
                        "on-surface": "#1b1b1b",
                        "on-tertiary-fixed-variant": "#454747",
                        "on-primary-fixed": "#001453",
                        "surface-container": "#eeeeee",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#b7c4ff",
                        "tertiary-container": "#3d3f3f",
                        "surface-container-low": "#f3f3f3",
                        "on-tertiary-container": "#a9aaaa",
                        "tertiary-fixed-dim": "#c6c6c7",
                        "surface-bright": "#f9f9f9",
                        "on-error": "#ffffff",
                        "secondary-fixed": "#cde5ff",
                        "surface": "#f9f9f9",
                        "on-background": "#1b1b1b",
                        "on-surface-variant": "#454651",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#dde1ff",
                        "surface-variant": "#e2e2e2",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#004b76",
                        "outline": "#757682",
                        "on-tertiary-fixed": "#1a1c1c",
                        "secondary": "#00639a",
                        "primary-container": "#223887",
                        "secondary-fixed-dim": "#95ccff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "xxl": "48px",
                        "md": "16px",
                        "xs": "4px",
                        "base": "4px",
                        "margin-desktop": "64px",
                        "lg": "24px",
                        "xl": "32px",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "caption": ["\"Source Sans 3\""],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-lg": ["\"Source Sans 3\""],
                        "body-md": ["\"Source Sans 3\""],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["14px", { "lineHeight": "20px", "fontWeight": "500" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "caption": ["12px", { "lineHeight": "16px", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="h-full flex flex-col font-body-md text-on-surface antialiased bg-background">
    <!-- Intent: Transactional/Login. Suppressing Nav Shell (TopAppBar) as per Semantic Shell Mandate -->
    <main class="flex-grow flex items-center justify-center p-margin-mobile md:p-margin-desktop">
        <div
            class="w-full max-w-md bg-surface-container-lowest border border-surface-variant rounded-xl p-lg md:p-xl flex flex-col items-center">
            <!-- Logo -->
            <div class="mb-lg">
                <img alt="Logotipo Corporación Universitaria Misión Paz" class="h-24 object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlB7oZiI7LdHwGdFs3m3J_RROWRkqUfwrcMCu6ULtZI6VVdUWURyIzXk7tCyMAqRefBZ7H0-NUdF6pV_IAdlZawVMzIAMVHAu8AdTBuRfu6yZGyPAsShEDc2QHdU_-gLG-eALkYXOqK89GxV88WIcfIdNn22BbSn7CWekkrCcWvUetcqimYPDG2tqaS2RfWHTvllIn5AQea_VIZBYp8egAR7MIpaA_Ealq6RsjeluPfH4SBYF7TM4Uj2WKdLvVDmqhqw" />
            </div>
            <!-- Header -->
            <div class="text-center mb-xl">
                <h1 class="font-headline-md text-headline-md text-on-surface mb-sm">Bienvenido al Repositorio de
                    Proyectos</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Ingresa tus credenciales institucionales
                    para continuar</p>
            </div>
            <!-- Form -->
            <form class="w-full space-y-md" action="{{ route('dashboard') }}">
                <!-- Email -->
                <div class="flex flex-col space-y-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="email">Correo Institucional</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline" data-icon="mail">mail</span>
                        </div>
                        <input
                            class="w-full pl-xl pr-sm py-sm bg-surface-container-lowest border border-outline-variant rounded-DEFAULT focus:border-secondary focus:ring-2 focus:ring-secondary/10 font-body-md text-body-md outline-none transition-all"
                            id="email" name="email" placeholder="usuario@misionpaz.edu.co" type="email" />
                    </div>
                </div>
                <!-- Password -->
                <div class="flex flex-col space-y-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="password">Contraseña</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline" data-icon="lock">lock</span>
                        </div>
                        <input
                            class="w-full pl-xl pr-xl py-sm bg-surface-container-lowest border border-outline-variant rounded-DEFAULT focus:border-secondary focus:ring-2 focus:ring-secondary/10 font-body-md text-body-md outline-none transition-all"
                            id="password" name="password" placeholder="••••••••" type="password" />
                        <div class="absolute inset-y-0 right-0 pr-sm flex items-center">
                            <button class="text-outline hover:text-on-surface transition-colors focus:outline-none"
                                onclick="togglePassword()" type="button">
                                <span class="material-symbols-outlined" data-icon="visibility"
                                    id="visibility-icon">visibility</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <button class="w-full bg-primary-container text-on-primary py-sm rounded-DEFAULT font-label-md text-label-md hover:shadow-[0px_4px_12px_rgba(0,0,0,0.05)] transition-all flex items-center justify-center mt-lg"
                    type="submit">
                    Iniciar Sesión
                </button>
            </form>
            <!-- Links -->
            <div class="mt-md w-full text-center">
                <a class="font-label-md text-label-md text-secondary hover:underline" href="#">¿Olvidaste tu
                    contraseña?</a>
            </div>
            <!-- Divider -->
            <div class="w-full flex items-center my-lg">
                <div class="flex-grow border-t border-outline-variant"></div>
                <span class="px-md font-caption text-caption text-on-surface-variant">o</span>
                <div class="flex-grow border-t border-outline-variant"></div>
            </div>
            <!-- Google Login -->
            <button
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface py-sm rounded-DEFAULT font-label-md text-label-md hover:bg-surface-container-low hover:shadow-[0px_4px_12px_rgba(0,0,0,0.05)] transition-all flex items-center justify-center space-x-sm"
                type="button">
                <svg class="w-5 h-5" viewbox="0 0 24 24">
                    <path
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                        fill="#4285F4"></path>
                    <path
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                        fill="#34A853"></path>
                    <path
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                        fill="#FBBC05"></path>
                    <path
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                        fill="#EA4335"></path>
                    <path d="M1 1h22v22H1z" fill="none"></path>
                </svg>
                <span>Acceso con Google Workspace</span>
            </button>
        </div>
    </main>
    <!-- Footer -->
    <footer
        class="bg-surface-container-low dark:bg-surface-dim text-secondary dark:text-secondary-fixed-dim font-body-md text-body-md w-full bottom-0 border-t border-outline-variant dark:border-outline flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-lg w-full transition-opacity duration-200">
        <p class="font-caption text-caption mb-md md:mb-0">
            © 2026 <a href="{{ route('index') }}">Repositorio de Proyectos Misión Paz. Institución de Educación
                Superior. </a>
        </p>
        <div class="flex space-x-md">
            <a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary dark:hover:text-primary-fixed hover:underline font-body-md text-body-md"
                href="#">Privacidad</a>
            <a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary dark:hover:text-primary-fixed hover:underline font-body-md text-body-md"
                href="#">Términos de Uso</a>
            <a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary dark:hover:text-primary-fixed hover:underline font-body-md text-body-md"
                href="#">Soporte Técnico</a>
        </div>
    </footer>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const visibilityIcon = document.getElementById('visibility-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                visibilityIcon.textContent = 'visibility_off';
                visibilityIcon.setAttribute('data-icon', 'visibility_off');
            } else {
                passwordInput.type = 'password';
                visibilityIcon.textContent = 'visibility';
                visibilityIcon.setAttribute('data-icon', 'visibility');
            }
        }
    </script>
</body>

</html>