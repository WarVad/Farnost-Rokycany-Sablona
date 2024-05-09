"use strict";

var hamburger = document.querySelector(".hamburger"); // Najde prvek hamburger menu v dokumentu.

var nav = document.querySelector("nav"); // Najde navigační prvek v dokumentu.

var state = false; // Nastaví počáteční stav menu na zavřené. Kontrolní proměnná

hamburger.addEventListener("click", function () {
  // Přidá naslouchací událost pro kliknutí na hamburger menu.
  if (state === true) {
    // Pokud je menu otevřené,
    hamburger.classList.remove("is-active"); // Odebere třídu is-active z hamburger menu.

    nav.classList.remove("is-active"); // Odebere třídu is-active z navigace.

    state = false; // Nastaví stav na zavřené.
  } else {
    // Jinak
    hamburger.classList.add("is-active"); // Přidá třídu is-active k hamburger menu.

    nav.classList.add("is-active"); // Přidá třídu is-active k navigaci.

    state = true; // Nastaví stav na otevřené.
  }
});

const menuLinks = Array.from(document.querySelectorAll('.header .menu a')); // najde všechny položky v menu
menuLinks.find(link => link.href === window.location.href).classList.add('active'); //pokud má některá z  položek stejný link jako aktuální stránka označí jí jako aktivní