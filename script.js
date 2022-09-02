const toggleBtn    = document.querySelector('.menu')
const ulLinks      = document.querySelector('ul')
const navContainer = document.querySelector('.nav-container')

toggleBtn.addEventListener('click', () => {
  ulLinks.classList.toggle('active')
  toggleBtn.classList.toggle('open-close-btn')
  navContainer.classList.toggle('active')
})


document.addEventListener("DOMContentLoaded", function () {
    new Splide(".splide").mount();
  });