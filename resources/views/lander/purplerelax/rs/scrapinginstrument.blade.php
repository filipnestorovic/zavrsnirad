<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelax2Files/scrapinginstrument/favicon.png" type="icon/png">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelax2Files/scrapinginstrument/style.css">
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1> PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">3 u 1 SCRAPING INSTRUMENT</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
        <div class="effect">NAJBOLJI PROIZVOD ZA DETOKSIKACIJU
I IZVLAČENJE CELULITA</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="checklist">
            <li>
                <p>Momentalna detoksikacija</p>
            </li>
            <li>
                <p>Izvčanje celulita i viška tečnosti</p>
            </li>
            <li>
                <p>Oblikovanje tela i oslobađanje od bola</p>
            </li>
        </ul>
        <div class="formbox">
            <h3>POŽURITE DA PORUČITE SA POPUSTOM OD 40%</h3>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>RSD</small>
                </li>
            </ul>
            <a href="#order_form" class="btn">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="b2">
        <h2 class="title"><span>Dovedite svoje telo u balans </span> za samo pola sata tretmana dnevno</h2>
        <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/b2.jpg" alt>
        <p>Scraping Instrument je 3 u 1 proizvod, koji služi za masažu, hidžamu i razbijanje i izvlačenje celulita.
            <b>U kombinaciji sa eteričnim uljem deluje prijatno i opuštajuće na mišiće i kožu.</b></p>
        <p>Ublažava napetost i bolove u leđima, odličan je za detoksikaciju tela, izvlači višak vode iz tela i uklanja celulit.</b> Proizvod koji na zapadu koriste svi prestižniji kozmetički saloni sada se pojavio na našem tržištu.</p>
        <span>PRAKTIČNI UREĐAJ KOJI IMA <br> VIŠE EFEKATA:</span>
        <ul class="checklist">
            <li>
                <p>Opušta mišiće vrata</p>
            </li>
            <li>
                <p>Oslobađa bola</p>
            </li>
            <li>
                <p>Izvlači toksine</p>
            </li>
            <li>
                <p>Uklanja celulit</p>
            </li>
            <li>
                <p>Pospešuje cirkulaciju</p>
            </li>
            <li>
                <p>Daje naboj vedrine i dobrog raspoloženja</p>
            </li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b3 gradient">
        <h2 class="title">Jedan od najboljih i najefikasnijih proizvoda u svojoj klasi</h2>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/best1.jpg" alt>
            <p><b>Scraping Instrument zagreva kožu i vakumski izvlači toksine. Toksini koji se talože ispod kože i stvaraju pritisak i bolove u leđima.</b>
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/best2.jpg" alt>
            <p><b>Fizioterapeutski masažer za poboljšanje protoka krvi. Aktivira limfnu drenažu i opušta mišiće.</b>
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/best3.jpg" alt>
            <p><b>Odlično sredstvo u borbi protiv celulita. Izvlači višak vode iz tela i celulit na površinu.</b>
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/best4.jpg" alt>
            <p><b>Ne zauzima mnogo prostora i napajaju ga 2 AAA baterije. Možete ga poneti sa sobom gde god da krenete.</b>
            </p>
        </div>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b4">
        <h2 class="title"><span>Kome treba</span><br> Scraping Instrument?</h2>
        <p>Zahvaljujući svojoj svestranosti, Scraping Instrument preporučuje se svima ali je posebno koristan za sledeće kategorije ljudi:</p>
        <div class="body">
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body1.jpg" alt>
                <p> Zaposleni</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body2.jpg" alt>
                <p> Studenti i školarci</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body3.jpg" alt>
                <p> Sportisti</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body4.jpg" alt>
                <p> Svako ko pati od bolova i migrena</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body5.jpg" alt>
                <p> One koji imaju probleme sa snom</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body6.jpg" alt>
                <p> One koji vode sedeći način života</p>
            </div>
        </div>
        <a href="#order_form" class="btn">PORUČITE SA POPUSTOM</a>
    </section>
    <section class="b5 gradient">
        <h2 class="title">Uživajte u masaži bilo kog dela tela na veoma jednostavan način</h2>
        <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/body_grad.jpg" alt>
        <p>Scaraping Instrument ima 10 čvorova za masažu, <b>6 nivoa usisnog pritiska i temperature od 30 do 50 stepeni.</b>
            Možete odabrati odgovarajući intenzitet i temperaturu prema vašim potrebama.
</p>
    </section>
    <section class="b6">
        <h2 class="title"><span> Profesionalni uređaj </span><br> u vašem domu!</h2>
        <ul class="use">
            <li><span>1</span> Uključite uređaj<br> pritiskom na dugme za paljenje</li>
            <li><span>2</span> Podesite odgovarajući<br> pritisak i temperaturu</li>
            <li><span>3</span> Stavite <br> uređaj na željeni <br> deo tela</li>
            <li><span>4</span> Uživajte u zdravom<br> i korisnom efektu</li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE MASAŽER</a>
    </section>
    <section class="b7">
        <h2 class="title"><span>SPECIFIKACIJA</span> PROIZVODA</h2>
        <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/char.jpg" alt>

        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b8 gradient">
        <h2 class="title">Utisci kupaca <br> kojima je <br> Scraping Instrument pomogao</h2>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/rev1.jpg" alt>
            <p><b>Imala sam dosta celulit i nisam znala kako da ga se rešim.</b>
                 Raznim tretmanima sam uspevala da ga izbacim na površinu ali ne i da ga uklonim.
Preporučili su mi kupovinu ove spravice, prvo sam bila skeptična ali rekoh hajde da probam. Za 20 dana sam uklonila sav celulit sa površine kože. Sve preporuke!</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/ava1.jpg" alt>
                <p>Gabrijela<br> Novi Sad</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/rev2.jpg" alt>
            <p><b>Ovaj uređaj je jeftin a donosi mnogo zadovoljstva.</b> Često sam patio od bolova u leđima, ali od kako koristim ovo čudo bolovi su nestali. Pre kupovine sam sumnjao, ali sada vidim da je u pitanju jedan odličan proizvod.
Opušta i ne stvara neprijatnosti. Ovo svakome preporučujem!</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/ava2.jpg" alt>
                <p>Srđan<br> Negotin</p>
            </div>
        </div>
        <div class="reviews__item">
            <p><b>Veoma korisna stvar za detoksikaciju organizma.</b> Mnogo se bolje osećam od kako ovo koristim. Kupio sam i bratu jedan. Pozdrav</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/ava3.jpg" alt>
                <p>Andrija<br> Beograd</p>
            </div>
        </div>
        <a href="#order_form" class="btn">PORUČITE SA POPUSTOM</a>
    </section>
    <section class="b9">
        <h2 class="title">Dostava i plaćanje</h2>
        <ul class="delivery">
            <li>
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/del1.png" alt>
                <p><b>Brza isporuka</b> Kurirskom službom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/del2.png" alt>
                <p><b>Plaćanje pouzećem</b> Bez plaćanja unapred! Plaćanje se vrši prilikom isporuke</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelax2Files/scrapinginstrument/del3.png" alt>
                <p><b>100% garancija kvaliteta</b> Proveravano proizvode pre isporuke i garantujemo kvalitet 100%</p>
            </li>
        </ul>
    </section>
    <section class="b1 end">
        <h1>PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">3 u 1 SCRAPING INSTRUMENT</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
        <div class="effect">NAJBOLJI PROIZVOD ZA DETOKSIKACIJU
I IZVLAČENJE CELULITA</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="formbox">
            <h3>PORUČITE ODMAH!</h3>
            <p>A mi ćemo vas u najkraćem roku kontaktirati da potvrdimo porudžbinu.</p>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>RSD</small>
                </li>
            </ul>
            <form id="order_form" class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <label>Ime i prezime</label>
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <label>Telefon</label>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <label>Adresa</label>
                <input class="field" name="shipping_address" type="text" placeholder="Ulica i broj" required>
                <label>Grad</label>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="btn" type="submit">Završi porudžbinu</button>
            </form>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
