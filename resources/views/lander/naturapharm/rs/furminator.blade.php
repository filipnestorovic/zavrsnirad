<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href=""/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <style>
        @font-face {
            font-family:'OfficinaSansBookC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBookC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBookC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBookC.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family:'OfficinaSansBoldC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBoldC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBoldC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBoldC.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family:'OfficinaSansBlackC';
            src: url('{{ asset('/') }}fonts/OfficinaSansBlackC.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/OfficinaSansBlackC.woff') format('woff'),
            url('{{ asset('/') }}fonts/OfficinaSansBlackC.otf') format('opentype');
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/furminator/style.css">
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>FURMINATOR ČEŠALJ ZA MAČKE</h1>
        <h2>Neizostavan u svakoj kući u kojoj živi maca</h2>
        <ul class="plus">
            <li>Za dlaku do 5 cm dužine</li>
            <li>Smanjuje linjanje do 90%</li>
            <li>Za mačke težine do 5 KG</li>
        </ul>
        <div class="sale">
            Akcija! <p>-40%</p> Popusta
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span><p>{{ $prices[1]['originalPrice'] }} RSD </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span><p>{{ $prices[1]['amount'] }} RSD </p>
                </div>
            </div>
            <form class="main-order-form m1-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <h2 class="title">PREDNOSTI <span>FURMINATORA</span></h2>
        <ul class="preim">
            <li>Efikasno <br>smanjuje linjanje</li>
            <li>Preporučeno od strane <br>veterinara</li>
            <li>Dugme za lako <br>odstranjivanje dlaka <br>sa četke</li>
            <li>Bezbedno i lako <br>uklanja višak dlake<br> bez grebanja</li>
            <li>Razvili su ga <br>profesionalni groomeri</li>
            <li>Smanjuje linjanje <br>do 90%</li>
        </ul>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2>ŠTA JE <span>FURMINATOR?</span></h2>
        <p>Furminator za mačke je češalj sa specijalnom oštricom od čvrstog čelika, zahvaljujući čijem posebnom dizajnu se tokom upotrebe isčešljava sva mrtva dlaka, bez čupanja zdravih dlaka.</p>
        <ul class="wat">
            <li>Ne povređuje žive dlake u krznu</li>
            <li>Smanjuje gubitak dlake do 94%</li>
            <li>Pruža salonsku negu mačaka kod kuće</li>
            <li>Poboljšava izgled krzna</li>
        </ul>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <p>Veterinari širom sveta preporučuju korišćenje ove vrste češlja za čišćenje životinjske dlake. Upotreba ovog uređaja pomaže u praćenju zdravlja kućnih ljubimaca, a takođe pruža i profesionalnu negu životinja kod kuće.</p>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <p>Materijal od kojeg je napravljen češalj furminatora se vremenom ne troši. Jedna kupovina takvog gedžeta zamenjuje upotrebu 20 običnih češljeva. Upoređujući cenu jednog furminatora i 20 češalja,
            lako je uočiti značajnu razliku. <b>Efikasnost tokom primene ista je za kratkodlake i dugodlake mačke, a upotreba ove vrste češlja čini da krzno mačke bude gusto, raskošno i lepo.</b></p>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">KAKO GA <span>PRAVILNO KORISTITI?</span></h2>
        <img src="{{ asset('/') }}naturapharmFiles/furminator/cat.jpg" alt="Расческа фурминатор для котов и кошек" title="Расческа фурминатор для котов и кошек">
        <ul class="use">
            <li><p>Morate pažljivo proveriti telo mačke da li ima neke kvržice ili izrasline</p></li>
            <li><p>Uklonite sve zaplete na krznu kućnog ljubimca</p></li>
            <li><p>Upotreba ovog češlja na mokroj dlaci je strogo zabranjena</p></li>
            <li><p>Češljajte niz dlaku i nemojte mnogo pritiskati</p></li>
            <li><p>Pažljivo uklonite dlake sa stomaka, nogu i oko genitalija životinje</p></li>
        </ul>
        <div class="note">
            Veterinari i frizeri preporučuju korišćenje alata za šišanje i četkanje dva do tri puta mesečno. Leti se preporučuje da se češalj koristi ne više od jednom mesečno. Zimi ovo može da bude češće.
        </div>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <ul class="ship">
            <li><p>Dostava brzom poštom <br>u roku od 1-2 <br>radna dana</p></li>
            <li><p>Plaćanje se vrši <br>po prijemu <br>robe</p></li>
            <li><p>Ukoliko niste zadovoljni <br>vratićemo vam <br>novac</p></li>
        </ul>
    </div>
</section>
<section class="block8">
    <div class="wrap">
        <h2 class="title">RECENZIJE <span>KUPACA</span></h2>
        <div class="reviews">
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r1.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Žaklina, 24 godine</h3>
                    <p>Da budem iskrena, nisam mogla ni da pomislim da će nešto ovako dobro pomoći da se ukloni toliko krzna. Najinteresantnije je da kratkodlaka mačka proizvodi više dlake od dugodlake. Valjda zato što je starija i što je nikada nisam češljala. Tek sada izlazi cela suvišna poddlaka.</p>
                </div>
            </div>
            <div>
                <div class="rev r2">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r2.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Olga, 37 godina</h3>
                    <p>Furminator je divna stvar, ima udobnu gumiranu dršku, prijatno leži u ruci i ni jedna dlaka joj ne promiče. Metalni zubi ne grebu kožu kućnog ljubimca, sve se odvija vrlo glatko i lako. Takođe mi se dopalo posebno dugme za lakše skidanje vune.</p>
                </div>
            </div>
            <div>
                <div class="rev r3">
                    <img src="{{ asset('/') }}naturapharmFiles/furminator/r3.jpg" alt="Расческа фурминатор для котов и кошек">
                    <h3>Viktorija, 29 godina</h3>
                    <p>Generalno, veoma sam zadovoljna furminatorom i uopšte ne žalim što sam ga kupila. Višak dlake više ne leti na sve strane, ne skuplja se u uglovima prostorije, a ni mačka ih ne proguta u velikim količinama. I ona sama izgleda lepše i negovanije. Sve preporuke za ovaj proizvod.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>FURMINATOR ČEŠALJ ZA MAČKE</h1>
        <h2>Iskoristite specijalni popust od 40% već danas</h2>
        <ul class="plus">
            <li>Za dlaku do 5 cm dužine</li>
            <li>Smanjuje linjanje do 90%</li>
            <li>Za mačke težine do 5 KG</li>
        </ul>
        <div class="sale">
            Akcija! <p>-40%</p> Popusta
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span><p>{{ $prices[1]['originalPrice'] }} RSD</p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span><p>{{ $prices[1]['amount'] }} RSD</p>
                </div>
            </div>
            <form id="buy" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}naturapharmFiles/furminator/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.reviews').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>