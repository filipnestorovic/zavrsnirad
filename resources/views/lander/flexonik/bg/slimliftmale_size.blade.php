<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftmale/styles.css">
    <link href="{{ asset('/') }}flexonikFiles/slimliftmale/custom-styless.min.css" type="text/css" rel="stylesheet">
    <style>
        .sizeDiv {
            display: block;
            margin: 10px auto 10px auto;
            padding: 0 15px;
            width: 300px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
        }
        .size {
            -webkit-appearance: radio;
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
            margin-left: 50px;
            margin-top: 18px;
            cursor: pointer;
        }
        .sizeDiv span {
            display: block;
            margin-top: 20px;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }
        label {
            color: #fff;
            cursor: pointer;
        }
        .button {
            margin: 260px 0px 0px 40px;
        }
        @media screen and (max-width: 639px) {
            .header_section {
                height: 970px;
            }
            .button {
                margin: 40px auto;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">ПОТНИК ЗА ПЕРФЕКТНАТА ТАЛИЯ И ТОРС</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Направен от висококачествени материали</li>
                <li>Не причинява дискомфорт</li>
                <li>Напълно невидим под дрехите</li>
            </ul>
            <a href="#order_form" class="button">Поръчай сега</a>
        </div>
        <div class="discount"><span>-40%</span>отстъпка</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Този невероятен потник е изработен от копринена материя и еластична ликра, удобен, и перфектно се прилепва към тялото.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Помага за поддържане на привлекателен външен вид по време на процеса на отслабване.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Ефективно стяга корема и подчертава торса, благодарение на специалната си форма и структура.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Благодарение на иновативния дизайн върху него могат да се носят тънки тениски, пуловери и спортни ризи.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>Информация за Оформящия SLIM 'N LIFT потник</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>Потника SLIM 'N LIFT помага за мъжествена и привлекателна фигура.
                Тялото веднага става по-стегнато и привлекателно – без диети и изморителни упражнения. Благодарение на уникалното разположение на еластичните компресионни плочи, SLIM 'N LIFT разпределя правилно излишното тегло.
                Специални оребрени панели изправят всяка гънка. „Бирен“ корем и мастни натрупвания – изчезват за миг. Освен това SLIM 'N LIFT помага за изправяне на гърба и значително подобрява стойката. Повече самочувствие, повече успех в бизнеса, комуникацията и съблазняването.</p>
        </div>
    </div>
</section>
<section id="catalog" class="catalog_section">
    <div class="wrapper">
        <div class="product_item male clearfix">
            <div class="gallery_block">
                <img class="image one" src="{{ asset('/') }}flexonikFiles/slimliftmale/b4-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
            </div>
            <div class="info">
                <h3>ХАРАКТЕРИСТИКИ НА ПОТНИКА SLIM 'N LIFT</h3>
                <ul>
                    <li><b>Състав:</b> копринена материя и еластична ликра</li>
                    <li><b>Температурни условия:</b> по всяко време на годината</li>
                    <li><b>Физическа активност:</b> всяка</li>
                    <li><b>Описание:</b> Изработен от много удобна материя, той е най-ефектното решение за перфектна талия.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Стара цена:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <a href="#order_form" class="button" data-comment="Для мальчиков">Поръчай сега</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>ПРЕДИМСТВА НА SLIM 'N LIFT</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>СИЛА И ИЗДЪРЖЛИВОСТ</h4>
                    <p>Изработен от висококачествени, безопасни материали, поради което не предизвиква раздразнения и обриви.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ЕЛАСТИЧНОСТ</h4>
                    <p>Еластичен, гладък, постепенно стяга кожата и е незабележим при носене.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ЕФЕКТИВНОСТ</h4>
                    <p>Перфектно стяга гънките на корема и гърба, правейки фигурата тънка и привлекателна.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ЛЕСНА ПОДДРЪЖКА</h4>
                    <p>Не изисква специални грижи. Може да се пере на ръка и в пералня на нежен цикъл.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>КАК ДА ПОРЪЧАТЕ <span>SLIM'N LIFT</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/bg_order_steps__step1_image.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Оставете вашата информация за доставка на сайта</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Ще се свържем с Вас за да направим потвърждение на поръчката</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Ще Ви изпратим пратката с експресна поща</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Плащането се извършва с наложен платеж</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>UTISCI ZADOVOLJNIH <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Боян, на 42 години</div>
                    <p>Честно казано не можех да повярвам, че е възможно сега да нося дрехи с 2-3 номера по-малки. Когато го пробвах, знаех, че това е продукта за мен. С жените ми беше по-лесно, а колегите на работа ме молят да им кажа рецептата ми за диета. :)</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Оливър, на 49 години сам</div>
                    <p>Имам наднормено тегло. Slim And Lift наистина стяга корема и подчертава раменете, които изглеждат по-широки. Получавам комплименти за външния си вид и се чувствам по-красив, когато се погледнем в огледалото.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">ПОТНИК ЗА ПЕРФЕКТНАТА ТАЛИЯ И ТОРС</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Направен от висококачествени материали</li>
                <li>Не причинява дискомфорт</li>
                <li>Напълно невидим под дрехите</li>
            </ul>
        </div>
        <div class="form_block">
            <p>ВЪЗПОЛЗВАЙТЕ СЕ ОТ СПЕЦИАЛНА ОТСТЪПКА ОТ 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Стара цена:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Име и фамилия" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Телефон" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Адрес" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Град" required="">
                @isset($productSizes)
                <div class="sizeDiv">
                    <span>Изберете размер</span>
                    @foreach($productSizes as $singleSize)
                        <input type="radio" name="size" class="size" value="{{$singleSize->product_size}}" id="size-{{strtolower($singleSize->product_size)}}" checked/>
                        <label for="size-{{strtolower($singleSize->product_size)}}">
                             {{$singleSize->product_size}} ({{$singleSize->description}})
                        </label>
                        <br>
                    @endforeach
                </div>
                @endisset
                <button type="submit" class="button">ПОРЪЧАЙ СЕГА</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
