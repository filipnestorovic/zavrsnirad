<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript" ></script>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.firstCircle{position:relative;top:30px}.doctorSection img{margin-top:-40px!important}.productSection{margin-top:50px}.scroll__list{position:relative;top:30px}.pair img{margin-top:40px}}@media only screen and (min-width:424px){.scroll__list{position:relative;top:60px}.pair img{margin:50px}}.manual__icon-inner--1 .manual__icon{width:152px;height:185px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)}.manual__icon-inner--2{padding-top:24px}.manual__icon-inner--2 .manual__icon{margin-left:0;width:166px;height:169px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)}.manual__icon-inner--3 .manual__icon{width:143px;height:213px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)}</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Билкови детоксикиращи пластири</h1>
                <h2>ДЕТОКС</h2>
                <span>„Китайска мъдрост, модерна технология“</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">АКЦИЯ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">нова цена</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr"> лв.</div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                <div class="monk"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/monk.png"/></div>
                <div class="ingredients"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/></div>
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture">
                    <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/detox/kinoki3.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ВНИМАНИЕ, АКЦИЯ!</h3>
                        <span>40% НАМАЛЕНИЕ</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Цена</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr"> лв.</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Име и фамилия" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Телефон" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="productLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}}  лв.)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Поръчай сега"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="triggers hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 triggers__item triggers__icon--bowl">
                <div class="triggers__desc">Столетна рецепта</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Активиране на микроциркулацията в кожата</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Изхвърляне на излишната вода от тялото</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Широк набор от ефекти</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Цялостна детоксикация на организма</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% ефективни и безопасни</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">В ДНЕШНО ВРЕМЕ Е ЖЕЛАТЕЛНО ДА ДЕТОКСИКИРАШ ОРГАНИЗМА СИ ПОНЕ ВЕДНЪЖ В МЕСЕЦА И ДА РЕГЕНЕРИРАШ СВОЕТО ТЯЛО</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/detox/kinoki4.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>В днешно време всички ние частично водим нездравословен начин на живот и е много важно да детоксикираме тялото си редовно. Детоксикиращите пластири „Kinoki“ са направени от растителни екстракти съгласно традиционна китайска рецепта и са предназначени за изхвърляне на излишните течности и токсини от тялото през акупунктурните точки.</p>
                <p>Пластири Kinoki облекчават напрежението и умората, подобряват съня, пречистват кожата и подобряват общото здравословно състояние. При използването на тези пластири натрупаните в тялото и потока на кръвта токсини биват бързо премахнати от тялото.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">ОБЛАСТИ НА ПРИЛОЖЕНИЕ НА ПЛАСТИРИ „KINOKI“</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Ревматология</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Лимфология</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Неврология</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">ПРЕЧИСТИ ТЯЛОТО СИ ОТ ТОКСИНИ САМО ЗА 5 ДНИ С ПОМОЩТА НА ПЛАСТИРИ „KINOKI“</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Дори първите таоисти казват, че токсините са били основната причина за понижаване на енергията в тялото. </p>
                <p>Извънмерните количества токсини неминуемо въздействат върху здравето или някой орган и причиняват заболявания като импотентност, мастопатия, хипертензия, главоболие, хронична умора и много други. </p>
                <p>Според идеите на монасите таоисти и традиционната китайска медицина негативната енергия, която се разпространява из цялото тяло, може да бъде премахната чрез детоксикация и нейното действие из тялото да бъде прекъснато.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">„Здраво тяло – здрав дух“</div>
                <div class="quote__author">Sun Shu-Min</div>
            </div>
        </div>
    </div>
    <div class="scroll">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="video">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="scroll__text">Лечебното действие на пластира се основава на следните ефекти:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Детоксикация на организма</li>
                        <li class="scroll__list-item">Облекчаване на главоболието и стреса</li>
                        <li class="scroll__list-item">Подмладяване на тялото</li>
                        <li class="scroll__list-item">Подобряване качеството на съня</li>
                        <li class="scroll__list-item">Положително влияние върху вътрешните органи</li>
                        <li class="scroll__list-item">Предпазване от неприятни миризми</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">СЪСТАВ НА ДЕТОКСИКИРАЩИ ПЛАСТИРИ „KINOKI“: </h2>
                <p>Рецептата за пластирите включва над 9 лечебни билки и е постигната като резултат от вековни проучвания на народни лечители.</p>
                <p>Детоксикиращите пластири са произведени според модерна технология и най-високите международни стандарти за качество. Пластири Kinoki не съдържат химически добавки, те са безвредни за тялото.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">hamalomena</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--burnaska-camphor">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">notopterygium incisum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--milletia-net">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Шафран</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--ginura-peritonita">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">millettia reticulata</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--corydalis-questionable">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">див джинджифил</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--angelica-croproperty">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">panax pseudoginseng</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">cistanche salsa</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline2">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">корен от скутелария</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">„KINOKI“ ЩЕ ПРЕЧИСТЯТ ТВОЕТО ТЯЛО ОТ ТОКСИНИТЕ <br> ВЪВ ВЪЗМОЖНО НАЙ-КРАТЪК СРОК!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> АКЦИЯ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> нова цена</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr"> лв.</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/detox/kinoki3.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Лечебно, натурално и силно пречистващо средство.</div>
                        <div>Помага за облекчаване на главоболието, стреса, освобождава тялото от секреции, подобрява качеството на съня и възвръща енергията.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Специална комбинация от лечебни китайски билки</li>
                        <li class="list-checked__item">Вековни рецепти от китайската медицина</li>
                        <li class="list-checked__item">Модерна технология на произвеждане</li>
                        <li class="list-checked__item">Ще извлече всички токсини от тялото на едно място</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ВНИМАНИЕ, АКЦИЯ!</h3>
                        <span>40% НАМАЛЕНИЕ</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Цена</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr"> лв.</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Име и фамилия" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Телефон" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="SecondProductLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}}  лв.)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Поръчай сега"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">КАКВО КАЗВАТ ЛЕКАРИТЕ ЗА БИЛКОВИ ПЛАСТИРИ ЗА ДЕТОКСИКАЦИЯ „KINOKI“</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Най-важното нещо в процеса на лечение на каквото и да е заболяване е тялото да се пречисти от токсините, които събира заради нездравословния начин на живот. Някога единственото решение е било предписването на продукти за детоксикация, които оказват негативно влияние върху черния дроб и храносмилателния тракт.</p>
                    <p>Имах пациенти, които се оплакваха от главоболие, хронична умора, болка в шийния гръбнак, всичко това в резултат на натрупването на токсини в тялото, които разрушават нормалните телесни функции.</p>
                    <p>Известно време, след като започнах да препоръчвам KINOKI на моите пациенти, голяма част от тях имаха значително по-малко проблеми и повечето от проблемите изчезнаха напълно. Пластири KINOKI са чудесни за естественото премахване на токсините от тялото и аз препоръчвам на всеки детоксикация поне веднъж месечно.</p>
                </div>
                <div class="comment__author"></div>
                <div class="comment__job"> Ревматолог</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">ОТЗИВИ НА НАШИТЕ КЛИЕНТИ</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Деница, 21 години</div>
                <div class="comments__text">
                    <p>Здравейте. Работя много в офиса и имам проблем с болката в мускулите, усещах краката си уморени и натежали, нямах достатъчно енергия и бях много раздразнителна. Открих пластири KINOKI в интернет и опитах да детоксикирам тялото си. След 2 кутии симптомите, които ме безпокояха, изчезнаха изцяло и от 3 месеца се чувствам чудесно. В настоящия момент употребявам превантивно 1 кутия всеки месец, защото не искам този труден период да се случи отново.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Людмила, 65 години</div>
                <div class="comments__text">
                    <p>Години наред имах проблем с излишни секреции в тялото и отекли крака. Пробвах всичко, но често лекарствата пораждаха други проблеми. Моята дъщеря ми купи Kinoki и това е единственият продукт, който ми помогна. Имам го в моята аптечка в големи количества. Благодаря Ви!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Драгомир, 32 години</div>
                <div class="comments__text">
                    <p>Често ям полуфабрикати и сладко, пия много газирани напитки и съм пушач. Започнах да изпитвам трудности като преумора и главоболие. Майка ми е използвала kinoki и ми ги препоръча. Първоначално не вярвах, че биха помогнали, но поради настоятелността на моята майка не се отказах и вече ги ползвам втора седмица, чувствах се много по-добре. Събуждах се по-отпочинал, имах повече енергия и нямах главоболие. Определено мога да кажа, че препоръчвам този продукт на всеки, защото наистина е добър!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">КАК ДА ИЗПОЛЗВАШ ПЛАСТИР „KINOKI“ ПРАВИЛНО</h2>
            </div>
        </div>
        <div class="row manual">
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-180">
                    <div class="manual__icon-inner manual__icon-inner--1">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">1</div>
                <div class="manual__title"> ОТВОРИ ОПАКОВКАТА И
                    <br/> ОТСТРАНИ ПЛАСТИРА</div>
                <div class="manual__desc">Измий ходилата си с вода и ги подсуши</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title"> ЗАЛЕПИ ПЛАСТИРА НА
                    <br/> ХОДИЛОТО СИ</div>
                <div class="manual__desc">Остави го през цялата нощ</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title"> НА СУТРИНТА <br/> МАХНИ ПЛАСТИРИТЕ</div>
                <div class="manual__desc">Измий ходилата си с вода!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Остави по един пластир и на двете ходила през цялата нощ</div>
        <center>
            <br/><br/>
            <h3><strong>Видими резултати след 1 кутия</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">За най-добри резултати се препоръчва да се използват 2-3 кутии без прекъсване</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">„ДЕТОКСИКИРАЩ ПЛАСТИР“ НЕ Е ПРЕХОДНО, А ДЪЛГОВРЕМЕННО ИЗБАВЛЕНИЕ ОТ ВРЕДНИТЕ ТОКСИНИ В ТЯЛОТО!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> АКЦИЯ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> нова цена</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr"> лв.</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/detox/kinoki3.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Лечебно, натурално и силно пречистващо средство.</div>
                        <div>Помага за облекчаване на главоболието, стреса, освобождава тялото от секреции, подобрява качеството на съня и възвръща енергията.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Специална комбинация от лечебни китайски билки</li>
                        <li class="list-checked__item">Вековни рецепти от китайската медицина</li>
                        <li class="list-checked__item">Модерна технология на произвеждане</li>
                        <li class="list-checked__item">Ще извлече всички токсини от тялото на едно място</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ВНИМАНИЕ, АКЦИЯ!</h3>
                        <span>40% НАМАЛЕНИЕ</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Цена</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr"> лв.</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Име и фамилия" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Телефон" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="ThirdProductLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}}  лв.)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Поръчай сега"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Sva prava zadržana.</span>
    </div>
</footer>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>