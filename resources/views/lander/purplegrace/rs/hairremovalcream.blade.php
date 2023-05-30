<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8"/>
    <meta content="width=device-width" name="viewport"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplegraceFiles/hairremovalcream/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="{{ asset('/') }}purplegraceFiles/hairremovalcream/favicon.ico" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"/>
    <link href="{{ asset('/') }}purplegraceFiles/hairremovalcream/style.css" rel="stylesheet"/>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <header class="main_block">
        <div class="header_top">
            <div class="container">
                <div class="ht_block">
                    <div class="ht">
                        <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ht1.png"/></div>
                        <div class="text">
                            100% EFIKASNO <br/> UKLANJANJE DLAČICA
                        </div>
                    </div>
                    <div class="ht">
                        <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ht2.png"/></div>
                        <div class="text">
                            POGODNO ZA <br/> NEŽNU DEPILACIJU
                        </div>
                    </div>
                    <div class="ht">
                        <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ht3.png"/></div>
                        <div class="text">
                            JEDINSTVENI SASTAV
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="main_title">
                    <h1><b>HAIR REMOVAL</b></h1>
                    <h2>ZA UKLANJANJE DLAKA</h2>
                    <div class="main_slog">Nežan prema koži, nemilosrdan prema dlačicama</div>
                </div>
            </div>
            <div class="container">
                <div class="prod_sale">
                    <ul class="list">
                        <li>Uklanja dlake bez bola i mučenja</li>
                        <li>Ima maksimalnu efikasnost</li>
                        <li>Ne pravi iritaciju</li>
                        <li>Hrani kožu i čini je mekšom</li>
                    </ul>
                    <img alt="" class="main_prod" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/product.png"/>
                    <div class="sale_block">
                        <div class="sale">Poručite sada i <b>iskoristite akciju od 40%</b></div>
                        <div class="count">
                            <div class="countbox"></div>
                        </div>
                        <div class="price">
                            <div class="old_price">
                                <div class="title">
                                    Redovna cena:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['originalPrice'] }}
                                    <span class="cur">{{ $prices[1]['currency'] }}</span>
                                </div>
                            </div>
                            <div class="new_price">
                                <div class="price_title">
                                    Cena na akciji:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['amount'] }}
                                    <span class="cur">{{ $prices[1]['currency'] }}</span>
                                </div>
                            </div>
                        </div>
                        <form class="sale_form" action="{{$orderRoute}}" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="name" name="name" required="" placeholder="Ime i prezime" type="text"/>
                            <input required="" class="phone" name="phone" placeholder="Telefon" type="text"/>
                            <div class="secure">
                                Vaši podaci su zaštićeni
                            </div>
                            <button class="btn">PORUČITE SADA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="problems">
            <div class="container">
                <h2 class="line3">6 PROBLEMA S KOJIMA SE SVAKA ŽENA SUSREĆE</h2>
                <div class="problems_block">
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem1.png"/>
                        Dlake su zgusnute <br/> i postaju vidljive
                    </div>
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem2.png"/>
                        Pojavljivanje nausnica
                    </div>
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem3.png"/>
                        Dlake nakon depilacije <br/> rastu sledećeg dana
                    </div>
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem4.png"/>
                        Bol tokom depilacije
                    </div>
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem5.png"/>
                        Svrab i iritacija
                    </div>
                    <div class="problems_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/problem6.png"/>
                        Tamne mrlje na koži
                    </div>
                </div>
            </div>
        </section>
        <section class="revolution">
            <div class="container">
                <h2 class="line2">
                    INOVACIJA U <br/> <span>UKLANJANJU NEŽELJENIH DLAČICA</span>
                </h2>
                <div class="sslog">
                    Uklanjanje dlačica nikada nije bilo lakše uz Hair Removal Cream!
                </div>
                <div class="revolution_bottom">
                    <div class="text">
                        Učinite uklanjanje dlačica bezbolnom procedurom bez odlazaka u skupe kozmetičke salone
                    </div>
                    <div class="button">
                        <a class="btn btn2" href="#footer">PORUČITE SADA</a>
                    </div>
                </div>
                <img src="{{ asset('/') }}purplegraceFiles/hairremovalcream/revo_img.jpg" class="revo_img" alt=""/>
                <div class="revolution_block">
                    <div class="revol_item revol_item1">
                        Pazuh
                    </div>
                    <div class="revol_item revol_item2">
                        Ruke
                    </div>
                    <div class="revol_item revol_item3">
                        Bikini zona
                    </div>
                    <div class="revol_item revol_item4">
                        Listovi
                    </div>
                </div>
            </div>
            <div class="revolution_bottom hidden">
                <div class="container">
                    <div class="text">
                        Učinite uklanjanje dlačica bezbolnom procedurom bez odlazaka u skupe kozmetičke salone
                    </div>
                    <div class="button">
                        <a class="btn btn2" href="#footer">PORUČITE SADA</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="ba">
            <div class="container">
                <div class="ba_block">
                    <div class="ba_item"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ba1.jpg"/></div>
                    <div class="ba_item"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ba2.jpg"/></div>
                    <div class="ba_item"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ba3.jpg"/></div>
                    <div class="ba_item"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ba4.jpg"/></div>
                </div>
            </div>
        </div>
        <section class="how">
            <div class="container">
                <h2 class="line3">KAKO HAIR REMOVAL CREAM DELUJE NA KOŽU?</h2>
                <div class="how_block">
                    <div class="how_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/how1.png"/>
                        <div class="title">
                            SKIDANJE <br/> DLAKA
                        </div>
                        <div class="text">
                            Utrlja se na kožu, ostavi se da deluje 4 minuta i dlake se skinu peškirom.
                        </div>
                    </div>
                    <div class="how_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/how2.png"/>
                        <div class="title">
                            HRANI <br/> KOŽU
                        </div>
                        <div class="text">
                            Omekšava folikule i smanjuje rast dlaka
                        </div>
                    </div>
                    <div class="how_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/how3.png"/>
                        <div class="title">
                            BEZBEDAN <br/> ZA UPOTREBU
                        </div>
                        <div class="text">
                            Ne iritira i ne povređuje kožu
                        </div>
                    </div>
                    <div class="how_item">
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/how4.png"/>
                        <div class="title">
                            DUGOTRAJNI <br/> EFEKTI
                        </div>
                        <div class="text">
                            Čestim korišćenjem smanjiće se rast dlaka do te mere da skoro neće i rasti
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="easy">
            <div class="container">
                <div class="easy_block">
                    <h2>
                        HAIR REMOVAL CREAM - <br/> LAKO SE KORISTI
                    </h2>
                    <div class="easy_items" style="margin-top: 30px;">
                        <div class="easy_item">
                            <div class="numb">
                                1
                            </div>
                            <div class="text">
                                <div class="title">
                                    Krema na kožu
                                </div>
                                Utrljajte kremu na područje kože koje želite da depilirate
                            </div>
                        </div>
                        <div class="easy_item">
                            <div class="numb">
                                2
                            </div>
                            <div class="text">
                                <div class="title">
                                    Sačekajte 4 minuta
                                </div>
                                Ali ne više od 5 minuta
                            </div>
                        </div>
                        <div class="easy_item">
                            <div class="numb">
                                3
                            </div>
                            <div class="text">
                                <div class="title">
                                    Obrišite peškirom tretiranu površinu
                                </div>
                                U kontra smeru od pravca rasta dlake
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="secret">
            <div class="container">
                <h2 class="line2">KOJA JE <span>TAJNA</span> HAIR REMOVAL KREME?</h2>
                <div class="secret_block">
                    <div class="secret_top">
                        <br/>
                        <p>
                            Kada se namaže na kožu, aktivne supstance rastvaraju neželjene dlačice.
                            <br/>
                            Krema ne deluje samo na površini, već prodire u folikul i usporava rast dlake.
                        </p>
                        <p>
                            Sadrži prirodne ekstrakte koji su nežni i sprečavaju iritaciju.
                            <br/>
                            Kreme se savršeno bori sa neželjenim dlačicama, a takođe neguje kožu i čini je neverovatno glatkom i nežnom.
                        </p>
                    </div>
                    <div class="secret_bottom">
                        <br/>
                        <p>Postignite efekat uporediv sa fotoepilacijom nakon samo nekoliko korišćenja!</p>
                        <a class="btn btn2" href="#footer">PORUČITE SADA</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="choice">
            <div class="container">
                <h2 class="line3"><span class="mhide">ZAŠTO JE</span>
                      "HAIR REMOVAL CREAM" BROJ 1 ZA UKLANJANJE NEŽELJENIH DLAČICA</h2>
                <div class="choice_block">
                    <div class="choice_item">
                        <div class="ci_image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ci1.jpg"/></div>
                        <div class="ci_title">
                            Epilacija
                        </div>
                        <div class="ci_price">
                            <div class="text">
                                po tretmanu
                            </div>
                            <div class="numb">
                                3000<span>{{ $prices[1]['currency'] }}</span>
                            </div>
                        </div>
                        <div class="ci_often">Učestalost procedure: <span>Jednom nedeljno</span></div>
                        <div class="ci_list">
                            <div class="cil_left">
                                Nedostaci:
                            </div>
                            <div class="cil_right">
                                <p>Bol</p>
                                <p>Iritacija</p>
                                <p>Urastanje dlaka</p>
                                <p>Propuštene dlake</p>
                                <p>Fleke na koži</p>
                            </div>
                        </div>
                    </div>
                    <div class="choice_item">
                        <div class="ci_image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ci2.jpg"/></div>
                        <div class="ci_title">
                            Laser
                        </div>
                        <div class="ci_price">
                            <div class="text">
                                Po tretmanu
                            </div>
                            <div class="numb">
                                16000<span>{{ $prices[1]['currency'] }}</span>
                            </div>
                        </div>
                        <div class="ci_often">Učestalost procedure: <span>Jednom mesečno</span></div>
                        <div class="ci_list">
                            <div class="cil_left">
                                Nedostaci:
                            </div>
                            <div class="cil_right">
                                <p>Ne deluje na tankim i svetlim dlačicama</p>
                                <p>Skupa procedura</p>
                                <p>Osetljivost kože</p>
                            </div>
                        </div>
                    </div>
                    <div class="choice_item">
                        <div class="ci_image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ci3.jpg"/></div>
                        <div class="ci_title">
                            Vosak/Šećerna pasta
                        </div>
                        <div class="ci_price">
                            <div class="text">
                                Po tretmanu
                            </div>
                            <div class="numb">
                                4500<span>{{ $prices[1]['currency'] }}</span>
                            </div>
                        </div>
                        <div class="ci_often">Učestalost procedure: <span>Na 3 nedelje</span></div>
                        <div class="ci_list">
                            <div class="cil_left">
                                Nedostaci:
                            </div>
                            <div class="cil_right">
                                <p>Bol</p>
                                <p>Iritacija</p>
                                <p>Urastanje dlaka</p>
                                <p>Propuštene dlake</p>
                                <p>Fleke na koži</p>
                            </div>
                        </div>
                    </div>
                    <div class="choice_item main">
                        <div class="ci_image">
                            <img alt="" class="ci_image_d" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ci4.png"/>
                            <img class="ci_image_p" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/ci4p.png" alt=""/></div>
                        <div class="ci_title">
                            Hair Removal Cream
                        </div>
                        <div class="ci_price">
                            <div class="text">
                                Cena pakovanja
                            </div>
                            <div class="numb">
                                {{ $prices[1]['amount'] }}
                                <span>{{ $prices[1]['currency'] }}</span>
                            </div>
                        </div>
                        <div class="ci_often">Dlake se <span>momentalno elimninišu</span></div>
                        <div class="ci_list">Pakovanje može da se služi za 10 depilacija</div>
                        <div class="ci_time"><span>Nema kontraindikacija</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <h2><span class="mhide">UTISCI KUPACA KOJI SU VEĆ KORISTILI HAIR REMOVAL CREAM</span>
                    <span class="mvis">UTISCI KUPACA</span></h2>
                <div class="reviews_block">
                    <div class="rev_item">
                        <div class="name"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev1.jpg"/> <b>Anastasija</b></div>
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev_img1.jpg"/>
                        <div class="text">
                            <p>
                                Imam veoma tanku i osetljivu kožu, tako da mi je posle depilacije stalno ostajalo crvenilo, morala sam da nosim farmerice i pantalone čak i leti. Nedivno sam dobila prestižan posao
                                i tamo me kodeks oblačenja obavezuje da nosim suknju. Hair Removal Cream me rešio crvenila i neželjenih dlačica na nogama, a i značajno je povećao moje samopouzdanje. Sada bez problema
                                nosim suknje i šortseve.
                            </p>
                        </div>
                    </div>
                    <div class="rev_item">
                        <div class="name"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev2.jpg"/> <b>Marija</b></div>
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev_img2.jpg"/>
                        <div class="text">
                            <p>
                                Koristim ovu kremu i veoma sam zadovoljna. Prezadovoljna sam mojim glatkim nogama, a primećujem i da dlake dosta manje rastu. Svima preporučujem ovaj proizvod - što se tiče odnosa cene i kvaliteta, ne može biti bolje.
                            </p>
                        </div>
                    </div>
                    <div class="rev_item">
                        <div class="name"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev3.jpg"/> <b>Olga</b></div>
                        <img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/rev_img3.jpg"/>
                        <div class="text">
                            <p>
                                Uvek sam mrzila depilaciju voskom zbog bola, posebno kada je u pitanju bikini zona. Pored toga, nedavno sam se susrela sa problemima uraslih dlačica. Prijatljica me je posavetovala da kupim Hair Removal Cream preko vašeg sajta.
                                Ne da mi je krema pomogla, nego sam oduševljena. Skidam dlačice bez ikakvog bola, samo ih obrišem peškirom i to je to. Extra, stvarno je za svaku preporuku!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="care">
{{--            <div class="container">--}}
{{--                <div class="care_block">--}}
{{--                    <h2 class="line3">Остерегайтесь подделок!</h2>--}}
{{--                    <img alt="" class="care_img care_d" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/care.png"/>--}}
{{--                    <img alt="" class="care_img care_p" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/care_p.png"/>--}}
{{--                    <div class="care_text">--}}
{{--                        <p><b>С ростом популярности Kingyes на рынке участились случаи подделок средства.</b></p>--}}
{{--                        <p>--}}
{{--                            Такая продукция не только не оправдывает надежды покупателей, не отвечая заявленному--}}
{{--                            мошенниками качеству, но и может быть опасной для здоровья! Входящие в состав подделок--}}
{{--                            токсичные синтетические--}}
{{--                            компоненты способны вызвать аллергическую реакцию.--}}
{{--                        </p>--}}
{{--                        <p>Поэтому мы настоятельно рекомендуем приобретать продукт только на официальном сайте--}}
{{--                            официального дистрибьютора!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="care_bottom">
                <div class="container">
                    <div class="cb_inner">
                        <div class="text">
                            Garantujemo da ćete dobiti proizvod koji će rešiti vaše probleme sa suvišnim dlačicama i učiniti da budete spremne za leto!
                        </div>
                        <div class="button">
                            <a class="btn btn2" href="#footer">PORUČITE SADA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="order_top">
                <div class="container">
                    <div class="stitle">
                        <h2 class="line2">3 <span class="mhide">JEDNOSTAVNA</span> KORAKA DO <span>HAIR REMOVAL CREAMA</span></h2>
                    </div>
                    <div class="order_block">
                        <div class="order_item">
                            <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/order1.png"/></div>
                            <p>
                                Ostavite podatke <br/> na našem sajtu
                            </p>
                        </div>
                        <div class="order_item">
                            <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/order2.png"/></div>
                            <p>
                                Kontaktiraćemo vas <br/> da potvrdimo porudžbinu
                            </p>
                        </div>
                        <div class="order_item">
                            <div class="image"><img alt="" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/order3.png"/></div>
                            <p>
                                Plaćate tek po <br/> preuzimanju paketa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order_bottom">
                <div class="container">
                    <div class="ob_block">
                        <div class="ob_item">
                            <b>
                                ŠALJEMO BRZOM POŠTOM <br/>
                                U ROKU OD <span>1-2 <br/>
                                RADNA DANA</span>
                            </b>
                        </div>
                        <div class="ob_item">
                            <b>
                                NEMA <br/>
                                PLAĆANJA <br/>
                                <span>UNAPRED</span>
                            </b>
                        </div>
                        <div class="ob_item">
                            <b>
                                PREKO 5300 <br/>
                                <span>ZADOVOLJNIH</span><br/>
                                KUPACA
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="footer" class="header_bottom">
            <div class="container">
                <div class="main_title">
                    <h1><b>HAIR REMOVAL</b></h1>
                    <h2>ZA UKLANJANJE DLAKA</h2>
                    <div class="main_slog">Nežan prema koži, nemilosrdan prema dlačicama</div>
                </div>
            </div>
            <div class="container">
                <div class="prod_sale">
                    <ul class="list">
                        <li>Uklanja dlake bez bola i mučenja</li>
                        <li>Ima maksimalnu efikasnost</li>
                        <li>Ne pravi iritaciju</li>
                        <li>Hrani kožu i čini je mekšom</li>
                    </ul>
                    <img alt="" class="main_prod" src="{{ asset('/') }}purplegraceFiles/hairremovalcream/product.png"/>
                    <div class="sale_block">
                        <div class="sale">Poručite sada i <b>iskoristite akciju od 40%</b></div>
                        <div class="count">
                            <div class="countbox"></div>
                        </div>
                        <div class="price">
                            <div class="old_price">
                                <div class="title">
                                    Redovna cena:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['originalPrice'] }}
                                    <span class="cur">{{ $prices[1]['currency'] }}</span>
                                </div>
                            </div>
                            <div class="new_price">
                                <div class="price_title">
                                    Cena na akciji:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['amount'] }}
                                    <span class="cur">{{ $prices[1]['currency'] }}</span>
                                </div>
                            </div>
                        </div>
                        <form class="sale_form" action="{{$orderRoute}}" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="name" name="name" required="" placeholder="Ime i prezime" type="text"/>
                            <input required="" class="phone" name="phone" placeholder="Telefon" type="text"/>
                            <div class="secure">
                                Vaši podaci su zaštićeni
                            </div>
                            <button class="btn">PORUČITE SADA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplegraceFiles/hairremovalcream/common.js"></script>
@include('components.pixel_footer')
</body>
</html>
