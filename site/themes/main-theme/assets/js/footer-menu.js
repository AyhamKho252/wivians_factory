let openMenu = null; // Keep track of the currently open menu

document.addEventListener("DOMContentLoaded", function () {
  const isMobile = window.innerWidth <= 767;
  if (isMobile) {
    const firstUl = document.querySelector("ul"); // Assuming the first ul is the one you want to open initially
    const listMenu = firstUl.nextElementSibling;

    // Make the listMenu visible by default
    listMenu.style.height = "auto";
    listMenu.style.visibility = "visible";
    listMenu.style.opacity = "1";
    listMenu.style.padding = "32px 0";

    // Add "active" class to the first ul
    firstUl.classList.add("active");

    // Set openMenu to the initially open menu
    openMenu = listMenu;
  }
});

function toggleSubMenu(event) {
  const isMobile = window.innerWidth <= 767;
  const clickedUl = event.target.closest("ul");

  if (!isMobile || !clickedUl) {
    return;
  }

  const listMenu = clickedUl.nextElementSibling;

  if (window.getComputedStyle(listMenu).visibility  === 'visible') {
    openMenu = null;
    closeMenu(listMenu);
    clickedUl.classList.add("active"); 
  } else if (listMenu.style.visibility !== "visible") {
    openMenu = listMenu;
    openMenu.style.height = "auto";
    openMenu.style.visibility = "visible";
    openMenu.style.opacity = "1";
    openMenu.style.padding = "32px 0";
    clickedUl.classList.remove("active");
  }
}

function closeMenu(menu) {
  // If screen width is 767px or less, apply styles
  menu.style.height = "0";
  menu.style.visibility = "hidden";
  menu.style.opacity = "0";
  menu.style.padding = "0";
}
