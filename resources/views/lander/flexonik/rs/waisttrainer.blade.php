<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        @font-face {
            font-family: "PT Sans Caption Bold";
            src: url('{{ asset('/') }}fonts/pt-sans-caption-bold.ttf');
        }
        @font-face {
            font-family: "PT Sans Caption";
            src: url('{{ asset('/') }}fonts/pt-sans-caption.ttf');
        }
        @font-face {
            font-family: "Lobster";
            src: url('{{ asset('/') }}fonts/lobster-regular.ttf');
        }
        @font-face {
            font-family: "Roboto Medium";
            src: url('{{ asset('/') }}fonts/robotomedium.ttf');
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/waisttrainer/index.css" media="all">
</head>
<body>
<div id="block1">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h1>WAIST TRAINER</h1>
                <p>Korset od lateksa za smanjenje struka</p>
                <div class="info left">
                    <ul class="effects">
                        <li>Zateže figuru</li>
                        <li>Čini struk privlačnim</li>
                    </ul>
                    <div class="prices">
                        <span class="old">
                           <span class="js_old_price price_land_s4">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           <span class="js_curs price_land_curr">RSD</span>
                        </span>
                        <span class="new">
                           <span class="js_new_price price_land_s1">
                              {{ $prices[1]['amount'] }}
                           </span>
                           <span class="js_curs price_land_curr">RSD</span>
                        </span>
                    </div>
                </div>
                <div class="product right">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product-320.png" alt="Товар">
                </div>
            </div>
            <div class="column right">
                <form method="post" class="right" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input value="" class="inp" placeholder="Ime i prezime" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Telefon" name="phone" type="text">
                    <input class="inp js_submit" value="Poručite sada" type="submit">
                </form>
            </div>
            <img class="arrow" src="{{ asset('/') }}flexonikFiles/waisttrainer/arrow-pic.png" alt="Стрелка">
        </div>
    </div>
</div>
<div id="block2">
    <div class="center-wrapper">
        <div class="content">
            <h2 id="value">Vaš struk će biti savršen</h2>
            <p class="description">Smanjujte struk postepeno i efikasno uz pomoć Waist Trainer korseta.</p>
            <div class="clearfix">
                <div class="value left">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3-320.jpg" alt="">
                    <h3>Efikasan i koristan</h3>
                    <p>Korektivni korset Waist Trainer je inovacija u oblasti estetike i opreme za vežbanje. Ovo je neverovatan i jedinstven
                        proizvod za efikasan i brz gubitak težine. Korset pomaže brzom oslobađanju od opuštenog stomaka i viška kilograma.
                        Postignuti efekat je prirodan i trajan, što je veoma važno.</p>
                </div>
                <div class="value right">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4-320.jpg" alt="">
                    <h3>Prijatan za nošenje</h3>
                    <p>Waist Trainer nema čvrst okvir tako da ne stvara nikakav pritisak i ne ometa rad unutrašnjih organa, veoma je udoban
                        i prijatan za nošenje u svakodnevnom životu i pri bavljenju sportom što pomaže da se dobije željeni oblik u najkraćem mogućem roku.</p>
                </div>
                <div id="expert" class="value left">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5-320.jpg" alt="">
                    <h3>Smanjuje obim struka</h3>
                    <p>Korset efikasno pomaže da se smanji obim struka. Pričvršćuje se za tri reda kukica, zahvaljujući kojima možete smanjiti
                        veličinu korseta prilikom mršavljenja bez kupovine novog korseta manje veličine. Korset ne samo da koriguje struk, već i poboljšava
                        cirkulaciju krvi, ispravlja držanje i smanjuje veličinu stomaka.</p>
                </div>
                <div class="value product right">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6-320.jpg" alt="">
                    <h3>100% kvalitetan</h3>
                    <p>Naši visokokvalitetni korseti se potpuno razlikuju od onih koji se prodaju u prodavnicama donjeg veša. Obični korseti se prave od čeličnih
                        šipki iznutra, što stvara jaku nelagodnost a može biti i dosta traumatično za unutrašnje organe.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="block3">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                <div class="prices">
                     <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
            </div>
            <div class="column right">
                <form method="post" class="right" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input value="" class="inp" placeholder="Ime i prezime" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Telefon" name="phone" type="text">
                    <input class="inp js_submit" value="Poručite sada" type="submit">
                </form>
            </div>
            <div class="product">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<div id="block4">
    <div class="center-wrapper">
        <div class="content">
            <div class="section">
                <div class="text right">
                    <h2 id="composition">LEPOTA</h2>
                    <ul>
                        <li>Smanjuje struka do -17cm</li>
                        <li>Ne ograničava kretanje - Kreirajte savršenu figuru bez ikakvih ograničenja</li>
                    </ul>
                </div>
                <img class="left for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1.jpg" alt="">
                <img class="left for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1.jpg" alt="">
                <img class="left for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1-320.jpg" alt="">
            </div>
            <div class="section">
                <div class="text left">
                    <h2>ZDRAVLJE</h2>
                    <ul>
                        <li>Savršen nakon porođaja. Vaša figura ne samo da će se vratiti u stanje pre porođaja, već vrlo brzo može postati savršenija nego ikad</li>
                        <li><b>"Kraljevsko držanje"</b> - Održava leđa uspravnim čineći vaš hod gracioznim</li>
                    </ul>
                </div>
                <img class="right for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2.jpg" alt="">
                <img class="right for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2.jpg" alt="">
                <img class="right for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2-320.jpg" alt="">
            </div>
            <div class="section">
                <div class="text right">
                    <h2>ZAŠTO NOSITI KORSET NA TRENINGU?</h2>
                    <img class="left inside" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img4.jpg" alt="">
                    <ul>
                        <li>Održava leđa pravim, eliminišući povrede tokom vežbanja</li>
                        <li>Maksimalni efekat vežbi, korset će vam omogućiti da pažljivije razradite problematična područja</li>
                        <li>Smanjivanje apetita, korset će vam pomoći da se maksimalno fokusirate na trening</li>
                    </ul>
                </div>
                <img class="right outside" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img4.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div id="block5">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                <div class="prices">
                     <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
            </div>
            <div class="column right">
                <form method="post" class="right" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input value="" class="inp" placeholder="Ime i prezime" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Telefon" name="phone" type="text">
                    <input class="inp js_submit" value="Poručite sada" type="submit">
                </form>
            </div>
            <div class="product">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<div id="block6">
    <div class="center-wrapper">
        <div class="content">
            <h2 id="reviews">Utisci naših kupaca</h2>
            <div class="review">
                <figure>
                    <figcaption class="person for640"></figcaption>
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/block6-img1.jpg" alt="">
                    <figcaption class="person for990"></figcaption>
                </figure>
                <p class="weight">Darija Bogdanović, 41 godina</p>
                <p class="labels">
                </p>
                <p class="text">
                    Konačno sam dobila svoj korset, nestvarno je!!! Uzela sam ga u ruke i nisam verovala da tako tanak korset može da napravi dobar efekat.
                    Ali, kada sam ga obukla, shvatila sam da je to ljubav na prvi pogled. VRHUNSKI!!! Moj dečko je očaran mojim izgledom! Hvala!
                </p>
            </div>
            <div class="review">
                <figure>
                    <figcaption class="person for640"></figcaption>
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/block6-img2.jpg" alt="">
                    <figcaption class="person for990"></figcaption>
                </figure>
                <p class="weight">Tatjana Ivanović, 36 godina</p>
                <p class="labels">
                </p>
                <p class="text">
                    I evo mog rezultata. Poručila sam korset da "ispravim figuru", ispostavilo se da on osim što pravi idealan struk, podiže grudi i ispravlja leđa.
                    Jednostavno magija! Prilično je udoban za nošenje, nije primetan ispod odeće. Veoma sam zadovoljna i hvala vam na kvalitetnom proizvodu. Šteta
                    što fotografija ne prenosi pun efekat.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="block7">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                <div class="prices">
                     <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
            </div>
            <div class="column right">
                <form method="post" class="right" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input value="" class="inp" placeholder="Ime i prezime" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Telefon" name="phone" type="text">
                    <input class="inp js_submit" value="Poručite sada" type="submit">
                </form>
            </div>
            <div class="product">
                <img class="for2890" src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
                <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
                <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/product.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('a[href].menu').click(function (e) {
            e.preventDefault();
            $("html, body").animate({scrollTop: $($(this).attr('href')).offset().top - 80}, 1000);
            return false;
        });
    });
</script>
</body>
</html>