@extends('layout')


@section('content')

    <div class="col-span-1 lg:col-span-9 space-y-xl">

        <!-- Stats Grid -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-md">
            <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-md flex items-center gap-md">
                <div class="p-sm bg-primary/10 text-primary-container rounded-full flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">folder</span>
                </div>
                <div>
                    <p class="font-caption text-caption text-on-surface-variant">Proyectos subidos</p>
                    <p class="font-headline-md text-headline-md text-primary">124</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-md flex items-center gap-md">
                <div class="p-sm bg-secondary/10 text-secondary rounded-full flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">visibility</span>
                </div>
                <div>
                    <p class="font-caption text-caption text-on-surface-variant">Vistas totales</p>
                    <p class="font-headline-md text-headline-md text-primary">8,402</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-md flex items-center gap-md">
                <div class="p-sm bg-primary-container/10 text-primary-container rounded-full flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">star</span>
                </div>
                <div>
                    <p class="font-caption text-caption text-on-surface-variant">Proyectos destacados</p>
                    <p class="font-headline-md text-headline-md text-primary">15</p>
                </div>
            </div>
        </section>
        <!-- Prominent Search -->
        <section class="bg-surface-container-lowest border border-outline-variant rounded-lg p-lg shadow-sm">
            <h2 class="font-headline-md text-headline-md text-on-surface mb-md">Explorar Repositorio</h2>
            <div class="relative w-full">
                <span
                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
                <input
                    class="w-full pl-12 pr-4 py-4 border border-outline-variant rounded-lg text-body-lg focus:border-secondary focus:ring-2 focus:ring-secondary/10 focus:outline-none bg-surface transition-all"
                    placeholder="Buscar por título, autor, facultad o palabras clave..." type="text" />
            </div>
        </section>
        <!-- Recent/Featured Projects Bento-ish Grid -->
        <section>
            <div class="flex justify-between items-end mb-md">
                <h2 class="font-headline-md text-headline-md text-primary">Proyectos Recientes</h2>
                <a class="font-label-md text-label-md text-secondary hover:underline" href="#">Ver todos</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Project Card 1 -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col group cursor-pointer">
                    <div class="h-32 bg-surface-container flex items-center justify-center relative overflow-hidden">
                        <!-- Placeholder image representing a project report/cover -->
                        <img class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500"
                            data-alt="A modern, high-quality photograph of a printed academic thesis resting on a clean white desk, illuminated by soft natural light creating a calm, intellectual mood, with subtle hints of blue accent colors reflecting the institution's branding."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgm3lS9auU0-qnh4h2Du6RDiM7eu3chh9dMJZiDwTkO7UCe0zV1xEOCg_y4mR5ur341YC_N1Fb-RkAY3yUolhX456cVPTXBWo7T_oSpzeoAk5et8FHhqbWaxJYvdcDWARPEF19LBw8a9l6NhpCZp_qZjV1dcAmYQOPK_YJCgwTum8A1fiwpl7yawcDQpngw3vZkLx-olNhqeVJ0AHB3Js0XRJpwfqFY8OXMm2Hb12kdPHPphsEnY5X" />
                        <div
                            class="absolute top-sm left-sm bg-primary-container/90 text-on-primary font-caption text-caption uppercase px-sm py-xs rounded">
                            Ingeniería
                        </div>
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <h3
                            class="font-headline-md text-body-lg font-bold text-on-surface group-hover:text-primary transition-colors mb-xs line-clamp-2">
                            Optimización de Recursos Hídricos mediante Redes de Sensores Inteligentes</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-md">
                            Investigación aplicada sobre el uso de IoT para la gestión eficiente del agua en zonas
                            semiáridas, logrando una reducción del 30% en desperdicio.</p>
                        <div class="mt-auto pt-md border-t border-outline-variant flex justify-between items-center">
                            <div class="flex items-center gap-xs">
                                <span class="material-symbols-outlined text-outline text-sm">person</span>
                                <span class="font-caption text-caption text-on-surface-variant">Ana Gómez et
                                    al.</span>
                            </div>
                            <span class="font-caption text-caption text-outline">Oct 24, 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col group cursor-pointer">
                    <div class="h-32 bg-surface-container flex items-center justify-center relative overflow-hidden">
                        <img class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500"
                            data-alt="A bright, professional top-down view of architectural blueprints and sketching tools neatly arranged on a concrete table, conveying precision, planning, and academic rigor in a modern light-mode setting."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAhjp4o6l4pUiioxVXxZlTQ4HVw1suto0ZY8p2DMiPynEabFKeRfn6dgoQPpyv1z6c1_ipwizwtVbqABn4MQGzVJXW2cH2Geyg0Gsll935uh1yFCZJhUlfv8XhkdZ4mHfENyBCLzf1q8Uzt_cCmjZUqzwjbD4tX4S7gnvFmD4WTPA3-Nl-K9pVZFZa_TnE3eP8GG00ntBKWsFnM5nf3jm_Xay6mMnU85y90F0IW63cKw29ELqBVBt6" />
                        <div
                            class="absolute top-sm left-sm bg-secondary/90 text-on-primary font-caption text-caption uppercase px-sm py-xs rounded">
                            Arquitectura
                        </div>
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <h3
                            class="font-headline-md text-body-lg font-bold text-on-surface group-hover:text-primary transition-colors mb-xs line-clamp-2">
                            Vivienda Social Sostenible: Materiales Locales y Diseño Bioclimático</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-md">Propuesta
                            arquitectónica para reducir el impacto ambiental y los costos de construcción en
                            proyectos de vivienda de interés social.</p>
                        <div class="mt-auto pt-md border-t border-outline-variant flex justify-between items-center">
                            <div class="flex items-center gap-xs">
                                <span class="material-symbols-outlined text-outline text-sm">person</span>
                                <span class="font-caption text-caption text-on-surface-variant">Carlos Méndez</span>
                            </div>
                            <span class="font-caption text-caption text-outline">Oct 20, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection