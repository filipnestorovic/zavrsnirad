<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    {{--<link href="https://fonts.gstatic.com/" rel="preconnect"/>--}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>--}}
    <link href="{{ asset('/') }}innodermFiles/innoderm2/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="{{ asset('/') }}innodermFiles/innoderm2/slick-theme.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}innodermFiles/innoderm2/slick.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}innodermFiles/innoderm2/main.min.css" rel="stylesheet"/>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    {{--<script type="text/javascript" src="content/_presets/10_11_12.min.js"></script>--}}
</head>
<body>
<div class="container">
    @include('components.display_errors')
    <header class="header">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--6 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--7 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="header__content">
                <div class="header__description">
                    <div class="title-wrapper">
                        <div class="pre-title">
                            Alchymie 21. století
                        </div>
                        <h1 class="main-title">
                            Moleculica
                        </h1>
                        <div class="subtitle">
                            <span>  Dokonalá péče na molekulární úrovni  </span>
                        </div>
                    </div>
                    <div class="header__product">
                        <img alt="" class="img-product only-desktop" src="{{ asset('/') }}innodermFiles/innoderm2/product.png"/>
                        <img alt="" class="img-product only-mobile" src="{{ asset('/') }}innodermFiles/innoderm2/product-mobile.png"/>
                        <div class="circle">
                            <div class="circle__inner">
                                <svg class="circle__img" fill="none" height="26" viewbox="0 0 26 26" width="26" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M25.9011 14.8274C25.9003 14.8119 25.8988 14.7963 25.8966 14.7808L24.5934 5.71288C24.5712 5.55855 24.4794 5.42297 24.3443 5.34512C24.2094 5.26727 24.046 5.25569 23.9012 5.31389L17.9038 7.72508C17.6435 7.82969 17.5175 8.12549 17.622 8.3857C17.7267 8.646 18.0225 8.77209 18.2827 8.66748L23.6799 6.49755L24.8825 14.8651C24.8831 14.8886 24.8855 14.9123 24.8895 14.936C25.1524 16.4839 24.8645 18.0857 24.079 19.4463C23.1743 21.0132 21.7119 22.1331 19.9611 22.5996C18.2097 23.0663 16.3795 22.8235 14.8074 21.9159C14.7965 21.9097 14.7854 21.9044 14.7743 21.899C15.1113 21.6428 15.4283 21.3655 15.724 21.0689L21.6694 19.4758C21.9404 19.4032 22.1011 19.1247 22.0285 18.8538C21.9559 18.5829 21.6773 18.422 21.4065 18.4947L16.8319 19.7204C17.3345 18.9726 17.7278 18.1479 17.9965 17.2656L22.0779 16.172C22.3489 16.0995 22.5097 15.8209 22.437 15.55C22.3645 15.2791 22.0858 15.1183 21.8151 15.1909L18.812 15.9956L19.9412 14.0395L22.3277 13.4001C22.5987 13.3275 22.7595 13.049 22.6868 12.7781C22.6142 12.5072 22.3356 12.3463 22.0649 12.4189L20.6595 12.7955L21.7401 10.9238C21.8804 10.6809 21.7971 10.3703 21.5543 10.2301C21.3113 10.0898 21.0007 10.173 20.8605 10.4159L19.7799 12.2876L19.4033 10.8823C19.3307 10.6113 19.0522 10.4505 18.7814 10.5231C18.5104 10.5957 18.3496 10.8742 18.4222 11.1451L19.0617 13.5316L18.4009 14.6761C18.4204 13.0505 18.0044 11.4439 17.1708 10C16.121 8.18176 14.4642 6.76963 12.5037 6.02153C12.5005 6.02015 12.4972 6.01878 12.4939 6.01741L10.196 5.08476C9.93587 4.97929 9.63992 5.10452 9.53445 5.36437C9.42897 5.62432 9.55415 5.92047 9.81405 6.02594L12.0911 6.95006C12.1014 6.95478 12.1119 6.95915 12.1226 6.96321C13.874 7.62647 15.3544 8.88528 16.2911 10.5078C17.3815 12.3964 17.6691 14.5979 17.101 16.7067C16.5769 18.6519 15.3822 20.303 13.7135 21.4062L12.8612 19.93L14.709 13.0341C14.7816 12.7631 14.6208 12.4847 14.3499 12.4121C14.0788 12.3395 13.8005 12.5003 13.7279 12.7712L12.1431 18.6861L10.2629 15.4295L11.5448 10.6455C11.6174 10.3745 11.4566 10.0961 11.1856 10.0234C10.9146 9.95082 10.6363 10.1116 10.5637 10.3826L9.5447 14.1855L8.06255 11.6183L8.83458 8.73725C8.9072 8.46629 8.74642 8.18785 8.47545 8.11524C8.20438 8.04267 7.9261 8.20344 7.85349 8.47436L7.3443 10.3743L5.9402 7.94233C5.79999 7.69944 5.48937 7.61616 5.24648 7.75647C5.00354 7.89667 4.92031 8.2073 5.06062 8.45019L6.46472 10.8822L4.56479 10.3731C4.29377 10.3005 4.01544 10.4613 3.94282 10.7322C3.87021 11.0032 4.03098 11.2816 4.30195 11.3542L7.18297 12.1262L8.66512 14.6934L4.86232 13.6745C4.5913 13.6018 4.31297 13.7627 4.24035 14.0336C4.16773 14.3046 4.32851 14.583 4.59947 14.6556L9.38337 15.9375L11.2636 19.1941L5.34885 17.6093C5.07778 17.5367 4.7995 17.6975 4.72689 17.9684C4.65427 18.2394 4.81504 18.5178 5.08601 18.5904L11.9818 20.4382L12.8341 21.9142C8.99632 23.8269 4.27331 22.4494 2.10713 18.6975C1.16027 17.0575 0.813328 15.1268 1.13025 13.261C1.13457 13.2358 1.13686 13.2107 1.13726 13.1856L2.58742 3.09312L5.95173 4.45858C6.21188 4.5641 6.50778 4.43888 6.61326 4.17898C6.71873 3.91903 6.59355 3.62287 6.33365 3.5174L2.36805 1.90784C2.22337 1.84919 2.05955 1.86026 1.92417 1.938C1.78873 2.01575 1.69662 2.15154 1.67437 2.30622L0.122297 13.1061C0.119809 13.1232 0.118285 13.1403 0.117574 13.1574C-0.219512 15.2352 0.173637 17.3802 1.2273 19.2051C2.92405 22.1441 6.01566 23.7879 9.19375 23.7879C10.5974 23.7879 12.0176 23.466 13.3422 22.7946L13.9664 23.8756C14.0605 24.0386 14.2312 24.1297 14.4067 24.1297C14.4928 24.1297 14.5802 24.1077 14.6601 24.0616C14.9031 23.9214 14.9863 23.6107 14.846 23.3678L14.6146 22.967C15.7368 23.5495 16.9607 23.8476 18.1993 23.8476C18.8742 23.8476 19.5535 23.7594 20.2226 23.5811C22.2361 23.0445 23.9181 21.7564 24.9587 19.9541C25.8519 18.4071 26.1856 16.5889 25.9011 14.8274Z" fill="white"></path>
                                        <path d="M8.39203 4.39586C8.29763 4.30141 8.16662 4.24707 8.03301 4.24707C7.8994 4.24707 7.76839 4.30141 7.67394 4.39586C7.57948 4.49082 7.52515 4.62133 7.52515 4.75493C7.52515 4.889 7.57943 5.01955 7.67394 5.11452C7.76839 5.20902 7.8994 5.2633 8.03301 5.2633C8.16657 5.2633 8.29763 5.20897 8.39203 5.11452C8.48699 5.01955 8.54087 4.88849 8.54087 4.75493C8.54087 4.62138 8.48699 4.49082 8.39203 4.39586Z" fill="white"></path>
                                        <path d="M22.541 8.85474L22.5379 8.85057C22.3731 8.62363 22.0555 8.57326 21.8286 8.73809C21.6016 8.90288 21.5512 9.22052 21.716 9.44741L21.7191 9.45152C21.8185 9.58833 21.9734 9.661 22.1305 9.661C22.2339 9.661 22.3384 9.62946 22.4285 9.56405C22.6554 9.39927 22.7058 9.08168 22.541 8.85474Z" fill="white"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0">
                                            <rect fill="white" height="26" width="26"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                                <span>  Inovativní složení  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <form action="{{$orderRoute}}" class="form" method="POST">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="form-inner">
                                <div class="price-wrapper">
                                    <div class="new-price">
                                        <span>{{ $prices[1]['amount'] }}</span> RSD
                                    </div>
                                    <div class="old-price">
                                        <span>{{ $prices[1]['originalPrice'] }}</span> RSD
                                    </div>
                                </div>
                                <div class="price-footnote">Unesite podatke za dostavu</div>
                                <input class="inp" name="name" placeholder="Ime i prezime" type="text" required/>
                                <input class="inp only_number" name="phone" placeholder="Telefon" type="tel" required/>
                                <button class="btn js_pay_online_secondpage">
                                    <span class="button__text">  Poruči  </span>
                                    <div class="blobs">
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                    </div>
                                </button>
                                <div class="taxes">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="impact">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
            </div>
            <div class="impact__content">
                <h2 class="main-title">
                    Moleculica
                </h2>
                <div class="subtitle">
                    Proti hlavním příčinám stárnutí pleti
                </div>
                <ul class="impact__list">
                    <li>
                        <div class="impact__desctiption">
                            <span>  Čistí,  </span>
                            <p>  hydratuje a vyživuje  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                    <li>
                        <div class="impact__desctiption">
                            <span>  Srovnává  </span>
                            <p>  texturu  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                    <li>
                        <div class="impact__desctiption">
                            <span>  Vyhlazuje  </span>
                            <p>  vrásky  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                    <li>
                        <div class="impact__desctiption">
                            <span>  Rozjasňuje  </span>
                            <p>  tmavé skvrny  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                    <li>
                        <div class="impact__desctiption">
                            <span>  Zvyšuje elasticitu  </span>
                            <p>  a vypnutí  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                    <li>
                        <div class="impact__desctiption">
                            <span>  Zlepšuje  </span>
                            <p>  odstín pleti  </p>
                        </div>
                        <div class="impact__mark">
                            <div class="impact__point"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="molecular-level">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--5 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--6 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
            </div>
            <div class="molecular-level__content">
                <h2 class="s-title">  Dokonalá péče na molekulární úrovni  </h2>
                <ul class="molecular-level__list">
                    <li class="molecular-level__list-item">
                        <div class="molecular-level__description"><b>  Hlavní výhodou krému Moleculica je patentovaná technologie s obsahem izolovaných rostlinných a minerálních molekul.  </b>   Jde o jedinou metodu, která dodává bioaktivní látky do nejhlubších vrstev pleti, do buněčných jader a zaručuje rychlejší obnovu pleti.  </div>
                        <div class="molecular-level__img">
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/skin-before.png"/>
                            <div class="sign">  Před použitím   <b>  Moleculica  </b></div>
                        </div>
                    </li>
                    <li class="molecular-level__list-item">
                        <div class="molecular-level__description">  Využití systému mikrokapsulace pomáhá aktivním látkám dostat se do pleti, aniž by se rozložily a maximálně se do ní vstřebat.   <b>  Díky tomu Moleculica vytváří zásobu vitamínů a mikroprvků, které účinkují v pleti po mnoho let.  </b></div>
                        <div class="molecular-level__img">
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/skin-after.png"/>
                            <div class="sign">  Po použití   <b>  Moleculica  </b></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="complex">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--1 parallax" data-rellax-speed="3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="complex__content">
                <h2 class="main-title">
                    Moleculica
                </h2>
                <div class="subtitle">
                    je komplexní řešení pro odstranění projevů stárnutí pleti
                </div>
                <div class="complex__composition">
                    <div class="complex-product">
                        <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/complex-product.png"/>
                    </div>
                    <ul class="complex__list">
                        <li class="complex__list-item">
                            <div class="list__caption">
                                <span>  Komplex peptidů  </span>
                            </div>
                            <div class="list-description">
                                <b>  Stimuluje syntézu elastinu,  </b>   zlepšuje elasticitu pleti, posiluje a zvýrazňuje kontury obličeje.
                            </div>
                            <div class="list-img">
                                <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/complex-img1.png"/>
                            </div>
                        </li>
                        <li class="complex__list-item">
                            <div class="list__caption">
                                <span>  Retinol  </span>
                            </div>
                            <div class="list-description">
                                <b>  Vyhlazuje vrásky a jemné vrásky,  </b>   zrychluje proces buněčné výměny a regenerace, stimuluje produkci kolagenu a elastinu.
                            </div>
                            <div class="list-img">
                                <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/complex-img2.png"/>
                            </div>
                        </li>
                        <li class="complex__list-item">
                            <div class="list__caption">
                                <span>  Kyselina  </span>
                            </div>
                            <div class="list__caption">
                                <span>  hyaluronová a kolagen  </span>
                            </div>
                            <div class="list-description">
                                <b>  Udržují rovnováhu vody,  </b>   zlepšují elasticitu pleti a dodávají pleti zářivost a pevnost.
                            </div>
                            <div class="list-img">
                                <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/complex-img3.png"/>
                            </div>
                        </li>
                        <li class="complex__list-item">
                            <div class="list__caption">
                                <span>  Bambucké máslo  </span>
                            </div>
                            <div class="list-description">
                                <b>  Bojuje proti suché pleti,  </b>   hlobkově vyživuje, pomáhá obnovovat lipidovou bariéru pleti.
                            </div>
                            <div class="list-img">
                                <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/complex-img4.png"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="related">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--5 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="1">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="related__content">
                <h2 class="s-title">  Pro maximální účinky vyzkoušejte celou produktovou řadu Moleculica*  </h2>
                <ul class="related__list">
                    <li>
                        <div class="list-description">
                            <div class="list__caption">
                                <span>  Noční krém s  </span>
                            </div>
                            <div class="list__caption">
                                <span>  elastinem  </span>
                            </div>
                            <p>  Reguluje elasticitu pleti, zpevňuje tkáně a má antioxidační účinky. Hloubkově vyživuje a zjemňuje hrubou pleť a zlepšuje její bariérovou funkci.  </p>
                        </div>
                        <img alt="" class="list-img" src="{{ asset('/') }}innodermFiles/innoderm2/related-product1.png"/>
                    </li>
                    <li>
                        <div class="list-description">
                            <div class="list__caption">
                                <span>  Pleťová maska s  </span>
                            </div>
                            <div class="list__caption">
                                <span>  extraktem z plodu Yuja  </span>
                            </div>
                            <p>  Hloubkově hydratuje, zlepšuje hustotu pleti, zmírňuje vrásky a podporuje regeneraci epidermu.  </p>
                        </div>
                        <img alt="" class="list-img" src="{{ asset('/') }}innodermFiles/innoderm2/related-product2.png"/>
                    </li>
                </ul>
                <p class="related__footnote">
                    *Každý produkt lze používat zvlášť, nebo dohromady
                </p>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="banner__content">
                <div class="banner__decoration">
                    <div class="banner__img banner__img--1">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--2">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--3">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--4">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--5">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--6">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--7">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--8">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--9">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--10">
                        <span></span>
                    </div>
                    <div class="banner__img banner__img--11">
                        <span></span>
                    </div>
                </div>
                <h2 class="s-title">  Miliony žen po celém světě si zvolily dokonalou pleť bez vrásek  </h2>
                <button class="btn pre_toform">
                    <span>  Objednat  </span>
                    <div class="blobs">
                        <div class="blob"></div>
                        <div class="blob"></div>
                        <div class="blob"></div>
                        <div class="blob"></div>
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="research">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="research__content">
                <h2 class="s-title">
                    Výroba a klinické výzkumy
                </h2>
                <p>  Při výrobě celé řady   <b>  Moleculica  </b>  se požadované molekuly izolují od ingrediencí tak, aby byly biologicky aktivní a snadno se vstřebávaly do pleti.  </p>
                <p>  Výzkumy prokázaly, že tato metoda   <b>  zvyšuje obsah kolagenu, který zlepšuje elasticitu pleti až 4x,  </b>   ve srovnání s běžnými produkty pro stárnoucí pleť.  </p>
                <div class="research__product">
                    <img alt="" class="img-product" src="{{ asset('/') }}innodermFiles/innoderm2/research-product.png"/>
                    <div class="circle">
                        <div class="circle__inner">
                            <svg class="circle__img" fill="none" height="26" viewbox="0 0 26 26" width="26" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M25.9011 14.8274C25.9003 14.8119 25.8988 14.7963 25.8966 14.7808L24.5934 5.71288C24.5712 5.55855 24.4794 5.42297 24.3443 5.34512C24.2094 5.26727 24.046 5.25569 23.9012 5.31389L17.9038 7.72508C17.6435 7.82969 17.5175 8.12549 17.622 8.3857C17.7267 8.646 18.0225 8.77209 18.2827 8.66748L23.6799 6.49755L24.8825 14.8651C24.8831 14.8886 24.8855 14.9123 24.8895 14.936C25.1524 16.4839 24.8645 18.0857 24.079 19.4463C23.1743 21.0132 21.7119 22.1331 19.9611 22.5996C18.2097 23.0663 16.3795 22.8235 14.8074 21.9159C14.7965 21.9097 14.7854 21.9044 14.7743 21.899C15.1113 21.6428 15.4283 21.3655 15.724 21.0689L21.6694 19.4758C21.9404 19.4032 22.1011 19.1247 22.0285 18.8538C21.9559 18.5829 21.6773 18.422 21.4065 18.4947L16.8319 19.7204C17.3345 18.9726 17.7278 18.1479 17.9965 17.2656L22.0779 16.172C22.3489 16.0995 22.5097 15.8209 22.437 15.55C22.3645 15.2791 22.0858 15.1183 21.8151 15.1909L18.812 15.9956L19.9412 14.0395L22.3277 13.4001C22.5987 13.3275 22.7595 13.049 22.6868 12.7781C22.6142 12.5072 22.3356 12.3463 22.0649 12.4189L20.6595 12.7955L21.7401 10.9238C21.8804 10.6809 21.7971 10.3703 21.5543 10.2301C21.3113 10.0898 21.0007 10.173 20.8605 10.4159L19.7799 12.2876L19.4033 10.8823C19.3307 10.6113 19.0522 10.4505 18.7814 10.5231C18.5104 10.5957 18.3496 10.8742 18.4222 11.1451L19.0617 13.5316L18.4009 14.6761C18.4204 13.0505 18.0044 11.4439 17.1708 10C16.121 8.18176 14.4642 6.76963 12.5037 6.02153C12.5005 6.02015 12.4972 6.01878 12.4939 6.01741L10.196 5.08476C9.93587 4.97929 9.63992 5.10452 9.53445 5.36437C9.42897 5.62432 9.55415 5.92047 9.81405 6.02594L12.0911 6.95006C12.1014 6.95478 12.1119 6.95915 12.1226 6.96321C13.874 7.62647 15.3544 8.88528 16.2911 10.5078C17.3815 12.3964 17.6691 14.5979 17.101 16.7067C16.5769 18.6519 15.3822 20.303 13.7135 21.4062L12.8612 19.93L14.709 13.0341C14.7816 12.7631 14.6208 12.4847 14.3499 12.4121C14.0788 12.3395 13.8005 12.5003 13.7279 12.7712L12.1431 18.6861L10.2629 15.4295L11.5448 10.6455C11.6174 10.3745 11.4566 10.0961 11.1856 10.0234C10.9146 9.95082 10.6363 10.1116 10.5637 10.3826L9.5447 14.1855L8.06255 11.6183L8.83458 8.73725C8.9072 8.46629 8.74642 8.18785 8.47545 8.11524C8.20438 8.04267 7.9261 8.20344 7.85349 8.47436L7.3443 10.3743L5.9402 7.94233C5.79999 7.69944 5.48937 7.61616 5.24648 7.75647C5.00354 7.89667 4.92031 8.2073 5.06062 8.45019L6.46472 10.8822L4.56479 10.3731C4.29377 10.3005 4.01544 10.4613 3.94282 10.7322C3.87021 11.0032 4.03098 11.2816 4.30195 11.3542L7.18297 12.1262L8.66512 14.6934L4.86232 13.6745C4.5913 13.6018 4.31297 13.7627 4.24035 14.0336C4.16773 14.3046 4.32851 14.583 4.59947 14.6556L9.38337 15.9375L11.2636 19.1941L5.34885 17.6093C5.07778 17.5367 4.7995 17.6975 4.72689 17.9684C4.65427 18.2394 4.81504 18.5178 5.08601 18.5904L11.9818 20.4382L12.8341 21.9142C8.99632 23.8269 4.27331 22.4494 2.10713 18.6975C1.16027 17.0575 0.813328 15.1268 1.13025 13.261C1.13457 13.2358 1.13686 13.2107 1.13726 13.1856L2.58742 3.09312L5.95173 4.45858C6.21188 4.5641 6.50778 4.43888 6.61326 4.17898C6.71873 3.91903 6.59355 3.62287 6.33365 3.5174L2.36805 1.90784C2.22337 1.84919 2.05955 1.86026 1.92417 1.938C1.78873 2.01575 1.69662 2.15154 1.67437 2.30622L0.122297 13.1061C0.119809 13.1232 0.118285 13.1403 0.117574 13.1574C-0.219512 15.2352 0.173637 17.3802 1.2273 19.2051C2.92405 22.1441 6.01566 23.7879 9.19375 23.7879C10.5974 23.7879 12.0176 23.466 13.3422 22.7946L13.9664 23.8756C14.0605 24.0386 14.2312 24.1297 14.4067 24.1297C14.4928 24.1297 14.5802 24.1077 14.6601 24.0616C14.9031 23.9214 14.9863 23.6107 14.846 23.3678L14.6146 22.967C15.7368 23.5495 16.9607 23.8476 18.1993 23.8476C18.8742 23.8476 19.5535 23.7594 20.2226 23.5811C22.2361 23.0445 23.9181 21.7564 24.9587 19.9541C25.8519 18.4071 26.1856 16.5889 25.9011 14.8274Z" fill="white"></path>
                                    <path d="M8.39203 4.39586C8.29763 4.30141 8.16662 4.24707 8.03301 4.24707C7.8994 4.24707 7.76839 4.30141 7.67394 4.39586C7.57948 4.49082 7.52515 4.62133 7.52515 4.75493C7.52515 4.889 7.57943 5.01955 7.67394 5.11452C7.76839 5.20902 7.8994 5.2633 8.03301 5.2633C8.16657 5.2633 8.29763 5.20897 8.39203 5.11452C8.48699 5.01955 8.54087 4.88849 8.54087 4.75493C8.54087 4.62138 8.48699 4.49082 8.39203 4.39586Z" fill="white"></path>
                                    <path d="M22.541 8.85474L22.5379 8.85057C22.3731 8.62363 22.0555 8.57326 21.8286 8.73809C21.6016 8.90288 21.5512 9.22052 21.716 9.44741L21.7191 9.45152C21.8185 9.58833 21.9734 9.661 22.1305 9.661C22.2339 9.661 22.3384 9.62946 22.4285 9.56405C22.6554 9.39927 22.7058 9.08168 22.541 8.85474Z" fill="white"></path>
                                </g>
                                <defs>
                                    <clippath id="clip0">
                                        <rect fill="white" height="26" width="26"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                            <span>  Inovativní složení  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chart">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="chart__content">
                <h2 class="s-title">  Jak se úroveň kolagenu mění s věkem  </h2>
                <div class="chart__inner">
                    <div class="chart__img">
                        <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/chart-img.png"/>
                        <span class="y-sign">  Úroveň kolagenu  </span>
                        <span class="x-sign">  Věk  </span>
                    </div>
                    <div class="chart__description">
                        <ul class="chart__list">
                            <li>  Přirozené stárnutí  </li>
                            <li>  Používání kosmetiky proti stárnutí  </li>
                            <li><b>  Používání Moleculica  </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="progress">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--2 parallax" data-rellax-speed="3">
                    <span></span>
                </div>
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="progress__content">
                <div class="progress__caption">
                    <h2 class="s-title">  Nahrazení každodenní péče produktovou řadou Moleculica </h2>
                    <p>  Klinické studie provedené pod dohledem dermatologů   <b>  zahrnovaly více než 1000 žen ve věku 35-60 let s různými typy pleti.  </b></p>
                </div>
                <div class="progress__slider-wrapper">
                    <div class="progress__slider">
                        <div class="progress__item">
                            <div class="item-inner">
                                <p><b>  85 % méně výrazné  </b>   pigmentace;  </p>
                                <div class="progress-img">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/progress-img1.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="progress__item">
                            <div class="item-inner">
                                <div class="progress-img">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/progress-img2.jpg"/>
                                </div>
                                <p><b>  97%  </b>   hladší pleť;  </p>
                            </div>
                        </div>
                        <div class="progress__item">
                            <div class="item-inner">
                                <p>  Vyhlazení jemných vrásek   <b>  o 92%;  </b></p>
                                <div class="progress-img">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/progress-img3.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="progress__item">
                            <div class="item-inner">
                                <div class="progress-img">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/progress-img4.jpg"/>
                                </div>
                                <p><b>  68%  </b>   elastičtější pleť;  </p>
                            </div>
                        </div>
                        <div class="progress__item">
                            <div class="item-inner">
                                <p>  Zmírnění suché pleti   <b>  o 98%;  </b></p>
                                <div class="progress-img">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/progress-img5.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--6 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--7 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="doctor__content">
                <div class="doctor__caption">
                    <h2 class="s-title">  Odborníci doporučují produktovou řadu Moleculica  </h2>
                </div>
                <div class="doctor__description">
                    <p>  Všichni potřebují péči - kosmetické prodedury, jako je botox, nemohou nahradit správnou péči o pleť.  </p>
                    <p>  Moleculica funguje jak pro zralou, tak pro mladou pleť.   <b>  Krém funguje jako bariéra proti agresivním vlivům prostředí a zároveň nezpůsobuje závislost.  </b>   Moleculica vytváří zásobu esenciálních prvků a dodává pleti kyslík. Díky tomu dochází k rychlé regeneraci pleti a omezení ztráty hydratace.  </p>
                    <p><b>  Pro zmírnění projevů stárnutí dodržujte tento snadný postup, dokud nedosáhnete požadovaných výsledků.  </b></p>
                    <div class="doctor__img">
                        <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/doctor-img.png"/>
                        <div class="doctor__sign">
                            <span><b>  Anna Janatová,  </b>   kosmetoložka  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-use">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
            </div>
            <div class="how-use__content">
                <h2 class="s-title">
                    Jak používat Moleculica
                </h2>
                <div class="how-use__composition">
                    <ul class="how-use__list">
                        <li>
                            <div class="list-inner">
                                <div class="number">1</div>
                                <p><b>  Ráno  </b></p>
                                <p>  Vyčistěte si pleť, naneste základní péči a nechejte ji vstřebat.  </p>
                            </div>
                        </li>
                        <li>
                            <div class="list-inner">
                                <div class="number">2</div>
                                <p><b>  Přes den  </b></p>
                                <p><b>  Naneste masku, nechejte ji působit 15-20 minut. Používejte 2-3x týdně na vyčištěnou pleť.  </b>   Pro maximální výsledky po použití masky naneste základní krém.  </p>
                            </div>
                        </li>
                        <li>
                            <div class="list-inner">
                                <div class="number">3</div>
                                <p><b>  Večer  </b></p>
                                <p>  Po vyčištění pleti naneste speciální noční krém a nechejte ho vstřebat.  </p>
                            </div>
                        </li>
                    </ul>
                    <div class="how-use__img">
                        <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/how-product.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--6 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--7 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="reviews__content">
                <div class="reviews__caption">
                    <h2 class="main-title">
                        Moleculica
                    </h2>
                    <div class="subtitle">
                        Vraťte čas zpátky!
                    </div>
                    <div class="reviews__item only-desktop">
                        <div class="item-inner">
                            <div class="reviews__header">
                                <div class="ava">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/ava1.jpg"/>
                                </div>
                                <div class="reviews__author">
                                    <p>  Jana Horáková, 42 let  </p>
                                    <div class="rate">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="reviews__message">  Dvanáct let jsem chodila na ty nejdražší kosmetické procedury, ale nedosáhla jsem žádných výsledků. Zkusila jsem denní krém Moleculica a výsledky se dostavily už za týden. Pleť byla každý den pevnější a elastičtějí. Rozhodla jsem se tedy koupit si i noční krém a masku. Po měsíci používání mi zmizely vrásky na čele. Tyto produkty jsou rozhodně levnější a lepší, než všechny kosmetické procedury. Nyní všechny kosmetičky nabízejí Botox. Je skvělé, že jsem našla lepší alternativu.  </p>
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/comm1.jpg"/>
                        </div>
                    </div>
                </div>
                <div class="reviews__slider">
                    <div class="reviews__item">
                        <div class="item-inner">
                            <div class="reviews__header">
                                <div class="ava">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/ava1.jpg"/>
                                </div>
                                <div class="reviews__author">
                                    <p>  Jana Horáková, 42 let  </p>
                                    <div class="rate">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="reviews__message">  Dvanáct let jsem chodila na ty nejdražší kosmetické procedury, ale nedosáhla jsem žádných výsledků. Zkusila jsem denní krém Moleculica a výsledky se dostavily už za týden. Pleť byla každý den pevnější a elastičtějí. Rozhodla jsem se tedy koupit si i noční krém a masku. Po měsíci používání mi zmizely vrásky na čele. Tyto produkty jsou rozhodně levnější a lepší, než všechny kosmetické procedury. Nyní všechny kosmetičky nabízejí Botox. Je skvělé, že jsem našla lepší alternativu.  </p>
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/comm1.jpg"/>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="item-inner">
                            <div class="reviews__header">
                                <div class="ava">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/ava2.jpg"/>
                                </div>
                                <div class="reviews__author">
                                    <p>  Petra Blatná, 34 let  </p>
                                    <div class="rate">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="reviews__message">  Molekulární kosmetika pro mě byla novým objevem. Mám smíšenou pleť náchylnou k vysušení v chladném počasí a mastnou v létě. Celá produktová řada je pro mě perfektní, mám z toho velkou radost. Bylo pro mě vždy těžké najít vhodné kosmetické produkty. Po šesti měsících používání mám viditelně omlazenou pleť a začala jsem vypadat skvěle, jako hollywoodská hvězda))  </p>
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/comm2.jpg"/>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="item-inner">
                            <div class="reviews__header">
                                <div class="ava">
                                    <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/ava3.jpg"/>
                                </div>
                                <div class="reviews__author">
                                    <p>  Hana Peterková, 57 let  </p>
                                    <div class="rate">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="reviews__message">  Vždy jsem vypadala mladší, než ve skutečnosti jsem, i když jsem nikdy nepoužívala moc produktů. Jakmile mi ale bylo 45 let, všechno se výrazně změnilo. Bylo pro mě těžké sledovat, jak se ze mě stává stará žena. Začala jsem si kupovat kosmetiku proti stárnutí, ale moc mi to nepomohlo. Moje dcera mi dala Moleculica. Jen tento jeden krém dokázal nemožné. Nejen že zastavil stárnutí mojí pleti, ale také mě zbavil suché pleti a vrásek. Všichni říkají, že vypadám mnohem mladší. Mohu to doporučit každému, bez ohledu na věk.  </p>
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/comm3.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="steps">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
            </div>
            <div class="steps__content">
                <h2 class="s-title">  Jak objednat Moleculica?  </h2>
                <ul class="steps__list">
                    <li>
                        <div class="number"><span>1</span></div>
                        <p><b>  Vyplňte objednávkový  </b>   formulář  </p>
                        <div class="steps__img">
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/steps-img1.png"/>
                        </div>
                    </li>
                    <li>
                        <div class="number"><span>2</span></div>
                        <div class="steps__img">
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/steps-img2.png"/>
                        </div>
                        <p><b>  Počkejte, až vám zavolá  </b>   operátor  </p>
                    </li>
                    <li>
                        <div class="number"><span>3</span></div>
                        <p><b>  Nechejte si diskrétně poslat </b>   svůj balíček  </p>
                        <div class="steps__img">
                            <img alt="" src="{{ asset('/') }}innodermFiles/innoderm2/steps-img3.png"/>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="limit">
            <div class="decor">
                <div class="decor__element decor--1 parallax" data-rellax-speed="-3">
                    <span></span>
                </div>
                <div class="decor__element decor--2 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--3 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--4 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--5 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
                <div class="decor__element decor--6 parallax" data-rellax-speed="2">
                    <span></span>
                </div>
                <div class="decor__element decor--7 parallax" data-rellax-speed="-2">
                    <span></span>
                </div>
            </div>
            <div class="footer__content">
                <div class="footer__description">
                    <div class="title-wrapper">
                        <h1 class="main-title">
                            Moleculica
                        </h1>
                        <div class="subtitle">
                            <span>  nejlepší řešení pro stárnoucí pleť  </span>
                        </div>
                    </div>
                    <div class="footer__product">
                        <img alt="" class="img-product" src="{{ asset('/') }}innodermFiles/innoderm2/footer-product.png"/>
                        <div class="circle">
                            <div class="circle__inner">
                                <svg class="circle__img" fill="none" height="26" viewbox="0 0 26 26" width="26" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M25.9011 14.8274C25.9003 14.8119 25.8988 14.7963 25.8966 14.7808L24.5934 5.71288C24.5712 5.55855 24.4794 5.42297 24.3443 5.34512C24.2094 5.26727 24.046 5.25569 23.9012 5.31389L17.9038 7.72508C17.6435 7.82969 17.5175 8.12549 17.622 8.3857C17.7267 8.646 18.0225 8.77209 18.2827 8.66748L23.6799 6.49755L24.8825 14.8651C24.8831 14.8886 24.8855 14.9123 24.8895 14.936C25.1524 16.4839 24.8645 18.0857 24.079 19.4463C23.1743 21.0132 21.7119 22.1331 19.9611 22.5996C18.2097 23.0663 16.3795 22.8235 14.8074 21.9159C14.7965 21.9097 14.7854 21.9044 14.7743 21.899C15.1113 21.6428 15.4283 21.3655 15.724 21.0689L21.6694 19.4758C21.9404 19.4032 22.1011 19.1247 22.0285 18.8538C21.9559 18.5829 21.6773 18.422 21.4065 18.4947L16.8319 19.7204C17.3345 18.9726 17.7278 18.1479 17.9965 17.2656L22.0779 16.172C22.3489 16.0995 22.5097 15.8209 22.437 15.55C22.3645 15.2791 22.0858 15.1183 21.8151 15.1909L18.812 15.9956L19.9412 14.0395L22.3277 13.4001C22.5987 13.3275 22.7595 13.049 22.6868 12.7781C22.6142 12.5072 22.3356 12.3463 22.0649 12.4189L20.6595 12.7955L21.7401 10.9238C21.8804 10.6809 21.7971 10.3703 21.5543 10.2301C21.3113 10.0898 21.0007 10.173 20.8605 10.4159L19.7799 12.2876L19.4033 10.8823C19.3307 10.6113 19.0522 10.4505 18.7814 10.5231C18.5104 10.5957 18.3496 10.8742 18.4222 11.1451L19.0617 13.5316L18.4009 14.6761C18.4204 13.0505 18.0044 11.4439 17.1708 10C16.121 8.18176 14.4642 6.76963 12.5037 6.02153C12.5005 6.02015 12.4972 6.01878 12.4939 6.01741L10.196 5.08476C9.93587 4.97929 9.63992 5.10452 9.53445 5.36437C9.42897 5.62432 9.55415 5.92047 9.81405 6.02594L12.0911 6.95006C12.1014 6.95478 12.1119 6.95915 12.1226 6.96321C13.874 7.62647 15.3544 8.88528 16.2911 10.5078C17.3815 12.3964 17.6691 14.5979 17.101 16.7067C16.5769 18.6519 15.3822 20.303 13.7135 21.4062L12.8612 19.93L14.709 13.0341C14.7816 12.7631 14.6208 12.4847 14.3499 12.4121C14.0788 12.3395 13.8005 12.5003 13.7279 12.7712L12.1431 18.6861L10.2629 15.4295L11.5448 10.6455C11.6174 10.3745 11.4566 10.0961 11.1856 10.0234C10.9146 9.95082 10.6363 10.1116 10.5637 10.3826L9.5447 14.1855L8.06255 11.6183L8.83458 8.73725C8.9072 8.46629 8.74642 8.18785 8.47545 8.11524C8.20438 8.04267 7.9261 8.20344 7.85349 8.47436L7.3443 10.3743L5.9402 7.94233C5.79999 7.69944 5.48937 7.61616 5.24648 7.75647C5.00354 7.89667 4.92031 8.2073 5.06062 8.45019L6.46472 10.8822L4.56479 10.3731C4.29377 10.3005 4.01544 10.4613 3.94282 10.7322C3.87021 11.0032 4.03098 11.2816 4.30195 11.3542L7.18297 12.1262L8.66512 14.6934L4.86232 13.6745C4.5913 13.6018 4.31297 13.7627 4.24035 14.0336C4.16773 14.3046 4.32851 14.583 4.59947 14.6556L9.38337 15.9375L11.2636 19.1941L5.34885 17.6093C5.07778 17.5367 4.7995 17.6975 4.72689 17.9684C4.65427 18.2394 4.81504 18.5178 5.08601 18.5904L11.9818 20.4382L12.8341 21.9142C8.99632 23.8269 4.27331 22.4494 2.10713 18.6975C1.16027 17.0575 0.813328 15.1268 1.13025 13.261C1.13457 13.2358 1.13686 13.2107 1.13726 13.1856L2.58742 3.09312L5.95173 4.45858C6.21188 4.5641 6.50778 4.43888 6.61326 4.17898C6.71873 3.91903 6.59355 3.62287 6.33365 3.5174L2.36805 1.90784C2.22337 1.84919 2.05955 1.86026 1.92417 1.938C1.78873 2.01575 1.69662 2.15154 1.67437 2.30622L0.122297 13.1061C0.119809 13.1232 0.118285 13.1403 0.117574 13.1574C-0.219512 15.2352 0.173637 17.3802 1.2273 19.2051C2.92405 22.1441 6.01566 23.7879 9.19375 23.7879C10.5974 23.7879 12.0176 23.466 13.3422 22.7946L13.9664 23.8756C14.0605 24.0386 14.2312 24.1297 14.4067 24.1297C14.4928 24.1297 14.5802 24.1077 14.6601 24.0616C14.9031 23.9214 14.9863 23.6107 14.846 23.3678L14.6146 22.967C15.7368 23.5495 16.9607 23.8476 18.1993 23.8476C18.8742 23.8476 19.5535 23.7594 20.2226 23.5811C22.2361 23.0445 23.9181 21.7564 24.9587 19.9541C25.8519 18.4071 26.1856 16.5889 25.9011 14.8274Z" fill="white"></path>
                                        <path d="M8.39203 4.39586C8.29763 4.30141 8.16662 4.24707 8.03301 4.24707C7.8994 4.24707 7.76839 4.30141 7.67394 4.39586C7.57948 4.49082 7.52515 4.62133 7.52515 4.75493C7.52515 4.889 7.57943 5.01955 7.67394 5.11452C7.76839 5.20902 7.8994 5.2633 8.03301 5.2633C8.16657 5.2633 8.29763 5.20897 8.39203 5.11452C8.48699 5.01955 8.54087 4.88849 8.54087 4.75493C8.54087 4.62138 8.48699 4.49082 8.39203 4.39586Z" fill="white"></path>
                                        <path d="M22.541 8.85474L22.5379 8.85057C22.3731 8.62363 22.0555 8.57326 21.8286 8.73809C21.6016 8.90288 21.5512 9.22052 21.716 9.44741L21.7191 9.45152C21.8185 9.58833 21.9734 9.661 22.1305 9.661C22.2339 9.661 22.3384 9.62946 22.4285 9.56405C22.6554 9.39927 22.7058 9.08168 22.541 8.85474Z" fill="white"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0">
                                            <rect fill="white" height="26" width="26"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                                <span>  Inovativní složení  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <form action="{{$orderRoute}}" class="form" id="order_form" method="POST">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="form-inner">
                                <div class="price-wrapper">
                                    <div class="new-price">
                                        <span>{{ $prices[1]['amount'] }}</span> RSD
                                    </div>
                                    <div class="old-price">
                                        <span>{{ $prices[1]['originalPrice'] }}</span> RSD
                                    </div>
                                </div>
                                <div class="price-footnote">Unesite podatke za dostavu</div>

                                <input class="inp" name="name" placeholder="Ime i prezime" type="text"/>
                                <input class="inp only_number" name="phone" placeholder="Telefon" required="" type="tel"/>
                                <button class="btn js_pay_online_secondpage">
                                    <span class="button__text">  Poruči  </span>
                                    <div class="blobs">
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                        <div class="blob"></div>
                                    </div>
                                </button>
                                <div class="taxes">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('/') }}innodermFiles/innoderm2/detect.js"></script>
<script src="{{ asset('/') }}innodermFiles/innoderm2/rellax.min.js"></script>
<script src="{{ asset('/') }}innodermFiles/innoderm2/slick.min.js"></script>
<script src="{{ asset('/') }}innodermFiles/innoderm2/common.js"></script>
@include('components.pixel_footer')
</body>
</html>