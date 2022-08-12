<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript" ></script>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.firstCircle{position:relative;top:30px}.doctorSection img{margin-top:-40px!important}.productSection{margin-top:50px}.scroll__list{position:relative;top:30px}.pair img{margin-top:40px}}@media only screen and (min-width:424px){.scroll__list{position:relative;top:60px}.pair img{margin:50px}}.manual__icon-inner--1 .manual__icon{width:152px;height:185px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)}.manual__icon-inner--2{padding-top:24px}.manual__icon-inner--2 .manual__icon{margin-left:0;width:166px;height:169px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)}.manual__icon-inner--3 .manual__icon{width:143px;height:213px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)}</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Ziołowe plastry detoksykacyjne</h1>
                <h2>DETOX</h2>
                <span>„Chińska mądrość, nowoczesna technologia”</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">nowa cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                <div class="monk"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/monk.png"/></div>
                <div class="ingredients"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/></div>
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture">
                    <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>UWAGA, AKCJA!</h3>
                        <span>ZNIŻKI 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Imię i nazwisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adres zamieszkania" type="text" required/>
                            <input name="shipping_city" placeholder="Miasto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="productLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* DARMOWA DOSTAWA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="ZAMÓW TERAZ"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="triggers hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 triggers__item triggers__icon--bowl">
                <div class="triggers__desc">Stuletni przepis</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktywacja mikrokrążenia w skórze</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Wydalanie nadmiaru wody z organizmu</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Szeroka gama efektów</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Całkowita detoksykacja organizmu</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% skuteczny i bezpieczny</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">W DZISIEJSZYCH CZASACH DETOKSYKACJA I REGENERACJA ORGANIZMU POŻĄDANE JEST CO NAJMNIEJ RAZ W MIESIĄCU</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Obecnie wszyscy prowadzimy częściowo niezdrowy tryb życia i bardzo ważne jest <span>regularne odtruwanie organizmu.</span> Plastry detoksujące wykonane są z ekstraktów roślinnych według tradycyjnej chińskiej receptury i mają na celu wydalenie nadmiaru płynów i toksyn z organizmu poprzez <span>punkty akupunkturowe.</span></p>
                <p>Plastry Kinoki łagodzą napięcie i zmęczenie, poprawiają sen, oczyszczają skórę i poprawiają ogólny stan zdrowia. Za pomocą tych plastrów toksyny gromadzące się w organizmie i <span>krwiobiegu są szybko usuwane z organizmu.</span></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">OBSZARY ZASTOSOWANIA PLASTRÓW „KINOKI”</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Reumatologia</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Limfologia</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Neurologia</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">OCZYSZCZA TWÓJ ORGANIZM Z TOKSYN W ZALEDWIE 5 DNI Z POMOCĄ PLASTRÓW „KINOKI”</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Już pierwsi taoiści mówili, że <span>toksyny</span> są główną przyczyną spadku energii w organizmie.</p>
                <p>Nadmierne ilości toksyn nieuchronnie zostawiają ślad na zdrowiu lub organach i powodują choroby takie jak <span>impotencja, mastopatia, nadciśnienie, bóle głowy, chroniczne zmęczenie</span> i wiele innych.</p>
                <p>Zgodnie z ideami mnichów taoistycznych i tradycyjnej medycyny chińskiej, negatywna energia, która rozprzestrzenia się po całym ciele, <span>może zostać zatrzymana przez detoksykację</span>, dzięki czemu przerwiemy jej ruch w całym ciele.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">„Zdrowe ciało – zdrowy duch”</div>
                <div class="quote__author">Sun Shu-Min</div>
            </div>
        </div>
    </div>
    <div class="scroll">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="video">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="scroll__text">Lecznicze działanie plastra opiera się na następujących efektach:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoksykacja organizmu</li>
                        <li class="scroll__list-item">Łagodzenie bólów głowy i stresu</li>
                        <li class="scroll__list-item">Odmładzanie ciała</li>
                        <li class="scroll__list-item">Poprawa jakości snu</li>
                        <li class="scroll__list-item">Pozytywny wpływ na narządy wewnętrzne</li>
                        <li class="scroll__list-item">Zapobieganie nieprzyjemnym zapachom</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SKŁAD PLASTRÓW DETOKSUJĄCYCH „KINOKI”:</h2>
                <p>Receptura na plastry zawiera ponad 9 ziół leczniczych i została uzyskana w wyniku wielowiekowych badań ludowych uzdrowicieli.</p>
                <p>Plastry detoksujące produkowane są zgodnie z nowoczesną technologią i najwyższymi międzynarodowymi standardami jakości. Plastry Kinoki nie zawierają dodatków chemicznych, są nieszkodliwe dla organizmu.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">hamalomena</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--burnaska-camphor">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">notopterygium incisum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--milletia-net">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Szafran</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--ginura-peritonita">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">millettia reticulata</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--corydalis-questionable">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">dziki imbir</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--angelica-croproperty">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">panax pseudoginseng</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">salsa cistanche</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline2">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">korzeń jarmułki</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">„KINOKI” OCZYSZCZĄ TWÓJ ORGANIZM Z TOKSYN <br> W NAJKRÓTSZYM MOŻLIWYM CZASIE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nowa cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Leczniczy, naturalny i silny środek detoksykujący.</div>
                        <div>Pomaga łagodzić bóle głowy, stres, uwalnia organizm od płynów, poprawia jakość snu i przywraca energię.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Specjalna kombinacja leczniczych ziół chińskich</li>
                        <li class="list-checked__item">Wielowiekowe przepisy medycyny chińskiej</li>
                        <li class="list-checked__item">Nowoczesna technologia produkcji</li>
                        <li class="list-checked__item">Zbierze wszystkie toksyny z organizmu w jednym miejscu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>UWAGA, AKCJA!</h3>
                        <span>ZNIŻKI 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Imię i nazwisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adres zamieszkania" type="text" required/>
                            <input name="shipping_city" placeholder="Miasto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="SecondProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* DARMOWA DOSTAWA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="ZAMÓW TERAZ"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">CO MÓWIĄ LEKARZE O ZIOŁOWYCH PLASTRACH „KINOKI” DO DETOKSYKACJI</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najważniejszą rzeczą w procesie leczenia każdej choroby jest oczyszczenie organizmu z toksyn, które organizm gromadzi w wyniku prowadzenia niezdrowego stylu życia. Wcześniej jedynym rozwiązaniem było przepisywanie produktów detoksykacji, które negatywnie wpływają na wątrobę i przewód pokarmowy.</p>
                    <p>Miałem pacjentów, którzy skarżyli się na bóle głowy, chroniczne zmęczenie, bóle kręgosłupa szyjnego, a wszystko to w wyniku nagromadzenia toksyn w organizmie, które zaburzały normalne funkcje organizmu.</p>
                    <p>Kiedy zacząłem polecać KINOKI swoim pacjentom, po pewnym czasie spora część z nich miała znacznie mniej problemów, a u większości z nich problemy całkowicie zniknęły. Plastry KINOKI świetnie sprawdzają się w naturalnej eliminacji toksyn z organizmu i każdemu polecam detoksykację przynajmniej raz w miesiącu.</p>
                </div>
                <div class="comment__author"></div>
                <div class="comment__job"> Reumatolog</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">OPINIE NASZYCH KLIENTÓW</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Blanka, 21 lat</div>
                <div class="comments__text">
                    <p>Cześć. Dużo pracuję w biurze i miałam problem z bólami mięśni, nogi były ciężkie, brakowało mi energii i byłam bardzo zrzędliwy. Znalazłam w internecie plastry KINOKI i próbowałam odtruć swój organizm. Po dwóch pudełkach niepokojące mnie objawy całkowicie ustąpiły i od 3 miesięcy czuję się świetnie. Teraz zapobiegawczo kupuję jedno pudełko co miesiąc, ponieważ nie chcę, aby ten trudny okres się powtórzył.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Bronisława, 65 lat</div>
                <div class="comments__text">
                    <p>Od lat miałam problem z nadmiarem płynów w organizmie i obrzękiem nóg. Próbowałem wszystkiego, ale lekarstwa często powodowały inne problemy. Moja córka kupiła mi Kinoki i to jedyny produkt, który mi pomógł. Mam go w apteczce w większych zapasach. Dziękuję bardzo!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Albin, 32 lata</div>
                <div class="comments__text">
                    <p>Często jem fast foody i słodycze, piję dużo soków smakowych i jestem palaczem. Z biegiem czasu zacząłem odczuwać trudności, takie jak zmęczenie i bóle głowy. Moja mama używała kinoki i mi też je poleciła. Początkowo nie wierzyłem, że to pomoże, ale mama upierała się, żebym się nie poddawał i już w drugim tygodniu stosowania poczułem się znacznie lepiej. Obudziłem się bardziej wypoczęty, miałem więcej energii i ból głowy zniknął. Mogę śmiało powiedzieć, że wszystkim polecam ten produkt, bo jest naprawdę dobry!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">JAK POPRAWNIE UŻYWAĆ NASZYWKI „KINOKI”?</h2>
            </div>
        </div>
        <div class="row manual">
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-180">
                    <div class="manual__icon-inner manual__icon-inner--1">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">1</div>
                <div class="manual__title">OTWÓRZ OPAKOWANIE I <br> WYJMIJ PLASTER</div>
                <div class="manual__desc">Umyj stopy wodą i osusz</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">PRZYKLEJ PLASTER <br> NA STOPĘ</div>
                <div class="manual__desc">Zostaw na noc.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">ZDEJMIJ PLASTER <br> RANO</div>
                <div class="manual__desc">Umyj stopy wodą!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice">* Trzymaj jedną łatkę na obu stopach przez całą noc</div>
        <center>
            <br/><br/>
            <h3><strong>Wyniki widoczne po 1 pudełku</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Aby uzyskać najlepsze wyniki, zaleca się stosowanie 2-3 pudełek bez przerwy</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">„PLASTRY DETOKSUJĄCE” NIE SĄ TYMCZASOWYM, ALE TRWAŁYM UWOLNIENIEM OD SZKODLIWYCH TOKSYN W ORGANIZMIE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nowa cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Leczniczy, naturalny i silny środek detoksykujący.</div>
                        <div>Pomaga łagodzić bóle głowy, stres, uwalnia organizm od płynów, poprawia jakość snu i przywraca energię.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Specjalna kombinacja leczniczych ziół chińskich</li>
                        <li class="list-checked__item">Wielowiekowe przepisy medycyny chińskiej</li>
                        <li class="list-checked__item">Nowoczesna technologia produkcji</li>
                        <li class="list-checked__item">Zbierze wszystkie toksyny z organizmu w jednym miejscu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>UWAGA, AKCJA!</h3>
                        <span>ZNIŻKI 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Imię i nazwisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adres zamieszkania" type="text" required/>
                            <input name="shipping_city" placeholder="Miasto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="ThirdProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* DARMOWA DOSTAWA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="ZAMÓW TERAZ"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Wszelkie prawa zastrzeżone.</span>
    </div>
</footer>
<style>
    .freeShippingDiv {
        color: #d31f07;
        text-align: center;
        margin-bottom: 0;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideUp();        }
    })
</script>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>
