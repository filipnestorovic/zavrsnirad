$(document).ready(function(){
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
  
$('.spoiler-body').hide(300);
	$(document).on('click','.spoiler-head',function (e) {
		e.preventDefault()
		$(this).parents('.spoiler-wrap').toggleClass("active").find('.spoiler-body').slideToggle();
	});
    
$('.reviews').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
    adaptiveHeight: true
});    
 
$('.galleries').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 976,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 659,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});    
//         var today = new Date();
// 	var tomorrow = new Date(today.getTime() + (24 * 60 * 60 * 1000));
// 	var dayTomorrow = tomorrow.getDate();
// 	/*if(dayTomorrow < 10)
// 		dayTomorrow = "0" + dayTomorrow;*/
// 	var monthTomorrow = tomorrow.getMonth() + 1;
// 	/*if(monthTomorrow < 10)
// 		monthTomorrow = "0" + monthTomorrow;*/
// 	var yearTomorrow = tomorrow.getFullYear();
//     var hoursLeft = 23 - today.getHours();
//     var minutesLeft = 59 - today.getMinutes();
//     //console.log(minutesLeft);
//
//    function getTimeRemaining(endtime) {
//   var t = Date.parse(endtime) - Date.parse(new Date());
//   var seconds = Math.floor((t / 1000) % 60);
//   var minutes = Math.floor((t / 1000 / 60) % 60);
//   var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
//   //var days = Math.floor(t / (1000 * 60 * 60 * 24));
//   return {
//     'total': t,
//     //'days': days,
//     'hours': hours,
//     'minutes': minutes,
//     'seconds': seconds
//   };
// }
//
// function initializeClock(id, endtime) {
//   var clock = document.getElementById(id);
//   //var daysSpan = clock.querySelector('.days');
//   var hoursSpan = clock.querySelector('.hours');
//   var minutesSpan = clock.querySelector('.minutes');
//   var secondsSpan = clock.querySelector('.seconds');
//
//   function updateClock() {
//     var t = getTimeRemaining(endtime);
//
//     //daysSpan.innerHTML = t.days;
//     hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
//     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
//     secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
//
//     if (t.total <= 0) {
//       clearInterval(timeinterval);
//     }
//   }
//
//   updateClock();
//   var timeinterval = setInterval(updateClock, 1000);
// }
//
// var deadline = new Date(Date.parse(new Date()) + hoursLeft * 60 * 60 * 1000 + minutesLeft * 60 * 1000);
//     //console.log(Date.parse(new Date()));
// initializeClock('clockdiv', deadline);
// initializeClock('clockdiv1', deadline);

});

