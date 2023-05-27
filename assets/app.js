/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

import './js/main';


// Submenu handler
// const submenuItems = document.getElementsByClassName("submenu");

// const handleSubmenu = (index) => {
//   if (submenuItems[index].style.display === "block") {
//     submenuItems[index].style.display = "none";
//   } else {
//     submenuItems[index].style.display = "block";
//   }
// };

// const menuItems = document.getElementsByClassName("menu-item");

// Array.from(menuItems).forEach((menuItem, index) => {
//   const submenu = menuItem.querySelector(".submenu");
//   if (submenu) {
//     menuItem.addEventListener("click", () => {
//       handleSubmenu(index);
//     });
//   }
// });