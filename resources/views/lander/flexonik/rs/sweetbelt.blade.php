<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/settings.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/style.css">
    <style>@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Italic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');font-weight:900;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="header-one">
    <div class="wrap">
        <h1>SWEET SWEAT</h1>
        <h2>TERMO POJAS ZA GUBITAK TEŽINE</h2>
        <div class="tovar-sale">popust <span>-40%</span></div>
        <ul class="header-one_plus">
            <li>
                <p>Ubrzava proces sagorevanja masti</p>
            </li>
            <li>
                <p>Uklanja višak vode i toksina</p>
            </li>
            <li>
                <p>Poboljšava cirkulaciju krvi</p>
            </li>
            <li>
                <p>Smanjuje napetost u leđima</p>
            </li>
        </ul>
        <div class="offer_left">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        <span>
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small>
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span>
                    <p>
                        {{ $prices[1]['amount'] }}
                        <small>
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poruči sada</a>
        </div>
    </div>
</section>
<section class="sect2">
    <div class="wrap">
        <h2 class="title"><span>SAVRŠENA FIGURA</span> SA JEDINSTVENIM POJASOM ZA MRŠAVLJENJE</h2>
        <div class="benef_block">
            <img src="{{ asset('/') }}flexonikFiles/sweetbelt/s2_img.jpg" alt="">
            <p><span><span>3 PUTA</span> EFIKASNIJE</span> IZBACIVANJE VODE I TOKSINA</p>
        </div>
        <div class="description">
            <p>Sweet Sweat značajno povećava efikasnost bilo koje fizičke aktivnosti. <span>Pospešujući protok krvi u tkivu i termogenezu,
                značajno povećava sagorevanje kalorija tokom vežbanja i pojačava znojenje</span> i više nego što očekujete.</p>
            <img src="{{ asset('/') }}flexonikFiles/sweetbelt/1.gif" alt="">
            <p>Povećavajući cirkulaciju krvi u mišićima i tkivima, ubrzava zagrevanje i oporavak, <span>pomaže izbegavanju povreda i uklanja višak vode i toksina,</span> pomažući vam da postignete cilj mnogo brže.</p>
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrap">
        <h2 class="title"><span>GLAVNE PREDNOSTI</span></h2>
        <div class="benef_container clearfix">
            <ul class="benef_list2 list_left">
                <li>
                    <span>01</span>
                    <p>Ubrzava proces sagorevanja masti</p>
                </li>
                <li>
                    <span>02</span>
                    <p>Uklanja višak vode i toksina</p>
                </li>
                <li>
                    <span>03</span>
                    <p>Povećava aktivnost mišića</p>
                </li>
            </ul>
            <ul class="benef_list2 list_right">
                <li>
                    <span>04</span>
                    <p>Ubrzava vraćanje energije</p>
                </li>
                <li>
                    <span>05</span>
                    <p>Poboljšava cirkulaciju krvi</p>
                </li>
                <li>
                    <span>06</span>
                    <p>Zagreva mišiće i tkiva</p>
                </li>
            </ul>
        </div>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="gallery_sect">
    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/gallery.jpg" class="carousel" alt="" width="2004" height="200">
</section>
<section class="sect4">
    <div class="wrap">
        <h2 class="title"><span>ČEMU SLUŽI POJAS SWEET SWEAT?</span></h2>
        <ul class="benef1">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img1.jpg" alt="">
                <p>Efikasna borba protiv viška kilograma</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img2.jpg" alt="">
                <p>Poboljšanje performansi u sportu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img3.jpg" alt="">
                <p>Uklanjanje posledica od dugotrajnog sedenja</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img4.jpg" alt="">
                <p>Brz oporavak nakon porođaja</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="sect3">
    <div class="wrap">
        <h2 class="title"><span>SPECIFIKACIJE</span> I SAVETI ZA UPOTREBU</h2>
        <img src="{{ asset('/') }}flexonikFiles/sweetbelt/s3_img.jpg" alt="">
        <ul class="char_list">
            <li><b>Veličina:</b> univerzalna</li>
            <li><b>Materijal:</b> 100% neopren bez lateksa</li>
            <li><b>Boja:</b> crna, žuta</li>
            <li><b>Održavanje:</b> samo ispiranje pod tekućom vodom</li>
        </ul>
    </div>
</section>
<section class="sect6">
    <div class="wrap nopad">
        <h2 class="title"><span>RECENZIJE KUPACA</span></h2>
        <div class="reviews">
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev1.jpg" alt="">
                    <div class="info">
                        <p>ANDRIJA K. <br>26 godina</p>
                    </div>
                    <p>Čini mi se da svaki muškarac želi da bude u dobroj formi, jer žene na to pre svega obraćaju pažnju.
                        Kupio sam sebi Sweet Sweat i sada izgledam sjajno. Sportom se bavim 30-40 minuta dnevno i ne razmišljam o ishrani,
                        jer višak kilograma vrlo lako sagorim.</p>
                </div>
            </div>
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev2.jpg" alt="">
                    <div class="info">
                        <p>SVETLANA S. <br>32 GODINE</p>
                    </div>
                    <p>Ovaj pojas je nešto najbolje što sam kupila. Nosim ga dok vežbam, šetam ili radim kućne poslove.
                        Nakon 2 nedelje, efekat je prilično vidljiv. Struk je postao uži, a stomak se smanjio. Posavetovala sam svoje drugarice da kupe ovaj pojas,
                        jer je to najsigurniji put do savršenog struka.</p>
                </div>
            </div>
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev3.jpg" alt="">
                    <div class="info">
                        <p>VUKSAN K. <br>34 GODINE</p>
                    </div>
                    <p>Pojas Sweet Sweat mi je pomogao da se oslobodim stomaka koji je počeo da se pojavljuje nakon 30. godine. Takođe, počeo sam brzo da dobijam na težini.
                        Odlučio sam da pokušam da se dovedem u formu. Pojas mi mnogo pomaže, stomak je praktično nestao a mišići su se pojavili. Sve preporuke za ovaj proizvod!</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="sect7">
    <div class="wrap nopad">
        <h2 class="title"><span>DOSTAVA I PLAĆANJE</span></h2>
        <ul class="order_list clearfix">
            <li>
                <span>01</span>
                <div class="text">
                    <p>UNESITE <br> PODATKE <br>ZA DOSTAVU</p>
                </div>
            </li>
            <li>
                <span>02</span>
                <div class="text">
                    <p>POTVRDIĆEMO <br> PORUDŽBINU <br> UBRZO</p>
                </div>
            </li>
            <li>
                <span>03</span>
                <div class="text">
                    <p>PAKET ŠALJEMO <br> ZA 1-2 <br> RADNA DANA</p>
                </div>
            </li>
            <li>
                <span>04</span>
                <div class="text">
                    <p>POŠILJKU <br> PLAĆATE <br> PO PREUZIMANJU</p>
                </div>
            </li>
        </ul>
        <div class="alert">UVEK PROVERAVAMO ROBU PRE ISPORUKE I GARANTUJEMO 100% KVALITET</div>
    </div>
</section>
<section class="header-one bott_sect">
    <div class="wrap">
        <h2>
            PORUČITE ODMAH PO SNIŽENOJ CENI OD
            <span>
                    SAMO
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </h2>
        <div class="tovar-sale">popust <span>-40%</span></div>
        <div class="formbox">
            <div class="offer_left">
                <div class="price clearfix">
                    <div class="old-cost">
                        <span>Stara cena:</span>
                        <p>
                           <span>
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                            <small>
                                RSD
                            </small>
                        </p>
                    </div>
                    <div class="new-cost">
                        <span>Nova cena:</span>
                        <p>
                            {{ $prices[1]['amount'] }}
                            <small>
                                RSD
                            </small>
                        </p>
                    </div>
                </div>
                <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                    <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                    <button class="button-m">Poruči sada</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/sweetbelt/jquery.panorama.js"></script>
<script>
    $('.carousel').panorama();
    $('.reviews').slick({
        dots: false,
        infinite: true,
        speed: 200,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 660,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
@include('components.pixel_footer')
</body>
</html>