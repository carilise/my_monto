<!-- Version desktop ORIGINALE (inchangée) -->
<section class="2xl:container mx-auto py-[50px] md:py-[250px] px-4 md:px-6 lg:px-8 overflow-hidden lg:block hidden">
    <div class="lg:px-[80px] flex flex-col md:flex-row items-start lg:gap-6 md:gap-4 gap-6">

        <div class="w-full md:w-6/12 flex-shrink-0">
            <div>
                <h1 style="font-family:'Inter',sans-serif;"
                    class="hidden text-3xl sm:text-4xl lg:text-[48px] font-semibold text-[#1A1A1A] leading-tight lg:leading-[64px]">
                    FAQ
                </h1>
                <h1 style="font-family:'Inter',sans-serif;"
                    class="text-3xl sm:text-4xl lg:text-[48px] font-semibold text-[#1A1A1A] leading-tight lg:leading-[64px]">
                    FAQ
                </h1>
                <div class="w-[58px] h-[6px] rounded-[8px] opacity-30 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E]"></div>
            </div>

            <div class="mt-[5rem]">
                <p class="text-[16px] font-semibold text-gray-700">
                    Des questions sur MyMonto ? Retrouvez ici toutes les <br> réponses pour comprendre facilement comment suivre les <br> réparations de votre véhicule.
                </p>

                <img src="{{ asset('images/quiz.png') }}"
                    alt="Illustration FAQ"
                    style="width:500px; height:400px; position:relative; transform:rotate(0deg); opacity:1;"
                    class="mx-auto object-contain mix-blend-multiply mt-6 mr-20 border-2 border-gray-300 rounded-lg shadow-lg">

            </div>
        </div>

        <div class="w-full md:w-6/12 md:mt-4 mt-0" x-data="{ open: 1 }">

            @php
            $faqs = [
            [
            'id' => 1,
            'question' => 'Comment créer mon compte ?',
            'answer' => 'Pour créer votre compte, il vous suffit de télécharger l\'application dans le store et de suivre les premières instructions en donnant vos informations qui seront retenues et cryptées pour la sécurité de vos données.',
            ],
            [
            'id' => 2,
            'question' => 'Comment savoir si mon véhicule a déjà été enregistrer ?',
            'answer' => 'Vous pouvez vérifier l\'enregistrement de votre véhicule directement depuis la section "Mes véhicules" dans l\'application. Un indicateur visuel vous informera du statut d\'enregistrement.',
            ],
            [
            'id' => 3,
            'question' => 'Puis-je utiliser myMonto pour plusieurs véhicules ?',
            'answer' => 'Oui, myMonto vous permet de gérer plusieurs véhicules depuis un seul compte. Il vous suffit d\'ajouter chaque véhicule dans la section dédiée de l\'application.',
            ],
            [
            'id' => 4,
            'question' => 'Vais-je recevoir des notifications sur l\'avancement des réparations ?',
            'answer' => 'Absolument ! myMonto vous envoie des notifications en temps réel à chaque étape de la réparation de votre véhicule, de la prise en charge jusqu\'à la restitution.',
            ],
            [
            'id' => 5,
            'question' => 'Comment se fait le suivi des factures ?',
            'answer' => 'Toutes vos factures sont accessibles directement dans l\'application, dans la section "Historique". Vous pouvez les consulter, les télécharger et les partager en quelques clics.',
            ],
            ];
            @endphp

            <div class="flex flex-col gap-5">
                @foreach ($faqs as $faq)

                <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">

                    <button
                        type="button"
                        class="w-full flex items-center justify-between px-6 py-5 text-left transition-all duration-300 focus:outline-none"
                        :class="open === {{ $faq['id'] }}
                            ? 'bg-gradient-to-r from-orange-500 to-orange-400 text-white rounded-t-2xl'
                            : 'bg-white text-gray-800 hover:bg-orange-50'"
                        @click="open = (open === {{ $faq['id'] }}) ? null : {{ $faq['id'] }}">
                        <span class="font-semibold text-base pr-4 md:text-[22px]">
                            {{ $faq['question'] }}
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 flex-shrink-0 transition-transform duration-300"
                            :class="open === {{ $faq['id'] }} ? 'rotate-180 text-white' : 'text-orange-500'"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        x-show="open === {{ $faq['id'] }}"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="bg-white px-6 py-5 border-t border-gray-100"
                        x-cloak>
                        <p class="text-gray-600 text-sm md:text-[14px] leading-relaxed">
                            {{ $faq['answer'] }}
                        </p>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- Version mobile/tablette MODERNE (affichée seulement sur < 1024px) -->
<section class="2xl:container mx-auto py-12 md:py-20 px-10 overflow-hidden bg-white lg:hidden block">
    <div class="flex flex-col items-start gap-8">

        <!-- Colonne gauche - Titre, description et illustration -->
        <div class="w-full flex-shrink-0">
            <div class="mb-6">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-[#B100D4]/10 to-[#DF6E1E]/10 rounded-full px-3 py-1 mb-4">
                    <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] animate-pulse"></div>
                    <span class="text-[11px] font-bold text-[#DF6E1E] uppercase tracking-wider">Questions fréquentes</span>
                </div>
                <h2 class="font-['Inter'] text-3xl sm:text-4xl font-bold text-[#1A1A1A] leading-tight">
                    FAQ
                </h2>
                <div class="w-[60px] h-[4px] rounded-full bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] mt-3"></div>
            </div>

            <div class="mt-6 md:mt-8">
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                    Des questions sur MyMonto ? Retrouvez ici toutes les réponses pour comprendre facilement comment suivre les réparations de votre véhicule.
                </p>
            </div>

            <div class="mt-8 md:mt-10">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition duration-500"></div>

                    <div class="relative bg-gradient-to-br from-gray-50 to-white rounded-2xl p-2 shadow-lg border border-gray-100">
                        <img src="{{ asset('images/quiz.png') }}"
                            alt="Illustration FAQ"
                            class="w-full max-w-[400px] h-auto object-contain rounded-xl mx-auto transition-transform duration-500 group-hover:scale-[1.02]">
                    </div>

                    <div class="absolute -bottom-3 -right-3 bg-white rounded-full shadow-lg p-2 hidden sm:block">
                        <div class="bg-gradient-to-r from-[#B100D4] to-[#DF6E1E] rounded-full p-1.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - FAQ Accordion moderne -->
        <div class="w-full mt-4" x-data="{ open: 1 }">
            <div class="flex flex-col gap-4 sm:gap-5">

                @foreach ($faqs as $index => $faq)
                <div class="rounded-xl sm:rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:shadow-md border border-gray-100"
                    :class="open === {{ $faq['id'] }} ? 'shadow-lg' : 'shadow-sm'">

                    <button
                        type="button"
                        class="w-full flex items-center justify-between gap-3 px-4 sm:px-5 py-4 sm:py-5 text-left transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#DF6E1E]/20"
                        :class="open === {{ $faq['id'] }}
                            ? 'bg-gradient-to-r from-[#DF6E1E] to-[#c55a14] text-white rounded-t-xl sm:rounded-t-2xl'
                            : 'bg-white text-gray-800 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-50/50'"
                        @click="open = (open === {{ $faq['id'] }}) ? null : {{ $faq['id'] }}">

                        <span class="lg:hidden w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs font-bold flex-shrink-0"
                            :class="open === {{ $faq['id'] }} ? 'text-white' : 'text-[#DF6E1E] bg-orange-100'">
                            {{ $index + 1 }}
                        </span>

                        <span class="font-semibold text-sm sm:text-base md:text-[17px] flex-1 pr-2">
                            {{ $faq['question'] }}
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 flex-shrink-0 transition-all duration-300"
                            :class="open === {{ $faq['id'] }} ? 'rotate-180 text-white' : 'text-[#DF6E1E]'"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        x-show="open === {{ $faq['id'] }}"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="bg-gray-50/50 px-4 sm:px-5 py-4 sm:py-5 border-t border-gray-100"
                        x-cloak>
                        <div class="flex gap-3">
                            <div class="hidden sm:block flex-shrink-0 mt-0.5">
                                <div class="w-6 h-6 rounded-full bg-gradient-to-br from-[#B100D4]/10 to-[#DF6E1E]/10 flex items-center justify-center">
                                    <svg class="w-3 h-3 text-[#DF6E1E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm sm:text-[14px] leading-relaxed flex-1">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>