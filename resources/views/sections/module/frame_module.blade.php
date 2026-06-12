<section class="2xl:container mx-auto bg-white px-4 sm:px-6 lg:px-0">
    {{-- intro --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.20="v = true"
        class="text-center mt-12 sm:mt-16 max-w-3xl mx-auto px-4">
        <p :class="v ? 'anim-visible' : ''"
            class="anim-hidden delay-100 text-[15px] sm:text-[17px] italic text-[#717171] leading-relaxed">
            Découvrez comment MyMonto transforme le suivi des réparations de vos véhicules grâce à des
            fonctionnalités intuitives et une gestion centralisée de toutes vos informations.
        </p>
    </div>

    <!-- Historique vehicule -->
    <div class="flex flex-col max-w-5xl mx-auto gap-8 sm:gap-12 lg:gap-16 mb-12 sm:mb-16 px-4 sm:px-6 lg:px-0">

        {{-- HISTORIQUE VEHICULE --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[120px] sm:w-[180px] lg:w-[269px]">
                <img src="{{ asset('images/module_image/image1.png') }}"
                    alt="Historique" class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                    text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Historique du véhicule
                </h2>
                <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                    font-inter font-normal text-[14px] sm:text-base text-[#717171] leading-relaxed sm:leading-6 tracking-normal mb-6 max-w-[480px]">
                    Centralisez toutes les informations liées à votre véhicule pour un suivi structuré et durable.
                </p>

                <ul class="space-y-3 sm:space-y-4">
                    @foreach([
                    ['Interventions passées', 'Accès à l\'ensemble des réparations effectuées'],
                    ['Documents', 'Stockage des rapports et pièces associées'],
                    ['Suivi chronologique', 'Vision claire de l\'évolution du véhicule dans le temps'],
                    ['Consultation rapide', 'Accès simple à tout moment depuis l\'application'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''" class="anim-hidden flex items-start gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9] border-2"></span>
                        <div>
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#717171] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- NOTIFICATIONS INTELLIGENTES --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row-reverse items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[180px] sm:w-[280px] lg:w-[471px]">
                <img src="{{ asset('images/module_image/image2.png') }}"
                    alt="Notifications" class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left lg:text-right font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                    text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Notifications intelligentes
                </h2>
                <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                    text-[14px] sm:text-[16px] text-[#505050] leading-relaxed mb-6 sm:mb-8">
                    Restez informé sans effort grâce à des alertes automatiques à chaque étape importante.
                </p>

                <ul class="space-y-3 sm:space-y-5">
                    @foreach([
                    ['Alertes en temps réel', 'Notification à chaque changement de statut'],
                    ['Rappels importants', 'Informations clés sur les étapes critiques'],
                    ['Suivi sans effort', 'Plus besoin de contacter le garage'],
                    ['Communication fluide', 'Lien direct entre vous et le garage'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''" class="anim-hidden flex items-start lg:items-center justify-start lg:justify-end gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <div class="text-left lg:text-right">
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#505050] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9]"></span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- TRANSPARENCE DES INTERVENTIONS --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[120px] sm:w-[180px] lg:w-[249px]">
                <img src="{{ asset('images/module_image/image3.png') }}" alt="Transparence"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Transparence des interventions
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 font-inter font-normal text-[14px] sm:text-base text-[#717171] leading-relaxed sm:leading-6 tracking-normal mb-6 max-w-[480px]">
                    Comprenez précisément ce qui est fait sur votre véhicule, sans zones d’ombre.
                </p>

                <ul class="space-y-3 sm:space-y-4">
                    @foreach([
                    ['Détails des réparations', 'Informations claires sur chaque intervention'],
                    ['Coûts visibles', 'Transparence sur les montants et prestations'],
                    ['Clarté des opérations', 'Compréhension simple des travaux réalisés'],
                    ['Confiance renforcée', 'Relation plus transparente avec le garage'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9] border-2"></span>
                        <div>
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#717171] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- DOCUMENTS & FACTURES --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row-reverse items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[180px] sm:w-[320px] lg:w-[535px]">
                <img src="{{ asset('images/module_image/image4.png') }}" alt="Documents"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left lg:text-right font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Documents & Factures
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 text-[14px] sm:text-[16px] text-[#505050] leading-relaxed mb-6 sm:mb-8">
                    Gardez tous vos documents importants accessibles et organisés en un seul endroit.
                </p>

                <ul class="space-y-3 sm:space-y-5">
                    @foreach([
                    ['Factures centralisées', 'Accès à toutes vos factures à tout moment'],
                    ['Archivage automatique', 'Aucune perte d\'information'],
                    ['Consultation rapide', 'Documents disponibles en quelques clics'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start lg:items-center justify-start lg:justify-end gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <div class="text-left lg:text-right">
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#505050] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9]"></span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- RECHERCHE DE GARAGES --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[120px] sm:w-[200px] lg:w-[362px]">
                <img src="{{ asset('images/module_image/image5.png') }}" alt="Garages"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Recherche de garages
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 font-inter font-normal text-[14px] sm:text-base text-[#717171] leading-relaxed sm:leading-6 tracking-normal mb-6 max-w-[480px]">
                    Trouvez facilement un garage fiable à proximité de votre position.
                </p>

                <ul class="space-y-3 sm:space-y-4">
                    @foreach([
                    ['Localisation intelligente', 'Garages disponibles autour de vous et classés par un système de vote'],
                    ['Accès rapide', 'Recherche simple et intuitive'],
                    ['Visibilité des garages', 'Informations claires pour faire votre choix'],
                    ['Connexion directe', 'Mise en relation rapide avec un professionnel'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9] border-2"></span>
                        <div>
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#717171] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- MULTI-VEHICULES --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row-reverse items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[180px] sm:w-[320px] lg:w-[522px]">
                <img src="{{ asset('images/module_image/image6.png') }}" alt="Multi-véhicules"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left lg:text-right font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Multi-véhicules
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 text-[14px] sm:text-[16px] text-[#505050] leading-relaxed mb-6 sm:mb-8">
                    Gérez facilement plusieurs véhicules depuis une seule application.
                </p>

                <ul class="space-y-3 sm:space-y-5">
                    @foreach([
                    ['Ajout de véhicules', 'Suivi de plusieurs éditions'],
                    ['Gestion centralisée', 'Tout au même endroit'],
                    ['Accès rapide', 'Navigation simple entre les véhicules d\'un simple swip'],
                    ['Idéal pour tous', 'Particuliers et petites flottes'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start lg:items-center justify-start lg:justify-end gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <div class="text-left lg:text-right">
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#505050] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9]"></span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- SERVICES DIVERS --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[120px] sm:w-[280px] lg:w-[511px]">
                <img src="{{ asset('images/module_image/image7.png') }}" alt="Services"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Services divers
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 font-inter text-justify font-normal text-[14px] sm:text-[16px] text-[#717171] tracking-normal mb-6 max-w-[500px]">
                    Accédez rapidement à une gamme de services essentiels pour vous assister à tout moment, que ce soit en situation d'urgence, pour un dépannage ou pour la gestion administrative de votre véhicule.
                </p>

                <ul class="space-y-3 sm:space-y-4">
                    @foreach([
                    ['Appeler un service', 'Contactez rapidement les services d’urgence (ambulance, police, sapeurs-pompiers) en cas de besoin'],
                    ['Trouver un dépanneur', 'En cas de panne, demandez l’intervention d’un mécanicien ou d’un vulcanisateur appartenant à un garage non loin de votre position'],
                    ['Déclaration d\'accident', 'Déclarez facilement un accident directement depuis l’application, en quelques étapes simples'],
                    ['Assurances', 'Gérez vos assurances et accédez à vos informations en toute simplicité'],
                    ['Mes abonnements', 'Gérez vos abonnements aux services d’alertes et restez connecté à tout moment'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9] border-2"></span>
                        <div>
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#717171] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- ASSISTANCE & LITIGES --}}
        <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
            class="flex flex-col lg:flex-row-reverse items-center gap-8 sm:gap-12 lg:gap-16 py-8 sm:py-12 lg:py-16">

            <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[180px] sm:w-[320px] lg:w-[480px]">
                <img src="{{ asset('images/module_image/image8.png') }}" alt="Assistance"
                    class="w-full h-auto object-contain">
            </div>

            <div class="flex-1 text-left lg:text-right font-sans px-2 sm:px-0">
                <h2 :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-200 text-[22px] sm:text-[28px] lg:text-[36px] font-semibold uppercase text-[#4D4D4D] mb-2">
                    Assistance & Litiges
                </h2>

                <p :class="v ? 'anim-visible' : ''"
                    class="anim-hidden delay-300 text-[14px] sm:text-[16px] text-[#505050] leading-relaxed mb-6 sm:mb-8">
                    Bénéficiez d’un accompagnement en cas de problème ou de désaccord.
                </p>

                <ul class="space-y-3 sm:space-y-5">
                    @foreach([
                    ['Support dédié', 'Assistance en cas de besoin'],
                    ['Historique des échanges', 'Traçabilité complète des interventions à travers le système d’historique'],
                    ['Gestion des litiges', 'Accompagnement structuré en cas de conflit'],
                    ['Sécurité renforcée', 'Plus de sérénité dans vos réparations'],
                    ['Edition des rapports', 'Produisez et personnalisez facilement tous vos rapports essentiels'],
                    ['Gestion des recours', 'Suivez, traitez et résolvez efficacement tous vos recours.'],
                    ] as $i => $item)
                    <li :class="v ? 'anim-visible' : ''"
                        class="anim-hidden flex items-start lg:items-center justify-start lg:justify-end gap-3"
                        :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                        <div class="text-left lg:text-right">
                            <span class="block text-[14px] sm:text-[16px] font-bold text-[#4D4D4D] leading-snug">
                                {{ $item[0] }}
                            </span>
                            <span class="block text-[13px] sm:text-[16px] text-[#505050] leading-relaxed">
                                {{ $item[1] }}
                            </span>
                        </div>
                        <span class="flex-shrink-0 mt-1 w-[10px] h-[10px] rounded-full bg-[#D9D9D9]"></span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- SEPARATEUR --}}
        <div class="w-full max-w-[1080px] mx-auto mt-12 sm:mt-24 lg:mt-[150px] h-0.5 bg-black opacity-10"></div>

        {{-- CTA FINAL --}}
        <div class="flex flex-col items-center justify-center py-8 sm:py-12 text-center px-4">
            <h2 class="text-[24px] sm:text-[28px] lg:text-[34px] font-bold text-[#4D4D4D] mb-6 sm:mb-8">
                Essayez gratuitement dès aujourd’hui
            </h2>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                <a href="#"
                    class="bg-[#E87524] text-white font-semibold text-[13px] sm:text-[14px] px-6 sm:px-8 py-3 rounded-md shadow-md hover:bg-[#d4651f] transition duration-300 inline-flex items-center justify-center whitespace-nowrap">
                    Installer gratuitement maintenant →
                </a>

                <a href="#"
                    class="bg-[#E87524] text-white font-semibold text-[13px] sm:text-[14px] px-6 sm:px-8 py-3 rounded-md shadow-md hover:bg-[#d4651f] transition duration-300 inline-flex items-center justify-center whitespace-nowrap">
                    Retourner sur la page d’accueil →
                </a>
            </div>
        </div>

    </div>
</section>