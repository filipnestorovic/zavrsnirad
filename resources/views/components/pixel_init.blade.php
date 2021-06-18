<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    @foreach($pixels as $pixel)
        fbq('init', '{{$pixel}}');
    @endforeach
    @php
        $event_id = $fb_event.".".$session_id;
    @endphp
    @if($fb_event === "Purchase")
        fbq('track', '{{$fb_event}}', {currency: '{{$order->currency_code}}', value: '{{$order->price}}'}, {eventID: "{{$event_id}}", event: "{{$fb_event}}"});
    @else
        fbq('track', '{{$fb_event}}', {eventID: "{{$event_id}}", event: "{{$fb_event}}"});
    @endif
</script>
{{--<noscript>--}}
    {{--@foreach($pixels as $pixel)--}}
        {{--@if($fb_event === "Purchase")--}}
            {{--<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{$pixel}}&ev={{$fb_event}}&cd[value]={{$order->price}}&cd[currency]={{strtoupper($order->currency_symbol)}}&noscript=1"/>--}}
        {{--@else--}}
            {{--<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{$pixel}}&ev={{$fb_event}}&noscript=1"/>--}}
        {{--@endif--}}
    {{--@endforeach--}}
{{--</noscript>--}}
<!-- End Facebook Pixel Code -->
<meta property="og:title" content="{{ $product->product_name }} | {{ $product->brand_name }}">
<meta property="og:description" content="{{ $product->product_name }}">
<meta property="og:image" content="{{ asset('/').$product->product_image }}">
<meta property="og:url" content="{{ $product->brand_url }}/{{ $product->slug }}">
<title>{{ $product->product_name }} | {{ $product->brand_name }}</title>