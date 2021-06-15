<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport" />
    <meta charset="utf-8" />

    <link type="text/css" href="{{ asset('/') }}innodermFiles/innoderm/mob/order_me.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic,700,700italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/mob/styles.css" rel="stylesheet" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/mob/owl.carousel.css" rel="stylesheet" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/mob/owl.theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/s3_leaf.png" type="image/png" rel="icon">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page">
    @include('components.display_errors')
    <div class="slide-1-bg">
        <div class="slide-1">
            <div class="content-block">
                <div class="s1-content-block">
                    <div class="s1-girl-bg"></div>
                    <div class="s1-banka-bg"> <img alt="banka" class="s1-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaM.png" width="250" /> </div>
                    <h1>Inno Gialuron</h1>
                    <div class="h2-wr">
                        <h2 class="s1-h2">
                            Savršena koža
                            <span class="text-wr">
                                <span class="color">za</span>
                                <span class="size">12</span>
                                <span class="color">dana</span>
                            </span>
                        </h2> </div>
                    <div class="s1-discount-block">
                        <p class="s1-discount-text">Popust</p>
                        <p class="s1-discount-value">-40%</p>
                        <p class="s1-discount-text-2">za prvu narudžbu</p>
                    </div>
                    <div class="s1-prices-block"> <span class="new-price">{{ $prices[1]['amount'] }} RSD</span> <span class="old-price">{{ $prices[1]['originalPrice'] }} RSD</span> </div>
                    <div class="s1-button-wr">
                        <div class="s1-button pre_toform" data-scroll=""> Naručite <span>  ODMAH  </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-2">
            <div class="content-block">
                <div class="s2-content-block">
                    <ul class="s2-icons">
                        <li class="icon-1">
                            <p class="text-1">Smanjuje</p>
                            <p class="text-2">BORE</p>
                        </li>
                        <li class="icon-2">
                            <p class="text-1">Vraća</p>
                            <p class="text-2">ELASTIČNOST</p>
                        </li>
                        <li class="icon-3">
                            <p class="text-1">Zateže</p>
                            <p class="text-2">LICE</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-3">
        <div class="content-block">
            <div class="s3-content-block">
                <h2 class="s3-h2">
                    Glavni problemi sa kožom
                    <div>nakon 30</div>
                </h2>
                <ul class="s3-list">
                    <li class="li-1">
                        <div class="percent-1">
                            <div class="p-text">83%</div>
                        </div>
                        <div class="text-1">Velike pore i</div>
                        <div class="text-1">iritirana koža</div>
                    </li>
                    <li class="li-2">
                        <div class="percent-2">
                            <div class="p-text">88%</div>
                        </div>
                        <div class="text-1">Gubitak oblika,</div>
                        <div class="text-1">opuštanje kože</div>
                    </li>
                    <li class="li-3">
                        <div class="percent-3">
                            <div class="p-text">71%</div>
                        </div>
                        <div class="text-1">Prve dubinske</div>
                        <div class="text-1">bore</div>
                    </li>
                    <li class="li-4">
                        <div class="percent-4">
                            <div class="p-text">44%</div>
                        </div>
                        <div class="text-1">Neujednačen</div>
                        <div class="text-1">ten</div>
                    </li>
                </ul>
                <div class="s3-bottom-text"> *prema istraživanjima sprovedenim nad 1590 žena iz 38 zemalja starosti od 30-60 godina </div>
            </div>
        </div>
    </div>
    <div class="slide-4">
        <div class="content-block">
            <div class="s4-content-block">
                <h2 class="s4-h2">
                    <div>Inno Gialuron</div>
                    Revolucija u PODMLAĐIVANJU
                </h2>
                <div class="s4-text"> Čista izvorska voda, temeljno izbalansiran sastav i desetine proaktivnih biljnih sastojaka omogućavaju <span>intenzivnu negu protiv starenja</span> i čine vašu kožu ponovo mladom. Inovativna rešenja u kozmetologiji daju vidljiv rezultat za nekoliko dana. </div>
                <div class="s4-sticker">
                    <div class="s4-sticker-text-wr">
                        <div class="text-1">EFEKAT</div>
                        <div class="text-2">za nekoliko</div>
                        <div class="text-2">dana!</div>
                    </div> <img alt="banka.png" class="s4-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" /> </div>
            </div>
        </div>
    </div>
    <div class="slide-5">
        <div class="content-block">
            <div class="s5-content-block">
                <div class="s5-h2"> 4 koraka ka
                    <div>mladosti kože</div>
                </div>
                <ul class="s5-list">
                    <li>
                        <div class="s5-vline"></div>
                        <div class="num">1</div>
                        <div class="title">Čišćenje</div>
                        <p class="text"> Pažljivo skinite šminku koristeći omiljeno sredstvo za umivanje. Zapamtite da voda ne sme biti previše vruća. Posušite kožu peškirom bez trljanja. </p>
                    </li>
                    <li>
                        <div class="num">2</div>
                        <div class="title">Toniziranje</div>
                        <p class="text"> Nanesite tonik za lice na kozmetički jastučić i obrišite kožu. Ako je potrebno, učinite to dva puta da biste pripremili lice za nanošenje sredstava za negu. </p>
                    </li>
                    <li>
                        <div class="num">3</div>
                        <div class="title"> Hidratacija </div>
                        <p class="text"> Ovo je najvažnija faza nege lica. Izbor hidratantnog mleka predstavlja osnovu vaše nege i garanciju dugotrajne mladosti kože. Koristite inovativno mleko InnoGialuron da biste se rešili već postojećih bora i sprečili pojavu novih. </p>
                    </li>
                    <li>
                        <div class="num">4</div>
                        <div class="title"> Nega </div>
                        <p class="text"> Nakon što ste naneli mleko, možete upotrebiti kremu- InnoGialuron se upija vrlo brzo i ne ometa delovanje drugih sredstava za negu. Osim ovoga, mleko se može koristiti i kao samostalno sredstvo za prevenciju dehidratacije i starenja kože. </p>
                    </li>
                </ul>
                <div class="s5-button-wr">
                    <div class="s1-button pre_toform" data-scroll=""> Naručite <span>  ODMAH  </span> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-6">
        <div class="content-block">
            <div class="s6-cotent-block">
                <h2 class="s6-h2">
                    TAJNA
                    <div>delotvornosti</div>
                </h2>
                <ul class="s6-list">
                    <li>
                        <div class="icon-1"></div>
                        <div class="title" style="width: 70%; line-height: 1;"> Ekstrakt čaja i alge laminaria </div>
                        <p class="text"> Ekstrakt čaja neutrališe negativni uticaj UV zraka a ekstrakt alge laminaria umiruje i štiti osetljivu
                            <ko class=""></ko>
                        </p>
                    </li>
                    <li>
                        <div class="icon-2"></div>
                        <div class="title" style="width: 70%; line-height: 1;"> Hijaluronska, folna kiselina i ekstrakt alge fukus </div>
                        <p class="text"> Hijaluronska kiselina koži daje elastičnost, čvrstoću i hidrataciju, folna kiselina pojačava efekat podmlađivanja seruma, a ekstrakt alge fukus potiče proizvodnju kolagena i povećava regeneraciju. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="slide-7">
        <div class="content-block">
            <div class="s7-content-block">
                <h2 class="s7-h2">
                    MIŠLJENJA <span style="display: block;">stvarnih žena</span>
                </h2>
                <div class="s7-list" id="owl">
                    <div class="item">
                        <div class="image"> <img alt="s12_review_1.png" src="{{ asset('/') }}innodermFiles/innoderm/mob/s12_review_1.png" />
                            <ul class="s7-list-2">
                                <li>
                                    <div class="s7-before">
                                        <div class="text-2">PRE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="s7-after">
                                        <div class="text-3">POSLE</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="title-1"> Ana, 37 </div>
                        <div class="title-2"> Postignuti rezultati za <span class="size">10</span> <span class="color">dana</span> </div>
                        <p class="text"> Nisam imala dubinske bore, nego male mimičke bore, a i boju kože je trebalo poboljšati. Uz serum Inno Gialuron, bore su nestale a koža lica je postala tako sveža da izgledam mlađe od 30. </p>
                    </div>
                    <div class="item">
                        <div class="image"> <img alt="s12_review_1.png" src="{{ asset('/') }}innodermFiles/innoderm/mob/s12_review_2.png" />
                            <ul class="s7-list-2">
                                <li>
                                    <div class="s7-before">
                                        <div class="text-2">PRE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="s7-after">
                                        <div class="text-3">POSLE</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="title-1"> Snežana, 39 </div>
                        <div class="title-2"> Postignuti rezultati za <span class="size">14</span> <span class="color">dana</span> </div>
                        <p class="text"> Kupila sam Inno Gialuron serum pre nekog vremena i već sam zadovoljna rezultatima - lice se zateglo, bore su se smanjile. Pored toga, pore su se suzile. Sada se uvek sebi divim ispred ogledala. A najvažnija stvar je da rezultati postaju vidljivi za dva dana. </p>
                    </div>
                    <div class="item">
                        <div class="image"> <img alt="s12_review_1.png" src="{{ asset('/') }}innodermFiles/innoderm/mob/s12_review_3.png" />
                            <ul class="s7-list-2">
                                <li>
                                    <div class="s7-before">
                                        <div class="text-2">PRE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="s7-after">
                                        <div class="text-3">POSLE</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="title-1"> Marija, 44 </div>
                        <div class="title-2"> Postignuti rezultati za <span class="size">13</span> <span class="color">dana</span> </div>
                        <p class="text"> Posle 40. godine, koža nije ista, a nisam verovala da će ovaj serum da pomogne. Ali Inno Gialuron je stvarno efikasan - lice izgleda svežije, boja nije tako tamna, bore nestaju. Veoma mi je drago. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-8">
        <div class="content-block">
            <div class="s8-content-block">
                <div class="s8-text"> Potpuna <span>hidratacija</span> najdubljih slojeva kože se postiže nakon nekoliko primena. </div>
                <ul class="s8-list">
                    <li class="li-1">
                        <div class="s8-before">
                            <div class="text">PRE</div>
                        </div>
                    </li>
                    <li class="li-2">
                        <div class="s8-after">
                            <div class="text">POSLE</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="slide-9">
        <div class="content-block">
            <div class="s9-content-block">
                <h2 class="s9-h2">
                    Eksperti
                    <div>preporučuju</div>
                </h2>
                <div class="s9-text"> <img alt="s9_doctor" class="s9-doctor" src="{{ asset('/') }}innodermFiles/innoderm/mob/s9_doctor.jpg" /> Inno Gialuron je dokazao svoju efikasnost. Njegova glavna prednost je složena nega. Serum može da se koristi i za kompleksan, POTPUN PROGRAM PODMLAĐIVANJA KOŽE LICA i za preventivne mere. Bore su savršeno zaglađene, ten postaje ujednačen. Preporučujem ovaj serum svima onima koji žele da poboljšaju kvalitet kože i onima koji trebaju da zaštite kožu od bilo kakvih nedostataka. Ipak, suva koža koja se peruta može da se pobora za samo nekoliko dana i veoma je teško posle izravnati ove fine linije. </div>
            </div>
        </div>
    </div>
    <div class="slide-10-11-bg">
        <div class="slide-10">
            <div class="content-block">
                <div class="s10-content-block">
                    <h2 class="s10-h2">Inno Gialuron</h2>
                    <div class="s10-text-1"> EFIKASAN NAČIN </div>
                    <div class="s10-text-2-wr">
                        <div class="s10-text-2"> da pobedite starenje i bore </div>
                    </div>
                    <div class="s10-leaf"></div>
                </div>
                <div class="s10-over-product"></div> <img alt="banka" class="s10-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" /> </div>
        </div>
        <div class="slide-11">
            <div class="content-block">
                <div class="s1-discount-wr">
                    <div class="s1-discount-block style2">
                        <p class="s1-discount-value">-40%</p>
                        <p class="s1-discount-text style2"><span>Dajemo </span> POPUST</p>
                        <p class="s1-discount-text-2 style2">za prvu narudžbu</p>
                    </div>
                    <div class="s1-prices-block style2">
                        <div class="old-price style2">{{ $prices[1]['originalPrice'] }} RSD</div>
                        <div class="new-price">{{ $prices[1]['amount'] }} RSD</div>
                    </div>
                </div>
                <a id="hiddenClick" href="#form-order" style="display:none;"></a>
                <form class="form" id="form-order" action="{{$orderRoute}}" method="POST">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <label class="text-field" for="user_name">
                        <input class="input-text" id="user_name" name="name" placeholder="Ime i prezime" type="text" required /> </label>
                    <label class="text-field" for="user_phone">
                        <input class="input-text only_number" id="user_phone" name="phone" placeholder="Telefon" type="tel" required /> </label>
                    <div class="s1-button style2 js_submit">
                        <span>Naručiti</span>
                    </div>
                    <button type="submit" id="hiddenSubmit" style="display:none;"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}innodermFiles/innoderm/mob/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.pre_toform').click(function() {
            var orderForm = $('#form-order').last().offset().top;
            $('html,body').animate({
                scrollTop: orderForm
            }, 700);
            $('#hiddenClick').click();
            return false;
        });
        $('#owl').owlCarousel({
            singleItem: true
        });
        $('.js_submit').click(function() {
            $('#hiddenSubmit').click();
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>