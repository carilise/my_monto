<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- Section Statistiques + CTA avec Tailwind CSS -->
<section class="relative w-full overflow-hidden bg-white 2xl:container mx-auto">

    <!-- Version Desktop -->
    <div class="hidden xl:block">
        <div class="relative min-h-[560px] w-full">
            <div class="relative z-10 max-w-[1280px] mx-auto pl-[130px] pr-[50px]">
                <div class="flex flex-row items-center justify-start gap-[60px] mt-[100px]">
                    <div class="flex-1 max-w-[550px] flex flex-col gap-8">
                        <div>
                            <h2 class="font-['Inter'] text-[65px] font-bold text-[#1A1A1A] leading-[76px] tracking-[-0.02em]">
                                MyMonto c'est
                            </h2>
                        </div>

                        <div class="flex flex-row items-center gap-10">
                            <!-- Stat 1 -->
                            <div class="flex flex-row items-center gap-4">
                                <img src="{{ asset('images/stats/utilisateurs.png') }}" alt="Utilisateurs"
                                    class="w-[48.57px] h-[48.57px] object-contain">
                                <div class="flex flex-col">
                                    <p class="text-[#505050] text-base leading-tight mb-1">Déjà</p>
                                    <p class="text-[28.33px] font-extrabold text-[#1A1A1A] leading-tight my-1">384,126</p>
                                    <p class="text-[#505050] text-base leading-tight mt-1">Utilisateurs</p>
                                </div>
                            </div>

                            <div class="w-px h-[50px] bg-[#DF6E1E]"></div>

                            <!-- Stat 2 -->
                            <div class="flex flex-row items-center gap-4">
                                <img src="{{ asset('images/stats/partenaire.png') }}" alt="Partenaires"
                                    class="w-[48.57px] h-[48.57px] object-contain">
                                <div class="flex flex-col">
                                    <p class="text-[#505050] text-base leading-tight mb-1">Et</p>
                                    <p class="text-[28.33px] font-extrabold text-[#1A1A1A] leading-tight my-1">350</p>
                                    <p class="text-[#505050] text-base leading-tight mt-1">Partenaires à l'étranger</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5 max-w-[280px] mt-5">
                            <a href="#"
                                class="bg-[#DF6E1E] text-white text-center py-3.5 px-6 rounded-xl text-xs font-extrabold tracking-[0.1em] uppercase transition-all duration-300 hover:bg-[#c55a14] hover:-translate-y-0.5 hover:shadow-lg shadow-md">
                                ESSAYEZ GRATUITEMENT !
                            </a>

                            <div class="flex gap-4 items-center">
                                <a href="#" class="transition-transform hover:scale-105">
                                    <img src="{{ asset('images/badges/appStore.png') }}" alt="App Store" class="h-11">
                                </a>
                                <a href="#" class="transition-transform hover:scale-105">
                                    <img src="{{ asset('images/badges/googlePlay.png') }}" alt="Google Play" class="h-11">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image qui touche la bordure droite -->
            <div class="absolute right-0 top-0 bottom-0 w-[63%] z-0 pointer-events-none">
                <img src="{{ asset('images/stats/telephone.png') }}" alt="MyMonto App"
                    class="w-full h-full object-cover object-right">
            </div>
        </div>
    </div>

    <!-- Version Tablette -->
    <div class="block xl:hidden">
        <div class="relative min-h-[600px] flex items-center justify-center bg-white py-15 px-10 md:px-10">
            <div class="relative z-10 max-w-[700px] w-full mx-auto">
                <h2 class="font-['Inter'] text-[48px] font-bold text-[#1A1A1A] text-center leading-tight mb-12 tracking-[-0.02em]">
                    MyMonto c'est
                </h2>

                <div class="flex items-center justify-center gap-12 mb-12">
                    <!-- Stat 1 -->
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/stats/utilisateurs.png') }}" alt="Utilisateurs" class="w-12 h-12 object-contain">
                        <div>
                            <p class="text-[#505050] text-sm mb-1">Déjà</p>
                            <p class="text-[28px] font-extrabold text-[#1A1A1A] my-1">384,126</p>
                            <p class="text-[#505050] text-sm">Utilisateurs</p>
                        </div>
                    </div>

                    <div class="w-0.5 h-15 bg-[#DF6E1E]"></div>

                    <!-- Stat 2 -->
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/stats/partenaire.png') }}" alt="Partenaires" class="w-12 h-12 object-contain">
                        <div>
                            <p class="text-[#505050] text-sm mb-1">Et</p>
                            <p class="text-[28px] font-extrabold text-[#1A1A1A] my-1">350</p>
                            <p class="text-[#505050] text-sm">Partenaires à l'étranger</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-6 max-w-[320px] mx-auto">
                    <a href="#"
                        class="bg-[#DF6E1E] text-white text-center py-3.5 px-8 rounded-xl text-[13px] font-extrabold tracking-[0.1em] uppercase w-full transition-all duration-300 hover:bg-[#c55a14]">
                        ESSAYEZ GRATUITEMENT !
                    </a>

                    <div class="flex gap-5 justify-center">
                        <a href="#">
                            <img src="{{ asset('images/badges/appStore.png') }}" alt="App Store" class="h-12">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/badges/googlePlay.png') }}" alt="Google Play" class="h-12">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image floutée -->
            <div class="absolute inset-0 z-0 pointer-events-none">
                <img src="{{ asset('images/stats/telephone.png') }}" alt="MyMonto App" class="w-full h-full object-cover object-center
                     opacity-30 blur-md scale-105">
            </div>

            <!-- Overlay par-dessus pour adoucir -->
            <div class="absolute inset-0 z-0
                 bg-white/60 pointer-events-none"></div>
        </div>
    </div>
</section>

<!-- Styles additionnels pour les très petits écrans (si besoin) -->
<style>
    @media (max-width: 480px) {
        .mobile-stat-icon {
            width: 36px !important;
            height: 36px !important;
        }

        .mobile-stat-value {
            font-size: 16px !important;
        }

        .stats-mobile-title {
            font-size: 28px !important;
        }
    }
</style>