@extends('../layouts.app')

<section class="2xl:container mx-auto px-4 sm:px-8 lg:px-[100px] py-12 lg:py-16 bg-white">

    {{-- INTRO --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.20="v = true"
        class="text-center mb-16 max-w-xl mx-auto">
        <p :class="v ? 'anim-visible' : ''"
            class="anim-hidden delay-100 text-[12px] italic text-[#505050] leading-relaxed">
            Découvrez comment MyMonto transforme le suivi des réparations de vos véhicules grâce à des
            fonctionnalités intuitives et une gestion centralisée de toutes vos informations.
        </p>
    </div>

    {{-- ===== MODULE 1 : HISTORIQUE ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row items-center gap-16 py-16 border-b border-gray-100">

        {{-- Image gauche petite --}}
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[140px] lg:w-[160px]">
            <img src="{{ asset('images/modules/undraw_notifications_uvwd_1__1_.png') }}"
                alt="Historique" class="w-full h-auto object-contain">
        </div>

        {{-- Texte droite --}}
        <div class="flex-1 text-left">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Historique du véhicule
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px]">
                Centralisez toutes les informations liées à votre véhicule pour un suivi structuré et durable.
            </p>
            @foreach([
            ['Interventions passées', 'Accès à l\'ensemble des réparations effectuées'],
            ['Documents', 'Stockage des rapports et pièces associées'],
            ['Suivi chronologique', 'Vision claire de l\'évolution du véhicule dans le temps'],
            ['Consultation rapide', 'Accès simple à tout moment depuis l\'application'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 2 : NOTIFICATIONS ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row-reverse items-center gap-16 py-16 border-b border-gray-100">

        {{-- Image droite grande --}}
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[220px] lg:w-[280px]">
            <img src="{{ asset('images/modules/undraw_my-notifications_fy5v__1__1__1_.png') }}"
                alt="Notifications" class="w-full h-auto object-contain">
        </div>

        {{-- Texte gauche centré --}}
        <div class="flex-1 text-center">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Notifications intelligentes
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px] mx-auto">
                Restez informé sans effort grâce à des alertes automatiques à chaque étape importante.
            </p>
            @foreach([
            ['Alertes en temps réel', 'Notification à chaque changement de statut'],
            ['Rappels importants', 'Informations clés sur les étapes critiques'],
            ['Suivi sans effort', 'Plus besoin de contacter le garage'],
            ['Communication fluide', 'Lien direct entre vous et le garage'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 3 : TRANSPARENCE ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row items-center gap-16 py-16 border-b border-gray-100">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[140px] lg:w-[160px]">
            <img src="{{ asset('images/modules/transparence.png') }}" alt="Transparence" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-left">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Transparence des interventions
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px]">
                Comprenez précisément ce qui est fait sur votre véhicule, sans zones d'ombre.
            </p>
            @foreach([
            ['Détails des réparations', 'Informations claires sur chaque intervention'],
            ['Coûts visibles', 'Transparence sur les montants et prestations'],
            ['Clarté des opérations', 'Compréhension simple des travaux réalisés'],
            ['Confiance renforcée', 'Relation plus transparente avec le garage'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 4 : DOCUMENTS & FACTURES ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row-reverse items-center gap-16 py-16 border-b border-gray-100">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[220px] lg:w-[280px]">
            <img src="{{ asset('images/modules/documents.png') }}" alt="Documents" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-center">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Documents &amp; Factures
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px] mx-auto">
                Gardez tous vos documents importants accessibles et organisés en un seul endroit.
            </p>
            @foreach([
            ['Factures centralisées', 'Accès à toutes vos factures à tout moment'],
            ['Archivage automatique', 'Aucune perte d\'information'],
            ['Consultation rapide', 'Documents disponibles en quelques clics'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 5 : RECHERCHE DE GARAGES ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row items-center gap-16 py-16 border-b border-gray-100">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[140px] lg:w-[160px]">
            <img src="{{ asset('images/modules/garages.png') }}" alt="Garages" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-left">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Recherche de garages
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px]">
                Trouvez facilement un garage fiable à proximité de votre position.
            </p>
            @foreach([
            ['Recherche intelligente', 'Garages classés par un système de vote'],
            ['Accès rapide', 'Recherche simple et intuitive'],
            ['Visibilité des garages', 'Informations claires pour faire votre choix'],
            ['Connexion directe', 'Mise en relation rapide avec un professionnel'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 6 : MULTI-VÉHICULES ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row-reverse items-center gap-16 py-16 border-b border-gray-100">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[220px] lg:w-[280px]">
            <img src="{{ asset('images/modules/multivehicules.png') }}" alt="Multi-véhicules" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-center">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Multi-véhicules
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px] mx-auto">
                Gérez facilement plusieurs véhicules depuis une seule application.
            </p>
            @foreach([
            ['Ajout de véhicules', 'Suivi de plusieurs éditions'],
            ['Gestion centralisée', 'Tout au même endroit'],
            ['Accès rapide', 'Navigation simple d\'un simple swipe'],
            ['Idéal pour tous', 'Particuliers et petites flottes'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 7 : SERVICES DIVERS ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row items-center gap-16 py-16 border-b border-gray-100">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-left delay-100 flex-shrink-0 w-[140px] lg:w-[160px]">
            <img src="{{ asset('images/modules/services.png') }}" alt="Services" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-left">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Services divers
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px]">
                Accédez rapidement à une gamme de services essentiels pour vous assister à tout moment.
            </p>
            @foreach([
            ['Appeler un service', 'Services d\'urgence (ambulance, police, dépannage)'],
            ['Trouver un dépanneur', 'Intervention d\'un mécanicien proche de vous'],
            ['Signalement d\'accident', 'Déclarez facilement depuis l\'application'],
            ['Assurances & Abonnements', 'Gérez tout en toute simplicité'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MODULE 8 : ASSISTANCE & LITIGES ===== --}}
    <div x-data="{ v: false }" x-intersect.once.threshold.15="v = true"
        class="flex flex-col lg:flex-row-reverse items-center gap-16 py-16">
        <div :class="v ? 'anim-visible' : ''" class="anim-hidden from-right delay-100 flex-shrink-0 w-[220px] lg:w-[280px]">
            <img src="{{ asset('images/modules/assistance.png') }}" alt="Assistance" class="w-full h-auto object-contain">
        </div>
        <div class="flex-1 text-center">
            <h2 :class="v ? 'anim-visible' : ''" class="anim-hidden delay-200
                text-[18px] lg:text-[22px] font-extrabold uppercase tracking-[0.08em] text-[#1A1A1A] mb-2">
                Assistance &amp; Litiges
            </h2>
            <p :class="v ? 'anim-visible' : ''" class="anim-hidden delay-300
                text-[12px] text-[#505050] leading-relaxed mb-6 max-w-[360px] mx-auto">
                Bénéficiez d'un accompagnement en cas de problème mécanique ou de désaccord.
            </p>
            @foreach([
            ['Assistance litiges', 'Historique riche en échanges'],
            ['Contestation', 'Directement depuis l\'application'],
            ['Gestion des étapes', 'Sécurité juridique et accompagnement'],
            ['Édition des rapports', 'Plan de résolution avec vos recours'],
            ] as $i => $item)
            <div :class="v ? 'anim-visible' : ''" class="anim-hidden mb-3"
                :style="'transition-delay:' + (350 + {{ $i }} * 70) + 'ms'">
                <span class="block text-[12px] font-bold text-[#1A1A1A]">{{ $item[0] }}</span>
                <span class="block text-[11px] text-[#505050] leading-relaxed">{{ $item[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>

</section>