<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtremeshape/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtremeshape/style.css">
    <style>
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Regular.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Regular.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Black.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Black.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Black.ttf") format("truetype");
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="fix_menu">
    <div class="wrapper">
        <div class="container">
            <img class="logo" src="{{ asset('/') }}flexonikFiles/xtremeshape/logo.png" alt="">
            <ul class="benef1">
                <li><b>Skida santimetre već za mesec dana</b></li>
                <li><b>Više hiljada zadovoljnih korisnika</b></li>
                <li><b>Dostava za 24-48h</b></li>
            </ul>
            <a href="#order_form" class="button1">Naruči odmah</a>
        </div>
    </div>
</section>
<section class="offer">
    <div class="wrapper">
        <div class="content">
            <p class="main_title">Hot Belt <span></span></p>
            <h2 class="main_subtitle"><span>Brzo i lako</span> do željene figure</h2>
            <div class="main_product">
                <div class="product_name"><b>Pojas za</b>mršav i uzak struk</div>
                <img class="prod" src="{{ asset('/') }}flexonikFiles/xtremeshape/product.png" alt="">
                <img class="bef_after" src="{{ asset('/') }}flexonikFiles/xtremeshape/bef_after.png" alt="">
            </div>
            <div class="action_box">
                <p>Samo danas <span>40% popusta</span></p>
                <div class="price">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD</small></div>
                    <div class="new"><span>{{ $prices[1]['amount'] }}</span><small>RSD</small></div>
                </div>
                <a href="#order_form" class="button">Naruči sa popustom</a>
            </div>
        </div>
        <img class="figure" src="{{ asset('/') }}flexonikFiles/xtremeshape/figure_product.png" alt="">
        <a href="#id2" class="sect_btn"></a>
    </div>
</section>
<section class="sect2" id="id2">
    <div class="wrapper">
        <ul class="benef2">
            <li>
                <div class="top">Pogađa struk</div>
                <div class="bottom">Uz samo par dana nošenja imaćete struk kakav ste <br> oduvek sanjali.</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img1.png" alt="">
            </li>
            <li>
                <div class="top">Bezbedno skidanje stomaka</div>
                <div class="bottom">Uz normalnu upotrebu topi <br>masti sa stomaka i bokova</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img2.png" alt="">
            </li>
            <li>
                <div class="top">Oporavak posle <br>porođaja</div>
                <div class="bottom">Idealan za vraćanje <br>u prvobitnu liniju</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img3.png" alt="">
            </li>
        </ul>
    </div>
    <div class="bg_text">Hot Belt</div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title">Uverite se u <b>efikasnost ovog pojasa i kako <br> lako možete doći do</b> željenih rezultata</h2>
        <div class="column">
            <div class="left">
                <video loop preload autoplay controls=""><source src="{{ asset('/') }}flexonikFiles/xtremeshape/gif_video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="right">
                <div class="text">
                    <p><span>Dosta uvlačenja stomaka i nošenja velike odeće!</span> Za veoma kratko vreme postignite želejnu liniju! I ne samo to, dok vam pojas pomaže da smršate, takođe i popravlja držanje</p>
                    <p>Podrška za ledja koja je ušivena u pojas će <span>smanjiti opterećenje na vašu kičmu i rešiti vas svakog bola u lumbalno delu.</span> Ovo posebno pogoduje trudnicama koji veći deo dana nose dete u rukama.</p>
                    <p><span>Pojas vam pomaže i da regulišete ishranu.</span> Dok ga nosite, gotovo je nemoguće da preterate sa unosom hrane, tako da ćete biti sigurni da nećete uneti više hrane nego što je potrebno.</p>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/s3_img.jpg" alt="">
                <a href="#order_form" class="button">NARUČI SADA</a>
            </div>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/s4_woman.png" alt="">
        <div class="content">
            <div class="text">
                <h4><b>Koristite ovaj pojas i dostignite željenu figuru.</b> Nećete proči neprimećeno</h4>
                <p>Prvi put kada sam obukla Hot Belt nisam ni očekivala da ću dobiti toliko komplimenata na račun mog izgleda. Posećujem dosta eventova, i volim da ostavim utisak gde god se pojavim, i verujte da mi nijedna haljina nije pomogla da to i ostvarim kao Hot Belt.</p>
                <div class="author">
                    <p>Marija Kirilenko</p>
                    <small>modni dizajner, bloger, model</small>
                </div>
                <a href="#order_form" class="button width">NARUČI SADA SA POPUSTOM</a>
            </div>
        </div>
    </div>
    <div class="bg_text">Hot Belt</div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><b>Kako pojas topi santimetre, i skida masti sa stomaka i bokova? </b></h2>
        <div class="column">
            <div class="left">
                <p>Tajna Hot Belt pojasa je u double impact tehnologiji. Kombinacijom unutrasnjeg pojasa koji izaziva pojačano topljenje masti, i spoljasnjeg pojasa preko koga se podešava nivo kompresije, <span>naši korisnici efkisano skidaju kilažu.</span></p>
                <p><span>Unutrašnji pojas je izrađen od specijalnog Neotex-a i izaziva “efekat saune”.</span> Ubrzava znojenje i do 4 puta, i tako osim što topi višak masti, eliminiše i toksine iz tela. Uz pojačanu fizičku aktivnost masti se brže tope, te se zbog toga preporučuje fizička aktivnost uz korišćenje ovog pojasa.</p>
                <p><span>Specificnost ovog pojasa</span> je sto može uklanjati masti sa <span>bez fizičke aktivnosti</span>, ali je u tom slučaju potrebno da se pojas nosi svakodnevno prilikom obavljanja dnevnih aktivnosti - šetnje, kućnih poslova, na poslu i slično.</p>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/prod_size.jpg" alt="">
        </div>
        <a href="#order_form" class="button">Naručite odmah</a>
    </div>
    <div class="bg_text">Hot belt</div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><b>Rezultati praviih kupaca</b></h2>
        <p class="subtitle">Za najbolje rezultate, pojas nositi više sati dnevno oko mesec dana.</p>
        <div class="result_carousel owl-carousel">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result1.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result2.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result3.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result4.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result5.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result6.jpg" alt="">
        </div>
    </div>
</section>
<section class="sect7">
    <div class="bg_text top">Hot Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Zašto baš Hot Belt?</b></h2>
        <ul class="benef3">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img1.jpg" alt="">
                <p><b>Neotex ne izaziva iritacije i alergijske reakcije.</b> Zbog rupičaste tkanine na leđima vazduh neometano cirkuliše i onemogućava bilo kakve iritacije.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img2.jpg" alt="">
                <p><b>Podesiv nivo kompresije.</b> Uz pomoć trakica moežete da podesite nivo kompresije na onaj koji vama odgovara.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img3.jpg" alt="">
                <p><b>Elastičan materijal se ne rasteže i ne spada tokom dana,</b> kao i prilikom bavljenja sportom ili obavljanja drugih aktivnosti.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img4.jpg" alt="">
                <p><b>Nevidljiv ispod odeće i ne ograničava pokrete.</b> Jako je udoban, prijatan na dodir i dugovečan.</b></p>
            </li>
            <li class="order_li">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product1.png" alt="">
                <a href="#order_form" class="button">Naručite odmah</a>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img5.jpg" alt="">
                <p><b>Ne zahteva specijalnu negu i lak je za pranje.</b> Prilikom pranja ne gubi oblik i svoja svojstva.</p>
            </li>
        </ul>
    </div>
</section>
<section class="sect8">
    <div class="bg_text top">Hot Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Zašto je vrhunski izbor za posle porodjaja?</b></h2>
        <div class="column">
            <div class="left">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/mom.jpg" alt="">
            </div>
            <div class="right">
                <ul class="list1">
                    <li>Vraća tonus abdominalnim mišićima, jača i stanjuje struk, i ubrzava povratak u stanje pre porođaja</li>
                    <li>Pruža podršku mišićima trbušnog zida</li>
                    <li>Sprečava nastanak opuštene kože koju je posle teško vratiti u prvobitno stanje</li>
                    <li>Oslobađa kičmu pritiska tako da možete lakše i duže da nosite bebu u naručju</li>
                </ul>
            </div>
        </div>
        <div class="alert">
            Dok Vi posvećujete pažnju Vašem mališanu, Hot Belt će posvećivati pažnju Vama i brinuće se o Vašem izgledu.
        </div>
    </div>
</section>
<section class="sect9">
    <div class="bg_text top">Xtreme Power Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Preporuka profesionalaca</b></h2>
        <div class="expert_block">
            <div class="left">
                <div class="author">
                    <img src="{{ asset('/') }}flexonikFiles/xtremeshape/expert_ava.png" alt="">
                    <p><b>Natalija Kostic</b> fitnes instruktor</p>
                </div>
                <p>Jedno od najčešćih pitanja koje mi stiže u DM je da li su pojasevi i korseti efikasni i koji je najbolji?</p>
                <p>• Da, efikasni su i čak ih i ja koristim, ali samo ako koristite prave i originalne proizvode. Ja koristim Hot Belt zato sto pruža mojim leđima potporu, i linija mi je nikad bolja.</p>
                <p>• Nosim ga dok treniram, i oko 3 sata u toku dana.</p>
                <p>• Dosta mi pomaže u kontroli unosa hrane, oblikuje mišiće i generalno ga preporučujem svima.</p>
            </div>
            <div class="right">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/expert.jpg" alt="">
            </div>
        </div>
        <a href="#order_form" class="button">Naručite odmah</a>
    </div>
</section>
<section class="sect12">
    <div class="bg_text top">Hot Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Kako naručiti?</b></h2>
        <ul class="order_list">
            <li>
                <span>Forma</span>
                <p>Popunite formu i kliknite</p>
                <a href="#order_form" class="button cursor">NARUČI</a>
            </li>
            <li>
                <span>Potvrda</span>
                <p>Ubrzo ćete SMS porukom dobiti potvrdu porudžbine</p>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/order_phone.png" alt="">
            </li>
            <li>
                <span>Dostava & Plaćanje</span>
                <p>U roku od 24-48h proizvod će biti kod Vas, a kuriru plaćate po preuzimanju robe</p>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product2.png" alt="">
            </li>
        </ul>
        <div class="warn_block">
            <h4><span>Pažnja!</span> Kupujte od proverenih prodavaca!</h4>
            <img class="img" src="{{ asset('/') }}flexonikFiles/xtremeshape/fake_orig.png" alt="">
            <p>Sve je više prodavaca na crno koji prodaju kopiju robe po nerealno niskim cenama. </p>
            <p>Mi smo registrovano preduzeće za online trgovinu i kupovinom kod nas ostvarujete sva zakonska prava - garanciju, pravo na zamenu, pravo na povrat novca. Kupovinom kod neregistrovanih subjekata nemate nijedno zakonom zagarantovano pravo.</b></p>
            <div class="label">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/orig_label.png" alt="">
                <p>100% garancija kvaliteta</p>
            </div>
        </div>
    </div>
</section>
<section class="offer offer_bottom">
    <div class="wrapper">
        <div class="content">
            <p class="main_title">Hot Belt <span></span></p>
            <h2 class="main_subtitle"><span>BRZO I LAKO</span> do željene figure</h2>
            <div class="column">
                <div class="action_box">
                    <p>Samo danas <span>40% popusta</span></p>
                    <div class="price">
                        <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD</small></div>
                        <div class="new"><span>{{ $prices[1]['amount'] }}</span><small>RSD</small></div>
                    </div>
                    <div class="img">
                        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product2.png" alt="">
                        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product.png" alt="">
                    </div>
                </div>
                <div class="formbox">
                    <div class="action_text">
                        <span>Podaci za dostavu</span>
                    </div>
                    <form id="order_form" class="main-order-form main_form" action="{{$orderRoute}}" method="post">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input id="customer_firstname" value="" name="name" class="shipping-firstname" type="text" maxlength="30" placeholder="Ime i prezime" required="">
                        <input id="customer_phone" value="" name="phone" class="customer-phone" type="tel" maxlength="20" placeholder="Broj telefona" required="">
                        <input id="shipping_address" value="" name="shipping_address" class="shipping-address" type="text" maxlength="80" placeholder="Adresa" required="">
                        <input id="shipping_city" value="" name="shipping_city" class="shipping-city" type="text" maxlength="30" placeholder="Grad" required="">
                        @isset($productSizes)
                            <div class="sizeDiv">
                                <div class="action_text">
                                    <span>Izaberite veličinu</span>
                                </div>
                                <select name="size" class="size" required>
                                    @foreach($productSizes as $singleSize)
                                        <option value="{{$singleSize->product_size}}">{{$singleSize->product_size}} ({{$singleSize->description}})</option>
                                    @endforeach
                                </select>
                            </div>
                        @endisset
                        <button class="button">Naručite odmah</button>
                    </form>
                </div>
            </div>
        </div>
        <img class="figure" src="{{ asset('/') }}flexonikFiles/xtremeshape/figure_product.png" alt="">
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/xtremeshape/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {

        /* scroll */
        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top - $(".fix_menu").height() + 1 + "px"});
            return false;
        });

        $(window).on("load", function () {

            var rev_owl = function () {
                $('.reviews').owlCarousel({
                    loop: true,
                    center: true,
                    autoWidth: true,
                    autoHeight: true,
                    navText: "",
                    dots: false,
                    nav: true
                });
            };

            if ($(window).width() < 1200) {
                rev_owl();
            }

            $(window).resize(function () {
                if ($(window).width() < 1200) {
                    rev_owl();
                }
            });

            $('.result_carousel').owlCarousel({
                loop: true,
                autoHeight: true,
                center: true,
                autoWidth: true,
                navText: "",
                dots: false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });

        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>