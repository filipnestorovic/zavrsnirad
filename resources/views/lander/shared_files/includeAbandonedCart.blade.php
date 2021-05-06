<script>

    // function validateEmail(email) {
    // const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // return re.test(String(email).toLowerCase());
    // }

    $('form :input').on('change', getInsertedData);

    $(function() {

        let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

        if (isMobile) {
            $(window).on('blur', getInsertedData);
        }
    });

    function getInsertedData(e) {

        e.preventDefault();

        $(this).off('change');

        let _token = "{{ csrf_token() }}";
        let baseUrl = "{{ asset('/') }}";

        let name = $("input[name=name]").val();
        let email = $("input[name=email]").val();
        let phone = $("input[name=phone]").val();
        let address = $("input[name=shipping_address]").val();
        let city = $("input[name=shipping_city]").val();
        let zip = $("input[name=shipping_zip]").val();
        let quantity = $("input[name=quantity]:checked").val();
        let product_id = $("input[name=id_product]").val();
        let country_id = $("input[name=country_id]").val();

        if(quantity == null) {
            quantity = $("select[name=quantity]").val();
        }

        if(name === "" && email === "" && phone === "")
        {
            console.log('null');
        }
        else{
            $.ajax({
                url: baseUrl + "sendAbandonedCart",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    city: city,
                    zip: zip,
                    quantity: quantity,
                    product_id: product_id,
                    country_id: country_id,
                    _token: _token
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
        }

    }

</script>