<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/smarttripod/styles.css">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <div class="title_block">
            <h1>Pametni 360° tripod sa senzorom pokreta</h1>
            <p>Prati lice i objekte</p>
        </div>
        <div class="image_block">
            <div class="offer_image"
                 style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/2ccOMpkYif6JwLPrmZK0QIvZQm7MNdoDoOMN1Ypy.jpg)"></div>

            <div class="discount_block">
                <div class="value">
                    <p>40%</p>
                </div>
                <div class="text">
                    <p>Popusta</p>
                </div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">
                <p>Garancija <br/> kvaliteta</p>
            </div>
            <div class="benefit_item">
                <p>Ograničena <br/> serija</p>
            </div>
            <div class="benefit_item">
                <p>Plaćanje <br/> pouzećem</p>
            </div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">
                    <p>Stara cena:</p>
                </div>
                <div class="value">
                    <font class="price_old6744">
                        <p>{{ $prices[1]['originalPrice'] }}</p>
                    </font>&nbsp;<font class="price_currency"> RSD</font>
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>
							<p>Cena sa popustom:</p>
						</span></div>
                <div class="value">
                    <font class="price_only6744">{{ $prices[1]['amount'] }}</font>&nbsp;<font class="price_currency"> RSD</font>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <p>Automatski prati lice ili objekat</p>
            </li>
            <li>
                <p>Podržava IOS i Android</p>
            </li>
            <li>
                <p>Snima velike formate, horizontalno i vertikalno</p>
            </li>
            <li>
                <p>Tripod – tronožac</p>
            </li>
        </ul>
        <a href="#order_form"  class="button">
            <p>PORUČITE SADA</p>
        </a>
    </header>
    <section class="problems_section dark_theme">
        <h2>Da li voliš da praviš zanimljive i kreativne sadržaje? Onda je tripod prava stvar za tebe! Istakni se svojom jedinstvenošću!</h2>
        <div class="benefits_list1 image_rounded">
            <div class="benefit_item">
                <div class="benefit_item_image"
                     style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/fwNuZBL2QjaVPSTkvBwB1361S8JvZSiMMHfJwodk.jpg)"></div>

                <p>Snimaj vlog ili live snimke</p>
            </div>
            <div class="benefit_item">
                <div class="benefit_item_image"
                     style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/owZVxFIec6xbTYYfjO6QvUG3TcFWLo89MaiRbfWz.jpg)"></div>
                <p>Zanimljive stvari koje ti se dešavaju</p>
            </div>
            <div class="benefit_item">
                <div class="benefit_item_image"
                     style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/SK5VNAvfEywyt1EPABsClZeBt0f5usFStjmFKqes.jpg)"></div>
                <p>Podeli svoja iskustva sa svima</p>
            </div>
            <div class="benefit_item">
                <div class="benefit_item_image"
                     style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/QzCT26yAbp85QG4MVAStWVuC1ya8Mcf4TF8It4X0.png)"></div>
                <p>Pravi uspomene za ceo zivot</p>
            </div>
        </div>
        <div class="description">
            <p>Tvoj lični asistent za pravljenje najboljeg sadržaja – vlog, video, slike! Samo poželi!</p>
        </div>
    </section>
    <section class="description_section">
        <h2>Pogledajte video</h2>
        <center>
            <video src="{{ asset('/') }}dailysharkFiles/smarttripod/video.mp4" controls width="100%" height="100%"></video>
        </center>
    </section>
    <section class="description_section">
        <h2>Revolucionarna tehnologija praćenja objekta</h2>
        <p>Pametni 360° tripod će ti pomoći da napraviš profesionalan video bez ičije pomoći!</p>
        <div class="gif_image" style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/fjc2VrgryCOPR49jE96670P9ADDx74bAqAjGsTol.gif)">
        </div>

        <p>Uređaj može da prepozna ljudsko lice, životinje i objekte i da se u skladu sa tim rotira za 360° i prati kretanje.
            Kako se pomeraš, pametni tripod će okretati telefon ka tebi i da te prati. Za automatsko fotografisanje, sve što treba da uradiš je da označiš na kojoj poziciji želiš da slikaš. Sjajno, zar ne?</p>
    </section>
    <section class="benefits_section dark_theme">
        <h2>Karakteristike:</h2>
        <ul>
            <li><b>Materijal</b>: ABS + silicon</li>
            <li><b>Upravljanje</b>: Apai Genie aplikacija</li>
            <li><b>Uparivanje</b>: Bluetooth</li>
            <li><b>Težina</b>: 200gr</li>
            <li><b>Dimenzije</b>: 93x93x165 cm</li>
            <li><b>Operativni sistem</b>: IOS 10.0 i noviji/Android 8.1 i noviji</li>
            <li><b>Napajanje</b>: 3AA baterije</li>
            <li><b>Boja</b>: Crna</li>
        </ul>

        <a href="#order_form"  class="button">
            <p>PORUČITE SADA</p>
        </a>
    </section>
    <section class="sect8">
        <h2 class="title"><span> Utisci kupaca</span></h2>
        <div class="reviews">
            <div class="rev_item">
                <div class="rev_info">
                    <img src="{{ asset('/') }}dailysharkFiles/smarttripod/11ava2.jpg" alt="">
                    <div class="text"><span>Danijela</span> </div>
                </div>
                <img src="{{ asset('/') }}dailysharkFiles/smarttripod/2rev2.jpg" alt="">
                <p>Sjajan uređaj, svima ga preporučujem. Koristim ga za snimanje mojih YouTube videa.</p>
            </div>
            <div class="rev_item">
                <div class="rev_info">
                    <img src="{{ asset('/') }}dailysharkFiles/smarttripod/11ava3.jpg" alt="">
                    <div class="text"><span>Draško</span> </div>
                </div>
                <img src="{{ asset('/') }}dailysharkFiles/smarttripod/3rev3.jpg" alt="">
                <p>Paket je stigao odmah sutradan! Veoma sam zadovoljan i preporučujem i proizvod i prodavnicu.
                    Praćenje lica je veoma precizno i to mi se najviše svidelo, a nisam očekivao. Sve je veoma jednostavno a savršeno radi! Oduševljen sam!</p>
            </div>
        </div>
        <a href="#order_form"  class="button">
            <p>PORUČITE SADA</p>
        </a>
    </section>
    <section class="order_steps_section">
        <h2>Kako da naručim?</h2>
        <div class="order_steps_list1 clearfix">
            <div class="step_item">
                <h4>Poručivanje</h4>
                <p>Popuni formu podacima za dostavu</p>
            </div>
            <div class="step_item">
                <h4>Potvrda</h4>
                <p>Porudžbina će biti potvrđena u najkraćem roku</p>
            </div>
            <div class="step_item">
                <h4>Dostava</h4>
                <p>Paket šaljemo istog dana i stiže ti u roku od 24-48h</p>
            </div>
            <div class="step_item">
                <h4>Plaćanje</h4>
                <p>Plati pouzećem kada preuzmeš paket</p>
            </div>
        </div>
    </section>
    <section class="offer_section offer3">
        <div class="title_block">
            <h3>Pametni 360° tripod sa senzorom pokreta</h3>
            <p>Prati lice i objekte</p>
        </div>
        <div class="image_block">
            <div class="offer_image"
                 style="background-image: url({{ asset('/') }}dailysharkFiles/smarttripod/tWoECRJPVBT0zbMkA5jjg7QWYX0ux5h2EcvOIZYS.jpg)"></div>

            <div class="discount_block">
                <div class="value">
                    <p>40%</p>
                </div>
                <div class="text">
                    <p>popusta</p>
                </div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">
                <p>Garancija <br/> kvaliteta</p>
            </div>
            <div class="benefit_item">
                <p>Ograničena <br/> serija</p>
            </div>
            <div class="benefit_item">
                <p>Plaćanje <br/> pouzećem</p>
            </div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">
                    <p>Stara cena:</p>
                </div>
                <div class="value">
                    <font class="price_old6744">
                        <p>{{ $prices[1]['originalPrice'] }}</p>
                    </font>&nbsp;<font class="price_currency"> RSD</font>
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>
							<p>Cena sa popustom:</p>
						</span></div>
                <div class="value">
                    <font class="price_only6744">{{ $prices[1]['amount'] }}</font>&nbsp;<font class="price_currency"> RSD</font>
                </div>
            </div>
        </div>
        <form id="order_form" class="order_form"  method="post" action="{{$orderRoute}}">
            <div><input class="field" type="text" name="name" required placeholder="Introduceți Prenumele" data-orderName></div>
            <div><input class="field" type="tel" name="phone" required id="phone_client" placeholder="Introduceți numărul de telefon" autocomplete="off" data-orderPhone></div>
            <input class="button" value="Cumpărați acum" type="submit" data-ordersubmit>
        </form>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    // $(document).ready(function() {
    //
    // });

    $(window).on("load", function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoHeight: true,
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            nav: true,
            navText: ""
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>