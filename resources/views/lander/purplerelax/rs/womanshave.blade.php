<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">

    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/bootstrap-grid.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/main.css">
</head>
<body>
<menu class="header__menu header__menu--mob">
    <a href="#prof" class="header__link">Mišljenje struke</a>
    <a href="#review" class="header__link">Recenzije</a>
    <a href="#offer" class="header__link">Poručite sada</a>
</menu>
<header class="header">
    <div class="container">
        <div class="row align-items-center header__content">
            <div class="header__mob-menu"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/gumb.svg" alt></div>
            <div class="header__logo">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshave/logo.svg" alt>
            </div>
            <menu class="header__menu row align-items-center ">
                <a href="#prof" class="header__link">Mišljenje struke</a>
                <a href="#review" class="header__link">Recenzije</a>
                <a href="#offer" class="header__link">Poručite sada</a>
            </menu>
            {{--<div class="header__basket">--}}
                {{--<img src="{{ asset('/') }}purplerelaxFiles/womanshave/basket.svg" alt>--}}
                {{--<span>1</span>--}}
            {{--</div>--}}
        </div>
    </div>
</header>
<main class="main">
    <section class="block1 container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl1.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl2.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl3.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl4.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl5.jpg" alt></div>
                    </div>
                    <!-- Add Arrows -->
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m1.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m2.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m3.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m4.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m5.jpg" alt></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="heading">
                    <h1>WOMAN SHAVE <br><span>Depilatore compatto </span></h1>
                </div>
                <div class="price">
                     <span class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                     </span>
                    <span class="price__before">
                        <s>
                           {{ $prices[1]['originalPrice'] }} RSD
                        </s>
                        <sup>-50%</sup>
                     </span>
                </div>
                <div class="block1__list">
                    <p>100% garanzia di qualità</p>
                    <p>Consegna entro 3 giorni</p>
                    <p>Si paga al ricevimento</p>
                </div>
                {{--<div class="price__control">--}}
                    {{--<div class="minus">-</div>--}}
                    {{--<span class="number">1</span>--}}
                    {{--<div class="plus">+</div>--}}
                {{--</div>--}}
                <div class="btn-wrap">
                    <a href="#offer" class="btn left">Ordinare</a>
                </div>
                {{--<div class="progress">--}}
                    {{--<img src="{{ asset('/') }}purplerelaxFiles/womanshave/progress.svg" alt>--}}
                    {{--<span>Rimangono: <b>4271</b> unità del prodotto <b>15346</b></span>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    {{--<div class="trigger">--}}
        {{--<p>L'offerta finisce entro</p>--}}
        {{--<span class="t-hour num"></span>--}}
        {{--<span class="dots">:</span>--}}
        {{--<span class="t-min num"></span>--}}
        {{--<span class="dots">:</span>--}}
        {{--<span class="t-sec num"></span>--}}
    {{--</div>--}}
    <section class="block2">
        <div class="container">
            <div class="blick2-prod"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/product.jpg" alt></div>
            <div class="row block2__grid">
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon1.svg" alt><span>Ha un effetto massaggiante sulla
                     pelle</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon2.svg" alt><span>Rimuove tutti i peli senza dolori
                     e irritazioni</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon3.svg" alt><span>Si adatta a tutte le zone e tutti
                     i tipi della pelle</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon4.svg" alt><span>Si carica rapidamente e funziona
                     a lungo</span>
                </div>
            </div>
        </div>
    </section>
    <section class="block3">
        <div class="container">
            <div class="title">
                <h2><span class="accent">WOMAN SHAVE —</span><br> LA DEPILAZIONE <br> INDOLORE</h2>
            </div>
            <div class="row block3-content">
                <div class="col-lg-6 col-12">
                    <div class="slider-wrap">
                        <div class="swiper-container block3-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter1.jpg" alt></div>
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter2.jpg" alt></div>
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter3.jpg" alt></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="block3-slider__next block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/right.svg" alt></div>
                        <div class="block3-slider__prev block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/left.svg" alt></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p><b>Il design unico delle lame rende la depilazione con <span class="accent">WOMAN SHAVE</span> facile ,
                            piacevole e indolore.</b>
                    </p>
                    <p>Le fibre speciali massaggiano delicatamente la pelle e le lame angolate rimuovono tutti i peli, anche i
                        più piccoli.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="block4">--}}
        {{--<div class="container">--}}
            {{--<div class="title">--}}
                {{--<h2>ORA SARAI SEMPRE <br> IRRESISTIBILE</h2>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-12">--}}
                    {{--<iframe style="width: 100%; height: 100%; min-height: 2.5rem;"--}}
                            {{--src="https://www.youtube.com/embed/NW5fywbZV34" frameborder="0"--}}
                            {{--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-12">--}}
                    {{--<p>--}}
                        {{--<b><span class="accent">WOMAN SHAVE</span> è il tuo piccolo aiutante per eliminare i peli superflui.</b>--}}
                    {{--</p>--}}
                    {{--<p>Il dispositivo professionale viene utilizzato sia nei saloni di bellezza che a casa. Milioni di donne--}}
                        {{--l'amano <b>perché rimuove i peli di tutte le zone</b>--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <div class="blue-line">
        <div class="container">
            <p>Aggiornamento: a causa della forte domanda, i prodotti potrebbero essere esauriti.
                <b>Per tua comodità, ti preghiamo di lasciare la richiesta il più presto possibile</b>
            </p>
        </div>
    </div>
    <section class="block5">
        <div class="container">
            <div class="title">
                <h2>LA DEPILAZIONE<br> DELICATA </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo1.jpg" alt></div>
                    <p><span>Senza dolore</span>Il design speciale delle lame consente di rimuovere i peli senza causare le
                        sensazioni sgradevoli anche nelle zone più delicate del tuo corpo
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo2.jpg" alt></div>
                    <p><span>Per tutte le zone</span>Diversi ugelli consentono di rimuovere i peli da tutte le zone: gambe,
                        ascelle, bikini e braccia
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo3.jpg" alt></div>
                    <p><span>Efficace</span>Grazie alla retroilluminazione incorporata, nemmeno un pelo appena visibile rimarrà
                        sul tuo corpo
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo4.jpg" alt></div>
                    <p><span>Compatto</span>A casa, in vacanze o in viaggio d'affari — questo dispositivo sarà sempre con te</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo5.jpg" alt></div>
                    <p><span>Elegante</span>Il design elegante, i colori femminili, la forma ergonomica: tutto questo rende
                        l'accessorio di bellezza perfetto per te
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo6.jpg" alt></div>
                    <p><span>Comodo</span>La carica rapida, la lunga durata e la batteria affidabile per più di 1000 ricariche
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="trigger__form" id="offer">
        <h3>Lascia una richiesta sul nostro sito</h3>
        <form action="#" method="post">
            <center>
                <h3 class="title">COMPILA IL MODULO</h3>
            </center>
            <div class="form-group">
                <label>Nome e Cognome</label>
                <input type="text" name="name" class="form-control" placeholder="Inserisci Nome e Cognome"
                       required="required">
            </div>
            <div class="form-group">
                <label>Telefono (Meglio Cellulare)</label>
                <input type="tel" name="phone" class="form-control" placeholder="Inserisci il tuo numero di telefono"
                       required="required">
            </div>
            <div class="form-group">
                <label>Indirizzo e n. civico</label>
                <input type="text" name="other[address]" class="form-control" placeholder="ES. Via Aldo moro, 130"
                       required="required">
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label>Città</label>
                    <input type="text" name="other[city]" class="form-control" placeholder="ES. Milano" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label>CAP</label>
                    <input type="text" name="other[zipcode]" class="form-control" placeholder="ES. 94112" required="required">
                </div>
            </div>
            <div class="form-row offer-selection" data-images="[]"
                 data-default-img="{{ asset('/') }}purplerelaxFiles/womanshave/2891_e897fff2a993388486042f7751d0760a_1569348809.png">
                <div class="form-group col text-center">
                    <label>Scegli un'offerta</label>
                    <select name="other[quantity]" class="form-control price__select" required="required">
                        <option value="1" selected>1 Woman Shave</option>
                        <option value="2">2 Woman Shave</option>
                        <option value="3">3 Woman Shave </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="text-center">
                     <span style="
                        color: black;
                        padding: 4px;
                        background: #ffc205;
                        font-weight: bold;
                        border-radius: 5px;
                        " class="sped">&nbsp;<i class="fa fa-truck"></i> La spedizione è gratis! </span>
                </div>
            </div>
            <div class="form-group">
                <label>Note per il corriere</label>
                <input type="text" name="other[notes]" class="form-control" rows="2"
                       placeholder="ES. Citofonare al Sig. Rossi">
            </div>
            <div class="preloader loader-1"></div>
            <center>
                <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">Completa
                    l'acquisto</button>
                <!--img src="/manager/img/form-secure.jpg" style="max-width:250px;margin:10px"-->
            </center>
        </form>
    </div>
    <section class="block6" id="prof">
        <div class="container">
            <div class="title">
                <h2>I PROFESSIONISTI <br> SCELGONO WOMAN SHAVE</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 block6__doc">
                    <div class="img-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/doctor1.jpg" alt>
                    </div>
                </div>
                <div class="col-md-6 col-12 block6__content">
                    <div class="block6__sub-head">
                        <b><span class="accent">WOMAN SHAVE</span> è un ottimo mezzo sia per il lavoro nel salone che per l'uso
                            domestico.</b>
                    </div>
                    <p>Lo amo perché rimuove delicatamente anche i peli più sottili nelle aree difficili da raggiungere. E ce la
                        fa senza dolore. Grazie al design speciale delle lame, non danneggia la pelle durante la rasatura e non la
                        irrita. La pelle è sempre liscia e morbida.
                    </p>
                    <div class="block6__signature">
                        <span><b>Anna Maria Dury,<br>
                        cosmetologo<br> della categoria superiore</b></span>
                        <div class="img-wrap">
                            <img src="{{ asset('/') }}purplerelaxFiles/womanshave/sign.svg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block7">
        <div class="container">
            <div class="block7-content">
                <div class="mob-bg">
                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/bg_mob.jpg" alt>
                </div>
                <div class="logo"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/logo2.svg" alt></div>
                <h2 class="block7__title">LA DEPILAZIONE DELICATA</h2>
                <div class="block7__list">
                    <div class="block7__item">
                        <span>1</span>
                        <p>Ascelle</p>
                    </div>
                    <div class="block7__item">
                        <span>2</span>
                        <p>Bikini</p>
                    </div>
                    <div class="block7__item">
                        <span>3</span>
                        <p>Gambe</p>
                    </div>
                    <div class="block7__item">
                        <span>4</span>
                        <p>Braccia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block8" id="review">
        <div class="container">
            <div class="title">
                <h2>commenti dei clienti</h2>
            </div>
            <div class="row block8-reviews">
                <div class="col-md-8">
                    <div class="block8-reviews__item">
                        <span class="num">5</span>
                        <div class="line full"></div>
                        <span class="comments">(342)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">4</span>
                        <div class="line full quarte"></div>
                        <span class="comments">(37)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">3</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">2</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">1</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block8-reviews__heading">
                        <span>4.7</span>
                        <p>Valutazione media del prodotto</p>
                    </div>
                </div>
            </div>
            <div class="slider-wrap slider-wrap--block8">
                <div class="swiper-container block8-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava1.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Kat Morgan</h3>
                                        <span>23 hrs</span>
                                    </div>
                                </div>
                                <p>Bella cosa, la adoro. Ce la fa perfettamente. Come ho vissuto senza questa piccolina?))</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev1.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava2.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Miriam Romano</h3>
                                        <span>18 hrs</span>
                                    </div>
                                </div>
                                <p>Il depilatore è eccellente, l'uso già da 3 mesi e le lame sono ancora ben affilate! Con la batteria
                                    potente il dispositivo dura a lungo!)
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev2.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava3.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Lally Gomes</h3>
                                        <span>3 hrs</span>
                                    </div>
                                </div>
                                <p>Il dispositivo è ottimo. Sono fotografa e sempre vado in viaggi. Non mi piace portare con me un
                                    grande depilatore, i fili sono scomodi, e i rasoi standard strappano la pelle. Woman Shave è la mia
                                    salvatrice, non so cosa farei senza di lei!
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev3.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava4.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Anna Pulido</h3>
                                        <span>2 hrs</span>
                                    </div>
                                </div>
                                <p>Il rasoio meraviglioso, aiuta sempre (soprattutto se la data non è prevista))). Sempre ne ho nella
                                    mia borsa!
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev4.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava5.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Elizabhet Cuper</h3>
                                        <span>11 hrs</span>
                                    </div>
                                </div>
                                <p>Questo rasoio è un miracolo! Lo porto sempre con me: in vacanza, e fuori città. Nessuna irritazione
                                    dopo la rasatura, la pelle rimane liscia. LA AMO!
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev5.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava6.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Helen Ho</h3>
                                        <span>12 hrs</span>
                                    </div>
                                </div>
                                <p>Adoro questo depilatore!! Ho avuto una terribile irritazione usando i rasoi standard, ma con questo
                                    ho dimenticato di qualsiasi sensazione spiacevole.
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev6.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="img-wrap">
                                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ava7.png" alt>
                                    </div>
                                    <div class="name">
                                        <h3>Elen Elen</h3>
                                        <span>5 hrs</span>
                                    </div>
                                </div>
                                <p>Un'amica mia mi ha regalato il rasoio per il compleanno. Io adoro tutto il rosa e brillante!
                                    Rimuove delicatamente tutti i peli, anche nelle ZONE più DELICATE. Tenerlo in mano è molto comodo.
                                    Anche la retroilluminazione è molto utile. Consiglio vivamente!
                                </p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev7.jpg" alt class="block8__slide-main">
                                </div>
                                <hr class="block8__slide-hr">
                                <div class="block8__slide-footer">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/ref__footer.svg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="block3-slider__next block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/right.svg" alt></div>
                <div class="block3-slider__prev block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/left.svg" alt></div>
            </div>
        </div>
    </section>
    <section class="block9">
        <div class="container">
            <div class="title">
                <h2>ORDINA <span class="accent">WOMAN SHAVE</span> <br> ADESSO</h2>
            </div>
            <div class="block9__builets">
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet1.svg" alt></div>
                    <p>Lascia una richiesta</p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet2.svg" alt></div>
                    <p>Attendi<br>
                        la chiamata del nostro<br>
                        manager
                    </p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet3.svg" alt></div>
                    <p>Aspetta <br>
                        la consegna
                    </p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet4.svg" alt></div>
                    <p>Paga<br> al<br> ricevimento</p>
                </div>
            </div>
        </div>
    </section>
    <section class="block1 container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="swiper-container gallery-top2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl1.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl2.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl3.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl4.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl5.jpg" alt></div>
                    </div>
                    <!-- Add Arrows -->
                </div>
                <div class="swiper-container gallery-thumbs2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m1.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m2.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m3.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m4.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m5.jpg" alt></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="heading">
                    <h1>WOMAN SHAVE <br><span>Depilatore compatto </span></h1>
                </div>
                <div class="price">
                     <span class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                     </span>
                    <span class="price__before">
                        <s>
                           {{ $prices[1]['originalPrice'] }} RSD
                        </s>
                        <sup>-50%</sup>
                     </span>
                </div>
                <div class="block1__list">
                    <p>100% garanzia di qualità</p>
                    <p>Consegna entro 3 giorni</p>
                    <p>Si paga al ricevimento</p>
                </div>
                {{--<div class="price__control">--}}
                    {{--<div class="minus">-</div>--}}
                    {{--<span class="number">1</span>--}}
                    {{--<div class="plus">+</div>--}}
                {{--</div>--}}
                <div class="btn-wrap">
                    <a href="#offer" class="btn left">Ordinare</a>
                </div>
                {{--<div class="progress">--}}
                    {{--<img src="{{ asset('/') }}purplerelaxFiles/womanshave/progress.svg" alt>--}}
                    {{--<span>Rimangono: <b>4271</b> unità del prodotto <b>15346</b></span>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    {{--<div class="trigger">--}}
        {{--<p>L'offerta finisce entro</p>--}}
        {{--<span class="t-hour num"></span>--}}
        {{--<span class="dots">:</span>--}}
        {{--<span class="t-min num"></span>--}}
        {{--<span class="dots">:</span>--}}
        {{--<span class="t-sec num"></span>--}}
    {{--</div>--}}
</main>
<script src="{{ asset('/') }}purplerelaxFiles/womanshave/swiper.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/womanshave/common.js"></script>
</body>
</html>