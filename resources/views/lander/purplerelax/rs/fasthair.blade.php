<!DOCTYPE html>
<html lang=en>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('components.pixel_init')
    <meta charset=UTF-8 />
    <meta content="IE=edge" http-equiv=X-UA-Compatible />
    <meta content="width=device-width, initial-scale=1" name=viewport />
    <meta content="telephone=no" name=format-detection />
    <style>@font-face{font-family:'Conv_calibri';src:url({{asset('/')}}fonts/calibri.eot);src:local('?'),url({{asset('/')}}fonts/calibri.woff) format('woff'),url({{asset('/')}}fonts/calibri.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambria';src:url({{asset('/')}}fonts/Cambria.eot);src:local('?'),url({{asset('/')}}fonts/Cambria.woff) format('woff'),url({{asset('/')}}fonts/Cambria.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambriab';src:url({{asset('/')}}fonts/Cambria-Bold.eot);src:local('?'),url({{asset('/')}}fonts/Cambria-Bold.woff) format('woff'),url({{asset('/')}}fonts/Cambria-Bold.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambriai';src:url({{asset('/')}}fonts/Cambria-Italic.eot);src:local('?'),url({{asset('/')}}fonts/Cambria-Italic.woff) format('woff'),url({{asset('/')}}fonts/Cambria-Italic.ttf) format('truetype');font-weight:400;font-style:normal}</style>
    <link rel=stylesheet href="{{asset('/')}}purplerelaxFiles/fasthair/getCSS.css">
</head>
<body>
<header class=l-header>
    @include('components.display_errors')
    <div class=container>
        <div class=top>
            <div class=info>
                <div class=info-right>
                    <h3 class=info-tel>
                        <t class=phone___>
                            <t class=highlight2>
                                Прием заявок круглосуточно
                    </h3>
                    <a href="#order-form"><label class="link modalButton " for=forms>
                            Заказать обратный звонок
                        </label></a>
                </div>
            </div>
        </div>
        <div class=banner>
            <div class=b-left>
                <div class=banner-title>
                    <h2>
                        Расческа-выпрямитель Fast Hair
                    </h2>
                    <p>
                        Идеально ровные волосы за считаные минуты без специальной подготовки, с расческой-выпрямителем Fast Hair Straightener!
                    </p>
                    <p>
                        Создание идеальной прически теперь в Ваших руках!
                    </p>
                </div>
                <img alt="" class=banner-img src="{{asset('/')}}purplerelaxFiles/fasthair/pic1.png"/>
            </div>
            <div class=b-right>
                <div class=banner-price>
                    <div class=old>
                        <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                    <div class=new>
                        <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                </div>
                <div class=banner-form>
                    <div class=form-title>
                        <h3>
                            Закажи сейчас
                            <br/>
                            по суперцене!
                        </h3>
                    </div>
                    <div id=formContainer1>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name=name placeholder="Ime i prezime" type=text>
                            <input name=phone placeholder="Broj telefona" type=text>
                            <input name=shipping_address placeholder="Adresa" type=text>
                            <input name=shipping_city placeholder="Grad" type=text>
                            <button class="btn-color2 large" type=submit>
                                Poruči
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class=info1>
    <div class=container>
        <div class=title>
            <h2>
                Fast Hair Straightener
            </h2>
            <p>
                Новое слово в сфере парикмахерских технологий
            </p>
        </div>
        <div class=img-b>
            <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/info1-img.jpg"   />
        </div>
        <div class=descr>
            <p>
                Лучший продукт 2018 года на рынке для ухода за волосами! Электрическая расческа-выпрямитель FAST HAIR STRAIGHTENER HQT-906 с функцией ионизации была создана специально для женщин, которые не желают тратить на укладку ни одной лишней секунды. С этим устройством укладка занимает 5-10 минут, а волосы становятся блестящими и гладкими.
            </p>
            <p>
                Это первый электрический выпрямитель в виде расчески. Он объединяет в себе массажную щетку для волос и утюжок. Теперь Вы можете выпрямлять и разглаживать волосы, просто расчесывая их.
            </p>
            <p>
                Расческа имеет турмалиновое покрытие. При нагревании покрытия образуются отрицательные ионы, которые благоприятно влияют на волосы и улучшают их внешний вид. Также благодаря турмалиновому покрытию происходит равномерное нагревание расчески-выпрямителя, поэтому волос не травмируется и не обжигается.
            </p>
            <a href="#order-form"><label class="btn border modalButton" for=forms>
                    Заказать за <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                </label></a>
        </div>
    </div>
</section>
<section class=features>
    <div class=container>
        <div class=title>
            <h2>
                Особенности
            </h2>
            <p>
                Fast Hair Straightener
            </p>
        </div>
        <div class=descr>
            <ul>
                <li>
                    Удобство использования в отличие от утюжка.
                </li>
                <li>
                    Аппарат разогревается за несколько секунд, не нужно ждать.
                </li>
                <li>
                    Керамическая часть проводит тепло и поддерживает температуру стабильной.
                </li>
                <li>
                    Выпрямление занимает всего от 5 до 10 минут!
                </li>
                <li>
                    При использовании прибора волосы меньше секутся, становятся менее пушистыми. Это достигается за счет воздействия ионами, которые выделяет выпрямитель во время работы.
                </li>
            </ul>
        </div>
        <div class=b-img>
            <img class=result data-speed=0.2 src="{{asset('/')}}purplerelaxFiles/fasthair/pic2.jpg"   />
        </div>
    </div>
</section>
<section class=benefits>
    <div class=container>
        <div class=title>
            <h2 id=ancorAdvantages>
                Преимущества
            </h2>
            <p>
                Fast Hair Straightener
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  01
                  </span>
                <p>
                    Устойчивый
                    <br/>
                    результат
                </p>
            </div>
            <p>
                Используя расчёску, Вы получаете гладкие, мягкие волосы на длительный период.
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  02
                  </span>
                <p>
                    Для любой длины
                    <br/>
                    и типа волос
                </p>
            </div>
            <p>
                Укладка любой длины и типа волос за считаные минуты.
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  03
                  </span>
                <p id=ancorTermsofUse>
                    Элегантный образ в
                    <br/>
                    домашних условиях
                </p>
            </div>
            <p id=ancorTermsofUse>
                Вы создаете прекрасный образ в домашних условиях, экономя время и деньги.
            </p>
            <a href="#order-form"><label class="btn border modalButton" for=forms>
                    Заказать за <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                </label></a>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  04
                  </span>
                <p>
                    Удобность
                    <br/>
                    в использовании.
                </p>
            </div>
            <p>
                Легкость и удобный дизайн устройства поможет легко создать необходимую укладку.
            </p>
        </div>
    </div>
    <img alt="" class=woman-img src="{{asset('/')}}purplerelaxFiles/fasthair/pic3.jpg"   />
</section>
<section class=how-to-use>
    <div class=container>
        <div class=title>
            <h2>
                Использование расчёски
            </h2>
        </div>
        <div class="row left">
            <div class=b-img>
                <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/pic4.jpg"   />
            </div>
            <div class=b-descr>
                <ul>
                    <li>
                        <i>
                            01
                        </i>
                        <span>
                        Вставьте расческу в розетку (220 вольт).
                        </span>
                    </li>
                    <li>
                        <i>
                            02
                        </i>
                        <span>
                        Выставите необходимую температуру.
                        </span>
                    </li>
                    <li>
                        <i>
                            03
                        </i>
                        <span>
                        Разделите волосы на пряди.
                        </span>
                    </li>
                    <li>
                        <i>
                            04
                        </i>
                        <span>
                        Возьмите нагретую расческу Fast Hair Straightener.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row right">
            <div class=b-descr>
                <ul>
                    <li>
                        <i>
                            05
                        </i>
                        <span>
                        Расчёсывайте волосы сверху вниз плавными движениями.
                        </span>
                    </li>
                    <li>
                        <i>
                            06
                        </i>
                        <span>
                        Зафиксируйте волосы лаком или воском для волос, если захотите.
                        </span>
                    </li>
                    <li>
                    <li>
                        <i>
                            07
                        </i>
                        <span>
                        По окончании выпрямления волос выключите расческу из розетки.
                        </span>
                    </li>
                </ul>
            </div>
            <div class=b-img>
                <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/how-to-use2.jpg"   />
            </div>
        </div>
        <div class=b-video>
            <div class=video-descr>
                <a href="#order-form"><label class="btn small modalButton" for=forms>
                        Заказать за <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                    </label></a>
            </div>
        </div>
    </div>
</section>
<section class=work-steps>
    <div class=container>
        <div class=title>
            <h2 id=ancorHowWeWork>
                Как мы работаем
            </h2>
        </div>
        <div class=work-steps-items>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        1
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/how-we-work1.png"   />
                </div>
                <p>
                    Вы оставляете
                    <br/>
                    заявку
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        2
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/how-we-work2.png"   />
                </div>
                <p>
                    Наш менеджер связывается с Вами
                    <br/>
                    для уточнения деталей
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        3
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/how-we-work3.png"   />
                </div>
                <p>
                    Отправляем Вам заказ почтой или курьером
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        4
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/how-we-work4.png"   />
                </div>
                <p>
                    Вы оплачиваете заказ
                    <br/>
                    при получении
                </p>
            </div>
        </div>
    </div>
</section>
<section class=reviews>
    <div class=container>
        <div class=title>
            <h2 id=ancorComments>
                Отзывы покупателей
            </h2>
        </div>
        <div class=reviews-row>
            <div class=reviews-box>
                <div class=reviews-box-header>
                    <div class=img>
                        <img alt="" height="" src="{{asset('/')}}purplerelaxFiles/fasthair/avatar.png" width=70   />
                    </div>
                    <h4>
                        Анастасия
                    </h4>
                </div>
                <div class=reviews-box-descr>
                    <p>
                        У меня от природы очень вьются волосы и на укладку уходило много времени и терпения. Расческу эту нашла случайно, очень понравилась, за 4 минуты волосы прямые)
                    </p>
                </div>
            </div>
            <div class=reviews-box>
                <div class=reviews-box-header>
                    <div class=img>
                        <img alt="" height="" src="{{asset('/')}}purplerelaxFiles/fasthair/avatar.png" width=70   />
                    </div>
                    <h4>
                        Юлия
                    </h4>
                </div>
                <div class=reviews-box-descr>
                    <p>
                        Этот выпрямитель удивил! Очень хорошо выпрямляет волосы! С доставкой немного подвели, но расческа что надо!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=b-order>
    <div class=container>
        <div class=order-img>
            <img alt="" src="{{asset('/')}}purplerelaxFiles/fasthair/pic1.png"/>
        </div>
        <div class=order-descr>
            <h3 class=title>
                Заказать Fast Hair Straightener
                <br/>
                в нашем магазине
            </h3>
            <div class=order-price id=ancorFooterForm>
                <div class=old>
                    <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span>
                </div>
                <div class=new>
                    <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                </div>
            </div>
            <div class=order-form>
                <div class=b-info>
                    <div class=form-title>
                        <h3>
                            Закажи сейчас
                            <br/>
                            по суперцене!
                        </h3>
                    </div>
                </div>
                <div id=formContainer2>
                    <form id=order-form action="{{$orderRoute}}" method=post>
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input name=name placeholder="Ime i prezime" type=text>
                        <input name=phone placeholder="Broj telefona" type=text>
                        <input name=shipping_address placeholder="Adresa" type=text>
                        <input name=shipping_city placeholder="Grad" type=text>
                        <button class="btn-color2 large" type=submit>
                            PORUČI
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<footer class=l-footer>--}}
    {{--<div class=container>--}}
    {{--</div>--}}
{{--</footer>--}}
@include('components.pixel_footer')
</body>
</html>