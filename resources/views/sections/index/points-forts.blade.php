<section class="flex items-center justify-center 2xl:container  mx-auto py-8 md:py-12 lg:py-[100px] px-4 bg-cover bg-center bg-no-repeat"
    style="background-color: #f5f7fa; ">

    <div class="">
        {{-- Version mobile/tablette --}}
        <div class="block lg:hidden px-8">
            <div class="flex flex-col gap-8">
                <div class="">
                    <h2 class="font-inter font-semibold text-2xl sm:text-3xl text-[#1A1A1A] leading-tight text-left">
                        Points Forts
                    </h2>
                    <div class="w-[58px] h-[6px] rounded-[8px] opacity-30 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-2"></div>
                </div>

                <!-- Sous-titre -->
                <p class="text-sm sm:text-base text-[#505050] font-medium leading-relaxed text-justify">
                    Découvrez les fonctionnalités clés qui rendent le suivi des réparations de votre véhicule simple, rapide et transparent avec My Monto.
                </p>

                <!-- Cartes -->
                <div class="flex flex-col gap-6 mt-4 max-w-[400px] mx-auto w-full">
                    <div class="bg-white shadow-md text-center rounded-3xl p-6 transition-transform duration-300 hover:scale-105">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('images/pointFort/gestions.png') }}" alt="Gestions" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-base font-semibold text-[#121212] mb-2">Enregistrements & Gestion</h3>
                        <p class="text-sm text-[#121212] leading-relaxed">
                            Enregistrez vos véhicules et accédez à votre tableau de bord : vidanges, réparations, kilométrages, dates & historique, tout sous contrôle, en un clin d'œil.
                        </p>
                    </div>
                    <div class="bg-white shadow-md text-center rounded-3xl p-6 transition-transform duration-300 hover:scale-105">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('images/pointFort/garages.png') }}" alt="Garages à proximité" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-base font-semibold text-[#121212] mb-2">Garages à proximité</h3>
                        <p class="text-sm text-[#121212] leading-relaxed">
                            Accédez aux garages partenaires situés dans votre zone, suivez les réparations et les fiches ainsi que l'historique des pièces changées et leurs coûts.
                        </p>
                    </div>
                    <div class="bg-white shadow-md text-center rounded-3xl p-6 transition-transform duration-300 hover:scale-105">
                        <div class="flex justify-center mb-4">
                            <img src="{{ asset('images/pointFort/alertes.png') }}" alt="Alertes & Notifications" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-base font-semibold text-[#121212] mb-2">Alertes & Notifications</h3>
                        <p class="text-sm text-[#121212] leading-relaxed">
                            Recevez régulièrement des alertes personnalisées pour vos vidanges, visites, révisions et réparations. Votre véhicule toujours à jour.
                        </p>
                    </div>
                </div>

                <!-- Bouton -->
                <div class="flex justify-center mt-6">
                    <a href="#"
                        class="inline-flex items-center justify-center w-full sm:w-auto min-w-[180px] 
                        h-[44px] text-white text-[12px] sm:text-[13px] font-bold rounded-xl px-6 sm:px-8 
                        text-center uppercase tracking-wide bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] 
                         hover:from-[#c55a14] hover:to-[#d4661a]
                transition-all duration-300 transform hover:scale-105
                rounded-xl shadow-md hover:shadow-lg">
                        DÉCOUVRIR AVANTAGE
                    </a>

                </div>
            </div>
        </div>

        {{-- Version desktop --}}
        <div class="hidden lg:block text-center lg:px-10">
            <!-- Titre desktop -->
            <div class="mb-8 md:mb-12 lg:mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-medium text-[#505050] leading-tight lg:leading-[45.36px] mb-3 md:mb-4">
                    Points Forts
                </h2>
                <p class="text-sm sm:text-base text-[#505050] font-medium leading-relaxed max-w-2xl mx-auto px-2 sm:px-4">
                    Découvrez les fonctionnalités clés qui rendent le suivi des réparations<br class="hidden sm:block">
                    de votre véhicule simple, rapide et transparent avec My Monto.
                </p>
            </div>

            <!-- Cartes desktop : 3 colonnes -->
            <div class="grid grid-cols-3 gap-6 sm:gap-8 lg:gap-[80px] text-[#121212]">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-3xl p-4 transition-transform duration-300 hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/pointFort/gestions.png') }}" alt="Gestions" class="w-14 h-14 sm:w-16 sm:h-16 object-contain">
                    </div>
                    <h3 class="text-sm sm:text-base font-semibold text-[#121212] mb-2 text-center">Enregistrements & Gestion</h3>
                    <p class="text-xs sm:text-sm text-[#121212] leading-relaxed px-1 text-center">
                        Enregistrez vos véhicules et accédez à votre tableau de bord : vidanges, réparations, kilométrages, dates & historique, tout sous contrôle, en un clin d'œil.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-3xl p-4 transition-transform duration-300 hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/pointFort/garages.png') }}" alt="Garages à proximité" class="w-14 h-14 sm:w-16 sm:h-16 object-contain">
                    </div>
                    <h3 class="text-sm sm:text-base font-semibold text-[#121212] mb-2 text-center">Garages à proximité</h3>
                    <p class="text-xs sm:text-sm text-[#121212] leading-relaxed px-1 text-center">
                        Accédez aux garages partenaires situés dans votre zone, suivez les réparations et les fiches ainsi que l'historique des pièces changées et leurs coûts.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-3xl p-4 transition-transform duration-300 hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/pointFort/alertes.png') }}" alt="Alertes & Notifications" class="w-14 h-14 sm:w-16 sm:h-16 object-contain">
                    </div>
                    <h3 class="text-sm sm:text-base font-semibold text-[#121212] mb-2 text-center">Alertes & Notifications</h3>
                    <p class="text-xs sm:text-sm text-[#121212] leading-relaxed px-1 text-center">
                        Recevez régulièrement des alertes personnalisées pour vos vidanges, visites, révisions et réparations. Votre véhicule toujours à jour.
                    </p>
                </div>
            </div>

            <!-- Bouton desktop -->
            <div class="mt-8 md:mt-10 lg:mt-12">
                <a href="#"
                    class="inline-flex items-center justify-center w-full sm:w-auto min-w-[180px] 
                        h-[50px] text-white text-[12px] sm:text-[13px] font-bold rounded-xl px-6 sm:px-8 
                        text-center uppercase tracking-wide bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] 
                         hover:from-[#c55a14] hover:to-[#d4661a]
                transition-all duration-300 transform hover:scale-105
                rounded-xl shadow-md hover:shadow-lg">
                    DÉCOUVRIR AVANTAGE
                </a>
            </div>
        </div>

    </div>
</section>