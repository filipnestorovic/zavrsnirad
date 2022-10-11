<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/favicon.png" type="icon/png">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/style.css">
    <style>
        .b1 {
            padding: 0 0 10px;
            background: #f8faf5 url({{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/offer.jpg) no-repeat center 139px;
            position: relative;
        }
        .use li:nth-child(1) {
            background: #fff url({{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/use1.jpg) no-repeat 0 -5px;
            padding: 30px 0px 30px 240px;
        }

        .use li:nth-child(2) {
            background: #fff url({{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/use2.jpg) no-repeat right -10px;
            padding: 15px 240px 13px 0;
        }

        .use li:nth-child(3) {
            background: #fff url({{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/use3.jpg) no-repeat 0 0;
            padding: 30px 0px 21px 240px;
        }

        .use li:nth-child(4) {
            background: #fff url({{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/use4.jpg) no-repeat right -10px;
            padding: 9px 240px 8px 0;
        }
    </style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1> PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">MULTIFUNKCIONALNI PULSNI MASAŽER ZA VRATA I CELO TELO</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
        <div class="effect">Profesionalni efekat masaže</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="checklist">
            <li>
                <p>Momenatlno oslobađa od bola</p>
            </li>
            <li>
                <p>Ima opuštajući efekat</p>
            </li>
            <li>
                <p>Poboljšava kvalitet sna</p>
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
        <h2 class="title"><span>Oslobodite se bola</span> za samo nekoliko minuta masaže dnevno</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/b2.jpg" alt>
        <p>Purple Relax je inteligentni vibracioni masažer koji deluje električnim impulsima poboljšavajući mikrocirkulaciju krvi.
            <b>Elektro impulsi pokreću mišiće, normalizuju cirkulaciju krvi, zasićuju ćelije i tkiva kiseonikom i pozitivno utiču na nervni sistem.</b></p>
        <p>Purple Relax masažer <b>brzo ublažava napetost, bol i umor, kod kuće, u kancelariji ili na putovanju.</b> Istovremeno, dobićete prijatnu, duboku i opuštajuću masažu,
            uporedivu sa radom profesionalnog masera.</p>
        <span>PRAKTIČNI UREĐAJ KOJI IMA <br> VIŠE EFEKATA:</span>
        <ul class="checklist">
            <li>
                <p>Opušta mišiće vrata</p>
            </li>
            <li>
                <p>Ublažava glavobolju</p>
            </li>
            <li>
                <p>Poboljšava cirkulaciju krvi</p>
            </li>
            <li>
                <p>Pomaže u prevazilaženju nesanice</p>
            </li>
            <li>
                <p>Preporučuje se protiv bolova u vratu i mišićima</p>
            </li>
            <li>
                <p>Daje naboj vedrine i dobrog raspoloženja</p>
            </li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b3 gradient">
        <h2 class="title">Jedan od najboljih i najefikasnijih masažera u svojoj klasi</h2>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/best1.jpg" alt>
            <p><b>6 REŽIMA MASAŽE RAZLIČITOG INTENZITETA</b>
                Omogućavaju vam da prilagodite udoban režim masaže, pogodan za svaku priliku
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/best2.jpg" alt>
            <p><b>DUBINSKO PRODIRANJE U MIŠIĆE</b>
                Električni impulsi duboko prodiru u mišiće i u potpunosti ih pokreću
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/best3.jpg" alt>
            <p><b>DODATNI NASTAVCI</b>
                Za masažu bilo kog dela tela: ramena, leđa, noge, ruke
            </p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best4.jpg" alt>
            <p><b>POGODAN I KOMPAKTAN</b>
                Ne zauzima mnogo prostora, tako da ga možete poneti sa sobom gde god da krenete
            </p>
        </div>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b4">
        <h2 class="title"><span>Kome treba</span><br> Purple Relax masažer?</h2>
        <p>Zahvaljujući svojoj svestranosti, Purple Relax masažer preporučuje se svima ali je posebno koristan za sledeće kategorije ljudi:</p>
        <div class="body">
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body1.jpg" alt>
                <p> Zaposleni</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body2.jpg" alt>
                <p> Studenti i školarci</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body3.jpg" alt>
                <p> Sportisti</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body4.jpg" alt>
                <p> Svako ko pati od bolova u vratu i migrene</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body5.jpg" alt>
                <p> One koji imaju probleme sa snom</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body6.jpg" alt>
                <p> One koji vode sedeći način života</p>
            </div>
        </div>
        <a href="#order_form" class="btn">PORUČITE SA POPUSTOM</a>
    </section>
    <section class="b5 gradient">
        <h2 class="title">Uživajte u masaži bilo kog dela tela jednostavnim povezivanjem elektroda</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body_grad.jpg" alt>
        <p>Masažne elektrode efikasno ublažavaju bol u mišićima: <b>kod modrica, grčeva, uganuća, a doprinose i njihovom jačanju</b>
            zahvaljujući direktnom dejstvu impulsa koji teraju mišiće da se kontrakuju. <b>Elektrode su dve mekane hipoalergene ploče
                sa lepljivim provodljivim slojem gela,</b> što olakšava pričvršćivanje na telo.</p>
    </section>
    <section class="b6">
        <h2 class="title"><span> Profesionalni masažer </span><br> u vašem domu!</h2>
        <ul class="use">
            <li><span>1</span> Uključite masažer <br> pritiskom na dugme ON</li>
            <li><span>2</span> Izaberite režim <br> koji želite</li>
            <li><span>3</span> Stavite <br> masažer na vrat i <br> uživajte u masaži</li>
            <li><span>4</span> Povežite dodatne elektrode <br> ako je potrebno</li>
        </ul>
        <a href="#order_form" class="btn">PORUČITE MASAŽER</a>
    </section>
    <section class="b7">
        <h2 class="title"><span>SPECIFIKACIJA</span> PROIZVODA</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/char.jpg" alt>
        <ul class="char">
            <li><b> Vratni masažer </b> <span> 1 komad</span></li>
            <li><b> Dodatne elektrode </b> <span> 2 komada</span></li>
            <li><b> Uputstvo </b> <span> 1 komad</span></li>
            <li><b> Način masaže </b> <span> 6 režima</span></li>
{{--            <li><b> Automatsko isključivanje </b> <span> svakih 10 minuta</span></li>--}}
        </ul>
        <a href="#order_form" class="btn">PORUČITE ODMAH</a>
    </section>
    <section class="b8 gradient">
        <h2 class="title">Utisci kupaca <br> kojima je <br> masažer pomogao</h2>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/rev1.jpg" alt>
            <p><b>Vrat me je dugo boleo, ponekad bolovi nisu ni prestajali.</b>
                Umorna od posla, budila sam se noću. Dijagnoza doktora - "Degeneracija diska vratne kičme".
                Prijatelji su mi preporučili kupovinu Purple Relax pulsnog masažera. Koristim ga više od mesec dana,
                2-3 puta dnevno po nekoliko minuta i imama znatno olakšanje, super se osećam.</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava1.jpg" alt>
                <p>Gabrijela<br> Novi Sad</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile2/rev2.jpg" alt>
            <p>Pulsni masažer je jeftin, a donosi mnogo zadovoljstva i koristi! Česti sam patio od bolova u leđima,
                pa sam počeo da koristim ovaj masažer. <b>Pre kupovine sam sumnjao, ali sada vidim
                    da je u pitanju jedan odličan proizvod.</b> Opušta i ne stvara neprijatnosti. Ovo svakome preporučujem!</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava2.jpg" alt>
                <p>Srđan<br> Negotin</p>
            </div>
        </div>
        <div class="reviews__item">
            <p>Veoma korisna stvar u automobilu, <b>posebno kada idem na duge relacije.</b> Uvek ga nosim sa sobom, vrlo je praktičan i lako se koristi.
                Nisam verovao da za tako malo novca mogu postići ovako dobar efekat.</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava3.jpg" alt>
                <p>Andrija<br> Beograd</p>
            </div>
        </div>
        <a href="#order_form" class="btn">PORUČITE SA POPUSTOM</a>
    </section>
    <section class="b9">
        <h2 class="title">Dostava i plaćanje</h2>
        <ul class="delivery">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del1.png" alt>
                <p><b>Brza isporuka</b> Kurirskom službom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del2.png" alt>
                <p><b>Plaćanje pouzećem</b> Bez plaćanja unapred! Plaćanje se vrši prilikom isporuke</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del3.png" alt>
                <p><b>100% garancija kvaliteta</b> Proveravano proizvode pre isporuke i garantujemo kvalitet 100%</p>
            </li>
        </ul>
    </section>
    <section class="b1 end">
        <h1>PURPLE <span>RELAX</span></h1>
        <h2 class="gradient">MULTIFUNKCIONALNI PULSNI MASAŽER ZA VRATA I CELO TELO</h2>
        <div class="sale"> SAMO DANAS! <span> -40%</span> <b> POPUSTA</b></div>
        <div class="effect">Profesionalni efekat masaže</div>
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
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Ulica i broj" required>
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
