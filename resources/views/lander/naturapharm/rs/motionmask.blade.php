<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/skleker1/doska-03.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/skleker1/styles.css">
    <style>
        html{scroll-behavior: smooth}
        .offer_section .bull>li:nth-child(1) {
            background: url("{{ asset('/') }}naturapharmFiles/motionmask/doska-10.png") 50% 10px no-repeat;
        }

        .offer_section .bull>li:nth-child(2) {
            margin-top: 30px;
            background: url("{{ asset('/') }}naturapharmFiles/motionmask/doska-11.png") 50% 0 no-repeat;
        }

        .offer_section .bull>li:nth-child(3) {
            background: url("{{ asset('/') }}naturapharmFiles/motionmask/doska-12.png") 50% 10px no-repeat;
        }
        .main_title {
            line-height: 0.9;
        }
        .main_title span {
            font-size: 24px;
            letter-spacing: initial;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title"><span>KUPITE MOĆNU MOTION MASKU<br>ZA POVEĆANJE SNAGE I IZDRŽLJIVOSTI</span></h1>
        <div class="offer_image">
            <p class="main_subtitle"></p>
            <img class="offer_product" src="{{ asset('/') }}naturapharmFiles/motionmask/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>BESTSELLER </span> U 2022!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">AKCIJA <span>-40%</span> </div>
            <div class="item old">Redovna cena:<br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> {{ $prices[1]['currency'] }}</small>
            </div>
            <div class="item new">CENA SADA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> {{ $prices[1]['currency'] }}</small>
            </div>
        </div>
        <ul class="bull clearfix">
            <li>Povećajte snagu i izdržljivost</li>
            <li>Pojačajte kapacitet pluća</li>
            <li>Sagorite masnoću</li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
    </header>
    <section class="sect_2 gradient_theme">
        <br>
        <h2 class="title separator"><span>INOVATIVNA MASKA </span> ZA POVEĆANJE SNAGE</h2>
        <p>Motion Mask je dizajnirana da primenjuje promenljive nivoe protoka vazduha do pluća, što povećava napetost mišića i povećanje snage do 30%.</p>
        <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-01.jpg" alt="Push-up board">
        <p>Spalite masti - formirajte mišiće - Naučno je dokazano da maska za trening povećava nivo hormona rasta u vašem telu do 25%.
            Povećan hormon rasta će vam pomoći da sagorite više masti i formirate mišiće mnogo brže nego
            pri običnom treniranju bez maske.</p>
        <div class="info"></div>
    </section>
    <section class="sect_3">
        <br>
        <h2 class="title">Prednosti <span>MASKE ZA TRENING</span></h2>
        <ul class="list_4">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-03.png" alt="Push-up board">
                <p>Povećanje opterećenja disanja tokom vežbanja je u znatnoj meri povećava kapacitet pluća.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-04.png" alt="Push-up board">
                <p>Veći kapacitet pluća povećaće vašu izdržljivost i dati vam dodatnu snagu.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-05.png" alt="Push-up board">
                <p>Trošenjem više snage i energije na fizičke aktivnosti ekstremno brzo se sagorevaju masne naslage.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-06.jpg" alt="Push-up board">
                <p>Maska je namenjena kako rekreativcima, tako i profesionalnim sportistima.</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
    </section>
    <section class="sect_4 gradient_theme">
        <br>
        <h2 class="title">Osnovne <span> KARAKTERISTIKE</span></h2>
        <ul class="char_list">
            <li><span>Materijal:</span> Elastin, plastika, guma</li>
            <li><span>Broj ventila: </span> Tri</li>
            <li><span>Vrsta kačenja: </span> čičak</li>
            <li><span>Boja: </span> Crna</li>
        </ul>
    </section>
    <section class="sect_5">
        <br>
        <h2 class="title"><span>1449 LJUDI </span> JE OCENILO OVAJ PROIZVOD</h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-07.jpg" alt="Push-up board">
                <p class="name">MARKO</p>
                <p class="text">Konačno sam pronašao masku koja mi u potpunosti odgovara za trening.
                    Za mesec dana sam mnogo dobio na kondiciji, mogu da istrčim oko 10 kilometara više u odnosu na prethodni period.</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-08.jpg" alt="Push-up board">
                <p class="name">RADE</p>
                <p class="text">Retko pišem recenzije, ali ovo je zaista odličan proizvod vredan svakog dinara. Kupio sam ga pre par nedelja i skoro svaki dan vežbam.
                    Doveo sam svoje telo u zavidnu liniju, a ranije sam uvek imao problema sa viškom kilograma.
                    Preporučujem ovu masku za vežbanje.</p>
            </div>
            <div class="rev_item stars">
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/doska-09.jpg" alt="Push-up board">
                <p class="name">TAMARA</p>
                <p class="text">Poklonila mi je supruga za rođendan. Idealna je za vežbanje, nisam znao da mogu da imam toliko snage i energije. Razne proizvode
                    za treniranje sam do sada probao, ali ovaj je odličan!</p>
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
                <img src="{{ asset('/') }}naturapharmFiles/motionmask/order_3.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Garancija </h4>
                    <p>100% garancija kvaliteta. Ukoliko ne budete zadovoljni proizvodom vratićemo vam novac.</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="offer_section offer_bot">
        <h1 class="main_title"><span>KUPITE MOĆNU</span><br> MOTION MASKU </h1>
        <div class="offer_image">
            <p class="main_subtitle">ZA POVEĆANJE SNAGE I IZDRŽLJIVOSTI</p>
            <img class="offer_product" src="{{ asset('/') }}naturapharmFiles/motionmask/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>Bestseller </span> u 2022!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">AKCIJA <span>-40%</span></div>
            <div class="item old">Redovna cena: <br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> {{ $prices[1]['currency'] }}</small>
            </div>
            <div class="item new">CENA SADA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> {{ $prices[1]['currency'] }}</small>
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
@include('components.pixel_footer')
</body>
</html>
