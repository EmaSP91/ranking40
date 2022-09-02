const toggleBtn    = document.querySelector('.menu')
//const ulLinks      = document.querySelector('ul')
const mobileNav = document.querySelector('.mobile-nav')

toggleBtn.addEventListener('click', () => {
  //ulLinks.classList.toggle('active')
  toggleBtn.classList.toggle('open-close-btn')
  mobileNav.classList.toggle('active')
})


document.addEventListener("DOMContentLoaded", function () {
    new Splide(".splide").mount();
  });