@extends('layouts.app')

@section('content')
<!-- Hero Section: Eventos y Fogatas (Figma: min-h-[436px] adaptativo) -->
<section class="relative bg-[#0d1e20] min-h-[436px] flex items-center overflow-hidden py-14 lg:py-0">
    <!-- Imagen de fondo (022.jpg de Instalaciones y senderos) -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/Instalaciones y senderos/026.jpg') }}" 
             alt="Noches de Fogata y Convivencia" 
             class="w-full h-full object-cover object-center">
        <!-- Overlays de Figma -->
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 bg-[#102426]/70 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#102426]/95 via-[#102426]/75 to-transparent"></div>
    </div>

    <!-- Contenido (Figma: Ancho max 649px) -->
    <div class="relative z-10 w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="max-w-[649px]">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-4">
                <a href="{{ route('inicio') }}" class="font-sans font-normal text-[14px] leading-[28px] text-white hover:underline">
                    Inicio
                </a>
                <span class="text-[#4ED0CE] text-sm">→</span>
                <span class="font-sans font-bold text-[14px] leading-[28px] text-[#4ED0CE]">
                    Eventos y Fogatas
                </span>
            </nav>

            <!-- Título H1 (Fraunces 48px, lh 56px, ls -0.72px) -->
            <h1 class="font-serif font-semibold text-3xl sm:text-4xl lg:text-[48px] lg:leading-[56px] text-white tracking-[-0.72px] mb-4">
                Noches de Fogata y Convivencia
            </h1>

            <!-- Subtítulo (Bricolage Grotesque 18px, lh 28px) -->
            <p class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-white/95">
                Los fines de semana la montaña se llena de fuego, música baja y conversación larga. Ven solo, en pareja o con todo tu grupo.
            </p>

        </div>
    </div>
</section>

<!-- Sección: Actividades habituales / Lo que pasa en Montaña Roja (Figma: py-16 / py-20) -->
<section class="py-16 lg:py-20 bg-white border-b border-stone-200/70">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        
        <!-- Encabezado de Sección (Figma: max-w 753px) -->
        <div class="mb-12 max-w-[753px]">
            <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-2 block">
                Actividades habituales
            </span>
            <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-3">
                Lo que pasa en Montaña Roja
            </h2>
            <p class="font-sans font-normal text-base sm:text-[18px] sm:leading-[28px] text-[#152A2A]">
                Tres cosas a la vez: restaurante a la leña sobre la carretera, campamento junto al río y un lugar entero para reservar en grupo.
            </p>
        </div>

        <!-- Cuadrícula de 3 Tarjetas Visuales (Figma: 453.33px relleno x 480px fijo, radius 8px, padding 24px) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            
            <!-- Tarjeta 1: Noches estrelladas con fogata (021.jpg) -->
            <div class="relative w-full h-[480px] rounded-[8px] overflow-hidden flex flex-col justify-end p-6 shadow-sm group">
                <img src="{{ asset('assets/images/Instalaciones y senderos/021.jpg') }}" 
                     alt="Noches estrelladas con fogata" 
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <!-- Degradado lineal de Figma -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent pointer-events-none"></div>
                <div class="relative z-10 flex flex-col gap-4">
                    <h3 class="font-serif font-semibold text-[24px] leading-[28px] tracking-[-0.2px] text-white">
                        Noches estrelladas con fogata
                    </h3>
                    <p class="font-sans font-normal text-[18px] leading-[28px] text-white/90">
                        Sin contaminación lumínica ni WiFi. Encendemos la fogata y el cielo hace el resto.
                    </p>
                </div>
            </div>

            <!-- Tarjeta 2: Rutas de senderismo (015.jpg) -->
            <div class="relative w-full h-[480px] rounded-[8px] overflow-hidden flex flex-col justify-end p-6 shadow-sm group">
                <img src="{{ asset('assets/images/Instalaciones y senderos/015.jpg') }}" 
                     alt="Rutas de senderismo" 
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <!-- Degradado lineal de Figma -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent pointer-events-none"></div>
                <div class="relative z-10 flex flex-col gap-4">
                    <h3 class="font-serif font-semibold text-[24px] leading-[28px] tracking-[-0.2px] text-white">
                        Rutas de senderismo
                    </h3>
                    <p class="font-sans font-normal text-[18px] leading-[28px] text-white/90">
                        Senderos señalizados dentro de la Reserva. Usa calzado adecuado.
                    </p>
                </div>
            </div>

            <!-- Tarjeta 3: Experiencias de cocina de humo (022.jpg) -->
            <div class="relative w-full h-[480px] rounded-[8px] overflow-hidden flex flex-col justify-end p-6 shadow-sm group">
                <img src="{{ asset('assets/images/Instalaciones y senderos/022.jpg') }}" 
                     alt="Experiencias de cocina de humo" 
                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <!-- Degradado lineal de Figma -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent pointer-events-none"></div>
                <div class="relative z-10 flex flex-col gap-4">
                    <h3 class="font-serif font-semibold text-[24px] leading-[28px] tracking-[-0.2px] text-white">
                        Experiencias de cocina de humo
                    </h3>
                    <p class="font-sans font-normal text-[18px] leading-[28px] text-white/90">
                        Ver cocinar sobre la leña es parte de la visita. El fuego también es espectáculo.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Sección: Grupos y eventos privados (Figma: py-16 / py-20, gap-12) -->
<section class="py-16 lg:py-20 bg-white border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10 lg:gap-16">
            
            <!-- Columna Izquierda: Imagen 027.jpg (Figma: 480x560px fijo, radius 8px) -->
            <div class="w-full lg:w-[480px] h-[400px] sm:h-[500px] lg:h-[560px] rounded-[8px] overflow-hidden shadow-sm shrink-0 bg-stone-100">
                <img src="{{ asset('assets/images/Instalaciones y senderos/027.jpg') }}" 
                     alt="Grupos de senderismo y eventos en Montaña Roja" 
                     class="w-full h-full object-cover">
            </div>

            <!-- Columna Derecha: Texto y Acciones (Figma: Ancho 696px) -->
            <div class="w-full max-w-[696px] flex flex-col items-start">
                
                <!-- Tag superior -->
                <span class="font-sans font-normal text-sm sm:text-[16px] text-[#27A599] mb-1.5 block">
                    Experiencias al aire libre
                </span>

                <!-- Título H3 -->
                <h3 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4">
                    Picnic y Fogatas
                </h3>

                <!-- Párrafo Descriptivo -->
                <div class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-[#152A2A] mb-8 space-y-4">
                    <p>
                        Podemos organizar tu picnic durante el día o una noche de fogata (sin estancia nocturna ni campamento).
                    </p>
                    <p class="font-medium text-[#1E4D51]">
                        Costo aproximado: $100 por persona.
                    </p>
                    <div>
                        <p class="font-semibold mb-2">Incluye:</p>
                        <ul class="list-disc pl-5 space-y-1 text-stone-700">
                            <li>Abastecimiento de leña para la fogata.</li>
                            <li>Consumibles básicos.</li>
                        </ul>
                    </div>
                    <p>
                        Armamos cada experiencia con un plan personalizado y adaptado a lo que buscas.
                    </p>
                </div>

                <!-- Grupo de Botones CTA -->
                <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto">
                    <!-- Botón Rojo: Solicitar cotización -->
                    <a href="#formulario-cotizacion" 
                       class="inline-flex items-center justify-center bg-[#d83a2b] hover:bg-[#c23224] text-white font-medium text-[15px] px-6 py-3 rounded-[8px] transition-colors shadow-sm text-center">
                        Solicitar cotización
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Sección: Senderismo (Figma: py-16 / py-20, gap-12) -->
<section class="py-16 lg:py-20 bg-[#F7FEFE] border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="flex flex-col lg:flex-row-reverse items-center justify-between gap-10 lg:gap-16">
            
            <!-- Columna Izquierda: Lista de Senderos (Figma: 480x560px) -->
            <div class="w-full lg:w-[540px] flex flex-col gap-4 shrink-0">
                
                <!-- Sendero 1 -->
                <div class="bg-white border border-[#ACECE5] p-4 rounded-[12px] shadow-sm flex flex-col sm:flex-row gap-4 items-start">
                    <div class="w-full sm:w-[120px] h-[120px] shrink-0 bg-stone-100 rounded-[8px] overflow-hidden">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/029.jpeg') }}" alt="Sendero 1" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h4 class="font-serif font-bold text-lg text-[#1E4D51] mb-1">1. Dentro de Montaña Roja</h4>
                        <p class="text-[13px] text-stone-600 mb-2"><span class="font-medium text-[#152A2A]">Duración:</span> 30 min &middot; <span class="font-medium text-[#152A2A]">Nivel:</span> Básico</p>
                        <ul class="text-[13px] text-stone-700 space-y-1 list-disc pl-4">
                            <li><span class="font-medium text-[#1E4D51]">Costo:</span> $50 por persona.</li>
                            <li>Incluye hidratación al finalizar.</li>
                        </ul>
                    </div>
                </div>

                <!-- Sendero 2 -->
                <div class="bg-white border border-[#ACECE5] p-4 rounded-[12px] shadow-sm flex flex-col sm:flex-row gap-4 items-start">
                    <div class="w-full sm:w-[120px] h-[120px] shrink-0 bg-stone-100 rounded-[8px] overflow-hidden">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/030.jpeg') }}" alt="Sendero 2" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h4 class="font-serif font-bold text-lg text-[#1E4D51] mb-1">2. Parte de "La Casa de Tierra"</h4>
                        <p class="text-[13px] text-stone-600 mb-2"><span class="font-medium text-[#152A2A]">Duración:</span> 2.5 hrs</p>
                        <ul class="text-[13px] text-stone-700 space-y-1 list-disc pl-4">
                            <li><span class="font-medium text-[#1E4D51]">Costo:</span> $50 por persona.</li>
                            <li><span class="font-medium text-[#1E4D51]">Lunch opcional:</span> $100 extra p/p (fruta, sándwich, agua).</li>
                        </ul>
                    </div>
                </div>

                <!-- Sendero 3 -->
                <div class="bg-white border border-[#ACECE5] p-4 rounded-[12px] shadow-sm flex flex-col sm:flex-row gap-4 items-start">
                    <div class="w-full sm:w-[120px] h-[120px] shrink-0 bg-stone-100 rounded-[8px] overflow-hidden">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/031.jpeg') }}" alt="Sendero 3" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h4 class="font-serif font-bold text-lg text-[#1E4D51] mb-1">3. Cueva del Chentil</h4>
                        <p class="text-[13px] text-stone-600 mb-2 leading-tight">Llegada en auto o mototaxi (transporte no incluido).</p>
                        <ul class="text-[13px] text-stone-700 space-y-1 list-disc pl-4">
                            <li><span class="font-medium text-[#1E4D51]">Costo:</span> $50 por persona.</li>
                            <li>Opción de lunch o regresar a comer a Montaña Roja.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Columna Derecha: Texto y Acciones (Figma: Ancho 696px) -->
            <div class="w-full max-w-[696px] flex flex-col items-start">
                
                <!-- Tag superior -->
                <span class="font-sans font-normal text-sm sm:text-[16px] text-[#27A599] mb-1.5 block">
                    Explora el entorno
                </span>

                <!-- Título H3 -->
                <h3 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4">
                    Senderismo
                </h3>

                <!-- Párrafo Descriptivo -->
                <div class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-[#152A2A] mb-8 space-y-4">
                    <p>
                        Descubre nuestros senderos rodeados de naturaleza. Es la actividad ideal para desconectar de la ciudad y respirar aire puro.
                    </p>
                    <p>
                        Contamos con rutas para distintos niveles, para que todos puedan disfrutar del paisaje.
                    </p>
                </div>

                <!-- Grupo de Botones CTA -->
                <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto">
                    <a href="#formulario-cotizacion" 
                       class="inline-flex items-center justify-center bg-[#d83a2b] hover:bg-[#c23224] text-white font-medium text-[15px] px-6 py-3 rounded-[8px] transition-colors shadow-sm text-center">
                        Solicitar cotización
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Sección: Formulario de Cotización -->
<section class="py-16 lg:py-24 bg-stone-50 border-t border-stone-200/80" id="formulario-cotizacion">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16 flex justify-center">
        <!-- Tarjeta Formulario (Estilo similar a reservas) -->
        <div class="w-full max-w-[500px] bg-white rounded-[16px] shadow-sm border border-stone-200 p-6 sm:p-8 flex flex-col gap-6" x-data="{
            nombre: '',
            fecha: '',
            personas: 0,
            evento: '',
            sendero: '',
            get whatsappUrl() {
                const hour = new Date().getHours();
                let saludo = 'Buenos días';
                if (hour >= 12 && hour < 19) saludo = 'Buenas tardes';
                else if (hour >= 19) saludo = 'Buenas noches';
                
                const nombreStr = this.nombre ? `\n- A nombre de: ${this.nombre}` : '';
                const fechaStr = this.fecha ? `\n- Fecha: ${this.fecha}` : '';
                const personasStr = this.personas > 0 ? `\n- Personas: ${this.personas}` : '';
                const eventoStr = this.evento ? `\n- Actividad: ${this.evento}` : '';
                const senderoStr = (this.evento === 'Senderismo' && this.sendero) ? `\n- Ruta: ${this.sendero}` : '';
                
                const msg = encodeURIComponent(`${saludo} Montaña Roja, quisiera solicitar una cotización:${nombreStr}${fechaStr}${personasStr}${eventoStr}${senderoStr}`);
                return `https://api.whatsapp.com/send?phone=529512399575&text=${msg}`;
            }
        }">
            
            <!-- Encabezado Tarjeta -->
            <div class="flex flex-col items-start gap-2">
                <span class="font-sans font-bold text-xs sm:text-[13px] tracking-[1px] uppercase text-[#27A599]">COTIZA TU EXPERIENCIA</span>
                <p class="font-sans font-normal text-sm sm:text-[15px] text-stone-600">
                    Armamos un plan a tu medida. Llena los datos y te enviamos opciones.
                </p>
            </div>

            <!-- Inputs -->
            <div class="flex flex-col gap-5">
                <!-- Nombre -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs sm:text-sm font-medium text-stone-800">Nombre de la reserva</label>
                    <input type="text" x-model="nombre" placeholder="Nombre" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                </div>

                <!-- Fecha -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs sm:text-sm font-medium text-stone-800">¿Qué día sería?</label>
                    <input type="date" x-model="fecha" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51] bg-white">
                </div>
                
                <!-- Personas -->
                <div class="flex items-center justify-between py-1 border-b border-stone-100 pb-4">
                    <span class="text-xs sm:text-sm font-medium text-stone-800">¿Cuántas personas?</span>
                    <div class="flex items-center border border-stone-300 rounded-[8px] overflow-hidden">
                        <button type="button" @click="if(personas > 0) personas--" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">-</button>
                        <span class="w-8 text-center text-sm font-medium text-stone-800" x-text="personas"></span>
                        <button type="button" @click="personas++" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">+</button>
                    </div>
                </div>

                <!-- Evento -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs sm:text-sm font-medium text-stone-800">¿Qué actividad te interesa?</label>
                    <select x-model="evento" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51] bg-white">
                        <option value="" disabled hidden>Selecciona una opción</option>
                        <option value="Picnic">Picnic</option>
                        <option value="Fogata">Fogata</option>
                        <option value="Senderismo">Senderismo</option>
                    </select>
                </div>

                <!-- Sub-menú Senderos -->
                <div class="flex flex-col gap-2" x-show="evento === 'Senderismo'" style="display: none;" x-transition>
                    <label class="text-xs sm:text-sm font-medium text-stone-800">¿Qué ruta de senderismo?</label>
                    <select x-model="sendero" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51] bg-white">
                        <option value="" disabled hidden>Selecciona una ruta</option>
                        <option value="1. Dentro de Montaña Roja">1. Dentro de Montaña Roja</option>
                        <option value="2. Parte de La Casa de Tierra">2. Parte de La Casa de Tierra</option>
                        <option value="3. Cueva del Chentil">3. Cueva del Chentil</option>
                    </select>
                </div>
            </div>

            <!-- Botón CTA WhatsApp -->
            <div class="flex flex-col gap-2 pt-2 border-t border-stone-100">
                <a :href="whatsappUrl" target="_blank" class="w-full inline-flex items-center justify-center gap-2.5 bg-[#d83a2b] hover:bg-[#c23224] text-white font-medium text-sm sm:text-[15px] py-3.5 px-4 rounded-[8px] transition-colors shadow-sm text-center">
                    <svg class="w-5 h-5 fill-current text-white shrink-0" viewBox="0 0 24 24">
                        <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 0 0 1.333 4.993L2 22l5.233-1.237a9.994 9.994 0 0 0 4.779 1.217h.004c5.505 0 9.99-4.478 9.99-9.984 0-2.669-1.039-5.176-2.925-7.062A9.925 9.925 0 0 0 12.012 2zm0 18.324h-.003a8.318 8.318 0 0 1-4.24-1.157l-.304-.18-3.111.736.837-3.031-.197-.314a8.307 8.307 0 0 1-1.275-4.4c.001-4.588 3.737-8.32 8.293-8.32 2.215 0 4.298.863 5.864 2.43 1.566 1.567 2.428 3.65 2.427 5.866-.001 4.589-3.738 8.321-8.286 8.321zm4.542-6.223c-.249-.125-1.472-.726-1.7-.809-.229-.083-.395-.125-.561.125-.166.249-.645.809-.79 1-.146.19-.292.208-.541.083s-1.053-.388-2.006-1.238c-.741-.661-1.241-1.478-1.387-1.728-.146-.249-.016-.384.109-.508.113-.112.249-.291.374-.437.125-.145.166-.249.249-.415.083-.166.042-.312-.021-.437-.062-.125-.561-1.351-.77-1.85-.203-.487-.41-.421-.561-.428l-.478-.009c-.166 0-.437.062-.665.312-.229.249-.874.854-.874 2.081 0 1.228.895 2.414 1.02 2.581.125.166 1.761 2.689 4.266 3.771.596.257 1.061.411 1.424.526.598.19 1.143.163 1.573.099.48-.072 1.472-.602 1.68-1.185.207-.582.207-1.081.145-1.185-.062-.104-.228-.166-.477-.291z"/>
                    </svg>
                    <span>Cotizar por WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
