<section class="w-full mt-10">
    <h2 class="heading-2">
        Nos <span class="uppercase font-extrabold">Principes</span>
    </h2>

    <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-8">
        <article class="p-6">
            <div class="flex justify-center mb-4">
                <?php $icon = 'game-icons:basketball-basket'; include SRC_PATH .
                '/Views/partials/icon-wrapper.php'; ?>
            </div>
            <h3 class="text-2xl font-bold text-center text-slate-950">
                Découverte
            </h3>
            <p class="mt-4 text-sm text-center text-slate-600">
                Venez découvrir le basket, que ce soit en compétition ou en
                loisir, vous pouvez tester jusqu'à 3 séances offertes jusqu'au
                31 Octobre de l'année en cours.
            </p>
        </article>

        <article class="p-6">
            <div class="flex justify-center mb-4">
                <?php $icon = 'ph:strategy'; include SRC_PATH .
                '/Views/partials/icon-wrapper.php'; ?>
            </div>
            <h3 class="text-2xl font-bold text-center text-slate-950">
                Valeurs
            </h3>
            <div class="mt-4 text-sm text-center text-slate-600">
                Les valeurs que véhiculent notre club sont :
                <ul class="list-disc list-inside mt-2 space-y-1">
                    <li>Le respect de chacun</li>
                    <li>L'engagement</li>
                    <li>Le partage</li>
                </ul>
            </div>
        </article>

        <article class="p-6">
            <div class="flex justify-center mb-4">
                <?php $icon = 'game-icons:basketball-jersey'; include SRC_PATH .
                '/Views/partials/icon-wrapper.php'; ?>
            </div>
            <h3 class="text-2xl font-bold text-center text-slate-950">
                Bénévolat
            </h3>
            <p class="mt-4 text-sm text-center text-slate-600">
                Les principaux acteurs du club sont bénévoles actifs :
                dirigeants, coachs, arbitres et OTMs.
            </p>
        </article>
    </div>
</section>
