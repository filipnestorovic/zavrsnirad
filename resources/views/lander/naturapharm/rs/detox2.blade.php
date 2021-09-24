<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Playfair+Display:400,700&amp;display=swap" rel="stylesheet"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{ asset('/') }}natureteaFiles/bentolit/composition_pict_01.png" rel="shortcut icon" type="image/png"/>
    <link type="text/css" href="{{ asset('/') }}natureteaFiles/bentolit/order_me.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}natureteaFiles/bentolit/fullpage.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}natureteaFiles/bentolit/slick.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}natureteaFiles/bentolit/main.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}natureteaFiles/bentolit/media.css" rel="stylesheet"/>
</head>
<body>
<div class="s__main">
    <div class="wrapper">
        <div id="fullpage">
            {{--<div class="logo"></div>--}}
            <section class="section present">
                <div class="container">
                    @include('components.display_errors')
                    <h1 class="present__title">Kinoki</h1>
                    <div class="present__product">
                        <img src="{{ asset('/') }}natureteaFiles/bentolit/product_01.png"/>
                    </div>
                    <div class="present__wrap">
                        <div class="present__cell">
                            <div class="present__mark"><span>-40%</span></div>
                            <h2 class="subtitle">Kineska <br/>mudrost <br/>Savremena <br/>tehnologija!</h2>
                        </div>
                        <div class="present__cell"></div>
                        <div class="present__cell">
                            <p class="present__text">
                                U današnjem vremenu poželjno je barem jednom mesečno uraditi <b>detoksikaciju organizma</b> i preporoditi svoje telo!
                            </p>
                            <ul class="present__list">
                                <li class="present__item">
                                    <div class="present__icon present__icon_01"></div>
                                    Potpuna <b>detoksikacija</b>organizma
                                </li>
                                <li class="present__item">
                                    <div class="present__icon present__icon_02"></div>
                                    Recept<b>vekovima</b>star
                                </li>
                                <li class="present__item">
                                    <div class="present__icon present__icon_03"></div>
                                    <b>100% učinkoviti</b> i bezbedni
                                </li>
                            </ul>
                            <div class="button__wrap button__wrap_mod" style="padding-bottom: 20px;">
                                <button class="goToForm" type="button">PORUČITE SADA</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="present__cursor"></div>
            </section>
            <section class="section advantages">
                <div class="advantages__decore advantages__decore_01" data-horizontal="1" data-unshow=""></div>
                <div class="container">
                    <div data-unshow="">
                        <h1 class="title">Kinoki</h1>
                        <h2 class="subtitle">— čisti</h2>
                        <div class="advantages__wrap">
                            <p class="advantages__text">
                                Kinoki flasteri ublažavaju napetost i umor, poboljšavaju san, čiste kožu i poboljšavaju opšte zdravstveno stanje.
                                Koristeći ove flastere, toksini koji se skupljaju u telu i krvotoku bivaju brzo eliminisani iz organizma.
                            </p>
                            <ul class="advantages__list">
                                <li class="advantages__item"><b>Detoksikacija</b> organizma</li>
                                <li class="advantages__item">Oslobađanje od <b>glavobolje i stresa</b></li>
                                <li class="advantages__item">Pozitivno delovanje na <b>unutrašnje organe</b></li>
                                <li class="advantages__item"><b>Podmlađivanje</b> tela</li>
                            </ul>
                            <div class="button__wrap button__wrap_mod">
                                <button class="goToForm" type="button">ISKORISTITE PONUDU</button>
                            </div>
                            <!--<div class="product">-->
                            <!--<img src="img/product_01.png">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>
            <section class="section advantages advantages_mod-01">
                <div class="advantages__decore advantages__decore_on-right" data-horizontal="2" data-unshow=""></div>
                <div class="container">
                    <div data-unshow="">
                        <h1 class="title">Kinoki</h1>
                        <h2 class="subtitle">— za zdravo telo i zdrav duh!</h2>
                        <div class="advantages__wrap advantages__wrap_on-left">
                            <p class="advantages__text">
                                Prekomerna količina toksina neizbežno ostavlja traga na zdravlju ili nekom organu i izaziva razne bolesti.
                                Kinoki flasteri sprečavaju sledeća stanja organizma:
                            </p>
                            <ul class="advantages__list">
                                <li class="advantages__item">Glavobolja</li>
                                <li class="advantages__item">Hronični umor</li>
                                <li class="advantages__item">Impotencija</li>
                                <li class="advantages__item">Bol u vratu i ramenima</li>
                                <li class="advantages__item">Mastopatija</li>
                            </ul>
                            <div class="button__wrap">
                                <button class="goToForm" type="button">PORUČITE SADA</button>
                            </div>
                            <!--<div class="product">-->
                            <!--.product_add-pack - добавляет упаковку-->
                            <!--<img src="img/product_01.png">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>
            <section class="section advantages advantages_mod-02">
                <div class="advantages__decore advantages__decore_mod" data-horizontal="1" data-unshow=""></div>
                <div class="container">
                    <div data-unshow="">
                        <h1 class="title">Kinoki</h1>
                        <h2 class="subtitle">— Lekovito prirodno moćno <br/> sredstvo za detoksikaciju</h2>
                        <div class="advantages__wrap">
                            <p class="advantages__text">
                                Pomaže u otklanjanju glavobolje, stresa, oslobađa telo od tečnosti, popravlja kvalitet sna i vraća energiju.
                            </p>
                            <ul class="advantages__list">
                                <li class="advantages__item">Posebna kombinacija <b>lekovitih kineskih trava</b></li>
                                <li class="advantages__item"><b>Vekovima čuvani recepti</b> kineske medicine</li>
                                <li class="advantages__item"><b>Savremena tehnologija</b> proizvodnje</li>
                                <li class="advantages__item">Pokupiće sve <b>toksine iz organizma</b> na jednom mestu</li>
                            </ul>
                            <div class="button__wrap">
                                <button class="button_mod goToForm" type="button">POMOZITE SVOM ORGANIZMU</button>
                            </div>
                            <!--<div class="product"> -->
                            <!--.product_add-pack .product_third-pack - добавляет упаковки-->
                            <!--<img src="img/product_01.png">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>
            <div class="section normalScroll">
                <section class="composition">
                    <div class="container">
                        <h1 class="title title_centered">Kinoki</h1>
                        <h3 class="composition__subtitle">Recept za flastere uključuje preko 7 lekovitih trava i
                            dobijen je kao rezultat vekovnih istraživanja narodnih iscelitelja.</h3>
                        <div class="composition__wrap">
                            <img class="composition__photo" src="{{ asset('/') }}natureteaFiles/bentolit/kinoki2.png"/>
                            <div class="composition__item composition__item_01 composition__item_left">
                                <div class="composition__pict composition__pict_01"></div>
                                <b class="composition__name">Komorač</b>
                                <p class="composition__text">poboljšava probavnu funkciju</p>
                            </div>
                            <div class="composition__item composition__item_02 composition__item_right">
                                <div class="composition__pict composition__pict_02"></div>
                                <b class="composition__name">Turmalin</b>
                                <p class="composition__text">mineral koji pojačava rad bubrega i jetre</p>
                            </div>
                            <div class="composition__item composition__item_03 composition__item_left">
                                <div class="composition__pict composition__pict_03"></div>
                                <b class="composition__name">Divlji đumbir</b>
                                <p class="composition__text">jača imunitet i ublažava razvoj brojnih bolesti</p>
                            </div>
                            <div class="composition__item composition__item_04 composition__item_right">
                                <div class="composition__pict composition__pict_04"></div>
                                <b class="composition__name">Valeriana</b>
                                <p class="composition__text">poboljšava san</p>
                            </div>
                            <div class="composition__item composition__item_05 composition__item_left">
                                <div class="composition__pict composition__pict_05"></div>
                                <b class="composition__name">Koren maslačka</b>
                                <p class="composition__text">pospešuje izbacivanje toksina</p>
                            </div>
                            <div class="composition__item composition__item_06 composition__item_right">
                                <div class="composition__pict composition__pict_06"></div>
                                <b class="composition__name">Sirće bambusa</b>
                                <p class="composition__text">pospešuje procese čišćenja organizma</p>
                            </div>
                            <div class="composition__item composition__item_07 composition__item_center">
                                <div class="composition__pict composition__pict_07"></div>
                                <b class="composition__name">Anion</b>
                                <p class="composition__text">normalizuje PH vrednost i hormone u organizmu</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="use">
                    <div class="container">
                        <h1 class="title">Kinoki</h1>
                        <h2 class="subtitle">— kako se koristi</h2>
                        <p class="use__text"></p>
                        <ul class="use__list">
                            <li class="use__item">Stopala oprati i osušiti</li>
                            <li class="use__item">Nalepiti flastere na stopala</li>
                            <li class="use__item">Ostaviti da deluje preko noći</li>
                            <li class="use__item">Ujutru skinuti flastere i oprati stopala vodom</li>
                        </ul>
                        <p class="use__subtext">Rezultati vidljivi nakon 1 kutije. Za najbolji rezultat preporučuju se da iskoristite 2-3 kutije bez prekida.</p>
                    </div>
                </section>
                <section class="opinion">
                    <div class="container">
                        <div class="opinion__wrap">
                            <h1 class="subtitle">Mišljenje struke</h1>
                            <h2 class="opinion__subtitle"></h2>
                            <p class="opinion__text">Najvažnije u procesu lečenja bilo kakve bolesti je očistiti organizam od toksina koje organizam sakuplja zbog nezdravog načina života. Ranije je jedino rešenje bilo propisivanje preparata za detoksikaciju koji negativno utiču na jetru i probavni takt.</p>
                            <p class="opinion__text">Imala sam pacijene koji su se žalili na glavobolje, hronični umor, bol u vratnom delu kičme, a sve to kao posledicu nakupljanja toksina u organizmu koji su remetili normalne telesne funkcije.</p>
                            <p class="opinion__text">Kada sam svojim pacijentima počela da preporučujem KINOKI, nakon određenog vremena dobar deo njih je imao znatno manje problema, a većini su problemi skroz nestali. KINOKI flasteri su odlični za priorodno izbacivanje toksina iz organizma i svakome prepoučujem detoksikaciju bar jednom mesečno.</p>
                        </div>
                    </div>
                </section>
                <section class="reviews">
                    <div class="container">
                        <h2 class="subtitle subtitle_colored">Utisci naših kupaca</h2>
                        <div class="reviews__wrap">
                            <div class="reviews__cell">
                                <div class="reviews__item">
                                    <img class="reviews__photo" src="{{ asset('/') }}natureteaFiles/bentolit/reviews_photo_01.jpg"/>
                                    <div class="reviews__name">Gabrijela, 44 godine</div>
                                    <p class="reviews__text">Godinama sam imala problem sa viškom tečnosti u organizmu i otokom na nogama. Pokušavala sam sve i svašta, ali su mi lekovi često pravili druge probleme. Ćerka mi je kupila Kinoki, i to je jedini proizvod koji mi je pomogao.
                                        Imam ga u svojoj apoteci u većim zalihama. Hvala vam!</p>
                                </div>
                            </div>
                            <div class="reviews__cell">
                                <div class="reviews__item">
                                    <img class="reviews__photo" src="{{ asset('/') }}natureteaFiles/bentolit/reviews_photo_02.jpg"/>
                                    <div class="reviews__name">Dragana, 36 godina</div>
                                    <p class="reviews__text">Dobar dan. Radim mnogo u kancelariji, i imala sam problem sa bolom u mišićima, udovi su mi bili teški, nisam imala dovoljno energije i bila sam jako mrzovoljna.
                                        Na internetu sam pronašla KINOKI flastere i pokušala sam da detoksikujem svoj organizam. Nakon dve kutije, simptomi koji su me mučili su skroz nestali, a ja se evo već 3 meseca osećam odlično.
                                        Sada preventivno svaki mesec potrošim jednu kutiju jer ne želim ni da mi se ponovi onaj teški period.</p>
                                </div>
                            </div>
                            <div class="reviews__cell">
                                <div class="reviews__item">
                                    <img class="reviews__photo" src="{{ asset('/') }}natureteaFiles/bentolit/reviews_photo_03.jpg"/>
                                    <div class="reviews__name">Marija, 24 godine</div>
                                    <p class="reviews__text">Zbog ubrzanog načina života, ne stižem da se hranim zdravo onoliko koliko bih želela. Mislim da sam zbog toga počela da osećam stalnu iscrpljenost i glavobolju.
                                        Majka mi je preporučila da uzmem Kinoki flastere kako bih očistila svoj organizam. Već u drugoj nedelji korišćenja sam počela da osećam razliku. Imala sam više energije i budila sam se odmornija nego ranije, a i glavobolje su postale sve ređe.
                                        Slobodno mogu da kažem da ovaj proizvod preporučujem svima, jer je zaista dobar!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="instructions">
                    <div class="container">
                        <div class="instructions__inner">
                            <h1 class="title">Kinoki</h1>
                            <div class="subtitle subtitle_centered">PROCES PORUČIVANJA</div>
                            <div class="instructions__wrap">
                                <div class="instructions__cell">
                                    <div class="instructions__item">
                                        <span>Unesite podatke za dostavu u formu ispod </span>
                                    </div>
                                </div>
                                <div class="instructions__cell">
                                    <div class="instructions__item">
                                        <span>Kontaktiraćemo Vas da potvrdimo porudžbinu u najkraćem roku</span>
                                    </div>
                                </div>
                                <div class="instructions__cell">
                                    <div class="instructions__item">
                                        <span>Paket ćemo vam poslati brzom poštom u roku od 1-2 radna dana. Plaćate po prijemu pošiljke.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="order">
                    <div class="container">
                        <div class="order__wrap">
                            <div class="order__item">
                                <h1 class="title">Kinoki</h1>
                                <h2 class="subtitle">Potpuni detox organizma</h2>
                                <p class="order__text"></p>
                                <ul class="order__list">
                                    <li class="order__point order__point_01">
                                        <div class="order__pict order__pict_01"></div>
                                        Sastojci iz prirode
                                    </li>
                                    <li class="order__point order__point_02">
                                        <div class="order__pict order__pict_02"></div>
                                        Recept vekovima star
                                    </li>
                                    <li class="order__point order__point_03">
                                        <div class="order__pict order__pict_03"></div>
                                        100% učinkoviti i bezbedni
                                    </li>
                                </ul>
                                <div class="order__product">
                                    {{--<img src="{{ asset('/') }}natureteaFiles/bentolit/order_product_01.png"/>--}}
                                    {{--<img class="order__photo" src="{{ asset('/') }}natureteaFiles/bentolit/order_product_02.png"/>--}}
                                    <img class="order__photo" src="{{ asset('/') }}natureteaFiles/bentolit/product_01.png"/>
                                </div>
                            </div>
                            <div class="order__item">
                                <div class="form__wrap">
                                    <div class="subtitle subtitle_centered">PODACI ZA DOSTAVU</div>
                                    <form action="{{$orderRoute}}" method="post">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <div class="form__field">
                                            <input name="name" id="name" placeholder="Ime i prezime" type="text"/>
                                        </div>
                                        <div class="form__field">
                                            <input class="only_number" name="phone" id="phone" placeholder="Broj telefona" type="text"/>
                                        </div>
                                        <div class="form__field">
                                            <label for="quantity">Izaberite količinu</label>
                                            <select name="quantity" id="quantity" required>
                                                @foreach($prices as $singlePrice)
                                                    <option value="{{$singlePrice['quantity']}}"
                                                            @if($singlePrice['is_default']) selected @endif
                                                            @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                                    >
                                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="price">
                                            <div class="price__value price__old"><span>{{$prices[1]['originalPrice']}} RSD</span></div>
                                            <div class="price__value"><span>{{$prices[1]['amount']}} RSD</span></div>
                                        </div>
                                        <div class="button__wrap">
                                            <button class="js_pay_online_secondpage" type="submit">PORUČI SADA</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}natureteaFiles/bentolit/fullpage.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}natureteaFiles/bentolit/common.js"></script>
@include('components.pixel_footer')
</body>
</html>