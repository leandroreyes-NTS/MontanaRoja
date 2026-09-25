@extends('layouts.app')

@section('content')
<!-- Hero Sobre Nosotros (Figma Frame 29: 1920x408) -->
<section class="relative w-full h-[408px] flex items-end pb-12 overflow-hidden bg-[#1E4245]">
    <!-- Imagen de fondo (015.jpg) -->
    <img src="{{ asset('assets/images/Instalaciones y senderos/015.jpg') }}" 
         alt="Paisaje Tehuacán-Cuicatlán" 
         class="absolute inset-0 w-full h-full object-cover object-[center_35%] z-0">

    <!-- Capa 1: Negro al 20% -->
    <div class="absolute inset-0 bg-black/20 z-[1]"></div>
    <!-- Capa 2: Tinte de Figma #1E4245 al 60% -->
    <div class="absolute inset-0 bg-[#1E4245]/60 z-[2]"></div>

    <!-- Contenido alineado -->
    <div class="relative z-10 max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16 w-full">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-[13px] mb-3 text-[#3eb4af] font-medium tracking-wide">
            <a href="{{ route('inicio') }}" class="text-white/70 hover:text-white transition-colors">Inicio</a>
            <span class="text-white/40">→</span>
            <span class="text-[#3eb4af]">Nosotros</span>
        </nav>

        <!-- Título H1 (Figma: 649px ancho, 48px tamaño, 56px interlineado, SemiBold) -->
        <h1 class="w-full max-w-[649px] text-3xl sm:text-4xl lg:text-[48px] lg:leading-[56px] font-serif font-semibold text-white tracking-[-0.72px] mb-3">
            Nuestra historia entre la tierra, la leña y el sabor
        </h1>

        <!-- Subtítulo -->
        <p class="text-sm sm:text-[15px] text-white/80 font-normal tracking-tight max-w-xl">
            Quince años de proyecto familiar en la Reserva Tehuacán-Cuicatlán.
        </p>
    </div>
</section>

<!-- Sección: El Origen (Figma: 1920x720, py-[80px], gap-[48px]) -->
<section class="py-16 lg:py-[80px] bg-white border-b border-stone-200/60">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Textos (Figma ancho 880px / 7 cols) -->
            <div class="lg:col-span-7 flex flex-col justify-center">
                <!-- Tag superior -->
                <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-3">
                    El origen
                </span>

                <!-- Título H2 (Figma: Fraunces 600, 32px, line-height 40px, #1E4D51) -->
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-6 max-w-xl">
                    Un proyecto familiar nacido de la pasión por la cocina
                </h2>

                <!-- Párrafo 1 (Figma: 18px, line-height 28px, 400) -->
                <p class="text-stone-600 text-base sm:text-[18px] sm:leading-[28px] font-normal mb-5 leading-relaxed">
                    Montaña Roja —o La Casa de Tierra— nació de un sueño familiar: llevar la alta cocina a donde el comedor es el aire libre y la estufa es la leña. Quince años después seguimos en la carretera 135, dentro de la Reserva Tehuacán-Cuicatlán.
                </p>

                <!-- Párrafo 2 (Cierre) -->
                <p class="text-stone-700 text-base sm:text-[18px] sm:leading-[28px] font-medium leading-relaxed">
                    Desconectar del ruido, reconectar con la naturaleza.
                </p>
            </div>

            <!-- Columna Derecha: Imagen exacta de Figma (480x560px, rounded-[8px]) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div class="w-full max-w-[480px] h-[560px] overflow-hidden rounded-[8px] shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/017.jpg') }}" 
                         alt="Familia Montaña Roja" 
                         class="w-full h-full object-cover object-[15%_center]">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección: Nuestro eslogan (Figma: 1920x344, centrado) -->
<section class="py-16 lg:py-[72px] bg-white border-b border-stone-200/60">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16 text-center">
        
        <!-- Tag superior -->
        <span class="inline-block text-xs sm:text-[13px] font-medium text-[#1e8a8a] tracking-wider uppercase mb-5">
            Nuestro eslogan
        </span>

        <!-- Frase Principal (Figma: Fraunces 600, 40px, line-height 48px, tracking -0.96px, color #152A2A, max-w 1344px) -->
        <h3 class="font-serif font-semibold text-2xl sm:text-3xl lg:text-[40px] lg:leading-[48px] text-[#152A2A] tracking-[-0.96px] max-w-[1344px] mx-auto mb-6">
            <span class="text-[#2dd4bf]">“</span>La receta es la misma, la leña es la misma, la olla es la misma; lo que cambia es quien la sazona... y ahí es donde te vuelves inolvidable.<span class="text-[#2dd4bf]">”</span>
        </h3>

        <!-- Subtexto descriptivo (Figma: 18px, line-height 28px, 400, color #152A2A) -->
        <p class="text-stone-600 text-base sm:text-[18px] sm:leading-[28px] font-normal max-w-[1344px] mx-auto">
            No es marketing. Es lo que responde Christian cuando le preguntan por qué su comida sabe distinta con los mismos ingredientes.
        </p>

    </div>
</section>

<!-- Sección: El chef (Figma: 1920x720, py-[80px]) -->
<section class="py-16 lg:py-[80px] bg-white border-b border-stone-200/60">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Imagen 018.jpg (Figma: 480x560px, rounded-[8px]) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-start order-2 lg:order-1">
                <div class="w-full max-w-[480px] h-[560px] overflow-hidden rounded-[8px] shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Comida y bebidas/018.jpg') }}" 
                         alt="Gastronomía Montaña Roja" 
                         class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Columna Derecha: Textos y Botón (Figma: 880px / 7 cols) -->
            <div class="lg:col-span-7 flex flex-col justify-center order-1 lg:order-2">
                <!-- Tag superior -->
                <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-3">
                    El chef
                </span>

                <!-- Título H2 -->
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4 max-w-xl">
                    Christian, 30 años cocinando
                </h2>

                <!-- Subtítulo destacado -->
                <p class="text-stone-800 text-base sm:text-[18px] sm:leading-[28px] font-semibold mb-4 leading-relaxed">
                    Tres décadas frente al fuego dan para mucho, pero sobre todo dan para atreverse.
                </p>

                <!-- Descripción (Figma: 18px, line-height 28px, color #152A2A) -->
                <p class="text-[#152A2A]/85 text-base sm:text-[18px] sm:leading-[28px] font-normal mb-8 leading-relaxed">
                    A Christian lo mueve romper esquemas: en el sabor, en la técnica, en cómo llega el plato a la mesa. Puede cocinar una receta cuicateca en olla de barro sobre leña y, esa misma noche, laquear costillas con salsa cantonesa. Por eso casi todo va bajo reserva.
                </p>

                <!-- Botón CTA Rojo -->
                <div>
                    <a href="{{ route('restaurante') }}" 
                       class="inline-flex items-center justify-center bg-[#d83a2b] hover:bg-red-700 text-white font-medium text-sm sm:text-[15px] px-6 py-3 rounded-[6px] transition-colors shadow-sm">
                        Ver la propuesta gastronómica
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección: El lugar (Figma: 1920x680, pt-[80px] pb-[40px]) -->
<section class="pt-16 lg:pt-[80px] pb-10 lg:pb-[40px] bg-white border-b border-stone-200/60">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Textos y Checks (Figma: 880px / 7 cols) -->
            <div class="lg:col-span-7 flex flex-col justify-center">
                <!-- Tag superior -->
                <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-3">
                    El lugar
                </span>

                <!-- Título H2 -->
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4 max-w-xl">
                    Dentro de una reserva de la biósfera
                </h2>

                <!-- Subtítulo destacado -->
                <p class="text-stone-800 text-base sm:text-[18px] sm:leading-[28px] font-semibold mb-3 leading-relaxed">
                    Estamos en Cuicatlán, Oaxaca, dentro de la Reserva Tehuacán-Cuicatlán, Patrimonio UNESCO.
                </p>

                <!-- Descripción -->
                <p class="text-[#152A2A]/85 text-base sm:text-[18px] sm:leading-[28px] font-normal mb-8 leading-relaxed">
                    Eso define cómo operamos: el río es libre pero con restricciones de conservación, y hay reglas sobre basura, fuego y fauna. Son las que hacen que esto siga existiendo.
                </p>

                <!-- Cuadrícula de 4 Checks (Figma: 522x72px) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 max-w-[540px]">
                    <div class="flex items-center gap-2.5 text-[15px] text-stone-700 font-medium">
                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>15 años de operación</span>
                    </div>

                    <div class="flex items-center gap-2.5 text-[15px] text-stone-700 font-medium">
                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Proyecto familiar</span>
                    </div>

                    <div class="flex items-center gap-2.5 text-[15px] text-stone-700 font-medium">
                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Productores locales</span>
                    </div>

                    <div class="flex items-center gap-2.5 text-[15px] text-stone-700 font-medium">
                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Patrimonio Mundial UNESCO</span>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Imagen 019.jpg (Figma: 480x560px, rounded-[8px]) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div class="w-full max-w-[480px] h-[560px] overflow-hidden rounded-[8px] shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/019.jpg') }}" 
                         alt="Río y Reserva de la Biósfera" 
                         class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 6. Galería (Bento Grid) -->
<section class="py-24 bg-white">
    <div class="max-w-[1400px] mx-auto px-6 lg:px-12 xl:px-16">
        <div class="mb-12">
            <span class="text-[#3eb4af] font-medium text-[13px] mb-3 block">
                Galería
            </span>
            <h2 class="text-3xl lg:text-[34px] font-serif font-bold text-[#1f4a4a]">
                El lugar, como es
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Columna 1 -->
            <div class="flex flex-col gap-6 lg:gap-8 h-full">
                <!-- Foto 1: Arcoiris (más cuadrada) -->
                <div class="w-full h-[440px] rounded-2xl overflow-hidden group shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/007.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Foto 2: Mesa azul (muy alta) -->
                <div class="w-full flex-1 min-h-[500px] rounded-2xl overflow-hidden group shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/010.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
            </div>
            
            <!-- Columna 2 -->
            <div class="flex flex-col gap-6 lg:gap-8 h-full">
                <!-- Foto 3: Casa de campaña noche (apaisada) -->
                <div class="w-full h-[280px] rounded-2xl overflow-hidden group shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/008.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Foto 4: Teléfono rojo (cuadrada) -->
                <div class="w-full aspect-square rounded-2xl overflow-hidden group shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/011.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Foto 5: Lago (apaisada/cuadrada) -->
                <div class="w-full flex-1 min-h-[300px] rounded-2xl overflow-hidden group shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/013.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
            </div>
            
            <!-- Columna 3 -->
            <div class="flex flex-col gap-6 lg:gap-8 h-full">
                <!-- Foto 6: Sendero cactus (alta) -->
                <div class="w-full h-[460px] rounded-2xl overflow-hidden group shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/009.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Foto 7: Baño (apaisada) -->
                <div class="w-full h-[280px] rounded-2xl overflow-hidden group shadow-sm shrink-0">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/012.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <!-- Foto 8: Fogata (apaisada) -->
                <div class="w-full flex-1 min-h-[300px] rounded-2xl overflow-hidden group shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/014.jpg') }}" alt="Galería" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección: Métricas / Valores clave (Figma: 1920x248, interno 1408x88) -->
<section class="py-14 lg:py-16 bg-white border-t border-stone-200/60">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 items-start">
            
            <!-- Columna 1: 15 años -->
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-[12px] bg-[#1e4245] flex items-center justify-center text-white shrink-0 shadow-sm">
                    <!-- Icono Familia / Grupo (Silueta Exacta + U Grises) -->
                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Cabeza adulto izquierdo -->
                        <circle cx="5.25" cy="4.5" r="2.1" />
                        
                        <!-- Cabeza adulto derecho -->
                        <circle cx="18.75" cy="4.5" r="2.1" />
                        
                        <!-- Cabeza niño central -->
                        <circle cx="13.2" cy="8.2" r="1.6" />

                        <!-- Silueta exterior continua (sujeto izquierdo con hombro diagonal + niño) -->
                        <path d="M2.5 14.5v-3a2.5 2.5 0 0 1 2.5-2.5h2a2.5 2.5 0 0 1 2.2 1.3l1.8 3.7h3.8a2.5 2.5 0 0 1 2.5 2.5v2a2 2 0 0 1-2 2h-1v2" />

                        <!-- Pierna izquierda (Trazado en U gris) -->
                        <path d="M2.5 14.5v6.5a1.2 1.2 0 0 0 2.4 0v-4.5" />

                        <!-- Pierna niño (Trazado en U gris) -->
                        <path d="M8.5 15v6a1.2 1.2 0 0 0 2.4 0v-3" />

                        <!-- Sujeto derecho: hombro abierto y cuerpo lateral -->
                        <path d="M17.5 9h2a2.5 2.5 0 0 1 2.5 2.5v2.5h-2V21" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-stone-900 text-lg leading-7 tracking-[-0.2px] mb-1">
                        15 años
                    </h4>
                    <p class="text-stone-600 text-base leading-7 font-normal">
                        Como proyecto familiar en Cuicatlán, Oaxaca.
                    </p>
                </div>
            </div>

            <!-- Columna 2: 30 años -->
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-[12px] bg-[#1e4245] flex items-center justify-center text-white shrink-0 shadow-sm">
                    <!-- Icono Tenedor y Cuchara -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                        <path d="M7 2v20"></path>
                        <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-stone-900 text-lg leading-7 tracking-[-0.2px] mb-1">
                        30 años
                    </h4>
                    <p class="text-stone-600 text-base leading-7 font-normal">
                        Del Chef Christian al frente de la cocina.
                    </p>
                </div>
            </div>

            <!-- Columna 3: Reserva natural -->
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-[12px] bg-[#1e4245] flex items-center justify-center text-white shrink-0 shadow-sm">
                    <!-- Icono Hojas / Reserva Natural -->
                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 4 13C4 7 11 2 20 2c0 9-5 16-9 18z" />
                        <path d="M20 2L10 12" />
                        <path d="M4 21c2-3 4-5 6-7" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-stone-900 text-lg leading-7 tracking-[-0.2px] mb-1">
                        Reserva natural
                    </h4>
                    <p class="text-stone-600 text-base leading-7 font-normal">
                        Dentro de la Reserva Tehuacán-Cuicatlán, junto al río Grande.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
