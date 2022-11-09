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
        <h2 class="title">ПРЕДИМСТВА НА ЛЕНТАТА ЗА СУТИЕН</h2>
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
                <h4>Gabriela Jovanov, 28 godina</h4>
                <p>Volim da izgledam impresivno u svakoj prilici, zato imam puno haljina bez bretela. Sviđaju mi se ove trake jer prave savršen dekolte i čine grudi bujnijim. Sve kolege na poslu me gledaju, svakoj ženi imponuje tako nešto :)</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-2.jpg" alt="отзывы fly bra">
                <h4>Pavelina Mirković, 20 godina</h4>
                <p>Skoro sam bila deveruša na svadbi i nosila sam haljinu sa otvorenim leđima. Nisam želela da nosim grudnjak koji se vidi, pa sam pronašla ove trake kao idealno rešenje. Nosila sam ih celog dana i jako sam zadovoljna. Nastaviću da ih koristim kada god nosim otvorenu odeću i javljam rezultate. </p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-3.jpg" alt="отзывы fly bra">
                <h4>Marija Mikuljević, 36 godina</h4>
                <p>Tražila sam dugo ovakav proizvod i konačno sam ga pronašla. Wow - moje grudi stoje čvrste kao stena. Počela sam da mamim poglede muškaraca iz okruženja koji me ranije nisu primećivali.
                    Sve preporuke za ovaj proizvod, vrh je!</p>
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
