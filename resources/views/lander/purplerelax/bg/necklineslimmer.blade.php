@include('lander.purplerelax.components.head')
<style>
    @media (min-width: 768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderollerbanner_dt.png) bottom right 47%/cover no-repeat
        }
    }

    @media (max-width: 767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_mb.png) bottom center/cover no-repeat
        }

        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderollerbanner_mb.png) bottom center/100% no-repeat
        }
    }

    @media (min-width: 768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_dt.png) center right 47%/cover no-repeat
        }
    }

    @media (max-width: 767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_mb.png) bottom center/cover no-repeat
        }
    }
</style>
<main>
    <section class="section-1">
        <div class="container">
            <div class="block-1 common-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h1>Лесен и ефективен метод за тонизиране и укрепване на мускулите на шията и челюстта</h1>
                                    <h3>По напълно прост и естествен начин.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Избягвайте последствията от старенето без естетични процедури</li>
                                        <li>Внимателно оформя основните мускули на шията и стяга кожата</li>
                                        <li>Бърз и ефективен ефект – достатъчни са само 5 минути на ден</li>
                                        <li>Първите резултати са видими след около 2-3 седмици</li>
                                    </ul>
                                    <h5>Възползвайте се от <span style="color: #0093ea;"><strong>40%</strong></span>
                                        отстъпка днес!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙТЕ СЕГА</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png"
                                     alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5">
                                    </p>
                                    <p>Гарантирано 100% удовлетворение</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

    <section class="section-2">
        <div class="container">
            <div class="wysiwyg-content pro-txt ">
                <p style="text-align: center;">Количествата са ограничени <br>Отстъпката от 40% е валидне още много малко.</p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-3">
        <div class="container">
            <div class="block-2 ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller1.png"
                                     alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>ХИТ НА СВЕТОВНИЯ ПАЗАР</h2>
                                    <p>Предназначен е за всички, които държат на външния си вид и искат да имат <strong>стегната шия и лице</strong>. Продукт, който досега е купен от повече от 6000 души в България и е получил най-високи оценки.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon1">
                                                КАК РАБОТИ
                                            </strong>
                                            Neckline Slimmer насочва и оформя подкожните мускули на шията, брадичката и лицето, като прилага лек натиск върху тези зони. Като всеки друг мускул - корем или бицепс - мускулите на врата и лицето се нуждаят от упражнения.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon2">
                                                РАЗЛИЧНИ НИВА НА НАТОВАР
                                            </strong>
                                            Три нива на натоварване посредством три заменяеми пружини с различна степен на съпротивление
                                            3 спирали с различна сила - Нежно укрепват основните мускули на врата и стягат кожата. Три нива на съпротивление: ниско, средно и високо.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon4">
                                                НАУЧНО ДОКАЗАНО
                                            </strong>
                                            Доказано е, че хората, които са използвали този продукт през последните месеци, имат много по-малко проблеми с отпусната кожа в долната част на лицето.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-4">
        <div class="container">
            <div class="ct_image_wrap ">
                <picture>
                    <source media="(max-width: 767px)"
                            srcset="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller2_mb.png"
                            class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller2_dt.png" alt="product2"
                         class="no-lazy">
                </picture>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-5">
        <div class="container">
            <div class="block-3 ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller3.png"
                                     alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">БЪРЗ И ЕФЕКТИВЕН НАЧИН
                                        ЗА ПРЕМАХВАНЕТО НА ДВОЙНАТА БРАДИЧКА!</h2>
                                    <p>Всички знаеме предимствата на упражненията за съпротива, като лицеви опори или вдигане на тежести. Neckline Slimmer прави подобно нещо, но с по-малко усилия и върху по-малка мускулна група.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-6">
        <div class="container">
            <div class="wysiwyg-content block-4 ">
                <h2 style="text-align: center;">НАШИТЕ КЛИЕНТИ</h2>
                <p style="text-align: center;">„„Използвам го всеки ден от един месец и брадичката ми е по-стегната. Най-накрая намерих продукт, който работи. Всички препоръки!"</p>
                <p style="text-align: center;">София И, София</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙТЕ СЕГА</a></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-7">
        <div class="container">
            <div class="rating-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <h4 class="w_title">4.6</h4>
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star-half-empty"></i></p>
                                <p>Среден рейтинг</p>
                            </div>
                        </div>
                        <div class="w_item item-2">
                            <div class="w_desc">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 89%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 11%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w_item item-3">
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star"></i><strong>89%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star-o"></i>0</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i><strong>11%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Мария Петрова</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Страхотен е, оформя и повдига  мускулите на шията и челюстта и стяга кожата. Действа точно както е описано и ако го използвате ежедневно дава страхотни резултати.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Елена Георгиева</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Купих един за себе си и един за майка ми и ефектът е отличен. И много сме доволне, не очаквахме от този продукт да е толкова добър.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Цветелина Стоянова</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Аз съм много доволна от NeckLine Slimmer и го препоръчвам на всички жени, които искат да подобрят външния си вид и да имат по-стегнато деколте и брадичка. Устройството е ефективно и удобно за употреба, а резултатите са забележими веднага. Благодарение на NeckLine Slimmer, сега имам по-красива и подмладена врата и брадичка.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-8">
        <div class="container">
            <div class="wysiwyg-content pro-txt ">
                <p style="text-align: center;">Количествата са ограничени <br>Отстъпката от 40% е валидне още много малко.</p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-9">
        <div class="container">
            <div class="foot-block common-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h1>Лесен и ефективен метод за тонизиране и укрепване на мускулите на шията и челюстта</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Избягвайте последствията от старенето без естетични процедури</li>
                                        <li>Внимателно оформя основните мускули на шията и стяга кожата</li>
                                        <li>Бърз и ефективен ефект – достатъчни са само 5 минути на ден</li>
                                        <li>Първите резултати са видими след около 2-3 седмици</li>
                                    </ul>
                                    <h5>Възползвайте се от <span style="color: #0093ea;"><strong>40%</strong></span>
                                        отстъпка днес!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙТЕ СЕГА</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png"
                                     alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5">
                                    </p>
                                    <p>Гарантирано 100% удовлетворение</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

@include('lander.purplerelax.components.footer')
