@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="relative h-[550px] lg:h-[600px] flex flex-col justify-center items-start pt-16">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/Instalaciones y senderos/001.jpg') }}" alt="Río al atardecer en Montaña Roja" class="w-full h-full object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
    </div>
    
    <div class="relative z-10 px-4 sm:px-8 lg:px-16 max-w-[1400px] mx-auto w-full">
        <!-- Location Pin -->
        <div class="flex items-center gap-1.5 text-[#3eb4af] font-medium mb-4 text-[11px]">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
            Cuicatlán, Oaxaca &middot; km 125
        </div>
        
        <!-- Main Title -->
        <h1 class="text-4xl md:text-5xl lg:text-[44px] font-serif font-bold text-white mb-4 drop-shadow-md leading-[1.15] tracking-tight max-w-[700px]">
            Desconéctate de la rutina,<br>reconecta con la tierra<br>y los sabores.
        </h1>
        
        <!-- Description -->
        <p class="text-[13px] text-white/90 mb-3 font-normal max-w-[500px] leading-relaxed">
            Cocina de humo y camping a la orilla del río, dentro de la Reserva de la<br>Biósfera Tehuacán-Cuicatlán.
        </p>
        </p>
    </div>

    <!-- Amenidades Bar (White Bottom Bar) -->
    <div class="absolute bottom-0 left-0 w-full bg-[#f4fafa] hidden md:block z-20 shadow-sm border-t border-gray-100">
        <div class="max-w-[1400px] mx-auto px-4 py-4">
            <div class="flex justify-center items-center gap-6 lg:gap-14 text-[#1f4a4a] text-[11px] font-semibold">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path>
                        <line x1="6" x2="18" y1="17" y2="17"></line>
                    </svg>
                    Cocina de Autor
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M9 17V7h4a3 3 0 0 1 0 6H9"></path>
                    </svg>
                    Estacionamiento
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                    </svg>
                    Camping al Aire Libre
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 7h18"></path>
                        <path d="M3 7v2c0 1.1.9 2 2 2h0"></path>
                        <path d="M21 7v2c0 1.1-.9 2-2 2h0"></path>
                        <rect x="7" y="7" width="10" height="12" rx="2"></rect>
                        <path d="M7 15h10"></path>
                    </svg>
                    Baños
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 10c.7-.7 1.69 0 2.5 0a2.5 2.5 0 1 0 0-5 .5.5 0 0 1-.5-.5 2.5 2.5 0 1 0-5 0c0 .81.7 1.8 0 2.5l-7 7c-.7.7-1.69 0-2.5 0a2.5 2.5 0 0 0 0 5c0-.28.22-.5.5-.5a2.5 2.5 0 0 0 5 0c0-.81-.7-1.8 0-2.5Z"></path>
                    </svg>
                    Pet friendly
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. La Experiencia -->
<section class="py-16 lg:py-24 bg-white relative">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-16">
        
        <!-- Izquierda: Imagen -->
        <div class="w-full max-w-[390px] h-[460px] aspect-[4/5] rounded-2xl overflow-hidden shadow-sm flex-shrink-0">
            <img src="{{ asset('assets/images/Instalaciones y senderos/002.jpg') }}?v=7" 
                 alt="Tienda de acampar junto al río" 
                 class="w-full h-full object-cover object-[25%_center]">
        </div>
        
        <!-- Derecha: Texto -->
        <div class="w-full max-w-[620px] flex flex-col justify-center">
            <span class="text-[#3eb4af] font-medium text-[13px] mb-2 block">
                La experiencia
            </span>
            
            <h2 class="text-2xl sm:text-3xl lg:text-[32px] font-serif font-bold text-[#1f4a4a] leading-tight mb-5 max-w-[460px]">
                Un camping-bar donde<br class="hidden sm:inline"> manda la naturaleza
            </h2>
            
            <p class="text-[13px] leading-relaxed text-[#1f4a4a]/80 mb-5 max-w-[560px]">
                No somos un restaurante tradicional. Somos un espacio al aire libre en la Reserva Tehuacán-Cuicatlán:<br class="hidden lg:inline"> se come al calor de la cocina de humo, se acampa junto al río y se duerme sin pantallas.
            </p>
            
            <p class="text-[13px] font-medium text-[#1f4a4a] mb-7 max-w-[580px]">
                Quince años de historia familiar y treinta de oficio del Chef Christian: cocina viva y de temporada.
            </p>
            
            <!-- Botones -->
            <div class="flex flex-wrap gap-3 items-center">
                <a href="{{ route('sobre.nosotros') }}" class="bg-[#d83a2b] hover:bg-red-700 text-white px-5 py-2.5 rounded-md text-[12px] font-medium transition-colors text-center shadow-sm">
                    Conoce nuestra historia
                </a>
                <a href="{{ route('camping') }}" class="bg-transparent hover:bg-stone-50 border border-stone-300 text-[#1f4a4a] px-5 py-2.5 rounded-md text-[12px] font-medium transition-colors text-center">
                    Ver zona de camping
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Barra Oscura debajo de "La Experiencia" -->
<div class="bg-[#1f4a4a] py-8 w-full">
    <div class="max-w-6xl mx-auto px-4 sm:px-8">
        <div class="flex flex-wrap justify-center gap-8 lg:gap-16 text-white/90">
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <div class="flex flex-col">
                    <h4 class="font-medium text-[#3eb4af] text-[11px] mb-0.5">Horario</h4>
                    <p class="text-[11px] text-white/90">Vie a Dom - 8:00 am – 10:00 pm</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                    <path d="M8 14h.01"></path>
                    <path d="M12 14h.01"></path>
                    <path d="M16 14h.01"></path>
                    <path d="M8 18h.01"></path>
                    <path d="M12 18h.01"></path>
                    <path d="M16 18h.01"></path>
                </svg>
                <div class="flex flex-col">
                    <h4 class="font-medium text-[#3eb4af] text-[11px] mb-0.5">Entre semana</h4>
                    <p class="text-[11px] text-white/90">Lun a Jue con reserva previa</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 20 10 4"></path>
                    <path d="m5 20 9-16"></path>
                    <path d="M3 20h18"></path>
                    <path d="m12 15-3 5"></path>
                    <path d="m12 15 3 5"></path>
                </svg>
                <div class="flex flex-col">
                    <h4 class="font-medium text-[#3eb4af] text-[11px] mb-0.5">Camping</h4>
                    <p class="text-[11px] text-white/90">$350 MXN por casa de campaña</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                    <line x1="4" y1="22" x2="4" y2="15"></line>
                </svg>
                <div class="flex flex-col">
                    <h4 class="font-medium text-[#3eb4af] text-[11px] mb-0.5">Ubicación</h4>
                    <p class="text-[11px] text-white/90">Carretera México 135, km 126</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tres formas de vivir la montaña -->
<section class="py-24 bg-white relative">
    <div class="max-w-[1240px] mx-auto px-6 sm:px-10 lg:px-16">
        
        <!-- Encabezado de la sección -->
        <div class="mb-12 max-w-2xl">
            <span class="text-[#3eb4af] font-medium text-[13px] tracking-wide mb-2 block">
                Explora Montaña Roja
            </span>
            <h2 class="text-3xl lg:text-[34px] font-serif font-bold text-[#1f4a4a] mb-5 leading-tight">
                Tres formas de vivir la montaña
            </h2>
            <p class="text-[#1f4a4a]/80 text-[14px] leading-relaxed pr-12 md:pr-0">
                Tres cosas a la vez: restaurante a la leña sobre la carretera, campamento junto al río y un lugar entero para reservar en grupo.
            </p>
        </div>

        <!-- Tarjetas en Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Tarjeta 1: Zona de Camping -->
            <a href="{{ route('camping') }}" class="group relative block w-full aspect-square rounded-xl overflow-hidden shadow-md">
                <img src="{{ asset('assets/images/Instalaciones y senderos/002.jpg') }}" alt="Zona de Camping" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <!-- Gradiente oscuro en la parte inferior para leer el texto -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#111]/90 via-[#111]/30 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 w-full p-6 lg:p-8 flex flex-col justify-end">
                    <h3 class="text-white font-serif font-bold text-[22px] mb-2">Zona de Camping</h3>
                    <p class="text-white/80 text-[13px] leading-relaxed mb-5">
                        $350 la casa de campaña, hasta 4 personas, con desayuno para dos.
                    </p>
                    <span class="text-[#3eb4af] text-[13px] font-medium inline-flex items-center gap-2 group-hover:text-white transition-colors">
                        Ver precios y qué incluye
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </div>
            </a>

            <!-- Tarjeta 2: Restaurante & Bar -->
            <a href="{{ route('restaurante') }}" class="group relative block w-full aspect-square rounded-xl overflow-hidden shadow-md">
                <img src="{{ asset('assets/images/Instalaciones y senderos/003.jpg') }}" alt="Restaurante y Bar" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[#111]/90 via-[#111]/30 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 w-full p-6 lg:p-8 flex flex-col justify-end">
                    <h3 class="text-white font-serif font-bold text-[22px] mb-2">Restaurante & Bar</h3>
                    <p class="text-white/80 text-[13px] leading-relaxed mb-5">
                        Cocina de humo y sabores del mundo, del Chef Christian.
                    </p>
                    <span class="text-[#3eb4af] text-[13px] font-medium inline-flex items-center gap-2 group-hover:text-white transition-colors">
                        Ver el menú y horarios
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </div>
            </a>

            <!-- Tarjeta 3: Actividades -->
            <a href="{{ route('eventos') }}" class="group relative block w-full aspect-square rounded-xl overflow-hidden shadow-md">
                <img src="{{ asset('assets/images/Instalaciones y senderos/005.jpg') }}" alt="Actividades" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[#111]/90 via-[#111]/30 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 w-full p-6 lg:p-8 flex flex-col justify-end">
                    <h3 class="text-white font-serif font-bold text-[22px] mb-2">Actividades</h3>
                    <p class="text-white/80 text-[13px] leading-relaxed mb-5">
                        Noches estrelladas, senderismo y fogata los fines de semana.
                    </p>
                    <span class="text-[#3eb4af] text-[13px] font-medium inline-flex items-center gap-2 group-hover:text-white transition-colors">
                        Pedir una cotización
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- 3. Por qué aquí -->
<section class="py-24 bg-[#fbfbfa]">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
        <div class="mb-14">
            <span class="text-[#3eb4af] font-medium text-[13px] tracking-wide mb-2 block">
                Por qué aquí
            </span>
            <h2 class="text-3xl lg:text-[34px] font-serif font-bold text-[#1f4a4a] mb-5 leading-tight">
                No somos un restaurante tradicional
            </h2>
            <p class="text-[#1f4a4a]/80 text-[14px] leading-relaxed max-w-[550px]">
                Camping-bar al aire libre, al calor de la cocina de humo. Cocina fresca, local y de<br class="hidden lg:inline"> temporada.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-10">
            <!-- Feature 1 -->
            <div class="flex flex-col items-start">
                <div class="w-[46px] h-[46px] bg-[#1f4a4a] rounded-xl flex items-center justify-center mb-6 text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21L21 3"></path>
                    </svg>
                </div>
                <h4 class="text-[14px] font-bold text-[#1f4a4a] mb-2">Sin WiFi. A propósito.</h4>
                <p class="text-[#1f4a4a]/70 text-[13px] leading-relaxed pr-2">No es que no hayamos podido: no quisimos. Vienes a desconectarte, literalmente.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="flex flex-col items-start">
                <div class="w-[46px] h-[46px] bg-[#1f4a4a] rounded-xl flex items-center justify-center mb-6 text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" /></svg>
                </div>
                <h4 class="text-[14px] font-bold text-[#1f4a4a] mb-2">Cocina a la leña</h4>
                <p class="text-[#1f4a4a]/70 text-[13px] leading-relaxed pr-2">Guisados y snacks al humo, pesca fresca y producto local. Brasa y tiempo, no prisa.</p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-start">
                <div class="w-[46px] h-[46px] bg-[#1f4a4a] rounded-xl flex items-center justify-center mb-6 text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                </div>
                <h4 class="text-[14px] font-bold text-[#1f4a4a] mb-2">De temporada, bajo reserva</h4>
                <p class="text-[#1f4a4a]/70 text-[13px] leading-relaxed pr-2">Con planeación previa. Cuando reservas, tu menú empieza a planearse.</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-start">
                <div class="w-[46px] h-[46px] bg-[#1f4a4a] rounded-xl flex items-center justify-center mb-6 text-white shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.327A3 3 0 0018 7.5a4.5 4.5 0 00-8.879-.81 3 3 0 00-4.887 2.11C2.977 9.176 2.25 10.96 2.25 12V15z"></path></svg>
                </div>
                <h4 class="text-[14px] font-bold text-[#1f4a4a] mb-2">Dentro de una reserva</h4>
                <p class="text-[#1f4a4a]/70 text-[13px] leading-relaxed pr-2">Reserva de la Biósfera Tehuacán-Cuicatlán, Patrimonio UNESCO. No es un jardín: es un ecosistema.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. Nuestra historia -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Image -->
            <div class="relative rounded-lg overflow-hidden h-[450px] lg:h-[500px] w-full shadow-lg">
                <img src="{{ asset('assets/images/Comida y bebidas/006.jpg') }}" alt="Platillo al humo" class="w-full h-full object-cover">
            </div>
            
            <!-- Right: Text -->
            <div class="max-w-lg">
                <span class="text-teal-500 font-medium text-xs uppercase tracking-wider mb-4 block">Nuestra historia</span>
                <h2 class="text-2xl lg:text-3xl font-serif font-bold text-[#1f4a4a] mb-6 leading-snug">
                    "La receta es la misma, la leña es la misma, la olla es la misma; lo que cambia es quien la sazona... y ahí es donde te vuelves inolvidable."
                </h2>
                
                <div class="mb-6">
                    <p class="text-teal-500 font-bold text-xs uppercase tracking-wider mb-1">Christian</p>
                    <p class="text-bosque/50 text-[10px] uppercase tracking-wide">Chef y anfitrión &middot; 30 años cocinando</p>
                </div>
                
                <p class="text-bosque/70 text-xs leading-relaxed mb-6 font-medium">
                    Nació como proyecto familiar: pasión por la alta cocina y por romper esquemas. Acercamos el mundo a quien vive cerca, y la cocina cuicateca a quien viene de lejos.
                </p>
                
                <a href="{{ route('sobre.nosotros') }}" class="inline-flex items-center text-teal-500 hover:text-teal-600 font-medium text-xs transition-colors border-b border-teal-500/30 hover:border-teal-500 pb-0.5">
                    Conoce nuestra historia <span class="ml-1">&rarr;</span>
                </a>
          
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

<!-- 7. Camping Pricing -->
<section class="py-24 bg-[#fbfbfa]">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
        <div class="mb-12">
            <span class="text-teal-500 font-medium text-xs uppercase tracking-wider mb-2 block">Camping</span>
            <h2 class="text-3xl font-serif font-bold text-[#1f4a4a]">Tu noche incluye más de lo que crees</h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Izquierda: Tarjeta de Precio -->
            <div class="lg:col-span-5 bg-[#1f4a4a] text-white rounded-2xl p-8 shadow-xl">
                <p class="text-white/70 text-xs mb-4">Tarifa de camping</p>
                <div class="mb-1">
                    <span class="text-4xl font-bold font-serif">$350</span>
                    <span class="text-sm text-white/80 font-medium">MXN /noche</span>
                </div>
                <p class="text-teal-400 text-sm mb-6">Por casa de campaña</p>
                
                <div class="flex items-center gap-1 mb-8">
                    <span class="text-sm font-medium mr-2">Hasta 4 personas</span>
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                    <svg class="w-4 h-4 text-white/50" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                    <svg class="w-4 h-4 text-white/50" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                </div>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-teal-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <p class="text-sm text-white/90 leading-relaxed"><strong class="text-white">Desayuno para 2 personas incluido:</strong> café, pan y fruta.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        <p class="text-sm text-white/90 leading-relaxed"><strong class="text-white">Trae tu casa de campaña:</strong> Aún no rentamos equipo de acampar.</p>
                    </div>
                </div>
                
                <p class="text-xs text-white/60 mb-6">Máximo 10 personas por sitio</p>
                
                <a href="{{ route('camping') }}" class="block w-full text-center bg-[#d83a2b] hover:bg-red-700 text-white py-3 rounded-md font-medium text-sm transition-colors mb-4">
                    Ver precios y reservar
                </a>
                
                <p class="text-[10px] text-white/50 text-center">Trae tu casa de campaña - aún no rentamos equipo</p>
            </div>
            
            <!-- Derecha: Amenidades -->
            <div class="lg:col-span-7 flex flex-col justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-2 border-b border-gray-200 pb-8 mb-6">
                    <!-- Col 1 -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Cocina equipada</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Fogatero</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Zonas de picnic</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Botiquín</span></div>
                    </div>
                    <!-- Col 2 -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Comedor al aire libre</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Acceso al río Grande</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Estacionamiento gratuito</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Cámaras de seguridad</span></div>
                    </div>
                    <!-- Col 3 -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Parrilla y asador</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Senderos señalizados</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Baños</span></div>
                        <div class="flex items-center gap-2"><svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span class="text-xs font-medium text-bosque">Pet friendly</span></div>
                    </div>
                </div>
                
                <div class="flex items-start gap-3 mt-4">
                    <svg class="w-4 h-4 text-teal-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-[10px] sm:text-xs text-bosque/80 font-medium leading-relaxed">
                        <strong class="font-bold">Lo que no vas a encontrar:</strong> WiFi ni señal &middot; TV &middot; aire acondicionado &middot; lavadora &middot; renta de casas de campaña &middot; detectores de humo.<br>
                        No apto para menores de 2 años. Lo decimos claro.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. FAQ -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-8">
        <div class="mb-12">
            <span class="text-teal-500 font-medium text-xs uppercase tracking-wider mb-2 block">Antes de venir</span>
            <h2 class="text-3xl font-serif font-bold text-[#1f4a4a]">Lo que más nos preguntan</h2>
        </div>
        
        <div class="divide-y divide-gray-100">
            <!-- FAQ 1 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Rentan casas de campaña?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    No, cada quien trae la suya. Tenemos la zona lista: fogatero, parrilla, cocina equipada y baños.
                </p>
            </details>
            
            <!-- FAQ 2 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Qué debo llevar?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    Casa de campaña, sleeping o cobijas, linterna, repelente y calzado cerrado. Trae abrigo. Y algo de efectivo, aunque aceptamos tarjeta.
                </p>
            </details>

            <!-- FAQ 3 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Puedo llevar a mi perro?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    Sí, pet friendly. Solo pedimos mantenerlo a la vista: estamos en área natural protegida y hay fauna local.
                </p>
            </details>

            <!-- FAQ 4 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Es seguro para niños?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    Sí, con supervisión. Hay zonas elevadas sin barandal y el río es de acceso libre. Contamos con botiquín y cámaras. No apto para menores de 2 años.
                </p>
            </details>

            <!-- FAQ 5 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Hay señal de celular o WiFi?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    No, y es a propósito: se pierde en los últimos kilómetros. Por eso te damos una guía descargable antes de llegar.
                </p>
            </details>

            <!-- FAQ 6 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Cómo puedo pagar?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    Efectivo, tarjeta de débito o crédito, y transferencia bancaria.
                </p>
            </details>

            <!-- FAQ 7 -->
            <details class="group py-6" name="faq">
                <summary class="flex justify-between items-center font-bold cursor-pointer list-none text-sm text-bosque">
                    ¿Abren de lunes a jueves?
                    <span class="transition group-open:rotate-45 text-teal-500">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>
                    </span>
                </summary>
                <p class="text-bosque/70 mt-3 text-xs leading-relaxed font-medium">
                    No al público general, pero sí con reserva previa. Es la mejor forma de tener el lugar casi para ti.
                </p>
            </details>
        </div>
    </div>
</section>
@endsection
