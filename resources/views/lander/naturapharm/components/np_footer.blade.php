<section id="sr12">
    <div class="container">
        <div class="sr11__name1" data-xd="t35">NARUČITE SA 40% POPUSTA</div>
        <div class="sr11__name2 clearfix"><div class="sr11__name2--1" data-xd="t36">{{ $product->product_name }}</div></div>
        <div class="sr12__product2"><img alt="" src="{{ asset('/') }}naturapharmFiles/shared_files/sr12_girl.png"></div>
        <div class="sr12__product"><img alt="" src="{{ asset('/').$product->product_image }}"/></div>
        <div class="screen12__orderblock">
            <div class="sr12__old__price" data-xd="t37">
                <span class="js_old_price" id="js_old_price">{{ $prices[1]['originalPrice'] }}</span> RSD
            </div>
            <div class="sr12__new__price" data-xd="t38">
                SAMO <span><span class="js_new_price" id="js_new_price">{{ $prices[1]['amount'] }}</span> RSD</span>
            </div>
            <div class="timmer_container">
                <ul class="list-unstyled timme_wrap">
                    <li class="left" data-xd="t39">OVA PONUDA VAŽI</li>
                    <li style="font-size: 28px; font-weight: bold; padding-top: 5px;">SAMO DANAS</li>
                </ul>
            </div>
            <div class="order-form">
                <div class="sr12__ordertext" data-xd="t40">POŠALJITE NAM ZAHTEV I KONTAKTIRAĆEMO VAS ODMAH!</div>
                @include('lander.naturapharm.components.np_form')
            </div>
        </div>
        <div class="notify"></div>
    </div>
</section>
@include('components.pixel_footer')
<script src="{{ asset('/') }}naturapharmFiles/shared_files/form.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/shared_files/validate.js"></script>
</body>
</html>
