<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/cactus/step1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/cactus/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
@include('components.display_errors')
<!-- michael-k90 -->
<section class="block2">
    <div class="wrap">
        <div class="title-block clearfix">
            <h1>PLESNI KAKTUS</h1>
            <h2>MUZIČKA PLIŠANA IGRAČKA ZA RAZGOVOR</h2>
        </div>
        <!--  <div class="sale">скидка <p>-50%</p></div>-->
        <ul class="plus">
            <li>
                <p>ZAPAMTI I PONAVLJA REČI</p>
            </li>
            <li>
                <p>PLEŠE I PEVA</p>
            </li>
            <li>
                <p>SVIRA MELODIJE</p>
            </li>
            <li>
                <p>RADI NA BATERIJE</p>
            </li>
            <li>
                <p>NAPRAVLJEN OD MEKOG PLIŠA</p>
            </li>
        </ul>
        <!-- <div class="gift">
           Тюбик с гелем для отбеливания <p>в подарок!</p>
           </div> -->
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        {{ $prices[1]['originalPrice'] }} RSD
                    </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena: </span>
                    <p>
                        {{ $prices[1]['amount'] }} RSD
                    </p>
                </div>
            </div>
            <br>
            <a href="#buy" class="button-m-1" style="width: 280px;">Poručite sada</a>
        </div>
    </div>
</section>
<section class="block3" id="block3">
    <div class="wrap">
        <h2 class="title">SMEŠNA I MEGA POPULARNA IGRAČKA</h2>
        <p>Kaktus koji pleše je nova muzička igračka za vaše dete. Igračka je pokretna lutka kaktusa u saksiji sa velikim očima i nasmejanim licem koji peva i priča.
            U stanju je da zapamti vaše reči i ponovi ih dok pleše na zabavan način.
            Plišani plesni kaktus je najbolji poklon koji će dugo zabavljati decu i odrasle i dati mnogo radosnih emocija.</p>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block4" id="block4">
    <div class="wrap">
        <h2 class="title">PREDNOSTI PLESNOG KAKTURA</h2>
        <ul class="preim">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/pr1.jpg" alt="">
                <p>Ples uz muziku</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/pr2.jpg" alt="">
                <p>Ponavlja zvukove</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/pr3.jpg" alt="">
                <p>Pušta preko 30 numera</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/pr4.jpg" alt="">
                <p>Stvara prijatnu i zabavnu atmosferu</p>
            </li>
        </ul>
        <div class="gallery">
            <div>
                <div class="gal"><img src="{{ asset('/') }}dailysharkFiles/cactus/g1.jpg" alt=""></div>
            </div>
            <div>
                <div class="gal"><img src="{{ asset('/') }}dailysharkFiles/cactus/g2.jpg" alt=""></div>
            </div>
            <div>
                <div class="gal"><img src="{{ asset('/') }}dailysharkFiles/cactus/g3.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section  class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}dailysharkFiles/cactus/gallery.jpg" alt="" class="panorama" height="323" width="1968">
</section>
<section class="block5"  style="padding: 40px 0 30px;" id="bl6">
    <div class="wrap">
        <h2 class="title">OSOBINE KAKTUSA</h2>
        <ul class="use">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/step1.png" alt="">
                <h3>DIKTAFON U MUZIČKOM KAKTUSU SNIMIĆE SVAKU REČENICU KOJU IZGOVORITE PORED KAKTUSA!</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/step2.png" alt="">
                <h3>VESELA MUZIKA I PLES SU POGODNI ZA STVARANJE LUDE ZABAVE I POGODNI SU ZA ŽURKE!</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/step3.png" alt="">
                <h3>RADI NA BATERIJE: POTREBNE SU 3 AA BATERIJE</h3>
            </li>
        </ul>
        <div class="use-details">
            <p><b>Plišani kaktus biće odlična zabava ne samo za decu, već i za odrasle!</b></p>
        </div>
    </div>
</section>
<section class="block7" id="block7">
    <div class="wrap">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews">
            <div>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/rev1.jpg" alt="">
                <h3>MIHAJLO, 34 GODINE</h3>
                <p>Kupio sam ga sinu na poklon i oduševljen je! Od svih rođendanskih poklona ovaj mu se najviše dopao.
                    Pleše, priča i peva. Klinac je presrećan i ludo se zabavlja, a i mi sa njim. Preporučujem svima!</p>
            </div>
            <div>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/rev2.jpg" alt="">
                <h3>CECA, 32 GODINE</h3>
                <p>Veoma sam zadovoljna igračkom. Igranje nije zanimljivo samo mojoj deci nego i meni i mom suprugu. Kaktus snima
                    glasove i ponavlja, peva i igra. Ima mnogo pesama i baš je zanimljiv. Generalno, savetujem svakome ko ima dete da ga poruči.</p>
            </div>
            <div>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/rev3.jpg" alt="">
                <h3>ROMEO, 29 GODINA</h3>
                <p>Vrlo kul kaktus. Kupio sam ga nećakinji za rođendan, ona se oduševila ali i mi odrasli sa njom. Vesela muzila i prijatna atmosfera. Preporučujem!</p>
            </div>
        </div>
    </div>
</section>
<section class="block9" id="block9">
    <div class="wrap">
        <h2 class="title">KAKO PORUČITI</h2>
        <ul class="ship">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/s1.png" alt="">
                <p>Ostavite podatke na našoj web stranici</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/s2.png" alt="">
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/s3.png" alt="">
                <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/cactus/s4.png" alt="">
                <p>Plaćate kuriru po preuzimanju pošiljke</p>
            </li>
        </ul>
    </div>
</section>
<!-- michael-k90 -->
<section class="block2 end" id="block10">
    <div class="wrap">
        <div class="title-block clearfix">
            <h1>PLESNI KAKTUS</h1>
            <h2>MUZIČKA PLIŠANA IGRAČKA ZA RAZGOVOR</h2>
        </div>
        <!-- <div class="sale">скидка <p>-50%</p></div>-->
        <ul class="plus">
            <li>
                <p>ZAPAMTI I PONAVLJA REČI</p>
            </li>
            <li>
                <p>PLEŠE I PEVA</p>
            </li>
            <li>
                <p>SVIRA MELODIJE</p>
            </li>
            <li>
                <p>RADI NA BATERIJE</p>
            </li>
            <li>
                <p>NAPRAVLJEN OD MEKOG PLIŠA</p>
            </li>
        </ul>
        <!-- <div class="gift">
           Тюбик с гелем для отбеливания <p>в подарок!</p>
           </div> -->
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        {{ $prices[1]['originalPrice'] }} RSD
                    </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena: </span>
                    <p>
                        {{ $prices[1]['amount'] }} RSD
                    </p>
                </div>
            </div>
            <br>
            <form id="buy" class="m1-form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <button class="button-m" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/cactus/jquery.panorama.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('img.panorama').panorama();
    });
</script>
@include('components.pixel_footer')
</body>
</html>
