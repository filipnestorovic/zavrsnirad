<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/flawlessface/favicon.ico"type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/flawlessface/style.css">

    {{--<link href="https://flawlessex.xcartpro.com/r1/shared_files/css/custom-styles2.min.css" type="text/css" rel="stylesheet"/>--}}

    {{--<script src="https://flawlessex.xcartpro.com/shared/form.validate.js?12"></script>--}}
    {{--<script src="https://flawlessex.xcartpro.com/shared/interPhoneCodes.js"></script>--}}
    {{--<script src="https://flawlessex.xcartpro.com/shared/form.incomplete.js?10"></script>--}}
    {{--<script src="https://flawlessex.xcartpro.com/shared/main2.js?14"></script>--}}
    {{--<script src="https://flawlessex.xcartpro.com/r1/shared_files/js/custom-functions2.min.js" type="text/javascript"></script>--}}

    <style>
        @font-face {
            font-family: 'robotoregular';
            src: url("{{ asset('/') }}fonts/roboto-regular-1.eot");
            src: url("{{ asset('/') }}fonts/roboto-regular.eot#iefix") format('embedded-opentype'),
            url("{{ asset('/') }}fonts/roboto-regular.woff") format('woff'),
            url("{{ asset('/') }}fonts/roboto-regular.ttf") format('truetype');
            /*url("{{ asset('/') }}fonts/roboto-regular.svg#robotoregular") format('svg');*/
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'robotobold';
            src: url("{{ asset('/') }}fonts/roboto-bold-1.eot");
            src: url("{{ asset('/') }}fonts/roboto-bold.eot#iefix") format('embedded-opentype'),
            url("{{ asset('/') }}fonts/roboto-bold.woff") format('woff'),
            url("{{ asset('/') }}fonts/roboto-bold.ttf") format('truetype');
            /*url("{{ asset('/') }}fonts/roboto-bold.svg#robotobold") format('svg');*/
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'PlayfairDisplay-Bold';
            src: url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.eot#iefix") format('embedded-opentype'),
            url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.woff") format('woff'),
            url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.ttf")  format('truetype');
            /*url("{{ asset('/') }}fonts/PlayfairDisplay-Bold.svg#PlayfairDisplay-Bold") format('svg');*/
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'PlayfairDisplaySC-Regular';
            src: url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.eot#iefix") format('embedded-opentype'),
            url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.woff") format('woff'),
            url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.ttf")  format('truetype');
            /*url("{{ asset('/') }}fonts/PlayfairDisplaySC-Regular.svg#PlayfairDisplaySC-Regular") format('svg');*/
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'PlayfairDisplaySC-Bold';
            src: url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.eot#iefix") format('embedded-opentype'),
            url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.woff") format('woff'),
            url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.ttf")  format('truetype');
            /*url("{{ asset('/') }}fonts/PlayfairDisplaySC-Bold.svg#PlayfairDisplaySC-Bold") format('svg');*/
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 400;
            src: local('Playfair Display'), local('PlayfairDisplay-Regular'),
            url("{{ asset('/') }}fonts/playfair-display_8e41554d1e7b796ea2d98f5000ad22b8.woff") format('woff'),
            url("{{ asset('/') }}fonts/playfair-display_8e41554d1e7b796ea2d98f5000ad22b8.ttf") format('truetype');
        }
        #name {
            display: inline-block;
            width: 320px;
            height: 60px;
            font: 24px/60px 'robotobold';
            text-align: center;
            color:black;
            box-shadow: 4px 4px 10px 0px rgba(51, 102, 0, 0.25);
            background: white;
            border-radius: 30px;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            margin-top: 40px;
            text-transform: uppercase;
        }
        #tel {
            display: inline-block;
            width: 320px;
            height: 60px;
            font: 24px/60px 'robotobold';
            text-align: center;
            color: #ffffff;
            box-shadow: 4px 4px 10px 0px rgba(51, 102, 0, 0.25);
            background: white;
            border-radius: 30px;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            margin-top: 40px;
            text-transform: uppercase;
        }
        .mm_button {
            display: inline-block;
            width: 230px;
            height: 60px;
            font: 24px/60px 'robotobold';
            text-align: center;
            color: #ffffff;
            box-shadow: 4px 4px 10px 0px rgba(51, 102, 0, 0.25);
            background: #94c43a;
            border-radius: 30px;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            margin-top: 40px;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="lang-bg">
<div class="line"></div>
@include('components.display_errors')
<header class="header">
    <div class="content">
        <a href="#" class="header__logo">
            <p>
                Perfect
                <br> Touch
                <i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/logo_icon.png" alt="epilator Flawless" title="epilator Flawless" ></i>
            </p>
        </a>
        <p class="header__name">flawless</p>
        <a href="#form" class="header__ring open_modal mymodal">PORUČI</a>
    </div>
</header>
<section>
    <div class="product">
        <div class="content">
            <div class="product__info">
                <div class="product__info_zag">
                    <h2>EPILATOR PORTABIL</h2>
                    <p><b>Perfect touch</b></p>
                </div>
                <p class="product__info_text">
                    Îndepărtarea părului facial nedorit
                    <b>Absolut nedureros</b>
                </p>
                <div class="product__info_delivery">
                    <i class="icon"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/delivery.svg" alt="epilator Flawless" title="epilator Flawless" ></i>
                    <p>
                        Livrare rapidă în 2-3 zile
                    </p>
                </div>
                <a href="#form" class="product__info_button open_modal">Comandă</a>
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
                <span><i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/4.png" alt="epilator Flawless" title="epilator Flawless" > </i>SITUAȚII,</span>
                <small>în care epilatorul este necesar</small>
            </h2>
            <div class="situation__line">
                <!--Ситуация 1-->
                <div class="situation__vertical_block">
                    <div class="situation__vertical_block_text">
                        <!--Заголовок блока -->
                        <h3>De obicei folosiți pentru machiaj <br> o bază și / sau pudră</h3>
                        <!--Текст блока -->
                        <p>
                            Cele mai mici particule ale acestor produse nuanțează culoarea firelor de păr, dar, de asemenea, se lipesc de ele, îngroșându-le și, uneori, creând un efect de mustață, destul de vizibil în lumina soarelui.
                        </p>
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
                        <h3>Plecați în vacanță la mare </h3>
                        <!--Текст блока -->
                        <p>
                            De obicei, în acest moment, pielea "se odihnește" de produsele cosmeticele decorative, pentru a căpăta un bronz frumos. Cu toate acestea, soarele poate contribui, de asemenea, la creșterea părului, dar noi toate ne dorim să arătăm naturale, frumoase și cu o piele netedă atât pe plajă cât și pe poze.
                        </p>
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
                        <h3>
                            Vă este cunoscută problema petelor întunecate după epilare
                        </h3>
                        <!--Текст блока -->
                        <p>
                            Epilatorul FLAWLESS este absolut sigur în timpul utilizării, nu provoacă iritații și nu lasă urme pe piele după epilare.
                        </p>
                    </div>
                    <!--Текст для мобильной версии -->
                    <p class="text_mobile">
                        Epilatorul FLAWLESS este absolut sigur în timpul utilizării, nu provoacă iritații și nu lasă urme pe piele după epilare.
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
                        <h3>
                            Vă doriți mereu să arătați de nota 10
                        </h3>
                        <!--Текст блока-->
                        <p>
                            și sunteți foarte atentă la aspectul dvs. Dar nu aveți dorința să petreceți prea mult timp pentru asta și nu credeți că frumusețea necesită astfel de sacrificii dureroase, cum ar fi epilare cu ceară.
                        </p>
                    </div>
                    <!--Текст для мобильной версии -->
                    <p class="text_mobile">
                        și sunteți foarte atentă la aspectul dvs. Dar nu aveți dorința să petreceți prea mult timp pentru asta și nu credeți că frumusețea necesită astfel de sacrificii dureroase, cum ar fi epilare cu ceară.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Блок с видео и первым слайдером комментариев -->
    <div class="how">
        <div class="content">
            <h2 class="how_zag">CUM LUCREAZĂ</h2>
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
                                <p class="autor">Rima Isakova</p>
                                <!--<p class="city">г.Волгоград</p>-->
                            </div>
                        </div>
                        <!--Текст комментария -->
                        <p class="slide_text">
                            Întotdeauna mi-a fost frică să folosesc un depilator, dar se pare că este mult mai convenabil. Nu doare deloc! Sincer, sunt foarte surprinsă. În general, părul meu crește peste tot, dar de când folosesc epilatorul ( 3 luni ) am observat că părul a început să crească mai rar și mai subțire, deci este aproape invizibil. Recomand tuturor!
                        </p>
                    </div>

                    <!-- сайд2 -->
                    <div class="slide">
                        <!--информация об авторе -->
                        <div class="slide__autor">
                            <!--аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar2-1.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <!--Имя и город -->
                            <div class="name">
                                <p class="autor">Vera Nikolaeva</p>
                                <!--                                <p class="city">г. Кишинёв</p>-->
                            </div>
                        </div>
                        <!--Текст комментария -->
                        <p class="slide_text">
                            Designul și construcția dispozitivului sunt atât de convenabile încât nu vă puteți gândi la nimic altceva. Îl puteți lua cu dvs. oriunde, în călătorii spre exemplu. Nu necesită proceduri suplimentare. Lucrează mereu foarte curat și fără durere. Chiar și în cea mai mică pungă cosmetică există un loc pentru el. Mulțumesc producătorilor pentru un astfel de dispozitiv util pentru femei. Și, desigur, mulțumesc vânzătorilor pentru oferta de a achiziționa un astfel de dispozitiv minunat la un preț accesibil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--проблемы -->
    <div class="problems">
        <div class="content">
            <h2 class="block__zag">
                <span><i><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/3.png" alt="epilator Flawless" title="epilator Flawless" ></i>PROBLEME ,</span>
                <small>care pot fi ușor rezolvate cu ajutorul epilatorului</small>
            </h2>
            <!--проблема1 -->
            <div class="problems_block">
                <!--Изображение блока-->
                <div class="problems_block_img">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/problem1.jpg" alt="epilator Flawless" title="epilator Flawless">
                </div>
                <div class="problems_block_text">
                    <!--название проблемы -->
                    <h3> <span>CREȘTEREA EXCESIVĂ <br>
                      A PĂRULUI </span> <br> <em>DIN CAUZA PROBLEMELOR HORMONALE </em> </h3>
                    <!--описание проблемы -->
                    <p>
                        <span>Mustața, tâmplele și bărbia</span> ( de obicei părul în aceste zone este de o culoare închisă și foarte vizibil)
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
                        <span>CREȘTEREA ȘI SCHIMBAREA STRUCTURII PĂRULU</span>

                        <i>DIN CAUZA SCHIMBĂRILOR DE VÂRSTĂ</i>
                    </h3>
                    <!--описание проблемы -->
                    <p>
                        când primele semne ale îmbătrânirii pielii sunt încă aproape invizibile, dar părul de pe tâmlpe / bărbie devine mai rigid și mai gros
                    </p>
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
                        <span>CREȘTEREA / MODIFICAREA STRUCTURII PĂRULUI</span>
                        <i>DIN CAUZA STRESULUI SAU A SĂNĂTĂȚII</i>
                    </h3>
                    <!--описание проблемы -->
                    <p>
                        fluctuațiile hormonale de obicei schimbă imediat starea pielii și părului
                    </p>
                </div>
            </div>
            <div class="action_zag">
                <p>
                    RAPIDĂ, SIGURĂ<br> ȘI <span>NEDUREROASĂ</span>
                </p>
                <h3>SOLUȚIE</h3>
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
                        <p class="action_line__info_price_data">Ofertă <span>limitată!</span></p>
                    </div>
                    <div class="action_line__info_button_line">
                        <a class="open_modal" href="#form">Comandă</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="forget">
        <div class="content">
            <h2 class="forget_zag">UITAȚI DE <span>DURERE!</span></h2>
            <div class="forget__line">
                <div class="forget__line_option">
                    <div class="forget__line_option_block option1">
                        <p>CHIAR ȘI DE CEA DE SCURTĂ DURATĂ</p>
                    </div>
                    <div class="forget__line_option_block option2">
                        <p>sau cu care v‑ați obișnuit</p>
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
                                <p class="autor">Anna Bazarova</p>
                                <!--город -->
                                <!--                                <p class="city">г. Кишинёв</p>-->
                            </div>
                        </div>
                        <!--Текст отзыва -->
                        <p class="slide_text">
                            Este perfect pentru pielea sensibilă. Îndepărtarea părului pentru mine a fost mereu o problemă. Pielea mea este foarte sensibilă. Nici rasul, nici fâșiile de ceară nu s-au potrivit tenului meu, după ele apărea o iritație neplăcută și uneori chiar și mici vânătăi. Acest epilator lucrează foarte ușor și fără durere, cel mai important este că rezultatul este de lungă durată. Despre design pot spune că e frumos, foarte ușor de folosit și îl poți lua cu tine oriunde.
                        </p>
                    </div>
                    <!--Сайд4 -->
                    <div class="slide">
                        <!--Автор -->
                        <div class="slide__autor">
                            <!--Аватар -->
                            <i class="avatar"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar4-1.png" alt="epilator Flawless" title="epilator Flawless" ></i>
                            <div class="name">
                                <!--Имя-->
                                <p class="autor">Irina</p>
                                <!--город -->
                                <!--                                <p class="city">г. Рязань</p>-->
                            </div>
                        </div>
                        <!--Текст отзыва -->
                        <p class="slide_text">
                            Sunt foarte mulțumită de rezultatele acestui epilator! Oferă o calitate impecabilă a bărbieritului. La început mă îndoiam, îmi era teamă de durere, dar toate îndoielile au dispărut la prima utilizare. Nu doare deloc, nici nu m-am așteptat! Poate fi folosit chiar și pentru zonele sensibile. Apropo, are un design remarcabil. Și îmi place mult că are o suprafața foarte netedă. Poate nu este chiar ieftin, dar merită toți banii. Sunt mulțumită de achiziția făcută, recomand!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="content">
            <div class="description__zag">
                <h2>
                    PIELE PERFECT NETEDĂ
                    <small>FĂRĂ DURERE, FĂRĂ IRITAȚII ȘI VÂNĂTĂI</small>
                </h2>
                <h3>datorită epilatorului Perfect Touch</h3>
            </div>
            <div class="description_view">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/descript_zag_m.png" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>CU UN DESIGN STILAT </h3>
                <h4>ȘI ELEGANT</h4>
                <p>
                    <span>seamănă cu un ruj de lux</span>
                </p>
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/view.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
            </div>

            <div class="description_block security">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/view_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>SIGUR</h3>
                <div class="blade">
                    <h4>LAME ASCUȚITE</h4>
                    <p>Tăie cu atenție firele de păr cât mai aproape de piele, rapid și ușor </p>
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/blade.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
                </div>
                <div class="coating">
                    <h4>ACOPERIRE DIN <span>AUR DE 18 CARATE</span></h4>
                    <p>căptușeala asigură siguranța pielii în timpul epilării și  oferă un efect bactericid</p>
                </div>
            </div>
            <div class="description_block convenience">
                <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/energi_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                <h3>UȘOR ÎN UTILIZARE</h3>
                <h4>CU LUMINĂ ÎNCORPORATĂ</h4>
                <p class="d_text">ușor de văzut și îndepărtat fiecare fir</p>
                <div class="energy">

                    <h4>FUNCȚIONEAZĂ CU AJUTORUL BATERIILOR</h4>
                    <p>îl puteți folosi acasă, în vacanță sau oriunde aveți nevoie</p>
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/energi.png" alt="epilator Flawless" title="epilator Flawless" class="img_plan">
                </div>
            </div>

            <div class="description_bottom">
                <div class="description_bottom_block size">
                    <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/size_mob.jpg" alt="epilator Flawless" title="epilator Flawless" class="img_mob">
                    <h3>POATE FI FOLOSIT ORIUNDE</h3>
                    <h4>DE DIMENSIUNEA UNUI RUJ </h4>
                    <p>poate fi purtat în geantă, poșetă sau punga cosmetică</p>
                </div>
                <div class="description_bottom_block hygiene">
                    <h3>NU IRITĂ PIELEA</h3>
                    <h4>NU NECESITĂ SPUMĂ, APĂ SAU CREME</h4>
                    <p>nu lasă pete întunecate pe piele după epilare</p>
                </div>
            </div>
        </div>
        <!--Слайдер3 -->
        <!--Слайдер3 -->
        <div class="description__comment_line">
            <div class="description__comment_line_slider" id="comment">

                <!--Слайд4 -->
                <div class="slide">
                    <div class="slide_autor">
                        <!--Фото автора -->
                        <div class="avatar_line">
                            <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar5-1.png" alt="epilator Flawless" title="epilator Flawless">
                        </div>
                        <!--Имя и город автора -->
                        <div class="name_line">
                            <p class="name">Maria Shipunova</p>
                        </div>
                    </div>
                    <!--Текст отзыва -->
                    <p class="slide_text">
                        Este prima dată cand îmi procur un epilator și sunt foarte mulțumită! Nu-mi pot imagina cum am trăit până acum fără el. Este excelent, confortabil și îmi place că îl pot purta oriunde cu mine, deoarece este de dimensiunea unui ruj simplu. Funcționează calitativ, nu lasă fire de păr nedepilate. Fără durere și fără iritații. Vă recomand cu mare încredere!
                    </p>
                </div>
                <!--Слайд5 -->
                <div class="slide">
                    <div class="slide_autor">
                        <!--Фото автора -->
                        <div class="avatar_line">
                            <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/avatar6-1.png" alt="epilator Flawless" title="epilator Flawless">
                        </div>
                        <!--Имя и город автора -->
                        <div class="name_line">
                            <p class="name">Valentina Yuzhina</p>
                        </div>
                    </div>
                    <!--Текст отзыва -->
                    <p class="slide_text">
                        Sufăr de iritabilitate ridicată a pielii de pe față. Chiar și cremele provoacă reacții. Deci epilarea nu este pentru mine. Eliminarea părului cu ceara este pentru mine o tortură. Cu Flawless mi-am rezolvat problema - fața mea este acum curată și netedă. Medicul meu cosmetolog, la care mă adresez adesea, mi-a recomandat să folosesc în mod regulat acest dispozitiv și să uit de petele roșii de pe ten.
                    </p>
                </div>
            </div>
        </div>
        <div class="description_present">
            <h3>Exclusiv, stilat și practic</h3>
            <h2>CADOU</h2>
            <h4>PENTRU PRIETENE, RUDE SAU PERSOANA IUBITĂ</h4>
            <div class="button_line">
                <a href="#form" class="open_modal">COMANDĂ</a>
            </div>
        </div>
    </div>
    <div class="steps">
        <div class="content">
            <h2 class="steps_zag">
                DOAR 4 PAȘI
                <small>PENTRU A FACE COMANDA</small>
            </h2>
            <div class="steps_line">
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/1step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        Completați formularul de comandă
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/2step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        Discutați detaliile cu operatorul
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/3step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        Livrare rapidă la domiciliu
                    </p>
                </div>
                <div class="delimiter"><img src="{{ asset('/') }}purplerelaxFiles/flawlessface/devider.svg" alt="epilator Flawless" title="epilator Flawless"></div>
                <div class="block">
                    <div class="block_icon">
                        <img src="{{ asset('/') }}purplerelaxFiles/flawlessface/4step.svg" alt="epilator Flawless" title="epilator Flawless">
                    </div>
                    <p class="block_text">
                        Plata la primirea mărfii
                    </p>
                </div>
            </div>
            <div class="steps__info">
                <div class="steps__info_block delivery">
                    <h3>LIVRARE</h3>
                    <p>Livrare rapidă în 2-3 zile. Costul livrării - XX</p>
                </div>
                <div class="steps__info_block pay">
                    <h3>PLATĂ</h3>
                    <p>
                        <span>Plata se face ramburs la curier</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="problems">
        <div class="content">
            <div class="action_zag" id="centred">
                <p>
                    RAPIDĂ, SIGURĂ<br> ȘI <span>NEDUREROASĂ</span>
                </p>
                <h3>SOLUȚIE</h3>
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
                        <p class="action_line__info_price_data">Ofertă <span>limitată!</span></p>
                    </div>

                    <div class="action_line__info_button_line" id="form">
                        <h3 class="modal_ring_zag">Sună-mă!</h3>
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
{{--<script src="https://flawlessex.xcartpro.com/r1/js/jquery.countdown.js"></script>--}}
{{--<script src="https://flawlessex.xcartpro.com/r1/js/script.js"></script>--}}
{{--<script src="https://flawlessex.xcartpro.com/r1/js/form.js"></script>--}}
{{--<script src="https://flawlessex.xcartpro.com/r1/js/tach.js"></script>--}}

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