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
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/petgroomingdryer/style.css">
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>FEN ZA KUĆNE LJUBIMCE</h1>
        <h2>NEIZOSTAVAN U SVAKOJ KUĆI U KOJOJ ŽIVI PAS</h2>
        <ul class="plus">
            <li>Za sve vrste dlake</li>
            <li>Smanjuje linjanje</li>
            <li>Efikasno i bezbedno suši krzno</li>
        </ul>
        <div class="sale">
            Akcija! <p>-40%</p> Popusta
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span><p>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span><p>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }} </p>
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
        <h2 class="title">PREDNOSTI <span>PET GROOMING FENA</span> ZA KUĆNE LJUBIMCE</h2>
        <ul class="preim">
            <li>Kvalitetna četka <br>skida višak dlake</li>
            <li>Brzo suši krzno <br>čineći ga mekanim</li>
            <li>Ima dugme za lako <br>odstranjivanje dlake</li>
            <li>Ne grebe i ne stvara <br>previše toplote</li>
            <li>Razvili su ga <br>profesionalni groomeri</li>
            <li>Možete birati <br>topli i hladni vazduh</li>
        </ul>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <h2>ŠTA JE <span>PET GROOMING DRYER?</span></h2>
        <p>Fen za kućne ljubimce je specijalni fen namenjen životinjama, koji poseduje posebnu posebnu četku zahvaljujući
            čijem se dizajnu tokom upotrebe iščešljava sva mrtva dlaka, bez čupanja zdravih dlaka.</p>
        <ul class="wat">
            <li>Ne povređuje žive dlake u krznu</li>
            <li>Smanjuje gubitak dlake do 94%</li>
            <li>Pruža salonsku negu ljubimaca kod kuće</li>
            <li>Poboljšava izgled krzna</li>
        </ul>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <p>Veterinari širom sveta preporučuju korišćenje ovog proizvoda za sušenje i češljanje životinjske dlake.
            Upotreba ovog uređaja pruža profesionalnu negu životinja kod kuće.</p>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <p>Materijal od kojeg je napravljen češalj koji se nalazi vrhu se vremenom ne troši. Jedna kupovina takvog gedžeta zamenjuje upotrebu 20 običnih češljeva. Upoređujući cenu jednog fena za ljubimce i 20 češalja, lako je uočiti značajnu razliku.
            <b>Efikasnost tokom primene ista je za kratkodlake i dugodlake pse, a upotreba ove vrste fena čini da krzno mačke bude gusto, raskošno i lepo.</b></p>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <h2 class="title">KAKO GA <span>PRAVILNO KORISTITI?</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/petgroomingdryer/cat.jpg" alt="Pet Grooming Dryer" title="Pet Grooming Dryer">
        <ul class="use">
            <li><p>Završite kupanje  ljubimca i prebrišite ga peškirom</p></li>
            <li><p>Upalite fen i podesite željeni intenzitet duvanja</p></li>
            <li><p>Nežno češljajte svog ljubimca niz dlaku</p></li>
            <li><p>Kada se nakupi dlaka na četki, pritisnite dugme i jednostavno ih uklonite</p></li>
            <li><p>Kada dlaka postane suva, nežna i sjajna ugasite fen i završite češljanje</p></li>
        </ul>
        <div class="note">
            Veterinari preporučuju korišćenje ovog fena nakon svakog kupanja. Na 100 testiranih slučajeva, 97 je dobilo rezultat bujne i sjajne dlake.
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
                    <img src="{{ asset('/') }}dailysharkFiles/petgroomingdryer/r1.jpg" alt="Pet Grooming Dryer">
                    <h3>Žaklina, 24 godine</h3>
                    <p>Da budem iskrena, nisam mogla ni da pomislim da će nešto ovako dobro pomoći da se ukloni suvišno krzno i revizalizuje dlaka mog ljubimca. Potpuno sam zadovoljna ovim proizvodom, stvarno je vrh. Posebna prednost je što mogu da ga kupam češće u zimskom periodu.</p>
                </div>
            </div>
            <div>
                <div class="rev r2">
                    <img src="{{ asset('/') }}dailysharkFiles/petgroomingdryer/r2.jpg" alt="Pet Grooming Dryer">
                    <h3>Olga, 37 godina</h3>
                    <p>Pet Grooming Dryer je divna stvar, ima udobnu ručku i prijatno leži u ruci. Metalni češljići imaju gumiranu zaštitu pa ne grebu kožu kućnog ljubimca, sve se odvija vrlo glatko i lako. Takođe mi se dopalo posebno dugme za lakše
                        skidanje dlake.</p>
                </div>
            </div>
            <div>
                <div class="rev r3">
                    <img src="{{ asset('/') }}dailysharkFiles/petgroomingdryer/r3.jpg" alt="Pet Grooming Dryer">
                    <h3>Viktorija, 29 godina</h3>
                    <p>Generalno, veoma sam zadovoljna ovim proizvodom i uošte ne žalim što sam ga kupila. Višak dlake više ne leti na sve strane, ne skuplja se u uglovima prostorije.Najvažnije mi je što osušim psa za par minuta, a ranije sam morala
                        zimi da ga vodim na kupanje i plaćam skupe tretmane.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>PET GROOMING DRYER</h1>
        <h2>ISKORISTITE SPECIJALNI POPUST OD 40% već danas</h2>
        <ul class="plus">
            <li>Za sve vrste dlake</li>
            <li>Smanjuje linjanje</li>
            <li>Efikasno i bezbedno suši krzno</li>
        </ul>
        <div class="sale">
            Akcija! <p>-40%</p> Popusta
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span><p>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span><p>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</p>
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
<script src="{{ asset('/') }}dailysharkFiles/petgroomingdryer/slick.min.js"></script>
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
