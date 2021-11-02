<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/magicpro/product_1.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/magicpro/product_1.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro/style.css">
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <div class="block header" id="header" style="background: #72a8cc url({{ asset('/') }}dailysharkFiles/magicpro/header2m.jpg) center 0 no-repeat;">
        <div class="attach">
            <div class="header_left">
                <div class="header_title">
                    Mašina za šivenje
                    <span class="white">
                     «<b>Magic Pro</b>»
                     </span>
                </div>
                <ul class="header_vantage">
                    <li>– kompaktna 4 u 1 mašina </li>
                    <li>– lako prenosiva</li>
                    <li>– 4 rezervna kalema i jedna rezervna igla</li>
                </ul>
                <div class="header_footer">
                    <p>Oduvek ste želeli da počnete da šijete ali vam se nije davao novac na glomazne profesionalne mašine za šivenje? Šta kada bismo vam rekli da postoji jednako dobra mašina, za višestruko manje novca a koju možete staviti u tašnu?</p>
                </div>
            </div>
            <div class="header_right">
                <div class="header_product clr">
                    <div class="header_product-img">
                        <img src="{{ asset('/') }}dailysharkFiles/magicpro/product_1.png" alt="Magic Pro Original">
                    </div>
                    <ul>
                        <li>
                            <span style="color: #fff945; font-size: 29px;">✔</span> Dve brzine
                        </li>
                        <li>
                            <span style="color: #fff945; font-size: 29px;">✔</span> Radi i na baterije i na struju
                        </li>
                        <li>
                            <span style="color: #fff945; font-size: 29px;">✔</span> Pogodna za rad sa svim tkaninama
                        </li>
                    </ul>
                </div>
                <div class="header_price">
                    <div class="oldprice">
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="price_land_curr">
                          RSD
                        </span>
                    </div>
                    <div class="newprice">
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                          RSD
                        </span>
                    </div>
                    <p style="font-size: 34px; text-align: center;color:#fff" class="p">
                        <span style="font-size: 26px;"></span>
                    </p>
                </div>
                <a href="#form" class="button gobut">Poručite</a>
                <p class="header_discount">
                    I iskoristite popust od
                    <span class="discount">40%</span>
                </p>
            </div>
        </div>
    </div>
    <div class="block versus_1" id="versus_1">
        <div class="attach">
            <div class="title" style="color:#000">Upoznajte Magic Pro šiveću mašinu?</div>
            <div class="coll img-about">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro/versus_1_1.jpg" alt="Magic Pro Original">
                <div class="subtitle">Brzi i spori mod, kao i papučica za kontrolu brzine</div>
            </div>
            <div class="coll img-about">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro/versus_1_1-1.jpg" alt="Magic Pro Original">
                <div class="subtitle">Radi po principu dvostrukog navoja, što znači da može da se radi sa bilo kojim materijalom, od tila do džinsa</div>
            </div>
            <div class="coll img-about">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro/versus_1_1-2.jpg" alt="Magic Pro Original">
                <div class="subtitle">Radi i na baterije i na struju (220v) <br> Za razliku od ostalih sličnih mašina ne lomi iglu i ne mrsi konce</div>
            </div>
            {{--<div class="block thumb-wrap">--}}
                {{--<div class="video">--}}
                    {{--<div class="youtube" id="frfA9aPebFE"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="subtitle">Praktična i pouzdana mašina za šivenje sa optimalnim setom funkcija – lako prenosiva i laka za upotrebu! Kompaktna, lagana i praktična ne zahteva veliku pripremu pre početka rada na njoj.</div>
            <a href="#form" class="button gobut">Poručite</a>
        </div>
    </div>
    <div class="block blackbox">
        <div class="attach">
            <div class="blackbox_left">
                <div class="blackbox_text">
                    MAŠINA RADI
                    <br>
                    <span>I NA STRUJU</span>
                    <br> I NA BATERIJE
                </div>
            </div>
            <div class="blackbox_right">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro/blackbox.jpg" alt="Magic Pro Original">
            </div>
        </div>
    </div>
    <div class="block magic" id="magic">
        <div class="attach">
            <div class="title">Svaki početnik može veoma lako da radi na Magic Pro mašini</div>
            <img src="{{ asset('/') }}dailysharkFiles/magicpro/product_2.png" class="magic_product" alt="Magic Pro Original">
            <ul class="magic_case">
                <li class="item1">
                </li>
            </ul>
        </div>
    </div>
    <div class="block versus_2" id="versus_2">
        <div class="attach">
            <div class="versus_2_case">
                <div class="title">Brza i praktična</div>
                <div class="coll">
                    <img src="{{ asset('/') }}dailysharkFiles/magicpro/versus_2_1.jpg" class="versus_img_left" alt="Magic Pro Original">
                    <p>Mašina se aktivira stiskom nožne pedale. Premotavanje konca je automatsko.</p>
                </div>
                <div class="coll">
                    <img src="{{ asset('/') }}dailysharkFiles/magicpro/versus_2_2.jpg" class="versus_img_right" alt="Magic Pro Original">
                    <p>Zahvaljujući sposobnosti da radi na baterije, možete zakrpiti i ušiti stvari bilo gde u domu, pa čak i na ulici, bez brige da li ćete naći utikač</p>
                </div>
                <a href="#form" class="button gobut">Poručite</a>
            </div>
        </div>
    </div>
    <div class="block reviews" id="reviews">
        <div class="attach">
            <div class="title">Utisci naših kupaca</div>
            <div class="grid_row">
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/magicpro/review_1.png" alt="Magic Pro Original">
                    <p>Za kućnu upotrebu i popravke je idealna! Sve je praktično i jako se lako koristi! Hvala na brzoj dostavi, dobila sam je odmah sutradan. Ubrzo sam uzela još jednu za svoju majku!</p>
                    <span class="review_autor">Jana Gačić</span>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/magicpro/review_2.png" alt="Magic Pro Original">
                    <p>Vrlo brza dostava.Uzela sam je za ćerku koja uči da šije, jako je brzo sve savladala i sada pravi haljinice za lutke po ceo dan. Ne mogu da verujem kako je praktična!</p>
                    <span class="review_autor">Suzana Erić</span>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/magicpro/review_3.png" alt="Magic Pro Original">
                    <p>Početnik sam, ali ova mašina je savršena! Bukvalno sam toliko toga naučila na njoj da sada ni ne želim da pređem na veću, jer mi ni ne treba :) Jako je lepa, praktična tako da mogu da je nosim svuda sa sobom.</p>
                    <span class="review_autor">Ljubica Roglic</span>
                </div>
            </div>
        </div>
    </div>
    <div class="block delivery">
        <div class="attach">
            <div class="title">
                plaćanje
                <br>pouzećem!
            </div>
            <div class="delivery_caseimg">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro/delivery.png" class="men" alt="Magic Pro Original">
            </div>
        </div>
    </div>
    <div class="block header footer1">
        <div class="attach">
            <div class="header_left">
                <div class="header_title">
                    Mašina za šivenje
                    <span class="white">
                     «<b>Magic Pro</b>»
                     </span>
                </div>
                <ul class="header_vantage">
                    <li>– kompaktna 4 u 1 mašina </li>
                    <li>– lako prenosiva</li>
                    <li>– 4 rezervna kalema i jedna rezervna igla</li>
                </ul>
                <div class="header_product clr" style="float:left;">
                    <div class="header_product-img footer_product">
                        <img src="{{ asset('/') }}dailysharkFiles/magicpro/product_1.png" alt="Magic Pro Original">
                    </div>
                </div>
            </div>
            <div class="header_right">
                <div class="header_price">
                    <div class="oldprice">
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="price_land_curr">
                          RSD
                        </span>
                    </div>
                    <div class="newprice">
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                          RSD
                        </span>
                    </div>
                    <p style="font-size: 34px; text-align: center;color:#fff" class="p">
                        <span style="font-size: 26px;"></span>
                    </p>
                </div>
                <p class="header_discount">
                    Iskoristite specijalni popust od
                    <span class="discount">40%</span>
                </p>
                <br>
                <form class="orderformcdn" action="{{$orderRoute}}" method="post" id="form">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <fieldset>
                        <input type="text" name="name" placeholder="Ime i prezime" required="" value="">
                        <input type="tel" name="phone" placeholder="Telefon" required="" id="phone" value="">
                        <input type="text" name="shipping_address" placeholder="Adresa" required="" value="">
                        <input type="text" name="shipping_city" placeholder="Grad" required="" value="">
                        <button type="submit" class="button">Poručite</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>