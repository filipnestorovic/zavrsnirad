<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name=viewport content="width=device-width">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/retrovizor/ico3.png">
    <link href="{{ asset('/') }}dailysharkFiles/retrovizor/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/retrovizor/style1.css" rel="stylesheet">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <style>html{scroll-behavior:smooth}.swiper-slide img{height:175px;width:220px}@font-face{font-family:"Open Sans";src:url({{asset('/')}}fonts/OpenSansd41d.eot) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans.woff) format("woff"),url({{asset('/')}}fonts/OpenSans.ttf) format("truetype"),url({{asset('/')}}fonts/OpenSans.svg#OpenSans) format("svg");font-weight:400;font-style:normal}@font-face{font-family:"Open Sans";src:url({{asset('/')}}fonts/OpenSans-Boldd41d.eot) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans-Bold.woff) format("woff"),url({{asset('/')}}fonts/OpenSans-Bold.ttf) format("truetype"),url({{asset('/')}}fonts/OpenSans-Bold.svg#OpenSans-Bold) format("svg");font-weight:700;font-style:normal}@font-face{font-family:"Open Sans";src:url({{asset('/')}}fonts/OpenSans-Italicd41d.eot) format("embedded-opentype"),url({{asset('/')}}fonts/OpenSans-Italic.woff) format("woff"),url({{asset('/')}}fonts/OpenSans-Italic.ttf) format("truetype"),url({{asset('/')}}fonts/OpenSans-Italic.svg#OpenSans-Italic) format("svg");font-weight:400;font-style:italic}@font-face{font-family:"__FontAwesome_5";src:url({{asset('/')}}fonts/fontawesome-webfont.eot);src:local("ÃÂ Ãâ€ Ãâ€™Ã‚ËœÃÂ¡Ã¢â‚¬Â"),url({{asset('/')}}fonts/fontawesome-webfont.woff) format("woff"),url({{asset('/')}}fonts/fontawesome-webfont.svg) format("svg");font-weight:400;font-style:normal}.header{background:#fff url({{asset('/')}}dailysharkFiles/retrovizor/header1.jpg) center top no-repeat}.header .box1{background:url({{asset('/')}}dailysharkFiles/retrovizor/backcam.png) 186px center no-repeat;margin:170px 0 10px;padding:24px 0;min-height:105px;font-weight:700}.header .action{width:100%;height:110px;float:left;background:url({{asset('/')}}dailysharkFiles/retrovizor/action.png) 0 0 no-repeat;position:relative;z-index:2;color:#fff;font-size:21px;margin-bottom:20px}.info .item1:before{width:105px;height:105px;position:absolute;background:url({{asset('/')}}dailysharkFiles/retrovizor/backcam.png) no-repeat;right:10px;top:-90px;content:""}.faq .xtitle{width:100%;float:left;background:url({{asset('/')}}dailysharkFiles/retrovizor/faq.png) 0 1px no-repeat;padding-left:50px;margin-bottom:15px;font-size:18px;font-weight:700;line-height:1.4;min-height:40px;display:flex;align-items:center}.errors{padding-top:0px!important}</style>
</head>
<body>
<section class="errors">
    @include('components.display_errors')
</section>
<div class="block header">
    <div class=width>
        <div class=title>VIŠENAMENSKI <br> AUTO DVR RETROVIZOR <br>SA KAMEROM</div>
        <div class=box1 style="background: none; text-align: center; font-size: 20px;">
            SAVRŠEN
            PREGLED VOŽNJE<br><br>
            <span style="color: #FFA500	;font-size: 26px; font-weight: bold;">HD SNIMAK!</span><br>
        </div>
        <div class=box2>
            <div class=action>
                <div class=atext style="line-height: 125px;">
                    <span><span style="font-size: 24px; line-height: 1.2;">40%</span> <br>popusta</span>
                </div>
                <div class=price>
                    <div class=oldprice>
                        <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                    <div class=newprice>
                        <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                </div>
            </div>
            <a href="#form" class=button>Poruči odmah</a>
        </div>
    </div>
</div>
<div class="block advantages">
    <div class=width>
        <div class=title>9 PREDNOSTI <br>RETROVIZORA SA KAMEROM</div>
        <div class=item>
            <span></span><p>Senzor pokreta</p>
        </div>
        <div class=item>
            <span><p class=i1>5</p><p class=i2>mpx</p></span><p>Kamera od 5 mpx</p>
        </div>
        <div class=item>
            <span></span><p>Zglob za pomeranje od 35 stepeni</p>
        </div>
        <div class=item>
            <span></span><p>Paralelno <br>snimanje</p>
        </div>
        <div class=item>
            <span></span><p>Snimanje <br>parkinga</p>
        </div>
        <div class=item>
            <span></span><p>Ugao snimanja <br>140 stepeni</p>
        </div>
        <div class=item>
            <span></span><p>G-senzor udara<br></p>
        </div>
        <div class=item>
            <span></span><p>Full HD snimanje <br>1920x1080p</p>
        </div>
        <div class=item>
            <span></span><p>Ekran od 4.3 inča</p>
        </div>
    </div>
</div>
<div class=block>
    <div class=width>
        <a href="#form" class=button>PORUČI ODMAH</a>
    </div>
</div>
<div class=block>
    <div class=width>
        <div class=subtitle>ZAŠTO JE <br>AUTO DVR RETROVIZOR <br> BOLJI OD DRUGIH?</div>
    </div>
</div>
<div class="block strength">
    <div class=width>
        <ul>
            <li>Dajemo garanciju od 2 godine na ovaj proizvod</li>
            <li>Oštar Full-HD snimak, brojevi registarskih oznaka se jasno vide</li>
            <li>Može da snima dok je auto parkiran</li>
            <li>Ugao snimanja je 140 stepeni</li>
            <li>Montira se za nekoliko sekundi</li>
            <li>Premaz protiv odsjaja</li>
            <li>Senzor pokreta</li>
            <li>Kamera - rotaciona</li>
            <li>Puni se na auto punjač koji se dobije uz retrovizor</li>
        </ul>
    </div>
</div>
<div class="block reviews">
    <div class=width>
        <div class=title>RECENZIJE KUPACA</div>
        <div class=swiper-container>
            <div class=swiper-wrapper>

                <div class=swiper-slide>
                    <img src="{{ asset('/') }}dailysharkFiles/retrovizor/review1.png" alt="">
                    <b>Konstantin, Novi Sad</b>
                    <span>Video retrovizor je nešto najbolje što sam do sada online poručio!</span>
                    <p>Neko mi je stalno podizao brisače ispred zgrade, čak su ih jednom i polomili.
                        Problemi su trajali mesecima, a onda sam kupio ovaj uređaj koji je mnogo pomogao.
                        Snimio sam komšiju koji mi je pravio štetu na automobilu, porazgovarao sam sa njim i upozorio ga da ću ga prijaviti.</p>
                    <p>Od tada se situacije nisu ponavljale.
                        Dobro je što snima samo kada se dešava neki pokret ispred automobila, tako da uštedi mnogo memorije i baterije.</p>
                </div>
                <div class=swiper-slide>
                    <img src="{{ asset('/') }}dailysharkFiles/retrovizor/review2.jpg" alt="">
                    <b>Dejan, Beograd</b>
                    <span>Radim kao taksista, stalno sam na putu i par puta mi se dogodila saobraćajna nezgoda.</span>
                    <p>U divljem saobraćaju kakav je u Beogradu, nekada je teško utvrditi ko je krivac nezgode.
                        Sestra mi je preporučila CAR DVR RETROVIZOR, i poručio sam ga. Da budem iskren bio sam skeptičan
                        po pitanju tog proizvoda jer je imao nisku cenu, ali na moje oduševljenje proizvod je odličan.</p>
                    <p>Kupio sam ga i supruzi, prilično je zadovoljna, a deca posle vole da se zanimaju gledajući snimke vožnje.
                        Sve u svemu, toplo preporučujem ovaj proizvod!</p>
                </div>
                <div class=swiper-slide>
                    <img src="{{ asset('/') }}dailysharkFiles/retrovizor/review3.jpg" alt="">
                    <b>Ranko, Požarevac</b>
                    <span>Odličan proizvod, sve preporuke!</span>
                    <p>Kao skeptik, dugo razmišljam pre nego što kupim bilo koji uređaj i mnogo proveravam korisnost i funkcionalnost.
                        U ovom slučaju nisam ni razmišljao o tome, već sam ga odmah kupio.</p>
                    <p>Prvo, nisam dugo čekao da mi stigne, a drugo, želeo sam manji model kako vetrobransko staklo ne bi bilo pretrpano. Zadovoljan sam svime, hvala.</p>
                </div>
            </div>
            <div class=swiper-pagination></div>
            <div class=swiper-button-next></div>
            <div class=swiper-button-prev></div>
        </div>
        <a href="#form" class=button>Poruči odmah</a>
    </div>
</div>
<div class="block function">
    <div class=width>
        <div class=title>NAPRAVLJEN DA BUDE KORISTAN I PRAKTIČAN</div>
        <div class=item>
            <img src="{{ asset('/') }}dailysharkFiles/retrovizor/func1.png" alt="">
            <p>Profesionalna optika sa <br> antirefleksnim premazom<br> FULL HD 1920x1080</p>
        </div>
        <div class=item>
            <img src="{{ asset('/') }}dailysharkFiles/retrovizor/func2.png" alt="">
            <p>Svetli kvalitetni ekran od 4,3 inča <br>visoke rezolucije</p>
        </div>
        <div class=item>
            <img src="{{ asset('/') }}dailysharkFiles/retrovizor/func3.png" alt="">
            <p>Najveći ugao snimanja od svih <br>video retrovizora na tržištu</p>
        </div>
        <a href="#form" class=button>Poruči odmah</a>
    </div>
</div>
<div class="block rebblock">
    <div class=width>
        VIDEO OGLEDALO je u modernom svetu glavna stvar za svakog vozača.
        Na našim putevima postoje jako mnogo nesavesnih i bahatih vozača.
        Vrlo često ne možemo da dokažemo da nismo krivi u nekoj situaciji, i obično završimo na sudu.
        Sa ovom kamerom možete da snimate svoju vožnju i uvek ćete imati kristalno jasnu situaciju koju možete da dokažete.
        U Rusiji skoro svaki vozač koristi kameru za snimanje vožnje.
    </div>
</div>
<div class="block header">
    <div class=width>
        <div class=title>VIŠENAMENSKI <br> AUTO DVR RETROVIZOR <br>SA KAMEROM</div>
        <div class=box1 style="background: none; text-align: center; font-size: 20px;">
            SAVRŠEN
            PREGLED VOŽNJE<br><br>
            <span style="color: #FFA500	;font-size: 26px; font-weight: bold;">HD SNIMAK!</span><br>
        </div>
        <div class=box2>
            <div class=action>
                <div class=atext style="line-height: 125px;">
                    <span><span style="font-size: 24px; line-height: 1.2;">40%</span> <br>popusta</span>
                </div>
                <div class=price>
                    <div class=oldprice>
                        <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                    <div class=newprice>
                        <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block form" id=form>
    <div class=width>
        <div class=title>Unesite podatke za dostavu:</div>
        <form action="{{$orderRoute}}" method=post>
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type=text name=name placeholder="Ime i prezime" required>
            <input type=text name=phone placeholder="Telefon" required>
            <input type="text" name="shipping_address" placeholder="Adresa" required>
            <input type="text" name="shipping_city" placeholder="Grad" required>
            <button type=submit>Poruči odmah</button>
        </form>
        <div class=copyright>
            <span style="color: white;">* Uz retrovizor ne dolazi memorijska kartica</span>
        </div>
    </div>
</div>
<div class="block faq">
    <div class=width>
        <div class=title>KAKO RADIMO</div>
        <div class=item>
            <div class=xtitle>Unesite svoje podatke</div>
        </div>
        <div class=item>
            <div class=xtitle>Potvrdićemo vašu porudžbinu u najkraćem roku</div>
        </div>
        <div class=item>
            <div class=xtitle>Poslačemo proizvod na vašu adresu</div>
        </div>
        <div class=item>
            <div class=xtitle>Pošiljku plaćate po pouzeću</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}dailysharkFiles/retrovizor/script.js+swiper.min.js"></script>
@include('components.pixel_footer')
</body>
</html>
