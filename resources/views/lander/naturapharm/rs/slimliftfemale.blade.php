<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftfemale/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftfemale/styles.css">
    <link href="{{ asset('/') }}flexonikFiles/slimliftfemale/custom-styless.min.css" type="text/css" rel="stylesheet">
</head>
<body>
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">MAJICA ZA SAVRŠEN STRUK</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Visokokvalitetni materijali</li>
                <li>Ne izaziva nelagodnost</li>
                <li>Nevidljiva ispod odeće</li>
            </ul>
            <a href="#order_form" class="button">Poručite</a>
        </div>
        <div class="discount"><span>-40%</span>popusta</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Ova neverovatna majica bez rukava je napravljena od svilenkastog materijala i elastične likre, udobna je i lepo prijanja uz telo.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Pomaže u održavanju atraktivnog izgleda tokom procesa mršavljenja.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Efikasno zateže stomak i ističe dekolte, zahvaljujući posebnom obliku i strukturi.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Zahvaljujući inovativnom dizajnu, preko ovoga se mogu nositi tanke majice, džemperi i lagane košulje.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>O SLIM 'N LIFT ŽENSKOJ MAJICI ZA OBLIKOVANJE</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>SLIM 'N LIFT majica pomaže da se ima vitka i atraktivna figura. Telo odmah postaje zategnutije i privlačnije - bez dijete i zamornih vežbi.
                Zahvaljujući jedinstvenom rasporedu elastičnih kompresionih ploča, SLIM 'N LIFT pravilno raspoređuje višak kilograma.
                Specijalni rebrasti paneli ispravljaju svaki nabor. "Pivski" stomak, opuštene grudi, masne naslage - sve ove nesavršenosti nestaju u tren oka.
                Takođe, SLIM 'N LIFT pomaže u ispravljanju leđa i primetno poboljšava držanje. Više samopouzdanja, više uspeha u poslu, u komunikaciji i ličnom životu.</p>
        </div>
    </div>
</section>
<section id="catalog" class="catalog_section">
    <div class="wrapper">
        <div class="product_item male clearfix">
            <div class="gallery_block">
                <img class="image one" src="{{ asset('/') }}flexonikFiles/slimliftfemale/b4-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
            </div>
            <div class="info">
                <h3>Karakteristike SLIM 'N LIFT ženske majice</h3>
                <ul>
                    <li><b>Sastav:</b> svilenkasti materijal i elastična likra</li>
                    <li><b>Temperaturni uslovi:</b> u bilo koje doba godine</li>
                    <li><b>Fizička aktivnost:</b> bilo koja</li>
                    <li><b>Opis:</b>Napravljena je od veoma udobne tkanine, najefikasnije je rešenje za savršen struk.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Stara cena:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">RSD</span></div>

                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">RSD</span></div>
                </div>
                <a href="#order_form" class="button" data-comment="Для мальчиков">Poručite sada</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>PREDNOSTI SLIM 'N LIFT MAJICE</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>SNAGA I IZDRŽLJIVOST</h4>
                    <p>Izrađen od visokokvalitetnih, sigurnih materijala, stoga ne izaziva iritaciju i osip</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ELASTIČNOST</h4>
                    <p>Elastično, glatko i postepeno zateže kožu i neosetan je pri nošenju</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>EFIKASNOST</h4>
                    <p>Savršeno zateže nabore na stomaku i leđima, čineći figuru vitkom i atraktivnom</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>LAKO ODRŽAVANJE</h4>
                    <p>Ne zahteva posebnu negu. Može se prati ručno i u mašini za veš na režimu za lagano pranje</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>KAKO PORUČITI <span>Slim'N Lift?</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/order_steps__step1_image.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Ostavite podatke za dostavu na sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Kontaktiraćemo Vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Poslaćemo pošiljku brzom poštom</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Plaćanje se vrši po pouzeću</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>UTISCI ZADOVOLJNIH <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Helena, 42 godine</div>
                    <p>Da budem iskrena, nisam mogla da verujem da je moguće nositi odeću 2-3 veličine manju. Kada sam ga isprobala, shvatila sam da je to to.
                        Dobila sam udvarače, a moje kolege s posla traže da im otrkijem recept za dijetu. :)</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftfemale/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Olga, 49 godina</div>
                    <p>Slim And Lift zaista zateže stomak i podiže grudi. Dobijam komplimente za izgled, a i lepše mi je gledati sebe u ogledalu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">MAJICA ZA SAVRŠEN STRUK</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Visokokvalitetni materijali</li>
                <li>Ne izaziva nelagodnost</li>
                <li>Nevidljiva ispod odeće</li>
            </ul>
        </div>
        <div class="form_block">
            <p>ISKORISTITE SPECIJALNI POPUST OD 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">RSD</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">RSD</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Telefon" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Grad" required="">
                <button type="submit" class="button">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimliftfemale/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimliftfemale/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
