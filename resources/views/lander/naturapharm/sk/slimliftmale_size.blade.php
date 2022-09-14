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
        @media screen and (max-width: 959px) {
            .catalog_section .button {
                width: 320px;
            }
        }
        .order_section .button {
            font-size: 23px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">TRIČKO PRE DOKONALÝ PÁS A TRUP</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Vysokokvalitné materiály</li>
                <li>Nespôsobuje nepohodlie</li>
                <li>Neviditeľné pod oblečením</li>
            </ul>
            <a href="#order_form" class="button">Objednajte si teraz</a>
        </div>
        <div class="discount"><span>-40%</span>zľava</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Toto úžasné tielko je vyrobené z hodvábneho materiálu a elastickej lycry je pohodlné a pekne sedí na tele.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Pomáha udržiavať atraktívny vzhľad počas procesu chudnutia.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Vďaka špeciálnemu tvaru a štruktúre účinne sťahuje brucho a zvýrazňuje trup.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Vďaka inovatívnemu dizajnu sa naň dajú nosiť tenké tričká, svetre a ľahké košele.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>O TVAROVACOM TRIČKU SLIM 'N LIFT</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>Tričko SLIM 'N LIFT pomáha získať mužnú a atraktívnu postavu. Telo sa okamžite stane pevnejším a príťažlivejším – bez diét a namáhavých cvičení. Vďaka jedinečnému usporiadaniu elastických kompresných plátov košeľa SLIM 'N LIFT správne rozkladá nadváhu. Špeciálne rebrované panely vyrovnávajú každý záhyb. „Pivné“ bruško a tukové zásoby – zmiznú v okamihu. SLIM 'N LIFT tiež pomáha narovnať chrbát a výrazne zlepšuje držanie tela. Viac sebavedomia, viac úspechov v podnikaní, komunikácii a zvádzaní.</p>
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
                <h3>VLASTNOSTI TRIČKA SLIM 'N LIFT</h3>
                <ul>
                    <li><b>Zloženie:</b> hodvábny materiál a elastická lycra</li>
                    <li><b>Teplotné podmienky:</b> v každom ročnom období</li>
                    <li><b>Fyzická aktivita:</b> akákoľvek</li>
                    <li><b>Popis:</b> Vyrobené z veľmi príjemnej tkaniny, je to najefektívnejšie riešenie pre dokonalý pás.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Stará cena:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <a href="#order_form" class="button">Objednajte si teraz</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>VÝHODY SLIM 'N LIFT</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>SILA A VÝDRŽ</h4>
                    <p>Je vyrobený z vysokokvalitných, bezpečných materiálov, preto nespôsobuje podráždenie a vyrážky</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ELASTICITA</h4>
                    <p>Elastický, hladký a postupne napína pokožku a pri nosení je nepostrehnuteľný</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ÚČINNOSŤ</h4>
                    <p>Dokonale sťahuje záhyby na bruchu a chrbte, vďaka čomu je postava štíhla a príťažlivá</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>JEDNODUCHÁ ÚDRŽBA </h4>
                    <p>Nevyžaduje si špeciálnu starostlivosť. Možno ho prať ručne aj v práčke na jemný cyklus</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>AKO SI OBJEDNAŤ <span>Slim 'N Lift?</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__keyboard.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Na stránke zanechajte svoje informácie pre doručenie</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Budeme vás kontaktovať, aby sme potvrdili objednávku</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Zásielku zašleme expresnou poštou</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Platí sa na dobierku</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>DOJMY SPOKOJNÝCH <span>ZÁKAZNÍKOV</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Stanislav, 42 rokov</div>
                    <p>Ak mám byť úprimný, neveril som, že je možné nosiť oblečenie o 2-3 veľkosti menšie. Keď som si ho vyskúšal, vedel som, že je to ono. Ľahšie sa mi komunikovalo so ženami a kolegovia v práci ma žiadali, aby som prezradil recept na diétu.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Štefan, 39 rokov</div>
                    <p>Mám nadváhu. Slim And Lift skutočne spevní brucho a zvýrazní ramená, ktoré sa zdajú byť širšie. Dostávam komplimenty na svoj vzhľad a cítim sa krajšia, keď sa na seba pozriem do zrkadla. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">TRIČKO PRE DOKONALÝ PÁS A TRUP</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Vysokokvalitné materiály</li>
                <li>Nespôsobuje nepohodlie</li>
                <li>Neviditeľné pod oblečením</li>
            </ul>
        </div>
        <div class="form_block">
            <p>VYUŽITE ŠPECIÁLNU ZĽAVU 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Stará cena:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Meno a priezvisko" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Telefón" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Mesto" required="">
                <input class="input" type="text" name="shipping_zip" placeholder="PSČ" required="">
                @isset($productSizes)
                <div class="sizeDiv">
                    <span>Vyberte si veľkosť</span>
                    @foreach($productSizes as $singleSize)
                        <input type="radio" name="size" class="size" value="{{$singleSize->product_size}}" id="size-{{strtolower($singleSize->product_size)}}" checked/>
                        <label for="size-{{strtolower($singleSize->product_size)}}">
                             {{$singleSize->product_size}} ({{$singleSize->description}})
                        </label>
                        <br>
                    @endforeach
                </div>
                @endisset
                <button type="submit" class="button">Objednajte si teraz</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
