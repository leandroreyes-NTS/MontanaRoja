@extends('layouts.app')

@section('content')
<!-- Hero Section: Cómo Llegar a Montaña Roja (Figma: 1920x436 fijo) -->
<section class="relative bg-[#0d1e20] h-[436px] flex items-center overflow-hidden">
    <!-- Imagen aérea de fondo (028.jpg en Instalaciones y senderos) -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/Instalaciones y senderos/028.jpeg') }}" 
             alt="Cómo Llegar a Montaña Roja" 
             class="w-full h-full object-cover object-center">
        <!-- Overlays de Figma: #000000 20% y #1E4245 60% -->
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-[#1E4245]/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#102426]/95 via-[#102426]/70 to-transparent"></div>
    </div>

    <!-- Contenido del Hero (max-w 649px) -->
    <div class="relative z-10 w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="max-w-[649px]">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-4">
                <a href="{{ route('inicio') }}" class="font-sans font-normal text-[14px] leading-[28px] text-white hover:underline">
                    Inicio
                </a>
                <span class="text-[#4ED0CE] text-sm">→</span>
                <span class="font-sans font-bold text-[14px] leading-[28px] text-[#4ED0CE]">
                    Ubicación y Contacto
                </span>
            </nav>

            <!-- Título H1 (Fraunces 48px / lh 56px / ls -0.72px) -->
            <h1 class="font-serif font-semibold text-3xl sm:text-4xl lg:text-[48px] lg:leading-[56px] text-white tracking-[-0.72px] mb-4">
                Cómo Llegar a Montaña Roja
            </h1>

            <!-- Subtítulo (Bricolage Grotesque 18px / lh 28px) -->
            <p class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-white/95">
                Carretera México 135, km 125 · Cuicatlán, Oaxaca · Dentro de la Reserva Tehuacán-Cuicatlán
            </p>

        </div>
    </div>
</section>

<!-- Sección: Guía de ruta / Dirección exacta (Figma: 1920x738.33 adaptativo, py-20) -->
<section class="py-16 lg:py-20 bg-white border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Mapa y Botones de Navegación (Figma: 680px ancho) -->
            <div class="lg:col-span-6 w-full flex flex-col gap-4">
                <!-- Marco del Mapa en Vista Satelital (Figma: 680x516.33 adaptativo) -->
                <div class="w-full h-[360px] sm:h-[440px] lg:h-[480px] rounded-[12px] overflow-hidden border border-stone-200 shadow-sm bg-stone-100">
                    <iframe 
                        src="https://maps.google.com/maps?q=17.7480,-96.9503&t=k&z=14&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Botones de Navegación (Figma: Frame horizontal 332px relleno x 52px fijo) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    <!-- Botón Rojo Waze -->
                    <a href="https://waze.com/ul?ll=17.7480,-96.9503&navigate=yes" 
                       target="_blank" 
                       class="inline-flex items-center justify-center gap-2.5 bg-[#d83a2b] hover:bg-[#c23224] text-white font-medium text-[15px] h-[52px] px-5 rounded-[8px] transition-colors shadow-sm text-center">
                        <svg class="w-5 h-5 fill-current shrink-0" viewBox="0 0 24 24">
                            <path d="M19.98 12.01c0-4.41-3.59-8-8-8s-8 3.59-8 8c0 1.25.29 2.44.8 3.5l-1.07 3.91 3.99-1.05c1.23.66 2.64 1.04 4.14 1.04 4.41 0 8-3.59 8-8zm-8 6.4c-1.28 0-2.48-.34-3.52-.93l-.25-.15-2.61.69.7-2.55-.16-.26c-.65-1.03-1-2.25-1-3.53 0-3.69 3.01-6.7 6.7-6.7s6.7 3.01 6.7 6.7-3.01 6.73-6.73 6.73zm-2.85-8.15c-.41 0-.75.34-.75.75s.34.75.75.75.75-.34.75-.75-.34-.75-.75-.75zm5.7 0c-.41 0-.75.34-.75.75s.34.75.75.75.75-.34.75-.75-.34-.75-.75-.75zm-6.2 3.63c.31.88 1.83 2.12 3.35 2.12s3.04-1.24 3.35-2.12c.08-.22-.05-.45-.27-.51-.22-.07-.46.06-.52.28-.21.59-1.39 1.55-2.56 1.55s-2.35-.96-2.56-1.55c-.07-.22-.3-.35-.52-.28-.22.06-.35.29-.27.51z"/>
                        </svg>
                        <span>Abrir en Waze</span>
                    </a>

                    <!-- Botón Blanco Google Maps -->
                    <a href="https://maps.app.goo.gl/oFfiemB5xiaQD5uN7" 
                       target="_blank" 
                       class="inline-flex items-center justify-center gap-2.5 bg-white hover:bg-stone-50 border border-stone-300 text-[#152A2A] font-medium text-[15px] h-[52px] px-5 rounded-[8px] transition-colors shadow-sm text-center">
                        <svg class="w-5 h-5 text-[#1e8a8a] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"/>
                            <line x1="8" y1="2" x2="8" y2="18"/>
                            <line x1="16" y1="6" x2="16" y2="22"/>
                        </svg>
                        <span>Abrir en Google Maps</span>
                    </a>
                </div>
            </div>

            <!-- Columna Derecha: Información de Dirección y Coordenadas (Figma: 680px ancho) -->
            <div class="lg:col-span-6 w-full max-w-[680px] flex flex-col items-start" x-data="{ copiado: false }">
                
                <!-- Tag superior -->
                <span class="font-sans font-normal text-sm sm:text-[16px] text-[#27A599] mb-1.5 block">
                    Guía de ruta
                </span>

                <!-- Título H3 (Fraunces 32px / lh 40px, #1E4D51) -->
                <h3 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4">
                    Dirección exacta
                </h3>

                <!-- Párrafos de Dirección (Bricolage Grotesque 18px / lh 28px) -->
                <div class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-[#152A2A] mb-8">
                    <p>Carretera México 135, km 125</p>
                    <p>San Juan Bautista Cuicatlán, Oaxaca · CP 68670</p>
                    <p>Dentro de la Reserva de la Biósfera Tehuacán-Cuicatlán</p>
                </div>

                <!-- Divisor -->
                <div class="w-full border-t border-stone-200/80 mb-6"></div>

                <!-- Bloque Coordenadas GPS -->
                <div class="flex flex-col gap-2">
                    <span class="font-sans font-normal text-sm text-stone-500">
                        Coordenadas GPS
                    </span>
                    <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">
                        17.7480, -96.9503
                    </span>
                    
                    <!-- Botón Copiar Coordenadas con Feedback Interactivo -->
                    <button type="button" 
                            @click="navigator.clipboard.writeText('17.7480, -96.9503'); copiado = true; setTimeout(() => copiado = false, 2000)" 
                            class="mt-2 inline-flex items-center gap-2.5 px-4 py-2.5 rounded-[8px] bg-[#F7FEFE] hover:bg-[#ebf8f8] border border-[#ACECE5] text-[#152A2A] font-medium text-sm transition-colors w-fit">
                        <span x-text="copiado ? '¡Copiado!' : 'Copiar coordenadas'"></span>
                        <svg class="w-4 h-4 text-[#1e8a8a] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Sección: Preguntas Frecuentes / FAQs (Figma: py-10 / py-20, max-w-[1120px]) -->
<section class="py-12 lg:py-16 bg-white border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="max-w-[1120px]" x-data="{ openFaq: null }">
            
            <!-- Encabezado de la sección -->
            <div class="mb-10">
                <span class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-[#27A599] mb-1.5 block">
                    Antes de venir
                </span>
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px]">
                    Lo que más nos preguntan
                </h2>
            </div>

            <!-- Lista de Acordeones / FAQs -->
            <div class="flex flex-col divide-y divide-stone-200/80 border-t border-b border-stone-200/80">
                
                <!-- 1. ¿Se llega en coche normal o hace falta camioneta? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 1 ? null : 1" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿Se llega en coche normal o hace falta camioneta?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 1 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            Se llega en coche normal. Estamos sobre la carretera federal, sin tramos de terracería.
                        </p>
                    </div>
                </div>

                <!-- 2. ¿Hay transporte público? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 2 ? null : 2" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿Hay transporte público?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 2 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            Llegan autobuses y camionetas a San Juan Bautista Cuicatlán desde Oaxaca y Tehuacán. Desde el pueblo, taxi hasta el km 125.
                        </p>
                    </div>
                </div>

                <!-- 3. ¿A qué hora conviene llegar? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 3 ? null : 3" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿A qué hora conviene llegar?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 3 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            Si acampas, el check-in es de 1 a 3 de la tarde. Si vienes a comer, entre 8 am y 10 pm los fines de semana. La primera vez, llega con luz.
                        </p>
                    </div>
                </div>

                <!-- 4. ¿Hay gasolineras cerca? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 4 ? null : 4" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿Hay gasolineras cerca?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 4 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            En el km 125 no hay. Carga en Cuicatlán, en Teotitlán o antes de salir de Oaxaca o Tehuacán.
                        </p>
                    </div>
                </div>

                <!-- 5. ¿Y si me pierdo o no tengo señal? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 5 ? null : 5" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿Y si me pierdo o no tengo señal?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 5 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 5" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            Llámanos antes de perder cobertura: <a href="tel:9512399575" class="font-medium underline hover:text-[#1E4D51]">951 239 9575</a>. Y guarda una captura de esta página antes de arrancar.
                        </p>
                    </div>
                </div>

                <!-- 6. ¿Hay bloqueos en la carretera 135? -->
                <div class="py-5 sm:py-6">
                    <button type="button" 
                            @click="openFaq = openFaq === 6 ? null : 6" 
                            class="w-full flex items-center justify-between text-left group">
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                            ¿Hay bloqueos en la carretera 135?
                        </span>
                        <span class="text-2xl font-light text-[#27A599] shrink-0 ml-4 transition-transform duration-200" 
                              :class="openFaq === 6 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openFaq === 6" x-collapse class="mt-3">
                        <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/90">
                            A veces hay manifestaciones en el corredor Oaxaca–Puebla. Si tienes reserva, escríbenos el mismo día.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
