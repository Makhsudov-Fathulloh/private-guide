/* Header fixed */
const header = document.getElementById("main-header");
const sticky = header.offsetTop;

window.onscroll = function () {
    myFunction();
};

function myFunction() {
    // console.log(window.pageYOffset);
    if (window.pageYOffset > 115 && window.pageYOffset > sticky) {
        header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
}
/* /Header fixed */


/* Client caorusel  */
const carousel = document.querySelector('.carousel');
const carouselContainer = document.querySelector('.client-items');
const items = document.querySelectorAll('.client-item');
const dots = document.querySelectorAll('.carousel-dot');

let currentIndex = 0;
const itemWidth = carousel.clientWidth;

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
    });
});

let intervalId;

function startAutoplay() {
    intervalId = setInterval(() => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    }, 2000); // 2 seconds
}

function stopAutoplay() {
    clearInterval(intervalId);
}

carousel.addEventListener('mouseenter', stopAutoplay);
carousel.addEventListener('mouseleave', startAutoplay);

startAutoplay();

function updateCarousel() {
    const offset = -currentIndex * itemWidth;
    carouselContainer.style.transform = `translateX(${offset}px)`;

    dots.forEach((dot, index) => {
        if (index === currentIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}
/* /Client caorusel  */