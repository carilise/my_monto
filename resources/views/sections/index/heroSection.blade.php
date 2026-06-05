
<section id="accueil"
    x-data="{ visible: false, showPhone: false }"
    x-init="setTimeout(() => visible = true, 100)"
    class="relative 2xl:container mx-auto min-h-[500px] sm:min-h-[550px] md:min-h-[600px] lg:min-h-[683px]">

    {{-- telephone destop --}}
    <div
        :class="showPhone ? 'opacity-100 translate-y-0 scale-100' : ''"
        class="absolute top-[-15px]  left-[830px] transform -translate-x-1/2
           w-[95%] lg:w-[1500px] lg:h-[1000px] z-10
           pointer-events-none hidden lg:block opacity-56 translate-y-10 scale-95 transition-all duration-[2000ms] delay-[1000ms] ease-in-out">
        <img src="{{ asset('images/hero/phone.png') }}" alt="MyMONTO app" class="w-full h-full">
    </div>

    <div :class="visible ? 'opacity-90' : 'opacity-0'"
        class="absolute top-0 left-0 w-full h-[900px] z-0
               pointer-events-none hidden lg:block
               transition-opacity duration-1000">
        <img src="{{ asset('images/hero_section.png') }}" alt="MyMONTO app" class="w-full h-full object-cover">
    </div>

    {{-- telephone mobile --}}
    <div :class="visible ? 'opacity-50 translate-y-0 scale-100' : 'opacity-0 translate-y-10 scale-95'" class="absolute inset-0 z-0 pointer-events-none lg:hidden">
        <div class="absolute inset-0 bg-[#F5F7FA]"></div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[150%] max-w-none
                   transition-opacity duration-1000 delay-300">
            <img src="{{ asset('images/hero/phone.png') }}" alt="MyMONTO app" class="w-full h-auto">
        </div>
    </div>

    <div>
        @include('sections.index.navbar')

        <div class="relative flex items-center min-h-[inherit] z-10">
            <div class="w-full px-4 sm:px-6 md:px-8 lg:px-[70px]">

                {{-- Version tablette --}}
                <div class="hidden md:grid lg:hidden grid-cols-2 gap-8 items-center py-8 md:py-12">
                    <div class="text-left space-y-4 md:space-y-6">
                        <h1 :class="visible ? 'anim-visible' : ''"
                            class="anim-hidden delay-200 font-inter font-semibold text-[24px] md:text-[32px] leading-tight text-gray-900">
                            Et si vous
                            <span class="font-extrabold text-[26px] md:text-[34px] text-orange-500">modernisiez</span>
                            <br> le suivi de vos réparations ?
                        </h1>
                        <p :class="visible ? 'anim-visible' : ''"
                            class="anim-hidden delay-300 font-inter text-[14px] md:text-[16px] text-[#505050]">
                            Gardez le contrôle des réparations de votre véhicule du début à la fin :
                            Notifications, Historique et Suivi clair à chaque intervention dans n'importe quel garage.
                        </p>
                        <div :class="visible ? 'anim-visible' : ''"
                            class="anim-hidden delay-500 flex flex-col items-start gap-3 w-full max-w-[250px]">
                            <a href="#download" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold uppercase text-xs px-6 py-3 rounded-md shadow-md text-center w-full">
                                Essayer gratuitement !
                            </a>
                            <div class="flex gap-2 pt-2">
                                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="h-8 w-auto"></a>
                                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="h-8 w-auto"></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Version mobile --}}
                <div class="md:hidden flex flex-col items-center justify-center min-h-[500px] py-8 text-center space-y-4">
                    <h1 :class="visible ? 'anim-visible' : ''"
                        class="anim-hidden delay-200 font-inter font-semibold text-[24px] leading-tight text-gray-900">
                        Et si vous
                        <span class="font-extrabold text-[26px] text-orange-500">modernisiez</span>
                        <br> le suivi de vos réparations ?
                    </h1>
                    <p :class="visible ? 'anim-visible' : ''"
                        class="anim-hidden delay-300 font-inter text-[14px] text-[#505050] px-4 bg-white/60 py-2 rounded-lg">
                        Gardez le contrôle des réparations de votre véhicule du début à la fin :
                        Notifications, Historique et Suivi clair à chaque intervention dans n'importe quel garage.
                    </p>
                    <div :class="visible ? 'anim-visible' : ''"
                        class="anim-hidden delay-500 flex flex-col items-center gap-3 w-full max-w-[250px]">
                        <a href="#download" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold uppercase text-xs px-6 py-3 rounded-md shadow-md text-center w-full">
                            Essayer gratuitement !
                        </a>
                        <div class="flex gap-2 pt-2">
                            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="h-8 w-auto"></a>
                            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="h-8 w-auto"></a>
                        </div>
                    </div>
                </div>

                {{-- Version desktop --}}
                <div class="hidden lg:block space-y-[70px] mt-12">
                    <div class="space-y-8 py-12 text-left">
                        <h1 :class="visible ? 'anim-visible' : ''"
                            class="anim-hidden delay-200 font-inter font-semibold lg:text-[37px] lg:leading-[10px] text-gray-900">
                            Et si vous
                            <span class="font-extrabold lg:text-[39px] lg:leading-[78px] text-orange-500">modernisiez</span>
                            le suivi <br> de vos réparations ?
                        </h1>
                        <p :class="visible ? 'anim-visible' : ''"
                            class="anim-hidden delay-300 font-inter lg:text-[16.5px] lg:leading-[24.7px] text-[#505050] w-full lg:w-[45%]">
                            Gardez le contrôle des réparations de votre véhicule du début à la fin :
                            Notifications, Historique et Suivi clair à chaque intervention dans n'importe quel garage.
                        </p>
                    </div>

                    <div :class="visible ? 'anim-visible' : ''"
                        class="anim-hidden delay-500 flex flex-col items-start gap-3 max-w-[250px]">
                        <a href="#download" class="inline-block bg-orange-500 hover:bg-orange-600 transition-colors text-white font-bold uppercase lg:text-sm px-6 py-3 rounded-md shadow-md text-center w-full">
                            Essayer gratuitement !
                        </a>
                        <div class="flex items-center gap-3 pt-2">
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="lg:h-10 w-auto object-contain">
                            </a>
                            <a href="#" class="hover:opacity-80 transition-opacity">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="lg:h-10 w-auto object-contain">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>