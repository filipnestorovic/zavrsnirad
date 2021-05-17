<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=viewport content="width=960">
    {{--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700italic,700,400italic,600italic&amp;subset=latin,cyrillic' rel=stylesheet type='text/css'>--}}
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/settings.css" rel=stylesheet type="text/css">
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/main.css" rel=stylesheet type="text/css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class=wrap>
        <div class="container clearfix">
            <div class=cost>
                <span class=old-cost><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></s></span><br>
                <span class=new-cost>&nbsp;&nbsp;&nbsp;<b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
            </div>
            <div class=sale>-40%</div>
        </div>
        <a class=button-a href="#order"></a>
    </div>
</div>
<div class="section block-2" id=ch1>
    <div class=wrap>
        <h2 class=line>Что такое Car-Fix</h2>
        <h3>И почему он пользуется такой популярностью у автовладельцев?</h3>
        <div class="container clearfix">
            {{--<div class=video>--}}
                {{--<iframe width=454 height=284 src="https://www.youtube.com/embed/bVQcqCCgtSU?rel=0&amp;controls=0&amp;showinfo=0" frameborder=0 allowfullscreen></iframe>--}}
            {{--</div>--}}
            <p>Мы предлагаем по истине потрясающее приспособление для <b>устранения вмятин на Вашем авто без повреждения лакокрасочного покрытия</b>! Этим инструментом и технологией пользуются профессионалы в автосервисах!</p>
            <p><b>Car-Fix сэкономит Ваши деньги</b> без дорогостоящего ремонта на СТО. Уникальная, запатентованная форма скобы исключает дополнительные повреждения, а клей после устранения вмятин можно легко удалить!</p>
        </div>
    </div>
</div>
<div class="section bg-rep bl-photo">
    <div class=center><img src="{{ asset('/') }}dailysharkFiles/carfix/bg-3.jpg" alt=Car-Fix><br><br>
        <a class=button-a href="#order"></a>
    </div>
</div>
<div class="section block-3">
    <div class=wrap>
        <h2 class=line>Инструкция по применению</h2>
        <div class=container-1>
            <ul>
                <li><b>1</b> - Клей наносится на специальную присоску (требуется разогревающий пистолет)</li>
                <li><b>2</b> - присоску с клеем помещаем в центр вмятины и ожидаем 2-3 минуты</li>
                <li><b>3</b> - одеваем скобу-мостик. Закручиваем специальный болт, до тех пор пока вмятина не исчезнет</li>
                <li><b>4</b> - без проблем отклеиваем присоску и убираем остатки клея. ГОТОВО!</li>
                <li></li>
            </ul>
        </div>
        <div class=container-2>
            <h4>Комплектация набора:</h4>
            <ul>
                <li><b>&#10003;</b> - мостик-скоба Car-Fix</li>
                <li><b>&#10003;</b> - вытяжной вентель</li>
                <li><b>&#10003;</b> - специальный термоклей (1 шт.)</li>
                <li><b>&#10003;</b> - присоски разного диаметра (3 шт.)</li>
                <li><b>&#10003;</b> - лопатка для удаления клея</li>
            </ul>
        </div>
    </div>
</div>
<div class="section block-6 bg-rep">
    <div class=wrap>
        <h2 class=line>Отзывы <span>покупателей</span></h2>
        <div class="rew-cont clearfix">
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-1.png">
                <div>
                    <h4>Михаил Липкович</h4>
                    «Посоветовал Car-Fix мне сотрудник по работе. Заезжая в гараж, помял задний бампер и никак не мог решить каким образом убрать вмятину. Результат после применения набора для рихтовки мне очень понравился, это просто не заменимая вещь для автовладельцев.»
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-2.png">
                <div>
                    <h4>Виктор Митрохин</h4>
                    «Езжу я в принципе очень аккуратно, но в большом городе всякое случается, то там задел, то там стукнулся, в общем, неприятно видеть свою красавицу в таком виде. Сосед по гаражу посоветовал комплект для устранения вмятин Car-Fix. Быстро, просто, эффективно привел кузов в порядок.»
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-3.png">
                <div>
                    <h4>Алена Смирнова</h4>
                    «Набор просто супер! Очень прост в использовании. Увидела в действии Car-Fix у коллеги по работе. Когда на моих глазах исчезла довольно большая вмятина, тут же решила, что мне он очень нужен. Езжу я на родительской машине и Car-Fix всегда вожу с собой.»
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section block-7" id=ch3>
    <div class=wrap>
        <h2 class=line>Доставка <span>и оплата</span></h2>
        <ul class=clearfix>
            <li>
                <p><b>Доставка почтой</b>, в течение 7 рабочих дней.</p>
            </li>
            <li>
                <p><b>Никаких предоплат!</b> Оплата заказов осуществляется непосредственно по факту получения заказа.</p>
            </li>
            <li>
                <p>Вы вправе отказаться от покупки <b>в течение 14 дней</b> с момента получения заказа, независимо от причины возврата.</p>
            </li>
        </ul>
    </div>
</div>
<div id="#order" class=block-8>
    <div class=wrap>
        <h1>Car-Fix</h1>
        <h2>Набор для вытягивания вмятин на вашем авто <span> со скидкой 40%</span></h2>
    </div>
    <div class="wrap clearfix">
        <div class=left-cont>
            <div class=cost>
                <span class=old-cost><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></s></span><br>
                <span class=new-cost>&nbsp;&nbsp;&nbsp;<b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
            </div>
        </div>
        <div class=right-cont id=order>
            <p class=title>
                <strong>Заполните форму</strong><br>и наши менеджеры свяжутся с Вами в ближайшее время
            </p>
            <form action="{{$orderRoute}}" method=post>
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="text" name="phone" class="only_number" placeholder="Telefon" required></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                <p class=limit></p>
                <div><button class=button-a type=submit></button></div>
            </form>
        </div>
    </div>
    <div class="footer center">
    </div>
</div>
<script src="{{ asset('/') }}dailysharkFiles/carfix/init.js+slick.min.js"></script>
@include('components.pixel_footer')
</body>
</html>
