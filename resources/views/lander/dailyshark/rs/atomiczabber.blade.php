<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=480">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/atomiczabber/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/atomiczabber/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/atomiczabber/style.css">
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Italic.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Italic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Black.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'),
            url('{{ asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
        .freeShippingHolder {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 500;
            color: #e43315;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">Atomic Zabber</h1>
        <div class="info_block">
            <p class="subtitle">OSLOBODITE SE INSEKATA, GLODARA I BUBAŠVABA</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__image.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Redovna cena za 1:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena danas za 1:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit1_image.jpg" alt="">
                <p>Bezbedan za ljude i životinje</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit2_image.jpg" alt="">
                <p>Radi na <br/> struju</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit3_image.jpg" alt="">
                <p>Pokriva veliko područje</p>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sa popustom</a>
        <div class="products_count">Preostalo <b class="lastpack">9</b> komada na akciji</div>
    </header>
    <section class="benefits_section dark_theme">
        <h2 class="title"><span>UMORNI STE OD ŠTETOČINA</span> U VAŠEM DOMU?</h2>
        <div class="benefits_list2">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits2__benefit3_image.jpg" alt="">
                <p>Da li vam komarci ometaju san?</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits2__benefit2_image.jpg" alt="">
                <p>Ne možete da se nosite sa glodarima?</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits2__benefit1_image.jpg" alt="">
                <p>Imate bubašvabe ili stenice?</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits2__benefit4_image.jpg" alt="">
                <p>Da li vam štetočine hodaju po hrani?</p>
            </div>
        </div>
    </section>
    <section class="description_section">
        <h2 class="title">UKLJUČITE ATOMIC ZABBER UREĐAJ I <span>ZABORAVITE NA ŠTETOČINE</span></h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/atomiczabber/description__image.jpg" alt="">
        <p><b>Prvi ultrazvučni uređaj koji deluje na sve vrste insekata i glodare.</b></p>
        <p>Ovaj uređaj ne zahteva dodatno održavanje. Dovoljno je
            uključiti Atomic Zabber u električnu utičnicu i on će stvaranjem
            impulsa odbijati glodare i insekte 24 sata dnevno. Uređaj ih
            ne ubija već ih tera da napuste prostor i okolinu, tako da ne morate
            da kupite mrtve štetočine i čistite za njima.</p>
        <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/gif.gif" alt="" class="gif">
        <div class="benefits_list3 va_middle">
            <div class="benefit_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits3__benefit1_image.jpg" alt="">
                </div>
                <div class="text_block">
                    <h4>Siguran</h4>
                    <p>Bezbedan je za ljude, mačke, pse i ostale kućne ljubimce.
                        <br/>Utiče samo na glodare i insekte.</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits3__benefit2_image.jpg" alt="">
                </div>
                <div class="text_block">
                    <h4>Efikasan</h4>
                    <p>Zbog periodičnog ultrazvuka i elektromagnetnih talasa, tera
                        štetočine momentalno.</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits3__benefit3_image.jpg" alt="">
                </div>
                <div class="text_block">
                    <h4>Odlična pokrivenost</h4>
                    <p>Jedan proizvod pokriva površinu od 80 kvadratnih metara.
                        <br>Mogu se pokriti i veći prostori sa više uređaja.</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits3__benefit4_image.jpg" alt="">
                </div>
                <div class="text_block">
                    <h4>Univerzalan</h4>
                    <p>Može se koristiti u stanu, kancelariji, vikendici, menzi,
                        prodavnici ili bilo kom drugom mestu.</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sa popustom</a>
    </section>
    <section class="info_section">
        <h2 class="title"><span>UREĐAJ BROJ 1</span> PROTIV INSEKATA I GLODARA!</h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/atomiczabber/info__image.jpg" alt="">
        <div class="benefits_list1">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits1__benefit1_image.jpg" alt="">
                <p>Ekološki <br/> bezbedan</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits1__benefit2_image.jpg" alt="">
                <p>Jednostavan za <br/> korišćenje</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/benefits1__benefit3_image.jpg" alt="">
                <p>Štiti <br/>24/7</p>
            </div>
        </div>
        <h3><span>UNIVERZALAN</span> PROTIV SVIH ŠTETOČINA</h3>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/atomiczabber/info__image2.jpg" alt="">
    </section>
    <section class="vote_section gray_theme">
        <h2 class="title">DA LI VAM JE <span>ATOMIC ZABBER POMOGAO?</span></h2>
        <div class="vote_block">
            <div class="questions_list">
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Da</div>
                    <div class="percents">82%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Ne</div>
                    <div class="percents">4%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Nisam kupio, vidi rezultate</div>
                    <div class="percents">14%</div>
                </div>
            </div>
            <div class="voice_count">Glasalo: <b>973</b></div>
        </div>
    </section>
    <section class="reviews2_section gray_theme">
        <h2 class="title">UTISCI <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews2__review1_photo.jpg"
                     alt="">
                <p>Sumnjala sam u efikasnost ovog uređaja. Mnogo sam bila
                    iznenađena kada sam videla da nakon 5 dana nemam bubašvabe u stanu.
                    Potpuno su nestale! Koristim ga već 3 meseca i nema ni jedne više.</p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews__review1_avatar.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Ana Šarović</div>
                        <div class="text">28 godina</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews2__review2_photo.jpg"
                     alt="">
                <p>Komarci mi nisu davali da spavam noću, a ja nema koja sredstva
                    nisam koristio protiv njih. Slučajno sam video ovaj uređaj i odlučio da ga poručim!
                    Čim sam ga uključio, komaraca više nije bilo. Sve preporuke!</p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews__review2_avatar.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Jovan Todorović</div>
                        <div class="text">33 godine</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews2__review3_photo.jpg"
                     alt="">
                <p>Obično ne verujem u ovakve stvari, ali kada su mi miševi ponovo
                    progrizli žice morao sam da pokušam i probam. Poručio sam uređaj
                    i kada je stigao postavio sam ga u garažu. Evo već pola godine
                    nisam video ni jednog miša. Preporučujem svima da kupe ovo.</p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/reviews__review3_avatar.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Mihajlo Jović</div>
                        <div class="text">45 godina</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="order_info_section">
        <h2 class="title"><span>KAKO PORUČITI</span> ATOMIC ZABBER?</h2>
        <div class="order_steps2 clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/order_steps__step1_icon.png" alt="">
                <div class="separator"></div>
                <h4>Zahtev</h4>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/order_steps__step2_icon.png" alt="">
                <div class="separator"></div>
                <h4>Potvrda</h4>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/order_steps__step3_icon.png" alt="">
                <div class="separator"></div>
                <h4>Slanje</h4>
                <p>Šaljemo proizvod brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/order_steps__step4_icon.png" alt="">
                <div class="separator"></div>
                <h4>Plaćanje</h4>
                <p>Plaćate kuriru brze pošte po preuzimanju paketa</p>
            </div>
        </div>
    </section>
    <section class="offer_section offer3 order">
        <h3 class="main_title">Atomic Zabber</h3>
        <div class="info_block">
            <p class="subtitle">OSLOBODITE SE INSEKATA, GLODARA I BUBAŠVABA</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__image.jpg" alt="">
        </div>
        @foreach($prices as $q => $singlePrice)
        <div class="price_block clearfix price_holder" data-quantity="{{$q}}">
            <div class="price_item old">
                <div class="text">{{$q}} {{$q === 1 ? 'komad' : 'komada'}}:</div>
                <div class="value">
                    {{ $singlePrice['originalPrice'] }}
                    {{ $singlePrice['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">{{$q}} {{$q === 1 ? 'komad' : 'komada'}} danas:</div>
                <div class="value">
                    {{ $singlePrice['amount'] }}
                    {{ $singlePrice['currency'] }}
                </div>
            </div>
        </div>
        @endforeach
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit1_image.jpg" alt="">
                <p>Bezbedan za ljude i životinje</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit2_image.jpg" alt="">
                <p>Radi na <br/> struju</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/atomiczabber/offer3__benefit3_image.jpg" alt="">
                <p>Pokriva veliko područje</p>
            </div>
        </div>
        <form id="order_form" class="main-order-form order_form orderformcdn" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <select name="quantity" id="quantity" class="field quantity" required>
                @foreach($prices as $singlePrice)
                    <option value="{{ $singlePrice['quantity'] }}"
                            data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                            @if($singlePrice['is_default']) selected @endif
                            @if(old('quantity') == $singlePrice['quantity']) selected @endif
                            @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                    >
                        &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}}
                        ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                    </option>
                @endforeach
            </select>
            <div class="freeShippingHolder">+ BESPLATNA DOSTAVA</div>
            <button class="button">Poručite sa popustom</button>
        </form>
        <div class="products_count">Preostalo <b class="lastpack">9</b> komada na akciji</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/atomiczabber/jquery.cookie.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/atomiczabber/script.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            if(typeof selectedQuantity !== "undefined") {
                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();
            }

            selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();

            $quantitySelect.on('change', function() {
                selectedQuantity = $(this).val();
                selectedOption = $(this).find(':selected');

                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

                selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();
            });
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
