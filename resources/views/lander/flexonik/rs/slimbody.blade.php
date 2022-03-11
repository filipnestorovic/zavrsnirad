<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('/') }}flexonikFiles/slimbody/favicon-96x96.png">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/ekko-lightbox.css">
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/slimbody/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/slimbody/jquery.transform2d.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/normalize.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/flexboxgrid.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/skeleton.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/flickity.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/animate.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/hamburgers.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimbody/responsive.css" type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/slimbody/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/slimbody/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/slimbody/main.js"></script>
    <style>@font-face{font-family:'FontAwesome';src:url('{{ asset('/') }}fonts/fontawesome-webfont.eot');src:url('{{ asset('/') }}fonts/fontawesome-webfont_1.eot#iefix&v=4.7.0') format('embedded-opentype'),url('{{ asset('/') }}fonts/fontawesome-webfont.woff2') format('woff2'),url('{{ asset('/') }}fonts/fontawesome-webfont.woff') format('woff'),url('{{ asset('/') }}fonts/fontawesome-webfont.ttf') format('truetype'),url('{{ asset('/') }}fonts/fontawesome-webfont.svg#fontawesomeregular') format('svg');font-weight:400;font-style:normal}@font-face{font-family:'fontello';src:url('{{ asset('/') }}fonts/fontello.eot');src:url('{{ asset('/') }}fonts/fontello.eot#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/fontello.woff2') format('woff2'),url('{{ asset('/') }}fonts/fontello.woff') format('woff'),url('{{ asset('/') }}fonts/fontello.ttf') format('truetype'),url('{{ asset('/') }}fonts/fontello.svg#fontello') format('svg');font-weight:400;font-style:normal}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-LightItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-LightItalic.woff') format('woff');font-weight:300;font-style:italic}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Italic.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Italic.woff') format('woff');font-weight:400;font-style:italic}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Black.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Black.woff') format('woff');font-weight:900;font-style:normal}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Medium.woff') format('woff');font-weight:500;font-style:normal}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Bold.woff') format('woff');font-weight:700;font-style:normal}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-BoldItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-BoldItalic.woff') format('woff');font-weight:700;font-style:italic}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Regular.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Regular.woff') format('woff');font-weight:400;font-style:normal}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-MediumItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-MediumItalic.woff') format('woff');font-weight:500;font-style:italic}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/ProductSans-Light.woff') format('woff');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/OpenSans-Light.woff') format('woff');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'),url('{{ asset('/') }}fonts/OpenSans.woff') format('woff');font-weight:400;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/OpenSans-Bold.woff') format('woff');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/OpenSans-SemiBold.woff') format('woff');font-weight:600;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'),url('{{ asset('/') }}fonts/OpenSans-ExtraBold.woff') format('woff');font-weight:800;font-style:normal}.form-control{font-size:1.5rem}.ekko-lightbox .modal-header{padding:10px}.ekko-lightbox .modal-body{padding:0;text-align:center!important}.alert{margin:25px}.preloader{width:100px;height:100px;border-radius:100%;position:relative;margin:0 auto}.loader-1:before,.loader-1:after{content:"";position:absolute;top:-10px;left:-10px;width:100%;height:100%;border-radius:100%;border:10px solid transparent;border-top-color:#3498db}.loader-1:before{z-index:100;animation:spin 1s infinite}.loader-1:after{border:10px solid #ccc}@keyframes spin{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}form .preloader{display:none}form .preloader.show{float:left;display:block;width:35px;margin:10px 0 0 15px;height:35px}form.loading{opacity:.5}form.loading .preloader{display:block;position:absolute;left:calc(50% - 50px);top:calc(50% - 50px)}#submit-button{margin-top:10px}.force-hidden{display:none!important}img{cursor:pointer}#info-privacy a{color:blue}.form-control{width:100%}#submit-button{background-color:#5cb85c;color:#fff}</style>
</head>
<body>
<div class="wrapper animated fadeIn">
    @include('components.display_errors')
    <section id="navMenu" class="row col-xs-12 center-xs no-margin-padding">
        <div class="content row center-xs no-margin-padding">
            <div class="logo row col-xs-12 start-xs middle-xs">
                <img src="{{ asset('/') }}flexonikFiles/slimbody/logo_icon.png" alt>
                <div class="mobile-menu hamburger hamburger hamburger--3dx-r" title="Mostra/Nascondi il men&ugrave;">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <ul class="menu">
                    <li class="row col-xs-12 center-xs middle-xs">
                        <a href="#advise-banner" class="scroll_to">Dizajn</a>
                    </li>
                    <li class="row col-xs-12 center-xs middle-xs">
                        <a href="#slider" class="scroll_to">O proizvodu</a>
                    </li>
                    <li class="row col-xs-12 center-xs middle-xs">
                        <a href="#header" class="scroll_to">Ponuda</a>
                    </li>
                    <li class="row col-xs-12 center-xs middle-xs">
                        <a href="#order_frame" class="button navMenu_button scroll_to">Poruči sada</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="header" class="row col-xs-12 center-xs">
        <div class="content row col-xs-12 center-xs middle-xs no-margin-padding">
            <img src="{{ asset('/') }}flexonikFiles/slimbody/novita.png" class="upperFixedImg">
            <div class="logo-column row col-md-5 col-xs-12 end-md center-xs middle-xs">
                <div class="logo row col-xs-12 center-xs top-xs">
                    <div class="wrap row col-xs-12 center-xs top-xs no-margin-padding">
                        <img src="{{ asset('/') }}flexonikFiles/slimbody/logo_1.png" class>
                    </div>
                </div>
                <div class="specs row col-xs-12 center-xs middle-xs">
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/1.jpg">
                            <div class="text">
                                <span>OSEĆAJ SAMOPOUZDANJA</span>
                                Pogled u ogledalo više neće biti problem nakon korišćenja ovog proizvoda
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/2.jpg">
                            <div class="text">
                                <span>UDOBNO I PRAKTIČNO</span>
                                Slim Body je udoban i veoma lak za nošenje. Kupite Slim Body i uživajte u svom telu
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/3_1.jpg">
                            <div class="text">
                                <span>ZATEŽE TELO</span>
                                Slim Body je savršen za prikrivanje viška kilograma
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price row col-xs-12 center-xs middle-xs">
                    <div class="quantity row col-xs-12 center-xs middle-xs">
                        EXTRA PONUDA ZA <b>SAMO:</b>
                    </div>
                    <span class="old">
                        {{ $prices[1]['originalPrice'] }} RSD
                     </span>
                    <span class="new pulse">
                        {{ $prices[1]['amount'] }} RSD
                     </span>
                    <span class="discount">
                     <img src="{{ asset('/') }}flexonikFiles/slimbody/discount.png"></span>
                </div>
            </div>
            <div class="object row col-md-7 col-xs-12 center-xs bottom-xs no-margin-padding">
                <img src="{{ asset('/') }}flexonikFiles/slimbody/comp_top.png" class>
            </div>
        </div>
    </section>
    <section id="only-text-banner" class>
        <div class="container row col-xs-12 center-xs middle-xs">
            <div class="row1">
                Slim Body ima novi sistem tehnologije koji omogućava gubljenje dve do tri konfekcijske velićine!
            </div>
            <div class="lower row col-xs-12 center-xs middle-xs">
                <div class="countdown_button row col-xs-12 center-xs middle-xs">
                    <div class="content row col-xs-12 center-xs middle-xs">
                        <div class="btn row col-sm-6 col-xs-12 center-xs middle-xs">
                            <a href="#order_frame" class="scroll_to" title="PORUČITE ODMAH">
                                <div class="mybutton_round">PORUČITE ODMAH</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sovraSlider_section">
        <section id="slider" class="slider_2">
            <div class="content container row col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="grayMesh_light text row col-md-6 col-xs-12 center-xs middle-xs">
                    <div class="start-xs">
                        <div class="innerTitle">
                            Najprodavaniji u Srbiji
                        </div>
                        <div class="description">
                            <p>
                                <span class="italic">Slim Body</span> će nežno obaviti vašu <b>zadnjicu, stomak i noge,</b> a vi ćete zaboraviti
                                da ste ga obukli i da je na vama. Na tržištu postoji dosta proizvoda ovog tipa koji su <b>loše kopije</b> i
                                uglavnom ne daju skoro nikakav efekat.
                                <br><br><span class="italic">Slim Body</span> je jedini <b>originalan</b>, napravljen je od inovativne tkanine i
                                mikrovlakana i oblikuje telo kao ruke vajara, što će vas učiniti <b>zavodljivim i privlačnim.</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="images col-md-6 col-xs-12 center-xs middle-xs">
                    <div class="slider-carousel-1">
                        <div class="carousel-cell">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/sovra1.jpg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="slider" class="slider_3">
            <div class="content container row col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="images col-md-6 col-xs-12 center-xs middle-xs">
                    <div class="slider-carousel-1">
                        <div class="carousel-cell">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/sovra2.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="grayMesh_light text row col-md-6 col-xs-12 center-xs middle-xs">
                    <div class="start-xs">
                        <div class="innerTitle">
                            Efekat mršavljenja i učvršćivanja
                        </div>
                        <div class="description">
                            <p>
                                Pogled u ogledalo više neće biti problem kada obučete Slim Body.
                                <br><br>
                                Ovo nisu obične helanke, nego spoj <b>savremene tehnologije i vrhunskog dizajna</b> koji je prilagođen svakom telu.
                                Kada jednom počnete da nosite Slim Body i vidite rezultat, oduševićete se postignutim efektom i stalno ćete da ih nosite.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="advise-banner" class="row col-xs-12 start-xs no-margin-padding">
        <div class="maxColumn content row center-xs no-margin no-padding">
            <div class="sx row col-md-6 col-xs-12 start-xs middle-xs">
                <span class="surtitle">LEP I PREFINJEN DIZAJN</span>
                <span class="title"><span class="italic">Slim Body</span> ima posebnu konsturkciju i oblikuje figuru delujući na stomak, bokove i zadnjicu.</span>
                <span class="subtitle">
                    Inovativne helanke sa vizuelnim efektom mršavljenja, zatezanja, podizanja zadnjice i užeg struka i kukova.
                    <br><br>
                    Udoban je za nošenje i nevidljiv ispod druge odeće. Ne steže i ne pravi nikakva ograničenja u pokretima.
                     <br><br>
                     <b>
                        SAMO SADA ZA
                        {{ $prices[1]['amount'] }} RSD
                         PO KOMADU
                     </b>
                  </span>
            </div>
            <div class="dx row col-md-6 col-xs-12 center-xs middle-xs">
                <img src="{{ asset('/') }}flexonikFiles/slimbody/body.jpg">
            </div>
        </div>
    </section>
    <section id="big-g" class="grayMesh_light">
        <div class="content row col-xs-12 center-xs">
            <div class="uppert-title row col-xs-12 center-xs">
                <h5>SVE U JEDNOM PROIZVODU</h5>
            </div>
            <div class="main-title row col-xs-12 center-xs">
                <h2>PRELEPA, ZGODNA I ELEGANTNA</h2>
            </div>
            <div class="feature feature-s2 row col-xs-12 center-xs middle-xs">
                <div class="left-text col-md-4 col-sm-6 end-md center-xs">
                    <div class="feature-item feature-item-c">
                        <h2 class="row end-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/elasticizzato.png"> ELASTIČNI ZID
                        </h2>
                        <p>Sadrži rastegljivu tkaninu koja Slim Body čini veoma udobnim.</p>
                    </div>
                    <div class="feature-item feature-item-a">
                        <h2 class="row end-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/ergonomico.png"> ERGONOMSKI
                        </h2>
                        <p>Ergonomski dizajn se savršeno prilagođava oblinama tela.</p>
                    </div>
                    <div class="feature-item feature-item-a">
                        <h2 class="row end-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/traspirante.png"> PROZRAČNOST
                        </h2>
                        <p>Telo se ne znoji jer je Slim Body napravljen od prozračnih i veoma udobnih materijala.</p>
                    </div>
                </div>
                <div class="center-text col-md-4 col-xs-12">
                    <div class="big-g-carousel feature-img">
                        <div class="carousel-cell">
                            <img class src="{{ asset('/') }}flexonikFiles/slimbody/woman.png">
                        </div>
                    </div>
                </div>
                <div class="right-text col-md-4 col-sm-6 start-md center-xs">
                    <div class="feature-item feature-item-e">
                        <h2 class="row start-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/elegante.png"> ELEGANCIJA
                        </h2>
                        <p>Proizvod zadovoljava svaki stil, od najsportskijih do najelegantnijih.</p>
                    </div>
                    <div class="feature-item feature-item-g">
                        <h2 class="row start-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/sport.png"> SPORTSKI
                        </h2>
                        <p>Pogodan je za nošenje u teretani ili tokom bilo kojih drugih treninga.</p>
                    </div>
                    <div class="feature-item feature-item-a">
                        <h2 class="row start-md center-xs middle-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/uv.png"> 4 GODIŠNJA DOBA
                        </h2>
                        <p>Dizajniran je za upotrebu tokom cele godine, kako po letnjim vrućinama tako i po zimskim hladnoćama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-banner" class>
        <div class="content ">
            <div class="innerTitle">
                DIZAJN DO NAJSITNIJIH DETALJA
            </div>
            <div class="subtitle">
                <span class="italic">Slim Body</span> oblikuje struk, sužava bokove i podiže zadnjicu.
            </div>
            <ul class="box-banner-carousel">
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/1_1.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                &#9733; KOMPOZITNA VLAKNA &#9733;
                            </div>
                            <div class="text">
                                Materijal od mikrovlakana će učiniti pokrete slobodnim, dok omotač obavija,
                                oblikuje i podiže konture tela kako biste bili zgodni i zategnuti.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">KUPI SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell is-selected">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/2_1.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                &#9733; UGODAN OSEĆAJ &#9733;
                            </div>
                            <div class="text">
                                Konačno, možete da nosite ono što volite i da istovremeno izgledate
                                jako lepo sa zategnutom zadnjicom, stomakom i butinama.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">KUPI SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/3.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                &#9733; EFEKTNO &#9733;
                            </div>
                            <div class="text">
                                Slim Body je savršen za prikrivanje viška na pojedinim delovima tela.
                                Bićete veoma srećni što koristite tako dobar i istovremeno potpuno prirodan i efikasan proizvod.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">KUPI SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="slider" class="slider_1">
        <div class="content row col-xs-12 no-margin no-padding">
            <div class="images col-md-6 col-xs-12 center-xs">
                <div class="slider-carousel-1">
                    <div class="carousel-cell">
                        <img src="{{ asset('/') }}flexonikFiles/slimbody/BOTTOM.jpg" alt>
                    </div>
                </div>
            </div>
            <div class="text row col-md-6 col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="title start-xs">
                    <div class="innerTitle">
                        TRANSFORMIŠITE SVOJE TELO
                    </div>
                    Nosite <span class="italic">Slim Body</span> ispod odeće, ceo dan.
                    <br><br>
                    Idealno rešenje za popodnevnu šetnju, šoping u gradu, večernji izlazak ili dejt.
                    <br><br>
                    <span class="italic">Slim Body</span> napravljen je od rastegljive tkanine što omogućava
                    lagano i slobodno kretanje. Nećete osetiti da ga nosite.
                    <br><br>
                    Benefiti proizvoda:
                    <ul>
                        <li>Eliminiše <b>efekat "pomorandžine kore"</b> tj. vidljivost celulita</li>
                        <li>Poboljšava <b>čvrstoću kože</b></li>
                        <li><b>Smanjuje obim</b> i zateže</li>
                        <li>Maksimalni nivo <b>udobnosti i blagostanja</b></li>
                    </ul>
                    <br>
                    <div class="cornerButton"><i class="icon icon-play"></i>
                        <a href="#order_frame" class="scroll_to">KUPI SADA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="opinions" class>
        <div class="container">
            <h2 class="title row col-xs-12 center-xs">UTISCI NAŠIH KUPACA</h2>
            <p class="subtitle row col-xs-12 center-xs">Njihovi rezultati govore sami za sebe!</p>
            <div>
                <div class="opinions-carousel feature-img">
                    <div class="carousel-cell">
                        <div class="facebook-box">
                            <div class="content">
                                <div class="right-icon">
                                    <i class="icon icon-down-open"></i>
                                </div>
                                <div class="row header">
                                    <div class="avatar">
                                        <img src="{{ asset('/') }}flexonikFiles/slimbody/people_3.jpg" alt>
                                    </div>
                                    <div class="name">
                                        <h5><a>Gorica Jovičić</a></h5>
                                    </div>
                                </div>
                                <div class="row text">
                                    Slim Body je savršen, lak za nošenje, tkanina je mekana, otporna i ne stvara pritisak.
                                    Veličina je univerzalna i prolagođava se telu.
                                    Odličan proizvod i odnos cene i kvaliteta. Preporučujem ga.
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
                                        <img src="{{ asset('/') }}flexonikFiles/slimbody/people_4.jpg" alt>
                                    </div>
                                    <div class="name">
                                        <h5><a>Dragana Marković</a></h5>
                                    </div>
                                </div>
                                <div class="row text">
                                    Nisam mogla ništa da izvadim iz ormana iako je pun garderobe.
                                    Posle porođaja sam se mnogo ugojila i smetao mi je višak kilograma.
                                    Pošto nisam bila u mogućnosti da kupujem novu odeću, na internetu sam naišla na reklamu za Slim Body.
                                    Poručila sam ga i efekat je WOW. Veoma je udoban, a ja konačno mogu da nosim sve pantalone i
                                    suknje koje imam u ormanu.
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
                                        <img src="{{ asset('/') }}flexonikFiles/slimbody/people_1.jpg" alt>
                                    </div>
                                    <div class="name">
                                        <h5><a>Elena Petrović</a></h5>
                                    </div>
                                </div>
                                <div class="row text">
                                    Ćao svima!!! U poslednje vreme sam počela da nosim širu odeću jer su me moje regularne veličine počele da stežu.
                                    Zbog promene radnog mesta i dugog sedenja malo sam se ugojila i to me mnogo opterećivalo.
                                    Drugarica mi je poručila Slim Body, i pomislila sam zašto ne bih probala.
                                    Super je, vratila sam samopouzdanje, sva odeća mi je taman. I mom suprugu se dopada kako izgledam,
                                    iako zna da nosim Slim Body.
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
    </section>
    <div class="order_wrapper">
        <section id="order" class>
            <div class="content">
                <div id="countdown">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                Specijalna ponuda, važi samo do isteka zaliha.
                                Ne propustite popust i poručite odmah.
                                Možete platiti direktno kuriru, bez obaveznog plaćanja unapred.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="order_frame" class="center">
                        <div id="buy-frame" style="padding:15px;width: 100%;background: white;border: 3px dashed #3a926c;">
                            <div class="container" style="max-width: 500px;">
                                <form method="POST" accept-charset="utf-8" role="form" action="{{$orderRoute}}">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <center>
                                        <h3 class="title">PODACI ZA DOSTAVU</h3>
                                    </center>
                                    <div class="form-group">
                                        <label>Ime i prezime</label>
                                        <input type="text" name="name" class="form-control" placeholder="Ime i prezime" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="Telefon" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Adresa</label>
                                        <input type="text" name="shipping_address" class="form-control" placeholder="Ulica i broj">
                                    </div>
                                    <div class="form-group">
                                        <label>Grad</label>
                                        <input type="text" name="shipping_city" class="form-control" placeholder="Grad">
                                    </div>
                                    <center>
                                        <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">ZAVRŠI PORUDŽBINU</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="secureShopping" class>
            <div class="content container row col-xs-12 center-xs">
                <h1 class="title">Kupovina 100% bez rizika</h1>
                <p class="subtitle">Kupite originalan proizvod na našem sajtu da biste izbegli loše kopije i falsifikate.</p>
                <div class="list">
                    <ul>
                        <li class="row col-xs-12 middle-xs start-md center-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/lock.svg" alt>
                            <div class="opt-con">
                                <h4>100% sigurna kupovina</h4>
                            </div>
                        </li>
                        <li class="row col-xs-12 middle-xs start-md center-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/delivery.png" alt>
                            <div class="opt-con">
                                <h4>Dostava u roku od 1-2 radna dana</h4>
                            </div>
                        </li>
                        <li class="row col-xs-12 middle-xs start-md center-xs">
                            <img src="{{ asset('/') }}flexonikFiles/slimbody/free_bag.svg" alt>
                            <div class="opt-con">
                                <h4>Plaćanje pouzećem</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>