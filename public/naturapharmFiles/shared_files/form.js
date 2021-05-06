$(document).ready(function () {

    $( ".js-scroll-to" ).click(function() {
        fbq('track', 'AddToCart');
    });

    $('input[type=radio][name=quantity]').change(function() {

        let id = this.value;
        $old_price = document.getElementById("product" + id).value;
        $new_price = document.getElementById("product" + id).placeholder;
        $priceHidden = document.getElementById("priceHidden");

        if(id === "3") {
            $('.free_shipping').slideDown();
        } else {
            $('.free_shipping').slideUp();
        }

        try {
            $('.js_old_price').text($old_price);
            $('.js_new_price').text($new_price);
            $priceHidden.value = $new_price;
        } catch (err) {
            console.log("Not able to show price on radio btn change!");
        }

    });

    // function sendAbandoned() {
    //
    //     let name = $("input[name=name]").val();
    //     let phone = $("input[name=phone]").val();
    //     let product_id = $("input[name=id_product]").val();
    //     let quantity = $("input[name=quantity]:checked").val();
    //
    //     if(phone === "") {
    //         console.log('null');
    //     } else {
    //         $.ajax({
    //             url: baseUrl + "sendAbandonedCartCall",
    //             type: "POST",
    //             data: {
    //                 _token: _token,
    //                 name: name,
    //                 phone: phone,
    //                 quantity: quantity,
    //                 product_id: product_id
    //             },
    //             success: function (response) {
    //                 console.log(response);
    //             },
    //             error: function (request, status, error) {
    //                 console.log(request.responseText);
    //                 console.log('error');
    //             }
    //         });
    //     }
    //
    // }

});


