<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, viewport-fit=cover">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/carluxe/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carluxe/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carluxe/style.css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="wrapper-fix">
        @include('components.display_errors')
        <section class="delete">
            <div class="wrap">
                <div class="header-new">
                    <h1 class="h1-new" style="padding-bottom: 4rem;">
                        <span class="span-new">UKLONITE OGREBOTINE NA AUTOMOBILU</span> OVIM REVOLUCIONARNIM PROIZVODOM!
                    </h1>
                    <div class="corrupt-new">Vraća na<br> fabrički izgled</div>
                    <div class="img-wrapper-new">
                        <img src="{{ asset('/') }}dailysharkFiles/carluxe/head-phone1.png">
                        <div class="discount-new"></div>
                    </div>
                </div>
                <div class="price-new">
                    <p class="old">{{ $prices[1]['originalPrice'] }} RSD</p>
                    <p class="new">{{ $prices[1]['amount'] }} RSD</p>
                </div>
                <ul class="pl pr fixed-ul">
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>Više ne morate trošiti novac za farbanje automobila</span>
                    </li>
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>CarLuxe Paint uklanja ogrebotine u sekundi!</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="form-new">
            <div class="red-wrap">
                <h2 class="h2-new">NEVEROVATAN POPUST</h2>
                <p>Promotivna ponuda za CarLuxe Paint<b> važi samo danas - {{ $prices[1]['amount'] }} RSD umesto {{ $prices[1]['originalPrice'] }} RSD!</b> Popunite formu ispod i iskoristite ovu ponudu!<b> Plaćanje pouzećem!</b>
                </p>
                <div class="form-new1">
                    <form action="{{$orderRoute}}" method="POST" class="main-order-form main-form" >
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <h3 class="h3-new">Podaci za dostavu</h3>
                        <label for="#name1"></label>
                        <input id="name1" type="text" name="name" placeholder="Ime i prezime" required>
                        <label for="#phone1"></label>
                        <input id="phone1" type="tel" name="phone" placeholder="Telefon" required>
                        <label for="#address1"></label>
                        <input id="address1" type="text" name="shipping_address" placeholder="Adresa" required>
                        <label for="#city1"></label>
                        <input id="city1" type="text" name="shipping_city" placeholder="Grad" required>
                        <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">Poruči odmah</button>
                    </form>
                </div>
            </div>
        </section>
        <div class="tired">
            <div class="wrap pl pr">
                <h2 class="center title bold red">Dosta vam je ogrebotina na automobilu?</h2>
                <div class="photo_block">
                    <div class="photo"><img src="{{ asset('/') }}dailysharkFiles/carluxe/tired_photo1.jpg" alt></div>
                    <div class="photo"><img src="{{ asset('/') }}dailysharkFiles/carluxe/tired_photo2.jpg" alt></div>
                    <div class="photo"><img src="{{ asset('/') }}dailysharkFiles/carluxe/tired_photo3.jpg" alt></div>
                </div>
            </div>
        </div>
        <section class="info">
            <div class="wrap">
                <h2 class="center bold title white bg_blue"> CarLuxe Paint</h2>
                <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/info_img.png" alt></div>
                <p class="pl pr">
                    CarLuxe Paint odličan je i proveren način uklanjanja ogrebotina na limariji vašeg automobila!<br><br>
                    Mikročestice ravnomerno ispunjavaju ogrebotine i vraćaju fabrički izgled boje.<br><br>
                    Pogodno za sve vrste automobila.<br><br>
                    Trenutni učinak!
                </p>
            </div>
        </section>
        <section class="compare">
            <div class="wrap">
                <div class="block fj wr">
                    <div class="text bold fifty pl upp white before"> Pre </div>
                    <div class="text bold fifty pl upp white bg_blue"> Posle </div>
                    <div class="photo">
                        <img src="{{ asset('/') }}dailysharkFiles/carluxe/compare1.jpg" alt>
                    </div>
                </div>
                <div class="block fj wr">
                    <div class="text bold fifty pl upp white before"> Pre </div>
                    <div class="text bold fifty pl upp white bg_blue"> Posle </div>
                    <div class="photo">
                        <img src="{{ asset('/') }}dailysharkFiles/carluxe/compare2.jpg" alt>
                    </div>
                </div>
            </div>
        </section>
        <div class="use">
            <div class="wrap">
                <h2 class="title center bold">Kako radi?</h2>
                <ul class="pl pr">
                    <li class="fa fixed-li">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/use1.png" alt></div>
                        <div class="text">
                            <span class="step blue bl upp bold">Korak 1</span><span class="text"> Protresite CarLuxe Paint.</span>
                        </div>
                    </li>
                    <li class="fa fixed-li">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/use2.png" alt></div>
                        <div class="text">
                            <span class="step blue bl upp bold">Korak 2</span><span class="text"> Nanesite supstancu na oštećenu površinu.</span>
                        </div>
                    </li>
                    <li class="fa fixed-li">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/use3.png" alt></div>
                        <div class="text">
                            <span class="step blue bl upp bold">Korak 3</span><span class="text">Prebrišite krpom.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <section class="grey_line">
            <div class="wrap"></div>
        </section>
        <section class="why">
            <div class="wrap">
                <h2 class="bold title white center pl pr bg_blue">Zašto CarLuxe Paint?</h2>
                <ul class="pl pr">
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>Spašava vas skupih popravki</span>
                    </li>
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>Rezultate ćete videti za 10 minuta!</span>
                    </li>
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>Reparacija se može raditi bilo gde!</span>
                    </li>
                    <li class="f">
                        <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/Vector.png" alt></div>
                        <span>Jednostavno nanošenje, visok kvalitet!</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="opinion">
            <div class="wrap">
                <h2 class="blue title bold center">Mišljenje stručnjaka:</h2>
                <div class="person fa pl">
                    <div class="image"><img src="{{ asset('/') }}dailysharkFiles/carluxe/opinion_person.png" alt></div>
                    <div class="text">
                        <span class="name bl blue bold">Rajko V.</span>
                        <span class="country">Beograd</span>
                    </div>
                </div>
                <p class="pl pr">Radim na farbanju limarije 15 godina, i to sa različitim vrstama oštećenja.
                    Nisu svi kupci spremni platiti kompletnu popravku i farbanje limarije, pa im onda preporučujem CarLuxe Paint.
                    Ovo je najbolje rešenje za sve probleme tog tipa.</p>
                <div class="opinion_image">
                    <img src="{{ asset('/') }}dailysharkFiles/carluxe/opinion.image.jpg" alt>
                </div>
            </div>
        </section>
        <section class="grey_line">
            <div class="wrap"></div>
        </section>
        <section class="delete footer_delete pos-relative">
            <div class="wrap">
                <h1 class="title center pl pr bold"> Naručite CarLuxe Paint <span class="red bold"> SA POPUSTOM</span>
                </h1>
                <div class="car relative">
                    <div class="car_bottle absolute">
                        <img src="{{ asset('/') }}dailysharkFiles/carluxe/delete_bottle_and_car.png" alt>
                    </div>
                    <div class="text_block absolute white center bold"> Vraća na<br> fabrički izgled</div>
                </div>
            </div>
            <spin id="toForm"></spin>
        </section>
        <section class="form-new">
            <div class="red-wrap">
                <h2 class="h2-new">NEVEROVATAN POPUST</h2>
                <p>Promotivna ponuda za CarLuxe Paint<b> važi samo danas - {{ $prices[1]['amount'] }} RSD umesto {{ $prices[1]['originalPrice'] }} RSD!</b> Popunite formu ispod i iskoristite ovu ponudu!<b> Plaćanje pouzećem!</b></p>
                <div class="form-new1">
                    <form action="{{$orderRoute}}" method="POST" class="main-order-form main-form" >
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <h3 class="h3-new">Podaci za dostavu</h3>
                        <label for="#name2"></label>
                        <input id="name2" type="text" name="name" placeholder="Ime i prezime" required>
                        <label for="#phone2"></label>
                        <input id="phone2" type="tel" name="phone" placeholder="Telefon" required>
                        <label for="#address2"></label>
                        <input id="address2" type="text" name="shipping_address" placeholder="Adresa" required>
                        <label for="#city2"></label>
                        <input id="city2" type="text" name="shipping_city" placeholder="Grad" required>
                        <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">Poruči odmah</button>
                    </form>
                </div>
            </div>
        </section>
        <footer>
        </footer>
    </div>
    @include('components.pixel_footer')
</body>
</html>