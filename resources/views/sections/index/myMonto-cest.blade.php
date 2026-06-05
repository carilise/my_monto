<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    @media (min-width: 1024px) {
        .div-relative {
            margin-top: 6rem;
        }
    }

    /* Ajustements pour mobile et tablette (max-width: 1023px) */
    @media (max-width: 1023px) {
        .mobile-stats {
            gap: 1rem !important;
        }

        .mobile-badge {
            padding: 0.375rem 0.75rem !important;
        }

        .mobile-badge svg {
            width: 14px !important;
            height: 14px !important;
        }
    }

    /* Version mobile/tablette complète (< MD : max-width: 767px) */
    @media (max-width: 767px) {
        .hero-mobile-container {
            padding: 1rem 1.5rem 2rem 1.5rem !important;
        }

        .hero-mobile-title {
            font-size: 2rem !important;
            line-height: 1.3 !important;
            text-align: center !important;
        }

        .mobile-stats-container {
            justify-content: center !important;
        }

        .mobile-stat-item {
            justify-content: center !important;
        }

        .mobile-stat-number {
            font-size: 1.25rem !important;
        }

        .mobile-stat-label {
            font-size: 0.625rem !important;
        }

        .mobile-stat-icon {
            width: 32px !important;
            height: 32px !important;
        }

        .mobile-button-container {
            align-items: center !important;
        }

        .mobile-cta-button {
            width: 100% !important;
            font-size: 0.75rem !important;
            padding: 0.75rem 1rem !important;
        }

        .mobile-store-badges {
            justify-content: center !important;
            gap: 1rem !important;
        }

        .mobile-store-badge-img {
            height: 36px !important;
        }

        .mobile-image-overlay {
            opacity: 0.15 !important;
        }
    }

    /* Version tablette (768px - 1023px) */
    @media (min-width: 768px) and (max-width: 1023px) {
        .hero-mobile-container {
            padding: 1rem 2rem 3rem 2rem !important;
        }

        .hero-mobile-title {
            font-size: 2.5rem !important;
            line-height: 1.3 !important;
            text-align: center !important;
        }

        .mobile-stats-container {
            justify-content: center !important;
        }

        .mobile-stat-number {
            font-size: 1.5rem !important;
        }

        .mobile-stat-label {
            font-size: 0.75rem !important;
        }

        .mobile-stat-icon {
            width: 40px !important;
            height: 40px !important;
        }

        .mobile-button-container {
            align-items: center !important;
        }

        .mobile-cta-button {
            width: 280px !important;
            font-size: 0.875rem !important;
        }

        .mobile-store-badges {
            justify-content: center !important;
            gap: 1.25rem !important;
        }

        .mobile-store-badge-img {
            height: 42px !important;
        }

        .mobile-image-overlay {
            opacity: 0.2 !important;
        }
    }
</style>

<!-- Version Desktop (≥ 1024px) - Inchangée -->
<section class="relative  min-h-[60px] lg:min-h-[500px] 2xl:container  mx-auto  bg-white hidden lg:block">
    <div class="px-[130px] relative z-10">
        <div class="relative flex flex-col lg:flex-row items-center h-full div-relative">
            <!-- Colonne gauche : texte -->
            <div class="flex flex-col justify-between mt-[100px] gap-9">
                <div>
                    <h1 style="font-family:'Inter',sans-serif;"
                        class="text-3xl sm:text-4xl lg:text-[65px] font-semibold text-[#1A1A1A] leading-tight lg:leading-[76px]">
                        MyMonto c'est
                    </h1>
                </div>

                <div class="flex flex-row items-center gap-6 sm:gap-10">
                    <!-- Stat 1 -->
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{ asset('images/utilisateurs.png') }}" alt="Utilisateurs"
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-[48.57px] lg:h-[48.57px] object-contain">
                        <div>
                            <p class="text-[#505050] leading-none mb-0.5 text-[6px] sm:text-[7px] lg:text-[16px]">Déjà</p>
                            <p class="text-base sm:text-xl lg:text-[28.33px] font-bold text-[#1A1A1A] leading-tight">384,126</p>
                            <p class="text-[#505050] leading-none mt-0.5 text-[6px] sm:text-[7px] lg:text-[16px]">Utilisateurs</p>
                        </div>
                    </div>

                    <div class="w-px h-8 sm:h-10 bg-[#DF6E1E]"></div>

                    <!-- Stat 2 -->
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('images/partenaire.png') }}" alt="Partenaires"
                            class="w-8 h-8 sm:w-10 sm:h-10 lg:w-[48.57px] lg:h-[48.57px] object-contain">
                        <div>
                            <p class="text-[#505050] leading-none mb-0.5 text-[6px] sm:text-[7px] lg:text-[16px]">Et</p>
                            <p class="text-base sm:text-xl lg:text-[28.33px] font-bold text-[#1A1A1A] leading-tight">350</p>
                            <p class="text-[#505050] leading-none mt-0.5 text-[6px] sm:text-[7px] lg:text-[16px]">Partenaires à l'étranger</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 w-[250px] mt-10">
                    <a href="#"
                        class="shadow-lg rounded-lg inline-block bg-[#DF6E1E] text-white text-[10px] sm:text-xs lg:text-xs font-extrabold tracking-widest uppercase px-4 sm:px-6 py-2 sm:py-3 hover:bg-[#c55a14] transition-opacity duration-200 text-center">
                        ESSAYEZ GRATUITEMENT !
                    </a>

                    <div class="flex items-center justify-between w-full">
                        <a href="#" class="inline-block">
                            <img src="{{ asset('images/badges/appStore.png') }}" alt="Télécharger sur l'App Store" class="h-10">
                        </a>
                        <a href="#" class="inline-block">
                            <img src="{{ asset('images/badges/googlePlay.png') }}" alt="Disponible sur Google Play" class="h-10">
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2"></div>
        </div>
    </div>

    <div class="absolute right-0 top-0 bottom-0 w-[70%] md:w-[75%] lg:w-[65.57%] z-0 pointer-events-none">
        <img src="{{ asset('images/telephone.png') }}" alt="MyMonto App" class="w-full h-full object-cover object-right">
    </div>
</section>

<!-- Version Mobile et Tablette (< 1024px) -->
<section class="relative flex items-center justify-center min-h-screen bg-white overflow-hidden lg:hidden">
    <div class="relative z-10 hero-mobile-container w-full max-w-[500px] px-6 py-12">
        <div class="flex flex-col gap-8">
            <!-- Titre -->
            <div>
                <h1 style="font-family:'Inter',sans-serif;"
                    class="font-semibold text-[#1A1A1A] text-3xl leading-tight text-center">
                    MyMonto c'est
                </h1>
            </div>

            <!-- Statistiques -->
            <div class="flex flex-row items-center justify-between gap-4">
                <!-- Stat 1 -->
                <div class="flex flex-row items-center gap-3">
                    <img src="{{ asset('images/utilisateurs.png') }}" alt="Utilisateurs"
                        class="object-contain" style="width: 40px; height: 40px;">
                    <div>
                        <p class="text-[#505050] text-xs">Déjà</p>
                        <p class="font-bold text-[#1A1A1A] text-lg">384,126</p>
                        <p class="text-[#505050] text-xs">Utilisateurs</p>
                    </div>
                </div>

                <div class="w-px h-10 bg-[#DF6E1E]"></div>

                <!-- Stat 2 -->
                <div class="flex flex-row items-center gap-3">
                    <img src="{{ asset('images/partenaire.png') }}" alt="Partenaires"
                        class="object-contain" style="width: 40px; height: 40px;">
                    <div>
                        <p class="text-[#505050] text-xs">Et</p>
                        <p class="font-bold text-[#1A1A1A] text-lg">350</p>
                        <p class="text-[#505050] text-xs">Partenaires</p>
                    </div>
                </div>
            </div>

            <!-- Boutons -->
            <div class="flex flex-col gap-4 w-full max-w-[250px] mx-auto mt-10">
                <a href="#"
                    class="shadow-lg rounded-lg bg-[#DF6E1E] text-white font-extrabold tracking-widest uppercase hover:bg-[#c55a14] transition duration-200 text-center px-4 py-3 text-xs w-full">
                    ESSAYEZ GRATUITEMENT !
                </a>

                <div class="flex flex-col gap-3 w-full">
                    <a href="#" class="w-full">
                        <img src="{{ asset('images/badges/appStore.png') }}" alt="Télécharger sur l'App Store"
                            class="h-10 mx-auto">
                    </a>
                    <a href="#" class="w-full">
                        <img src="{{ asset('images/badges/googlePlay.png') }}" alt="Disponible sur Google Play"
                            class="h-10 mx-auto">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Image en arrière-plan -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/telephone.png') }}" alt="MyMonto App"
            class="w-full h-full object-cover object-center opacity-35">
    </div>
</section>