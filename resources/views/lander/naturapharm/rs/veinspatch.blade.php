<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="{{ asset('/') }}naturapharmFiles/veinspatch/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('/') }}naturapharmFiles/veinspatch/jquery.bxslider.css" rel="stylesheet" />
    <link href="{{ asset('/') }}naturapharmFiles/veinspatch/style.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <section class="health">
        <div class="container">
            <h3 class="health__title">VEINS PATCH</h3>
        </div>
        <!--/container-->
        <div class="painless__line">
            <div class="container">
                <p class="painless__title"><span class="painless__item"></span><b>Flasteri sa specijalnom prirodnom formulom protiv bola u nogama i proširenih vena</b></p>
            </div>
            <!--/container-->
        </div>
        <div class="health__product">
            <div class="container">
                <div class="product__wrapper">
                    <img alt src="{{ asset('/') }}naturapharmFiles/veinspatch/prod2.png" />
                    <div class="sale sale_health">
                        <img alt src="{{ asset('/') }}naturapharmFiles/veinspatch/sale.png" />
                        <p class="sale__text">- 40%</p>
                    </div>
                </div>
                <div class="health-price">
                    <div class="price__block">
                        <p class="old__price">
                            <s> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</s>
                        </p>
                        <p class="new__price">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</p>
                    </div>
                    <button class="button button_health toform">PORUČITE SADA</button>
                </div>
            </div>
            <!--/container-->
        </div>
    </section>
    <!--/health-->
    <section class="danger">
        <div class="container">
            <ul class="effect">
                <li class="effect__list effect__list_img1">
                    <div class="effect__wrap"><span class="effect__item">Pospešuju </span>cirkulaciju krvi</div>
                </li>
                <li class="effect__list effect__list_img2">
                    <div class="effect__wrap"><span class="effect__item">Oslobađaju od bola </span>u nogama</div>
                </li>
                <li class="effect__list effect__list_img3">
                    <div class="effect__wrap"><span class="effect__item">Smanjuju </span>proširene vene</div>
                </li>
                <li class="effect__list effect__list_img4">
                    <div class="effect__wrap"><span class="effect__item">Pružaju olakšanje </span>od umora</div>
                </li>
            </ul>
            <h3 class="danger__title">Proširene vene <span class="danger__item">mogu da izazovu razne nelagode </span>kao što su:</h3>
            <ul class="why">
                <li class="why__item why__item_img1">
                    <div class="why__wrap"><b>Bolovi</b> u nogama</div>
                </li>
                <li class="why__item why__item_img2">
                    <div class="why__wrap"><b>Problemi</b> sa cirkulacijom</div>
                </li>
                <li class="why__item why__item_img3">
                    <div class="why__wrap"><b>Ispucali</b> kapilari</div>
                </li>
            </ul>
        </div>
        <!--/container-->
    </section>
    <!--/container-->
    <section class="safe">
        <div class="container">
            <div class="safe__inner">
                <h3 class="safe__title"><span class="safe__item">Veins Patch </span> je savremeni i bezbedan proizvod</h3>
                <p class="safe__text">Ove flastere su razvili vrhunski kineski stručnjaci, klinički su testirani i efekat je dokazan kod 99% slučajeva.</p>
            </div>
        </div>
        <!--/container-->
    </section>
    <!--/safe-->
    <section class="formula">
        <div class="container">
            <div class="formula__description">
                <h3 class="description__title"><span class="description__item">Veoma je važno što ovih flasteri </span>ne daju neželjene efekte</h3>
                <p class="description__text"><span class="description__text__item">Aktivni sastojci jačaju i hrane kožu, poboljšavaju mikrocirkulaciju i normalizuju protok krvi.</span></p>
                <div class="formula__product"><img alt class="formula__img" src="{{ asset('/') }}naturapharmFiles/veinspatch/prod2.png" /></div>
            </div>
        </div>
        <!--/container-->
    </section>
    <!--/formula-->
    <section class="main-consist">
        <div class="container">
            <ul class="consist">
                <li class="consist__item">
                    <div class="consist__wrap">
                        <p class="consist__title consist__title_img1">Ekstrakt ginko bilobe</p>
                    </div>
                    <p class="consist__text">Linalol i ginkolid povećavaju elastičnost krvnih sudove</p>
                </li>
                <li class="consist__item">
                    <div class="consist__wrap">
                        <p class="consist__title consist__title_img2">Ekstrakt divljeg kestena</p>
                    </div>
                    <p class="consist__text">Provećava proizvodnju fibrinogena u telu</p>
                </li>
                <li class="consist__item">
                    <div class="consist__wrap">
                        <p class="consist__title consist__title_img3">Ekstrakt hamamelisa</p>
                    </div>
                    <p class="consist__text">Ovaj ekstrakt ima antioksidativno dejstvo, sprečava stvaranje slobodnih radikala koji mogu oštetiti zidove krvnih sudova.</p>
                </li>
            </ul>
        </div>
        <!--/container-->
    </section>
    <!--/consist-->
    <section class="advice">
        <div class="container">
            <div class="advice__product"><img alt class="advice__img" src="{{ asset('/') }}naturapharmFiles/veinspatch/prod2.png" /></div>
            <h3 class="advice__title">
                Ne dozvolite da vam se situacija otme kontroli.
                <span class="advice__item"><span class="advice__item advice__item_upper">Reagujte preventivno da ne biste dobili proširene vene i otečene noge.</span></span>
            </h3>
            <button class="button button_advice toform">PORUČITE SADA</button>
        </div>
        <!--/container-->
    </section>
    <!--/advice-->
    <section class="reviews">
        <div class="container">
            <h3 class="reviews__title">Pročitajte utiske naših kupaca</h3>
            <ul class="bx-slider reviews-slider">
                <li class="reviews-slider">
                    <p class="user__name">Mirjana Ristanović, 33</p>
                    <p class="user__text">
                        Već dugo vremena su me nakon posla bolele noge. Prijatelj mi je preporučio ove flastere i počela sam da ih koristim.
                        Moram da vam priznam da mi je nakon kraćeg vremena bilo dosta bolje, a nakon 2 nedelje bol je potpuno iščezao.
                    </p>
                </li>
                <li class="reviews-slider">
                    <p class="user__name">Pavle Babović, 50</p>
                    <p class="user__text">
                        Već dugo sam tražio ovakav proizvod koji daje instant olakšanje. Imam proširene vene i bolove u nogama i ovo je jedino sredstvo koje mi pomaže da otklonim bol i smanjim proširene vene.
                        Sve preporuke!
                    </p>
                </li>
                <li class="reviews-slider">
                    <p class="user__name">Jovana Savić, 52</p>
                    <p class="user__text">
                        Ceo život nosim štikle, ali poslednjih godina počele su noge da mi otiču i pojavile su mi se proširene vene.
                        Probala sam nekoliko kozmetičkih proizvoda, ali ništa mi osim ovih flastera nije pomoglo.
                        Kada ih stavim osetim ogromno olakšanje. Od sada uvek imam bar 10 kutija na zalihama za slučaj da nestane u prodaji.
                    </p>
                </li>
            </ul>
        </div>
        <!--/container-->
    </section>
    <!--/reviews-->
    <section class="beauty">
        <div class="container">
            <h3 class="beauty__title">Pružite <span class="beauty__title__item"> svojim nogama olakšanje</span></h3>
            <div class="beauty__product">
                <img alt class="beauty__img" src="{{ asset('/') }}naturapharmFiles/veinspatch/prod2.png" />
                <div class="sale sale_beauty">
                    <img alt src="{{ asset('/') }}naturapharmFiles/veinspatch/sale.png" />
                    <p class="sale__text">- 40%</p>
                </div>
            </div>
        </div>
        <!--/container-->
    </section>
    <!--/beauty-->
    <section class="order">
        <div class="container">
            <div class="order__form">
                <p class="order__form__title">Unesite podatke za dostavu</p>
                <div class="form__price">
                    <p class="form__old-price">
                        <s> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</s>
                    </p>
                    <p class="form__new-price">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</p>
                </div>
                <form action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="order__field" name="name" placeholder="Ime i prezime" type="text" />
                    <input class="order__field only_number" name="phone" placeholder="Telefon" type="tel" />
                    <button class="button form__button">PORUČITE SADA</button>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}naturapharmFiles/veinspatch/jquery.bxslider.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/veinspatch/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
