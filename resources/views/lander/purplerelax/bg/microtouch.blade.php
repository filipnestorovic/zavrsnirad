<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot3.jpg">
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.js"></script>
    <style>
        .block-1 {
            background: url({{ asset('/') }}purplerelaxFiles/microtouch/bg1.png) #FBEFEF no-repeat center bottom;
            height: 790px;
        }

        .block-4 {
            height: auto;
            background-size: cover;
        }

        .block4text1 {
            background-color: white;
            height: auto;
            border-radius: 20px;
        }

        .carousel-control {
            position: absolute;
            top: 700px!important;
        }

        @media screen and (max-width: 639px) {
            .block-1 {
                background: url({{ asset('/') }}purplerelaxFiles/microtouch/mob_bg.png) #FBEFEF center top no-repeat;
                height: 1140px;
            }
        }
        @media screen and (max-width: 767px) {
            .block-1 .discont {
                margin-left: 140px;
                margin-top: 20px;
            }
            .block4text1 {
                height: 360px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">Уред за почистване на уши<br>
            <span style="color: #592d21; font-weight: 400; font-size: 56px;">MICRO TOUCH</span><br>
            <span class="spanspan2" style="color: #592d21; font-weight: normal;"></span>
        </h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">отстъпка<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Редовна цена:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Цена с отстъпка:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Име и фамилия" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Телефон"
                       required>
                <input type="text" name="shipping_address" class="block1inputname" placeholder="Адрес" required>
                <input type="text" name="shipping_city" class="block1inputname" placeholder="Град" required>
                <p style="color: #FB1B14;font-size: 14px;line-height: 16px;padding: 10px;"></p>
                <button class="knopka1" type="submit">Поръчай сега</button>
            </form>
        </div>
    </div>
</div>
<div class="block2">
    <div class="wrap">
        <div class="col-xs-12 block2text1">
            УРЕД ЗА ПОЧИСТВАНЕ НА УШНА КАЛ
        </div>
        <div class="line">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2img">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/tovar1.jpg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2text1">
                Благодарение на този продукт, премахването на ушна кал никога не е било по-лесно. Използването на обикновени клечки за уши почиства само на външен вид, защото по-голямата част от смолата отива директно в тъпанчето, което в бъдеще води до запушване, сърбеж и по-лош слух.
                <br><br>
                Micro Touch е проектиран да отстранява всички замърсявания от ушната мида,по много нежен и лесен начин за няколко минути. Той е отличен за деца, защото няма вазможност от нараняване на тъпанчето, благодарение на ограничителя Micro Touch. Превърнете почистването на ушите в удоволствие!
            </div>
        </div>
    </div>
</div>
<div class="block3" style="text-align: center;">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="line-height: 53px;">
            ПРЕДИМСТВА НА MICRO TOUCH CLEANER ЗА УШИ
        </div>
        <div class="line col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot2.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Спирално оформените силиконови накрайници позволяват масаж на тъпанчето и предизвикват много приятно усещане. Излишната кал се отстранява с леки кръгови движения. Ще се изненадате колко много я има в ушите ви.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot1.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Продуктът се доставя с 16 силиконови  накрайника за многократно ползване. Накрайниците  могат да се перат и почистват, така че дълго време на вас и вашето семейство няма да се налага да купувате допалнителни накрайници или нов продукт. Финансово е по-изгодно от клечките за уши, които между другото замърсяват околната среда.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot3.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Продуктът е тестван и одобрен от експерти. Предлага се в практична опаковка, който можете да вземете на пътувания или навсякъде другаде.
            </div>
        </div>
    </div>
</div>
<div class="block-4 section">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="color: white;">
            ВПЕЧАТЛЕНИЯ НА ДОВОЛНИ КЛИЕНТИ
        </div>
        <div class="line22 col-sm-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff3.png">
        </div>
        <div class="tovars center hidden-xs">
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="Micro Touch"
                         title="Micro Touch"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Ива Милева</span>
                        Това е отличен и много практичен продукт. Много е приятен за използване. В миналото имах много проблеми със залепването на ушната кал в долната част на тъпанчето и върху самото тъпанчето, поради което често трябваше да мия ушите си. Сега това вече не е проблем, с продукта Micro Touch цялата смола излиза навън.
                    </div>
                </div>
            </div>
            <div class="tovar tovar_2">
                <div class="col-xs-12 block4img">
                    <img alt="Micro Touch"
                         title="Micro Touch"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">София Илиева</span>
                        Страхотен! Истинското нещо, което съветвам всички! Имам малки деца и с тях беше вечна борба за почистване на ушите, защото ги беше много страх.
                        Този продукт им вдъхна увереност, сега те се наслаждават на почистването на ушите си. Големият син вече го прави сам. Всички препоръки, поръчах още два броя за сестра ми и майка ми.
                    </div>
                </div>
            </div>
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="Micro Touch"
                         title="Micro Touch"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev3.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Мария Петрова</span>
                        Често имах проблем със запушени уши и вече не намирах начин да го разреша. Лекарите ми казаха, че честото миене на ушите не е желателно. Ровейки се в интернет попаднах на този продукт и казах да го пробваме, защо да не. Не можете да повярвате какво облекчение. Сега чувам всичко, и това, което ми трябва, и това, което не ми трябва. :)
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel2" class="carousel slide visible-xs">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="tovar">
                        <div class="col-xs-12 block4img">
                            <img alt="Micro Touch"
                                 title="Micro Touch"
                                 src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Ива Милева</span><br>
                                Това е отличен и много практичен продукт. Много е приятен за използване. В миналото имах много проблеми със залепването на ушната кал в долната част на тъпанчето и върху самото тъпанчето, поради което често трябваше да мия ушите си. Сега това вече не е проблем, с продукта Micro Touch цялата смола излиза навън.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-item-id="2">
                    <div class="tovar tovar_2">
                        <div class="col-xs-12 block4img">
                            <img alt="Micro Touch"
                                 title="Micro Touch"
                                 src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">София Илиева</span><br>
                                Страхотен! Истинското нещо, което съветвам всички! Имам малки деца и с тях беше вечна борба за почистване на ушите, защото ги беше много страх.
                                Този продукт им вдъхна увереност, сега те се наслаждават на почистването на ушите си. Големият син вече го прави сам. Всички препоръки, поръчах още два броя за сестра ми и майка ми.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-item-id="3">
                    <div class="tovar">
                        <div class="col-xs-12 block4img">
                            <img alt="" title="" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev3.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Мария Петрова</span><br>
                                Често имах проблем със запушени уши и вече не намирах начин да го разреша. Лекарите ми казаха, че честото миене на ушите не е желателно. Ровейки се в интернет попаднах на този продукт и казах да го пробваме, защо да не. Не можете да повярвате какво облекчение. Сега чувам всичко, и това, което ми трябва, и това, което не ми трябва. :)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#carousel2" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel2" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<div class="block-5">
    <div class="wrap">
        <div class="col-xs-12 block2text1">
            MIŠLJENJE STRUČNJAKA
        </div>
        <div class="line123 col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="specialist">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/spec.jpg"
                     alt="Micro Touch">
            </div>
            <div class="right">
                <p>
                    <b>Micro Touch</b> je veoma dobro sredstvo za čišćenje ušiju, posebno za decu. Obični štapići za uši uopšte nisu preporučljivi jer veći deo smole spuštaju u donji deo ušne školjke i na taj
                    način prave cerumenske čepove koji mogu da dovedu do raznih simptoma poput lošijeg sluha, zujanja u ušima, pritiska u glavi.
                    <br><br>
                    Micro Touch izvlači apsolutno svu smolu iz ušiju bez ostavljanja ostataka, te na taj način garantuje odličnu higijenu ušne školjke. <b>Pouzdan je za upotrebu i ne može da izazove
                        nikakve štetne efekte.</b>
                </p>
                <p class="name">Marija Jovanović, Pedijatar, 15 godina iskustva</p>
            </div>
        </div>
    </div>
</div>
<div class="block-6 section">
    <div class="wrap center">
        <div class="col-xs-12 block2text1">
            KAKO NARUČITI MICRO TOUCH
        </div>
        <div class="line123 col-xs-12" id="line123">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="tovars center">
            <div class="tovar">
                <img alt="Micro Touch"
                     title="Micro Touch"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">PORUDŽBINA</h3>
                <p>Poručite proizvod unošenjem podataka za dostavu u formi ispod. Potvrdićemo Vašu porudžbinu u
                    najkraćem roku. </p>
            </div>
            <div class="tovar">
                <img alt="Micro Touch"
                     title="Micro Touch"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">DOSTAVA I PLAĆANJE</h3>
                <p>Paket isporučujemo u roku od 1-2 radna dana putem kurirske službe na Vašu adresu. Plaćate po
                    preuzimanju pošiljke.</p>
            </div>
            <div class="tovar">
                <img alt="Micro Touch"
                     title="Micro Touch"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">GARANCIJA KVALITETA</h3>
                <p>Pre predaje porudžbine proveravamo kvalitet proizvoda. Ukoliko ne budete zadovoljni proizvodom,
                    vratićemo Vam novac.</p>
            </div>
        </div>
    </div>
</div>
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">SREDSTVO ZA ČIŠĆENJE UŠIJU <br><span style="color: #592d21; font-weight: 400; font-size: 56px;">MICRO TOUCH</span>
            <br><span class="spanspan2" style="color: #592d21; font-weight: normal;"></span></h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">popust<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Редовна цена:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Цена с отстъпка:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Име и фамилия" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Телефон"
                       required>
                <input type="text" name="shipping_address" class="block1inputname" placeholder="Адрес" required>
                <input type="text" name="shipping_city" class="block1inputname" placeholder="Град" required>
                <p style="color: #FB1B14;font-size: 14px;line-height: 16px;padding: 10px;"></p>
                <button class="knopka1" type="submit">Поръчай сега</button>
            </form>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
