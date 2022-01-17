<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/paintzoom/style.css" type="text/css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <div class="header">
        <h1 class="uppercase center black b green_bg">Paint Zoom</h1>
        <h2 class="uppercase center white">UNIVERZALNI RASPRŠIVAČ BOJE</h2>
        <img src="{{ asset('/') }}dailysharkFiles/paintzoom/header_imgc1551.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (glasova: 673)</div>
            porudžbina: 2058
        </div>
        <div class="timer_price">
            <div class="products_count prod1"><b>18 kom.</b> otišlo na promociji</div>
            <div class="price" style="float: right;">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale">
                    -40%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
        <div class="guard_all">
            <div class="guard" style="float: none; margin: 0 auto; border: none;">Zaštita kupaca</div>
        </div>
    </div>
    <section class="opisanie">
        <h2 class="venzel"><span class="green">Šta je</span> <b>Paint Zoom</b></h2>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/tov-1502e0.jpg">
        <p class="justify">Pištolj za prskanje Paint Zoom je odličan pomoćnik koji će brzo ofarbati svaku površinu!</p>
        <p class="justify">Paint Zoom zamenjuje niz alata za farbanje <strong>bilo koje površine</strong> (beton, cigla, drvo i još mnogo toga).</p>
        <p class="justify"><strong>Nema više četki i valjaka!</strong></p>
    </section>
    <section>
        <ul class="spisok ul_black black_ul">
            <li>Pomaže da sa lakoćom postignete profesionalne rezultate farbanja</li>
            <li>Pogodno za farbanje bilo koje površine</li>
            <li>Jednostavan za korišćenje</li>
            <li>Štedi boju, trud i vreme</li>
            <li>Ujednačeno, lagano, brzo i kvalitetno bojenje</li>
            <li>Pogodno za boje, lakove, ulja, dezinfekciona sredstva i druge tečnosti bilo koje vrste</li>
        </ul>
        <p><a href="#order_form" class="button-m">Poručite sada</a></p>
    </section>
    <section class="opisanie">
        <h2 class="venzel"><span class="green">Prednosti </span> <b>Paint Zoom-a</b></h2>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/feature2.jpg">
        <p class="justify">Ovo je moćan uređaj sa <strong>tehnologijom aerosolnog premaza</strong> za profesionalno farbanje pri izvođenju unutrašnjih i spoljašnih radova.</p>
        <p class="justify">Za <strong>10 minuta</strong> možete lako da ofarbate površinu od 15 kvadratnih metara sa istim kvalitetom kao iskusni profesionalac.</p>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/feature3.jpg">
        <p class="justify">Ne morate da se naprežete, Paint Zoom radi sav težak posao umesto vas. Ako je pre farbanje valjkom ili četkama trajalo dugo, sada sa ovim proizvodom posao možete obaviti za <strong>samo nekoliko minuta.</strong></p>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/sec-3-imgde24d.jpg">
        <p><a href="#order_form" class="button-m">Poručite sada</a></p>
    </section>
    <section class="b10 b10-avas">
        <h2 class="venzel"><span class="green">Šta kažu kupci </span> о <b>Paint Zoom-u</b></h2>
        <div class="reviews">
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b10-avacce58.jpg">
                <p>Prvi put koristim ovaj uređaj. Veoma sam zadovoljan, nezamenljiva stvar za farbanje. Snažan je, radi besprekorno i lako se čisti nakon upotrebe.
                    Štedi vreme, jenostavan je i preporučujem ga svima!</p>
                <p class="name"><b>Vaso Samardžija</b> </p>
            </div>
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b11-avaa04d3.jpg">
                <p>Koristio sam ga da ofarbam drvenu klupu ispred moje kuće. Po prvi put u mom životu, farbanje mi je bilo zabavno. Kaiš koji služi da se spravica okači na rame je odličan.
                    Uzeo sam jedan kumu za poklon!</p>
                <p class="name"><b>Zoran Škembo</b></p>
            </div>
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b12-avaa20be.jpg">
                <p>Kupio sam ovaj uređaj za kuću i vikendicu. Reći ću vam samo ovo: stvar je jednostavno nezamenljiva. Štedi vreme i živce! Ranije mi je trebalo više od mesec dana
                    da skupim snagu za farbanje ograde, a sa ovim sam sve završio u roku od pola sata. Ofarbana površina se brzo suši, i duplo manje boje sam potrošio. Čista desetka!</p>
                <p class="name"><b>Rade Simić</b></p>
            </div>
        </div>
    </section>
    <section>
        <ul class="deliv deliv1">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-139bf7.png">
                <h3>Isporuka</h3>
                <p>U roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-2ddd71.png">
                <h3>Plaćanje</h3>
                <p>Plaćanje se vrši po prijemu porudžbine</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-3e7528.png">
                <h3>Garancije</h3>
                <p>Uvek proveravamo robu pre isporuke i vraćamo novac ukoliko niste zadovoljni</p>
            </li>
        </ul>
    </section>
    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-1a5e20.png">
                <h3>Poručivanje</h3>
                <p>Ostavite podatke na našem sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-213f9f.png">
                <h3>Potvrda porudžbine</h3>
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-34aba0.png">
                <h3>Slanje pošiljke</h3>
                <p>Pošilju šaljemo brzom poštom</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-4efafe.png">
                <h3>Plaćanje</h3>
                <p>Plaćate kuriru po prijemu pošiljke</p>
            </li>
        </ul>
    </section>
    <div class="header footer">
        <h1 class="uppercase center black b green_bg">Paint Zoom</h1>
        <h2 class="uppercase center white">UNIVERZALNI RASPRŠIVAČ BOJE</h2>
        <img src="{{ asset('/') }}dailysharkFiles/paintzoom/header_imgc1551.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (glasova: 673)</div>
            porudžbina: 2058
        </div>
        <h3>Podaci <b>za dostavu</b></h3>
        {{--<div class="posttile">Наши менеджеры свяжутся с вами для консультации и помогут сделать заказ</div>--}}
        <div class="timer_price">
            <div class="products_count prod1"><b>18 kom.</b> otišlo na promociji</div>
            <div class="price" style="float: right;">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale">
                    -40%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <form id="order_form" class="m1-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" name="name" type="text" placeholder="Ime i prezime" required="">
            <input class="field" name="phone" type="tel" placeholder="Telefon" required="">
            <input class="field" name="shipping_address" type="text" placeholder="Adresa" required="">
            <input class="field" name="shipping_city" type="text" placeholder="Grad" required="">
            <button class="button-m">Poručite sada</button>
        </form>
        <div class="guard_all">
            <div class="guard" style="float: none; margin: 0 auto; border: none;">Zaštita kupaca</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/paintzoom/lightbox.min.js"></script>
<script>
    $(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });

        $('.gallery').slick({
            dots: false,
            infinite: true,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });

        $('.reviews').slick({
            dots: false,
            infinite: false,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>