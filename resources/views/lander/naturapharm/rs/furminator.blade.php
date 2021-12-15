<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href=""/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <style>
        @font-face {
            font-family:'OfficinaSansBookC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBookC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBookC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBookC.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family:'OfficinaSansBoldC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBoldC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBoldC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBoldC.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family:'OfficinaSansBlackC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBlackC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBlackC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBlackC.otf') format('opentype');
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/furminator/style.css">
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>Расческа фурминатор для котов и кошек</h1>
        <h2>Незаменимый гаджет для груминга и домашнего ухода</h2>
        <ul class="plus">
            <li>Для шерсти длиной до 5см</li>
            <li>Снижает линьку до 90%</li>
            <li>Для кошек весом от 5кг</li>
        </ul>
        <div class="sale">
            Акция! <p>-53%</p> Скидка
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span><p>{{ $prices[1]['originalPrice'] }} RSD </p>
                </div>
                <div class="new-cost">
                    <span>Цена по акции:</span><p>{{ $prices[1]['amount'] }} RSD </p>
                </div>
            </div>
            <form class="main-order-form m1-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <h2 class="title">Преимущества <span>фурминатора</span></h2>
        <ul class="preim">
            <li>Эффективно снижает количество <br>колтунов, сохраняя здоровье <br>кожного покрова</li>
            <li>Рекомендуют ветеринары,<br> чтобы помочь предотвратить<br> опасные колтуны</li>
            <li>Кнопка FURejector легко удаляет <br>шерсть, делая процесс избавления от<br> линьки еще проще</li>
            <li>Безопасно и легко удаляет выпавшую<br> шерсть и подшерсток, не повреждая<br> кожу и шерсть</li>
            <li>Разработано профессиональными<br> грумерами</li>
            <li>Снижает линьку<br> до 90%</li>
        </ul>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2>Что такое <span>фурминатор?</span></h2>
        <p>Фурминатор для кошек – это расческа со специальным лезвием из крепкой стали, благодаря специальной конструкции которой, в процессе использования, вычесывается весь отмерший, выпадающий подшерсток, но не повреждаются остевые волоски.</p>
        <ul class="wat">
            <li>Не травмирует живые волоски в шерсти животного, мягко удаляя отмершие</li>
            <li>Уменьшает количество выпадающей шерсти питомца до 94%</li>
            <li>Обеспечивает салонный уход за кошкой в домашних условиях</li>
            <li>Улучшает внешний вид шерсти</li>
        </ul>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <p>Ветеринары всего мира настоятельно рекомендуют использовать именно такой вид чесалки для чистки шерсти животных. Так как использование данного приспособления помогает следить за здоровьем кошек и собак, а также обеспечивает профессиональный уход за животным прямо на дому</p>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <p>Материал, из которого изготовлено лезвие фурминатора, не счесывается со временем. Однократное приобретение такого гаджета <b>заменяет использование с тем же результатом 20 обычных чесалок.</b> Сопоставив цену одного фурминатора и 20 чесалок, несложно увидеть существенную разницу в пользу ноу-хау. Эффективность во время применения одинакова, как для длинношерстных кошек, так и для короткошерстных, а также применение такого вида чесалки способствует равномерному распределению жировой смазки, что позволяет шерсти кошек оставаться блестящей и гладкой.</p>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">Как правильно <span>пользоваться?</span></h2>
        <img src="{{ asset('/') }}naturapharmFiles/furminator/cat.jpg" alt="Расческа фурминатор для котов и кошек" title="Расческа фурминатор для котов и кошек">
        <ul class="use">
            <li><p>Нужно тщательно проверить тело кошки на наличие ран или различных сыпей, их быть не должно</p></li>
            <li><p>Прощупать и удалить все колтуны на шерсти питомца, это можно сделать специальным колтунорезом</p></li>
            <li><p>Вымыть и высушить шерсть животного, использование такой расчески на мокрую шерсть категорически запрещено</p></li>
            <li><p>Вычесывание шерсти проводите только по ее росту, не следует спешить и надавливать на инструмент</p></li>
            <li><p>Аккуратно удалять шерсть с живота, лапок и около гениталий животного, спешка и невнимательность могут причинить вред</p></li>
        </ul>
        <div class="note">
            Ветеринары и грумеры рекомендуют применять инструменты для стрижки и вычесывания два-три раза в месяц, в осенний и весенний период. Летом рекомендуют использование чесалок не более одного раза в полтора месяца. Зимой это может быть одноразовое профилактическое действие.
        </div>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <ul class="ship">
            <li><p>Доставка почтой в течение 1-10 рабочих дней. Стоимость доставки товара от 350р.</p></li>
            <li><p>Оплата заказов <br>осуществляется по факту <br>получения товара</p></li>
            <li><p>Вы вправе отказаться от <br>покупки в течение <br>14 дней</p></li>
        </ul>
    </div>
</section>
<section class="block8">
    <div class="wrap">
        <h2 class="title">Отзывы <span>покупателей</span></h2>
        <div class="reviews">
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r1.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Жалковская Анна, 24 года</h3>
                    <p>Я, если честно, даже подумать не могла, что какой-то прибор поможет удалить СТОЛЬКО шерсти. Самое интересное то, что от короткошерстной кошечки получается больше шерсти, чем от длинношерстной. Наверное потому, что старшей уже два года, а полноценного вычёсывания никогда не было и весь подшерсток выходит только сейчас. </p>
                </div>
            </div>
            <div>
                <div class="rev r2">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r2.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Николаева Ольга, 37 лет</h3>
                    <p>Фурминатор замечательная вещь, сделан на совесть, тяжёленький, удобная прорезиненная ручка, приятно лежит в руке, ничего не выскальзывает, металлические зубцы не царапают кожу питомца, всё происходит очень плавно и гладко, но надёжно. Еще понравилась специальная кнопка для того, чтобы удобнее было убирать шерсть.</p>
                </div>
            </div>
            <div>
                <div class="rev r3">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r3.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Тодорова Виктория, 29 лет</h3>
                    <p>В общем, фурминатором я очень довольна и нисколько не жалею и своём приобретении. И почему только раньше не купила?! Сплошные плюсы: лишняя шерсть и пух не летают по квартире, не скапливаются по углам, и кошка, наведя марафет, не заглатывает её в таких огромных количествах. И сама выглядит более красиво и ухоженно.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>Расческа фурминатор для котов и кошек</h1>
        <h2>Закажите фурминатор сегодня и получите скидку 53%</h2>
        <ul class="plus">
            <li>Для шерсти длиной до 5см</li>
            <li>Снижает линьку до 90%</li>
            <li>Для кошек весом от 5кг</li>
        </ul>
        <div class="sale">
            Акция! <p>-53%</p> Скидка
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span><p>{{ $prices[1]['originalPrice'] }} RSD</p>
                </div>
                <div class="new-cost">
                    <span>Цена по акции:</span><p>{{ $prices[1]['amount'] }} RSD</p>
                </div>
            </div>
            <form id="buy" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}naturapharmFiles/furminator/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.reviews').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>