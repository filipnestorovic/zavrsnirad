<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=viewport content="width=480">
    {{--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700italic,700,400italic,600italic&amp;subset=latin,cyrillic' rel=stylesheet type='text/css'>--}}
    <link media=all href="{{ asset('/') }}dailysharkFiles/carfix/m/main.css" rel=stylesheet type="text/css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
</head>
<body>
@include('components.display_errors')
<div class=main-wrap>
    <div class="section block-1">
        <div class=cost>
            <span class=old-cost><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></span><br>
            <span class=new-cost><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
        </div>
        <div class=center><a href="#delivery" class=button-m></a></div>
    </div>
    <div class="section block-2">
        <h2>ŠTA JE CAR-FIX?<br><span>I ZAŠTO JE TOLIKO POPULARAN KOD VLASNIKA AUTOMOBILA?</span></h2>
        <div class=container>
            <p>U ponudi imamo zaista neverovatan alat za uklanjanje udubljenja na vašem automobilu, bez oštećenja laka.
                Ovaj alat i tehnologiju koriste profesionalci u autoservisima.</p>
            <p>Car-Fix štedi vaš novac bez skupih popravki u servisu. Jedinstveni i patentirani alat eliminiše udubljenje brzo i lako,
                bez oštećenja laka.</p>
            <div class=center>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/pic-2.jpg" alt="Car-Fix ">
            </div>
        </div>
    </div>
    <div class="section block-4">
        <h2>UPUTSTVO ZA UPOTREBU</h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-1.jpg" alt="Car-Fix ">
                Lepak se nanosi na posebnu usisnu čašu (potreban je pištolj za grejanje)
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-2.jpg" alt="Car-Fix ">
                Stavite vakuum sa lepkom u središte udubljenja i pričekajte 2-3 minute
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-3.jpg" alt="Car-Fix ">
                Namontirati ceo mehanizam i zatezati specijalni vijak dok udubljenje ne nestane
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/step-4.jpg" alt="Car-Fix ">
                Bez problema skinite vakuum i uklonite ostatke lepka. GOTOVO!
            </li>
        </ul>
        <div class=center><a href="#delivery" class=button-m></a></div>
    </div>
    <div class="section block-5">
        <h2>Komplet sadrži:</h2>
        <div class=container>
            <ul>
                <li><b>1</b> &mdash; Car Fix alatku</li>
                <li><b>2</b> &mdash; Specijalni lepak za topljenje</li>
                <li><b>3</b> &mdash; Pištolj za topljenje lepka</li>
                <li><b>4</b> &mdash; Usisne čaše različitih prečnika (3 kom)</li>
                <li><b>5</b> &mdash; Lopatica za uklanjanje lepka</li>
            </ul>
        </div>
    </div>
    <div class="section block-6">
        <h2>UTISCI KUPACA</h2>
        <div class=container>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-1.jpg" alt="Car-Fix ">
                <p><strong>Branko Tatomirović</strong><br>Ulazeći u garažu, udario sam zadnji branik i nisam znao kako da uklonim udubljenje, a komšija me je posavetovao da kupim Car-Fix.
                    Rezultat mi se jako svideo jer sam za male pare uspeo da ispeglam udubljenje. Odlična stvar za vlasnike automobila.</p>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-2.jpg" alt="Car-Fix ">
                <p><strong>Viktor Mitrović</strong><br>U principu vozim vrlo oprezno, ali u velikom gradu se svašta dogodi. Imao sam 2 udubljenja na limariji i kolega mi je predložio Car-Fix komplet za ispravljanje limarije.
                    Brzo, jednostavno i efikasno. Sve preporuke.</p>
            </div>
            <div class=rew-item>
                <img src="{{ asset('/') }}dailysharkFiles/carfix/m/rew-3.jpg" alt="Car-Fix ">
                <p><strong>Anđela Petrović</strong><br>Set je super i vrlo jednostavan za upotrebu. Car-Fix sam videla kod mog kolege i nakon nekoliko dana sam ga poručila.
                    Kada mi je prilično veliko udubljenje nestalo pred očima, shvatila sam da sam kupila pravu stvar. Udarila sam tatin automobil i ništa nije primetio. :)</p>
            </div>
        </div>
    </div>
    <div class="section block-7">
        <h2>Dostava i plaćanje</h2>
        <div class=container>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-1"></span>
                <p>Dostava brzom poštom u roku od 1-2 radna dana.</p>
            </div>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-2"></span>
                <p>Bez plaćanja unapred! Plaćanje se vrši po prijemu paketa.</p>
            </div>
            <div class=deliv-item>
                <span class="deliv-icon deliv-pic-3"></span>
                <p>Ukoliko vam se proizvod ne dopadne, vratićemo vam novac.</p>
            </div>
        </div>
    </div>
    <div class="section block-8">
        <div class=cost>
            <span class=old-cost><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b></span><br>
            <span class=new-cost><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b></span>
        </div>
        <div class=container-2>
            <div class=order>
                <p class=center>
                    <strong>Popunite formu</strong><br>
                    podacima za dostavu
                </p>
                <form id=delivery action="{{$orderRoute}}" method=post>
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                    <div><input type="tel" name="phone" class="only_number" placeholder="Telefon" required></div>
                    <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                    <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                    <div class=center><button class=button-m type=submit></button></div>
                </form>
                <span style="color: #fff; text-align: center;"></span>
            </div>
        </div>
    </div>
    {{--<div class="section footer">--}}
        {{--<div class=center>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<script src="{{ asset('/') }}dailysharkFiles/carfix/m/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
