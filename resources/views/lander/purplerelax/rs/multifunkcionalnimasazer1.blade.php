<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/style.css" >
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">Массажер для шеи и спины с прогревом&nbsp;</h1>
        <div class="info_block">
            <p class="subtitle">профессиональный массажист у вас дома!</p>
            <div class="discount"><b>-50% скидка</b></div>
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/4qch0s0x.jpg"  alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Цена сегодня:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/g0o3bekf.jpg"  alt="">
                <p><span style="font-size:11.0pt;line-height:107%;
                     font-family:'Calibri',sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
                     Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
                     mso-bidi-font-family:'Times New Roman';mso-bidi-theme-font:minor-bidi;
                    mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Две пары массажных роликов.</span>
                </p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/jjs1srge.jpg"  alt="">
                <p>Функция теплового прогревания.</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/ndky84dd.jpg"  alt="">
                <p><span style="font-size:11.0pt;line-height:107%;
                     font-family:'Calibri',sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
                     Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
                     mso-bidi-font-family:'Times New Roman';mso-bidi-theme-font:minor-bidi;
                    mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Ручные ремни для увеличения массажной нагрузки.</span>
                </p>
            </div>
            <h2 class="title"><span>Забудь о забитых&nbsp;</span><br>мышцах шеи</h2>
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/5nme56kz.jpg"  alt="">
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/9hebj7gx.jpg"  alt="">
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/abj_0id8.jpg"  alt="">
        </div>
        {{--<div class="timer_block clearfix">--}}
            {{--<p>Предложение действует:</p>--}}
            {{--<div class="timer clearfix">--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count hours"><span>0</span><span>1</span></div>--}}
                    {{--<div class="text">часов</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count minutes"><span>4</span><span>2</span></div>--}}
                    {{--<div class="text">минут</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count seconds"><span>2</span><span>2</span></div>--}}
                    {{--<div class="text">секунд</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <a href="#order_form" class="button">Оформить заказ</a>
        {{--<div class="products_count">Осталось <b>9</b>&nbsp;массажеров по акции</div>--}}
    </header>
    <div class="benefits_list7">
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/dwbi4u-7.jpg"  alt="">
            <div class="text_block">
                <h4>Шиацу массаж</h4>
                <p><span style="font-size:11.0pt;line-height:107%;
                     font-family:'Calibri',sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
                     Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
                     mso-bidi-font-family:'Times New Roman';mso-bidi-theme-font:minor-bidi;
                    mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Снимает мышечное напряжение, разминая и расслабляя тело, ускоряя кровоток и избавляя от неприятных ощущений.</span>
                </p>
            </div>
        </div>
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/9hebj7gx-2.jpg"  alt="">
            <div class="text_block">
                <h4>прогревание</h4>
                <p>Инфракрасное прогревание способствует расслаблению, снимает усталость, понижает давление и усиливает эффективность массажа.&nbsp;</p>
            </div>
        </div>
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/abj_0id8-2.jpg"  alt="">
            <div class="text_block">
                <h4>Расслабление&nbsp;</h4>
                <p>Снижает боли и отеки в зоне спины и позвоночника. Способствует восстановлению нормализации жизненного тонуса мышц.</p>
            </div>
        </div>
    </div>
    <section class="description_section">
        <h2 class="title"><span></span>&nbsp;Массаж в любое время</h2>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/mq1yld6h.jpg"  alt="">
        <p>Массаж - отличная профилактика множества заболеваний позвоночника, позволяющая , кроме того, избавиться от накопившейся усталости.</p>
        <p>Массажные ролики имитируют действия рук массажиста, даря вам незабываемые ощущения.Усиливает кровообращение и лимфоток. Снимает головную боль и боль в шее!</p>
    </section>
    <div class="video_block">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mMOak4kr66U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <section class="description_section">
        <h2 class="title"><span>Массажер для шеи</span><br></h2>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/hvzje8xj.jpg"  alt="">
        <a href="#order_form" class="button">Оформить заказ</a>
    </section>
    <section class="characteristics_section">
        <h2 class="title"><span>Характеристики</span><br>Массажера</h2>
        <ul class="characteristics__list">
            <li><b>Размеры:</b>41мм/50мм/17мм</li>
            <li><b>Вес:</b>1,240г</li>
        </ul>
    </section>
    {{--<div class="video_block">--}}
        {{--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/e7QtB4InrUQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    {{--</div>--}}
    <section class="reviews2_section gray_theme">
        <h2 class="title">Отзывы <span>покупателей</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/lzpg9q3x.jpg"  alt="">
                <p> Реальный массирующий массажер. Да-да, именно массирует, как большими руками здорового дяди. Именно такой и должен быть массажер - мощный, ощутимый, и эффективный. Массажер очень мощный, действительно получаешь пользу и удовольствие после каждой процедуры. Массирует практически все участки тела. Шею, ноги, попу, поясницу, позвоночник, живот, руки, в общем, куда захотите, туда и прикладываете его. В рабочем состоянии он еще и оригинально светится, в темноте это выглядит достаточно впечатляюще. И что больше всего мне понравилось, он практически не шумит, можно смело релаксировать без посторонних раздражающих шумов. </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/s-8d-no0.jpg"  alt="">
                    <div class="author_info">
                        <div class="name">Вероника&nbsp;</div>
                        <div class="text">34 года</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/roln5dwv.png"  alt="">
                <p>Это третий массажёр) Думаю, что он не последний) Ещё куча родственников имеется))). Сама пользуюсь регулярно. Раньше были "забиты" мышщы шейно-грудного отдела и постоянно болела голова (из-за хондроза!!!) сейчас намного лучше стало и голова меньше стала болеть) По товару нареканий нет. Беру только в этом магазине. Продавец надёжный. Магазин рекомендую)</p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/mw-8ezv2.jpg"  alt="">
                    <div class="author_info">
                        <div class="name">Светлана Фомина</div>
                        <div class="text">31 год</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/u9qk9qtt.png"  alt="">
                <p>Если не орден то медаль изобретателю за эту штуку дать надо бы. КЛАСС. Моя спина говорит - спасибо. Огромное. Посмотрим конечно сколько это чудо проработает, но аппарат покупки стоит. Однозначно!!! Рекомендую и массажер и продавца.</p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/pe35var1.jpg"  alt="">
                    <div class="author_info">
                        <div class="name">Ольга Клименко</div>
                        <div class="text">30 лет</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tlt">
        <h2 class="title"><span>Как сделать</span> заказ?</h2>
    </section>
    <div class="order_steps1">
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/xb36g0d4.png"  alt="">
                <h4>Заявка</h4>
                <p>Заполните форму на сайте</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/1vv3xb-2.png"  alt="">
                <h4>Звонок</h4>
                <p>Наш менеджер перезвонит для уточнения деталей</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/4qzbbnw1.png"  alt="">
                <h4>Отправка</h4>
                <p>Доставка курьером на следуюший день<br>.</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/7kr_g0s0.png"  alt="">
                <h4>Получение</h4>
                <p>Оплачиваете при получении  </p>
            </div>
        </div>
    </div>
    <section class="offer_section offer3 order">
        <h1 class="main_title">Массажер для шеи и спины с прогревом</h1>
        <div class="info_block">
            <p class="subtitle">профессиональный массажист у вас дома!</p>
            <div class="discount"><b>-50% скидка</b></div>
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/4qch0s0x.jpg"  alt="">
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Цена сегодня:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/g0o3bekf.jpg"  alt="">
                <p>Две пары массажных роликов</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/jjs1srge.jpg"  alt="">
                <p>Функция теплового прогревания</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/ndky84dd.jpg"  alt="">
                <p>Ручные ремни для увеличения массажной нагрузки</p>
            </div>
        </div>
        {{--<div class="timer_block clearfix">--}}
            {{--<p>Предложение действует:</p>--}}
            {{--<div class="timer clearfix">--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count hours"><span>0</span><span>1</span></div>--}}
                    {{--<div class="text">часов</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count minutes"><span>4</span><span>2</span></div>--}}
                    {{--<div class="text">минут</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count seconds"><span>2</span><span>2</span></div>--}}
                    {{--<div class="text">секунд</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form id="order_form" action="#" method="POST" name="order-form">
            <input class="field" name="name" required=""  placeholder="Введите Ваше Ф.И.О."  type="text">
            <input class="field" name="phone" required=""  placeholder="Введите Ваш телефон"  type="tel">
            <button class="button">Оформить заказ</button>
        </form>
        {{--<div class="products_count">Осталось <b>9</b>&nbsp;массажеров по акции</div>--}}
    </section>
    <footer class="footer_section">
        <div style="text-align: center;margin: 10px auto;display: block;font-size: 14px;line-height: 26px;"></div>
    </footer>
</div>
{{--<script src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer1/sf3w_uec.js" ></script>--}}
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js" ></script>
<script src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/script.js" ></script>
@include('components.pixel_footer')
</body>
</html>