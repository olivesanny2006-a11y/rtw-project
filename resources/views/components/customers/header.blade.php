<nav id="main-navbar"
     class="w-full bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-[68px]">

        {{-- Logo --}}
        <a href="#" class="flex items-center gap-2.5 shrink-0">
            <img src="{{ asset('image/logo/logo.png') }}" style="margin:10px;" width="80" height="80" alt="Logo RWT">

            <div class="leading-tight">
                <p class="font-extrabold text-4xl leading-none text-rtw">RTW</p>
                <small class="text-rtw text-[10px] font-regular tracking-wide mt-0.5">
                    Rescue The World
                </small>
            </div>
        </a>

        {{-- Menu Desktop --}}
       <div class="hidden md:flex items-center gap-2">
            <a href="{{ route('index') }}" class="nav-link-custom active-link">Accueil</a>
            <a href="{{ route('activity') }}" class="nav-link-custom">Activités</a>
            <a href="" class="nav-link-custom">À Propos</a>
            <a href="" class="nav-link-custom">Galerie</a>
            <a href="" class="nav-link-custom">Événements</a>
            <a href="" class="nav-link-custom">Contact</a>
        </div>

        {{-- Boutons + Hamburger --}}
        <div class="flex items-center gap-3">

            {{-- Bouton Desktop --}}
            <a href="#"
               class="btn-don hidden md:flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                </svg>
                Faire un don
            </a>

            {{-- Bouton Mobile --}}
            <a href="#"
               class="btn-don flex md:hidden items-center gap-1.5">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                </svg>
                Faire un don
            </a>

            {{-- Hamburger Mobile --}}
            <button
                data-collapse-toggle="mobile-menu"
                type="button"
                class="md:hidden inline-flex items-center justify-center p-2 rounded-lg text-[#024367] hover:bg-[#eaf1f7] transition"
                aria-controls="mobile-menu"
                aria-expanded="false"
            >
                <span class="sr-only">Ouvrir le menu</span>

                <svg class="w-5 h-5"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

        </div>
    </div>

    {{-- Menu Mobile --}}
    <div id="mobile-menu"
         class="hidden md:hidden border-t border-[#e5eef5] bg-white">

        <ul class="flex flex-col px-4 py-3 gap-1">
            <li><a href="" class="nav-link-custom block active-link">Accueil</a></li>
            <li><a href="" class="nav-link-custom block">Activités</a></li>
            <li><a href="" class="nav-link-custom block">À Propos</a></li>
            <li><a href="" class="nav-link-custom block">Galerie</a></li>
            <li><a href="" class="nav-link-custom block">Événements</a></li>
            <li><a href="" class="nav-link-custom block">Contact</a></li>
        </ul>

    </div>
</nav>