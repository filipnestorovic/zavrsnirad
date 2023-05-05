<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/sanisticks/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/sanisticks/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/sanisticks/styles.css"/>
</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="wrapper">
        <div class="title_block">
            <p class="subtitle">Stapići protiv začepljenja odvoda i neprijatnih mirisa</p>
            <h1 class="main_title"><span>Sani Sticks</span></h1>
        </div>
        <p class="description">Bez neprijatnih mirisa <br/> iz kanalizacionih cevi <br/> tokom cele godine!</p>
        <ul>
            <li>Razlaže hranu, deterdžent, masnoću i kosu</li>
            <li>Bezbedan za sve vrste cevi</li>
            <li>Jedno pakovanje je dovoljno za celu godinu</li>
        </ul>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena sada:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
    </div>
</header>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>ZABORAVITE NA <span>NEPRIJATAN MIRIS IZ KANALIZACIJE</span> UZ SANI STICKS</h2>
        <p class="description">
            Ako voda u kupatilu ili kuhinji ne odlazi dobro i oseća se neprijatan miris iz cevi,
            jedini način za eliminisanje te situacije su SANI STICKS štapiči.
            Dovoljno je ubaciti štapić i on počinje da deluje.
        </p>
        <div class="images_block clearfix">
            <img class="image1" src="{{ asset('/') }}dailysharkFiles/sanisticks/about__image1.jpg" alt="Sani Sticks"/>
            <img class="image2" src="{{ asset('/') }}dailysharkFiles/sanisticks/about__gif_image.gif" alt="Sani Sticks"/>
            <img class="image3" src="{{ asset('/') }}dailysharkFiles/sanisticks/about__image2.jpg" alt="Sani Sticks"/>
        </div>
        <p class="text">
            Spustite jedan Sani štapić u odvod umivaonika, kade ili sudopere i ceo mesec možete zaboraviti na začepljenje i neprijatne mirise.
            Koncentrat koji se nalazi u Sani štapićima ima enzime koji razgrađuju organski otpad kao što su masnoća, kosa, hrana, naslage sapuna itd.
        </p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/sanisticks/about__image3.jpg" alt="Sani Sticks"/>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper clearfix">
        <h2><span>PREDNOSTI</span> SANI ŠTAPIĆA</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/benefits__benefit1_image.jpg" alt="Sani Sticks"/>
                <p>Jedno pakovanje je dovoljno za godinu dana</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/benefits__benefit2_image.jpg" alt="Sani Sticks"/>
                <p>Uklanja začepljenje i neprijatne mirise</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/benefits__benefit3_image.jpg" alt="Sani Sticks"/>
                <p>Nisu toksični i biorazgradivi su</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/benefits__benefit4_image.jpg" alt="Sani Sticks"/>
                <p>Bezbedan za sve vrste cevi</p>
            </div>
        </div>
        <p class="description">
            Korišćenjem štapića za čišćenje cevi jednom mesečno, zauvek ćete zaboraviti na neprijatan miris.
            Štapić će razgraditi sve naslage na zidovima cevi, čak i one koje su tu već duže vreme.
            Sada se nećete stideti da pozovete svoje prijatelje zbog neprijatnih mirisa iz kupatila i kuhinje.
        </p>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena sada:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
    </div>
</section>
<section class="info_section">
    <div class="wrapper clearfix">
        <h2>OSLOBODITE SE <span>SVIH VRSTA ZAČEPLJENJA</span></h2>
        <div class="text_block">
            <p>Štapići za čišćenje odvodnih cevi Sani Sticks se ubacuju u odvodnu cev, nevidljivi su i potpuno bezbedni za zdravlje.</p>
            <p><b>Kada jednom upotrebite ovaj čudesni proizvod, bićete potpuno oduševljeni.</b></p>
        </div>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/sanisticks/info__image1.jpg" alt="Sani Sticks"/>
        <div class="list_block">
            <h4>SANI STICKS LAKO RAZGRAĐUJE:</h4>
            <div class="list clearfix">
                <div class="list_item clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/info__image2.jpg" alt="Sani Sticks"/>
                    <p>Kosu i prašinu</p>
                </div>
                <div class="list_item clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/info__image3.jpg" alt="Sani Sticks"/>
                    <p>Nakupine masnoće</p>
                </div>
                <div class="list_item clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/info__image4.jpg" alt="Sani Sticks"/>
                    <p>Organske naslage</p>
                </div>
                <div class="list_item clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/info__image5.jpg" alt="Sani Sticks"/>
                    <p>Opasne bakterije</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>UTISCI <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review1_photo.jpg" alt="Sani Sticks"/>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review1_avatar.jpg" alt="Sani Sticks"/>
                    <div class="name">Elena Jovanović</div>
                    <div class="text">33 godine</div>
                </div>
                <p>
                    Muž i ja smo poručili štapiće jer je cev u kuhinji stalno bila začepljena,
                    i bar jednom mesečno smo morali da intervenišemo.
                    Od kada ovo koristimo potpuno smo zadovoljni.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review2_photo.jpg" alt="Sani Sticks"/>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review2_avatar.jpg" alt="Sani Sticks"/>
                    <div class="name">Boris Kostić</div>
                    <div class="text">42 godine</div>
                </div>
                <p>
                    Sani Sticks štapići su super. Ne moram da čistim sifon svake nedelje, a nema više ni neprijatnog mirisa.
                    Jedan štapić je dovoljan za oko mesec dana. Hvala na odličnom proizvodu.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review3_photo.jpg" alt="Sani Sticks"/>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/sanisticks/reviews__review3_avatar.jpg" alt="Sani Sticks"/>
                    <div class="name">Vladimir Janković</div>
                    <div class="text">37 godina</div>
                </div>
                <p>
                    Kupio sam tri pakovanja odjednuš, čuo sam od prijatelja da ekstra radi.
                    Odmah sam ga zabio u umivaonik i sudoperu, ništa nije komplikovano.
                    Bukvalno za 5 minuta voda počinje da otiče, a smrada uopšte nema.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>KAKO <span>PORUČITI</span> SANI STICKS?</h2>
        <div class="steps_list clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/order_steps__step1_image.jpg" alt="Sani Sticks"/>
                <div class="number_block">
                    <div class="number">01</div>
                    <div class="text">Porudžbina</div>
                </div>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/order_steps__step2_image.jpg" alt="Sani Sticks"/>
                <div class="number_block">
                    <div class="number">02</div>
                    <div class="text">Potvrda</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/sanisticks/order_steps__step3_image.jpg" alt="Sani Sticks"/>
                <div class="number_block">
                    <div class="number">03</div>
                    <div class="text">Slanje</div>
                </div>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana. Plaćate po pouzeću.</p>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper">
        <div class="title_block">
            <p class="subtitle">STAPIĆI PROTIV NEPRIJATNIH MIRISA</p>
            <h3 class="main_title"><span>Sani Sticks</span></h3>
        </div>
        <p class="description">Poručite odmah i ostvarite popust!</p>
        <div class="discount">Akcija! <b>-40%</b> popusta</div>
        <div class="form_block">
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Redovna cena:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Cena sada:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <form id="order_form" class="order_form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" type="text" name="name" placeholder="Ime i prezime" required/>
                <input class="field" type="tel" name="phone" placeholder="Telefon" required id="phone"/>
                <button class="button">Poručite sada</button>
            </form>
            <div class="products_count">Preostalo još <b>5</b> komada na akciji</div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/sanisticks/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
