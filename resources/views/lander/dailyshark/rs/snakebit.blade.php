<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/snakebit/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/snakebit/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/snakebit/owl.carousel.min.css" type="text/css">
</head>
<body>
@include('components.display_errors')
<section class="offer">
    <div class="wrap">
        <div class="box" style="padding-top: 10px;">
            <h1>MULTIFUNKCIONALNI ŠRAFCIGER <span>SNAKE BIT</span></h1>
{{--            <h2>JEDINSTVENI I <span>APSOLUTNO NEOPHODAN ALAT!</span></h2>--}}
            <div class="sale">Popust <b>-40%</b></div>
            <div class="plus">
                <ul>
                    <li>
                        <p style="font-weight: 600">Savija se u svim pravcima do 360 stepeni</p>
                    </li>
                    <li>
                        <p style="font-weight: 600">Dopire i do najnedostupnijih mesta</p>
                    </li>
                    <li>
                        <p style="font-weight: 600">Štedi novac i vreme</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="order_form">
            <div class="price clrfix">
                <div class="old_cost">
                    <div>Regularna cena:</div>
                    <p>
                        <i>
                            {{ $prices[1]['originalPrice'] }}
                        </i>
                        <span>
                           {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
                <div class="new_cost">
                    <div>Cena sa popustom:</div>
                    <p>
                        <i>
                            {{ $prices[1]['amount'] }}
                        </i>
                        <span>
                           {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
            </div>
            <a href="#order" class="button-m">Poručite sada</a>
            <div class="stock">Količine su ograničene</div>
        </div>
    </div>
</section>
<section id="1" class="b1">
    <div class="wrap">
        <h2 class="title">JEDAN OD <span>NAJATRAKTIVNIJIH</span> ALATA NA TRŽIŠTU</h2>
        <ul class="list-v1 ulfix">
            <li>
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo3.png" alt="">
                </div>
                <div class="txt">
                    <h4>SAVIJANJE DO 360 STEPENI</h4>
                    <p>Mogućnost savijanja Snake Bit-a do 360 stepeni prilikom odvijanja ili zavrtanja šrafova, olakšaće posao i više neće gubiti živce na teško pristupnim mestima za rad.</p>
                </div>
            </li>
            <li>
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo4.png" alt="">
                </div>
                <div class="txt">
                    <h4>6 BITOVA</h4>
                    <p>Pored Snake Bit-a, ovaj praktičan alat dolazi sa  6 bitova – PH 1, PH 2 & PH 3, ravni- 3 mm, 4 mm & 6 mm.</p>
                </div>
            </li>
            <li>
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo5.png" alt="">
                </div>
                <div class="txt">
                    <h4>ŠTITI VAŠA LEĐA</h4>
                    <p>Odličan dodatak bilo kom arsenalu alata, fleksibilni adapter Snake Bit sigurno će ponovo učiniti mogućim te nemoguće poslove i spasiti vaša leđa od upadanja u nemoguće pozcije.</p>
                </div>
            </li>
        </ul>
        <div id="2" class="info_item">
            <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo6.jpg" alt="" style="width: 300px">
            <div class="text">
                <h3>SNAKE BIT - VAŠ ASISTENT U KUĆI</h3>
                <p>Multifunkcionalni šrafciger je posebno dizajniran radi odvrtanja i zavrtanja koji nam se čine nemogućim, uz pomoć njega brzo i lako da ćete završiti bilo koji posao oko kuće, u radionici, garaži ili na gradilištu. Idealan je za sve članove porodice, svojom praktičnošću i jednostavnošću svima će olakšati svakodnevnicu!</p>
            </div>
        </div>
    </div>
</section>
<section class="b2">
    <div class="wrap">
        <div id="5" class="kit">
            <h2 class="title" style="text-align: center;">PREDNOSTI SNAKE BIT ŠRAFCIGERA</h2>
            <ul class="ulfix">
                <li>
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo7.jpg" alt="">
                    </div>
                    <h3>MOŽE DA SE KORISTI KAO OBIČAN ŠRAFCIGER</h3>
                </li>
                <li>
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo8.jpg" alt="">
                    </div>
                    <h3>KORISTI SE KAO NASTAVAK ZA AKU BUŠILICU</h3>
                </li>
                <li>
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo9.jpg" alt="">
                    </div>
                    <h3>DOLAZI SA SVIM POTREBNIM NASTAVCIMA</h3>
                </li>
                <li>
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo10.jpg" alt="">
                    </div>
                    <h3>FLEKSIBILAN, KVALITETAN I PRAKTIČAN</h3>
                </li>
            </ul>
        </div>
    </div>
</section>
{{--<section id="4" class="b3">--}}
{{--    <div class="wrap">--}}
{{--        <h2 class="title" style="margin-bottom: 0"><span>Характеристики</span></h2>--}}
{{--        <div class="characteristic">--}}
{{--            <div class="slider owl-carousel slider1" style="width: 450px">--}}
{{--                <img src="{{ asset('/') }}dailysharkFiles/snakebit/1.jpg">--}}
{{--                <img src="{{ asset('/') }}dailysharkFiles/snakebit/2.jpg">--}}
{{--                <img src="{{ asset('/') }}dailysharkFiles/snakebit/3.jpg">--}}
{{--                <img src="{{ asset('/') }}dailysharkFiles/snakebit/4.jpg">--}}
{{--                <img src="{{ asset('/') }}dailysharkFiles/snakebit/5.jpg">--}}
{{--            </div>--}}
{{--            <ul>--}}
{{--                <li><b>Количество этапов заточки:</b> 2</li>--}}
{{--                <li><b>Угол заточки:</b> 15º</li>--}}
{{--                <li><b>Мощность двигателя:</b> 75 Вт</li>--}}
{{--                <li><b>Время заточки:</b> 1 - 1,5 мин</li>--}}
{{--                <li><b>Время доводки:</b> 10 сек</li>--}}
{{--                <li><b>Срок службы заточных элементов:</b> 2000 - 3000 (4 - 5 лет)--}}
{{--                </li>--}}
{{--                <li><b>Тип абразивного покрытия:</b> Алмаз</li>--}}
{{--                <li><b>Тип направляющей угла заточки:</b> Пружинный</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="ut clearfix">--}}
{{--            <p>Каждый знает, что ножи часто тупятся и требуют повторной заточки. Обычные ножеточки не обеспечивают--}}
{{--                длительный результат. С точилкой ножей Chef's Choice ножи остаются острыми как бритва на долго!--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section id="6" class="b4">
    <div class="wrap">
        <div class="pic">
            <img src="{{ asset('/') }}dailysharkFiles/snakebit/photo12.jpg" alt="">
        </div>
        <div class="text">
            <h3><span>ZAŠTO KUPITI <br>SNAKE BIT?</span></h3>
            <div class="plus">
                <ul>
                    <li>
                        <p>Sav potrebni alat u spakovan u jednom</p>
                    </li>
                    <li>
                        <p>Najpraktičniji proizvod na tržištu</p>
                    </li>
                    <li>
                        <p>Ne postoji nedostupno mesto za odvrtanje</p>
                    </li>
                    <li>
                        <p>Do sada već preko 6000 zadovoljnih kupaca</p>
                    </li>
                </ul>
            </div>
            <a href="#order" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>
<section id="7" class="reviews">
    <div class="wrap">
        <h2 class="title">UTISCI <span>NAŠIH KUPACA</span></h2>
        <div class="slider owl-carousel">
            <div class="item">
                <div class="text">
                    <img class="ava" src="{{ asset('/') }}dailysharkFiles/snakebit/photo13.jpg" alt="" style="padding: 0">
                    <div class="author"><b>Radovan Petrović,</b> 37 godina</div>
                    <p>Odličan proizvod, preporučujem ga svima u komšiluku, završava posao za par minuta! Što se tiče šrafcigera, koristim samo njega.</p>
                </div>
            </div>
            <div class="item">
                <div class="text">
                    <img class="ava" src="{{ asset('/') }}dailysharkFiles/snakebit/photo14.jpg" alt="" style="padding: 0">
                    <div class="author"><b>Anja Todorović,</b> 30 godina</div>
                    <p>Nisam verovala da ovako nešto postoji, svaka čast ko se setio da napravi ovo. Ne treba mi više muškarac za kućne poslove. 😀 Hvala!</p>
                </div>
            </div>
            <div class="item">
                <div class="text">
                    <img class="ava" src="{{ asset('/') }}dailysharkFiles/snakebit/photo15.jpg" alt="" style="padding: 0">
                    <div class="author"><b>Goran Bogdanović,</b> 50 godina</div>
                    <p>Snake bit mi je mnogo olakšao posao. Više ne gubim živce oko svake popravke. Ranije sam morao da se zavlačim i lomim ruke kada sklapam kuhinje, a sada to radim sa duplo manje vremena.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="8" class="order_steps">
    <div class="wrap">
        <h2 class="title">Poručite u 3 prosta koraka</h2>
        <div class="order_steps_list clrfix">
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/order_image1.jpg" alt="">
                    <div class="num">1</div>
                </div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/order_image2.jpg" alt="">
                    <div class="num">2</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu i šaljemo sutradan</p>
            </div>
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/snakebit/order_image3.jpg" alt="">
                    <div class="num">3</div>
                </div>
                <p>Plaćate kuriru brze pošte po preuzimanju paketa</p>
            </div>
        </div>
    </div>
</section>
<section id="9" class="offer bottom">
    <div class="wrap">
        <div class="box" style="padding-top: 10px;">
            <h1>MULTIFUNKCIONALNI ŠRAFCIGER <span>SNAKE BIT</span></h1>
            <h2>JEDINSTVENI I <span>APSOLUTNO NEOPHODAN ALAT!</span></h2>
            <div class="sale">Popust <b>-40%</b></div>
            <div class="plus">
                <ul>
                    <li>
                        <p style="font-weight: 600">Savija se u svim pravcima do 360 stepeni</p>
                    </li>
                    <li>
                        <p style="font-weight: 600">Dopire i do najnedostupnijih mesta</p>
                    </li>
                    <li>
                        <p style="font-weight: 600">Štedi novac i vreme</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="order_form">
            <div class="price clrfix">
                <div class="old_cost">
                    <div>Regularna cena:</div>
                    <p>
                        <i>
                            {{ $prices[1]['originalPrice'] }}
                        </i>
                        <span>
                           {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
                <div class="new_cost">
                    <div>Cena sa popustom:</div>
                    <p>
                        <i>
                            {{ $prices[1]['amount'] }}
                        </i>
                        <span>
                           {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
            </div>
            <form class="m1-form" id="order" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <button type="submit" class="button-m">Poručite sada</button>
                <div class="stock">Količine su ograničene</div>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $("a[href^='#'].button").click(function () {
            var o = $(this).attr("href");
            if ($("html, body").animate({
                scrollTop: $(o).offset().top + "px"
            }), "#order_form" == o) {
                var e = $(this).parent().find("h4").text();
                $("#order_form select[name='comment'] option[value='" + e + "']").prop("selected", !0)
            }
            return !1
        }), $(".slider").owlCarousel({
            items: 1,
            loop: !0,
            smartSpeed: 300,
            mouseDrag: !1,
            pullDrag: !1,
            dots: !1,
            nav: !0,
            navText: ""
        }), $(".reviews_list").owlCarousel({
            smartSpeed: 300,
            mouseDrag: !1,
            pullDrag: !1,
            dots: !1,
            navText: "",
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    nav: !0,
                    loop: !0
                },
                640: {
                    items: 2,
                    margin: 20,
                    nav: !0,
                    loop: !0
                },
                960: {
                    items: 3,
                    margin: 20,
                    nav: !1,
                    loop: !1
                }
            }
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>
