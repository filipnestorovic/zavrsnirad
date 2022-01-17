<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="robots" content="noarchive">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="" type="image/png">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/beautybox/style.css">
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1>BEAUTY BOX 360</h1>
        <h2>ROTIRAJUĆI STALAK ZA ŠMINKU</h2>
        <h3></h3>
        <ul class="clearfix">
            <li>VIŠE PROSTORA <br> ZA KOZMETIKU</li>
            <li>KOMPAKTAN I <br> PROSTRAN</li>
            <li>ROTACIJA ZA <br> 360 STEPENI</li>
        </ul>
    </section>
    <section class="b2">
        <div class="sale-price clearfix">
            <div class="sale">
                <p>AKCIJA</p>
                <span>-40%</span>
            </div>
            <div class="price">
                <span style="font-size: 22px;color: white;">Stara cena:</span><br>
                <p>
                    <price class="price_land_s2 js_old_price">
                        {{ $prices[1]['originalPrice'] }}
                    </price>
                    <price class="price_land_curr js_curs">
                        RSD
                    </price>
                </p>
                <span style="font-size: 22px;color: #ffe100;">Nova cena:</span><br>
                <span>
                     <price class="price_land_s1 js_new_price">
                        {{ $prices[1]['amount'] }}
                     </price>
                     <price class="price_land_curr js_curs">
                        RSD
                     </price>
                  </span>
            </div>
        </div>
        <a href="#zakaz" class="button-m">PORUČITE ODMAH</a><br>
    </section>
    <section class="b3">
        <h2><span>BEAUTY BOX 360</span> NEZAMENLJIVA STVAR ZA SVAKU DEVOJKU</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/beautybox/ba.jpeg" alt="" title="">
        <p><b>BEAUTY BOX 360</b> je idealan za odlaganje kozmetike, četkica i drugih sitnica. Kompaktan, prostran i ne zauzima mnogo prostora. Pošto ima moderan dizajn,
            možete ga držati na vidnom mestu.
        </p>
    </section>
    <section class="b5">
        <h2>SPECIFIKACIJE</h2>
        <center><img src="{{ asset('/') }}purplerelaxFiles/beautybox/1.gif" alt="" title=""></center>
        <ul class="use">
            <li>
                <p>Moderni stalak sa rotacijom od 360 stepeni omogućava vam da lako skladištite kozmetiku, parfeme i razne druge proizvode koje koristite.</p>
                <p>Police imaju podesivu visinu, tako da ga možete sklopiti u skladu sa svojim potrebama.</p>
            </li>
            <li>
                <p>Materijal: ABS plastika</p>
            </li>
            <li>
                <p>Boja: Crna</p>
            </li>
            <li>
                <p>Dimenzije: 31cm x 23cm</p>
            </li>
        </ul>
    </section>
    <section class="b4">
        <h2>KOZMETIKA TREBA DA IMA <br> SVOJE MESTO</h2>
        <div class="makeup"></div>
        <p>Da li vam se nekada desi da ujutru ne možete da pronaćete ajlajner, ruž za usne ili olovku za obrve?</p>
        <p><b>BEAUTY BOX 360</b> - rešava problem sa potragom za kozmetikom. Nije glomazan, ali nije ni mali. Ima savršenu veličinu - sva vaša šminka će biti na jednom mestu!</p>
    </section>
    <section class="b7">
        <h2>UTISCI KUPACA</h2>
        <div class="reviews">
            <div class="rev">
                <h3>MARINA PETROVIĆ</h3>
                <p>Sviđa mi se ovaj Beauty Box zbog svoje praktičnosti i mogućnosti skladištenja ne samo kozmetike, nego i nakita.</p>
            </div>
            <div class="rev r2">
                <h3>ELENA MAKSIMOVIĆ</h3>
                <p>Naručila sam sebi Beauty Box 360. Paket je stigao brzo i zadovoljstvo je šminkati se kada je sva šminka na jednom mestu i pri ruci. Preporučujem!</p>
            </div>
            <div class="rev r3">
                <h3>NATALIJA BOROVČANIN</h3>
                <p>Poručila sam ovaj proizvod da ne bih satima tražila kozmetiku. Izgleda cool i veoma je praktičan. Odlična stvar!</p>
            </div>
        </div>
    </section>
    <section class="b8">
        <ul class="ship clearfix">
            <li>
                <p style="margin-top:31px"><b>Dostava brzom poštom</b> u roku od 1-2 radna dana.</p>
            </li>
            <li>
                <p><b>Bez plaćanja unapred!</b> Plaćanje se vrši po prijemu pošiljke direktno kuriru brze pošte.</p>
            </li>
            <li>
                <p><b>Garancija!</b> Vratićemo vam novac ukoliko vam se ne sviđa BEAUTY BOX 360</p>
            </li>
        </ul>
    </section>
    <section class="b1">
        <h1>BEAUTY BOX 360</h1>
        <h2>ROTIRAJUĆI STALAK ZA ŠMINKU</h2>
        <h3></h3>
        <ul class="clearfix">
            <li>VIŠE PROSTORA <br> ZA KOZMETIKU</li>
            <li>KOMPAKTAN I <br> PROSTRAN</li>
            <li>ROTACIJA ZA <br> 360 STEPENI</li>
        </ul>
    </section>
    <section class="b10">
        <div class="sale-price clearfix">
            <div class="sale">
                <p>AKCIJA</p>
                <span>-40%</span>
            </div>
            <div class="price">
                <span style="font-size: 22px;color: white;">Stara cena:</span><br>
                <p>
                    <price class="price_land_s2 js_old_price">
                        {{ $prices[1]['originalPrice'] }}
                    </price>
                    <price class="price_land_curr js_curs">
                        RSD
                    </price>
                </p>
                <span style="font-size: 22px;color: #ffe100;">Nova cena:</span><br>
                <span>
                     <price class="price_land_s1 js_new_price">
                        {{ $prices[1]['amount'] }}
                     </price>
                     <price class="price_land_curr js_curs">
                        RSD
                     </price>
                  </span>
            </div>
        </div>
        <form id="zakaz" class="m1-form orderformcdn" method="post" action="{{$orderRoute}}">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="input-phone field" name="name" type="text" placeholder="Ime i prezime" required="">
            <input class="input-phone field only_number" name="phone" type="tel" placeholder="Telefon" required="">
            <input class="input-phone field" name="shipping_address" type="text" placeholder="Adresa" required="">
            <input class="input-phone field" name="shipping_city" type="text" placeholder="Grad" required="">
            <button class="button-m js_submit">Poručite sada</button>
        </form>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.reviews').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>