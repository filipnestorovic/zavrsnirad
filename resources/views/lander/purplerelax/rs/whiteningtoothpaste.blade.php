<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/drift-basic.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/style.css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-BoldItalic.html');src:local('Gotham Pro Bold Italic'),local('GothamPro-BoldItalic'),url('{{ asset('/') }}fonts/GothamPro-BoldItalic-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-BoldItalic-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-BoldItalic-4.html') format('truetype');font-weight:bold;font-style:italic}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Italic.html');src:local('Gotham Pro Italic'),local('GothamPro-Italic'),url('{{ asset('/') }}fonts/GothamPro-Italic-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Italic-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Italic-4.html') format('truetype');font-weight:normal;font-style:italic}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.html');src:local('Gotham Pro Medium'),local('GothamPro-Medium'),url('{{ asset('/') }}fonts/GothamPro-Medium-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium-3.html') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-BlackItalic.html');src:local('Gotham Pro Black Italic'),local('GothamPro-BlackItalic'),url('{{ asset('/') }}fonts/GothamPro-BlackItalic-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-BlackItalic-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-BlackItalic-4.html') format('truetype');font-weight:900;font-style:italic}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.html');src:local('Gotham Pro Bold'),local('GothamPro-Bold'),url('{{ asset('/') }}fonts/GothamPro-Bold-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Bold-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold-4.html') format('truetype');font-weight:bold;font-style:normal}@font-face{font-family:'Gotham Pro Narrow';src:url('{{ asset('/') }}fonts/GothamProNarrow-Bold.html');src:local('Gotham Pro Narrow Bold'),local('GothamProNarrow-Bold'),url('{{ asset('/') }}fonts/GothamProNarrow-Bold-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamProNarrow-Bold-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamProNarrow-Bold-4.html') format('truetype');font-weight:bold;font-style:normal}@font-face{font-family:'Gotham Pro Narrow';src:url('{{ asset('/') }}fonts/GothamProNarrow-Medium.html');src:local('Gotham Pro Narrow Medium'),local('GothamProNarrow-Medium'),url('{{ asset('/') }}fonts/GothamProNarrow-Medium-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamProNarrow-Medium-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamProNarrow-Medium-4.html') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-LightItalic.html');src:local('Gotham Pro Light Italic'),local('GothamPro-LightItalic'),url('{{ asset('/') }}fonts/GothamPro-LightItalic-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-LightItalic-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-LightItalic-4.html') format('truetype');font-weight:300;font-style:italic}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Light.html');src:local('Gotham Pro Light'),local('GothamPro-Light'),url('{{ asset('/') }}fonts/GothamPro-Light-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Light-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Light-4.html') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Black.html');src:local('Gotham Pro Black'),local('GothamPro-Black'),url('{{ asset('/') }}fonts/GothamPro-Black-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Black.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Black-3.html') format('truetype');font-weight:900;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.html');src:local('Gotham Pro'),local('GothamPro'),url('{{ asset('/') }}fonts/GothamPro-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-3.html') format('truetype');font-weight:normal;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-MediumItalic.html');src:local('Gotham Pro Medium Italic'),local('GothamPro-MediumItalic'),url('{{ asset('/') }}fonts/GothamPro-MediumItalic-2.html#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-MediumItalic-3.html') format('woff'),url('{{ asset('/') }}fonts/GothamPro-MediumItalic-4.html') format('truetype');font-weight:500;font-style:italic}</style>
</head>
<body>
<div class="page">
    @include('components.display_errors')
    <div class="first">
        <div class="limit">
            <div class="back-logo">
                WHITENING
            </div>
            <div class="woman"></div>
            <div class="first-top">
{{--                <p class="logo"> <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/logo-oral-care-pro.png"> </p>--}}
                <p class="top-text _first-elem">CHARACOAL WHITENING TOOTHPASTE</p>
            </div>
            <div class="first-left">
                <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/prod.png" class="prod" alt="">
                <h1 class="title">
                    Savršeno beli zubi <br> i blistav osmeh za svega nekoliko dana
                </h1>
                <div class="btn-wrapper">
                    <div class="shadow"></div>
                    <a href="#" class="btn go-form">PORUČI SADA</a>
                </div>
                <p style="
                     z-index: 999999999;
                     font-size: 16px;
                     text-align: center;
                     margin-top: 20px;
                     width: 300px;
                     ">
                    * Ako poručite sada dobijate <br> <b>POWER FLOSS GRATIS</b>
                </p>
            </div>
            <div class="first-bottom">
                <ul class="first-list">
                    <li class="first-list-item">
                        <div class="circle">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/vant-1.png" alt="">
                        </div>
                        <p class="item-text">
                            Aktivni sastojci skidaju nečistoće
                        </p>
                        <div class="clear"></div>
                    </li>
                    <li class="first-list-item">
                        <div class="circle">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/vant-2.png" alt="">
                        </div>
                        <p class="item-text">
                            Uklanjaju sve što obična pasta ne može da skine
                        </p>
                        <div class="clear"></div>
                    </li>
                    <li class="first-list-item">
                        <div class="circle">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/vant-3.png" alt="">
                        </div>
                        <p class="item-text">
                            Već nakon nekoliko dana zubi postaju kristalno beli
                        </p>
                        <div class="clear"></div>
                    </li>
                    <li class="first-list-item">
                        <div class="circle">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/vant-4.png" alt="">
                        </div>
                        <p class="item-text">
                            Pasta je potpuno bezbedna za upotrebu
                        </p>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="magnifier-block">
        <div class="limit">
            <div class="magnifier-left">
                <p class="text">
                    <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/magnifier-left.png" alt="">
                </p>
            </div>
            <div class="magnifier-right">
                <p class="text _big">
                    <b class="blue">
                        Characoal Whitening - najbolje rešenje za izbeljivanje zuba na tržištu Evrope koje se po prvi put pojavilo u Srbiji
                    </b>
                </p>
                <p class="text">
                    Ova pasta za zube je čak 3 puta efikasnija od svih ostalih koje su dostupne za kupovinu. Specijalna formula koja se sastoji od
                    aktivnog uglja, kolagena i mleka temeljno deluje na zube i uklanja sve naslage i boje od kafe, vina i hrane koje se talože na zubima i čine ih žutim.
                </p>
                <p class="text">
                    <b class="_medium">
                        Može učiniti vaš osmeh blistavijim nego ikad!
                    </b>
                </p>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="limit">
            <div class="back-logo">
                WHITENING
            </div>
            <h2 class="title">
                Benefiti Characoal Whitening paste za zube
            </h2>
            <ul class="description-list">
                <li class="description-list-item _first">
                    <div class="wrapper-item">
                        <div class="bg-tooth"></div>
                        <p class="item-text">
                            Blistavo izbeljuje zube za nekoliko dana
                        </p>
                    </div>
                </li>
                <li class="description-list-item _orange">
                    <div class="wrapper-item">
                        <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/des-prod.png" class="des-prod" alt="">
                        <p class="item-text">
                            Kombinacija kolagena i mleka štiti i obnavlja zubnu gleđ
                        </p>
                    </div>
                </li>
                <li class="description-list-item _white">
                    <div class="wrapper-item">
                        <div class="bg-jaw"></div>
                        <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/des-prod%201.png" class="des-prod" alt="">
                        <p class="item-text blue">
                            Proizvod su patentirali najveći stručnjaci iz oralne higijene
                        </p>
                    </div>
                </li>
                <li class="description-list-item _woman">
                    <div class="wrapper-item">
                        <div class="bg-woman"></div>
                        <p class="item-text">
                            Svež dan i prijatan osećaj koji traje tokom celog dana
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="using">
        <div class="limit">
            <h2 class="title">
                Evo kako najbolje koristiti pastu za zube Characoal Whitening
            </h2>
            <div class="wrapper-slider">
                <ul class="using-list using-slider">
                    <li class="using-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/using1.png" alt="">
                            <p class="text blue">
                                <b>
                                    Stavite <br class="mob">pastu
                                </b>
                            </p>
                            <p class="text">
                                Aplicirajte na četkicu dovoljno paste kako bi prekrila celu gornju površinu četkice
                            </p>
                        </div>
                    </li>
                    <li class="using-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/using2.png" alt="">
                            <p class="text blue">
                                <b>
                                    Operite <br class="mob">zube
                                </b>
                            </p>
                            <p class="text">
                                Perite zube temeljno posle svakog obroka Characoal Whitening četkicom za zube, u trajanju od najmanje 1 minut
                            </p>
                        </div>
                    </li>
                    <li class="using-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/using3.png" alt="">
                            <p class="text blue">
                                <b>
                                    Uživajte
                                </b>
                            </p>
                            <p class="text">
                                Savršeno svež dah dolazi odmah, a izbeljene zube ćete primetiti nakon nekoliko dana
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="arrows">
                    <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/arrow-blue-slider.png" class="prev" alt="">
                    <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/arrow-blue-slider.png" class="next" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="lines-block">
        <div class="limit">
            <div class="back-logo">
                WHITENING
            </div>
            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/woman_prod-shadow.png" class="woman-shadow" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/woman_prod.png" class="woman-2" alt="">
            <div class="lines-block-right">
                <p class="text">
                    <span class="big">Characoal Whitening Toothpaste</span>
                    najbolje rešenje za izbeljivanje zuba ikada
                </p>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="limit">
            <h2 class="title">
                Slike koje nam šalju naši kupci
            </h2>
            <div>
                <ul class="reviews-list reviews-slider">
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide1.png" alt="">
                        </div>
                    </li>
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide2.png" alt="">
                        </div>
                    </li>
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide3.png" alt="">
                        </div>
                    </li>
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide4.png" alt="">
                        </div>
                    </li>
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide5.png" alt="">
                        </div>
                    </li>
                    <li class="review-list-item">
                        <div class="wrapper-item">
                            <img src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/slide6.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="dentist">
        <div class="limit">
            <div class="back-logo">
                WHITENING
            </div>
            <div class="wrapper-doc">
                <div class="doc"></div>
                <p class="name">
                    <b>Marina</b>
                </p>
            </div>
            <div class="dentist-place">
                <p class="text">
                    Nema kakve proizvode nisam probala da izbelim zube, i uglavnom nisam zapazila neki rezultat.
                </p>
                <p class="text">
                    Iskočila mi je reklama za ovu pastu na internetu i rekoh hajde da i to probam.
                </p>
                <p class="text">
                    Ljudiii, rezultat je Woooow. Oduševljena sam! Sve preporuke za ovaj proizvod!!!
                </p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="limit">
            <div class="back-logo">
                WHITENING
            </div>
            <h2 class="title">
                Ukoliko poručite Characoal Whitening odmah, dobićete i Power Floss čistač za zube GRATIS!
            </h2>
            <div class="wrapper-form">
                <p class="form-title">
                    PODACI ZA DOSTAVU
                </p>
                <form class="main-order-form order-form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="hidden" name="gpid" value="256"/>
                    <input type="text" class="form-item" name="name" placeholder="Ime i prezime" required>
                    <input type="tel" class="form-item only_number" name="phone" placeholder="Telefon" required>
                    <div class="wrapper-prod">
                        <div class="prod"></div>
                        <div class="price">
                            <p class="new" style="font-size: 35px"><span class="js_new_price">popust -40%</span></p>
                            <p class="old">
                              <span class="js_old_price">
                                 {{ $prices[1]['originalPrice'] }}
                              </span>
                                <span
                                    class="cur js_curs">
                                 {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                            <p class="new">
                              <span class="js_new_price">
                                 {{ $prices[1]['amount'] }}
                              </span>
                                <span
                                    class="cur js_curs">
                                 {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <div class="shadow"></div>
                        <button class="btn js_submit button__text">PORUČITE</button>
                    </div>
                    <p style="
                        z-index: 999999999;
                        font-size: 16px;
                        text-align: center;
                        margin-top: 20px;
                        width: 300px;
                        ">
                        * Ako poručite sada dobijate <br> <b>POWER FLOSS GRATIS</b>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<script> let currentUrl = '{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/'; </script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/whiteningtoothpaste/main1.js"></script>
@include('components.pixel_footer')
</body>
</html>
