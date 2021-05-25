<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel=icon type="image/png" href="{{ asset('/') }}purplerelaxFiles/pedispin/favicon.png">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/reset.css">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/owl.carousel.min.css">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/styles.css">
    <script src="{{ asset('/') }}purplerelaxFiles/pedispin/jquery.js+previewYouTube.js"></script>
</head>
<body>
@include('components.display_errors')
<section class=offer_section>
    <div class=wrapper>
        <h1 class=main_title>Pedi Spin – японская электрическая пемза</h1>
        <p class=subtitle>Еще никогда уход за кожей ступней не был таким легким!</p>
        <div class=discount>Akcija! <span>40%</span> popusta</div>
        <ul>
            <li>Устраняет мозоли и натоптыши</li>
            <li>Процедура абсолютно безболезненна</li>
            <li>Не требуется предварительное распаривание ног</li>
        </ul>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class=text>Stara cena:</div>
                <div class=value><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></div>
            </div>
            <div class="price_item new">
                <div class=text>Nova cena:</div>
                <div class=value><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></div>
            </div>
        </div>
        <a href="#order_form" class=button>Poruči odmah</a>
    </div>
</section>
<section class=about_section>
    <div class=wrapper>
        <h2>Посмотрите, как легко использовать Pedi&nbsp;Spin!</h2>
        <div class=text_block>
            <p><b>Электрическая пемза для педикюра Pedi Spin – это эффективный ежедневный уход за Вашими ножками в домашних условиях.</b> Пемза содержит встроенную полировальную головку, которая сделана из качественной коррозионной стали, безболезненно и эффективно выполнит чистку Ваших ступней.</p>
            <p>Пемза компактная и работает от батареек, ее насадка с легкостью очищается и не требует особого ухода.</p>
        </div>
        <div class="images_block clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image1.jpg" alt="Pedi Spin">
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image2.jpg" alt="Pedi Spin">
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image3.jpg" alt="Pedi Spin">
        </div>
    </div>
</section>
<section class=problems_section>
    <div class=wrapper>
        <h2>Вы забудете об этих проблемах!</h2>
        <div class=problems_list>
            <div class=problem_item>
                <img alt="Pedi Spin" src="{{ asset('/') }}purplerelaxFiles/pedispin/problems__problem1_image.jpg">
                <h4>Трещины</h4>
            </div>
            <div class=problem_item>
                <img alt="Pedi Spin" src="{{ asset('/') }}purplerelaxFiles/pedispin/problems__problem2_image.jpg">
                <h4>Мозоли</h4>
            </div>
            <div class=problem_item>
                <img alt="Pedi Spin" src="{{ asset('/') }}purplerelaxFiles/pedispin/problems__problem3_image.jpg">
                <h4>Натоптыши</h4>
            </div>
            <div class=problem_item>
                <img alt="Pedi Spin" src="{{ asset('/') }}purplerelaxFiles/pedispin/problems__problem4_image.jpg">
                <h4>Огрубевшая кожа</h4>
            </div>
        </div>
    </div>
</section>
<section class=benefits_section>
    <div class="wrapper clearfix">
        <h2>Pedi Spin – аппарат нового поколения</h2>
        <div class=benefits_list>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/benefits__benefit1_image.jpg" alt="Pedi Spin">
                </div>
                <div class=text_block>
                    <h4>Эффективный</h4>
                    <p>Вращающаяся полировальная головка Pedi Spin удаляет засохшие грубые наросты, мозоли&nbsp;и омертвевшую кожу</p>
                </div>
            </div>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/benefits__benefit2_image.jpg" alt="Pedi Spin">
                </div>
                <div class=text_block>
                    <h4>Аккуратный</h4>
                    <p>Шлифовочные насадки устройства настолько нежны, что не повредят даже воздушный шар</p>
                </div>
            </div>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/benefits__benefit4_image.jpg" alt="Pedi Spin">
                </div>
                <div class=text_block>
                    <h4>Компактный</h4>
                    <p>Pedi Spin не занимает много места, Вы легко можете брать его с собой в отпуск</p>
                </div>
            </div>
        </div>
        <div class=order_block>
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/benefits__image.jpg" alt="Pedi Spin">
            <a href="#order_form" class=button>Poruči odmah</a>
        </div>
    </div>
</section>
<section class=use_steps_section>
    <div class=wrapper>
        <h2>Сделайте свои ступни идеально гладкими с Pedi Spin всего за 3 шага!</h2>
        <div class="steps_list clearfix">
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__step1_image.jpg" alt="Pedi Spin">
                <h4>Шаг 1</h4>
                <p>Используйте основную насадку для удаления основной части огрубевшей кожи, натоптышей, мозолей</p>
            </div>
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__step2_image.jpg" alt="Pedi Spin">
                <h4>Шаг 2</h4>
                <p>Финишной насадкой еще раз пройдите по поверхности всей ступни</p>
            </div>
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__step3_image.jpg" alt="Pedi Spin">
                <h4>Шаг 3</h4>
                <p>Закрепите результат нанесением толстого слоя крема и дождитесь, пока крем полностью впитается</p>
            </div>
        </div>
        <div class="results_block clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__result1_image.jpg" alt="Pedi Spin">
            <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__result2_image.jpg" alt="Pedi Spin">
        </div>
    </div>
</section>
<section class=comparison_section>
    <div class=wrapper>
        <h2>Pedi Spin – это наилучший способ ухода за кожей ступней</h2>
        <p class=description>В отличие от дорогостоящих и сложных процедур аппаратного педикюра в косметических клиниках, <b>Pedi Spin недорогой и абсолютно простой в использовании.</b> А в отличие от домашних процедур, Pedi Spin гораздо удобнее, с ним <b>процесс удаления огрубевшей кожи занимает до 5 раз меньше времени.</b></p>
        <div class="products_list owl-carousel">
            <div class="product_item first">
                <h4>Электрическая пемза<br>“Pedi Spin”</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/comparison__product1_image.jpg" alt="Pedi Spin">
                </div>
                <ul>
                    <li class=yes>Эффективность</li>
                    <li class=yes>Закрепление результата</li>
                    <li class=yes>Экономия времени</li>
                    <li class=yes>Легкость в использовании</li>
                </ul>
            </div>
            <div class=product_item>
                <h4>Обычные<br>“терки для пяток”</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/comparison__product2_image.jpg" alt="Pedi Spin">
                </div>
                <ul>
                    <li class=no>Эффективность</li>
                    <li class=no>Закрепление результата</li>
                    <li class=no>Экономия времени</li>
                    <li class=no>Легкость в использовании</li>
                </ul>
            </div>
            <div class=product_item>
                <h4>Курс аппаратного педикюра в&nbsp;клинике</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/comparison__product3_image.jpg" alt="Pedi Spin">
                </div>
                <ul>
                    <li class=yes>Эффективность</li>
                    <li class=yes>Закрепление результата</li>
                    <li class=no>Экономия времени</li>
                    <li class=no>Легкость в использовании</li>
                </ul>
            </div>
        </div>
        <a href="#order_form" class=button>Poruči odmah</a>
    </div>
</section>
<section class=opinion_section>
    <div class="wrapper clearfix">
        <h2>Мнение профессионального косметолога</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/pedispin/opinion__photo.jpg" alt="Pedi Spin">
        <div class=text_block>
            <p>Проблемы с кожей на пятке, стопе и под пальцами в последнее время появляются во всё более молодом возрасте. Причинами этого служат неудобная обувь на высоком каблуке, излишний вес и ряд других факторов.</p>
            <p><b>Своим пациентам я уже давно советую Pedi Spin. Уникальность данного аппарата заключается в том, что эффективное удаление омертвевших клеток осуществляется без распаривания кожи, притом абсолютно безболезненно и с сохранением эффекта от процедуры на чрезвычайно долгое время.</b></p>
            <p>Pedi Spin способен справиться даже с натоптышами со стержнем, для борьбы с которыми единственными эффективными средствами являются: лазерное удаление, заморозка и высверливание.</p>
            <div class=author_info>
                <div class=name>Янышева Л. А.</div>
                <div class=text><span>Практикующий врач-косметолог,</span> более 17 лет косметологической практики</div>
            </div>
        </div>
    </div>
</section>
<section class=reviews_section>
    <div class=wrapper>
        <h2>Отзывы довольных покупателей</h2>
        <p class=description>Мы получаем сотни благодарных отзывов ежедневно. Надеемся, что Вы останетесь довольны заказом и вернетесь к нам снова!</p>
        <div class="reviews_list owl-carousel">
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/reviews__review1_photo.jpg" alt="Pedi Spin">
                <div class=author_info>Виктория, 38 лет</div>
                <p>Идеальный выбор для тех у кого нет свободного времени. Процедура по удалению огрубевшей кожи проводится на сухой коже. Перед использованием не нужно распаривать ноги. Просто достал, включил и наслаждаешься эффектом.</p>
            </div>
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/reviews__review2_photo.jpg" alt="Pedi Spin">
                <div class=author_info>Светлана, 45 лет</div>
                <p>Идеально подходит для чувствительной кожи. Давно уже искала что-то подобное. Действует очень деликатно, можно смело шлифовать кожу стопы в разных направлениях, заусениц не будет. Можно использовать не распаривая ноги.</p>
            </div>
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/reviews__review3_photo.jpg" alt="Pedi Spin">
                <div class=author_info>Наталья, 61 год</div>
                <p>Мои пятки были жесткие и запущенные, но Pedi Spin справился с ними на ура, не пришлось даже кожу ног распаривать каждый раз. Отлично цепляет омертвевший эпидермис, но при этом не травмирует и не царапает кожу, все происходит безболезненно.</p>
            </div>
        </div>
    </div>
</section>
<section class=order_steps_section>
    <div class=wrapper>
        <h2>Как заказать пемзу Pedi&nbsp;Spin?</h2>
        <div class=steps_list>
            <div class=step_item>
                <h4>Шаг 1</h4>
                <p>Вы оставляете заявку на нашем сайте</p>
            </div>
            <div class=step_item>
                <h4>Шаг 2</h4>
                <p>Наш менеджер уточняет детали заказа</p>
            </div>
            <div class=step_item>
                <h4>Шаг 3</h4>
                <p>Мы отправляем Ваш заказ почтой в любой регион</p>
            </div>
            <div class=step_item>
                <h4>Шаг 4</h4>
                <p>Вы оплачиваете заказ при получении</p>
            </div>
        </div>
    </div>
</section>
<section class=order_section>
    <div class=title_block>
        <div class=wrapper>
            <h4>Успейте заказать PEDI SPIN по акционной цене!</h4>
        </div>
    </div>
    <div class=content_block>
        <div class=wrapper>
            <h3 class=main_title>Pedi Spin – японская электрическая пемза</h3>
            <p class=subtitle>Еще никогда уход за кожей ступней не был таким легким!</p>
            <div class=discount>Akcija! <span>40%</span> popusta</div>
            <div class=form_block>
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class=text>Stara cena:</div>
                        <div class=value><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></div>
                    </div>
                    <div class="price_item new">
                        <div class=text>Nova cena:</div>
                        <div class=value><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></div>
                    </div>
                </div>
                <form action="{{$orderRoute}}" method=post id=order_form class=order_form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class=field type=text name=name placeholder="Ime i prezime" required>
                    <input class=field type=tel name=phone placeholder="Telefon" required>
                    <input class=field type=text name=shipping_address placeholder="Adresa" required>
                    <input class=field type=text name=shipping_city placeholder="Grad" required>
                    <button class=button>Poruči odmah</button>
                </form>
                {{--<div class=deadline_text></div>--}}
            </div>
        </div>
    </div>
</section>
<footer class=footer_section>
</footer>
<script>eval(mod_pagespeed_uRq2Hxtw29);</script>
<script src="{{ asset('/') }}purplerelaxFiles/pedispin/owl.carousel.min.js+scripts.js"></script>
<script>eval(mod_pagespeed_Ig1UINWhi3);</script>
<script>eval(mod_pagespeed_MDncI5HA2W);</script>
@include('components.pixel_footer')
</body>
</html>