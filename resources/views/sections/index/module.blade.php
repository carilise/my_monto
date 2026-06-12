<section class="2xl:container mx-auto relative w-full lg:min-h-[1200px] overflow-x-hidden py-8 sm:py-12 md:py-16"
    x-data="{ show: false }"
    x-intersect.once="show = true">

    {{-- desktop --}}
    <div class="absolute hidden lg:block left-0 top-0 z-0" aria-hidden="true">
        <img src="{{ asset('images/hero/rectangle3.png') }}" alt="" class="w-[850px] h-auto max-w-none">
    </div>

    <div class="hidden lg:block absolute top-[30px] right-[190px] xl:right-[100px] w-[300px] xl:w-[350px] p-5 pointer-events-none z-0">
        <p class="font-light italic text-[13px] xl:text-[14px] leading-relaxed text-[#505050]">
            Avec MyMONTO, les réparations de votre véhicule deviennent visibles, compréhensibles et parfaitement maîtrisées, du diagnostic à la remise des clés.
        </p>
    </div>

    <div class="relative z-10 w-full">
        {{-- Version tablette --}}
        <div class="hidden md:flex lg:hidden flex-col items-center justify-center py-20 px-8">
            <div class="max-w-4xl mx-auto text-center">
                {{-- Titre --}}
                <div class="mb-10 transition-all duration-700 ease-out"
                    :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'">
                    <h2 class="font-semibold text-3xl text-[#505050] mb-3">
                        Qu'est ce que myMonto ?
                    </h2>
                    <p class="font-medium text-base text-[#505050]">
                        Découvrez l'application qui révolutionne le suivi des réparations de votre véhicule
                    </p>
                </div>

                {{-- Grille tablette avec plus d'espace --}}
                <div class="grid grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="bg-[#F5F7FA] rounded-xl p-6 border border-gray-100 shadow-md">
                            <svg class="w-7 h-7 text-orange-400 mb-3 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <p class="font-light italic text-[14px] leading-relaxed text-[#505050] text-center">
                                "Avec MyMONTO, les réparations de votre véhicule deviennent visibles, compréhensibles et parfaitement maîtrisées, du diagnostic à la remise des clés."
                            </p>
                        </div>

                        <div class="flex flex-col items-center w-full max-w-[250px] mx-auto gap-4">
                            <div class="w-full">
                                <a href="#download"
                                    class="px-4 sm:px-6 py-2 flex items-center justify-center gap-2 
                      bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] hover:from-[#c55a14] hover:to-[#d4661a]
                      transition-all duration-300 transform hover:scale-105
                      text-white font-inter font-bold text-xs sm:text-sm
                      rounded-xl shadow-md hover:shadow-lg whitespace-nowrap w-full">
                                    Essayer gratuitement !
                                </a>
                            </div>
                            <div class="flex items-center justify-center gap-2 ">
                                <a href="#" class="hover:opacity-80 transition-opacity">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                        alt="App Store" class="h-10 xl:h-11 w-auto">
                                </a>
                                <a href="#" class="hover:opacity-80 transition-opacity">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                        alt="Google Play" class="h-10 xl:h-11 w-auto">
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Colonne droite : image agrandie --}}
                    <div>
                        <img src="{{ asset('images/hero/mymontoFlou.png') }}" alt="Mockup téléphone"
                            class="w-full max-w-[350px] mx-auto object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- Version desktop --}}
        <div class="hidden lg:block">
            <div class="absolute right-0 top-[400px] w-full max-w-[700px] right-20 xl:right-32">
                <div class="w-full max-w-[600px] xl:max-w-[400px] ml-auto">

                    <div class="text-center mb-10">
                        <h2 class="font-semibold text-3xl xl:text-3xl text-[#505050] mb-3">
                            Qu'est ce que myMonto ?
                        </h2>
                        <p class="font-medium text-[14px] xl:text-[15px] text-[#505050]">
                            Découvrez l'application qui révolutionne le suivi des réparations de votre véhicule
                        </p>
                    </div>

                    <div class="flex justify-center mb-10">
                        <img src="{{ asset('images/hero/mymontoFlou.png') }}" alt="Mockup téléphone"
                            class="w-[450px] xl:w-[500px] h-auto object-contain">
                    </div>

                    <div class="flex flex-col items-center w-full max-w-[200px] mx-auto gap-1">
                        <div class="w-full">
                            <a href="#download"
                                class="px-4 sm:px-6 py-2 flex items-center justify-center gap-2 
                      bg-gradient-to-r from-[#DF6E1E] to-[#f07e2e] hover:from-[#c55a14] hover:to-[#d4661a]
                      transition-all duration-300 transform hover:scale-105
                      text-white font-inter font-bold text-xs sm:text-sm
                      rounded-xl shadow-md hover:shadow-lg whitespace-nowrap w-full">
                                Essayer gratuitement !
                            </a>
                        </div>
                        <div class="flex items-center justify-center gap-2 ">
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                    alt="App Store" class="h-10 xl:h-11 w-auto">
                            </a>
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                    alt="Google Play" class="h-10 xl:h-11 w-auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>