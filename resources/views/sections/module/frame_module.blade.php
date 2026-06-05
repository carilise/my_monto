<section class="2xl:container mx-auto bg-white ">
    <div class=" px-6 sm:px-8 lg:px-12 py-3 flex items-center justify-between gap-2  bg-amber-950">
        <!-- Trait gauche -->
        <div class="h-[2px] w-[475px] bg-black"></div>

        <!-- Texte centré -->
        <p class="mx-6 font-inter font-normal text-[16px] leading-[24px] tracking-normal text-center text-black">
            Découvrez comment MyMonto transforme le suivi des réparations de vos véhicules grâce à des fonctionnalités intuitives et une gestion centralisée de toutes vos informations.
        </p>

        <!-- Trait droit -->
        <div class="h-[2px] w-[475px] bg-black"></div>
    </div>


    <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-2 mb-16 bg-amber-900">
        <!-- Image -->
        <div class="flex justify-start">
            <img src="{{ asset('images/module_image/image1.png') }}" alt="Historique du véhicule" class="w-[269px] h-[500px] object-contain">
        </div>

        <!-- Texte -->
        <div class="w-[492px] h-[326px] opacity-100 flex flex-col gap-[20px]">
            <h3 class="font-inter font-semibold text-[36px] text-gray-900 mb-4">HISTORIQUE DU VÉHICULE</h3>
            <p class="text-gray-700 mb-4 text-[16px]">Centralisez toutes les informations liées à votre véhicule pour un <br> suivi interne et constant.</p>
            <ul class="space-y-4 text-gray-600 text-[18px]">
                <li><span class="font-semibold">- Interventions passées :</span> <br> accès à l’ensemble des réparations effectuées</li>
                <li><span class="font-semibold">- Documents :</span> <br> sauvegarde des rapports et pièces associées</li>
                <li><span class="font-semibold">- Suivi chronologique :</span> <br> visualisation de l’évolution du véhicule dans le temps</li>
                <li><span class="font-semibold">- Consultation rapide :</span> <br> accès simple à tout moment depuis l’application</li>
            </ul>
        </div>
    </div>

    <!-- Bloc 2 : Notifications intelligentes -->
    <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
        <!-- Texte -->
        <div>
            <h3 class="font-inter font-semibold text-xl text-gray-900 mb-4">NOTIFICATIONS INTELLIGENTES</h3>
            <p class="text-gray-700 mb-4">Restez informé sans effort grâce à des alertes automatiques à chaque étape importante.</p>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li><span class="font-semibold">- Alertes en temps réel :</span> notifications à chaque changement de statut</li>
                <li><span class="font-semibold">- Rappels importants :</span> vérification des échéances et entretiens</li>
                <li><span class="font-semibold">- Communication fluide :</span> plus besoin de contacter le service client, l’application vous le signale</li>
            </ul>
        </div>
        <!-- Image -->
        <div class="flex justify-center">
            <img src="{{ asset('images/module_image/image2.png') }}" alt="Notifications intelligentes" class="w-[269px] h-[500px] object-contain">
        </div>
    </div>
</section>