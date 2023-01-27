<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/celluless/styles.css">
    <link rel="shortcut icon" href="">
    <style>
        .offer_section h2 {
            color: #1b7ac2;
        }

        @media only screen and (min-width: 424px) {
            .cellulite_types_section .photo_block img {
                width: 226px !important;
                margin-left: 200px;
            }

            .offer_section {
                padding: 40px 0 40px 0;
                height: auto;
                background: #fececa url({{ asset('/') }}purplerelaxFiles/bodysqueezer/desctop__offer_bg.png) center top no-repeat;
                background-size: cover;
                color: #fff;
            }

            .offer_section .info {
                float: right;
            }

            .offer_section .info li {
                float: right;
                background-color: #025271;
                padding: 30px 30px 10px 120px;
                background-position: 10px 10px !important;
                height: 106px;
            }

            .offer_section .discount {
                top: 125px;
                right: -10px !important;
            }

            .components_section {
                padding: 41px 0 43px 0;
                background: url({{ asset('/') }}purplerelaxFiles/bodysqueezer/components__product_image.png) center 130px no-repeat;
            }
        }

        @media only screen and (max-width: 424px) {
            .cellulite_types_section .photo_block img {
                width: 226px !important;
                margin-left: 36px;
            }

            .offer_section {
                height: auto;
                background: #fececa url({{ asset('/') }}purplerelaxFiles/bodysqueezer/mobile__offer_bg.png) center 20px no-repeat;
                padding-bottom: 20px;
                background-size: 520px auto;
                background-position-y: 50px;
            }

            .offer_section form {
                margin-top: 50px;
            }

            .offer_section .discount {
                top: 140px;
                right: 110px;
            }
        }
    </style>
</head>
<body>
<!-- offer -->
@include('components.display_errors')
<header class="offer_section">
    <div class="wrapper clearfix">
        <h2> MASAŽER <span style="color: #025271;">BODY SQUEEZER</span> - ZA SAVRŠENO TELO</h2>
        <div class="info">
            <ul>
                <li> Efekat nakon <span class="accent_color">prve upotrebe</span></li>
                <li> Izrađen od <span class="accent_color"> kvalitetnih materijala</span></li>
                <li><span class="accent_color"> Uklanja celulit</span> i zeteže kožu</li>
            </ul>
            <div class="discount"><span> Popust<b> 40%</b></span></div>
        </div>
        <form action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            {{--<div class="arrow"></div>--}}
            <div class="timer_block">
                <p class="description">FORMA ZA PORUDŽBINU</p>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    {{ $prices[1]['originalPrice'] }}<span>RSD</span>
                </div>
                <div class="price_item new">
                    {{ $prices[1]['amount'] }}<span>RSD</span>
                </div>
            </div>

            <input type="text" name="name" placeholder="Ime i prezime" required>
            <input type="tel" name="phone" placeholder="Broj telefona" required>
            <input type="text" name="shipping_address" placeholder="Adresa" required>
            <input type="text" name="shipping_city" placeholder="Grad" required>
            <button class="button" type="submit">PORUČITE ODMAH</button>
        </form>

    </div>
</header>
<!-- /offer -->
<!-- diseases -->
<section class="diseases_section">
    <div class="wrapper">

        <h2> Koja je <span class="accent_color"> opasnost</span> od celulita?</h2>

        <p> Poznato je da se celulit formira na mestima sa vrlo sporom cirkulacijom krvi. Ako se on na vreme ne reši,
            vremenom uzrokuje
            <b class="accent_color">slabljenje kapilarne mreže</b> i
            <b class="accent_color">nakupljanje tečnosti u međućelijskom prostoru.</b> To dovodi do razvoja onkoloških
            bolesti.
        </p>

        <p>Celulit se nalazi neposredno pre epidermisa i sprečava normalno delovanje elastinskih i kolagenih vlakana.
            Zbog toga dolazi do slabljenja
            funkcije limfnih i krvnih sudova. To može dovesti do razvoja <b class="accent_color">vaskularnih bolesti -
                ateroskleroze, ishemije i drugih.</b>
        </p>

        <div class="items_list diseases_list">

            <div class="item disease_item">
                <h3> NASTANAK KARCINOMA</h3>
            </div>

            <div class="item disease_item">
                <h3> TROMBOZA</h3>
            </div>

            <div class="item disease_item">
                <h3> ATEROSKLEROZA</h3>
            </div>
        </div>
    </div>
</section>
<!-- /diseases -->
<!-- cellulite types -->
<section class="cellulite_types_section">
    <div class="wrapper">

        <h2><span>VRSTE CELULITA</span></h2>

        <div class="types_list owl-carousel">

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/bodysqueezer/bodyproS1.jpg" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3>MASNI CELULIT</h3>
                    <p>Ova vrsta celulita se javlja kod ljudi sa <span>prekomernom težinom.</span> Obično se formira na
                        bokovima,
                        zadnjici i stomaku. Ovaj oblik deformacije potkožnog tkiva ne uzrokuje bol, ali vremenom može
                        dovesti
                        do <span>ozbiljnih posledica.</span></p>
                </div>
            </div>

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/bodysqueezer/bodyproS2.png" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3>VODENI CELULIT</h3>
                    <p>Pojavljuje se kod ljudi sa fizički <span>neaktivnim načinom života.</span> Njegovom nastanku
                        doprinosi i višak slane i začinjene hrane u ishrani.
                        Ovaj oblik je opasan ako dođe do prekomernog nakupljanja celulita jer je cirkulacija krvi u
                        pogođenim područjima poremećena, što može dovesti do <span>vaskularnih bolesti.</span></p>
                </div>
            </div>

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/bodysqueezer/bodyproS3.png" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3>VLAKNASTI CELULIT</h3>
                    <p>Ozbiljan poremećaj <span>formiranja potkožnog tkiva.</span> Sa takvim celulitom, koža postaje
                        bolna i tvrda na dodir.
                        Boja poprima plavkasti odsjaj. Ovaj oblik celulita vremenom postaje opasan,
                        i ako se ne deluje preventivno onda je <span>rizik od karcinoma u osnovi povećan.</span>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /cellulite types -->
<!-- effects -->
<section class="effects_section">
    <div class="wrapper">

        <h2> BORBA PROTIV CELULITA MOŽE DA POČNE <span>OVDE I ODMAH</span>
            <small>REZULTATI ĆE BITI IZNENAĐUJUĆE DOBRI</small>
        </h2>

        <p>Jedinstvenost proizvoda leži u činjenici da njegov sastav omogućava <span>rešavanje uzroka celulita</span> i
            trajno uklanjanje.</p>

        <ul>
            <li>Efekat već nakon prve upotrebe</li>
            <li>Aktivira cirkulaciju krvi i međućelijski metabolizam</li>
            <li>Eliminiše "pomorandžinu koru" i sprečava njeno stvaranje u budućnosti</li>
        </ul>

    </div>
</section>
<!-- /effects -->
<!-- components -->
<section class="components_section">
    <div class="wrapper">
        <h2><span>EFEKAT ANTICELULIT MASAŽE</span></h2>

        <div class="items_list components_list">
            <div class="item component_item">
                <img class="item-img-1"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component1_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Jedinstvena sprava za skidanje celulita koristi princip klasične masaže, ali je mnogo lakša za
                    upotrebu, efikasnija i jeftinija.</p>
            </div>
            <div class="item component_item">
                <img class="item-img-2"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component2_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Pogodno za masažu ruku, stomaka, grudi, kukovi, zadnjica, leđa, vrata, butina i listova.</p>
            </div>
            <div class="item component_item">
                <img class="item-img-3"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component3_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Redovnom upotrebom omogućava rešavanje celulita i smanjenje obima problematičnih područja za kratko
                    vreme.</p>
            </div>
            <div class="item component_item">
                <img class="item-img-4"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component4_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Omekšava kožu, daje joj čvrstoću i elastičnost. Eliminiše efekat "pomorandžine kore".</p>
            </div>
            <div class="item component_item">
                <img class="item-img-5"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component5_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Značajno poboljšava cirkulaciju krvi i sprečava stvaranje tromba.</p>
            </div>
            <div class="item component_item">
                <img class="item-img-6"
                     src="{{ asset('/') }}purplerelaxFiles/celluless/components__component6_image.jpg"
                     alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p>Može se koristiti uz bilo koje masažno ulje ili kremu.</p>
            </div>
        </div>
    </div>
</section>
<!-- /components -->

<!-- use -->
<section class="use_section">
    <div class="wrapper">
        <div class="info">
            <h2> MOŽE DA SE KORISTI I ZA <span>RELAX MASAŽU</span></h2>
            <p>Anticelulit masažer može da se koristi i kao obični masažer za opuštanje.
                Nakon napornog radnog dana idealan je za <span>opuštanje tela, posebno vratnog i ramenog pojasa</span>
                koji postane vrlo napet usled dugog sedenja.
                Vrhunska masaža kod kuće, zar ne zvuči odlično?
            </p>
        </div>
    </div>
</section>
<!-- use -->

<!-- methods -->
<section class="methods_section">
    <div class="wrapper">
        <h2>Zašto baš BODY SQUEEZER?</h2>
        <div class="items_list methods_list">
            <div class="item method_item">
                <img src="{{ asset('/') }}purplerelaxFiles/bodysqueezer/bodypro2.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <h3>BODY SQUEEZER</h3>
                <ul class="tech_list">
                    <li class="yes">Brzi rezultati</li>
                    <li class="yes">Jak motor koji će dugo trajati</li>
                    <li class="yes">Zateže i tonira kožu</li>
                    <li class="yes">Smanjuje obim</li>
                    <li class="yes">1000+ zadovoljnih korisnika</li>
                </ul>
                <a href="#order_form" class="button">PORUČITE SADA</a>
            </div>
        </div>
    </div>
</section>
<!-- /methods -->
<!-- reviews -->
<section class="reviews_section">
    <div class="wrapper">
        <h2> REZULTATI<span> NAŠIH KUPACA</span></h2>
        <div class="reviews_list owl-carousel clearfix">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review1_photo.png" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <div class="author_info"><span>SUZANA KOJIĆ</span><br></div>
                <p>Ne mogu da zamislim kako sam živela bez ovog masera! Kupovina se pokazala toliko korisnom da sam
                    jednostavno prestala da idem u masažne salone.
                    Već nakon nekoliko dana korišćenja primetila sam prve rezultate. Već nakon 2 meseca uopšte nisam
                    imala celulit na zadnjici i bokovima.
                    Nije bolno, jako je opuštajuće. Koža mi je postala mekana i elastična i mogu da kažem da sam jako
                    zadovoljna ovim proizvodom.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review2_photo.png" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <div class="author_info"><span>LUCIJA MACIĆ</span><br></div>
                <p>Posle rođenja trećeg deteta, stanje stomaka i zadnjice mi je bilo jako loše. Na nagovor sestre
                    poručila sam ovaj uređaj.
                    Bila sam skeptična, ali je jako brzo došlo do odličnih rezultat. Masiram se po 20 minuta svaki dan,
                    i tako već 3 meseca. Već nakon jednog meseca
                    telo mi je počelo da izgleda mnogo bolje, a moj suprug se oduševio. Sve preporuke za ovaj
                    masažer!</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review3_photo.png" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <div class="author_info"><span>DRAGANA MARKOVIĆ</span><br></div>
                <p>Oduvek sam se trudila da moje telo izgleda savršeno, ali kako sam prestala da treniram i približila
                    se tridesetim godinama, počeo je postepeno da mi se nakuplja celulit
                    na zadnjici i butinama. Htela sam da idem na anticelulit masaže, ali mi oduzimaju mnogo vremena i
                    jako su skupe za moj standard. Videla sam reklamu za ovaj proizvod na internetu
                    i rekoh zašto da ne poručim. Sada iz ove perspektive sam sigurna da nisam ni malo pogrešila. Ništa
                    mi nije dalo ovako dobre rezultate. Toplo preporučujem kupovinu!</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->

<section class="order_steps_section">
    <div class="wrapper">
        <h2> KAKO PORUČITI -<span>ISPORUKA I PLAĆANJE</span></h2>
        <div class="items_list steps_list">
            <div class="item step_item">
                <div class="icon"></div>
                <p><b>Poručite masažer na sajtu</b><br> Popunite formu <br>podacima za dostavu
                </p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b>Potvrdićemo Vašu porudžbinu</b><br> Porudžbina će biti potvrđena <br>u najkraćem roku</p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Slanje paketa</b><br> Paket će Vam biti poslat <br>u roku od 1-2 radna dana</p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Plaćanje pouzećem</b><br> Plaćate kuriru prilikom <br>dostave paketa</p>
            </div>
        </div>
        <div class="info"></div>
    </div>
</section>
<!-- /order steps -->
<!-- offer -->
<section class="offer_section">
    <div class="wrapper clearfix">
        <h2> MASAŽER <span style="color: #025271;">BODY SQUEEZER</span> - ZA SAVRŠENO TELO</h2>
        <div class="info">
            <ul>
                <li><br>Efekat nakon <span class="accent_color">prve upotrebe</span></li>
                <li> Izrađen od <span class="accent_color">kvalitetnih materijala</span></li>
                <li><span class="accent_color"><br> Uklanja celulit</span> i zeteže kožu</li>
            </ul>
            <div class="discount"><span> Popust<b> 40%</b></span></div>
        </div>
        <form id="order_form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            {{--<div class="arrow"></div>--}}
            <div class="timer_block">
                <p class="description">FORMA ZA PORUDŽBINU</p>
            </div>

            <div class="price_block clearfix">
                <div class="price_item old">
                    {{ $prices[1]['originalPrice'] }}<span>RSD</span>
                </div>
                <div class="price_item new">
                    {{ $prices[1]['amount'] }}<span>RSD</span>
                </div>
            </div>
            <input type="text" name="name" placeholder="Ime i prezime" required>
            <input type="tel" name="phone" placeholder="Broj telefona" required>
            <input type="text" name="shipping_address" placeholder="Adresa" required>
            <input type="text" name="shipping_city" placeholder="Grad" required>
            <button class="button" type="submit">PORUČITE ODMAH</button>
        </form>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
<script type="text/javascript" src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/celluless/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
