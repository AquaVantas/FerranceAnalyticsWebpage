var swiper = new Swiper('.reviews-swiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        }
    },
    pagination: {
        el: '.reviews-pagination',
        type: 'custom',
        renderCustom: function (swiper, current, total) {
            var text = "";
            for (let i = 1; i <= total; i++) {
                if (i == 1) {
                    text += "<span class='numbers'>0" + current + "</span>";
                    text += "<div class='pag-bullets'>";
                }
                var active = (current == i) ? "active" : "";
                text += "<span class='custom-pag " + active + "'></span>";
                if (i == total) {
                    text += "</div>";
                    text += "<span class='numbers'>0" + total + "</span>";
                }
            }
            return text;
        }
    },
    on: {
        init: setEqualHeight,
        slideChangeTransitionEnd: setEqualHeight,
    }
});

function setEqualHeight() {
    const slides = document.querySelectorAll('.reviews-swiper .swiper-slide');
    slides.forEach(slide => {
        slide.style.height = 'auto';
    });
    let maxHeight = 0;
    slides.forEach(slide => {
        const slideHeight = slide.offsetHeight;
        if (slideHeight > maxHeight) {
            maxHeight = slideHeight;
        }
    });
    slides.forEach(slide => {
        slide.style.height = `${maxHeight}px`;
    });
}