<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=480"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/xmop360/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/xmop360/styles.css"/>
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
    </style>
</head>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">X MOP 360</h1>
        <div class="info_block">
            <p class="subtitle">Sa krpom od mikrofibera</p>
            <img src="{{ asset('/') }}dailysharkFiles/xmop360/b1.jpg" alt="x360 Mop"/>
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena na popustu:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-2.jpg"
                     alt="x360 Mop"/>
                <p>Funkcija centrifuge i ispiranja</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-21.jpg"
                     alt="x360 Mop"/>
                <p>Super upijajuća mikrovlakna</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-15.jpg"
                     alt="x360 Mop"/>
                <p>Rotacija ručke za <br> 360 stepeni</p>
            </div>
        </div>
        <a href="#order_form" class="button">PORUČITE SA 40% POPUSTA</a>
        <div class="products_count">Ostalo je još <b>8</b> komada na stanju</div>
        <br>
        <br>
        <img src="{{ asset('/') }}dailysharkFiles/xmop360/1.gif" alt="x360 Mop"/>
    </header>
    <section class="description_section s_4">
        <h2 class="title">MAGIČNA KRPA OD MIKROVLAKANA PRUŽA <span>PERFEKTNO ČIŠĆENJE <br> SVIH VRSTA PODOVA</span></h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-5.jpg"
             alt="x360 Mop"/>
        <p>Nije tajna da niko ne voli da pere pod i nosi teške kante vode, saginjući se da opere prljavštinu i ostatke ispod kreveta,
            fotelja i drugog nameštaja. U slučaju običnih krpa, voda na podu ostaje da se prirodno osuši i tako ostaju mrlje.
            Mirkofiber krpa na ovom mopu pokupi svaku kapljicu vode i ostavi blistavo čist pod.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-14.jpg"
             alt="x360 Mop"/>
        <p>Ručka je okretna za 360 stepeni - nema više klečanja na podu radi čišćenja ispod nameštaja. Zahvaljujući jedinstvenom sistemu
            X MOP 360 čisti svaki deo prostorije jedin potezom!</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-15-2.jpg"
             alt="x360 Mop"/>
        <p>Pored toga, mop ima uske produžetke kojima možete pristupiti i sitnim uglovima oko stopica nameštaja i nogara od stolica i stolova.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-17-2.jpg"
             alt="x360 Mop"/>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-16.jpg"
             alt="x360 Mop"/>
        <p>Sa ovakvim sistemom vaš pod će biti savršeno čist.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-26.jpg"
             alt="x360 Mop"/>
        <p>Čišćenje će biti zadovoljstvo, a ne težak i mukotrpan posao.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-2-2.jpg"
             alt="x360 Mop"/>
        <p>Mop je napravljen od nerđajućeg čelika i plastike. Poseduje sistem za ceđenje jednim potezom.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-6.jpg"
             alt="x360 Mop"/>
        <p>Mali je, i kada se rasklopi neće zauzimati mnogo prostora</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-10.jpg"
             alt="x360 Mop"/>
        <p>Krpa ne ostavlja tragove za sobom i štedi vam vreme.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-8.jpg"
             alt="x360 Mop"/>
        <p>X MOP 360 je pogodan za pranje raznih površina: pločica, drvenog parketa, mermera, granita, pa čak i betona.</p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-4.jpg"
             alt="x360 Mop"/>
        <a href="#order_form" class="button">PORUČITE SA 40% POPUSTA</a>
    </section>
    <section class="s_5">
        <div class="content">
            <h2 class="title">KRPA OD MIKROVLAKANA <span>PRIVLAČI PRLJAVŠTINU <br> POPUT MAGNETA</span></h2>
            <p>Super upijajuća mikrofiber krpa upija do 4 puta više vode i prljavštine za maksimalnu čistoću i podove bez mrlja.</p>
            <img src="{{ asset('/') }}dailysharkFiles/xmop360/shvabra-dlya-pola-iz-mikro-fibri-21-2.jpg"
                 alt="x360 Mop"/>
            <p>Lako se uklanja i ponovo postavlja kada je potrebno.</p>
            <a href="#order_form" class="button">PORUČITE SA 40% POPUSTA</a>
        </div>
    </section>
    <section class="reviews3_section">
        <h2 class="title">UTISCI <span>KUPACA</span></h2>
        <div class="reviews_list">
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Anita</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Ja sam veoma uredna osoba. Volim kada je stan čist i redovno čistim kuću. Ne mogu reći da mi je ranije taj proces bio težak,
                    ali mi je sada zadovoljstvo da čistim. Idealno čisti čak i najteže dostupna mesta. Čišćenje ispod nameštaja više uopšte nije problem.
                    Pogodan dizajn za sklapanje je za svaku pohvalu. Definitivno preporučujem ovaj mop!</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r1.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Krstimir</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Dobar kvalitet, veoma lako čistim stan. Sa zadovoljstvom ću kupiti još jedan za svoju majku.</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r2.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Bojan</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Proizvod je isti kao u opisu, dobar materijal i kvalitet. Sa ovim mopom čišćenje skoro da ne zahteva nikakav napor.
                    Odličan je, i mnogo je olakšao posao meni i mojoj ženi.</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r3.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Ivana</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Sve je kao na fotografiji i opisu! Savršeno radi svoj posao - hvala!</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r4.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Bojana</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Proizvod je dobro upakovan, brza isporuka u roku od 3 dana. X MOP 360 je veoma jednostavna za upotrebu. Oduševljena sam.</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r5.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Dijana</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Dobro radi svoj posao. Isporučeno je za samo 2 dana. Preporučujem kupovinu ovog mopa.</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r6.jpg" alt="x360 Mop"/>
                </div>
            </div>
            <div class="review_item">
                <div class="author_block clearfix">
                    <div class="author_info">
                        <div class="name">Ranko</div>
                    </div>
                    <div class="info">
                        <div class="rating"></div>

                    </div>
                </div>
                <p>Moja supruga i ja čekamo bebu. Ja radim 2 posla i stoga apsolutno nemamo vremena za čišćenje. Ranije mi je brisanje poda bila večnost
                    i težak posao, ali sada smo sa ovim proizvodom možemo to da uradimo za 5 minuta. Preporučujem svima koji nemaju mnogo vremena za čišćenje!</p>
                <div class="images_block clearfix">
                    <img src="{{ asset('/') }}dailysharkFiles/xmop360/r7.jpg" alt="x360 Mop"/>
                </div>
            </div>
        </div>
    </section>
    <section class="s_9">
        <div class="toggle">
            <div class="toggle-item">
                <input class="toggle-box" id="identifier-4" type="checkbox"/>
                <label class="toggle-label" for="identifier-4">Kako poručiti ovaj mop?</label>
                <div>
                    <div class="order-custom">
                        <img src="{{ asset('/') }}dailysharkFiles/xmop360/independence.png" alt=""
                             class="order-custom__img"/>
                        <p class="order-custom__description">
                            Ostavite podatke za dostavu na našem sajtu
                        </p>
                    </div>
                    <div class="order-custom">
                        <img src="{{ asset('/') }}dailysharkFiles/xmop360/phone.png" alt="" class="order-custom__img"/>
                        <p class="order-custom__description">
                            Kontaktiraćemo Vas da potvrdimo porudžbinu
                        </p>
                    </div>
                    <div class="order-custom">
                        <img src="{{ asset('/') }}dailysharkFiles/xmop360/shipped.png" alt=""
                             class="order-custom__img"/>
                        <p class="order-custom__description">
                            Šaljemo kurirskom službom u roku od 1-2 radna dana
                        </p>
                    </div>
                    <div class="order-custom">
                        <img src="{{ asset('/') }}dailysharkFiles/xmop360/payment-method.png" alt=""
                             class="order-custom__img"/>
                        <p class="order-custom__description">
                            Plaćate kuriru prilikom preuzimanja paketa
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer_section offer3 order">
        <h3 class="main_title">X MOP 360</h3>
        <div class="info_block">
            <p class="subtitle">Sa krpom od mikrofibera</p>
            <img src="{{ asset('/') }}dailysharkFiles/xmop360/b10.jpg" alt="x360 Mop"/>
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
                <div class="text">Cena na popustu:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="action_text">
            <span>Podaci za dostavu</span>
            <p>U najkraćem roku će vas kontaktirati naši agenti kako bi potvrdili porudžbinu</p>
        </div>
        <form id="order_form" class="main-order-form order_form my-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required=""/>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required=""/>
            <button class="button">Poručite sada</button>
        </form>
        <div class="products_count">Ostalo je još <b>8</b> komada na stanju</div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
