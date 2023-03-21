<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/cleanballz/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/cleanballz/style.css">
    <style>
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="topline">
            <div class="topbullets">
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon1.png" alt="">
                    <p>ИЗПРАЩАМЕ ПОРЪЧКИ В РАМКИТЕ НА 1-2 ДНИ</p>
                </div>
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon2.png" alt="">
                    <p>ПЛАЩАНЕ ПРИ ВЗЕМАНЕ НА СТОКАТА</p>
                </div>
                <div class="topbullets__item">
                    <img src="{{ asset('/') }}dailysharkFiles/cleanballz/top-icon3.png" alt="">
                    <p>ГАРАНЦИЯ ЗА КАЧЕСТВО</p>
                </div>
            </div>
        </div>
        <h1 class="top-title"> <span>CLEAN BALLZ</span></h1>
        <h2 class="subtitle">ПЕРЕТЕ СИ БЕЗ ДА КУПУВАТЕ ПЕРИЛЕН ПРЕПАРАТ</h2>
        <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product.png" alt="" class="product_img">
        <div class="bullets">
            <div class="bullets__item">
                <p>Екологична топка за пране без препарат - до 1000 пранета</p>
            </div>
            <div class="bullets__item">
                <p>Същият ефект като при скъпите препарати</p>
            </div>
        </div>
        <div class="toplead">
            <div>
                <p style="text-align: center;font-size: 20px;font-weight: 700;">40% отстъпка</p>
                <div class="price">
                    <div class="price__old">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                    <div class="price__new">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <div>
                <a class="btn" href="#order_form">Поръчайте с отстъпка</a>
            </div>
        </div>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <div class="about">
            <div class="about__left">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product2.png" alt="" class="about_img__large">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product2-2.png" alt="" class="about_img__small">
                <a class="btn" href="#order_form">Поръчайте с отстъпка</a>
            </div>
            <div class="about__right">
                <h2 class="title">Еко топката за пране не е чудодеен продукт</h2>
                <p>Неговите активни почистващи принципи са плод на дълбоко научно развитие с резултати, подобни на конвенционалните почистващи препарати без използване на химически продукти. Ето защо той е "екологичен" продукт.</p>
                <p>Вътрешността на продукта Еко перална топка съдържа четири различни естествени керамики. Тази керамика е научно определена за пране на дрехи без използване на препарати.
                    След анализи, извършени от различни научни организации, Еко топката за пране беше наградена за отличните си резултати по отношение на почистващ капацитет, запазване на цвета и сила на стерилизация.</p>
                <p>В сравнение с нормален процес на пране, пералната топка Eco постига отлични резултати по отношение на спестяване на препарат, вода, електричество и време.
                    Еко топката за пране е защитена от своя световен патент и търговска марка.</p>
            </div>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2 class="title">CLEAN BALLZ - Най-добрият перилен препарат в света и Европа</h2>
        <div class="preim">
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim1.jpg" alt="">
                <p><b>Заредете цялото пране в машината</b> и поставете Clean Ballz</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim2.jpg" alt="">
                <p><b>Оставете машината да работи както преди,</b> докато използвате праха за пране</p>
            </div>
            <div class="preim__item">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/preim3.jpg" alt="">
                <p>Малките топчета ще <b>променят състава на водата и ще произведат достатъчно пяна </b> за перфектно почистване на прането.</p>
            </div>
        </div>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <h2><span>НАШИ КЛИЕНТИ</span></h2>
        <p>99% от общия брой клиенти в света препоръчват този продукт</p>
        <div class="reviews">
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev1.png"><br>
                        <b>Калина Димитрова</b>
                    </center>
                    <p>Това наистина е чудо! Най-лошо ми беше, когато трябваше да харча пари за препарат. Аз го купувах нон-стоп, защото имам три малки деца. Видях от колеги от работа, че и те са купили това и казах да се опитаме, защо не. Не можете да повярвате колко е хубаво това. Изпира прането като скъпите прахове, по същото време омекотява материята, аз използвам много по-малко омекотител. Това напълно препороди бюджета ми.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev2.png"><br>
                        <b>Ивайло Петров</b>
                    </center>
                    <p>Имаме огромни разходи в семейството, вече знаете как е, деца, училищни екскурзии и така нататък. Говорих с жена ми как да намаля малко разходите и тя дойде с идеята за това. Първоначално бях скептичен, но след това поръчахме. Това е магия, няма какво друго да кажа. Мием с една и съща топка от 3 месеца и най-впечатляващото е, че изобщо не се е променила. Измива както първия ден! Всички препоръки, нямам какво друго да кажа.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="ree">
                    <center>  <img src="{{ asset('/') }}dailysharkFiles/cleanballz/rev3.png"><br>
                        <b>Станислав Георгиев</b>
                    </center>
                    <p>Купих Clean Ballz като подарък за майка ми. Казва, че това е най-доброто нещо, което съм й купувал досега. Майка ми е спестелива жена и винаги се грижеше да харчи пари. Точно затова е възхитена от това, а също така казва, че прането е много по-меко и по-качествено. Не дава допълнителен шум в пералнята.  Работи с същите програми, които са били използвани и преди. Съветвам всеки да си купи това малко чудо!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style></style>
<section class="block5">
    <div class="wrap">
        <h2 class="title">Характеристики:</h2>
        <div class="char-box">
            <div class="char-box__left">
                <ul class="char-box_list">
                    <li>Употреба: <span>Еко топка се използва предимно за пране на дрехи с пералня</span></li>
                    <li>Материал: <span>пластмаса, керамични топки</span></li>
                    <li>Цвят: <span> бял</span></li>
                    <li>Брой пранета в машината: <span>до 1000</span></li>
                    <li>Поддръжка: <span>сушене на въздух</span></li>
                    <li>Ниво на шум: <span> ниско</span></li>
                    <li>Оценка на продукта: <span> 9.8</span></li>
                    <li>Брой на нашите доволни клиенти: <span> 5500</span></li>
                    <li>За какви видове и цветове пране: <span> универсален</span></li>
                    <p style="padding: 25px 5px 5px 30px;"><b>Вътрешността на продукта Еко перална топка съдържа четири различни естествени керамики. Тази керамика е научно определена за пране на дрехи без използване на препарати.</b></p>
                </ul>
            </div>
            <div class="char-box__right">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/char.jpg" alt="">
            </div>
        </div>
        <a class="btn" href="#order_form">Поръчайте с отстъпка</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">Как да получите продуктите на CLEAN BALLZ?</h2>
        <div class="howto">
            <div class="howto__left">
                <div class="howto__ul">
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht1.png" alt=""></span>
                        <p><b>Оставете вашата информация за доставка</b> на нашия сайт.</p>
                    </div>
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht2.png" alt=""></span>
                        <p>Ние ще се свържем с вас за <b>потвърждение на поръчката</b> възможно най-скоро.</p>
                    </div>
                    <div class="howto__li">
                        <span><img src="{{ asset('/') }}dailysharkFiles/cleanballz/ht3.png" alt=""></span>
                        <p>Изпращаме с експресна поща в рамките на <b>1-2 работни дни.</b></p>
                    </div>
                </div>
            </div>
            <div class="howto__right">
                <img src="{{ asset('/') }}dailysharkFiles/cleanballz/maloy.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2> <span>CLEAN BALLZ</span></h2>
        <h3>Пране на дрехи без скъпи препарати</h3>
        <p class="subtitle">1 топка пере до 1000 перални</p>
        <img src="{{ asset('/') }}dailysharkFiles/cleanballz/product.png" alt="" class="foot-img">
        <div class="order-form" id="order_form">
            <p style="text-align: center;font-size: 20px;font-weight: 700;">40% отстъпка</p>
            <div class="price">
                <div class="price__old">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
                <div class="price__new">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="order-form__tile">ИНФОРМАЦИЯ ЗА ДОСТАВКА</div>
            <div class="order-form__subtitle"></div>
            <form class="main-order-form main-order-form mainform-body" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="mainform-body__field" name="name" type="text" placeholder="Име и фамилия" required>
                <input class="mainform-body__field" name="phone" type="tel" placeholder="Телефон" required>
                <input class="mainform-body__field" name="shipping_address" type="text" placeholder="Адрес" required>
                <input class="mainform-body__field" name="shipping_city" type="text" placeholder="Град" required>
                <button class="mainform-body__btn">Поръчай сега</button>
            </form>
        </div>
    </div>
</section>
<script src='{{ asset('/') }}dailysharkFiles/cleanballz/main.js'></script>
@include('components.pixel_footer')
</body>
</html>
