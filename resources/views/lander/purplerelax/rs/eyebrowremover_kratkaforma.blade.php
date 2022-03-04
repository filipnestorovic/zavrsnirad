<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover/sale.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover/style.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        @media (max-width: 480px){
            .block13 h1 {
                font-size: 39px;
                line-height: 48px;
                padding: 0;
            }
        }
        @media (min-width: 480px){
            .block2 {
                padding-top: 80px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block2">
    <div class="wrap">
        <h1 class="lt3">DEPILATOR ZA OBRVE</h1>
        <h1><span class="lt4">PERFECT EYEBROW</span></h1>
        <h1></h1>
        {{--<h2 class="lt5">+ <span>depilator za lice</span></h2>--}}
        <div class="slickken"><img alt="" class="product" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/product-1.png" title=""></div>
        <div class="sale lt6">Akcija!</div>
        {{--<div class="sale1"></div>--}}
        {{--<div class="sale-plus"></div>--}}
        <ul class="top-plus ul-fix">
            <li>
                <p class="lt7">Brzo, bezbolno i precizno</p>
            </li>
            <li>
                <p class="lt8">Lagan i lako prenosiv</p>
            </li>
            <li>
                <p class="lt9">Bez iritacija, upala i neželjenih efekata</p>
            </li>
        </ul>
        <div class="price clearfix">
            <div class="old-cost">
                <span class="lt14">Stara cena:</span>
                <p><span class="price_land_s2 price_old">{{ $prices[1]['originalPrice'] }} RSD</span></p>
            </div>
            <div class="new-cost">
                <span class="lt15">Nova cena:</span>
                <p><span class="price_land_s1 price_main">{{ $prices[1]['amount'] }} RSD</span></p>
            </div>
        </div>
        <div class="devmenu1">
            <a class="button-m devmenu1 lt16" href="#order_form">Iskoristite ponudu</a>
        </div>
        {{--<div class="stock lt17">Rimangono <span>23</span> depilatori in offerta</div>--}}
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2 class="title lt18">Savršeni depilator za obrve <span style="margin: 0 0 0 10px;">PERFECT EYEBROW</span></h2>
        <div class="videobox clearfix">
            <p>Koliko Vam se puta desilo da ste u žurbi, spremate se za posao, izlazak ili kafu sa prijateljicama i setite se da niste sredili obrve. Onda u žurbi tražite pincetu i na brzinu čupate obrve. Niste sigurni koliko ste to dobro odradili, a poprilično ste sigurni da nije ni moralo da bude <b>tako bolno</b>.</p>
        </div>
        <div class="videobox clearfix">
            <div class="videobox-left">
                <div class="video-container">
                    <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/gif1.webp">
                </div>
            </div>
            <div class="videobox-right">
                <p class="lt19">Upoznajte <b>neizostavan deo svake ženske tašne</b> – Perfect Eyebrow! Nema više potrebe za pincetom – ovaj uređaj brine o vašim obrvama.<br/>
                    Revolucionarni dizajn i napredna tehnologija spojeni sa samo jednom svrhom – <b>da vaše obrve budu savršene, svaki put, potpuno bezbolno</b>.<br/>
                    Perfect Eyebrow radi na baterije (1 KOM), sređuje vaše obrve, bez iritacija i neželjenih dejstava. Brzo i lako. Sjajno, zar ne?</p>
            </div>
        </div>
        <ul class="action-img ul-fix">
            <li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action1.jpg"></li>
            <li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action2.jpg"></li>
            <li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action3.jpg"></li>
        </ul>
    </div>
</section><!-- bizlife_inc -->
<section class="block4">
    <div class="wrap">
        <h2 class="title lt20">O proizvodu:<span></span></h2>
        <img alt="Perfection Brows" class="tovar hidden" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/brows-1.png">
        <ul class="job ul-fix">
            <li>
                <p class="lt21"><b>Materijal: </b>Plastika & metal</p>
            </li>
            <li>
                <p class="lt22"><b>Težina: </b>58g</p>
            </li>
            <li>
                <p class="lt23"><b>Veličina: </b>13 x 2 cm</p>
            </li>
            <li>
                <p class="lt24"><b>Napajanje: </b>1 AA baterija</p>
            </li>
        </ul>
        <div class="clear"></div>
        <ul class="before-after ul-fix">
            <li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/beaf1.jpg"></li>
            <li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/beaf2.jpg"></li>
        </ul>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <br>
        <h2 class="title"><span class="lt28">PREDNOSTI</span></h2>
        <ul class="good ul-fix">
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/good1.jpg">
                <p class="lt29">lak za upotrebu</p>
            </li>
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/good2.jpg">
                <p class="lt30">potrebna samo jedna baterija</p>
            </li>
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/good3.jpg">
                <p class="lt31">bez iritacija</p>
            </li>
        </ul>
        <div class="devmenu1">
            <a class="button-m lt32" href="#order_form">Poručite sada</a>
        </div>
    </div>
</section><!-- owmen17 -->
<section class="block6">
    <div class="wrap">
        <h2 class="title lt33">Utisci <span>korisnika</span></h2>
        <div class="reviews">
            <div class="rev clearfix">
                <div class="rev-img"><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev1.jpg"></div>
                <div class="rev-cont">
                    <div class="rev-person clearfix">
                        <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev-1.jpg">
                        <h3 class="lt34">Marija Purić</h3>
                    </div>
                    <p class="lt35">Sigurno najbolje otkriće ove godine! Trošim dosta vremena i truda na sređivanje obrva, ali sada je to stvar prošlosti. Epilator uklanja dlačice veoma nežno, ne oštećuje kožu i uopste nije neprijatan, što me je iznenadilo. Ovo je jedan od mojih omiljenih proizvoda za negu. Naravno, veliku zahvalnost dugujem Mariji, devojci koja radi u korisničkoj podršci i koja mi je pomogla oko izbora.</p>
                </div>
            </div>
            <div class="rev clearfix">
                <div class="rev-img"><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev2.jpg"></div>
                <div class="rev-cont">
                    <div class="rev-person clearfix">
                        <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev-2.jpg">
                        <h3 class="lt36">Katarina Filipovski</h3>
                    </div>
                    <p class="lt37">Prijatno sam iznenađena svime što sam pročitala na sajtu pa sam odlučila i ja da naručim. Dugo mi je trebalo ovako nešto i kada sam videla reklamu na Facebook-u znala sam da je ovo stvar za mene. Naručila sam dva komada, jedan za mene, jedan za poklon. Veoma sam zadovoljna kvalitetom izrade. Hvala PurpleRelax timu za savršen proizvod, popravili ste mi raspoloženje.</p>
                </div>
            </div>
            <div class="rev clearfix">
                <div class="rev-img"><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev3.jpg"></div>
                <div class="rev-cont">
                    <div class="rev-person clearfix">
                        <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/rev-3.jpg">
                        <h3 class="lt38">Ana Marić</h3>
                    </div>
                    <p class="lt39">Htela bih da izdvojim 3 razloga zbog kojih sam najzadovoljnija: sjajna korisnička služba, brza dostava (24h) i naravno vrhunski kvalitet uređaja. Sve je kao što je opisano. Hvala puno!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block12">
    <div class="wrap">
        <h2 class="title lt40">Kako <span>naručiti?</span></h2>
        <ul class="ship ul-fix">
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/item-1.png">
                <div>
                    <div class="ship-title leftz clearfix">
                        <p class="lt41">Narudžbina</p>
                    </div>
                    <p class="ship-text lt42">Popunite formu podacima za dostavu</p>
                </div>
            </li>
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/item-2.png">
                <div>
                    <div class="ship-title clearfix">
                        <p class="lt43">Dostava</p>
                    </div>
                    <p class="ship-text lt44">Dostavljamo brzom postom u roku od 24-48h</p>
                </div>
            </li>
            <li>
                <img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/item-3.png">
                <div>
                    <div class="ship-title clearfix">
                        <p class="lt45">Plaćanje pouzećem</p>
                    </div>
                    <p class="ship-text lt46">Plaćate robu tek kada je preuzmete</p>
                </div>
            </li>
        </ul>
        <p style="text-align: center; font-weight: bold;">Na sve naše proizvode dajemo garanciju i nudimo povrat novca u slučaju nezadovoljstva!</p>
    </div>
</section>
{{--<section class="block10"></section>--}}
{{--<section class="block9">--}}
    {{--<div class="wrap">--}}
        {{--<h2 class="title lt47">GRATIS PROIZVOD</h2>--}}
        {{--<h2 class="title"><span class="lt48">FLAWLESS FACE</span></h2>--}}
        {{--<div class="videobox clearfix">--}}
            {{--<div class="videobox-left">--}}
                {{--<div class="video-container">--}}
                    {{--<img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/gif1.webp">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="videobox-right">--}}
                {{--<p class="lt49">Revolucionarni epilator za nežno uklanjanje dlačica sa lica. Glava epilatora je izrađena od hirurških oštrica i prekrivena je 18 karatnim zlatom. Vrlo jednostavan i ekonomičan!<br/><br/>--}}
                    {{--<b>SAVRŠENO ČISTA KOŽA</b> - BEZ IRITACIJA I CRVENILA!</p>--}}
                {{--Iskoristite ponudu i dobićete brzo, sigurno i bezbolno rešenje za kožu lica <span style="font-weight: bold; color: #cc6d92; font-size:20px;"> POTPUNO BESPLATNO!</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<ul class="action-img ul-fix">--}}
            {{--<li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action11.jpg"></li>--}}
            {{--<li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action21.jpg"></li>--}}
            {{--<li><img alt="Perfection Brows" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/action31.jpg"></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</section>--}}
<section class="block13">
    <div class="wrap">
        <h1 class="lt50">DEPILATOR ZA OBRVE</h1>
        <h1><span class="lt51">PERFECT EYEBROW</span></h1>
        {{--<h2 class="lt52">+ depilator za lice</h2>--}}
        <div class="slickken"><img alt="" class="product" src="{{ asset('/') }}purplerelaxFiles/eyebrowremover/product-1.png" title=""></div>
        <div class="sale lt53">Akcija!</div>
        {{--<div class="sale1"></div>--}}
        {{--<div class="sale-plus"></div>--}}
        <div class="formbox" id="order_form">
            <h3 class="lt54">Naručite sada</h3>
            <h3 class="lt55">i ostvarite popust</h3>
            {{--<h3 class="lt56">+ POKLON</h3>--}}
            <form action="{{$orderRoute}}" class="off24_form orderformcdn order_form" id="order_form0" method="POST">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" placeholder="Ime i prezime" required="" type="text">
                <input class="field" name="phone" placeholder="Telefon" required="" type="tel">
                {{--<input class="field" name="shipping_address" placeholder="Adresa" required="" type="text">--}}
                {{--<input class="field" name="shipping_city" placeholder="Grad" required="" type="text">--}}
                <div class="price-form">
                    <p><b class="lt57">Akcijska cena:</b></p><span class="price_land_s1 price_main">{{ $prices[1]['amount'] }} RSD</span>
                </div>
                <p class="lt58" style="text-align: center; margin-bottom: 20px;">Redovna cena:
                    <span class="price_land_s2 price_old">{{ $prices[1]['originalPrice'] }} RSD</span></p>
                <button class="button-m lt59">PORUČITE SADA</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>