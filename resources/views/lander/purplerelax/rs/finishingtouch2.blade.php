<!-- UNCOMPLETE LANDER -->
<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <link media="all" href="{{ asset('/') }}purplerelaxFiles/finishingtouch2/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="section block-1">
    <div class="wrap">
        <div class="head-cont clearfix">
            <div class="sale">Скидка <b class="col-1">-53%</b></div>
            <div class="cost clearfix">
                <span class="old-cost col-4">{{ $prices[1]['originalPrice'] }} RSD</span>
                <span class="new-cost">{{ $prices[1]['amount'] }} RSD</span>
            </div>
        </div>
        <div class="timer-cont clearfix">
            {{--<div class="left">--}}
                {{--<p><b>До конца акции</b></p>--}}
                {{--<div class="countbox"></div>--}}
            {{--</div>--}}
            <a class="button-1" href="#delivery"></a>
        </div>
        <div class="title col-4"><b class="col-2">Эффективное избавление</b> от волос</div>
        <h1><b>Finishing Touch</b> знает, что женщины любят нежность!</h1>
        <ul class="list-1">
            <li>Можно использовать абсолютно везде</li>
            <li>Эффективно снижает скорость роста волос</li>
            <li>Подходит для зоны бикини, подмышек, ног, рук и других областей</li>
            <li>Работает от прикосновения к телу</li>
            <li>Действует на волосы любой жесткости и структуры</li>
        </ul>
        <div class="text-1">
            <h4><b><span class="col-2">Finishing Touch</span> - это устранение нежелательных волос там, где этого захотите Вы!</b></h4>
            <p><b>Finishing Touch избавляет от волос на  82% эффективнее, чем другие средства.
                    В один прекрасный день, не удивляйтесь, когда Вы не сможете пользоваться другими средствами! Регулярное применение бритвы способствует тому, что волоски становятся тонкими и слабыми, а их количество постепенно уменьшается. Специальные лезвия не оказывают агрессивное воздействие на кожу, так что средство подходит для любого типа кожи и волос и его можно использовать на любом участке тела. С ним Вы можете носить самую открытую одежду, не опасаясь быстро отростающих волосков, неловких красных точек после бритья или прилипшего воска после эпиляции.</b></p>
            <h2 class="center"><span class="col-2">Finishing Touch</span> подойдет для любого участка тела!</h2>
        </div>
        <div class="video-container">
            <div class="youtube" id="AEe8zLu8ZGk"></div>
        </div>
        <div class="center img-1"><img src="{{ asset('/') }}purplerelaxFiles/finishingtouch2/img-1.png" alt="Finishing Touch"></div>
    </div>
</div>
<div class="section block-2">
    <div class="wrap">
        <h2 class="center">Красота требует <span class="col-1">Finishing Touch!</span></h2>
        <ul class="clearfix">
            <li>Структура волос<br/>становится тоньше</li>
            <li>Длина волос<br/>уменьшается</li>
            <li>Рост волос<br/>замедляется</li>
            <li>Видимый результат<br/>за 5 минут</li>
        </ul>
    </div>
</div>
<div class="section block-3">
    <div class="wrap">
        <h2 class="center">Отзывы <span class="col-2">покупателей</span></h2>
        <div class="container-rew clearfix">
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch2/rew-1.jpg" alt="Finishing Touch">
                <p>Никогда бы не поверила, что Finishing Touch способен мне помочь! Но моя подруга, прибывавшая в восторге от него убедила и меня заказать. Ну что же, курьер принес заказ, я оплатила и стала пробовать. После первого применения результат заметен сразу. После месяца, моё лицо полностью изменилось.</p>
                <span class="rew-name">
                            <b class="col-2">Светлана</b><br/>
                            Санкт-Петербург
                        </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch2/rew-2.jpg" alt="Finishing Touch">
                <p>Купила подруге на подарок, у неё очень чувствительная кожа, но не удержалась опробовать на себе) От такой работы я была восторге, пришлось срочно заказывать второй)) Очень нравится то, что для него нет недоступных мест, а качество работы вообще на высоте! Также заметила, что волосы стали расти медленнее и теперь менее густые)</p>
                <span class="rew-name">
                            <b class="col-2">Марина</b><br/>
                            Казань
                        </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch2/rew-3.jpg" alt="Finishing Touch">
                <p>Пользуюсь уже второй месяц, это просто нечто! Кожа гладенькая, никакого раздражения, волосы со временем редеют и становятся мягче! До этого перепробовала множество средств, но это самое эффективное и нежное) Рекомендую всем! По соотношению качества удаления волос и безболезненности - это лучшее, что может быть!</p>
                <span class="rew-name">
                            <b class="col-2">Юлия</b><br/>
                            Иркутск
                        </span>
            </div>
        </div>
    </div>
</div>
<div class="section block-4">
    <div class="wrap">
        <h2>Мнение <span class="col-1">специалиста</span></h2>
        <div class="container">
            <p><strong>Клиническим исследованием, проведенном европейскими исследователями установлено:</strong></p>
            <ul>
                <li>Снижение частоты депиляции в области подмышек на 53%</li>
                <li>Снижение частоты депиляции в области бикини на 70%</li>
                <li>Снижение частоты депиляции ног на 82%</li>
            </ul>
            <p><b><span class="col-1">Навроцкая Надежда Юрьевна</span>&emsp;|&emsp;Врач дерматолог</b></p>
        </div>
    </div>
</div>
<div class="section block-5">
    <div class="wrap">
        <h2 class="center">Как <span class="col-1">заказать?</span></h2>
        <div class="container-del clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch2/deliv-bg.png" alt="Finishing Touch">
            <div>Заполните форму заказа<br/>на нашем сайте</div>
            <div>Дождитесь звонка консультанта,<br/>который свяжется с вами<br/>в кратчайшие сроки</div>
            <div>Оплатите заказ после<br/>получения на почте</div>
        </div>
    </div>
</div>
<div class="section block-6" id="delivery">
    <div class="wrap">
        <div class="container-form clearfix">
            <div class="left">
                <h3 class="center"><b>Только сегодня<br/>специальная цена</b></h3>
                <div class="cost clearfix">
                    <span class="old-cost">{{ $prices[1]['originalPrice'] }} RSD</span>
                    <span class="new-cost">{{ $prices[1]['amount'] }} RSD</span>
                </div>
                {{--<div class="timer-cont">--}}
                    {{--<p><b>До конца акции</b></p>--}}
                    {{--<div class="countbox timer-2"></div>--}}
                {{--</div>--}}
            </div>
            <div class="right">
                <h3 class="center col-2"><b>Закажите прямо сейчас</b></h3>
                <form action="#" method="post" >
                    <div><br><input type="text" name="name" placeholder="Введите Ф.И.О" ></div>
                    <div><input type="text" name="phone" placeholder="Введите телефон" ></div>
                    <div class="center"><button></button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="center"></div>
</div>
{{--<script type="text/javascript" src="http://yes.xcartpro.com/r4/js/jquery.placeholder.js"></script>--}}
{{--<script type="text/javascript" src="http://yes.xcartpro.com/r4/js/count.js"></script>--}}
{{--<script type="text/javascript" src="http://yes.xcartpro.com/r4/js/init.js"></script>--}}
</body>
</html>