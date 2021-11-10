<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/styles.css">
</head>
<body>
@include('components.display_errors')
<section class="offer_section">
    <div class="wrapper">
        <h1 class="main_title"><span>BUTTERFLY MASAŽER</span> VRHUNSKA MASAŽA BILO GDE</h1>
        <div class="content">
            <h2 class="main_subtitle">Opuštanje i zadovoljstvo kao kod profesionalnog masera</h2>
            <ul class="ofr_bull">
                <li>Efikasno opušta mišiće i ublažava grčeve, bol i umor</li>
                <li>Valjci za masažu daju isti osećaj kao da ste na profesionalnoj masaži i pružaju nezaboravno iskustvo</li>
                <li>Kvalitetna masaža tela, bilo gde: kod kuće, na putu, na poslu</li>
                <li>Redovno korišćenje u potpunosti oslobađa napetosti, stresa i glavobolje</li>
            </ul>
        </div>
        <div class="action_block">
            <div class="img">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/1.gif" alt="">
                <div class="sale">popust <span>40%</span></div>
            </div>
            <div class="text">
                <h4>Super akcija!</h4>
                <div class="price">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }} </span><small>RSD </small></div>
                    <p>Cena sada:</p>
                    <div class="new"><span>{{ $prices[1]['amount'] }} </span><small>RSD </small></div>
                </div>
                <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Iskoristite popust</a>
            </div>
        </div>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title" id="video_block"><span>ČEMU SLUŽI </span> BUTTERFLY MASAŽER?</h2>
        <div class="text">
            <p>Većina ljudi provodi dosta vremena sedeći i uglavnom se pojavljuje bol u ramenima i vratu,
                a posle se proširuje i na druge delove tela. Ukoliko se upražnjava masaža barem 10 minuta dnevno, do
                navedenih posledica neće doći, a ukoliko su posledice ipak prisutne redovnim korišćenjem ovog masažera one će nestati.
                Butterfly masažer može da se primenjuje na sve delove tela, i izuzetno je efikasan.
                Pored efikasnosti, veoma je praktičan jer se može koristiti svuda i u svakom trenutku. </p>
        </div>
        <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Želim da poručim</a>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title"><b>PREDNOSTI </b> JASTUKA ZA MASAŽU</h2>
        <ul class="benef1">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s3_img1.jpg" alt="">
                <span>4 ugrađena masažna valjka</span>
                <p>Pruža akupresuru i improvizuje pokrete profesionalnog terapeuta, povećava elastičnost mišićnih vlakana, ublažavajući bolove u zglobovima
                    i povećavajući tonus mišića.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s3_img2.jpg" alt="">
                <span>Jedinstven dizajn koji prati konture tela</span>
                <p>Masažer je dizajniran uzimajući u obzir anatomske karakteristike tela, što omogućava postizanje maksimalne efikasnosti masaže.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s3_img3.jpg" alt="">
                <span>Funkcija infracrvenog grejanja (opciono)</span>
                <p>Poboljšava cirkulaciju krvi, opušta telo i pozitivno utiče na psihičko zdravlje.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s3_img4.jpg" alt="">
                <span>Visokokvalitetni materijali</span>
                <p>Napravljen od modernih hipoalergenih materijala, prijatan na dodir i praktičan za čišćenje: navlaka se lako skida i
                    može se prati u mašinni za pranje veša.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s3_img5.jpg" alt="">
                <span>Pogodan za poneti sa sobom</span>
                <p>Masažer se može lako poneti na put. Zahvaljujući elastičnoj traci za pričvršćivanje na sedište automobila i adapteru za punjenje,
                    može se koristiti direktno u automobilu.</p>
            </li>
        </ul>
        <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/product.jpg" alt="" class="prod">
        <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <h2 class="title">BRZO OPUŠTANJE I UBLAŽAVANJE BOLA <span>NA VRLO JEDNOSTAVAN NAČIN</span></h2>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s4_img1.jpg" alt="">
                <p>Povežite adapter na izvor napajanja.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s4_img2.jpg" alt="">
                <p>Uključite masažer. Uz pomoć jednog tastera podešavate sve funkcije.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/s4_img3.jpg" alt="">
                <p>Izaberite željeni režim masaže, sa ili bez grejanja.</p>
            </li>
        </ul>
        <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><b>SPECIFIKACIJA</b> I OPREMA</h2>
        <p class="char_text">Dimenzije masažera su 31 x 10 x 18 cm, <br>težina 1.5 KG</p>
        <div class="char_block">
            <div class="char_img">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/product2.jpg" alt="">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>
            <ul class="char_li">
                <li>
                    <div class="number">1</div>
                    <span>Pametno dugme za prebacivanje režima masaže i uključivanje / isključivanje</span>
                </li>
                <li>
                    <div class="number">2</div>
                    <span>Zagrevanje do 40°C </span> Automatsko isključivanje nakon 15 min.
                </li>
                <li>
                    <div class="number">3</div>
                    <span>Navlaka koja se može skinuti i oprati</span>
                </li>
                <li>
                    <div class="number">4</div>
                    <span>Adapter <b>220V</b>, <br>dužina <b>1,2M</b></span>
                </li>
                <li>
                    <div class="number">5</div>
                    <span><b>12V</b> Adapter za automobil</span>
                </li>
            </ul>
        </div>
        <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Iskoristi ponudu</a>
    </div>
</section>
<section class="carousel_sect">
    <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/carousel.jpg" alt="" class="carousel" width="2448" height="383">
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><span>UTISCI KUPACA </span> BUTTERFLY MASAŽERA</h2>
        <p class="subtitle">Više od 4 hiljade ljudi je već naručilo naš masažer!</p>
        <div class="reviews">
            <div class="rev_item clearfix">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/rev1.jpg" alt="">
                <div class="text">
                    <span>Dobro ublažava umor u predelu leđa i prijatno greje</span>
                    <p>Odličan je za večernje ublažavanje umora posle radnog dana, posebno ako ste veoma umorni posle posla i nemate snage da idete negde na masažu.
                        Navlaka ima patent zatvarač koji omogućava nesmetano pranje nakon korišćenja kreme ili ulja za masiranje. Odlična stvar za sitan novac!</p>
                    <p class="name">Makso Đ.</p>
                </div>
            </div>
            <div class="rev_item clearfix">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/rev2.jpg" alt="">
                <div class="text">
                    <span>Ja sam oduševljen!</span>
                    <p>Jastuk je stigao brzom poštom baš onakav kakav je na sajtu. Sve radi kako je napisano, osećaj dok ga koristim je neverovatno dobar.
                        Ovo je možda najbolja investicija za moje opuštanje u ovoj godini. Sve preporuke za ovaj proizvod.</p>
                    <p class="name">Mirko M.</p>
                </div>
            </div>
            <div class="rev_item clearfix">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/rev3.jpg" alt="">
                <div class="text">
                    <span>Prenosiv - koristim ga gde god želim!</span>
                    <p>Nisam očekivao da je ovaj nasažer ovako dobar. Snaga mu je dovoljna, masira kao profesionalni maser. Nezamenljiva stvar posle radnog dana, ja se ne odvajam od njega.</p>
                    <p class="name">Saša Đ.</p>
                </div>
            </div>
            <div class="rev_item clearfix">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/rev4.jpg" alt="">
                <div class="text">
                    <span>Leđa i vrat me više ne bole!</span>
                    <p>Masaža je dovoljno jaka i prijatna. Dovoljno mi je 15 minuta pred spavanje i spavam kao beba jer zaboravim na sve svoje brige. Razumijem se u mnoge masažere i raznu tehniku,
                        ali ovaj je do sada najbolji.</p>
                    <p class="name">Ivan A.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sect7">
    <div class="wrapper">
        <h2 class="title"><b>KAKO PORUČITI</b> BUTTERFLY MASAŽER?</h2>
        <div class="howorder clearfix">
            <ul class="ship">
                <li>
                    <h3>Poručivanje</h3>
                    <p>Ostavite svoje podatke na našem sajtu.</p>
                    <a href="#order_form" onclick="document.location.hash='order_form';return false;" class="button-m">Poručite sada</a>
                </li>
                <li>
                    <h3>Dostava i plaćanje</h3>
                    <p>Porudžbinu šaljemo brzom poštom u roku od 1-2 radna.</p>
                </li>
                <li>
                    <h3>Garancija</h3>
                    <p>Pažljivo testiramo sve proizvode pre isporuke, tako da garantujemo 100% kvalitet proizvoda.</p>
                </li>
            </ul>
            <div class="howorder__pack">
                <p>Svi masažeri se pakuju u <br/>bezbedno pakovanje pre isporuke.</p>
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/product3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper">
        <h1 class="main_title"><span>BUTTERFLY MASAŽER</span> VRHUNSKA MASAŽA BILO GDE</h1>
        <div class="formbox">
            <div class="img">
                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/product4.png" alt="">
                <div class="sale">popust <span>40%</span></div>
                <h4>Super akcija!</h4>
                <div class="price">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }} </span><small>RSD </small></div>
                    <p>Cena sada:</p>
                    <div class="new"><span>{{ $prices[1]['amount'] }} </span><small>RSD </small></div>
                </div>
            </div>
            <div class="formblock" id="order_form">
                <h4>Forma za porudžbinu</h4>
                <p></p>
                <form class="main-order-form main_form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="text" name="name" placeholder="Ime i prezime" required="">
                    <input type="tel" name="phone" placeholder="Telefon" required="">
                    <input type="text" name="shipping_address" placeholder="Adresa" required="">
                    <input type="text" name="shipping_city" placeholder="Grad" required="">
                    <button class="button-m">ZAVRŠI PORUDŽBINU</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}purplerelaxFiles/leptirmasazer1/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>