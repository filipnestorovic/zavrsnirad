<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/celluless/styles.css">
    <link rel="shortcut icon" href="">
</head>

<body>
<!-- offer -->
<header class="offer_section">
    <div class="wrapper clearfix">
        <h1> Vákuový masážny prístroj proti celulitíde <span class="accent_color">Cellulite Massage</span>
        </h1>
        <div class="info">
            <ul>
                <li> účinok po<span class="accent_color"> prvom použití</span></li>
                <li> vyrobený z<span class="accent_color"> kvalitných materiálov</span></li>
                <li><span class="accent_color"> zabraňuje vzniknutia</span> celulitídy v budúcnosti</li>
            </ul>
            {{--<div class="products_count_block"><span> 17</span> Zostáva<br> balíčkov</div>--}}
            <div class="discount"><span> Popust<b> 40%</b></span></div>
        </div>
        <form action="{{$orderRoute}}" method="post">
            {{--<div class="arrow"></div>--}}
            <div class="timer_block">
                <p class="description">FORMA ZA PORUDŽBINU</p>
                {{--<div class="timer clearfix">--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count hours"> 00</div>--}}
                        {{--<div class="text"> hodin</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count minutes"> 00</div>--}}
                        {{--<div class="text"> minut</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count seconds"> 00</div>--}}
                        {{--<div class="text"> sekúnd</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
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

        <h2> aké má<span class="accent_color"> nebezpečenstvo</span> celulitída?</h2>

        <p> Je známe, že celulitída je vytváraná v miestach s veľmi pomalým krvným obehom. Ak sa toho nemôžete
            zbaviť včas, potom v priebehu času, nadbytok tuku vyvoláva oslabenie kapilárnej siete a následnú<b
                    class="accent_color"> infiltráciu</b> (Akumulácia tekutín v medzibunkovom priestore). To vedie k
            rozvoju<b class="accent_color"> onkologických ochorení.</b></p>

        <p> Celulitída je lokalizovaná tesne pred epidermou a bráni normálnemu pôsobeniu elastínových a kolagénových
            vlákien. Z tohto dôvodu je narušená funkcia lymfatických a krvných ciev. To môže viesť k rozvoju
            cievnych ochorení -<b class="accent_color"> aterosklerózy, ischémie a ďalších.</b></p>

        <div class="items_list diseases_list">

            <div class="item disease_item">
                <h3> rakovinové bujnenie</h3>
            </div>

            <div class="item disease_item">
                <h3> trombóza</h3>
            </div>

            <div class="item disease_item">
                <h3> ateroskleróza</h3>
            </div>
        </div>
    </div>
</section>
<!-- /diseases -->
<!-- cellulite types -->
<section class="cellulite_types_section">
    <div class="wrapper">

        <h2><span> Aká býva celulitída</span></h2>

        <div class="types_list owl-carousel">

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless/cellulite_types__type1_image.jpg" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3> tuková celulitída</h3>
                    <p> Tento typ celulitídy sa vyskytuje u ľudí <span>s nadváhou</span>. Spravidla sa tvorí na
                        bokoch, zadku a bruchu. Táto forma deformácia podkožného tkaniva nespôsobuje bolesť, ale v
                        priebehu času môže viesť <span>na vážnejšie dôsledky</span>.</p>
                </div>
            </div>

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless/cellulite_types__type2_image.jpg" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3> Vodná celulitída</h3>
                    <p> Objavuje sa u ľudí <span>so sedavým životným štýlom</span>. K jeho výskytu tiež prispieva
                        nadbytok slaných a korenistých potravín v strave. Táto forma je nebezpečnejší: ak sa opuch
                        stane výrazným, potom je v postihnutých oblastiach narušený krvný obeh, ktorý <span>môže
                                viesť k vaskulárnym ochoreniam</span>.</p>
                </div>
            </div>

            <div class="type_item clearfix">
                <div class="photo_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless/cellulite_types__type3_image.jpg" alt="Cellulite Massage"
                         title="Cellulite Massage">
                </div>
                <div class="text">
                    <h3> Vláknitá celulitída</h3>
                    <p><span> Vážne porušenie</span> tvorby podkožného tkaniva. S takou celulitídou sa pokožka stáva
                        tvrdou na dotyk, nepríjemnú a <span>bolestivú</span>. Farba naberá namodralý nádych. Táto
                        forma celulitídy v priebehu času spravidla vyplýva z predchádzajúcich. Ak sa tomuto problému
                        nevenujete ďalej, potom v podstate <span>zvyšuje sa riziko vzniku rakoviny</span>.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /cellulite types -->
<!-- effects -->
<section class="effects_section">
    <div class="wrapper">

        <h2> Začnite bojovať proti celulitíde<span> Tu a teraz</span> <small> a budete prekvapení, keď ho dokážete
                poraziť</small></h2>

        <p> Jedinečnosť prostriedku spočíva v tom, že jeho zloženie vám umožní sa zbaviť<span> práve príčiny</span>
            výskytu celulitídy - stagnácia v obehovom systéme.</p>

        <ul>
            <li> Účinné po prvom použití</li>
            <li> Aktivuje krvný obeh a intercelulárnej metabolizmus</li>
            <li> Eliminuje "pomarančovú kôru" a zabraňuje jej vzniku v budúcnosti</li>
        </ul>

    </div>
</section>
<!-- /effects -->
<!-- components -->
<section class="components_section">
    <div class="wrapper">
        <h2><span> vlastnosti masérky</span></h2>

        <div class="items_list components_list">
            <div class="item component_item">
                <img class="item-img-1" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component1_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> Unikátny vákuový masážny stroj pre telo, využívajúce princíp klasickej masáže, ale oveľa ľahšie
                    sa používa a je účinný</p>
            </div>
            <div class="item component_item">
                <img class="item-img-2" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component2_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> Vhodný pre masáž tváre a tela (paží, brucha, poprsie, bokov, teliat)</p>
            </div>
            <div class="item component_item">
                <img class="item-img-3" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component3_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> Pri pravidelnom používaní vám umožní zbaviť sa celulitídy a v krátkej dobe znížiť objem
                    problémových oblastí.</p>
            </div>
            <div class="item component_item">
                <img class="item-img-4" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component4_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> Zjemňuje pokožku, dodáva jej pevnosť a pružnosť a odstraňuje účinok "pomarančovej kôry"</p>
            </div>
            <div class="item component_item">
                <img class="item-img-5" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component5_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> Výrazne zlepšuje koaguláciu krvi a inhibuje tvorbu trombu</p>
            </div>
            <div class="item component_item">
                <img class="item-img-6" src="{{ asset('/') }}purplerelaxFiles/celluless/components__component6_image.jpg" alt="Cellulite Massage"
                     title="Cellulite Massage">
                <p> K masáži môžete použiť akýkoľvek masážny olej alebo krém.</p>
            </div>
        </div>
    </div>
</section>
<!-- /components -->

<!-- use -->
<section class="use_section">
    <div class="wrapper">
        <div class="info">
            <h2> Oblasť použitia <span> Cellulite Massage</span></h2>
            <p> Vákuový masážny prístroj sa odporúča pre masáže tváre a tela. Účelom tvárových procedúr je vyhladiť
                tón pleti tváre, zabrániť vzniku vrások a starnutie pokožky a opraviť ovál tváre (najmä oblasti
                brady). <span>Cellulite Massage</span> Bojuje dobre so zväčšenými pórmi, znižuje ich priemer.
            </p>
        </div>
    </div>
</section>
<!-- use -->

<!-- methods -->
<section class="methods_section">
    <div class="wrapper">
        <h2> Špecifikácie</h2>
        <div class="items_list methods_list">
            <div class="item method_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/methods__method2_image.jpg" alt="Cellulite Massage" title="Cellulite Massage">
                <h3> Cellulite Massage</h3>
                <ul class="tech_list">
                    <li class="yes"> Maximálny generovaný tlak je 50 kPa</li>
                    <li class="yes"> Vstavaný dobíjacie zdroj Ni-MH 2,4 V</li>
                    <li class="yes"> Doba nabíjania batérie - 8 hodín.</li>
                    <li class="yes"> Nabíjačka s prevádzkovým napätím 220-230 V.</li>
                    <li class="yes"> Prevádzkové teploty: relatívna vlhkosť 25 ... 85%, teplota + 18 ... + 35 ° С
                    </li>
                    <li class="yes"> Výrobca: Francúzska spoločnosť Gezanne ITC (adresa: Saint Avertin 39, Rue des
                        Granges, Galandu)</li>
                </ul>
                <a href="#order_form" class="button"> Objednajte sa zľavou</a>
            </div>
        </div>
    </div>
</section>
<!-- /methods -->
<!-- reviews -->
<section class="reviews_section">
    <div class="wrapper">
        <h2> Výsledky<span> našich klientov</span></h2>
        <div class="reviews_list owl-carousel clearfix">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review1_photo.jpg" alt="Cellulite Massage" title="Cellulite Massage">
                <div class="author_info"><span> Zuzana Latová</span><br></div>
                <p> Nedokážem si predstaviť, ako som žila bez tohto maséra! Nákup sa ukázal byť tak užitočným, že
                    som jednoducho zabudla na výlety do hydromasáže a ručná masáž tela špecialistom. Kúpila som
                    masér, pretože moje ruky z používania plechoviek sú veľmi unavené, ale zariadenie má oveľa
                    vyššiu účinnosť! Pre použitie po dobu 1,5 mesiaca od celulitídy na zadku a po stranách nebolo
                    pozorované žiadne stopy. Pravda, tuk je stále na vnútornej strane stehna, ale myslím si, že je
                    to otázka času. Bolesť je mierna, môžete vydržať! Tiež sa mi páči, že existuje špeciálne
                    tlačidlo, a ak to veľa bolí, môžete náhle zastaviť vstrebávanie kože</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review2_photo.jpg" alt="Cellulite Massage" title="Cellulite Massage">
                <div class="author_info"><span> Lucia Tatrová</span><br></div>
                <p> Po narodení tretieho dieťaťa zostal stav brucha a zadku veľa žiaduce. Som chudá, ale ako sa
                    ukázalo, takí ľudia majú celulitídu. Vákuový masážny stroj je pre mňa len dar z nebies, pretože
                    do salónu nie sú peniaze a čas. Procedúra nie je príjemná, ale použitie mastného
                    anticelulitidového oleja pred masážou bolesť trochu uľahčí. Vykonávam 10 minút len dvakrát
                    týždenne, pretože sa obávam zvýšených prejavov kŕčových žíl. Počas mesiaca začalo telo vyzerať
                    oveľa lepšie, robím masáže nielen na problémové oblasti, ale aj na spodnú časť chrbta, na
                    predlaktí. Chcem povedať, že masér naozaj funguje, nákup som neľutovala!</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless/reviews__review3_photo.jpg" alt="Cellulite Massage" title="Cellulite Massage">
                <div class="author_info"><span> Michaela Polková</span><br></div>
                <p> Vždy som snívala o Masér pre chudnutie, ako som videl veľa reklamy, a moje boky nevyzerali
                    najlepšie po narodení dieťaťa. Okrem toho, zadok boli tak zväčšené, že sa nezmestia do nohavíc,
                    bolo veľa strií. Po prvý domáci masáži sa brucho stalo pružnejším a po 4 procedúrach sa
                    rozťahovanie na bokoch a pásu začalo odľahčovať! Najprv som na masáž použila anticelulitídový
                    krém, teraz nanášam med na koži. Postupne (asi po mesiaci používania zariadení každý druhý deň)
                    sa tvary tela viac tónovali, celulitída prakticky zmizla, celkom som stratila 3,5 kg.!</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->

<section class="order_steps_section">
    <div class="wrapper">
        <h2> Ako objednať -<span> Doprava a platba</span></h2>
        <div class="items_list steps_list">
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Vyplňte nižšie uvedený formulár</b><br> uveďte svoje meno, priezvisko<br> a telefónne číslo
                </p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Naši zamestnanci budú kontaktovať</b><br> S vami a spresní<br> Podrobnosti o objednávke</p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Vašu objednávku zašleme</b><br> ten istý deň kuriérom</p>
            </div>
            <div class="item step_item">
                <div class="icon"></div>
                <p><b> Žiadne zálohy!</b><br> Platba sa uskutočňuje<br> po obdržaní objednávky</p>
            </div>
        </div>
        <div class="info">Doručenie kuriérom<b> do 1-3 dní</b></div>
    </div>
</section>
<!-- /order steps -->
<!-- offer -->
<section class="offer_section">
    <div class="wrapper clearfix">
        <h2> Vákuový masážny prístroj proti celulitíde <span class="accent_color">Cellulite Massage</span>
        </h2>
        <div class="info">
            <ul>
                <li> Učinok po<span class="accent_color"> prvom použití</span></li>
                <li> Vyrobený z<span class="accent_color"> kvalitných materiálov</span></li>
                <li><span class="accent_color"> Zabraňuje vzniknutia</span> celulitídy v budúcnosti</li>
            </ul>
            {{--<div class="products_count_block"><span> 17</span> Zostáva<br> balíčkov</div>--}}
            <div class="discount"><span> Popust<b> 40%</b></span></div>
        </div>
        <form id="order_form" action="{{$orderRoute}}" method="post">
            {{--<div class="arrow"></div>--}}
            <div class="timer_block">
                <p class="description">FORMA ZA PORUDŽBINU</p>
                {{--<div class="timer clearfix">--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count hours"> 00</div>--}}
                        {{--<div class="text"> hodin</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count minutes"> 00</div>--}}
                        {{--<div class="text"> minut</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count seconds"> 00</div>--}}
                        {{--<div class="text"> sekúnd</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
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
<!-- /offer -->

<!-- footer -->
<footer>

</footer>
<!-- /footer -->
<!-- scripts -->
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
<script type="text/javascript" src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/celluless/scripts.js"></script>
</body>

</html>