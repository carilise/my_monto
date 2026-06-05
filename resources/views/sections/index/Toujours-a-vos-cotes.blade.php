<section class="relative flex items-center justify-center 2xl:container  mx-auto py-12 sm:py-16 lg:py-[200px] px-4 sm:px-6 lg:px-[160px] bg-white overflow-hidden">
    <div class="">

        <div class="block lg:hidden">
            <div class="flex flex-col gap-6">
                <!-- Titre -->
                <div class="">
                    <h2 class="font-inter font-semibold text-2xl sm:text-3xl text-[#1A1A1A] leading-tight text-left">
                        Toujours à vos côtés
                    </h2>
                    <div class="w-[58px] h-[6px] rounded-[8px] opacity-30 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-2"></div>
                </div>

                <!-- Texte -->
                <p class="text-sm sm:text-base text-gray-800 font-medium leading-relaxed text-left">
                    Bénéficiez d'un <span class="font-bold text-[#1A1A1A]">accompagnement complet</span> pour suivre les réparations de votre véhicule, avec une assistance dédiée à chaque étape, <span class="font-bold text-[#1A1A1A]">y compris en cas d’accident ou de litige</span>.
                </p>

                <!-- Image centrée -->
                <div class="flex justify-center my-4">
                    <img src="{{ asset('images/mymonto-support.jpg') }}"
                        alt="Support MyMonto"
                        class="w-full max-w-[500px] h-auto object-cover rounded-lg shadow-md">
                </div>

                <!-- Bouton en bas -->
                <div class="flex justify-center mt-2">
                    <a href="#"
                        class="inline-flex items-center justify-center w-full sm:w-auto min-w-[180px] h-[44px] sm:h-[48px] bg-[#DF6E1E] text-white text-[12px] sm:text-[13px] font-bold rounded-[4px] px-4 sm:px-6 py-3 sm:py-[12px] hover:bg-[#c85e15] transition duration-300 text-center uppercase tracking-wide">
                        CONTACTER MAINTENANT
                    </a>
                </div>
            </div>
        </div>

        <div class="hidden lg:block">
            <div class="relative flex flex-row items-center gap-12 w-full">
                <!-- Image gauche -->
                <div class="relative w-1/2">
                    <div class="relative">
                        <img src="{{ asset('images/mymonto-support.jpg') }}"
                            alt="Support MyMonto"
                            class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Contenu droite -->
                <div class="relative w-1/2">
                    <div class="flex flex-col gap-6">
                        <h2 class="font-inter font-semibold text-[36px] leading-tight text-[#1A1A1A] text-left">
                            Toujours à vos côtés
                        </h2>
                        <p class="font-inter font-normal text-[16px] leading-5 tracking-[0.8px]  text-justify text-[#505050]">
                            <span class="tracking-[0.8px]"> Bénéficiez d'un <span class="font-bold text-[#1A1A1A]">accompagnement complet</span> pour suivre les </span> <br> réparations de votre véhicule, avec une assistance dédiée à <br> chaque étape, <span class="font-bold text-[#1A1A1A]">y compris en cas d’accident ou de litige</span>.
                        </p>

                        <div class="flex justify-start mt-2">
                            <a href="#"
                                class="inline-flex items-center justify-center min-w-[253px] h-[52px] bg-[#DF6E1E] text-white text-[14px] font-bold rounded-[4px] px-[32px] py-[14px] hover:bg-[#c85e15] transition duration-300 text-center uppercase tracking-wide">
                                CONTACTER MAINTENANT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>