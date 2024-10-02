//menu
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Ajusta este valor si es necesario
            document.querySelector('.navbar').classList.add('header-scroll');
        } else {
            document.querySelector('.navbar').classList.remove('header-scroll');
        }
    });
});


// btn menu header
let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu');
let navbar = document.querySelector('.navbar');
let btnadmin = document.getElementById('btn-admin');

btnMenu.addEventListener('click', function() {
    menu.classList.toggle('active');
    btnMenu.classList.toggle('active');
    navbar.classList.toggle('active');
    btnadmin.classList.toggle('active');
});

// next.addEventListener('click', () => {
//     let slides = document.querySelectorAll(".slides");
//     let firstSlide = slides[0].cloneNode(true);
//     slider.appendChild(firstSlide);
//     slides[0].remove();
// });

// prev.addEventListener('click', () => {
//     let slides = document.querySelectorAll(".slides");
//     let lastSlide = slides[slides.length - 1].cloneNode(true);
//     slider.prepend(lastSlide);
//     slides[slides.length - 1].remove();
// });

//habitacion
const multipleItemCarousel = document.querySelector('#carouselExample')

if(window.matchMedia('(min-width: 576px)').matches){
    const carousel = new bootstrap.Carousel(multipleItemCarousel, {
        interval: false,
        touch: false
    })
    var carouselWidth = $('.carousel-inner')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width();

    var scrollPosition = 0;

    $('.carousel-control-next').on('click', function() {
        if (scrollPosition  < (carouselWidth - (cardWidth * 4))) {
            console.log('next');
            console.log(scrollPosition);
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 600);
        }

    });
    $('.carousel-control-prev').on('click', function() {
        if (scrollPosition  > 0) {
            console.log('next');
            scrollPosition -= cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 600);
        }

    });
}
$(document).ready(function() {
    function adjustCarousel() {
        if ($(window).width() > 576) {
            $('#carouselExample').removeClass('slide');
        } else {
            $('#carouselExample').addClass('slide');
        }
    }

    // Ejecutar al cargar
    adjustCarousel();

    // Ejecutar al cambiar el tamaño de la ventana
    $(window).resize(adjustCarousel);
});

//ultimo POST
let next = document.querySelector(".next1");
let prev = document.querySelector(".prev1");
let slider = document.querySelector(".slider1");


next.addEventListener('click', () => {
    let slides = document.querySelectorAll(".slides");
    slider.appendChild(slides[0]);
});

prev.addEventListener('click', () => {
    let slides = document.querySelectorAll(".slides");
    slider.prepend(slides[slides.length - 1]);
});


//paquetes especiles
const multipleItemCarouselpackage = document.querySelector('#carouselPackage')

if(window.matchMedia('(min-width: 576px)').matches){
    const carousel = new bootstrap.Carousel(multipleItemCarouselpackage, {
        interval: false,
        touch: false
    })
    var carouselWidth = $('.carousel-inner1')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width();

    var scrollPosition = 0;

    $('.carousel-control-next1').on('click', function() {
        if (scrollPosition  < (carouselWidth - (cardWidth * 4))) {
            console.log('next');
            console.log(scrollPosition);
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner1').animate({scrollLeft: scrollPosition}, 600);
        }

    });
    $('.carousel-control-prev1').on('click', function() {
        if (scrollPosition  > 0) {
            console.log('next');
            scrollPosition -= cardWidth;
            $('.carousel-inner1').animate({scrollLeft: scrollPosition}, 600);
        }

    });
}
$(document).ready(function() {
    function adjustCarousel() {
        if ($(window).width() > 576) {
            $('#carouselPackage').removeClass('slide');
        } else {
            $('#carouselPackage').addClass('slide');
        }
    }

    // Ejecutar al cargar
    adjustCarousel();

    // Ejecutar al cambiar el tamaño de la ventana
    $(window).resize(adjustCarousel);
});





