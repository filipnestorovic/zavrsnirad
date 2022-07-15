<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/gardengloves/usage/a8-4.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/gardengloves/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/gardengloves/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/gardengloves/styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/gardengloves/normalize.css">
    <script src="{{ asset('/') }}dailysharkFiles/gardengloves/aos.js"></script>
    <style>
        @font-face {
            font-family: slick;
            font-weight: 400;
            font-style: normal;
            src: url({{ asset('/') }}fonts/slick.eot);
            src: url({{ asset('/') }}fonts/slick.eot@#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/slick.woff) format('woff'), url({{ asset('/') }}fonts/slick.ttf) format('truetype'), url({{ asset('/') }}fonts/slick.svg#slick) format('svg')
        }
        .form-control{
            display: block;
        }
        .btn {
            height: 50px;
            font-size: 2rem;
            padding-top: 10px;
            margin-top: 20px;
        }
        input[type=text],input[type=tel] {
            font-size: 22px !important;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center"><img class="logo" src="{{ asset('/') }}dailysharkFiles/gardengloves/logo.png" alt="logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="#sec_1">Zašto kupiti</a></li>
                <li><a href="#advantages">Prednosti</a></li>
                <li><a href="#review">Utisci</a></li>
                <li><a href="#order">Poruči sada</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#sec_1">Zašto kupiti</a></li>
        <li><a href="#advantages">Prednosti</a></li>
        <li><a href="#review">Utisci</a></li>
        <li><a href="#order">Poruči sada</a></li>
    </ul>
    <div class="row">
        <div class="container">
            <div class="col s12 m6 header_left">
            </div>
            <div class="col s12 m6">
                <div class="row">
                    <div class="col s12">
                        <h1 class="title">GARDEN <span>GENIE</span> GLOVES</h1>
                        <p class="subtitle">Najbolje rukavice za baštu koje su se ikada pojavile na tržištu</p>
                    </div>
                    <div class="col s12 m7">
                        <div class="estimate-form z-depth-2">
                            <h3 class="discount">Iskoristite specijalni popust od <strong class="text-color">40%!</strong></h3>
                            <div class="price">
                                <div class="price_old">
                                 <span>
                                    {{ $prices[1]['originalPrice'] }}
                                 </span>
                                    {{ $prices[1]['currency'] }}
                                </div>
                                <div class="price_new">
                                 <span>
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                    {{ $prices[1]['currency'] }}
                                </div>
                            </div>
                            <form method="post" action="#">
                                <div class="form_group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Ime i prezime" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Telefon" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Poruči odmah" class="btn waves-effect waves-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s12 m5">
                        <ul class="header_list">
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Ima 4 oštra plastična nastavka za prst</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Kvalitetan silikonski materijal</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Lako kopanje ruba i pravljenje brazdi</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Idealno za čupanje korova i trave u vrtu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="sec_1">
    <img src="{{ asset('/') }}dailysharkFiles/gardengloves/garden-left.jpg" class="garden_left" alt="garden_left" data-aos="zoom-in-right">
    <img src="{{ asset('/') }}dailysharkFiles/gardengloves/garden-right.jpg" class="garden_right" alt="garden_right" data-aos="zoom-in-left">
    <div class="container">
        <h2 class="section_title">
            Zašto verujemo da su vam ove rukavice neophodne
        </h2>
        <ul class="sec1_list">
            <li>Nema potrebe više da nosite alat sa sobom u baštu. Ove praktične rukavice učiniće da duplo brže obavljate baštenske poslove.</li>
            <li>Otkopavanje i čupanje korova, kidanje guste trave i kopanje rupa za cveće, samo su neke od stvari koje će vam olakšati ove magične rukavice.
                Možete otkopavati luk, šargarepu, krompiriće i ostalo povrće, a presađivanje cveća nikad neće biti lakše.
                Duplo brže ćete obavljati poslove u vrtu, i što je najvažnije radićete sa elanom jer se nećete mučiti. Rad u bašti biće vam zadovoljstvo.</li>
            <li>Rukavice su napravljene od kombinacije platna, silikona i kvalitetne ABS plastike od koje su sačinjeni oštri plastični nastavci za prste.
                Jako su izdržljive i vodootporne, tako da će vam ruke ostati suve, a rukavice će trajati dugo.</li>
            <li>Univerzalna je veličina i mogu da ih koriste i muškarci i žene.</li>
        </ul>
    </div>
</section>
<section id="sec_2">
    <div class="container">
        <h2 class="section_title white-text">Vaš pomoćnik u bašti od kog se nećete razdvajati je trenutno najprodavaniji i najpopularniji proizvod u Evropi u polju baštovanstva.</h2>
        <h3 class="section_subtitle white-text">Najprodavaniji u 2021</h3>
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('/') }}dailysharkFiles/gardengloves/sec_2/1.jpg" class="responsive-img" alt="sec_2">
                        <span class="card-title">Za lagane hobi poslove</span>
                    </div>
                    <div class="card-content">
                        <p>Ukoliko uživate u čupkanju, presađivanju i ulepšavanju vašeg vrta, cveća ili travnjaka, ove rukavice su idealan proizvod.
                            Većina naših kupaca kaže da nikada nisu radili baštenske poslove sa toliko uživanja i elana. Ranije su vam trebali razni alati, a sada su vam potrebne samo ove rukavice.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('/') }}dailysharkFiles/gardengloves/sec_2/2.jpg" class="responsive-img" alt="sec_2">
                        <span class="card-title">Za ozbiljne vrtlarske poslove</span>
                    </div>
                    <div class="card-content">
                        <p>Ukoliko se bavite povrtlarstvom i imate baštu u svom domaćinstvu, ove rukavice će vam u mnogome pomoći i olakšati poslove.
                            Sa velikom preciznošću ćete moći da čupate i kidate travu, bez straha da ćete oštetiti biljku kao što se to dešava kada koristite drugo razno oruđe za obradu zemlišta.
                            Kada plodovi budu zreli za vašenje iz zemlje, sa ovim rukavicama ćete moći da ih vadite nežno bez oštećenja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="sec5">
    <div class="container">
        <h2 class="section_title">
            Saveti agronoma
        </h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="author_person">
                    <img class="responsive-img" src="{{ asset('/') }}dailysharkFiles/gardengloves/author.jpg" alt="">
                    <h4 class="author_name">Vaso Samardžija</h4>
                    <p class="author_age">Agronom, 27 godina iskustva</p>
                </div>
            </div>
            <div class="col s12 m8">
                <div class="author_text">
                    <p>Mi agronomi koristimo profesionalne alate, koji su dosta skupi i zaista korisni. Unuka mi je za rođendan poručila ove rukavice i počeo sam da ih koristim samo da se moje mezimče ne bi uvredilo.
                        Nakon kratkog vremena, shvatio sam da su mi te rukavice okakšanje. Sve sitne poslove koje ručno moram da radim i za koje mi treba alat, počeo sam da radim svojim rukama i mogu da vam kažem da je mnogo lakše i preciznije.</p>
                    <p>Kada vadim luk, nekada ima potrebe da se dodatno iskopa okolo. Vrlo često se dešavalo da malim ašovom oštetim plod. Sada sa ovim rukavicama to mogu skroz precizno da odradim.
                        Ma nemam šta da vam kažem, ovaj proizvod je ekstra dobar i mogu svakome da ga preporučim. Kada se meni kao profesionalcu dopao, dopašće se svakome.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="advantages">
    <div class="container">
        <h2 class="section_title">Prednosti Garden Genie rukavica</h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="ads">
                    <p><i class="fas fa-check-square"></i>Zamenjuju 5 različitih alata</p>
                </div>
                <div class="ads">
                    <p><i class="fas fa-check-square"></i>Visoko kvalitetni materijali</p>
                </div>
            </div>
            <div class="col s12 m4">
                <img class="responsive-img product" src="{{ asset('/') }}dailysharkFiles/gardengloves/product.png" alt="">
            </div>
            <div class="col s12 m4">
                <div class="ads">
                    <p><i class="fas fa-check-square"></i>Čuvaju ruke od povreda, vlage i blata</p>
                </div>
                <div class="ads">
                    <p><i class="fas fa-check-square"></i>Mogu da se peru pod mlazom vode</p>
                </div>
            </div>
            <div class="col s12">
                <div class="ads">
                    <p><i class="fas fa-check-square"></i>Niska cena</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="review">
    <div class="container">
        <h2 class="section_title">Utisci naših kupaca</h2>
        <div class="review">
            <div class="slider_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardengloves/review/1.jpg" alt="review" class="review_img">
                <h2 class="review_name">Ivan</h2>
                <p class="review_text">Najbolji alat koji sam do sada imao u vrtu. Rukavice koristim za okopavanje krompira. Desnom rukom iskopam svu suvišnu travu a levom je pokupim. Ranije mi je za to trebalo mnogo više vremena ali sada radim lako i brzinski.
                    Zaista sve pohvale za ove rukavice, mnogo su mi olakšale posao.</p>
            </div>
            <div class="slider_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardengloves/review/2.jpg" alt="review" class="review_img">
                <h2 class="review_name">Jasna</h2>
                <p class="review_text">Suprug mi je poklonio ove rukavice, jer leti provodim dosta vremena na selu radeći u cvećnjaku koji obožavam. Zahvaljujući ovim rukavicama sada još više uživam u poslu, mogu lako da kopam male rupe, presađujem cveće i vadim suvišnu
                    travu i korov. Hvala mom dragom suprugu na poklonu i hvala vama što prodajete ovaj proizvod.</p>
            </div>
            <div class="slider_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardengloves/review/3.jpg" alt="review" class="review_img">
                <h2 class="review_name">Mihajlo</h2>
                <p class="review_text">Neophodna stvar za baštovane. Sada mogu lepo da plevim luk i krompir, i moj plastenik sada izgleda kao sa reklame. Mogu da priđem uglovima kojima nisam mogao da priđem običnim alatom. Brza isporuka i kvaliteta proizvod.
                    Hvala vam.</p>
            </div>
        </div>
    </div>
</section>
<section id="delivery" class="white-text">
    <div class="container">
        <h2 class="section_title">3 KORAKA DA PORUČITE RUKAVICE</h2>
        <div class="row">
            <div class="col s12 m4 step">
                <div class="step_icon circle"><i class="fas fa-2x fa-hand-pointer"></i></div>
                Ostavite podatke za dostavu na našem sajtu
            </div>
            <div class="col s12 m4 step">
                <div class="step_icon circle"><i class="fas fa-2x fa-headphones-alt"></i></div>
                Kontaktiraćemo Vas u najkraćem roku da potvrdimo porudžbinu
            </div>
            <div class="col s12 m4 step">
                <div class="step_icon circle"><i class="fas fa-2x fa-truck"></i></div>
                Paket koji plaćate pouzećem šaljemo u roku od 1-2 radna dana
            </div>
        </div>
    </div>
</section>
<section id="order">
    <div class="row" style="margin-bottom: 0;">
        <div class="container">
            <div class="col s12 m6 header_left">
            </div>
            <div class="col s12 m6">
                <div class="row">
                    <div class="col s12">
                        <h1 class="title">GARDEN <span>GENIE</span> GLOVES</h1>
                        <p class="subtitle">Najbolje rukavice za baštu koje su se ikada pojavile na tržištu</p>
                    </div>
                    <div class="col s12 m7">
                        <div class="estimate-form z-depth-2">
                            <h3 class="discount">Iskoristite specijalni popust od <strong class="text-color">40%!</strong>
                            </h3>
                            <div class="price">
                                <div class="price_old">
                                 <span>
                                    {{ $prices[1]['originalPrice'] }}
                                 </span>
                                    {{ $prices[1]['currency'] }}
                                </div>
                                <div class="price_new">
                                 <span>
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                    {{ $prices[1]['currency'] }}
                                </div>
                            </div>
                            <form method="post" action="#">
                                <div class="form_group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Ime i prezime" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Telefon" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Poruči odmah" class="btn waves-effect waves-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s12 m5">
                        <ul class="header_list">
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Ima 4 oštra plastična nastavka za prst</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Kvalitetan silikonski materijal</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Lako kopanje ruba i pravljenje brazdi</li>
                            <li><span class="list_icon"><i class="fas fa-check-circle"></i></span> Idealno za čupanje korova i trave u vrtu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/gardengloves/materialize.min.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function () {
        AOS.init();
        $('.sidenav').sidenav();
        $('.review').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
