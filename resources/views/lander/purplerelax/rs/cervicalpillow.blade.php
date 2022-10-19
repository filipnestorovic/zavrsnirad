<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/cervicalpillow/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/cervicalpillow/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/cervicalpillow/styles.css">
</head>
<body>
@include('components.display_errors')
<section class="top_line">
    <div class="wrapper">
        <ul class="clearfix">
            <li>100% garancija kvaliteta</li>
            <li>Brza dostava kurirskom službom</li>
            <li>Povrat novca u roku od 14 dana</li>
        </ul>
    </div>
</section>
<section class="offer_section">
    <div class="wrapper">
        <h1 class="main_title"><span style="color: #1caae3;">Cervical Pillow</span> <b>-</b> ortopedski jastuk</h1>
        <p class="main_subtitle"><span>Siguran oporavak vrata i oslobađanje od bola</span></p>
        <div class="sale">
            <p>popust<br><span>-40%</span></p>
        </div>
        <ul class="ofr_bull">
            <li>Eliminiše glavobolju</li>
            <li>Ispravlja kičmu</li>
            <li>Jača mišiće leđa i vrata</li>
        </ul>
        <div class="pulse">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/pulse.png" alt="">
        </div>
        <div class="action_block">
            <div class="price clearfix">
                <p>Cena:</p>
                <div class="nubmer">
                    <div class="old">
                        <span>
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </div>
                    <div class="new">
                        <span>
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poručite sada</a>
            <div class="prod_count">Ostalo još <span>12 komada</span> na akciji</div>
        </div>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Problemi koji vas sprečavaju da živite punim plućima</h2>
        <div class="subtitle">
            <span>60% ljudi ima probleme</span> sa vratom, kao i simptome koji taj problem izaziva:
        </div>
        <ul class="benef1">
            <li>
                <p>Dosadan bol</p>
            </li>
            <li>
                <p>Neudobnost</p>
            </li>
            <li>
                <p>Umor</p>
            </li>
            <li>
                <p>Nesanica</p>
            </li>
        </ul>
        <div class="first_use">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/product-c.png" alt="">
            <p>Prilikom inicijalne upotrebe, trostruki jastuk na naduvavanje ublažava manifestacije simptoma bola, a uz stalnu upotrebu potpuno
                eliminiše rizik od njihovog nastanka</p>
        </div>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title">Zaboravite na nelagodnost izazvanu problemima sa vratom i <span> osigurajte zdrav san</span></h2>
        <p class="subtitle">Ortopedski jastuk Cervical Pillow - jednostavan i efikasan način da povratite lagodan život i zaboravite na bolove u leđima i vratu.</p>
        <div class="content clearfix">
            <div class="text">
                <h4>Princip njegovog rada je prilično jednostavan</h4>
                <ul class="list1">
                    <li>
                        <p>Isteže vrat i kičmu</p>
                    </li>
                    <li>
                        <p>Smanjuje opterećenje na vratu</p>
                    </li>
                    <li>
                        <p>Eliminiše napade migrene i glavobolje</p>
                    </li>
                    <li>
                        <p>Poboljšava cirkulaciju</p>
                    </li>
                    <li>
                        <p>Jača mišiće leđa i ramena</p>
                    </li>
                    <li>
                        <p>Vraća vrat u pravilan položaj</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="action">
            <p>Najefikasniji način za buđenje bez bolova, kao i najbolji način da dođete u odličnu formu</p>
            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <div class="magnet_block">
            <div class="magnet_icon">
                <div class="magnet">
                    <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/magnet.png" alt="">
                </div>
            </div>
            <p>Rastezljivi ortopedski jastuk nove generacije, idealan je za osobe koje pate od bolova u vratu i leđima. Pomaže u rešavanju
                problema ukočenosti vrata i vraćanju zdravog sna. Ima izražen terapeutski efekat.</p>
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/s4_img.png" alt="">
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><span>100% rezultat koji vas neće razočarati!</span></h2>
        <div class="subtitle">Pravilan stav i ravna kičma!</div>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/s5_img1.jpg" alt="">
                <p>Potpuno oslobađanje od bolova u glavi i vratu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/s5_img2.jpg" alt="">
                <p>Uklanjanje neuravnoteženog pritiska u zglobovima</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/s5_img3.jpg" alt="">
                <p>Lepa i ravna kičma bez umora</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/s5_img4.jpg" alt="">
                <p>Čvrsta leđa i ramena</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </div>
    <div class="gallery owl-carousel">
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/gallery1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/gallery2.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/gallery3.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/gallery4.jpg" alt="">
        </div>
    </div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><span>3 jednostavna koraka</span> za ublažavanje bolova u vratu i umora</h2>
        <div class="how_use clearfix">
            <ul class="benef3">
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/use1.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 1</span>
                        <p>Sedite u udoban položaj i stavite jastuk oko vrata</p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/use2.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 2</span>
                        <p>Podesite željenu veličinu</p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/use3.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 3</span>
                        <p>Uz pomoć sprave za naduvavanje napumpajte vazduh do položaja koji vam je udoban</p>
                    </div>
                </li>
            </ul>
            <div class="left">
                <div class="text">
                    <p>Tokom prvih 7 dana korišćenja ortopedskog jastuka Cervical Pillow, ponavljajte proceduru po 5 minuta dva puta dnevno.
                        Postepeno možete povećati opterećenje i povećati vreme istezanja do 20-25 minuta.</p>
                    <p>Imajte na umu da postupak ne bi trebalo da izaziva nelagodnost ili bol.</p>
                    <a href="#order_form" class="button-m">Poručite odmah</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sect8">
    <div class="wrapper">
        <h2 class="title">Komentari kupaca <span>kojima je pomogao</span> Cervical Pillow</h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/rev1.jpg" alt="">
                <span>"Bol potpuno nestaje, postoji osećaj lakoće"</span>
                <p>Vrat me je dugo boleo, ponekad mi bolovi nisu dugo davali da se odmorim. Budila sam se noću i to me je stalno mučilo.
                    Doktor mi je rekao da imam degeneraciju kičmenog stuba. Prijatelji su mi preporučili da kupim ovaj jastuk, i od kada ga koristim
                    osećam se preporođeno.</p>
                <div class="info">Mia</div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/rev2.jpg" alt="">
                <span>"Krećem se bez straha, nelagoda je nestala"</span>
                <p>Ovo je drugi ortopedski jastuk koji koristim. Kupio sam prvi pre 6 meseci i nije se mnogo razlikovao oko običnog jastuka.
                    Onda sam odlučio da kupim Cervical Pillow. Kako sam provodio dosta vremena za volanom, glavobolja i bol u vratu su mi bili
                    stalni saputnici. Sada, sa ovim jastukom to je nestalo. Više nemam glavobolje i ne boli me vrat. Sve preporuke za ovaj proizvod.</p>
                <div class="info">Saša</div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/rev3.jpg" alt="">
                <span>"Omogućava vam da smanjite nivo stresa tokom radnog dana"</span>
                <p>Imamo čitavu grupu ljudi na poslu koji imaju probleme u leđima i vratu. Dugo sedimo, imamo višečasovne sastanke, i to je vremenom uzelo danak.
                    Firma nam je kupila nekoliko ovih jastuka i moram da vam priznam da se manje više svi osećamo preporođeno. Svi su veoma zadovoljni!</p>
                <div class="info">Mladen</div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect9">
    <div class="wrapper">
        <h2 class="title">Kako da poručim <span>Cervical Pillow?</span></h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/order1.png" alt="">
                <span><span>01</span>Poručite</span>
                <p>Popunite formular na našoj web stranici</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/order2.png" alt="">
                <span><span>02</span>Potvrda</span>
                <p>Kontaktiraćemo vas da povrdimo porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/order3.png" alt="">
                <span><span>03</span>Prijem</span>
                <p>Dostavljamo brzom poštom i plaćate po pouzeću</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper">
        <h1 class="main_title"><span style="color: #1caae3;">Cervical Pillow</span> <b>-</b> ortopedski jastuk</h1>
        <p class="main_subtitle"><span>Siguran oporavak vrata i oslobađanje od bola</span></p>
        <div class="sale">
            <p>popust<br><span>-40%</span></p>
        </div>
        <div class="pulse">
            <img src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/pulse.png" alt="">
        </div>
        <div id="order_form" class="formbox">
            <div class="price clearfix">
                <p>Cena:</p>
                <div class="nubmer">
                    <div class="old">
                        <span>
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </div>
                    <div class="new">
                        <span>
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </div>
                </div>
            </div>
            <form class="main-order-form m1-form" action="{{$orderRoute}}" method="post" id="forma">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="">
                <button class="button-m">Poručite sada</button>
            </form>
            <div class="prod_count">Ostalo još <span>12 komada</span> na akciji</div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/cervicalpillow/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
