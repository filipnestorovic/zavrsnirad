<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=viewport content="width=960">
    {{--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700italic,700,400italic,600italic&amp;subset=latin,cyrillic' rel=stylesheet type='text/css'>--}}
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/settings.css" rel=stylesheet type="text/css">
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/main.css" rel=stylesheet type="text/css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class=wrap>
        <div class="container clearfix">
            <div class=cost>
                <span class=old-cost><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></s></span><br>
                <span class=new-cost>&nbsp;&nbsp;&nbsp;<b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
            </div>
            <div class=sale>-40%</div>
        </div>
        <a class=button-a href="#order"></a>
    </div>
</div>
<div class="section block-2" id=ch1>
    <div class=wrap>
        <h2 class=line>ŠTA JE CAR-FIX</h2>
        <h3 style="text-align: center;">I ZAŠTO JE TOLIKO POPULARAN KOD VLASNIKA AUTOMOBILA?</h3>
        <div class="container clearfix">
            <p>U ponudi imamo zaista neverovatan alat za <b>uklanjanje udubljenja na vašem automobilu, bez oštećenja laka</b>.
                Ovaj alat i tehnologiju koriste profesionalci u autoservisima.</p>
            <p><b>Car-Fix štedi vaš novac</b> bez skupih popravki u servisu. Jedinstveni i patentirani alat eliminiše udubljenje brzo i lako,
                bez oštećenja.</p>
        </div>
    </div>
</div>
<div class="section bg-rep bl-photo">
    <div class=center><img src="{{ asset('/') }}dailysharkFiles/carfix/bg-3.jpg" alt=Car-Fix><br><br>
        <a class=button-a href="#order"></a>
    </div>
</div>
<div class="section block-3">
    <div class=wrap>
        <h2 class=line>UPUTSTVO ZA UPOTREBU</h2>
        <div class=container-1>
            <ul>
                <li><b>1</b> - Lepak se nanosi na posebnu usisnu čašu (potreban je pištolj za grejanje)</li>
                <li><b>2</b> - Stavite vakuum sa lepkom u središte udubljenja i pričekajte 2-3 minuta</li>
                <li><b>3</b> - Namontirati ceo mehanizam i zatezati specijalni vijak dok udubljenje ne nestane</li>
                <li><b>4</b> - Bez problema skinite vakuum i uklonite ostatke lepka. GOTOVO!</li>
                <li></li>
            </ul>
        </div>
        <div class=container-2>
            <h4>Komplet sadrži:</h4>
            <ul>
                <li><b>&#10003;</b> - Car Fix alatku</li>
                <li><b>&#10003;</b> - Specijalni lepak za topljenje</li>
                <li><b>&#10003;</b> - Pištolj za topljenje lepka</li>
                <li><b>&#10003;</b> - Usisne čaše različitih prečnika (3 kom)</li>
                <li><b>&#10003;</b> - Lopatica za uklanjanje lepka</li>
            </ul>
        </div>
    </div>
</div>
<div class="section block-6 bg-rep">
    <div class=wrap>
        <h2 class=line>UTISCI <span>KUPACA</span></h2>
        <div class="rew-cont clearfix">
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-1.png">
                <div>
                    <h4>Branko Tatomirović</h4>
                    "Ulazeći u garažu, udario sam zadnji branik i nisam znao kako da uklonim udubljenje, a komšija me je posavetovao da kupim Car-Fix.
                    Rezultat mi se jako svideo jer sam za male pare uspeo da ispeglam udubljenje. Odlična stvar za vlasnike automobila."
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-2.png">
                <div>
                    <h4>Viktor Mitrović</h4>
                    "U principu vozim vrlo oprezno, ali u velikom gradu se svašta dogodi. Imao sam 2 udubljenja na limariji i kolega mi je predložio Car-Fix komplet za ispravljanje limarije.
                    Brzo, jednostavno i efikasno. Sve preporuke."
                </div>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/rew-3.png">
                <div>
                    <h4>Anđela Petrović</h4>
                    "Set je super i vrlo jednostavan za upotrebu. Car-Fix sam videla kod mog kolege i nakon nekoliko dana sam ga poručila.
                    Kada mi je prilično veliko udubljenje nestalo pred očima, shvatila sam da sam kupila pravu stvar. Udarila sam tatin automobil i ništa nije primetio. :)"
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section block-7" id=ch3>
    <div class=wrap>
        <h2 class=line>Dostava <span>i plaćanje</span></h2>
        <ul class=clearfix>
            <li>
                <p>Dostava brzom poštom u roku od <b>1-2 radna dana</b>.</p>
            </li>
            <li>
                <p><b>Bez plaćanja unapred!</b> Plaćanje se vrši po prijemu paketa.</p>
            </li>
            <li>
                <p>Ukoliko vam se proizvod ne dopadne, <b>vratićemo vam novac</b>.</p>
            </li>
        </ul>
    </div>
</div>
<div id="#order" class=block-8>
    <div class=wrap>
        <h1>Car-Fix</h1>
        <h2>KOMPLET ZA ISPRAVLJANJE LIMARIJE NA VAŠEM AUTOMOBILU</h2>
    </div>
    <div class="wrap clearfix">
        <div class=left-cont>
            <div class=cost>
                <span class=old-cost><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></s></span><br>
                <span class=new-cost>&nbsp;&nbsp;&nbsp;<b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
            </div>
        </div>
        <div class=right-cont id=order>
            <p class=title>
                <strong>Popunite formu</strong><br>podacima za dostavu
            </p>
            <form action="{{$orderRoute}}" method=post>
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="tel" name="phone" class="only_number" placeholder="Telefon" required></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                <p class=limit></p>
                <div><button class=button-a type=submit></button></div>
            </form>
        </div>
    </div>
    <div class="footer center">
    </div>
</div>
<script src="{{ asset('/') }}dailysharkFiles/carfix/init.js+slick.min.js"></script>
@include('components.pixel_footer')
</body>
</html>
