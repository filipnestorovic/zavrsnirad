<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/f2.png" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/main.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/grid.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/default.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/flextape/animate.css" rel="stylesheet">
    <style>.steps{background-color:#27244e;background-image:url({{asset('/')}}dailysharkFiles/flextape/steps.jpg);background-repeat:no-repeat;background-size:cover}.features{background-image:url({{asset('/')}}dailysharkFiles/flextape/steps.jpg);background-repeat:no-repeat;background-size:cover}.header{background-image:url({{asset('/')}}dailysharkFiles/flextape/header.jpg);background-repeat:no-repeat;background-position:top center}.header ul li{color:#fff;font-family:"PF DinDisplay Pro";font-weight:700;text-transform:uppercase;font-size:28px;line-height:36px;margin-bottom:45px;list-style-type:none;background-image:url({{asset('/')}}dailysharkFiles/flextape/ul.png);background-repeat:no-repeat;font-size:24px;padding-left:49px;background-position:top left}@font-face{font-family:"PF DinDisplay Pro-Regular";src:url({{asset('/')}}fonts/PFDinDisplayPro-Regular.html);src:url({{asset('/')}}fonts/PFDinDisplayPro-Regulard41d.html?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PFDinDisplayPro-Regular-2.html) format("woff2"),url({{asset('/')}}fonts/PFDinDisplayPro-Regular-3.html) format("woff"),url({{asset('/')}}fonts/PFDinDisplayPro-Regular-4.html) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:"PF DinDisplay Pro";src:url({{asset('/')}}fonts/PFDinDisplayPro-Bold.eot);src:url({{asset('/')}}fonts/PFDinDisplayPro-Boldd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PFDinDisplayPro-Bold.woff2) format("woff2"),url({{asset('/')}}fonts/PFDinDisplayPro-Bold.woff) format("woff"),url({{asset('/')}}fonts/PFDinDisplayPro-Bold.ttf) format("truetype");font-weight:700;font-style:normal}@media (max-width:768px){.header{background-image:url({{asset('/')}}dailysharkFiles/flextape/header-m.jpg);background-size:cover}.owl-prev{background-image:url({{asset('/')}}dailysharkFiles/flextape/prev.png);background-repeat:no-repeat;background-position:top center;width:20px;height:30px;left:10%;position:absolute}.owl-next{background-image:url({{asset('/')}}dailysharkFiles/flextape/next.png);background-repeat:no-repeat;background-position:top center;width:20px;height:30px;right:10%;position:absolute}.reviews .mob .owl-carousel .owl-prev{background-image:url({{asset('/')}}dailysharkFiles/flextape/prev2.png)}.reviews .mob .owl-carousel .owl-next{background-image:url({{asset('/')}}dailysharkFiles/flextape/next2.png)}}</style>
</head>
<body>
@include('components.display_errors')
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="header__logo">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/logo.png" alt="">
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <h1>MOMENTALNO LEPI <br> APSOLUTNO SVE!</h1>
            </div>
            <div class="mob">
                <div class="col-xs-12">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/product-m.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 ulPadding">
                <ul>
                    <li>SANIRA SVE PUKOTINE <br> I RUPE!</li>
                    <li>IZUZETNO IZDRŽLJIVA <br> I VODOOTPORNA!</li>
                    <li>JEDNOM ZALEPLJENO <br> DRŽI ZAUVEK!</li>
                </ul>
            </div>
            <div class="pc">
                <div class="col-md-4 col-sm-4">
                    <div class="header__image">
                        <img src="{{ asset('/') }}dailysharkFiles/flextape/product.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <form action="{{$orderRoute}}" method="POST">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="pc">
                        <div class="price">
                            <div class="price__old"><span class="old_price_val"> {{ $prices[1]['originalPrice'] }}</span><span class="old_price_cur"> RSD</span></div>
                            <div class="price__new"><p>Nova <br> cena</p><span class="new_price_val"> {{ $prices[1]['amount'] }}</span><span class="new_price_cur"> RSD</span></div>
                        </div>
                    </div>
                    <div class="mob">
                        <div class="price">
                            <div class="price__new"><p>Nova <br> cena</p><span class="new_price_val"> {{ $prices[1]['amount'] }}</span><span class="new_price_cur"> RSD</span></div>
                            <div class="price__old"><span class="old_price_val"> {{ $prices[1]['originalPrice'] }}</span><span class="old_price_cur"> RSD</span></div>
                        </div>
                    </div>
                    <img class="birka" src="{{ asset('/') }}dailysharkFiles/flextape/birka.png" alt="">
                    <input class="fade" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="fade" type="number" name="phone" placeholder="Telefon" required>
                    <input class="fade" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="fade" type="text" name="shipping_city" placeholder="Grad" required>
                    <button type="submit">Poruči odmah</button>
                </form>
            </div>
        </div>
        <div class="pc">
            <div class="row">
                <div class="header__gif">
                    <div class="col-md-12 col-sm-12">
                        <h2>FLEX TRAKOM SE <br> LEPI SVE BRZO I POUZDANO</h2>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/3.gif" alt="">
                        <span>OŠTEĆENE CEVI I CREVA</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/2.gif" alt="">
                        <span>SLOMLJENO STAKLO, UKLJUČUJUĆI I AKVARIJUME</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/1.gif" alt="">
                        <span>BILO KOJI SLOMLJENI PLASTIČNI ILI METALNI PREDMETI</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/4.gif" alt="">
                        <span>VELIKE RUPE U REZERVOARIMA ZA TEČNOST</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mob">
    <div class="container">
        <div class="bg">
            <div class="row">
                <div class="header__gif">
                    <div class="col-md-12 col-sm-12">
                        <h2>FLEX TRAKOM <br> SE LEPI SVE BRZO I POUZDANO</h2>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/3.gif" alt="">
                        <span>OŠTEĆENE CEVI I CREVA</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/2.gif" alt="">
                        <span>SLOMLJENO STAKLO, UKLJUČUJUĆI I AKVARIJUME</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/1.gif" alt="">
                        <span>BILO KOJI SLOMLJENI PLASTIČNI ILI METALNI PREDMETI</span>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <img class="lazy" src="{{ asset('/') }}dailysharkFiles/flextape/4.gif" alt="">
                        <span>VELIKE RUPE U REZERVOARIMA ZA TEČNOST</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                <h2>SAMO 4 KORAKA</h2>
            </div>
            <div class="pc">
                <div class="col-md-6  col-sm-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"><img src="{{ asset('/') }}dailysharkFiles/flextape/1s.png" alt=""></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="steps__text">
                                <h3>Presecite traku</h3>
                                <p>Odaberite željenu veličinu i odsecite komad trake</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-sm-6">
                    <div class="row">
                        <div class="col-md-6  col-sm-6"><img src="{{ asset('/') }}dailysharkFiles/flextape/2s.png" alt=""></div>
                        <div class="col-md-6  col-sm-6">
                            <div class="steps__text">
                                <h3>Skinite zaštitnu foliju</h3>
                                <p>Odvojite lepljivu površinu od folije</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-sm-6">
                    <div class="row">
                        <div class="col-md-6  col-sm-6"><img src="{{ asset('/') }}dailysharkFiles/flextape/3s.png" alt=""></div>
                        <div class="col-md-6  col-sm-6">
                            <div class="steps__text">
                                <h3>Zalepite</h3>
                                <p>Lagano prekrijte trakom oštećenu površinu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-sm-6">
                    <div class="row">
                        <div class="col-md-6  col-sm-6"><img src="{{ asset('/') }}dailysharkFiles/flextape/4s.png" alt=""></div>
                        <div class="col-md-6  col-sm-6">
                            <div class="steps__text">
                                <h3>Poravnajte</h3>
                                <p>Uklonite mehuriće vazduha pritiskom ruke</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mob">
                <div class="col-xs-12">
                    <div class="owl-carousel">
                        <div class="steps__text">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/1s.png" alt="">
                            <h3>Presecite traku</h3>
                            <p>Odaberite željenu veličinu i odsecite komad trake</p>
                        </div>
                        <div class="steps__text">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/2s.png" alt="">
                            <h3>Skinite zaštitnu foliju</h3>
                            <p>Odvojite lepljivu površinu od folije</p>
                        </div>
                        <div class="steps__text">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/3s.png" alt="">
                            <h3>Zalepite</h3>
                            <p>Lagano prekrijte trakom oštećenu površinu</p>
                        </div>
                        <div class="steps__text">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/4s.png" alt="">
                            <h3>Poravnajte</h3>
                            <p>Uklonite mehuriće vazduha pritiskom ruke</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="size">
    <div class="container">
        <div class="row">
            <div class="col-md-11  col-sm-12">
                <div class="size__cont">
                    <div class="size__header">
                        <p><span>2 VELIČINE</span> ZA SVE POTREBE</p>
                    </div>
                    <div class="size__img">
                        <img src="{{ asset('/') }}dailysharkFiles/flextape/z1.png" alt=""> <img src="{{ asset('/') }}dailysharkFiles/flextape/z2.png" alt=""> <img
                                src="{{ asset('/') }}dailysharkFiles/flextape/z3.png" alt=""> <img src="{{ asset('/') }}dailysharkFiles/flextape/z4.png" alt="">
                    </div>
                    <div class="mob">
                        <img src="{{ asset('/') }}dailysharkFiles/flextape/product-m2.png" alt="">
                    </div>
                    <div class="size__choise">
                        <h4>Mini 152x10 cm</h4>
                        <p>Savršeno za lepljenje bilo kakvih sitnih delova izrađenih od metala, <br> stakla i drveta</p>
                        <h4>Standard 152x20 cm.</h4>
                        <p>Lepi bilo koju površinu! <br>Otporna na vodu, visoke i niske temperature.</p>
                    </div>
                    <div class="size__choise">
                        <img src="{{ asset('/') }}dailysharkFiles/flextape/size.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-sm-12 col-xs-12">
                <h2>ZAŠTO FLEX TAPE?</h2>
            </div>
            <div class="col-md-3  col-sm-3 col-xs-6">
                <div class="features__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/f1.png" alt="">
                    <p>FIKSIRANJE NA <br> BILO KOJOJ POVRŠINI</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="features__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/f2.png" alt="">
                    <p>VODOOTPORNI <br> MATERIJAL </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="features__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/f3.png" alt="">
                    <p>ČVRSTO SE LEPI <br> I DRŽI I DO <br> NEKOLIKO GODINA</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="features__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/f4.png" alt="">
                    <p>DOBIJATE <br> DVE VELIČINE</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2>UTISCI KUPACA</h2>
            </div>
            <div class="pc">
                <div
                        class="col-md-offset-1 col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r1.png" alt="">
                            <div class="reviews__item_text">
                                <h4>KATARINA, SOMBOR</h4>
                                <p>Kupila sam Flex Tape za svaki slučaj, jer se nikada ne zna kada će mi zatrebati u kući.
                                    I naravno, desilo se da mi je traka stvarno bila potrebna hitno. Moj akvarijum sa ribicama je napukao!
                                    Uspela sam brzo da reagujem i odmah sam zalepila pukotinu. Evo skoro godinu dana drži vodu bez ikakvog curenja.</p>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r2.png" alt="">
                            <div class="reviews__item_text">
                                <h4>ANDRIJA, IVANJICA</h4>
                                <p>Flex traka je odliiiična stvar! Nikada ništa tako praktično u kućnom alatu nisam imao.
                                    Apsolutno sve uspevam da zalepim. Crevo od usisivača, tuša, napuklo staklo na vitrini, lavabo, sifon.
                                    Lepi neverovatno dobro. Sve preporuke za ovaj proizvod!</p>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r3.png" alt="">
                            <div class="reviews__item_text">
                                <h4>OGNJEN, BEOGRAD</h4>
                                <p>Sjajna traka! Ne znam šta bih radio bez nje.
                                    Nisam mogao da verujem da lepi baš sve! Cevi, staklo, drvo, plastiku, čak sam uspeo da zalepim i probušen oluk!
                                    Svima je preporučujem, korisna je i potrebna u svakoj kući!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mob">
                <div class="owl-carousel">
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r1.png" alt="">
                            <h4>KATARINA, SOMBOR</h4>
                        </div>
                        <div class="reviews__item_text">
                            <p>Kupila sam Flex Tape za svaki slučaj, jer se nikada ne zna kada će mi zatrebati u kući.
                                I naravno, desilo se da mi je traka stvarno bila potrebna hitno. Moj akvarijum sa ribicama je napukao!
                                Uspela sam brzo da reagujem i odmah sam zalepila pukotinu. Evo skoro godinu dana drži vodu bez ikakvog curenja.</p>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r2.png" alt="">
                            <h4>ANDRIJA, IVANJICA</h4>
                        </div>
                        <div class="reviews__item_text">
                            <p>Flex traka je odliiiična stvar! Nikada ništa tako praktično u kućnom alatu nisam imao.
                                Apsolutno sve uspevam da zalepim. Crevo od usisivača, tuša, napuklo staklo na vitrini, lavabo, sifon.
                                Lepi neverovatno dobro. Sve preporuke za ovaj proizvod!</p>
                        </div>
                    </div>
                    <div class="reviews__item">
                        <div class="reviews__item_img">
                            <img src="{{ asset('/') }}dailysharkFiles/flextape/r3.png" alt="">
                            <h4>OGNJEN, BEOGRAD</h4>
                        </div>
                        <div class="reviews__item_text">
                            <p>Sjajna traka! Ne znam šta bih radio bez nje.
                                Nisam mogao da verujem da lepi baš sve! Cevi, staklo, drvo, plastiku, čak sam uspeo da zalepim i probušen oluk!
                                Svima je preporučujem, korisna je i potrebna u svakoj kući!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="order">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>PORUČIVANJE JE VRLO JEDNOSTAVNO!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="order__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/o1.png" alt="">
                    <span>Unos podataka</span>
                    <p>Unesite podatke za dostavu <br> u formi na sajtu</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="order__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/o2.png" alt="">
                    <span>Potvrda porudžbine</span>
                    <p>U najkraćem roku<br> potvrdićemo vašu porudžbinu</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="order__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/o3.png" alt="">
                    <span>Slanje</span>
                    <p>Šaljemo pošiljku u roku od <br> jednog radnog dana</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="order__item">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/o4.png" alt="">
                    <span>Plaćanje</span>
                    <p>Poručenu robu plaćate kuriru <br> prilikom dostave paketa</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="header__logo">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/logo.png" alt="">
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <h1>MOMENTALNO LEPI <br> APSOLUTNO SVE!</h1>
            </div>
            <div class="mob">
                <div class="col-xs-12">
                    <img src="{{ asset('/') }}dailysharkFiles/flextape/product-m.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 ulPadding">
                <ul>
                    <li>SANIRA SVE PUKOTINE <br> I RUPE!</li>
                    <li>IZUZETNO IZDRŽLJIVA <br> I VODOOTPORNA!</li>
                    <li>JEDNOM ZALEPLJENO <br> DRŽI ZAUVEK!</li>
                </ul>
            </div>
            <div class="pc">
                <div class="col-md-4 col-sm-4">
                    <div class="header__image">
                        <img src="{{ asset('/') }}dailysharkFiles/flextape/product.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <form action="{{$orderRoute}}" method="POST">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="pc">
                        <div class="price">
                            <div class="price__old"><span class="old_price_val"> {{ $prices[1]['originalPrice'] }}</span><span class="old_price_cur"> RSD</span></div>
                            <div class="price__new"><p>Nova <br> cena</p><span class="new_price_val"> {{ $prices[1]['amount'] }}</span><span class="new_price_cur"> RSD</span></div>
                        </div>
                    </div>
                    <div class="mob">
                        <div class="price">
                            <div class="price__new"><p>Nova <br> cena</p><span class="new_price_val"> {{ $prices[1]['amount'] }}</span><span class="new_price_cur"> RSD</span></div>
                            <div class="price__old"><span class="old_price_val"> {{ $prices[1]['originalPrice'] }}</span><span class="old_price_cur"> RSD</span></div>
                        </div>
                    </div>
                    <img class="birka" src="{{ asset('/') }}dailysharkFiles/flextape/birka.png" alt="">
                    <input class="fade" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="fade" type="number" name="phone" placeholder="Telefon" required>
                    <input class="fade" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="fade" type="text" name="shipping_city" placeholder="Grad" required>
                    <button type="submit">Poruči odmah</button>
                </form>
            </div>
            <div class="col-md-offset-5 col-md-7 col-xs-12">
                <div class="recv">
                    <div><a href=""></a>
                        <a href=""></a>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
@include('components.pixel_footer')
<script src="{{ asset('/') }}dailysharkFiles/flextape/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/flextape/wow.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/flextape/main.js"></script>
</body>
</html>