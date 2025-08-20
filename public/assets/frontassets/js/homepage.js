// Countr js start
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter-number');
    const animationDuration = 2000; // Animation duration in milliseconds
    const frameDuration = 1000 / 60; // 60 frames per second

    // Function to animate a single counter
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const totalFrames = Math.round(animationDuration / frameDuration);
        const increment = target / totalFrames;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                clearInterval(timer);
                counter.innerText = target.toLocaleString() + '+';
            } else {
                counter.innerText = Math.ceil(current).toLocaleString();
            }
        }, frameDuration);
    };

    // Use Intersection Observer to trigger the animation when the element is visible
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target); // Animate only once
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    // Observe each counter
    counters.forEach(counter => {
        observer.observe(counter);
    });
    // Countr Js End

    // awards slider start
    const awardTitleElement = document.getElementById('award-title');
    const awardDescriptionElement = document.getElementById('award-description');
    const swiperContainer = document.querySelector('.awards-slider');

    // update text
    function updateAwardInfo(swiperInstance) {
        
        const realIndex = swiperInstance.realIndex;
        const activeSlide = swiperInstance.el.querySelector(`.swiper-slide[data-swiper-slide-index="${realIndex}"]`);

        // if no slide found
        if (!activeSlide) {
            console.error("Could not find the active slide with realIndex:", realIndex);
            return;
        }

        // read data-title and data-description from slide
        const title = activeSlide.dataset.title;
        const description = activeSlide.dataset.description;

        // fade-out effect for smooth transition
        awardTitleElement.style.opacity = 0;
        awardDescriptionElement.style.opacity = 0;

        setTimeout(() => {
            awardTitleElement.textContent = title;
            awardDescriptionElement.textContent = description;
            // fade-in effect for text
            awardTitleElement.style.opacity = 1;
            awardDescriptionElement.style.opacity = 1;
        }, 300);
    }

    // Initialize Swiper.js
    const swiper = new Swiper(swiperContainer, {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true, // Enable loop
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        },
        on: {
            init: function() {
                updateAwardInfo(this);
            },
            slideChange: function() {
                updateAwardInfo(this);
            },
        },
    });
    // awards slider end
});