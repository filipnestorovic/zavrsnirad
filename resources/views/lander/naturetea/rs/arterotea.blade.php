<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    
    <link rel=icon type="image/png" href="{{ asset('/') }}natureteaFiles/arterotea/logo.png">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/bootstrap.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/fonts.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/header.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/libs.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/styles.min.css">
    {{--<script src="shared_files/js/custom-functions2.min33e7.js?28" defer></script>--}}
</head>
<body>
<div id=top_anch> </div>
<header>
    <div class="top-line kma-oldmenu-test">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=top-block>
                        <div class=logo><a href=""><img src="{{ asset('/') }}natureteaFiles/arterotea/logo.png" alt="Arterotea"></a></div>
                        <div class="slogan-block hidden-xs hidden-sm">
                            <div class="slogan-item item1">
                                <div class=bolditalic>Более 800 000</div>
                                <div class=italic>положительных отзывов</div>
                            </div>
                            <div class="slogan-item item2">
                                <div class=bolditalic>Клинически</div>
                                <div class=bolditalic>протестирован</div>
                            </div>
                        </div>
                        <div class="top-timer timer hidden-xs hidden-sm hidden-md">
                            <div class=timer-header>До конца акции осталось:</div>
                            <div class=clock-top></div>
                        </div>
                        <div class="top-btn hidden-xs">
                            <div class=btn-header>Звонок бесплатный по России и СНГ</div><a href="#pu-form" class="btn call-form">Заказать звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-line kma-newmenu-test">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=top-block>
                        <div class=logo><a href="#top_anch"><img src="{{ asset('/') }}natureteaFiles/arterotea/logo.png" alt="Arterotea"></a></div>
                        <nav class=nav>
                            <li>
                                <a href="#use">Действие</a>
                            </li>
                            <li>
                                <a href="#sost">Состав</a>
                            </li>
                            <li>
                                <a href="#rev">Отзывы</a>
                            </li>
                            <li>
                                <a href="#dost">Доставка</a>
                            </li>
                        </nav>
                        <div class=top-btn>
                            <div class=btn-header>Звонок бесплатный по России и СНГ</div><a href="#pu-form" class="kma-newmenu-button-test btn call-form">Заказать звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=header-body>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Холемин® — чистые здоровые сосуды <br class="hidden-xs hidden-sm">без холестерина за 1 курс</h1>
                    <div class=subh>Средство Холемин снизит холестерин без химии и переплат</div>
                </div>
            </div>
        </div>
        <div class="container first-screen">
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=bulet-block>
                        <ul class=bulet-list>
                            <li> <span class=bold>Нормализует артериальное давление </span><br class="hidden-xs hidden-sm">за счет цинаринов <span class=bold>Артишока</span></li>
                            <li>
                                Софора Японская <span class=bold>устраняет последствия <br class="hidden-xs hidden-sm">атеросклероза и риск инфаркта</span>
                            </li>
                            <li> <span class=bold>Настраивает саморегуляцию </span>уровня <span class=bold>холестерина </span>благодаря <span class=bold>маслу Амаранта</span></li>
                        </ul>
                    </div>
                </div><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-bg.png" alt="Arterotea" class="pack hidden-xs hidden-sm"><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-sm.png" alt="Arterotea" class="pack hidden-md hidden-lg"   >
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            <div class="form-timer timer hidden-lg">
                                <div class=timer-header>До конца акции осталось:</div>
                                <div class=clock-form01></div>
                            </div>
                            <div class=sale-circs>
                                <div class="sale-terr or hidden-md">**Внимание! Акция действует только на <br class="hidden-xs hidden-sm">территории России и стран СНГ</div>
                                <div class=sale-price>
                                    <div class="price old">
                                        <div class=descr>Старая цена:</div>
                                        <div class=digit> <span class=big><span class=price_land_s4>798</span> </span><span class=price_land_curr>L</span></div>
                                    </div>
                                    <div class="price new or">
                                        <div class=descr>Новая цена:</div>
                                        <div class=digit><span class="big bold"><span class=price_land_s1>67</span> </span><span class=price_land_curr>L</span><span class="big bold">*</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-input clearfix">
                                <div class=input-block>
                                    <label for=n01>Введите Ваше имя</label>
                                    <input id=n01 name=name type=text required placeholder="Валерий">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p01>Введите Ваш телефон</label>
                                    <input id=p01 name=phone type=tel required placeholder="+7 (916) 123-45-67">
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <p class="kma-d-test attention-descr or">Быстрая доставка в г. Москва.</p>
                                <div class=attention-block>
                                    <div class="attention-descr or">
                                        Внимание! <br>
                                        Осталось товаров <br class="hidden-sm hidden-md hidden-lg">со скидкой:
                                    </div>
                                    <div class=attention-rest><span class="lastpack big bold">00 </span>&nbsp;штук</div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn bold">ЗАКАЗАТЬ Холемин®</button>
                                </div>
                                <div class=sale-total>Уже купили сегодня: <span class=or><span class="big bold count-people">000 </span>&nbsp;человек</span></div>
                                <div style="color: #000; font-size: 14px; text-align: center;">*при заказе курса</div>
                            </div>
                        </form>
                        <div class=security-data>
                            <div class=security-descr>Ваши данные под защитой</div>
                            <div class="security-icon item01"></div>
                            <div class="security-icon item02"></div>
                            <div class="security-icon item03"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=medal-block>
                        <div class="medal item1"></div>
                        <div class="medal item2"></div>
                        <div class="medal item3"></div>
                        <div class="medal item4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class=stat>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>59 000 000 человек ежегодно умирают <br class="hidden-xs hidden-sm">из-за высокого холестерина</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=stat-items>
                        <div class="stat-item item01">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st01-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Инсульт</div>
                            <div class=stat-item-text>Смерть клеток <br class="hidden-xs hidden-sm">головного мозга</div>
                        </div>
                        <div class="stat-item item02">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st02-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Ишемия</div>
                            <div class=stat-item-text>Недостаток <br class="hidden-xs hidden-sm">поступления <br class="hidden-xs hidden-sm">кислорода к сердцу</div>
                        </div>
                        <div class="stat-item item03">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st03-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Инфаркт</div>
                            <div class=stat-item-text>Омертвение <br class="hidden-xs hidden-sm">клеток сердца</div>
                        </div>
                        <div class="stat-item item04">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st04-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Гипертония</div>
                            <div class=stat-item-text>Быстрый износ <br class="hidden-xs hidden-sm">сердца и сосудов</div>
                        </div>
                        <div class="stat-item item05">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st05-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Атеросклероз</div>
                            <div class=stat-item-text>Повреждение и <br class="hidden-xs hidden-sm">закупорка сосудов</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=test>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>89% людей не знают, что находятся <br class="hidden-xs hidden-sm">под угрозой холестерина. Проверьте себя!</h2>
                </div>
            </div>
            <div class=test-block>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=subh>
                            <p>Зачастую человек узнает, что у него <span class=bold>повышенный холестерин</span>, только когда обращается <br class="hidden-xs hidden-sm"><span class=bold>в больницу </span>из-за поразивших его болезней</p>
                            <p><span class=bold>Отметьте симптомы</span>, которые наблюдаете у себя, и <span class=bold>нажмите кнопку </span>“Узнать результат”.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=test-form-block><img src="{{ asset('/') }}natureteaFiles/arterotea/test.png" alt="Arterotea" class=bg-img>
                            <form class=test-form>
                                <div class=checkbox-block>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb01 name=ncb01 class=icb-test>
                                        <label for=cb01>Плохое настроение, депрессия</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb02 name=ncb02 class=icb-test>
                                        <label for=cb02>Ощущение упадка сил</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb03 name=ncb03 class=icb-test>
                                        <label for=cb03>Тяжесть в ногах</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb04 name=ncb04 class=icb-test>
                                        <label for=cb04>Повышенное давление</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb05 name=ncb05 class=icb-test>
                                        <label for=cb05>Лишний вес</label>
                                    </div>
                                </div>
                                <div class=checkbox-block>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb08 name=ncb08 class=icb-test>
                                        <label for=cb08>Внезапные головокружения</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb09 name=ncb09 class=icb-test>
                                        <label for=cb09>Рассеянность</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb010 name=ncb010 class=icb-test>
                                        <label for=cb010>Боли в области сердца</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb011 name=ncb011 class=icb-test>
                                        <label for=cb011>Пятна на теле (гиперпигментация)</label>
                                    </div>
                                    <div class=checkbox-item>
                                        <input type=checkbox id=cb012 name=ncb012 class=icb-test>
                                        <label for=cb012>Проступающие сосуды</label>
                                    </div>
                                </div>
                                <div class=test-form-btn>
                                    <button class=btn>Узнать результат</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=result-block>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=result-wrapper><img src="{{ asset('/') }}natureteaFiles/arterotea/r01.png" alt="Arterotea" class="res-img hidden-xs hidden-sm">
                            <div class="result-img hidden-xs">
                                <div class=graph>
                                    <div class=gruk></div>
                                </div>
                            </div>
                            <div class="result-img-sm hidden-sm hidden-md hidden-lg">
                                <div class=graph>
                                    <div class=gruk></div>
                                </div>
                            </div>
                            <div class=result-descr>
                                <div class=result-test>
                                    <div class="result-header bold"></div>
                                    <div class=result-text></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=waswird id=use>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Что будет, если прямо сейчас не начать снижать холестерин?</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww01.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Отложение <br>холестерина</div>
                        <div class=waswird-text>Ожирение, скачки давления, головные боли, депрессия, рассеянность, пятна на теле.</div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww02.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Нарушение кровоснабжения</div>
                        <div class=waswird-text>Атеросклероз, снижение интеллекта, утомляемость, боли в ногах, проблемы с сердцем.</div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww03.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Омертвение <br>тканей и смерть</div>
                        <div class=waswird-text>Закупорка сосудов холестерином, инфаркт, инсульт, слабоумие, паралич, смерть.</div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=waswird-footer>
                        <p><span class=bold>Если Вы </span>или Ваши близкие <span class=bold>находитесь в группе риска </span>по уровню холестерина, то у <br class="hidden-xs hidden-sm">вас есть не так много времени, чтобы <span class=bold>успеть предотвратить </span>инсульт, <span class=bold>инфаркт </span>и их <br class="hidden-xs hidden-sm"><span class=bold>ужасные последствия. </span></p>
                        <p><span class=bold>Эффективное и недорогое средство </span>для этого уже есть!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=doc>
        <div class=container>
            <div class=doc-wrapp>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Мнение эксперта: Холемин® эффективнее <br class="hidden-xs hidden-sm">всего избавляет от холестериновой угрозы</h2>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=text>
                            <p><span class=bold>Холемин® </span>является легендарной разработкой <span class=bold>советской медицины</span>, опередившей время. Я рад, что в наши дни <span class=bold>Холемин® </span>был <span class=bold>воссоздан</span>, и теперь <span class=bold>каждый </span>может избавиться <span class=bold>от смертельных последствий </span>повышенного холестерина.</p>
                            <p>Из своей <span class=bold>личной практики </span>могу сказать, что эффективность <span class=bold>Холемина® </span>превосходит на порядок аналогичные средства.</p>
                            <p>Однозначно <span class=bold>рекомендую к применению.</span></p>
                            <p class="bold autor">Д.М. Антонов</p>
                            <p class=doc-subscr>Врач-натуропат, к.м.н., почетный член <br class="hidden-xs hidden-sm">Международной Академии натуропатии <br class="hidden-xs hidden-sm">и естественных методов оздоровления, <br class="hidden-xs hidden-sm">старший научный сотрудник НИИ Нативной <br class="hidden-xs hidden-sm">медицины АН СССР в 1978-1992 г.</p><img src="{{ asset('/') }}natureteaFiles/arterotea/stamp.png" alt="Arterotea" class=docstamp   >
                        </div>
                    </div>
                </div><img src="{{ asset('/') }}natureteaFiles/arterotea/doc.png" alt="Arterotea" class=imgdoc   >
            </div>
        </div>
    </section>
    <section class=why>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Почему уникальную разработку времен СССР <br class="hidden-xs hidden-sm">скрывали от общественности?</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class=why-list>
                        <li>
                            <div class="digit bold">1</div><span class=bold>Холемин® был разработан советскими учеными в конце 1980-х </span>как высокоэффективное и доступное каждому человеку средство от холестерина.
                        </li>
                        <li>
                            <div class="digit bold">2</div><span class=bold>С развалом СССР западные фармкорпорации добились прекращения разработки Холемина®. </span>Его уникальная формула бесследно исчезла.
                        </li>
                        <li>
                            <div class="digit bold">3</div><span class=bold>Спустя 20 лет группа анонимных хакеров взломала </span>компьютер американской Секретной службы и случайно обнаружила <span class=bold>украденную формулу.</span>
                        </li>
                        <li>
                            <div class="digit bold">4</div><span class=bold>Уникальная разработка советских ученых Холемин® получил новую жизнь. </span>Теперь любой человек может быстро и недорого избавиться от холестерина, не переплачивая аптекам.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=sform>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Гипертония, атеросклероз и риск инфаркта уйдут, <br class="hidden-xs hidden-sm">если вовремя принять Холемин®!</h2>
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            <div class="form-timer timer hidden-xs">
                                <div class=timer-header>До конца акции осталось:</div>
                                <div class=clock-form03></div>
                            </div>
                            <div class="sale-terr or"> <span class=big>**Внимание! <br></span>Акция действует только на <br class="hidden-xs hidden-sm">территории России и стран СНГ
                                <p class=kma-d-test>Быстрая доставка в г. Москва.</p></div>
                            <div class=clear></div>
                            <div class=sale-price>
                                <div class="price old">
                                    <div class=descr>Старая цена:</div>
                                    <div class=digit> <span class=big><span class=price_land_s4>798</span> </span><span class=price_land_curr>L</span></div>
                                </div>
                                <div class="price new or">
                                    <div class=descr>Новая цена:</div>
                                    <div class=digit><span class="big bold"><span class=price_land_s1>67</span> </span><span class=price_land_curr>L</span><span class="big bold">*</span></div>
                                </div>
                            </div>
                            <div class=sale-input>
                                <div class=input-block>
                                    <label for=n03>Введите Ваше имя</label>
                                    <input id=n03 name=name type=text required placeholder="Валерий">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p03>Введите Ваш телефон</label>
                                    <input id=p03 name=phone type=tel required placeholder="+7 (916) 123-45-67">
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=attention-block>
                                    <div class="attention-descr or"><span class=top>Внимание! <br></span>Акционное предложение <br>
                                        ограничено. Осталось <br>
                                        товаров со скидкой:
                                    </div>
                                    <div class=attention-rest><span class="lastpack big bold">00 </span><br> штук</div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn ttu bold">Заказать Холемин®</button>
                                    <div class=sale-total>Уже купили сегодня: <span class=or><span class="big bold count-people">000 </span>&nbsp;человек</span></div>
                                    <div style="color: #000; font-size: 14px; text-align: center;">*при заказе курса</div>
                                </div>
                                <div class=clear></div>
                            </div>
                        </form>
                        <div class=security-data>
                            <div class=security-descr>Ваши данные под защитой</div>
                            <div class="security-icon item01"></div>
                            <div class="security-icon item02"></div>
                            <div class="security-icon item03"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=why-select>
        <div class="container why-select-wrap"><img src="{{ asset('/') }}natureteaFiles/arterotea/pack.png" alt="Arterotea" class="pack hidden-xs hidden-sm"   >
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Почему уже свыше <nobr>1 350 000</nobr> человек выбрали Холемин®?</h2>
                </div>
            </div>
            <div class="row first-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item left">
                        <div class="why-select-item-img item01"></div>
                        <div class="why-select-item-title bold">100% натуральный</div>
                        <div class=why-select-item-text> <span class=bold>Сильный </span>природный состав из <span class=bold>дикорастущих трав</span>, собранных в <span class=bold>экологически чистых </span>районах <span class=bold>мира</span>. Без <span class=bold>ГМО</span>, консервантов и красителей.</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item rigth">
                        <div class="why-select-item-img item02"></div>
                        <div class="why-select-item-title bold">Разработан учеными СССР</div>
                        <div class=why-select-item-text>
                            <span class=bold>Самая развитая в мире науки</span>, опередившая время. Многие “инновационные технологии <span class=bold>21 века</span>” были разработаны еще <span class=bold>в СССР.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item left">
                        <div class="why-select-item-img item03"></div>
                        <div class="why-select-item-title bold">Не токсичен</div>
                        <div class=why-select-item-text>Абсолютно <span class=bold>безвреден для здоровья </span>в отличие от <span class=bold>токсичных </span>медикаментов. Не имеет <span class=bold>противопоказаний</span>. Не требуется <span class=bold>рецепт </span>врача.</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item rigth">
                        <div class="why-select-item-img item04"></div>
                        <div class="why-select-item-title bold">Не нужна диета</div>
                        <div class=why-select-item-text>
                            Не требуется жесткой “безхолестериновой” <span class=bold>диеты </span>или каких-либо ограничений <span class=bold>привычного образа жизни.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row thrid-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="why-select-item center">
                        <div class="why-select-item-img item05"></div>
                        <div class="why-select-item-title bold">Надежный результат</div>
                        <div class=why-select-item-text><span class=bold>Холемин® </span>не только <span class=bold>очищает сосуды</span>, но и создает условия, <span class=bold>препятствующие </span>повышению и <span class=bold>отложению холестерина </span>в будущем.</div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="why-select-footer bold">1 350 000 человек не могут ошибаться – Холемин® действительно работает!</div>
                </div>
            </div>
        </div>
    </section>
    <section class=clinical-test>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Клинические испытания: Холемин® эффективнее <br class="hidden-xs hidden-sm">других средств от холестерина</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=clin-test-result><img src="{{ asset('/') }}natureteaFiles/arterotea/clinical-test.png" alt="Arterotea" class="hidden-xs hidden-sm"   ><img src="{{ asset('/') }}natureteaFiles/arterotea/clinical-test-sm01.png" alt="Arterotea" class="hidden-md hidden-lg"   ><img src="{{ asset('/') }}natureteaFiles/arterotea/clinical-test-sm02.png" alt="Arterotea" class="hidden-md hidden-lg"   ></div>
                    <div class=clin-test-subscr>
                        <div class=clin-subscr-descr>Исследование средства Холемин® проведено на базе НИИ Инновационных медицинских разработок в 2016 году на 1850 добровольцах. Статистически значимая погрешность не более 0,3%</div>
                        <div class=clin-subscr-stamp><img src="{{ asset('/') }}natureteaFiles/arterotea/clinical-stamp.png" alt="Arterotea"></div>
                        <div class=clear></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=formula id=sost>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Формула Холемина® объединила разработки советских <br class="hidden-xs hidden-sm hidden-md">ученых и биотехнологии XXI века</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item left">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Артишок <br>Cynara cardunculus</div>
                            <div class=f-item-body>Нормализует триглицериды, приводящие к атеросклерозу, слабоумию и потере памяти.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f01.png" alt="Arterotea"></div>
                        <div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd01"   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item right">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Диоскорея кавказская <br>Dioscorea caucasica</div>
                            <div class=f-item-body>Снижает уровень холестерина, предотвращает отложение липидов в артериях.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f02.png" alt="Arterotea"></div>
                        <div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd02"   >
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item left">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Софора японская <br>Callisia fragrans</div>
                            <div class=f-item-body>Восстанавливает эластичность кровеносных сосудов, предотвращает инсульт и атеросклероз</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f03.png" alt="Arterotea"></div>
                        <div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd03"   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item right">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Масло Амаранта <br>Amaranthus cruentus</div>
                            <div class=f-item-body>Популярное на Западе, но почти неизвестное в России средство регуляции холестерина и давления.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f04.png" alt="Arterotea"></div>
                        <div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd04"   >
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item left">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Чертополох святой <br>Carduus nutans</div>
                            <div class=f-item-body>Удаляет из организма лишний холестерин и нормализует его уровень</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f05.png" alt="Arterotea"></div>
                        <div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd05"   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=n100><img src="{{ asset('/') }}natureteaFiles/arterotea/100natur.png" alt="Arterotea"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=action>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Холемин® побеждает холестерин, потому что <br class="hidden-xs hidden-sm">имеет 3 действия</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">1. Блокирует</div>
                        <div class=action-text>отложение холестерина на стенках сосудов</div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">2. Очищает</div>
                        <div class=action-text>и выводит из организма излишки холестерина</div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">3. Восстанавливает</div>
                        <div class=action-text>эластичность и здоровье сосудов</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=easy>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Легко и удобно принимать</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e01.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Ежедневно</div>
                        <div class=easy-text>По <span class=bold>10-15 капель </span>2-3 раза в день за 30 минут <span class=bold>до еды.</span></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e02.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Курсом</div>
                        <div class=easy-text>Для <span class=bold>закрепления результата </span>применять <span class=bold>курсом.</span></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd   >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e03.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Без ограничений</div>
                        <div class=easy-text>Нет ограничений по диете и <span class=bold>образу жизни</span>. Делайте всё <span class=bold>как всегда.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sform sform2">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Гипертония, атеросклероз и риск инфаркта уйдут, <br class="hidden-xs hidden-sm">если вовремя принять Холемин®!</h2>
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            <div class="form-timer timer hidden-xs">
                                <div class=timer-header>До конца акции осталось:</div>
                                <div class=clock-form04></div>
                            </div>
                            <div class="sale-terr or"> <span class=big>**Внимание! <br></span>Акция действует только на <br class="hidden-xs hidden-sm">территории России и стран СНГ
                                <p class=kma-d-test>Быстрая доставка в г. Москва.</p></div>
                            <div class=clear></div>
                            <div class=sale-price>
                                <div class="price old">
                                    <div class=descr>Старая цена:</div>
                                    <div class=digit> <span class=big><span class=price_land_s4>798</span> </span><span class=price_land_curr>L</span></div>
                                </div>
                                <div class="price new or">
                                    <div class=descr>Новая цена:</div>
                                    <div class=digit><span class="big bold"><span class=price_land_s1>67</span> </span><span class=price_land_curr>L</span><span class="big bold">*</span></div>
                                </div>
                            </div>
                            <div class=sale-input>
                                <div class=input-block>
                                    <label for=n04>Введите Ваше имя</label>
                                    <input id=n04 name=name type=text required placeholder="Валерий">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p04>Введите Ваш телефон</label>
                                    <input id=p04 name=phone type=tel required placeholder="+7 (916) 123-45-67">
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=attention-block>
                                    <div class="attention-descr or"><span class=top>Внимание! <br></span>Акционное предложение <br>
                                        ограничено. Осталось <br>
                                        товаров со скидкой:
                                    </div>
                                    <div class=attention-rest><span class="lastpack big bold">00 </span><br> штук</div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn ttu bold">Заказать Холемин®</button>
                                    <div class=sale-total>Уже купили сегодня: <span class=or><span class="big bold count-people">000 </span>&nbsp;человек</span></div>
                                    <div style="color: #000; font-size: 14px; text-align: center;">*при заказе курса</div>
                                </div>
                                <div class=clear></div>
                            </div>
                        </form>
                        <div class=security-data>
                            <div class=security-descr>Ваши данные под защитой</div>
                            <div class="security-icon item01"></div>
                            <div class="security-icon item02"></div>
                            <div class="security-icon item03"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=faq>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Часто задаваемые вопросы о средстве Холемин®</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class=faq-list>
                        <li>
                            <div class="faq-q bold"><span>1.Мне 36 лет. Правда ли, что я могу не знать, что у меня повышенный холестерин?</span></div>
                            <div class=faq-a>Да. Но Вы можете догадаться об этом по ряду <span class=bold>косвенных симптомов </span>- таких, как <span class=bold>снижение работоспособности</span>, повышенное давление, <span class=bold>лишний вес</span>, пятна на теле, <span class=bold>боль в области сердца</span>, головокружения и т.д. Самое <span class=bold>лучшее и экономичное решение </span>- пройти курс средства <span class=bold>Холемин®</span>, так как почти <span class=bold>у 90% </span>людей, независимо от возраста, повышен <span class=bold>холестерин</span>, и скорее всего, Вы и <span class=bold>Ваши близкие </span>тоже в их числе.</div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>2.Чем отличается Холемин от других средств от холестерина - например, статинов?</span></div>
                            <div class=faq-a>
                                Применение <span class=bold>статинов </span>может стать причиной <span class=bold>огромного </span>количества <span class=bold>проблем </span>со здоровьем - <span class=bold>нарушения </span>работы <span class=bold>надпочечников</span>, печени, развития <span class=bold>катаракты</span>. В отличие от синтетических средств, <span class=bold>Холемин® безвреден для здоровья</span>. Он регулирует <span class=bold>уровень холестерина </span>не искусственно, а <span class=bold>естественным путем </span>- помогая организму делать это <span class=bold>самостоятельно.</span>
                            </div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>3.Почему Холемин нужно применять курсом?</span></div>
                            <div class=faq-a> <span class=bold>Холемин® </span>рекомендуется <span class=bold>применять курсом</span>, без перерывов, для накопления необходимой <span class=bold>концентрации действующих </span>веществ в крови, а также <span class=bold>закрепления </span>положительного <span class=bold>результата.</span></div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>4.Правда ли, что Холемин помогает от атеросклероза и гипертонии?</span></div>
                            <div class=faq-a>Действительно, <span class=bold>Холемин® </span>имеет перечисленные <span class=bold>эффекты </span>за счет того, что <span class=bold>очищает просветы кровеносные сосудов </span>от холестериновых бляшек. Это предотвращает <span class=bold>развитие атеросклероза</span>, а также <span class=bold>нормализует давление </span>и <span class=bold>избавляет от гипертонии.</span></div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>5.Почему такая низкая цена</span></div>
                            <div class=faq-a>Действительно, <span class=bold>стоимость </span>средства <span class=bold>Холемин® намного ниже</span>, чем стоимость проведения <span class=bold>анализов</span>, приема у <span class=bold>врача </span>и покупки <span class=bold>небезопасных для здоровья </span>медикаментов. Но столь <span class=bold>доступная цена </span>установлена только для продаж средства <span class=bold>в России и СНГ </span>в рамках Национальной программы по оздоровлению населения, без участия <span class=bold>аптечных сетей</span>, так как это <span class=bold>социальный</span>, а не коммерческий <span class=bold>проект.</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=reviews id=rev>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Они уже избавились от угрозы холестерина всего за 1 курс</h2>
                </div>
            </div>
        </div>
        <div class=video-reviews>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class=video-reviews-item>
                            <div data-type=youtube data-video-id=9GbpEqh-NM8></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class=video-reviews-item>
                            <div data-type=youtube data-video-id=M71Dwc7yxXk></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class=video-reviews-item>
                            <div data-type=youtube data-video-id=rFbQerCL54Q></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=text-reviews>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-reviews-items owl-carousel">
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr01.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Анна, 36 лет, <span class=kma-e-test>Москва</span><span class=kma-d-test>Москва</span></div>
                                    <div class=text-reviews-body>У меня обнаружили высокий холестерин, когда кардиолог поставил диагноз стенокардия. Сердце часто болело, бывал пульс под 120. Самое интересное, что питалась я вроде бы правильно... Откуда взялся холестерин непонятно. Мне помог натуральный препарат Холемин. Отзывы на него прочитала на форуме - и сразу решила взять. Довольно быстро привела в норму сосуды. Проверилась в поликлинике - бляшек нет, холестерин сейчас в норме, даже диету не соблюдаю.</div>
                                </div>
                            </div>
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr02.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Татьяна, 44 года, Москва</div>
                                    <div class=text-reviews-body>Врач прописал прием статинов для понижения холестерина. Но я уже знала, что это опасная вещь. Дает осложнение на зрение. У меня одна знакомая после них потом операцию делала. Спасибо друзьям, подсказали средство Холемин. Плюс его в том, что оно на натуральной основе, без каких-либо противопоказаний. Снижала им холестерин около 1 месяца. Анализы хорошие, самочувствие тоже. Сейчас вообще не жалуюсь на здоровье.</div>
                                </div>
                            </div>
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr03.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Иван Сергеевич, 52 года, Новосибирск</div>
                                    <div class=text-reviews-body>Когда у меня обнаружился в прошлом году повышенный холестерин, терапевт предложил мне диету и статины. Но диета почти не влияет на уровень холестерина. А на статины народ так “подсаживается”, что потом не слезешь с них. Спасибо дочери, купила мне Холемин. Через пару недель холестерин значительно снизился, а сейчас уже давно в норме. Жена тоже принимала Холемин. Мы довольны результатом и рекомендуем его всем, кто не хочет связываться с “химией”.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=audio-reviews>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Опрос удовлетворенности клиентов</h2>
                        <div class=subh>Послушайте несколько отзывов за ноябрь 2016 г.</div>
                    </div>
                </div>
                <div class=row>
                    {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">--}}
                        {{--<div class=audio-reviews-items>--}}
                            {{--<div class=audio-reviews-item>--}}
                                {{--<div class=audio-reviews-title>Евгения Михайловна</div>--}}
                                {{--<audio controls>--}}
                                    {{--<source src="media/audio01.mp3" type="audio/mp3">--}}
                                {{--</audio>--}}
                            {{--</div>--}}
                            {{--<div class=audio-reviews-item>--}}
                                {{--<div class=audio-reviews-title>Андрей Владимирович</div>--}}
                                {{--<audio controls>--}}
                                    {{--<source src="media/audio02.mp3" type="audio/mp3">--}}
                                {{--</audio>--}}
                            {{--</div>--}}
                            {{--<div class=audio-reviews-item>--}}
                                {{--<div class=audio-reviews-title>Елена Николаевна</div>--}}
                                {{--<audio controls>--}}
                                    {{--<source src="media/audio03.mp3" type="audio/mp3">--}}
                                {{--</audio>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class=diag-img><img src="{{ asset('/') }}natureteaFiles/arterotea/diag.png" alt="Arterotea"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=future>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Представьте, насколько лучше жить, <br class="hidden-xs hidden-sm">когда холестерин в норме!</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class=futule-list>
                        <li>Больше <span class=bold>не нужно опасаться</span>, что каждый день повышенный холестерин <br class="hidden-xs hidden-sm">медленно <span class=bold>уничтожает кровеносные сосуды </span>и <span class=bold>сердце.</span></li>
                        <li><span class=bold>Продолжительность жизни </span>с нормальным уровнем холестерина <br class="hidden-xs hidden-sm">по статистике <span class=bold>больше на 15-20 лет.</span></li>
                        <li>В зрелые годы Вы будете вести <span class=bold>активный энергичный образ жизни</span>, <br class="hidden-xs hidden-sm">а не лежать <span class=bold>под капельницей </span>или передвигаться с <span class=bold>палочкой.</span></li>
                        <li>Вы и Ваши близкие <span class=bold>сохраните </span>до глубокой старости <span class=bold>ясный ум и память</span>, <br class="hidden-xs hidden-sm">избавившись от тяжелой ноши <span class=bold>старческого слабоумия.</span></li>
                        <li> <span class=bold>Вы чувствуете </span>себя <span class=bold>молодым и полным сил</span>, ведь холестериновый мусор <span class=bold>выброшен <br class="hidden-xs hidden-sm">из организма </span>- Ваши сосуды снова <span class=bold>здоровые и эластичные</span>, а <span class=bold>давление в норме!</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=team>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Официальный интернет-магазин <br class="hidden-xs hidden-sm">Холемин® — работаем для Вас!</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=team-item>
                        <div class=team-img><img src="{{ asset('/') }}natureteaFiles/arterotea/t01.png" alt="Arterotea"></div>
                        <div class=team-header>
                            <div class=bold>Андрей Полукаров</div>
                            <div>Директор <br>по качеству</div>
                        </div>
                        <div class="team-descr italic">“Мы не экономим на качестве, поэтому для производства используются лучшие ингредиенты и технологии”</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=team-item>
                        <div class=team-img><img src="{{ asset('/') }}natureteaFiles/arterotea/t02.png" alt="Arterotea"></div>
                        <div class=team-header>
                            <div class=bold>Анна Семенова</div>
                            <div>Директор <br>колл-центра</div>
                        </div>
                        <div class="team-descr italic">“Оставьте свой номер, и наши специалисты подробно расскажут Вам, как получить заказ и правильно использовать средство”</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=team-item>
                        <div class=team-img><img src="{{ asset('/') }}natureteaFiles/arterotea/t03.png" alt="Arterotea"></div>
                        <div class=team-header>
                            <div class=bold>Даниил Типаков</div>
                            <div>Руководитель службы <br>доставки</div>
                        </div>
                        <div class="team-descr italic">“Ваш заказ будет доставлен в сжатые сроки, чтобы Вы могли как можно скорее начать использовать Холемин®”</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=fact>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Факты о нас</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=fact-item>
                        <div class="fact-title bold">12 лет</div>
                        <div class=fact-text>на рынке средств для здоровья и долголетия</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=fact-item>
                        <div class="fact-title bold">85%</div>
                        <div class=fact-text>клиентов рекомендуют нас своим друзьям</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=fact-item>
                        <div class="fact-title bold">4 700 000+</div>
                        <div class=fact-text>человек вернули здоровье с нашей помощью</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=into>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>9 000 000 долларов вложено в создание средства Холемин®</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=into-item>
                        <div class="into-title bold">4 года</div>
                        <div class=into-text><span class=bold>Формула дорабатывалась </span>на протяжении 4 лет в <span class=bold>независимых </span>исследовательских <span class=bold>лабораториях.</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=into-item>
                        <div class="into-title bold">90%</div>
                        <div class=into-text><span class=bold>Более 90% </span>ингредиентов добываются в <span class=bold>ограниченных </span>количествах в <span class=bold>труднодоступных </span>районах <span class=bold>мира.</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=into-item>
                        <div class="into-title bold">Качество ЕС</div>
                        <div class=into-text><span class=bold>Для производства </span>средства закуплена <span class=bold>линия</span>, отвечающая <span class=bold>международным стандартам </span>в области <span class=bold>качества.</span></div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="into-footer bold">На время проведения промо-акции в России и СНГ установлена специальная <br class="hidden-xs hidden-sm">цена на Холемин® <span class=price_land_s1>67</span> <span class=price_land_curr>L</span> вместо <span class=into-new><span class=price_land_s4>798</span> <span class=price_land_curr>L</span>*</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class=how id=dost>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Как оформить и получить заказ</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img first"></div>
                        <div class="how-title bold">Заявка</div>
                        <div class=how-text>Отправляете заявку и с Вами связывается специалист.</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img second"></div>
                        <div class="how-title bold">Доставка</div>
                        <div class=how-text>Заказ доставляется в анонимной упаковке без упоминания средства.</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img thrid"></div>
                        <div class="how-title bold">Оплата</div>
                        <div class=how-text>Вы оплачиваете свой заказ на почте или курьеру.</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img fourth"></div>
                        <div class="how-title bold">Применение</div>
                        <div class=how-text>Применяете и наслаждаетесь легкостью и счастьем жизни без холестерина.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=map>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Мы доставим Ваш заказ в любую <br class="hidden-xs hidden-sm">точку России, СНГ и Европы!</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=map-block><img src="{{ asset('/') }}natureteaFiles/arterotea/map.png" alt="Arterotea"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=s-text01>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Если тянуть время, холестерин искалечит <br class="hidden-xs hidden-sm">сосуды и приведет к смерти</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=text>
                        <p>
                            Если не начать <span class=bold>снижать холестерин прямо сейчас</span>, то скоро <span class=bold>сосуды </span>будут необратимо <span class=bold>изношены и искалечены</span>, а человека <span class=bold>неизбежно </span>ждет <span class=bold>атеросклероз</span>, инфаркт или <span class=bold>кровоизлияние в мозг!</span>
                        </p>
                        <p>Стоит ли дожидаться <span class=bold>тяжелых последствий </span>высокого холестерина, если <span class=bold>эффективное и доступное </span>средство лежит прямо <span class=bold>перед Вами</span>? Просто <span class=bold>возьмите Холемин® </span>и приведите <span class=bold>холестерин</span>, сосуды и <span class=bold>давление </span>в норму <span class=bold>за 1 курс!</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=s-end>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Холемин® — чистые здоровые сосуды <br class="hidden-xs hidden-sm">без холестерина за 1 курс</h2>
                    <div class=subh>Средство Холемин снизит холестерин без химии и переплат</div>
                </div>
            </div>
        </div>
        <div class="container first-screen">
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=bulet-block>
                        <ul class=bulet-list>
                            <li> <span class=bold>Нормализует артериальное давление </span><br class="hidden-xs hidden-sm">за счет цинаринов <span class=bold>Артишока</span></li>
                            <li>
                                Софора Японская <span class=bold>устраняет последствия <br class="hidden-xs hidden-sm">атеросклероза и риск инфаркта</span>
                            </li>
                            <li> <span class=bold>Настраивает саморегуляцию </span>уровня <span class=bold>холестерина </span>благодаря <span class=bold>маслу Амаранта</span></li>
                        </ul>
                    </div>
                </div><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-bg.png" alt="Arterotea" class="pack hidden-xs hidden-sm">
                <img src="{{ asset('/') }}natureteaFiles/arterotea/pack-sm.png" alt="Arterotea" class="pack hidden-md hidden-lg">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            <div class="form-timer timer hidden-lg">
                                <div class=timer-header>До конца акции осталось:</div>
                                <div class=clock-form02></div>
                            </div>
                            <div class=sale-circs>
                                <div class="sale-terr or hidden-md">**Внимание! Акция действует только на <br class="hidden-xs hidden-sm">территории России и стран СНГ</div>
                                <div class=sale-price>
                                    <div class="price old">
                                        <div class=descr>Старая цена:</div>
                                        <div class=digit> <span class=big><span class=price_land_s4>798</span> </span><span class=price_land_curr>L</span></div>
                                    </div>
                                    <div class="price new or">
                                        <div class=descr>Новая цена:</div>
                                        <div class=digit><span class="big bold"><span class=price_land_s1>67</span> </span><span class=price_land_curr>L</span><span class="big bold">*</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-input clearfix">
                                <div class=input-block>
                                    <label for=n02>Введите Ваше имя</label>
                                    <input id=n02 name=name type=text required placeholder="Валерий">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p02>Введите Ваш телефон</label>
                                    <input id=p02 name=phone type=tel required placeholder="+7 (916) 123-45-67">
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <p class="kma-d-test attention-descr or">Быстрая доставка в г. Москва.</p>
                                <div class=attention-block>
                                    <div class="attention-descr or">
                                        Внимание! <br>
                                        Осталось товаров <br class="hidden-sm hidden-md hidden-lg">со скидкой:
                                    </div>
                                    <div class=attention-rest><span class="lastpack big bold">00 </span>&nbsp;штук</div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn bold">ЗАКАЗАТЬ Холемин®</button>
                                </div>
                                <div class=sale-total>Уже купили сегодня: <span class=or><span class="big bold count-people">000 </span>&nbsp;человек</span></div>
                                <div style="color: #000; font-size: 14px; text-align: center;">*при заказе курса</div>
                            </div>
                        </form>
                        <div class=security-data>
                            <div class=security-descr>Ваши данные под защитой</div>
                            <div class="security-icon item01"></div>
                            <div class="security-icon item02"></div>
                            <div class="security-icon item03"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=medal-block>
                        <div class="medal item1"></div>
                        <div class="medal item2"></div>
                        <div class="medal item3"></div>
                        <div class="medal item4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class=container style="text-align: center;">
    </div>
</footer>

{{--<div class=show-message></div>--}}
{{--<script src="js/libs.min.js.pagespeed.jm.yuVah4XOQX.js"></script>--}}
{{--<script>eval(mod_pagespeed_D_Ik2a9hQw);</script>--}}
{{--<script>eval(mod_pagespeed_JlTfuPwLiX);</script>--}}
{{--<script>eval(mod_pagespeed_q9CvX$$TOU);</script>--}}
{{--<script>eval(mod_pagespeed_87LUJ_Fcur);</script>--}}
{{--<style>.mfp-wrap{z-index:200043}.mfp-bg{z-index:200042}.show-message__item,.show-message__item-first{z-index:10!important}</style>--}}

{{--<link href="shared_files/css/A.custom-styles2.min.css%2cq6.pagespeed.cf.NytKlidF_7.css" type="text/css" rel=stylesheet data-pagespeed-lsc-url="https://holemin.com/shared_files/css/custom-styles2.min.css?6"/>--}}

{{--<script src="shared_files/js/sisyphus.min.js%2cqv%3d2.pagespeed.jm.wDJKflVUDC.js" defer></script>--}}
{{--<script src="shared_files/js/form.custom.minbea6.js?v=7" defer></script>--}}

</body>
</html>
