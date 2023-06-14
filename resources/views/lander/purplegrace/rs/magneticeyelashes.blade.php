<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/style.css">
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
<!--offer-->
<section class="offer">
    <div class="wrap">
        <div class="main-title">Magnetic <span>Eyelashes</span></div>
        <div class="sub-title">FASCINANTAN IZGLED ZA 1 MINUT!</div>
        <div class="sale">Popust <b>-40%</b></div>
        <!--order-box-->
        <div class="order-box">
            <!--bullet-->
            <ul class="bullet">
                <li>Efekat produženja trepavica</li>
                <li>Pogodno za bilo koju vrstu trepavica</li>
                <li>Ne oštećuje i ne izaziva iritaciju</li>
            </ul>
            <!--/bullet-->
            <!--price-->
            <div class="price">
                <div class="old">
                    <p>Stara cena</p>
                    <div class="val"><span>{{ $prices[1]['originalPrice'] }}</span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
                <div class="new">{{ $prices[1]['amount'] }}<i>{{ $prices[1]['currency'] }}</i></div>
            </div>
            <!--/price-->
            <a href="#order" class="button-m">PORUČITE SADA</a>
            <div class="stock">Ostalo još <b>17</b> komada na akciji!</div>
        </div>
        <!--/order-box-->
    </div>
</section>
<!--/offer-->
<!--s1-->
<section class="s1">
    <div class="wrap">
        <h2 class="title">Magnetic Eyelashes <span>za zavodljiv pogled!</span></h2>
        <!--box-->
        <div class="box">
            <div class="title-question">Da li želite da postignete da imate pogled prave lepotice bez posete kozmetičkom salonu?</div>
            <div class="txt">
                Olakšajte sebi put do toga! Samolepljive lažne trepavice će vam pomoći. U samo nekoliko pokreta dobićete bujne i izražajne trepavice volumena kakav možete postići samo u kozmetičkim salonima!
            </div>
            <div class="prd">
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im1.png" alt="">
            </div>
            <div class="alert">
                Savršeno se fiksiraju na sve trepavice, stvarajući spektakularan i atraktivan izgled. U kompletu se dobija i maskara koja čini ove trepavice božanstvenim.
            </div>
        </div>
        <!--/box-->
        <!--photo-list-->
        <ul class="photo-list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-im1.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-gif.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-im3.jpg" alt="">
            </li>
        </ul>
        <!--/photo-list-->
    </div>
</section>
<!--/s1-->
<!--s2-->
<section class="s2">
    <div class="wrap">
        <h2 class="title">Efekat <span>prirodnih trepavica</span></h2>
        <!--list-v1-->
        <ul class="list-v1">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon1.png" alt="">
                <h4>4D volumen</h4>
                <p>Dužina trepavica se povećava od unutrašnjeg ugla oka do spoljašnjeg i tako stvara efekat "otvorenih" očiju.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon2.png" alt="">
                <h4>Dugotrajan</h4>
                <p>Obezbeđena je dugotrajna fiksacija do 15 sati</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon3.png" alt="">
                <h4>Hipoalergeno</h4>
                <p>Bez lepka i alergena</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon4.png" alt="">
                <h4>Jednostavnost</h4>
                <p>Lako se postavljaju, ne osećaju se na očima i lako se uklanjaju.</p>
            </li>
        </ul>
        <!--/list-v1-->
        <a href="#order" class="button-m">PORUČITE SADA</a>
    </div>
</section>
<!--/s2-->
<!--s3-->
<section class="s3">
    <div class="wrap">
        <h2 class="title">Zašto su naše trepavice  <span>bolje od ekstenzija koje se rade</span>  u kozmetičkim salonima?</h2>
        <!--list-v2-->
        <ul class="list-v2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s3-im1.jpg" alt="">
                <h4>Ekstenzije u salonima:</h4>
                <div class="not">
                    <div class="item">Slabi prirodni rast trepavice</div>
                    <div class="item">Vaše trepavice počinju brže da opadaju</div>
                    <div class="item">Alergijske reakcije zbog prisustva lepka</div>
                    <div class="item">Kvalitetne ekstenzije koštaju mnogo novca</div>
                </div>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s3-im2.jpg" alt="">
                <h4>Naše trepavice:</h4>
                <div class="yes">
                    <div class="item">Ne štete vašim trepavicama</div>
                    <div class="item">Daje prirodnim trepavicama odmor preko noći</div>
                    <div class="item">Potpuno odsustvo alergijskih reakcija</div>
                    <div class="item">Štedi novac i vrlo je ekonomično</div>
                </div>
            </li>
        </ul>
        <!--/list-v2-->
    </div>
    <!--slider-result-->
    <div class="slider-result">
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im2.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im3.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im4.jpg" alt="">
        </div>
    </div>
    <!--/slider-result-->
</section>
<!--/s3-->
<!--spec-->
<section class="spec">
    <div class="wrap">
        <div class="inner">
            <h2 class="title">Mišljenje <span> struke</span></h2>
            <img class="ava" src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/spec-ava.jpg" alt="">
            <div class="name"></div>
            <div class="desc">
                Ekstenzije trepavica na klasičan način su prošli vek. <br/>
                Sve češće klijenti dolaze sa zahtevom da urade nešto po pitanju svojih potpuno oštećenih trepavica.
                <br/><br/><br/>
            </div>
            <div class="alert">
                Samolepljive trepavice izdržaće i najužurbaniji dan. Stvaraju prirodan efekat lepog i zavodljivog pogleda bez ikakvog lošeg uticaja na vaše prirodne trepavice.
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im2.png" alt="">
            </div>
            <a href="#order" class="button-m">PORUČITE SADA</a>
        </div>
    </div>
</section>
<!--/spec-->
<!--s4-->
<section class="s4">
    <div class="wrap">
        <h2 class="title">Korišćenje Magnetic Eyelashes trepavica je <span>neverovatno lako!</span></h2>
        <!--list-v3-->
        <ul class="list-v3">
            <li>
                <div class="pic">
                    <div class="num">1</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im1.jpg" alt="">
                </div>
                <p>Trepavice se lepe nakon što ste se našminkali</p>
            </li>
            <li>
                <div class="pic">
                    <div class="num">2</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im2.jpg" alt="">
                </div>
                <p>Uzmite trepavice i stavite ih na oči</p>
            </li>
            <li>
                <div class="pic">
                    <div class="num">3</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im3.jpg" alt="">
                </div>
                <p>Poravnajte ivice što je bliže moguće korenu sopstvenih trepavica</p>
            </li>
            <li>
                <div class="txt">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im3.png" alt="">
                    Svaka trepavica ima svoju prirodnu krivinu i šiljasti vrh, tako da izgleda veoma prirodno.
                </div>
            </li>
        </ul>
        <!--/list-v3-->
    </div>
</section>
<!--/s4-->
<!--reviews-->
<section class="reviews">
    <div class="wrap">
        <h2 class="title">Utisci kupaca koje su već isprobale <span>Magnetic Eyelashes trepavica</span></h2>
        <!--slider-rev-->
        <div class="slider-rev">
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev1.jpg" alt="">
                    <div class="info">
                        <h4>Marija Kostović</h4>
                        <p>24 godine, Kragujevac</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    Veoma su me obradovale ove trepavice. Kada sam ih poručila jako brzo su mi stigle.
                    Savetujem svim devojkama da kupe ovo čudo.
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev2.jpg" alt="">
                    <div class="info">
                        <h4>Kristina Novaković</h4>
                        <p>29 godina, Novi Sad</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    Koristim ove trepavice već 2 meseca i potpuno sam oduševljena. Brzo se postavljaju, lako se skidaju a dok ih nosim ne razmišljam da li će da spadnu.
                    Što je najvažnije za mene ova tehnologija ne zahteva posebne veštine, svaki početnik će za 2 minuta naučiti kako se trepavice montiraju.
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev3.jpg" alt="">
                    <div class="info">
                        <h4>Valerija Vojvodić</h4>
                        <p>35 godina, Lazarevac</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    Čim sam saznala za ove trepavice odmah sam poručila. Veoma je koristan izum i preporučujem ga svim ženama. Ne iritira nežnu kožu kapaka i ne dolaze u kontakt sa sluzokožom.
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
        </div>
        <!--/slider-rev-->
        <a href="#order" class="button-m">PORUČITE SADA</a>
    </div>
</section>
<!--/reviews-->
<!--order-info-->
<section class="order-info">
    <div class="wrap">
        <h2 class="title"><span>Dostava</span> i plaćanje</h2>
        <!--order-list-->
        <ul class="order-list">
            <li>
                <div class="txt">
                    <h4>BRZA DOSTAVA</h4>
                    <p>
                        Šaljemo poštom u roku od 1-2 radna dana.
                    </p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <h4>PLAĆANJE PO PRIJEMU</h4>
                    <p>
                        Nema plaćanja unapred, plaćate kuriru brze pošte po preuzimanju paketa.
                    </p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <h4>GARANCIJA KVALITETA</h4>
                    <p>
                        Pre slanja, svi proizvodi se pažljivo proveravaju i dajemo garanciju kvaliteta.
                    </p>
                </div>
            </li>
        </ul>
        <!--/order-list-->
    </div>
</section>
<!--/order-info-->
<!--offer-->
<section class="offer bottom">
    <div class="wrap">
        <div class="main-title">Magnetic <span>Eyelashes</span></div>
        <div class="sub-title">FASCINANTAN IZGLED ZA 1 MINUT!</div>
        <div class="sale">Popust <b>-40%</b></div>
        <!--order-box-->
        <div class="order-box">
            <!--price-->
            <div class="price">
                <div class="old">
                    <p>Redovna cena:</p>
                    <div class="val"><span>{{ $prices[1]['originalPrice'] }}</span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
                <div class="new">{{ $prices[1]['amount'] }}<i>{{ $prices[1]['currency'] }}</i></div>
            </div>
            <!--/price-->
            <!--m1-form-->
            <form class="main-order-form m1-form" id="order" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="field" type="tel" name="phone" placeholder="Telefon" required>
                <button class="button-m">PORUČITE ODMAH</button>
            </form>
            <!--/m1-form-->
            <div class="stock">Ostalo još <b>17</b> komada na akciji!</div>
        </div>
        <!--/order-box-->
    </div>
</section>
<!--/offer-->
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
