var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    thumbs: {
        swiper: galleryThumbs
    }
});
var galleryThumbs = new Swiper('.gallery-thumbs2', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top2', {
    spaceBetween: 10,
    thumbs: {
        swiper: galleryThumbs
    }
});
var galleryThumbs = new Swiper('.block3-slider', {
    spaceBetween: 10,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.block3-slider__next',
        prevEl: '.block3-slider__prev',
    },
});
var galleryThumbs = new Swiper('.block8-slider', {
    spaceBetween: 10,
    autoHeight: true,
    slidesPerView: 2,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.block3-slider__next',
        prevEl: '.block3-slider__prev',
    },
    breakpoints: {
        // when window width is <= 499px
        992: {
            slidesPerView: 1,
            spaceBetweenSlides: 10
        },
    }
});

// lazy scroll
var linkNav = document.querySelectorAll('[href^="#"]'),
    V = .2;
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function (e) {
        e.preventDefault();
        var w = window.pageYOffset,
            hash = this.href.replace(/[^#]*(.*)/, '$1');
        t = document.querySelector(hash).getBoundingClientRect().top,
            start = null;
        requestAnimationFrame(step);
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
            window.scrollTo(0, r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash
            }
        }
    }, false);
}

(function () {
    let gamb = document.querySelector('.header__mob-menu');
    let menu = document.querySelector('.header__menu--mob');
    gamb.addEventListener('click', function () {
        menu.classList.toggle('active')
    })
})();
