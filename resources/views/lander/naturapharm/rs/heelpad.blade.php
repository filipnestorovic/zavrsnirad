<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}naturapharmFiles/heelpad/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/heelpad/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/heelpad/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/heelpad/all.min.css"/>
    <link href="{{ asset('/') }}naturapharmFiles/heelpad/app.css" type="text/css" rel="stylesheet"/>
    <style>
        @font-face {
            font-family: 'Glyphicons Halflings';
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot);
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff2) format('woff2'),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff) format('woff'),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.ttf) format('truetype'),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header id="header">
    <div class="container">
        <div class="row" style="display: flex;">
            <div class="col-xs-100 col-md-50">
                <img class="logo" src="{{ asset('/') }}naturapharmFiles/heelpad/productlogo.png" alt="Heel Pad Logo">
            </div>
            <div class="col-xs-100 col-md-50 pull-right hidden-xs hidden-sm">
                <ul class="top_menu">
                    <li>
                        <a href="#use">
                            Šta rešava
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            O proizvodu
                        </a>
                    </li>
                    <li>
                        <a href="#benefits">
                            Prednosti
                        </a>
                    </li>
                    <li>
                        <a href="#faq">
                            Pitanja i odgovori
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section id="banner">
    <div class="container">
        <div class="banner_row">
            <h1 class="visible-xs visible-sm">
                Smanjite pritisak na pete i oslobodite se bola u nogama i leđima
            </h1>
            <div class="text invisible-xs visible-sm">
                Ovo je savršeno rešenje za ublažavanje bolnih problema sa petama i nelagodnosti izazvanih dugim
                stanjanjem i nošenjem obuće.
                <strong>Silicone Heel Pad je jako udoban na nogama i preporučen je od 97% ljudi koji su ga
                    kupili.</strong>
            </div>
            <div class="banner__wrapper">
                <div class="left_block">
                    <img src="{{ asset('/') }}naturapharmFiles/heelpad/product1.png"
                         style="width:100%;max-width:500px;">
                </div>
                <div class="text visible-xs invisible-sm">
                    Ovo je savršeno rešenje za ublažavanje bolnih problema sa petama i nelagodnosti izazvanih dugim
                    stanjanjem i nošenjem obuće.
                    <strong>Silicone Heel Pad je jako udoban na nogama i preporučen je od 97% ljudi koji su ga
                        kupili.</strong>
                </div>
                <div class="right_block">
                    <h1 class="hidden-xs hidden-sm">
                        Smanjite pritisak na pete i oslobodite se bola u nogama i leđima
                    </h1>
                    <div class="text hidden-xs hidden-sm">
                        Ovo je savršeno rešenje za ublažavanje bolnih problema sa petama i nelagodnosti izazvanih dugim
                        stanjanjem i nošenjem obuće.
                        <strong>Silicone Heel Pad je jako udoban na nogama i preporučen je od 97% ljudi koji su ga
                            kupili.</strong>
                    </div>
                    <ul class="green_list hidden-xs hidden-sm">
                        <li><strong>Bol u stopalu i peti može dovesti do drugih komplikacija i otežati kretanje</strong><br>
                        </li>
                        <li>Oslobodite se bolova i poboljšajte kvalitet života</li>
                        <li>Može se nositi u bilo kojoj vrsti obuće</li>
                    </ul>
                    <a href="{{$checkoutView}}" class="btn_green">
                     <span class="top_text">
                     Poručite sada
                     </span>
                        <span class="bottom_text">
                     40% popusta i BESPLATNA dostava!
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="use">
    <div class="container">
        <div>
            <h2 class="title">
                HILJADE LJUDI JE USPEŠNO SMANJILO BOL, UMOR I OTOK NA NOGAMA POMOĆU OVOG PROIZVODA
            </h2>
        </div>
        <div class="steps row">
            <div class="col-xs-100 col-sm-34">
                <div class="step">
                    <div class="img_block">
                        <span class="num">1</span>
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/step1.jpg" alt="">
                    </div>
                    <div class="title">
                        PRUŽA KOMPLETNU <br> ZAŠTITU
                    </div>
                    <div class="text">
                        Savršeno se prilagođava jedinstvenoj konturi svakog stopala, nudeći potpunu zaštitu i pružajući
                        podršku. Napravljen je od kvalitetnog i udobnog
                        materijala.
                    </div>
                </div>
            </div>
            <div class="col-xs-100 col-sm-32">
                <div class="step">
                    <div class="img_block">
                        <span class="num">2</span>
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/step2.jpg" alt="">
                    </div>
                    <div class="title">
                        NEVEROVATNA PODRŠKA <br> I MEKANI JASTUK
                    </div>
                    <div class="text">
                        Silicone Heel Pad pruža petama izuzetnu amortizaciju i podršku, smanjuje trenje i apsorbuje
                        udarce. Napravljen je za svakodnevnu upotrebu i aktivan način života.
                    </div>
                </div>
            </div>
            <div class="col-xs-100 col-sm-34">
                <div class="step">
                    <div class="img_block">
                        <span class="num">3</span>
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/step3.jpg" alt="">
                    </div>
                    <div class="title">
                        REŠITE SE BOLA <br> U PETAMA
                    </div>
                    <div class="text">
                        Silicone Heel Pad pruža ogromnu pomoć kada je u pitanju eliminisanje bolova u petama, a ima i
                        jastuk koji ga čini još udobnijim.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="red_line">
    <div class="container">
        <div class="message">
            NAJPRODAVANIJI PROIZVOD NA EVROPSKOM TRŽIŠTU U 2022
        </div>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-50 carousel-wrapper">
                <div class="img_block">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/') }}naturapharmFiles/heelpad/about1.jpg" alt="">
                            </div>
                            <div class="item ">
                                <img src="{{ asset('/') }}naturapharmFiles/heelpad/about2.jpg" alt="">
                            </div>
                            <div class="item ">
                                <img src="{{ asset('/') }}naturapharmFiles/heelpad/about3.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-50">
                <div class="right_block">
                    <h2 class="title_2">
                        O SILICONE HEEL PAD
                    </h2>
                    <div class="text">
                        <strong>Bol u petama često može da sprečava obavljanje svakodnevnih aktivnosti.</strong>
                        Silicone Heel Pad savršeno pristaje na stopalo i petu, i konačno ćete osetitit veliko olakšanje.
                        Pruža podršku i potpunu zaštitu vaših peta.
                        Sa ovim proizvodom, moći ćete da se vratite aktivnostima koje ste nekada voleli, poput hodanja i
                        trčanja i to bez bolova i trnjenja.
                    </div>
                    <ul class="orange_list">
                        <li><strong>Sa ovim proizvodom dobićete olakšanje koje ste toliko priželjkivali.</strong></li>
                        <li><strong>Mekani jastučići podupiru pete, na taj način se amortizuju udarci pri hodanju i
                                trčanju,</strong> leđa manje trpe, pete ne pucaju i manje je slabije je opterećenje na
                            kičmu.
                        </li>
                        <li><strong>Bol u stopalu može dovesti do drugih komplikacija i dovesti do sedećeg načina
                                života.</strong> Zato ne čekajte i poručite Silicone Heel Pad.
                            Može se nositi u svakoj obući, kako letnjoj tako i zimskoj.
                        </li>
                    </ul>
                    <div class="hidden-xs visible-sm-block visible-md-block visible-lg-block">
                        <a href="{{$checkoutView}}"
                           class="btn_green">
                        <span class="top_text">
                        Poručite sada
                        </span>
                            <span class="bottom_text">
                        40% popusta i BESPLATNA dostava!
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-sm hidden-md hidden-lg">
        <a href="{{$checkoutView}}" class="btn_green">
            <span class="top_text">
            Poručite sada
            </span>
            <span class="bottom_text">
            40% popusta i BESPLATNA dostava!
            </span>
        </a>
    </div>
</section>
<section id="green_line">
    <div class="container">
        <div class="message">
            SILICONE HEEL PAD JE NA AKCIJI SAMO DANAS!
        </div>
    </div>
</section>
<section id="benefits">
    <div class="container">
        <div>
            <h2 class="title">
                PREDNOSTI OVOG PROIZVODA
            </h2>
        </div>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature7.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        MOŽETE SE NOSITI U BILO KOJOJ OBUĆI
                    </div>
                    <div class="text">
                        Pomaže u ublažavanju nelagodnosti i bolova u peti.
                    </div>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature8.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        UBLAŽAVA <br> BOL U PETI
                    </div>
                    <div class="text">
                        Ovaj proizvod je jedini na tržištu koji je kod 97% naših kupaca jedini rešio bolove u peti.
                    </div>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature9.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        PRUŽA POTPUNU ZAŠTITU
                    </div>
                    <div class="text">
                        Savršeno se prilagođava konturi svakog stopala, pružajući potpunu zaštitu.
                    </div>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature10.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        KVALITETAN PROIZVOD
                    </div>
                    <div class="text">
                        Napravljen je od kvalitetnog materijala, rastezljivog i prozračnog, koji pomaže u ublažavanju
                        bolova apsorbujući udarce.
                    </div>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature11.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        NEVEROVATNA PODRŠKA I JASTUK
                    </div>
                    <div class="text">
                        Silicone Heel Pad pruža izuzetnu amortizaciju i podršku i smanjuje trenje. Dizajniran je za
                        svakodnevnu upotrebu.
                    </div>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <div class="image_cell">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/product-feature12.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="title">
                        NEŽNE I MEKANE PETE
                    </div>
                    <div class="text">
                        Dizajiran je da pruži nežnu kompresiju zahvaljujući čemu ne dolazi do pucanja peta.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-50">
                <div class="img_block">
                    <img src="{{ asset('/') }}naturapharmFiles/heelpad/img3.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-50">
                <div class="right_block">
                    <h2 class="title_2">
                        ČESTO POSTAVLJANA PITANJA (FAQ)
                    </h2>
                    <div class="faq_fist">
                        <div class="faq_item">
                            <div class="faq_title">
                                <strong>DA LI JE OVAJ PROIZVOD UDOBAN ZA NOŠENJE?</strong>
                            </div>
                            <div class="faq_answer">
                                Da, mekani ortopedski silikon od koga je napravljen je fleksibilan i prozračan. Možete
                                ga nositi dok se bavite svakodnevnim aktivnostima, a uklapa se u bilo koju
                                vrstu obuće.
                            </div>
                        </div>
                        <div class="faq_item">
                            <div class="faq_title">
                                <strong>DA LI SE MOŽE PRATI?</strong>
                            </div>
                            <div class="faq_answer">
                                Da, ovaj proizvod je za višekratnu upotrebu i može slobodno da se pee toplom vodom.
                                Ostavite ga da se osuši i spreman je za ponovno korišćenje.
                            </div>
                        </div>
                        <div class="faq_item">
                            <div class="faq_title">
                                <strong>KAKVE REZULTATE MOGU OČEKIVATI OD NJEGOVOG KORIŠĆENJA?</strong>
                            </div>
                            <div class="faq_answer">
                                Korišćenje ovog proizvoda donosi preko potrebno olakšanje od bola, zahvaljujući mekanoj
                                potpori koju pruža.
                            </div>
                        </div>
                        <div class="faq_item">
                            <div class="faq_title">
                                <strong>DA LI SE SILICONE HEEL PAD MOŽE NOSITI SVAKI DAN?</strong>
                            </div>
                            <div class="faq_answer">
                                Da, možete ga koristiti svaki dan za bilo koju vrstu aktivnosti, kao što je hodanje,
                                stajanje ili trčanje. Savršeno će se prilagoditi konturi vašeg stopala.
                            </div>
                        </div>
                    </div>
                    <a href="{{$checkoutView}}"
                       class="btn_green">
                     <span class="top_text">
                     Poručite sada
                     </span>
                        <span class="bottom_text">
                     40% popusta i BESPLATNA dostava!
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reviews">
    <div class="container">
        <div>
            <h2 class="title">
            </h2>
        </div>
        <div class="review_list">
            <div class="review_item">
                <div class="left_block">
                    <img class="stars" src="{{ asset('/') }}naturapharmFiles/heelpad/stars.jpg" alt="">
                    <div class="avatar">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/user3.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="name">
                        Svetlana<span class="status">Zadovoljan kupac</span>
                    </div>
                    <div class="text">
                        Kada mi je ćerka poručila ovaj proizvod bila sam skeptična i nisam verovala da će mi pomoći.
                        Imala sam česte bolove u peti. Ranije sam
                        koristila neke proizvode koji su bili skuplji i nisu mi pomogli, pa mi na kraj pameti nije bilo
                        da će mi ovo čudo pomoći. Ali - ispostavilo se
                        skroz suprotno. Za jednu nedelju, bolovi u peti su mi potpuno prestali. Sve preporuke za ovaj
                        prozivod.
                    </div>
                </div>
            </div>
            <div class="review_item">
                <div class="left_block">
                    <img class="stars" src="{{ asset('/') }}naturapharmFiles/heelpad/stars.jpg" alt="">
                    <div class="avatar">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/user1.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="name">
                        Tanja<span class="status">Zadovoljan kupac</span>
                    </div>
                    <div class="text">
                        Oduševljena sam kupovinom ovog proizvoda! Ispunio je sva moja očekivanja. Gledala sam recenzije
                        drugih brednova, i ni jedan me nije potpuno
                        ubedio da poručim. Porudžbina ovog proizvoda za pete je pun pogodan, i nisam pogrešila ni
                        najmanje!
                    </div>
                </div>
            </div>
            <div class="review_item">
                <div class="left_block">
                    <img class="stars" src="{{ asset('/') }}naturapharmFiles/heelpad/stars.jpg" alt="">
                    <div class="avatar">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/user2.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="name">
                        Petar<span class="status">Zadovoljan kupac</span>
                    </div>
                    <div class="text">
                        Odličan odnos cene i kvaliteta i jako brza isporuka. Cena povoljna, a porudžbina je stigla
                        obećanog dana. Kupio sam 2 para da imam i za rezervu jer zaista nisu bili skupi.
                    </div>
                </div>
            </div>
            <div class="review_item">
                <div class="left_block">
                    <img class="stars" src="{{ asset('/') }}naturapharmFiles/heelpad/stars.jpg" alt="">
                    <div class="avatar">
                        <img src="{{ asset('/') }}naturapharmFiles/heelpad/user4.png" alt="">
                    </div>
                </div>
                <div class="right_block">
                    <div class="name">
                        Marko<span class="status">Zadovoljan kupac</span>
                    </div>
                    <div class="text">
                        Kupio sam ovaj proizvod jer sam video da je bio na popustu. Povremeno ubace neki popust, nije
                        često, ali kada se ubode onda to bude baš
                        povoljno. Super je proizvod, spasio me bolova u petama i listovima. Sve preporuke, ovo mi je
                        jedna od boljih kupovina u ovoj godini.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="red_line">
    <div class="container">
        <div class="message">
            DANAŠNJA SPECIJALNA AKCIJA: 40% POPUSTA
        </div>
    </div>
</section>
<section id="bottom_block">
    <div class="container">
        <div class="row">
            <div class="col-xs-100 col-md-50">
                <div class="img_block">
                    <img src="{{ asset('/') }}naturapharmFiles/heelpad/img4.png" alt="">
                </div>
            </div>
            <div class="col-xs-100 col-md-50">
                <div class="right_block">
                    <h2 class="title_2">
                        NAJBOLJA OPCIJA NA TRŽIŠTU!
                    </h2>
                    <a href="{{$checkoutView}}"
                       class="btn_green">
                     <span class="top_text">
                     Poručite sada
                     </span>
                        <span class="bottom_text">
                     40% popusta i BESPLATNA dostava!
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/bootstrap.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/heelpad/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
