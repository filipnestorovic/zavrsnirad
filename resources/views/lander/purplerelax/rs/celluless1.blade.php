<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/celluless1/styles.css">
    <style type="text/css">@font-face{font-family: 'Montserrat'; src:url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype'); font-weight: 400; font-style: normal;} @font-face { font-family: 'Montserrat'; src:url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype'); font-weight: 700; font-style: normal;}</style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">Celluless</h1>
        <div class="info_block">
            <p class="subtitle">MASAŽER PROTIV CELULITA</p>
            <div class="discount"> <b>40% popusta</b>
            </div>
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__image8e0b7.png"></div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit1_imageef1d2.jpg">
                <p>Eliminiše masnoću i celulit</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit2_imagea4a64.jpg">
                <p>Vraća tonus mišića</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit3_image52812.jpg">
                <p>Lako uklanja sve mrtve ćelije kože</p>
            </div>
        </div>

        <a href="#order_form" class="button">PORUČI SADA</a>
    </header>
    <!-- /header 3 -->
    <!-- description -->
    <section class="description_section">
        <h2 class="title">
            SAVRŠENO TELO UZ <span>CELLULESS</span>
        </h2>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/celluless1/description__image48558.jpg">
        <p>
            Pomoću ovog masažera imaćete savršeno telo bez napuštanja svog doma! 5 dodataka za različite načine masaže pomaže u zatezanju kože, opuštanju tela,
            uklanjanju nabora na telu, oslobađanju od celulite i skidanju mrtvih ćelija kože.
        </p>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/celluless1/description__image211c71.jpg">
        <p>
            Tajna efikasnosti Celluless masažera je u tome što rotirajuća osovina masažera duboko prodire u mišiće. Kada uključite uređaj, dodatak napravi više od 2500
            obrtaja u minuti. To garantuje prodorne vibracije u dubokim slojevima kože, što doprinosi temeljnom razbijanju celulita i cepanju masnih ćelija.
        </p>
        <p>
            Na taj način se sagoreva višak kalorija, rešava masnih naslaga i blagotvorno deluje na tonus mišića. Uz redovno korišćenje, rezultat je odličan i zagarantovan.
        </p>
    </section>
        <!-- /description -->
        <!-- benefits -->
        <section class="benefits_section">
            <h2 class="title">
                <span>Celluless</span>
                pruža:
            </h2>
            <div class="benefits_list2">
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits2__benefit1_imageecbbd.jpg">
                    <h4>Zategnutost</h4>
                    <p>Rešava celulita i masnoće</p>
                </div>
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits2__benefit2_image42342.jpg">
                    <h4>Lepotu</h4>
                    <p>Divan stomak, zadnjicu, bokove i ruke</p>
                </div>
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits2__benefit3_imaged151f.jpg">
                    <h4>Energičnost</h4>
                    <p>Vraća energiju i tonus mišića</p>
                </div>
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits2__benefit4_imagefac69.jpg">
                    <h4>Dobar osećaj</h4>
                    <p>Ublažava stres i pospešuje cirkulaciju krvi</p>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>
        </section>
        <!-- /benefits -->
        <!-- benefits -->
        <section class="use_steps_section">
            <h2 class="title">
                <span>5 dodataka</span>
                &#8212
                <br>5 načina korišćenja</h2>
            <div class="benefits_list3 va_middle">
                <div class="benefit_item">
                    <div class="image_block">
                        <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits3__benefit1_imaged2eea.jpg"></div>
                    <div class="text_block">
                        <h4>Dodatak 1</h4>
                        <p>8 rotacionih kuglica. Koristi se za smanjenje obima struka, za elastičnost i nežnost kože.</p>
                    </div>
                </div>
                <div class="benefit_item">
                    <div class="image_block">
                        <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits3__benefit2_imagedb83f.jpg"></div>
                    <div class="text_block">
                        <h4>Dodatak 2</h4>
                        <p>Tanka ravna glava - za masažu vrata, ramena i leđa. Ublaža umor i vraća energiju.</p>
                    </div>
                </div>
                <div class="benefit_item">
                    <div class="image_block">
                        <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits3__benefit3_imagef9feb.jpg"></div>
                    <div class="text_block">
                        <h4>Dodatak 3</h4>
                        <p>Podloga sa valovitom površinom - rešava celulita i sprečava nastanak novih naslaga.</p>
                    </div>
                </div>
                <div class="benefits_list3 va_middle">
                    <div class="benefit_item">
                        <div class="image_block">
                            <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits3__benefit3_imagef9feb-4.jpg"></div>
                        <div class="text_block">
                            <h4>Dodatak 4</h4>
                            <p>Nastavak za brušenje - uklanja grubu kožu na stopalima</p>
                        </div>
                    </div>
                    <div class="benefits_list3 va_middle">
                        <div class="benefit_item">
                            <div class="image_block">
                                <img src="{{ asset('/') }}purplerelaxFiles/celluless1/benefits3__benefit3_imagef9feb-5.jpg"></div>
                            <div class="text_block">
                                <h4>Dodatak 5</h4>
                                <p>Zaštitna glava - štiti od upadanja kose u uređaj. Celluless uređaj je savšeno osmišljen do najsitnijih detalja!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /benefits -->
        <!-- reviews 2 -->
        <section class="reviews2_section">
            <h2 class="title">
                <span>UTISCI </span>
                NAŠIH KUPACA
            </h2>
            <div class="reviews_list owl-carousel">
                <div class="review_item">

                    <p>Ne mogu da zamislim kako sam živela bez ovog masera! Kupovina se pokazala toliko korisnom da sam jednostavno prestala da idem u masažne salone.
                        Već nakon nekoliko dana korišćenja primetila sam prve rezultate. Već nakon 2 meseca uopšte nisam imala celulit na zadnjici i bokovima.
                        Nije bolno, jako je opuštajuće. Koža mi je postala mekana i elastična i mogu da kažem da sam jako zadovoljna ovim proizvodom.</p>
                    <div class="author_block">
                        <div class="author_info">
                            <div class="name">SUZANA KOJIĆ</div>
                            <div class="text">38 godina</div>
                        </div>
                    </div>
                </div>
                <div class="review_item">

                    <p>Posle rođenja trećeg deteta, stanje stomaka i zadnjice mi je bilo jako loše. Na nagovor sestre poručila sam ovaj uređaj.
                        Bila sam skeptična, ali je jako brzo došlo do odličnih rezultat. Masiram se po 20 minuta svaki dan, i tako već 3 meseca. Već nakon jednog meseca
                        telo mi je počelo da izgleda mnogo bolje, a moj suprug se oduševio. Sve preporuke za ovaj masažer!</p>
                    <div class="author_block">
                        <div class="author_info">
                            <div class="name">JOVANKA KRIVOKAPIĆ</div>
                            <div class="text">24 godine</div>
                        </div>
                    </div>
                </div>
                <div class="review_item">

                    <p>Oduvek sam se trudila da moje telo izgleda savršeno, ali kako sam prestala da treniram i približila se tridesetim godinama, počeo je postepeno da mi se nakuplja celulit
                        na zadnjici i butinama. Htela sam da idem na anticelulit masaže, ali mi oduzimaju mnogo vremena i jako su skupe. Videla sam reklamu za ovaj proizvod na internetu
                        i rekoh zašto da ne poručim. Sada iz ove perspektive sam sigurna da nisam ni malo pogrešila. Ništa mi nije dalo ovako dobre rezultate. Toplo preporučujem kupovinu!</p>
                    <div class="author_block">
                        <div class="author_info">
                            <div class="name">DRAGANA MARKOVIĆ</div>
                            <div class="text">30 godina</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /reviews 2 -->
        <!-- order steps -->
        <section class="order_steps_section">
            <h2 class="title">
                KAKO <span>PORUČITI? </span>
            </h2>
            <div class="order_steps2 clearfix">
                <div class="step_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/order_steps__step1_icon34f4b.png">
                    <div class="separator"></div>
                    <h4>Porudžbina</h4>
                    <p>Unesite podatke za dostavu u formi ispod</p>
                </div>
                <div class="step_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/order_steps__step2_icon20e71.png">
                    <div class="separator"></div>
                    <h4>Potvrda</h4>
                    <p>Potvrdićemo porudžbinu u najkraćem roku</p>
                </div>
                <div class="step_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/order_steps__step3_iconc7f64.png">
                    <div class="separator"></div>
                    <h4>Slanje</h4>
                    <p>
                        Poslaćemo paket u roku od na vašu adresu u roku od
                        <br>1-2 radna dana</p>
                </div>
                <div class="step_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/order_steps__step4_icond62f0.png">
                    <div class="separator"></div>
                    <h4>Plaćanje</h4>
                    <p>Nema plaćanja unapred! Uplata se vrši po prijemu pošiljke</p>
                </div>
            </div>
        </section>
        <!-- /order steps -->
        <!-- order 3 -->
        <section class="offer_section offer3 order" style="padding-bottom: 30px;">
            <h1 class="main_title">Celluless</h1>
            <div class="info_block">
                <p class="subtitle">MASAŽER PROTIV CELULITA</p>
                <div class="discount">
                    <b>40% popusta</b>
                </div>
                <img class="image" src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__image8e0b7.png">
                <!--<img class="gift" src="files/gift9eed3.png">--></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <div class="benefits_block clearfix">
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit1_imageef1d2.jpg">
                    <p>Eliminiše masnoću i celulit</p>
                </div>
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit2_imagea4a64.jpg">
                    <p>Vraća tonus mišića</p>
                </div>
                <div class="benefit_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/celluless1/offer3__benefit3_image52812.jpg">
                    <p>Lako uklanja sve mrtve ćelije kože</p>
                </div>
            </div>

            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="field" type="tel" name="phone" placeholder="Broj telefona" required>
                <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                <button class="button">Poručite odmah</button>
            </form>
        </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/celluless1/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>