<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/settings.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweetbelt/style.css">
    <style>@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Italic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Montserrat';src:url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'),url('{{ asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');font-weight:900;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="header-one">
    <div class="wrap">
        <h1>Sweet Sweat</h1>
        <h2>Термопояс для похудения</h2>
        <div class="tovar-sale">скидка <span>-53%</span></div>
        <ul class="header-one_plus">
            <li>
                <p>Ускоряет процесс жиросжигания</p>
            </li>
            <li>
                <p>Выводит лишнюю воду и токсины</p>
            </li>
            <li>
                <p>Улучшает кровообращение</p>
            </li>
            <li>
                <p>Снижает нагрузку на спину</p>
            </li>
        </ul>
        <div class="offer_left">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span>
                    <p>
                        <span>
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small>
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Цена сегодня:</span>
                    <p>
                        {{ $prices[1]['amount'] }}
                        <small>
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poruči sada</a>
        </div>
    </div>
</section>
<section class="sect2">
    <div class="wrap">
        <h2 class="title"><span>Роскошная фигура</span> с уникальным поясом для похудения</h2>
        <div class="benef_block">
            <img src="{{ asset('/') }}flexonikFiles/sweetbelt/s2_img.jpg" alt="">
            <p><span><span>в 3 раза</span> эффективнее</span> вывод воды и&nbsp;токсинов</p>
        </div>
        <div class="description">
            <p>Sweet Sweat существенно повышает эффективность любой физической нагрузки. Усиливая кровоснабжение тканей и термогенез, значительно <span>увеличивает количество потраченных калорий во время тренировки и усиливает потоотделение</span> больше, чем вы могли бы подумать.</p>
            <img src="{{ asset('/') }}flexonikFiles/sweetbelt/1.gif" alt="">
            <p>За счет усиленного кровообращения в мышцах и тканях, <span>ускоряет разогрев и восстановление, помогает избежать травм</span> и выводит гораздо больше лишней воды и токсинов, помогая вам достичь своей цели гораздо быстрее.</p>
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrap">
        <h2 class="title"><span>Основные преимущества</span></h2>
        <div class="benef_container clearfix">
            <ul class="benef_list2 list_left">
                <li>
                    <span>01</span>
                    <p>Ускоряет процесс жиросжигания</p>
                </li>
                <li>
                    <span>02</span>
                    <p>Выводит лишнюю воду и токсины</p>
                </li>
                <li>
                    <span>03</span>
                    <p>Усиливает мышечную активность</p>
                </li>
            </ul>
            <ul class="benef_list2 list_right">
                <li>
                    <span>04</span>
                    <p>Ускоряет восстановление сил</p>
                </li>
                <li>
                    <span>05</span>
                    <p>Улучшает кровообращение</p>
                </li>
                <li>
                    <span>06</span>
                    <p>Разогревает мышцы и&nbsp;ткани</p>
                </li>
            </ul>
        </div>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="gallery_sect">
    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/gallery.jpg" class="carousel" alt="" width="2004" height="200">
</section>
<section class="sect4">
    <div class="wrap">
        <h2 class="title"><span>Для чего нужен пояс Sweet Sweat</span></h2>
        <ul class="benef1">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img1.jpg" alt="">
                <p>Эффективная борьба с лишними килограммами</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img2.jpg" alt="">
                <p>Повышение продуктивности при занятии спортом</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img3.jpg" alt="">
                <p>Устранение вреда от сидячего образа жизни</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweetbelt/benef1_img4.jpg" alt="">
                <p>Быстрое восстановление фигуры после родов</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="sect3">
    <div class="wrap">
        <h2 class="title"><span>Характеристики</span> и советы по использованию</h2>
        <img src="{{ asset('/') }}flexonikFiles/sweetbelt/s3_img.jpg" alt="">
        <ul class="char_list">
            <li><b>Размер:</b> универсальный</li>
            <li><b>Материал:</b> 100% безлатексный неопрен</li>
            <li><b>Цвет:</b> черный, желтый</li>
            <li><b>Уход:</b> не стирать, промыть под струей воды</li>
        </ul>
    </div>
</section>
<section class="sect6">
    <div class="wrap nopad">
        <h2 class="title"><span>Отзывы покупателей</span></h2>
        <div class="reviews">
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev1.jpg" alt="">
                    <div class="info">
                        <p>Анатолий С. <br>26 лет</p>
                    </div>
                    <p>Мне кажется, что каждый мужчина хочет иметь хорошую форму, потому что женщины в первую очередь обращают на это внимание. Купил себе Sweet Sweat и теперь выгляжу отлично, даже лучше. При этом занимаюсь спортом всего 20-30 минут в день и не думаю о питании, потому что лишний вес тоже сжигается легко.</p>
                </div>
            </div>
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev2.jpg" alt="">
                    <div class="info">
                        <p>Светлана Х. <br>32 года</p>
                    </div>
                    <p>Пояс просто находка. Надеваешь и фигура моментально преображается. Ношу 2 недели и уже заметен результат. Талия стала уже и животик уменьшился. Посоветовала всем моим подругам, они тоже оценили пояс. Sweet Sweat верный путь к идеальной талии!</p>
                </div>
            </div>
            <div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}flexonikFiles/sweetbelt/rev3.jpg" alt="">
                    <div class="info">
                        <p>Евгений Г. <br>34 года</p>
                    </div>
                    <p>Мне пояс Sweet Sweat помог избавиться от живота, который стал появляться после 30. И вес я тоже начал набирать стремительно. Я решил попробовать, чтобы привести себя в форму. Пояс отлично помогает: живот практически пропал и мышцы появились! Почему я раньше о нём не узнал.</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poruči sada</a>
    </div>
</section>
<section class="sect7">
    <div class="wrap nopad">
        <h2 class="title"><span>Доставка и гарантия</span></h2>
        <ul class="order_list clearfix">
            <li>
                <span>01</span>
                <div class="text">
                    <p>Оставляете <br>заявку <br>на сайте</p>
                </div>
            </li>
            <li>
                <span>02</span>
                <div class="text">
                    <p>Наш менеджер <br>уточняет детали <br>заказа</p>
                </div>
            </li>
            <li>
                <span>03</span>
                <div class="text">
                    <p>Доставляем <br>ваш товар в течение <br>3-10 дней</p>
                </div>
            </li>
            <li>
                <span>04</span>
                <div class="text">
                    <p>Оплачиваете <br>посылку при <br>получении</p>
                </div>
            </li>
        </ul>
        <div class="alert">Мы всегда проверяем товар перед отправкой и гарантируем 100% качество</div>
    </div>
</section>
<section class="header-one bott_sect">
    <div class="wrap">
        <h2>
            Оставьте заявку и получите пояс Sweet Sweat
            <span>
                  c выгодой
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </h2>
        <div class="tovar-sale">скидка <span>-53%</span></div>
        <div class="formbox">
            <div class="offer_left">
                <div class="price clearfix">
                    <div class="old-cost">
                        <span>Обычная цена:</span>
                        <p>
                           <span>
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                            <small>
                                RSD
                            </small>
                        </p>
                    </div>
                    <div class="new-cost">
                        <span>Цена сегодня:</span>
                        <p>
                            {{ $prices[1]['amount'] }}
                            <small>
                                RSD
                            </small>
                        </p>
                    </div>
                </div>
                <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                    <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                    <button class="button-m">Poruči sada</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/sweetbelt/jquery.panorama.js"></script>
<script>
    $('.carousel').panorama();
    $('.reviews').slick({
        dots: false,
        infinite: true,
        speed: 200,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 660,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
@include('components.pixel_footer')
</body>
</html>