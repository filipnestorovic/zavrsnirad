@include('lander.flexonik.components.head')
<style>
    @media (max-width:768px){
        .section-1{background:url({{ asset('/') }}naturapharmFiles/bodytrimmer/top_image_mb.jpg) top center/contain no-repeat}
    }
    @media (min-width:768px){
        .section-1{background:url({{ asset('/') }}naturapharmFiles/bodytrimmer/top_image.jpg) left 45% center/cover no-repeat}
    }
</style>
<div class="wrapper">
@include('components.display_errors')
<div class="promo">Specijalni popust od 40%! Zalihe su ograničene!</div>
<main>
    <section class="section-1">
        <div class="container">
            <div class="top_section ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/flexonik-black.png" alt="logo" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p class="headerText">
                                    TVOJA KUĆA JE <strong>TERETANA</strong>
                                </p>
                                <p class="headerText">
                                    TVOJE TELO JE <strong>MAŠINA</strong>
                                </p>
                                {{--<h1>TVOJA KUĆA JE <br>TERETANA<br><strong>TVOJE TELO JE </strong><br><strong> MAŠINA</strong></h1>--}}
                                <p><a href="{{$checkoutView}}" class="btn">PORUČI SVOJ BODY TRIMMER</a></p>
                                <ul>
                                    <li><strong>Garantujemo <br>vrhunski kvalitet</strong> Sve naše proizvode detaljno proveravamo i testiramo.</li>
                                    <li><strong>Brza i jednostavna <br>dostava</strong> Proizvod šaljemo brzom poštom u roku od 1-2 radna dana.</li>
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
                <p style="text-align: center;">“Više se ne vraćam u teretanu od kada sam probao Body Trimmer”</p>
                <p style="text-align: center;"><span style="color: #848484; font-size: 16px;">— Aleksandar J.</span></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-3">
        <div class="container">
            <div class="advantage-block ">
                <h2 class="w_main_title"><span class="text">PREDNOSTI BODY TRIMMERA<span class="sub_title"></span></span></h2>
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}flexonikFiles/shared_files/icon1.png" alt="icon1" class="img-view">
                            </div>
                            <h4 class="w_title">VEŽBAJ <br>BILO GDE</h4>
                            <div class="w_desc">
                                <p>Ovo je kompletna <br>prenosna teretana koja se <br>može postaviti u sekundi <br>i biti korišćena bilo gde</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}flexonikFiles/shared_files/icon2.png" alt="icon2" class="img-view">
                            </div>
                            <h4 class="w_title">OJAČAJ <br>BRŽE</h4>
                            <div class="w_desc">
                                <p>Body Trimmer <br>pruža mogućnost <br>vežbanja visokog kvaliteta <br>za maksimalnu efikasnost</p>
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
                                <p>Pruža optimalan otpor <br>čime vam pomaže da <br> unapredite i proširite <br>svoj trening</p>
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
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/trake2.png" alt="img02" class="img-view">
                            </div>
                            <div class="w_desc">
                                <h2 class="text">NEMA VIŠE ODLAZAKA U TERETANU</h2>
                                <p style="font-size: large;">BODY TRIMMER PRUŽA MOGUĆNOST ZA VIŠE OD 50 RAZLIČITIH VEŽBI I ZAMENJUJE 10 MAŠINA ZA VEŽBANJE</p>
                                <div class="thumb_mb"><img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/trake2_mb.png" alt="img_02_mb"></div>
                                <p style="text-transform: uppercase; font-size: large;">Ovaj proizvod se lako prenosi, tako da možete trenirati gde god i kad god poželite.</p>
                                <p><a href="{{$checkoutView}}" class="btn">PORUČI SVOJ BODY TRIMMER ODMAH</a></p>
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
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/trake3.png" alt="img03" class="img-view">
                            </div>
                            <div class="w_desc text" id="ulImg">
                                <h2></h2>
                                <div class="thumb_mb"><img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/trake3_mb.png" alt="img_03_mb"></div>
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
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <div class="w_desc">
                                <h2 class="w_main_title"><span class="text">TRENUTNO NAJPRODAVANIJI PROIZVOD ZA TRENIRANJE U EVROPI</span></h2>
                            </div>
                        </div>
                        <div class="w_item item-2">
                            <div class="w_thumb">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}naturapharmFiles/bodytrimmer/package_image_mobile.jpg">
                                    <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/package_image_desktop.jpg" alt="package_image_desktop" class="img-view">
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
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/customer_1.jpg" alt="customer1" class="img-view">
                            </div>
                            <div class="w_desc">
                                <h3>Konačno! Vežbanje koje nije bolno!</h3>
                                <p><span class="date-format1" style="color: #9b9b9b;">12.10.2020.</span></p>
                                <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_5blk.png" alt="stars5"></p>
                                <p>Trening sa Body Trimmerom je odličan i zglobovi mi više nisu kruti i ne bole me. Zapravo se osećam motivisano za vežbanje sada kada znam da se neću osećati kao da mi telo gori. Dobijate isti osećaj kao prilikom dizanja tegova, ali bez bolova. </p>
                            </div>
                        </div>
                        <div class="w_item">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/customer_2.jpg" alt="customer2" class="img-view">
                            </div>
                            <div class="w_desc">
                                <h3>Bolje je nego odlazak u teretanu</h3>
                                <p><span class="date-format1" style="color: #9b9b9b;">03.09.2020.</span></p>
                                <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_5blk.png" alt="stars5"></p>
                                <p>Živim u garsonjeri gde nema mesta čak ni za prostirku za vežbanje. Ovo je bilo savršeno rešenje! Radi isti posao kao nekoliko mašina za vežbanje, a ne zauzima nikakav prostor. Otkazao sam članstvo u teretani, tako da sada vežbam više a štedim dosta vremena i novca.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}naturapharmFiles/bodytrimmer/customer_3.jpg" alt="customer3" class="img-view">
                            </div>
                            <div class="w_desc">
                                <h3>Odličan trening za celo telo</h3>
                                <p><span class="date-format1" style="color: #9b9b9b;">14.03.2020.</span></p>
                                <p><img style="width: 102px;" src="{{ asset('/') }}flexonikFiles/shared_files/stars_4blk.png" alt="stars4"></p>
                                <p>Suludo je koliko različitih vežbi možete raditi sa ovim. Ozbiljno, samo pogledajte na internetu, ima ih na stotine! Posebno je dobro kada se fokusirate na ruke i ramena. Već sam primetio veliku razliku u mojoj fleksibilnosti. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-8">
        <div class="container">
            <div class="special_promo ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_desc">
                                <h2><span style="background-color: #ff9900;">SPECIJALNA </span><br><span style="background-color: #ff9900;">PONUDA</span></h2>
                                <h3>Naručite danas i <br>ostvarite 40% popusta</h3>
                                <p><strong>Ovaj popust važi još samo malo.</strong><br><strong>Količine su ograničene - poručite odmah!</strong></p>
                                <p><a href="{{$checkoutView}}" class="btn">Ostvarite 40% popusta</a></p>
                                <ul>
                                    <li><strong>Garantujemo vrhunski kvalitet<br></strong>Potpuni povraćaj novca za sve naše proizvode.</li>
                                    <li><strong>Povrat bez komplikacija<br></strong>Ukoliko niste potpuno zadovoljni, vratite proizvod u roku od 30 dana i dobićete novac nazad.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-10">
        <div class="container">
            @include('lander.shared_files.floating_bar')
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    {{--@include('components.company_footer')--}}
</main>
</div>
@include('components.pixel_footer')
</body>
</html>

