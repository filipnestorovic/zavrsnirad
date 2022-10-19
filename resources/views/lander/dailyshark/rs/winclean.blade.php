<!DOCTYPE html>
<html lang="ru-RU">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/winclean/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/winclean/styles.css">
    <style>
        @font-face {
            font-family: 'Intro';
            src: url('{{ asset('/') }}fonts/subset-Intro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-Intro.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-Intro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="wrapper">
        <div class="container clearfix">
            <div class="title">
                <h1 class="main_title">WinClean</h1>
                <h2 class="main_subtitle">INOVATIVNI BRISAČ ZA PROZORE</h2>
            </div>
            <ul class="top_bull">
                <li><b>Višestruko smanjenje potrošnju deterdženta</b></li>
                <li><b>Znatna ušteda novca i vremena</b></li>
            </ul>
        </div>
        <div class="sale">popust <span>-40%</span></div>
        <ul class="ofr_bull">
            <li>Čisti prozore <br/> 2 puta brže</li>
            <li>Ne ostavlja <br/> tragove ni pruge</li>
            <li>Štedi vreme <br/> i deterdžent</li>
        </ul>
        <div class="price clearfix">
            <div class="old">
                Redovna cena:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Cena sada:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="action_block clearfix">
            <div class="left">
                <div class="prod_count">AKCIJA je samo danas i do kraja dana možete poručiti po <span>sniženoj ceni od 40%</span></div>
            </div>
            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</header>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Zašto je WinClean <span>toliko popularan?</span></h2>
        <ul class="benef1">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img1.png" alt="">
                <span>Kvalitetno čišćenje prozora</span>
                <p>Istovremeno pere, briše i polira staklene površine prozora. Jedan brisač radi sve!</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img2.png" alt="">
                <span>Sigurnost pranja na gornjim spratovima</span>
                <p>Prozor perete iznutra, a magnetni brisač ide sa spoljašne strane.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img3.png" alt="">
                <span>Ušteda novca na uslugama čišćenja</span>
                <p>Sada možete i sami da operete prozore sa spoljašne strane, čak i na poslednjem spratu solitera.</p>
            </li>
        </ul>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <div class="gif_block">
            <h3>
                <small>POGLEDAJ KAKO JE</small>
                <span>LAKO I JEDNOSTAVNO</span>
                ČIŠĆENJE STAKLA MAGNETNIM BRISAČIMA
            </h3>
            <img src="{{ asset('/') }}dailysharkFiles/winclean/gif.gif" alt="">
            <ul>
                <li>Magnetne ploče fiksiraju brisače sa obe strane prozora</li>
                <li>Udobna ručka od kvalitetne plastike</li>
                <li>Konopac i ručni prsten za kontrolu brisača</li>
                <li>Specijalni polimerni umetci brišu i poliraju staklo</li>
            </ul>
            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
        <h2 class="title"><span>KAKO RADI</span> MAGNETNI BRISAČ ZA ČIŠĆENJE PROZORA</h2>
        <div class="product_list">
            <div class="plus clearfix">
                <div class="strength">25 <small>KG</small></div>
                <p>Sila prianjanja magneta</p>
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/winclean/product.jpg" alt="">
            <img src="{{ asset('/') }}dailysharkFiles/winclean/product2.jpg" alt="" class="tab_v">
            <ul>
                <li>
                    <span>01</span>
                    <p>Udobna ručka od visokokvalitetne plastike</p>
                </li>
                <li>
                    <span>02</span>
                    <p>Magnetne ploče iznutra pričvršćuju brisače sa obe strane</p>
                </li>
                <li>
                    <span>03</span>
                    <p>Površine od meke tkanine ravnomerno raspoređuju penu po prozoru</p>
                </li>
                <li>
                    <span>04</span>
                    <p>Kabl za kontrolu četke</p>
                </li>
                <li>
                    <span>05</span>
                    <p>Specijalni polimerni umetci brišu i poliraju staklo</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><span>OČISTITE PROZORE</span> U SAMO 4 KORAKA</h2>
        <p class="subtitle">Brzo, ali u isto vreme kvalitetno čišćenje prozora je sada realnost!</p>
        <ul class="benef3 clearfix">
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img1.jpg" alt=""></div>
                <span>01</span>
                <div class="text">
                    <span>Korak 1</span>
                    <p>Nanesite čisto vodu <br>ili poseban rastvor na prozor pomoću boce sa raspršivačem.</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img2.jpg" alt=""></div>
                <span>02</span>
                <div class="text">
                    <span>Korak 2</span>
                    <p>Potopite četke u deterdžent<br> i postavite ih na obe strane stakla (nakon što pričvrstite gajtan na ruci)</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img3.jpg" alt=""></div>
                <span>03</span>
                <div class="text">
                    <span>Korak 3</span>
                    <p>Magnetgnom četkom nežno i glatko rasporedite proizvod po celoj površini prozora</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img4.jpg" alt=""></div>
                <span>04</span>
                <div class="text">
                    <span>Korak 4</span>
                    <p>Nakon što operete prozore,<br> uklonite četku sa stakla, isperite sunđere za četkice običnom vodom.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="sect7 color_theme">
    <div class="wrapper">
        <h2 class="title"><span>ZADOVOLJNI KUPCI</span> KOJI SU OCENILI WINCLEAN</h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev1.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava1.jpg" alt="">
                        <p><span>Vanja Jović</span> 34 godine</p>
                    </div>
                    <span>"Praktičan alat za čišćenje!"</span>
                    <p>Juče mi je kurir doneo magnetnu četku i već danas sam je isprobao. Supruga i ja smo uradili generalno čišćenje stana.
                        Oprao sam prozore i mogu vam reći da je četka zaista vredna novca. Trebalo mi je oko 20 minuta da operem sve prozore, ne više.
                        Prozori su kristalno čisti, kako spolja tako i iznutra. Definitivno preporučujem takav alat svima!</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev2.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava2.jpg" alt="">
                        <p><span>Olivera Jakšić</span> 29 godina</p>
                    </div>
                    <span>"Više se ne plašim da perem prozore"</span>
                    <p>Užasno se plašim visine i zato nikada ne perem prozore, uvek zovem muža.
                        Videla sam magnetnu četku na vašoj web stranici i odlučila sam da je poručim. Isporučeno je za 2 dana.
                        Prvog sunčanog dana sam je upotrebila i mogu vam reći da sam prezadovoljna. Ovo je odlično rešenje za sve koji se plaše visine.
                        Sada mogu vrlo lako da perem svoje prozore. Toplo preporučujem ovu četku svima.</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev3.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava3.jpg" alt="">
                        <p><span>Katarina Zakić</span> 40 godina</p>
                    </div>
                    <span>"Problem sa prljavim prozorima je rešen"</span>
                    <p>Imam veoma visoke prozore u kući, jednostavno ih je nemoguće oprati sa obe strane.
                        Kada sam videla ovu magnetnu četku, rekoh hajde zašto da ne probam.
                        WOW - ne mogu vam opisati koliko ovo dobro radi. Istovremeno pere spolja i iznutra i ne ostavlja tragove.
                        Konačno više ne moramo da plaćamo perače prozora 2 puta godišnje. Drago mi je što sam uspela da pronađem ovu četku.</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect8">
    <div class="wrapper">
        <h2 class="title"><span>KAKO PORUČITI</span> WinClean</h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order1.png" alt="">
                <span>1</span>
                <p><b>Porudžbina</b> Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order2.png" alt="">
                <span>2</span>
                <p><b>Potvrda</b> Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order3.png" alt="">
                <span>3</span>
                <p><b>Slanje</b> Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order4.png" alt="">
                <span>4</span>
                <p><b>Plaćanje</b> Plaćate kuriru po prijemu pošiljke</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper">
        <div class="container clearfix">
            <div class="title">
                <h3 class="main_subtitle"><span>ODMAH OČISTITE</span><br/> PROZORE SA OBA STRANE! </h3>
            </div>
            <ul class="top_bull">
                <li><b>Višestruko smanjenje potrošnju deterdženta</b></li>
                <li><b>Znatna ušteda novca i vremena</b></li>
            </ul>
        </div>
        <div class="sale">popust <span>-40%</span></div>
        <div class="price clearfix">
            <div class="old">
                Redovna cena:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Cena sada:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="formbox" id="order_form">
            <h4>Podaci za dostavu</h4><br>
            <form class="main-order-form m1-form" action="{{$orderRoute}}" method="post" >
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="">
                <input type="text" name="shipping_address" placeholder="Adresa" required="">
                <input type="text" name="shipping_city" placeholder="Grad" required="">
                <button class="button-m" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        /* scroll */
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
<style>
    input {
        height: 50px !important;
    }
</style>
@include('components.pixel_footer')
</body>
</html>
