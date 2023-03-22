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
            <p class="subtitle">SILICONE EGG BOIL</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/bg-bottom.jpg" alt="">
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
            <li>Priprema savršeno kuvanog jaja nikad nije bila brža, lakša i jednostavnija</li>
            <li>Sipajte žumance i belance u modlu, zatvorite i stavite jaja da se kuvaju</li>
            <li>Bez odstranjivanja ljuske i oštećivanja belanceta</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">SKUVAJTE SAVRŠENO PRAVILNA I GLATKA JAJA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>U pakovanju se nalazi 6 modli</li>
            <li>Pripremite kuvano jaje bez nereda</li>
            <li>Ima čvrsti poklopac sa drškom</li>
            <li>Kalupe sa jajima možete čuvati u frižideru</li>
            <li>Kalupi su kvalitetni – silikonski</li>
            <li>Možete ih prati i u mašini za sudove</li>
            <li>Nisu namenjeni za mikrotalasnu</li>
            <li>Otporni na mirise i mrlje</li>
            <li>Ne ostavlja tragove mikroplastike</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">SILICONE EGG BOIL</h2>
        <img class="gif_image" src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/sli-5.jpg" alt="">
        <p class="text">
            Silicone Egg Boiler jednostavan je i praktičan način za pripremu savršeno kuvanih jaja bez guljenja ljuske.
            Ovaj proizvod koristi <b>BPA-free silikonski materijal koji je bezbedan za upotrebu.</b>
            U nastavku vam predstavljamo kako da koristite silikonske kalupe za kuvanje jaja:
            <br><br>
            Prvo, proverite da li su silikonski kalupi čisti i suvi pre nego što počnete sa pripremom jaja.
            Lagano premažite unutrašnjost kalupa sa malo ulja da biste sprečili lepljenje jaja za kalup.
            Pažljivo razbijte jaje i sipajte sadržaj u silikonski kalup.
            Zatvorite kalup poklopcem koji dolazi uz silikonski kalup za kuvanje jaja.
            Stavite kalupe u lonac sa ključalom vodom, tako da voda prekrije do 1 cm od vrha kalupa.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">SILICONE EGG BOIL</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/11.jpg" alt="">
                <div class="text_block">
                    <p>Ako želite, možete dodati začine po svom ukusu, kao što su so, biber, seckani peršun ili čak komadiće slanine.</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/12.jpg" alt="">
                <div class="text_block">
                    <p>Možete koristiti cediljku ili parni umetak kako biste držali kalupe iznad vode</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/13.jpg" alt="">
                <div class="text_block">
                    <p>Trenutno najprodavaniji proizvod na našem tržištu</p>
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
                    <p>Wow...neverovatan proizvod. Stalno sebi spremam kuvana jaja i najveća glavobolja mi je bilo guljenje. Dešavalo mi se da sa ljuskom odstranim po pola jajeta.
                        Da ne pričam o prljanju kuhinje. Sa ovim proizvodom sam potpuno oduševljena. Brzo, uredno i čisto. Sve preporuke!</p>
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
                    <p>Sjajan proizvod. Ne gubim više vreme na ljuštenje jaja. Veoma sam zadovoljna ovom kupovinom, dobro utrošen novac.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Silicone Egg Boil?</h2>
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
            <p class="subtitle">SILICONE EGG BOIL</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/siliconeeggboil/bg-bottom.jpg" alt="">
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
