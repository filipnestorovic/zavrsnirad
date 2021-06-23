@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}neoshowerFiles/jaderoller/jaderollerbanner_dt.png) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}neoshowerFiles/jaderoller/jaderoller4_mb.png) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}neoshowerFiles/jaderoller/jaderollerbanner_mb.png) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}neoshowerFiles/jaderoller/jaderoller4_dt.png) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}neoshowerFiles/jaderoller/jaderoller4_mb.png) bottom center/cover no-repeat
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
                                    <h1>Лесен и бърз начин за стегната, нежна и красива кожа на лицето!</h1>
                                    <h3>По напълно натурален начин</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Чрез свиване на порите на лицето се понижава възможността за поява на нови бръчки.</li>
                                        <li>Ако се използва редовно, стягащият ефект е гарантиран.</li>
                                        <li>Той избутва токсините на повърхността и така регулира Ph стойността на кожата на лицето.</li>
                                        <li>Направен е от жад – полускъпоценен камък, който е смятан за духовно, енергично и терапевтично средство.</li>
                                    </ul>
                                    <h5>Възползвай се от <span style="color: #0093ea;"><strong>40%</strong></span> намаление днес!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙ ТВОЯ JADE ROLLER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png" alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5"></p>
                                    <p>100% гаранция за удовлетвореност</p>
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
                <p style="text-align: center;">Количествата са ограничени <br>Намалението от 40% може да продължи още малко!</p>
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
                                <img src="{{ asset('/') }}neoshowerFiles/jaderoller/jaderoller1.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>ХИТ НА СВЕТОВНИЯ ПАЗАР</h2>
                                    <p>Предназначен за дами, които искат да <strong>стегнат, подмладят и почистят своята кожа.</strong>
                                        Състои се от дръжка с два прикрепени камъка жад с различни размери, с форма на ролка, единият от които се използва за челото и бузите, а другият, по-малкият, за зоната около очите.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon12.png" alt="icon1">
                                                ПОДОБРЯВА ЦИРКУЛАЦИЯТА
                                            </strong>
                                            Той действа в дълбочина на кожата на лицето, като подобрява кръвообращението. Благодарение на този процес, дълбоките пори лесно се свиват.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon13.png" alt="icon2">
                                                ПРЕМАХВА ПОДПУХНАЛОСТТА
                                            </strong>
                                            Сложи го в хладилника за около 20 минути, за да се охлади, и след това масажирай лицето си с охладения ролер.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon14.png" alt="icon4">
                                                ХИЛЯДОЛЕТНА ТАЙНА
                                            </strong>
                                            Употребата на Jade roller води началото си от 7. век пр. Хр.
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
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}neoshowerFiles/jaderoller/jaderoller2_mb.png" class="no-lazy">
                    <img src="{{ asset('/') }}neoshowerFiles/jaderoller/jaderoller2_dt.png" alt="product2" class="no-lazy">
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
                                <img src="{{ asset('/') }}neoshowerFiles/jaderoller/jaderoller3.png" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">СТЯГАНЕ НА КОЖАТА ПО ЕСТЕСТВЕН НАЧИН!</h2>
                                    <p>За разлика от повечето козметика, jade roller е 100% естествен начин да подмладиш твоята кожа. Понижава напрежението в зоната на лицето и челюстта, подобрява еластичността и намалява видимите следи на стареене.</p>
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
                <p style="text-align: center;">“Вече един месец го използвам всеки ден и кожата ми е много по-чиста с равномерен цвят, вече няма подпухнала кожа. Силно препоръчвам!”</p>
                <p style="text-align: center;">Магдалена Д. - София</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙ ТВОЯ JADE ROLLER</a></p>
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
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half-empty"></i></p>
                                <p>Средна оценка</p>
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
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><strong>89%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i>0</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><strong>11%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
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
                                <h4 class="w_title">Бойка Добрева / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>“Чудесен е за заличаване на бръчки и тъмни кръгове. Той стяга кожата, както е описано, все пак, ако го използваш в комбинация с твоята ежедневна козметика, резултатите ще бъдат още по-добри.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Магдалена Тимофеева / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>“Купих един за себе си и един за моята майка и резултатите вече са видими. Много интересна вещ!”</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Силвия Иванова / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>“След тежък ден на работа аз си отпочивам изцяло, масажирайки лицето си с охладения ролер. Релаксация като след лечение.”</p>
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
                <p style="text-align: center;">
                    Количествата са ограничени
                    <br>Намалението от 40% може да продължи още малко!
                </p>
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
                                    <h1>Лесен и бърз начин за стегната, нежна и красива кожа на лицето!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Чрез свиване на порите на лицето се понижава възможността за поява на нови бръчки.</li>
                                        <li>Ако се използва редовно, стягащият ефект е гарантиран.</li>
                                        <li>Той избутва токсините на повърхността и така регулира Ph стойността на кожата на лицето.</li>
                                        <li>Направен е от жад – полускъпоценен камък, който е смятан за духовно, енергично и терапевтично средство.</li>
                                    </ul>
                                    <h5>Възползвай се от <span style="color: #0093ea;"><strong>40%</strong></span> намаление днес!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">ПОРЪЧАЙ ТВОЯ JADE ROLLER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png" alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5"></p>
                                    <p>100% гаранция за удовлетвореност</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
@include('lander.purplerelax.components.footer')