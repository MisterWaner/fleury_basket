<?php
/**
 * @var string $icon L'identifiant de l'icone Iconify
 */
?>

<div
    class="group relative flex items-center justify-center size-20 rounded-full overflow-hidden border-2 border-slate-950 bg-slate-950 text-slate-50 hover:text-slate-950 transition-colors duration-400"
>
    <span
        class="absolute inset-0 rounded-full scale-0 bg-slate-50 opacity-0 transition-transform duration-400 ease-out group-hover:scale-150 group-hover:opacity-100"
    ></span>

    <iconify-icon
        icon="<?php echo $icon; ?>"
        class="relative z-10 size-14"
        width="100%"
        height="100%"
    ></iconify-icon>
</div>
