<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/favicon.png" type="icon/png">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/style.css">
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1> PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">МУЛТИФУНКЦИОНАЛЕН ИМПУЛСЕН МАСАЖОР ЗА ВРАТ</h2>
        <div class="sale"> САМО ДНЕС! <span> -40%</span> <b> ОТСТЪПКА</b></div>
        <div class="effect">Професионален масажен ефект</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="checklist">
            <li>
                <p>Незабавно облекчава болката</p>
            </li>
            <li>
                <p>Действа релаксиращо</p>
            </li>
            <li>
                <p>Подобрява качеството на съня</p>
            </li>
        </ul>
        <div class="formbox">
            <h3>ПОБЪРЗАЙТЕ ДА ПОРЪЧАТЕ С 40% ОТСТЪПКА</h3>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
            </ul>
            <a href="#order_form" class="btn">ПОРЪЧАЙ СЕГА</a>
        </div>
    </section>
    <section class="b2">
        <h2 class="title"><span>Отървете се от болката </span> само с няколко минути масаж на ден</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/b2.jpg" alt>
        <p>Purple Relax е интелигентен вибриращ масажор, който работи с електромагнитни импулси за подобряване на микроциркулацията на кръвта.
            <b>Електрическите импулси раздвижват мускулите, нормализират кръвообращението,
                насищат клетките и тъканите с кислород и имат положителен ефект върху нервната система.</b></p>
        <p>Масажорът Purple Relax <b>бързо облекчава напрежението, болката и умората, у дома, в офиса или на път.</b>
            В същото време ще получите приятен, дълбок и релаксиращ масаж, сравним с работата на професионален масажист.</p>
        <span>ПРАКТИЧЕН УРЕД, МУЛТИФУНКЦИОНАЛЕН:</span>
        <ul class="checklist">
            <li>
                <p>Отпуска мускулите на врата</p>
            </li>
            <li>
                <p>Облекчава главоболието</p>
            </li>
            <li>
                <p>Подобрява кръвообращението</p>
            </li>
            <li>
                <p>Помага за преодоляване на безсънието</p>
            </li>
            <li>
                <p>Препоръчва се при болки във врата и мускулите</p>
            </li>
            <li>
                <p>Дава заряд на бодрост и добро настроение</p>
            </li>
        </ul>
        <a href="#order_form" class="btn">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="b3 gradient">
        <h2 class="title">Един от най-добрите ефективни масажори в своя клас</h2>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best1.jpg" alt>
            <p><b>6 РЕЖИМА НА МАСАЖ С РАЗЛИЧЕН ИНТЕНЗИТЕТ</b>
                Те ви позволяват да персонализирате удобен режим на масаж, подходящ за всеки повод.
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best2.jpg" alt>
            <p><b>ДЪЛБОКО ПРОНИКВАНЕ В МУСКУЛИТЕ</b>
                Електрическите импулси проникват дълбоко в мускулите и ги активират напълно.
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best3.jpg" alt>
            <p><b>ДОПЪЛНИТЕЛНИ ПРОДЪЛЖЕНИЯ</b>
                За масаж на всяка част от тялото: рамене, гръб, крака, ръце
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best4.jpg" alt>
            <p><b>УДОБЕН И КОМПАКТЕН</b>
                Не заема много място, работи с 2 ААА батерии, така че можете да го носите със себе си, където и да отидете
            </p>
        </div>
        <a href="#order_form" class="btn">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="b4">
        <h2 class="title"><span>Кой има нужда от</span><br> Purple Relax масажор?</h2>
        <p>Благодарение на своята универсалност, масажорът Purple Relax се препоръчва за всички, но е особено полезен за следните категории хора:</p>
        <div class="body">
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body1.jpg" alt>
                <p> Персонал</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body2.jpg" alt>
                <p>Студенти и ученици</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body3.jpg" alt>
                <p> Спортисти</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body4.jpg" alt>
                <p>Всеки, който страдат от болки във врата и мигрена</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body5.jpg" alt>
                <p>Тези, които имат проблеми със съня</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body6.jpg" alt>
                <p>Тези, които водят заседнал начин на живот</p>
            </div>
        </div>
        <a href="#order_form" class="btn">ПОРЪЧАЙ С ОТСТЪПКА</a>
    </section>
    <section class="b5 gradient">
        <h2 class="title">Насладете се на масажа на всяка част от тялото. Просто го включете и поставете и ще усетите приятен облекчаващ масаж.</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body_grad.jpg" alt>
        <p>
            Масажните електроди ефективно облекчават болката в мускулите: <b>натъртвания, спазми, навяхвания и допринасят за тяхното укрепване,</b>
            благодарение на директния ефект на електромагнетните импулси, които принуждават мускулите да се свиват.
            <b>Електродите представляват две меки хипоалергенни пластини със залепващ проводящ гел слой,</b> които улеснява закрепването им към тялото.
        </p>
    </section>
    <section class="b6">
        <h2 class="title"><span>Професионален масажист</span><br> във вашия дом!</h2>
        <ul class="use">
            <li><span>1</span> Включете масажора <br> чрез натискане на бутона ON</li>
            <li><span>2</span> Изберете режим <br> което искате</li>
            <li><span>3</span> Поставете го на врата си <br>и ще го усетиш <br>релаксиращ масаж</li>
            <li><span>4</span> Свържете допълнителни електроди <br> ако е необходимо</li>
        </ul>
        <a href="#order_form" class="btn">ПОРЪЧАЙТЕ МАСАЖОРА</a>
    </section>
    <section class="b7">
        <h2 class="title"><span>СПЕЦИФИКАЦИЯ</span> НА ПРОДУКТА</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/char.jpg" alt>
        <ul class="char">
            <li><b>Масажор за врат</b> <span> 1 бр</span></li>
            <li><b>Допълнителни електроди</b> <span> 2 бр</span></li>
            <li><b>Инструкция за исползване</b> <span> 1 бр</span></li>
            <li><b>Вид на масаж</b> <span> 6 вида</span></li>
            <li><b>Автоматично изключване</b> <span>на всеки 10 минути</span></li>
        </ul>
        <a href="#order_form" class="btn">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="b8 gradient">
        <h2 class="title">Впечатления на клиентите</h2>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/rev1.jpg" alt>
            <p><b>Вратът ме болеше дълго време, понякога болката не спираше. Уморен от работа, се събуждах през нощта.</b>
                Диагнозата на лекаря - "Дегенерация на диска на шийните прешлени". Приятели ми препоръчаха да купя импулсния масажор Purple Relax. Използвам го повече от месец, 2-3 пъти на ден, и след няколко минути имам много облекчение, чувствам се страхотно.</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava1.jpg" alt>
                <p>Мария<br> Пловдив</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/rev2.jpg" alt>
            <p><b>Импулсният масажор е евтин, а носи много удоволствие и ползи!</b> Често страдах от болки в гърба, затова започнах да използвам този масажор. Имах съмнения преди покупката, но сега виждам, че е отличен продукт. Успокоява и не причинява дискомфорт. Препоръчвам това на всички!</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava2.jpg" alt>
                <p>Мартин<br> Бургас</p>
            </div>
        </div>
        <div class="reviews__item">
            <p><b>Много  полезен и компактен аксесоар за всеки автомобил, особено когато пътувам на дълги разстояния.</b> Винаги го нося със себе си, много е практичен и лесен за използване. Не вярвах, че за толкова малко пари мога да постигна толкова добър ефект.</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava3.jpg" alt>
                <p>Иван<br> София</p>
            </div>
        </div>
        <a href="#order_form" class="btn">ПОРЪЧАЙ СЕГА</a>
    </section>
    <section class="b9">
        <h2 class="title">Доставка и плащане</h2>
        <ul class="delivery">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del1.png" alt>
                <p><b>Бърза доставка</b> С куриерска служба до 1-2 работни дни</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del2.png" alt>
                <p><b>Наложен платеж</b> Без предплащане! Плащането се извършва при доставка</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del3.png" alt>
                <p><b>100% гаранция за качество</b> Проверени продукти преди доставка и гаранция за качество 100%</p>
            </li>
        </ul>
    </section>
    <section class="b1 end">
        <h1>PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">МНОГОФУНКЦИОНАЛЕН ИМПУЛСЕН МАСАЖОР ЗА ВРАТА И ЦЯЛО ТЯЛО</h2>
        <div class="sale"> САМО ДНЕС! <span> -40%</span> <b> ОТСТЪПКА</b></div>
        <div class="effect">Професионален масажен ефект</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="formbox">
            <h3>ПОРЪЧАЙ СЕГА!</h3>
            <p>И ние ще се свържем с вас възможно най-скоро, за да потвърдим поръчката.</p>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>{{ $prices[1]['currency'] }}</small>
                </li>
            </ul>
            <form id="order_form" class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <label>Име и фамилия</label>
                <input class="field" name="name" type="text" placeholder="Име и фамилия" required>
                <label>Телефон</label>
                <input class="field" name="phone" type="tel" placeholder="Телефон" required>
                <label>Адрес</label>
                <input class="field" name="shipping_address" type="text" placeholder="Улица и номер" required>
                <label>Град</label>
                <input class="field" name="shipping_city" type="text" placeholder="Град" required>
                <button class="btn" type="submit">ПОРЪЧАЙ СЕГА</button>
            </form>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
