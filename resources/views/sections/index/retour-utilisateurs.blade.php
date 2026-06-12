<section
    class="relative overflow-hidden 2xl:container mx-auto py-12 sm:py-16 lg:py-20 px-4 md:px-8 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/retour_utilisateur/backUtilisateur.png') }}');">
    <div class=" lg:px-[80px]">

        <!-- En-tête  -->
        <div class="hidden md:block text-center mb-10 sm:mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-gray-900 mb-3 sm:mb-4 px-2">
                Ce que disent nos utilisateurs
            </h2>
            <p class="text-gray-500 lg:text-[14px] sm:text-base max-w-2xl mx-auto px-4">
                Découvrez ici les dires de trois entreprises leaders qui ont transformé leur gestion grâce à Express Soft
            </p>
        </div>

        <div class="block md:hidden flex flex-col text-left mb-10 sm:mb-12 lg:mb-16 gap-6">
            <div class="">
                <h2 class="text-2xl sm:text-3xl  font-semibold text-gray-900   leading-tight lg:leading-[64px]">
                    Ce que disent nos utilisateurs
                </h2>
                <div class="w-[58px] h-[6px] rounded-[8px] opacity-30 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-2"></div>
            </div>
            <div class="">
                <p class="text-left text-gray-500 lg:text-[14px] sm:text-base max-w-2xl mx-auto">
                    Découvrez ici les dires de trois entreprises leaders qui ont transformé leur gestion grâce à Express Soft
                </p>
            </div>
        </div>


        <!-- Grille de témoignages -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8 lg:mb-12 items-start">
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/estelle.jpg') }}"
                        alt="Estelle"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">Estelle</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">Créatrice de contenu</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "Avant myMonto, je ne savais jamais vraiment où en étaient les réparations de mon véhicule. Maintenant, tout est clair et je suis informé à chaque étape. Franchement, ça change tout."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/edouard.jpg') }}"
                        alt="Edouard VIGNON"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">Edouard VIGNON</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">Street artist</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "On sent que l'application a été pensée pour les vrais besoins du terrain. Le suivi est précis et bien structuré."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/herve.jpg') }}"
                        alt="Hervé ETTOLE"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">Hervé ETTOLE</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">Directeur générale "Flotty"</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "En tant que gestionnaire de flotte, myMonto m'a permis de centraliser le suivi de tous mes véhicules. C'est simple, efficace et très bien pensé."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/martine.jpg') }}"
                        alt="Martine TEVISSOU"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">Martine TEVISSOU</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">Styliste moderne</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "J'ai eu un désaccord avec un garage, et myMonto m'a vraiment aidé à y voir clair. Le suivi et les infos enregistrées font toute la différence."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/eve.jpg') }}"
                        alt="Eve SOSSOU"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">Eve SOSSOU</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">Community manager à DOFUS</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "Ce que j'aime le plus, c'est la transparence. Je sais exactement ce qui est fait sur mon véhicule, et ça me rassure énormément."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="{{ asset('images/retour_utilisateur/david.png') }}"
                        alt="David EDA"
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                    <div>
                        <p class="font-bold text-orange-500 text-[11px] sm:text-[12px]">David EDA</p>
                        <p class="text-gray-400 text-[10px] sm:text-xs">CEO "Tourizmo"</p>
                    </div>
                </div>
                <p class="text-gray-600 text-[11px] sm:text-[12px] leading-relaxed mb-2">
                    "Gérer plusieurs véhicules sans myMonto c'est tout simplement compliqué. Aujourd'hui tout est centralisé, et ça change complètement notre organisation."
                </p>
                <hr class="border-gray-100 mt-3 sm:mt-4">
            </div>

        </div>

        <!-- Les boutons d'appel -->
        <div class="flex flex-col items-center gap-5 sm:gap-6">
            <a
                href="#"
                class="inline-block bg-orange-600 hover:bg-orange-700 transition-colors duration-200 text-white font-extrabold tracking-widest uppercase text-[11px] sm:text-[12px] px-6 sm:px-8 lg:px-10 py-3 sm:py-4 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                Tester gratuitement et donner mon avis !
            </a>

            <div class="flex flex-row items-center gap-3 sm:gap-4">
                <a href="#" class="inline-block transform hover:scale-105 transition duration-200">
                    <img
                        src="{{ asset('images/badges/appStore.png') }}"
                        alt="Télécharger sur l'App Store"
                        class="h-8 sm:h-9 lg:h-10 w-auto">
                </a>
                <a href="#" class="inline-block transform hover:scale-105 transition duration-200">
                    <img
                        src="{{ asset('images/badges/googlePlay.png') }}"
                        alt="Disponible sur Google Play"
                        class="h-8 sm:h-9 lg:h-10 w-auto">
                </a>
            </div>

        </div>

    </div>
</section>