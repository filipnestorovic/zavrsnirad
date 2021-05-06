@include('lander.purplerelax.components.head1')
<style>
    .section-2 {
        background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastukBaner_mb.jpg) top center/cover no-repeat;
        padding: 90% 0 100%
    }
    @media (min-width:768px) {
        .section-2 {
            padding: 30px 0;
            background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastukBaner_dt.jpg) top center/cover no-repeat
        }
    }
    .section-8 {
        padding: 15px 0;
        background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk3_mb.jpg) center center/cover no-repeat
    }
    @media (min-width:768px) {
        .section-8 {
            padding: 50px 0;
            background-image: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk3_dt.jpg);
            background-position-x: 35%
        }
    }
    .section-10 {
        padding: 30px 0;
        background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk4_mb.jpg) center center/cover no-repeat
    }
    @media (min-width:768px) {
        .section-10 {
            padding: 50px 0;
            background-image: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk4_dt.jpg);
            background-position-x: 35%
        }
    }
    .section-12 {
        background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk5_mb.jpg) center bottom/cover no-repeat;
        padding: 35px 0 170vw
    }
    @media (min-width:768px) {
        .section-12 {
            padding: 40px 0;
            background: url({{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk5_dt.jpg) right center/cover no-repeat;
            background-position-x: 47%
        }
    }
</style>
<main>
    <section class="section-1">
        <div class="container">
            <div class="editor top-header">
                <div class="grid-layout ">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/logo.png" alt="logo"></p>
                                <p>Jastuk koji neće dozvoliti da vas bilo šta deli!</p>
                            </div>
                        </div>
                        <div class="columns col-right">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

    <section class="section-2">
        <div class="container">
            <div class="wysiwyg-content product-banner top-banner ">
                <h2><span style="color: #015bd3;">NE PREKIDAJTE ZAGLJAJ NI KADA STE U SNU SA NEVEROVATNIM JASTUKOM ZA PAROVE</span></h2>
                <p><span style="color: #4ba7ff;"><strong>Uživajte u komforu i bliskosti sa ovim jastukom <br>– Kupite odmah i znatno uštedite!</strong></span></p>
                <ul>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Unikatan dizajn</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Nežna memorijska pena</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Prozračan i jednostavan za čišćenje</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Idealan za parove, ali takođe dobar za jednu osobu</li>
                </ul>
                <p><span style="color: #4ba7ff;"><strong>Ostvarićete specijalni popust od <span style="color: #e02020;">40%</span> <br>ukoliko poručite odmah!</strong></span></p>
                <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
                <ol>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/guarantee.png" alt="guarantee"></li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="stars">100% garancija zadovoljstva</li>
                </ol>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-3">
        <div class="container">
            <div class="wysiwyg-content line-divider ">
                <p><strong>Trajanje specijalnog popusta od <span style="color: #feee00;">40% </span> je ograničeno. Uskoro vraćamo regularnu cenu!</strong></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-4">
        <div class="container">
            <div class="guaranteed ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon5.png" alt="icon1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>GARANTOVANO <br>VISOK KVALITET</h4>
                                    <p>Napravljen od najboljih materijala za maksimalnu izdržjivost i dugovečnost</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon6.png" alt="icon2" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>JEDNOSTAVAN POVRAT</h4>
                                    <p>Ukoliko niste zadovoljni našim jastukom, vratićemo vam novac bez suvišnih pitanja</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon7.png" alt="icon3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>LAGAN I PRAKTIČAN</h4>
                                    <p>Možete ga nositi sa sobom i koristiti na bilo kom mestu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-5">
        <div class="container">
            <div class="wysiwyg-content middle-banner ">
                <p>
                    <img src="{{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk1_dt.jpg" alt="thumb1">
                    <img src="{{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk1_mb.jpg" alt="thumb1">
                </p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-6">
        <div class="container">
            <div class="editor functional">
                <div class="grid-layout has-width reverse">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <h2>SPAVAJTE ZAGRLJENI, BUDITE SE ODMORNI</h2>
                                <p>Svima nam se desilo da pokušavamo zaspati zagrljeni sa partnerom, ali u nekom momentu naša ruka počne da trni.</p>
                                <p>Imamo izbor da probudimo našeg partnera ili da nastavimo trpiti pritisak na ruci. Ipak postoji bolje rešenje!</p>
                                <p>Ovaj jastuk uklanja svu nelagodu zahvaljujući inovativnom i zaobljenom obliku napravljenom specijalno za parove.</p>
                                <p>Izuzetno je udoban, pružiće vam lep i ugodan san, a vrlo brzo nećete moći da zamislite noć bez njega.</p>
                            </div>
                        </div>
                        <div class="columns col-right">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk_img1.jpg" alt="img-1"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout has-width">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <h2>ERGONOSMKI DIZAJN ZA PRAVILAN POLOŽAJ TELA</h2>
                                <p>Zakrivljen oblik jastuka za parove pomaže u držanju prirodnog položaja kičme.
                                    Šupljina jastuka ublažava napetost i ukočenost kičmenog stuba i eliminiše bol u vratu i ramenima.
                                    Da li ste ikada imali ovako dobar jastuk na svom krevetu?</p>
                            </div>
                        </div>
                        <div class="columns col-right">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/couplejastuk/couplejastuk_img2.jpg" alt="img-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-7">
        <div class="container">
            <div class="guides ">
                <h2 class="w_main_title"><span class="text">Kako doći do ovog jastuka?</span></h2>
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <h3 class="w_toptext">01</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/step-1.jpg" alt="step1" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Poručite sa našeg zvaničnog sajta jer samo tu možete pronaći originalni jastuk.
                                    Sve ostalo su jeftine kopije koje ne želite u svom domu.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext">02</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/step-2.jpg" alt="step2" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Kada poručite obavestićemo vas da smo poslali na vašu adresu. Za 1 do 2 radna dana jastuk će biti u vašem domu.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext">03</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/step-3.jpg" alt="step3" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Uživajte u udobnosti i lepom snu sa vašom voljenom osobom!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-8">
        <div class="container">
            <div class="wysiwyg-content best-reviews shop-link ">
                <h2><span style="color: #005bd4;">ŠTA NAŠI KUPCI KAŽU O</span><br><span style="color: #005bd4;">JASTUKU ZA PAROVE</span></h2>
                <h3>Kupite ovo ukoliko volite da se grlite</h3>
                <p>Iskreno, ovaj jastuk je neverovatan. Nisam mislila da je ovako dobar.
                    Spavam sa svojim dečkom celu noć zagrljena i ušuškana i probudimo se odmorni.
                    Toplo preporučujem ovaj jastuk svima koji vole da spavaju u zagrljaju voljene osobe.</p>
                <p><strong><span>Jovana L. - Novi Sad</span></strong></p>
                <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-9">
        <div class="container">
            <div class="rating-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <h4 class="w_title">4.6</h4>
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half-empty"></i></p>
                                <p>Prosečna ocena</p>
                            </div>
                        </div>
                        <div class="w_item item-2">
                            <div class="w_desc">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 89%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 11%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w_item item-3">
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>89%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>11%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Marija G.</strong> - Surdulica</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Volim ovaj jastuk i hvala vam. Zimske noći provodim u toplom zagrljaju.
                                    Ramena me više ne bole ujutru kada se probudim. Odličan proizvod!</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Ivana J.</strong> – Kragujevac</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Moj momak i ja smo podigli san na viši nivo. Ne budimo se u toku noći, slatko spavamo
                                    i uživamo u svakom trenutku sna. Od sada nigde ne idemo bez našeg jastuka!</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Vasilije P.</strong> – Užice</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Nemam devojku, ali zato imam ovaj neverovatno dobar jastuk.
                                    Lepo spavam, budim se odmoran. Ranije sam imao problem sa bolom u leđima,
                                    ali je to isčezlo zahvaljujući ovom jastuku i pravilnom položaju mog tela u toku noći.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-10">
        <div class="container">
            <div class="wysiwyg-content special-offer ">
                <h2>SPECIJALNA PONUDA SAMO DANAS</h2>
                <h3><span style="color: #00aeef;">Poručite odmah i iskoristite 40% popusta</span></h3>
                <p class="offer_text">Ne dozvolite da neudobnost pokvari vaš zagrljaj sa voljenom osobom.
                    Uživajte u bliskosti sa partnerom uz anatomski jastuk za parove.
                    Količine su ograničene, zato poručite još danas!
                </p>
                <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-11">
        <div class="container">
            <div class="wysiwyg-content line-divider ">
                <p><strong>Trajanje specijalnog popusta od <span style="color: #feee00;">40% </span> je ograničeno. Uskoro vraćamo regularnu cenu!</strong></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-12">
        <div class="container">
            <div class="wysiwyg-content product-banner top-banner ">
                <h2><span style="color: #015bd3;">NE PREKIDAJTE ZAGLJAJ NI KADA STE U SNU SA NEVEROVATNIM JASTUKOM ZA PAROVE</span></h2>
                <p><span style="color: #4ba7ff;"><strong>Uživajte u komforu i bliskosti sa ovim jastukom <br>– Kupite odmah i znatno uštedite!</strong></span></p>
                <ul>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Unikatan dizajn</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Nežna memorijska pena</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Prozračan i jednostavan za čišćenje</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Idealan za parove, ali takođe dobar za jednu osobu</li>
                </ul>
                <p><span style="color: #4ba7ff;"><strong>Ostvarićete specijalni popust od <span style="color: #e02020;">40%</span> <br>ukoliko poručite odmah!</strong></span></p>
                <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
                <ol>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/guarantee.png" alt="guarantee"></li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="stars">100% garancija zadovoljstva</li>
                </ol>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
@include('lander.purplerelax.components.footer1')