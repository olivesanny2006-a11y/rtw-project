<div>
    {{-- =========================================================
        CARROUSEL
    ========================================================== --}}
    <section id="accueil">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-64 overflow-hidden rounded-xl md:h-[700px]" style="height: 550px">

                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img
                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80"
                        class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                        alt="Évasion tropicale"
                    >

                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 p-4 text-center">
                        <h2 class="mb-2 text-2xl font-extrabold text-white drop-shadow-md md:text-5xl">
                            Évadez-vous au Bout du Monde
                        </h2>

                        <p class="mb-6 max-w-xl text-sm text-gray-200 drop-shadow md:text-lg">
                            Découvrez des plages paradisiaques et réservez vos vacances d'été dès aujourd'hui.
                        </p>

                        <a
                            href="#reserver"
                            class="rounded-lg bg-blue-600 px-6 py-3 font-semibold text-white shadow-lg transition duration-300 hover:bg-blue-700"
                        >
                            Explorer les Offres
                        </a>
                    </div>
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80"
                        class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                        alt="Technologie du futur"
                    >

                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 p-4 text-center">
                        <h2 class="mb-2 text-2xl font-extrabold text-white drop-shadow-md md:text-5xl">
                            L'Innovation à Portée de Main
                        </h2>

                        <p class="mb-6 max-w-xl text-sm text-gray-200 drop-shadow md:text-lg">
                            Optimisez votre flux de travail grâce à nos solutions web de nouvelle génération.
                        </p>

                        <a
                            href="#solutions"
                            class="rounded-lg bg-purple-600 px-6 py-3 font-semibold text-white shadow-lg transition duration-300 hover:bg-purple-700"
                        >
                            En savoir plus
                        </a>
                    </div>
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=1200&q=80"
                        class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 object-cover"
                        alt="Bien-être"
                    >

                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 p-4 text-center">
                        <h2 class="mb-2 text-2xl font-extrabold text-white drop-shadow-md md:text-5xl">
                            Un Esprit Sain dans un Corps Sain
                        </h2>

                        <p class="mb-6 max-w-xl text-sm text-gray-200 drop-shadow md:text-lg">
                            Prenez du temps pour vous. Rejoignez nos séances de yoga et méditation guidées.
                        </p>

                        <a
                            href="#bienetre"
                            class="rounded-lg bg-emerald-600 px-6 py-3 font-semibold text-white shadow-lg transition duration-300 hover:bg-emerald-700"
                        >
                            Commencer l'Expérience
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="h-3 w-3 rounded-full bg-white/50" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="h-3 w-3 rounded-full bg-white/30" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="h-3 w-3 rounded-full bg-white/30" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>

            <button
                type="button"
                class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                data-carousel-prev
            >
                <span class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/15 text-white shadow-xl backdrop-blur-md transition-all duration-200 group-hover:bg-white/30">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m15 19-7-7 7-7" />
                    </svg>
                </span>
            </button>

            <button
                type="button"
                class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                data-carousel-next
            >
                <span class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/15 text-white shadow-xl backdrop-blur-md transition-all duration-200 group-hover:bg-white/30">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m9 5 7 7-7 7" />
                    </svg>
                </span>
            </button>
        </div>
    </section>

    {{-- =========================================================
        À PROPOS
    ========================================================== --}}
    <section id="apropos" class="relative overflow-hidden bg-white py-20 dark:bg-primary lg:py-28">

    {{-- Éléments décoratifs de fond --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 h-[500px] w-[500px] rounded-full bg-primary-100/40 blur-[120px] dark:bg-primary-500/10"></div>
        <div class="absolute -bottom-40 -left-40 h-[400px] w-[400px] rounded-full bg-secondary-100/50 blur-[100px] dark:bg-secondary-500/5"></div>
        <div class="absolute inset-0 opacity-[0.02] dark:opacity-[0.03]"
             style="background-image: radial-gradient(circle, currentColor 1px, transparent 1px); background-size: 32px 32px;">
        </div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- ============================================
                COLONNE VISUEL (5/12)
                ============================================ --}}
            <div class="relative order-2 lg:order-1 lg:col-span-5">

                <div class="absolute -left-4 -top-4 h-full w-full rounded-[2rem] border-2 border-dashed border-primary-500/30 dark:border-primary-500/40"></div>

                <div class="relative">

                    <div class="relative overflow-hidden rounded-[2rem] shadow-2xl shadow-slate-900/10 dark:shadow-primary-900/20">
                        <img src="https://picsum.photos/800/900?random=5"
                             alt="Aïcha Koné, fondatrice de l'ONG"
                             class="h-[500px] w-full object-cover lg:h-[580px]">

                        <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-slate-900/70 to-transparent"></div>

                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs font-medium uppercase tracking-widest text-white/70">Fondatrice & Directrice</p>
                            <p class="mt-1 font-display text-2xl text-white italic">Aïcha Koné</p>
                        </div>
                    </div>

                    {{-- Badge flottant : Ancienneté --}}
                    <div class="absolute -right-6 top-8 flex flex-col items-center rounded-2xl bg-blue p-5 shadow-2xl shadow-slate-900/10  dark:shadow-primary-900/30">
                        <span class="bg-gradient-to-br from-primary-500 to-primary-700 bg-clip-text text-4xl font-black text-primary">
                            10+
                        </span>
                        <span class="mt-1 text-[10px] font-semibold uppercase tracking-wider text-slate-500 dark:text-primary">
                            Années
                        </span>
                        <div class="mt-1 h-px w-8 bg-primary-500"></div>
                        <span class="mt-1 text-[10px] font-semibold uppercase tracking-wider text-slate-500 dark:text-primary">
                            d'engagement
                        </span>
                    </div>

                    {{-- Badge flottant : Avis --}}
                    <div class="absolute -bottom-6 -left-6 flex items-center gap-3 rounded-2xl bg-white p-4 pr-5 shadow-2xl shadow-slate-900/10 dark:bg-slate-900 dark:shadow-primary-900/30">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-yellow-400 to-yellow-600">
                            <i class="fa-solid fa-star text-lg text-white"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-0.5 text-yellow-500">
                                <i class="fa-solid fa-star text-[10px]"></i>
                                <i class="fa-solid fa-star text-[10px]"></i>
                                <i class="fa-solid fa-star text-[10px]"></i>
                                <i class="fa-solid fa-star text-[10px]"></i>
                                <i class="fa-solid fa-star text-[10px]"></i>
                            </div>
                            <p class="mt-0.5 text-sm font-bold text-slate-900 dark:text-white">4.9/5 · 120 avis partenaires</p>
                        </div>
                    </div>

                    {{-- Point décoratif --}}
                    <div class="absolute -left-3 top-1/2 h-6 w-6 rounded-full bg-yellow-500 shadow-lg shadow-yellow-500/50"></div>
                </div>
            </div>

            {{-- ============================================
                COLONNE CONTENU (7/12)
                ============================================ --}}
            <div class="order-1 lg:order-2 lg:col-span-7">

                <div class="mb-6 inline-flex items-center gap-3">
                    <span class="flex items-center gap-2 rounded-full border border-accent bg-primary-50 px-4 py-1.5 dark:border-primary-500/30 dark:bg-primary-900/20">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary-500 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-primary-500"></span>
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wider text-accent ">
                            À propos de nous
                        </span>
                    </span>
                </div>

                <h2 class="mb-6 text-4xl font-bold leading-[1.1] text-slate-900 dark:text-white sm:text-5xl lg:text-[3.25rem]">
                    Agir pour la
                    <span class="relative inline-block">
                        <span class="relative z-10 text-primary-600 dark:text-primary-400">santé</span>
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
                            <path d="M2 9C50 3 100 3 198 9" stroke="currentColor" class="text-yellow-500" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </span>
                    et le social
                    <br>
                    au service de la <span class="italic text-slate-700 dark:text-slate-300">planète</span>
                </h2>

                <p class="mb-8 max-w-[58ch] text-base leading-relaxed text-slate-600 dark:text-slate-300 sm:text-lg">
                    Notre organisation œuvre chaque jour aux côtés des communautés pour bâtir un avenir
                    <span class="font-semibold text-slate-900 dark:text-white">durable, équitable et résilient</span>.
                    Notre mission&nbsp;: transformer des idées de terrain en actions concrètes en santé,
                    solidarité sociale et protection de l'environnement.
                </p>

                {{-- ============================================
                    Piliers
                    ============================================ --}}
                <div class="mb-10 grid grid-cols-1 gap-4 sm:grid-cols-3">

                    {{-- Pilier 1 : Environnement --}}
                    <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 transition-all duration-300 hover:-translate-y-1 hover:border-yellow-500/50 hover:shadow-xl hover:shadow-yellow-500/10 dark:border-slate-800 dark:bg-slate-900/50 dark:hover:border-yellow-500/50">
                        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>

                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-yellow-600  transition-all duration-300 group-hover:scale-110 group-hover:bg-yellow-500 group-hover:text-slate-900">
                            <i class="fa-solid fa-leaf text-lg"></i>
                        </div>

                        <h3 class="text-sm font-bold text-slate-900 dark:text-white">
                            Environnement
                        </h3>
                        <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">
                            Planète & climat
                        </p>
                    </div>

                    {{-- Pilier 2 : Santé --}}
                    <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 transition-all duration-300 hover:-translate-y-1 hover:border-yellow-500/50 hover:shadow-xl hover:shadow-yellow-500/10 dark:border-slate-800 dark:bg-slate-900/50 dark:hover:border-yellow-500/50">
                        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>

                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-yellow-600  transition-all duration-300 group-hover:scale-110 group-hover:bg-yellow-500 group-hover:text-slate-900">
                            <i class="fa-solid fa-heart-pulse text-lg"></i>
                        </div>

                        <h3 class="text-sm font-bold text-slate-900 dark:text-white">
                            Santé
                        </h3>
                        <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">
                            Bien-être & prévention
                        </p>
                    </div>

                    {{-- Pilier 3 : Social --}}
                    <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 transition-all duration-300 hover:-translate-y-1 hover:border-yellow-500/50 hover:shadow-xl hover:shadow-yellow-500/10 dark:border-slate-800 dark:bg-slate-900/50 dark:hover:border-yellow-500/50">
                        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>

                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-yellow-600  transition-all duration-300 group-hover:scale-110 group-hover:bg-yellow-500 group-hover:text-slate-900">
                            <i class="fa-solid fa-people-group text-lg"></i>
                        </div>

                        <h3 class="text-sm font-bold text-slate-900 dark:text-white">
                            Social
                        </h3>
                        <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">
                            Communautés & solidarité
                        </p>
                    </div>
                </div>

                {{-- ============================================
                    Stats
                    ============================================ --}}
                <div class="mb-10 flex items-center gap-6 border-y border-slate-200 py-6 dark:border-slate-800">

                    <div class="flex-1">
                        <p class="text-2xl font-black text-slate-900 dark:text-white sm:text-3xl">
                            25<span class="text-primary-500">+</span>
                        </p>
                        <p class="mt-0.5 text-xs text-slate-500 dark:text-slate-400">Projets réalisés</p>
                    </div>

                    <div class="h-12 w-px bg-slate-200 dark:bg-slate-700"></div>

                    <div class="flex-1">
                        <p class="text-2xl font-black text-slate-900 dark:text-white sm:text-3xl">
                            50K<span class="text-secondary-500">+</span>
                        </p>
                        <p class="mt-0.5 text-xs text-slate-500 dark:text-slate-400">Bénéficiaires accompagnés</p>
                    </div>

                    <div class="h-12 w-px bg-slate-200 dark:bg-slate-700"></div>

                    <div class="flex-1">
                        <p class="text-2xl font-black text-slate-900 dark:text-white sm:text-3xl">
                            98<span class="text-yellow-500">%</span>
                        </p>
                        <p class="mt-0.5 text-xs text-slate-500 dark:text-slate-400">Taux de transparence</p>
                    </div>
                </div>

                {{-- ============================================
                    CTAs
                    ============================================ --}}
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="#projets" class="group inline-flex items-center justify-center gap-2 rounded-full bg-yellow-500 px-7 py-3.5 text-sm font-semibold text-primary shadow-lg shadow-primary-600/20 transition-all hover:-translate-y-0.5 hover:bg-yellow-500 hover:shadow-xl hover:shadow-yellow-600/40">
                        Découvrir nos actions
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    <a href="#don" class="group inline-flex items-center justify-center gap-2 rounded-full border-2 bg-white px-7 py-3.5 text-sm font-semibold text-slate-900 transition-all hover:-translate-y-0.5 hover:border-primary-500 hover:text-primary-600 dark:border-slate-700">
                        <i class="fa-solid fa-hand-holding-heart text-xs"></i>
                        Faire un don
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- =========================================================
        ACTUALITÉS
    ========================================================== --}}
    <section id="actualites" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto mb-16 max-w-3xl text-center">
                <span class="inline-flex rounded-full bg-primary-200 px-5 py-2 text-sm font-semibold text-primary-600">
                    Nos Actualités
                </span>

                <h2 class="mt-6 text-4xl font-extrabold text-slate-900 md:text-5xl">
                    Restez informé de nos
                    <span class="text-primary-600">actions</span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    Découvrez les dernières initiatives de notre organisation dans les domaines
                    de l'environnement, de la santé et du développement social.
                </p>
            </div>

            {{-- Actualité principale --}}
            <article class="group mb-10 overflow-hidden rounded-[30px] bg-white shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl md:flex md:min-h-[500px]">
                <div class="relative overflow-hidden md:w-[40%]">
                    <img
                        src="{{ asset('image/boom.jpg') }}"
                        alt="Actualité"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >
                </div>

                <div class="flex flex-col p-8 md:w-[60%] md:p-12">
                    <span class="mb-6 inline-flex w-fit rounded-full bg-primary-100 px-5 py-2 text-sm font-semibold text-primary-700">
                        À la une
                    </span>

                    <h2 class="text-4xl font-extrabold leading-tight text-primary">
                        Grande campagne nationale de reboisement
                    </h2>

                    <p class="mt-8 text-xl leading-10 text-slate-600">
                        Plus de 15 000 arbres ont été plantés avec la participation des communautés locales afin de préserver la biodiversité.
                    </p>

                    <div class="mt-auto pt-10">
                        <a href="#" class="inline-flex rounded-2xl bg-primary-500 px-8 py-4 text-lg font-semibold text-white hover:bg-primary-400">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </article>

            {{-- Cartes actualités --}}
            <div class="grid gap-10 md:grid-cols-2 xl:grid-cols-3">
                <article class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-500 hover:-translate-y-3 hover:shadow-2xl">
                    <img src="{{ asset('image/boom1.jpg') }}" class="h-64 w-full object-cover transition duration-700 group-hover:scale-110" alt="Environnement">

                    <div class="p-8">
                        <span class="rounded-full bg-green-100 px-4 py-1 text-sm font-semibold text-green-700">
                            Environnement
                        </span>

                        <p class="mt-4 text-sm text-slate-500">12 Juin 2026</p>

                        <h3 class="mt-4 text-2xl font-bold text-slate-900">
                            Grande campagne nationale de reboisement
                        </h3>

                        <p class="mt-4 leading-7 text-slate-600">
                            Plus de 15 000 arbres ont été plantés avec la participation des communautés locales.
                        </p>

                        <a href="#" class="mt-8 inline-flex items-center font-semibold text-emerald-600">
                            Lire l'article
                        </a>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-500 hover:-translate-y-3 hover:shadow-2xl">
                    <img src="{{ asset('image/boom2.jpg') }}" class="h-64 w-full object-cover transition duration-700 group-hover:scale-110" alt="Santé">

                    <div class="p-8">
                        <span class="rounded-full bg-red-100 px-4 py-1 text-sm font-semibold text-red-600">
                            Santé
                        </span>

                        <p class="mt-4 text-sm text-slate-500">02 Juillet 2026</p>

                        <h3 class="mt-4 text-2xl font-bold text-slate-900">
                            Campagne de dépistage gratuite
                        </h3>

                        <p class="mt-4 leading-7 text-slate-600">
                            Plus de 2 500 personnes ont bénéficié gratuitement d'un dépistage.
                        </p>

                        <a href="#" class="mt-8 inline-flex items-center font-semibold text-red-600">
                            Lire l'article
                        </a>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-500 hover:-translate-y-3 hover:shadow-2xl">
                    <img src="{{ asset('image/boom3.jpg') }}" class="h-64 w-full object-cover transition duration-700 group-hover:scale-110" alt="Social">

                    <div class="p-8">
                        <span class="rounded-full bg-blue-100 px-4 py-1 text-sm font-semibold text-blue-700">
                            Social
                        </span>

                        <p class="mt-4 text-sm text-slate-500">19 Juillet 2026</p>

                        <h3 class="mt-4 text-2xl font-bold text-slate-900">
                            Formation des jeunes entrepreneurs
                        </h3>

                        <p class="mt-4 leading-7 text-slate-600">
                            Notre programme accompagne les jeunes dans la création d'activités génératrices de revenus.
                        </p>

                        <a href="#" class="mt-8 inline-flex items-center font-semibold text-blue-600">
                            Lire l'article
                        </a>
                    </div>
                </article>
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('actuality') }}" class="inline-flex rounded-full bg-primary-600 px-8 py-4 font-semibold text-white shadow-lg transition hover:bg-primary-700">
                    Voir toutes les actualités
                </a>
            </div>
    
        </div>
    </section>

    {{-- =========================================================
        ACTIVITÉS
    ========================================================== --}}
    <section id="activites" class="bg-surface py-20 sm:py-24 lg:py-28">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">

            <div class="mx-auto max-w-3xl text-center">
                <span class="block text-sm font-extrabold uppercase tracking-[0.22em] text-secondary">
                    Notre engagement
                </span>

                <span class="mt-4 inline-flex rounded-full bg-primary-200 px-5 py-2 text-sm font-semibold text-primary-600">
                    Nos Activités
                </span>

                <p class="mx-auto mt-5 max-w-2xl text-sm font-medium leading-7 text-primary-700 sm:text-base">
                    Au cœur de notre engagement, les actions concrètes qui transforment des vies.
                </p>

                <p class="mx-auto mt-3 max-w-2xl text-sm font-semibold leading-7 text-secondary sm:text-base">
                    Chaque activité renforce les capacités des femmes et des jeunes filles.
                </p>
            </div>

            <div class="mt-16 grid items-stretch gap-8 lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1fr)]">

                {{-- Activité principale --}}
                <article class="overflow-hidden rounded-3xl border border-primary-100 bg-surface shadow-xl">
                    <div class="relative h-80 overflow-hidden sm:h-96 lg:h-[400px]">
                        <img
                            src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=1600&q=85"
                            alt="Plantation d'arbres"
                            class="h-full w-full object-cover transition duration-700 hover:scale-105"
                        >

                        <div class="absolute left-6 top-6 flex items-center gap-2 rounded-xl bg-surface/90 px-4 py-2 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <path d="M16 2v4M8 2v4M3 10h18" />
                            </svg>

                            <span class="font-bold text-primary">05 Juin 2026</span>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8">
                        <div class="flex items-center gap-2 text-primary-600">
                            <span class="text-lg">📍</span>
                            <span class="font-semibold">Université d'Abomey-Calavi</span>
                        </div>

                        <h2 class="mt-4 text-2xl font-extrabold text-primary sm:text-3xl">
                            Planter un arbre, c'est poser un acte de leadership
                        </h2>

                        <p class="mt-4 text-primary-700">
                            À l'occasion de la Journée de l'Arbre, l'ONG Rescue The World a réuni des femmes engagées et des hommes convaincus qu'un avenir durable se construit par des actions concrètes.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="rounded-full bg-secondary-100 px-3 py-1 text-xs font-bold text-secondary">
                                Action communautaire
                            </span>

                            <span class="rounded-full bg-primary-100 px-3 py-1 text-xs font-bold text-primary-700">
                                Autonomisation
                            </span>

                            <span class="rounded-full bg-accent-100 px-3 py-1 text-xs font-bold text-accent">
                                Leadership féminin
                            </span>
                        </div>

                        <a href="#" class="mt-6 inline-flex items-center gap-2 rounded-full bg-primary px-8 py-4 font-bold text-white shadow-lg transition hover:bg-primary-700">
                            Voir les détails
                        </a>
                    </div>
                </article>

                {{-- Activités récentes --}}
                <aside class="flex flex-col rounded-3xl border border-primary-100 bg-surface p-6 shadow-xl sm:p-8">
                    <div class="mb-6 flex items-center justify-between border-b border-primary-200 pb-4">
                        <h3 class="text-xl font-extrabold text-primary">
                            Autres activités récentes
                        </h3>

                        <span class="h-3 w-3 rounded-full bg-accent"></span>
                    </div>

                    <div class="flex flex-1 flex-col gap-4">
                        <a href="#" class="group flex gap-4 rounded-2xl border border-primary-100 p-4 transition hover:border-secondary-300 hover:shadow-md">
                            <img
                                src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?auto=format&fit=crop&w=300&q=80"
                                alt="Formation"
                                class="h-24 w-24 shrink-0 rounded-xl object-cover"
                            >

                            <div class="min-w-0 flex-1">
                                <h4 class="font-extrabold text-primary group-hover:text-secondary">
                                    Former, inspirer, transformer : quand l'éducation devient une force
                                </h4>

                                <p class="mt-2 text-sm text-primary-600">
                                    📍 Parakou
                                </p>

                                <p class="mt-1 line-clamp-2 text-sm text-primary-600">
                                    Dans une dynamique de promotion du leadership féminin.
                                </p>
                            </div>

                            <span class="shrink-0 text-center text-xs font-bold text-secondary">
                                25<br>Mar<br>2026
                            </span>
                        </a>

                        <a href="#" class="group flex gap-4 rounded-2xl border border-primary-100 p-4 transition hover:border-secondary-300 hover:shadow-md">
                            <img
                                src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=300&q=80"
                                alt="Sensibilisation"
                                class="h-24 w-24 shrink-0 rounded-xl object-cover"
                            >

                            <div class="min-w-0 flex-1">
                                <h4 class="font-extrabold text-primary group-hover:text-secondary">
                                    Promouvoir les droits des femmes, un engagement collectif
                                </h4>

                                <p class="mt-2 text-sm text-primary-600">
                                    🌐 En ligne
                                </p>

                                <p class="mt-1 line-clamp-2 text-sm text-primary-600">
                                    Une journée de sensibilisation et de partage.
                                </p>
                            </div>

                            <span class="shrink-0 text-center text-xs font-bold text-secondary">
                                11<br>Mar<br>2026
                            </span>
                        </a>

                        <a href="#" class="group flex gap-4 rounded-2xl border border-primary-100 p-4 transition hover:border-secondary-300 hover:shadow-md">
                            <img
                                src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=300&q=80"
                                alt="Atelier"
                                class="h-24 w-24 shrink-0 rounded-xl object-cover"
                            >

                            <div class="min-w-0 flex-1">
                                <h4 class="font-extrabold text-primary group-hover:text-secondary">
                                    Des sourires, de la joie et de l'espoir : retour sur notre atelier
                                </h4>

                                <p class="mt-2 text-sm text-primary-600">
                                    📍 Dangbo
                                </p>

                                <p class="mt-1 line-clamp-2 text-sm text-primary-600">
                                    Compétences, écoute et accompagnement.
                                </p>
                            </div>

                            <span class="shrink-0 text-center text-xs font-bold text-secondary">
                                10<br>Jan<br>2026
                            </span>
                        </a>
                    </div>

                    <a href="{{ route('activity') }}" class="mt-6 inline-flex w-full items-center justify-center rounded-2xl border border-secondary px-4 py-3 font-bold text-secondary transition hover:bg-secondary hover:text-white">
                        Voir toutes les activités
                    </a>
                </aside>
            </div>
        </div>
    </section>

    {{-- =========================================================
        PARTENAIRES
    ========================================================== --}}
    <section id="partenaires" class="relative overflow-hidden bg-surface py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">

            <div class="mx-auto max-w-3xl text-center">
                <span class="block text-sm font-extrabold uppercase tracking-[0.22em] text-secondary">
                    Ils nous accompagnent
                </span>

                <h2 class="mx-auto mt-4 block w-fit rounded-full bg-primary-200 px-5 py-2 text-sm font-semibold text-primary-600">
                   Les partenaires
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-sm font-medium leading-7 text-primary-700 sm:text-base">
                    Grâce à la confiance de nos partenaires, nous renforçons nos actions en faveur
                    de la santé, de l’environnement et de l’éducation.
                </p>
            </div>

            <div class="relative mt-12 overflow-hidden">
                <div class="pointer-events-none absolute inset-y-0 left-0 z-10 w-20 bg-gradient-to-r from-surface to-transparent sm:w-32"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 z-10 w-20 bg-gradient-to-l from-surface to-transparent sm:w-32"></div>

                <div class="flex w-max animate-[partners-scroll_32s_linear_infinite] hover:[animation-play-state:paused]">
                    <div class="flex items-center gap-5 pr-5 sm:gap-7 sm:pr-7 lg:gap-8 lg:pr-8">
                        @foreach ([
                            ['Partenaire Santé', '0f766e'],
                            ['Fondation Espoir', '2563eb'],
                            ['Green Future', '16a34a'],
                            ['Jeunesse Active', 'ea580c'],
                            ['Impact Social', '9333ea'],
                            ['Education Plus', '0891b2'],
                        ] as $partner)
                            <div class="group flex h-28 w-48 shrink-0 items-center justify-center rounded-2xl border border-primary-100 bg-white px-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg sm:h-32 sm:w-56">
                                <img
                                    src="https://dummyimage.com/280x100/ffffff/{{ $partner[1] }}.png&text={{ urlencode($partner[0]) }}"
                                    alt="{{ $partner[0] }}"
                                    class="max-h-16 w-auto object-contain grayscale opacity-70 transition group-hover:grayscale-0 group-hover:opacity-100"
                                >
                            </div>
                        @endforeach
                    </div>

                    <div aria-hidden="true" class="flex items-center gap-5 pr-5 sm:gap-7 sm:pr-7 lg:gap-8 lg:pr-8">
                        @foreach ([
                            ['Partenaire Santé', '0f766e'],
                            ['Fondation Espoir', '2563eb'],
                            ['Green Future', '16a34a'],
                            ['Jeunesse Active', 'ea580c'],
                            ['Impact Social', '9333ea'],
                            ['Education Plus', '0891b2'],
                        ] as $partner)
                            <div class="flex h-28 w-48 shrink-0 items-center justify-center rounded-2xl border border-primary-100 bg-white px-6 shadow-sm sm:h-32 sm:w-56">
                                <img
                                    src="https://dummyimage.com/280x100/ffffff/{{ $partner[1] }}.png&text={{ urlencode($partner[0]) }}"
                                    alt=""
                                    class="max-h-16 w-auto object-contain grayscale opacity-70"
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes partners-scroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .animate-\[partners-scroll_32s_linear_infinite\] {
                    animation: none;
                }
            }
        </style>
    </section>
</div>