const navbar = document.querySelector(".navbar");
const navbarBrand = document.querySelector(".navbar-brand img");
const mediaQuery = window.matchMedia("(max-width: 550px)");
window.onscroll = () => {
  if (window.scrollY > navbar.offsetTop) {
    navbar.classList.add("bg-dark");
    navbar.classList.remove("pt-4");
    navbarBrand.src = "assets/img/logo.png"; //second logo
    bigMenu.style.bottom = "10px";
  } else if (mediaQuery.matches) {
    // Then trigger an alert
    navbar.classList.add("bg-dark");
  } else {
    bigMenu.style.bottom = "0";
    navbar.classList.remove("bg-dark");
    navbar.classList.add("pt-4");
    navbarBrand.src = "assets/img/logo.png";

  }
};

// Check if the media query is true
if (mediaQuery.matches) {
  // Then trigger an alert
  navbar.classList.add("bg-dark");
  navbar.classList.add("navbar-dark");
  navbarBrand.src = "assets/img/logo.png";
  navbarBrand.src = "assets/img/logo.png";
}

// banner

const dropdown = document.querySelector("#dropdown");
const bigMenu = document.querySelector(".big-menu");



navbarBrand.addEventListener("mouseenter", () => {
  bigMenu.classList.add("d-none");
});

// const isian = document.querySelectorall(".big-menu h4");

// window.addEventListener("mouseleave", (e) => {
// let kotak;
// isiBigMenu.forEach((item) => {
//   kotak = item;
//   return kotak;
// });

//   if (e.target != bigMenu) {
//     bigMenu.classList.add("d-none");
//   }
//   if (e.target != bigMenu2) {
//     bigMenu2.classList.add("d-none");
//   }
//   if (e.target != bigMenu3) {
//     bigMenu3.classList.add("d-none");
//   }
// });

var slide = document.querySelectorAll(".slide");
let currentSlide = 0;
const gobsayi = document.querySelectorAll(".gobsayi div");
let sekarang = 0;


