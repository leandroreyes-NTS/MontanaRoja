@extends('layouts.app')

@section('content')
<!-- Hero Section: Restaurante & Bar (Figma: 1920x436 adaptativo) -->
<section class="relative bg-[#0d1e20] min-h-[436px] flex items-center overflow-hidden py-14 lg:py-0">
    <!-- Imagen de fondo (023.jpg de Comida y bebidas) -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/Comida y bebidas/023.jpg') }}" 
             alt="Fusión Gastronómica y Sabores Inolvidables" 
             class="w-full h-full object-cover object-center">
        <!-- Overlays de Figma: #000000 20% y #1E4245 60% -->
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-[#1E4245]/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#102426]/90 via-[#102426]/60 to-transparent"></div>
    </div>

    <!-- Contenido (Ancho max 649px) -->
    <div class="relative z-10 w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="max-w-[649px]">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-4">
                <a href="{{ route('inicio') }}" class="font-sans font-normal text-[14px] leading-[28px] text-white hover:underline">
                    Inicio
                </a>
                <span class="text-[#4ED0CE] text-sm">→</span>
                <span class="font-sans font-bold text-[14px] leading-[28px] text-[#4ED0CE]">
                    Restaurante & Bar
                </span>
            </nav>

            <!-- Título H1 (Figma: Fraunces 48px, lh 56px, ls -0.72px) -->
            <h1 class="font-serif font-semibold text-3xl sm:text-4xl lg:text-[48px] lg:leading-[56px] text-white tracking-[-0.72px] mb-4">
                Fusión Gastronómica y Sabores Inolvidables
            </h1>

            <!-- Subtítulo (Figma: Bricolage Grotesque 18px, lh 28px) -->
            <p class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-white/95">
                Cocina de humo ancestral, guisados y snacks a la leña, coctelería y producto local. Cambia con la temporada.
            </p>

        </div>
    </div>
</section>

<!-- Sección: Propuesta gastronómica y Menú interactivo -->
<section class="py-20 bg-white" x-data="{ activeTab: 'especialidades' }">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
            
            <!-- Columna Izquierda: Botones de Pestañas (Figma: ~280px / 4 cols) -->
            <div class="lg:col-span-4 flex flex-col gap-3">
                
                <!-- Tab 1: Especialidades y Fusión -->
                <button type="button" 
                        @click="activeTab = 'especialidades'" 
                        :class="activeTab === 'especialidades' ? 'bg-[#1E4245] text-white shadow-sm' : 'bg-white hover:bg-stone-50 text-[#152A2A] border border-stone-200/80'" 
                        class="w-full flex items-center gap-3.5 px-5 py-4 rounded-[12px] transition-all text-left">
                    <!-- Icono Tazón / Bowl -->
                    <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                        <!-- 1. Arco superior central (7x4 en x:9, y:4) -->
                        <path d="M9 8c0-2.2 1.57-4 3.5-4s3.5 1.8 3.5 4" />
                        
                        <!-- 2. Arco derecho (7.5x5 en x:13.5, y:8) -->
                        <path d="M13.5 13c0-2.76 1.68-5 3.75-5s3.75 2.24 3.75 5" />

                        <!-- 3. Arco exterior izquierdo (12x6 en x:3, y:7) -->
                        <path d="M3 13c0-3.31 2.69-6 6-6s6 2.69 6 6" />

                        <!-- 4. Hueco interior izquierdo con caída vertical (4x4 en x:7, y:10) -->
                        <path d="M7 13c0-1.1.9-2 2-2s2 .9 2 2v1.5" />

                        <!-- 5. Tazón base con reborde plano (20x7 en x:2, y:13) -->
                        <path d="M2 13h20c-.5 2.5-1.5 4.5-3.5 5.5s-4.5 1.5-6.5 1.5-4.5-.5-6.5-1.5S2.5 15.5 2 13z" />
                    </svg>
                    <span class="font-sans font-semibold text-[14px] sm:text-[15px]">Especialidades y Fusión</span>
                </button>

                <!-- Tab 2: Comidas y Cenas de la Casa -->
                <button type="button" 
                        @click="activeTab = 'comidas'" 
                        :class="activeTab === 'comidas' ? 'bg-[#1E4245] text-white shadow-sm' : 'bg-white hover:bg-stone-50 text-[#152A2A] border border-stone-200/80'" 
                        class="w-full flex items-center gap-3.5 px-5 py-4 rounded-[12px] transition-all text-left">
                    <!-- Icono Corte de Carne / Steak -->
                    <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Silueta exterior (contorno superior e inferior en forma de chuletón 20x12 en x:2, y:4) -->
                        <path d="M16 4.5C10.5 4 4.5 6.5 2.5 11c-1.8 4 .5 8.5 4 9.5 4 1.2 7-1 10.5.5 3 1.2 4.5-.5 4.5-3.5 0-4.5-2-12.5-5.5-13z" />

                        <!-- Franja inferior (20x9.5 en x:2, y:10.5: curva divisoria que conecta de lado a lado) -->
                        <path d="M2.5 11.5c4 2 8 1.5 12 3.8 2.5 1.5 4.8 1.8 6.5-1.5" />

                        <!-- Hueso circular (3x3 en x:15.5, y:9.5) -->
                        <circle cx="17" cy="11" r="1.5" />
                    </svg>
                    <span class="font-sans font-semibold text-[14px] sm:text-[15px]">Comidas y Cenas de la Casa</span>
                </button>

                <!-- Tab 3: Bar, Coctelería y Bebidas -->
                <button type="button" 
                        @click="activeTab = 'bar'" 
                        :class="activeTab === 'bar' ? 'bg-[#1E4245] text-white shadow-sm' : 'bg-white hover:bg-stone-50 text-[#152A2A] border border-stone-200/80'" 
                        class="w-full flex items-center gap-3.5 px-5 py-4 rounded-[12px] transition-all text-left">
                    <!-- Icono Copa de Cóctel -->
                    <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <ellipse cx="12" cy="7" rx="8" ry="3" />
                        <path d="M4 7l8 8 8-8" />
                        <line x1="12" y1="15" x2="12" y2="21" />
                        <line x1="8" y1="21" x2="16" y2="21" />
                    </svg>
                    <span class="font-sans font-semibold text-[14px] sm:text-[15px]">Bar, Coctelería y Bebidas</span>
                </button>

            </div>

            <!-- Columna Derecha: Contenido del Tab (Figma: 696px / 8 cols) -->
            <div class="lg:col-span-8 max-w-[696px]">
                
                <!-- Encabezado de la propuesta -->
                <div class="mb-8">
                    <span class="font-sans font-normal text-[18px] leading-[28px] text-[#27A599] mb-1 block">
                        La propuesta
                    </span>
                    <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px]">
                        Cocina de humo, con sabores del mundo
                    </h2>
                </div>

                <!-- Contenido Tab 1: Especialidades y Fusión -->
                <div x-show="activeTab === 'especialidades'" class="flex flex-col divide-y divide-stone-200/80">
                    
                    <!-- Item 1 -->
                    <div class="py-5 first:pt-0">
                        <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] mb-1">
                            Cocina de humo ancestral Insignia
                        </h3>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Guisados lentos sobre leña, con la técnica que da nombre a la casa.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div class="py-5">
                        <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] mb-1">
                            Pesca fresca del día
                        </h3>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Preparada al momento, según disponibilidad y temporada.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div class="py-5">
                        <div class="flex items-center gap-2.5 mb-1">
                            <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A]">
                                Fusión cuicateca del chef
                            </h3>
                            <span class="bg-[#36B3B1] text-white text-[12px] font-medium px-2.5 py-0.5 rounded-full">
                                Autor
                            </span>
                        </div>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Saberes locales cruzados con técnicas cantonesa, hindú y china: el mundo para el visitante local, lo cuicateco para quien viene de fuera.
                        </p>
                    </div>

                    <!-- Item 4 -->
                    <div class="py-5">
                        <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] mb-1">
                            Productores locales
                        </h3>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Ingredientes de temporada de la región.
                        </p>
                    </div>

                </div>

                <!-- Contenido Tab 2: Comidas y Cenas de la Casa -->
                <div x-show="activeTab === 'comidas'" x-cloak class="flex flex-col divide-y divide-stone-200/80">
                    <div class="py-5 first:pt-0">
                        <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] mb-1">
                            Guisados tradicionales a la leña
                        </h3>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Platillos al centro para compartir con tortillas de comal y salsas de molcajete.
                        </p>
                    </div>
                </div>

                <!-- Contenido Tab 3: Bar, Coctelería y Bebidas -->
                <div x-show="activeTab === 'bar'" x-cloak class="flex flex-col divide-y divide-stone-200/80">
                    <div class="py-5 first:pt-0">
                        <h3 class="font-sans font-semibold text-[18px] leading-[28px] text-[#152A2A] mb-1">
                            Coctelería artesanal y Mezcales
                        </h3>
                        <p class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Selección de mezcales de la región y bebidas refrescantes con botánicos locales.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Sección: La propuesta culinaria (Figma: 1920x720 adaptativo, py-20) -->
<section class="py-16 lg:py-20 bg-white border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Información de la propuesta (Figma: max-w 696px) -->
            <div class="lg:col-span-7 flex flex-col items-start max-w-[696px]">
                
                <!-- Tag superior -->
                <span class="font-sans font-normal text-[18px] leading-[28px] text-[#27A599] mb-1 block">
                    La propuesta
                </span>

                <!-- Título H3 (Fraunces 32px / lh 40px) -->
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-4">
                    Cocina de humo, con sabores del mundo
                </h2>

                <!-- Descripción (Bricolage Grotesque 18px / lh 28px) -->
                <div class="flex flex-col gap-3 text-[#152A2A] font-sans font-normal text-base sm:text-[18px] leading-[28px] mb-6">
                    <p>
                        Christian cruza los saberes cuicatecos con la cocina cantonesa, hindú y china: los de aquí prueban el mundo, y quien viene de lejos conoce esta tierra.
                    </p>
                    <p>
                        Producto fresco, local y de temporada, todo con planeación previa.
                    </p>
                </div>

                <!-- Nota / Info de pie (Figma: 664px, Bricolage Grotesque 14px / lh 24px SemiBold) -->
                <div class="flex items-start gap-2.5 pt-4 border-t border-stone-200/70 text-[#152A2A]">
                    <svg class="w-4 h-4 text-[#27A599] shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    <p class="font-sans font-semibold text-[14px] leading-[24px]">
                        Menú a la medida. No manejamos carta rígida: platillos a la leña, cocina de humo y pesca fresca según la temporada.
                    </p>
                </div>

            </div>

            <!-- Columna Derecha: Imagen del platillo (024.jpg) -->
            <div class="lg:col-span-5 w-full flex justify-center lg:justify-end">
                <div class="w-full max-w-[480px] rounded-[16px] overflow-hidden shadow-md bg-stone-100 aspect-[4/5] sm:aspect-square lg:aspect-[4/5]">
                    <img src="{{ asset('assets/images/Comida y bebidas/024.jpg') }}" 
                         alt="Ensalada y platillos de Montaña Roja" 
                         class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección: Aparta tu mesa / Reserva de restaurante (Figma: 1920x684.5 adaptativo) -->
<section class="py-12 lg:py-16 bg-white border-b border-stone-200/80">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start" x-data="{
            nombre: '',
            fecha: '',
            hora: '',
            personas: 0,
            tipoMenu: 'christian',
            descripcionMenu: '',
            get whatsappUrl() {
                const hour = new Date().getHours();
                let saludo = 'Buenos días';
                if (hour >= 12 && hour < 19) saludo = 'Buenas tardes';
                else if (hour >= 19) saludo = 'Buenas noches';
                
                const nombreStr = this.nombre ? `\n- A nombre de: ${this.nombre}` : '';
                
                let menuInfo = '';
                if (this.tipoMenu === 'christian') {
                    menuInfo = `\n- Menú: Me gustaría que Christian diseñe mi propuesta.`;
                } else if (this.tipoMenu === 'propio') {
                    menuInfo = `\n- Menú: Tengo mi propia idea:\n  ${this.descripcionMenu}`;
                }

                const msg = encodeURIComponent(`${saludo} Montaña Roja, deseo hacer una reservación:${nombreStr}\n- Tipo de reserva: Restaurante y Bar\n- Fecha: ${this.fecha}\n- Hora: ${this.hora}\n- Personas: ${this.personas}${menuInfo}`);
                return `https://api.whatsapp.com/send?phone=529512399575&text=${msg}`;
            }
        }">
            
            <!-- COLUMNA IZQUIERDA: Horarios e información (Figma: 848px / 7 cols) -->
            <div class="lg:col-span-7 flex flex-col items-start">
                
                <!-- Tag superior (Figma: #27A599, 18px / 28px) -->
                <span class="font-sans font-normal text-[18px] leading-[28px] text-[#27A599] mb-1 block">
                    Reserva
                </span>

                <!-- Título H2 (Figma: Fraunces 32px / 40px, #1E4D51) -->
                <h2 class="font-serif font-semibold text-2xl sm:text-[32px] sm:leading-[40px] text-[#1E4D51] tracking-[-0.96px] mb-3">
                    Aparta tu mesa
                </h2>

                <!-- Subtítulo (Figma: Bricolage Grotesque 18px / 28px, #152A2A) -->
                <p class="font-sans font-normal text-base sm:text-[18px] leading-[28px] text-[#152A2A] mb-8">
                    Reservar no es un trámite: nos permite comprar fresco y encender la leña a tiempo.
                </p>

                <!-- Tarjetas de Horario (Figma: bg #F7FEFE, border #ACECE5 0.5px, rounded-[8px], p-4, gap-4) -->
                <div class="w-full flex flex-col gap-4">
                    <!-- Fila 1: Fin de semana -->
                    <div class="w-full bg-[#F7FEFE] border border-[#ACECE5] rounded-[8px] px-5 py-4 flex items-center justify-between">
                        <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Viernes, sábado y domingo
                        </span>
                        <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            8:00 – 22:00
                        </span>
                    </div>

                    <!-- Fila 2: Entre semana -->
                    <div class="w-full bg-[#F7FEFE] border border-[#ACECE5] rounded-[8px] px-5 py-4 flex items-center justify-between">
                        <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Lunes a jueves
                        </span>
                        <span class="font-sans font-normal text-[18px] leading-[28px] text-[#152A2A]">
                            Con reserva previa
                        </span>
                    </div>
                </div>

                <!-- Mensaje sobre el menú no fijo -->
                <div class="mt-8 bg-stone-50 border-l-4 border-[#1E4D51] p-5 rounded-r-[8px]">
                    <p class="font-sans text-sm sm:text-base leading-relaxed text-stone-700 italic">
                        "Nuestro menú no es fijo; se inspira en la temporada y en los ingredientes frescos de la región. Al hacer tu reservación, cuéntanos qué se te antoja y Christian diseñará una propuesta a la medida de tu grupo."
                    </p>
                </div>

            </div>

            <!-- COLUMNA DERECHA: Tarjeta Formulario Reserva (Figma: 480x564.5, rounded-[16px], p-8) -->
            <div class="lg:col-span-5 w-full">
                <div class="bg-white rounded-[16px] p-7 sm:p-8 border border-[#F5F7FA] shadow-[0_4px_25px_rgba(0,0,0,0.05)] flex flex-col gap-6">
                    
                    <!-- Encabezado de la tarjeta -->
                    <div>
                        <h3 class="font-sans font-semibold text-[16px] text-[#1E4D51] mb-1">
                            Reserva tu lugar
                        </h3>
                        <p class="font-sans font-normal text-sm text-stone-600">
                            Te confirmamos por WhatsApp.
                        </p>
                    </div>

                    <!-- Campos del Formulario -->
                    <div class="flex flex-col gap-4">
                        <!-- Nombre de la persona -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">Nombre de la reserva</label>
                            <input type="text" x-model="nombre" placeholder="Nombre" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                        </div>

                        <!-- Día de llegada -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">¿Qué día llegan?</label>
                            <input type="date" x-model="fecha" class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51]">
                        </div>

                        <!-- Hora de llegada -->
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1.5">¿A qué hora llegan?</label>
                            <div class="relative">
                                <select x-model="hora" class="w-full appearance-none px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51] bg-white pr-10">
                                    <option value="" disabled>Selecciona la hora</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-stone-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Contador de Personas -->
                        <div class="flex items-center justify-between py-1">
                            <span class="text-xs sm:text-sm font-medium text-stone-800">¿Cuántas personas?</span>
                            <div class="flex items-center border border-stone-300 rounded-[8px] overflow-hidden">
                                <button type="button" @click="if(personas > 1) personas--" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">-</button>
                                <span class="w-8 text-center text-sm font-medium text-stone-800" x-text="personas"></span>
                                <button type="button" @click="personas++" class="px-3 py-1 bg-stone-50 hover:bg-stone-100 text-stone-600 font-bold">+</button>
                            </div>
                        </div>

                        <!-- Opciones de Menú -->
                        <div class="pt-2 border-t border-stone-200 mt-2">
                            <label class="block text-xs font-medium text-stone-700 mb-2">Propuesta gastronómica</label>
                            
                            <div class="flex flex-col gap-2">
                                <label class="flex items-start gap-2 cursor-pointer">
                                    <input type="radio" x-model="tipoMenu" value="christian" class="mt-0.5 w-4 h-4 text-[#1E4D51] focus:ring-[#1E4D51]">
                                    <span class="text-sm text-stone-700">Christian diseña mi menú</span>
                                </label>
                                
                                <label class="flex items-start gap-2 cursor-pointer">
                                    <input type="radio" x-model="tipoMenu" value="propio" class="mt-0.5 w-4 h-4 text-[#1E4D51] focus:ring-[#1E4D51]">
                                    <span class="text-sm text-stone-700">Tengo mi menú</span>
                                </label>
                            </div>

                            <!-- Textarea para cuando "Tengo mi menú" -->
                            <div x-show="tipoMenu === 'propio'" x-transition class="mt-3">
                                <textarea x-model="descripcionMenu" rows="2" placeholder="Escribe tu propuesta o antojos aquí..." class="w-full px-3.5 py-2.5 rounded-[8px] border border-stone-300 text-stone-800 text-sm focus:outline-none focus:border-[#1E4D51] resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Botón CTA WhatsApp -->
                    <div class="flex flex-col gap-2 pt-2">
                        <a :href="whatsappUrl" target="_blank" class="w-full inline-flex items-center justify-center gap-2.5 bg-[#d83a2b] hover:bg-[#c23224] text-white font-medium text-sm sm:text-[15px] py-3.5 px-4 rounded-[8px] transition-colors shadow-sm text-center">
                            <svg class="w-5 h-5 fill-current text-white shrink-0" viewBox="0 0 24 24">
                                <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 0 0 1.333 4.993L2 22l5.233-1.237a9.994 9.994 0 0 0 4.779 1.217h.004c5.505 0 9.99-4.478 9.99-9.984 0-2.669-1.039-5.176-2.925-7.062A9.925 9.925 0 0 0 12.012 2zm0 18.324h-.003a8.318 8.318 0 0 1-4.24-1.157l-.304-.18-3.111.736.837-3.031-.197-.314a8.307 8.307 0 0 1-1.275-4.4c.001-4.588 3.737-8.32 8.293-8.32 2.215 0 4.298.863 5.864 2.43 1.566 1.567 2.428 3.65 2.427 5.866-.001 4.589-3.738 8.321-8.286 8.321zm4.542-6.223c-.249-.125-1.472-.726-1.7-.809-.229-.083-.395-.125-.561.125-.166.249-.645.809-.79 1-.146.19-.292.208-.541.083s-1.053-.388-2.006-1.238c-.741-.661-1.241-1.478-1.387-1.728-.146-.249-.016-.384.109-.508.113-.112.249-.291.374-.437.125-.145.166-.249.249-.415.083-.166.042-.312-.021-.437-.062-.125-.561-1.351-.77-1.85-.203-.487-.41-.421-.561-.428l-.478-.009c-.166 0-.437.062-.665.312-.229.249-.874.854-.874 2.081 0 1.228.895 2.414 1.02 2.581.125.166 1.761 2.689 4.266 3.771.596.257 1.061.411 1.424.526.598.19 1.143.163 1.573.099.48-.072 1.472-.602 1.68-1.185.207-.582.207-1.081.145-1.185-.062-.104-.228-.166-.477-.291z"/>
                            </svg>
                            <span>Reservar por WhatsApp</span>
                        </a>
                        <p class="text-[11px] text-stone-500 text-center leading-relaxed">
                            No se cobra nada en línea. Confirmamos disponibilidad y anticipo por WhatsApp.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
