
const table = new Siema({
    selector: '.table .cols',
    duration: 200,
    easing: 'ease-out',
    perPage: {
        320: 1,
        760: 2,
        1020: 3
    },
    startIndex: 0,
    draggable: true,
    multipleDrag: true,
    threshold: 20,
    loop:false,
    rtl: false,
    onInit: () => {},
    onChange: () => {},}

);




const mySiemar = new Siema({
    selector: '#reviews',
    duration: 200,
    easing: 'ease-out',
    perPage: {
        320: 1,
        760: 1,
        1020: 1
    },
    startIndex: 0,
    draggable: true,
    multipleDrag: true,
    threshold: 20,
    loop: true,
    rtl: false,
    onInit: () => {},
    onChange: () => {},}

);

document.querySelector('.scc .prev').addEventListener('click', () => mySiemar.prev());
document.querySelector('.scc .next').addEventListener('click', () => mySiemar.next());


var duration = { d: 1, h: 1, m: 59, s: 59 },
    sf = 120,
    maxD = 2,
    maxH = 24,
    maxM = 60,
    maxS = 60;

setInterval(function() {
    $('.d').html(duration.d);
    $('.hr').html(duration.h);
    $('.min').html(duration.m)
        .attr('data-t', duration.m - 1);
    $('.sec').html(duration.s)
        .attr('data-t', duration.s - 1);
    duration.s--;
    $('.sec').addClass('flip');
    $('.min').removeClass('flip');
    $('.id .circle').css('stroke-dashoffset', sf-(duration.d*(sf/maxD)));
    $('.ih .circle').css('stroke-dashoffset', sf-(duration.h*(sf/maxH)));
    $('.im .circle').css('stroke-dashoffset', sf-(duration.m*(sf/maxM)));
    $('.is .circle').css('stroke-dashoffset', sf-(duration.s*(sf/maxS)));
    if (duration.s === 58) {
        $('.m').addClass('flip');
    }
    if (duration.s === 0) {
        duration.m--;
        duration.s = 59;
        if (duration.m === 0) {
            duration.h--;
            duration.m = 59
        }
    }
}, 1000);

// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
//open popup
$('a.modal, .button').on('click', function(event){
    event.preventDefault();
    $('.popup-form').addClass('is-visible');
});

$('a.cop').on('click', function(event){
    event.preventDefault();
    $('.popup-text').addClass('is-visible');
});

//close popup
$('.popup').on('click', function(event){
    if( $(event.target).is('.popup-close') || $(event.target).is('.popup') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
    }
});

$('.popup-text').on('click', function(event){
    if( $(event.target).is('.popup-close') || $(event.target).is('.popup') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
    }
});
//close popup when clicking the esc keyboard button
$(document).keyup(function(event){
    if(event.which=='27'){
        $('.popup').removeClass('is-visible');
    }
});
