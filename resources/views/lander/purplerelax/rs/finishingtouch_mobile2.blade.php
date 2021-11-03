<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link media="all" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
    <style>
        @font-face {
            font-family: 'Roundmed';
            src: url('{{ asset('/') }}fonts/din_round_pro_medium.eot');
            src: url('{{ asset('/') }}fonts/din_round_pro_medium.eot-#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/din_round_pro_medium.svg#Roundmed') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Roundbold';
            src: url('{{ asset('/') }}fonts/din_round_pro_bold.eot');
            src: url('{{ asset('/') }}fonts/din_round_pro_bold.eot-#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/din_round_pro_bold.svg#Roundbold') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')
    <div class="section block-1">
        <span class="sale col-3">-40%</span>
        <div class="cost clearfix">
               <span class="old-cost">
                  <span style="font-size: 14px;">stara cena<br></span>
                  <del>
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </del>
               </span>
            <span class="new-cost">
                  <span  style="font-size: 14px;">nova cena<br></span>
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </div>
    </div>
    <div class="section block-2 green-bg">
        <h2 class="col-3">
            Iskoristite ovu neverovatnu akciju i poručite odmah <br> AKCIJA SAMO DANAS!
        </h2>
        <div class="timer">
            <p style="text-align: center;width: 100%;line-height: 1.3;"></p>
        </div>
        <form  class="form">
            <div class="center"><a href="#delivery" style="text-decoration: none;"><button class="button-form"></button></a></div>
        </form>
    </div>
    <div class="section block-3 blue-bg">
        <h2 class="col-3 wave-1">
            EFIKASNO
            <br/>
            <small class="col-1">UKLANJANJE DLAČICA</small>
        </h2>
        <ul class="col-3">
            <li>Može se koristiti apsolutno svuda</li>
            <li>Efikasno smanjuje brzinu rasta dlačica</li>
            <li>Pogodno za bikini zonu, pazuhe, noge, ruke i druga područja</li>
            <li>Deluje pri jednom dodiru</li>
            <li>Deluje na dlačicama bilo koje tvrdoće i strukture</li>
        </ul>
    </div>
    <div class="section block-4">
        <div class="title">
            <span class="col-2">Finishing Touch</span><br/>- uklanja dlačice gde god poželite!
        </div>
        <p>Finishing Touch uklanja dlake 82% efikasnije od ostalih proizvoda. Redovna upotreba depilatora pomaže da
            dlačice budu tanke i slabe, a njihov broj se postepeno smanjuje.Specijalne oštrice ne oštećuju kožu, tako
            da je proizvod pogodan za sve tipove kože i može se koristiti na bilo kom delu tela. Može se nositi najotkrivenija
            odeća bez straha od brzo rastućih dlačica, neprijatnih crvenih tačaka nakon brijanja ili iritirane kože od vrućeg voska.</p>
        <h3 class="center"><span class="col-2">Finishing Touch</span> je pogodan za bio koji deo tela!</h3>
        <div class="center"><img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/bg-3.jpg" alt="Finishing Touch"></div>
    </div>
    <div class="section block-6 green-bg">
        <h2 class="col-1 wave-1">
            DOSTAVA I PLAĆANJE
        </h2>
        <ul class="col-3">
            <li>Dostava brzom poštom u roku od 1-2 radna dana.</li>
            <li>Nema plaćanja unapred. Plaća se kuriru po prijemu pošiljke.</li>
            <li>Ukoliko vam se proizvod ne dopadne vratićemo vam novac.</li>
        </ul>
    </div>
    <div class="section block-7 blue-bg">
        <h2 class="col-3 wave-2">
            Utisci naših zadovoljnih kupaca
        </h2>
        <div class="container-rew clearfix">
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-1.jpg" alt="Finishing Touch">
                <p>Nikada ne bih verovala da mi Finishing Touch može pomoći. Moja prijateljica koja je bila oduševljena njime ubedila me je da ga poručim.
                    Kada je kurir doneo porudžbinu, platio sam, raspakovala pošiljku i odmah sam se izdepilirala.
                    Nakon prve primene koža mi je bila mekana i razlika je bila vidljiva. Posle mesec dana moje lice se potpuno promenilo.</p>
                <span class="rew-name col-3">
                     <b class="col-1">Svetlana, Beograd</b><br/>
                  </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-2.jpg" alt="Finishing Touch">
                <p>Kupila sam prijateljici za poklon jer ona ima veoma osetljivu kožu, ali nisam mogla da odolimo da isprobam na sebi.
                    Bila sam oduševljena i morala sam da poručim i sebi. Dopada mi se činjenica da za njega nema nepristupačnih delova tela.
                    Takođe sam primetila da mi dlačice sporije rastu i da su manje guste.</p>
                <span class="rew-name col-3">
                  <b class="col-1">Marina, Valjevo</b><br/>
                  </span>
            </div>
            <div class="rew-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/rew-3.jpg" alt="Finishing Touch">
                <p>Koristim ga već drugi mesec i prilično sam zadovoljna. Koža je glatka, nema iritacija i dlaka vremenom postaje mekša.
                    Pre toga sam probala mnoga sredstva, ali ovo je najefikasnije i najnežnije. Preporučujem svima! Što se tiče odnosa kvaliteta i cene,
                    ovo je nešto najbolje što može biti!</p>
                <span class="rew-name col-3">
                  <b class="col-1">Julija, Smederevo</b><br/>
                  </span>
            </div>
        </div>
        <div class="center"><img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile2/wave-2.png" alt="Finishing Touch"></div>
    </div>
    <div class="section block-8" id="delivery">
        <span class="sale col-3">-50%</span>
        <div class="cost clearfix">
               <span class="old-cost">
                  <span style="font-size: 14px;">stara cena<br></span>
                  <del>
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </del>
               </span>
            <span class="new-cost">
                  <span  style="font-size: 14px;">nova cena<br></span>
                  {{ $prices[1]['amount'] }}
                  RSD
               </span>
        </div>
    </div>
    <div class="section block-2 green-bg">
        <h2 class="col-3">
            PORUČITE ODMAH SA 40% POPUSTA
        </h2>
        <div class="timer">
            <p style="text-align: center;width: 100%;line-height: 1.3;">Unesite podatke za dostavu</p>
        </div>
        <form action="{{$orderRoute}}" method="post" >
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div><br><input type="text" name="name" placeholder="Ime i prezime" ></div>
            <div><input type="text" name="phone" placeholder="Telefon" ></div>
            <div><input type="text" name="shipping_address" placeholder="Adresa" ></div>
            <div><input type="text" name="shipping_city" placeholder="Grad" ></div>
            <br>
            <div class="center"><button class="button-form"></button></div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('.container-rew').slick({
            infinite: true,
            autoplay: false,
            dots: false,
            arrows: true,
            fade: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
            nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>',
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>