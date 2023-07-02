<input type="hidden" id="currencyHidden" value="{{$prices[1]['currency']['currency_code']}}"/>
<style>
    .phoneErrorInput {
        border: 2px solid #FF0000;
        background-color: #FF7F7F !important;
    }

    .phoneErrorText {
        color: #FF0000;
        text-align: center;
        margin: 10px 0;
    }
</style>
<script>
    $(document).ready(function () {

        const baseURL = "{{ asset('/') }}";
        const csrf_token = "{{ csrf_token() }}";
        let sessionId = "{{ $session_id }}";
        let landerCheckout = $('#landerCheckout').val();

        {{--let brandUrl = "{{$brandUrl}}";--}}

        {{--if (cookie_uuid) {--}}
        {{--    wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', '{{$event}}', brandUrl);--}}
        {{--}--}}

        $('form').submit(function (e) {
            if ($(this).attr('action') === '/order') {
                $phone_input = $(this).closest('form').find('input[name=phone]');
                let phone = $phone_input.val();
                let country = '{{strtoupper($product->country->getAttribute('country_code'))}}';
                let validationResult = validatePhoneNumber(phone, country);
                let errorText = "";
                switch (country) {
                    case 'RS':
                        errorText = 'Pogrešan format telefona';
                        break;
                    case 'BG':
                        errorText = 'Грешен формат на телефона';
                        break;
                    case 'RO':
                        errorText = 'Format de telefon greșit';
                        break;
                    case 'GR':
                        errorText = 'Λάθος μορφή τηλεφώνου';
                        break;
                    case 'PL':
                        errorText = 'Nieprawidłowy format telefonu';
                        break;
                    case 'SK':
                        errorText = 'Nesprávny formát telefónu';
                        break;
                    case 'CZ':
                        errorText = 'Špatný formát telefonu';
                        break;
                    case 'SI':
                        errorText = 'Napačen format telefonske številke';
                        break;
                    case 'HU':
                        errorText = 'Hibás telefonszám-formátum';
                        break;
                    default:
                        errorText = "Wrong phone number format";
                }

                if (validationResult === "1") {
                    $phone_input.removeClass('phoneErrorInput');
                    $('.phoneErrorText').hide();
                    $(this).closest('form').find(':submit').attr('disabled', 'disabled');
                } else {
                    e.preventDefault();
                    $phone_input.addClass('phoneErrorInput');
                    $phone_input.after("<div class='phoneErrorText'>" + errorText + "</div>");
                }
            } else {
                $(this).find(':submit').attr('disabled', 'disabled');
            }
        });


        function validatePhoneNumber(phone, country) {
            let returnResponse = 0;
            let name = $('input[name=name]').val();
            let email = $('input[name=email]').val();
            let address = $('input[name=shipping_address]').val();
            let city = $('input[name=shipping_city]').val();
            let zip = $('input[name=shipping_zip]').val();
            let quantity = $('input[name=quantity]').val();
            let variation_id = $('input[name=variation_id]').val();
            $.ajax({
                url: baseURL + "validatePhoneNumber",
                type: "POST",
                async: false,
                data: {
                    phone: phone,
                    country: country,
                    name: name,
                    email: email,
                    address: address,
                    city: city,
                    zip: zip,
                    quantity: quantity,
                    variation_id: variation_id,
                    _token: csrf_token
                },
                success: function (response) {
                    returnResponse = response;
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
            return returnResponse;
        }

        $("#shipping_zip").keyup(function () {
            $("#shipping_zip").val(this.value.match(/[0-9]*/));
        });

        $("form :input").one("click", function () {
            @php $event = "InitiateCheckout" @endphp
            if (landerCheckout === "1") {
                sendEventDB(sessionId, 2);
            }
            {{--    if (cookie_uuid) {--}}
            {{--        wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', 'InitiateCheckout', brandUrl);--}}
            {{--    }--}}
        });

        $("a[href^='#']").click(function () {
            @php $event = "AddToCart" @endphp
            if (landerCheckout === "1") {
                sendEventDB(sessionId, 2);
                {{--if (cookie_uuid) {--}}
                {{--    wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', 'AddToCart', brandUrl);--}}
                {{--}--}}
            }
        });

        $('#cancelUpCrossSell').click(function () {
            sendEventDB(sessionId, 11);
        });

        function sendEventDB($session_id, $event_id) {
            $.ajax({
                url: baseURL + "insertSessionAjax",
                type: "POST",
                data: {
                    session_id: $session_id,
                    event_id: $event_id,
                    _token: csrf_token
                },
                success: function (response) {

                },
                error: function (req, err) {
                    console.log(req);
                }
            });
        }
    });
</script>
