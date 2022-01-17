<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8 />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv=X-UA-Compatible content="IE=edge"/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="{{ asset('/') }}shared_files/bootstrap.css"/>
    <link rel=stylesheet href="{{ asset('/') }}flexonikFiles/slimfashion/main.css"/>
    <style>@font-face{font-family:"OpenSansRegular";src:url({{asset('/')}}fonts/OpenSans.eot);src:url({{asset('/')}}fonts/OpenSansd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans.woff) format("woff"),url({{asset('/')}}fonts/OpenSans.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"OpenSansBold";src:url({{asset('/')}}fonts/OpenSans-Bold.eot);src:url({{asset('/')}}fonts/OpenSans-Boldd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans-Bold.woff) format("woff"),url({{asset('/')}}fonts/OpenSans-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"OpenSansItalic";src:url({{asset('/')}}fonts/OpenSans-Italic.eot);src:url({{asset('/')}}fonts/OpenSans-Italicd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans-Italic.woff) format("woff"),url({{asset('/')}}fonts/OpenSans-Italic.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"OpenSansBoldItalic";src:url({{asset('/')}}fonts/OpenSansBoldItalic.eot);src:url({{asset('/')}}fonts/OpenSansBoldItalicd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSansBoldItalic.woff) format("woff"),url({{asset('/')}}fonts/OpenSansBoldItalic.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"RobotoCondensedRegular";src:url({{asset('/')}}fonts/RobotoCondensedRegular.eot);src:url({{asset('/')}}fonts/RobotoCondensedRegulard41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/RobotoCondensedRegular.woff) format("woff"),url({{asset('/')}}fonts/RobotoCondensedRegular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"RobotoCondensedBold";src:url({{asset('/')}}fonts/RobotoCondensedBold.eot);src:url({{asset('/')}}fonts/RobotoCondensedBoldd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/RobotoCondensedBold.woff) format("woff"),url({{asset('/')}}fonts/RobotoCondensedBold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:"CenturyGothicBold";src:url({{asset('/')}}fonts/CenturyGothicBold.eot);src:url({{asset('/')}}fonts/CenturyGothicBoldd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/CenturyGothicBold.woff) format("woff"),url({{asset('/')}}fonts/CenturyGothicBold.ttf) format("truetype");font-style:normal;font-weight:400}</style>
</head>
<body>
<section class="header">
    <div class=container>
        <div class=row>
            <div class=col-md-8>
                <h1>утягивающее белье нового поколения</h1>
                <div class=logo><img src="{{ asset('/') }}flexonikFiles/slimfashion/logo.png" alt=""></div>
                <div class=wrap_img>
                    <div class=bg_info>
                        <div class=center>
                            <div class=number>- 3 </div>
                            <div class=up>размера</div>
                            за 1 минуту
                        </div>
                    </div>
                    <ul>
                        <li>Никаких складок</li>
                        <li>Высокая грудь</li>
                        <li>Подтянутый плоский живот</li>
                        <li>Линия талии <span>-12 см</span></li>
                        <li>Упругие ягодицы	правильной формы</li>
                    </ul>
                    <div class=bg_img></div>
                </div>
            </div>
            <div class=col-md-4>
                <form action="{{$orderRoute}}" method=post>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="circle firstCircle"></div>
                    <div class="text_wrap firstText">
                        {{--<div class=img_product><img src="{{ asset('/') }}flexonikFiles/slimfashion/product.png" alt=""></div>--}}
                        <div class=stock>
                            <div class=f_top>Pažnja</div>
                            <div class=text>AKCIJA!</div>
                            <div class=old_price>Stara cena <span class=num><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                            <div class=now_price>Nova cena <span class=num><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                        </div>
                        <h3>Unesite podatke</h3>
                        <input type=text name=name class=name placeholder="Ime i prezime" required>
                        <input type=tel name=phone class="input-phone phone" placeholder="Telefon" required>
                        <input type=text name=shipping_address class=name placeholder="Adresa" required>
                        <input type=text name=shipping_city class=name placeholder="Grad" required>
                        <input type=submit class=btn value="Poruči">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class=s_problems>
    <div class=container>
        <div class=row>
            <div class=col-md-12>
                <h2>Ваша фигура нуждается в легкой коррекции?</h2>
                <div class=wrap>
                    <div class="item item1">
                        <span class=left>Грудь значительно потеряла в объемах или обвисла</span>
                    </div>
                    <div class="item item2">
                        Обвисшие ягодицы <br>и бедра портят <br>ваше настроение
                    </div>
                    <div class="item item3">
                        Присутствует <br>лишние жировые <br>отложения
                    </div>
                    <div class="item item4">
                        Зато яркого <br>выражения <br>приобрели <br>ненавистные <br>складки
                    </div>
                    <div class="item item5">
                        Талия потеряла <br>былую выраженность
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=s_result>
    <div class=container>
        <div class=row>
            <div class=col-md-12>
                <h2>идеальная фигура за <span class=color>1 минуту</span> с slim fashion <br>это стало <span class=bg>возможно!</span></h2>
            </div>
        </div>
        <div class=wrap>
            <div class="row item">
                <div class=col-md-5>
                    <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/1-1.jpg" alt=""></div>
                </div>
                <div class=col-md-7>
                    <div class=text>
                        <h3>Комбидресс идеален для <br>следующих проблемных зон:</h3>
                        <ul>
                            <li>Область живота, становится более плоской;</li>
                            <li>Ягодицы/бедра, приобретают подтянутый вид;</li>
                            <li>Складки на спине разглаживаются. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row item">
                <div class="col-md-5 col-md-push-7">
                    <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/2-1.jpg" alt=""></div>
                </div>
                <div class="col-md-7 col-md-pull-5">
                    <div class=text>
                        <h3>Каждодневная носка комбидресса <br>закрепит ваши результаты:</h3>
                        <ul>
                            <li>Жировые отложения потеряют в объемах;</li>
                            <li>Разгладиться «апельсиновая корочка»;</li>
                            <li>Невидимый корсет сформирует правильную осанку;</li>
                            <li>Бюст увеличить на несколько размеров;</li>
                            <li>Кожа станет вновь бархатистой, упругой.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row item">
                <div class=col-md-5>
                    <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/3.jpg" alt=""></div>
                </div>
                <div class=col-md-7>
                    <div class=text>
                        <h3><span class=color>Slim Fashion</span> – ежедневный <br>удобство и красота:</h3>
                        <ul>
                            <li>Дышащие свойства ткани обеспечат свежесть вашей кожи;</li>
                            <li>Особо плотное облегание делает белье невидимым;</li>
                            <li>Носка белья не вызывает раздражений, дискомфортных ощущений;</li>
                            <li>Бесшовный комбидресс возможно носить даже с наиболее обтягивающие платья.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=s_form>
    <div class=container>
        <div class=row>
            <div class=col-md-11>
                {{--<div class=img_product><img src="{{ asset('/') }}flexonikFiles/slimfashion/product.png" alt=""></div>--}}
                <div class=bg_img></div>
                <form action="{{$orderRoute}}" method=post>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class=circle></div>
                    <div class=bg_info>
                        <div class=center>
                            <div class=up>скидка</div>
                            <div class=number>50%</div>
                        </div>
                    </div>
                    <div class=text_wrap>
                        <div class=stock>
                            <div class=f_top>Pažnja</div>
                            <div class=text>AKCIJA!</div>
                            <div class=old_price>Stara cena <span class=num><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                            <div class=now_price>Nova cena <span class=num><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                        </div>
                        <h3>Unesite podatke</h3>
                        <input type=text name=name class=name placeholder="Ime i prezime" required>
                        <input type=tel name=phone class="input-phone phone" placeholder="Telefon" required>
                        <input type=text name=shipping_address class=name placeholder="Adresa" required>
                        <input type=text name=shipping_city class=name placeholder="Grad" required>
                        <input type=submit class=btn value="Poruči">
                        <div class=timer>
                            <div class=label>&nbsp;</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class=s_size>
    <div class=container>
        <div class=row>
            <div class=col-md-12>
                <h2>ИМЕННО ВАШ РАЗМЕР</h2>
                <h3>Достаточно знать объем области бедер, <br>дабы верно выбрать размерную сетку белья. <br>Кстати, мерки необходимо снимать по середине бедра.</h3>
                <div class=wrap>
                    <div class="item item1">
                        <div class=size>medium</div>
                        <div class=label>объем бедер</div>
                        <div class=number>78-92</div>
                    </div>
                    <div class="item item2">
                        <div class=size>large</div>
                        <div class=label>объем бедер</div>
                        <div class=number>83-101</div>
                    </div>
                    <div class="item item3">
                        <div class=size>x large</div>
                        <div class=label>объем бедер</div>
                        <div class=number>89-110</div>
                    </div>
                    <div class="item item4">
                        <div class=size>xx large</div>
                        <div class=label>объем бедер</div>
                        <div class=number>103-124</div>
                    </div>
                    <div class="item item5">
                        <div class=size>xxx large</div>
                        <div class=label>объем бедер</div>
                        <div class=number>120-148</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=s_reviews>
    <div class=container>
        <div class=row>
            <div class=col-md-12>
                <h2><span class=color>МНЕНИЕ</span> НАШИХ ПОКУПАТЕЛЕЙ</h2>
                <div class=carousel>
                    <div class=item>
                        <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/1.jpg" alt=""></div>
                        <h3>Мария</h3>
                        <p>Комбидресс Slim Fashion приобрела специально под сильно облегающее платечко, ну очень хотелось выглядеть стройной и сексуальной в мужа юбилей. О белье узнала из отзывов, прочитанных на форуме. Размер выбрать мне помогли специалиста сайта, получив заказ даже было усомнилась в правильности размера. Но когда надела…. Не поверила своим глазам. Помимо плоского животика, я приобрела невероятно сексуальные бедра и ярко выраженную талию. </p>
                    </div>
                    <div class=item>
                        <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/2.jpg" alt=""></div>
                        <h3>Диана </h3>
                        <p>Наступление весны всегда побуждает меня к активной борьбе за идеальную фигуру. Не могу назвать себя полненькой, но и стройняшкой тоже. Диеты скорым результатом не радуют, да и отказывать полакомиться сладеньким не хочется. Вот и решила отыскать более простой, но действенное средство. Многодневные поиски привели меня к идеальному решению – комбидрессу Slim Fashion.
                            Помимо корректировки фигуры его каждодневное ношение позволило мне значительно уменьшить объемы целлюлита и распрощаться с так ненавистными мне складками в области живота, спины, талии.
                        </p>
                    </div>
                    <div class=item>
                        <div class=img><img src="{{ asset('/') }}flexonikFiles/slimfashion/3-1.jpg" alt=""></div>
                        <h3>Римма </h3>
                        <p>Обладательницей такого утягивающего, бесшовного, удобного комбидресса обязана быть каждая девушка. Белье способно преобразить даже самую стройную фигуру, доведя ее до идеала. Где надо комбидресс скрывает, где нужно – подчеркивает. Помимо лишних сантиметров с помощью Slim Fashion мне удалось откорректировать грудь, формы которой после двух деток далеко не самые лучшие. Сегодня мне вслед оборачивается каждый мужчина, а каждая девушка, видя мои формы даже не догадываться, что в действительности я мать двух «богатырей».</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=s_step>
    <div class=container>
        <h2>ВСЕГО <span class=color>4 ПРОСТЫХ ШАГА</span> <br>ДЛЯ ПРИОБРЕТЕНИЯ SLIM FASHION</h2>
        <div class="row wrap">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item item1">
                    <div class=number>1</div>
                    Вы оставляете <br>заявку на <br>сайте
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item item2">
                    <div class=number>2</div>
                    Менеджер <br>связывается с Вами <br>для подтверждения <br>заказа
                </div>
            </div>
            <div class="clr visible-sm"></div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item item3">
                    <div class=number>3</div>
                    Мы быстро доставляем <br>Вашу посылку по <br>указанному адресу
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item item4">
                    <div class=number>4</div>
                    Вы получаете свой <br>товар и оплачиваете <br>на почте
                </div>
            </div>
        </div>
    </div>
</section>
<section class=s_products>
    <div class=container>
        <div class=row>
            <div class=col-md-8>
                <h2>утягивающее белье</h2>
                <div class=logo><img src="{{ asset('/') }}flexonikFiles/slimfashion/logo.png" alt=""></div>
                <div class=wrap>
                    <a href="#" class=item>
                    </a>
                    <a href="#" class=item>
                    </a>
                    <a href="#" class=item>
                    </a>
                    <a href="#" class=item>
                    </a>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/slimfashion/footertitle.png" class=titleFoterItem5 alt="">
            </div>
            <div class=col-md-4>
                <form action="{{$orderRoute}}" method=post>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class=circle></div>
                    <div class=text_wrap>
                        <div class=stock>
                            <div class=f_top>Pažnja</div>
                            <div class=text>AKCIJA!</div>
                            <div class=old_price>Stara cena <span class=num><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                            <div class=now_price>Nova cena <span class=num><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b></span></div>
                        </div>
                        <h3>Unesite podatke</h3>
                        <input type=text name=name class=name placeholder="Ime i prezime" required>
                        <input type=tel name=phone class="input-phone phone" placeholder="Telefon" required>
                        <input type=text name=shipping_address class=name placeholder="Adresa" required>
                        <input type=text name=shipping_city class=name placeholder="Grad" required>
                        <input type=submit class=btn value="Poruči">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimfashion/scripts.js"></script>
<script>eval(mod_pagespeed_Ig1UINWhi3);</script>
<script>eval(mod_pagespeed_3r5_BeOmyn);</script>
<script>eval(mod_pagespeed_OCyqVs7917);</script>
</body>
</html>