<section class="relative 2xl:container mx-auto lg:min-h-[1050px] overflow-hidden"
    x-data="{ show: false }"
    x-intersect.once="show = true">
    <div class="">
        {{-- Rectangle 3 décoratif - UNIQUEMENT sur desktop (lg et plus) --}}
        <div class="absolute hidden lg:block" aria-hidden="true">
            <img src="{{ asset('images/hero/rectangle3.png') }}" alt="" class="lg:w-[750px] h-auto">
        </div>

        {{-- Petit texte décoratif - Version desktop (positionné à droite) --}}
        <div class="absolute top-[20px] right-[150px] w-[275px] p-4 pointer-events-none z-0 hidden lg:block">
            <p class="font-light italic text-[12px] leading-relaxed text-[#505050]">
                Avec MyMONTO, les réparations de votre véhicule deviennent visibles, compréhensibles et parfaitement maîtrisées, du diagnostic à la remise des clés.
            </p>
        </div>

        <div class="relative z-10 px-2">

            {{-- Version mobile/tablette (< lg) : contenu centré avec padding-top --}}
            <div class="lg:hidden">
                <div class="flex flex-col items-center justify-center pt-20 sm:pt-24 md:pt-28 pb-8 sm:pb-12 md:pb-16">
                    <div class="text-center max-w-2xl mx-auto mb-6 transition-all duration-700 ease-out opacity-0 translate-y-5"
                        :class="show ? 'opacity-100 translate-y-0' : ''">
                        <h2 class="font-semibold text-lg sm:text-xl md:text-2xl text-[#505050] mb-2">
                            Qu'est ce que myMonto ?
                        </h2>
                        <p class="font-medium text-xs sm:text-sm text-[#505050] px-4">
                            Découvrez l'application qui révolutionne le suivi des réparations de votre véhicule
                        </p>
                    </div>

                    {{-- Texte décoratif intégré dans le contenu pour mobile/tablette --}}
                    <div class="max-w-[280px] sm:max-w-[350px] md:max-w-[400px] mx-auto mb-6 sm:mb-8 px-4"
                        :class="show ? 'opacity-100 translate-y-0' : ''">
                        <div class="bg-[#F5F7FA] rounded-lg p-4 sm:p-5 border border-gray-100 shadow-sm">
                            <svg class="w-6 h-6 text-orange-400 mb-2 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <p class="font-light italic text-[11px] sm:text-[12px] md:text-[13px] leading-relaxed text-[#505050] text-center">
                                "Avec MyMONTO, les réparations de votre véhicule deviennent visibles, compréhensibles et parfaitement maîtrisées, du diagnostic à la remise des clés."
                            </p>
                        </div>
                    </div>

                    <div class="w-full max-w-[280px] sm:max-w-[350px] md:max-w-[400px] mx-auto mb-6 sm:mb-8">
                        <img src="{{ asset('images/mymontoFlou.png') }}" alt="Mockup téléphone"
                            class="w-full h-auto object-contain">
                    </div>

                    <div class="flex flex-col items-center gap-3 w-full max-w-[220px] mx-auto">
                        <a href="#download"
                            class="inline-block bg-orange-500 hover:bg-orange-600 transition-colors text-white font-bold uppercase text-xs sm:text-sm px-4 sm:px-6 py-2.5 sm:py-3 rounded-md shadow-md w-full text-center">
                            Essayer gratuitement !
                        </a>
                        <div class="flex items-center justify-center gap-3 pt-2">
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                    alt="App Store" class="h-7 sm:h-8 md:h-9 w-auto">
                            </a>
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                    alt="Google Play" class="h-7 sm:h-8 md:h-9 w-auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Version desktop (≥ lg) --}}
            <div class="hidden lg:block">
                <div class="absolute right-0 top-[450px] w-full max-w-[600px] mr-10">
                    <div class="w-full max-w-[500px] lg:max-w-[550px] xl:max-w-[600px]">

                        <div class="text-center mb-6 md:mb-8">
                            <h2 class="font-semibold text-xl md:text-2xl lg:text-3xl text-[#505050] ">
                                Qu'est ce que myMonto ?
                            </h2>
                            <p class="font-medium text-sm md:text-[12px] text-[#505050] px-4">
                                Découvrez l'application qui révolutionne le suivi des réparations de <br> votre véhicule
                            </p>
                        </div>

                        <div class="flex justify-center mb-6 md:mb-8">
                            <img src="{{ asset('images/mymontoFlou.png') }}" alt="Mockup téléphone"
                                class="w-[400px] lg:w-[400px] h-auto object-contain">
                        </div>

                        <div class="flex flex-col justify-center gap-1 w-full max-w-[220px] mx-auto">
                            <a href="#download"
                                class="inline-block bg-orange-500 hover:bg-orange-600 transition-colors text-white font-bold uppercase text-xs sm:text-[12px] px-4 sm:px-6 py-2.5 sm:py-3 rounded-md shadow-md text-center w-full">
                                Essayer gratuitement !
                            </a>
                            <div class="flex items-center justify-center gap-3 pt-2">
                                <a href="#" class="hover:opacity-80 transition-opacity">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                        alt="App Store" class="h-8 md:h-9 lg:h-10 w-auto">
                                </a>
                                <a href="#" class="hover:opacity-80 transition-opacity">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                        alt="Google Play" class="h-8 md:h-9 lg:h-10 w-auto">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>