<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/') }}dailysharkFiles/carluxe/favicon.ico" rel="icon" type="image/x-icon">
    <link href="{{ asset('/') }}dailysharkFiles/carluxe/settings.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}dailysharkFiles/carluxe/main.css" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class="wrap clearfix">
        <h1 class=z-title>CarLuxe Paint <span>REVOLUCIONARNO SREDSTVO<br/>ZA UKLANJANJE OGREBOTINA</span></h1>
        <div class=title><span>NE TROŠITE NOVAC NA PONOVNO FARBANJE!</span><br/>
            Sada i sami možete ukloniti ogrebotine sa limarije automobila za samo 5 sekundi.
        </div>
        <div class=container>
            <div class=sale>Popust<br/><b>{{ $discount != null ? (40+$discount)."%" : "40%" }}</b></div>
            <div class=cost>
                <span class=old-cost><s><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr> RSD</span></s></span>
                <br>
                <span class=new-cost><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr> RSD</span></span>
            </div>
            <div class="timer clearfix">
                <div class="countbox clearfix"></div>
                <a class=button-a href="#order"></a>
            </div>
        </div>
    </div>
</div>
<div class="section block-2" id=ch1>
    <div class=wrap>
        <h2 class=zag>ŠTA JE<br/><b>CarLuxe Paint?</b></h2>
        <div class=container>
            <p>CarLuxe Paint je novo univerzalno sredstvo za uklanjanje ogrebotina i manjih oštećenja automobila bilo koje boje.
                Aktivna formula CarLuxe Paint-a, koja sadrži milione mikročestica za poliranje, ravnomerno ispunjava oštećeno područje vašeg automobila
                i vraća fabrički izgled završnog sloja. CarLuxe Paint će vas ugodno iznenaditi jednostavnošću korišćenja i efikasnošću.</p>
        </div>
    </div>
</div>
<div class="section block-3"></div>
<div class="section block-4">
    <div class=wrap>
        <h2 class=zag>Šta kupci kažu o proizvodu<br/><b>CarLuxe Paint?</b></h2>
        <div class="rew-cont clearfix">
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carluxe/rew-1.jpg">
                <div>
                    <p>Mihajlo Jović</p>
                    Ulazeći u garažu, ogrebao sam zadnji branik i nisam znao kako da popravim ogrebotinu. Farbanje nije bilo opcija, pa sam video reklamu za CarLuxe Paint.
                    Rezultat mi se jako svideo nakon upotrebe. To je nezamenjiva stvar za svakog vlasnika automobila.
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carluxe/rew-2.jpg">
                <div>
                    <p>Viktor Pavlović</p>
                    U principu vozim vrlo oprezno, ali u velikom gradu se svašta dogodi. Neko mi je ogrebao auto na parkingu, a komšija mi je preporučio da preko interneta poručim CarLuxe Paint.
                    Jednostavan je za korišćenje, nije skup, a rešava problem. Sve preporuke za proizvod.
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carluxe/rew-3.jpg">
                <div>
                    <p>Jelena Sarić</p>
                    Često mi se dešava da ogrebem auto u gradu i sigurno je da neću farbati auto svaki put kada se to dogodi.
                    Pronašla sam CarLuxe Paint na internetu i prezadovoljna sam jer uspeva da pokrije i najsitnije ogrebotine.
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carluxe/rew-4.jpg">
                <div>
                    <p>Sladjan Rakić</p>
                    U nevremenu za vreme putovanja, moj automobil je dobio nekoliko ogrebotina koje osiguranje nije htelo da pokrije.
                    Prijatelji su mi savetovali CarLuxe Paint, odlučio sam da pokušam i poručio sam preko interneta.
                    Od tada ga uvek nosim u automobilu i mogu da preporučim svima isto!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section block-5">
    <div class=wrap>
        <h2>Kako da poručite</h2>
        <div class="container clearfix">
            <ul class=left>
                <li>Unesite svoje podatke<br/>u formi na dnu stranice</li>
                <li>U najkraćem roku ćemo<br/>potvrditi Vašu porudžbinu</li>
                <li>Šaljemo paket na<br/>navedenu adresu</li>
                <li>Plaćate kuriru<br/>prilikom preuzimanja paketa</li>
            </ul>
            <div class=right>
                <p>Proizvodi su 100% testirani pre slanja<br>Vratićemo vam novac ako nešto nije u redu<br>Pridržavamo se zakona o zaštiti potrošača</p>
            </div>
        </div>
    </div>
</div>
<div class="section block-1 end" id=order style="padding-top: 20px;">
    <div class="wrap clearfix">
        <h2 class=z-title style="font-size: 52px;">CarLuxe Paint <span>REVOLUCIONARNO SREDSTVO<br/>ZA UKLANJANJE OGREBOTINA</span></h2>
        <div class=container>
            <div class=sale>Popust<br/><b>{{ $discount != null ? (40+$discount)."%" : "40%" }}</b></div>
            <div class="timer clearfix">
                <div class="countbox clearfix"></div>
            </div>
            <div class=cost>
                <span class=old-cost><s><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr> RSD</span></s></span>
                <br>
                <span class=new-cost><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr> RSD</span></span>
            </div>
            <form action="{{$orderRoute}}" method=post>
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="text" name="phone" class="only_number" placeholder="Telefon" required></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                <div><button class=button-a></button>
                    <p class=imgAlert></p>
                </div>
            </form>
        </div>
    </div>
    <div class="footer center"></div>
</div>
@include('components.pixel_footer')
</body>
</html>