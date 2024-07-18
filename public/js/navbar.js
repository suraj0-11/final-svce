window.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("navbar");
  const navLinks = document.getElementById("navLinks");
  const toggleNav = document.getElementById("toggleNav");
  const toggleIcon = toggleNav.querySelector("img");
  let isNavOpen = false;

  const toggleNavigation = () => {
    isNavOpen = !isNavOpen;
    navLinks.classList.toggle("hidden");
    navLinks.classList.toggle("show");
    toggleIcon.src = isNavOpen ? "assets/close.png" : "assets/more.png";
  };

  const handleScroll = () => {
    const scrollPosition = window.scrollY;
    const navbarHeight = navbar.offsetHeight;

    if (scrollPosition > navbarHeight) {
      navbar.classList.remove("transparent");
      navbar.classList.add("translucent");
    } else {
      navbar.classList.remove("translucent");
      navbar.classList.add("transparent");
    }
  };

  toggleNav.addEventListener("click", toggleNavigation);
  window.addEventListener("scroll", handleScroll);
});
