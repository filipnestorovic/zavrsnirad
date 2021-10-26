<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link media="all" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
    <style>
        @font-face {
            font-family: 'Roundmed';
            src: url('{{ asset('/') }}fonts/din_round_pro_medium.eot');
            src: url('{{ asset('/') }}fonts/din_round_pro_medium.eot-#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.svg#Roundmed') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Roundbold';
            src: url('{{ asset('/') }}fonts/din_round_pro_bold.eot');
            src: url('{{ asset('/') }}fonts/din_round_pro_bold.eot-#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.svg#Roundbold') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')
    <div class="section block-1">
        <span class="sale col-3">-50%</span>
        <div class="cost clearfix">
               <span class="old-cost">
                  <span style="font-size: 14px;">звичайна ціна<br></span>
                  <del>
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </del>
               </span>
            <span class="new-cost">
                  <span  style="font-size: 14px;">акційна ціна<br></span>
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </div>
    </div>
    <div class="section block-2 green-bg">
        <h2 class="col-3">
            Замовте Finishing Touch прямо зараз!
        </h2>
        <div class="timer">
            <p style="text-align: center;width: 100%;line-height: 1.3;"></p>
        </div>
        <form  class="form">
            <div class="center"><a href="#delivery" style="text-decoration: none;"><button class="button-form"></button></a></div>
        </form>
    </div>
    <div class="section block-3 blue-bg">
        <h2 class="col-3 wave-1">
            ЕФЕКТИВНЕ
            <br/>
            <small class="col-1">видалення волосся
            </small>
        </h2>
        <ul class="col-3">
            <li>Можна використовувати будь-де
            </li>
            <li>Ефективно знижує швидкість росту волосся</li>
            <li>Підходить для будь-яких зон тіла
            </li>
            <li>Працює від дотику до тіла
            </li>
            <li>Діє на волосся будь-якої жорсткості</li>
        </ul>
    </div>
    <div class="section block-4">
        <div class="title">
            <span class="col-2">Finishing Touch</span><br/>- це усунення небажаного волосся там, де цього захочете Ви!
        </div>
        <p>Finishing Touch позбавляє від волосся ефективніше, ніж інші засоби. В один прекрасний день, не дивуйтеся, коли Ви не зможете користуватися іншими засобами! Регулярне застосування Finishing Touch сприяє тому, що волосинки стають тонкими і слабкими, а їх кількість поступово зменшується. Спеціальні леза не діють на шкіру агресивно, тому прилад підходить для будь-якого типу шкіри і волосся і його можна використовувати на будь-якій ділянці тіла. З ним Ви зможете носити відкритий одяг, не побоюючись швидко відростаючого волосся, незручних червоних цяток після гоління або прилиплого воску після епіляції.</p>
        <h3 class="center"><span class="col-2">Finishing Touch</span> підійде до будь-якої ділянки тіла!</h3>
        <div class="center"><img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/bg-3.jpg" alt="Finishing Touch"></div>
    </div>
    <div class="section block-6 green-bg">
        <h2 class="col-1 wave-1">
            Доставка і оплата
        </h2>
        <ul class="col-3">
            <li>Доставка поштою, протягом 1-10 робочих днів.
            </li>
            <li>Ніяких передплат! Оплата замовлень здійснюється безпосередньо за фактом отримання замовлення.
            </li>
            <li>Ви маєте право відмовитися від покупки протягом 14 днів з моменту отримання замовлення, незалежно від причини повернення.</li>
        </ul>
    </div>
    <div class="section block-7 blue-bg">
        <h2 class="col-3 wave-2">
            Відгуки наших клієнтів
        </h2>
        <div class="container-rew clearfix">
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-1.jpg" alt="Finishing Touch">
                <p>Ніколи б не повірила, що Finishing Touch здатний мені допомогти! Але моя подруга в захваті від нього і переконала мене замовити. Ну що ж, кур'єр приніс замовлення, я оплатила і стала пробувати. Після першого застосування результат помітний одразу. Після місяця моє обличчя повністю змінилося.</p>
                <span class="rew-name col-3">
                     <b class="col-1">Светлана</b><br/>
                    <!-- Санкт-Петербург -->
                  </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-2.jpg" alt="Finishing Touch">
                <p>Купила подрузі на подарунок, у неї дуже чутлива шкіра, але не втрималася випробувати на собі) Від результату я була в захваті, довелося терміново замовляти другий)) Дуже подобається те, що для нього немає недоступних місць, а якість роботи взагалі на висоті! Також помітила, що волосся стало рости повільніше і тепер менш густе)</p>
                <span class="rew-name col-3">
                  <b class="col-1">Марина</b><br/>
                  </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-3.jpg" alt="Finishing Touch">
                <p>Користуюся вже другий місяць, це просто щось! Шкіра гладенька, ніякого подразнення, волосся з часом рідшає і стає м'якше! До цього перепробувала безліч засобів, але цей найефективніший і найніжніший) Рекомендую всім! За співвідношенням якості видалення волосся і безболісності - це найкраще, що може бути!</p>
                <span class="rew-name col-3">
                  <b class="col-1">Юлия</b><br/>
                  </span>
            </div>
        </div>
        <div class="center"><img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/wave-2.png" alt="Finishing Touch"></div>
    </div>
    <div class="section block-8" id="delivery">
        <span class="sale col-3">-50%</span>
        <div class="cost clearfix">
               <span class="old-cost">
                  <span style="font-size: 14px;">звичайна ціна<br></span>
                  <del>
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </del>
               </span>
            <span class="new-cost">
                  <span  style="font-size: 14px;">акційна ціна<br></span>
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </div>
    </div>
    <div class="section block-2 green-bg">
        <h2 class="col-3">
            Замовте Finishing Touch прямо зараз!
        </h2>
        <div class="timer">
            <p style="text-align: center;width: 100%;line-height: 1.3;"></p>
        </div>
        <form action="{{$orderRoute}}" method="post" >
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div><br><input type="text" name="name" placeholder="Ime i prezime" ></div>
            <div><input type="text" name="phone" placeholder="Telefon" ></div>
            <div><input type="text" name="shipping_address" placeholder="Adresa" ></div>
            <div><input type="text" name="shipping_city" placeholder="Grad" ></div>
            <br>
            <div class="center"><button class="button-form"></button></div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('.container-rew').slick({
            infinite: true,
            autoplay: false,
            dots: false,
            arrows: true,
            fade: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
            nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>',
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>