<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" type="image/png" href="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/slick-theme.css">
    <style>
        table.size {
            width: 100%;
        }
        tr:nth-child(even) {
            background-color: #e5e5e5;
        }
        .slick-loading .slick-list {
            background: #fff url('{{ asset('/') }}dailysharkFiles/aircalm/ajax-loader.gif') center center no-repeat;
        }
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/slick.eot');
            src: url('{{ asset('/') }}fonts/slick.eot?#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick.woff') format('woff'), url('{{ asset('/') }}fonts/slick.ttf') format('truetype'), url('{{ asset('/') }}fonts/slick.svg#slick') format('svg');
        }
        .characteristics__list li {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    <!-- header 3 -->
    <header class="offer_section offer3">
        <h1 class="main_title">MAGIC PRO</h1>
        <div class="info_block">
            <p class="subtitle">KOMPAKTNA MAŠINA ZA ŠIVENJE</p>
            <div class="discount"><b>-40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/1.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <p>4 u 1<br> mašina</p>
            </div>
            <div class="benefit_item">
                <p>Lako prenosiva<br/> i laka za upotrebu</p>
            </div>
            <div class="benefit_item">
                <p>Radi na baterije<br/>i na struju</p>
            </div>
        </div>
        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
            <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
            <button class="button">ZAVRŠI PORUDŽBINU</button>
        </form>
    </header>
    <section class="description_section">
        <ul class="characteristics__list">
            <li>Praktična i pouzdana mašina za šivenje sa <b>optimalnim setom funkcija</b> – lako prenosiva i laka za upotrebu!</li>
            <li><b>Kompaktna, lagana i praktična</b>. Ne zahteva veliku pripremu pre početka rada na njoj. Svaki početnik može veoma lako da radi na Magic Pro mašini.</li>
            <li>Zahvaljujući sposobnosti da <b>radi na baterije</b>, možete zakrpiti i ušiti stvari <b>bilo gde</b> u domu, pa čak i na ulici, bez brige da li ćete naći utikač.</li>
            <li>Mašina se aktivira stiskom nožne pedale. Premotavanje konca je <b>automatsko</b>. Uz mašinu dobijate i <b>4 rezervna kalema i jedna rezervna igla</b>.</li>
        </ul>
    </section>
    <section class="cat" id="cat">
        <div class="catitem">
            <div class="item-slider">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/5.jpg" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/6.jpg" alt="">
            </div>
            <div class="clearfix">
                <h3>MAGIC <br/>PRO</h3>
                <div class="catprice clearfix">
                    <div class="cp-left">
                        <span>-40%</span>
                        <p>{{ $prices[1]['originalPrice'] }} RSD</p>
                    </div>
                    <div class="cp-right">
                        <span>Nova cena:</span>
                        <p>{{ $prices[1]['amount'] }} RSD</p>
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>
        </div>
        <section class="reviews3_section">
            <h2 class="title">Utisci <span>kupaca</span></h2>
            <div class="reviews_list">
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Jana Gacko</div>
                            <div class="text">25 godina</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">04.02.2021.</div>
                        </div>
                    </div>
                    <p>Za kućnu upotrebu i popravke je idealna! Sve je praktično i jako se lako koristi! Hvala na brzoj dostavi, dobila sam je odmah sutradan. Ubrzo sam uzela još jednu.</p>
                </div>
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Suzana Erić</div>
                            <div class="text">27 godina</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">13.08.2021.</div>
                        </div>
                    </div>
                    <p>Vrlo brza dostava. Uzela sam je za ćerku koja uči da šije, jako je brzo sve savladala i sada pravi haljinice za lutke po ceo dan. Ne mogu da verujem kako je praktična!</p>
                </div>
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Ljubica Roglić</div>
                            <div class="text">32 godine</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">11.01.2021.</div>
                        </div>
                    </div>
                    <p>Početnik sam i ova mašina je savršena! Bukvalno sam toliko toga naučila na njoj da sada ni ne želim da pređem na veću, jer mi ni ne treba :) Jako je lepa, praktična i mogu da je nosim svuda sa sobom.</p>
                </div>
            </div>
        </section>
    </section>
    <section class="cat" id="cat">
        <div class="catitem">
            <div class="item-slider">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/3.jpg" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/4.jpg" alt="">
            </div>
        </div>
    </section>
    <div class="tlt">
        <h2 class="title"><span>Kako</span><br> poručiti?</h2>
    </div>
    <div class="order_steps1">
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step1_icon.png" alt="">
                <h4>Porudžbina</h4>
                <p>Unesite podatke za dostavu u formi na sajtu</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step2_icon.png" alt="">
                <h4>Potvrda</h4>
                <p>Vaša porudžbina će biti potvrđena u najkraćem roku</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step3_icon.png" alt="">
                <h4>Dostava</h4>
                <p>Mašina će biti dostavljena u narednih 1-2 radna dana.</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step4_icon.png" alt="">
                <h4>Plaćanje</h4>
                <p>Paket plaćate tek pri preuzimanju</p>
            </div>
        </div>
    </div>
    <section class="offer_section offer3 order">
        <h1 class="main_title">MAGIC PRO</h1>
        <div class="info_block">
            <p class="subtitle">KOMPAKTNA MAŠINA ZA ŠIVENJE</p>
            <div class="discount"><b>-40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/2.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <p>4 u 1<br> mašina</p>
            </div>
            <div class="benefit_item">
                <p>Lako prenosiva<br/> i laka za upotrebu</p>
            </div>
            <div class="benefit_item">
                <p>Radi na baterije<br/>i na struju</p>
            </div>
        </div>
        <a href="#order_form" class="button">PORUČITE SADA</a>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $('.item-slider').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
    });
</script>
</body>
</html>