<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <script src="{{ asset('/') }}neoshowerFiles/jonskitus/jquery.min.js"></script>
    <link href="{{ asset('/') }}neoshowerFiles/jonskitus/favicon.ico" rel="icon" type="image/x-icon">
    <link href="{{ asset('/') }}neoshowerFiles/jonskitus/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('/') }}neoshowerFiles/jonskitus/style.css" rel="stylesheet">
    <style>.header_bottom{padding-top:55px;background:url("{{ asset('/') }}neoshowerFiles/jonskitus/main_bg.jpg") no-repeat top center;height:720px;position:relative;z-index:2}.list li:before{content:"";position:absolute;left:-30px;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);background:url("{{ asset('/') }}neoshowerFiles/jonskitus/list.png");width:31px;height:31px}.secure{font-size:14px;color:#2d1818;background:url("{{ asset('/') }}neoshowerFiles/jonskitus/secure.png") no-repeat left center;padding-left:20px;margin:0 0 5px;display:inline-block}.nature{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/nature_bg.jpg") no-repeat top center/cover;padding-bottom:0}.diff{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/diff_bg.jpg") no-repeat top center;height:493px}.use{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/use_bg.jpg") no-repeat top center;height:435px;padding-top:75px}.reviews{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/reviews_bg.jpg") no-repeat top center/cover}.old_price:after{content:"";position:absolute;right:-28px;top:20px;background:url("{{ asset('/') }}neoshowerFiles/jonskitus/price_arrow.png");width:18px;height:24px;vertical-align:middle}.owl-next:before,.owl-prev:before{content:"";position:absolute;left:12px;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);background:url("{{ asset('/') }}neoshowerFiles/jonskitus/arrow.png");width:17px;height:27px}.owl-next:before{-webkit-transform:translateY(-50%) scale(-1,1);-ms-transform:translateY(-50%) scale(-1,1);transform:translateY(-50%) scale(-1,1);left:16px}.owl-next,.owl-prev{text-indent:-99999px;position:relative;border-radius:50%;background-color:#ff702a;border:2px solid #fff;width:52px;height:52px}.leika{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/leika_bg.jpg") no-repeat top center/cover}.order_item:first-child:before{content:"";position:absolute;background:url("{{ asset('/') }}neoshowerFiles/jonskitus/order_arrow.png") no-repeat;width:546px;height:26px;top:55px;right:-400px}.expert{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/expert_bg.jpg") no-repeat top center;height:706px;padding-top:72px}.order{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/order_top.jpg") no-repeat top center;padding-bottom:0}.order_now{display:flex;justify-content:center}a{text-decoration:none}@media (max-width:980px){.header_bottom{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/main_bg.jpg") no-repeat top center;height:775px;padding-top:60px}.diff{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/diff_bg.jpg") no-repeat top center;height:525px;padding-top:40px}.use{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/use_bg.jpg") no-repeat top center;height:435px;padding-top:45px}.expert{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/expert_bg.jpg") no-repeat top center;height:593px;padding-top:45px}.order_item:first-child:before{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/order_arrow2.png") no-repeat;width:546px;height:26px;right:-410px}}@media (max-width:665px){.header_bottom{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/main_bg_m.jpg") no-repeat top center;height:1116px;padding-top:20px}.diff{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/diff_bg_m.jpg") no-repeat top center;height:820px;padding-top:40px}.use{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/use_bg_m.jpg") no-repeat top center;height:710px;padding-top:45px}.expert{background:url("{{ asset('/') }}neoshowerFiles/jonskitus/expert_bg_m.jpg") no-repeat top center;height:1010px;padding-top:45px;padding-bottom:0}.numb{font-size:30px!important}.new_price{margin-left:20px}}</style>
</head>
<body>
<div class="wrap">
    <header class="main_block">
        <div class="header_bottom">
            <div class="container">
                <div class="main_title">
                    <h1>JONSKI TUŠ <span>«NEOSHOWER»</span> </h1>
                    <div class="subtitle">
                        Inovativni tuš za zdravije
                        <nobr>tuširanje</nobr>
                    </div>
                </div>
                <ul class="list">
                    <li>ODSTRANJUJE TEŠKE METALE</li>
                    <li>ŠTEDI DO 35% VODE</li>
                    <li>POJAČAVA MLAZ ZA 200%</li>
                    <li>PREČIŠĆAVA I OMEKŠAVA VODU</li>
                </ul>
                <div class="discont">
                    Akcija
                    <div class="numb">
                        -40<small>%</small>
                    </div>
                </div>
                <div class="sale_block">
                    <div class="p_and_count">
                        <div class="price">
                            <div class="old_price">
                                <div class="title">
                                    Stara cena:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['originalPrice'] }}<span class="cur"> RSD</span>
                                </div>
                            </div>
                            <div class="new_price">
                                <div class="title">
                                    Nova cena:
                                </div>
                                <div class="numb">
                                    {{ $prices[1]['amount'] }}<span class="cur"> RSD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="order_now" href="{{$checkoutView}}"><button class="btn">Poruči odmah</button></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="nature">
            <div class="nature_block">
                <div class="container">
                    <div class="nature_slider">
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns1.jpg"></div>
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns2.jpg"></div>
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns3.jpg"></div>
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns4.jpg"></div>
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns5.jpg"></div>
                        <div class="ns_item"><img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/ns6.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="leika">
            <div class="container">
                <div class="stitle grey">
                    <h2>
                        Zašto jonski tuš
                        <nobr>«Neoshower»?</nobr>
                    </h2>
                </div>
                <div class="leika_block">
                    <img src="{{ asset('/') }}neoshowerFiles/jonskitus/leika_img2.png" class="leika_img2" alt="">
                    <img src="{{ asset('/') }}neoshowerFiles/jonskitus/leika_img3.png" class="leika_img3" alt="">
                    <div class="text">
                        <p>Da li su vam koža i kosa previše suvi? Stižu vam veliki računi za vodu? Ovi problemi mogu da imaju isti uzrok i vreme je da učinite nešto po tom pitanju.
                        <b>Inovativna Neoshower tuš baterija pomoći će vam u prečišćavanju vode, brizi o zdravlju kože i uštedi novca.</b> </p>
                        <p class="white"><b>Zahvaljujući posebnom filteru koji se sastoji od granula turmalina i uglja i 340 sićušnih rupica, </b> glava tuša
                            <b>uklanja teške metale, hrđu i hlor iz vode.</b> Deluje antibakterijski.</p>
                        <p><b>Jednostavno zavrnite Neoshower tuš bateriju i zauvek ćete zaboraviti na suvu kožu, neugodan miris vode i zastrašujuće račune za vodu!</b></p>
                        <a href="{{$checkoutView}}" class="btn">Poruči odmah</a>
                    </div>
                    <img src="{{ asset('/') }}neoshowerFiles/jonskitus/leika_img.png" class="leika_img" alt="">
                </div>
            </div>
        </section>
        <section class="preim">
            <div class="container">
                <div class="stitle blue">
                    <h2>
                        Prednosti "Neoshower" tuš baterije
                    </h2>
                </div>
                <div class="preim_block">
                    <div class="preim_item">
                        <div class="image">
                            <img src="{{ asset('/') }}neoshowerFiles/jonskitus/preim1.png" alt="">
                        </div>
                        <div class="text">
                            <b>UŠTEDITE DO 35% VODE</b>
                            <p>Idealno za uštedu vode. Pritisak je jači za 200% zahvaljujući inovativnoj strukturi tuš baterije koja poseduje 2 sloja minerala za prečišćavanje vode.</p>
                        </div>
                    </div>
                    <div class="preim_item preim_item2">
                        <div class="image">
                            <img src="{{ asset('/') }}neoshowerFiles/jonskitus/preim2.png" alt="">
                        </div>
                        <div class="text">
                            <b>NEGUJTE ZDRAVLJE</b>
                            <p>Čini kožu mekšom, smanjuje lučenje sebuma, povećava aktivnost ćelija i sprečava gubitak kose.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="diff">
            <div class="container">
                <div class="stitle">
                    <h2>
                        Savremena tuš baterija <span>«Neoshower»</span>
                    </h2>
                </div>
                <div class="diff_block">
                    <div class="diff_item diff_item1">
                        <b>PRUŽA UŽITAK</b>
                        <p>Snažan protok vode <br>ne iritira kožu i <br> deluje kao masažer</p>
                    </div>
                    <div class="diff_item diff_item2">
                        <b>STIMULIŠE KOŽU</b>
                        <p>Posebno ciljani mlazovi vode <br>stimulišu kožu, čine je čvršćom, <br>mekšom i elastičnijom</p>
                    </div>
                    <div class="diff_item diff_item3">
                        <b>TEHNOLOGIJA NEGATIVNIH JONA</b>
                        <p>Uklanja štetne materije i <br>neugodan miris iz vode</p>
                    </div>
                    <div class="diff_item diff_item4">
                        <b>FILTRIRAJUĆE <br>
                            MINERALNE KUGLICE</b>
                        <p>Čiste vodu za tuširanje i ostavljaju <br>kosu mekom i svilenkastom</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="use">
            <div class="container">
                <div class="stitle white">
                    <h2>
                        Štetne materije u vodi
                    </h2>
                </div>
                <div class="use_item imgItem">
                    <img src="{{ asset('/') }}neoshowerFiles/jonskitus/use1.png" alt="">
                    <p>Ovakav sadržaj ispada iz creva starog samo dve godine.</p>
                </div>
            </div>
        </section>
        <section class="expert">
            <div class="container">
                <div class="stitle">
                    <h2>Mišljenje stručnjaka</h2>
                </div>
                <div class="expert_block">
                    <div class="text">
                        <p style="line-height: 26px;">Lična higijena nam omogućava ne samo da budemo urednije osobe, već utiče i na stanje unutrašnjih organa i kože.
                            Voda koja se koristi u kućama i stanovima je u većini gradova lošijeg kvaliteta, tvrda, puna kamenca i teških metala.</p>
                        <p style="line-height: 26px;">Voda u bojleru vrlo često dugo stoji i pod visokom temperaturom sklona je izuzetno velikom taloženju teških metala i kamenca,
                            kojih svakako ima u visokom procentu u gradskim cevovodima.
                            Za sve koji nisu sigurni u kvalitet vode iz slavine, preporučujem tuš "Neoshower".</p>
                        <p style="line-height: 30px; padding-top: 10px;">Rešava problem preteranog hlorisanja vode, uklanja ostatke rđe iz cevi i teške metale koji se nalaze u vodi.
                            Pored toga, poseban raspored rupica na tuš bateriji omogućava mlazovima vode da obavljaju masažnu funkciju i na taj način pored prečišćavanja vode, opuštaju i telo.</p>
                    </div>
                    <div class="name">
                        <div class="text">
                            <b>Valerija Savić</b>
                            Vodeći specijalista Centra za higijenu i epidemiologiju
                        </div>
                        <img src="{{ asset('/') }}neoshowerFiles/jonskitus/sign.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="stitle grey">
                    <h2>Šta kažu naši kupci?</h2>
                </div>
                <div class="rev_block">
                    <div class="rev_item">
                        <div class="image">
                            <img src="{{ asset('/') }}neoshowerFiles/jonskitus/rev1.png" alt="">
                        </div>
                        <div class="text">
                            <div class="name">
                                Mirjana
                            </div>
                            <p>Godinama imam dermatitis. Probala sam kreme za kožu, menjala način ishrane, pa čak sam probala i istočnu medicinu, ali pomogao mi je samo ovaj tuš.
                                Sada moja koža nije toliko suva i ne svrbi me, sem kada je izuzetno vruće napolju. I konačno mogu ponovo da trčim!</p>
                        </div>
                    </div>
                    <div class="rev_item">
                        <div class="image">
                            <img src="{{ asset('/') }}neoshowerFiles/jonskitus/rev2.png" alt="">
                        </div>
                        <div class="text">
                            <div class="name">
                                Marko
                            </div>
                            <p>Kupio sam ovaj tuš jer mi je neko rekao da će mi dosta uštedeti na računu za vodu.
                                Bio sam malo skeptičan na početku, ali od kada ga koristimo naš račun za vodu je manji za skoro 40%,
                                tako da se tuš isplatio posle jednog meseca.</p>
                        </div>
                    </div>
                    <div class="rev_item">
                        <div class="image">
                            <img src="{{ asset('/') }}neoshowerFiles/jonskitus/rev3.png" alt="">
                        </div>
                        <div class="text">
                            <div class="name">
                                Sonja
                            </div>
                            <p>Nikada nisam imala bolji tuš od ovog! Moja deca obožavaju da se tuširaju njime, a ja sam primetila da mi je kosa mekša, kao i koža.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="order_top">
                <div class="container">
                    <div class="stitle">
                        <h2><span>3 jednostavna koraka</span> za kupovinu <br>
                            tuša <span>«Neoshower»</span>
                        </h2>
                    </div>
                    <div class="order_block rel">
                        <div class="order_item">
                            <img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/order1.png"> <b>Unesite podatke<br>
                                za dostavu</b>
                        </div>
                        <div class="order_item">
                            <img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/order2.png"> <b>Potvrdićemo<br>
                                vašu porudžbinu</b>
                        </div>
                        <div class="order_item">
                            <img alt="" src="{{ asset('/') }}neoshowerFiles/jonskitus/order3.png"> <b>Paket<br>
                                plaćate<br>
                                pouzećem</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order_bottom">
                <div class="container">
                    <div class="ob_block">
                        <div class="ob_item">
                            <b>DOSTAVA<br>
                                <span>BILO GDE U ZEMLJI</span><br>
                                <br class="pvis">
                                U ROKU OD 1 RADNOG DANA</b>
                        </div>
                        <div class="ob_item">
                            <b><span>PORUČENU ROBU</span><br>
                                MOŽETE PLATITI<br>
                                <br class="pvis">
                                 <span>TEK NAKON ŠTO PAKET STIGNE DO VAS</span></b>
                        </div>
                        <div class="ob_item">
                            <b><span>VRATIĆEMO VAM NOVAC</span><br>
                                UKOLIKO VAM SE<br class="pvis">
                                PROIZVOD<br>
                                <span>NE DOPADNE</span></b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main_block last_block">
            <div class="header_bottom">
                <div class="container">
                    <div class="main_title">
                        <h1>JONSKI TUŠ <span>«NEOSHOWER»</span> </h1>
                        <div class="subtitle">
                            Inovativni tuš za zdravije
                            <nobr>tuširanje</nobr>
                        </div>
                    </div>
                    <ul class="list">
                        <li>ODSTRANJUJE TEŠKE METALE</li>
                        <li>ŠTEDI DO 35% VODE</li>
                        <li>POJAČAVA MLAZ ZA 200%</li>
                        <li>PREČIŠĆAVA I OMEKŠAVA VODU</li>
                    </ul>
                    <div class="discont">
                        Akcija
                        <div class="numb">
                            -40<small>%</small>
                        </div>
                    </div>
                    <div class="sale_block">
                        <div class="p_and_count">

                            <div class="price">
                                <div class="old_price">
                                    <div class="title">
                                        Stara cena:
                                    </div>
                                    <div class="numb">
                                        {{ $prices[1]['originalPrice'] }}<span class="cur"> RSD</span>
                                    </div>
                                </div>
                                <div class="new_price">
                                    <div class="title">
                                        Nova cena:
                                    </div>
                                    <div class="numb">
                                        {{ $prices[1]['amount'] }}<span class="cur"> RSD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="order_now" href="{{$checkoutView}}"><button class="btn">Poruči odmah</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.company_footer')
</div>
@include('components.pixel_footer')
<script src="{{ asset('/') }}neoshowerFiles/jonskitus/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}neoshowerFiles/jonskitus/common.js"></script>
</body>
</html>