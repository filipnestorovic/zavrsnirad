<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
@include('components.display_errors')
<section class="topline">
    <div class="wrap">
        <ul>
            <li><a href="#1">Prednosti</a></li>
            <li><a href="#2">Specifikacija</a></li>
            <li><a href="#3">Opis</a></li>
            <li><a href="#4">Recenzije</a></li>
            <li><a href="#5">Dostava</a></li>
        </ul>
    </div>
</section>
<section class="block1">
    <div class="wrap">
        <h1><span>Grejač za vosak Pro - Wax 100</span></h1>
        <span class="sale">SA POPUSTOM OD 40%</span>
        <div class="produkt"></div>
        <div class="conversion" style="text-align: center;">
            <div class="prices">
                  <span class="old-cost price_old">
                     {{ $prices[1]['originalPrice'] }} RSD
                  </span>
                <span class="new-cost price_main">
                     {{ $prices[1]['amount'] }} RSD
                  </span>
            </div>
            <a href="#buy" class="button">Poručite sada</a>
        </div>
    </div>
</section>
<section class="block2" id="1">
    <div class="wrap">
        <ul class="clrfx">
            <li>
                <i class="fas fa-star"></i>
                <h3>100% ORIGINAL</h3>
                MI BRINEMO O VAMA I NUDIMO SAMO KVALITETNE PROIZVODE
            </li>
            <li>
                <i class="fas fa-truck"></i>
                <h3>NISKE CENE</h3>
                CENE ISPOD TRŽIŠNIH ZBOG DIREKTNE NABAVKE OD PROIZVOĐAČA
            </li>
            <li>
                <i class="far fa-credit-card"></i>
                <h3>KONTROLA KVALITETA</h3>
                DO SADA NIJE BILO POVRATA ROBE I REKLAMACIJA
            </li>
            <li>
                <i class="fas fa-shield-alt"></i>
                <h3>BRZA ISPORUKA</h3>
                ISPORUKA BILO GDE U SRBIJI U ROKU OD 1-2 RADNA DANA
            </li>
        </ul>
    </div>
</section>
<section class="block3" id="2">
    <div class="wrap">
        <h2 class="btitle">Karakteristike</h2>
        <div class="gallery">
            <div class="my-gallery">
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-1.jpeg" alt="ProVax" title="ProVax"></div>
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-2.jpeg" alt="ProVax" title="ProVax"></div>
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-3.jpeg" alt="ProVax" title="ProVax"></div>
            </div>
        </div>
        <div class="char clrfx">
            <ul class="left-char">
                <li>
                    <h3>SNAGA:</h3>
                    100W
                </li>
                <li>
                    <h3>ZAPREMINA REZERVOARA:</h3>
                    450ml
                </li>
                <li>
                    <h3>NAPON:</h3>
                    110V/220V/240V
                </li>
                <li>
                    <h3>BOJA:</h3>
                    bela
                </li>
            </ul>
            <ul class="right-char">
                <li>
                    <h3>BROJ TEMPERATURNIH REŽIMA:</h3>
                    3
                </li>
                <li>
                    <h3>DUŽINA KABLA ZA NAPAJANJE:</h3>
                    1.5 M
                </li>
                <li>
                    <h3>TEŽINA:</h3>
                    0,39 KG
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="block4" id="3">
    <div class="wrap">
        <div class="leftside">
            <h2 class="btitle"><span>OPIS</span></h2>
            <article>
                <b><span>Grejač za vosak Pro - Wax 100 topi vosak u limenkama ili u čaši. Mala zapremina limenke (450ml) omogućava da se uspešno koristi ne samo u salonima
nego i kod kuće jer može da se radi sa malo voska u opticaju. Pro - Wax 100 grejač voska poseduje termostat za izbor temperature topljenja od 45 do 105 stepeni.
Uređaj može da radi konstantno, održavajući ugodnu temperaturu parafina ili voska tokom čitave procedure.</span></b>
            </article>
        </div>
        <div class="rightside">
            <div class="produkt"></div>
            <a href="#buy" class="button">Poručite sada</a>
        </div>
    </div>
</section>
<section class="block5" id="4">
    <div class="wrap">
        <h2 class="btitle">UTISCI <span>KUPACA</span></h2>
        <ul class="reviews">
            <li class="r1">
                <h3>Ivana Krunić</h3>
                <p>San svake devojke je da može da se depilira kod kuće. Videla sam ovaj proizvod, nisam mogla da mu odolim i kupila sam ga.
                    Isporučeno mi je vrlo brzo i odmah sam ga probala. Devojke poručite, nećete se pokajati! :)</p>
            </li>
            <li class="r2">
                <h3>Elena Maksimović</h3>
                <p>Izbegavala sam kozmetičke salone jer su veoma skupi. Poručila sam ovo čudo i sada se depiliram bez problema. Nije ništa lošije nego u salonima! Toplo preporučujem.</p>
            </li>
            <li class="r3">
                <h3>Lidija Vučković</h3>
                <p>Ova topilica voska je cool! :) Veoma je kvalitetna, odlično radi, a ja sam bez i jedne dlačice na telu! Za taj novac, može se reći da sam džaba prošla. </p>
            </li>
        </ul>
    </div>
</section>
<section class="block6" id="5">
    <div class="wrap">
        <h2 class="btitle">KAKO <span>RADIMO</span></h2>
        <ul class="as clrfx">
            <li>
                <i class="fas fa-clipboard-list"></i>
                <h3>PORUČIVANJE</h3>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </li>
            <li>
                <i class="fas fa-clipboard-check"></i>
                <h3>POTVRDA PORUDŽBINE</h3>
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <i class="fas fa-truck"></i>
                <h3>SLANJE</h3>
                <p>Paket šaljemo u roku od 1-2 radna dana</p>
            </li>
            <li>
                <i class="fas fa-credit-card"></i>
                <h3>PLAĆANJE</h3>
                <p>Robu plaćate kuriru po prijemu pošiljke</p>
            </li>
        </ul>
        {{--<p class="note">Dostava почтой <b>от 7 рабочих дней в зависимости от региона,</b><br> Вы вправе отказаться от покупки <b>в течение 14 дней</b> с момента получения заказа</p>--}}
    </div>
</section>
<section class="topline">
    <div class="wrap">
        <ul>
            <li><a href="#1">Prednosti</a></li>
            <li><a href="#2">Specifikacija</a></li>
            <li><a href="#3">Opis</a></li>
            <li><a href="#4">Recenzije</a></li>
            <li><a href="#5">Dostava</a></li>
        </ul>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2 class="show-medium">Grejač za vosak Pro - Wax 100</h2>
        <span class="fsale"><span class="show-large">POPUST</span><span class="show-medium">SA POPUSTOM</span> 40%</span>
        <div class="produkt"></div>
        <div class="formbox">
            <div class="prices">
                  <span class="old-cost price_old">
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </span>
                <span class="new-cost price_main">
                     {{ $prices[1]['amount'] }}
                     RSD
                  </span>
            </div>
            <form action="{{$orderRoute}}" method="post" id="buy">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="" >
                <input type="text" name="shipping_address" placeholder="Adresa" required="">
                <input type="text" name="shipping_city" placeholder="Grad" required="">
                <button class="button" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax/slick.css">
<script src="{{ asset('/') }}purplerelaxFiles/prowax/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('a[href^="#buy"], .topline a[href^="#"]').click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({ scrollTop: destination }, 800);
            return false;
        });
        $(".my-gallery").slick({ dots: false, infinite: true, speed: 200, fade: true, cssEase: "linear" });
        $(".reviews").slick({ dots: false, infinite: true, speed: 800, fade: false, cssEase: "linear" });
    });
</script>
@include('components.pixel_footer')
</body>
</html>