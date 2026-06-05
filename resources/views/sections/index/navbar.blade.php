<nav class="bg-[#F5F7FA] 2xl:container mx-auto backdrop-blur-sm sticky top-0 z-50 shadow-sm">
    <div class="px-6 sm:px-8 lg:px-12 py-3 flex items-center justify-between gap-4">

        <!-- Logo -->
        <a href="#" class="flex items-center gap-2 flex-shrink-0">
            <img src="{{ asset('images/logoIcon.png') }}" alt="MyMONTO logo"
                class="h-7 sm:h-8 md:h-9 lg:h-10 w-auto transition-all">
        </a>

        <!-- Navigation desktop - cachée sur mobile/tablette -->
        <div class="font-inter hidden lg:flex items-center gap-6 xl:gap-10">
            <a href="{{ route('index') }}"
                class="{{ Route::currentRouteName() === 'index' 
                ? 'text-orange-500 font-semibold after:w-full' 
                : 'text-gray-700 font-medium hover:text-orange-500' }} 
                text-xs sm:text-sm transition-colors relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-orange-500 after:transition-all">
                Accueil
            </a>

            <a href="{{ route('module') }}"
                class="{{ Route::currentRouteName() === 'module' 
                ? 'text-orange-500 font-semibold after:w-full' 
                : 'text-gray-700 font-medium hover:text-orange-500' }} 
                text-xs sm:text-sm transition-colors relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-orange-500 after:transition-all">
                Modules
            </a>
            <a href="#pourquoi"
                class="text-gray-700 font-medium text-xs sm:text-sm hover:text-orange-500 transition-colors relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-orange-500 after:transition-all hover:after:w-full">
                Pourquoi ?
            </a>
        </div>

        <!-- Boutons droite -->
        <div class="flex items-center gap-3 sm:gap-4">
            <!-- Version desktop du lien question -->
            <a href="#contact"
                class="hidden sm:block text-orange-500 text-xs sm:text-sm font-medium hover:text-orange-600 underline underline-offset-4 transition-colors whitespace-nowrap">
                J'ai une question
            </a>

            <!-- Bouton téléchargement responsive -->
            <a href="#download"
                class="px-4 sm:px-6 py-2.5 flex items-center justify-center gap-2 
                      bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] hover:from-[#c55a14] hover:to-[#d4661a]
                      transition-all duration-300 transform hover:scale-105
                      text-white font-inter font-bold text-xs sm:text-sm
                      rounded-2xl shadow-md hover:shadow-lg whitespace-nowrap">
                <span class="hidden sm:inline">Télécharger maintenant</span>
                <span class="sm:hidden">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M12 4v12m0 0l-3-3m3 3l3-3" />
                    </svg>
                </span>
            </a>

            <!-- Menu mobile amélioré -->
            <div class="lg:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="text-gray-600 hover:text-orange-500 transition-colors p-2 rounded-lg hover:bg-orange-50">
                    <template x-if="!open">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="open">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>

                <!-- Menu mobile/tablette -->
                <div x-show="open"
                    x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-5 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 -translate-y-5 scale-95"
                    class="absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-xl rounded-b-lg z-50">
                    <div class="px-4 sm:px-6 py-4 space-y-3">
                        <a href="{{ route('index') }}"
                            @click="open=false"
                            class="{{ Route::currentRouteName() === 'index' ? 'text-orange-500 font-semibold' : 'text-gray-700 font-medium hover:text-orange-500' }} block py-2.5 px-3 rounded-lg hover:bg-orange-50">
                            Accueil
                        </a>
                        <a href="{{ route('module') }}"
                            @click="open=false"
                            class="{{ Route::currentRouteName() === 'module' ? 'text-orange-500 font-semibold' : 'text-gray-700 font-medium hover:text-orange-500' }} block py-2.5 px-3 rounded-lg hover:bg-orange-50">
                            Modules
                        </a>
                        <a href="#pourquoi"
                            @click="open=false"
                            class="block text-gray-700 font-medium py-2.5 px-3 rounded-lg hover:bg-orange-50 hover:text-orange-500">
                            Pourquoi ?
                        </a>
                        <a href="#contact"
                            @click="open=false"
                            class="block text-orange-500 font-medium py-2.5 px-3 rounded-lg hover:bg-orange-50">
                            J'ai une question
                        </a>
                        <a href="#download"
                            @click="open=false"
                            class="block bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] text-white font-bold py-2.5 px-3 rounded-lg text-center hover:shadow-lg">
                            Télécharger maintenant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Gestion du menu mobile avec animations
    const navToggle = document.getElementById('nav-toggle');
    const navMobile = document.getElementById('nav-mobile');
    let isOpen = false;

    navToggle.addEventListener('click', () => {
        isOpen = !isOpen;

        if (isOpen) {
            navMobile.classList.remove('hidden');
            navMobile.style.animation = 'slideDown 0.4s ease-out forwards';
            navToggle.innerHTML = `
        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        `;
        } else {
            navMobile.style.animation = 'slideUp 0.4s ease-in forwards';
            setTimeout(() => {
                navMobile.classList.add('hidden');
            }, 380);
            navToggle.innerHTML = `
        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        `;
        }
    });

    // Fermer le menu lors du clic sur un lien
    document.querySelectorAll('#nav-mobile a').forEach(link => {
        link.addEventListener('click', () => {
            if (isOpen) {
                navToggle.click();
            }
        });
    });

    // Styles d'animation
    const style = document.createElement('style');
    style.textContent = `
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideUp {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }
`;
    document.head.appendChild(style);
</script>