<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/babycam/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/babycam/style.css">
    <style>
        @font-face {
            font-family: 'Gilroy';
            src: url('{{ asset('/') }}fonts/Gilroy-ExtraBold.eot');
            src: url('{{ asset('/') }}fonts/Gilroy-ExtraBold.eot%40#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/Gilroy-ExtraBold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Gilroy-ExtraBold.woff') format('woff'),
            url('{{ asset('/') }}fonts/Gilroy-ExtraBold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/Gilroy-ExtraBold.svg#Gilroy-ExtraBold') format('svg');
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="main">
    <div class="wrap relative">
        <div class="main_block">
            <h1 class="white upp">BABY CAM</h1>
            <ul class="f wr">
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Gledaj i slušaj svoje dete 24h</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">8 melodija za uspavanku</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Možet poslati glasovnu poruku preko zvučnika</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Najprodavaniji proizvod u 2022</span>
                </li>
            </ul>
            <div class="main_mobile_image none"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_mobile_image.jpg" alt=""></div>
            <div class="price_block fa">
                <div class="block right">
                    <div class="big fz36 bold">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="block unright">
                    <div class="small_text white medium fz13">Stara cena</div>
                    <div class="big white through fz24 bold">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <div class="form_wrap relative">
                <div class="stay absolute">
                    <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/form_stay_icon.png" alt=""></div>
                    <div class="text medium fz13 center">
                        Količine su ograničene, iskoristite popust na vreme!
                    </div>
                </div>
                <form class="relative" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="title white center bold">
                        Podaci za dostavu
                    </div>
                    <input type="text" placeholder="Ime i prezime" name="name" required >
                    <input type="tel" placeholder="Telefon" name="phone" required >
                    <input type="submit" value="Poručite sada" class="white bold fz24 upp">
                </form>
            </div>
        </div>
    </div>
</section>
<section class="description_block">
    <div class="wrap">
        <div class="title white fz48 center bold">
            BABY CAM <span class="bl bold">Imajte svoje dete na oku 24/7</span>
        </div>
        <div class="blocks fj">
            <div class="block relative">
                <div class="title bold fz24">Prikaz sobne temperature</div>
                <p>Sa senzorom temperature nadgledajte sobnu temperaturu bebe po ceo dan. Mala deca treba da budu na preporučenim temperaturama i nije poželjno
                    da temperatura mnogo varira. Na ovaj način ćete se osigurati da ćete uvek znati da li treba da rashladite ili dogrejete prostoriju.</p>
                <div class="image absolute"><img src="{{ asset('/') }}dailysharkFiles/babycam/descr_block_image1.png" alt=""></div>
            </div>
            <div class="block relative">
                <div class="title bold fz24">Senzor zvuka</div>
                <p>Detektuje bebin glas ili plač i automatski se aktivira. Na taj način će vas obavestiti kada se beba probudi ili počne da plače. Moći ćete joj se obratiti
                    i imaće osećaj kao da ste tu.</p>
                <div class="image absolute"><img src="{{ asset('/') }}dailysharkFiles/babycam/descr_block_image2.png" alt=""></div>
            </div>
            <div class="block relative">
                <div class="title bold fz24">Uspavanka</div>
                <p>8 instaliranih uspavanki će se pobrinuti da vaše dete bezbrižno utone u san. Ovaj proizvod je odličan za majke koje su okupirane kućnim obavezama.</p>
                <div class="image absolute"><img src="{{ asset('/') }}dailysharkFiles/babycam/descr_block_image3.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="icons_section">
    <div class="wrap">
        <div class="icons_block fc">
            <div class="block center">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/icons_section_icon1.png" alt=""></div>
                <span class="bl fz24">Širok ugao snimanja</span>
            </div>
            <div class="block center">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/icons_section_icon2.png" alt=""></div>
                <span class="bl fz24">HD video</span>
            </div>
            <div class="block center">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/icons_section_icon3.png" alt=""></div>
                <span class="bl fz24">Podesiv ugao snimanja</span>
            </div>
        </div>
    </div>
</section>
<section class="wireless">
    <div class="wrap">
        <div class="title white fz48 center bold">
            BABY CAM <span class="bl bold">Postavite je bilo gde</span>
        </div>
        <div class="suspicion white ma center">
            Kamera ima čvrsto postolje koje omogućava da je postavite gde god želite. Nema bušenja, šrafova i glomaznih stalaka. <br>
            Impresivan proizvod, zar ne?
        </div>
        <div class="image_blocks fj">
            <div class="image">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_img1.png" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_mobile_image1.png" alt="" class="none">
            </div>
            <div class="image">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_img2.png" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_mobile_image2.png" alt="" class="none">
            </div>
            <div class="image">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_img3.png" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/babycam/wireless_mobile_image3.png" alt="" class="none">
            </div>
        </div>
        <div class="help white ma center">
            BABY CAM će vam pomoći da budete bezbrižni kada je u pitanju vaša beba. Bilo gde da se nalazite u kući, znaćete da je vaša beba dobro i da mirno spava.
        </div>
    </div>
</section>
<section class="middle_list relative">
    <div class="bg absolute"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_bg.jpg" alt=""></div>
    <div class="wrap ">
        <div class="list_block fa">
            <ul>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_icon.png" alt=""></div>
                    <span>Bežični prenos slike i zvuka</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_icon.png" alt=""></div>
                    <span>Jak domet koji pokriva celu kuću</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_icon.png" alt=""></div>
                    <span>HD video i kristalno čist zvuk</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_icon.png" alt=""></div>
                    <span>Noćni režim snimanja, radi i u potpunom mraku</span>
                </li>
                <li class="fa" id="nmb">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_icon.png" alt=""></div>
                    <span>Najbolje ocenjena kamera za decu na tržištu</span>
                </li>
            </ul>
        </div>
        <div class="middle_list_mobile_image none">
            <img src="{{ asset('/') }}dailysharkFiles/babycam/middle_list_mobile_image.jpg" alt="">
        </div>
    </div>
</section>
<section class="users">
    <div class="wrap">
        <div class="title fz48 bold center">
            Utisci <span class="bold">zadovoljnih kupaca</span>
        </div>
        <div class="blocks fc">
            <div class="block">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/user_icon1.png" alt=""></div>
                <div class="block_title bold center">Bojan</div>
                <p class="fz14">Nedavno sam kupio ovu kameru i postavio je u spavaću sobu. Sada kada beba spava supruga i ja možemo da uživamo u dnevnoj sobi i držimo bebu na oku.
                    Nema više straha i konstantnog ustajanja da vidimo da li spava i da li joj nešto fali. Super proizvod.</p>
            </div>
            <div class="block">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/user_icon2.png" alt=""></div>
                <div class="block_title bold center">Žarko</div>
                <p class="fz14">Kupili smo ovu kameru prošle jeseni i moram da vam priznam da je odlična. Dosta vremena provodimo u dvorištu jer imamo seosko imanje, i ranije smo stalno morali da ulazimo u kuću da obilazimo bebu dok spava.
                    Sada sa ovim čudom nemamo više taj problem. Mirni smo jer uvek bebu imamo na oku, a i kada se probudi mi je preko ovog uređaja čujemo.
                    Sve preporuke, stvarno je ovo dobro.</p>
            </div>
            <div class="block">
                <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/user_icon3.png" alt=""></div>
                <div class="block_title bold center">Jasna</div>
                <p class="fz14">Obično nisam verovala proizvodima sa interneta, ali je ovo izuzetak. Toliko je dobro da sam ja oduševelja, nisam mogla da verujem da postoji nešto ovakvo.
                    Preporučujem ga svim drugaricama koje su majke ili tek treba da postanu.</p>
            </div>
        </div>
    </div>
</section>
<section class="main footer">
    <div class="wrap relative">
        <div class="main_block">
            <h1 class="white upp">BABY CAM</h1>
            <ul class="f wr">
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Gledaj i slušaj svoje dete 24h</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">8 melodija za uspavanku</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Možet poslati glasovnu poruku preko zvučnika</span>
                </li>
                <li class="fa">
                    <div class="icon"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_list_icon.png" alt=""></div>
                    <span class="fz24">Najprodavaniji proizvod u 2022</span>
                </li>
            </ul>
            <div class="main_mobile_image none"><img src="{{ asset('/') }}dailysharkFiles/babycam/main_footer_mobile_image.jpg" alt=""></div>
            <div class="price_block fa">
                <div class="block right">
                    <div class="big fz36 bold">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="block unright">
                    <div class="small_text white medium fz13">Stara cena</div>
                    <div class="big white through fz24 bold">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <div class="form_wrap relative">
                <div class="stay absolute">
                    <div class="icon ma"><img src="{{ asset('/') }}dailysharkFiles/babycam/form_stay_icon.png" alt=""></div>
                    <div class="text medium fz13 center">
                        Količine su ograničene, iskoristite popust na vreme!
                    </div>
                </div>
                <form class="relative" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="title white center bold">
                        Podaci za dostavu
                    </div>
                    <input type="text" placeholder="Ime i prezime" name="name" required >
                    <input type="tel" placeholder="Telefon" name="phone" required >
                    <input type="submit" value="Poručite sada" class="white bold fz24 upp">
                </form>
            </div>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
