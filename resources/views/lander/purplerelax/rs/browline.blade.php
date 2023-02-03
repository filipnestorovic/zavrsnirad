<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/3secondbrow/2248.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/3secondbrow/2248.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/3secondbrow/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/3secondbrow/style.css">
    <style>
        @font-face {
            font-family: 'Avenir Next Cyr';
            src: url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Intro';
            src: url('{{ asset('/') }}fonts/Intro-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Intro-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/Intro-Regular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
        }

        .offer_section .info {
            padding: 22px 20px 20px 15px;
            height: 390px;
            background: #a20fb8 url("{{ asset('/') }}purplerelaxFiles/browline/offer_bg.jpg") center top no-repeat;
            font-family: 'Intro', sans-serif;
            position: relative;
        }

        .use_steps_section {
            padding: 65px 0 0 0;
            background: url("{{ asset('/') }}purplerelaxFiles/browline/use_steps_bg.jpg") 210px 25px no-repeat;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer_top">
        <div class="info">
            <p class="subtitle">PROIZVOD ZA LEPE OBRVE</p>
            <h1 class="main_title" style="color: #87654a;">BROW LINE</h1>
            <p class="description"><span> SAVRŠENE</span> <span>OBRVE</span> <span>ZA PAR</span> <span>SEKUNDI</span>
            </p>
            <div class="discount_wrapper">
                <div class="discount"> Akcija!<span> 40%</span> popusta</div>
            </div>
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value oldproductsum">
                     <span class="price_land_s2 oldproductsum">
                     {{ $prices[1]['originalPrice'] }}
                         {{ $prices[1]['currency'] }}
                     </span>
                </div>
            </div>
            <div class="price_item new productsum">
                  <span class="price_land_s1 productsum">
                  {{ $prices[1]['amount'] }}
                      {{ $prices[1]['currency'] }}
                  </span>
            </div>
        </div>
        <a href="#order_form" class="button">PORUČITE SA 40% POPUSTA</a>
    </header>
    <section class="about_section">
        <h2>ŠTA JE BROW LINE?</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/browline/about__image1.jpg" alt="Brow Line"
             title="Brow Line">
        <p>BROW LINE je kozmetički proizvod koji iscrtava savršene obrve bez muke jednim dodirom. Ima plastični kalup i
            mekani spužvasti materijal koji se koristi
            u beauty industriji. Da biste nacrtali obrve, potrebno je samo spužvicom preći obrve preko kalupa i za par
            sekundi imate savršenstvo.
        </p>
        <img src="{{ asset('/') }}purplerelaxFiles/browline/about__image2.jpg" alt="Brow Line"
             title="Brow Line">
        <p>BROW LINE je pogodan za dame svih godina, kako mlađih, tako i onih ozbiljnijih. Obrve budu elegantne i ne
            izgledaju napadno. Traju dugo i kada to poželite lako se skidaju micelarnom
            vodom ili mlekom za skidanje šminke.
        </p>
    </section>
    <div class="video-container">
        <video class="youtube" width="100%" height="auto" controls
               poster="{{ asset('/') }}purplerelaxFiles/3secondbrow/pocter.png">
            <source src="{{ asset('/') }}purplerelaxFiles/3secondbrow/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <section class="colors_section">
        <div class="info">
            <h2>DOSTUPNE BOJE</h2>
            <div class="colors_list">
                <div class="color_item one">
                    <div class="title_block">
                        <div class="color_icon"></div>
                        <h4>TAMNO BRAON BOJA</h4>
                    </div>
                    <div class="main_type clearfix">
                        <img class="main_image"
                             src="{{ asset('/') }}purplerelaxFiles/browline/colors__color1_image1.jpg"
                             alt="Brow Line" title="Brow Line">
                        <div class="type_block" style="margin-top: 50px;">
                            <img
                                src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color1_image3.jpg"
                                alt="Brow Line" title="Brow Line">
                        </div>
                    </div>
                </div>
                <div class="color_item two">
                    <div class="title_block">
                        <div class="color_icon"></div>
                        <h4>CRNA BOJA</h4>
                    </div>
                    <div class="main_type clearfix">
                        <img class="main_image"
                             src="{{ asset('/') }}purplerelaxFiles/browline/colors__color2_image1.jpg"
                             alt="Brow Line" title="Brow Line">
                        <div class="type_block" style="margin-top: 50px;">
                            <img
                                src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color2_image3.jpg"
                                alt="Brow Line" title="Brow Line">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text"> Cena pre akcije</div>
                <div class="value oldproductsum">
                     <span class="price_land_s2 oldproductsum">
                     {{ $prices[1]['originalPrice'] }}
                         {{ $prices[1]['currency'] }}
                     </span>
                </div>
            </div>
            <div class="price_item new productsum">
                  <span class="price_land_s1 productsum">
                  {{ $prices[1]['amount'] }}
                      {{ $prices[1]['currency'] }}
                  </span>
            </div>
        </div>
        <a href="#order_form" class="button"> PORUČITE SA 40% POPUSTA</a>
    </section>
    <section class="use_steps_section">
        <h3><span> KAKO</span> <br><span>SE</span> <br><span>KORISTI?</span></h3>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}purplerelaxFiles/browline/use_steps__step1_image.jpg"
                        alt="Brow Line"
                        title="Brow Line"></div>
                <div class="text_block">
                    <div class="number">1</div>
                    <p>Izaberite kalup sa željenim oblikom</p>
                </div>
            </div>
            <div class="step_item">
                <div class="text_block">
                    <div class="number">2</div>
                    <p>Stavite kalup na obrvu i pređite spužvicom</p>
                </div>
                <div class="image_block"><img
                        src="{{ asset('/') }}purplerelaxFiles/browline/use_steps__step2_image.jpg"
                        alt="Brow Line"
                        title="Brow Line"></div>
            </div>
            <div class="step_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}purplerelaxFiles/3secondbrow/use_steps__step3_image.jpg"
                        alt="Brow Line"
                        title="Brow Line"></div>
                <div class="text_block">
                    <div class="number">3</div>
                    <p>To je to! Završeno!
                        <br>Brzo, jednostavno i savršeno!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2>KAKO PORUČITI?</h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step1_icon.png" alt="Brow Line"
                     title="Brow Line">
                <div class="number"> 01</div>
                <p>Ostavite svoju porudžbinu na sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step2_icon.png" alt="Brow Line"
                     title="Brow Line">
                <div class="number"> 02</div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step3_icon.png" alt="Brow Line"
                     title="Brow Line">
                <div class="number"> 03</div>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step4_icon.png" alt="Brow Line"
                     title="Brow Line">
                <div class="number"> 04</div>
                <p>Plaćate kuriru po preuzimanju</p>
            </div>
        </div>
    </section>
    <section class="reviews_section">
        <h2>UTISCI NAŠIH KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/reviews__review1_photo.jpg" alt="Brow Line"
                     title="Brow Line">
                <div class="author_info">Violeta Jovanović, 29 godina</div>
                <p>Idealna opcija za one koji nemaju vremena da se našminkaju. Ja sam sada mirna, sredim obrve za 10
                    sekundi. Extra!
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/browline/reviews__review2_photo.jpg" alt="Brow Line"
                     title="Brow Line">
                <div class="author_info">Radica Matić, 23 godine</div>
                <p>Uvek sam imala nepoverenje prema kupovini na internetu, ali me je ovaj proizvod iznenadio svojim
                    kvalitetom. Lepo leži, nema grudivca, ništa ne ispada. Moje obrve izgledaju prelepo.
                    Baš sam zadovoljna ovom kupovinom.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/browline/reviews__review3_photo.jpg" alt="Brow Line"
                     title="Brow Line">
                <div class="author_info">Gorana Alić, 38 godina</div>
                <p>Za mene, za osobu sa problematičnim obrvama, ovaj proizvod je postao pravo bogatstvo. Koliko sam se
                    godina mučila dok se šminkam, bilo mi je više toga preko glave.
                    Ovo čudo mi je pomoglo da rešim problem. Obrve su mi konačno ujednačene.
                </p>
            </div>
        </div>
    </section>
    <section class="offer_section offer_bottom">
        <h3>ISKORISTITE AKCIJU</h3>
        <div class="info">
            <p class="subtitle">PROIZVOD ZA LEPE OBRVE</p>
            <h4 class="main_title">BROW LINE</h4>
            <p class="description"><span> SAVRŠENE </span> <span>OBRVE</span> <span> ZA PAR</span> <span> SEKUNDI</span>
            </p>
            <div class="discount_wrapper">
                <div class="discount"> Akcija! <span> 40%</span> popusta</div>
            </div>
        </div>
        <form id="order_form" class="order_form orderformcdn" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Redovna cena</div>
                    <div class="value oldproductsum">
                        <span class="price_land_s2 oldproductsum">
                        {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                </div>
                <div class="price_item new productsum">
                     <span class="price_land_s1 productsum">
                     {{ $prices[1]['amount'] }}
                         {{ $prices[1]['currency'] }}
                     </span>
                </div>
            </div>
            <input class="input" type="text" name="name" value placeholder="Ime i prezime" required="">
            <input class="input" type="tel" name="phone" value placeholder="Telefon" required="">
            <button type="submit" class="button">PORUČITE SADA</button>
            <p class="products_count"> Na akciji ostalo još<span class="lastpack">12</span> komada</p>
        </form>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/3secondbrow/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
