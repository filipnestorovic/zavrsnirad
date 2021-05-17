<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=viewport content="width=480">
    {{--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700italic,700,400italic,600italic&amp;subset=latin,cyrillic' rel=stylesheet type='text/css'>--}}
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/m/main.css" rel=stylesheet type="text/css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
</head>
<body>
<div class=main-wrap>
    <div class="section block-1">
        <div class=cost>
            <span class=old-cost><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></span><br>
            <span class=new-cost><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
        </div>
        <div class=center><a href="#delivery" class=button-m></a></div>
    </div>
    <div class="section block-2">
        <h2>Что такое Car-Fix?<br><span>и почему он пользуется такой популярностью у автовладельцев?</span></h2>
        <div class=container>
            <p>Мы предлагаем по истине потрясающее приспособление для устранения вмятин на Вашем автомобиле без повреждения лакокрасочного покрытия! Этим инструментом и технологией пользуются профессионалы в автосервисах!</p>
            <p>Car-Fix сэкономит Ваши деньги без дорогостоящего ремонта на СТО. Уникальная, запатентованная форма скобы исключает дополнительные повреждения, а клей после устранения вмятин можно легко удалить!<br><br></p>
            <div class=center>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/pic-2.jpg" alt="Car-Fix ">
            </div>
        </div>
    </div>
    <div class="section block-4">
        <h2>Инструкция по применению:</h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-1.jpg" alt="Car-Fix ">
                Клей наносится на специальную присоску (требуется разогревающий пистолет)
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-2.jpg" alt="Car-Fix ">
                Присоску с клеем помещаем в центр вмятины и ожидаем 2-3 минуты
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-3.jpg" alt="Car-Fix ">
                Одеваем скобу-мостик. Закручиваем специальный болт, до тех пор пока вмятина не исчезнет
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-4.jpg" alt="Car-Fix ">
                Без проблем отклеиваем присоску и убираем остатки клея. ГОТОВО!
            </li>
        </ul>
        <div class=center><a href="#delivery" class=button-m></a></div>
    </div>
    <div class="section block-5">
        <h2>Что входит в комплект</h2>
        <div class=container>
            <ul>
                <li><b>1</b> &mdash; Мостик-скоба Car-Fix</li>
                <li><b>2</b> &mdash; Вытяжной вентель</li>
                <li><b>3</b> &mdash; Специальный термоклей (1 шт.)</li>
                <li><b>4</b> &mdash; Присоски разного диаметра (3 шт.)</li>
                <li><b>5</b> &mdash; Лопатка для удаления клея</li>
            </ul>
        </div>
    </div>
    <div class="section block-6">
        <h2>Отзывы покупателй</h2>
        <div class=container>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-1.jpg" alt="Car-Fix ">
                <p><strong>Михаил Липкович</strong><br>Посоветовал Car-Fix мне сотрудник по работе. Заезжая в гараж, помял задний бампер и никак не мог решить каким образом убрать вмятину. Результат после применения набора для рихтовки мне очень понравился, это просто не заменимая вещь для автовладельцев.</p>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-2.jpg" alt="Car-Fix ">
                <p><strong>Виктор Митрохин</strong><br>Езжу я в принципе очень аккуратно, но в большом городе всякое случается, то там задел, то там стукнулся, в общем, неприятно видеть свою красавицу в таком виде. Сосед по гаражу посоветовал комплект для устранения вмятин Car-Fix. Быстро, просто, эффективно привел кузов в порядок.</p>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-3.jpg" alt="Car-Fix ">
                <p><strong>Алена Смирнова</strong><br>Набор просто супер! Очень прост в использовании. Увидела в действии Car-Fix у коллеги по работе. Когда на моих глазах исчезла довольно большая вмятина, тут же решила, что мне он очень нужен. Езжу я на родительской машине и Car-Fix всегда вожу с собой.</p>
            </div>
        </div>
    </div>
    <div class="section block-7">
        <h2>Доставка и оплата</h2>
        <div class=container>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-1"></span>
                <p>Доставка почтой по СНГ от 7 рабочих дней в зависимости от региона</p>
            </div>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-2"></span>
                <p>Никаких предоплат! Оплата заказов осуществляется непосредственно по факту получения заказа</p>
            </div>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-3"></span>
                <p>Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа, независимо от причины возврата</p>
            </div>
        </div>
    </div>
    <div class="section block-8">
        <div class=cost>
            <span class=old-cost><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></span><br>
            <span class=new-cost><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
        </div>
        <div class=container-2>
            <div class=order>
                <p class=center>
                    <strong>Оставьте заявку</strong><br>
                    и мы свяжемся с Вами для уточнения деталей&nbsp;заказа
                </p>
                <form id=delivery action="{{$orderRoute}}" method=post>
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                    <div><input type="text" name="phone" class="only_number" placeholder="Telefon" required></div>
                    <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                    <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                    <div class=center><button class=button-m type=submit></button></div>
                </form>
                <span style="color: #fff; text-align: center;"></span>
            </div>
        </div>
    </div>
    <div class="section footer">
        <div class=center>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}dailysharkFiles/carfix/m/init.js"></script>
</body>
</html>
