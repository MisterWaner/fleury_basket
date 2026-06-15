<button
    id="menu-trigger"
    type="button"
    class="inline-flex items-center justify-center rounded-md h-10 w-10 text-slate-950 bg-white border border-slate-200 shadow-sm hover:bg-slate-100 transition-colors cursor-pointer"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="h-6 w-6"
    >
        <line x1="4" x2="20" y1="12" y2="12"></line>
        <line x1="4" x2="20" y1="6" y2="6"></line>
        <line x1="4" x2="20" y1="18" y2="18"></line>
    </svg>
</button>

<div
    id="full-menu"
    class="fixed top-0 left-0 w-screen h-screen min-h-screen z-99999 bg-slate-950/95 backdrop-blur-md text-slate-50 p-6 flex flex-col justify-between font-monserrat transition-transform duration-300 ease-in-out -translate-x-full"
>
    <div
        class="flex items-center justify-between border-b border-slate-800 pb-4"
    >
        <div class="text-xl font-bold tracking-tight text-fleury-pink">
            <img
                src="/assets/images/fleury-basket.png"
                alt="Fleury Basket Logo"
                class="w-10 h-10 md:w-16 md:h-16 object-contain inline-block mr-2"
            />
            Fleury Basket
        </div>
        <button
            id="menu-close"
            class="h-10 w-10 flex items-center justify-center rounded-md border border-slate-800 bg-slate-900 hover:bg-slate-850 cursor-pointer text-slate-400 hover:text-slate-100"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6"
            >
                <line x1="18" x2="6" y1="6" y2="18"></line>
                <line x1="6" x2="18" y1="6" y2="18"></line>
            </svg>
        </button>
    </div>

    <nav class="flex flex-col my-auto gap-6 text-center">
        <a
            href="/"
            class="text-3xl font-extrabold uppercase tracking-wide hover:text-orange-500 transition-colors"
            >Accueil</a
        >
        <a
            href="/actualites"
            class="text-3xl font-extrabold uppercase tracking-wide hover:text-orange-500 transition-colors"
            >Actualités</a
        >
        <a
            href="/equipes"
            class="text-3xl font-extrabold uppercase tracking-wide hover:text-orange-500 transition-colors"
            >Équipes</a
        >

        <div class="w-16 h-0.5 bg-slate-800 mx-auto my-4"></div>

        <div class="flex flex-col gap-3 text-xl text-slate-400">
            <a href="/club/a-propos" class="hover:text-slate-100">À propos</a>
            <a href="/club/organigramme" class="hover:text-slate-100"
                >Organigramme</a
            >
            <a href="/club/partenaires" class="hover:text-slate-100"
                >Partenaires</a
            >
            <div class="w-8 h-px bg-slate-900 mx-auto my-1"></div>
            <a href="/contact" class="hover:text-slate-100">Contact</a>
            <a href="/inscription" class="hover:text-slate-100">Inscription</a>
            <a href="/faq" class="hover:text-slate-100">FAQ</a>
        </div>
    </nav>

    <div
        class="text-center text-xs text-slate-600 border-t border-slate-900 pt-4"
    >
        © 2026 Fleury Basket. Tous droits réservés.
    </div>
</div>
