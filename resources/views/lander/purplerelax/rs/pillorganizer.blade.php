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
            <p class="subtitle">PILL ORGANIZER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}purplerelaxFiles/pillorganizer/bg-bottom.jpg" alt="">
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
            <li>Jednostavno raspoređivanje lekova i suplemenata po danima</li>
            <li>Praktično bez mogućnosti greške</li>
            <li>Voda i čaša uvek pri ruci</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">LEKOVI I VITAMINI UVEK SPREMNI I PRI RUCI</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Nema nošenja nepotrebnih kutija</li>
            <li>Idealno za starije osobe</li>
            <li>Bez mogućnosti da se pomešaju lekovi</li>
            <li>Svi lekovi za celu nedelju na jednom mestu</li>
            <li>Voda i čaša pri ruci</li>
            <li>Raspored po danima</li>
            <li>Odlično za putovanja</li>
            <li>Potpuno higijenski</li>
            <li>Kvalitetna ABS plastika</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">PILL ORGANIZER</h2>
        <img class="gif_image" src="{{ asset('/') }}purplerelaxFiles/pillorganizer/sli-5.jpg" alt="">
        <p class="text">
            Živimo u brzom vremenu i godinama kada je neophodno uzimati dovoljno suplemenata i vitamina, a to je nekada teško ispratiti.
            Često sa sobom nosimo kutije i bočice koje nam smetaju i koji su potpuno nepraktični.
            Stariji ljudi vrlo često pomešaju lekove ili preskoče terapiju, što može da dovede do problema i komplikacija.
            <br><br>
            Sa Pill Organizer bočicom tih problema nema. Sve lekove možete da rasporedite po danima i uvek imate uvid šta ste popili a šta ne.
            Za starije osobe je odlično jer uvek na jednom mestu imaju lekove vodu i čašu.
            Pill Organizer je odlična stvar, do sada je ovaj proizvod poručilo preko 2000 ljudi.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">PILL ORGANIZER</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/11.jpg" alt="">
                <div class="text_block">
                    <p>Idealno je za starije osobe</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/12.jpg" alt="">
                <div class="text_block">
                    <p>Super stvar za raspoređivanje vitamina, lekova i suplemenata</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/pillorganizer/13.jpg" alt="">
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
                    <div class="author_info">Katarina Petrović</div>
                    <p>Super stvar...Stalno uzimam vitamine i suplemente i više mi je bilo preko glave da nosim kutijice sa sobom.
                        Sa ovom stvarčicom sam super organizovana. Sve mi je pri ruci i lako nosim sa sobom. Sve preporuke!</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(2).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Julija Ponoš</div>
                    <p>Kupila sam Pill Organizer baki i mnogo mi je zahvalna. Raspored lekova joj je bio veliki problem, a sada je sa ovim rešeno sve. :)</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(3).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Ana Jović</div>
                    <p>Majci sam kupila ovaj proizvod i baš je zadovoljna. Konačno ima sve lekove na jednom mestu i ne mora da misli šta je popila, a šta ne.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Pill Organizer?</h2>
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
            <p class="subtitle">PILL ORGANIZER</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}purplerelaxFiles/pillorganizer/bg-bottom.jpg" alt="">
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
