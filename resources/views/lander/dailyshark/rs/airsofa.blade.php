<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=480"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/airsofa/favicon.html" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/airsofa/fontawesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/airsofa/main.min.css"/>
</head>
<body class="lang-ro">
<div class="wrapper">
    @include('components.display_errors')
    <section class="title">
        <h3>Za plažu, dom i rekreaciju</h3>
    </section>
    <section class="AirSofa">
        <h1><span>Air</span>Sofa</h1>
        <h2>
            Kompaktna <br/>
            ležaljka <br/>
            na naduvavanje
        </h2>
        <div class="circle">HIT SEZONE 2023</div>
    </section>
    <section class="buy centr-text">
        <button>
            <a href="#offer">
                <p>
                    KUPITE<br/>
                    ZA
                </p>
                <span>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </a>
        </button>
        <h2>UMESTO
            {{ $prices[1]['originalPrice'] }}
            {{ $prices[1]['currency'] }}
        </h2>
    </section>
    <section class="video">
        <h2>Pogledajte kako <span>AirSofa</span> funkcioniše</h2>
        <video src="{{ asset('/') }}dailysharkFiles/airsofa/video.mp4" width="100%" height="100%" controls
               poster="{{ asset('/') }}dailysharkFiles/airsofa/poster.png"></video>
    </section>
    <section class="photo">
        <h2>
            Lezite, sunčajte se, plivajte!
        </h2>
    </section>
    <img class="collage" src="{{ asset('/') }}dailysharkFiles/airsofa/photo_all.jpg" alt=""/>
    <section class="why">
        <h2>
            Zašto vam treba <span>Air</span> Sofa?
        </h2>
        <ul>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_01.svg" alt=""/></li>
            <li>
                <h3>Za plažu</h3>
            </li>
            <li>
                <h4>Ne volite pesak, umorni od sedenja na peškirima ili od plaćanja ležaljki? - Onda je ovo tvoj izbor!</h4>
            </li>
            <li>
                <h5>Onda je ovo tvoj izbor!</h5>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_02.svg" alt=""/></li>
            <li>
                <h3>Za piknik</h3>
            </li>
            <li>
                <h4>Da li ste umorni od sedenja na travi ili zemlji?</h4>
            </li>
            <li>
                <h5>Onda je ovo tvoj izbor!</h5>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_03.svg" alt=""/></li>
            <li>
                <h3>Za poklon</h3>
            </li>
            <li>
                <h4>Ne možete kupiti nešto neobično kao poklon nekome?</h4>
            </li>
            <li>
                <h5>Onda je ovo tvoj izbor!</h5>
            </li>
        </ul>
    </section>
    <section class="timer">
        <h5>Iskoristite 40% popusta</h5>
        <button>
            <a href="#offer">
                <p>PORUČITE</p>
            </a>
        </button>
    </section>
    <section class="example">
        <img src="{{ asset('/') }}dailysharkFiles/airsofa/image_girl.jpg" alt=""/>
        <h2>Air Sofa ležaljka na naduvavanje se prilagođava vašem telu, stoga je veoma udobna!</h2>
        <img src="{{ asset('/') }}dailysharkFiles/airsofa/Photo_woman_boy.jpg" alt=""/>
    </section>
    <section class="discription">
        <ul>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Chek_4.svg" alt=""/></li>
            <li>
                <h3>Savršena udobnost</h3>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Chek_4.svg" alt=""/></li>
            <li>
                <h3>Napravljena od izdržljivog materijala</h3>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Chek_4.svg" alt=""/></li>
            <li>
                <h3>Dolazi sa torbom za nošenje</h3>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Chek_4.svg" alt=""/></li>
            <li>
                <h3>Maksimalna izdržljivost - 200 kg</h3>
            </li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/airsofa/photo_girl.jpg" alt=""/>
    </section>
    <section class="buy">
        <button>
            <a href="#offer">
                <p>
                    KUPITE<br/>
                    ZA
                </p>
                <span>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </a>
        </button>
        <h2>UMESTO
            {{ $prices[1]['originalPrice'] }}
            {{ $prices[1]['currency'] }}
        </h2>
    </section>
    <section class="how">
        <h2>Kako poručiti?</h2>
        <div class="flex-table flex">
            <div class="flex col">
                <div class="flex flex--column col">
                    <div class="cell">
                        <img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_computer.svg" alt=""/>
                        <h3>Ostavite svoje podatke na našem sajtu</h3>
                    </div>
                    <div class="cell">
                        <img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_clock.svg" alt=""/>
                        <h3>Kontaktiraćemo vas da potvrdimo porudžbinu</h3>
                    </div>
                </div>
                <div class="flex flex--column col">
                    <div class="cell">
                        <img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_phone.svg" alt=""/>
                        <h3>Šaljemo brzom poštom za 1-2 radna dana</h3>
                    </div>
                    <div class="cell">
                        <img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_card.svg" alt=""/>
                        <h3>Plaćanje po preuzimanju</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <center>
            <h2>Utisci kupaca AirSofa ležaljke</h2>
        </center>
        <div class="reviews__slider">
            <div class="reviews__slide slide">
                <p class="slide__likes">Vladimir</p>
                <p class="slide__text">
                    Često odemo da kampujemo, i svaki put sam morao da imam pun gepek ležaljki i stolica. Sa ovim čudom tih problema nema, izduva se i smota u malu torbicu, ne zauzima prostor u autu a naduva se za tren oka.
                </p>
            </div>
            <div class="reviews__slide slide">
                <p class="slide__likes">Ilinka</p>
                <p class="slide__text">
                    Ako ste umorni od sedenja na kamenju ili prljavoj zemlji ova ležaljka je stvorena za vas. Lagana je i brzo se naduva. Koristim je 3 meseca i nemam nikakvih problema sa njom.
                </p>
            </div>
            <div class="reviews__slide slide">
                <p class="slide__likes">Nikolina</p>
                <p class="slide__text">
                    Kupila sam je prošle godine u Nemačkoj jer je nije bilo kod nas i mogu da vam kažem da je Air Sofa je nešto najudobnije ikada. Pesak mi se na plaži više ne uvlači u donji veš. :)))
                    Danas sam poručila još 2 komada, za mog muža i našeg sina.
                </p>
            </div>
        </div>
    </section>
    <section class="guarati">
        <h2>Air Sofa</h2>
        <ul>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_star.svg" alt=""/></li>
            <li>
                <h3>10 godina je prodajemo u Evropi</h3>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_like.svg" alt=""/></li>
            <li>
                <h3>Garancija kvaliteta</h3>
            </li>
            <li><img src="{{ asset('/') }}dailysharkFiles/airsofa/Icon_people.svg" alt=""/></li>
            <li>
                <h3>Više od 200.000 zadovoljnih kupaca</h3>
            </li>
        </ul>
    </section>
    <!-- /.colors -->
    <h2 class="disscount">40% POPUSTA</h2>
    <section id="offer" class="offer">
        <div class="flex-table flex">
            <div class="flex col">
                <div class="cell new-price">
                    <p>
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
            <div class="flex col">
                <div class="cell old-price">
                    <p>UMESTO
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </p>
                </div>
            </div>
        </div>
        <div class="offer__content">
            <form class="form" action="{{$orderRoute}}" method="POST">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="input-area">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Ime i prezime" required="required"/>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Telefon" required="required"/>
                    </div>
                </div>
                <center>
                    <div class="button-area">
                        <button class="button-order" type="submit">PORUČITE ODMAH</button>
                    </div>
                </center>
            </form>
        </div>
    </section>
</div>
@include('components.pixel_footer')
</body>
</html>
