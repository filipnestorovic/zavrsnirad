$(document).ready(function () {
    $('.your-class').slick({
        slidesToShow: 1,
        autoplay: true,
        infinite: true,
        prevArrow: '.prev-arrow',
        nextArrow: '.next-arrow',
    });
});
// var target_date = new Date().getTime() + (1000 * 3600 * 3.4);
// var days, hours, minutes, seconds;
// var countdown_h = document.getElementById("tiles_h");
// var countdown_m = document.getElementById("tiles_m");
// var countdown_s = document.getElementById("tiles_s");
// getCountdown();
// setInterval(function () {
//     getCountdown();
// }, 1000);
//
// function getCountdown() {
//     var current_date = new Date().getTime();
//     var seconds_left = (target_date - current_date) / 1000;
//     days = pad(parseInt(seconds_left / 86400));
//     seconds_left = seconds_left % 86400;
//     hours = pad(parseInt(seconds_left / 3600));
//     seconds_left = seconds_left % 3600;
//     minutes = pad(parseInt(seconds_left / 60));
//     seconds = pad(parseInt(seconds_left % 60));
//     countdown_h.innerHTML = "<span>" + hours + "</span>";
//     countdown_m.innerHTML = "<span>" + minutes + "</span>";
//     countdown_s.innerHTML = "<span>" + seconds + "</span>";
// }
//
// function pad(n) {
//     return (n < 10 ? '0' : '') + n;
// }
