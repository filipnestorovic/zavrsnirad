<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel=icon type="image/png" href="{{ asset('/') }}purplerelaxFiles/pedispin/favicon.png">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/reset.css">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/owl.carousel.min.css">
    <link rel=stylesheet type="text/css" href="{{ asset('/') }}purplerelaxFiles/pedispin/styles.css">
    <script src="{{ asset('/') }}purplerelaxFiles/pedispin/jquery.js+previewYouTube.js"></script>
    <style>
        .offer_section {
            padding: 25px 0 40px;
            background: url({{ asset('/') }}purplerelaxFiles/footcallus/desctop__offer_bg.png) center top no-repeat;
        }
        .order_section .content_block {
            padding: 25px 0;
            background: url({{ asset('/') }}purplerelaxFiles/footcallus/desctop__offer_bg.png) center top no-repeat;
        }
        @media screen and (max-width: 639px) {
            .offer_section {
                padding: 10px 0 25px;
                background-image: url({{ asset('/') }}purplerelaxFiles/footcallus/mobile__offer_bg.png);
                background-position-x: -210px;
            }
            .order_section .content_block {
                padding: 10px 0 25px;
                background-image: url({{ asset('/') }}purplerelaxFiles/footcallus/mobile__offer_bg.png);
                background-position-y: -110px;
                background-position-x: -210px;
            }
        }
        .problems_section .problem_item img {
            width: 120px;
        }
        .problems_section .problem_item {
            font-size: 20px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class=offer_section>
    <div class=wrapper>
        <h1 class=main_title>FOOT CALLUS REMOVER - ZA NEŽNA I LEPA STOPALA</h1>
        <p class=subtitle>Nega stopala nikada nije bila tako dostupna i jednostavna!</p>
        <div class=discount>Akcija! <span>40%</span> popusta</div>
        <ul>
            <li>Eliminiše žuljeve i kurje oči</li>
            <li>Postupak je apsolutno bezbolan</li>
            <li>Nije potrebno prethodno napariti stopala</li>
        </ul>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class=text>Stara cena:</div>
                <div class=value><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></div>
            </div>
            <div class="price_item new">
                <div class=text>Nova cena:</div>
                <div class=value><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></div>
            </div>
        </div>
        <a href="#order_form" class=button>Poruči odmah</a>
    </div>
</section>
<section class=about_section>
    <div class=wrapper>
        <h2>FOOT CALLUS REMOVER JE VRLO JEDNOSTAVAN I PRAKTIČAN ZA KORIŠĆENJE</h2>
        <div class=text_block>
            <p><b>Električni uređaj za negu stopala postao je neizostavan proizvod u svakom ženskom domu.</b>
                Poseduje ugrađenu glavu za glačanje i čišćenje kože izrađenu od visokokvalitetnog nerđajućeg čelika koji će bezbolno i efikasno očistiti stopala, skinuti sve
                neravnine i učiniti kožu nežnom i glatkom.</p>
            <p>Uređaj je kompaktan i radi na baterije, lako se čisti i ne zahteva posebno održavanje.</p>
        </div>
        <div class="images_block clearfix">
            {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image1.jpg" alt="PediAir">--}}
            {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image2.jpg" alt="PediAir">--}}
            {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/about__image3.jpg" alt="PediAir">--}}
        </div>
    </div>
</section>
<section class=problems_section>
    <div class=wrapper>
        <h2>POMAŽE U REŠAVANJU SLEDEĆIH PROBLEMA:</h2>
        <div class=problems_list>
            <div class=problem_item>
                <img alt="PediAir" src="{{ asset('/') }}purplerelaxFiles/pediair/1.jpg">
                <h4>Pukotine</h4>
            </div>
            <div class=problem_item>
                <img alt="PediAir" src="{{ asset('/') }}purplerelaxFiles/pediair/2.jpg">
                <h4>Kraste</h4>
            </div>
            <div class=problem_item>
                <img alt="PediAir" src="{{ asset('/') }}purplerelaxFiles/pediair/3.jpg">
                <h4>Žuljevi</h4>
            </div>
            <div class=problem_item>
                <img alt="PediAir" src="{{ asset('/') }}purplerelaxFiles/pediair/4.jpg">
                <h4>Gruba koža</h4>
            </div>
        </div>
    </div>
</section>
<section class=benefits_section>
    <div class="wrapper clearfix">
        <h2>FOOT CALLUS REMOVER - UREĐAJ NOVE GENERACIJE</h2>
        <div class=benefits_list>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pediair/benefits__benefit1_image.png" alt="PediAir">
                </div>
                <div class=text_block>
                    <h4>EFIKASNO</h4>
                    <p>Rotirajuća glava za čišćenje kože uklanja suve, grube izrasline, žuljeve i mrtvu kožu</p>
                </div>
            </div>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pediair/benefits__benefit1_image.png" alt="PediAir">
                </div>
                <div class=text_block>
                    <h4>BEZBEDNO</h4>
                    <p>Dodaci za brušenje i glačanje kože su nežni toliko da neće oštetiti ni balon</p>
                </div>
            </div>
            <div class=benefit_item>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pediair/benefits__benefit1_image.png" alt="PediAir">
                </div>
                <div class=text_block>
                    <h4>KOMPAKTAN</h4>
                    <p>Foot Callus Remover ne zauzima puno prostora, lako ga možete poneti sa sobom bilo gde</p>
                </div>
            </div>
        </div>
        <div class=order_block>
            <img src="{{ asset('/') }}purplerelaxFiles/footcallus/benefits__image.png" alt="PediAir">
            <a href="#order_form" class=button>Poruči odmah</a>
        </div>
    </div>
</section>
<section class=use_steps_section>
    <div class=wrapper>
        <h2>UČINITE STOPALA SAVRŠENO GLATKIM POMOĆU FOOT CALLUS UREĐAJA U SAMO 3 KORAKA!</h2>
        <div class="steps_list clearfix">
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/footcallus/use_steps__step1_image.png" alt="PediAir">
                <h4>KORAK 1</h4>
                <p>Koristite osnovni nastavak za uklanjanje grube kože, zadebljanja i žuljeva</p>
            </div>
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/footcallus/use_steps__step2_image.png" alt="PediAir">
                <h4>KORAK 2</h4>
                <p>Upotrebite nežnu četku za završnu obradu kako biste ponovo prešli celo stopalo</p>
            </div>
            <div class=step_item>
                <img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__step3_image.jpg" alt="PediAir">
                <h4>KORAK 3</h4>
                <p>Osigurajte rezultat nanošenjem debelog sloja kreme i pričekajte dok se krema potpuno ne upije</p>
            </div>
        </div>
        {{--<div class="results_block clearfix">--}}
        {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__result1_image.jpg" alt="PediAir">--}}
        {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/use_steps__result2_image.jpg" alt="PediAir">--}}
        {{--</div>--}}
    </div>
</section>
<section class=comparison_section>
    <div class=wrapper>
        <h2>FOOT CALLUS REMOVER JE NAJBOLJI NAČIN ZA NEGU STOPALA</h2>
        <p class=description>Za razliku od skupih i složenih postupaka u kozmetičkim salonima, <b>Foot Callus Remover je jeftin i potpuno jednostavan za upotrebu.</b>
            U odnosu na kućne tretmane Foot Callus Remover je potpuno praktičan, jer postupak uklanjanja grube kože traje i do <b>5 puta kraće.</b></p>
        <div class="products_list owl-carousel">
            <div class="product_item first">
                <h4>UREĐAJ<br>FOOT CALLUS REMOVER</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/footcallus/comparison__product1_image.png" alt="PediAir">
                </div>
                <ul>
                    <li class=yes>Efikasnost</li>
                    <li class=yes>Trajni rezultati</li>
                    <li class=yes>Ušteda vremena</li>
                    <li class=yes>Jednostavnost upotrebe</li>
                </ul>
            </div>
            <div class=product_item>
                <h4>OSTALE ČETKE <br>ZA PETE I STOPALA</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/comparison__product2_image.jpg" alt="PediAir">
                </div>
                <ul>
                    <li class=no>Efikasnost</li>
                    <li class=no>Trajni rezultati</li>
                    <li class=no>Ušteda vremena</li>
                    <li class=no>Jednostavnost upotrebe</li>
                </ul>
            </div>
            <div class=product_item>
                <h4>TRETMAN U<br>SALONIMA LEPOTE</h4>
                <div class=image_block>
                    <img src="{{ asset('/') }}purplerelaxFiles/pedispin/comparison__product3_image.jpg" alt="PediAir">
                </div>
                <ul>
                    <li class=yes>Efikasnost</li>
                    <li class=yes>Trajni rezultati</li>
                    <li class=no>Ušteda vremena</li>
                    <li class=no>Jednostavnost upotrebe</li>
                </ul>
            </div>
        </div>
        <a href="#order_form" class=button>Poruči odmah</a>
    </div>
</section>
<section class=opinion_section>
    <div class="wrapper clearfix">
        <h2>MIŠLJENJE STRUKE</h2>
        {{--<img src="{{ asset('/') }}purplerelaxFiles/pedispin/opinion__photo.jpg" alt="PediAir">--}}
        <div class=text_block>
            <p>Problemi s kožom na peti, stopalu i ispod nožnih prstiju nedavno se pojavljuju u sve mlađoj dobi.
                Razlozi za to su neudobne cipele s visokom potpeticom i niz drugih faktora.</p>
            <p>Već dugo preporučujemo "Foot Callus Remover". <b>Jedinstvenost ovog uređaja leži u činjenici da se učinkovito uklanjanju mrtve ćelije kože bezbolno i za vrlo kratko vreme.</b></p>
            <p>Foot Callus Remover je u stanju da se izbori čak i sa kurijim očima, bez uklanjanja zamrzavanjem i ostalim laserskim i hirurškim procedurama.</p>
            <div class=author_info>
                <div class=name></div>
                <div class=text></div>
            </div>
        </div>
    </div>
</section>
<section class=reviews_section>
    <div class=wrapper>
        <h2>UTISCI ZADOVOLJNIH KUPACA</h2>
        <p class=description>Svakog dana dobijamo komentare stotine zadovoljnih kupaca. Nadamo se da ćete biti zadovoljni porudžbinom i kupiti ponovo kod nas!</p>
        <div class="reviews_list owl-carousel">
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/footcallus/review1.png" alt="PediAir">
                <div class=author_info>Violeta, 38 godina</div>
                <p>Idealan izbor za one koji nemaju slobodnog vremena.
                    Postupak grubog uklanjanja kože izvodi se na suvoj koži, a posle se glačanje kože može raditi posebnim nastavkom.
                    Sve preporuke za proizvod!</p>
            </div>
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/footcallus/review2.png" alt="PediAir">
                <div class=author_info>Svetlana, 45 godina</div>
                <p>Idealno za osetljivu kožu. Dugo sam tražila tako nešto.
                    Deluje vrlo nežno, možete sigurno brusiti kožu stopala u različitim smerovima, i neće napraviti ranice.
                    Može se koristiti bez prethodnog parenja nogu.</p>
            </div>
            <div class=review_item>
                <img src="{{ asset('/') }}purplerelaxFiles/footcallus/review3.png" alt="PediAir">
                <div class=author_info>Natalija, 61 godina</div>
                <p>Pete su mi bile ukočene i ispucale, ali Foot Callus Remover mi je rešio problem.
                    Savršeno uklanja mrtve slojeve kože ali istovremeno ne grebe kožu i sve se odvija bezbolno.</p>
            </div>
        </div>
    </div>
</section>
<section class=order_steps_section>
    <div class=wrapper>
        <h2>KAKO NARUČITI FOOT CALLUS REMOVER?</h2>
        <div class=steps_list>
            <div class=step_item>
                <h4>Korak 1</h4>
                <p>Unesite podatke za dostavu</p>
            </div>
            <div class=step_item>
                <h4>Korak 2</h4>
                <p>Potvrdićemo Vašu porudžbinu u najkraćem roku</p>
            </div>
            <div class=step_item>
                <h4>Korak 3</h4>
                <p>Brza pošta će Vam dostaviti paket u roku od 1-2 radna dana</p>
            </div>
            <div class=step_item>
                <h4>Korak 4</h4>
                <p>Pošiljku plaćate pouzećem</p>
            </div>
        </div>
    </div>
</section>
<section class=order_section>
    <div class=title_block>
        <div class=wrapper>
            <h4>Naručite Foot Callus Remover po promotivnoj ceni, akcija može trajati još samo malo!</h4>
        </div>
    </div>
    <div class=content_block>
        <div class=wrapper>
            <h3 class=main_title></h3>
            <p class=subtitle></p>
            <div class=discount>Akcija! <span>40%</span> popusta</div>
            <div class=form_block>
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class=text>Stara cena:</div>
                        <div class=value><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></div>
                    </div>
                    <div class="price_item new">
                        <div class=text>Nova cena:</div>
                        <div class=value><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></div>
                    </div>
                </div>
                <form action="{{$orderRoute}}" method=post id=order_form class=order_form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class=field type=text name=name placeholder="Ime i prezime" required>
                    <input class=field type=tel name=phone placeholder="Telefon" required>
                    <input class=field type=text name=shipping_address placeholder="Adresa" required>
                    <input class=field type=text name=shipping_city placeholder="Grad" required>
                    <button class=button>Poruči odmah</button>
                </form>
                {{--<div class=deadline_text></div>--}}
            </div>
        </div>
    </div>
</section>
{{--<footer class=footer_section>--}}
{{--</footer>--}}
<script>eval(mod_pagespeed_uRq2Hxtw29);</script>
<script src="{{ asset('/') }}purplerelaxFiles/pedispin/owl.carousel.min.js+scripts.js"></script>
<script>eval(mod_pagespeed_Ig1UINWhi3);</script>
<script>eval(mod_pagespeed_MDncI5HA2W);</script>
@include('components.pixel_footer')
</body>
</html>
