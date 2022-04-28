$(document).ready(function(){
    // Date.prototype.daysInMonth = function () {
    //     return 32 - new Date(this.getFullYear(), this.getMonth(), 32).getDate();
    // };

    // if (!String.prototype.padStart) {
    //     String.prototype.padStart = function padStart(targetLength, padString) {
    //         targetLength = targetLength >> 0; //truncate if number or convert non-number to 0;
    //         padString = String((typeof padString !== 'undefined' ? padString : ' '));
    //         if (this.length > targetLength) {
    //             return String(this);
    //         }
    //         else {
    //             targetLength = targetLength - this.length;
    //             if (targetLength > padString.length) {
    //                 padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
    //             }
    //             return padString.slice(0, targetLength) + String(this);
    //         }
    //     };
    // }

    // function getDate(plusDays) {
    //     var today = new Date();
    //     var dd = String(today.getDate() + plusDays).padStart(2, '0');
    //     var mm = String(today.getMonth() + 1).padStart(2, '0');
    //     if (+dd < 0) {
    //         mm = String(today.getMonth()).padStart(2, '0');
    //     }
    //
    //     var yyyy = String(today.getFullYear());
    //     // yyyy = yyyy.substr(yyyy.length - 2);
    //     var currentDaysInMonth = new Date().daysInMonth()
    //     if (+dd > currentDaysInMonth) {
    //         dd = String(dd - currentDaysInMonth).padStart(2, '0');
    //         mm = String(+mm + 1).padStart(2, "0");
    //     }
    //     if (+dd < 0) {
    //         dd = String(currentDaysInMonth + +dd).padStart(2, '0');
    //     }
    //     return dd + "." + mm + "." + yyyy
    // }

    // $(".date__1").text(getDate(-5));
    // $(".date__2").text(getDate(2));

    // ;(function() {
    //     var now = new Date();
    //     var secPassed = now.getHours() * 60 * 60 + now.getMinutes() * 60 + now.getSeconds();
    //     var t = (60 * 60 * 24) - secPassed;
    //     var tmp = '<ul class="time">' +
    //         '<li class="time-item">' +
    //         '<div class="time-num">' +
    //         '<span>{d10}</span>' +
    //         '<span>{d1}</span>' +
    //         '</div>' +
    //         '<span class="time-text">Ð”Ð½ÐµÐ¹</span>' +
    //         '</li>' +
    //         '<li class="time-item">' +
    //         '<div class="time-num">' +
    //         '<span>{h10}</span>' +
    //         '<span>{h1}</span>' +
    //         '</div>' +
    //         '<span class="time-text">Ð§ÐÐ¡ÐžÐ’</span>' +
    //         '</li>' +
    //         '<li class="time-item">' +
    //         '<div class="time-num">' +
    //         '<span>{m10}</span>' +
    //         '<span>{m1}</span>' +
    //         '</div>' +
    //         '<span class="time-text">ÐœÐ˜ÐÐ£Ð¢</span>' +
    //         '</li>' +
    //         '<li class="time-item">' +
    //         '<div class="time-num">' +
    //         '<span>{s10}</span>' +
    //         '<span>{s1}</span>' +
    //         '</div>' +
    //         '<span class="time-text">Ð¡Ð•ÐšÐ£ÐÐ”</span>' +
    //         '</li>' +
    //         '</ul>'
    //
    //     $('.timer').countdown({
    //         until: (t),
    //         labels: ['Ð“Ð¾Ð´Ñ‹', 'ÐœÐµÑÑÑ†Ñ‹', 'ÐÐµÐ´ÐµÐ»Ð¸', 'Ð”Ð½Ð¸', 'Ð§Ð°ÑÐ¾Ð²', 'ÐœÐ¸Ð½ÑƒÑ‚', 'Ð¡ÐµÐºÑƒÐ½Ð´'],
    //         labels1: ['Ð“Ð¾Ð´Ñ‹', 'ÐœÐµÑÑÑ†Ñ‹', 'ÐÐµÐ´ÐµÐ»Ð¸', 'Ð”Ð½Ð¸', 'Ð§Ð°ÑÐ¾Ð²', 'ÐœÐ¸Ð½ÑƒÑ‚', 'Ð¡ÐµÐºÑƒÐ½Ð´'],
    //         format: 'HMS',
    //         layout: tmp
    //     });
    //
    //     var privacyPolicy = $('[data-remodal-id=privacy-policy]').remodal({});
    // })();


    ;(function() {
        // var LP = LPFunctions;

        $('.reviews .slider .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            navText: ["", ""],
            items:1,
            nav:true,
        });

        // LP.pageScroll({
        //     selector : '.page-scroll',
        //     speed : 1000,
        // });

        // LP.replaceText({
        //     'selectorUp' : '.bottom-section-price-mob',
        //     'selectorDown' : '.bottom-section-price',
        //     'mediaQueryNum' : '767px',
        // });

        // var url = $("body").data('template');
        // console.log(url);
        // LP.replaceIMG({
        //     'mediaQueryNum' : '575px',
        //     'selectorUpIMG' : '.top-section .product-box .product img',
        //     'selectorUpIMGURL' : 'img/plus-product.png',
        //     'selectorDownIMG' : '.top-section .product-box .product img',
        //     'selectorDownIMGURL' : 'img/top-section/plus-product-mob.png'
        // })

        // progressBar('.order-form', [{
        //     inputSelector : 'input[name=phone]',
        //     functionValidate : function (item) {
        //         return ($(item).val().length >= 9);
        //     }
        // },
        //     {
        //         inputSelector : 'input[name=name_first]',
        //         functionValidate : function (item) {
        //             return ($(item).val().length >= 3);
        //         }
        //     }]);

        // function progressBar(parentSelector, childrenArr) {
        //     var parent = parentSelector;
        //     var percent = 100/childrenArr.length;
        //
        //     childrenArr.forEach(function (item, i, arr) {
        //         var status = false;
        //
        //         $(parent + ' ' + item.inputSelector).on('keyup, keypress, input', function (e) {
        //             if ( item.functionValidate(item.inputSelector) && !status ) {
        //                 plusPercent('#progressBar1 .percent', percent, function () {
        //                     updateProgressLine('#progressBar1 span', $('#progressBar1 .percent').text() );
        //                 });
        //                 status = true;
        //             } else if (!item.functionValidate(item.inputSelector) && status) {
        //                 minusPercent('#progressBar1 .percent', percent, function () {
        //                     updateProgressLine('#progressBar1 span', $('#progressBar1 .percent').text() );
        //                 });
        //                 status = false;
        //             }
        //         });
        //     });
        //
        //     function updateProgressLine(selector, percent) {
        //         $(selector).css('width', percent)
        //     }
        //
        //     function plusPercent(selector, percent, callback) {
        //         $(selector).animate({ num: toNumber($(selector).text()) + percent}, {
        //             duration: 70,
        //             step: function (num){
        //                 $(this).text(num.toFixed(0) + '%');
        //             },
        //             complete: function() {
        //                 callback()
        //             }
        //         });
        //     }
        //
        //     function minusPercent(selector, percent, callback) {
        //         $(selector).animate({ num: toNumber($(selector).text()) - percent}, {
        //             duration: 70,
        //             step: function (num){
        //                 console.log(num.toFixed(0))
        //                 $(this).text(num.toFixed(0) + '%');
        //             },
        //             complete: function() {
        //                 callback()
        //             }
        //         });
        //     }
        //
        //     function toNumber(num) {
        //         return +num.replace(/\D+/g,"");
        //     }
        // }

    })();

});
