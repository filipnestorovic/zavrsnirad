<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/bratape/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/bratape/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/bratape/main.css" type="text/css"/>
    <style>
        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaBold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaBold.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaBold.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }

        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaLight.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaLight.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaLight.otf') format('opentype');
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }

        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaRegular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaRegular.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaRegular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')
    <section class="block-1">
        <h1>BRA TAPE <br> ЗА ПЕРФЕКТНО И ПРИВЛЕКАТЕЛНО ДЕКОЛЕКТИРАНЕ</h1>
        <div class="container-1">
            <div class="sale">ОТСТЪПКА <br/><strong>-40%</strong></div>
        </div>
        <div class="container-2">
            <div class="cost clearfix">
                        <span class="old-cost">
                            Редовна цена:<br/>
                            <span class="price_land_s4">{{ $prices[2]['originalPrice'] }}</span>
                            <span class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
                <span class="new-cost">
                            Цена сега:<br/>
                             <span class="price_land_s1">{{ $prices[2]['amount'] }}</span><span
                        class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
            </div>
            <a class="button-m" href="#zakaz">ПОРЪЧАЙ СЕГА</a>
        </div>
    </section>
    <section class="block-2">
        <p class="about">Bra Tapes с подплънки за зърната са надеждно и удобно решение за рокли без гръб и презрамки.
            Функционална лента, която повдига бюста ви, за да подчертае спокоен вид, за да се чувствате спокойни когато носите всякакъв вид рокля, като същевременно ви помага да постигнете желаната форма.</p>
    </section>
    <section class="block-3">
        <h2 class="title">
            НЕВИДИМИЯ СУТИЕН Е ИДЕАЛЕН ЗА:
        </h2>
        <ul class="clothes clearfix">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-1.jpg" alt="freebra">
                <p>Сватбена рокля</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-2.jpg" alt="freebra">
                <p>Рокля без презрамки</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-3.jpg" alt="freebra">
                <p>дълбоко деколте</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-4.jpg" alt="freebra">
                <p>Широки туники</p>
            </li>
        </ul>
        <div class="text">КАТО ЗА ВСЯКА ДРУГА ДРЕХА</div>
    </section>
    <section class="block-4">
        <h2 class="title">ПРЕДИМСТВА НА BRA TAPE</h2>
        <ul class="advant clearfix">
            <li>Забравете за масивните и тежки сутиени</li>
            <li>Носете любимите си рокли и топове без презрамки</li>
            <li>Освободи се oт видими презрамки и сутиени</li>
            <li>Не се притеснявайте да изберете правилния размер</li>
        </ul>
        <a class="button-m" href="#zakaz">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="block-9">
        <h2 class="title">КАК ДА ИЗПОЛЗВАМ</h2>
        <ul class="use">
            <li><b>1 -</b> Отлепете достатъчна дължина на лентата</li>
            <li><b>2 -</b> Поставете подложката във формата на цвете върху зърното</li>
            <li><b>3 -</b> Залепете лентата, за да направите желаната форма на гърдите</li>
        </ul>
    </section>
    <section class="block-10">
        <h2 class="title">НЕВИДИМИЯ СУТИЕН, УДОБЕН ЛИ Е?</h2>
        <div class="safe">Bra Tape е идеално удобен, здраво поддържа гърдите и ще се чувствате свободни и спокойни.
            Гърдите ще бъдат повдигнати колкото искате. Деколтето ви ще бъде прекалено добро и перфектно!</div>
        <a class="button-m" href="#zakaz">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="block-6">
        <h2 class="title">ВПЕЧАТЛЕНИЯ НА ДОВОЛНИ КЛИЕНТИ</h2>
        <div class="rev-slider clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-1.jpg" alt="отзывы fly bra">
                <h4>Габриела, 28 години</h4>
                <p>Обичам да изглеждам впечатляващо във всеки повод, затова имам много рокли без презрамки. Обичам тези презрамки, защото създават перфектното деколте и правят бюста да изглежда по-пълен. Всички колеги в работата ме гледат, всяка жена се впечатлява от нещо такова :)</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-2.jpg" alt="отзывы fly bra">
                <h4>Паулина, 20 години</h4>
                <p>Бях почти шаферка на една сватба и бях с рокля с отворен гръб. Не исках да нося сутиен, който се вижда, затова намерих тези презрамки за идеалното решение. Носих ги цял ден и съм много доволна. Ще продължа да ги използвам винаги, когато нося разголени дрехи и ще докладвам резултатите.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-3.jpg" alt="отзывы fly bra">
                <h4>Анастасия, 24 години</h4>
                <p>Търсих такъв продукт дълго време и най-накрая го намерих. Леле - гърдите ми са твърди като скала. Започнах да привличам погледите на мъже от обкръжението, които не ме бяха забелязвали преди. Всички препоръки за този продукт, топ е!</p>
            </div>
        </div>
    </section>
    <section class="block-5">
        <h2 class="title">ДОСТАВКА И ПЛАЩАНЕ</h2>
        <ul class="deliv">
            <li>
                <h4>ПОРЪЧАЙТЕ ПРОДУКТА</h4>
                <p>Оставете вашата информация за доставка на нашия сайт</p>
            </li>
            <li>
                <h4>ПОТВЪРЖДЕНИЕ НА ПОРЪЧКАТА</h4>
                <p>Ние ще се свържем с вас възможно най-скоро, за да потвърдим поръчката</p>
            </li>
            <li>
                <h4>ДОСТАВКА НА ПРОДУКТА</h4>
                <p>Доставяме с експресна поща до вашия адрес<br>
                    Плащате директно на куриера при доставка</p>
            </li>
        </ul>
    </section>
    <section class="block-8">
        <div class="title">ПОРЪЧАЙТЕ ЛЕНТИ ЗА СУТИЕН ДНЕС С 40% ОТСТЪПКА</div>
        <div class="container-1"></div>
        <div class="container-2">
            <div class="cost clearfix">
                        <span class="old-cost">
                            Редовна цена:<br/>
                            <span class="price_land_s4">{{ $prices[2]['originalPrice'] }}</span>
                            <span class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
                <span class="new-cost">
                            Цена с отстъпка:<br/>
                             <span class="price_land_s1">{{ $prices[2]['amount'] }}</span><span
                        class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
            </div>
            <div class="order" id="zakaz">
                <form class="m1-form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="hidden" name="quantity" value="2"/>
                    <div><input type="text" name="name" placeholder="Име и фамилия" required=""></div>
                    <div><input type="text" name="phone" id="phones" required="" placeholder="Телефон"></div>

                    <div><input type="text" name="shipping_address" placeholder="Адрес" required=""></div>
                    <div><input type="text" name="shipping_city" placeholder="Град" required=""></div>
                    <div><input type="text" name="shipping_zip" placeholder="Пощенски код" required=""></div>
                    <div>
                        <button class="button-m">ПОРЪЧАЙ СЕГА</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/bratape/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
