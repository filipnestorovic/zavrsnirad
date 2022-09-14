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
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">TRICOU PENTRU TALIE SI TRUNCHI PERFECTE</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Materiale de înaltă calitate</li>
                <li>Nu provoacă disconfort</li>
                <li>Invizibil sub haine</li>
            </ul>
            <a href="#order_form" class="button">Comanda acum</a>
        </div>
        <div class="discount"><span>-40%</span>reducere</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Acest tricou uimitor este realizat din material mătăsos și lycra elastic, este confortabil și se stă bine pe corp.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Ajută la menținerea unui aspect atractiv în timpul procesului de slăbire.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Strânge eficient stomacul și evidențiază trunchiul, datorită formei și structurii sale speciale.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Datorită designului inovator, peste aceasta pot fi purtate tricouri subțiri, pulovere și cămăși ușoare.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>DESPRE TRICOUL MODELATOR SLIM ‘N LIFT </h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>Tricoul SLIM ‘N LIFT ajută la o siluetă masculină și atractivă. Corpul devine imediat mai strâns și mai atractiv – fără diete și exerciții obositoare. Datorită aranjamentului unic al plăcilor elastice de compresie, SLIM ‘N LIFT distribuie corect excesul de greutate. Panourile speciale cu nervuri îndreptă fiecare pliu. Burta de „bere” și depozitele de grăsime – dispar cât ai clipi. De asemenea, SLIM ‘N LIFT ajută la îndreptarea spatelui și îmbunătățește considerabil postura. Mai multă încredere în sine, mai mult succes în afaceri, comunicare și seducție.</p>
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
                <h3>CARACTERISTICILE TRICOULUI SLIM ‘N LIFT</h3>
                <ul>
                    <li><b>Compozitie:</b> material matasos si lycra elastic</li>
                    <li><b>Condiții de temperatură:</b> în orice perioadă a anului</li>
                    <li><b>Activitate fizică:</b> oricare</li>
                    <li><b>Descriere:</b> Fabricat din material foarte confortabil, este cea mai eficienta solutie pentru o talie perfecta</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Preț vechi:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <a href="#order_form" class="button" data-comment="Для мальчиков">Comanda acum</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>AVANTAJELE SLIM ‘N LIFT</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>FORȚA ȘI REZISTENȚA</h4>
                    <p>Fabricat din materiale de înaltă calitate, sigure, prin urmare nu provoacă iritații și erupții cutanate</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ELASTICITATE</h4>
                    <p>Elastic, neted și strânge treptat pielea și este insesizabil atunci când este purtat</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>EFICIENŢĂ</h4>
                    <p>Strânge perfect pliurile de pe stomac și spate, făcând silueta subțire și atractivă</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>Întreținere ușoară</h4>
                    <p>Nu necesită îngrijire specială. Se poate spala manual si in masina de spalat rufe pe ciclu delicat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>CUM SE COMANDĂ <span>Slim'N Lift?</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__keyboard.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Completați informațiile de expediere pe site</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Vă vom contacta pentru a confirma comanda</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Vom trimite coletul prin poștă rapidă</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Plata se face ramburs la livrare</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>IMPRESII ALE CLIENȚILOR <span>MULȚUMIȚI</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Andrei, 42 de ani</div>
                    <p>Sincer să fiu, nu mi-a venit să cred că este posibil să port haine cu 2-3 mărimi mai mici. Când l-am încercat, am știut că asta era. Lucrurile mergeau mai bine cu femeile, iar colegii de la serviciu îmi cer să le dezvălui rețetă pentru dieta pe care o urmez.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Laurențiu, 39 de ani</div>
                    <p>Sunt supraponderal. Slim And Lift strânge cu adevărat stomacul și accentuează umerii care par mai largi. Primesc complimente pentru aspectul meu și simt că arăt mai bine când mă uit în oglindă.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">TRICOU PENTRU TALIE SI TRUNCHI PERFECTE</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Materiale de înaltă calitate</li>
                <li>Nu provoacă disconfort</li>
                <li>Invizibil sub haine</li>
            </ul>
        </div>
        <div class="form_block">
            <p>Profitați de o reducere specială de 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Preț vechi:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Numele și prenumele" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Numar de telefon" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Strada și numărul" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Oraș" required="">
                <input class="input" type="text" name="shipping_zip" placeholder="Număr poștal" required="">
                @isset($productSizes)
                <div class="sizeDiv">
                    <span>Alege o marime</span>
                    @foreach($productSizes as $singleSize)
                        <input type="radio" name="size" class="size" value="{{$singleSize->product_size}}" id="size-{{strtolower($singleSize->product_size)}}" checked/>
                        <label for="size-{{strtolower($singleSize->product_size)}}">
                             {{$singleSize->product_size}} ({{$singleSize->description}})
                        </label>
                        <br>
                    @endforeach
                </div>
                @endisset
                <button type="submit" class="button">Comanda acum</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
