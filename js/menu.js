var menu = document.querySelector('.menu-bar');
var menuBtn = document.querySelector('.menu-button');
var closeBtn = document.querySelector('.menu-close-button');

menuBtn.addEventListener("click", () => {
    menu.classList.add('active');
});

closeBtn.addEventListener("click", () => {
    menu.classList.remove('active');
});