<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta content="width=device-width, maximum-scale=1.0" name="viewport"/>
    <link type="text/css" href="{{ asset('/') }}naturapharmFiles/longeta/order_me.min.css" rel="stylesheet" media="all">
    <link type="text/css" href="{{ asset('/') }}naturapharmFiles/longeta/secondPage.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}naturapharmFiles/longeta/index.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/longeta/floating_bar.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="{{ asset('/') }}naturapharmFiles/longeta/scope__traumatology.png" type="image/png" sizes="16x16">
    <style>.textinfo5 img{width:160px;height:auto}.head-top img{width:400px;height:auto;margin-right:160px;margin-bottom:0}.ac_footer{position:relative;text-align:center;overflow:hidden;padding:20px 0;color:#A12000;font-size:16px}.ac_footer a{color:#A12000}.ac_footer p{text-align:center}img[height="1"],img[width="1"]{display:none!important}a{text-decoration:none}.container form input.name{background:url('{{ asset('/') }}naturapharmFiles/longeta/ico-name.png') no-repeat scroll left 14px top 8px rgb(255,255,255)}.container form select.address{background:url('{{ asset('/') }}naturapharmFiles/longeta/ico-deliv.png') no-repeat scroll left 6px top 13px rgb(255,255,255);padding-left:20px}.container form input.phone{background:url('{{ asset('/') }}naturapharmFiles/longeta/ico-phone.png') no-repeat scroll left 12px top 9px rgb(255,255,255)}.countdown-2 span{position:relative;color:rgb(58,146,108);float:left;display:inline-block;width:66px;height:65px;line-height:66px;font-size:55px;font-weight:700;background:url('{{ asset('/') }}naturapharmFiles/longeta/count.png') no-repeat scroll center center transparent;text-align:center}.countdown-2 span:after{content:"";background:url('{{ asset('/') }}naturapharmFiles/longeta/count-line.png') no-repeat scroll left top transparent;width:66px;height:8px;position:absolute;left:0;top:29px}.container header,.container footer{width:100%;height:100%;background:url('{{ asset('/') }}naturapharmFiles/longeta/bg-main.jpg') no-repeat scroll top center rgb(243,243,243);padding:0 0 10px}.head-top span{color:rgb(58,146,108);font-style:italic;font-size:19px;display:block;padding-left:35px;background:url('{{ asset('/') }}naturapharmFiles/longeta/tick.png') no-repeat scroll left center transparent;text-align:left}.form-wrp,.form-wrp-sec{border:5px solid rgb(194,194,194);background:url('{{ asset('/') }}naturapharmFiles/longeta/form-bg.png') repeat scroll left top transparent;padding:25px;margin:65px 0 0 10px}.textinfo{background:url('{{ asset('/') }}naturapharmFiles/longeta/bg-1.jpg') no-repeat scroll center center transparent;height:260px;padding:20px 0;background-size:cover}.textinfo4{background:url('{{ asset('/') }}naturapharmFiles/longeta/bg-2.jpg') no-repeat scroll center center transparent;height:680px;padding:10px 0;text-align:center;padding-top:100px}.textinfo4 .item{margin:50px;line-height:23px;text-align:center;{{--padding-left:40px;background:url('{{ asset('/') }}naturapharmFiles/longeta/tick-2.png') no-repeat scroll left 5px transparent;--}}}.info-block span{color:rgb(58,146,108);display:block;padding-left:50px;background:url('{{ asset('/') }}naturapharmFiles/longeta/ico-info.png') no-repeat scroll left 5px transparent}.textinfo6>.wrap{background:url('{{ asset('/') }}naturapharmFiles/longeta/round.png') no-repeat scroll 270px center transparent}.form-wrp-sec{max-width:500px;margin:10px auto;padding:5px}.form-wrp h3,.form-wrp-sec h3{font-size:25px;margin:10px 0;line-height:30px;text-align:center}.form-wrp h3 span,.form-wrp-sec h3 span{font-size:16px}.count-wrp{max-width:520px;padding:15px;margin:0 auto}.form-wrp-sec .count-wrp{text-align:center;padding:10px}.form-wrp-sec button{margin:10px auto;max-width:200px;margin:0 auto 10px}.order .form-wrp{margin:0}.textinfo>.wrap>.item{padding-top:30px;text-align:center}@media screen and (min-width:641px) and (max-width:980px){.textinfo6>.wrap{background:url('{{ asset('/') }}naturapharmFiles/longeta/round.png') no-repeat scroll center center transparent}.form-wrp{text-align:center}.head-top img{margin-right:0}}@media screen and (max-width:640px){.textinfo{text-align:center;height:auto;background-size:cover}.textinfo .item{margin:20px 0;max-width:270px;width:90%}.textinfo p{font-size:22px}.textinfo2 .item{max-width:265px;width:85%}.textinfo4{height:auto;background-size:cover;padding-top:40px}.textinfo6{text-align:center}.textinfo6>.wrap{background:none repeat scroll 0% 0% transparent}.textinfo6 .item{display:inline-block;width:98%}.textinfo6 .item .r-text{width:auto;text-align:center}.textinfo>.wrap>.item{padding-top:0}.head-top img{margin-right:0}}.county>span:after{content:"";background:url('{{ asset('/') }}naturapharmFiles/longeta/count-line.png') no-repeat scroll left top transparent;width:66px;height:8px;position:absolute;left:0;top:29px}</style>
</head>
<body>
<div class="container s__main">
    @include('components.display_errors')
    <header class="section-1">
        <div class="wrap">
            <div class="head-top right">
                <h1>Inovativno rešenje za bol u peti, sprečavanje žuljeva i dodatnu podršku pri svakom koraku!</h1>
                <h3>Postignite vrhunsku udobnost i podršku za vaša stopala</h3>
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longetaProduct.png"/>
                <br/>
                <span>UBLAŽAVA BOLOVE U PETI</span>
                <span>SPREČAVA NASTANAK ŽULJEVA</span>
                <span>PODRŠKA I UDOBNOST</span>
            </div>
            <div class="clear">
            </div>
            <div class="form-wrp-sec">
                <div class="count-wrp">
                    <h3> SAMO DANAS <br/>
                        <span> POPUST {{ $discount != null ? (40+$discount)."%" : "40%" }} </span>
                    </h3>
                    <div class="clear">
                    </div>
                    <p class="price">
                        Garantovano najbolja cena
                        <span class="old-price js_old_price_curs js-pp-old">{{ $prices[1]['originalPrice'] }} RSD</span>
                        <span class="new-price price-rw js_new_price_curs js-pp-new">{{ $prices[1]['amount'] }} RSD</span>
                    </p>
                </div>
                <a href="{{$checkoutView}}">
                    <button class="submit pre_toform" name="button">PORUČI ODMAH</button>
                </a>
                <div class="clear">
                </div>
            </div>
        </div>
    </header>
    <div class="clear">
    </div>
    <div class="textinfo">
        <div class="wrap">
            <div class="item">
                Oko 75% ljudi <br>doživljava bol u stopalima <br>u nekom trenutku svog života.
            </div>
            <div class="item">
                Žene češće od muškaraca <br>doživljavaju bolove u stopalima
            </div>
            <div class="item last">
                Pravilna podrška svodu <br>stopala može eliminisati bol
            </div>
            <p>
                <br/>
                Ne čekajte da bolovi i neudobnost pokvare vaš dan - naručite Foot Cushion odmah
                <span></span>
            </p>
        </div>
    </div>
    <div class="textinfo2">
        <div class="wrap">
            <h2>Foot cushion pozitivno utiče na sledeće načine</h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longeta4.png"/>
                <p>Ublažava bolove u peti pružajući trenutno olakšanje</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/02.jpg"/>
                <p>Sprečava stvaranje dosadnih žuljeva</p>
            </div>
            <div class="item last">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/03.jpg"/>
                <p>Pruža podršku i udobnost, pogotovo kod nošenja visokih štikli</p>
            </div>
            {{--<p></p>--}}
        </div>
    </div>
    <div class="order">
        <div class="wrap">
            <div class="form-wrp-sec ">
                <h3> Foot Cushion
                    <br/>
                    <span> "Kažite NE bolu i žuljevima!"
                </span>
                </h3>
                <div class="count-wrp ">
                    <div class="clear">
                    </div>
                    <p class="price">
                        Garantovano najbolja cena
                        <span class="old-price js_old_price_curs js-pp-old">{{ $prices[1]['originalPrice'] }} RSD</span>
                        <span class="new-price price-rw js_new_price_curs js-pp-new">{{ $prices[1]['amount'] }} RSD</span>
                    </p>
                </div>
                <a href="{{$checkoutView}}">
                    <button class="submit pre_toform" name="button"> PORUČI ODMAH!</button>
                </a>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="textinfo3">
        <div class="wrap">
            <h2>ŠTA JE FOOT CUSHION?</h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-1.jpg"/>
                <p>Foot cushion su silikonski ulošci za stopala koji su dizajnirani kako bi pružili dodatnu podršku, udobnost i olakšanje od bolova prilikom hodanja ili stajanja</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-2.jpg"/>
                <p>Ulošci se postavljaju unutar obuće i prilagođavaju se obliku i veličini vašeg stopala. Pomažu u ublažavanju bolova u peti, sprečavanju nastanka žuljeva i pružanju potrebne podrške svodu stopala</p>
            </div>
            <div class="item last">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-3.jpg"/>
                <p>Tako poboljšavaju kvalitet hoda i smanjuju umor u stopalima. Silikonski ulošci su univerzalne veličine i pogodni za upotrebu sa različitim vrstama obuće.</p>
            </div>
        </div>
    </div>
    <div class="textinfo4">
        <div class="wrap">
            <h2>Kada je potrebno da koristite Foot Cushion?</h2>
            <div class="item">
                <h4>Bolovi u stopalima</h4>
                <p>Ako doživljavate bolove u stopalima usled dugotrajnog stajanja, hodanja ili nošenja obuće sa visokom petom, silikonski ulošci mogu pružiti olakšanje i smanjiti pritisak na osetljive delove stopala.</p>
            </div>
            <div class="item">
                <h4>Žuljevi i kurje oči</h4>
                <p>Ulošci mogu pomoći u sprečavanju nastanka žuljeva i kurjih očiju tako što smanjuju trenje i iritaciju kože prilikom nošenja obuće.</p>
            </div>
            <div class="item">
                <h4>Ravan svod stopala</h4>
                <p>Ako imate ravan svod stopala ili druge probleme sa stopalima, silikonski ulošci mogu pružiti dodatnu podršku i smanjiti bolove i nelagodnosti povezane sa tim stanjima.</p>
            </div>
        </div>
    </div>
    <div class="textinfo5">
        <div class="wrap">
            <h2> KAKO DELUJE?
            </h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longeta1.png"/>
                <p>Silikonski materijal služi kao mekani sloj koji apsorbuje udarce prilikom hodanja ili stajanja. </p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longeta2.png"/>
                <p>Silikonski ulošci smanjuju trenje između stopala i obuće, što pomaže u sprečavanju nastanka žuljeva, kurjih očiju i drugih iritacija kože.</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/longeta3.png"/>
                <p>Silikonski materijal se prilagođava obliku i veličini vašeg stopala, osiguravajući udoban i siguran položaj unutar obuće. Oni su univerzalne veličine i laki za upotrebu.</p>
            </div>
            <div class="clear">
            </div>
            <div class="info-block">
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longetaProduct.png"/>
                <div class="text-info">
                    <h2>KAKO KORISTITI FOOT CUSHION? </h2>
                    <p>Jednostavno ga stavite na stopalo, a zatim obujte vaše cipele. Nevidljiv je u zatvorenim cipelama i sportskim patikama.</p>
                    <p>
                        <b>
                            <i>Što više vremena nosite Foot Cushion, efekat će biti bolji.</i>
                        </b>
                    </p>
                    <p>
                        <span>Jedan Foot Cushion dovoljan je za najmanje godinu dana korišćenja.</span>
                    </p>
                </div>
                <div class="clear">
                </div>
            </div>
            <h2>RAZLIKA U DELOVANJU FOOT CUSHION
                <br/>
                U ODNOSU NA DRUGE METODE LEČENJA
            </h2>
        </div>
    </div>
    <div class="textinfo6">
        <div class="wrap">
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/07.jpg"/>
                <div class="r-text">
                    <h5>Ortopedski ulošci</h5>
                    <p>Silikonski ulošci su često jeftiniji od drugih tretmana, kao što su ortopedski ulošci ili fizioterapija. To ih čini dostupnijim za širi spektar ljudi koji traže rešenje za bolove i neudobnosti u stopalima.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/08.jpg"/>
                <div class="r-text">
                    <h5>Protivupalne i analgetske masti i kreme</h5>
                    <p>Upotreba silikonskih uložaka je neinvazivna opcija, što znači da ne zahteva medicinske zahvate ili lekove koji mogu imati neželjene efekte. To ih čini sigurnom alternativom za one koji traže rešenje za probleme sa stopalima.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/09.jpg"/>
                <div class="r-text">
                    <h5>Masaža i rehabilitacija</h5>
                    <p>Silikonski ulošci su jednostavni za upotrebu i ne zahtevaju posebne veštine ili obuku. Samo ih postavite unutar cipela i prilagodite obliku i veličini vašeg stopala.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/10.jpg"/>
                <div class="r-text">
                    <h5>Hirurgija</h5>
                    <p>Za razliku od ortopedskih uložaka, koji se često prave po meri, silikonski ulošci su univerzalne veličine i mogu se prilagoditi različitim oblicima i veličinama stopala</p>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="green">
            <div class="wrap">
                <div class="item">
                    <img src="{{ asset('/') }}naturapharmFiles/footcushion/longeta5.jpg"/>
                    <div class="r-text">
                        <h5>Foot Cushion</h5>
                        <p>
                            Silikonski ulošci mogu pružiti trenutno olakšanje od bolova u stopalima i neudobnosti, dok neke druge opcije lečenja, kao što su fizioterapija ili lekovi, mogu zahtevati duže vreme da bi pokazali rezultate.
                        </p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="wrap">
            <h2>UTISCI KUPACA</h2>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}naturapharmFiles/longeta/ava1.png"/>
                </div>
                <blockquote>
                    <h4>
                        <strong>Dragana, 30 godina</strong>
                    </h4>
                    <p>Kupila sam Foot Cushion jer sam imala bolove u stopalima zbog dugotrajnog stajanja na poslu. Nakon što sam ih počela koristiti, primetila sam značajno olakšanje. Bolovi su se smanjili, a i stopala mi se manje umaraju. Nisu čudo, ali definitivno mi pomažu da se osećam ugodnije tokom dana.</p>
                </blockquote>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}naturapharmFiles/longeta/ava2.jpg"/>
                </div>
                <blockquote>
                    <h4>
                        <strong>Marina, 29 godina</strong>
                    </h4>
                    <p>Počela sam koristiti Foot cushion uloške jer mi je ortoped preporučio nešto da mi pomogne s bolovima zbog ravne noge. Ulošci su mi pomogli da hodam udobnije, ali ipak nisu potpuno rešenje za moj problem. Sve u svemu, za ovu cenu, mislim da vrede, iako ću možda morati da razmotrim i druge opcije.</p>
                </blockquote>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{ asset('/') }}naturapharmFiles/longeta/ava3.png"/>
                </div>
                <blockquote>
                    <h4>
                        <strong>Marija, 47 godina</strong>
                    </h4>
                    <p>Nosim visoke potpetice zbog posla i često imam bolove u stopalima. Ovi silikonski ulošci pružaju dodatnu podršku i ublažavaju pritisak na pete i prste. Nisu savršeni i ne rešavaju sve probleme, ali mi definitivno pružaju veću udobnost i olakšanje. Preporučila bih ih svima koji traže dodatnu podršku u obući.</p>
                </blockquote>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrap">
            <div class="head-top right">
                <h2>Inovativno rešenje za bol u peti, sprečavanje žuljeva i dodatnu podršku pri svakom koraku!</h2>
                <h3>Postignite vrhunsku udobnost i podršku za vaša stopala</h3>
                <img src="{{ asset('/') }}naturapharmFiles/footcushion/longetaProduct.png"/>
                <br/>
                <span>UBLAŽAVA BOLOVE U PETI</span>
                <span>SPREČAVA NASTANAK ŽULJEVA</span>
                <span>PODRŠKA I UDOBNOST</span>
            </div>
            <div class="clear">
            </div>
            <div class="form-wrp">
                <h3> SAMO DANAS
                    <br/>
                    <span> POPUST {{ $discount != null ? (40+$discount)."%" : "40%" }}!</span>
                </h3>
                <div class="count-wrp left">
                    <div class="clear">
                    </div>
                    <p class="price">
                        Garantovano najbolja cena
                        <span class="old-price js_old_price_curs js-pp-old">{{ $prices[1]['originalPrice'] }} RSD</span>
                        <span class="new-price price-rw js_new_price_curs js-pp-new">{{ $prices[1]['amount'] }} RSD</span>
                    </p>
                </div>
                <div class="scrollform"></div>
                <a href="{{$checkoutView}}">
                    <button class="submit js_pre_toform" name="button">ZAVRŠI KUPOVINU</button>
                </a>
                <div class="clear">
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="ac_footer">
    <span>&copy; {{ now()->year }} Copyright. Sva prava zadržana.</span><br>
    <p></p>
</div>
<div class="floating-bar floating-top floating-ft" data-class=".submit" data-ticktopelm=".section-1" data-tickbottomelm="">
    <div class="container">
        <div class="inner">
            <div class="floating-desc">
                <div class="logo">
                </div>
                <div class="right-ft">Nabavi <b>Bunion Corrector</b> već danas!<a href="{{$checkoutView}}">KUPI ODMAH</a></div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
<script src="{{ asset('/') }}shared_files/floating_bar.js"></script>
</body>
</html>
