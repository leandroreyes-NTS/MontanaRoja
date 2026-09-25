<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Montaña Roja' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Camping, Restaurante & Bar en Tehuacán-Cuicatlán' }}">
    <meta property="og:title" content="{{ $title ?? 'Montaña Roja' }}">
    <meta property="og:description" content="{{ $meta_description ?? 'Camping, Restaurante & Bar en Tehuacán-Cuicatlán' }}">
    <meta property="og:image" content="{{ asset('assets/images/IMG-20260721-WA0073.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Montaña Roja' }}">
    <meta name="twitter:description" content="{{ $meta_description ?? 'Camping, Restaurante & Bar en Tehuacán-Cuicatlán' }}">
    <meta name="twitter:image" content="{{ asset('assets/images/IMG-20260721-WA0073.jpg') }}">

    <!-- Canonical & Keywords -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords" content="Camping, Restaurante, Bar, Tehuacán-Cuicatlán, Oaxaca, Naturaleza, Cabañas, Glamping, Río">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bosque': '#0d3839',
                        'terracota': '#d83a2b',
                        'piedra': '#fbfbfa',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body x-data="{ mobileMenuOpen: false }" class="font-sans text-bosque bg-piedra antialiased flex flex-col min-h-screen pb-[64px] md:pb-0">
    
    <!-- Navbar (Desktop y Mobile Absolute) -->
    <header id="main-header" class="absolute md:fixed w-full top-0 z-50 bg-transparent transition-all duration-300 hover:bg-black/80">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('inicio') }}" class="text-white font-sans font-bold text-[18px] tracking-wide">
                        Montaña Roja
                    </a>
                </div>
                
                <nav class="hidden md:flex space-x-8 items-center border-b border-transparent">
                    <a href="{{ route('inicio') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('inicio') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Inicio</a>
                    <a href="{{ route('sobre.nosotros') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('sobre.nosotros') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Sobre nosotros</a>
                    <a href="{{ route('camping') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('camping') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Camping</a>
                    <a href="{{ route('restaurante') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('restaurante') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Restaurante <span class="font-serif">&amp;</span> Bar</a>
                    <a href="{{ route('eventos') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('eventos') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Actividades</a>
                    <a href="{{ route('ubicacion') }}" class="hover:text-white transition font-medium text-xs {{ request()->routeIs('ubicacion') ? 'text-white/90 border-b-2 border-white pb-1' : 'text-white/80' }}">Ubicación</a>
                </nav>

                <div class="hidden md:flex items-center relative" x-data="{ open: false }" @click.outside="open = false">
                    <button @click="open = !open" class="bg-[#d83a2b] hover:bg-red-700 text-white px-5 py-2.5 rounded-md font-medium transition-colors duration-300 shadow text-xs flex items-center gap-1.5">
                        Reservar
                        <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div x-show="open" 
                         x-transition.opacity.duration.200ms
                         class="absolute top-full right-0 mt-2 w-48 bg-[#27A599] rounded-md shadow-lg py-2 border border-[#1E4D51]/20 z-50 flex flex-col"
                         style="display: none;">
                        <a href="{{ route('camping') }}" class="px-4 py-2 text-sm text-white hover:bg-[#1E4D51]/30 transition-colors">Camping</a>
                        <a href="{{ route('restaurante') }}" class="px-4 py-2 text-sm text-white hover:bg-[#1E4D51]/30 transition-colors">Restaurante <span class="font-serif">&amp;</span> Bar</a>
                        <a href="{{ route('eventos') }}" class="px-4 py-2 text-sm text-white hover:bg-[#1E4D51]/30 transition-colors">Actividades</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Pre-Footer CTA -->
    <section class="relative py-20 lg:py-[80px] bg-[#1f4a4a] flex items-center min-h-[384px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/images/Instalaciones y senderos/015.jpg') }}" alt="Fondo" class="w-full h-full object-cover object-[center_30%]">
            <div class="absolute inset-0 bg-[#0d2a2a]/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        
        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-12 xl:px-16 w-full text-center">
            <h2 class="text-3xl lg:text-[40px] font-serif font-bold text-white mb-5 leading-tight">Tu lugar junto al río te espera</h2>
            <p class="text-white/90 text-[14px] mb-8 font-normal max-w-2xl mx-auto">
                Escríbenos y empezamos a planear tu visita. Si vienen en grupo, cotizamos el lugar completo.
            </p>
            <a href="https://wa.me/529512399575" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2.5 bg-transparent hover:bg-white/10 border border-white/60 text-white px-7 py-3 rounded-md font-medium text-[13px] transition-colors mb-4">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Reservar por WhatsApp
            </a>
            <p class="text-[11px] text-white/70">Christian responde en menos de una hora &middot; 951 239 9575</p>
        </div>
    </section>

    <!-- Global Footer -->
    <footer class="bg-[#1f4a4a] text-stone-300 pt-16 pb-2">
        <div class="max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12">
                <div>
                    <h3 class="font-serif text-lg text-white font-bold mb-3 tracking-wide">Montaña Roja</h3>
                    <p class="text-xs text-stone-300/80 leading-relaxed mb-6">
                        Restaurante, bar y camping dentro de la Reserva de la Biósfera Tehuacán-Cuicatlán. Carretera México 135, km 125, Cuicatlán, Oaxaca.
                    </p>
                    <div class="flex items-center gap-3 text-stone-300/80">
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-500/40 flex items-center justify-center hover:text-white hover:border-white transition-colors">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-500/40 flex items-center justify-center hover:text-white hover:border-white transition-colors">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full border border-stone-500/40 flex items-center justify-center hover:text-white hover:border-white transition-colors">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.6 5H18V0h-3.808C10.592 0 9 1.582 9 4.615V8z"/></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-xs tracking-wider">Visita</h4>
                    <ul class="space-y-2.5 text-xs text-stone-300/80">
                        <li><a href="{{ route('inicio') }}" class="hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="{{ route('camping') }}" class="hover:text-white transition-colors">Camping</a></li>
                        <li><a href="{{ route('restaurante') }}" class="hover:text-white transition-colors">Restaurante &amp; Bar</a></li>
                        <li><a href="{{ route('eventos') }}" class="hover:text-white transition-colors">Actividades</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-xs tracking-wider">Conoce</h4>
                    <ul class="space-y-2.5 text-xs text-stone-300/80">
                        <li><a href="{{ route('sobre.nosotros') }}" class="hover:text-white transition-colors">Sobre nosotros</a></li>
                        <li><a href="{{ route('ubicacion') }}" class="hover:text-white transition-colors">Ubicación</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4 text-xs tracking-wider">Contacto</h4>
                    <p class="text-xs leading-relaxed text-stone-300/80 mb-4">
                        Viernes a domingo · 8:00 - 22:00<br>
                        Lunes a jueves con reserva previa
                    </p>
                    <div class="space-y-2 text-xs text-stone-300/80">
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:montanarojacampingbar@gmail.com" class="hover:text-white transition-colors truncate">Correo</a>
                        </div>
                        <p class="text-[11px] text-stone-400 pl-5.5 select-all">montanarojacampingbar@gmail.com</p>
                        
                        <div class="flex items-center gap-2 pt-1">
                            <svg class="w-3.5 h-3.5 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:9512399575" class="hover:text-white transition-colors">Llamar</a>
                        </div>
                        <p class="text-[11px] text-stone-400 pl-5.5">951 239 9575</p>
                    </div>
                </div>

            </div>

            <!-- Barra Inferior fiel a la captura de referencia -->
            <div class="border-t border-stone-600/40 py-2.5 flex flex-col md:flex-row items-center justify-between text-xs text-stone-400 gap-4">
                <p class="whitespace-nowrap">© 2026 Montaña Roja · La Casa de Tierra</p>
                
                <a href="https://nagualstudio.tech/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 whitespace-nowrap hover:opacity-85 transition-opacity">
                    <span class="text-xs text-stone-300 font-normal">Patrocinado y desarrollado por NAGUAL TECH STUDIO</span>
                    <img src="{{ asset('assets/logos/016.png') }}" 
                         alt="NAGUAL TECH STUDIO" 
                         class="object-contain shrink-0" 
                         style="width: 80px !important; height: auto !important;">
                </a>

                <div class="flex items-center gap-4 whitespace-nowrap text-xs">
                    <a href="#" class="hover:text-white transition-colors">Aviso de privacidad</a>
                    <span>·</span>
                    <a href="#" class="hover:text-white transition-colors">Política de reservas</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Scripts -->
    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('main-header');
            if (window.scrollY > 10) {
                header.classList.add('bg-black/30', 'backdrop-blur-md', 'shadow-lg');
                header.classList.remove('bg-transparent', 'hover:bg-black/80');
            } else {
                header.classList.add('bg-transparent', 'hover:bg-black/80');
                header.classList.remove('bg-black/30', 'backdrop-blur-md', 'shadow-lg');
            }
        });
    </script>

    <!-- Floating Action Buttons -->
    <div x-data="{ showScroll: false }" @scroll.window="showScroll = (window.pageYOffset > 500) ? true : false">
        
        <!-- Scroll to Top Button -->
        <div class="fixed bottom-6 right-6 z-50"
             style="display: none;"
             x-show="showScroll"
             x-transition.opacity.duration.300ms>
            <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                    class="bg-[#1E4D51] hover:bg-[#27A599] text-white w-12 h-12 rounded-full shadow-lg transition-colors flex items-center justify-center focus:outline-none"
                    aria-label="Volver arriba">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"><path d="M5 15l7-7 7 7"></path></svg>
            </button>
        </div>

        <!-- Floating Hamburger Menu Button (Mobile) -->
        <div class="md:hidden fixed right-6 z-50 transition-all duration-300"
             :class="showScroll ? 'bottom-[88px]' : 'bottom-6'">
            <button @click="mobileMenuOpen = true"
                    class="bg-[#d83a2b] hover:bg-red-700 text-white w-12 h-12 rounded-full shadow-lg transition-colors flex items-center justify-center focus:outline-none"
                    aria-label="Abrir menú">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Slide-over Menu -->
    <div x-show="mobileMenuOpen" 
         style="display: none;"
         class="fixed inset-0 z-[110] flex" 
         aria-labelledby="slide-over-title" 
         role="dialog" 
         aria-modal="true">
        
        <!-- Background Overlay -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="ease-in-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="mobileMenuOpen = false"
             class="fixed inset-0 bg-black bg-opacity-70 transition-opacity"></div>

        <!-- Menu Panel -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="relative ml-auto flex h-full w-64 max-w-sm flex-col bg-black/40 backdrop-blur-md py-6 pb-12 shadow-xl border-l border-white/10">
             
            <div class="flex items-center justify-between px-6 mb-8">
                <h2 class="text-white font-serif font-bold text-xl">Menú</h2>
                <button @click="mobileMenuOpen = false" class="text-white/80 hover:text-white transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-col px-6 space-y-4">
                <a href="{{ route('inicio') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('inicio') ? 'text-white font-bold' : '' }}">Inicio</a>
                <a href="{{ route('sobre.nosotros') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('sobre.nosotros') ? 'text-white font-bold' : '' }}">Sobre nosotros</a>
                <a href="{{ route('camping') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('camping') ? 'text-white font-bold' : '' }}">Camping</a>
                <a href="{{ route('restaurante') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('restaurante') ? 'text-white font-bold' : '' }}">Restaurante & Bar</a>
                <a href="{{ route('eventos') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('eventos') ? 'text-white font-bold' : '' }}">Actividades</a>
                <a href="{{ route('ubicacion') }}" class="text-white/90 hover:text-white font-medium text-sm {{ request()->routeIs('ubicacion') ? 'text-white font-bold' : '' }}">Ubicación</a>
                
                <hr class="border-white/20 my-4">
                
                <div x-data="{ openReserva: false }" class="mt-2 w-full">
                    <button @click="openReserva = !openReserva" class="w-full flex items-center justify-between text-[#d83a2b] bg-white px-4 py-3 rounded-md font-bold text-sm shadow-md transition-colors">
                        <span>Reservar</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="openReserva ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <div x-show="openReserva" x-collapse>
                        <div class="flex flex-col bg-white/10 rounded-md mt-2 py-2 border border-white/20">
                            <a href="{{ route('camping') }}" class="px-4 py-2.5 text-sm text-white hover:bg-white/20 transition-colors">Camping</a>
                            <a href="{{ route('restaurante') }}" class="px-4 py-2.5 text-sm text-white hover:bg-white/20 transition-colors">Restaurante <span class="font-serif">&amp;</span> Bar</a>
                            <a href="{{ route('eventos') }}" class="px-4 py-2.5 text-sm text-white hover:bg-white/20 transition-colors">Actividades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
