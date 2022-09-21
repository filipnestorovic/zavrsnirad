<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/lipenlarger/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&amp;family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&amp;display=swap"
        rel="stylesheet">
    <style>
        /* Icons */
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/slick.eot');
            src: url('{{ asset('/') }}fonts/slickd41d.eot?#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick.woff') format('woff'), url('{{ asset('/') }}fonts/slick.ttf') format('truetype'), url('{{ asset('/') }}fonts/slick.svg#slick') format('svg');
        }
    </style>
</head>
<body>
<header class="bl1-1">
    <div class="bl1">
        <div class="lm">
            <p class="main-text">
                IMAN OF NOBLE Lipstick water<br>
                Тинт для губ
            </p>
            <div class="b1-d">
                <p class="b1-p">В подарок! </p>
                <p class="b1-mp">WARDA BEAUTY</p>
                <p class="b1-p">
                    brow styling soap<br>
                    colorless & lasting nature</p>
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/sale.png" class="b1-sale">
                <div class="b1-price">
                    <p class="old-prise">
                        {{ $prices[1]['originalPrice'] }}
                    </p>
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/line.png" class="line" width="70">
                    <p class="new-prise">
                        {{ $prices[1]['amount'] }}
                        <span class="b1-wal">{{ $prices[1]['currency'] }}</span></p>
                    <a href="#order_form" class="button fform">Заказать сейчас</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="bl2-2">
    <div class="bl2">
        <p class="main-text">
            ОПИСАНИЕ
        </p>
        <p class="bl2-m">
            IMAN OF NOBLE Lipstick water - Придаст вашим губам яркий, естественный оттенок, который не растекается, не
            оставляет следов на посуде и одежде,
            не смазывается при поцелуях. Держится более 8 часов. Невероятную стойкость средства обеспечивают пигменты,
            которые надолго впитываются в поверхность
            кожи. Не сушит кожу и абсолютно не ощущается на губах. Только яркий цвет и приятный аромат.
        </p>
        <div class="b2-fx">
            <div class="b2-l">
                <ul class="b2-u">
                    <li>· Бренд - IMAN OF NOBL</li>
                    <li>· вес - 10гр</li>
                    <li>· высота флакона - 4см</li>
                    <li>· глубина флакона - 2см</li>
                    <li>· Состав:<br>вода, глицерин, стеариновая кислота, пчелиный воск, парафиновая жидкость, масло
                        жожоба, масло ши, экстракт стевии и витамин Е
                    </li>
                </ul>
            </div>
            <div class="b2-r">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/bl2-img.png" class="bl2-img" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bl4-4">
    <div class="bl4">
        <p class="main-text">
            СПОСОБ ПРИМЕНЕНИЯ
        </p>
        <div class="bl4-f">
            <div class="bl4-d">
                <div class="bl4-p">1. Губы до нанесения тинта</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b1.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">2. Нанесите тинт в 1-2 слоя</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b2.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">3. Когда слой высохнет его нужно удалить с губ</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b3.png" class="bl4-img" alt="">
                </div>
            </div>
            <div class="bl4-d">
                <div class="bl4-p">4. Наслаждайтесь полученным результатом</div>
                <div class="bl4-im">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/b4.png" class="bl4-img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{--<section class="bl5-5">--}}
{{--    <div class="bl5">--}}
{{--        <p class="main-text">--}}
{{--            ФОТО--}}
{{--        </p>--}}
{{--        <div class="bl5-fl">--}}
{{--            <div class="bl5-f1">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d1.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d2.jpg" class="bl5-i" alt="">--}}
{{--            </div>--}}
{{--            <div class="bl5-f2">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d3.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d4.jpg" class="bl5-d4 bl5-i" alt="">--}}
{{--            </div>--}}
{{--            <div class="bl5-f3">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d5.jpg" class="bl5-i" alt="">--}}
{{--                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/d6.jpg" class="bl5-i" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="bl6-6">
    <div class="bl6">
        <p class="main-text">
            ОТЗЫВЫ
        </p>
        <div class="bl6-ot">
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o1.png" class="bl6-img" alt="">
                    <p class="bl6-name">Екатерина</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Очень понравилась упаковка, сам продукт очень приятно пахнет и сладковат на вкус.
                        Очень насыщенный цвет, стойкий. Мне нравится!
                    </div>
                </div>
            </div>
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o2.png" class="bl6-img" alt="">
                    <p class="bl6-name">Мария</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Думаю, что такой продукт может стать отличной покупкой и будет радовать своего
                        обладателя долгое время. Хорошее средство!
                    </div>
                </div>
            </div>
            <div class="bl6-fl">
                <div class="bl6-n">
                    <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/o3.png" class="bl6-img" alt="">
                    <p class="bl6-name">Ольга</p>
                </div>
                <div class="bl6-t">
                    <div class="bl6-p">Хороший продукт. Пол дня держится на отлично. Главное правильно наносить. Губы не
                        сушит. Приятный на вкус и запах.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bl7-7">
    <div class="bl7">
        <p class="main-text">
            КАК СДЕЛАТЬ ЗАКАЗ?
        </p>
        <div class="bl7-fl">
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k1.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">ОФОРМЛЕНИЕ</p>
                    <p class="bl7-p">Оставьте заявку на нашем сайте, и мы свяжемся с вами для оформления заказа.</p>
                </div>
            </div>
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k2.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">ДОСТАВКА</p>
                    <p class="bl7-p">Мы отправляем ваш заказ почтой или курьером. Время доставки от 2 до 10 рабочих
                        дней.</p>
                </div>
            </div>
            <div class="bl7-d">
                <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/k3.png" class="bl7-k" alt="">
                <div class="bl7-t">
                    <p class="bl7-m">ОПЛАТА</p>
                    <p class="bl7-p">Никакой предоплаты! Вы оплачиваете заказ при получении товара.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bl8-1">
    <div class="bl8">
        <div class="bl8-lm">
            <p class="main-text">
                IMAN OF NOBLE Lipstick water<br>
                Тинт для губ
            </p>
            <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/sale.png" class="b8-sale">

            <div class="b8-d">
                <div class="bl8-l">
                    <p class="b8-p">В подарок! </p>
                    <p class="b8-mp">WARDA BEAUTY</p>
                    <p class="b8-p">
                        brow styling soap<br>
                        colorless & lasting nature</p>
                </div>
                <div class="bl8-r">
                    <div class="b8-price">
                        <p class="old-prise2">
                            {{ $prices[1]['originalPrice'] }}
                        </p>
                        <img src="{{ asset('/') }}purplerelaxFiles/lipenlarger/line.png" class="line2" width="80">
                        <p class="new-prise2">
                            {{ $prices[1]['amount'] }}
                            <span class="b1-wal">{{ $prices[1]['currency'] }}</span></p>
                        <a href="#order_form" class="button fform">Заказать сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="myModal2" class="modal2">
    <div class="modal-content">
        <div class="slide-block-text">
            <div id="form-wrapper1" class="form form-wrapper">
                <div class="form_block">
                    <div class="offer_section offer3">
                        <p class="up-t">Оформить заказ</p>
                        <form id="order_form" class="order_form" action="#" method="post">
                            <input class="field" type="text" name="name" placeholder="Имя..." required="" value="">
                            <input class="field" type="tel" name="phone" placeholder="Телефон..." required="" value="">
                            <button class="button" type="submit">Купить</button>
                            <!-- HIDDENS -->

                            <!-- HIDDENS -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/lipenlarger/popup.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $('.slider').slick({
        arrows: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1160,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 800,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
</body>
</html>
