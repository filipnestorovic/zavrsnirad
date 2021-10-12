<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/xtraband/prod_blue.png" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtraband/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtraband/style.css" />
    <script type="text/javascript" src="{{ asset('/') }}flexonikFiles/xtraband/owl.carousel.js"></script>
    <style>
        .freeShippingDiv {
            color: #fff;
            text-align: center;
            display: none;
            font-weight: bold;
            margin-top: 10px;
        }
        @media (max-width: 480px){
            #firstPrices {
                margin-top: 20px;
                margin-left: 10px;
            }
            #firstPrices .old-price {
                display: inline-block;
                font-size: 16px;
            }
            #firstPrices .new-price {
                display: inline-block;
                margin-left: 10px;
            }
            .btn-blue {
                margin-left: 15px;
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <header class="b-header">
        <div class="container">
            <div class="left-header">
                <div class="prod-title">
                    <span>FlexPro</span> Nove ojačane trake za treniranje
                </div>
                <h1>Za vitko,<br> izvajano <br/> telo</h1>
                <div class="term">
                    samo 10 minuta<br class="d-large">
                    dnevno
                </div>
                <ul class="b-pluses">
                    <li><img src="{{ asset('/') }}flexonikFiles/xtraband/without1.png" /> <br/> Bez gladovanja</li>
                    <li><img src="{{ asset('/') }}flexonikFiles/xtraband/without2.png" /> Bez napornih <br/> treninga i teretane</li>
                    <li><img src="{{ asset('/') }}flexonikFiles/xtraband/without3.png" /> Bez plaćanja <br/> ličnog trenera</li>
                </ul>
                <a href="#form" class="btn toform">Poručite!</a>
                <div class="b-prices" id="firstPrices">
                    <div class="old-price"><span class="js_old_price_curs"><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr">RSD</span></span></div>
                    <div class="new-price"><span class="js_new_price price_land_s1">{{ $prices[1]['amount'] }} </span> <span class="js_curs price_land_curr">RSD</span></div>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_desktop.png" class="desktop-prod d-large" alt="" />
            </div>
            <div class="sportgirl d-large">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/sportgirl.png" alt="" />
                <ul class="body-plus">
                    <li class="first-li"><span>vitke noge</span></li>
                    <li class="second-li"><span>elastična zadnjica</span></li>
                    <li class="third-li"><span>tanak stomak</span></li>
                    <li class="fourth-li"><span>izdefinisane ruke</span></li>
                </ul>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_mobile.png" alt="" class="d-mobile mobile-prod">
        </div>
    </header>
    <section class="section-first">
        <div class="container">
            <div class="col-2 d-large">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/Leg-Raise.gif" class="m-responsive " alt="" />
            </div>
            <div class="col-2">
                <div class="title-block m-blue">
                    Nove, elastične trake za vežbanje kod kuće<br/>
                    FlexPro
                </div>
                <div class="subtitle-block">
                    prečica do vitke figure
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtraband/girl_small.png" class="d-mobile d-center" alt="" />
                <ul class="prod-pluses">
                    <li>ne cepaju se</li>
                    <li>ne žuljaju</li>
                    <li>pogađaju sve mišićne grupe</li>
                    <li>staju u džep</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <section class="section-second">
        <div class="container">
            <div class="col-2">
                <div class="title-block">
                    Flex Pro Trake: Zakoni fizike i to je to
                </div>
                <div class="subtitle-block">
                    Sila otpora je tajna efikasnosti sjajnih <u>Flex pro</u> traka za vežbanje
                </div>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/xtraband/girl_second_m.png" class="girl-second d-mobile" alt="" />
            <div class="col-2 content-disperse">
                <p>Što je manji prečnik trake, veći je stepen otpora. Za početnike se preporučuje korišćenje najširih traka, dok za one koji su u treningu najuža.</p>
                <p>Flex traka je elasticna traka prstenastog oblika napravljena od najkvalitetnijeg poliestera i vlakana lateksa. Kako se rasteže, otpor se povećava što dovodi do većeg opterećenja mišića – 2 puta više nego što možete dobiti na spravama u teretani. Kako je izrađena od kvalitetnijih materijala nego ostale trake, FlexPro traka ne puca, ne uvija se i dugotrajnija je.</p>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/xtraband/girl_second.png" class="girl-second d-large" alt="" />
        </div>
    </section>
    <section class="section-third">
        <div class="container">
            <div class="exercise">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/exercise1.png" class="m-responsive" alt="" />
                <div class="ex-title m-pink">
                    Izvajane ruke
                </div>
                <ul class="ex-list ex-pink">
                    <li>Uspravite se</li>
                    <li>Postavite trake na zglobove
                        i savijte ruke ispred sebe</li>
                    <li>Vratite u početnu poziciju</li>
                    <li>Ponovite pokret 10-15 puta za svaku ruku</li>
                </ul>
            </div>
            <div class="exercise ">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/exercise2.png" class="m-responsive" alt="" />
                <div class="ex-title m-purple">
                    Čvrsti trbušnjaci
                </div>
                <ul class="ex-list ex-purple">
                    <li>Lezite na leđa</li>
                    <li>Blago savijte nogu u kolenu</li>
                    <li>Podižite torzo i noge u isto vreme</li>
                    <li>Ponovite 10-15 puta u seriji</li>
                </ul>
            </div>
            <div class="exercise ">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/exercise3.png" class="m-responsive" alt="" />
                <div class="ex-title m-blue">
                    Izvajana figura
                </div>
                <ul class="ex-list ex-blue">
                    <li>Stavite trake na kukove</li>
                    <li>Raširite stopala u širini ramena</li>
                    <li>Držite ruke ispred sebe (kao na slici)</li>
                    <li>Leđa držite ispravljena</li>
                    <li>Odradite 15-20 čučnjeva u seriji</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-fourth m-white">
        <div class="container">
            <div class="title-block text-center">
                Više veličina – za svakoga po nešto
            </div>
            <div class="small-size">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_pink.png" alt="" />
                <div class="curs d-large">
                    Odlična za ruke<br />
                    i zadnju ložu
                </div>
                <div class="small-right">
                    <div class="title-size">Mala</div>
                    <div class="curs d-mobile">
                        Odlična za ruke<br />
                        i zadnju ložu
                    </div>
                    <span >Boja: <span class="curs">pink</span></span>
                    <span>Širina: <span class="curs">8 cm</span></span>
                    <span>Dužina: <span class="curs">64 cm</span></span>
                </div>
            </div>
            <div class="middle-size">
                <div class="middle-left">
                    <div class="title-size">Srednja</div>
                    <div class="curs d-mobile">
                        Za sve grupe mišića
                    </div>
                    Boja: <span class="curs">ljubičasta</span>
                    Širina: <span class="curs">8 cm</span><br class="d-mobile">
                    Dužina: <span class="curs">74 cm</span>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_purple.png" alt="" />
                <div class="curs d-large">
                    Za sve grupe mišića
                </div>
            </div>
            <div class="large-size">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_blue.png" alt="">
                <div class="curs d-large">
                    Idealna za čučnjeve. <br/>
                    Kako biste povećali opterećenje <br/>
                    možete je presaviti na pola <br/>
                    i raditi iste vežbe kao i sa malom
                </div>
                <div class="large-right">
                    <div class="title-size">Velika</div>
                    <div class="curs d-mobile">
                        Idealna za čučnjeve. <br/>
                        Kako biste povećali opterećenje <br/>
                        možete je presaviti na pola <br/>
                        i raditi iste vežbe kao i sa malom
                    </div>
                    Boja: <span class="curs">plava</span>
                    Širina: <span class="curs">8 cm</span>
                    Dužina: <span class="curs">84 cm</span>
                </div>
            </div>
            <div class="text-center">
                <a href="#form" class="btn btn-blink toform">Poručite sada!</a>
            </div>
        </div>
    </section>
    <section class="section-fifth">
        <div class="container">
            <div class="title-block text-center">
                Zašto baš FlexPro trake
            </div>
            <div class="advantages-block">
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg1.jpg.png" alt="" /></div>
                    <span>Kompaktne,<br>
                     ne zauzimaju mesto</span>
                </div>
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg2.jpg" alt="" /></div>
                    <span>Možete raditi sve grupe mišića</span>
                </div>
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg3.jpg" alt="" /></div>
                    <span>Pristupačne</span>
                </div>
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg4.jpg" alt="" /></div>
                    <span>Prijatne za korišćenje i bezbedne<br>
                        - ne možete da se povredite</span>
                </div>
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg5.jpg" alt="" /></div>
                    <span>Rezulati vidljivi <br>
                     u samo 15 min na dan</span>
                </div>
                <div class="advantage">
                    <div class="advg-img"><img src="{{ asset('/') }}flexonikFiles/xtraband/advntg6.jpg" alt="" /></div>
                    <span>Trenirajte kod kuće,<br>
                     u prirodi ili na putu</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sixth">
        <div class="container">
            <div class="title-block m-blue">
                Zašto je naš materijal <br />
                bolji od drugih?
            </div>
            <ul class="prod-pluses">
                <li>
                    Ne usecaju se u kožu
                </li>
                <li>
                    Ne cepaju se i nikada neće pući
                </li>
                <li>
                    Mekane na dodir
                </li>
                <li>
                    Udobne
                </li>
                <li>
                    Rastežu se 2x u odnosu na svoju dužinu
                </li>
                <li>
                    Ravnomerno opterećuje sve mišićne grupe
                </li>
            </ul>
            <img src="{{ asset('/') }}flexonikFiles/xtraband/prod_point.png" class="prod-points" alt="" />
        </div>
    </section>
    <section class="section-seventh">
        <div class="container">
            <div class="title-block text-center">
                Vežbe
            </div>
            <div class="video-wrap">
                <video width="100%" autoplay loop muted playsinline controls="controls" >
                    <source src="{{ asset('/') }}flexonikFiles/xtraband/video.mp4" type='video/mp4;'>
                </video>
            </div>
        </div>
    </section>
    <section class="section-eighth">
        <div class="container">
            <div class="title-block m-blue text-center">
                Pogledajte rezultate, uz korišćenje samo ovih traka
            </div>
            <div class="slider-wrap">
                <div id="result-slider" class="owl-carousel">
                    <div>
                        <div class="slide-inner text-center">
                            <img src="{{ asset('/') }}flexonikFiles/xtraband/slide1.jpg" alt="" />
                            <div class="woman-name">Elena, 37 godina</div>
                            <div class="subtitle-block"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide-inner text-center">
                            <img src="{{ asset('/') }}flexonikFiles/xtraband/slide2.jpg" alt="" />
                            <div class="woman-name">Ana, 28 godina</div>
                            <div class="subtitle-block"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide-inner text-center">
                            <img src="{{ asset('/') }}flexonikFiles/xtraband/slide3.jpg" alt="" />
                            <div class="woman-name">Tina, 31 godina</div>
                            <div class="subtitle-block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#form" class="btn toform">Poruči sada!</a>
            </div>
        </div>
    </section>
    <section class="section-ninth">
        <div class="container">
            <div class="title-block">
                Zašto nas kupci <br />
                ocenjuju sa 5 zvezdica?
            </div>
            <div class="right-review">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/bloger1.png" class="bloger-1" alt="" />
                <p>Prve rezultate sam primetila za samo 2 nedelje. Uz ove trake ne morate da jurite posle posla u teretanu. 10 minuta vežbanja pre spavanja a isti rezultati.</p>
                <span class="bloger-name">Dijana Krunić</span>
            </div>
            <div class="clearfix"></div>
            <div class="left-review">
                <img src="{{ asset('/') }}flexonikFiles/xtraband/bloger2.png" alt="" class="bloger-2" />
                <p>Vežbanje sa ovim trakama stvara otpor od oko 25kg. Više nego dovoljno za zatezanje i jačanje nogu, zadnje lože i bicepsa. Takođe sjajna stvar je što možete trenirati i kod kuće i u prirodi.</p>
                <span class="bloger-name">Milan Bojić, trener</span>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <footer class="b-footer">
        <div class="container">
            <img src="{{ asset('/') }}flexonikFiles/xtraband/girl_footer.png" class="girl-footer d-large" alt="" />
            <div class="product-footer  ">
                <div class="sale m-white d-large">
                    <div class="sale-inner">
                        -40%
                    </div>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtraband/product.png" alt="" />
            </div>
            <div class="footer-right">
                <div class="title-block text-center">Trake za vežbanje
                    FlexPro
                </div>
                <div class="term text-center">Ojačajte telo za samo 10 minuta dnevno</div>
                <div class="form-block">
                    <div class="form-inner">
                        <div class="form-inner">
                            <div class="title-form text-center">
                                Podaci za dostavu
                            </div>
                            <form action="{{$orderRoute}}" method="post" class="orderformcdn" id="form">
                                {{ csrf_field() }}
                                @include('lander.naturapharm.components.form_hidden_fields')
                                <input name="name" class="input-text" placeholder="Ime i prezime">
                                <input name="phone" class="only_number input-text" placeholder="Telefon" type="tel">
                                <input name="shipping_address" class="input-text" placeholder="Adresa">
                                <input name="shipping_city" class="input-text" placeholder="Grad">
                                <label for="quantity" style="margin-left: 5px;">Izaberite količinu</label>
                                <select name="quantity" id="quantity" required style="margin-top: 10px; cursor: pointer;">
                                    @foreach($prices as $singlePrice)
                                        <option value="{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}" aria-price="{{$singlePrice['amount']}}" aria-oldPrice="{{$singlePrice['originalPrice']}}"
                                                @if($singlePrice['is_default']) selected @endif
                                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                        >
                                            {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                            @if($singlePrice['is_free_shipping']) * @endif
                                        </option>
                                    @endforeach
                                </select>
                                <div class="b-prices d-mobile text-center">
                                    <div class="old-price"><span class="js_old_price_curs"><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr">RSD</span></span></div>
                                    <div class="new-price"><span class="js_new_price price_land_s1">{{ $prices[1]['amount'] }} </span> <span class="js_curs price_land_curr">RSD</span></div>
                                </div>
                                <div class="freeShippingDiv">+ BESPLATNA POŠTARINA</div>
                                <input type="submit" class="btn-blue js_submit" value="ZAVRŠI PORUDŽBINU!">
                                <div class="b-prices d-large">
                                    <div class="old-price"><span class="js_old_price_curs"><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr">RSD</span></span></div>
                                    <div class="new-price"><span class="js_new_price price_land_s1">{{ $prices[1]['amount'] }} </span> <span class="js_curs price_land_curr">RSD</span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
</div>
<script>
    $(document).ready(function () {
        $('#result-slider').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1170:{
                    items:3
                }
            }
        });
        $('#quantity').click(function () {
            let selected = $('option:selected', this);
            let fsh = selected.attr('placeholder');
            let oldPrice = selected.attr('aria-oldPrice');
            let price = selected.attr('aria-price');
            $('.price_land_s2').html(oldPrice);
            $('.price_land_s1').html(price);
            if(fsh == 1) {
                $(this).next().next().slideDown();
            } else {
                $(this).next().next().slideUp();
            }
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>