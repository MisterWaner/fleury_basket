// public/assets/js/menu.js

export function initMenu() {
    const trigger = document.getElementById("menu-trigger");
    const closeBtn = document.getElementById("menu-close");
    const menu = document.getElementById("full-menu");

    if (trigger && closeBtn && menu) {
        // Au clic sur le burger : on fait glisser le menu vers le centre
        trigger.addEventListener("click", () => {
            menu.classList.remove("-translate-x-full");
            menu.classList.add("translate-x-0");
            // Bloque le scroll de la page web sous le menu
            document.body.style.overflow = "hidden";
        });

        // Au clic sur la croix : on renvoie le menu vers la gauche
        closeBtn.addEventListener("click", () => {
            menu.classList.remove("translate-x-0");
            menu.classList.add("-translate-x-full");
            // Libère le scroll
            document.body.style.overflow = "";
        });
    }
}

