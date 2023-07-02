<script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
<meta property="og:title" content="{{ $product->getAttribute('product_name') }} | {{ $product->brand->getAttribute('brand_name') }} | {{ $product->country->getAttribute('country_name') }}">
<meta property="og:description" content="{{ $product->getAttribute('product_name') }}">
<meta property="og:image" content="{{ asset('/').$product->getAttribute('product_image') }}">
<title>{{ $product->getAttribute('product_name') }} | {{ $product->brand->getAttribute('brand_name') }}</title>
{{--<script>--}}
{{--    let countrySubdomain = "new";--}}
{{--    @if($_SERVER['REMOTE_ADDR'] === "127.0.0.1")--}}
{{--    document.write("<script type='text/javascript' src='https://"+ countrySubdomain + ".wombatnew.com/js/trck.js'><\/scr" + "ipt>");--}}
{{--    @else--}}
{{--    document.write("<script type='text/javascript' src='https://"+ countrySubdomain + ".serverwombat.com/js/trck.js'><\/scr" + "ipt>");--}}
{{--    @endif--}}
{{--</script>--}}
