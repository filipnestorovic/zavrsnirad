<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=375">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/pestreject/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/pestreject/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/pestreject/swiper-bundle.css">
    <script src="{{ asset('/') }}dailysharkFiles/pestreject/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}dailysharkFiles/pestreject/function.js"></script>
    <style>
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/ArialMT.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/Arial-BoldMT.woff') format('woff');
            font-weight: bold;
            font-style: normal;
        }
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/Arial-Black.woff') format('woff');
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="header">
         <span class="prodname">
         Pest Reject
         </span>
    <div class="cont">
        <div class="btn-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header-content">
            <nav class="nav">
                <ul>
                    <li>
                        <a href="#about">
                            Problemi
                        </a>
                    </li>
                    <li>
                        <a href="#reviews">
                            Utisci kupaca
                        </a>
                    </li>
                    <li>
                        <a href="#delivery">
                            Kako poručiti
                        </a>
                    </li>
                    <li>
                        <a href="#bottom_form">
                            Poručite odmah
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="block_1">
        <div class="red-top">
            <p>
                Oslobodite se bubašvaba, miševa i insekata
            </p>
        </div>
        <div class="flex-bot">
            <div class="item">
                <p>
                    BEZBEDAN ZA DECU I KUĆNE LJUBIMCE
                </p>
            </div>
            <div class="item">
                <p>
                    JEDNOSTAVNO RADI IZ ELEKTRIČNE UTIČNICE
                </p>
            </div>
            <div class="item">
                <p>
                    JEDAN UREĐAJ POKRIVA JEDNU CELU PROSTORIJU
                </p>
            </div>
        </div>
    </div>
    <div class="offer-block">
        <div class="promo-plashka">
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/promo-zhuk.png" class="promo-zhuk">
            <div class="promo-round">
                <div class="promo-round-inner">
                    <p style="direction: ltr;">
                        40%
                    </p>
                </div>
            </div>
            <div class="promo-top">
                <p>
                    PONUDA SAMO DANAS
                </p>
            </div>
            <div class="promo-bot">
                <p>
                    POPUST
                </p>
            </div>
        </div>
        <div class="form-wrap">
            <div class="prices">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/product.png" class="form-prod">
                <div class="price-block">
                    <p class="underline">
                        Iskoristite specijalnu ponudu
                    </p>
                    <p class="neon">
                        40% POPUSTA
                    </p>
                    <p class="old-price">
                        <s>
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </s>
                    </p>
                    <p class="new-price">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="">
                <select name="quantity" class="quantity" required>
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                        </option>
                    @endforeach
                </select>
                <button class="button" type="submit">
                    Poručite sada
                </button>
            </form>
        </div>
    </div>
    <div class="block_2" id="about">
        <h1>
            Umorni ste od štetočina u <span class="red">vašem domu?</span>
        </h1>
        <div class="flex">
            <div class="item">
                <p>
                    Imate li bubašvabe ili stenice?
                </p>
            </div>
            <div class="item">
                <p>
                    Ne možete da se nosite sa glodarima?
                </p>
            </div>
            <div class="item">
                <p>
                    Da li je vaša metoda neefikasna?
                </p>
            </div>
            <div class="item">
                <p>
                    Da li imate pauke u kući?
                </p>
            </div>
        </div>
    </div>
    <div class="block_3">
        <h1>
            Uključite po jedan uređaj u svakoj prostoriji i uživajte u domu bez insekata i glodara!
        </h1>
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/block3-prod.png" class="prod-abs">
        <p>
            <b>Ovaj ekološki uređaj - ultrazvučni odbojnik štetočina i glodara pomoći će vam u borbi protiv njih.</b>
        </p>
        <p>Samo uključite Pest Reject u utičnicu i on će početi da proizvodi ultrazvučne impulse  koji će odbijati insekte i glodare 24h dnevno.
            Uređaj ih ne ubija nego tera da beže što dalje, tako da ih ne morate sakupljati po svom domu.</p>
    </div>
    <div id="video" class="video_block" style="max-width: 480px; height: auto">
        <div class="video">
            <video controls="" class="main-video" playsinline preload="metadata">
                <source src="{{ asset('/') }}dailysharkFiles/pestreject/video_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="block_4">
        <p>Uključite jedan uređaj u kuhinju (omiljeno mesto štetočina), a drugi u neku od ostalih prostorija  i štetočine više nikada neće dolaziti u vaš dom.
            Radius jednog uređaja je 15 kvadratnih metara. Dakle, 2 uređaja su dovoljna za mali stan.</p>
        <div class="item">
            <h1>
                MALI STAN
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img1.png">
        </div>
        <div class="item">
            <h1>
                SREDNJI STAN
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img2.png">
        </div>
        <div class="item">
            <h1>
                VELIKI STAN
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img3.png">
        </div>
        <a href="#bottom_form" class="button">
            Poručite sada
        </a>
    </div>
    <div class="block_5">
        <h1 style="font-size: 36px; margin-bottom: 10px;">
            ZA 24 SATA
        </h1>
        <h1>
            štetočine i insekti će pobeći iz vašeg doma
        </h1>
    </div>
    <div class="rev_block">
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev-block1.png">
    </div>
    <div class="block_6">
        <div class="block_6--wrapper">
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Delotvoran</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item1.jpg" alt="item1">
                </div>
                <p>
                    Zbog učestalosti ultrazvučnih talasa, tera sve insekte i glodare momentalno i zauvek.
                </p>
            </div>
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3 style="font-size: 20px; line-height: 18px;">Bezbedan</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item2.jpg" alt="item2">
                </div>
                <p>
                    Bezbedan je za ljude, mačke, pse, i ostale kućne ljubimce. Deluje samo na glodare i insekte.
                </p>
            </div>
        </div>
        <div class="block_6--wrapper">
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Velika <br>pokrivenost</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item3.jpg" alt="item3">
                </div>
                <p>
                    Rad jednog uređaja pokriva površinu od 15 kvadratnih metara.
                </p>
            </div>
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Široka namena</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item4.jpg" alt="item4">
                </div>
                <p>
                    Može se koristiti u stanu, kancelariji, garaži, prodavnici, podrumu ili bilo kom drugom mestu.
                </p>
            </div>
        </div>
    </div>
    <a href="#bottom_form" class="button">
        Poručite sada
    </a>
    <div class="block_7">
        <h1>
            <span class="red">Uređaj broj 1 </span>u borbi protiv insekata i glodara!
        </h1>
        <div class="list-block">
            <ul class="list">
                <li>
                    Prijatelj životne sredine
                </li>
                <li>
                    Jednostavan za korišćenje
                </li>
                <li>
                    Štiti 24/7
                </li>
            </ul>
        </div>
        <h1>
            Efikasan protiv svih štetočina
        </h1>
        <div class="flex">
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item1.png">
                </div>
                <p>
                    Bube
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item2.png">
                </div>
                <p>
                    Stenice
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item3.png">
                </div>
                <p>
                    Glodari
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item4.png">
                </div>
                <p>
                    Pauci
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item5.png">
                </div>
                <p>
                    Mravi
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item6.png">
                </div>
                <p>
                    Bubašvabe
                </p>
            </div>
        </div>
    </div>
    <div class="rev_block">
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev-block2.png">
    </div>
    <div class="block_8">
        <h2>
            Mislite li da uređaj Pest Reject ne može da reši vaš problem?
        </h2>
        <h2 style="font-size: 39px; line-height: 45px;">
               <span class="red">Definitivno će vam pomoći!</span>
        </h2>
        <h2 style="font-size: 24px; line-height: 28px;">
            Pest Reject će vas osloboditi od štetočina!
        </h2>
        <div class="item mice">
            <div class="text">
                <p class="red">
                    MIŠEVA I GLODARA
                </p>
                <p>
                    <b>
                        Nestaće za
                    </b>
                </p>
                <h1>
                    3 DANA
                </h1>
            </div>
        </div>
        <div class="item cockroach1">
            <div class="text">
                <p class="red">
                    BUBAŠVABE
                </p>
                <p>
                    <b>
                        Nestaće za
                    </b>
                </p>
                <h1>
                    48 SATI
                </h1>
            </div>
        </div>
        <div class="item cockroach2">
            <div class="text">
                <p class="red">
                    STENICE
                </p>
                <p>
                    <b>
                        Nestaće za
                    </b>
                </p>
                <h1>
                    3 DANA
                </h1>
            </div>
        </div>
        <div class="item krot">
            <div class="text">
                <p class="red">
                    ZMIJE I KRTICE
                </p>
                <p>
                    <b>
                        Nestaće za
                    </b>
                </p>
                <h1>
                    48 sati
                </h1>
            </div>
        </div>
    </div>
    <div class="block_vote vote_section gray_theme">
        <div class="block_vote--inner">
            <h1>
                Da li vam je pomogao Pest Reject?
            </h1>
            <div class="questions_list">
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        DA
                    </div>
                    <div class="percents">82%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        NE
                    </div>
                    <div class="percents">
                        4%
                    </div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        Nisam još uvek kupio
                    </div>
                    <div class="percents">
                        14%
                    </div>
                </div>
            </div>
            <div class="voice_count">
                <b>974</b> glasova
            </div>
        </div>
        <a href="#bottom_form" class="button">
            Poručite sada
        </a>
    </div>
    <div class="reviews_container" id="reviews">
        <h1>
            Utisci kupaca
        </h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_3.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Anja Rajak, 28
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Pre godinu dana sam poslušala komšiju i kupila otrov za bubašvabe. Otrov je bio efikasan u kuhinji, ali ih je oterao u moju sobu i napravio još veći problem.
                                    Tek kada sam kupila Pest Reject, uspela sam temeljno da rešim problem. Evo već nekoliko meseci nisam videla ni jednu bubašvabu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_1.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Binge, 33
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Imam miševi 3 godine. Bio sam umoran od bobre sa njima. Mišolovke nisu radila dobro.
                                    Kupio sam ovaj proizvod i super je, nema miševa i mnogo sam srećan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_2.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Nenad Janković, 45
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Obično ne verujem u ovu vrstu proizvoda , ali nakon što su mi se bubašvabe pojavile u dnevnom boravku odlučio sam da pokušam. Kao rukom odnešene. Više od 6
                                    meseci nisam video ni jednu. Preporučujem Pest Reject svima koji imaju slične probleme.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="delivery" id="delivery">
        <h1>
            PORUČITE TAKO ŠTO ĆETE UNETI SVOJE PODATKE NA NAŠEM SAJTU
        </h1>
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/del-gif.gif" class="del-gif">
        <div class="del-list">
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del3.svg">
                <p>
                    Kontaktiraćemo vas da potvrdimo vašu porudžbinu
                </p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del1.svg">
                <p>
                    Šaljemo u roku od 1-2 radna dana
                </p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del2.svg">
                <p>
                    Plaćate kuriru brze pošte po preuzimanju paketa
                </p>
            </div>
        </div>
    </div>
    <div class="block_1">
        <div class="red-top">
            <p>
                Oslobodite se bubašvaba, miševa i insekata
            </p>
        </div>
        <div class="flex-bot">
            <div class="item">
                <p>
                    BEZBEDAN ZA DECU I KUĆNE LJUBIMCE
                </p>
            </div>
            <div class="item">
                <p>
                    JEDNOSTAVNO RADI IZ ELEKTRIČNE UTIČNICE
                </p>
            </div>
            <div class="item">
                <p>
                    JEDAN UREĐAJ POKRIVA JEDNU CELU PROSTORIJU
                </p>
            </div>
        </div>
    </div>
    <div class="offer-block">
        <div class="promo-plashka">
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/promo-zhuk.png" class="promo-zhuk">
            <div class="promo-round">
                <div class="promo-round-inner">
                    <p style="direction: ltr;">
                        40%
                    </p>
                </div>
            </div>
            <div class="promo-top">
                <p>
                    PONUDA SAMO DANAS
                </p>
            </div>
            <div class="promo-bot">
                <p>
                    POPUST
                </p>
            </div>
        </div>
        <div class="form-wrap">
            <div class="prices">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/product.png" class="form-prod">
                <div class="price-block">
                    <p class="underline">
                        Iskoristite specijalnu ponudu
                    </p>
                    <p class="neon">
                        40% POPUSTA
                    </p>
                    <p class="old-price">
                        <s>
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </s>
                    </p>
                    <p class="new-price">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="bottom_form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="">
                <select name="quantity" class="quantity" required>
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                        </option>
                    @endforeach
                </select>
                <button class="button" type="submit">
                    Poručite sada
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 23,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
@include('components.pixel_footer')
</body>
</html>
