$("body").on('click', '[href*="#"]', function(e) {
    var fixed_offset = 100;
    $('html,body').stop().animate({
        scrollTop: $(this.hash).offset().top - fixed_offset
    }, 1000);
    e.preventDefault();
});

// const timer = new minTimer({
//     hour: 't-hour',
//     min: 't-min',
//     sec: 't-sec',
//     separation: true
// }).start();

$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        margin: 20,
        items: 1,
        dots: true,
        nav: false,
        autoHeight: true
    });
});

function pollActive() {
    const losalKey = 'isOpenPoll'
    const btn = document.querySelectorAll('.option');
    const main = document.querySelector('.sect3__main');

    if (localStorage.getItem(losalKey)) {
        main.classList.add('active')
    }

    btn.forEach(btns => {
        btns.addEventListener('click', () => {
            main.classList.add('active')
            localStorage.setItem(losalKey, 'true')
        })
    })

}

pollActive()


circleAnimDelay()

function circleAnimDelay() {
    const circles = document.querySelectorAll('.circle')
    const setAnimAttr = () => `animation-delay: ${Math.random()}s`
    const candys = document.querySelectorAll('.candy')
    circles.forEach((item) => {
        const div = createEl()
        item.appendChild(div)
    })
    candys.forEach((item) => {
        item.setAttribute('style', setAnimAttr())
    })

    function createEl() {
        const div = document.createElement('div')
        div.classList.add('anim')
        div.setAttribute('style', setAnimAttr())
        return div
    }
}
