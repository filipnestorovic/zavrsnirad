<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/turbinewash/flexboxgrid.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/turbinewash/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/turbinewash/style.css" type="text/css" media="all">
    <style>@charset 'UTF-8';.slick-loading .slick-list{background:#fff url('{{ asset('/') }}shared_files/ajax-loader.gif') center center no-repeat}@font-face{font-family:'slick';font-weight:normal;font-style:normal;src:url('{{ asset('/') }}fonts/slick.eot');src:url('{{ asset('/') }}fonts/slick.eot%40#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/slick.woff') format('woff'),url('{{ asset('/') }}fonts/slick.ttf') format('truetype'),url('{{ asset('/') }}fonts/slick.svg#slick') format('svg')}@font-face{font-family:'fontello';src:url('{{ asset('/') }}fonts/fontello.eot');src:url('{{ asset('/') }}fonts/fontello.eot#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/fontello.woff2') format('woff2'),url('{{ asset('/') }}fonts/fontello.woff') format('woff'),url('{{ asset('/') }}fonts/fontello.ttf') format('truetype'),url('{{ asset('/') }}fonts/fontello.svg#fontello') format('svg');font-weight:normal;font-style:normal}[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"fontello";font-style:normal;font-weight:normal;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;/}.icon-down-open:before{content:'\e800'}.icon-play:before{content:'\e801'}.icon-star:before{content:'\e802'}.icon-star-empty:before{content:'\e803'}.icon-heart:before{content:'\e804'}.icon-blood-drop:before{content:'\e808'}.icon-distance:before{content:'\e809'}.icon-footsteps-silhouette-variant:before{content:'\e80a'}.icon-ok-circled:before{content:'\f06d'}.icon-mail-alt:before{content:'\f0e0'}.icon-star-half-alt:before{content:'\f123'}.icon-thumbs-up-alt:before{content:'\f164'}.icon-heartbeat:before{content:'\f21e'}.icon-bed:before{content:'\f236'}.icon-facebook-squared:before{content:'\f30e'}.icon-fire:before{content:'\f525'}</style>
</head>
<body>
<div class="wrapper animated fadeIn">
    @include('components.display_errors')
    <section id="header" class="row col-xs-12 center-xs">
        <div class="content row center-xs no-margin-padding">
            <div class="watch row col-md-5 col-xs-12 end-md center-xs bottom-xs">
                <img src="{{ asset('/') }}dailysharkFiles/turbinewash/header-bot.png" class="float">
                <img src="{{ asset('/') }}dailysharkFiles/turbinewash/shadow.png" class="shadow">
            </div>
            <div class="logo-column row col-md-7 col-xs-12 center-xs middle-xs">
                <div class="logo row col-xs-12 center-xs top-xs">
                    <img src="{{ asset('/') }}dailysharkFiles/turbinewash/logo.png" alt>
                    <div class="subtitle row col-xs-12 center-xs top-xs">
                        <div>MOĆNA <span>TURBO PERILICA</span></div>
                    </div>
                </div>
                <div class="price row col-xs-12 center-xs middle-xs">
                     <span class="old">
                        {{ $prices[1]['originalPrice'] }}
                         {{ $prices[1]['currency'] }}
                     </span>
                    <span class="new pulse">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                    <span class="discount">
                     <img src="{{ asset('/') }}dailysharkFiles/turbinewash/discount.png">
                     </span>
                </div>
                <div class="specs row col-xs-12 center-xs middle-xs">
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/icon.png">
                            <div class="text"><span>PRAKTIČNO I BRZO</span> PRANJE VEŠA U LAVORU</div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/icon.png">
                            <div class="text">ODLIČAN ZA ISPIRANJE <span>VOĆA I POVRĆA</span></div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/icon.png">
                            <div class="text"><span>JEDNOSTAVNO</span> PRANJE POSUĐA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="text-image-banner-1" class="lightBlueTexture">
        <div class="darkOverlayShadow content row col-xs-12 center-xs middle-xs no-margin">
            <div class="image">
                <img src="{{ asset('/') }}dailysharkFiles/turbinewash/sto.png">
            </div>
            <div class="text">
                <div class="title">TURBO PRITISAK I VISOKI BROJ OBRTAJA!</div>
                <b><span class="italic">Turbine Wash </span></b> je inovativni uređaj koji se u Evropi uveliko koristi
                radi uštede električne energije i vode. <br>
                <span>Smanjuje račune za vodu i struju do 30%</span>
            </div>
            <div class="lower row col-xs-12 center-xs middle-xs">
                <div class="countdown_button row col-xs-12 center-xs middle-xs">
                    <div class="content row col-xs-12 center-xs middle-xs">
                        <div class="btn row col-sm-6 col-xs-12 center-xs middle-xs">
                            <a href="#order_frame" class="scroll_to_order" title="NARUČITE SADA">
                                <div class="mybutton_round_2"> NARUČITE SADA</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="big-g" class="lateralImageGray">
        <div class="content row col-xs-12 center-xs">
            <div class="uppert-title row col-xs-12 center-xs">
                <h5>NAJPRODAVANIJI PROIZVOD U EVROPI U 2022</h5>
            </div>
            <div class="main-title row col-xs-12 center-xs">
                <h2>MOĆAN DIZAJN I STRUKTURA ZA NAJEFIKASNIJE REZULTATE</h2>
            </div>
            <div class="feature feature-s2 row col-xs-12 center-xs middle-xs">
                <div class="left-text col-md-4 col-sm-6 end-md center-xs">
                    <div class="feature-item feature-item-a">
                        <h2 class="row end-md center-xs middle-xs">
                            <i class="icon icon-ok-circled"></i> VISOKA <br/> ROTACIJA
                        </h2>
                        <p>Opremljen je rotacionom glavom koja pravi kruženje vode <b>velikom snagom i brzinom.</b></p>
                    </div>
                    <div class="feature-item feature-item-b">
                        <h2 class="row end-md center-xs middle-xs">
                            <i class="icon icon-ok-circled"></i> PRANJE <br/> SUDOVA
                        </h2>
                        <p>Potopite sudove u sudoperu, sipajte toplu vodu, deterdžent i pustite ga da radi. Nakon
                            nekoliko minuta <b>samo isperite sudove čistom vodom.</b></p>
                    </div>
                </div>
                <div class="center-text col-md-4 col-xs-12">
                    <div class="big-g-carousel feature-img">
                        <div class="carousel-cell">
                            <img class src="{{ asset('/') }}dailysharkFiles/turbinewash/front.png">
                        </div>
                    </div>
                </div>
                <div class="right-text col-md-4 col-sm-6 start-md center-xs">
                    <div class="feature-item feature-item-e">
                        <h2 class="row start-md center-xs middle-xs">
                            <i class="icon icon-ok-circled"></i> PRANJE <br/> VEŠA
                        </h2>
                        <p>Sipajte toplu ili vruću vodu u posudu, prašak za veš i uključite Turbine Wash. Nakon <span>10 do 15 minuta</span>
                            isperite veš u čistoj vodi i smatrajte ga opranim.</p>
                    </div>
                    <div class="feature-item feature-item-e">
                        <h2 class="row start-md center-xs middle-xs">
                            <i class="icon icon-ok-circled"></i> PRANJE <br/> VOĆA I POVRĆA
                        </h2>
                        <p>Najefikasnije pranje voća i povrća ikada. Sipajte čistu hladnu vodu u posudu i Turbine Wash
                            će ga oprati <b>daleko bolje nego što vi ručno možete.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="slider" class="slider_1">
        <div class="content row col-xs-12 no-margin no-padding">
            <div class="images col-md-6 col-xs-12 center-xs">
                <div class="slider-carousel-1">
                    <div class="carousel-cell">
                        <img src="{{ asset('/') }}dailysharkFiles/turbinewash/DESIGN.jpg" alt>
                    </div>
                    <div class="carousel-cell">
                        <img src="{{ asset('/') }}dailysharkFiles/turbinewash/under.jpg" alt>
                    </div>
                </div>
            </div>
            <div class="text lightBlueTexture row col-md-6 col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="title start-xs">
                    <div class="innerTitle">UŠTEDA STRUJE, VODE I VREMENA?</div>
                    <p>U periodu kada su komunalije poskupele, ovaj proizvod je odlično rešenje za <strong>uštedu kućnog
                            budžeta!</strong></p>
                    <p>Pranje sudova nekada zna da oduzme mnogo vremena, a ostaci hrane često izazivaju osećaj gađenja.
                        Potopite Turbine Wash u sudoperu, poređajte sudove okolo,
                        sipajte vodu i deterdžent i pranje može da počne. Posle isperite samo čistom vodom i ceo proces
                        je gotov.</p>
                    <p><strong>Zašto kupovati skupe mašine za pranje sudova koje troše mnogo struje i vode?</strong></p>
                    <br>
                    <br>
                    <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                               class="scroll_to_order"> KUPITE SADA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-banner" class>
        <div class="content column-1200">
            <div class="innerTitle">PROIZVOD VISOKIH PERFORMANSI</div>
            <div class="subtitle"> Glavne karakteristike<span class="italic"> Turbine Wash </span> uređaja</div>
            <ul class="box-banner-carousel">
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/1.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span> 1</span> MALI POTROŠAČ
                            </div>
                            <div class="text">Turbine Wash je dizajniran i patentiran u cilju uštede električne enerije.
                                Neverovatno, ali potrebno mu je samo USB napajanje. Dakle, potrošiće isto struje za 10
                                minuta rada kao telefon koji je na punjenju 10 minuta.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to_order"> KUPITE
                                    SADA</a></div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell is-selected">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/2.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span> 2</span> SNAŽAN MOTOR
                            </div>
                            <div class="text">Snažan motor koji poseduje Turbine Wash je implementiran u malo kućište,
                                tako da ne zauzima mnogo prostora i može da se ubaci u bilo koju malo veću plastičnu
                                posudu i čak u najmanju sudoperu.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to_order"> KUPITE
                                    SADA</a></div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/3.jpg">
                        </div>
                        <div class="description row center-xs   ">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span> 3</span> NAPAJANJE
                            </div>
                            <div class="text">Uređaj radi na USB napajanje, tako da ga možete pokretati čak i sa
                                računara, a može se povezivati i na strujni adapter za bilo kog telefona.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to_order"> KUPITE
                                    SADA</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="text-image-banner-2" class="lightBlueTexture">
        <div class="content row col-xs-12 center-xs middle-xs no-margin">
            <div class="text">Mali, ali moćan! Bićete iznenađeni snagom Turbine Wash uređaja.</div>
            <div class="image">
                <img src="{{ asset('/') }}dailysharkFiles/turbinewash/sunction.png">
            </div>
        </div>
    </section>
    <section id="slider" class="slider_2">
        <div class="content row col-xs-12 no-margin no-padding">
            <div class="images col-md-8 col-sm-7 col-xs-12 center-xs">
                <div class="slider-carousel-1">
                    <div class="carousel-cell">
                        <img src="{{ asset('/') }}dailysharkFiles/turbinewash/accessori.jpg" alt>
                    </div>
                </div>
            </div>
            <div
                class="text lightBlueTexture row col-md-4 col-sm-5 col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="title start-xs">
                    <div class="innerTitle"> ZAŠTO KUPITI TURBINE WASH?</div>
                    Evo nekoliko razloga zbog kojih se naši kupci odlučuju za ovaj uređaj: <br><br>
                    <ul>
                        <li>Ušteda struje</li>
                        <li>Ušteda vode</li>
                        <li>Ušteda vremena</li>
                        <li>Čuvanje kože ruku</li>
                        <li>Praktična upotreba</li>
                    </ul>
                    <br>
                    <br>
                    <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                               class="scroll_to_order"> KUPITE SADA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="opinions_secureShopping_wrapper" class="grayMesh_light">
        <div id="opinions" class>
            <div class="container">
                <h2 class="title row col-xs-12 center-xs"> Mišljenja naših kupaca</h2>
                <p class="subtitle row col-xs-12 center-xs"> Njihovi utisci govore sami za sebe.</p>
                <div class>
                    <div class="opinions-carousel feature-img">
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/people_3.jpg"
                                                 alt="Katarina">
                                        </div>
                                        <div class="name">
                                            <h5><a> Katarina</a></h5>
                                        </div>
                                    </div>
                                    <div class="row text">Odlična kupovima, dobar i kvalitetan proizvod. Vrlo je
                                        jednostavan za upotrebu. Uključite ga i to je to! Sve preporuke
                                    </div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star-half-alt"></i>
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/people_4.jpg"
                                                 alt="Francesca dell'Olmo">
                                        </div>
                                        <div class="name">
                                            <h5><a> Una</a></h5>
                                        </div>
                                    </div>
                                    <div class="row text">Turbine Wash je extraaaa! Moćno radi, moćno izgleda, isporuke
                                        je bila brza a cena odlična! Bolju kupovinu odavno nisam imala!
                                    </div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/people_2.jpg"
                                                 alt="Giacomo Partisani">
                                        </div>
                                        <div class="name">
                                            <h5><a href target="_blank"> Jovan</a></h5>
                                        </div>
                                    </div>
                                    <div class="row text">Živim sam i jako malo veša imam za pranje. Ne isplati mi se
                                        paliti veš mašinu često. Sa ovim proizvodom operem donji veš i peškire za čas
                                        posla.
                                        Jako sam zadovoljan, potpuno zadovoljava moje potrebe.
                                    </div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="order">
        <div id="countdown">
            <div class="container">
                <div class="content">
                    <div class="text">
                        Popust važi samo za preostalu količinu robe. <br/>
                        Iskoristite popust i poručite odmah. <br/>
                        Plaćate po prijemu pošiljke. <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="order_frame" class="center">
                <form method="post" action="{{$orderRoute}}">
                    <div class="form-container" style="max-width: 500px;">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <center>
                            <h3 class="title">PODACI ZA DOSTAVU</h3>
                        </center>
                        <div class="form-group">
                            {{--                            <label>Ime i prezime</label>--}}
                            <input type="text" name="name" class="form-control" placeholder="Ime i prezime"
                                   required="required">
                        </div>
                        <div class="form-group">
                            {{--                            <label>Telefon</label>--}}
                            <input type="tel" name="phone" class="form-control" placeholder="Telefon"
                                   required="required">
                        </div>
                        <div class="form-group">
                            {{--                            <label>Adresa</label>--}}
                            <input type="text" name="shipping_address" class="form-control" placeholder="Adresa"
                                   required="required">
                        </div>
                        <div class="form-group">
                            {{--                            <label>Grad</label>--}}
                            <input type="text" name="shipping_city" class="form-control" placeholder="Grad"
                                   required="required">
                        </div>
                        <center>
                            <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">PORUČI
                            </button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="secureShopping" class="grayMesh_light">
        <div class="container row col-xs-12 center-xs">
            <div class="content">
                <h1 class="title">Kupovina bez rizika 100%</h1>
                <p class="subtitle">Kupite originalni proizvod na našem sajtu da biste izbegli <br/> loše kopije ovog
                    proizvoda koje su se pojavile na tržištu.</p>
                <div class="list">
                    <ul>
                        <li class="row col-xs-12 middle-xs start-md center-xs">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/lock.svg" alt>
                            <div class="opt-con">
                                <h4>100% sigurna kupovina</h4>
                            </div>
                        </li>
                        <li class="row col-xs-12 middle-xs start-md center-xs">
                            <img src="{{ asset('/') }}dailysharkFiles/turbinewash/delivery.png" alt>
                            <div class="opt-con">
                                <h4>Pošiljku šaljemo u roku od 1-2 radna dana</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/turbinewash/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/turbinewash/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
