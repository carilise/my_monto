<footer class="relative text-white 2xl:container mx-auto py-8 sm:py-10 lg:py-12 overflow-hidden">

    <div class="absolute inset-0 z-0 flex">
        <!-- Bloc gauche gris   -->
        <div class="w-1/5 bg-[#241B1B]"></div>

        <!-- Image en arriere plan -->
        <div class="w-4/5 relative">
            <div class="w-full relative min-h-[650px] overflow-hidden">
                <img src="{{ asset('images/footer/footer.jpg') }}"
                    alt="Footer background"
                    class="w-full h-full object-cover object-left">
            </div>
            <div class="absolute inset-0 bg-[#241B1B]/70"></div>

            <div class="absolute inset-y-0 left-0 w-[35%] bg-gradient-to-r from-[#241B1B] via-[#241B1B]/90 to-transparent"></div>
        </div>

       

    </div>

    <!-- Contenue principale -->
    <div class="relative  px-2 md:px-3 lg:px-12 z-10">
        <!-- Version desktop  -->
        <div class="hidden lg:flex items-start justify-between gap-6 xl:gap-8 mb-6">

            <!-- Colonne gauche  -->
            <div class="flex flex-col gap-8" style="width:200px; flex-shrink:0;">
                <div class="flex items-center">
                    <img src="{{ asset('images/footer/logo.png') }}"
                        alt="Logo MyMonto"
                        class="w-30 h-auto object-contain">
                </div>

                <div>
                    <p class="text-3 text-white/70 leading-4.5">Copyright © 2026 MyMonto ltd.</p>
                    <p class="text-3 text-white/70 leading-4.5">All rights reserved.</p>
                </div>

                <div class="flex items-center gap-3">
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Instagram" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Facebook" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Twitter" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo You tube" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.54C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z" />
                            <polygon fill="#1C2732" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Liens centraux  -->
            <div class="flex items-start justify-between gap-8 xl:gap-14">
                <div class="flex flex-col gap-3">
                    <h3 class="text-4.5 sm:text-5 font-bold text-white mb-1">Entreprise</h3>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Qui sommes nous ?</a>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Plus d'avis utilisateurs</a>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Nous contacter</a>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="text-4.5 sm:text-5 font-bold text-white mb-1">Support</h3>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Centre d'aide</a>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Conditions d'utilisation</a>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Aspects légaux</a>
                    <a href="#" class="text-3 text-white/70 hover:text-white transition leading-5">Politique de confidentialité</a>
                </div>

                <div class="flex flex-col gap-3" style="width:240px;">
                    <h3 class="text-4.5 sm:text-5 font-bold text-white mb-1">Restez informez</h3>
                    <div class="flex items-center border border-white/40 rounded-md overflow-hidden" style="height:38px;">
                        <input
                            type="email"
                            placeholder="Entrez votre adresse mail"
                            class="flex-1 bg-transparent text-3 text-white/70 placeholder-white/40 px-3 py-2 outline-none h-full" />
                        <button class="px-3 h-full flex items-center justify-center border-l border-white/40 hover:bg-white/10 transition">
                            <svg aria-label="Logo newletter" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Version mobile et tablette  -->
        <div class="lg:hidden flex flex-col gap-8 text-center">

            <div class="flex flex-col items-center gap-6">
                <img src="{{ asset('images/footer/logo.png') }}"
                    alt="Logo MyMonto"
                    class="w-[140px] h-auto object-contain">

                <div class="flex items-center justify-center gap-3">
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Instagram" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Facebook" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Twitter" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-white transition">
                        <svg aria-label="Logo Youtube" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.54C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z" />
                            <polygon fill="#1C2732" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 text-left max-w-md mx-auto w-full">
                <div class="flex flex-col gap-3">
                    <h3 class="text-4.5 font-bold text-white">Entreprise</h3>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Qui sommes nous ?</a>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Plus d'avis utilisateurs</a>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Nous contacter</a>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="text-4.5 font-bold text-white">Support</h3>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Centre d'aide</a>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Conditions d'utilisation</a>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Aspects légaux</a>
                    <a href="#" class="text-[13px] text-white/70 hover:text-white transition">Politique de confidentialité</a>
                </div>
            </div>

            <div class="flex flex-col gap-3 max-w-md mx-auto w-full text-left">
                <h3 class="text-4.5 font-bold text-white">Restez informez</h3>
                <div class="flex items-center border border-white/40 rounded-md overflow-hidden">
                    <input
                        type="email"
                        placeholder="Entrez votre adresse mail"
                        class="flex-1 bg-transparent text-3.2 text-white/70 placeholder-white/40 px-3 py-2 outline-none h-10.5" />
                    <button class="px-3 h-10.5 flex items-center justify-center border-l border-white/40 hover:bg-white/10 transition">
                        <svg aria-label="Logo newletter" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="pt-4 border-t border-white/20">
                <p class="text-3 text-white/70">Copyright © 2026 MyMonto ltd. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>