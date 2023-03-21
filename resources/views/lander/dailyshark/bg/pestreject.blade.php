<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=375">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/pestreject/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/pestreject/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/pestreject/swiper-bundle.css">
    <script src="{{ asset('/') }}dailysharkFiles/pestreject/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}dailysharkFiles/pestreject/function.js"></script>
    <style>
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/ArialMT.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/Arial-BoldMT.woff') format('woff');
            font-weight: bold;
            font-style: normal;
        }
        @font-face {
            font-family: 'Arial';
            src: url('{{ asset('/') }}fonts/Arial-Black.woff') format('woff');
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="header">
         <span class="prodname">
         Pest Reject
         </span>
    <div class="cont">
        <div class="btn-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header-content">
            <nav class="nav">
                <ul>
                    <li>
                        <a href="#about">
                            Problemi
                        </a>
                    </li>
                    <li>
                        <a href="#reviews">
                            Utisci kupaca
                        </a>
                    </li>
                    <li>
                        <a href="#delivery">
                            Kako poručiti
                        </a>
                    </li>
                    <li>
                        <a href="#bottom_form">
                            Poručite odmah
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="block_1">
        <div class="red-top">
            <p>
                Отървете се от хлебарки, мишки и насекоми
            </p>
        </div>
        <div class="flex-bot">
            <div class="item">
                <p>
                    БЕЗОПАСЕН ЗА ДЕЦА И ДОМАШНИ ЛЮБИМЦИ
                </p>
            </div>
            <div class="item">
                <p>
                    ПРОСТО ТРЯБВА ДА ВКЛЮЧИТЕ УСТСРОЙСТВОТО В КОНТАКТА
                </p>
            </div>
            <div class="item">
                <p>
                    ЕДНО УСТРОЙСТВО ПОКРИВА ЦЯЛАТА СТАЯ
                </p>
            </div>
        </div>
    </div>
    <div class="offer-block">
        <div class="promo-plashka">
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/promo-zhuk.png" class="promo-zhuk">
            <div class="promo-round">
                <div class="promo-round-inner">
                    <p style="direction: ltr;">
                        40%
                    </p>
                </div>
            </div>
            <div class="promo-top">
                <p>
                    ПРЕДЛОЖЕНИЕ САМО ДНЕС
                </p>
            </div>
            <div class="promo-bot">
                <p>
                    ОТСТЪПКА
                </p>
            </div>
        </div>
        <div class="form-wrap">
            <div class="prices">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/product.png" class="form-prod">
                <div class="price-block">
                    <p class="underline">
                        ВЪЗПОЛЗВАЙТЕ СЕ ОТ СПЕЦИАЛНАТА ОФЕРТА
                    </p>
                    <p class="neon">
                        40% ОТСТЪПКА
                    </p>
                    <p class="old-price">
                        <s>
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </s>
                    </p>
                    <p class="new-price">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Име и фамилия" required="">
                <input type="tel" name="phone" placeholder="Телефон" required="">
                <select name="quantity" class="quantity" required>
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                        </option>
                    @endforeach
                </select>
                <button class="button" type="submit">
                    Поръчай сега
                </button>
            </form>
        </div>
    </div>
    <div class="block_2" id="about">
        <h1>
            Уморени ли сте от вредители в <span class="red"> дома си?</span>
        </h1>
        <div class="flex">
            <div class="item">
                <p>
                    Домът ви е пълен с насекоми, хлебарки и мишки?
                </p>
            </div>
            <div class="item">
                <p>
                    Не можете да се справите с гризачи?
                </p>
            </div>
            <div class="item">
                <p>
                    Вашият метод неефективен ли е?
                </p>
            </div>
            <div class="item">
                <p>
                    Имате ли паяци в къщата си?
                </p>
            </div>
        </div>
        <h1>
            <span class="red">Това е ужасно!</span>
            Но сега вече има решение на тези проблеми!
        </h1>
    </div>
    <div class="block_3">
        <h1>
            Включете по едно устройство във всяка стая и се насладете на дом без насекоми и гризачи!
        </h1>
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/block3-prod.png" class="prod-abs">
        <p>
            <b>Този екологичен уред - ултразвуков прогонител на вредители и гризачи ще ви помогне в борбата с тях.</b>
        </p>
        <p>Просто включете Pest Reject в контакт и той ще започне да произвежда ултразвукови импулси,
            които отблъскват насекоми и гризачи 24 часа в денонощието. Устройството не ги убива, а ги кара да бягат възможно най-далеч,
            за да не се налага да ги събирате из дома си.</p>
    </div>
{{--    <div id="video" class="video_block" style="max-width: 480px; height: auto">--}}
{{--        <div class="video">--}}
{{--            <video controls="" class="main-video" playsinline preload="metadata">--}}
{{--                <source src="{{ asset('/') }}dailysharkFiles/pestreject/video_1.mp4" type="video/mp4">--}}
{{--                Your browser does not support the video tag.--}}
{{--            </video>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="block_4">
        <p>Включете едното устройство в кухнята (любимото място на вредителите),
            а другото в някоя от другите стаи и вредителите никога повече няма да дойдат в дома ви.
            Радиусът на едно устройство е 15 квадратни метра. Така че 2 устройства са достатъчни за малък апартамент.</p>
        <div class="item">
            <h1>
                МАЛЪК АПАРТАМЕНТ
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img1.png">
        </div>
        <div class="item">
            <h1>
                СРЕДЕН АПАРТАМЕНТ
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img2.png">
        </div>
        <div class="item">
            <h1>
                ГОЛЯМ АПАРТАМЕНТ
            </h1>
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/block4-img3.png">
        </div>
        <a href="#bottom_form" class="button">
            Поръчай сега
        </a>
    </div>
    <div class="block_5">
        <h1 style="font-size: 36px; margin-bottom: 10px;">
            ЗА 24 ЧАСА
        </h1>
        <h1>
            вредителите и насекомите ще избягат от дома ви
        </h1>
    </div>
    <div class="rev_block">
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev-block1.png">
    </div>
    <div class="block_6">
        <div class="block_6--wrapper">
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Ефективен</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item1.jpg" alt="item1">
                </div>
                <p>
                    Благодарение на честотата на ултразвуковите вълни отблъсква незабавно всички насекоми и гризачи.
                </p>
            </div>
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3 style="font-size: 20px; line-height: 18px;">Безопасно</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item2.jpg" alt="item2">
                </div>
                <p>
                    Безопасен е за хора, котки, кучета и други домашни любимци.
                </p>
            </div>
        </div>
        <div class="block_6--wrapper">
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Голямо <br/> покритие</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item3.jpg" alt="item3">
                </div>
                <p>
                    Едно устройство обхваща площ от 15 квадратни метра.
                </p>
            </div>
            <div class="block_6--item">
                <div class="block_6--item--container">
                    <h3>Широко предназначение</h3>
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block_6--item4.jpg" alt="item4">
                </div>
                <p>
                    Може да се използва в апартамент, офис, гараж, магазин, мазе или друго място.
                </p>
            </div>
        </div>
    </div>
    <a href="#bottom_form" class="button">
        Поръчай сега
    </a>
    <div class="block_7">
        <h1>
            <span class="red">Уред номер 1 </span>в борбата с насекоми и гризачи!
        </h1>
        <div class="list-block">
            <ul class="list">
                <li>
                    Приятел на околната среда
                </li>
                <li>
                    Лесен за използване
                </li>
                <li>
                    Защитава 24/7/7
                </li>
            </ul>
        </div>
        <h1>
            Ефективен срещу всички вредители
        </h1>
        <div class="flex">
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item1.png">
                </div>
                <p>
                    буболечки
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item2.png">
                </div>
                <p>
                    дървеници
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item3.png">
                </div>
                <p>
                    плъхове
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item4.png">
                </div>
                <p>
                    паяци
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item5.png">
                </div>
                <p>
                    мравки
                </p>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/block7_item6.png">
                </div>
                <p>
                    хлебарки
                </p>
            </div>
        </div>
    </div>
    <div class="rev_block">
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev-block2.png">
    </div>
    <div class="block_8">
        <h2>
            Мислите, че Pest Reject не може да реши проблема ви?
        </h2>
        <h2 style="font-size: 39px; line-height: 45px;">
               <span class="red">Определено ще ви помогне!</span>
        </h2>
        <h2 style="font-size: 24px; line-height: 28px;">
            Pest Reject ще ви отърве от вредители!
        </h2>
        <div class="item mice">
            <div class="text">
                <p class="red">
                    МИШКИ И ГРИЗАЧИ
                </p>
                <p>
                    <b>
                        Ще изчезнат за
                    </b>
                </p>
                <h1>
                    3 ДНИ
                </h1>
            </div>
        </div>
        <div class="item cockroach1">
            <div class="text">
                <p class="red">
                    ХЛЕБАРКИ
                </p>
                <p>
                    <b>
                        Ще изчезнат за
                    </b>
                </p>
                <h1>
                    48 ЧАСА
                </h1>
            </div>
        </div>
        <div class="item cockroach2">
            <div class="text">
                <p class="red">
                    ДЪРВЕНИЦИ
                </p>
                <p>
                    <b>
                        Ще изчезнат за
                    </b>
                </p>
                <h1>
                    3 ДНИ
                </h1>
            </div>
        </div>
        <div class="item krot">
            <div class="text">
                <p class="red">
                    ЗМИИ И КЪРТИЦИ
                </p>
                <p>
                    <b>
                        Ще изчезнат за
                    </b>
                </p>
                <h1>
                    48 ЧАСА
                </h1>
            </div>
        </div>
    </div>
    <div class="block_vote vote_section gray_theme">
        <div class="block_vote--inner">
            <h1>
                Pest Reject помогна ли ви?
            </h1>
            <div class="questions_list">
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        ДА
                    </div>
                    <div class="percents">82%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        НЕ
                    </div>
                    <div class="percents">
                        4%
                    </div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">
                        Още не съм купил
                    </div>
                    <div class="percents">
                        14%
                    </div>
                </div>
            </div>
            <div class="voice_count">
                <b>975</b> гласа
            </div>
        </div>
        <a href="#bottom_form" class="button">
            Поръчай сега
        </a>
    </div>
    <div class="reviews_container" id="reviews">
        <h1>
            Впечатления на клиентите
        </h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_3.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Десислава Димитрова, 28
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Преди година послушах съседа си и купих отрова за хлебарки. Отровата беше ефективна в кухнята, но ги прогони в моята стая и направи още по-голям проблем. Едва когато си купих Pest Reject, успях да разреша проблема напълно. Вече няколко месеца не съм виждал нито една хлебарка.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_1.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Мартин Иванов, 33
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Имам мишки от 3 години. Уморих се да се борба с тях. Капаните за мишки не работеха добре.
                                    Купих този продукт и е страхотен, вече няма мишки и много съм доволен.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-border">
                        <div class="slide-content">
                            <img src="{{ asset('/') }}dailysharkFiles/pestreject/rev_2.jpg" alt="">
                            <div class="info-wrap">
                                <div class="rating">
                                 <span class="name">
                                     Иван Петров, 45
                                 </span>
                                    <img src="{{ asset('/') }}dailysharkFiles/pestreject/stars.svg" alt=""
                                         class="stars">
                                </div>
                                <p class="text">
                                    Обикновено не вярвам на този тип продукти, но след като хлебарки се появиха в хола ми, реших да опитам. Сякаш отнесен на ръка. Не съм виждал нито един повече от 6 месеца. Препоръчвам Pest Reject на всеки, който има подобни проблеми.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="delivery" id="delivery">
        <h1>
            ПОРЪЧАЙТЕ, КАТО ВЪВЕДЕТЕ ВАШИТЕ ДАННИ НА НАШИЯ УЕБСАЙТ
        </h1>
        <img src="{{ asset('/') }}dailysharkFiles/pestreject/del-gif.gif" class="del-gif">
        <div class="del-list">
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del3.svg">
                <p>
                    Ние ще се свържем с вас, за да потвърдим поръчката ви
                </p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del1.svg">
                <p>
                    Изпращаме в рамките на 1-2 работни дни
                </p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/del2.svg">
                <p>
                    Плащате на куриера на експресната поща при получаване на пакета
                </p>
            </div>
        </div>
    </div>
    <div class="block_1">
        <div class="red-top">
            <p>
                Отървете се от хлебарки, мишки и насекоми
            </p>
        </div>
        <div class="flex-bot">
            <div class="item">
                <p>
                    БЕЗОПАСЕН ЗА ДЕЦА И ДОМАШНИ ЛЮБИМЦИ
                </p>
            </div>
            <div class="item">
                <p>
                    ПРОСТО ТРЯБВА ДА ВКЛЮЧИТЕ УСТСРОЙСТВОТО В КОНТАКТА
                </p>
            </div>
            <div class="item">
                <p>
                    ЕДНО УСТРОЙСТВО ПОКРИВА ЦЯЛАТА СТАЯ
                </p>
            </div>
        </div>
    </div>
    <div class="offer-block">
        <div class="promo-plashka">
            <img src="{{ asset('/') }}dailysharkFiles/pestreject/promo-zhuk.png" class="promo-zhuk">
            <div class="promo-round">
                <div class="promo-round-inner">
                    <p style="direction: ltr;">
                        40%
                    </p>
                </div>
            </div>
            <div class="promo-top">
                <p>
                    ПРЕДЛОЖЕНИЕ САМО ДНЕС
                </p>
            </div>
            <div class="promo-bot">
                <p>
                    ОТСТЪПКА
                </p>
            </div>
        </div>
        <div class="form-wrap">
            <div class="prices">
                <img src="{{ asset('/') }}dailysharkFiles/pestreject/product.png" class="form-prod">
                <div class="price-block">
                    <p class="underline">
                        ВЪЗПОЛЗВАЙТЕ СЕ ОТ СПЕЦИАЛНАТА ОФЕРТА
                    </p>
                    <p class="neon">
                        40% ОТСТЪПКА
                    </p>
                    <p class="old-price">
                        <s>
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </s>
                    </p>
                    <p class="new-price">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="bottom_form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Име и фамилия" required="">
                <input type="tel" name="phone" placeholder="Телефон" required="">
                <select name="quantity" class="quantity" required>
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                        </option>
                    @endforeach
                </select>
                <button class="button" type="submit">
                    Поръчай сега
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 23,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
@include('components.pixel_footer')
</body>
</html>
