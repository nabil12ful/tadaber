const swiper = new Swiper('.main-slider .swiper', {
    loop: true,
    autoplay: {
        delay: 10000,
    },

    navigation: {
        nextEl: '.main-slider .swiper-button-next',
        prevEl: '.main-slider .swiper-button-prev',
    },

});

const link = new Swiper('.link .swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.link .swiper-button-next',
        prevEl: '.link .swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 5
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 5
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 5
        }
    }
});

const toggle = document.getElementById('toggle');
const myNavbar = document.getElementById('primary-menu');

document.onclick = function (e) {
    if (e.target.id !== 'toggle' && e.target.id !== 'primary-menu') {
        toggle.classList.remove('active');
        myNavbar.classList.remove('active')
    }
}

toggle.onclick = function () {
    toggle.classList.toggle('active');
    myNavbar.classList.toggle('active')
}

window.addEventListener("scroll", function (event) {
    var scroll = this.scrollY;
    if (scroll > 10) {
        this.document.getElementById("header").classList.add("fixed");
    } else {
        this.document.getElementById("header").classList.remove("fixed");
    }
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
        });
    });
});
