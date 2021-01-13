// menu toggle
let show = true;

const menuSection = document.querySelector(".header__navbar__section");
const menuToggle = menuSection.querySelector(".header__navbar__section__toggle");
const menuItem = document.querySelectorAll(".header__navbar__section__nav ul li a");

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial";

    menuSection.classList.toggle("header__navbar--open", show);
    show = !show;
});


menuItem.forEach((item) => {
    item.addEventListener('click', () => {
        menuSection.classList.toggle('header__navbar--open');
        document.body.style.overflow = "initial";
    });
});

//menu dropdown
let showDropdown = true;

const menuNav = document.querySelector(".header__navbar__section__nav");
const menuHasChildren = menuNav.querySelectorAll(".menu-item-has-children");

menuHasChildren.forEach((item) => {
    item.addEventListener("click", () => {    
    item.classList.toggle("menu-item-has-children--active", showDropdown);
    showDropdown  = !showDropdown ;
});
});