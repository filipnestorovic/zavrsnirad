<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/carstoragebox/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/style.css">
</head>
<body>
@include('.components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="magnitola">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
        </div>
        <h1><span>CAR STORAGE BOX</span>
        </h1>
        <h2>Recite zbogom neredu u automobilu</h2>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="auto-small"></div>
        <ul class="recom" style="box-shadow: 0 0 50px rgb(255 255 255 / 80%);">
            <li>
                <p>2 USB izlaza za punjenje</p>
            </li>
            <li>
                <p>Stalak za bočicu ili čašu</p>
            </li>
            <li>
                <p>Pretinac za telefon, novčanik i dokumente</p>
            </li>
            <li>
                <p>Lako se postavlja i univerzalan za sve automobile</p>
            </li>
        </ul>
        <div class="clear"></div>
        <div class="price clearfix">
            <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
            <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
        </div>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <h2 class="title">
            CAR STORAGE BOX<br> <span>DA VAŠ AUTO UVEK BUDE UREDAN</span>
        </h2>
        <div class="row">
            <div class="col-md-8 mt-2 mb-2">
                <div class="prtext">
                    Car Storage Box je odličan za sve tipove automobila. <b>Vrlo lako se postavlja i uklapa u enterijer.</b>
                    Pretinac za novčanik, dokumente, ključeve i ostale stvari je sasvim dovoljne veličine i sve staje u njega, a nadograđen je i stalkom
                    za bočice i kafu za poneti.
                    <br><br>
                    Vozač i suvozač mogu lako da pune svoje telefone zahvaljujući USB portovima. Potrebno je samo uključiti adapter u "UPALJAČ".
                    <b>Univerzalan je, uklapa se u svaki enterijer i sasvim je stabilan zahvaljjući nastavku za fiksiranje.</b>
                    <br><br>
                    * Ovaj proizvod je testiran i preporučen za upotrebu od strane automobilske industrije.
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/product.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block3">
    <div class="wrap">
        <h2 class="title"><span>CAR STORAGE BOX</span> Ključne karakteristike</h2>
        <div class="row mt-3">
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto7.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Uklapa se u svaki enterijer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto8.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Čvrst i pouzdan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto9.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">2 USB porta za punjenje</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto10.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Odičan kvalitet izrade</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<section class="block4">
    <div class="wrap">
        <h2 class="title"><span>CAR STORAGE BOX</span> Specifikacije</h2>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th scope="row">Materijal izrade:</th>
                <td>ABS plastika, koža</td>
            </tr>
            <tr>
                <th scope="row">Broj pretinaca:</th>
                <td>3 (za telefon, flašu i ostale stvari)</td>
            </tr>
            <tr>
                <th scope="row">Broj usb portova:</th>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">Napajanje:</th>
                <td>auto upaljač</td>
            </tr>
            <tr>
                <th scope="row">Upotreba:</th>
                <td>za svaki automobil</td>
            </tr>
            </tbody>
        </table>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block5">
    <div class="wrap">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews1" role="toolbar">
            <div class="rewiews slick-slider">
                <div class="revcont">
                    <div class="rev clearfix">
                        <span><b>Aleksandar Jović</b></span>
                        <p>Odlična stvar, konačno mi je automobil uredan. Nije mi žao ni jednog dinara koji sam dao. Sve na jednom mestu - sve preporuke!</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r2">
                        <span><b>Vladimir Mičić</b></span>
                        <p>Super proizvod koji je napravio red u mom autu. Sada imam i punjač za telefon. Volim da pijem kafu dok se vozim, i super je što imam
                            i držač za čašu.</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r3">
                        <span><b>Marko Savić</b></span>
                        <p>Top stvar! Preporučujem svima koji nemaju pretinac i usb portove za punjenje da kupe ovo. TOP !!!</p>
                    </div>
                </div>
            </div>
{{--            <div class="rewiew-tablet slick-initialized slick-slider" style="">--}}
{{--                <div class="revcont">--}}
{{--                    <div class="rev clearfix r3">--}}
{{--                        <span><b>Сергій Кощук, 24 роки</b></span>--}}
{{--                        <p>Підключив сьогодні ці динаміки - шикарні динаміки! Звук чистий, сочний бас, голосно грають ---}}
{{--                            всім рекомендую, варті своїх грошей. Якість звуку на висоті! Магазину дякую!--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="revcont">--}}
{{--                    <div class="rev clearfix">--}}
{{--                        <span><b>Алексей Липский, 27 лет</b></span>--}}
{{--                        <p>Качественный звук, приятный и стильный дизайн, приемлемая цена, хорошее качество сборки, и--}}
{{--                            отправили посылку в день заказа) Все отлично, я доволен.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="revcont">--}}
{{--                    <div class="rev clearfix r2">--}}
{{--                        <span><b>Андрей Макаров, 32 года</b></span>--}}
{{--                        <p>Хорошо слышны как высокие, так и низкие частоты. Неплохая модель. 3амечательно работают даже--}}
{{--                            под штатным ресивером. Буду заказывать еще одну пару.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="rewiew-mobile slick-slider" style="">--}}
{{--                <div aria-live="polite" class="slick-list draggable">--}}
{{--                    <div class="revcont">--}}
{{--                        <div class="rev clearfix r3">--}}
{{--                            <span><b>Сергій Кощук, 24 роки</b></span>--}}
{{--                            <p>Підключив сьогодні ці динаміки - шикарні динаміки! Звук чистий, сочний бас, голосно--}}
{{--                                грають - всім рекомендую, варті своїх грошей. Якість звуку на висоті! Магазину--}}
{{--                                дякую!--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="revcont">--}}
{{--                        <div class="rev clearfix">--}}
{{--                            <span><b>Алексей Липский, 27 лет</b></span>--}}
{{--                            <p>Качественный звук, приятный и стильный дизайн, приемлемая цена, хорошее качество сборки,--}}
{{--                                и отправили посылку в день заказа) Все отлично, я доволен.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="revcont">--}}
{{--                        <div class="rev clearfix r2">--}}
{{--                            <span><b>Андрей Макаров, 32 года</b></span>--}}
{{--                            <p>Хорошо слышны как высокие, так и низкие частоты. Неплохая модель. 3амечательно работают--}}
{{--                                даже под штатным ресивером. Буду заказывать еще одну пару.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block7">
    <div class="wrap">
        <div class="prim slick-slider">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/3foto.png" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/4foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/5foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/6foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/7foto.jpg" alt="" class="slick-slide">
        </div>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block8">
    <div class="wrap">
        <h2 class="title">KAKO PORUČITI?</h2>
        <ul class="ship">
            <li>
                <p>Popunite formular za porudžbinu <br> na našem sajtu</p>
            </li>
            <li>
                <p>Kontaktiraćemo vas da <br> potvrdimo porudžbinu</p>
            </li>
            <li>
                <p>Pošiljku plaćate kuriru brze pošte <br> po pouzeću</p>
            </li>
        </ul>
    </div>
</section>
<section class="block9">
    <div class="wrap">
        <h1><span>CAR STORAGE BOX</span></h1>
        <h2>PORUČITE ODMAH SA 40% POPUSTA</h2>
        <h3>Recite zbogom neredu u automobilu</h3>
        <div class="auto-small"></div>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="row recom">
            <div class="col-md-6">2 USB izlaza za punjenje</div>
            <div class="col-md-6">Stalak za bočicu ili čašu</div>
            <div class="col-md-6">Pretinac za telefon, novčanik i dokumente</div>
            <div class="col-md-6">Lako se postavlja i univerzalan za sve automobile</div>
            <div class="magnitola-block9">
                <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
            </div>
        </div>
        <div class="magnitola-block9-mobile">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </div>
            <form id="buy" class="m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required="">
                <input class="field" name="phone" type="tel" placeholder="Telefon" required="">
                <button class="button-m" type="submit">Poručite sa popustom</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
