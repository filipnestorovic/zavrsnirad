<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/selfcooler/favicon.ico" type="image/i-con" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/selfcooler/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/selfcooler/styles.css" />
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Light.html') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Light-2.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Light-3.html') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular-2.html') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold.html') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold-2.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold-3.html') format('truetype');
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold-2.html') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="offer_section">
    <div class="wrapper clearfix">
        <h1 class="main_title"><span>SELF COOLER</span></h1>
        <h2 class="main_subtitle">VRATNI VENTILATOR</h2>
        <ul class="ofr_bull">
            <li>Prijatna svežina oko vas</li>
            <li>Nema više zagušljivosti</li>
            <li>Lagan i kompaktan</li>
            <li>360° hlađenje</li>
        </ul>
        <div class="sale">
            <span>
                Popust <b>40<small>%</small></b>
            </span>
        </div>
        <div class="formbox">
            <div class="prod_count">
                <span>15</span> komada ostalo na akciji!
            </div>
            <div class="price clearfix">
                <div class="old">
                    Redovna cena:
                    <p>
                        <span>{{ $prices[1]['originalPrice'] }} </span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
                <div class="new">
                    Cena na akciji:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
            </div>

            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>

<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Prednosti<span> Self Cooler uređaja</span></h2>
        <div class="content">
            <ul class="benef1">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img1.jpg" alt="" />
                    <p>3 režima rada</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img2.jpg" alt="" />
                    <p>Tih rad</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img3.jpg" alt="" />
                    <p>Podesiv ugao nagiba</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img4.jpg" alt="" />
                    <p>Dugotrajna baterija</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img5.jpg" alt="" />
                    <p>48 otvora za vazduh</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img6.jpg" alt="" />
                    <p>Uvek slobodne ruke</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img7.jpg" alt="" />
                    <p>USB punjenje</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img8.jpg" alt="" />
                    <p>Snažan turbinski motor</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="video">
    <div class="wrapper">
        <h2 class="title"><span> Pogledajte video</span></h2>

        <video src="{{ asset('/') }}dailysharkFiles/selfcooler/vid.mp4" width="100%" height="auto" preload="auto" playsinline="" webkit-playsinline="" controls="" draggable="true" poster="{{ asset('/') }}dailysharkFiles/selfcooler/poster.jpg" style="border-radius: 40px; margin-bottom: 30px;"></video>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">
            <span>Umorni ste od vrućine?</span><br />
            Prestani da je trpiš!
        </h2>
        <div class="content2">
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/sec.jpg" alt="" />
            <p>
                Sada ćete imati ličnu zaštitu od toga - prenosivi ventilator dizajniran za nošenje oko vrata, postaće vaš najbolji prijatelj u zagušljivoj kancelariji, metrou, na ulici...
                Protok vazduha koji stvara uređaj će vam omogućiti da lako hladite lice i potiljak.
            </p>
            <p>
                Možete koristiti ventilator gde god se nalazite, u parku, na putovanju ili dok čekate u redu u pošti. Tihi rad ventilatora vas neće iritirati niti ometati tokom svakodnevnih aktivnosti.
            </p>
            <p>Mogu ga bezbedno koristiti i deca i odrasli.</p>
        </div>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title">Pogodnosti</h2>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Dizajn je osmišljen na takav način da ne hvata i ne mrsi kosu.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>3 brzine ventilatora - prilagodite hlađenje svojim potrebama.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Proizvod je usavršene do te mere da ne stvara buku i da je skroz nečujan.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Moderan, jedinstven i atraktivan dizajn.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Savija se i možete podesiti ugao kakav želite.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Lagan i prenosiv, možete ga nositi svuda sa sobom.</span>
            </li>
        </ul>
        <div class="action_block">
            <div class="timer">
                <p>Iskoristite akciju i <b>poručite sa 40% popusta</b></p>
            </div>
            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <h2 class="title"><small style="color: #ff8d03;">Nikada nisam osetila tako prijatnu svežinu!</small> <span></span></h2>
        <div class="gallery owl-carousel">
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal1.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal2.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal3.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal4.jpg" alt="" />
        </div>
        <p>
            Turbinski dvosmerni motor vam omogućava da povećate količinu protoka vazduha. Uvlači vazduh iz okolne atsmofere, hladi ga i izbacuje kroz 48 sitnih rupa.
        </p>
        <br />
        <p>
            Još jedna prednost ventilatora je mogućnost 3 režima protoka vazduha, što omogućava da ga koriste i deca i odrasli. Dizajn je osmišljen na takav način da ne hvata i ne mrsi kosu.
        </p>
        <br />
        <p>
            Moći ćete da ga koristite čak i dok džogirate i neće vam stvarati neprijatnosti. Možete ga nositi ceo dan bez skidanja. Kućište ventilatora je napravljano od specijalne hipoalergene
            plastike koja je prijatna na dodir i koja ne iritira kožu.
        </p>
        <br />
        <p>
            Dizajn ventilatora je takav da će vam ruke biti potpuno slobodne.
        </p>
    </div>
</section>

<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><br/><span>Utisci naših kupaca</span></h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev1.jpg" alt="" />
                </div>
                <span>
                            <p><b>Valerija Perić</b></p>
                        </span>
                <p>
                    Koristan uređaj koji života znači kada ste u prostoriji koja nema klimu ili kada je velika sparina napolju. Self Cooler je koristan tokom celog leta jer ga bukvalno svuda možete nositi.
                    Plašila sam se da ne uvlači i ne mrsi kosu ali to se nije događalo i ne moram više da brinem o tome. Sve preporuke!
                </p>
            </div>
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev2.jpg" alt="" />
                </div>
                <p><b>Vojin Otašević</b></p>
                <p>
                    Odličan uređaj, prijatno sam iznenađen. Protok vazduha je odličan, ugodan je i baterija dugo drži. Radim od kuće i nemam klima uređaj pa mi je ovo spas. Od kada sam uzeo ovo čudo, rešio sam problem sa vrućinom.
                    Mislim da ovo svako treba da kupi sebi.
                </p>
            </div>
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev3.jpg" alt="" />
                </div>
                <p><b>Snežana Jarić</b></p>
                <p>
                    Često ga nosim napolje sa sobom. Stavim ga na vrat, uključim ga i uživam. Manje se znojim i vrlo mi je prijatno. Super mi je što se brzina može podešavati i što se može puniti iz eksterne baterije.
                    Veoma sam zadovoljna ovom kupovinom. Sve preporuke!
                </p>
            </div>
        </div>
    </div>
</section>
<section class="sect7">
    <div class="wrapper">
        <h2 class="title"><b>Dostava</b> i plaćanje</h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order1.png" alt="" />
                <h4>Brza dostava</h4>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana. Ostavite svoje podatke i kontaktiraćemo vas da potvrdimo porudžbinu.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order2.png" alt="" />
                <h4>Plaćanje po prijemu</h4>
                <p>Nema potrebe da uplaćujete unapred. Plaćanje se vrši po prijemu porudžbine.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order3.png" alt="" />
                <h4>Garancija</h4>
                <p>Dajemo garanciju na sve naše proizvode.</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section ofr_bottom">
    <div class="wrapper clearfix">
        <h1 class="main_title"><span>SELF COOLER</span></h1>
        <h2 class="main_subtitle">VRATNI VENTILATOR</h2>
        <ul class="ofr_bull">
            <li>Prijatna svežina oko vas</li>
            <li>Nema više zagušljivosti</li>
            <li>Lagan i kompaktan</li>
            <li>360° hlađenje</li>
        </ul>
        <div class="sale">
            <span>
                Popust <b>40<small>%</small></b>
            </span>
        </div>
        <div class="formbox">
            <div class="prod_count">
                <span>15</span> komada ostalo na akciji!
            </div>
            <div class="price clearfix">
                <div class="old">
                    Redovna cena:
                    <p>
                        <span>{{ $prices[1]['originalPrice'] }} </span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
                <div class="new">
                    Cena na akciji:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
            </div>

            <form id="order_form" class="m1-form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="" />
                <input type="tel" name="phone" placeholder="Telefon" required="" />
                <input type="text" name="shipping_address" placeholder="Adresa" required="" />
                <input type="text" name="shipping_city" placeholder="Grad" required="" />
                <button class="button-m" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/selfcooler/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
