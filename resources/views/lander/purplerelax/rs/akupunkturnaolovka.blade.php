<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/favicon.ico" type="image/png"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/styles.css">
    <script src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/jquery.min.js"></script>
</head>
<body>
@include('components.display_errors')
<section class="offer_section">
    <div class="wrapper">
        <div class="title clearfix">
            <h1 class="main_title"><img src="{{ asset('/') }}purplerelaxFiles/shared_files/logo.png" width="250px"/></h1>
            <h2 class="main_subtitle">AKUPUNKTURNI ELEKTRO MASAŽER</h2>
        </div>
        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/product.png" alt="" class="product">
        <div class="sale">
            <div>Akcija! <span>40%</span> popusta</div>
        </div>
        <ul class="ofr_bull">
            <li>Ublažava glavobolju i napade migrene</li>
            <li>Brzo otklanja bolove u vratu, leđima i zglobovima</li>
            <li>Ublažava umor i nervnu napetost</li>
            <li>Ne uzrokuje bol</li>
        </ul>
        <a href="{{$checkoutView}}" class="button-m offer_sectionBtn">Poruči odmah</a>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <div class="content clearfix">
            <h2 class="title no_separ">Spoj tradicionalne kineske medicine i <span>moderne tehnologije</span></h2>
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/1.gif" alt="">
        </div>
        <div class="description">
            <p>Akupunkturna masaža je terapijska metoda koja se temelji na uticaju na posebne tačke smeštene na različitim delovima tela i povezana je s radom unutrašnjih organa.</p>
            <p>Dokazano je da delovanje na ove tačke pospešuje oslobađanje hormona za ublažavanje bola - endorfina, koji <span>blokira signale bola </span>koji se prenose duž nerava.</p>
            <p>Glavna svrha akupunkturne masaže je <span>ublažavanje bolova, grčenja mišića i nervne napetosti</span>.</p>
        </div>
        <div class="benef_action">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef_actpngv2.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef_act_tab.jpg" alt="" class="tab">
            <ul>
                <div class="left">
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img1.jpg" alt="">
                        <p>Bolovi u mišićima i zglobovima</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img2.jpg" alt="">
                        <p>Bol u leđima</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img3.jpg" alt="">
                        <p>Glavobolja</p>
                    </li>
                </div>
                <div class="right">
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img4.jpg" alt="">
                        <p>Oticanje nogu i proširene vene</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img5.jpg" alt="">
                        <p>Starosne promene kože</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef1_img6.jpg" alt="">
                        <p>Sportske povrede</p>
                    </li>
                </div>
            </ul>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Pomozi svom zdravlju</a>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <div class="gallery">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/gallery1.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/gallery2.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/gallery3.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/gallery4.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/gallery5.jpg" alt="">
        </div>
        <h2 class="title"><span>3 različite glave</span> za razne masažne efekte</h2>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef2_img1.png" alt="">
                <div class="number">1</div>
                <span>Nodalna terapija</span>
                <p>Za ublažavanje grčeva i lečenje perifernih bolova</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef2_img2.png" alt="">
                <div class="number">2</div>
                <span>Površinska terapija</span>
                <p>Podstiče cirkulaciju krvi i neutrališe upalu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef2_img3.png" alt="">
                <div class="number">3</div>
                <span>Prirodna terapija</span>
                <p>Simulira tradicionalnu metodu lečenja akupunkturom, koja se koristi za rešavanje raznih zdravstvenih problema</p>
            </li>
        </ul>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <h2 class="title"><span>Vrlo jednostavan</span> za upotrebu</h2>
        <ul class="benef3">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef3_img1.jpg" alt="">
                <span>1</span>
                <p>Stavite AAA bateriju u aparat</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef3_img2.jpg" alt="">
                <span>2</span>
                <p>Uključite uređaj držeći "+" 3 sekunde</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef3_img3.jpg" alt="">
                <span>3</span>
                <p>Nanesite malu količinu kontaktnog gela</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/benef3_img4.jpg" alt="">
                <span>4</span>
                <p>Prisnite dok ne osetite elektro impulse</p>
            </li>
        </ul>
        <div class="product_time">Čitav postupak masaže ne traje duže od <span>15-20 minuta</span></div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title">Šta se dobija u kutiji</h2>
        <div class="set_container clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/complect.jpg" alt="">
            <ul class="set_list">
                <li><small>Olovka za akupunkturu</small> 1 kom</li>
                <li><small>Krema za aktivaciju</small> 1 kom</li>
                <li><small>Ravni dodatak za masažer</small> 1 kom</li>
                <li><small>Kuglica za masažu glave</small> 1 kom</li>
                <li><small>Instrukcije</small> 1 kom</li>
            </ul>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title white">Utisci kupaca</h2>
        <p class="subtitle"><span>92,4% pozitivnik komentara</span> za akupunkturni masažer potvrđuje efikasnost ove tehnike</p>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/rev1.jpg" alt="">
                <span>«VRLO ZGODNA I KORISNA STVAR»</span>
                <p>Može se koristiti i kod kuće i na poslu, posebno se preporučuje onima koji imaju fizički
                    neaktivan radni dan. Ranije su me od umora na poslu mučili grčevi u vratu koji su mi zadavali pulsirajući bol u glavi, ali ovaj masažer mi je zaista pomogao.
                    5-10 minuta i bol trenutno nestane. </p>
                <p class="info">Marko M.</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/rev2.jpg" alt="">
                <span>«NISAM OČEKIVAO TAKO DOBAR UČINAK OD ALTERNATIVNE MEDICINE»</span>
                <p>Roditeljima sam kupio masažer - presretni su, kažu da im jako dobro pomaže kod bolova u zglobovima.
                    Porudžbina je stigla već sledeći dan, ambalaža je odlična, sve je fino upakovano. Unutra se nalazi detaljno uputstvo za upotrebu.</p>
                <p class="info">Ivan G.</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/rev3.jpg" alt="">
                <span>«ODLIČAN EFEKAT BEZ LEKOVA»</span>
                <p>Ranije, moja supruga je kupila sebi za ublažavanje umora nakon posla, a ja sam mislio da je to još jedna glupost sa interneta.
                    Međutim, prevario sam se, ovaj proizod je odličan, ublažava bol i umor, a najbolje je što potpuno opušta i oslobađa stresa.
                    Kupile su ga i moje kolege s posla, i jako su zadovoljni.</p>
                <p class="info">Dejan J.</p>
            </div>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
</section>
<section class="sect7">
    <div class="wrapper">
        <h2 class="title">Kako <span>poručiti</span></h2>
        <ul class="list-type-v2 list--numeric">
            <li>
                <img class="list-img" src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/delivery-block-v5_1.jpg" alt="">
                <div class="list-cont">
                    <h4><strong class="col-2">01</strong>Poručite</h4>
                    <p>Unesite podatke za dostavu</p>
                </div>
            </li>
            <li>
                <img class="list-img" src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/delivery-block-v5_2.jpg" alt="">
                <div class="list-cont">
                    <h4><strong class="col-2">02</strong>Slanje</h4>
                    <p>Porudžbinu dobijate u roku od 1-2 radna dana putem brze pošte</p>
                </div>
            </li>
            <li>
                <img class="list-img" src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/delivery-block-v5_3.jpg" alt="">
                <div class="list-cont">
                    <h4><strong class="col-2">03</strong>Plaćanje</h4>
                    <p>Paket plaćate pouzećem</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section">
    <div class="wrapper">
        <div class="title clearfix">
            <h1 class="main_title"><img src="{{ asset('/') }}purplerelaxFiles/shared_files/logo.png" width="250px"/></h1>
            <h2 class="main_subtitle">AKUPUNKTURNI ELEKTRO MASAŽER</h2>
        </div>
        <img src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/product.png" alt="" class="product">
        <div class="sale">
            <div>Akcija! <span>40%</span> popusta</div>
        </div>
        <ul class="ofr_bull">
            <li>Ublažava glavobolju i napade migrene</li>
            <li>Brzo otklanja bolove u vratu, leđima i zglobovima</li>
            <li>Ublažava umor i nervnu napetost</li>
            <li>Ne uzrokuje bol</li>
        </ul>
        <a href="{{$checkoutView}}" class="button-m offer_sectionBtn">Poruči odmah</a>
    </div>
</section>
<script src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/akupunkturnaolovka/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>