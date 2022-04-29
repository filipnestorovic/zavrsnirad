<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/crevozabastu/libs.css">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/crevozabastu/index.css">
    <style>
        @font-face {
            font-family: 'Calibri';
            src: url("{{ asset('/') }}fonts/Calibri.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Bold';
            src: url("{{ asset('/') }}fonts/Calibri-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Bold.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Italic';
            src: url("{{ asset('/') }}fonts/Calibri-Italic.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Italic.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Light';
            src: url("{{ asset('/') }}fonts/Calibri-Light.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Light.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="header">
    <div class="container">
        <div class="logo"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/logo.png" class="img-fluid" alt=""></div>
        <ul class="menu">
            <li class="page-scroll" data-scroll-id="#advantage"><a href="#">Prednosti</a></li>
            <li class="page-scroll" data-scroll-id="#description"><a href="#">Opis</a></li>
            <li class="page-scroll" data-scroll-id="#instructions"><a href="#">Instrukcije</a></li>
            <li class="page-scroll" data-scroll-id="#how-we-work"><a href="#">Dostava</a></li>
            <li class="page-scroll" data-scroll-id="#reviews"><a href="#">Recenzije</a></li>
        </ul>
    </div>
</section>
<section class="top-section">
    <div class="container">
        <div class="img-mob"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/dark-logo.png" class="img-fluid" alt=""></div>
        <div class="left">
            <div class="product-box">
                <div class="present">
                    Poklon
                    <div>sprej mlaznice</div>
                </div>
                <div class="product"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/plus-product.png" class="img-fluid" alt=""></div>
                <div class="discount">POPUST <span>-40%</span></div>
            </div>
        </div>
        <div class="right">
            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/dark-logo.png" class="img-fluid" alt=""></div>
            <div class="subtitle">Multifunkcionalno crevo za zalivanje</div>
            <ul>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Ne pravi petlje i nabore
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Ukupno je teško oko 1.5 kg
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Može da se izduži skoro 3 puta
                </li>
            </ul>
            <div class="price">
                <div class="old-price">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="current-price">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
            <a href="#" class="btn btn_blue page-scroll" data-scroll-id="#order-section__bottom">Poruči sada</a>
        </div>
    </div>
</section>
<section class="advantage" id="advantage">
    <div class="advantage__top">
        <div class="container">
            <h4>7 režima zalivanja sa poklon mlaznicom za prskanje</h4>
            <div class="main">
                <div class="imgs"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/imgs.jpg" class="img-fluid" alt=""></div>
                <div class="hose">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose.png" class="img-fluid" alt=""></div>
                    <div class="tooltip tooltip-1">
                        <span>2 - </span>Zalivanje
                    </div>
                    <div class="tooltip tooltip-2">
                        <span>3 - </span>Prskanje
                    </div>
                    <div class="tooltip tooltip-3">
                        <span>4 - </span>Pun mlaz
                    </div>
                    <div class="tooltip tooltip-4">
                        <span>5- </span>Kupa
                    </div>
                    <div class="tooltip tooltip-5">
                        <span>6 - </span>Ciljani mlaz
                    </div>
                    <div class="tooltip tooltip-6">
                        <span>7 - </span>Ravni mlaz
                    </div>
                    <div class="tooltip tooltip-7">
                        <span>1 - </span>Tuš
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="advantage__bottom">
        <div class="container">
            <h4>Lagano i kompaktno crevo <br> Vaš najbolji pomoćnik</h4>
            <div class="main">
                <ul>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/1.png" class="img-fluid" alt=""></div>
                        <div class="text">Za pranje prozora ili fasade kuće</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/2.png" class="img-fluid" alt=""></div>
                        <div class="text">Za pranje automobila ili teretnih vozila</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/3.png" class="img-fluid" alt=""></div>
                        <div class="text">Za negu biljaka u bašti</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/4.png" class="img-fluid" alt=""></div>
                        <div class="text">Za zalivanje sadnica i cveća</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/5.png" class="img-fluid" alt=""></div>
                        <div class="text">Za garažu i dvorište</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/6.png" class="img-fluid" alt=""></div>
                        <div class="text">Neophodan je u pejzažnom dizajnu</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/7.png" class="img-fluid" alt=""></div>
                        <div class="text">Neophodan je u poljoprivredi</div>
                    </li>
                </ul>
                <div class="img-circle"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/circle.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="order-section">
    <div class="order-section__top">
        <div class="top-panel">
            <div class="container">
                <div class="title">Požurite da poručite univerzalno crevo sa popustom od 40%!</div>
                <div class="subtitle">Samoproširujuće crevo se širi do 3 puta</div>
            </div>
        </div>
        <div class="container">
            <div class="main">
                <div class="discount">POPUST <span>-40%</span></div>
                <div class="hose-hands">
                    <div class="text">
                        Poklon
                        <div>sprej mlaznice</div>
                    </div>
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose-hands.png" class="img-fluid" alt=""></div>
                </div>
                <div class="hose">
                    <div class="text">
                        SAMO ZA
                        <div>
                            {{ $prices[1]['amount'] }} RSD
                        </div>
                    </div>
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose5.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-section__bottom" id="order-section__bottom">
        <div class="container">
            <div class="title">Unesite podatke za dostavu</div>
            <form class="order-form" name="form1" action="{{$orderRoute}}" method="POST">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="form-group">
                    <label for="name_first" class="control-label">Ime i prezime</label>
                    <input type="text" class="form-control" name="name" id="name_first" placeholder="Ime i prezime" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label">Telefon</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefon" required>
                </div>
                <div class="form-group">
                    <label for="shipping_address" class="control-label">Adresa</label>
                    <input type="text" class="form-control" name="shipping_address" id="shipping_address" placeholder="Adresa" required>
                </div>
                <div class="form-group">
                    <label for="shipping_city" class="control-label">Grad</label>
                    <input type="text" class="form-control" name="shipping_city" id="shipping_city" placeholder="Grad" required>
                </div>
                <div class="form-group">
                    <p class="control-label" style="color: #fff; text-align: center; font-size: 20px;margin: 10px auto;">Izaberite dužinu</p>
                    <div class="lengthDiv">
                        <input type="radio" id="length1" class="length" name="length" value="1:22M">
                        <label for="length1" class="lengthLabel" style="display: inline !important;">22 metara ({{$prices[1]['amount']}} RSD)</label>
                    </div>
                    <div class="lengthDiv">
                        <input type="radio" id="length2" class="length" name="length" value="2:45M">
                        <label for="length2" class="lengthLabel" style="display: inline !important;">45 metara ({{$prices[2]['amount']}} RSD)</label>
                    </div>
                    <div class="lengthDiv">
                        <input type="radio" id="length3" class="length" name="length" value="3:60M" checked>
                        <label for="length3" class="lengthLabel" style="display: inline !important;">60 metara ({{$prices[3]['amount']}} RSD)</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Poruči sada</button>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="desc-inst">
    <section class="description" id="description">
        <div class="container">
            <div class="img-hose">
                <div class="discount">POPUST <span>-40%</span></div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose3.png" class="img-fluid" alt=""></div>
            </div>
            <div class="info">
                <h4>Karakteristike univeralnog creva za zalivanje</h4>
                <table>
                    <tr>
                        <td>Prečnik</td>
                        <td>20 mm</td>
                    </tr>
                    <tr>
                        <td>Težina</td>
                        <td>manje od 1600g</td>
                    </tr>
                    <tr>
                        <td>Boja</td>
                        <td>plava ili zelena</td>
                    </tr>
                    <tr>
                        <td>Materijal creva</td>
                        <td>najlon, poliesterska tkanina</td>
                    </tr>
                    <tr>
                        <td>Materijal prskalice</td>
                        <td>ABS plastika, lateks</td>
                    </tr>
                    <tr>
                        <td>Temperatura vode</td>
                        <td>0 do 36 stepeni Celzijusa</td>
                    </tr>
                    <tr>
                        <td>Pritisak vode</td>
                        <td>2 do 16 atmosfera</td>
                    </tr>
                </table>
                <div class="list-box">
                    <div class="list-title">Sadržaj paketa</div>
                    <ul>
                        <li>
                            <span>1.</span> Univerzalno crevo za prskanje
                        </li>
                        <li>
                            <span>2.</span> Mlaznica za prskanje (poklon)
                        </li>
                        <li>
                            <span>3.</span> Ventili
                        </li>
                        <li>
                            <span>4.</span> Uputstvo za upotrebu
                        </li>
                        <li>
                            <span>5.</span> Brendirana kutija
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="instructions">
        <div class="scroll-to" id="instructions"></div>
        <div class="container">
            <div class="info">
                <h4>Kako raditi sa univerzalnim crevom za zalivanje</h4>
                <ul>
                    <li>
                        <div>01</div>
                        <p>Stavite ventil na crevo.</p>
                    </li>
                    <li>
                        <div>02</div>
                        <p>Povežite crevo sa izvorom vode i otvorite vodu. Nakon nekoliko sekundi crevo će dostići željenu dužinu pod pritiskom vode.</p>
                    </li>
                    <li>
                        <div>03</div>
                        <p>Pričvrstite mlaznicu za prskanje na ventil.</p>
                    </li>
                    <li>
                        <div>04</div>
                        <p>Otvorite ventil. Voda će teći kroz mlaznicu, možete odabrati jedan od 7 režima prskanja.</p>
                    </li>
                    <li>
                        <div>05</div>
                        <p>Nakon što se prskanje završi, isključite vodu. Posle nekoliko sekundi, sva voda će se izliti iz creva i vratiće se u prvobitnu veličinu.</p>
                    </li>
                    <li>
                        <div>06</div>
                        <p>Odvojite crevo i odložite ga za skladištenje.</p>
                    </li>
                </ul>
                <a href="#" class="btn btn_blue page-scroll" data-scroll-id="#order-section__bottom">Poruči sada</a>
            </div>
            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/plant.png" class="img-fluid" alt=""></div>
        </div>
    </section>
</div>
<section class="main-advantages">
    <div class="main-advantages__top">
        <div class="container">
            <h3>Ključne prednosti</h3>
            <div class="items">
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i1.png" class="img-fluid" alt=""></div>
                    <h4>Dužina</h4>
                    <p>
                        Iako u mirnom stanju crevo nije predugačko, pri pritisku vode produžava se i do <span class="yellow text-uppercase text-calibri-bold">3 puta!</span>
                        Ovo je sasvim dovoljno za zalivanje <span class="yellow">travnjaka</span> ili bilo kod udaljenog dela <span class="yellow">dvorišta i vrta.</span>
                    </p>
                </div>
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i2.png" class="img-fluid" alt=""></div>
                    <h4>Udobna upotreba</h4>
                    <p>Univerzalno crevo se ne uvija i <span class="yellow text-calibri-bold">ne formira čvorove</span> koji otežavaju protok vode. Voda slobodno teče i kada je crevo presavijeno.</p>
                </div>
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i3.png" class="img-fluid" alt=""></div>
                    <h4>Super kompaktno i lako skladištenje</h4>
                    <p>Crevo je teško oko <span class="yellow text-calibri-bold">jedan i po kilogram</span> i ne zauzima mnogo prostora.</p>
                </div>
                <div class="bottom-text">A to nije sve! na poklon dobijate specijalnu mlaznicu za crevo sa 7 režima!</div>
            </div>
        </div>
    </div>
    <div class="main-advantages__bottom">
        <div class="container">
            <h4>Dvostruka konstrukcija garantuje maksimalnu udobnost i izdržljivost</h4>
            <div class="main">
                <div class="img-hose"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose-cut.png" class="img-fluid" alt=""></div>
                <div class="text">
                    <div class="item">
                        <h6>Unutrašnje crevo od ABS plastike i lateksa</h6>
                        <p>Super jak i fleksibilan materijal obezbeđuje neophodnu ekspanziju pod pritiskom vode. Zahvaljujući tome, univerzalno crevo može se rastegnuti i do 3 puta.</p>
                    </div>
                    <div class="item">
                        <h6>Spoljno crevo od najlona i tankog poliestera</h6>
                        <p>Čvrsti materijal otporan je na habanje i pouzdano štiti unutrašnjost od pukotina, nabora i drugih oštećenja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="work-reviews">
    <section class="how-we-work" id="how-we-work">
        <div class="container">
            <div class="info">
                <h4>Kako radimo</h4>
                <p>Isporuka se vrši u roku od 1-2 radna dana. Plaćanje se vrši po preuzimanju pošiljke.</p>
                <div class="items">
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j1.png" class="img-fluid" alt=""></div>
                        <p>Ostavite zahtev</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j2.png" class="img-fluid" alt=""></div>
                        <p>Mi vas kontaktiramo</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j3.png" class="img-fluid" alt=""></div>
                        <p>Šaljemo vam paket</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j4.png" class="img-fluid" alt=""></div>
                        <p>Plaćate kuriru brze pošte po pouzeću</p>
                    </div>
                </div>
            </div>
            <div class="img-box"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose4.png" class="img-fluid" alt=""></div>
        </div>
    </section>
    <section class="reviews">
        <div class="scroll-to" id="reviews"></div>
        <div class="container">
            <div class="slider">
                <h4>Šta naši kupci kažu o nama</h4>
                <div class="owl-carousel">
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/8.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Srđan Rašević</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Dobar dan! kupio sam crevo za zalivanje i prezadovljan sam. Želim da istaknem 5 njegovih prednosti. Zgodno je, nije teško, ne uvija se, u pasivnom stanju uredno leži ispod slavine i ima nisku cenu.</p>
                                <p>Preporučujem svima koji imaju problem sa pritiskom vode. Poručio sam još jedno za komšiju.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/6.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Arsen Matić</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Zaista je veoma lagan i momentalno se vraća u prvobitnu veličinu nakon zalivanja. Što se povećanja tiče, iz nekog razloga mi se činilo da će biti deblje. Ipak, crevo je pod pritiskom ostajalo tanko i na taj način obezbeđivalo jak mlaz.
                                    Mogu lako da perem automobil pod visokim pritiskom.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/4.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Violeta Krkobabić</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Zalivanje mi je konačno postalo zadovoljstvo jer ne moram da teglim gumeno crevo za sobom. Najbolji deo je što tokom zalivanja crevo
                                    ne propušta vodu nigde i lako se pomera gde god želim.</p>
                                <p>Definitivno, ovo crevo je veoma korisno i od velike mi pomoći u dvorištu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/7.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Dane Biorac</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Odlično crevo koje zaista olakšava život, ne samo nama baštovanima već i svima koji imaju komad zemlje. Lagano je i mogu da ga izdužim i sa njim stignem do kraja njive. Mogu čak i da kupam stoku. Pozdrav!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="bottom-section">
    <div class="container">
        <div class="top">
            <h2>Multifunkcionalno crevo za zalivanje</h2>
            <div class="subtitle">Ne uvija se, ne pravi petlje i nabore</div>
        </div>
        <div class="bottom">
            <div class="img-hose">
                <div class="discount">POPUST <span>-40%</span></div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose3.png" class="img-fluid" alt=""></div>
                <div class="bottom-section-price-mob">
                    SAMO ZA <span>{{ $prices[1]['amount'] }} RSD</span>
                </div>
                <a href="#" class="btn btn_red page-scroll" data-scroll-id="#order-section__bottom">Poruči sada</a>
            </div>
            <div class="img-hose-2">
                <div class="bottom-section-price">
                    SAMO ZA <span>{{ $prices[1]['amount'] }} RSD</span>
                </div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose2.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/crevozabastu/libs.js"></script>
<script src="{{ asset('/') }}shared_files/jquery.fancybox.min.js"></script>
<script>
    var pageScroll = function (userSettings) {
        var defaultSettings = {
            speed : 1250,
            easing : '', // easeInOutExpo
            offset : 0
        }

        var settings = $.extend(defaultSettings, (userSettings || {}));

        $(settings.selector).each(function () {
            $(this).on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: ( $($anchor.attr('data-scroll-id') ).offset().top - settings.offset)
                }, settings.speed, settings.easing, function () {
                    // settings.callback();
                });

                event.preventDefault();
            });
        });
    }

    $(document).ready(function(){
        $('.reviews .slider .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            navText: ["", ""],
            items:1,
            nav:true,
        });
        pageScroll({
            selector : '.page-scroll',
            speed : 1000,
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
