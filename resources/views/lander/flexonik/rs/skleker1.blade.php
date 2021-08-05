<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/skleker1/doska-03.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/skleker1/styles.css">
    <style>html{scroll-behavior: smooth}</style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title"><span>KUPITE MOĆNI SKLEKER</span></h1>
        <div class="offer_image">
            <p class="main_subtitle"></p>
            <img class="offer_product" src="{{ asset('/') }}flexonikFiles/skleker1/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>BESTSELLER </span> U 2021!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">AKCIJA <span>-40%</span> </div>
            <div class="item old">Stara cena:<br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> RSD</small>
            </div>
            <div class="item new">NOVA CENA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> RSD</small>
            </div>
        </div>
        <ul class="bull clearfix">
            <li>Pogađa sve grupe mišića u gornjem delu tela</li>
            <li>Fiksira zglob tokom vežbe</li>
            <li>Prenosiv i lagan za montažu i demontažu</li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
    </header>
    <section class="sect_2 gradient_theme">
        <br>
        <h2 class="title separator"><span>INOVATIVNA KUĆNA </span> SPRAVA ZA VEŽBANJE</h2>
        <p>Skleker je pogodan za sportiste svih nivoa i veština. Mogu se trenirati grudi, biceps, triceps, leđa i ramena na njemu.</p>
        <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-01.jpg" alt="Push-up board">
        <p>Višenamenska sprava za sklekove označena je bojama koje određuju položaje ručki za vežbanje određenih mišićnih grupa.
            Mogućnost promene položaja i ugla omogućava maksimalni efekat pokretanja željenih mišićnih grupa.</p>
        <div class="info"></div>
    </section>
    <section class="sect_3">
        <br>
        <h2 class="title">Prednosti <span> SPRAVE ZA SKLEKOVE</span></h2>
        <ul class="list_4">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-03.png" alt="Push-up board">
                <p>Intenzivno radi na svim mišićnim grupama u gornjem delu tela</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-04.png" alt="Push-up board">
                <p>Smanjuje verovatnoću povreda u poređenju sa standardnim sklekovima</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-05.png" alt="Push-up board">
                <p>Sklopivi dizajn značanjno smanjuje prostor za skladištenje i ukupnu težinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-06.jpg" alt="Push-up board">
                <p>Kompaktan i jednostavan za transport i idealan za trening u prirodi</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
        <!--      <img src="doska-02.jpg" alt="Push-up board"> -->
    </section>
    <section class="sect_4 gradient_theme">
        <br>
        <h2 class="title">Osnovne <span> KARAKTERISTIKE</span></h2>

        <ul class="char_list">
            <li><span>Materijal:</span> plastika visoke čvrstoće</li>
            <li><span>Dimenzije: </span> 65 x 19 x 9 CM</li>
            <li><span>Materijal ručki: </span> guma</li>
            <li><span>Boja: </span> višebojan</li>
        </ul>
    </section>
    <section class="sect_5">
        <br>
        <h2 class="title"><span>1349 LJUDI </span> JE VEĆ OCENILO OVAJ PROIZVOD</h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-07.jpg" alt="Push-up board">
                <p class="name">MARKO</p>
                <p class="text">Konačno sam pronašao proizvod koji mi zaista odgovara i ne skuplja prašinu. Kompaktan je, zgodan i mogu da radim pravilne sklekove sa njim.
                    Pogađa mišiće skoro celog tela, i veoma mi je drago što sam ga kupio.</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-08.jpg" alt="Push-up board">
                <p class="name">RADE</p>
                <p class="text">Retko pišem recenzije, ali ovo je zaista odličan proizvod vredan svakog dinara. Kupio sam ga pre par nedelja. Skoro svaki dan vežbam sa celom porodicom.
                    Lepo raspoređuje opterećenje na celo telo. Preporučujem ga za kućno vežbanje.</p>
            </div>
            <div class="rev_item stars">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-09.jpg" alt="Push-up board">
                <p class="name">TAMARA</p>
                <p class="text">Poklonila sam ga mužu za rođendan. Idealan je za kućne vežbe i on ga koristi svaki dan. Rekao je da će ga početi nositi sa sobom u park.
                    Porudžbina je stigla sutradan, sve je bilo kako je dogovoreno. Sve preporuke!</p>
            </div>
        </div>
    </section>
    <section class="sect_6">
        <br>
        <h2 class="title">KAKO PORUČITI <span> ISPORUKA I PLAĆANJE</span></h2>
        <ul class="order_list">
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_1.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Poručivanje</h4>
                    <p>Ostavite podatke na našem sajtu. Kontaktiraćemo Vas da potvrdimo porudžbinu.</p>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_2.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Isporuka</h4>
                    <p>Dostava brzom poštom u roku od 1-2 radna dana. Plaćanje po prijemu pošiljke.</p>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_3.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Garancija </h4>
                    <p>100% garancija kvaliteta. Ukoliko ne budeze zadovoljni proizvodom vratićemo vam novac.</p>
                </div>
            </li>
        </ul>
{{--        <div class="order_info">Your goods will arrive safe and sound within 1-3 days</div>--}}
    </section>
    <section class="offer_section offer_bot">
        <h1 class="main_title"><span>KUPITE </span><br> MOĆNI SKLEKER </h1>
        <div class="offer_image">
            <p class="main_subtitle">Za efektivno vežbanje kod kuće</p>
            <img class="offer_product" src="{{ asset('/') }}flexonikFiles/skleker1/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>Bestseller </span> u 2021!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">SALE <span>-50%</span></div>
            <div class="item old">Stara cena: <br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> RSD</small>
            </div>
            <div class="item new">NOVA CENA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> RSD</small>
            </div>
        </div>
        <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" placeholder="Ime i prezime" required="">
            <input type="tel" name="phone" placeholder="Broj telefona" required="">
            <input type="text" name="shipping_address" placeholder="Adresa" required="">
            <input type="text" name="shipping_city" placeholder="Grad" required="">
            <button class="button-m" type="submit">PORUČI ODMAH</button>
        </form>
    </section>
</div>
{{--<div class="foot_en_center" style="text-align: center; margin: 0px auto; padding: 30px;"></div>--}}
@include('components.pixel_footer')
</body>
</html>
