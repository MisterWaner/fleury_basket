<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="/assets/css/style.css" />
    </head>
    <body
        class="antialiased bg-fleury-pink/75 text-slate-950 min-h-screen flex flex-col"
    >
        <header
            class="w-full border-b bg-slate-950 backdrop-blur-md text-slate-50 sticky top-0 z-50 shadow-md"
        >
            <div class="grid grid-cols-6 items-center px-4 py-3">
                <div class="col-span-4 md:col-span-2 flex items-center gap-2">
                    <img
                        src="/assets/images/fleury-basket.png"
                        alt="Fleury Basket Logo"
                        class="w-12 h-12 md:w-20 md:h-20 object-contain"
                    />
                    <a
                        class="text-xl md:text-2xl lg:text-4xl font-bold"
                        href="/"
                        >Fleury Basket</a
                    >
                </div>
                <div class="col-end-7 justify-self-end">
                    <?php include SRC_PATH . '/Views/partials/menu.php'; ?>
                </div>
            </div>
        </header>

        <main class="flex flex-col flex-1">
    </body>
</html>
