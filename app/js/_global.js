
// Global



// Select DOM Items
const menu_Btn = document.querySelector('.menu_btn');
const Menu = document.querySelector('.Menu');
const MenuNav = document.querySelector('.Menu-nav');
const MenuBranding = document.querySelector('.Menu-branding');
const NavItems = document.querySelectorAll('.Nav-item');
// Set Initial State Of Menu
let show_Menu = false;

menu_Btn.addEventListener('click', toggleMenu);

function toggleMenu() {
  if (!show_Menu) {
    menu_Btn.classList.add('close');
    Menu.classList.add('show');
    MenuNav.classList.add('show');
    MenuBranding.classList.add('show');
    NavItems.forEach(item => item.classList.add('show'));

    // Set Menu State
    show_Menu = true;
  } else {
    menu_Btn.classList.remove('close');
    Menu.classList.remove('show');
    MenuNav.classList.remove('show');
    MenuBranding.classList.remove('show');
    NavItems.forEach(item => item.classList.remove('show'));

    // Set Menu State
    show_Menu = false;
  }
}