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
                <h1>KONAČNO SE POJAVILO PRAVO REŠENJE ZA ČUKLJEVE!</h1>
                <h3>PORUČITE BUNION CORRECTOR I ZAUVEK ZABORAVITE NA ČUKLJEVE</h3>
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longetaProduct.png"/>
                <br/>
                <span>ZAUSTAVLJA BOL I UPALU ZA 10 DANA</span>
                <span>EFIKASNO SPREČAVA DEFORMITET U ROKU OD 10 DANA</span>
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
                Više od 30% žena
                <br/> ne može da nosi
                <br/> cipele sa potpeticom
            </div>
            <div class="item">
                Mnogima je neprijatno
                <br/> zbog vidljivog
                <br/> deformiteta stopala
            </div>
            <div class="item last">
                Dan započinje nelagodom,
                <br/> a završava se bolom
            </div>
            <p>
                <br/>
                To su problemi koji nastaju deformitetom kostiju stopala – nepravilnim oblikom nožnog palca
                <span></span>
            </p>
        </div>
    </div>
    <div class="textinfo2">
        <div class="wrap">
            <h2>BUNION CORRECTOR POZITIVNO UTIČE NA SLEDEĆE NAČINE</h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longeta4.png"/>
                <p>Nežno postavlja prste u njihov prirodan položaj i uklanja deformacije</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/02.jpg"/>
                <p>Sprečava stvaranje dosadnih žuljeva i bolova u stopalima</p>
            </div>
            <div class="item last">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/03.jpg"/>
                <p>Uklanja čukljeve i pozitivno utiče na lečenje artritisa</p>
            </div>
            {{--<p></p>--}}
        </div>
    </div>
    <div class="order">
        <div class="wrap">
            <div class="form-wrp-sec ">
                <h3> Bunion Corrector
                    <br/>
                    <span> "KAŽITE NE BOLNIM I RUŽNIM PRSTIMA NA NOGAMA!"
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
            <h2>ŠTA JE BUNION CORRECTOR?</h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-1.jpg"/>
                <p>Na zdravom stopalu palac ima normalan položaj i i prsti su ravnomerno raspoređeni. Stopalo ima normalnu funkciju i daje potpotu celom telu.</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-2.jpg"/>
                <p>Bunion Corrector ispravlja kost nožnog palca i drži ga u ravni sa stopalom.</p>
            </div>
            <div class="item last">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/img-3.jpg"/>
                <p>Na slici iznad je prikazan deformitet palca trećeg stepena. Palac je jako savijen u odnosu na ostale prste, a funkcija stopala je značajno oslabljena. Javlja se veliki bol i nelagoda, što značajno narušava kvalitet života.</p>
            </div>
        </div>
    </div>
    <div class="textinfo4">
        <div class="wrap">
            <h2>KADA JE POTREBNO DA KORISTITE BUNION CORRECTOR?</h2>
            <div class="item">
                <h4>Želite da napravite prevenciju od nastanka čukljeva</h4>
                <p>Imate ravna stopala, nosite uske cipele, neko u vašoj porodici ima čukljeve. Bunion Corrector sprečava nastanak čukljeva, a vaša stopala ostaju zdrava i lepa.</p>
            </div>
            <div class="item">
                <h4>Imate početne simptome</h4>
                <p>Stalno nošenje longete u trajanju od 3 do 6 meseci učiniće da čukljevi nestanu. Rezultat je dokazan, a deformiteti se ne vraćaju.</p>
            </div>
            <div class="item">
                <h4>Imate tešku deformaciju palca</h4>
                <p>Bunion Corrector vraća nožni prst u ispravan pložaj, čak i ako su nožni prsti ukršteni i zbijeni. Sprečava razvoj bolesti i komplikacija kao što su upale zglobova i žuljevi. Opterećenje na stopalima tokom hodanja je ravnomerno raspoređeno, tako da bol nestaje ne samo u prstima nego i u stopalima, a noge se mnogo manje umaraju. </p>
            </div>
        </div>
    </div>
    <div class="textinfo5">
        <div class="wrap">
            <h2> KAKO DELUJE?
            </h2>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longeta1.png"/>
                <p>Izrađen od čistih, kvalitetnih i veoma sigurnih materijala, koji nemaju štetna dejstva na kožu.</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longeta2.png"/>
                <p>Bunion Corrector se prilagođava anatomiji vašeg stopala, i nećete osetiti da je nosite. Pažljivo i sigurno će držati vaš prst u pravilnom položaju.</p>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/longeta3.png"/>
                <p>Pod pritiskom, kost se vraća u normalan položaj, a palac ostaje paralelan s ostalim prstima. Bol u hodu nestaje, a vaše omiljene cipele ćete moći da nosite ponovo.</p>
            </div>
            <div class="clear">
            </div>
            <div class="info-block">
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longetaProduct.png"/>
                <div class="text-info">
                    <h2>KAKO KORISTITI BUNION CORRECTOR?</h2>
                    <p>Jednostavno ga stavite na stopalo, a zatim obujte vaše cipele. Nevidljiv je u zatvorenim cipelama i sportskim patikama.</p>
                    <p>
                        <b>
                            <i>Što više vremena nosite Bunion Correct, korekcija deformacije će biti brža.</i>
                        </b>
                    </p>
                    <p>
                        <span>Jedan Bunion Corrector dovoljan je za najmanje godinu dana korišćenja.</span>
                    </p>
                </div>
                <div class="clear">
                </div>
            </div>
            <h2>RAZLIKA U DELOVANJU BUNION CORRECTORA
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
                    <p>Glomazna konstrukcija uloška ne dozvoljava korišćenje čarapa i obuće, pa se ti ulošci nose uglavnom noću, što nije dovoljno jer deformisani nožni prst i dalje većinu vremena ostaju u nepravilnom položaju.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/08.jpg"/>
                <div class="r-text">
                    <h5>Protivupalne i analgetske masti i kreme</h5>
                    <p>Imaju mogućnost da privremeno otklone upalu i bol u razvoju artritisa, ali suštinski ne rešavaju problem čukljeva i napredovanja bolesti.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/09.jpg"/>
                <div class="r-text">
                    <h5>Masaža i rehabilitacija</h5>
                    <p>One nemaju nikakav uticaj i dejstvo u lečenju čukljeva. Primenjuju se isključivo za ublažavanje bolova i upale zglobova.</p>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/') }}naturapharmFiles/longeta/10.jpg"/>
                <div class="r-text">
                    <h5>Hirurgija</h5>
                    <p>Nažalost, dugo je to bila jedina učinkovita metoda lečenja čukljeva u bilo kojoj fazi. Operacijom se uklanja izbočeni deo kosti, ali to ne sprečava da se bolest ponovi u budućnosti. Ova metoda lečenja vrlo je traumatična, bolna i dugo je vreme oporavka. Nakon operacije ostaju neugodni ožiljci na stopalima.</p>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="green">
            <div class="wrap">
                <div class="item">
                    <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longeta5.jpg"/>
                    <div class="r-text">
                        <h5>Bunion Corrector</h5>
                        <p>
                            Postavlja prst u ispravan položaj i drži ga 24 sata dnevno, pružajući značajan terapeutski učinak.
                            <br/>
                            Bolest više ne napreduje jer se telesna težina pravilno raspoređuje na stopalima, a zatvorene cipele više ne uzrokuju pomeranje palca u nepravilan položaj.
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
                    <p>Problem se pojavio pre 10 godina na fakultetu, i od tada nisam nosila cipele s visokom potpeticom jer mi se činilo kao da svi gledaju u moje ružne noge. Uz to, plašila sam se posledica i potencijalne operacije. Onda sam naišla na ovaj proizvod i kupila sam ga odmah. Nakon 4 meseca nožni prsti su mi se vratili u normalu! Sada bez problema nosim otvorene cipele sa potpeticom i uživam u tome.
                        <br/>Toplo preporučujem svima!
                    </p>
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
                        <strong>Marina, 74 godine</strong>
                    </h4>
                    <p>Bunion Corrector me je spasio! Bolovi u nogama bili su užasni, nosila sam veći broj cipela i jedva sam se kretala. Čim sam počela da ga koristim, osećala sam se puno bolje. Sada opet nosim normalne cipele i čizme.
                        <br/>Vratila sam se u život i jako sam zahvalna onima koji su smislili ovako neverovatnu stvar.
                    </p>
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
                    <p>U ranom detinjstvu lekar mi je ustanovio da imam ravna stopala. Prošle godine jednostavno nisam mogla da nosim normalne cipele i bila sam iskrivljena. Dok sam tražila rešenje, naišla sam na ortopeda koji mi preporučio Bunion Corrector. Koristim ga već dva meseca i zaboravila sam na probleme sa čukljevima. Osećam se sjajno! </p>
                </blockquote>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrap">
            <div class="head-top right">
                <h2>KAŽITE „NE“ BOLNIM I RUŽNIM PRSTIMA NA NOGAMA!</h2>
                <h3>VRATITE IM LEPOTU I ZDRAVLJE</h3>
                <img src="{{ asset('/') }}naturapharmFiles/bunioncorrector/longetaProduct.png"/>
                <br/>
                <span>ZAUSTAVLJA BOL I UPALU ZA 10 DANA</span>
                <span>EFIKASNO SPREČAVA DEFORMITET U ROKU OD 10 DANA</span>
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
                    {{--<img src="{{ $product->logo_url }}" alt="Logo" class="no-lazy">--}}
                </div>
                <div class="right-ft">Nabavi <b>Longetu za čukljeve</b> već danas!<a href="{{$checkoutView}}">KUPI ODMAH</a></div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
<script src="{{ asset('/') }}shared_files/floating_bar.js"></script>
</body>
</html>
