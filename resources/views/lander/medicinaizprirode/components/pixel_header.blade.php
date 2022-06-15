<script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
<meta property="og:title" content="{{ $product->product_name }} | {{ $product->brand_name }}">
<meta property="og:description" content="{{ $product->product_name }}">
<meta property="og:image" content="{{ asset('/').$product->product_image }}">
<meta property="og:url" content="{{ $product->domain_url }}/{{ $product->slug }}">
<title>{{ $product->product_name }} | {{ $product->brand_name }}</title>
<script>
    let countrySubdomain = "new";
    @if($product->country_code === "ba") countrySubdomain = "ba"; @endif
    @if($_SERVER['REMOTE_ADDR'] === "127.0.0.1")
    document.write("<script type='text/javascript' src='https://"+ countrySubdomain + ".wombatnew.com/js/trck.js'><\/scr" + "ipt>");
    @else
    document.write("<script type='text/javascript' src='https://"+ countrySubdomain + ".serverwombat.com/js/trck.js'><\/scr" + "ipt>");
    @endif
</script>
