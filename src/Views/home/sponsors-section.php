<?php
$sponsors = [
    ["src" => "/assets/images/sponsors/sponsor-voltec.webp", "alt" => "Logo de Voltec"], 
    ["src" => "/assets/images/sponsors/rexellogo.jpeg", "alt" => "Logo de Rexel"], 
    ["src" => "/assets/images/sponsors/ffbb-basket.jpeg", "alt" => "Logo de la FFBB"], 
    ["src" => "/assets/images/sponsors/comite-basket-1.png", "alt" => "Logo du Comité départemental de Basket du Calvados"], 
    ["src" => "/assets/images/sponsors/logo-lpa.png", "alt" => "Logo de la petite agence immobilier"], 
    ["src" => "/assets/images/sponsors/aquila-rh.png", "alt" => "Logo d'Aquila RH"], 
    ["src" => "/assets/images/sponsors/alius-odorem.png", "alt" => "Logo d'Alius Odorem"], 
];
?>

<div class="w-full mt-10 py-10  overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 mb-8">
        <h2 class="heading-2">
            Nos <span class="uppercase font-extrabold">Partenaires</span>
        </h2>
    </div>

    <div class="relative w-full overflow-hidden before:absolute before:left-0 before:top-0 before:z-10 before:h-full before:w-20 before:bg-linear-to-r before:from-white before:to-transparent after:absolute after:right-0 after:top-0 after:z-10 after:h-full after:w-20 after:bg-linear-to-l after:from-white after:to-transparent">
        
        <div class="animate-carousel gap-16 items-center">
            
            <?php foreach ($sponsors as $sponsor): ?>
                <div class="flex items-center justify-center w-44 h-24 shrink-0 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <img 
                        src="<?php echo $sponsor['src']; ?>" 
                        alt="<?php echo htmlspecialchars($sponsor['alt']); ?>" 
                        class="max-w-full max-h-full object-contain"
                        loading="lazy"
                    >
                </div>
            <?php endforeach; ?>

            <?php foreach ($sponsors as $sponsor): ?>
                <div class="flex items-center justify-center w-44 h-24 shrink-0 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <img 
                        src="<?php echo $sponsor['src']; ?>" 
                        alt="<?php echo htmlspecialchars($sponsor['alt']); ?>" 
                        class="max-w-full max-h-full object-contain"
                        loading="lazy"
                    >
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>