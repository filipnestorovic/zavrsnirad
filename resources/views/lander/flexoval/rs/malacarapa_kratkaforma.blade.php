<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{asset('/')}}flexovalFiles/carapa/about__tick_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}flexovalFiles/carapa/styles.css">
    <style>@font-face{font-family:'Roboto';src:local('Roboto Thin'),local('Roboto-Thin'),url('{{asset('/')}}fonts/robotothin.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothin.woff') format('woff'),url('{{asset('/')}}fonts/robotothin.ttf') format('truetype');font-weight:100;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Thin Italic'),local('Roboto-ThinItalic'),url('{{asset('/')}}fonts/robotothinitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothinitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotothinitalic.ttf') format('truetype');font-weight:100;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Light'),local('Roboto-Light'),url('{{asset('/')}}fonts/robotolight.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolight.woff') format('woff'),url('{{asset('/')}}fonts/robotolight.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Light Italic'),local('Roboto-LightItalic'),url('{{asset('/')}}fonts/robotolightitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolightitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotolightitalic.ttf') format('truetype');font-weight:300;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto'),local('Roboto-Regular'),url('{{asset('/')}}fonts/roboto.woff2') format('woff2'),url('{{asset('/')}}fonts/roboto.woff') format('woff'),url('{{asset('/')}}fonts/roboto.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Italic'),local('Roboto-Italic'),url('{{asset('/')}}fonts/robotoitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoitalic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Medium'),local('Roboto-Medium'),url('{{asset('/')}}fonts/robotomedium.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomedium.woff') format('woff'),url('{{asset('/')}}fonts/robotomedium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Medium Italic'),local('Roboto-MediumItalic'),url('{{asset('/')}}fonts/robotomediumitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomediumitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotomediumitalic.ttf') format('truetype');font-weight:500;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Bold'),local('Roboto-Bold'),url('{{asset('/')}}fonts/robotobold.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobold.woff') format('woff'),url('{{asset('/')}}fonts/robotobold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Bold Italic'),local('Roboto-BoldItalic'),url('{{asset('/')}}fonts/robotobolditalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobolditalic.woff') format('woff'),url('{{asset('/')}}fonts/robotobolditalic.ttf') format('truetype');font-weight:700;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Black'),local('Roboto-Black'),url('{{asset('/')}}fonts/robotoblack.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblack.woff') format('woff'),url('{{asset('/')}}fonts/robotoblack.ttf') format('truetype');font-weight:900;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Black Italic'),local('Roboto-BlackItalic'),url('{{asset('/')}}fonts/robotoblackitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblackitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoblackitalic.ttf') format('truetype');font-weight:900;font-style:italic}</style>
    <style>
        .offer_section.offer_top {
            background: #354356 url({{asset('/')}}flexovalFiles/malacarapa/desctop__offer_top_bg.png) center top no-repeat;
        }
        .offer_section.offer_top ul {
            margin: 70px 0 0 80px;
        }
        .offer_section.offer_top ul li, .offer_section.offer_top ul li b {
            color: #fff;
        }
        .offer_section.offer_bottom {
            background: #354356 url({{asset('/')}}flexovalFiles/malacarapa/desctop__offer_top_bg.png) center top no-repeat;
        }
        .offer_section.offer_bottom ul {
            margin: 75px 0 0 80px;
        }
        @media screen and (max-width: 639px) {
            .offer_section.offer_top {
                background-image: url({{asset('/')}}flexovalFiles/malacarapa/mobile__offer_bg.png);
                background-position: -190px 0;
            }
            .offer_section .discount {
                top: 178px;
                left: 80px;
            }
            .offer_section.offer_bottom {
                background-image: url({{asset('/')}}flexovalFiles/malacarapa/mobile__offer_bg.png);
                background-position: -190px 0;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Poboljšava </b><br>cirkulaciju</li>
            <li><b>Smanjuje </b><br>upale i otoke</li>
            <li><b>Bez </b><br>nuspojava</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">Kompres</h1>
                <p>Za poboljšanu cirkulaciju <span>i protiv proširenih vena</span></p>
            </div>
            <div class="discount">Popust <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <form class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                {{--<input class="input" type="text" name="shipping_address" placeholder="Adresa" required>--}}
                {{--<input class="input" type="text" name="shipping_city" placeholder="Grad" required>--}}
                <button class="button">PORUČI SADA</button>
            </form>
        </div>
    </div>
</header>
<section class="risks_section">
    <div class="wrapper">
        <h2>Zašto ne smemo da <span>ignorišemo proširene vene?</span></h2>
        <div class="risks_list">
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk1_image.jpg" alt="" title="">
                </div>
                <p><b>Čak i najblaži stepen</b> proširenih vena može da dovede do venske insuficijencije – trajnog stanja za koje ne postoji lek</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk2_image.jpg" alt="" title="">
                </div>
                <p><b>Varikozne vene</b> su pre svega veliki rizik za trombozu i pogodne su za stvaranje krvnih ugrušaka</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk3_image.jpg" alt="" title="">
                </div>
                <p><b>Proširene vene izazivaju</b> širenje trofičnog gira po celom telu, što se može ukloniti samo transplatacijom kože</p>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper">
        <h2>Kompres čarape <span>štite zdravlje!</span></h2>
        <img src="{{asset('/')}}flexovalFiles/carapa/about__image1.png" alt="" title="">
        <div class="text_block">
            <p>Tajna njihove efikasnosti leži u <b>jedinstvenom sastavu </b> - Kombinovana medicinska trikotaža i pamuk. Regulišu telesnu temperaturu, a ne samo da pružaju jako prijatan osećaj, već regulišu i nivo vlažnosti kože. Za razliku od ostalih čarapa, <b>Kompres dokolenice rešavaju problem u korenu!</b></p>
        </div>
        <ul>
            <li>Rešavaju noge <b>umora, bola, trnjenja</b> kao i upala i otoka</li>
            <li>Normalizuju <b>cirkulaciju i jačaju zidove</b> krvnih sudova</li>
            <li>Zahvaljujući <b>efektu kompresije</b>, krv brže cirkuliše venama</li>
            <li>Pružaju neophodnu <b>trombiotičku profilaksu</b>, štiteći od nezgoda</li>
        </ul>
        <a href="#order_form" class="button">ISKORISTI PONUDU</a>
    </div>
</section>
<section class="components_section">
    <div class="wrapper">
        <h2>Kome su <span>namenjene Kompres carape?</span></h2>
    </div>
    <div class="components_list">
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component1_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Zaposleni</h3>
                    <p>Onima koji većinu dana ili radnog vremena provode stojeći</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component2_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Trudnice</h3>
                    <p>Za gojazne i trudnice</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component3_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Neudobna obuća</h3>
                    <p>Često nosite obuću sa štiklom</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component4_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Izražene vene</h3>
                    <p>Primećujete da su vene na nogama izraženije i „otekle“</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="problems_section">
    <div class="wrapper clearfix">
        <div class="image_block">
            <img src="{{asset('/')}}flexovalFiles/carapa/problems__image.jpg" alt="" title="">
        </div>
        <div class="info">
            <h3>Zašto su <b>Kompres čarape korisne?</b></h3>
            <ul>
                <li>Sprečavaju urastanje noktiju, pjave žuljeva, kurjih očiju i slično</li>
                <li>Nemaju nikakvih neželjenih efekata</li>
                <li>Jednako ih je prijatno nositi kako u obući, tako i po kući bez ičeg drugog na nogama</li>
                <li>Jako kvalitetne i udobne</li>
            </ul>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h3>Po čemu su <span>kompres čarape jedinstvene na tržištu?</span></h3>
        <div class="table">
            <div class="row">
                <div class="cell head">Obične kompresione čarape</div>
                <div class="cell head">Kompres čarape</div>
                <div class="cell head">Kreme i ulja</div>
            </div>
            <div class="row">
                <div class="cell">Nemaju holistički efekat na proširene vene i cirkulaciju. Imaju samo kompresioni efekat</div>
                <div class="cell">Imaju široki spektar efekata koji problem satire u korenu. Kao rezultat toga proširene vene nestaju</div>
                <div class="cell">Nemaju holistički efekat na koren problema. Samo trenutno popravljaju stanje (za vreme korišćenja)</div>
            </div>
            <div class="row">
                <div class="cell">Posle par dana korišćenja umor i otok su značajno regulisani</div>
                <div class="cell">Već posle prvog korišćenja umor i otok nestaju. Potrebno je 3-4 nedelje da se celokupan problem reši</div>
                <div class="cell">Efekat se vidi tek posle nedelju dana, a moguće je i da potpuno izostane</div>
            </div>
            <div class="row">
                <div class="cell">Ne mogu da se nose tokom celog dana – postoji ograničeno vreme nošenja. Pojava edema kao nuspojava</div>
                <div class="cell">Nemaju ograničen rok nošenja. Nosite ih ceo dan. Veoma su lagane i udobne</div>
                <div class="cell">Ograničeno vreme korišćenja</div>
            </div>
            <div class="row">
                <div class="cell">Ne dopuštaju koži da diše što može dovesti do neprijatnih mirisa</div>
                <div class="cell">Daju koži da diše - nema znojenja noge i neprijatnih mirisa</div>
                <div class="cell">Mogu da imaju neprijatan miris</div>
            </div>
            <div class="row">
                <div class="cell">Odličan kompresioni efekat</div>
                <div class="cell">Kombinovani materijali pružaju dovoljnu kompresiju, tako da nisu potrebni dodatni preparati</div>
                <div class="cell">U većini slučajeva tretirana površina mora da se previje da bi se ostvario efekat kompresije</div>
            </div>
        </div>
    </div>
</section>
<section class="opinion_section">
    <div class="wrapper">
        <div class="opinion_block clearfix">
            <div class="author_info">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/opinion__photo.jpg" alt="" title="">
                </div>
                <div class="author_name"></div>
                <p></p>
            </div>
            <div class="text_block">
                <h3>Mišljenje <span>struke</span></h3>
                <p>Na velikom broju uzoraka različitih problema sa venama i cirkulacijom zaključeno je da je jako teško da za svaki slučaj postoji jedan univerzalni način lečenja. <br>Međutim, Kompres dokolenice to demantuju – više stotina zadovoljnih korisnika potvrdjuje njihove izvanredne rezultate u tretiranju ovog problema. Svi oni prijavljuju da se cirkulacija vratila u normalu i da je protok krvi poboljšan. Preporučuju se za sve koji primete prve tragove proširenih vena. Toliko su lagane i udobne da ih većina korisnika nosi i na posao.</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>Utisci <span>kupaca</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review1_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Katarina Životić, <span>Barajevo</span></div>
                    <p>Iskreno, nisam mnogo nade polagala u ove dokolenice. Ali pristupačna cena (dosta jeftinije nego u apotekama) i pozitivna iskustva prijatelja su me naterala da ih probam – i nisam razočarana. Za manje od mesec dana rešila sam se proširenih vena. Noge su prestale da mi trnu, pogotovo listovi. Sada ih nosim svakodnevno bar 3-4 sata preventivno. Sjajne su i mogu vam reći da se i ja sjajno osećam!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review2_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Anastasija Katić, <span>Beograd</span></div>
                    <p>Kupila sam majci dva para, i veoma joj se sviđaju. Kaže da izgledaju kao regularne čarape samo dosta punije i mekše. Efekat je sjajan! Pre par nedelja jedva je mogla da ide po kući, a danas se igra sa unučićima pop parku. Jako smo zahvalni na tim čarapama.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review3_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Olja Micić, <span>Niš</span></div>
                    <p>Nisam očekivala proširene vene u ovim godinama, ali eto i to se desilo. Primetila sam da me listovi bole svako veče i da mi trnu. Naručila sam Kompres čarape čim sam videla reklamu na Instagramu. Zahvalila bih se za ekspresnu dostavu – zahvaljujući tome jako brzo sam ponovo bila na nogama.
                        Umor je nestao, a vene više nisu proširene. Ove čarape su čudo – moja topla preporuka!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_info_section">
    <div class="wrapper">
        <h2>Dostava i <span>plaćanje</span></h2>
        <div class="info_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info1_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Kako da naručim?</h3>
                    <p><a style="text-decoration: none; color: #32455d;" href="#order_form">Popunite formu</a> na našem sajtu. Dobićete potvrdu porudžbine i možete je očekivati za 24-48h</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info2_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Dostava</h3>
                    <p>Šaljemo robu brzom poštom. Kuriru plaćate tek po preuzimanju</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info3_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Garancija</h3>
                    <p>Na sve proizvode dajemo garanciju kvaliteta. Ukoliko iz bilo kog razloga niste zadovoljni vraćamo novac</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Poboljšava </b><br>cirkulaciju</li>
            <li><b>Smanjuje </b><br>upale i otoke</li>
            <li><b>Bez </b><br>nuspojava</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">Kompres</h1>
                <p>Za poboljšanu cirkulaciju <span>i protiv proširenih vena</span></p>
            </div>
            <div class="discount">Popust <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                {{--<input class="input" type="text" name="shipping_address" placeholder="Adresa" required>--}}
                {{--<input class="input" type="text" name="shipping_city" placeholder="Grad" required>--}}
                <button class="button">PORUČI SADA</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>