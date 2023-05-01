const toggleBtn = document.querySelector('.menu')
const mobileNav = document.querySelector('.mobile-nav')



// Change the arrows' opacity when the mouse is over and out

const artists = document.querySelector('.artists')
const splide = document.querySelector('.splide')


//when the mouse is over

splide.addEventListener('mouseover', () => {

  const leftArrow = document.querySelector('.splide__arrow--prev')
  const rightArrow = document.querySelector('.splide__arrow--next')
  
  leftArrow.style.opacity= "0.3"
  rightArrow.style.opacity= "0.3"
  
})

//when the mouse is out 

splide.addEventListener('mouseout', () => {
  const leftArrow = document.querySelector('.splide__arrow--prev')
  const rightArrow = document.querySelector('.splide__arrow--next')

  leftArrow.style.opacity= "1"
  rightArrow.style.opacity= "1"
  
})



toggleBtn.addEventListener('click', () => {

  toggleBtn.classList.toggle('open-close-btn')
  mobileNav.classList.toggle('active')
})


document.addEventListener("DOMContentLoaded", function () {
    new Splide(".splide").mount();
  });