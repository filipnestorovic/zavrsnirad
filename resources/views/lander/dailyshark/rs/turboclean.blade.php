<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/turboclean/info__image.jpg">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/turboclean/styles.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<header class="offer_section">
    <div class="wrapper scroll">
        <h4 class="subtitle">Чистящая щетка</h4>
        <h1 class="main_title">Turbo Scrub 360</h1>
        <p class="description">тяжелая уборка одним нажатием кнопки</p>
        <div class="discount">Акция! <span>50%</span> скидка</div>
        <ul>
            <li>Удобный, быстрый и легкий</li>
            <li>Хорошая производительность очистки</li>
            <li>360 оборотов в минуту</li>
        </ul>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Цена сегодня:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
    </div>
</header>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>Чистящая щетка <span>Turbo Scrub 360</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/turboclean/about__image.jpg" alt="Чистящая щетка Turbo Scrub 360">
        <div class="text_block">
            <p style="font-size: 20px;">Теперь вы можете убрать весь арсенал своей прачечной и сделать тяжелую уборку одним нажатием кнопки! Познакомьтесь с Turbo Scrub 360! Мощное автоматическое решение, которое освобождает вас от стресса! За несколько минут Turbo Scrub 360 удаляет грязь и ил из плиток, устраняет жир, накопленный в раковине и кухонной плите, и даже моет лобовое стекло вашего автомобиля гораздо более практичным и быстрым способом! Его долговечная батарея заставляет голову вращаться триста шестьдесят раз в минуту, чтобы сделать быстрый скраб, который превышает качество ручной очистки! Turbo Scrub 360 очень прост в использовании, очень быстрый и интуитивно понятный для сборки и немедленного использования.</p>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>Почему <span>Чистящая щетка Turbo Scrub 360</span>?</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit1_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Turbo Scrub 360 очень прост в использовании, очень быстрый и интуитивно понятный для сборки и немедленного использования.</h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit2_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Угловая щетка удаляет грязь с самых сложных мест, где обычная щетка не смогла бы.</h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit3_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>С удлинителем ручки, вы достигаете даже самых сложных мест, для чистки сверху донизу, без растягивания или сидения на корточках! </h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit4_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Его мощная плоская щетка всегда готова устранить самую жесткую грязь, такую ​​как жир, который накапливается в духовке!</h4>
            </div>
        </div>
    </div>
</section>
<section class="info_section">
    <div class="wrapper clearfix">
        <h2><span>Техническое описание:</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/turboclean/info__image.jpg" alt="Чистящая щетка Turbo Scrub 360">
        <div class="content_block scroll">
            <div class="text_block">
                <ul style="font-size: 26px;line-height: 40px;">
                    <li>Производитель: Turbo Scrub</li>
                    <li>Материал: ABS и силикон</li>
                    <li>Цвет: белый и черный</li>
                    <li>Рабочее время: около 60 минут.</li>
                    <li>Вращение под углом 120 градусов.</li>
                    <li>Может использоваться для работы с мылом, плесенью, грязью.</li>
                    <li>360 оборотов в минуту.</li>
                </ul>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Обычная цена:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Цена сегодня:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
        </div>
    </div>
</section>
<section class="set_section">
    <div class="wrapper">
        <h2><span>Turbo Scrub 360</span> можно использовать везде</h2>
        <div class="set_list clearfix">
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image1.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image2.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image3.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image4.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image5.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image6.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="opinion_section">
    <div class="wrapper">
        <div class="content_block">
            <h2>Чистящая щетка <span>Turbo Scrub 360</span></h2>
            <img src="{{ asset('/') }}dailysharkFiles/turboclean/opinion__image.jpg" alt="Чистящая щетка Turbo Scrub 360">
            <div class="text_block">
                <p>Turbo Scrub 360 является перезаряжаемым, беспроводным и полностью водонепроницаемым. Для очистки, там где вам это нужно больше всего, даже в саду, ванной или бассейне! И вы можете быть спокойны, потому что мягкие щетины не царапают поверхность! В результате получается безупречная чистота, быстро и без усилий! </p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2><span>Отзывы</span> наших покупателей</h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review1_photo.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
                <div class="text_block">
                    <div class="author_name">Анна Кравцова</div>
                    <p>Качественный и продуманный очиститель! Ванную чистит отлично. Очень удобный удлинитель ручки, уменьшает затраты времени и сил.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review2_photo.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
                <div class="text_block">
                    <div class="author_name">Иван Морисов</div>
                    <p>Изучив предложения различных производителей, выбрал для себя Чистящую щетку Turbo Scrub 360. Во-первых - компактность. Можно разделить все части, и удобно сложить в полку. Во-вторых - удобный удлинитель ручки, для быстрой и удобной чистки. Очиститель сделан качественно, пластик хороший, ручка удобная.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review3_photo.jpg" alt="Чистящая щетка Turbo Scrub 360">
                </div>
                <div class="text_block">
                    <div class="author_name">Ольга Телегина</div>
                    <p>Очиститель очень удобный. Удобнее, чем я себе представляла. Также отлично, что он крепкий, добротное и действительно неплохое качество. В общем, очень рекомендую, особенно тем, у кого мало времени на уборку. Вещь в хозяйстве необходимая.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>Доставка и оплата</h2>
        <div class="steps_list clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step1_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Заявка</h4>
                <p>Вы оставляете заявку на нашем сайте</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step2_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Отправка</h4>
                <p>Менеджер перезванивает для оформления заказа</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step3_image.jpg" alt="Чистящая щетка Turbo Scrub 360">
                <h4>Получение</h4>
                <p>Доставка по СНГ осуществляется почтой от 7 рабочих дней в зависимости от региона</p>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper">
        <h4 class="subtitle">Чистящая щетка</h4>
        <h3 class="main_title">Turbo Scrub 360</h3>
        <p class="description">тяжелая уборка одним нажатием кнопки</p>
        <div class="discount">Акция! <span>50%</span> скидка</div>
        <div class="form_block">
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Обычная цена:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Цена сегодня:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" type="text" name="name" placeholder="Ime i prezime" required="">
                <input class="field" type="tel" name="phone" placeholder="Telefon" required="">
                <button class="button" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $(".scroll").on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 1500);
        });
    });
</script>
</body>
</html>
