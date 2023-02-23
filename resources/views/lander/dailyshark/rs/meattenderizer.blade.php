<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/fav.jpg" type="image/png">
    <link href="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/styles.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: 'Open Sans';
            src: local('Open Sans'), local('OpenSans'), url('{{ asset('/') }}fonts/opensans.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OpenSans.woff') format('woff'),
            url('{{ asset('/') }}fonts/OpenSans.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: local('Open Sans Bold'), local('OpenSans-Bold'), url('{{ asset('/') }}fonts/opensansbold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OpenSans-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/OpenSans-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: local('Open Sans Extrabold'), local('OpenSans-Extrabold'), url('{{ asset('/') }}fonts/opensansextrabold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OpenSans-ExtraBold.woff') format('woff'),
            url('{{ asset('/') }}fonts/opensansextrabold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <div class="title_block">
            <p style="font-size: 22px; font-weight: 700;">MEAT TENDERIZER</p>
            <p class="subtitle"></p>
        </div>
        <div class="image_block">
            <img class="image"
                 src="{{ asset('/') }}dailysharkFiles/meattenderizer/htb1q0oad.uf3kvjszk9q6zvtxxau_q50.jpg">
            <div class="discount"
                 style="width: 100px;height: 60px;background: url({{ asset('/') }}dailysharkFiles/thermostaticcoaster/offer__discount_bg.png) -26px no-repeat;font-size: 14px;">
                Popust
                <b style="font-size: 28px;line-height: 24px;">-40%</b>
            </div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% garancija kvaliteta</div>
            <div class="benefit_item1">Brza isporuka</div>
            <div class="benefit_item1">Plaćanje po prijemu</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa 40% popusta</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <ul class="benefits_list">
            <li>Konačno se pojavilo rešenje za spremanje ukusnog i sočnog mesa tvrđe teksture</li>
            <li>Skraćuje vreme pečenja i prženja mesa</li>
            <li>Potrebno duplo manje marinade za pripremu</li>
            <li>Sočna šnicla i od najtvrđeg komada mesa</li>
            <li>Deca će obožavati meso posle Meat Tenderizera</li>
            <li>Najprodavaniji proizvod u Evropi</li>
        </ul>
        <div class="order_block">
            <form class="order_form" action="{{$orderRoute}}" method="post" style="padding-top: 20px;">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" name="name" type="text" required placeholder="Ime i prezime">
                <input class="input" name="phone" type="tel" placeholder="Telefon" required>
                <input class="input" name="shipping_address" type="text" required placeholder="Adresa">
                <input class="input" name="shipping_city" type="text" required placeholder="Grad">
                <div class="button_block">
                    <button type="submit" class="button">Poručite sada</button>
                </div>
            </form>
            <div class="products_count">Preostalo još <span>11</span> komada na akciji</div>
        </div>
    </header>
    <section class="description_section brd">
        <h2 style="margin: 30px 0 30px;">
            <small>KAKO SE KORISTI MEAT TENDERIZER?</small>
            <b></b>
        </h2>
        <div class="text_block">
            <p><img class="" src="{{ asset('/') }}dailysharkFiles/meattenderizer/ylpevfanhjp0.jpg" alt=""
                    width="480"/></p>
            <p>Željeni komad mesa operite, osušite i stavite na dasku. Skinite zaštitni poklopac sa Meat Tenderizera, otključajte ga i počnite da pritiskate na meso.
                Čelične igle će proći kroz teksturu mesa ostavljajući prostor za marinadu, visoku temperaturu ili vrelo ulje.</p>
            <p><img class="" src="{{ asset('/') }}dailysharkFiles/meattenderizer/fxtmcsa72dwz.jpg" alt=""
                    width="480"/></p>
            <p>Zahvaljujući navedenim procesima, meso postaje mnogo mekše, brže se sprema, a svakako je i ukusnije jer začini i marinada prolaze kroz celu debljinu.
                Ukoliko želite nešto u rerni da pečete, meso će biti sočnije i skratićete proces pečenja.</p>
            <p><img class="" src="{{ asset('/') }}dailysharkFiles/meattenderizer/wunjklv6iijz.jpg" alt=""
                    width="480"/></p>
        </div>
    </section>
    <section class="order_info1_section">
        <h2><b style="color: #ffffff;"></b></h2>
        <div class="order_info1_list order_info2_list">
            <div class="info_item">
                <div class="text_block">
                    <h4 style="color: #ffd800;">PREDNOSTI</h4>
                    <p>Daje mesu neverovatnu sočnost, praktičan je, ne zauzima mnogo prostora i dugotrajan je</p>
                </div>
            </div>
            <div class="info_item">
                <div class="text_block">
                    <h4 style="color: #ffd800;">DIMENZIJE</h4>
                    <p>10.5 CM x 8 CM</p>
                </div>
            </div>
            <div class="info_item">
                <div class="text_block">
                    <h4 style="color: #ffd800;">UNIVERZALAN</h4>
                    <p>Može da se koristi za sve vrste mesa, a takođe je koristan i za tvrđe povrće.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="text_block">
                    <h4 style="color: #ffd800;">KVALITETAN</h4>
                    <p>Proizvod je testiran i napravljen od najkvalitetnijih materijala.</p>
                </div>
            </div>
        </div>
        <div class="button_block1"><a href="#order_form" class="button">Poručite sada</a></div>
    </section>
    <section>
        <div class="owl-carousel">
            <img src="{{ asset('/') }}dailysharkFiles/meattenderizer/113746151_w640_h640_cid551142_pid70220287-55287c63.jpg" alt="">
            <img src="{{ asset('/') }}dailysharkFiles/meattenderizer/113746151_w640_h640_cid551142_pid70220287-55287c63.jpg" alt="">
        </div>
    </section>
    <section class="description_section2" style="padding-top: 20px">
        <h2><b>SPECIFIKACIJE</b></h2>
        <div style="font-size: 17px; " class="benefits_list2">
            <ul>
                <li>Materijal: ABS plastika i čelik</li>
                <li>Zaštitni mehanizam: DA</li>
                <li>Broj iglica: 31</li>
                <li>Zdravstveno bezbedan: DA</li>
                <li>Garancija kvaliteta: DA</li>
            </ul>
        </div>
        <div class="button_block1"><a href="#order_form" class="button">Poručite sada</a></div>
    </section>
    <section class="reviews_section"
             style="background-color: #f8f8f8; background-image: linear-gradient(to right,#f8f8f8 0%, #f8f8f8 100%);">
        <h2><b style="color: #44036F;">UTISCI KUPACA</b></h2>
        <p style="color:#000; text-align: center;"></p>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <div class="comments-item">
                    <div class="profile-header">
                        <p class="profile-name">Igor Andrejević(Beograd)</p>
                        <div class="clear"></div>
                    </div>
                    <p class="comment">
                    <p>Zahvaljujući vašoj online prodavnici poručio sam ovaj proizvod. Odličan je, meso spremim duplo brže, a moram da vam priznam da je mnogo ukusnije nego pre. Sve preporuke!</p>
                    </p>
                </div>
            </div>
            <div class="review_item">
                <div class="comments-item">
                    <div class="profile-header">
                        <p class="profile-name">Ivana Popović (Paraćin)</p>
                        <div class="clear"></div>
                    </div>
                    <p class="comment">
                    <p>Slučajno sam naišla na ovaj sajt, bila mi je slatka reklama i odlučih da poručim. Vrlo sam zadovoljna kupovinom. Preporučujem svima!</p>
                    </p>
                </div>
            </div>
            <div class="review_item">
                <div class="comments-item">
                    <div class="profile-header">
                        <p class="profile-name">Marina Jović(Niš)</p>
                        <div class="clear"></div>
                    </div>
                    <p class="comment">
                    <p>Dobar dan! Želim svima da se zahvalim za ovaj proizvod. Super je, a meso koje spremam je uvek mekano i ukusno!</p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_info1_section" style="background-color: #fff;">
        <h2><b>KAKO PORUČITI?</b></h2>
        <div class="order_info1_list">
            <div class="info_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/delivery1_image1.jpg"></div>
                <div class="text_block">
                    <h4>PORUČIVANJE</h4>
                    <p>Ostavite podatke za dostavu na našem sajtu. <br> Kontaktiraćemo vas da potvrdimo porudžbinu.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/delivery1_image2.jpg"></div>
                <div class="text_block">
                    <h4>SLANJE</h4>
                    <p>Šaljemo pošiljku u roku od 1-2 radna dana</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}dailysharkFiles/thermostaticcoaster/delivery1_image3.jpg"></div>
                <div class="text_block">
                    <h4>PLAĆANJE</h4>
                    <p>Plaćate kuriru brze pošte po preuzimanju paketa</p>
                </div>
            </div>
        </div>
    </section>
    <section class="offer_section">
        <div class="title_block">
            <p style="font-size: 22px; font-weight: 700;">MEAT TENDERIZER</p>
            <p class="subtitle"></p>
        </div>
        <div class="image_block">
            <img class="image"
                 src="{{ asset('/') }}dailysharkFiles/meattenderizer/htb1q0oad.uf3kvjszk9q6zvtxxau_q50.jpg">
            <div class="discount"
                 style="width: 100px;height: 60px;background: url({{ asset('/') }}dailysharkFiles/thermostaticcoaster/offer__discount_bg.png) -26px no-repeat;font-size: 14px;">
                Popust
                <b style="font-size: 28px;line-height: 24px;">-40%</b>
            </div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% garancija kvaliteta</div>
            <div class="benefit_item1">Brza isporuka</div>
            <div class="benefit_item1">Plaćanje po prijemu</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa 40% popusta</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="order_block">
            <form class="order_form" id="order_form" action="{{$orderRoute}}" method="post" style="padding-top: 20px;">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" name="name" type="text" required placeholder="Ime i prezime">
                <input class="input" name="phone" type="tel" placeholder="Telefon" required>
                <input class="input" name="shipping_address" type="text" required placeholder="Adresa">
                <input class="input" name="shipping_city" type="text" required placeholder="Grad">
                <div class="button_block">
                    <button type="submit" class="button">Poručite sada</button>
                </div>
            </form>
            <div class="products_count">Preostalo još <span>11</span> komada na akciji</div>
        </div>
    </section>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: true,
        navText: ["<img src='{{ asset('/') }}dailysharkFiles/thermostaticcoaster/left-chevron.png'>", "<img src='{{ asset('/') }}dailysharkFiles/thermostaticcoaster/right-chevron.png'>"],
        loop: true,
        dots: false,
        lazyLoad: true,
    });
</script>
@include('components.pixel_footer')
</body>
</html>