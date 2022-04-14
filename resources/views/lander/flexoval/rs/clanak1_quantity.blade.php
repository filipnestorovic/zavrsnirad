<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/clanak1/favicon.ico" >
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/clanak1/favicon.ico" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/clanak1/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/clanak1/style.css">
    <style>
        @font-face {
            font-family: "Raleway";
            src: url("{{ asset('/') }}fonts/ralewayextrabold.woff");
            font-style: normal;
            font-weight: 700;
        }
        input[type="radio"] {
            width: 15px !important;
            height: 15px !important;
            cursor: pointer;
        }
        label {
            height: 15px !important;
            cursor: pointer;
            font-size: 16px;
            margin-left: 3px;
            font-weight: 600;
            font-family: Gilroy, Arial, system-ui, sans-serif;
            color: #0e1111;
        }
        .freeShippingDiv {
            color: #d31f07;
            text-align: center;
            margin-bottom: 0;
            display: none;
            font-weight: bold;
            margin-top: 20px;
        }
        .sale_block_wrap {
            overflow: visible;
        }
        @media only screen and (max-width: 665px) {
            .banner {
                height: 1300px;
                background-image: url('{{ asset('/') }}flexovalFiles/clanak1/bg420-1.jpg');
                background-color: #2c2962;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header>
    <div class="header">
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h1.png">
            <span>EVROPSKI <br>KVALITET</span>
        </div>
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h2.png">
            <span>PREKO 13000 <br>ZADOVOLJNIH <br>KUPACA</span>
        </div>
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h3.png">
            <span>100% DOKAZANA <br>EFIKASNOST</span>
        </div>
    </div>
</header>
<section class="base banner">
    <div class="container main_title">
        <h1 class="h1">PODESIVI STEZNIK ZA ČLANAK<br><span><span>FLEXOVAL</span></span></h1>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>Stabilizuje članak</li>
            <li>Ubrzava proces oporavka</li>
            <li>Štiti zglob od preopterećenja, povreda i uganuća</li>
        </ul>
        <div class=smart_inner>
            <div class="stock">
                <p>ZDRAV ČLANAK BEZ <br> POVREDA</p>
                <p>&nbsp;</p>
            </div>
            <div class="sale">
                <p>popust</p>
                <p>-40<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>ISKORISTITE POPUST OD 40%</p>
            <div class="sale_block">
                <div class="count">
                    {{--<p class="count_title">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</p>--}}
                    {{--<div class="timer_wrapper">--}}
                        {{--<div class="countdown"></div>--}}
                    {{--</div>--}}
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                              <span class="price">
                                 {{ $prices[1]['originalPrice'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                            <div class="new_price">
                              <span class="price">
                                 {{ $prices[1]['amount'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="main-order-form sale_form" action="{{$orderRoute}}" method="POST">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="input name" name="name" placeholder="Ime i prezime" required type="text">
                    <input class="input phone" name="phone" placeholder="Telefon" required type="tel">
                    <input class="input" name="shipping_address" placeholder="Adresa" required type="text">
                    <input class="input" name="shipping_city" placeholder="Grad" required type="text">
                    @foreach($prices as $singlePrice)
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="productLabel{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                   @if($singlePrice['is_default']) checked @endif
                                   @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                            <label for="productLabel{{$singlePrice['quantity']}}">
                                {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                            </label>
                        </div>
                    @endforeach
                    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                    <br>
                    <div class="secure">
                        <img src="{{ asset('/') }}flexovalFiles/clanak1/lock.png">
                        <span>Vaši podaci su zaštićeni</span>
                    </div>
                    <button class="btn">Poručite</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="base show">
    <h2 class="titles"><span class="orange">FLEXOVAL </span> - PODESIVI STEZNIK ZA SKOČNI ZGLOB</h2>
    <p class="container">Koristi se za lakše kretanje, stabilizaciju stopala i prevenciju od povreda.</p>
    <div class="container show_slider">
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s1.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s2.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s3.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s4.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s5.jpg"></div>
        {{--<div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s6.jpg"></div>--}}
    </div>
</section>
<section class="base problems">
    <h2 class="titles white"><span class="orange">PROBLEMI SKOČNOG ZGLOBA</span> - KOJE NE TREBA ZANEMARITI! </h2>
    <p>Svako od nas je nekada imao neki od ovih simptoma:</p>
    <div class="container problems_inner">
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p1.jpg"></div>
            <p>Bol u zglobu tokom kretanja i mirovanja</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p2.jpg"></div>
            <p>Česte modrice, povrede i dislokacije članka</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p3.jpg"></div>
            <p>Otok i crvenilo</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p4.jpg"></div>
            <p>Bolno oslanjanje na stopalo</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p5.jpg"></div>
            <p>Težina i jak zamor u nogama</p>
        </div>
    </div>
</section>
<section class="base emergency">
    <div class="container">
        <h2 class="titles"><span class="orange">BRZA POMOĆ</span> ZA BOL U ZGLOBU</h2>
        <p>Flexoval steznik čvrsto fiksira članak, ravnomerno raspoređuje opterećenje i pospešuje cirkulaciju u stopalu.</p>
        <div class="emergency_inner">
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Ubrzava zarastanje nakon uganuća</p>
            </div>
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Smanjuje bol kod artroze i artritisa</p>
            </div>
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Sprečava oticanje i upale nakon povreda</p>
            </div>
        </div>
        <a href="#footer" class="extra btn">PORUČITE ODMAH</a>
    </div>
</section>
<section class="base unique">
    <h2 class="titles">JEDINSTVEN DIZAJN <br><span class="blue">ZA MAKSIMALNI EFEKAT</span></h2>
    <div class="container unique_gif">
        <p>Steznik ima i efekat mikromasaže, ubrzava zagrevanje ligamenata i poboljšava mišićnu koordinaciju stopala.</p>
        <p>Ugrađeni stabilizator zglobova i ligamenata štiti od najčešćih povreda, raspoređuje opterećenje i smanjuje rizik od razvoja artritisa.</p>
        <div class="gif_wrap">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/gif_replacement.jpg">
        </div>
    </div>
    <div class="container unique_inner">
        <p>Lagani i prozračni neoprenski materijal održava stopala suvim, a u isto vreme zadržava toplinu</p>
        <p>Kompresioni materijal bezbedno fiksira zglob, ublažavajući bol i napetost</p>
        <p>Podesive čičak trake omogućavaju da se odabere optimalni odnos kompresije</p>
        <p>Odsustvo grubih šavova eliminiše pritiskanje i žuljanje stopala</p>
    </div>
</section>
<section class="base necessary">
    <h2 class="titles white"><span class="orange">KOME TREBA</span> STEZNIK ZA ČLANAK</h2>
    <div class="container necessary_inner">
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n1.png">
            <p>Svima koji se bave sportom</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n2.png">
            <p>Ljudima koji imaju "težinu" i umor u nogama</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n3.png">
            <p>Onima koji mnogo vremena provode na nogama</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n4.png">
            <p>Osobama koje se oporavljaju od povrede zgloba</p>
        </div>
    </div>
</section>
<section class="base how">
    <div class="container">
        <h2 class="titles"><span class="orange">KAKO STAVITI</span> STEZNIK</h2>
        <p>Stavite steznik na nogu onako kako je prikazano na slici i odaberite stepen zategnutosti uz pomoć podesive čičak trake.</p>
        <a href="#footer" class="extra btn">PORUČITE ODMAH</a>
        <div class="how_inner">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m1.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m2.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m3.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m4.jpg">
        </div>
    </div>
</section>
<section class="base why">
    <h2 class="titles">ZAŠTO JE <span class="blue">FLEXOVAL STEZNIK</span> NAJBOLJI</h2>
    <div class="container why_inner">
        <table>
            <thead>
            <tr>
                <th>
                    <p></p>
                </th>
                <th>
                    <p>Flexoval</p>
                </th>
                <th>
                    <p>Elastični <br/> zavoj</p>
                </th>
                <th>
                    <p>Profesionalna <br/> ortoza</p>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jednostavnost upotrebe</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Ušteda vremena</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            <tr>
                <td>Brzi rezultat</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Bezbedan za kožu</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Sigurna podrška za skočni zglob</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Nevidljiv ispod odeće</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            <tr>
                <td>Prihvatljiva cena</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="base expert">
    <div class="container expert_inner">
        <h2 class="titles white">MIŠLJENJE <span class="orange">STRUKE</span></h2>
        {{--<div class="caption">--}}
            {{--<p>&nbsp;</p>--}}
            {{--<p>&nbsp;</p>--}}
        {{--</div>--}}
        <div class="expert_text">
            <p>Ljudi dolaze u teretanu sa različitim ciljevima: Da dođu u savršenu formu, da izgube višak kilograma, za opšte poboljšanje tela. Po pravilu, sve ove ljude ujedinjuje želja da se rezultati postignu u što kraćem roku.</p>
            <p>Rezultat ovoga može biti mikrotrauma nastala usled prekomernih opterećenja. Za efikasne i bezbedne vežbe koje uključuju opterećenje članka, svima preporučujem Flexoval steznik.</p>
            <p>U stanju je ne samo da spreči moguće povrede, već i da smanji ukupno opterećenje na članak, što omogućava efikasnije vežbanje. Prema rečima naših posetilaca, Flexoval steznik je odličan i za pešačenje u prirodi i fizički rad sa puno hodanja.</p>
        </div>
    </div>
</section>
<section class="base feedback">
    <h2 class="titles"><span class="orange">UTISCI </span>ONIH KOJI SU VEĆ ISPROBALI <span class="orange">FLEXOVAL</span> STEZNIK ZA ČLANAK</h2>
    <div class="feedback_slider">
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f1.jpg"></div>
            <div class="comment">
                <h4>Andrej, 34 godine</h4>
                <p>Kolena su me bolela kada bih išao niz i uz stepenice. Sada sam kupio ovaj steznik za kolena i osećam se mnogo bolje.
                    Izgleda da moja kolena imaju snage da izdrže moje svakodnevne aktivnosti. Odličan proizvod!</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f2.jpg"></div>
            <div class="comment">
                <h4>Helena, 51 godina</h4>
                <p>Moji roditelji pate od jakih bolova u kolenima. Prema njihovim rečima, ovaj steznik za kolena im pruža podršku i udobnost koji su potrebni kako bi se kretali bez poteškoća.
                    Drago mi je što sam pronašla ovaj steznik i toplo ga preporučujem svima koji imaju slične probleme.</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f3.jpg"></div>
            <div class="comment">
                <h4>Dragan, 43 godine</h4>
                <p>Isprobao sam toliko različitih vrsta steznika otkad sam istrošio hrskavicu pre 10 godina.
                    Ovi steznici za kolena su vrlo udobni i pružaju odličnu potporu. Ranije sam kupovao jeftine steznike koji su bili beskorisni.
                    Na kraju sam zaključio da su ovo najbolji steznici za kolena koje sam ikad kupio.</p>
            </div>
        </div>
    </div>
</section>
<section class="base simple_steps">
    <h2 class="titles white">3 JEDNOSTAVNA KORAKA ZA PORUČIVANJE <br><span class="black">STEZNIKA ZA ČLANAK</span></h2>
    <div class="container steps">
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step1.png" alt="картинка">
            <p>Unesite svoje podatke na našem sajtu</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step2.png" alt="картинка">
            <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step3.png" alt="картинка">
            <p>Bez plaćanja unapred</p>
        </div>
    </div>
</section>
<div class="base action">
    <div class="action_item">
        <p>
            <span>ROBA SE ŠALJE <br class="br1"></span>
            <span class="color1">BILO GDE U SRBIJI<br></span>
            <span>U ROKU OD 1-2 RADNA DANA</span>
        </p>
        <p>
            <span>PAKET PLAĆATE<br class="br2"></span>
            <span class="color1"><br class="br3">KURIRU <br class="br4"></span>
            <span class="color2"><br class="br6">PO PRIJEMU POŠILJKE</span>
        </p>
        <p>
            <span>UKOLIKO NE BUDETE <br/>ZADOVOLJNI </span>
            <span class="color1"><br class="br2">VRATIĆEMO VAM NOVAC</span>
        </p>
    </div>
</div>
<section class="base banner bottom_block">
    <div class="container main_title">
        <h3 class="h1">PODESIVI STEZNIK ZA ČLANAK<br><span><span>FLEXOVAL</span></span></h3>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>Stabilizuje članak</li>
            <li>Ubrzava proces oporavka</li>
            <li>Štiti zglob od preopterećenja, povreda i uganuća</li>
        </ul>
        <div class=smart_inner>
            <div class="stock">
                <p>ZDRAV ČLANAK BEZ <br> POVREDA</p>
                <p>&nbsp;</p>
            </div>
            <div class="sale">
                <p>popust</p>
                <p>-40<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>ISKORISTITE POPUST OD 40%</p>
            <div class="sale_block">
                <div class="count">
                    {{--<p class="count_title">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</p>--}}
                    {{--<div class="timer_wrapper">--}}
                        {{--<div class="countdown"></div>--}}
                    {{--</div>--}}
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                              <span class="price">
                                 {{ $prices[1]['originalPrice'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                            <div class="new_price">
                              <span class="price">
                                 {{ $prices[1]['amount'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="main-order-form sale_form" action="{{$orderRoute}}" method="POST" id="footer">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="input name" name="name" placeholder="Ime i prezime" required type="text">
                    <input class="input phone" name="phone" placeholder="Telefon" required type="tel">
                    <input class="input" name="shipping_address" placeholder="Adresa" required type="text">
                    <input class="input" name="shipping_city" placeholder="Grad" required type="text">
                    @foreach($prices as $singlePrice)
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="product1Label{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                   @if($singlePrice['is_default']) checked @endif
                                   @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                            <label for="product1Label{{$singlePrice['quantity']}}">
                                {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                            </label>
                        </div>
                    @endforeach
                    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                    <br>
                    <div class="secure">
                        <img src="{{ asset('/') }}flexovalFiles/clanak1/lock.png">
                        <span>Vaši podaci su zaštićeni</span>
                    </div>
                    <button class="btn">Poručite</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/clanak1/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexovalFiles/clanak1/main.js"></script>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).closest('.sale_form').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.sale_form').find('.freeShippingDiv').slideUp();
        }
    })
</script>
@include('components.pixel_footer')
</body>
</html>
