<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta content='user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0' name=viewport>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/flawless/styles.css">
    <link rel=icon type="image/png" href="{{ asset('/') }}purplerelaxFiles/flawless/2.png">
    <style>
        .newprice {
            margin-bottom: 10px;
        }
        @media (min-width:720px){
            .form_left {
                width: 30%;
            }
            .form_right {
                width: 70%;
            }
            .orderBtnCustom {
                width: 40%;
                margin-left: 30%;
            }
            .orderBtnCustom1 {
                width: 40%;
            }
        }
    </style>
</head>
<body>
<header>
    @include('components.display_errors')
    <div class=mw>
        <div class=r>
            <div class='s m g6 form_left' ></div>
            <div class='s m g6 ch form_right'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch>ВЗЕМЕТЕ НАЙ-МОДЕРНОТО УСТРОЙСТВО ЗА ОБЕСКОСМЯВАНЕ, НАПРАВЕНО ДО СЕГА</p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Проектиран и произведен според най-високите световни стандарти</span> </li>
                            <li> <span>4 плаващи глави с 18 каратово златно покритие</span> </li>
                            <li> <span>Безболезнено, не наранява кожата, не предизвиква дразнене</span> </li>
                            <li> <span>Подходящ за всеки тип кожа</span> </li>
                        </ul>
                        <img class=slogan2 src='{{ asset('/') }}purplerelaxFiles/flawless/1.svg'>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <p style="margin-bottom: 25px;">ФОРМУЛЯР ЗА ПОРЪЧКА</p>
                            <div class=timer>
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> {{ $prices[1]['currency'] }}</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> {{ $prices[1]['currency'] }}</b> </div>
                            </div>
                            <input placeholder='Име и фамилия' type=text name=name value="" required>
                            <input placeholder='Телефонен номер' type=text name=phone value="" required>
                            <input placeholder='Адрес' type=text name=shipping_address value="" required>
                            <input placeholder='Град' type=text name=shipping_city value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='ПОРЪЧАЙ СЕГА'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<article id=art1>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg>ЛЕКО И НЕЖНО ОБЕСКОСМЯВА <strong>с изключителна мекота на кожата!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6 ch'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <p class=ch>Обезкосмяване с восъка е много болезнена, нехигиенична и отнема много време.</p>
                <p> Епилаторът "Flawless Legs"
                    <strong style=color:black>разполага с 4 плаващи - въртящи се глави, които точно следват контурите на тялото и се адаптират към него.</strong>
                    При плавното движение се отстраняват всички косми, дори и най-късите. За абсолютно перфектна епилация е достатъчно да преминете веднъж само върху определен участък и космите изчезват.
                </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num1.svg'> <span>Безупречните остриета осигуряват суха кола маска без сапун и вода, така че могат да се използват по всяко време и навсякъде.</span> </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num2.svg'> <span>Поради малкия си размер е идеален за бързо обезкосмяване, например по време на почивка между работа или преди важна среща. Обезкосмяване без дразнене и нараняване.</span> </p>
            </div>
        </div>
    </div>
</article>
<article id=art2>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> ДЕПИЛАЦИЯ <strong>без раздразнения и порязвания!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <p class=ch>Епилатора "Flawless Legs" - първият апарат за обезкосмяване, чиито глави са покрити с истинско медицинско злато от 18 карата.</p>
                <p>Това ви позволява напълно да избегнете дразненето на кожата и да осигурите 100% приятна епилация. Безупречните остриета не предизвикват дразнене дори и на най-чувствителната кожа.</p>
                <p>Епилаторът е с лазерно прецизни и остри остриета от хирургическа стомана. Такива остриета позволяват безболезнено отстраняване дори на фини косми. За да се премахнат напълно порязванията и микронараняванията по кожата, остриетата са затворени в специални калъфи.</p>
                <a class='btn chhh orderBtnCustom' href="#buy_form">ПОРЪЧАЙ СЕГА</a>
            </div>
            <div class='s m6 g6'>
                <video width="100%" controls>
                    <source src="{{ asset('/') }}purplerelaxFiles/flawless/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class=chh>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/logo-min.svg'>
                    <p>Наистина, най-специализираният продукт за обезкосмяване!</p>
                </div>
            </div>
        </div>
    </div>
</article>
<article id=art4>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>РЕЗУЛТАТИ ОТ УПОТРЕБА</h2>
                <p class=ch>Редовното използване на уреда "Flawless Legs" помага за изтъняване и забавяне на растежа на косъма.</p>
                <br/>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <span>100%</span>
                    <p>обезкосмяване na всякаква дължина, дебелина и структура</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>70%</span>
                    <p>по-мека и кадифена кожа</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>2 пъти</span>
                    <p>по-малко за обезкосмяване</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art5>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg2> Flawless Legs <strong>Защо да го използвате?</strong> </h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.jpg'> </figure>
                    <p>Ергономичен, иновативен и модерен дизайн</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.jpg'> </figure>
                    <p>Изключително ефективни остриета</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.jpg'> </figure>
                    <p>Без порязвания, раздразнения и болка</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.jpg'> </figure>
                    <p>Малък размер, лесно се побира в дамска чанта</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/8.jpg'> </figure>
                    <p>4 плаващи глави осигуряват пълно обезкосмяване</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.jpg'> </figure>
                    <p>Батерията издържа до 4 часа с едно зареждане</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.jpg'> </figure>
                    <p>Вградени LED светлини, които ви насочват по време на обезкосмяване</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.jpg'> </figure>
                    <p>Подходящ за всички типове кожа, включително изключително чувствителна</p>
                </div>
            </li>
        </ul>
        <ul class='r chhh'>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.svg'>
                <p>Може да се използва в банята</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.svg'>
                <p>За жени от всички възрастови групи</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.svg'>
                <p>Перфектен, Абсолютно нежно работи.</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.svg'>
                <p>Проектиран и произведен според най-високите стандарти</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.svg'>
                <p>USB зареждане</p>
            </li>
        </ul>
    </div>
</article>
<article id=art6>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> ПРЕКРАСНИ ГЛАДКИ КРАКА С Епилатор "Flawless Legs"
                    <strong>Това е невъзможно с други методи за обезкосмяване!</strong>
                </h2>
                <a class='btn chhh' href="#buy_form" src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'>ПОРЪЧАЙ С ОТСТЪПКА</a>
            </div>
        </div>
        <div class='r r1'>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.png'> </figure>
            </div>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Обикновени самобръсначки</h3>
                    <p>Трудно е, губиш си времето.
                        Необходимо е да се използват кремове и пяни. Често след бръснене има дразнене, врастнали косми и суха кожа.</p>
                    <p>Възможно е да се порежете. След бръснене космите се появяват отново след 2 дни. Колкото по-често се бръснете, толкова са по-дебели, твърди и по-тъмни стават космите.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Най-доброто решение е да си поръчате "Flawless Legs"</span> </a>
                </div>
            </div>
        </div>
        <div class='r r2'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Крем за обезкосмяване</h3>
                    <p>Косъмчетата растат бързо и стават още по-твърди. Те могат да предизвикат дразнене и алергия и да имат неприятна миризма.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Най-доброто решение е да си поръчате "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.png'> </figure>
            </div>
        </div>
        <div class='r r3'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Кола маска</h3>
                    <p>Възможни са нежелани kожни реакции</p>
                    <p>Честото обезкосмяване по този начин може да причини опасни кожни заболявания.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Най-доброто решение е да си поръчате "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.png'> </figure>
            </div>
        </div>
        <div class='r r4'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Лазер или фотолиза</h3>
                    <p>Без химическа анестезия с лидокаин (или други средства) тези лечения не се извършват. Много противопоказания, силно подуване и дразнене на кожата.</p>
                    <p class=ch>Много скъпи лечения. Растежът на косъмите  може да се появи отново.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Най-доброто решение е да си поръчате "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.png'> </figure>
            </div>
        </div>
    </div>
</article>
<article id=art7>
    <div class=mw>
        <div class=r>
            <div class='s gm g'>
                <h2 class=bg2> МНЕНИЯТА НА КУПУВАЧИТЕ ЗА
                    <strong>Епилатор Flawless Legs</strong>
                </h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.jpg'> <span>Мария Петрова, 34 години, София</span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'>--}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.jpg'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>Това наистина е нещо различно. Flawless Legs е страхотно устройство във всеки смисъл. Харесва ми външния му вид. Кожата ми е много мека и гладка и приятелят ми също забеляза разликата. :) Дизайнът и качеството на продукта са отлични и препоръчвам го на мои приятели.</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/14.jpg'> <span>Цветелина Иванова, 32 години, Пловдив</span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> --}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/15.jpg'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>Вече два месеца ползвам "Flawless Legs" и съм напълно доволна.Кожата ми е мека,без раздразнения, космите растат много бавно след депилация.Освен това пробвах и други уреди за обезкосмяване,но този е най-добро решение и най-много ми пасва.
                        Ергономичен дизайн, проектиран така, че да се побира удобно в дланта. Отстранява много добре космите и не заема много място в чантата.Идеален за бързо обезкосмяване.Препоръчвам го на всеки.</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/16.jpg'> <span>Кристина Георгиева, 28 години, Варна</span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> --}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/1.gif'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>За моята нежна и чувствителна кожа този депилатор е истинско освежаване. Преди това всяко обезкосмяване беше кошмар за мен. Кожните раздразнения не изчезваха с дни. При "Flawless Legs" няма абсолютно никакво раздразнение. Други уреди ми скубяха космите и беше болезнено,но това не е случаят с епилатора "Flawless Legs".Той премахва космите абсолютно безболезнено,без раздразнения и червени точки. Най-накрая намерих уред за обезкосмяване, който напълно оправда очакванията ми. Благодаря ви много!</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art8>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg> СЪДЪРЖАНИЕТО <strong>Какво съдържа опаковката?</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <ol>
                    <li>Епилатор "Flawless Legs"</li>
                    <li>Инструкция за исползване</li>
                    <li>Кабел за зареждане</li>
                </ol>
                <div class=price>
                    <span style='text-decoration: line-through'> <span class="js_old_price oldproductsum"></span> </span>
                    <div class=price> <span class="js_new_price productsum"></span> <strong> <span class=js_curs></span> </strong> </div>
                </div>
                <a class='btn chhh orderBtnCustom1' href="#buy_form">ВЪЗПОЛЗВАЙТЕ СЕ ОТ ОТСТЪПКАТА</a>
            </div>
        </div>
    </div>
</article>
<article id=art12>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>КАК РАБОТИМ:</h2>
            </div>
        </div>
        <ul class=r>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.svg'>
                    <p>Попълнете формуляра по-долу с вашата информация за доставка</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.svg'>
                    <p>Ние ще се свържем с вас, за да потвърдим поръчката ви</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.svg'>
                    <p>Ние ще ви изпратим пратката с експресна поща навсякъде в България</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.svg'>
                    <p>Заплащате на куриера при получаване на пратката</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<footer>
    <div class=mw>
        <div class=r>
            <div class='s m g6 form_left'>
            </div>
            <div class='s m g6 ch form_right'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch>ВЗЕМЕТЕ НАЙ-МОДЕРНИЯТ УСТРОЙСТВО ЗА ОБЕЗКОСМИВАНЕ, НАПРАВЕНО ДО СЕГА</p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Проектиран и произведен според най-високите световни стандарти</span> </li>
                            <li> <span>4 плаващи глави с 18 каратово златно покритие</span> </li>
                            <li> <span>Безболезнено, не наранява кожата, не предизвиква дразнене</span> </li>
                            <li> <span>Подходящ за всеки тип кожа</span> </li>
                        </ul>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post id="buy_form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <p style="margin-bottom: 25px;">ФОРМУЛЯР ЗА ПОРЪЧКА</p>
                            <div class=timer>
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> {{ $prices[1]['currency'] }}</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> {{ $prices[1]['currency'] }}</b> </div>
                            </div>
                            <input placeholder='Име и фамилия' type=text name=name value="" required>
                            <input placeholder='Телефонен номер' type=text name=phone value="" required>
                            <input placeholder='Адрес' type=text name=shipping_address value="" required>
                            <input placeholder='Град' type=text name=shipping_city value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='ПОРЪЧАЙ СЕГА'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@include('components.pixel_footer')
</body>
</html>
