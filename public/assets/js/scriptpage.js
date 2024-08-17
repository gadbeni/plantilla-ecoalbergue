// btn menu header2
let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu');
let navbar = document.querySelector('.navbar');

btnMenu.addEventListener('click', function() {
  menu.classList.toggle('active');
  navbar.classList.toggle('active');
  btnMenu.classList.toggle('active');
});
