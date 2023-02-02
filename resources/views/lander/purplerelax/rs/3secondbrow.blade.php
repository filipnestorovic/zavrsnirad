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
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer_top">
        <div class="info">
            <p class="subtitle">PEČAT ZA LEPE OBRVE</p>
            <h1 class="main_title"> 3 SECOND <span>BROW</span></h1>
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
        <h2>ŠTA JE 3 SECOND BROW?</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/about__image1.jpg" alt="3 Second Brow"
             title="3 Second Brow">
        <p>3 Second Brow je kozmetički proizvod koji iscrtava savršene obrve bez muke jednim dodirom. Ima plastičnu
            dršku i mekani spužvasti materijal koji se koristi
            u beauty industriji. Da biste nacrtali obrve, potrebno je samo spužvicu umočiti u kozmetički preparat koji
            boji obrve i za par sekundi imate savršenstvo.
        </p>
        <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/about__image2.jpg" alt="3 Second Brow"
             title="3 Second Brow">
        <p>3 SECOND BROW je pogodan za dame svih godina, kako mlađih, tako i onih ozbiljnijih. Obrve budu elegantne i ne
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
                             src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color1_image1.jpg"
                             alt="3 Second Brow" title="3 Second Brow">
                        <div class="type_block" style="margin-top: 50px;">
                            <img
                                src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color1_image3.jpg"
                                alt="3 Second Brow" title="3 Second Brow">
                        </div>
                    </div>
                    <div class="other_types">
                        <div class="type_block one">
                            <p>ZA ZAOBLJENE OBRVE</p>
                            <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color1_image4.png"
                                 alt="3 Second Brow" title="3 Second Brow">
                        </div>
                        <div class="type_block two">
                            <p>ZA ZAKRIVLJENE OBRVE</p>
                            <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color1_image5.png"
                                 alt="3 Second Brow" title="3 Second Brow">
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
                             src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color2_image1.jpg"
                             alt="3 Second Brow" title="3 Second Brow">
                        <div class="type_block" style="margin-top: 50px;">
                            <img
                                src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color2_image3.jpg"
                                alt="3 Second Brow" title="3 Second Brow">
                        </div>
                    </div>
                    <div class="other_types">
                        <div class="type_block one">
                            <p>ZA ZAOBLJENE OBRVE</p>
                            <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color2_image4.png"
                                 alt="3 Second Brow" title="3 Second Brow">
                        </div>
                        <div class="type_block two">
                            <p>ZA ZAKRIVLJENE OBRVE</p>
                            <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/colors__color2_image5.png"
                                 alt="3 Second Brow" title="3 Second Brow">
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
                        src="{{ asset('/') }}purplerelaxFiles/3secondbrow/use_steps__step1_image.jpg"
                        alt="3 Second Brow"
                        title="3 Second Brow"></div>
                <div class="text_block">
                    <div class="number">1</div>
                    <p>Izaberite željeni oblik obrve i umočite u boju</p>
                </div>
            </div>
            <div class="step_item">
                <div class="text_block">
                    <div class="number">2</div>
                    <p>Pritisnite pečat na obrvu i sačekajte</p>
                </div>
                <div class="image_block"><img
                        src="{{ asset('/') }}purplerelaxFiles/3secondbrow/use_steps__step2_image.jpg"
                        alt="3 Second Brow"
                        title="3 Second Brow"></div>
            </div>
            <div class="step_item">
                <div class="image_block"><img
                        src="{{ asset('/') }}purplerelaxFiles/3secondbrow/use_steps__step3_image.jpg"
                        alt="3 Second Brow"
                        title="3 Second Brow"></div>
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
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step1_icon.png" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="number"> 01</div>
                <p>Ostavite svoju porudžbinu na sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step2_icon.png" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="number"> 02</div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step3_icon.png" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="number"> 03</div>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/order_steps__step4_icon.png" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="number"> 04</div>
                <p>Plaćate kuriru po preuzimanju</p>
            </div>
        </div>
    </section>
    <section class="reviews_section">
        <h2>UTISCI NAŠIH KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/reviews__review1_photo.jpg" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="author_info">Violeta Jovanović, 29 godina</div>
                <p>Idealna opcija za one koji nemaju vremena da se našminkaju. Ja sam sada mirna, sredim obrve za 10
                    sekundi. Extra!
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/reviews__review2_photo.jpg" alt="3 Second Brow"
                     title="3 Second Brow">
                <div class="author_info">Radica Matić, 23 godine</div>
                <p>Uvek sam imala nepoverenje prema kupovini na internetu, ali me je ovaj proizvod iznenadio svojim
                    kvalitetom. Lepo leži, nema grudivca, ništa ne ispada. Moje obrve izgledaju prelepo.
                    Baš sam zadovoljna ovom kupovinom.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/3secondbrow/reviews__review3_photo.jpg" alt="3 Second Brow"
                     title="3 Second Brow">
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
            <p class="subtitle">PEČAT ZA LEPE OBRVE</p>
            <h4 class="main_title"><span> 3 SECOND </span> BROW</h4>
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
