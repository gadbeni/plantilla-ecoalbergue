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


// Owlcarousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:3
          }
      }
    });
  });

  (function ($) {
    "use strict";

    $(".add").on("click", function (e) {
      e.preventDefault();
      if ($(this).prev().val() < 999) {
        $(this)
          .prev()
          .val(+$(this).prev().val() + 1);
      }
    });
    $(".sub").on("click", function (e) {
      e.preventDefault();
      if ($(this).next().val() > 0) {
        if ($(this).next().val() > 0)
          $(this)
          .next()
          .val(+$(this).next().val() - 1);
      }
    });
    function thmOwlInit() {
      // owl slider
      let trevloowlCarousel = $(".trevlo-owl__carousel");
      if (trevloowlCarousel.length) {
        trevloowlCarousel.each(function () {
          let elm = $(this);
          let options = elm.data("owl-options");
          let thmOwlCarousel = elm.owlCarousel(
            "object" === typeof options ? options : JSON.parse(options)
          );
          elm.find("button").each(function () {
            $(this).attr("aria-label", "carousel button");
          });
        });
      }
      let trevloowlCarouselNav = $(".trevlo-owl__carousel--custom-nav");
      if (trevloowlCarouselNav.length) {
        trevloowlCarouselNav.each(function () {
          let elm = $(this);
          let owlNavPrev = elm.data("owl-nav-prev");
          let owlNavNext = elm.data("owl-nav-next");
          $(owlNavPrev).on("click", function (e) {
            elm.trigger("prev.owl.carousel");
            e.preventDefault();
          });

          $(owlNavNext).on("click", function (e) {
            elm.trigger("next.owl.carousel");
            e.preventDefault();
          });
        });
      }
    }

    $(window).on("resize", function () {
      trevlo_stretch();
    });
  })(jQuery);



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
