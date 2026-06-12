<section class="relative flex items-center justify-center 2xl:container  mx-auto py-12 sm:py-16 lg:py-[200px] px-4 sm:px-6 lg:px-[160px] bg-white overflow-hidden">
    <div class="">

        <!-- version mobile et tablette  -->
        <div class="block lg:hidden w-full">
            <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-2xl overflow-hidden shadow-xl">

                <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-[#B100D4] to-[#DF6E1E] rounded-full opacity-10 blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-gradient-to-tr from-[#DF6E1E] to-[#B100D4] rounded-full opacity-10 blur-2xl"></div>

                <div class="relative z-10 flex flex-col gap-6 p-6 sm:p-8">

                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-[#B100D4]/10 to-[#DF6E1E]/10 rounded-full px-3 py-1 mb-3">
                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#B100D4] to-[#DF6E1E]"></div>
                                <span class="text-[10px] font-semibold text-[#DF6E1E] uppercase tracking-wider">Support premium</span>
                            </div>
                            <h2 class="font-inter font-bold text-2xl sm:text-3xl md:text-4xl text-[#1A1A1A] leading-tight">
                                Toujours à vos côtés
                            </h2>
                            <div class="w-[60px] h-[4px] rounded-full bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-3"></div>
                        </div>

                        <div class="hidden sm:block w-12 h-12 rounded-full bg-gradient-to-br from-[#B100D4]/20 to-[#DF6E1E]/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#DF6E1E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="bg-white/50 rounded-xl p-4 sm:p-5 border border-gray-100">
                        <p class="text-sm sm:text-base text-[#505050] leading-relaxed text-justify">
                            Bénéficiez d'un
                            <span class="font-bold text-[#1A1A1A] bg-gradient-to-r from-[#B100D4]/10 to-[#DF6E1E]/10 px-1.5 py-0.5 rounded">accompagnement complet</span>
                            pour suivre les réparations de votre véhicule, avec une assistance dédiée à chaque étape,
                            <span class="font-bold text-[#1A1A1A]">y compris en cas d’accident ou de litige</span>.
                        </p>
                    </div>

                    <div class="relative group my-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] rounded-xl blur-xl opacity-20 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('images/mymonto-support.jpg') }}"
                                alt="Support MyMonto"
                                class="w-full h-auto object-cover rounded-xl transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <div class="absolute bottom-3 right-3 bg-black/50 backdrop-blur-sm rounded-lg px-2 py-1">
                            <span class="text-white text-[9px] font-medium">Support 24/7</span>
                        </div>
                    </div>

                    <div class="mt-2">
                        <a href="#"
                            class="group relative inline-flex items-center justify-center w-full sm:w-auto min-w-[200px] bg-gradient-to-r from-[#DF6E1E] to-[#c55a14] 
                            text-white text-[12px] sm:text-[13px] font-bold rounded-xl px-6 sm:px-8 py-3.5 sm:py-4 transition-all duration-300 text-center uppercase 
                            tracking-wide overflow-hidden shadow-md hover:shadow-xl">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                CONTACTER MAINTENANT
                            </span>
                            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- version desktop -->
        <div class="hidden lg:block">
            <div class="relative flex flex-row items-center gap-12 w-full">
                <div class="relative w-1/2">
                    <div class="relative">
                        <img src="{{ asset('images/mymonto-support.jpg') }}"
                            alt="Support MyMonto"
                            class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <div class="relative w-1/2">
                    <div class="flex flex-col gap-6">
                        <h2 class="font-inter font-semibold text-[36px] leading-tight text-[#1A1A1A] text-left">
                            Toujours à vos côtés
                        </h2>
                        <p class="font-inter font-normal text-[16px] leading-5 tracking-[0.8px]  text-justify text-[#505050]">
                            <span class="tracking-[0.8px]"> Bénéficiez d'un <span class="font-bold text-[#1A1A1A]">accompagnement complet</span> pour suivre les </span> réparations de votre véhicule, avec une assistance dédiée à chaque étape, <span class="font-bold text-[#1A1A1A]">y compris en cas d’accident ou de litige</span>.
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