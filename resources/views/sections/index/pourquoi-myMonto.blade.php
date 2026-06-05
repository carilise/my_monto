<section class="flex items-center justify-center 2xl:container  mx-auto py-16 sm:py-24 lg:py-40 px-4 sm:px-6 bg-white">
    <div class=" ">

        {{-- Version mobile/tablette (< lg) : contenu organisé comme demandé --}}
        <div class="block lg:hidden">
            <div class="flex flex-col gap-6">
                <!-- Titre avec soulignement dégradé -->
                <div class="">
                    <h2 class="font-inter font-semibold text-2xl sm:text-3xl text-[#1A1A1A] leading-tight text-left">
                        Pourquoi choisir myMonto ?
                    </h2>
                    <div class="w-[58px] h-[6px] rounded-[8px] opacity-30 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-2"></div>
                </div>

                <!-- Texte -->
                <p class="text-sm sm:text-base text-[#505050] font-medium leading-relaxed text-left">
                    MyMonto s'adapte aussi bien aux particuliers qu'aux professionnels disposant d'une flotte de véhicules.
                    L'application permet de
                    <span class="font-bold text-[#DF6E1E]">centraliser l'ensemble des informations liées aux réparations</span>,
                    d'assurer un suivi clair et structuré de chaque intervention,
                    et de garder une parfaite maîtrise de l'état de tous vos véhicules, en un seul endroit, en temps réel.
                </p>

                <!-- Note en italique -->
                <p class="text-[#505050] text-[10px] italic font-light text-left">
                    *L'enregistrement de votre véhicule dans myMonto est complètement gratuit.
                </p>

                <!-- Image centrée -->
                <div class="flex justify-center my-4">
                    <img src="{{ asset('images/mymonto-promo.png') }}"
                        alt="Pourquoi choisir myMonto"
                        class="w-full max-w-[500px] h-auto object-cover rounded-lg shadow-md">
                </div>

                <!-- Bouton en bas -->
                <div class="flex justify-center mt-2">
                    <a href="#"
                        class="inline-flex items-center justify-center w-full sm:w-auto min-w-[180px] h-[44px] sm:h-[48px] bg-[#26323B] text-white text-[12px] sm:text-[13px] font-bold rounded-[4px] px-4 sm:px-6 py-3 sm:py-[12px] hover:opacity-90 transition duration-300 text-center uppercase tracking-wide">
                        ESSAYEZ GRATUITEMENT
                    </a>
                </div>
            </div>
        </div>

        {{-- Version desktop : layout horizontal original (≥ lg) --}}
        <div class="hidden lg:flex lg:flex-row items-center gap-20 lg:px-10">
            <div class="flex-shrink-0" style="width: 600px;">
                <img src="{{ asset('images/mymonto-promo.png') }}"
                    alt="Pourquoi choisir myMonto"
                    style="width: 600px; height: 400px; object-fit: contain; display: block;">

                <p class="text-[#505050] text-[10px] leading-[24px] italic font-light mt-1">
                    *L'enregistrement de votre véhicule dans myMonto est complètement gratuit.
                </p>
            </div>

            <div class="flex-1 text-left">
                <h2 class="text-[34px] leading-[44px] font-semibold text-[#4D4D4D] mb-6">
                    Pourquoi choisir myMonto ?
                </h2>

                <p class="text-[#505050] text-[16px] leading-[20px] font-normal text-justify mb-8">
                    MyMonto s'adapte aussi bien aux particuliers qu'aux professionnels disposant d'une flotte de véhicules.
                    L'application permet de
                    <span class="font-bold text-[#DF6E1E]">centraliser l'ensemble des informations liées aux réparations</span>,
                    d'assurer un suivi clair et structuré de chaque intervention,
                    et de garder une parfaite maîtrise de l'état de tous vos véhicules, en un seul endroit, en temps réel.
                </p>

                <a href="#"
                    class="bg-[#26323B] text-[#FFFFFF] text-[14px] leading-[24px] font-extrabold uppercase
                          px-8 py-3 rounded-md hover:opacity-90 transition inline-block">
                    ESSAYEZ GRATUITEMENT
                </a>
            </div>
        </div>

    </div>
</section>