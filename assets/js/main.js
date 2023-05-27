
const navbarButton = document.getElementById("navbarToggler");
const navbarCollapse = document.getElementById("navbarCollapse");
let navbarOpen = false;

navbarButton.addEventListener("click", () => {
    navbarOpen = !navbarOpen;
    navbarCollapse.style.visibility = navbarOpen ? "visible" : "hidden";
    navbarCollapse.style.opacity = navbarOpen ? "1" : "0";
});

// Sticky Navbar
const header = document.getElementById("header");
const stickyOffset = 80;
let sticky = false;

const handleStickyNavbar = () => {
  if (window.scrollY >= stickyOffset) {
    console.log("Hooooooooo")
    if (!sticky) {
      console.log("XoXoXoXoXo")
      header.classList.add("fixed", "bg-white", "bg-opacity-80", "shadow-sticky", "backdrop-blur-sm");
      header.classList.remove("absolute");
      sticky = true;
    }
  } else {
    if (sticky) {
      console.log("Haaaaaaaa")
      header.classList.remove("fixed", "bg-white", "bg-opacity-80", "shadow-sticky", "backdrop-blur-sm");
      header.classList.add("absolute");
      sticky = false;
    }
  }
};

window.addEventListener("scroll", handleStickyNavbar);