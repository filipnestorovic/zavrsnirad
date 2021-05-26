<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=UTF-8>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/retrovizor/ico3.png">
    <link rel=stylesheet href="{{ asset('/') }}dailysharkFiles/retrovizor/slick.css">
    <link rel=stylesheet href="{{ asset('/') }}dailysharkFiles/retrovizor/jquery.fancybox.css">
    <link rel=stylesheet href="{{ asset('/') }}dailysharkFiles/retrovizor/style.css">
    <style>@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:url({{ asset('/') }}fonts/roboto-medium.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:bold;src:url({{ asset('/') }}fonts/roboto-bold.woff) format('woff')} @font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url({{ asset('/') }}fonts/roboto-regular.woff) format('woff')} @font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:url({{ asset('/') }}fonts/roboto-light.woff) format('woff')} @font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:normal;src:url({{ asset('/') }}fonts/roboto-condensed.woff) format('woff')} @font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:bold;src:url({{ asset('/') }}fonts/roboto-condensedbold.woff) format('woff')} a,abbr,acronym,address,applet,b,big,blockquote,body,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,i,iframe,ins,kbd,label,legend,li,menu,object,ol,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,u,ul,var{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:0 0}img{vertical-align:top;margin:0;padding:0;border:0;outline:0;background:0 0}button,input,select,textarea{font-size:100%;margin:0;padding:0}body,div,form,h1,h2,img,li,p,span,ul{position:relative}body,html{width:100%;height:100%;line-height:1}menu,ol,ul{list-style:none}div{display:block}blockquote,q{quotes:none}:focus,input,textarea{outline:0}button::-moz-focus-inner{border:0}textarea{overflow:auto;resize:vertical}ins{display:inline-block;text-decoration:none}del{text-decoration:line-through}table{width:100%;border-collapse:collapse;border-spacing:0}abbr{cursor:help}a[href],button,input[type=button],input[type=checkbox],input[type=radio],input[type=reset],input[type=submit],label,select{cursor:pointer}a[disabled],button[disabled],input[disabled]{cursor:default}hr{background:0;border:0;height:0}h1,h2,h3,h4,h5,h6{font-weight:400}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;box-sizing:border-box}</style>
    <style>html{scroll-behavior:smooth}.screen{display:none;position:absolute;top:0;left:0;right:0;height:8153px;z-index:999;background:url({{asset('/')}}dailysharkFiles/retrovizor/maket.jpg) no-repeat center top;opacity:.8}.top_line .timework:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico1.png);position:absolute;left:-28px;top:0}.top_line .right_side span:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico2.png);position:absolute;left:-30px;top:0}header{height:550px;background:url({{asset('/')}}dailysharkFiles/retrovizor/header.jpg) no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-ms-background-size:cover;-o-background-size:cover;-icab-background-size:cover;background-size:cover}header .list li:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico3.png);position:absolute;left:-20px;top:0}.akcia_block:before{content:'';height:54px;position:absolute;right:100%;top:40px;width:2000px;background:url({{asset('/')}}dailysharkFiles/retrovizor/ptn.png)}.akcia_block:after{content:'';height:54px;position:absolute;left:100%;top:40px;width:2000px;background:url({{asset('/')}}dailysharkFiles/retrovizor/ptn.png)}.akcia_block .akcia_left .price:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico5.png);position:absolute;left:-40px;top:-2px}.otzivi .otzivi_carousel button.slick-prev{background:url({{asset('/')}}dailysharkFiles/retrovizor/prev.png)}.otzivi .otzivi_carousel button.slick-next{background:url({{asset('/')}}dailysharkFiles/retrovizor/next.png)}.map_block .map_text{width:920px;height:144px;background:url({{asset('/')}}dailysharkFiles/retrovizor/map.png) no-repeat center;position:absolute;left:0;right:0;top:0;margin:auto;text-align:center;color:#fff;text-transform:uppercase;line-height:36px;padding-top:18px}.footer .timework:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico1.png);position:absolute;left:-28px;top:0}.footer .right_side span:before{content:url({{asset('/')}}dailysharkFiles/retrovizor/ico2.png);position:absolute;left:-30px;top:0}form input[type=text]{padding-left:10px!important;font-size:19px!important;height:50px!important}::placeholder{font-size:19px!important;line-height:25px!important}.errors{padding-top: 0px !important;}</style>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
<div class=screen></div>
<div class=wrapper>
    <section class="errors">
        @include('components.display_errors')
    </section>
    <div class=menu_wrap>
        <div class=menu>
            <div class=center>
                <nav>
                    <ul>
                        <li><a href="#id1">Karakteristike video retrovizora</a></li>
                        <li><a href="#id2">Recenzije</a></li>
                        <li><a href="#id4"> <label for="firstInput">Poruči odmah</label></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <header>
        <div class=center>
            <h2>Povećajte svoju bezbednost i snimajte sve ispred sebe</h2>
            <div class=title><span>VIŠENAMENSKI</span> <ins> VIDEO RETROVIZOR</ins></div>
            <h1>AUTO DVR OGLEDALO</h1>
            <ul class=list>
                <li>Kamera za snimanje puta</li>
                <li>Ekran monitora 4.3</li>
                <li>Funkcija protiv odsjaja</li>
                <li>Prednja širokougaona kamera</li>
                <li>Senzor udara (G-senzor)</li>

                <li>Detektor pokreta</li>
                <li>Full HD 1080P</li>
                <li>Slot za SD karticu do 32 Gb</li>
                <li>Mogućnost isključivanja monitora</li>
                <li>Montirajte za nekoliko sekundi</li>
            </ul>
        </div>
    </header>
    <div class=vtoroi>
        <div class=center>
            <div class=akcia_block>
                <img src="{{ asset('/') }}dailysharkFiles/retrovizor/ico4.png" class=akcia_title alt="">
                <h2><span>PORUČITE</span> VIDEO RETROVIZOR <span>PRE KRAJA DANA I OSTVARITE SPECIJALNI POPUST OD 40%</span> </h2>
                <div class=akcia_left>
                    <img src="{{ asset('/') }}dailysharkFiles/retrovizor/akcia.png" alt="">
                    <p>VIDEO RETROVIZOR</p>
                    <div class=price><span><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></span><ins><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b></ins></div>
                </div>
                <div class=akcia_right>
                    <div class=form>
                        <div class=form_title>Unesite podatke za dostavu:</div>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=element><input type=text name=name placeholder="Ime i prezime" required></div>
                            <div class=element><input type=text name=phone placeholder="Broj telefona" required></div>
                            <div class=element><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                            <div class=element><input type="text" name="shipping_city" placeholder="Grad" required></div>
                            <div class=element><input type=submit value="Poruči odmah"></div>
                        </form>
                        <span style="color: red;">* Uz retrovizor ne dolazi memorijska kartica</span>
                    </div>
                </div>
            </div>
            <ul class="icons justi">
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico6.png" ></div>
                    <p>Brza isporuka</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico7.png" ></div>
                    <p>Plaćanje pouzećem</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico8.png" ></div>
                    <p>Garancija na proizvod</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico9.png" ></div>
                    <p>Svi proizvodi su <br>sertifikovani</p>
                </li>
            </ul>
        </div>
    </div>
    <div class=osobenosti>
        <div id=id1 style="top:-80px;"></div>
        <div class=center>
            <h2>PREDNOSTI VIDEO RETROVIZORA</h2>
            <ul>
                <li>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img1.jpg" >
                    <div class=oso_text>
                        <h3>Video snimač u ogledalu</h3>
                        <p>Glavna prednost CAR DVR RETROVIZORA kao video rekordera je visokokvalitetna prednja kamera koja snima u Full HD formatu u rezoluciji 1920 * 1080,
                            i uglom gledanja od 140°. Korišćena je visokokvalitetna tehnologija koja sliku čini svetlom i jasnom.</p>
                    </div>
                </li>
                <li>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img2.jpg" >
                    <div class=oso_text>
                        <h3>Senzor pokreta</h3>
                        <p>Automatsko snimanje uz konstantno napajanje baterije.
                            Registruje kretanje i konstatno ga snima. Ukoliko se kretanje ne odvija, snimanje se ne vrši.
                            Možete da pregledate šta se dešavalo oko automobila dok je bio parkiran.</p>
                    </div>
                </li>
                <li>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img3.jpg" >
                    <div class=oso_text>
                        <h3>Automatska kontrola osvetljenosti ekrana + funkcija protiv odsjaja</h3>
                        <p>Automatska korekcija svetline (razlikuje se u zavisnosti od osvetljenja i doba dana, pružajući slici visok kvalitet i jasnoću)</p>
                    </div>
                </li>
                <li>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img5.jpg" >
                    <div class=oso_text>
                        <h3>Jednostavno pričvršćivanje i povezivanje</h3>
                        <p>Snimač se lako montira i nevidljiv je. Nema potrebe za stalnim uklanjanjem i skrivanjem uređaja.</p>
                    </div>
                </li>
                <li>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img6.jpg" >
                    <div class=oso_text>
                        <h3>Full HD 1080P</h3>
                        <p>Koristi se Full HD inovativna tehnologija snimanja video zapisa (poboljšana jasnoća slike).</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class=how style="background-color: lightgrey;">
        <div style="top:-80px;"></div>
        <div class=center>
            <div class=how_left>
                <h3><b>KAKO RADIMO</b></h3>
                <p><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico12.png" >1. Unesite svoje podatke</p>
                <p><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico13.png" >2. Potvrdićemo vašu porudžbinu u najkraćem roku</p>
                <p><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico14.png" >3. Poslačemo proizvod na vašu adresu</p>
                <p><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico15.png" >4. Pošiljku plaćate po pouzeću</p>
            </div>
            <div class=how_right>
                <div class=form>
                    <form action="{{$orderRoute}}" method=post>
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class=element><input type=text name=name placeholder="Ime i prezime" required></div>
                        <div class=element><input type=text name=phone placeholder="Broj telefona" required></div>
                        <div class=element><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                        <div class=element><input type="text" name="shipping_city" placeholder="Grad" required></div>
                        <div class=element><input type=submit value="Poruči odmah"></div>
                    </form>
                    <span style="color: red;">* Uz retrovizor ne dolazi memorijska kartica</span>
                </div>
            </div>
        </div>
    </div>
    <div class=otzivi>
        <div id=id2 style="top:-80px;"></div>
        <div class=center>
            <h2>RECENZIJE KUPACA</h2>
            <div class=otzivi_carousel>
                <div>
                    <div class=o_imgs>
                        <img class=otziv_photo alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o1.jpg" >
                        <img class=otziv_tovar alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o11.jpg" >
                        <p>Konstantin</p>
                        <p><span>Novi Sad</span></p>
                    </div>
                    <div class=o_text>
                        <p>Video retrovizor je nešto najbolje što sam do sada online poručio.
                            Neko mi je stalno podizao brisače ispred zgrade, čak su ih jednom i polomili.
                            Problemi su trajali mesecima, a onda sam kupio ovaj uređaj koji je mnogo pomogao.
                            Snimio sam komšiju koji mi je pravio štetu na automobilu, porazgovarao sam sa njim i upozorio ga da ću ga prijaviti.
                            Od tada se situacije nisu ponavljale.
                            Dobro je što snima samo kada se dešava neki pokret ispred automobila, tako da uštedi mnogo memorije i baterije.</p>
                    </div>
                </div>
                <div>
                    <div class=o_imgs>
                        <img class=otziv_photo alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o2.jpg" >
                        <img class=otziv_tovar alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o11.jpg" >
                        <p>Dejan</p>
                        <p><span>Beograd</span></p>
                    </div>
                    <div class=o_text>
                        <p>Radim kao taksista, stalno sam na putu i par puta mi se dogodila saobraćajna nezgoda.
                            U divljem saobraćaju kakav je u Beogradu, nekada je teško utvrditi ko je krivac nezgode.
                            Sestra mi je preporučila CAR DVR RETROVIZOR, i poručio sam ga. Da budem iskren bio sam skeptičan
                            po pitanju tog proizvoda jer je imao nisku cenu, ali na moje oduševljenje proizvod je odličan.
                            Kupio sam ga i supruzi, prilično je zadovoljna, a deca posle vole da se zanimaju gledajući snimke vožnje.
                            Sve u svemu, toplo preporučujem ovaj proizvod!</p>
                    </div>
                </div>
                <div>
                    <div class=o_imgs>
                        <img class=otziv_photo alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o3.jpg" >
                        <img class=otziv_tovar alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/o11.jpg" >
                        <p>Ranko</p>
                        <p><span>Požarevac</span></p>
                    </div>
                    <div class=o_text>
                        <p>Kao skeptik, dugo razmišljam pre nego što kupim bilo koji uređaj i mnogo proveravam korisnost i funkcionalnost.
                            U ovom slučaju nisam ni razmišljao o tome, već sam ga odmah kupio.
                            Prvo, nisam dugo čekao da mi stigne, a drugo, želeo sam manji model kako vetrobransko staklo ne bi bilo pretrpano. Zadovoljan sam svime, hvala.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=econom>
        <div class=center>
            <h2><span>Uštedite <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr> RSD</span></span> kupovinom video retrovizora danas</h2>
            <div class=economs_blocks>
                <div class=block_econom>
                    <h3>OBIČNI SNIMAČI VOŽNJE</h3>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img7.jpg" >
                    <ul>
                        <li><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico10.png" >Standardni snimač može delimično blokirati vozačev pogled</li>
                        <li><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico10.png" >U parkiranom automobilu se vide uređaji koji mogu privući lopove</li>
                    </ul>
                </div>
                <div class="block_econom good">
                    <h3>AUTO DVR RETROVIZOR</h3>
                    <img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/img8.jpg" >
                    <ul>
                        <li><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico11.png" >Ne zauzima prostor, neprimetanan je i praktičan. Ovaj uređaj snima Full HD video, i snimak je veoma čist.</li>
                    </ul>
                </div>
            </div>
            <div class=akcia_block>
                <div id=id4 style="top:-80px;"></div>
                <img src="{{ asset('/') }}dailysharkFiles/retrovizor/ico4.png" class=akcia_title alt="">
                <h2><span>PORUČITE</span> VIDEO RETROVIZOR <span>PRE KRAJA DANA I OSTVARITE SPECIJALNI POPUST OD 40%</span> </h2>
                <div class=akcia_left>
                    <img src="{{ asset('/') }}dailysharkFiles/retrovizor/akcia.png" alt="">
                    <p>VIDEO RETROVIZOR</p>
                    <div class=price><span><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr> RSD</span></span><ins><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class="price_land_curr">RSD</b></ins></div>
                </div>
                <div class=akcia_right>
                    <div class=form>
                        <div class=form_title>Unesite podatke za dostavu:</div>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=element><input id="firstInput" type=text name=name placeholder="Ime i prezime" required></div>
                            <div class=element><input type=text name=phone placeholder="Broj telefona" required></div>
                            <div class=element><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                            <div class=element><input type="text" name="shipping_city" placeholder="Grad" required></div>
                            <div class=element><input type=submit value="Poruči odmah"></div>
                        </form>
                        <span style="color: red;">* Uz retrovizor ne dolazi memorijska kartica</span>
                    </div>
                </div>
            </div>
            <ul class="icons justi">
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico6.png" ></div>
                    <p>Brza isporuka</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico7.png" ></div>
                    <p>Plaćanje pouzećem</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico8.png" ></div>
                    <p>Garancija na proizvod</p>
                </li>
                <li>
                    <div class=ico><img alt="" src="{{ asset('/') }}dailysharkFiles/retrovizor/ico9.png" ></div>
                    <p>Sve proizvodi su<br>sertifikovani</p>
                </li>
            </ul>
        </div>
    </div>
    <div class=footer>
        <div class=center>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
