<input type="hidden" id="currencyHidden" value="{{ $prices[1]['currency']}}"/>
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

        try {
            moment.locale("");
            $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
            $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
        } catch (e) {
            console.log('moment problems!');
        }

        let name, email, phone, city, zip, country_code, currency_symbol, currency_code, amount;
        const baseURL = "{{ asset('/') }}";
        const csrf_token = "{{ csrf_token() }}";
        let sessionId = "{{ $session_id }}";
        let getUrlParams = new URLSearchParams(window.location.search);
        let fbclid = getUrlParams.get('fbclid');
        let landerCheckout = $('#landerCheckout').val();
        let sentAddToCart = 0;

        let brandUrl = "{{$brandUrl}}";

        if(cookie_medium === null && fbclid != null) {
            cookie_medium = "fb";
            setCookie('utm_medium', 'fb', 30);
        }

        if(cookie_uuid) {
            wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', '{{$fb_event}}', brandUrl);
        }

        @if($fb_event === "Purchase" || $fb_event === "Purchase2")
            @isset($order)
            name = "{{ $order->name }}";
        email = "{{ $order->email }}";
        phone = "{{ $order->phone }}";
        city = "{{ $order->city }}";
        zip = "{{ $order->zip }}";
        country_code = "{{ $order->country_code }}";
        currency_symbol = "{{ $order->currency_symbol }}";
        currency_code = "{{ $order->currency_code }}";
        amount = "{{ $order->amount }}";
        @endisset
        @endif

        @if(($fb_event === "Purchase" || $fb_event === "Purchase2") && (!isset($order)))
        @else
{{--        @foreach($pixels as $pixel)--}}
{{--        sendFbEvent('{{$pixel}}','{{$fb_event}}');--}}
{{--        @endforeach--}}
        @endif

        $('form').submit(function(e){
            if($(this).attr('action')==='/order'){
                $phone_input = $(this).closest('form').find('input[name=phone]');
                let phone = $phone_input.val();
                let country = '{{strtoupper($product->country_code)}}';
                let validationResult = validatePhoneNumber(phone, country);
                let errorText = "";
                switch (country) {
                    case 'RS':
                        errorText = 'Pogrešan format telefona';
                        break;
                    case 'BG':
                        errorText = 'Грешен формат на телефона';
                        break;
                    default:
                        errorText = "Pogrešan format telefona";
                }

                if(validationResult === "1") {
                    $phone_input.removeClass('phoneErrorInput');
                    $('.phoneErrorText').hide();
                    $(this).closest('form').find(':submit').attr('disabled','disabled');
                } else {
                    e.preventDefault();
                    $phone_input.addClass('phoneErrorInput');
                    $phone_input.after("<div class='phoneErrorText'>" + errorText + "</div>");
                }
            } else {
                $(this).find(':submit').attr('disabled','disabled');
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
                type:"POST",
                async: false,
                data:{
                    phone:phone,
                    country:country,
                    name:name,
                    email:email,
                    address:address,
                    city:city,
                    zip:zip,
                    quantity:quantity,
                    variation_id:variation_id,
                    _token: csrf_token
                },
                success:function(response){
                    returnResponse = response;
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
            return returnResponse;
        }

        $("#shipping_zip").keyup(function() {
            $("#shipping_zip").val(this.value.match(/[0-9]*/));
        });

        $("form :input").one("click", function() {
            // fbq('track', 'InitiateCheckout');
            @php $fb_event = "InitiateCheckout" @endphp
{{--            @foreach($pixels as $pixel)--}}
{{--            sendFbEvent('{{$pixel}}','{{$fb_event}}');--}}
{{--            @endforeach--}}
            if(landerCheckout === "1" && sentAddToCart === 0) {
                sendEventDB(sessionId,2);
            }
            if(cookie_uuid) {
                wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', 'InitiateCheckout', brandUrl);
            }
        });

        $("a[href^='#']").click(function(){
            // fbq('track', 'AddToCart');
            @php $fb_event = "AddToCart" @endphp
{{--            @foreach($pixels as $pixel)--}}
{{--            sendFbEvent('{{$pixel}}','{{$fb_event}}');--}}
{{--            @endforeach--}}
            if(landerCheckout === "1" && sentAddToCart === 0) {
                sendEventDB(sessionId,2);
                if(cookie_uuid) {
                    wbSendEvent(cookie_uuid, cookie_medium, cookie_campaign, cookie_adset, cookie_ad, cookie_affid, cookie_netid, cookie_clid, cookie_offid, '{{strtoupper($product->country_code)}}', 'AddToCart', brandUrl);
                }
            }
        });

        $('#cancelUpCrossSell').click(function() {
            sendEventDB(sessionId,11);
        });

        function sendEventDB($session_id, $event_id) {
            $.ajax({
                url: baseURL + "insertSessionAjax",
                type:"POST",
                data:{
                    session_id:$session_id,
                    event_id:$event_id,
                    _token: csrf_token
                },
                success:function(response){
                    sentAddToCart = 1;
                    // console.log(response);
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
        }

        // function sendFbEvent(pixel_id, fb_event) {
        //     $.ajax({
        //         type: "GET",
        //         url: baseURL + "ajax/sendConversionApiFB",
        //         data: {pixel_id:pixel_id, fb_event:fb_event, session_id:sessionId, fbclid:fbclid, name:name, email:email, phone:phone, city:city, zip:zip, country_code:country_code, currency_symbol:currency_symbol, currency_code:currency_code, amount:amount},
        //         success: function (data) {
        //             // console.log(data);
        //         },
        //         error: function (req, err) {
        //             console.log(req);
        //         }
        //     });
        // }

    });
</script>

<script>
    window.onload=function(){
        const url = new URL(window.location);
        url.searchParams.delete('utm_medium');
        url.searchParams.delete('wb_campaignID');
        url.searchParams.delete('wb_adsetID');
        url.searchParams.delete('wb_adID');
        // url.searchParams.delete('affID');

        url.searchParams.delete('wb_campaign');
        url.searchParams.delete('wb_adset');
        url.searchParams.delete('wb_ad');

        window.history.pushState({}, '', url);
    }
</script>