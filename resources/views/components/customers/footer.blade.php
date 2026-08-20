{{-- Footer --}}
<footer class="relative overflow-hidden bg-primary-900 text-primary-50">
    {{-- Éléments décoratifs --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-primary-700/40 blur-3xl"></div>
        <div class="absolute -bottom-48 -right-40 h-[30rem] w-[30rem] rounded-full bg-primary-800/60 blur-3xl"></div>
        <div class="absolute right-1/3 top-1/3 h-72 w-72 rounded-full bg-accent/5 blur-3xl"></div>

        <div
            class="absolute inset-0 opacity-[0.035]"
            style="background-image: radial-gradient(circle, #b5ddee 1px, transparent 1px); background-size: 32px 32px;"
        ></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:px-10 lg:py-20">
        {{-- Bloc d'appel à l'action --}}
        <div class="mb-16 overflow-hidden rounded-3xl border border-primary-400/20 bg-primary-800/60 p-7 shadow-2xl shadow-primary-900/40 backdrop-blur-md sm:p-10 lg:p-12">
            <div class="flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-accent/30 bg-accent/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-accent">
                        <span class="size-2 rounded-full bg-accent"></span>
                        Agissons ensemble
                    </span>

                    <h2 class="mt-5 font-display text-3xl font-bold leading-tight text-primary-50 sm:text-4xl">
                        Construisons un avenir plus juste et durable
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-primary-200 sm:text-base">
                        Votre soutien permet de renforcer nos actions en santé, environnement,
                        éducation et développement social auprès des communautés.
                    </p>
                </div>

                <div class="flex w-full shrink-0 flex-col gap-3 sm:w-auto sm:flex-row">
                    <a
                        href="#don"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-accent px-6 py-3.5 text-sm font-extrabold text-primary-900 shadow-lg shadow-accent/20 transition hover:-translate-y-0.5 hover:bg-accent-dark"
                    >
                        Faire un don

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78Z" />
                        </svg>
                    </a>

                    <a
                        href="#contact"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-primary-300/40 bg-primary-700/40 px-6 py-3.5 text-sm font-extrabold text-primary-50 transition hover:-translate-y-0.5 hover:border-primary-200 hover:bg-primary-600"
                    >
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>

        {{-- Contenu principal --}}
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr_1.2fr] lg:gap-10">
            {{-- Identité --}}
            <div>
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
                    <span class="flex size-12 items-center justify-center rounded-2xl bg-primary-500 text-primary-50 shadow-lg shadow-primary-900/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22V12" />
                            <path d="M12 12c-3.5 0-6-2.2-6-5.5C9.5 6.5 12 8.7 12 12Z" />
                            <path d="M12 12c3.5 0 6-2.2 6-5.5-3.5 0-6 2.2-6 5.5Z" />
                            <path d="M12 16c-2.5 0-4.5 1.5-4.5 4 2.5 0 4.5-1.5 4.5-4Z" />
                            <path d="M12 16c2.5 0 4.5 1.5 4.5 4 2.5 0 4.5-1.5 4.5-4Z" />
                        </svg>
                    </span>

                    <span class="font-display text-xl font-bold tracking-tight text-primary-50">
                        Rescue The World
                    </span>
                </a>

                <p class="mt-6 max-w-sm text-sm leading-7 text-primary-200">
                    Une organisation engagée pour renforcer l’autonomie des femmes,
                    accompagner les jeunes et bâtir des communautés plus résilientes.
                </p>

                <div class="mt-6 flex items-center gap-3">
                    <a href="#" aria-label="Facebook" class="flex size-10 items-center justify-center rounded-xl border border-primary-400/30 bg-primary-800/70 text-primary-200 transition hover:-translate-y-1 hover:border-accent hover:bg-accent hover:text-primary-900">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="Instagram" class="flex size-10 items-center justify-center rounded-xl border border-primary-400/30 bg-primary-800/70 text-primary-200 transition hover:-translate-y-1 hover:border-accent hover:bg-accent hover:text-primary-900">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn" class="flex size-10 items-center justify-center rounded-xl border border-primary-400/30 bg-primary-800/70 text-primary-200 transition hover:-translate-y-1 hover:border-accent hover:bg-accent hover:text-primary-900">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" aria-label="YouTube" class="flex size-10 items-center justify-center rounded-xl border border-primary-400/30 bg-primary-800/70 text-primary-200 transition hover:-translate-y-1 hover:border-accent hover:bg-accent hover:text-primary-900">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-sm font-extrabold uppercase tracking-[0.16em] text-accent">
                    Navigation
                </h3>

                <ul class="mt-5 space-y-3 text-sm text-primary-200">
                    <li><a href="#accueil" class="transition hover:text-accent">Accueil</a></li>
                    <li><a href="#apropos" class="transition hover:text-accent">À propos de nous</a></li>
                    <li><a href="#actualites" class="transition hover:text-accent">Actualités</a></li>
                    <li><a href="#activites" class="transition hover:text-accent">Nos activités</a></li>
                    <li><a href="#partenaires" class="transition hover:text-accent">Partenaires</a></li>
                </ul>
            </div>

            {{-- Domaines --}}
            <div>
                <h3 class="text-sm font-extrabold uppercase tracking-[0.16em] text-accent">
                    Nos domaines
                </h3>

                <ul class="mt-5 space-y-3 text-sm text-primary-200">
                    <li><a href="#" class="transition hover:text-accent">Santé communautaire</a></li>
                    <li><a href="#" class="transition hover:text-accent">Protection de l’environnement</a></li>
                    <li><a href="#" class="transition hover:text-accent">Éducation et formation</a></li>
                    <li><a href="#" class="transition hover:text-accent">Autonomisation des femmes</a></li>
                    <li><a href="#" class="transition hover:text-accent">Entrepreneuriat des jeunes</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div id="contact">
                <h3 class="text-sm font-extrabold uppercase tracking-[0.16em] text-accent">
                    Contactez-nous
                </h3>

                <ul class="mt-5 space-y-4 text-sm text-primary-200">
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 size-5 shrink-0 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 21s-6-4.35-6-10a6 6 0 1 1 12 0c0 5.65-6 10-6 10Z" />
                            <circle cx="12" cy="11" r="2.5" />
                        </svg>

                        <span>Parakou, Bénin</span>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z" />
                        </svg>

                        <a href="tel:+22900000000" class="transition hover:text-accent">
                            +229 00 00 00 00
                        </a>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="m3 7 9 6 9-6" />
                        </svg>

                        <a href="mailto:contact@rescuetheworld.org" class="break-all transition hover:text-accent">
                            contact@rescuetheworld.org
                        </a>
                    </li>
                </ul>

                <form class="mt-6">
                    <label for="newsletter" class="text-xs font-semibold text-primary-200">
                        Recevez nos dernières actualités
                    </label>

                    <div class="mt-3 flex rounded-xl border border-primary-400/30 bg-primary-800/70 p-1.5 focus-within:border-accent">
                        <input
                            id="newsletter"
                            type="email"
                            placeholder="Votre adresse e-mail"
                            class="min-w-0 flex-1 bg-transparent px-3 text-sm text-primary-50 outline-none placeholder:text-primary-300"
                        >

                        <button
                            type="submit"
                            aria-label="S'inscrire à la newsletter"
                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-accent text-primary-900 transition hover:bg-accent-dark"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m22 2-7 20-4-9-9-4Z" />
                                <path d="M22 2 11 13" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Bas du footer --}}
        <div class="mt-14 flex flex-col gap-5 border-t border-primary-400/20 pt-6 text-xs text-primary-300 sm:flex-row sm:items-center sm:justify-between">
            <p>
                © 2026 Conscience Féminine. Tous droits réservés.
            </p>

            <div class="flex flex-wrap gap-5">
                <a href="#" class="transition hover:text-accent">
                    Politique de confidentialité
                </a>

                <a href="#" class="transition hover:text-accent">
                    Mentions légales
                </a>

                <a href="#" class="transition hover:text-accent">
                    Conditions d’utilisation
                </a>
            </div>
        </div>
    </div>
</footer>