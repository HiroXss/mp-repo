@extends('layout')

@section('content')

    <div class="w-full bg-surface-container-lowest rounded-xl shadow-level-1 p-[24px] md:p-[32px] transition-shadow hover:shadow-level-2 duration-300 max-w-2xl mx-auto">
        <h1 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-unit text-center">
            Generar Enlace Público
        </h1>
        <p class="font-body-md text-body-md text-on-surface-variant text-center mb-[32px]">
            Crea un enlace para que los estudiantes puedan subir su proyecto sin requerir acceso al sistema.
        </p>

        <!-- Formulario para generar el enlace -->
        <form method="POST" action="{{ route('enlace.generar') }}" class="flex flex-col gap-[24px]">
            @csrf

            <div>
                <label class="block font-body-sm text-body-sm font-bold text-on-surface mb-2" for="horas">
                    Validez del enlace
                </label>
                <select name="horas" id="horas" required
                    class="w-full bg-surface-container-lowest border border-[#D1D1D1] rounded px-4 py-3 font-body-md text-body-md text-on-surface-variant focus:outline-none focus:border-[#348AC9] focus:ring-1 focus:ring-[#348AC9] transition-all">
                    <option value="1">1 Hora</option>
                    <option value="4">4 Horas</option>
                    <option value="12">12 Horas</option>
                    <option value="24">24 Horas (1 Día)</option>
                    <option value="48">48 Horas (2 Días)</option>
                    <option value="168">168 Horas (1 Semana)</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-primary-container text-on-primary font-label-md text-label-md uppercase tracking-wider py-3 rounded hover:bg-primary transition-colors duration-200 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined" style="font-size: 20px;">link</span>
                Generar Enlace
            </button>
        </form>

        <!-- Sección de resultados (Solo se muestra si se acaba de generar un enlace) -->
        @if(session('enlace_generado'))
            <div class="mt-8 pt-6 border-t border-outline-variant flex flex-col gap-[24px]">
                <div class="relative">
                    <label class="block font-body-sm text-body-sm font-bold text-on-surface mb-2" for="public-link">
                        Enlace Generado (Copia y comparte)
                    </label>
                    <div class="flex">
                        <input
                            class="w-full bg-surface-container-lowest border border-[#D1D1D1] rounded-l px-4 py-3 font-body-md text-body-md text-on-surface-variant focus:outline-none focus:border-[#348AC9] focus:ring-1 focus:ring-[#348AC9] transition-all"
                            id="public-link" readonly type="text" value="{{ session('enlace_generado') }}" />
                        <button
                            class="bg-surface-container border border-l-0 border-[#D1D1D1] rounded-r px-4 hover:bg-surface-container-high transition-colors flex items-center justify-center text-on-surface-variant"
                            title="Copiar enlace" type="button">
                            <span class="material-symbols-outlined" style="font-size: 20px;">content_copy</span>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-unit sm:gap-[16px]">
                    <button onclick="navigator.clipboard.writeText(document.getElementById('public-link').value)"
                        class="flex-1 border-[1.5px] border-[#348AC9] text-[#348AC9] bg-transparent hover:bg-surface-container-lowest rounded py-3 font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors duration-200"
                        type="button">
                        <span class="material-symbols-outlined" style="font-size: 20px;">share</span>
                        Copiar Enlace
                    </button>
                    <a href="{{ session('enlace_generado') }}" target="_blank"
                        class="flex-1 border-[1.5px] border-[#348AC9] text-[#348AC9] bg-transparent hover:bg-surface-container-lowest rounded py-3 font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors duration-200">
                        <span class="material-symbols-outlined" style="font-size: 20px;">open_in_new</span>
                        Probar enlace
                    </a>
                </div>
            </div>
        @endif
    </div>

@endsection