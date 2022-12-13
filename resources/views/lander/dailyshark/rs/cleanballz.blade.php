<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/cleanballz/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/cleanballz/style.css">
    <style>
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="topline">
            <div class="topbullets">
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon1.png" alt="">
                    <p>Šaljemo u roku 1-2 dana</p>
                </div>
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon2.png" alt="">
                    <p>Plaćanje po preuzimanju</p>
                </div>
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon3.png" alt="">
                    <p>Garancija kvaliteta</p>
                </div>
            </div>
        </div>
        <h1 class="top-title"> <span>CLEAN BALLZ</span></h1>
        <h2 class="subtitle">PERITE VEŠ BEZ KUPOVINE DETERDŽENTA</h2>
        <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product.png" alt="" class="product_img">
        <div class="bullets">
            <div class="bullets__item">
                <p>1 kugla traje do 1000 pranja</p>
            </div>
            <div class="bullets__item">
                <p>Isti efekat kao kod skupih deterdženata</p>
            </div>
        </div>
        <div class="toplead">
            <div>
                <p style="text-align: center;font-size: 20px;font-weight: 700;">Popust 40%</p>
                <div class="price">
                    <div class="price__old">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                    <div class="price__new">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <div>
                <a class="btn" href="#order_form">Poručite sa popustom</a>
            </div>
        </div>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <div class="about">
            <div class="about__left">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product2.png" alt="" class="about_img__large">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product2-2.png" alt="" class="about_img__small">
                <a class="btn" href="#order_form">Poručite sa popustom</a>
            </div>
            <div class="about__right">
                <h2 class="title">Predstavljamo vam trenutno najprodavaniji proizvod u Evropi i svetu</h2>
                <p>Clean Ballz - neverovatna ušteda deterdženta i novca.
                    U pitanju je elokoški proizvod koji ne šteti okoliki i pritom štiti boju tkanina.</p>
                <p>1 kugla je dovoljna za 1000 pranja, prikladna je za sve programe i temperature i ne pravi buku pri radu mašine.</p>
                <p>Clean Ballz je praktična, jednostavna za korišćenje i čuvanje, nema štetnih efekata za rad veš mašine.
                    Ne sadrži opasne fosfate i ne proizvodi štetne hemikalije koje preko tkanine dospevaju na kožu.</p>
                <p>U kugli se nalazi na stotine keramičkih kuglica koje stvaraju negativne jone i aktiviraju molekule vode i tako razgrađuju prljavštinu duboko u tkanini.</p>
                <p>U slučaju ekstremno zaprljanog veša, rezultati će biti bolji ako dodate pola šolje sode bikarbone u pregradicu za prašak, koja inače i čisti mašinu.</p>
            </div>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2 class="title">CLEAN BALLZ - Najbolje sredstvo za pranje veša u svetu i evropi</h2>
        <div class="preim">
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim1.jpg" alt="">
                <p><b>Ubacite sav veš u mašinu</b> i stavite Clean Ballz kuglu</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim2.jpg" alt="">
                <p><b>Pustite mašinu da radi kao i do sada</b>, dok ste koristili prašak za veš</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim3.jpg" alt="">
                <p>Sitne kuglice će <b>promeniti sastav vode i proizvesti dovoljno pene</b> koja će perfektno očistiti veš.</p>
            </div>
        </div>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <h2><span>UTISCI NAŠIH KUPACA</span></h2>
        <p>99% od ukupnog broja kupaca u svetu preporučuje ovaj proizvod</p>
        <div class="reviews">
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev1.png"><br>
                        <b>Katarina Fotović</b>
                    </center>
                    <p>Ovo je zaista čudo! Najgora stvar mi je bila kada moram da bacam pare na deterdžent, a ruku na srce kupovala sam non stop jer imam troje male dece.
                        Videla sam od koleginica na poslu da su i one ovo kupile i rekoh hajde da probam, zašto da ne.
                        Ljudi, ne možete da verujete kako je ovo dobro. Pere veš isto kao i skupi praškovi, a pritom omekšava tkaninu, dosta manje omekšivača stavljam.
                        Ovo je totalno preporodilo moj budžet.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev2.png"><br>
                        <b>Danijel Kostović</b>
                    </center>
                    <p>Imamo ogromne troškove u porodici, znate već kako je to, deca, škola ekskurzije i ostalo.
                        Sa suprugom sam pričao kako malo da smanjimo trošak i ona je došla na ideju za ovo.
                        Prvobitno sam bio skeptičan ali smo posle poručili. Ovo je magija, ja nemam šta drugo da kažem.
                        Već 3 meseca peremo sa istom kuglom, a što je najfascinantnije ona se uopšte nije promenila.
                        Pere dobro kao rvog dana! Sve preporuke, nemam šta drugo da kažem.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev3.png"><br>
                        <b>Kosta Jovanović</b>
                    </center>
                    <p>Clean Ballz sam kupio majci kao poklon. Kaže da je ovo do sada najbolja stvar koju sam joj kupio.
                        Moja majka je inače štedljiva žena i uvek je vodila računa o trošenju novca. Upravo zato je sa ovim
                        oduševelja, a kaže i da je veš dosta mekši i bolji. Ne pravi nikakvu dodatnu buku u veš mašini i pale se
                        isti programi koji su se koristili ranije. Savetujem svakome da kupi ovo malo čudo!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style></style>
<section class="block5">
    <div class="wrap">
        <h2 class="title">Karakteristike:</h2>
        <div class="char-box">
            <div class="char-box__left">
                <ul class="char-box_list">
                    <li>Upotreba: <span> za pranje u veš mašini</span></li>
                    <li>Materijal: <span> plastika, keramičke kuglice</span></li>
                    <li>Boja: <span> Bela</span></li>
                    <li>Broj pranja u mašini: <span> do 1000</span></li>
                    <li>Održavanje: <span> sušenje na vazduhu</span></li>
                    <li>Nivo buke: <span> nizak</span></li>
                    <li>Ocena proizvoda: <span> 9.8</span></li>
                    <li>Broj naših zadovoljih kupaca: <span> 5500</span></li>
                    <li>Za koje tipove i boje veša: <span> univerzalno</span></li>
                </ul>
            </div>
            <div class="char-box__right">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/char.jpg" alt="">
            </div>
        </div>
        <a class="btn" href="#order_form">Poručite sa popustom</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">Kako do CLEAN BALLZ proizvoda?</h2>
        <div class="howto">
            <div class="howto__left">
                <div class="howto__ul">
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht1.png" alt=""></span>
                        <p><b>Ostavite podatke za dostavu</b> na našem sajtu</p>
                    </div>
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht2.png" alt=""></span>
                        <p>Kontaktiraćemo vas da <b>potvrdimo porudžbinu</b> u najkraćem roku</p>
                    </div>
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht3.png" alt=""></span>
                        <p>Šaljemo brzom poštom u roku od <b>1-2 radna dana</b></p>
                    </div>
                </div>
            </div>
            <div class="howto__right">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/maloy.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2> <span>CLEAN BALLZ</span></h2>
        <h3>Pranje veša bez skupih deterdženata</h3>
        <p class="subtitle">1 kugla pere do 1000 mašina veša</p>
        <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product.png" alt="" class="foot-img">
        <div class="order-form" id="order_form">
            <p style="text-align: center;font-size: 20px;font-weight: 700;">Popust 40%</p>
            <div class="price">
                <div class="price__old">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
                <div class="price__new">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="order-form__tile">PODACI ZA DOSTAVU</div>
            <div class="order-form__subtitle"></div>
            <form class="main-order-form main-order-form mainform-body" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="mainform-body__field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="mainform-body__field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="mainform-body__field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="mainform-body__field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="mainform-body__btn">Poručite sa popustom</button>
            </form>
        </div>
    </div>
</section>
<script src='{{ asset('/') }}dailysharkFiles/cleanballz/main.js'></script>
@include('components.pixel_footer')
</body>
</html>
