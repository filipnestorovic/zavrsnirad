<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('/') }}naturapharmFiles/rukavica/offer_2.png" rel="shortcut icon"/>
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/rukavica/style_002.css">
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/rukavica/colors.css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <style>html{scroll-behavior:smooth}body{padding-top:0px!important}header .wrapper{background-image:url({{asset('/')}}naturapharmFiles/rukavica/3.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed}#preview .wrapper{background-image:url({{asset('/')}}naturapharmFiles/rukavica/8.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed}#upsell .wrapper{background-image:url({{asset('/')}}naturapharmFiles/rukavica/upsell1.html);background-repeat:no-repeat;background-size:cover;background-attachment:fixed}#gallery .wrapper{background-image:url({{asset('/')}}naturapharmFiles/rukavica/w1.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed}footer{background-image:url({{asset('/')}}naturapharmFiles/rukavica/3.jpg);background-repeat:no-repeat;background-size:cover;background-attachment:fixed}@font-face{font-family:'Glyphicons Halflings';src:url('{{ asset('/') }}fonts/glyphicons-halflings-regular.html');src:url('{{ asset('/') }}fonts/glyphicons-halflings-regulard41d.html') format('embedded-opentype'),url('{{ asset('/') }}fonts/glyphicons-halflings-regular-2.html') format('woff'),url('{{ asset('/') }}fonts/glyphicons-halflings-regular-3.html') format('truetype'),url('{{ asset('/') }}fonts/glyphicons-halflings-regular-4.html') format('svg')}.badges>.col-sm-6:nth-child(2){margin-top:10px}@media (max-width:767px){#firstContainer{margin-top:-50px}.badges{padding-left:40px}.badges>.col-sm-6:nth-child(2){margin-top:20px;margin-left:-10px}}.success{position:relative;padding:.75rem 1.25rem;border:1px solid #c3e6cb;border-radius:.25rem;color:#155724;background-color:#d4edda;text-align:center;font-size:1.5em}.alert{position:relative;padding:.75rem 1.25rem;border:1px solid lightcoral;border-radius:.25rem;color:darkred;background-color:lightcoral;text-align:center;font-size:1.5em}</style>
</head>
<body id="home">
@include('components.display_errors')
<header>
    <div class=wrapper></div>
    <div class=container id="firstContainer">
        <div class=row>
            <div class=col-sm-6>
                <h1><center><img src="{{ asset('/') }}naturapharmFiles/rukavica/rukavica1.png" align="left" class="headlogo"></center></h1>
            </div>
        </div>
        <div class=row id="buy_form">
            <div class=col-sm-12>
                <div class=row>
                    <div class=col-sm-7>
                        <div id="carousel-top" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active"><img src="{{ asset('/') }}naturapharmFiles/rukavica/44.png" alt="" title=""></div>
                            </div>
                        </div>
                        <h3 style="visibility: visible;" class=wow><img src="{{ asset('/') }}naturapharmFiles/rukavica/rukavica2.png" align=left height=86 width=553 class=mobhide ></h3>
                    </div>
                    <div class=col-sm-5>
                        <form method="POST" action="{{$orderRoute}}">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input type="hidden" name="quantity" value="2"/>
                            <legend class="text-center text-uppercase"><b>SPECIJALNA PONUDA</b></legend>
                            <legend class="text-center text-uppercase">1 <span style="font-weight:900; color:#ff0000"> + 1 gratis</span><br>
                                Ranije: <del><span class="price_land_s4">{{ $prices[1]['originalPrice'] }} RSD</span></del><br>
                                Danas: <span style="font-weight:900; color:#ff0000;"><span class="price_land_s1">{{ $prices[1]['amount'] }} RSD</span></span> <span class="price_land_curr"></span>
                            </legend>
                            <div class="form-group">
                                <input name="name" placeholder="Ime i prezime" class="form-control input-lg" type="text">
                            </div>
                            <div class=form-group>
                                <input name="phone" placeholder="Telefon" class="form-control input-lg" type="text">
                            </div>
                            <div class=form-group>
                                <input name="shipping_address" placeholder="Adresa" class="form-control input-lg" type="text">
                            </div>
                            <div class=form-group>
                                <input name="shipping_city" placeholder="Grad" class="form-control input-lg" type="text">
                            </div>
                            <button type="submit" class="btn btn-creative btn-lg btn-block"><span>PORUČI</span></button>
                        </form>
                        <div class="row mt badges">
                            <div class=col-sm-6><img style="visibility: visible;" src="{{ asset('/') }}naturapharmFiles/rukavica/g1.png" alt="" title="" class="img-responsive wow" ></div>
                            <div class=col-sm-6><img style="visibility: visible;" src="{{ asset('/') }}naturapharmFiles/rukavica/g2.png" alt="" title="" class="img-responsive wow" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id=preview>
    <div class=wrapper></div>
    <div class=container>
        <div class=row>
            <div class=col-sm-12>
                <h2 style="visibility: visible;" class="text-center wow  ">Vaš ljubimac će obožavati ovu rukavicu, a četkanje će konačno da zavoli!</h2>
                <h2 style="visibility: visible;" class="text-center wow  ">Od čega je napravljena rukavica za kućne ljubimce?</h2>
                <div class=row>
                    <div class=col-sm-6><img src="{{ asset('/') }}naturapharmFiles/rukavica/img_1.png" alt="" title="" class="img-responsive img-rounded  mb center-block" ></div>
                    <div class=col-sm-6>
                        <div style="visibility: visible;" class="row mb wow">
                            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/img_01.png" alt="" title="" class="img-responsive img-rounded mb center-block" ></div>
                            <div class=col-sm-8>
                                <h4>180 mekih mekih iglica</h4>
                                <p align=justify> - napravljenih od hipoalergenskog silikona za lako češljanje svih vrsta dlake vašeg ljubimca (duga, kratka, kovrdžava)</p>
                            </div>
                        </div>
                        <div style="visibility: visible;" class="row mb wow">
                            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/img_02.png" alt="" title="" class="img-responsive img-rounded mb center-block"  ></div>
                            <div class=col-sm-8>
                                <br> <h4>Tekstilni umetak</h4>
                                <p align=justify> - i mrežica za izvrsnu ventilaciju i udobnost</p>
                            </div>
                        </div>
                        <div style="visibility: visible;" class="row wow">
                            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/img_03.png" alt="" title="" class="img-responsive img-rounded mb center-block" ></div>
                            <div class=col-sm-8>
                                <br><h4>Podesive trake za učvršćivanje</h4>
                                <p align=justify> - ugodne za nošenje i mekane na vašem zglobu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="visibility: visible;" class="text-center mt wow  "><a href="#buy_form" class="btn btn-lg btn-custom big">PORUČI ODMAH</a></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=container>
        <div class="row mb">
            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/text_1.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block" ></div>
            <div style="visibility: visible;" class="col-sm-8 wow">
                <font size=5em>●	Simulira dodir vaše ruke, i daje masažni efekat<br>
                    ●	Sastoji se od 180 mekanih silikonskih iglica za lako rasčešljavanje</font>
            </div>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br>
            <div class=clear></div>
            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/text_2.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block" ></div>
            <div style="visibility: visible;" class="col-sm-8 wow">
                <font size=5em>●	Dlaka lako prianja uz rukavicu i lako se uklanja, što čini postupak četkanja ljubimca brzim i ugodnim<br>
                    ●	Zahvaljujući rukavicama s četkom za kućne ljubimce, vaš dom i odeća uvek će biti čisti</font>
            </div>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br>
            <div class=clear></div>
            <div class=col-sm-4><img src="{{ asset('/') }}naturapharmFiles/rukavica/text_3.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block" ></div>
            <div style="visibility: visible;" class="col-sm-8 wow">
                <font size=5em>●	Rukavica sa četkom za kućne ljubimce pogodna je za mačke i pse svih rasa i svih veličina!</font>
            </div>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br class=hidden-xs>
            <br class=hidden-xs><br>
            <center>
                <h1 style="visibility: visible;" class="text-center wow   animated"><b>Prednosti upotrebe<Br> rukavice sa četkom za kućne ljubimce</b></h1>
                <img style="visibility: visible;" src="{{ asset('/') }}naturapharmFiles/rukavica/rukavica3.png" alt="" title="" class="img-responsive wow" ></center>
            <div class=row>
                <div style="visibility: visible;" class="col-sm-12 text-center mt wow"><a href="#buy_form" class="btn btn-lg btn-custom big">PORUČI ODMAH</a></div>
                <div class=clear></div>
            </div></div></div></section>
<section id=gallery>
    <div class=wrapper></div>
    <div class=container>
        <div class=row>
            <div class=col-sm-12>
                <h2 style="visibility: visible;" class="text-center wow  "><b>Galerija</b></h2>
                <div class=text-center>
                    <img src="{{ asset('/') }}naturapharmFiles/rukavica/1_prev.png" alt="" title="" >
                    <img src="{{ asset('/') }}naturapharmFiles/rukavica/2_prev.png" alt="" title="" >
                    <img src="{{ asset('/') }}naturapharmFiles/rukavica/3_prev.png" alt="" title="" >
                    <img src="{{ asset('/') }}naturapharmFiles/rukavica/4_prev.png" alt="" title="" >
                </div>
            </div>
        </div>
    </div>
</section>
<section id=test class=comment>
    <div class=container>
        <div class=row>
            <div class=col-sm-12>
                <h2 style="visibility: visible;" class="text-center wow  "><b>Iskustva kupaca</b></h2>
                <div style="visibility: visible;" class="row comment-body wow  ">
                    <div class="col-sm-3 text-center">
                        <img src="{{ asset('/') }}naturapharmFiles/rukavica/ava.png" alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb" >
                        <h4>Ljubica Vasić</h4>
                    </div>
                    <div class=col-sm-9>
                        <h3>Preporučujem svima! Nećete se pokajati!</h3>
                        <p>Moj Čarli je mrzeo češalj, morala sam mu držati sve šape, a sada se jednostavno zaljubio u ovu rukavicu!
                            Neprestano traži da ga pomazim pa čak se ne buni ni kada ga kupam rukavicom!
                            Sada smo oboje zadovoljni - kuća je čista, a Čarli je srećan.</p>
                    </div>
                </div>
                <div style="visibility: visible;" class="row comment-body wow  ">
                    <div class="col-sm-3 text-center">
                        <img src="{{ asset('/') }}naturapharmFiles/rukavica/ava2.png" alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb" >
                        <h4>Dario Vukotić</h4>
                    </div>
                    <div class=col-sm-9>
                        <h3>Potpuno sam zadovoljan rukavicom!</h3>
                        <p>Imam dva psa i dve mačke, zamislite koliko dlaka imam u kući!!! Kad sam video da se pojavila rukavica sa četkom za kućne ljubimce,
                            odmah sam rešio da je kupim. Poručio sam dve rukavice odjednom! Kada sam je dobio, češljao sam svoje ljubimce celi dan, čak su i mačke bile zadovoljne iako su obe nervozne.
                            Savetujem svima da je kupe, posebno onima koji žele kuću bez dlaka.</p>
                    </div>
                </div>
                <div style="visibility: visible;" class="row comment-body wow  ">
                    <div class="col-sm-3 text-center">
                        <img src="{{ asset('/') }}naturapharmFiles/rukavica/ava3.png" alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb" >
                        <h4>Marko Simić</h4>
                    </div>
                    <div class=col-sm-9>
                        <h3>Veoma dobro!</h3>
                        <p>Rex se neprestano mota u blizini sofe kako bih ga pomazio rukavicom. Sada su odeća, sofa i automobil uvek čisti!!!
                            Hvala onome ko je izumio ovu rukavicu, rešio nas je problema sa psećim dlakama.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=container>
        <div class=row>
            <div class="col-sm-10 col-sm-offset-1">
                <h2 style="visibility: visible;" class="text-center wow  "><b>Akcija</b></h2>
                <div class=row>
                    <div class=col-sm-6><img src="{{ asset('/') }}naturapharmFiles/rukavica/offer_1.png" alt="" title="" class="img-responsive img-rounded shadow center-block mb" ></div>
                    <div class="col-sm-6 mob-center">
                        <h3 style="visibility: visible;" class="wow text-danger "><b>AKCIJA - 1+1 GRATIS</b></h3>
                        <h3 style="visibility: visible;" class=wow>Popust - 40% (Ušteda <span class=price_land_s1>{{ $prices[1]['originalPrice'] - $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>)</h3>
                        <del style="visibility: visible;" class="wow ">Stara cena: <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></del>
                        <h3 style="visibility: visible;" class="wow text-success mb mt "><b>Cena: <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></b></h3>
                        <p style="visibility: visible;" class="wow ">Samo danas dobijate 2 proizvoda po specijalnoj ceni!</p>
                        <div style="visibility: visible;" class="mt wow "><a href="#buy_form" class="btn btn-lg btn-custom">Poručite odmah</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=guaranry>
    <div class=container>
        <div class=row>
            <div class="col-sm-12 text-center">
                <h2 style="visibility: visible;" class="text-center wow  "><b>Garancija</b></h2>
                <div class=row>
                    <div style="visibility: visible;" class="col-sm-4 wow  ">
                        <h4><b>Plaćanje pouzećem</b></h4><img src="{{ asset('/') }}naturapharmFiles/rukavica/guarantee_1.png" alt="" title="" class="img-responsive center-block mb" >
                        <p>Plaćate tek nakon što preuzmete pošiljku</p>
                        <p></p>
                    </div>
                    <div style="visibility: visible;" class="col-sm-4 wow  ">
                        <h4><b>Garancije za proizvod</b></h4><img src="{{ asset('/') }}naturapharmFiles/rukavica/rukavica5.png" alt="" title="" class="img-responsive center-block mb" >
                        <p>Predmeti su 100% testirani pre slanja</p>
                        <p>Vratićemo vam novac ako nešto nije u redu</p>
                        <p>Pridržavamo se zakona o zaštiti potrošača</p>
                        <p></p>
                        <p></p>
                    </div>
                    <div style="visibility: visible;" class="col-sm-4 wow  ">
                        <h4><b>Povrat novca</b></h4><img src="{{ asset('/') }}naturapharmFiles/rukavica/rukavica4.png" alt="" title="" class="img-responsive center-block mb" >
                        <p>Kontaktirajte korisničku službu</p>
                        <p>Pošaljite nam kupljenu robu</p>
                        <p>Izvršićemo povrat novca</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=buy>
    <div class=container>
        <div class=row>
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class=text-center><b>Akcija</b></h2>
                <div class=row>
                    <div class=col-sm-6><img src="{{ asset('/') }}naturapharmFiles/rukavica/offer_2.png" alt="" title="" class="img-responsive img-rounded shadow center-block mb" ></div>
                    <div class="col-sm-6 mob-center">
                        <h3 style="visibility: visible;" class="wow text-danger "><b>AKCIJA - 1+1 GRATIS</b></h3>
                        <h3 style="visibility: visible;" class=wow>Dodatni popust - 40% (Ušteda <span class=price_land_s1>{{ $prices[1]['originalPrice'] - $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span>)</h3>
                        <del style="visibility: visible;" class="wow ">Stara cena: <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>RSD</span></del>
                        <h3 style="visibility: visible;" class="wow text-success mb mt "><b>Cena: <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>RSD</span></b></h3>
                        <p style="visibility: visible;" class="wow ">Samo danas dobijate 2 proizvoda po specijalnoj ceni!</p>
                        <div style="visibility: visible;" class="mt wow "><a href="#buy_form" class="btn btn-lg btn-custom">Poručite odmah</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class=mob-center>
    <div class=container>
        <div class=row>
            <div class=col-sm-12 style="justify-content: center; text-align: center;">
                <p>Copyright &copy; {{ now()->year }}</p>
                <p>{{ $product->brand_name }}</p>
            </div>
        </div>
    </div>
</footer>
@include('components.pixel_footer')
</body>
</html>
