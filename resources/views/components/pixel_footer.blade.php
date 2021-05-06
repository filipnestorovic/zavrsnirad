<script>
    $(document).ready(function () {
        let name, email, phone, city, zip, country_code, currency_symbol, amount;
        const baseURL = "{{ asset('/') }}";
        let sessionId = "{{ $session_id }}";
        let getUrlParams = new URLSearchParams(window.location.search);
        let fbclid = getUrlParams.get('fbclid');

        @if($fb_event === "Purchase" && $order != null)
             name = "{{ $order->name }}";
             email = "{{ $order->email }}";
             phone = "{{ $order->phone }}";
             city = "{{ $order->city }}";
             zip = "{{ $order->zip }}";
             country_code = "{{ $order->country_code }}";
             currency_symbol = "{{ $order->currency_symbol }}";
             amount = "{{ $order->amount }}";
        @endif

        @foreach($pixels as $pixel)
            sendFbEvent('{{$pixel}}','{{$fb_event}}');
        @endforeach

        $('form').submit(function(){
            $(this).find(':submit').attr('disabled','disabled');
        });

        $("#shipping_zip").keyup(function() {
            $("#shipping_zip").val(this.value.match(/[0-9]*/));
        });

        $("form :input").one("click", function() {
            fbq('track', 'InitiateCheckout');
            @php $fb_event = "InitiateCheckout" @endphp
            @foreach($pixels as $pixel)
                sendFbEvent('{{$pixel}}','{{$fb_event}}');
            @endforeach
        });

        $("a[href^='#']").click(function(){
            fbq('track', 'AddToCart');
            @php $fb_event = "AddToCart" @endphp
            @foreach($pixels as $pixel)
                sendFbEvent('{{$pixel}}','{{$fb_event}}');
            @endforeach
        });

        function sendFbEvent(pixel_id, fb_event) {
            $.ajax({
                type: "GET",
                url: baseURL + "ajax/sendConversionApiFB",
                data: {pixel_id:pixel_id, fb_event:fb_event, session_id:sessionId, fbclid:fbclid, name:name, email:email, phone:phone, city:city, zip:zip, country_code:country_code, currency_symbol:currency_symbol, amount:amount},
                success: function (data) {
                    console.log(data);
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
        }
    });
</script>