const button = document.getElementById('button');
const menu = document.getElementById('menu');
const navbar = document.getElementById('header');

window.onscroll = function() {
  "use strict";
  if (document.documentElement.scrollTop >= window.innerHeight * 0.75  ||
      document.body.scrollTop >= window.innerHeight * 0.75 ) {
    navbar.classList.add('header--scroll');
  } else {
    navbar.classList.remove('header--scroll');
  }
}

button.addEventListener('click', function() {
  button.classList.toggle('cross');
  menu.classList.toggle('menu--active');
});
