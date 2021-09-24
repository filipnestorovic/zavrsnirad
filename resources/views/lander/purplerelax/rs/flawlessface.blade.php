<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/flawlessface/favicon.ico"type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/flawlessface/style.css">
    <style>@font-face{font-family:robotobold;src:url("{{ asset('/') }}fonts/roboto-bold-1.eot");src:url("{{ asset('/') }}fonts/roboto-bold.eot#iefix") format('embedded-opentype'),url("{{ asset('/') }}fonts/roboto-bold.woff") format('woff'),url("{{ asset('/') }}fonts/roboto-bold.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:PlayfairDisplay-Bold;src:url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.eot#iefix") format('embedded-opentype'),url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.woff") format('woff'),url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:PlayfairDisplaySC-Regular;src:url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.eot#iefix") format('embedded-opentype'),url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.woff") format('woff'),url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:PlayfairDisplaySC-Bold;src:url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.eot#iefix") format('embedded-opentype'),url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.woff") format('woff'),url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:local('Playfair Display'),local('PlayfairDisplay-Regular'),url("{{ asset('/') }}fonts/playfair-display_8e41554d1e7b796ea2d98f5000ad22b8.woff") format('woff'),url("{{ asset('/') }}fonts/playfair-display_8e41554d1e7b796ea2d98f5000ad22b8.ttf") format('truetype')}#name{display:inline-block;width:320px;height:60px;font:24px/60px robotobold;text-align:center;color:#000;box-shadow:4px 4px 10px 0 rgba(51,102,0,.25);background:#fff;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;margin-top:40px;text-transform:uppercase}#tel{display:inline-block;width:320px;height:60px;font:24px/60px robotobold;text-align:center;color:#fff;box-shadow:4px 4px 10px 0 rgba(51,102,0,.25);background:#fff;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;margin-top:40px;text-transform:uppercase}.mm_button{display:inline-block;width:230px;height:60px;font:24px/60px robotobold;text-align:center;color:#fff;box-shadow:4px 4px 10px 0 rgba(51,102,0,.25);background:#94c43a;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;margin-top:40px;text-transform:uppercase}</style>
</head>
<body class="lang-bg">
<div class="line"></div>
@include('components.display_errors')
<header class="header">
    <div class="content">
        <a href="#" class="header__logo">
            <p>
                FLAWLESS
                <br> FACE
                <i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/logo_icon.png" alt="epilator Flawless" title="epilator Flawless" ></i>
            </p>
        </a>
        <p class="header__name">BESTSELLER U 2021 GODINI</p>
        <a href="#form" class="header__ring open_modal mymodal">PORUČI ODMAH</a>
    </div>
</header>
<section>
    <div class="product">
        <div class="content">
            <div class="product__info">
                <div class="product__info_zag">
                    <h2>PORTABLE EPILATOR</h2>
                    <p><b>FLAWLESS FACE</b></p>
                </div>
                <p class="product__info_text">
                    Nežno uklanjanje dlačica sa lica
                    <b>Apsolutno bezbolno</b>
                </p>
                <div class="product__info_delivery">
                    <i class="icon"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/delivery.svg" alt="epilator Flawless" title="epilator Flawless" ></i>
                    <p>Brza dostava u roku od 1-2 radna dana</p>
                </div>
                <a href="#form" class="product__info_button open_modal">PORUČI</a>
            </div>
        </div>
    </div>
    <!--Верхний блок с ценой -->
    <div class="price">
        <div class="content">
            <div class="price__info">
                <!--Дата окончаия акции -->
                <p class="price__info_data">Akcija</p>
                <div class="price__info_price">
                    <!--Старая цена -->
                    <sup class="price__info_price_old oldproductsum"><span class="price_land_s4">{{$prices[1]['originalPrice']}}</span> <span class="price_land_curr">RSD</span></sup>
                    <!--Новая цена-->
                    <p class="price__info_price_new productsum"><span class="price_land_s1">{{$prices[1]['amount']}}</span> <span class="price_land_curr">RSD</span></p>
                </div>
            </div>
            <div class="price__img_block">
                <span></span>
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/price.png" alt="epilator Flawless" title="epilator Flawless">
            </div>
        </div>
    </div>
    <!--4ре ситуации -->
    <div class="situation">
        <div class="content">
            <h2 class="block__zag">
                <span><i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/4.png" alt="epilator Flawless" title="epilator Flawless" > </i>situacije</span>
                <small>gde je potreban epilator</small>
            </h2>
            <div class="situation__line">
                <!--Ситуация 1-->
                <div class="situation__vertical_block">
                    <div class="situation__vertical_block_text">
                        <!--Заголовок блока -->
                        <h3>Za šminku obično koristite <br> podlogu ili puder</h3>
                        <!--Текст блока -->
                        <p>Najmanje čestice ovih proizvoda nijansiraju boju dlačica, lepe ih i zadebljavaju i ponekad stvaraju efekat "brkova" prilično vidljiv na sunčevoj svetlosti.</p>
                    </div>
                    <!--Изображение блока -->
                    <div class="situation__vertical_block_img">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/situation1.jpg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                </div>
                <!--Ситуация2 -->
                <div class="situation__vertical_block">
                    <!--изображение блока -->
                    <div class="situation__vertical_block_img">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/situation2.jpg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <div class="situation__vertical_block_text">
                        <!--Заголовок блока -->
                        <h3>Idete na more</h3>
                        <!--Текст блока -->
                        <p>Obično se u to vreme koža "odmara" od dekorativne kozmetike, kako bi dobila lep preplanuli ten. Međutim, sunce pospešuje rast dlačica i one mogu biti izuzetno vidljive i neprijatne na suncu.</p>
                    </div>
                </div>
                <!--Ситуация3-->
                <div class="situation__horizontal_block">
                    <!--изображение блока -->
                    <div class="situation__horizontal_block_img">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/situation3.jpg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <div class="situation__horizontal_block_text">
                        <!--Заголловок блока -->
                        <h3>Svesni ste tamnih mrlja nakon epilacije</h3>
                        <!--Текст блока -->
                        <p>Flawless Face je apsolutno siguran za vreme upotrebe i ne ostavlja tragove na koži nakon epilacije.</p>
                    </div>
                    <!--Текст для мобильной версии -->
                    <p class="text_mobile">
                        Flawless Face je apsolutno siguran za vreme upotrebe i ne ostavlja tragove na koži nakon epilacije.
                    </p>
                </div>
                <!--Ситуация 4-->
                <div class="situation__horizontal_block">
                    <!--Иззображение блока-->
                    <div class="situation__horizontal_block_img">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/situation4.jpg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <div class="situation__horizontal_block_text">
                        <!--Заголовок блока-->
                        <h3>Uvek želite izgledati mlado</h3>
                        <!--Текст блока-->
                        <p>i vrlo ste pažljivi prema svom izgledu, ali ne želite trošiti previše vremena na to i ne mislite da lepota zahteva tako bolne tretmane kao što je depilacija.</p>
                    </div>
                    <!--Текст для мобильной версии -->
                    <p class="text_mobile">i vrlo ste pažljivi prema svom izgledu, ali ne želite trošiti previše vremena na to i ne mislite da lepota zahteva tako bolne tretmane kao što je depilacija.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Блок с видео и первым слайдером комментариев -->
    <div class="how">
        <div class="content">
            <h2 class="how_zag">KAKO RADI</h2>
            <div class="how__line">
                <!--Вставка видео с ютюба -->
                {{--<div class="how__line_video">--}}
                    {{--<video style="width: 100%;" controls webkit-playsinline="" loop controlslist="nodownload">--}}
                        {{--<source src="{{ asset('/') }}purplerelaxFiles/flawlessface/flawless.mp4" type="video/mp4">--}}
                    {{--</video>--}}
                {{--</div>--}}
                <!--Слайдер комментариев -->
                <div class="how__line_comment" id="how">
                    <!--первый сайд -->
                    <div class="slide">
                        <!--информация об авторе -->
                        <div class="slide__autor">
                            <!--аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <!--Имя и город -->
                            <div class="name">
                                <p class="autor">JELENA TOMIĆ</p>
                                <!--<p class="city">г.Волгоград</p>-->
                            </div>
                        </div>
                        <!--Текст комментария -->
                        <p class="slide_text">Uvek sam se bojala koristiti epilator dok nisam naišla na Flawless Face. Uopšte ne boli i prijatno sam iznenađena. Dlačice mi dosta rastu, ali od kada koristim ovaj epilator (3 meseca) primetila sam da
                            dlačice manje rastu i da su dosta tanje. Odličan proizvod po veoma pristupačnoj ceni!</p>
                    </div>

                    <!-- сайд2 -->
                    <div class="slide">
                        <!--информация об авторе -->
                        <div class="slide__autor">
                            <!--аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar2-1.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <!--Имя и город -->
                            <div class="name">
                                <p class="autor">DRAGANA MARKOVIĆ</p>
                                <!--                                <p class="city">г. Кишинёв</p>-->
                            </div>
                        </div>
                        <!--Текст комментария -->
                        <p class="slide_text">Dizajn  i konstrukcija proizvoda su mnogo zgodni i praktični. Pravo je uživanje koristiti ga. Možete ga nositi sa sobom bilo gde. Uvek radi vrlo čisto i precizno.
                            Hvala proizvođačima na ovako korisnom proizvodu i hvala Flawless timu koji su mi ponudili uređaj sa popustom!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--проблемы -->
    <div class="problems">
        <div class="content">
            <h2 class="block__zag">
                <span><i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/3.png" alt="epilator Flawless" title="epilator Flawless" ></i>problema</span>
                <small>koja se lako mogu rešiti uz pomoć epilatora</small>
            </h2>
            <!--проблема1 -->
            <div class="problems_block">
                <!--Изображение блока-->
                <div class="problems_block_img">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/problem1.jpg" alt="epilator Flawless" title="epilator Flawless">
                </div>
                <div class="problems_block_text">
                    <!--название проблемы -->
                    <h3> <span>PREKOMERAN RAST <br>DLAČICA </span> <br>
                        <em>ZBOG HORMONSKIH PROBLEMA </em> </h3>
                    <!--описание проблемы -->
                    <p>
                        <span>Brkovi, slepočnice i brada</span> (obično su dlačice na ovim područjima tamne i vrlo vidljive)
                    </p>
                </div>
            </div>
            <!--проблема2 -->
            <div class="problems_block">
                <!--Изображение блока-->
                <div class="problems_block_img">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/problem2.jpg" alt="epilator Flawless" title="epilator Flawless">
                </div>
                <div class="problems_block_text">
                    <!--название проблемы -->
                    <h3>
                        <span>RAST I PROMENA STRUKTURE DLAČICA</span>
                        <i>KOJA SE DEŠAVA ZBOG STARENJA</i>
                    </h3>
                    <!--описание проблемы -->
                    <p>Kada su prvi znaci starenja gotovo nevidljivi, po nausnicama i bradi postaju čvršće i gušće.</p>
                </div>
            </div>
            <!--проблема3 -->
            <div class="problems_block end">
                <!--Изображение блока-->
                <div class="problems_block_img">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/problem3.jpg" alt="epilator Flawless" title="epilator Flawless">
                </div>
                <div class="problems_block_text">
                    <!--название проблемы -->
                    <h3>
                        <span>RAST I PROMENA STRUKTURE DLAČICA</span>
                        <i>KOJA SE DEŠAVA ZBOG STRESA ILI ZDRAVLJA</i>
                    </h3>
                    <!--описание проблемы -->
                    <p>Hormonske promene obično odmah menjaju stanje kože i kose.</p>
                </div>
            </div>
            <div class="action_zag">
                <p>
                    BRZO, SIGURNO<br> I <span>BEZBOLNO</span>
                </p>
                <h3>REŠENJE</h3>
            </div>
            <div class="action_line">
                <div class="action_line_zag">
                    <h3><b>AKCIJA</b></h3>
                    <p>-<span class="price_land_discount"></span>40<sup>%</sup></p>
                </div>
                <div class="action_line__info">
                    <div class="action_line__info_price">
                        <sup class="action_line__info_price_old oldproductsum"><span class="price_land_s4">{{$prices[1]['originalPrice']}}</span> <span class="price_land_curr">RSD</span></sup>
                        <p class="action_line__info_price_new productsum"><span class="price_land_s1">{{$prices[1]['amount']}}</span> <span class="price_land_curr">RSD</span></p>
                        <p class="action_line__info_price_data">Iskoristite <span>popust!</span></p>
                    </div>
                    <div class="action_line__info_button_line">
                        <a class="open_modal" href="#form">PORUČI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="forget">
        <div class="content">
            <h2 class="forget_zag">ZABORAVITE NA <span>BOL!</span></h2>
            <div class="forget__line">
                <div class="forget__line_option">
                    <div class="forget__line_option_block option1">
                        <p>OD DEPILACIJE</p>
                    </div>
                    <div class="forget__line_option_block option2">
                        <p>I ČUPANJA PINCETOM</p>
                    </div>
                </div>
                <!--Второй сл-->

                <div class="forget__line_comment">
                    <!--Сайд3 -->
                    <div class="slide">
                        <!--Автор -->
                        <div class="slide__autor">
                            <!--Аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar3-1.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <div class="name">
                                <!--Имя-->
                                <p class="autor">MIRJANA</p>
                                <!--город -->
                                <!--                                <p class="city">г. Кишинёв</p>-->
                            </div>
                        </div>
                        <!--Текст отзыва -->
                        <p class="slide_text">Savršen je za osetljivu kožu. Uklanjanje dlačica mi je uvek predstavljalo problem jer je moja koža veoma osetljiva i sklona iritacijama. Vosak i ostali preparati
                            nisu odgovarali mojoj koži, i uvek sam nakon tih tretmana bila iritirana, a nekada su mi čak i ostajale modrice. Ovaj epilator radi vrlo lako i bezbolan je, a najvažnije je da je rezultat
                            dugotrajan. O dizajnu mogu reći da je mnogo lep, jednostavan za upotrebu i zgodan za nošenje sa sobom.</p>
                    </div>
                    <!--Сайд4 -->
                    <div class="slide">
                        <!--Автор -->
                        <div class="slide__autor">
                            <!--Аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar4-1.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <div class="name">
                                <!--Имя-->
                                <p class="autor">IRENA</p>
                                <!--город -->
                                <!--                                <p class="city">г. Рязань</p>-->
                            </div>
                        </div>
                        <!--Текст отзыва -->
                        <p class="slide_text">Jako sam zadovoljna rezultatima ovog epilatora! Nudi besprekoran kvalitet epilacije. U početku sam mislila da će boleti, ali sve sumnje su nestale nakon prve
                            upotrebe. Uopšte ne boli i može se koristiti i za osetljiva područja. Jako mi se sviđa što ima glatku površinu i ne čupa dlačice. Vredi svakog dinara. Ja sam zadovolja
                            obavljenom kupovinom i toplo preporučujem!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="content">
            <div class="description__zag">
                <h2>
                    SAVRŠENO ČISTA KOŽA
                    <small>BEZ BOLA, NEMA IRITACIJA I CRVENILA</small>
                </h2>
                <h3>zahvaljujući epilatoru Flawless Face</h3>
            </div>
            <div class="description_view">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/descript_zag_m.png" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>SA STILSKIM DIZAJNOM</h3>
                <h4>ELEGANTAN</h4>
                <p>
                    <span>i izgleda kao luksuzni karmin</span>
                </p>
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/view.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
            </div>

            <div class="description_block security">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/view_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>SIGURNO</h3>
                <div class="blade">
                    <h4>HIRURŠKE OŠTRICE</h4>
                    <p>Pažljivo, brzo i jednostavno skinite dlačice</p>
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/blade.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
                </div>
                <div class="coating">
                    <h4>GORNJA POVRŠINA OD <span>18 KARATNOG ZLATA</span></h4>
                    <p>pruža sigurnost tokom epilacije i antibakterijski efekat</p>
                </div>
            </div>
            <div class="description_block convenience">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/energi_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>JEDNOSTAVAN ZA KORIŠĆENJE</h3>
                <h4>SA UGRAĐENIM SVETLOM</h4>
                <p class="d_text">lako je videti i ukloniti svaku dlačicu</p>
                <div class="energy">

                    <h4>RADI UZ POMOĆ BATERIJA</h4>
                    <p>možete ga koristiti kod kuće, na odmoru ili gde god vam je potrebno</p>
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/energi.png" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
                </div>
            </div>

            <div class="description_bottom">
                <div class="description_bottom_block size">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/size_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                    <h3></h3>
                    <h4>VELIČINE USNE</h4>
                    <p>možete ga nositi u torbi, torbici ili neseseru</p>
                </div>
                <div class="description_bottom_block hygiene">
                    <h3>NE NADRAŽUJTE KOŽU</h3>
                    <h4>NISU POTREBNI PENA, VODA ILI KREMA</h4>
                    <p>ne ostavlja tamne mrlje na koži nakon epilacije</p>
                </div>
            </div>
        </div>
        <!--Слайдер3 -->
        <!--Слайдер3 -->
        <div class="description__comment_line">
            <div class="description__comment_line_slider" id="comment">
                <!--Слайд4 -->
                {{--<div class="slide">--}}
                    {{--<div class="slide_autor">--}}
                        {{--<!--Фото автора -->--}}
                        {{--<div class="avatar_line">--}}
                            {{--<img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar5-1.png" alt="epilator Flawless" title="epilator Flawless">--}}
                        {{--</div>--}}
                        {{--<!--Имя и город автора -->--}}
                        {{--<div class="name_line">--}}
                            {{--<p class="name">Maria Shipunova</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Текст отзыва -->--}}
                    {{--<p class="slide_text">--}}
                        {{--Este prima dată cand îmi procur un epilator și sunt foarte mulțumită! Nu-mi pot imagina cum am trăit până acum fără el. Este excelent, confortabil și îmi place că îl pot purta oriunde cu mine, deoarece este de dimensiunea unui ruj simplu. Funcționează calitativ, nu lasă fire de păr nedepilate. Fără durere și fără iritații. Vă recomand cu mare încredere!--}}
                    {{--</p>--}}
                {{--</div>--}}
                <!--Слайд5 -->
                <div class="slide">
                    <div class="slide_autor">
                        <!--Фото автора -->
                        <div class="avatar_line">
                            <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar6-1.png" alt="epilator Flawless" title="epilator Flawless">
                        </div>
                        <!--Имя и город автора -->
                        <div class="name_line">
                            <p class="name">VALENTINA MILEKIĆ</p>
                        </div>
                    </div>
                    <!--Текст отзыва -->
                    <p class="slide_text">Patim od iritacije kože na licu. Čak i kreme izazivaju nelagodnu reakciju. Dakle, depilacija nije za mene.
                        Uklanjanje dlaka voskom mi je veliko mučenje. Uz Flawless Face sam rešila svoj problem - moje lice je sada čisto i glatko.
                        Kozmetičarka kod koje često idem posavetovala me je da redovno koristim ovaj uređaj i zaboravim na crvene mrlje na koži.</p>
                </div>
            </div>
        </div>
        <div class="description_present">
            {{--<h3>Exclusiv, stilat și practic</h3>--}}
            {{--<h2>CADOU</h2>--}}
            {{--<h4>PENTRU PRIETENE, RUDE SAU PERSOANA IUBITĂ</h4>--}}
            <div class="button_line">
                <a href="#form" class="open_modal">PORUČI ODMAH</a>
            </div>
        </div>
    </div>
    <div class="steps">
        <div class="content">
            <h2 class="steps_zag">
                SAMO 4 KORAKA
                <small>DO FLAWLESS FACE PROIZVODA</small>
            </h2>
            <div class="steps_line">
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/1step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        OSTAVITE SVOJE PODATKE ZA DOSTAVU
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/2step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        KONTAKTIRAĆEMO VAS DA POTVRDIMO VAŠU PORUDŽBINU
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/3step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        ŠALJEMO PAKET BRZOM POŠTOM U ROKU OD 1-2 RADNA DANA
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/4step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        PLAĆANJE PO PREUZIMANJU PROIZVODA
                    </p>
                </div>
            </div>
            {{--<div class="steps__info">--}}
                {{--<div class="steps__info_block delivery">--}}
                    {{--<h3>LIVRARE</h3>--}}
                    {{--<p>Livrare rapidă în 2-3 zile. Costul livrării - XX</p>--}}
                {{--</div>--}}
                {{--<div class="steps__info_block pay">--}}
                    {{--<h3>PLATĂ</h3>--}}
                    {{--<p>--}}
                        {{--<span>Plata se face ramburs la curier</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="problems">
        <div class="content">
            <div class="action_zag" id="centred">
                <p>
                    BRZO, SIGURNO<br> I <span>BEZBOLNO</span>
                </p>
                <h3>REŠENJE</h3>
            </div>
            <div class="action_line">
                <div class="action_line_zag">
                    <h3><b>AKCIJA</b></h3>
                    <p>-<span class="price_land_discount"></span>40<sup>%</sup></p>
                </div>
                <div class="action_line__info">
                    <div class="action_line__info_price">
                        <sup class="action_line__info_price_old oldproductsum"><span class="price_land_s4">{{$prices[1]['originalPrice']}}</span> <span class="price_land_curr">RSD</span></sup>
                        <p class="action_line__info_price_new productsum"><span class="price_land_s1">{{$prices[1]['amount']}}</span> <span class="price_land_curr">RSD</span></p>
                        <p class="action_line__info_price_data">Iskoristite <span>ponudu!</span></p>
                    </div>

                    <div class="action_line__info_button_line" id="form">
                        <h3 class="modal_ring_zag">PODACI ZA DOSTAVU</h3>
                        <form id="ring_form" action="{{$orderRoute}}" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="input_wrap">
                                <input id="name" placeholder="Ime i prezime" name="name" type="text" data-orderName>
                            </div>
                            <div class="input_wrap">
                              <span class="phone-example">
                                  <input placeholder="Telefon" name="phone" id="tel" type="tel" data-orderPhone>
                              </span>
                            </div>
                            <div class="input_wrap">
                                <input id="shipping_address" placeholder="Adresa" name="shipping_address" type="text">
                            </div>
                            <div class="input_wrap">
                                <input id="shipping_city" placeholder="Grad" name="shipping_city" type="text">
                            </div>
                            <div class="submit_line">
                                <input class="mm_button" value="PORUČI SADA" type="submit" >
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('/') }}shared_files/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('.how__line_comment,.forget__line_comment').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            draggable: true,
            autoplaySpeed: 7000,
        });
        $('#comment').slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 7000,
            responsive: [{
                breakpoint: 727,
                settings: {
                    arrows: false,
                    dots: true,
                }
            }]
        })
    })

</script>
@include('components.pixel_footer')
</body>
</html>