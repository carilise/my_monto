
<section class=" 2xl:container mx-auto py-[50px] md:py-[250px] px-4 md:px-6 lg:px-8 overflow-hidden">
    <div class=" lg:px-[80px] flex flex-col md:flex-row items-start lg:gap-6 md:gap-4 gap-6">

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
                        <span class="font-semibold text-base  pr-4 md:text-[22px]">
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