<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/favicon.png" type="icon/png">
    <style>@font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'), url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'), url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'), url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'), url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'), url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'), url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/style.css">
    <style>
        .b1 {
            padding: 0 0 10px;
            background: #f8faf5 url({{ asset('/') }}dailysharkFiles/travelmate/offer.png) no-repeat center 139px;
            position: relative;
        }

        .b1 .pulse {
            top: 430px;
            left: 380px;
        }

        .use li:nth-child(1) {
            background: #fff url({{ asset('/') }}dailysharkFiles/travelmate/use1.png) no-repeat 0 -5px;
            padding: 30px 0px 30px 240px;
        }

        .use li:nth-child(2) {
            background: #fff url({{ asset('/') }}dailysharkFiles/travelmate/use2.png) no-repeat right -10px;
            padding: 15px 240px 13px 0;
        }

        .use li:nth-child(3) {
            background: #fff url({{ asset('/') }}dailysharkFiles/travelmate/use3.png) no-repeat 0 0;
            padding: 30px 0px 21px 240px;
        }

        .use li:nth-child(4) {
            background: #fff url({{ asset('/') }}dailysharkFiles/travelmate/use4.png) no-repeat right -10px;
            padding: 9px 240px 8px 0;
        }
        .b1 h1 {
            font-size: 38px;
        }
    </style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1> TRAVEL <span>MATE</span></h1>
        <h2 class="gradient">Anatomski jastuk <br/>za udobna putovanja</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
{{--        <div class="effect">Profesionalni efekat masaže</div>--}}
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="checklist">
            <li>
                <p>Kompaktan dizajn za lako nošenje</p>
            </li>
            <li>
                <p>Podešavanje tvrdoće za maksimalnu udobnost</p>
            </li>
            <li>
                <p>Pruža savršenu podršku vratu tokom dugih putovanja</p>
            </li>
        </ul>
        <div class="formbox">
            <h3>POŽURITE DA PORUČITE SA POPUSTOM OD 40%</h3>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
            </ul>
            <a href="#order_form" class="btn">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="b2">
        <h2 class="title"><span>Oslobodite se bola u leđima i vratu</span> čak i kada putujete</h2>
        <img src="{{ asset('/') }}dailysharkFiles/travelmate/b2.png" alt>
        <p>Travel Mate je dizajniran da vam pruži savršenu udobnost tokom dugih putovanja.
            Zahvaljujući njegovoj sposobnosti da se prilagodi vašem vratu i podesi tvrdoću,
            ovaj jastuk će vam omogućiti da se opustite i udobno zaspite, čak i tokom najdužih putovanja.
            Sa ovim putnim jastukom, <b>možete biti sigurni da ćete stići na vašu destinaciju odmorni
                i spremni za nove avanture.</b></p>
        <p>Izrađen je od <b>kvalitetne memorijske pene</b> i prilagođava se vašem vratu u bilo kom položaju.
            To ga čini pogodnim ne samo za putovanja, već i za korišćenje u vašem domu ili bilo kom drugom mestu.</p>
        <span>PRAKTIČNI MEMORIJSKI JASTUK KOJI IMA <br> VIŠE EFEKATA:</span>
        <ul class="checklist">
            <li>
                <p>Opušta mišiće vrata</p>
            </li>
            <li>
                <p>Ublažava glavobolju</p>
            </li>
            <li>
                <p>Poboljšava cirkulaciju krvi</p>
            </li>
            <li>
                <p>Pomaže u prevazilaženju nesanice</p>
            </li>
            <li>
                <p>Pomaže da stignete odmorni na destinaciju</p>
            </li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b3 gradient">
        <h2 class="title">Travel Mate će postati vaš najbolji saputnik</h2>
        <div class="best__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/best1.png" alt>
            <p><b>Pruža podršku vratu</b>
                Ovaj jastuk pruža savršenu podršku vratu tokom putovanja, čime se sprečava bol i nelagoda u vratu.
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/best2.png" alt>
            <p><b>Podesiva tvrdoća</b>
                Možete podesiti tvrdoću jastuka prema vašoj želji, što vam omogućava da prilagodite jastuk vašoj udobnosti.
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/best4.png" alt>
            <p><b>Kompaktan dizajn</b>
                Sa svojim kompaktnim dizajnom, ovaj putni jastuk je idealan za nošenje u torbi za putovanja.
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/best3.png" alt>
            <p><b>Pomaže u prevenciji glavobolja</b>
                Ovaj jastuk može pomoći u prevenciji glavobolja tokom putovanja, jer sprečava napetost mišića i opušta ih.
            </p>
        </div>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b6">
        <h2 class="title"><span>Travel Mate</span><br> ima višestruku namenu!</h2>
        <ul class="use">
            <li><span>1</span> Stavite ga oko vrata za maksimalnu udobnost u toku vožnje</li>
            <li><span>2</span> Možete ga razvući pa <br> presaviti oko ruke za kratki odmor</li>
            <li><span>3</span> Može služiti i kao dodatan jastuk u vašem krevetu</li>
            <li><span>4</span> Idealan za <br> putovanja avionom i <br> čekanja na aerodromima </li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b8 gradient">
        <h2 class="title">Utisci kupaca <br> kojima je <br> Travel Mate olakšao putovanja</h2>
        <div class="reviews__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/rev1.png" alt>
            <p><b>Ovaj jastuk je neverovatan!</b>
                Koristim ga na svim mojim putovanjima i ne mogu zamisliti da putujem bez njega.
                Pruža mi savršenu podršku za vrat i sprečava bol u vratu i ramenima.
                Najbolji jastuk za putovanja koji sam ikada imala!</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava3.jpg" alt>
                <p>Marko<br> Novi Sad</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/rev2.png" alt>
            <p>
                Zbog prirode posla često putujem kolima, i po pravilu sam se sa tih putovanja uvek vraćao
                sa bolovima u leđima i vratu. Od kada sam kupio ovaj jastuk više ništa nije isto kao pre.
                Puno sam odmorniji i ne samo da ga koristim na putovanjima, već i u kancelariji kada želim da se opustim.
            </p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava2.jpg" alt>
                <p>Srđan<br> Beograd</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}dailysharkFiles/travelmate/body_grad.png" alt>
            <p>
                Dečko i ja smo poručili ove jastuke pred prošlo letovanje, jer smo bili prinuđeni na putujemo autobusom.
                Ne samo da nam je olakšao to putovanje, kao i svako naredno, već ih koristimo i kod kuće za svakodnevni odmor.
                Sreća je da smo odmah poručili dva komada, kako se ne bi otimali :)
            </p>
            <div class="person">
                <img src="" alt>
                <p>Anđela<br> Kragujevac</p>
            </div>
        </div>
        <a href="#order_form" class="btn">PORUČITE SA POPUSTOM</a>
    </section>
    <section class="b9">
        <h2 class="title">Dostava i plaćanje</h2>
        <ul class="delivery">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del2.png" alt>
                <p><b>Potvrda porudžbine</b> Kontaktiraćemo vas u najkraćem roku da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del1.png" alt>
                <p><b>Brza isporuka</b> Kurirskom službom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del3.png" alt>
                <p><b>Plaćanje pouzećem</b> Bez plaćanja unapred! Plaćanje se vrši prilikom isporuke</p>
            </li>
        </ul>
    </section>
    <section class="b1 end">
        <h1> TRAVEL <span>MATE</span></h1>
        <h2 class="gradient">Anatomski jastuk <br/>za udobna putovanja</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
{{--        <div class="effect">Profesionalni efekat masaže</div>--}}
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="formbox">
            <h3>PORUČITE ODMAH!</h3>
            <p>A mi ćemo vas u najkraćem roku kontaktirati da potvrdimo porudžbinu.</p>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
            </ul>
            <form id="order_form" class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Ulica i broj" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="btn" type="submit">Završi porudžbinu</button>
            </form>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $('a[href^="#"]').click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
