document.addEventListener("DOMContentLoaded", function () {
  const mobileMenu = document.getElementById("mobile-menu");
  const navLinks = document.querySelector(".nav-links");

  mobileMenu.addEventListener("click", function () {
    navLinks.style.display =
      navLinks.style.display === "flex" ? "none" : "flex";
  });

  window.addEventListener("scroll", function () {
    const header = document.getElementById("main-header");
    if (window.scrollY > 50) {
      header.style.boxShadow = "0px 4px 10px rgba(0, 0, 0, 0.2)";
    } else {
      header.style.boxShadow = "0px 4px 6px rgba(0, 0, 0, 0.1)";
    }
  });
});
