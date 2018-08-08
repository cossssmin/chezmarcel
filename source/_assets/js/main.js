/**
 ** Mobile menu
 */

const menuToggle = document.getElementById('menu-toggle');
const menuOpenIcon = document.getElementById('menu-open');
const menuCloseIcon = document.getElementById('menu-close');
const menu = document.getElementById('menu');

function toggleMenu() {
  menuOpenIcon.classList.toggle('hidden');
  menuCloseIcon.classList.toggle('hidden');

  if (menu.getAttribute('aria-expanded') == 'true') {
    menu.setAttribute('aria-expanded', 'false');

    return;
  }

  return menu.setAttribute('aria-expanded', 'true');
}

if (menuToggle) menuToggle.addEventListener('click', toggleMenu, false);
