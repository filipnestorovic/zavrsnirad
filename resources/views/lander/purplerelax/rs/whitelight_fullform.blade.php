<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/whitelight/7jjaf-u_.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;family=Roboto+Condensed:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/whitelight/style.css">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title">WHITE LIGHT</h1>
        <h2 class="main_subtitle">SET ZA IZBELJIVANJE ZUBA</h2>
        <div class="box">
            <img src="{{ asset('/') }}purplerelaxFiles/whitelight/mr4kp5a7.jpg" alt="">
        </div>
        <div class="price_block clearfix">
            <div class="old">
                Redovna cena:
                <p><span class="al-cost-promo">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span></p>
            </div>
            <div class="new">
                Cena sada:
                <p><span class="al-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span></p>
            </div>
            <div class="sale">
                Popust <span>40%</span>
            </div>
        </div>
        <ul class="ofr_bull">
            <li>Izbeljuje zube</li>
            <li>Deluje efikasno bez bolova i nelagodnosti</li>
            <li>Ne izaziva zapaljenske reakcije i ne povećava osetljivost zuba</li>
        </ul>
        <div class="action_block">
            <a href="#order_form" class="button-m">PORUČITE SA 40% POPUSTA</a>
            <div class="prod_count">Ostala još <span class="js-countdown">4</span> promotivna paketa</div>
            <p style="padding: 20px 45px; color: cornsilk;">* proizvod je namenjen osobama starijom od 18 godina</p>
        </div>
    </header>
    <section class="sect2">
        <h2 class="title">WHITE LIGHT<br><span>BLISTAV OSMEH - TAKO JE LAKO</span></h2>
        <p>jedan od načina da postanete vlasnik holivudskog osmeha, i što je najvažnije bez skupih procedura.</p>
        <ul class="list1">
            <li>Izbeljuje zube</li>
            <li>Omogućava da imate svež dah tokom celog dana</li>
            <li>Sastav: prečišćena voda, denaturisani alkohol, PEG-8, PVP, vodonik peroksid 0,1%</li>
        </ul>
        <a href="#order_form" class="button-m">PORUČITE SA 40% POPUSTA</a>
        <p style="padding: 20px 45px;">* proizvod je namenjen osobama starijom od 18 godina</p>
    </section>
    <section class="sect4">
        <h2 id="opys" class="title ttl2">ZASLEPLJUJUĆE BELI ZUBI</h2>
        <ul class="benef3">
            <li>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/whitelight/yzjuzy5z.gif" alt=""></div>
                <div class="text">
                    <div class="head">
                        <span>1</span>
                        <p>EFIKASNO IZBELJIVANJE</p>
                    </div>
                    <p>Izbeljivanje na duže vreme, sa nizom nijansi, od prirodne do čisto bele boje</p>
                </div>
            </li>
            <li>
                <div class="text">
                    <div class="head">
                        <span>2</span>
                        <p>NE POVEĆAVA OSETLJIVOST ZUBA</p>
                    </div>
                </div>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/whitelight/7q7zcb_s.jpg" alt=""></div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/whitelight/__zwso6r.jpg" alt=""></div>
                <div class="text">
                    <div class="head">
                        <span>3</span>
                        <p>ANTIBAKTERIJSKA ZAŠTITA</p>
                    </div>
                    <p>Gel neutrališe jedinjenja koja sadrže sumpor iz molekula i bakterija</p>
                </div>
            </li>
        </ul>
        <div class="alert">
            <div class="box">
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/5d9hlg8s.jpg" alt="" class="bef_after">
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/h-ew5s4f.png" alt="" class="prod">
            </div>
            <a href="#order_form" class="button-m">PORUČITE SA 40% POPUSTA</a>
            <p style="padding: 20px 45px;">* proizvod je namenjen osobama starijom od 18 godina</p>
        </div>
    </section>
    <section class="sect5">
        <h2 id="perevagy" class="title ttl2">ZAŠTO ĆEŠ BITI <span>ZADOVOLJAN KORIŠĆENJEM</span> WHITE LIGHT SETA ZA
            IZBELJIVANJE ZUBA
        </h2>
        <ul class="list2">
            <li>Nema karakterističan neprijatan ukus</li>
            <li>Ne stvara osećaj prljavih zuba</li>
            <li>Ne iritira nervne završetke</li>
            <li>Ne sadrži opasna i štetna hemijska jedinjenja</li>
        </ul>
    </section>
    <section class="sect6">
        <h2 id="howto" class="title ttl2"><span>TRI LAKA KORAKA</span> ZA TVOJ HOLIVUDSKI OSMEH</h2>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/9lqqju6o.jpg" alt="">
                <div class="text">
                    <span>Korak 1</span>
                    <p>Namažite gel na mesto predviđeno uputstvom</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/1ibre-2y.gif" alt="">
                <div class="text">
                    <span>Korak 2</span>
                    <p>Prislonite na zube i uključite svetlosni transmiter</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/damw4iyl.jpg" alt="">
                <div class="text">
                    <span>Korak 3</span>
                    <p>Držite 10 minuta i gotovo</p>
                </div>
            </li>
        </ul>
        <div class="alert">Nemojte jesti i piti 30 minuta nakon postupka izbeljivanja</div>
        <a href="#order_form" class="button-m">PORUČITE SA 40% POPUSTA</a>
        <p style="padding: 20px 45px;
               color: cornsilk;">* proizvod je namenjen osobama starijom od 18 godina</p>
    </section>
    <section class="sect7">
        <h2 class="title"><span>Utisci zadovoljnih kupaca</span></h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/x1fe09k2.jpg" alt="">
                <span>„... zubi ostaju savršeno beli”</span>
                <p>Odlučila sam da isprobam ovaj set za izbeljivanje zuba. Mislila sam da nakon upotrebe zubi neće biti
                    dugo beli, ali sam se iznenadila pozitivnim efektom.
                    7 dana zubi apsolutno sijaju.
                </p>
                <p class="name">Marina</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/0j9n5kg1.jpg" alt="">
                <span>"Toplo preporučujem ..."</span>
                <p>Pazite kako sada možete izbeliti zube! Toplo preporučujem devojkama poput mene koje sanjaju o
                    holivudskom osmehu a plaše se zubara.
                </p>
                <p class="name">Olga</p>
            </div>
            <a href="#order_form" class="button-m">PORUČITE SA 40% POPUSTA</a>
            <p>* proizvod je namenjen osobama starijom od 18 godina</p>
        </div>
    </section>
    <section class="sect8">
        <h2 id="faq" class="title">ODGOVORI NA <span>ČESTO POSTAVLJANA PITANJA</span></h2>
        <div class="faq">
            <div class="faq_item">
                <div class="quest">Koliko dugo nakon upotrebe može da se jede?</div>
                <div class="answer">Nakon 30 minuta od završetka tretmana.</div>
            </div>
            <div class="faq_item">
                <div class="quest">Da li je White Light set bezbedan?</div>
                <div class="answer">Da, potpuno je bezbedan i ne pravi nikakve štetne efekte.</div>
            </div>
            <div class="faq_item">
                <div class="quest">Da li se može primenjivati na veštačkim zubima?</div>
                <div class="answer">Apsolutno je moguće primenjivati ga kako na prirodnim zubima, tako i na veštačkim.
                    Podjednako je efikasan u izbeljivanju.
                </div>
            </div>
        </div>
    </section>
    <section class="sect9">
        <img src="{{ asset('/') }}purplerelaxFiles/whitelight/kbg8xl_n.jpg" alt="">
    </section>
    <section class="sect10">
        <h2 class="title"><span>KAKO MOGU DA PORUČIM?</span></h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/2u-7w1jz.png" alt="">
                <span>1</span>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/5p3facfy.png" alt="">
                <span>2</span>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/8jwcrpcx.png" alt="">
                <span>3</span>
                <p>Šaljemo pošiljku brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/whitelight/a40-vq_v.png" alt="">
                <span>4</span>
                <p>Plaćate kuriru brze pošte po prijemu paketa</p>
            </li>
        </ul>
    </section>
    <section class="offer_section bottom">
        <h1 class="main_title">WHITE LIGHT</h1>
        <h2 class="main_subtitle">SET ZA IZBELJIVANJE ZUBA</h2>
        <div class="box">
            <img src="{{ asset('/') }}purplerelaxFiles/whitelight/mr4kp5a7.jpg" alt="">
        </div>
        <div class="price_block clearfix">
            <div class="old">
                Redovna cena:
                <p><span class="al-cost-promo">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span></p>
            </div>
            <div class="new">
                Cena sada:
                <p><span class="al-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span></p>
            </div>
            <div class="sale">
                Popust<span>40%</span>
            </div>
        </div>
        <div class="action_block">
            <div class="action_text">
                <span>UNESITE PODATKE ZA DOSTAVU</span>
                <p>i iskoristite popust</p>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="main-order-form m1-form al-form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Ime i prezime" id="name" required="">
                    <label for="name"></label>
                </div>
                <div class="input-wrapper">
                    <input type="tel" name="phone" placeholder="Telefon" id="phone" required="">
                    <label for="phone"></label>
                </div>
                <div class="input-wrapper">
                    <input type="text" name="shipping_address" placeholder="Adresa" id="shipping_address" required="">
                    <label for="shipping_address"></label>
                </div>
                <div class="input-wrapper">
                    <input type="text" name="shipping_city" placeholder="Grad" id="shipping_city" required="">
                    <label for="shipping_city"></label>
                </div>
                <input class="button-m" value="ZAVRŠI PORUDŽBINU" type="submit">
            </form>
            <div class="prod_count">Ostala još <span class="js-countdown">4</span> promotivna paketa</div>
            <p style="padding: 20px 45px;
                  color: cornsilk;">* proizvod je namenjen osobama starijom od 18 godina</p>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        /* scroll */
        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(_href).offset().top + "px"
            });
            return false;
        });
        !function (i) {
            var o, n;
            i(".faq_item .quest").on("click", function () {
                o = i(this).parents(".faq_item"), n = o.find(".answer"),
                    o.hasClass("active_block") ? (o.removeClass("active_block"),
                        n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
                        o.siblings(".active_block").removeClass("active_block").children(
                            ".info").stop(!0, !0).slideUp())
            })
        }(jQuery);
    });
</script>
@include('components.pixel_footer')
</body>
</html>
