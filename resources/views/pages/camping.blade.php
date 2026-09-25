@extends('layouts.app')

@section('content')
<!-- Hero Section: Camping (Figma: 1920x356 adaptativo, py-[56px]) -->
<section class="relative bg-[#0d1b1e] py-14 lg:py-[56px] min-h-[356px] flex items-center overflow-hidden">
    <!-- Imagen de fondo con overlay oscuro -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/Instalaciones y senderos/020.jpg') }}" 
             alt="Camping bajo las estrellas" 
             class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b1a1c]/90 via-[#0b1a1c]/75 to-transparent"></div>
    </div>

    <!-- Contenido -->
    <div class="relative z-10 w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="max-w-[649px]">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs sm:text-[13px] text-[#3eb4af] font-medium mb-4 tracking-wide">
                <a href="{{ route('inicio') }}" class="hover:underline opacity-90 text-white/70 hover:text-white transition-colors">Inicio</a>
                <span class="text-white/40">→</span>
                <span class="text-[#3eb4af]">Camping & Experiencias</span>
            </nav>

            <!-- Título H1 (Figma: 649x112, Fraunces serif) -->
            <h1 class="font-serif font-semibold text-3xl sm:text-4xl lg:text-[44px] lg:leading-[56px] text-white tracking-[-0.72px] mb-4">
                Acampa bajo las estrellas de Oaxaca
            </h1>

            <!-- Subtítulo -->
            <p class="text-white/80 text-sm sm:text-[15px] leading-relaxed font-normal">
                Sin WiFi, sin televisión, sin ruido. Solo el río Grande, la fogata y un cielo que hace años no veías así.
            </p>

        </div>
    </div>
</section>

<!-- Sección: Tarifas, Amenidades y Reserva -->
<section class="py-12 lg:py-16 bg-[#fafafa]">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start" x-data="{
            nombre: '',
            checkIn: '',
            checkOut: '',
            personas: 0,
            casas: 0,
            precioPorCasa: 350,
            get total() {
                return this.casas * this.precioPorCasa;
            },
            get whatsappUrl() {
                const hour = new Date().getHours();
                let saludo = 'Buenos días';
                if (hour >= 12 && hour < 19) saludo = 'Buenas tardes';
                else if (hour >= 19) saludo = 'Buenas noches';
                
                const nombreStr = this.nombre ? `\n- A nombre de: ${this.nombre}` : '';
                const msg = encodeURIComponent(`${saludo} Montaña Roja, deseo hacer una reservación:${nombreStr}\n- Tipo de reserva: Camping\n- Llegada: ${this.checkIn}\n- Salida: ${this.checkOut}\n- Personas: ${this.personas}\n- Casas de campaña: ${this.casas}\n- Total estimado: $${this.total} MXN`);
                return `https://api.whatsapp.com/send?phone=529512399575&text=${msg}`;
            }
        }">
            
            <!-- COLUMNA IZQUIERDA (848px en Figma -> 7 cols) -->
            <div class="lg:col-span-7 flex flex-col gap-8">
                
                <!-- Tarjeta Verde de Tarifa (Figma: #1E4D51, rounded-2xl, p-8) -->
                <div class="bg-[#1E4D51] text-white rounded-[16px] p-7 sm:p-8 shadow-md">
                    <span class="text-xs sm:text-[13px] uppercase tracking-wider text-[#3eb4af] font-medium block mb-2">
                        TARIFA DE CAMPING
                    </span>
                    
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="font-serif font-bold text-[40px] leading-[48px] text-white">$350</span>
                        <span class="text-xs sm:text-sm text-[#3eb4af] font-medium uppercase">MXN /NOCHE</span>
                    </div>
                    
                    <p class="text-[#4ED0CE] text-[18px] leading-[28px] font-normal mb-5">
                        Por casa de campaña
                    </p>

                    <div class="flex items-center gap-2 pb-5 border-b border-teal-600/50 mb-5">
                        <span class="text-white text-[18px] leading-[28px] font-normal">Hasta 4 personas</span>
                        <div class="flex items-center gap-0.5 text-[#3eb4af]">
                            <!-- Iconos 4 personas -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg>
                        </div>
                    </div>

                    <ul class="flex flex-col gap-3 mb-6">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0 mt-1.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span><strong class="font-semibold text-[18px] leading-[28px] text-white">Desayuno para 2 personas incluido:</strong> <span class="font-normal text-[18px] leading-[28px] text-white">café, pan y fruta.</span></span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-rose-400 font-bold text-base leading-none mt-1">✕</span>
                            <span><strong class="font-semibold text-[18px] leading-[28px] text-white">Trae tu casa de campaña:</strong> <span class="font-normal text-[18px] leading-[28px] text-white">no rentamos equipo.</span></span>
                        </li>
                    </ul>

                    <p class="text-[11px] sm:text-xs text-[#3eb4af]/70 border-t border-teal-600/40 pt-4 leading-relaxed">
                        Llega con luz de día. La señal en la carretera 135 es intermitente: descarga la ruta antes de salir.
                    </p>
                </div>

                <!-- Servicios y Amenidades -->
                <div class="bg-white rounded-[16px] p-7 sm:p-8 border border-stone-200/80 shadow-sm">
                    <h3 class="font-serif font-semibold text-xl text-stone-900 mb-6">
                        Servicios y amenidades
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-6 mb-8">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Cocina equipada</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Comedor al aire libre</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Parrilla y asador</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Fogatero</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Acceso al río Grande</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Senderos señalizados</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Zonas de picnic</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Estacionamiento gratuito</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Baños</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Botiquín</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Cámaras de seguridad</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#3eb4af] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-[#152A2A] text-[18px] leading-[28px] font-normal font-sans">Pet friendly</span>
                        </div>
                    </div>

                    <!-- Nota de advertencia azul -->
                    <div class="flex items-start gap-3 p-4 bg-teal-50/50 border border-[#3eb4af]/40 rounded-[10px] text-xs text-stone-600 leading-relaxed">
                        <svg class="w-4 h-4 text-[#1e8a8a] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span><strong>Lo que no vas a encontrar:</strong> WiFi ni señal · TV · aire acondicionado · lavadora · renta de casas de campaña · detectores de humo. No apto para menores de 2 años.</span>
                    </div>
                </div>

                <!-- Bloque: Horarios de Llegada y Salida (Figma: 848x140) -->
                <div class="flex flex-col gap-3">
                    <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">
                        Horarios de Llegada y Salida
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Check-in -->
                        <div class="bg-[#F9FAFA] border border-stone-200/70 rounded-[8px] p-4 flex flex-col justify-center">
                            <span class="text-xs font-normal text-stone-500 mb-1">Check-in (llegada)</span>
                            <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">1:00 pm – 3:00 pm</span>
                        </div>

                        <!-- Check-out -->
                        <div class="bg-[#F9FAFA] border border-stone-200/70 rounded-[8px] p-4 flex flex-col justify-center">
                            <span class="text-xs font-normal text-stone-500 mb-1">Check-out (salida)</span>
                            <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">Antes de las 2:00 pm</span>
                        </div>
                    </div>
                </div>

                <!-- Bloque: Capacidad máxima y Mascotas (Figma: 848x138, gap-4) -->
                <div class="flex flex-col gap-3">
                    <!-- Capacidad máxima -->
                    <div class="flex items-center justify-between p-4 bg-[#F2F9F9]/60 border border-teal-100 rounded-[8px]">
                        <div class="flex items-center gap-3">
                            <!-- Icono Persona Sólido #238A8A -->
                            <svg class="w-5 h-5 text-[#238A8A] shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                            </svg>
                            <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                                Capacidad máxima
                            </span>
                        </div>
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">
                            10 personas por sitio
                        </span>
                    </div>

                    <!-- Mascotas -->
                    <div class="flex items-center justify-between p-4 bg-[#F2F9F9]/60 border border-teal-100 rounded-[8px]">
                        <div class="flex items-center gap-3">
                            <!-- Icono Huella Mascota Sólido #238A8A -->
                            <svg class="w-5 h-5 text-[#238A8A] shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="4.5" cy="10.5" r="2.5"/>
                                <circle cx="9" cy="5.5" r="2.5"/>
                                <circle cx="15" cy="5.5" r="2.5"/>
                                <circle cx="19.5" cy="10.5" r="2.5"/>
                                <path d="M12 11.5c-3 0-5.5 2-5.5 5 0 2 1.8 3.5 5.5 3.5s5.5-1.5 5.5-3.5c0-3-2.5-5-5-5z"/>
                            </svg>
                            <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                                Mascotas
                            </span>
                        </div>
                        <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">
                            Bienvenidas
                        </span>
                    </div>
                </div>

                <!-- Bloque: Reglamento e información práctica (Figma: 848px, space-y-10) -->
                <div class="mt-10 pt-10 border-t border-stone-200/80" x-data="{ openTab: 1 }">
                    
                    <!-- Encabezado -->
                    <div class="mb-8">
                        <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-2 block">
                            Antes de venir
                        </span>
                        <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px]">
                            Reglamento e información práctica
                        </h2>
                    </div>

                    <!-- Lista de Acordeones / Información -->
                    <div class="flex flex-col divide-y divide-stone-200/80 border-t border-b border-stone-200/80">
                        
                        <!-- 1. Fogatas y uso del fuego -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 1 ? null : 1" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Fogatas y uso del fuego
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 1 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 1" x-collapse class="mt-3">
                                <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/85">
                                    El lugar para fogatas está sujeto a disponibilidad y hay leña en el sitio. Si enciendes una, apágala bien antes de retirarte o dormir. Estamos en área natural protegida.
                                </p>
                            </div>
                        </div>

                        <!-- 2. Limpieza y manejo de basura -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 2 ? null : 2" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Limpieza y manejo de basura
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 2 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 2" x-collapse class="mt-3">
                                <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/85">
                                    Deja el sitio limpio y usa los contenedores, separando orgánica e inorgánica. No dejes basura en el terreno ni en el río.
                                </p>
                            </div>
                        </div>

                        <!-- 3. Fauna, río y ecosistema -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 3 ? null : 3" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Fauna, río y ecosistema
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 3 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 3" x-collapse class="mt-3">
                                <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/85 mb-3">
                                    Acceso libre al río Grande, con restricciones de conservación.
                                </p>
                                <ul class="flex flex-col gap-2 font-sans text-[15px] text-[#152A2A]">
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-rose-500 font-bold text-base leading-none">✕</span>
                                        <span>Puedes encontrar aves, peces, nutrias, iguanas y serpientes no venenosas.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-rose-500 font-bold text-base leading-none">✕</span>
                                        <span>Está prohibido alimentar a la fauna.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-rose-500 font-bold text-base leading-none">✕</span>
                                        <span>Las mascotas deben permanecer bajo control y a la vista de su dueño en todo momento.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- 4. Senderos y seguridad -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 4 ? null : 4" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Senderos y seguridad
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 4 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 4" x-collapse class="mt-3">
                                <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/85">
                                    Transita solo por senderos señalizados y usa calzado adecuado: hay zonas elevadas sin barandal. Hay botiquín y cámaras en el estacionamiento.
                                </p>
                            </div>
                        </div>

                        <!-- 5. Mascotas, menores y convivencia -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 5 ? null : 5" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Mascotas, menores y convivencia
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 5 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 5" x-collapse class="mt-3">
                                <ul class="flex flex-col gap-2.5 font-sans text-[15px] text-[#152A2A]">
                                    <li class="flex items-center gap-2.5">
                                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                        <span>Somos pet friendly; los animales de asistencia son siempre bienvenidos.</span>
                                    </li>
                                    <li class="flex items-center gap-2.5">
                                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                        <span>Espacio apto para fumadores en zonas al aire libre.</span>
                                    </li>
                                    <li class="flex items-center gap-2.5">
                                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                        <span>Fotógrafos comerciales autorizados con previo aviso.</span>
                                    </li>
                                    <li class="flex items-center gap-2.5">
                                        <span class="text-rose-500 font-bold text-base leading-none">✕</span>
                                        <span>El sitio no es adecuado para bebés menores de 2 años.</span>
                                    </li>
                                    <li class="flex items-center gap-2.5">
                                        <svg class="w-4 h-4 text-[#2dd4bf] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                        <span>Capacidad máxima de 10 personas por sitio.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- 6. Horarios, consumo y reservación -->
                        <div class="py-5">
                            <button type="button" @click="openTab = openTab === 6 ? null : 6" class="w-full flex items-center justify-between text-left group">
                                <span class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] group-hover:text-[#1E4D51] transition-colors">
                                    Horarios, consumo y reservación
                                </span>
                                <span class="text-xl font-light text-[#1e8a8a] shrink-0 ml-4 transition-transform duration-200" :class="openTab === 6 ? 'rotate-45' : ''">+</span>
                            </button>
                            <div x-show="openTab === 6" x-collapse class="mt-3">
                                <p class="font-sans font-normal text-[16px] leading-[24px] text-[#152A2A]/85">
                                    El restaurante y bar abren de viernes a domingo, de 8:00 am a 10:00 pm. De lunes a jueves, solo con reserva. Todo el servicio se elabora bajo reservación previa.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- COLUMNA DERECHA: Card de Reserva Flotante (Figma: 480x744.5, rounded-2xl, p-8) -->
            <div class="lg:col-span-5 sticky top-24">
                <div class="bg-white rounded-[16px] p-7 sm:p-8 border border-stone-200/80 shadow-[0_4px_25px_rgba(0,0,0,0.05)]">
                    
                    <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase block mb-1">
                        Reserva tu lugar
                    </span>
                    <p class="text-sm text-stone-600 mb-6">
                        Cuando reservas, tu menú empieza a planearse.
                    </p>

                    <div class="flex flex-col gap-4 mb-6">
                        <!-- Nombre de la persona -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">Nombre de la reserva</label>
                            <input type="text" x-model="nombre" placeholder="Nombre" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                        </div>

                        <!-- Día de llegada -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">¿Qué día llegan?</label>
                            <input type="date" x-model="checkIn" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                        </div>

                        <!-- Día de salida -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">¿Qué día se van?</label>
                            <input type="date" x-model="checkOut" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                        </div>

                        <!-- Contador Personas -->
                        <div class="flex items-center justify-between py-1">
                            <span class="text-xs sm:text-sm font-medium text-stone-800">¿Cuántas personas?</span>
                            <div class="flex items-center border border-stone-300 rounded-[8px] overflow-hidden">
                                <button type="button" @click="if(personas > 1) personas--" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">-</button>
                                <span class="w-8 text-center text-sm font-medium text-stone-800" x-text="personas"></span>
                                <button type="button" @click="personas++" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">+</button>
                            </div>
                        </div>

                        <!-- Contador Casas de campaña -->
                        <div class="flex items-center justify-between py-1">
                            <span class="text-xs sm:text-sm font-medium text-stone-800">¿Cuántas casas de campaña?</span>
                            <div class="flex items-center border border-stone-300 rounded-[8px] overflow-hidden">
                                <button type="button" @click="if(casas > 1) casas--" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">-</button>
                                <span class="w-8 text-center text-sm font-medium text-stone-800" x-text="casas"></span>
                                <button type="button" @click="casas++" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Resumen y Total -->
                    <div class="pt-4 border-t border-stone-200 mb-6">
                        <p class="text-xs text-stone-500 mb-2">
                            <span x-text="casas"></span> casa<span x-show="casas > 1">s</span> × 1 noche · hasta <span x-text="casas * 4"></span> personas
                        </p>
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs sm:text-sm font-medium text-stone-700">Total estimado</span>
                            <div class="flex items-baseline gap-1">
                                <span class="font-serif font-bold text-2xl sm:text-3xl text-[#1E4D51]" x-text="'$' + total"></span>
                                <span class="text-xs font-semibold text-[#1e8a8a]">MXN</span>
                            </div>
                        </div>
                    </div>

                    <!-- Botón CTA Rojo WhatsApp -->
                    <a :href="whatsappUrl" target="_blank" class="w-full inline-flex items-center justify-center gap-2 bg-[#d83a2b] hover:bg-red-700 text-white font-medium text-sm sm:text-[15px] py-3.5 px-4 rounded-[8px] transition-colors shadow-sm mb-3">
                        <svg class="w-5 h-5 fill-current text-white shrink-0" viewBox="0 0 24 24">
                            <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 0 0 1.333 4.993L2 22l5.233-1.237a9.994 9.994 0 0 0 4.779 1.217h.004c5.505 0 9.99-4.478 9.99-9.984 0-2.669-1.039-5.176-2.925-7.062A9.925 9.925 0 0 0 12.012 2zm0 18.324h-.003a8.318 8.318 0 0 1-4.24-1.157l-.304-.18-3.111.736.837-3.031-.197-.314a8.307 8.307 0 0 1-1.275-4.4c.001-4.588 3.737-8.32 8.293-8.32 2.215 0 4.298.863 5.864 2.43 1.566 1.567 2.428 3.65 2.427 5.866-.001 4.589-3.738 8.321-8.286 8.321zm4.542-6.223c-.249-.125-1.472-.726-1.7-.809-.229-.083-.395-.125-.561.125-.166.249-.645.809-.79 1-.146.19-.292.208-.541.083s-1.053-.388-2.006-1.238c-.741-.661-1.241-1.478-1.387-1.728-.146-.249-.016-.384.109-.508.113-.112.249-.291.374-.437.125-.145.166-.249.249-.415.083-.166.042-.312-.021-.437-.062-.125-.561-1.351-.77-1.85-.203-.487-.41-.421-.561-.428l-.478-.009c-.166 0-.437.062-.665.312-.229.249-.874.854-.874 2.081 0 1.228.895 2.414 1.02 2.581.125.166 1.761 2.689 4.266 3.771.596.257 1.061.411 1.424.526.598.19 1.143.163 1.573.099.48-.072 1.472-.602 1.68-1.185.207-.582.207-1.081.145-1.185-.062-.104-.228-.166-.477-.291z"/>
                        </svg>
                        <span>Reservar por WhatsApp</span>
                    </a>

                    <p class="text-[11px] text-stone-500 text-center leading-relaxed">
                        No se cobra en línea. Confirmamos disponibilidad y anticipo por WhatsApp.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección: Actividades habituales (Lo que pasa en Montaña Roja) -->
<section class="py-16 lg:py-20 bg-white border-t border-stone-200/70">
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

<!-- Sección: Galería (El lugar, como es) -->
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        
        <!-- Encabezado -->
        <div class="mb-12">
            <span class="text-xs sm:text-[13px] font-semibold text-[#1e8a8a] tracking-wider uppercase mb-2 block">
                Galería
            </span>
            <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-tight">
                El lugar, como es
            </h2>
        </div>

        <!-- Mosaico / Cuadrícula de fotos (gap-6) -->
        <div class="flex flex-col gap-6">
            
            <!-- Fila Superior: 3 columnas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- 007.jpg (Arcoíris) -->
                <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/007.jpg') }}" 
                         alt="Paisaje con arcoíris en Montaña Roja" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- 008.jpg (Camping de noche) -->
                <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/008.jpg') }}" 
                         alt="Tienda de campaña bajo las estrellas" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- 009.jpg (Sendero vertical) -->
                <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/009.jpg') }}" 
                         alt="Senderos de la Reserva" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>

            <!-- Fila Inferior: Mosaico asimétrico (Col 1 vertical, Col 2 y 3 divididas) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Columna 1: 010.jpg (Mesa azul y fondo rústico vertical) -->
                <div class="rounded-[12px] overflow-hidden h-[420px] md:h-full bg-stone-100 shadow-sm">
                    <img src="{{ asset('assets/images/Instalaciones y senderos/010.jpg') }}" 
                         alt="Mesa rústica al aire libre" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Columna 2: 011.jpg (arriba) y 013.jpg (abajo) -->
                <div class="flex flex-col gap-6">
                    <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/011.jpg') }}" 
                             alt="Teléfono vintage" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/013.jpg') }}" 
                             alt="Río y naturaleza" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <!-- Columna 3: 012.jpg (arriba) y 014.jpg (abajo) -->
                <div class="flex flex-col gap-6">
                    <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/012.jpg') }}" 
                             alt="Instalaciones y sanitarios" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="rounded-[12px] overflow-hidden aspect-[4/3] bg-stone-100 shadow-sm">
                        <img src="{{ asset('assets/images/Instalaciones y senderos/014.jpg') }}" 
                             alt="Cocina rústica a la leña" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
