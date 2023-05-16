<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplegraceFiles/kisiclipsic/favicon.ico" type="image/png"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplegraceFiles/kisiclipsic/settings.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplegraceFiles/kisiclipsic/style.css"/>
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
<section class="offer">
    <div class="wrap">
        <!--box-->
        <div class="box">
            <h1><span>KISIĆ LIPSIĆ</span> <br/></h1>
            <div class="sub_title">Sredstvo za vizuelno povećavanje usana</div>
            <div class="sale">Akcija! <b>40%</b> popusta</div>
            <!--bullet-->
            <ul class="bullet">
                <li><p>Omekšava i povećava usne</p></li>
                <li><p>Daje usnama volumen, sočnost i nežnost</p></li>
                <li><p>Štiti usne od negativnih faktora okoline</p></li>
            </ul>
            <!--/bullet-->
            <!--price-->
            <div class="price clrfix">
                <div class="old">
                    <p>Redovna cena:</p>
                    <div class="val">
                        <span>{{ $prices[1]['originalPrice'] }} </span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
                <div class="new">
                    <p>Cena sada:</p>
                    <div class="val">
                        <span>{{ $prices[1]['amount'] }} </span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
            </div>
            <!--/price-->
            <a href="#order" class="button-m">Poručite sada</a>
            <div class="stock">Ostalo na akciji još <b>27</b> komada</div>
        </div>
        <!--/box-->
    </div>
</section>
<!--/offer-->
<!--b1-->
<section class="b1">
    <div class="wrap">
        <h2 class="title"><span>Sočan i privlačan</span> volumen tvojih usana</h2>
        <div class="pic">
            <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/1.jpg" alt=""/>
        </div>
        <div class="txt">
            <p>
                Momentalno povećavanje volumena usana za nekoliko sekundi. Zahvaljujući ekstraktu zelene čili paprike,
                usne postaju punije, sjajnije i zavodljivije. Veoma efikasna formula pruža
                dugotrajne rezultate. Vitaminski kompleks sa kolagenom vlaži usne, čuvajući njihovu lepotu i sočnost.
            </p>
            <p>
                Zahvaljujući ekstraktu zelene čili paprike, cirkulacija u usnama se ubrzava, postaju toplije i skoro
                duplo veće - za poljubac koji će da se pamti.
            </p>
        </div>
    </div>
</section>

<section class="b2">
    <div class="wrap">
        <h2 class="title"><span>Prednosti</span> Kisić Lipsić proizvoda</h2>
        <!--list-v1-->
        <center>
            <ul class="list-v1">
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b1.jpg" alt=""/>
                    <p>Vlaži usne</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b2.jpg" alt=""/>
                    <p>Daje volumen</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b3.jpg" alt=""/>
                    <p>Stvara jasne konture usana</p>
                </li>
            </ul>
        </center>
    </div>
</section>

<section class="b1">
    <div class="wrap">
        <h2 class="title">Dvostruki <span>hidratantni efekat</span></h2>

        <div class="photo">
            <p>
                <span>
                    Kisić Lipsić ne samo da daje volumen usnama zahvaljujući posebno razvijenoj formuli i efektu čili paprike, već i savršeno hrani i vlaži usne. Može se nanositi u nekoliko slojeva
                    čime se povećava efekat lepih i sočnih usana.
                </span>
            </p>
            <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b1-img1.jpg" alt=""/>
            <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b1-img2.jpg" alt=""/>
        </div>
    </div>
</section>
<!--/b1-->
<!--b2-->

<!--/b2-->
<!--b3-->
<section class="b3">
    <div class="wrap">
        <h2 class="title">Dajte svojim usnama <span>volumen i sjaj uz Kisić Lipsić proizvod</span>, koji svaka žena i
            devojka treba da ima u svojoj torbi</h2>

        <!--box-->
        <div class="box">
            <div class="desc">
                <div class="txt">
                    <p>Formula sjaja obezbeđuje neophodnu vlažnost za zdravije usne. Obogaćen prirodnim sastojcima za
                        negu kože, hrani, osvežava i čini vaše usne savršenim.</p>
                    <p>Tonik kolagena savršeno neguje kožu usana, eliminiše suvoću, leči male pukotine i čini kožu
                        nežnom i glatkom.</p>
                    <p>Zahvaljujući preciznom aplikatoru, tekstura se lako nanosi i bukvalno topi na usnama dajući im
                        izražajnost.</p>
                </div>

                <img class="image2" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b3-im2.jpg" alt=""/>
            </div>
        </div>
        <!--/box-->
    </div>
</section>
<!--/b3-->
<!--expert-block-v1-->

<section class="b2">
    <div class="wrap">
        <h2 class="title">Kisić Lipsić <span>sadrži:</span></h2>
        <!--list-v1-->
        <center>
            <ul class="list-v1">
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b11.jpg" alt=""/>
                    <p>Ekstrakt nane</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b22.jpg" alt=""/>
                    <p>Morski kolagen</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/kisiclipsic/b33.jpg" alt=""/>
                    <p>Ekstrakt zelene čili paprike</p>
                </li>
            </ul>
        </center>
    </div>
</section>

<section class="rev-block-v5">
    <div class="wrap nopad">
        <h2 class="title">Utisci <span>naših kupaca</span></h2>
        <div class="container clearfix">
            <div class="rev-item">
                <img class="rev-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/rev-block-v5_1.jpg" alt=""/>
                <div class="rev-cont">
                    <h4>Paulina Matić</h4>
                    <p>
                        Od kada koristim Kisić Lipsić, moj dečko je načisto pošandrcao, stalno bi da se ljubi. Kaže da
                        su moje usne sočne i vruće, i nikad poželjnije. :)))
                    </p>
                </div>
            </div>
            <div class="rev-item">
                <img class="rev-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/rev-block-v5_2.jpg" alt=""/>
                <div class="rev-cont">
                    <h4>Olivera Jovanović</h4>
                    <p>
                        Zaista mi se dopalo ovo čudo. Dobro radi, a moje usne izgledaju dosta veće nego što inače jesu.
                        Koristim ga i umesto sjaja, mali je i ne zauzima mnogo prostora u torbi.
                    </p>
                </div>
            </div>
            <div class="rev-item">
                <img class="rev-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/rev-block-v5_3.jpg" alt=""/>
                <div class="rev-cont">
                    <h4>Tatjana Nikolić</h4>
                    <p>
                        Čini usne savršeno lepim, punim i sjajnim. Miriše prilično lepo sa slatkim notama. Za one koji
                        vole da grickaju usnu, ovo je predobro. :)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/rev-block-v5-->
<!--delivery-block-v4-->
<section class="delivery-block-v4">
    <div class="wrap nopad">
        <h2 class="title"><span>Kako poručiti</span> Kisić Lipsić?</h2>
        <ul class="list-type-v2 list--numeric">
            <li>
                <img class="list-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/delivery-block-v4_1.png"
                     alt=""/>
                <div class="list-cont">
                    <h4><strong class="col-2">01</strong>Porudžbina</h4>
                    <p>Popunite formular za poručivanje na našoj stranici</p>
                </div>
            </li>
            <li>
                <img class="list-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/delivery-block-v4_2.jpg"
                     alt=""/>
                <div class="list-cont">
                    <h4><strong class="col-2">02</strong>Potvrda</h4>
                    <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                </div>
            </li>
            <li>
                <img class="list-img" src="{{ asset('/') }}purplegraceFiles/kisiclipsic/delivery-block-v4_3.jpg"
                     alt=""/>
                <div class="list-cont">
                    <h4><strong class="col-2">03</strong>Slanje</h4>
                    <p>Šaljemo brzom poštom u roku od 1-2 radna dana. Plaćate po pouzeću.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--/delivery-block-v4-->
<!--offer-->
<section class="offer bottom">
    <div class="wrap">
        <!--box-->
        <div class="box">
            <h1><span>KISIĆ LIPSIĆ</span> <br/></h1>
            <div class="sub_title">Sredstvo za vizuelno povećavanje usana</div>
            <div class="sale">Akcija! <b>40%</b> popusta</div>
            <!--order_form-->
            <div class="order_form">
                <div class="title_sale">Poručite ODMAH <br/><b>sa 40% popusta</b></div>
                <!--m1-form-->
                <form class="main-order-form m1-form" id="order" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="text" class="field name" name="name" placeholder="Ime i prezime" autocomplete="off"
                           required/>
                    <input type="tel" class="field phone" name="phone" placeholder="Telefon"
                           autocomplete="off" required/>
                    <!--price-v2-->
                    <div class="price-v2">
                        <div class="new">
                            <p>Cena sada:</p>
                            <div class="val">
                                <span>{{ $prices[1]['amount'] }} </span><i>{{ $prices[1]['currency'] }}</i>
                            </div>
                        </div>
                        <div class="old">
                            <div class="val">
                                Redovna cena:
                                <span>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                            </div>
                        </div>
                    </div>
                    <!--/price-v2-->
                    <button type="submit" class="button-m">Poručite sada</button>
                </form>
                <!--/m1-form-->
                <div class="stock">Ostalo na akciji još <b>27</b> komada</div>
            </div>
            <!--/order_form-->
        </div>
        <!--/box-->
    </div>
</section>
<!--/offer-->
<script src="{{ asset('/') }}purplegraceFiles/kisiclipsic/jquery.panorama.js"></script>
<script>
    $(document).ready(function () {
        $("img.panorama").panorama();
    });
</script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplegraceFiles/kisiclipsic/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
