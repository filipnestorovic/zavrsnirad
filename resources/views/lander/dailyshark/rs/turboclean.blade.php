<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/turboclean/info__image.jpg">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/turboclean/styles.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="wrapper scroll">
        <h4 class="subtitle">ČETKA ZA ČIŠĆENJE</h4>
        <h1 class="main_title">TURBO CLEAN</h1>
        <p class="description">ČIŠĆENJE PRITISKOM NA DUGME</p>
        <div class="discount">Akcija! <span>40%</span> popusta</div>
        <ul>
            <li>Pogodno, brzo i lagano</li>
            <li>Dobre performanse čišćenja</li>
            <li>360 okretaja u minuti</li>
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
        <h2><span>TURBO CLEAN</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/turboclean/about__image.jpg" alt="Turbo Clean">
        <div class="text_block">
            <p style="font-size: 20px;">
                Sada možete da perete tepihe, staze i obavite sva teška čišćenja jednim pritiskom na dugme! <br><br>
                Upoznajte <b>TURBO CLEAN!</b> Moćno rešenje koje vas oslobađa od stresa i napornog ribanja. Za samo nekoliko minuta TURBO CLEAN uklanja
                prljavštinu i kamenac sa pločica, eliminiše masnoću nakupljenu u lavabou i šporetu, pa čak čisti i šoferšajbnu automobila.<br><br>
                Dugotrajna baterija čini da se glava okreće 360 puta u minuti kako bi se napravilo brzo ribanje koje prevazilazi kvalitet ručnog ribanja!
                TURBO CLEAN je veoma jednostavan za korišćenje, veoma brz i praktičan.
            </p>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>ZAŠTO<span> TURBO CLEAN</span>?</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit1_image.jpg" alt="Turbo Clean">
                <h4>TURBO CLEAN je veoma jednostavan za korišćenje, veoma brz i odličan za sve koji ne žele ili ne mogu da troše mnogo snage na čišćenje.</h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit2_image.jpg" alt="Turbo Clean">
                <h4>Ugaona četka uklanja prljavštinu sa najtežih mesta gde obična četka ne može da priđe.</h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit3_image.jpg" alt="Turbo Clean">
                <h4>Sa produžetkom ručke stižete i do najtežih mesta za čišćenje, od vrha do dna bez istezanja i čučnjeva!</h4>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/benefits__benefit4_image.jpg" alt="Turbo Clean">
                <h4>Njegova moćna ravna četka je uvek spremna da ukloni najtvrdokorniju prljavštinu poput masnoće koja se nakuplja u rerni!</h4>
            </div>
        </div>
    </div>
</section>
<section class="info_section">
    <div class="wrapper clearfix">
        <h2><span>TEHNIČKE KARAKTERISTIKE:</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/turboclean/info__image.jpg" alt="Turbo Clean">
        <div class="content_block scroll">
            <div class="text_block">
                <ul style="font-size: 26px;line-height: 40px;">
                    <li>Materijal: ABS i silikon</li>
                    <li>Rotacija pod uglom od 120 stepeni</li>
                    <li>Može da se koristi za rad sa sapunom i svom kupatilskom i kuhinjskom hemijom</li>
                    <li>360 rotacija u minuti</li>
                </ul>
            </div>
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
    </div>
</section>
<section class="set_section">
    <div class="wrapper">
        <h2><span>TURBO CLEAN</span> SE MOŽE KORISTITI SVUDA</h2>
        <div class="set_list clearfix">
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image1.jpg" alt="Turbo Clean">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image2.jpg" alt="Turbo Clean">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image3.jpg" alt="Turbo Clean">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image4.jpg" alt="Turbo Clean">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image5.jpg" alt="Turbo Clean">
                </div>
            </div>
            <div class="set_item clearfix">
                <div class="text_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/set_image6.jpg" alt="Turbo Clean">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="opinion_section">
    <div class="wrapper">
        <div class="content_block">
            <h2>ČETKA ZA ČIŠĆENJE <br><span>TURBO CLEAN</span></h2>
            <img src="{{ asset('/') }}dailysharkFiles/turboclean/opinion__image.jpg" alt="Turbo Clean">
            <div class="text_block">
                <p>TURBO CLEAN je punjivi, bežični uređaj i potpuno je vodootporan. Za čišćenje tamo gde je najpotrebnije, čak i u bašti, kupatilu ili bazenu!<br><br>
                    <b>Rezultat je besprekorna čistoća, brzo i bez napora!</b></p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2><span>UTISCI</span> NAŠIH KUPACA</h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review1_photo.jpg" alt="Turbo Clean">
                </div>
                <div class="text_block">
                    <div class="author_name">ANA KRSTOVIĆ</div>
                    <p>Visokokvalitetno i korisno sredstvo za čišćenje! Kupatilo odlično riba. Veoma zgodna ručka za produžetak koja štedi vreme i trud.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review2_photo.jpg" alt="Turbo Clean">
                </div>
                <div class="text_block">
                    <div class="author_name">IVAN MARKOVIĆ</div>
                    <p>Nakon što sam pažljivo pogledao ponudu odlučio sam da poručim ovu četku. Odlična je i preporučujem je. Držim ribarnicu i zbog inspekcije mora sve da bude čisto.
                        Sa ovom četkom oribam pločice i radne površine bez ikakvih problema, temeljno i za duplo kraće vreme nego ranije što sam radio.
                        Kvalitetna je i mogu samo da kažem da je ovo najbolja kupovina preko interneta do sada.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/turboclean/reviews__review3_photo.jpg" alt="Turbo Clean">
                </div>
                <div class="text_block">
                    <div class="author_name">OLGA AVRAMOVIĆ</div>
                    <p>Uh, ovo je odlično čoveče. Bolje je nego što sam zamišljala. Kada ribam kupatilo i kuhinju nikada nisam mogla toliko jako da pritisnem i skinem kamenac.
                        Sa ovom četkom uspela sam da dovedem sve do toga da se sija. Toplo preporučujem kupovinu, TURBO CLEAN četka je neophodna u svakom domaćinstvu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>DOSTAVA I PLAĆANJE</h2>
        <div class="steps_list clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step1_image.jpg" alt="Turbo Clean">
                <h4>PORUČIVANJE</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step2_image.jpg" alt="Turbo Clean">
                <h4>SLANJE</h4>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu i poslati je u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/turboclean/order_steps__step3_image.jpg" alt="Turbo Clean">
                <h4>PLAĆANJE</h4>
                <p>Pošiljku plaćate kuriru brze pošte po preuzimanju</p>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper">
        <h4 class="subtitle">ČETKA ZA ČIŠĆENJE</h4>
        <h3 class="main_title">TURBO CLEAN</h3>
        <p class="description">ČIŠĆENJE PRITISKOM NA DUGME</p>
        <div class="discount">Akcija! <span>40%</span> popusta</div>
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
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" type="text" name="name" placeholder="Ime i prezime" required="">
                <input class="field" type="tel" name="phone" placeholder="Telefon" required="">
                <button class="button" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $(".scroll").on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 1500);
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
