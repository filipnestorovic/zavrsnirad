<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/cookinghammer/styles.css">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/cookinghammer/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <div class="title_block">
            <h1 class="main_title"></h1>
            <p class="subtitle">VEGETABLE CUTTER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/vegetablecutter/bg-bottom.jpg" alt="">
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
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <ul>
            <li>Jednostavna rendanje i seckanje namirnica bez nereda</li>
            <li>Praktičnost bez nepotrebnih kablova i potrošnje električne energije</li>
            <li>Jednostavno menjanje dodataka za razne namene</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">URADITE 12 PUTA BRŽE I BEZ NEREDA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>3 različita nastavka</li>
            <li>Brzo i lako rendanje na sitnije i krupnije komade</li>
            <li>Bez električne energije, a daje iste rezultate</li>
            <li>Vakumska podloga se fiksira protiv klizanja</li>
            <li>Secite voće ili povrće po želji</li>
            <li>Idealna je za sečenje sira</li>
            <li>Ne zahteva fizičku snagu</li>
            <li>Okretanje jednog kruga jednako je sečenju 12 puta</li>
            <li>Materijal: ABS plastika + nerđajući čelik</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">VEGETABLE CUTTER</h2>
        <img class="gif_image" src="{{ asset('/') }}dailysharkFiles/vegetablecutter/sli-5.jpg" alt="">
        <p class="text">
            Ova mašina za rendanje/seckanje ima 3 lako zamenjiva noža različite namene, uključujući fino, grubo ribanje / usitnjavanje i rezanje, zaista je dobar alat u vašoj kuhinji.
            <br><br>
            Ne zahteva snagu.<br>
            Pomoću ove rotacione mašina možete efikasnije da pripremite hranu uz minimalan napor.
            <br><br>
            Valjak od 360 stepeni sve vreme seče hranu dok okrećete dršku.
            Sve oštrice su postavljene u bubanj, te nije potrebno dodirivanje lopatica rukom.
            Valjak je napravljen od materijala visokih performansi, izdržljiv je i sprečava povrede ruku.
            Bionicvakuum silikonska baza za usisavanje može čvrsto držati rezač, čineći ceo proces rada stabilnim.
            Sečivo je napravljeno od nerđajućeg čelika, a kućište od plastike visokih performansi.
            Lako se čisti. Samo isperite vodom i obrišite krpom.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">VEGETABLE CUTTER</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/11.jpg" alt="">
                <div class="text_block">
                    <p>Idealan je za sve vrste salata od voća i povrća.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/12.jpg" alt="">
                <div class="text_block">
                    <p>Odlično seče krompir za pitu i sir za pizzu.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/vegetablecutter/13.jpg" alt="">
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
                    <p>Wow... neverovatan proizvod. Stalno sebi spremam razne vitaminske i voćne salate, i uvek sam imala muku kada koristim obično rende.
                        Nije bila retkost da se posečem, a da vam ne govorim što isprljam kuhinju. Sa ovim proizvodom sam potpuno oduševeljena.
                        Brzo, uredno i čisto...sve preporuke!</p>
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
                    <p>Sjajno rende. Kada pravim baklavu, sameljem orahe za čas posla. Veoma sam zadovoljna ovom kupovinom, dobro utrošen novac!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Vegetable Cutter?</h2>
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
            <p class="subtitle">VEGETABLE CUTTER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/vegetablecutter/bg-bottom.jpg" alt="">
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
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Cena sa popustom</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <input class="field" type="text" name="shipping_address" placeholder="Adresa">
            <input class="field" type="text" name="shipping_city" placeholder="Grad">
            <button class="button" type="submit">Poručite sada</button>
        </form>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/cookinghammer/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
