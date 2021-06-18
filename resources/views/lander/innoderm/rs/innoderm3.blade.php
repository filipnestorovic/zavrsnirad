<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/s3_leaf.png" type="image/png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:300,300i,400,400i,600,700&amp;display=swap&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"/>
    <link href="{{ asset('/') }}innodermFiles/innoderm3/style.css" rel="stylesheet"/>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/slick.min.js"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/jquery.event.move.js"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/jquery.twentytwenty.js"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/jquery.matchHeight-min.js"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/spincrement.min.js"></script>
    <script src="{{ asset('/') }}innodermFiles/innoderm3/main.js"></script>
</head>
<body>
@include('components.display_errors')
<div class="wrapper s__main">
    <div class="wrapper__inner">
        <div class="header">
            <div class="header__main">
                <div class="container">
                    <div class="header__top">
                        <div class="header__top--table">
                            <div class="header__top--cell">
                                <div class="header__logo">
                                    <div class="header__logo--table">
                                        <div class="header__logo--cell">
                                            <div class="header__logo--img">
                                                <svg>
                                                    <use href="#logo"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="header__logo--cell">
                                            <div class="header__logo--title">Innoderm</div>
                                            <div class="header__logo--subtitle">Koncentrát na omladenie tváre</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__top--cell">
                                <a class="header__nav-toggle" href="#">
                                    <div class="header__nav-toggle--item"></div>
                                    <div class="header__nav-toggle--item"></div>
                                    <div class="header__nav-toggle--item"></div>
                                </a>
                                <div class="header__nav">
                                    <ul class="header__nav--list">
                                        <li class="header__nav--item">
                                            <a class="header__nav--item-link js-link" href="#description">O produkte</a></li>
                                        <li class="header__nav--item">
                                            <a class="header__nav--item-link js-link" href="#result">Výsledky</a>
                                        </li>
                                        <li class="header__nav--item">
                                            <a class="header__nav--item-link js-link" href="#review">Recenzie</a></li>
                                        <li class="header__nav--item">
                                            <a class="header__nav--item-link js-link" href="#form">Objednať</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__content">
                        <div class="title header__title"><span>Inno</span><span>de</span><span>rm</span></div>
                        <div class="header__subtitle">Udržte svoj vek <span>v tajnosti</span></div>
                        <div class="header__btn--wrapper">
                            <a class="btn btn--light header__btn js-link" href="#form"> <span class="btn__logo" href="#"><svg><use href="#logo"></use></svg></span>Vyskúšajte to
                            </a>
                        </div>
                        <div class="header__note">
                            <p class="header__note--text">Na koľko vyzeráte?</p>
                            <p class="header__note--text">Na koľko sa cítite?</p>
                            <p class="header__note--text"><span>Rechiol</span> je váš kľúč k harmónii duše a tela</p>
                            <div class="header__note--caption">Zistiť viac</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__video">
                <video autoplay="" class="avid" loop="" muted="" playsinline="">
                    <source src="{{ asset('/') }}innodermFiles/innoderm3/header_bg.mp4"/>
                    <source src="{{ asset('/') }}innodermFiles/innoderm3/header_bg.webm"/>
                </video>
            </div>
        </div>
        <div class="problem">
            <div class="container">
                <div class="problem__section">
                    <div class="problem__content">
                        <div class="title problem__title">Príčina starnutia <span>Nedostatok retinolu</span></div>
                        <div class="problem__subtitle">Po 35 rokoch vaša pokožka nevyhnutne starne. Produkcia
                            <span>retinolu</span>, ktorý je prírodným stimulátorom mladistvosti pokožky, sa spomaľuje.
                        </div>
                    </div>
                    <div class="problem__items">
                        <div class="problem__item" data-unshow="">
                            <div class="problem__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/problem_01.jpg"/></div>
                            <div class="problem__name">mimické vrásky</div>
                        </div>
                        <div class="problem__item" data-unshow="">
                            <div class="problem__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/problem_02.jpg"/></div>
                            <div class="problem__name">línie úsmevu</div>
                        </div>
                        <div class="problem__item" data-unshow="">
                            <div class="problem__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/problem_03.jpg"/></div>
                            <div class="problem__name">čierne kruhy pod očami</div>
                        </div>
                        <div class="problem__item" data-unshow="">
                            <div class="problem__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/problem_04.jpg"/></div>
                            <div class="problem__name">Menej definované kontúry tváre</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="about__section">
                    <div class="about__content">
                        <div class="title about__title" data-horizontal="2" data-unshow="">
                            <span>Rechiol</span> obsahuje moderný analóg retinolu - <span>bakuchiol</span>
                        </div>
                        <div class="about__subtitle" data-horizontal="2" data-unshow="">Keď bakuchiol preniká do kožných buniek, aktivuje chemické dráhy zodpovedné za tvorbu kolagénu a znižuje riziko predčasného starnutia.</div>
                        <div class="about__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                    </div>
                    <div class="about__prod"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                </div>
            </div>
        </div>
        <div class="description" id="description">
            <div class="description__inner">
                <div class="description__heading">
                    <div class="container">
                        <div class="description__heading--section">
                            <div class="description__content">
                                <div class="title description__title">Aké je tajomstvo Rechiolu?</div>
                                <div class="description__subtitle">
                                    <span>Účinná látka Rechiolu -</span> bakuchiol - je náhrada retinolu na rastlinnej báze. Tento fyto koncentrát sa vyrába zo vzácnej rastliny Psoralea corylifolia pochádzajúcej z Indie.
                                </div>
                                <div class="description__text">Bakuchiol umožňuje produkciu kolagénu typu I, III a IV a potláča enzýmy, ktoré narúšajú metabolizmus bielkovín a buniek kože. Neovplyvňuje iba povrch epidermy, ale preniká aj do hlbokých vrstiev derm, čo umožňuje z mechanizmus obnovy buniek zvnútra.</div>
                                <div class="description__note">Na rozdiel od syntetického retinolu používaného v estetickej medicíne, pokožka bakuchiol neodmieta, nespôsobuje alergiu. 100 % nahrádza prírodný retinol, stimuluje tvorbu kolagénu, vyhladzuje vrásky, zlepšuje textúru pokožky, zmierňuje nedokonalosti pleti a pigmentové škvrny.</div>
                            </div>
                        </div>
                        <div class="title description__decor-text">
                            <p>Rechiol</p>
                            <p>Rechiol</p>
                            <p>Rechiol</p>
                            <p>Rechiol</p>
                            <p>Rechiol</p>
                        </div>
                    </div>
                    <div class="description__decor-logo">
                        <svg>
                            <use href="#logo"></use>
                        </svg>
                    </div>
                </div>
                <div class="description__items">
                    <div class="container">
                        <div class="description__items--section">
                            <div class="description__item" data-unshow="">
                                <div class="description__img">
                                    <video autoplay="" loop="" muted="" playsinline="">
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-01.mp4"/>
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-01.webm"/>
                                    </video>
                                </div>
                                <div class="description__item--content">
                                    <div class="description__name">tvaruje a zdvíha kontúry tváre </div>
                                    <ul class="description__list">
                                        <li class="description__list--item">Pokles líc</li>
                                        <li class="description__list--item">Menej definované kontúry tváre</li>
                                        <li class="description__list--item">Opuch</li>
                                        <li class="description__list--item">Oslabená čeľusť</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="description__item" data-unshow="">
                                <div class="description__img">
                                    <video autoplay="" loop="" muted="" playsinline="">
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-02.mp4"/>
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-02.webm"/>
                                    </video>
                                </div>
                                <div class="description__item--content">
                                    <div class="description__name">vyhladzuje mimické vrásky</div>
                                    <ul class="description__list">
                                        <li class="description__list--item">línie úsmevu</li>
                                        <li class="description__list--item">vačky pod očami</li>
                                        <li class="description__list--item">stračie nôžky v kútikoch</li>
                                        <li class="description__list--item">periorálne vrásky</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="description__item" data-unshow="">
                                <div class="description__img">
                                    <video autoplay="" loop="" muted="" playsinline="">
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-03.mp4"/>
                                        <source src="{{ asset('/') }}innodermFiles/innoderm3/item-03.webm"/>
                                    </video>
                                </div>
                                <div class="description__item--content">
                                    <div class="description__name">zabraňuje tvorbe nových vrások</div>
                                    <ul class="description__list">
                                        <li class="description__list--item">stimuluje produkciu kolagénu</li>
                                        <li class="description__list--item">zmierňuje nedokonalosti</li>
                                        <li class="description__list--item">bojuje proti pigmentovým škvrnám</li>
                                        <li class="description__list--item">robí pokožku odolnejšou</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description__decor description__decor--1"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--2"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--3"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--4"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--5"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--6"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-1.png"/></div>
            <div class="description__decor description__decor--7"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-2.png"/></div>
            <div class="description__decor description__decor--8"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-2.png"/></div>
            <div class="description__decor description__decor--9"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_leaf-3.png"/></div>
            <div class="description__decor description__decor--10"><img src="{{ asset('/') }}innodermFiles/innoderm3/decor_flower.png"/></div>
        </div>
        <div class="test">
            <div class="container">
                <div class="test__section">
                    <div class="test__content">
                        <div class="title test__title" data-unshow="">Výsledky dvojitého slepého testovania
                            <span>retinolu a bakuchiolu</span>
                        </div>
                        <div class="test__subtitle" data-unshow="">Dvojité slepé testovanie je metóda, ktorá si vyžaduje utajenie produktu pred testovanými subjektmi a výskumníkmi, pričom sa musia riadiť iba vlastnými skúsenosťami.</div>
                    </div>
                    <div class="test__info">
                        <div class="test__info--title"><span>Po 4 týždňoch testovania</span> zahŕňajúcich 50 testovaných subjektov:</div>
                        <table class="table">
                            <tr class="table__tr">
                                <td class="table__td table__td--1"><p class="test__text">pokožka bola hladšia</p></td>
                                <td class="table__td table__td--2">
                                    <div class="test__progress" data-prog="92">
                                        <div class="test__progress--num" data-to="92"></div>
                                    </div>
                                    <div class="test__progress" data-prog="73">
                                        <div class="test__progress--num" data-to="73"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td table__td--1">
                                    <p class="test__text">menej vrások, kontúry tváre boli posilnené </p></td>
                                <td class="table__td table__td--2">
                                    <div class="test__progress" data-prog="92">
                                        <div class="test__progress--num" data-to="92"></div>
                                    </div>
                                    <div class="test__progress" data-prog="53">
                                        <div class="test__progress--num" data-to="53"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td table__td--1"><p class="test__text">pleť sa stala rovnomernejšou</p></td>
                                <td class="table__td table__td--2">
                                    <div class="test__progress" data-prog="82">
                                        <div class="test__progress--num" data-to="82"></div>
                                    </div>
                                    <div class="test__progress" data-prog="41">
                                        <div class="test__progress--num" data-to="41"></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="test__legend">
                            <div class="test__legend--item">Krém s 0,5% <span>bakuchiolu</span></div>
                            <div class="test__legend--item">Krém s 0,5% <span>retinolu</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit">
            <div class="container">
                <div class="benefit__section">
                    <div class="benefit__content">
                        <div class="title benefit__title" data-horizontal="2" data-unshow="">Rechiol</div>
                        <div class="benefit__subtitle" data-horizontal="2" data-unshow="">Starostlivosť o pokožku 24/7</div>
                        <div class="benefit__text" data-horizontal="2" data-unshow="">
                            <span>Koncentrát na omladenie tváre Rechiol</span> má kumulatívny účinok. Čím častejšie ho používate, tým mladšie vyzeráte.
                        </div>
                        <div class="benefit__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                        <div class="benefit__btn--wrapper" data-horizontal="2" data-unshow="">
                            <a class="btn btn--light benefit__btn js-link" href="#form"><span class="btn__logo" href="#"><svg><use href="#logo"></use></svg></span>Vyskúšajte Rechiol
                            </a>
                        </div>
                    </div>
                    <div class="benefit__prod"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                </div>
            </div>
        </div>
        <div class="result" id="result">
            <div class="result__headeing">
                <div class="container">
                    <div class="result__heading--section">
                        <div class="title result__title" data-unshow="">Pozrite sa na výsledky
                            <span>používanie Rechiolu doma</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result__items">
                <div class="container">
                    <div class="result__items--section">
                        <div class="result__item">
                            <div class="result__name">Anna, 42 rokov</div>
                            <div class="result__text result__text--width">
                                <span>Problém:</span> predčasné starnutie, matná a ovisnutá pokožka nezodpovedá veku
                            </div>
                            <div class="result__group result__group--border">
                                <div class="result__group--item">
                                    <div class="result__img ">
                                        <div class="twenty">
                                            <img src="{{ asset('/') }}innodermFiles/innoderm3/result-before-1.jpg"/> <img src="{{ asset('/') }}innodermFiles/innoderm3/result-after-1.jpg"/>
                                        </div>
                                        <span class="result__img--before">Pred</span>
                                        <span class="result__img--after">Po 30 dňoch</span>
                                    </div>
                                    <div class="result__caption result__caption--left"><span><svg><use href="#target"></use></svg></span>Oblasť očí
                                    </div>
                                </div>
                                <div class="result__group--item">
                                    <div class="result__img ">
                                        <div class="twenty">
                                            <img src="{{ asset('/') }}innodermFiles/innoderm3/result-before-2.jpg"/> <img src="{{ asset('/') }}innodermFiles/innoderm3/result-after-2.jpg"/>
                                        </div>
                                        <span class="result__img--before">Pred</span>
                                        <span class="result__img--after">Po 30 dňoch</span>
                                    </div>
                                    <div class="result__caption result__caption--right"><span><svg><use href="#target"></use></svg></span>Nasolabiálne záhyby a kontúry tváre
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result__group">
                            <div class="result__group--item">
                                <div class="result__item">
                                    <div class="result__name result__name--left">Mariana, 56 rokov</div>
                                    <div class="result__text result__text--left">
                                        <span>Problém:</span> Malé vrásky okolo očí, nosa a úst, periorálne vrásky, matný tón pleti
                                    </div>
                                    <div class="result__img">
                                        <img src="{{ asset('/') }}innodermFiles/innoderm3/result_2.jpg"/> <span class="result__img--before">Pred</span>
                                        <span class="result__img--after">Po 30 dňoch</span>
                                    </div>
                                </div>
                            </div>
                            <div class="result__group--item">
                                <div class="result__item">
                                    <div class="result__name result__name--left">Irena, 47 rokov</div>
                                    <div class="result__text result__text--left">
                                        <span>Problém:</span> Pigmentové škvrny na tvári a krku kvôli láske k opaľovaniu
                                    </div>
                                    <div class="result__img">
                                        <img src="{{ asset('/') }}innodermFiles/innoderm3/result_3.jpg"/> <span class="result__img--before">Pred</span>
                                        <span class="result__img--after">Po 30 dňoch</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="expert">
            <div class="expert__inner">
                <div class="container">
                    <div class="expert__section">
                        <div class="expert__content">
                            <div class="expert__table">
                                <div class="expert__cell">
                                    <div class="expert__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/expert.jpg"/></div>
                                    <div class="expert__name">Alena Konečná</div>
                                    <div class="expert__post">kozmetický terapeut</div>
                                </div>
                                <div class="expert__cell">
                                    <p class="expert__text" data-unshow="">Nedostatok retinolu je problém, ktorému 90% žien čelí po dosiahnutí veku 35 rokov. Avšak tablety na báze retinolu sú karcinogénne a ovplyvňujú pečeň. Pílingy s retinolom sú účinné, ale spôsobujú veľa vedľajších účinkov: odlupovanie kože, svrbenie, dlhodobé zotavovanie. <span>Koncentrát na omladenie tváre Rechiol</span> je vhodnou náhradou týchto metód. Obsahuje bakuchiol - rastlinný analóg retinolu, ktorý intenzívne stimuluje obnovu buniek a umožňuje tvorbu kolagénu. Túto vzácnu prísadu je možné získať iba v Indii.
                                    </p>
                                    <p class="expert__text" data-unshow="">Rechiol redukuje hlboké vrásky za niekoľko týždňov, bojuje proti pigmentovým škvrnám a nedokonalostiam pleti, vďaka čomu je pokožka opäť pružná. Zameriava sa na problémové oblasti: stračie nôžky, línie okolo pier atď. Po použití sa pokožka neodlupuje, takže môžete Rechiol používať kedykoľvek, dokonca aj v lete.</p>
                                    <div class="expert__btn--wrapper" data-unshow="">
                                        <a class="btn btn--light expert__btn js-link" href="#form"><span class="btn__logo" href="#"><svg><use href="#logo"></use></svg></span>Vyskúšajte to
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title expert__decor-text">
                        <p>Rechiol Rechiol Rechiol</p>
                    </div>
                </div>
            </div>
            <div class="expert__decor" data-horizontal="2" data-unshow=""><img src="{{ asset('/') }}innodermFiles/innoderm3/expert_decor.png"/></div>
        </div>
        <div class="composition">
            <div class="container">
                <div class="composition__section">
                    <div class="composition__content">
                        <div class="title composition__title">Ako vyzerá formula prípravku <span>na omladenie pleti Rechiol?</span></div>
                    </div>
                    <div class="container-slider">
                        <div class="composition__items--wrapper">
                            <div class="composition__items slider">
                                <div class="composition__item composition__item--1" data-unshow="1">
                                    <div class="composition__img"><span><svg><use href="#bakuchiol"></use></svg></span></div>
                                    <div class="composition__name">Bakuchiol</div>
                                    <div class="composition__text">je rastlinný analóg retinolu, ktorý sa získava z indickej rastliny Psoralea corylifolia. Stimuluje tvorbu kolagénu, obnovuje pružnosť pokožky, bojuje proti vráskam a potláča produkciu melanínu. Táto zložka tiež odstraňuje škvrny a akné vďaka svojim antiseptickým vlastnostiam.</div>
                                </div>
                                <div class="composition__item composition__item--2" data-unshow="1">
                                    <div class="composition__img"><span><svg><use href="#olivia-oil"></use></svg></span></div>
                                    <div class="composition__name">Mandľový olej</div>
                                    <div class="composition__text">Hydratuje pokožku tváre a krku, bojuje proti fotostarnutiu, obnovuje bariérové ​​funkcie pokožky, saturuje ju vitamínmi a mastnými kyselinami.</div>
                                </div>
                                <!--<div class="composition__item composition__item--3" data-unshow="2">
                                <div class="composition__img"><span><svg><use href="#pepha-tight"></use></svg></span></div>
                                <div class="composition__name">PEPHA®-TIGHT</div>
                                <div class="composition__text">je komplex mikro rias pre dlhodobý účinok napnutia pleti. Chráni pokožku pred stresom a stimuluje štiepenie buniek dermy a pokožky. Výrazne znižuje množstvo vrások, znižuje škodlivý účinok UV lúčov.</div>
                                </div>-->
                                <div class="composition__item composition__item--3" data-unshow="2">
                                    <div class="composition__img"><span><svg><use href="#vitamin-c"></use></svg></span></div>
                                    <div class="composition__name">Vitamín C</div>
                                    <div class="composition__text">je silný prírodný antioxidant, čistí pokožku a chráni ju pred poškodením voľnými radikálmi. Má protizápalové vlastnosti, pomáha pri oprave rán, odstraňuje nežiaduce vekové škvrny.</div>
                                </div>
                                <div class="composition__item composition__item--4" data-unshow="2">
                                    <div class="composition__img"><span><svg><use href="#collagen"></use></svg></span></div>
                                    <div class="composition__name">Kolagén</div>
                                    <div class="composition__text">je proteín, na ktorom je založené spojivové tkanivo kože. Keď je človek mladý, telo produkuje kolagén samostatne, z dlhodobého hľadiska však jeho hladina klesá. Pokožka stráca svoju pružnosť, mení sa tvar tváre. Preto je po 35 rokoch vaša pokožka nevyhnutne potrebuje zabezpečenie kolagénu zvonka.</div>
                                </div>
                                <div class="composition__item composition__item--5" data-unshow="3">
                                    <div class="composition__img"><span><svg><use href="#solodka"></use></svg></span></div>
                                    <div class="composition__name">Extrakt zo sladkého drievka</div>
                                    <div class="composition__text">stimuluje tvorbu kolagénových vlákien, vyhladzuje vrásky, bojuje s opuchom.</div>
                                </div>
                            </div>
                            <div class="composition__decor"><img src="{{ asset('/') }}innodermFiles/innoderm3/composition_decor.png"/></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="composition__decor-logo">
                <svg>
                    <use href="#logo"></use>
                </svg>
            </div>
        </div>
        <div class="order">
            <div class="container">
                <div class="order__section">
                    <div class="oreder__content">
                        <div class="title order__title">Ako si objednať <span>Rechiol?</span></div>
                    </div>
                    <div class="order__items">
                        <div class="order__item" data-unshow="1">
                            <div class="order__img order__img--1"></div>
                            <div class="order__num"><span>1</span></div>
                            <div class="order__text">Na tomto webe vyplňte objednávkový formulár</div>
                            <a class="order__btn js-link" href="#form">Vyplniť formulár</a>
                        </div>
                        <div class="order__item" data-unshow="2">
                            <div class="order__img order__img--2"></div>
                            <div class="order__num"><span>2</span></div>
                            <div class="order__text">Počkajte, kým vám operátor zavolá späť</div>
                        </div>
                        <div class="order__item" data-unshow="3">
                            <div class="order__img order__img--3"></div>
                            <div class="order__num"><span>3</span></div>
                            <div class="order__text">Preberte si balík a buďte mladšími ako včera!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="review" id="review">
            <div class="container">
                <div class="review__section">
                    <div class="review__content">
                        <div class="title review__title">Recenzie skutočných kupujúcich <span>Rechiol</span></div>
                    </div>
                    <div class="container-slider">
                        <div class="review__items slider">
                            <div class="review__item" data-unshow="1">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-1.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Nora</div>
                                            <div class="review__age">37 rokov</div>
                                            <div class="review__rating" data-rating="5"></div>
                                            <div class="review__text">Nikdy som si nemyslela, že budem vyzerať lepšie v 29 ako v 22... Bez injekcií krásy a plastickej chirurgie. Používam Rechiol už 3 mesiace. Po použití je pokožka taká skvelá, že nepotrebujete žiadne púdre, makeup ani korektory.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(10)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item" data-unshow="1">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-2.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Elena</div>
                                            <div class="review__age">41 rokov</div>
                                            <div class="review__rating" data-rating="4"></div>
                                            <div class="review__text">Vďaka mojej drahej priateľke za Rechiol. Je to skvelý darček! Tento krém mi pomohol zdvihnúť kontúre tváre a odstrániť lícne vrásky.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(6)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item" data-unshow="2">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-3.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Olívia</div>
                                            <div class="review__age">39 rokov</div>
                                            <div class="review__rating" data-rating="3"></div>
                                            <div class="review__text">Od 22-23 rokov som mala mimické vrásky. Dlho som s nimi bojovala, ale sotva som dosiahla akýkoľvek výsledok. Masírovala som si tvár, používala ľudové recepty na starostlivosť o pleť, ako aj pílingy, podstúpila som kozmetické procedúry... Pomohol mi iba krém Rechiol.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(2)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item" data-unshow="2">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-4.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Laura</div>
                                            <div class="review__age">31 rokov</div>
                                            <div class="review__rating" data-rating="5"></div>
                                            <div class="review__text">Zloženie je ekologické, čo je pre mňa veľmi dôležité. Krém má ľahkú textúru, nie je lepkavý, ľahko sa roztiera po tvári, vonia pekne. Teraz mám menej vrások. Tento krém je ideálny na prevenciu predčasného starnutia.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(16)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item" data-unshow="3">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-5.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Radka</div>
                                            <div class="review__age">34 rokov</div>
                                            <div class="review__rating" data-rating="4"></div>
                                            <div class="review__text">Stračie nôžky pod očami začali miznúť, keď som začala používať tento krém. Žiadny iný produkt sa s nimi nedokázal vysporiadať, dokonca ani luxusné krémy a séra. Môj kozmetológ mi odporučil vyskúšať Rechiol.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(12)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item" data-unshow="3">
                                <div class="review__item--content">
                                    <div class="review__table">
                                        <div class="review__cell">
                                            <div class="review__ava"><img src="{{ asset('/') }}innodermFiles/innoderm3/ava-6.jpg"/></div>
                                        </div>
                                        <div class="review__cell">
                                            <div class="review__name">Agáta</div>
                                            <div class="review__age">44 rokov</div>
                                            <div class="review__rating" data-rating="5"></div>
                                            <div class="review__text">Moja duša je stále mladá, ale nanešťastie moja tvár už tak mladá nie je. Nechcem sa časom zmeniť na starú dámu. Preto som pred pol rokom prešla z bežných výrobkov starostlivosti o pleť na Rechiol. Používam ho dvakrát denne, aplikujem ho hneď po umytí tváre. Za 6 mesiacov nemám jedinú novú vrásku, tie staré sú teraz menej viditeľné.</div>
                                            <div class="review__vote">
                                                <div class="review__vote--like"><span><svg><use href="#like"></use></svg></span>(8)
                                                </div>
                                                <div class="review__vote--dislike"><span><svg><use href="#like"></use></svg></span>(0)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form" id="form">
            <div class="container">
                <div class="form__section">
                    <div class="form__content">
                        <div class="form__img"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                        <div class="title form__title">Rechiol.</div>
                        <div class="form__subtitle">Udržujte svoj vek v tajnosti</div>
                        <div class="form__discount">*K dispozícii je 50% zľava <span>vo vašom regióne</span></div>
                        <div class="form__wrapper">
                            <div class="price form__price">
                                <div class="price__new"><span class="js_new_price">{{ $prices[1]['amount'] }}</span> RSD</div>
                                <div class="price__old"><span class="js_old_price">{{ $prices[1]['originalPrice'] }}</span> RSD</div>
                            </div>
                            <form action="{{$orderRoute}}" method="post">
                                {{ csrf_field() }}
                                @include('lander.naturapharm.components.form_hidden_fields')
                                <div class="form__input--wrapper">
                                    <div class="form__input"><input name="name" placeholder="Ime i prezime" type="text"/></div>
                                    <div class="form__input">
                                        <input class="only_number" name="phone" placeholder="Telefon" type="text"/></div>
                                </div>
                                <div class="form__btn--wrapper">
                                    <button class="btn btn--form form__btn js_pre_toform button__text" type="button">
                                        <span class="btn__logo">
                                            {{--<svg><use href="#logo"></use></svg>--}}
                                        </span>Poruči
                                    </button>
                                </div>
                            </form>
                            <div class="toform"></div>
                        </div>
                    </div>
                    <div class="form__prod"><img src="{{ asset('/') }}innodermFiles/innoderm3/prod-1.png"/></div>
                </div>
                <div class="title form__decor-text">
                    <p>Rechiol</p>
                    <p>Rechiol</p>
                    <p>Rechiol</p>
                    <p>Rechiol</p>
                    <p>Rechiol</p>
                </div>
            </div>
        </div>
    </div>
</div>
<svg class="sprite" style="position: absolute; top: -10px; left: -10px; width: 1px; height: 1px; opacity: 0;" xmlns="http://www.w3.org/2000/svg">
    <symbol id="logo" viewbox="0 0 100 130">
        <path d="M0 0c20.8 30.5 59 3.5 65.5 37C48.4 15.4 8.5 38.9 0 0z" fill-opacity="0.5"></path>
        <path d="M0 0c3.5 1.3 7.3 3.6 16.4 3.8 39-.5 61.3 1.4 71 22.6C97.1 47.7 84 69.5 63 73.7c11.4 8.6 14 45.8 37.1 52.9-50.9 19.7-49.2-52.4-66.7-62.4C64 68.5 70.3 45.3 63.5 31 52.3 7 18.5 29.6 0 0z"></path>
    </symbol>
    <symbol id="like" viewbox="0 0 16 16">
        <path d="m0 1v8c0 .552246.447693 1 1 1h3v-10h-3c-.552307 0-1 .447693-1 1z" transform="translate(0 5)"></path>
        <path d="m9.15332 5.02979h-2.9541c-.258301 0-.387695-.172363-.431152-.246582-.043457-.0737305-.131348-.270508-.0063477-.496094l1.0415-1.87549c.228516-.410645.251953-.893555.0649414-1.32471-.187012-.43164-.556152-.744629-1.0127-.858398l-.734375-.183594c-.178711-.0449219-.368164.0122071-.492676.150391l-3.9873 4.42969c-.413574.460449-.641113 1.0542-.641113 1.67236v5.23242c0 1.37842 1.12158 2.5 2.5 2.5l4.97412-.0004883c1.12305 0 2.11475-.756348 2.41113-1.83887l1.06738-4.89844c.03125-.13623.0473633-.275879.0473633-.415527 0-1.01807-.828613-1.84668-1.84668-1.84668z" transform="translate(5 .97)"></path>
    </symbol>
    <symbol id="target" viewbox="0 0 512 512">
        <path d="M480.488,241C473.07,128.863,383.137,38.93,271,31.512V0h-30v31.512C128.863,38.93,38.93,128.863,31.512,241H0v30h31.512
			C38.93,383.137,128.863,473.07,241,480.488V512h30v-31.512C383.137,473.07,473.07,383.137,480.488,271H512v-30H480.488z
			 M241,61.571v60.267C178.521,128.777,128.777,178.521,121.838,241H61.571C68.877,145.409,145.409,68.877,241,61.571z M241,450.429
			C145.409,443.123,68.877,366.591,61.571,271h60.267c6.939,62.479,56.683,112.223,119.162,119.162V450.429z M241,331v28.924
			c-45.916-6.597-82.327-43.008-88.924-88.924H181v-30h-28.924c6.597-45.916,43.008-82.327,88.924-88.924V181h30v-28.924
			c45.916,6.597,82.327,43.008,88.924,88.924H331v30h28.924c-6.597,45.916-43.008,82.327-88.924,88.924V331H241z M271,450.429
			v-60.267c62.479-6.939,112.223-56.684,119.162-119.162h60.267C443.123,366.591,366.591,443.123,271,450.429z M390.162,241
			C383.223,178.521,333.479,128.777,271,121.838V61.571C366.591,68.877,443.123,145.409,450.429,241H390.162z"></path>
        <path d="M256,211c-24.813,0-45,20.187-45,45s20.187,45,45,45s45-20.187,45-45S280.813,211,256,211z M256,271
			c-8.271,0-15-6.729-15-15s6.729-15,15-15s15,6.729,15,15S264.271,271,256,271z"></path>
    </symbol>
    <symbol id="bakuchiol" viewbox="0 0 73.76 83">
        <path d="M10.3 34.8v17.4l15.1 8.6 15-8.6V34.8l-15-8.7-15 8.7zM15.3 49.3V37.6M35.5 49.3l-10.1 5.8M25.4 31.8l10.1 5.8M25.4 26v-7.5l11-11M14.1 3.7l9.8 9.8M14.1 11.3l6.8 6.8M25.4 67.5v-6.6M60.8 28a3.7 3.7 0 01-2.9 1.4c-2.2 0-4-2.1-4-4.7s1.8-4.6 4-4.6a3.7 3.7 0 012.8 1.3M8.9 6.1c0 3-1.7 4.6-3.7 4.6S1.5 9.1 1.5 6.1s1.6-4.6 3.7-4.6 3.7 1.6 3.7 4.6zM66.3 24.8h6M66.3 20.2v9.2M72.3 20.2v9.2M49.3 6.1c0 3-1.6 4.6-3.7 4.6S42 9.1 42 6.1s1.6-4.6 3.6-4.6 3.7 1.6 3.7 4.6zM50.6 14.6l2.2 2.2M23.4 76.9c0 3-1.6 4.6-3.6 4.6S16 79.9 16 76.9s1.6-4.6 3.7-4.6 3.6 1.6 3.6 4.6zM28.8 76.9h5.9M28.8 72.3v9.2M34.7 72.3v9.2"></path>
    </symbol>
    <symbol id="collagen" viewbox="0 0 58.5 83">
        <path d="M29.25 1.5S57 24.2 57 53.75a27.75 27.75 0 01-55.5 0C1.5 24.2 29.25 1.5 29.25 1.5z"></path>
        <path d="M47 36.45a4 4 0 11-4-4 4 4 0 014 4zM34 40.45a6 6 0 11-6-6 6 6 0 016 6z"></path>
        <circle cx="29.25" cy="14.29" r="2.89"></circle>
        <path d="M26.65 25.15a4 4 0 11-4-4 4 4 0 014 4zM40.81 24a2.89 2.89 0 11-2.89-2.89A2.89 2.89 0 0140.81 24z"></path>
        <circle cx="12.67" cy="49.46" r="4.44"></circle>
        <path d="M16.35 35.76a2.89 2.89 0 11-2.89-2.89 2.89 2.89 0 012.89 2.89z"></path>
        <circle cx="36.81" cy="65.69" r="7.42"></circle>
        <circle cx="45.09" cy="47.91" r="2.89"></circle>
        <path d="M27 55.39a2.64 2.64 0 11-2.64-2.64A2.64 2.64 0 0127 55.39zM19.67 64.85a4.16 4.16 0 11-4.16-4.16 4.16 4.16 0 014.16 4.16zM51.54 57.44a2.07 2.07 0 11-2.07-2.07 2.06 2.06 0 012.07 2.07zM37.1 51.68a2.07 2.07 0 11-2.1-2.07 2.07 2.07 0 012.1 2.07zM26.45 73.9a2.07 2.07 0 11-2.07-2.07 2.07 2.07 0 012.07 2.07z"></path>
    </symbol>
    <symbol id="pepha-tight" viewbox="0 0 59.25 83">
        <path d="M48.3 57.5a18.7 18.7 0 01-9 13M48.4 51.4l-.1-1.9"></path>
        <path d="M54.6 38.4A51.6 51.6 0 0157 53.8a27.8 27.8 0 01-27.8 27.7 27.4 27.4 0 01-6-.7M10.6 74.3a27.7 27.7 0 01-9.1-20.5c0-29.6 27.8-52.3 27.8-52.3a83 83 0 018.4 8.4"></path>
        <path d="M51.2 4.7C42.6 16.4 28 19.3 21.2 32a61 61 0 00.8 12.5 75 75 0 00-4-7.8c-7 11.6-4.1 23.6.9 26.4a.4.4 0 01.1.5l-.2.7a77.6 77.6 0 00-2.2 8 39.3 39.3 0 00-.9 7.6c0 1 .2 1.7.5 1.7s.6-.3.9-1l2.5-7.6 2.6-7.7.3-.8s.3-.5.5-.5c5.3.3 11-4 18.7-15.4l6-9a44.4 44.4 0 00-7.3 0s7.2-3.3 11-5.5c14.4-15.3-.2-29.3-.2-29.3zM48.9 19C43 29.5 29.5 37.3 23.3 56.5"></path>
    </symbol>
    <symbol id="vitamin-c" viewbox="0 0 58.5 83">
        <path d="M48.3 57.5a18.7 18.7 0 01-9 13M48.4 51.4l-.1-1.9"></path>
        <path d="M29.3 1.5S57 24.2 57 53.8a27.8 27.8 0 01-55.5 0c0-29.6 27.8-52.3 27.8-52.3zM29.3 39.5v20M19.3 49.5h19.9"></path>
    </symbol>
    <symbol id="olivia-oil" viewbox="0 0 64.81 83">
        <path d="M54.6 57.5a18.7 18.7 0 01-9 13M54.7 51.4l-.1-1.9"></path>
        <path d="M23.7 13.9A89 89 0 0135.5 1.5s27.8 22.7 27.8 52.3A27.8 27.8 0 018 56M8.7 20C32 40.4 35.6 60.4 36.3 71"></path>
        <path d="M34.5 56.3a16.5 16.5 0 006.7-17.8 27.8 27.8 0 00-13.4-16.4 61.5 61.5 0 00-26.3-8.2c1.6 4.9 1.6 10.3 2 15.3C4.1 35.4 5.1 41.5 8 47c5 9.6 16.5 16.2 26.5 9.4zM30 46.8A21.4 21.4 0 0031 31M21.6 33.6c.3-2 .7-6.7-.7-10.4M26.4 40.5s-6.9 1.3-15.6-4M17 28.2a17.2 17.2 0 01-5.6-1.2M32.1 51.8a22.6 22.6 0 01-12.4-1.5"></path>
    </symbol>
    <symbol id="solodka" viewbox="0 0 65.66 83">
        <path class="cls-1" d="M14.3 25L3.7 14.4a7.6 7.6 0 010-10.7 7.6 7.6 0 0110.7 0L25 14.3l1.7-1.8a2.4 2.4 0 013.5 0 2.4 2.4 0 010 3.5L16 30.1a2.4 2.4 0 01-3.5 0 2.4 2.4 0 010-3.5l3.7-3.5"></path>
        <path class="cls-1" d="M17.7 28.4L44 54.7a7.6 7.6 0 008.3 1.7l2.5 2.5a3.2 3.2 0 004.5-4.6l-2.7-2.6a7.5 7.5 0 00-1.9-7.7L28.4 17.7M31 41.6L41.6 31M50.5 47.3l-2.1-2.1M58.6 65.4s5.6 4.5 5.6 10.5A5.6 5.6 0 0153 76c0-5.9 5.6-10.5 5.6-10.5z"></path>
    </symbol>
</svg>
@include('components.pixel_footer')
</body>
</html>