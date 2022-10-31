<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="ANATOMSKI JASTUK">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/favicon02ed1.ico.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/favicon02ed1.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/style.css" type="text/css">
    <style>
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro-Light.woff2") format('woff2'),
            url("{{ asset('/') }}fonts/GothamPro-Light.woff") format('woff'),
            url("{{ asset('/') }}fonts/GothamPro-Light.ttf") format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro.woff2") format('woff2'),
            url("{{ asset('/') }}fonts/GothamPro.woff") format('woff'),
            url("{{ asset('/') }}fonts/GothamPro.ttf") format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro-Medium.woff2") format('woff2'),
            url("{{ asset('/') }}fonts/GothamPro-Medium.woff") format('woff'),
            url("{{ asset('/') }}fonts/GothamPro-Medium.ttf") format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.woff2") format('woff2'),
            url("{{ asset('/') }}fonts/GothamPro-Bold.woff") format('woff'),
            url("{{ asset('/') }}fonts/GothamPro-Bold.ttf") format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <div class="header">
        <h1 class="uppercase center white b green_bg">ERGONOMIC CUSHION</h1>
        <h2 class="uppercase center white">ANATOMSKI JASTUK ZA SEDENJE</h2>
        <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/header.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (glasova: 526)</div>
        </div>
        <div class="timer_price">
            <div class="timer_block clearfix">
                <p>ISKORISTITE</p>
                <div class="timer b clearfix">
                    <p>SPECIJALNI <br/> POPUST</p>
                </div>
            </div>
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
                <div class="sale">
                    -50%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">PORUČITE SADA</a>
        <div class="guard_all">
            <div class="guard">Sigurna kupovina</div>
            <div class="products_count prod1">Preostalo još <b>16</b> komada!</div>
        </div>
    </div>
    <section class="opisanie">
        <h2 class="venzel"><span class="green">ANATOMSKI JASTUK</span> <b>Ergonomic Cushion</b></h2>
        <img alt="Egg Sitter" title="Ergonomic Cushion" class="center" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/9.jpg">
        <p class="justify">Ovaj jastuk za sedenje je najprodavaniji jastuk na evropskom i svetskom tržištu.</p>
        <img alt="Egg Sitter" title="Ergonomic Cushion" class="center" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/8.jpg">
        <p class="justify">Koriste ga svi koji dugo sede jer smanjuje pritisak na kičmu i drži leđa u pravilnom položaju.
            Pri dugom sedenju stvara se izrazito jak pritisak na pršljenove i dolazi do bolova i deformiteta.
            Ovaj jastuk to eliminiše.</p>
        <p class="justify">Veoma je udoban, napravljen je od bambusnog poliestera i viskoze. Jako je mekan i kroz njega vazduh cirkuliše.
            Zahvaljujući tome ne dolazi do znojenja i stvaranja nelagodnog osećaja pri dugom sedenju.</p>
        <div class="header">
            <img alt="Ergonomic Cushion" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/7.jpg">
            <div class="timer_price">
                <div class="timer_block clearfix">
                    <p>ISKORISTITE</p>
                    <div class="timer b clearfix">
                        <p>SPECIJALNI <br/> POPUST</p>
                    </div>
                </div>
                <div class="price">
                    <div class="old">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                    <div class="sale">
                        -50%
                    </div>
                    <div class="new b">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button-m">PORUČITE SADA</a>
        </div>
    </section>
    <section style="margin-top: 20px;">
        <div class="gallery">
            <div>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/10.jpg"  width="100%" height="100%">
            </div>
            <div>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/11.jpg" width="100%" height="100%">
            </div>
            <div>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/12.jpg" width="100%" height="100%">
            </div>
        </div>
    </section>
    <section>
        <ul class="spisok ul_black black_ul">
            <li>Drži leđa i telo u pravilnom položaju</li>
            <li>Smanjuje pritisak na kičmu i pršljenove</li>
            <li>Oslobađa bola u donjim leđima</li>
            <li>Smanjuje znojenje zadnjice i butina</li>
            <li>Omogućava pravilno sedenje</li>
            <li>Prevencija u stvaranju hemoroida</li>
        </ul>
        <p><a href="#order_form" class="button-m">PORUČITE SADA</a></p>
    </section>
    <section>
        <h2 class="venzel"><span class="green">Karakteristike</span> <b>Ergonomic Cushion</b></h2>
        <ul class="ul_str">
            <li><span>Materijal: </span>bambusni poliester, viskoza</li>
            <li><span>Dimenzije:  </span>44 x 34 cm</li>
            <li><span>Debljina:  </span>5 cm</li>
            <li><span>Navlaka:  </span>1 komad</li>
        </ul>
    </section>
    <img alt="Egg Sitter" title="Ergonomic Cushion" class="center" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/img-4.jpg">
    <p><a href="#order_form" class="button-m">PORUČITE SADA</a></p>
    <section class="b10 b10-avas">
        <h2 class="venzel"><span class="green">Utisci kupaca</span> <b>Ergonomic Cushion</b></h2>
        <div class="hit clearfix">
            <div class="hit-left">
                <p>hit sezone</p>
            </div>
            <div class="hit-right">
                <p>Ocena: <span>4.9 od 5</span></p>
            </div>
        </div>
        <div class="reviews">
            <div class="rev">
                <img style="border-radius: 60px;" alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/b11-ava988c6.jpg" width="100px" height="100px">
                <p>Radim dugo u kancelariji i često sam imala probleme sa leđima, bolela su me donja leđa gotovo svaki dan.
                    Drugarica mi je preporučila ovaj jastuk i ja ne mogu da verujem koliko mi je pomogao. Bas je WOW.
                    Kupile su ga i moje koleginice, prosto su oduševljene.</p>
                <p class="name"><b>Helena</b> </p>
            </div>
            <div class="rev">
                <img style="border-radius: 60px;" alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/b10-ava436a4.jpg" width="100px" height="100px">
                <p>Vozim kamion a bolovi u leđima su problem svakog profesionalnog vozača. Kćerka mi je kupila ovaj jastuk, prvo ga nisam
                    koristio jer sam mislio da je neka bezveze stvar sa interneta, ali kada sam probao moram da vam priznam da sam se osećao
                    dosta lakše. Kao da sedim na oblaku, kilometri mi više nisu bitni, jer me leđa ne bole.</p>
                <p class="name"><b>Aleksandar</b></p>
            </div>
            <div class="rev">
                <img style="border-radius: 60px;" alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/b12-ava85e87.jpg" width="100px" height="100px">
                <p>Jastuk je neverovatan! Na prvi pogled mi se dopao. Tako je mekan da mogu da sedim satima i da se ne umorim.
                    Leđa me više ne bole. HVALA VAM!</p>
                <p class="name"><b>Marija</b></p>
            </div>
        </div>
    </section>
    <section>
        <ul class="deliv deliv1">
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv1-156500.png">
                <h3>Dostava</h3>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv1-2eddf4.png">
                <h3>Plaćanje</h3>
                <p>Plaćate kuriru brze pošte po prijemu pošiljke</p>
            </li>
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv1-3dec57.png">
                <h3>Garancija</h3>
                <p>Ukolio vam se proizvod ne dopadne vratićemo vam novac</p>
            </li>
            <br>
        </ul>
        <br>
    </section>
    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv_v2-1d44bd.png">
                <h3>Poručite</h3>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </li>
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv_v2-2f386d.png">
                <h3>Potvrda</h3>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv_v2-35f580.png">
                <h3>Slanje</h3>
                <p>Šaljemo vam paket po kuriru</p>
            </li>
            <li>
                <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/deliv_v2-431800.png">
                <h3>Preuzimanje</h3>
                <p>Preuzimate i plaćate na vašoj adresi</p>
            </li>
        </ul>
    </section>
    <div class="header footer">
        <h1 class="uppercase center white b green_bg">ERGONOMIC CUSHION</h1>
        <h2 class="uppercase center white">ANATOMSKI JASTUK ZA SEDENJE</h2>
        <img alt="Egg Sitter" title="Ergonomic Cushion" src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/header.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (glasova: 526)</div>
        </div>
        <h3>PORUČITE <b>ODMAH</b></h3>
        <div class="posttile">U najkraćem roku ćemo potvrditi Vašu porudžbinu i zakazati slanje.</div>
        <div class="timer_price">
            <div class="timer_block clearfix">
                <p>ISKORISTITE</p>
                <div class="timer b clearfix">
                    <p>SPECIJALNI <br/> POPUST</p>
                </div>
            </div>
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
                <div class="sale">
                    -50%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <form id="order_form" class="m1-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" name="name" type="text" placeholder="Ime i prezime">
            <input class="field" name="phone" type="tel" placeholder="Telefon">
{{--                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>--}}
{{--                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>--}}
            <button class="button-m">PORUČITE SADA</button>
        </form>
        <div class="guard_all">
            <div class="guard">Sigurna kupovina</div>
            <div class="products_count prod1">Preostalo još <b>16</b> komada!</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/ergonomiccushion/lightbox.mincca13.js"></script>
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
