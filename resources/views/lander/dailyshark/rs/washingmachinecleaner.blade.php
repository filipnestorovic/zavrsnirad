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
        .top-title {
            line-height: 0.8em;
        }
        .top-title p {
            font-size: 46px;
        }
        .block7 h2 {
            line-height: 0.8em;
        }
        .block7 p {
            font-size: 46px;
        }
        @media screen and (max-width: 779px) {
            .block1   {
                background: url({{ asset('/') }}dailysharkFiles/cleanballz/block1_small.jpg) no-repeat center 130px;
            }
            .top-title {
                line-height: 1.2em;
            }
            .top-title p {
                font-size: 30px;
            }
            .block7 p {
                font-size: 30px;
            }
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
        <h1 class="top-title"> <span>Washing Machine </span> <p>Cleaner</p></h1>
        <h2 class="subtitle">TEMELJNO ČIŠĆENJE VEŠ MAŠINE JEDNOM KAPSULOM</h2>
        <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/product.png" alt="" class="product_img">
        <div class="bullets">
            <div class="bullets__item">
                <p>Eliminiše bakterije koje se razmnožavaju u mašini</p>
            </div>
            <div class="bullets__item">
                <p>Produžava radni vek mašine za veš</p>
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
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/product2.png" alt="" class="about_img__large">
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/product2.png" alt="" class="about_img__small">
                <a class="btn" href="#order_form">Poručite sa popustom</a>
            </div>
            <div class="about__right">
                <h2 class="title">Predstavljamo vam trenutno najprodavaniji proizvod u Evropi i svetu</h2>
                <p>Washing Machine Cleaner je proizvod koji se koristi za čišćenje veš mašina i uklanjanje nečistoća i naslaga deterdženta koji se vremenom nakupljaju u mašini.
                    Ovi ostaci mogu dovesti do neprijatnog mirisa, slabijeg pranja veša i smanjenja performansi vaše mašine.</p>
                <p>Korišćenje Washing Machine Cleanera je jednostavno - jednostavno ga dodajte u bubanj mašine i pokrenite ciklus pranja bez dodavanja veša.
                    Proizvod će ukloniti naslage i nečistoće u vašoj mašini, a takođe će otkloniti neprijatan miris i ostaviti vašu mašinu čistom i svežom.</p>
                <p>Redovno korišćenje Washing Machine Cleanera preporučuje se kako bi se održala performansa vaše veš mašine i produžio njen vek trajanja.
                    Ovaj proizvod se može koristiti jednom mesečno ili po potrebi, u zavisnosti od stepena prljavštine mašine.</p>
                <p>Ne dozvolite da nečistoće i ostaci deterdženta utiču na performanse vaše mašine i kvalitet pranja veša.
                    Koristite Washing Machine Cleaner i uživajte u čistoj, svežoj i besprekornoj funkciji vaše veš mašine.</p>
            </div>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2 class="title">Washing Machine Deep Clean Formula <br/> Najbolje sredstvo za čišćenje veš mašina u Evropi</h2>
        <div class="preim">
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/preim1.jpg" alt="">
                <p>Uklanja nakupljeni deterdžent, kamenac i ostale nečistoće u mašini, što može dovesti do poboljšanja performansi mašine i kvaliteta pranja veša.</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/preim2.jpg" alt="">
                <p>Nakupljeni deterdžent i nečistoće u mašini mogu dovesti do neprijatnih mirisa. Washing Machine Cleaner uklanja mirise, što će vam omogućiti svežije i prijatnije pranje veša.</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/preim3.jpg" alt="">
                <p>Redovno korišćenje Washing Machine Cleanera može pomoći u produženju veka trajanja vaše veš mašine.</p>
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
                    <p>Ovaj proizvod je neverovatan! Koristila sam ga prvi put nakon godina korišćenja moje veš mašine i nisam bila svesna koliko je prljava.
                        Nakon jednog korišćenja, primetila sam veliku razliku u kvalitetu pranja veša i mirisu.
                        Takođe, primetila sam da se mašina manje trese tokom ciklusa pranja. Ovaj proizvod je definitivno postao redovni deo moje rutine čišćenja.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev2.png"><br>
                        <b>Danijel Kostović</b>
                    </center>
                    <p>Nisam verovao koliko je moja veš mašina prljava dok nisam koristio Washing Machine Cleaner. Nakon prvog korišćenja, primetio sam da je miris mašine nestao, a veš je bio mekši i čistiji.
                        Nakon nekoliko korišćenja, primetio sam da se mašina manje trese i da su ciklusi pranja efikasniji. Preporučujem ovaj proizvod svima koji žele da održe svoju veš mašinu u dobrom stanju.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev3.png"><br>
                        <b>Kosta Jovanović</b>
                    </center>
                    <p>Ovaj proizvod je savršen za održavanje veš mašine u dobrom stanju. Uvek sam bio skeptičan u vezi sa proizvodima za čišćenje veš mašine, ali odlučio sam da probam Washing Machine Cleaner i nisam se razočarao.
                        Primetio sam da se miris mašine poboljšao i da je veš mekši nakon korišćenja ovog proizvoda. Takođe, smanjio se broj mrlja na vešu. Preporučujem ovaj proizvod svima koji žele da održe svoju veš mašinu u vrhunskom stanju.</p>
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
                    <li>Upotreba: <span> za pranje veš mašine</span></li>
                    <li>Materijal: <span> mašinski deterdžent u čvrstom stanju</span></li>
                    <li>Broj kapsula u pakovanju: <span> 12</span></li>
                    <li>Bezbedno za zdravlje: <span> DA</span></li>
                    <li>Tipovi mašina: <span> Univerzalno</span></li>
                    <li>Ocena proizvoda: <span> 9.8</span></li>
                    <li>Broj naših zadovoljih kupaca: <span> 6500</span></li>
                    <li>Težina jedne kapsule: <span> 15 grama</span></li>
                    <li>Priloženo uputstvo za upotrebu: <span> DA</span></li>
                </ul>
            </div>
            <div class="char-box__right">
                <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/char.jpg" alt="">
            </div>
        </div>
        <a class="btn" href="#order_form">Poručite sa popustom</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">Kako do Washing Machine Cleaner proizvoda?</h2>
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
        <h2> <span>Washing Machine </span> <p>Cleaner</p></h2>
        <h3>Produženje radnog veka veš mašine i eliminisanje bakterija jednom kapsulom</h3>
        <p class="subtitle">Najprodavaniji proizvod u Evropi</p>
        <img src="{{ asset('/') }}dailysharkFiles/washingmachinecleaner/product.png" alt="" class="foot-img">
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
