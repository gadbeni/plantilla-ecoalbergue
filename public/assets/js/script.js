document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Ajusta este valor si es necesario
            document.querySelector('.navbar').classList.add('header-scroll');
        } else {
            document.querySelector('.navbar').classList.remove('header-scroll');
        }
    });
});

let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu');
let navbar = document.querySelector('.navbar');

btnMenu.addEventListener('click', function() {
    menu.classList.toggle('active');
    btnMenu.classList.toggle('active');
    navbar.classList.toggle('active');
});