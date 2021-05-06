@include('lander.flexonik.components.head')
<style>
    @media (max-width:768px){
        .section-1{background:url({{ asset('/') }}flexonikFiles/5u1trake/trakeCoverMob.png) top center/contain no-repeat}
    }
    @media (min-width:768px){
        .section-1{background:url({{ asset('/') }}flexonikFiles/5u1trake/trakeCover.png) left 45% center/cover no-repeat}
    }
    .levels ul li:nth-child(1) {
        background-color: #2CB1A8;
        border-bottom-left-radius: 33px
    }
    .levels ul li:nth-child(2) {
        background-color: #D9B72B;
    }
    .levels ul li:nth-child(3) {
        background-color: #C63938;
    }
    .levels ul li:nth-child(4) {
        background-color: #2972BE;
    }
    .levels ul li:nth-child(5) {
        border-top-right-radius: 33px;
        background-color: #1E2020;
    }
    @media (max-width:767px) {
        .levels ul li:nth-child(1) {
            border-bottom-left-radius: 0
        }
        .levels ul li:nth-child(5) {
            border-top-right-radius: 0
        }
    }
</style>
<div class="wrapper">
    <div class="promo">Specijalni popust od 40%! Zalihe su ograničene!</div>
    <main>
        <section class="section-1">
            <div class="container">
                <div class="top_section ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/shared_files/flexonik-black.png" alt="logo" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p class="headerText">
                                        TRENIRAJ U <strong>SVOM DOMU</strong>
                                    </p>
                                    <p class="headerText">
                                        I OBLIKUJ <strong>SAVRŠENO TELO</strong>
                                    </p>
                                    {{--<h1>TVOJA KUĆA JE <br>TERETANA<br><strong>TVOJE TELO JE </strong><br><strong> MAŠINA</strong></h1>--}}
                                    <p><a href="{{$checkoutView}}" class="btn">PORUČI SVOJE TRAKE</a></p>
                                    <ul>
                                        <li><strong>Garantujemo <br>vrhunski kvalitet</strong> Potpuni povraćaj novca za sve naše proizvode.</li>
                                        <li><strong>Povrat <br>bez komplikacija</strong> Ukoliko niste potpuno zadovoljni, vratite proizvod u roku od 30 dana i dobićete novac nazad.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-2">
            <div class="container">
                <div class="wysiwyg-content block-1 ">
                    <h5><img src="{{ asset('/') }}flexonikFiles/shared_files/stars_transparent.png" alt="stars" width="142" height="24" style="display: block; margin-left: auto; margin-right: auto;"></h5>
                    <p style="text-align: center;">“Sve vežbe koje radim u teretani imam u ovim trakama. Sve preporuke!”</p>
                    <p style="text-align: center;"><span style="color: #848484; font-size: 16px;">— Jovan S.</span></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-3">
            <div class="container">
                <div class="advantage-block ">
                    <h2 class="w_main_title"><span class="text">PREDNOSTI 5 U 1 TRAKA<span class="sub_title"></span></span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/shared_files/icon1.png" alt="icon1" class="img-view">
                                </div>
                                <h4 class="w_title">VEŽBAJ <br>BILO GDE</h4>
                                <div class="w_desc">
                                    <p>5 u 1 trake su <br>osmišljene i dizajnirane <br>tako da ih možete <br> koristiti bilo gde</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/shared_files/icon2.png" alt="icon2" class="img-view">
                                </div>
                                <h4 class="w_title">OJAČAJ <br>BRŽE</h4>
                                <div class="w_desc">
                                    <p>Trake za vežbanje <br>pružaju mogućnost <br>vežbanja visokog kvaliteta <br>za maksimalnu efikasnost</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/shared_files/icon3.png" alt="icon3" class="img-view">
                                </div>
                                <h4 class="w_title">OBUHVATI SVE <br> GRUPE MIŠIĆA</h4>
                                <div class="w_desc">
                                    <p>Može se koristiti <br>za 50+ različitih vežbi <br>za oblikovanje celog tela <br></p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/shared_files/icon4.png" alt="icon4" class="img-view">
                                </div>
                                <h4 class="w_title">UNAPREDI SVOJE <br>VEŽBANJE</h4>
                                <div class="w_desc">
                                    <p>Uključuje 5 nivoa otpora <br>čime vam pomaže da <br> unapredite i proširite <br>svoj trening</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-4">
            <div class="container">
                <div class="feature-block exercise ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/5u1trake/trake1.png" alt="img02" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <h2 class="text">NEMA VIŠE ODLAZAKA U TERETANU</h2>
                                    <p style="font-size: large;">FLEXONIK 5 u 1 TRAKE PRUŽAJU MOGUĆNOST ZA VIŠE OD 50 RAZLIČITIH VEŽBI I ZAMENJUJU 10 MAŠINA ZA VEŽBANJE</p>
                                    <div class="thumb_mb"><img src="{{ asset('/') }}flexonikFiles/5u1trake/trake1.png" alt="img_02_mb"></div>
                                    <p style="text-transform: uppercase; font-size: large;"></p>
                                    {{--<h4><strong>Ovaj dizajn pruža mogućnost <br>za više od 50 različitih vežbi <br>i zamenjuje 10 mašina za vežbanje!</strong></h4>--}}
                                    {{--<p>Priložene trake za ručni i skočni zglob <br>olakšavaju vežbanje svih delova tela</p>--}}
                                    <p><a href="{{$checkoutView}}" class="btn">PORUČI SVOJE TRAKE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-5">
            <div class="container">
                <div class="feature-block strength ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/5u1trake/trake2.png" alt="img03" class="img-view">
                                </div>
                                <div class="w_desc text" id="ulImg">
                                    <h2></h2>
                                    <div class="thumb_mb"><img src="{{ asset('/') }}flexonikFiles/5u1trake/trake2.png" alt="img_03_mb"></div>
                                    <ul style="display:block !important; margin-top: 30px;">
                                        <li><h3><b>OJAČAJ</b></h3></li>
                                        <li><h3><b>OBLIKUJ I POVEĆAJ MIŠIĆE</b></h3></li>
                                        <li><h3><b>SMANJI TELESNE MASTI</b></h3></li>
                                        <li><h3><b>POBOLJŠAJ FLEKSIBILNOST I RAVNOTEŽU</b></h3></li>
                                        <li><h3><b>SVE TO BEZ VELIKOG NAPREZANJA TELA</b></h3></li>
                                    </ul>
                                </div>
                                <style>
                                    @media only screen and (min-width: 600px) {
                                        #ulImg {
                                            margin-top:70px !important;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-6">
            <div class="container">
                <div class="levels ">
                    <h2 class="w_main_title"><span class="text">UKUPNO 36KG TEŽINE</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item item-1">
                                <div class="w_desc">
                                    <ul>
                                        <li><strong>Zelena traka</strong> 2 kg</li>
                                        <li><strong>Žuta traka</strong> 4 kg</li>
                                        <li><strong>Crvena traka</strong> 6 kg</li>
                                        <li><strong>Plava traka</strong> 10 kg</li>
                                        <li><strong>Crna traka</strong> 14 kg</li>
                                    </ul>
                                    <p>Možete birati između 5 traka koje se mogu koristiti odvojeno ili zajedno da biste dobili otpor jednak težini od 36kg.
                                        <br>
                                        Kako vaša snaga i kondicija rastu, tako možete i povećavati težinu.
                                    </p>
                                    <h2 class="w_main_title"><span class="text">ŠTA DOBIJATE U PAKETU</span></h2>
                                </div>
                            </div>
                            <div class="w_item item-2">
                                <div class="w_thumb">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('/') }}flexonikFiles/5u1trake/trake3mob.png">
                                        <img src="{{ asset('/') }}flexonikFiles/5u1trake/trake3.png" alt="package_image_desktop" class="img-view">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-7">
            <div class="container">
                <div class="customers">
                    <h2 class="w_main_title"><span class="text">NAŠI KUPCI</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/5u1trake/trakeReview1.png" alt="customer1" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <h3>Bolje je nego odlazak u teretanu</h3>
                                    <p><span class="date-format1" style="color: #9b9b9b;">2.3.2020.</span></p>
                                    <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_5blk.png" alt="stars5"></p>
                                    <p>Nemam ni jednu teretanu u blizini, pa sam rešio da treniram kod kuće. Sprave su bile preskupe za moj budžet, a onda sam naišao na Flexonik sajt i kupio ove trake. Sada mogu da radim sve potrebne vežbe kod kuće. Osećam se odlično.</p>
                                </div>
                            </div>
                            <div class="w_item">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/5u1trake/trakeReview2.png" alt="customer2" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <h3>Odlične su, svuda ih nosim!</h3>
                                    <p><span class="date-format1" style="color: #9b9b9b;">13.11.2020.</span></p>
                                    <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_5blk.png" alt="stars5"></p>
                                    <p>Od kada koristim 5 u 1 trake, svoje telo sam dovela do savršenstva. Mogu da treniram više puta dnevno, i uvek ih nosim sa sobom. Dobar trening na svakom mestu, za sve grupe mišića. Sve preporuke!</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}flexonikFiles/5u1trake/trakeReview3.png" alt="customer3" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <h3>Odličan trening za celo telo</h3>
                                    <p><span class="date-format1" style="color: #9b9b9b;">24.06.2020.</span></p>
                                    <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_4blk.png" alt="stars4"></p>
                                    <p>Nešto najbolje za trening što sam ikada kupio. Trake su izdržljive, praktične, i stvaraju dovoljan otpor za vežbanje. Nisam verovao da imaju ovako dobar efekat i da mogu da radim toliki broj vežbi sa njima.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
@include('lander.flexonik.components.footer')