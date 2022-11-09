<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/style-2.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/media-2.css" rel="stylesheet">
    <style>
        .sec10__part img {
            width: 240px;
        }
        @media (max-width: 991px) {
            .header .logo {
                width: 180px;
            }
            .header .logo b {
                font-size: 17px;
            }
            .header .logo:before {
                left: 180px;
            }
        }
        .sec9__container:before {
            background: url({{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png) no-repeat;
            width: 472px;
            height: 584px;
            right: -90px;
            bottom: -100px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="main__wrapper s__main">
    <div class="header">
        <div class="header__container">
            <div class="logo font-mons"><b> SLIMMING PATCH </b></div>
            <div class="h1 font-mons" data-xd="t3"><b>За плосък и привлекателен корем!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Отслабнете бързо и лесно, без йо йо ефект!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Отслабнете бързо и лесно</div>
            <div class="h2 only-mob font-mons" data-xd="t2">без йо йо ефект!</div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><button class="btn for_scroll"> ПОРЪЧАЙ! </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Отслабвайте през целия ден!</div>
                <div class="h1 blue font-mons" data-xd="t2">24-часова система</div>
                <div class="h2 green font-mons" data-xd="t2">Отървете се от <b>мастните натрупвания и изхвърлете токсините</b>, без да губите мускулна маса</div>
                <ul class="font-PT">
                    <li><b> Подобрява </b> храносмилането </li>
                    <li> 100% <b> натурален </b></li>
                    <li><b>Ускорява метаболизма</b> дори когато почивате</li>
                </ul>
                <div class="kletki font-mons"><span>мастни клетки (преди)</span><span>мастни клетки (след)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> Резултати на </div>
                    <div class="h2 blue font-mons" data-xd="t2">лабораторен анализ</div>
                    <p class="font-PT">Лабораторен анализ потвърди, че продуктът съдържа <b class="green">напълно естествени вещества, които имат положителен ефект върху целия организъм.</b></p>
                    <p class="font-PT"><b class="green">Те ускоряват кръвообращението, засилват метаболизма и изхвърлят токсините и течностите от тялото.</b> Бързо топи натрупаните мазнини и прави корема стегнат и плосък.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Започнете деня си с енергия на</span>
            <div class="h1 blue font-mons" data-xd="t2"> SLIMMING PATCH</div>
            <span class="h2 blue font-mons" data-xd="t2">натуралните  лепенки за отслабване</span>
            <div class="h2 pink font-mons" data-xd="t2">Само за няколко дни тялото ви ще бъде <b>пречистено, пълно с енергия,</b> а килограмите ще ca видно намалени.</div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">SLIMMING PATCH  ДАВА ЕНЕРГИЯ ПРЕЗ ЦЕЛИЯ ДЕН</p>
                    <button class="btn for_scroll only-web"> Поръчай сега </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Уникална комбинация от съставки, които подпомагат здравословното функциониране на организма. Не съществуват отрицателни ефекти и енергийни спадове през деня. Мазнините се бързо топят и изхвърлят на повърхността, ускорява се метаболизмът и стимулира изхвърлянето на течности.
                        Те намаляват апетита и засилват метаболизма в умерени граници. Резултатът е безболезнено и за сравнително кратко време ефективно отслабване.
                        <b class="pink">По този начин се намалява подуването, значително се подобрява подвижността, а най-важният фактор е отслабването и стегнатото тяло.</b></p>
                    <ul class="font-PT">
                        <li>Подобрява състоянието на организма</li>
                        <li>Увеличава изгарянето на мазнини</li>
                        <li>Намалява нивото на холестерола в кръвта</li>
                        <li>Намалява апетита</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">SLIMMING PATCH  ДАВА ЕНЕРГИЯ ПРЕЗ ЦЕЛИЯ ДЕН</p>
                    <button class="btn for_scroll only-mob"> Поръчай сега </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2"> SLIMMING PATCH </div>
            <div class="h2 blue font-mons" data-xd="t2">Какво е уникалното в неговия състав?</div>
            <p class="font-PT"> Вашето тяло се трансформира благодарейки  на специална комбинация от естествени съставки,
                <b class="blue">които осигуряват енергия и ускоряват изгарянето на мазнини</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons"> Загуба на тегло в кг </p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> месец </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Отслабване </div>
                            <ul class="font-PT">
                                <li class="red"> Обикновени диети</li>
                                <li class="gr"> SLIMMING PATCH</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons">Поддържане на теглото в кг</p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> месец </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Оформяне на тялото </div>
                            <ul class="font-PT">
                                <li class="red"> Обикновени диети</li>
                                <li class="gr"> SLIMMING PATCH</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> Резултати </div>
            <div class="h2 blue font-mons" data-xd="t2"> потребител </div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 кг </b> Преди </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 кг </b> след месец </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 кг </b> след 2 месеца </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 кг </b> след 3 месеца </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Дияана, 28 години</div>
                    <p class="last-p font-PT">Напълнях повече след раждането. Мислех, че ще отслабна лесно, но след много диети още се
                        напълнях. Постоянно бях гладна и в лошо настроение. След използване на Slimming пластира, аз веднага започнах да се чувствам по-добре. Имах повече енергия през деня, бях по-малко уморна през вечерта, живем с по-малко стрес. Като резултат на това достигнах идеалното си тегло за 2,5 месеца. Между другото, с диети  аз не дойдох до идеалното си тегло дори и след една година!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Бърза загуба на тегло през първите 2 седмици</div>
                <div class="h1 blue font-mons" data-xd="t2">12 КГ ПО-МАЛКО</div>
                <div class="h2 pink font-mons" data-xd="t2">в рамките на 2 месеца</div>
                <p class="font-PT up_p"> Такива резултати се постигат благодарение на комбинацията от два фактора - <b class="blue"> разграждане на мазнини + изхвърляне на токсините </b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink"> Токсините напускат тялото още през първите седмици на използването. </b><br> Ето защо резултатите са видими веднага. </p>
            <p class="font-PT"><b class="pink">В продължение на 2 седмици дълбоките мастни натрупвания започват да се разграждат, нивото на алкалност се възстановява и съставът на кръвта се подобрява.</b>
                Загубата на тегло може да бъде бавна поради процеса на възстановяване на цялостното здраве.</p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Препоръка oт </div>
            <div class="h1 green font-mons" data-xd="t2"> професионалист </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Гордана, <br> Диетолог </p>
                </div>
                <p class="font-PT">Slimming patch е биологично активен продукт с цялостен ефект за подобряване на здравето, който хората около вас ще забележат промените. Положителни резултати могат да се видят и при кръвен тест. Нисък холестерол, стабилни нива на крвна захар, здравословно количество на протеин, които показват резултатите от моите пациенти, благодарение на Slimming patch.</p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2"> SLIMMING PATCH </div>
                    <div class="h2 pink font-mons" data-xd="t2">Оформете тялото си!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"><button class="btn for_scroll"> ПОРЪЧАЙ веднага </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Какво казват</div>
            <div class="h2 green font-mons" data-xd="t2"> клиенти </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Ура! Slimming patch е нещо невероятно! Свалих 7 кг без никакви усилия само за един месец. Сега работя върху корема си.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Далибор
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Повече от месец отслабвам с лепенки Slimming. Малко по малко апетитът ми намаля.Започнах да се чувствам сит дори след малки порции. Не бях на диета, просто ограничих приема на захарни и тестени изделия. Като резултат на това отслабнах с 12 кг. Мазнините от гърдите и стомаха са изчезнали. Виж как изглеждам.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Милица
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Не знам какво мислят другите, но аз съм много доволна от този продукт. Той наистина ми помогна! Отслабнах с 23,5 кг. Сега искам да спортувам! В момента имам фигура, която дори не можех да си представя преди.</p>
                <p class="font-PT">
                    <b class="blue">
                        Йована
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">SLIMMING PATCH - За плосък и привлекателен корем!</div>
                    <div class="h1 blue font-mons" data-xd="t2"> SLIMMING PATCH</div>
                    <div class="h2 pink font-mons" data-xd="t2">За перфектно тяло без вреда за здравето</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue">ВЪВЕДЕТЕ ДАННИ ЗА ДОСТАВКА</div>
                            <input class="inp font-mons" name="name" placeholder="Име" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone" placeholder="Телефонен номер" type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Адрес" type="text" required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Град" type="text" required>
                            <input class="inp font-mons" name="shipping_zip" placeholder="Пощенски код" type="text" required>
                            <select class="form-content__element form-content__select change-package-selector2 form_control font-mons" name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} {{ $prices[1]['currency'] }})</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift"
                                     id="{{ $singlePrice['quantity'] }}"
                                     @if($singlePrice['quantity'] === 1) style="display: block" @endif>
                                    {{ $singlePrice['quantity'] }} x {{ $product->product_name }}
                                    <br><strike class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} {{ $prices[1]['currency'] }} </strike>
                                    {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $prices[1]['currency'] }}
                                    <br> @if($singlePrice['is_free_shipping']) + БЕЗПЛАТНА ДОСТАВКА @endif
                                </div>
                            @endforeach
                            <button class="btn js_submit button__text"> ПОРЪЧАЙ СЕГА </button>
                            <div class></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}natureteaFiles/slimonex1/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
