<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/cookinghammer/styles.css">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/cookinghammer/favicon.ico" type="image/x-icon">
    <style>
        .freeShippingHolder {
            text-align: center;
            color: #ee3737;
            font-size: 22px;
            font-weight: 500;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <div class="title_block">
            <h1 class="main_title"></h1>
            <p class="subtitle">SPEEDY CHOPPER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/speedychopper/bg-bottom.jpg" alt="">
            <div class="discount_block">
                <div class="value">40%</div>
                <div class="text">popusta</div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">100% garancija kvaliteta</div>
            <div class="benefit_item">Ograničene zalihe</div>
            <div class="benefit_item">Plaćanje po preuzimanju</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena za 1 komad:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena za 1 komad sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <ul>
            <li>Jednostavno seckanje namirnica bez nereda</li>
            <li>Praktičnost bez nepotrebnih kablova i potrošnje energije</li>
            <li>Oštri noževi seckaju sve na sitne komadiće za tren oka</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">URADITE 12 PUTA BRŽE I BEZ NEREDA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Hirurški oštro sečivo</li>
            <li>Brzo i lako seckanje na sitnije i krupnije komade</li>
            <li>Bez električne energije, a daje iste rezultate</li>
            <li>Ručica za povlačenje i rotaciju noža</li>
            <li>Secite voće, povrće ili šunku po želji</li>
            <li>Idealno je za sečenje luka</li>
            <li>Ne zahteva fizičku snagu</li>
            <li>Jedno povlačenje konopca jednako secka 12 puta brže nego običnim nožem</li>
            <li>Materijal: ABS plastika + nerđajući čelik</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">SPEEDY CHOPPER</h2>
        <img class="gif_image" src="{{ asset('/') }}dailysharkFiles/speedychopper/sli-5.jpg" alt="">
        <p class="text">
            Ova mašina za seckanje ima hirurški oštar nož koji fino secka sve prehrambene proizvode.
            <br><br>
            Ne zahteva snagu.<br>
            Pomoću Speedy Chopper uređaja možete efikasno da pripremate hranu uz minimalan napor.
            <br><br>
            Hirurški oštar nož sve vreme seče hranu dok povlačite konopac. Oštrice su postavljene u bubanj i nema mogućnosti da se posečete.
            Potpuno je bezbedan. Napravljen je od materijala visokih performansi i veoma je izdrživ.
            Sečivo je napravljeno od nerđajućeg čelika, a kućište od plastike visokih performansi. Lako se čisti. Samo isperite vodom i obrišite krpom.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">SPEEDY CHOPPER</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/11.jpg" alt="">
                <div class="text_block">
                    <p>Idealan je za sve vrste seckanja voća i povrća.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/12.jpg" alt="">
                <div class="text_block">
                    <p>Odlično secka luk i šunku.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/speedychopper/13.jpg" alt="">
                <div class="text_block">
                    <p>Trenutno najprodavaniji proizvod na našem tržištu.</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </section>
    <section class="reviews4_section">
        <h2 class="title">Utisci naših kupaca</h2>
        <div class="reviews_stats_block">
            <p><b>98%</b> kupaca preporučuje ovaj proizvod</p>
            <div class="line"></div>
        </div>
        <div class="reviews_list4 owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(1).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Kristina Teofilović</div>
                    <p>Wow... neverovatan proizvod.
                        Volim da kuvam, ali uvek mi bude muka od seckanja luka i ostalih namirnica.
                        Sa ovim proizvodom sam potpuno oduševeljena i više nemam tih problema.
                        Brzo, uredno i čisto... Sve preporuke!</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(2).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Julija Ponoš</div>
                    <p>Pristupačna cena, praktičan i kvalitetan proizvod i brza dostava. Definitivno ću ga preporučiti prijateljima!</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(3).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Ana Krstović</div>
                    <p>Odlična seckalica! Efikasnija je nego što sam mislila i uopšte ne zahteva fizičku snagu. Veoma sam zadovoljna ovom kupovinom, dobro utrošen novac!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Speedy Chopper?</h2>
        <div class="order_steps_list1 clearfix">
            <div class="step_item">
                <h4>PORUČIVANJE</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <h4>POTVRĐIVANJE</h4>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <h4>SLANJE</h4>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <h4>PLAĆANJE</h4>
                <p>Plaćate po pouzeću kuriru brze pošte</p>
            </div>
        </div>
    </section>
    <section class="offer_section offer3">
        <div class="title_block">
            <h3 class="main_title"></h3>
            <p class="subtitle">SPEEDY CHOPPER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/speedychopper/bg-bottom.jpg" alt="">
            <div class="discount_block">
                <div class="value">40%</div>
                <div class="text">popusta</div>
            </div>
        </div>
        <div class="benefits_list clearfix">
            <div class="benefit_item">100% garancija kvaliteta</div>
            <div class="benefit_item">Ograničene zalihe</div>
            <div class="benefit_item">Plaćanje po preuzimanju</div>
        </div>
        @foreach($prices as $q => $singlePrice)
            <div class="price_block clearfix price_holder" data-quantity="{{$q}}">
                <div class="price_item old">
                    <div class="text">Redovna cena za {{$q}} {{ $q === 1 ? 'komad' : 'komada' }}</div>
                    <div class="value">
                        {{ $singlePrice['originalPrice'] }}
                        {{ $singlePrice['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text"><span>Cena sa popustom za {{$q}} {{ $q === 1 ? 'komad' : 'komada' }}</span></div>
                    <div class="value">
                        {{ $singlePrice['amount'] }}
                        {{ $singlePrice['currency'] }}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="freeShippingHolder">
            <p>+ BESPLATNA DOSTAVA</p>
        </div>
        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <input class="field" type="text" name="shipping_address" placeholder="Adresa">
            <input class="field" type="text" name="shipping_city" placeholder="Grad">
            <select name="quantity" id="quantity" class="field quantity" required style="width: 440px !important;">
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
            <button class="button" type="submit">Poručite sada</button>
        </form>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/cookinghammer/scripts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#order_form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            $prices.hide();
            $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

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
