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
        .offer_section .title_block .subtitle {
            letter-spacing: 1px;
            line-height: 2.2rem;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <div class="title_block">
            <h1 class="main_title"></h1>
            <p class="subtitle">DOLMER <br> APARAT ZA MOTANJE SARMI</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/dolmer/bg-bottom.jpg" alt="">
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
            <li>Jednostavno motanje sarmi bez nereda</li>
            <li>Praktičnost bez nepotrebnog gubljenja vremena</li>
            <li>1 sarma se pravi jednim potezom</li>
        </ul>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count">* Preostalo još <b>11</b>komada na akciji</div>
    </header>
    <section class="problems_section dark_theme">
        <h2 class="title">SAVIJTE SARMU 12 PUTA BRŽE I BEZ NEREDA</h2>
        <div class="reviews_list4 owl-carousel">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/sli-1.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/sli-2.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/sli-3.jpg" alt="">
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/sli-4.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="list2_section dark_theme">
        <ul class="list2 marker2">
            <li>Najprodavaniji proizvod u Turskoj</li>
            <li>Može da se koristi kupus ili bilo koja druga zelen</li>
            <li>Bez električne energije</li>
            <li>Potpuno jednostavno za korišćenje</li>
            <li>Deca sa ovim mogu da savijaju sarmu</li>
            <li>Ne zahteva fizičku snagu</li>
            <li>Nema više višečasovnog sedenja za stolom</li>
            <li>Savršeno pravilne i identične sarme</li>
            <li>Materijal: ABS plastika + poliestersko platno</li>
        </ul>
    </section>
    <section class="description_section">
        <h2 class="title">DOLMER <br> APARAT ZA MOTANJE SARMI</h2>
        <img class="gif_image" src="{{ asset('/') }}dailysharkFiles/dolmer/sli-5.jpg" alt="">
        <p class="text">
            Dugo godina ste verovatno motali sarmu na tradicionalni i iscrpljući načim pri čemu ste satima sedeli za stolom.
            <br><br>
            Sada konačno postoji efikasno rešenje. Pomoću ovog uređaja možete efikasno da pravite sarmu uz minimalan napor
            <br><br>
            Uređaj je napravljen tako da savršeno oblikuje sarmu i pravi identične primerke kao sa reklame.
            Nema više neravnomernih veličina, raspadanja, nervoze i pratećih stvari pri pripremi sarme.
            Sada je moguće jednim potezom napraviti jednu sarmu. Neverovatno zar ne.
            Od kako smo se pojavili na tržištu Srbije, naš proizvod je ušao u skoro svaku kuću. Ukoliko do sada niste kupili Dolmer, učinite to odmah
            i videćete da ćete sa zadovoljstvom praviti sarmu.
        </p>
    </section>
    <section class="benefits_section dark_theme">
        <h2 class="title">DOLMER <br> APARAT ZA MOTANJE SARMI</h2>
        <div class="benefits_list3">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/11.jpg" alt="">
                <div class="text_block">
                    <p>Idealan je za svako domaćinstvo</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/12.jpg" alt="">
                <div class="text_block">
                    <p>Laserski je precizan, napravite 100 sarmi i svaka će biti ista</p>
                </div>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/dolmer/13.jpg" alt="">
                <div class="text_block">
                    <p>Trenutno najprodavaniji proizvod na našem i Turskom tržištu</p>
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
                    <div class="author_info">Kristina Jovanović</div>
                    <p>Wow... neverovatan proizvod. Stalno sebi spremam sarmu, barem jednom nedeljno. Uvek sam se mučila oko toga, ali sada to radim sa zadovoljstvom.
                        Nije bila retkost da se iznerviram i batalim sve. Od kada je Dolmer ušao u moju kuću, pravljenje sarme postalo je prava sreća.
                        Sve preporuke za ovaj proizvod!</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(2).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Julija Radić</div>
                    <p>Pristupačna cena, praktičan i kvalitetan proizvod i brza dostava. Definitivno ću ga preporučiti prijateljima!</p>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/cookinghammer/rew(3).jpg" alt="">
                <div class="text_block">
                    <div class="author_info">Ana Krstović</div>
                    <p>Sjajan proizvod! Sada pravim sarmu bez muke. Nisam rekla dečku da imam ovaj proizvod, fasciniran je kako je svaka sarma identična i prelepa.
                        Definitivno dobro utrošen novac.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order_steps_section">
        <h2 class="title">Kako poručiti Dolmer?</h2>
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
            <p class="subtitle">DOLMER <br> APARAT ZA MOTANJE SARMI</p>
        </div>
        <div class="image_block">
            <img class="offer_image" src="{{ asset('/') }}dailysharkFiles/dolmer/bg-bottom.jpg" alt="">
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
