<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href=""/>
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/cleanvision/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/cleanvision/mobile.css">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <style>@font-face{font-family:OpenSans;font-style:normal;font-weight:700;src:url("{{asset('/')}}fonts/OpenSans-Boldd41d.eot@#iefix") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans-Bold.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans-Bold.ttf") format("truetype")}@font-face{font-family:OpenSansExtraBold;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/OpenSans-Boldd41d.eot@#iefix") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans-Bold.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans-Bold.ttf") format("truetype")}@font-face{font-family:OpenSansLight;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/OpenSansd41d.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans.ttf") format("truetype")}@font-face{font-family:Roboto;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/roboto-regular.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/roboto-regular.woff") format("woff"),url("{{asset('/')}}fonts/roboto-regular.ttf") format("truetype")}@font-face{font-family:Roboto;font-style:normal;font-weight:700;src:url("{{asset('/')}}fonts/roboto-bold.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/robotobold.woff") format("woff"),url("{{asset('/')}}fonts/robotobold.ttf") format("truetype")}</style>
    <style>
        .headerProduct {
            width: 400px;
        }
        .block5Product {
            width: 400px;
            margin: 60px 0 0 100px;
        }
        .block6Product {
            width: 250px;
        }
        .block11Product {
            width: 220px;
            margin: 20px 0 0 120px;
        }
        .owl-carousel.off {
            display: block;
        }
        @media (min-width: 576px) {
            .only_mobile {
                display: none !important;
            }
            .hb-right {
                margin-top: -40px;
            }
        }
    </style>
</head>
<body>
<div class="js__countryblock">
    <div class="header">
        <div class="wrapper">
            <div class="header-top">
                <div class="ht-left">
                    <h2 class="lt0"> <span>REŠENJE ZA</span> OČUVANJE I POPRAVLJANJE VIDA</h2>
                </div>
                <div class="ht-right">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-1.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-2.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-3.png">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom">
                <div class="hb-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="headerProduct"></div>
                <div class="hb-center">
                    <ul>
                        <li class="lt1">Ublažava napetost <br>i bol u očima</li>
                        <li class="lt2">Odlično utiče <br>na poboljšanje vida</li>
                        <li class="lt3">Sprečava <br>razvoj očnih bolesti</li>
                    </ul>
                    <p class="promo lt4">AKO PORUČITE SADA, ODOBRAVA SE <br>
                        <span class="sale">POPUST OD 40%!</span> </p>
                    <div class="price">
                        <p class="price_old">
                            {{ $prices[1]['originalPrice'] }}<span> RSD</span>
                        </p>
                        <p class="price_main">
                            {{ $prices[1]['amount'] }}<span> RSD</span>
                        </p>
                    </div>
                </div>
                <div class="hb-right">
                    <div class="timer-wrap">
                        <p class="lt5">Unesite podatke za dostavu:</p>
                        {{--<div class="landing__countdown"></div>--}}
                    </div>
                    <form action="{{$orderRoute}}" method="post" class="order_form cpa__order_form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <label class="lt7" for="name">Ime i prezime</label>
                        <input id="name" name="name" required="" type="text">
                        <label class="lt8" for="phone">Telefon</label>
                        <input id="phone" name="phone" required="" type="tel">
                        <label class="lt9" for="shipping_address">Adresa</label>
                        <input id="shipping_address" name="shipping_address" required="" type="text">
                        <label class="lt10" for="shipping_city">Grad</label>
                        <input id="shipping_city" name="shipping_city" required="" type="text">
                        <input type="submit" value="PORUČI ODMAH">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="block-2">
        <div class="wrapper">
            <div class="b2-left">
                <h2><span class="str-1 lt10">U LJUDSKOM ŽIVOTNOM VEKU</span><br>
                    <span class="str-2 lt11">VID SE POGORŠAVA </span><br>
                    <span class="str-3 lt12">SVAKIM DANOM!</span>
                </h2>
                <p class="lt13">Glavni uslov za normalan vid - <span>je elastičnost sočiva oka</span>. Nažalost, ova sposobnost je oslabljena pod uticajem <span>mnogih faktora</span>:</p>
                <ul>
                    <li><span class="lt14">Starost</span></li>
                    <li class="lt15"> <span>Previše </span> gledanja u računar i telefon</li>
                    <li class="lt16"> <span>Razni patološki procesi </span> (najčešće upala)</li>
                    <li><span class="lt17">Nedovoljno snabdevanje krvlju</span></li>
                    <li class="lt18"> <span>Slabost </span> mišića oka</li>
                </ul>
            </div>
            <div class="b2-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b2-image.png"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-3">
        <div class="wrapper">
            <div class="b3-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b3-image.png"></div>
            <div class="b3-right">
                <h2><span class="str-1 lt19">GLAVNI UZROK</span><br>
                    <span class="str-2 lt20">POREMEĆAJA VIDA</span><br>
                    <span class="str-3 lt21">SU OČNI MIŠIĆI!</span>
                </h2>
                <ul>
                    <li class="lt22"><span>Mišići fokusiraju oči</span> tako da se slike koje prolaze kroz očno sočivo projektuju na mrežnjaču.</li>
                    <li class="lt23"><span>Poremećaji u ravnoteži mišićnog rada</span> uzrokuju nedovoljnu ili prekomernu kompresiju očne jabučice.</li>
                    <li class="lt24"><span>"Objektiv" oka se deformiše</span>, fokus je izobličen, slika je zamućena.</li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="cta-button"><a href="#bottom_form">Poruči sada</a></div>
        </div>
    </div>
    <div class="block-4">
        <div class="wrapper">
            <div class="b4-left">
                <div class="b4l-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/alert-2.png"></div>
                <div class="b4l-right">
                    <h2><span class="str-1 lt25">SOČIVA I NAOČARE</span><br>
                        <span class="str-2 lt26">NEĆE POMOĆI</span><br>
                    </h2>
                </div>
                <div class="clearfix"></div>
                <p class="lt27">Opuštaju mišiće oka, što uzrokuje još veću deformaciju <br/>i samo pogoršava problem</p>
            </div>
            <div class="b4-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b4-image.png"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-5">
        <div class="wrapper">
            <div class="b5-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block5Product"></div>
            <div class="b5-right">
                <h2><span class="str-1 lt28">Vitamix za oči </span><br>
                    <span class="str-2 lt29">NAJBOLJE REŠENJE</span><br>
                    <span class="str-3 lt30">ZA POBOLJŠANJE I OČUVANJE VIDA</span>
                </h2>
                <p class="lt31"><span>Vitamix</span> - je biogeni kompleks prirodnih ekstrakata koji ciljano utiču na poboljšanje vida i eliminisanje najčešćih bolesti oka.</p>
                <p class="lt32">Hrani mišiće oka i reguliše rad očne jabučice, što pomaže vraćanju normalnog fokusa i jasnog vida.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-6">
        <div class="wrapper">
            <div class="b6-left">
                <ul>
                    <li class="lt33"><span>Ublažava upale</span>, napetost, suvoću i iritaciju</li>
                    <li class="lt34"><span>Poboljšava oštrinu vida</span> i jača pokretljivost oka</li>
                    <li class="lt35"><span>Stimuliše nervne sinapse</span> koje pružaju jasan vid</li>
                    <li class="lt36"><span>Poboljšavaju sposobnost mišića</span> da reaguju na promenljiva opterećenja, ublažava i sprečava hipertenziju</li>
                    <li class="lt37"><span>Obezbeđuje</span> pravilno fokusiranje</li>
                    <li class="lt38"><span>Poboljšava</span> kapilarni protok krvi</li>
                    <li class="lt39"><span>Eliminiše rizik</span> od opasnih očnih bolesti</li>
                    <li class="lt40"><span>Normalizuje</span> pritisak očnog dna</li>
                </ul>
            </div>
            <div class="b6-right">
                <h2 class="lt41">TEHNOLOGIJA ZA JAČANJE <span> OČNIH MIŠIĆA</span> </h2>
                <p class="lt42">Mišići <span>postaju napeti ili oslabljeni</span> i <span>prestaju pokretati</span> očnu jabučicu</p>
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block6Product">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-7">
        <div class="wrapper">
            <h2 class="lt43">KADA JE POTREBAN <span>VITAMIX?</span></h2>
            <div class="b7-top">
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-1.png">
                    <p class="lt44"><span>Slab vid</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-2.png">
                    <p class="lt45">Slabi <span>očni mišići</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-3.png">
                    <p class="lt46">Često <span>peckanje i crvene oči</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-4.png">
                    <p class="lt47">Potreba za <span>nošenjem sočiva ili naočara</span></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="b7-bottom">
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-5.png">
                    <p class="lt48"><span>Glavobolje i migrene</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-6.png">
                    <p class="lt49"><span>Zamor očiju</span> tokom rada</p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-7.png">
                    <p class="lt50"><span>Genetska predispozicija</span> za loš vid</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="owl-carousel only_mobile">
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-1.png">
                    <p class="lt44"><span>Slab vid</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-2.png">
                    <p class="lt45">Slabi <span>očni mišići</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-3.png">
                    <p class="lt46">Često <span>peckanje i crvene oči</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-4.png">
                    <p class="lt47">Potreba za <span>nošenjem sočiva ili naočara</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-5.png">
                    <p class="lt48"><span>Glavobolje i migrene</span></p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-6.png">
                    <p class="lt49"><span>Zamor očiju</span> tokom rada</p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-7.png">
                    <p class="lt50"><span>Genetska predispozicija</span> za loš vid</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    {{--<div class="block-8">--}}
        {{--<div class="wrapper">--}}
            {{--<div class="b8-left">--}}
                {{--<h2 class="lt51">Was haben Studien gezeigt?</h2>--}}
                {{--<ul>--}}
                    {{--<li class="lt52">In 99% von 100 Fällen <span>konnte das Sehvermögen vollständig wiederhergestellt--}}
                        {{--werden</span>--}}
                    {{--</li>--}}
                    {{--<li class="lt53">Es wurde eine bessere Arbeit aller Körpersysteme festgestellt, die <span> ein einwandfreies--}}
                        {{--Funktionieren des Sehapparates gewährleisten </span>--}}
                    {{--</li>--}}
                    {{--<li class="lt54">In 9 von 10 Fällen <span>musste keine Operation mehr</span> zur Wiederherstellung des--}}
                        {{--Sehvermögens durchgeführt werden--}}
                    {{--</li>--}}
                    {{--<li class="lt55">In 10 von 10 Fällen - <span>gab es keine Nebenwirkungen</span> </li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="b8-right">--}}
                {{--<img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/graphic.png">--}}
                {{--<p class="lt56">35.000 Freiwillige nahmen an klinischen Studien des Medikaments Teil. <span>Sie alle hatten--}}
                     {{--Sehstörungen, die durch übermäßige Belastung der Augen oder Augenerkrankungen verursacht wurden.</span>--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="block-9">
        <div class="wrapper">
            <div class="b9-left">
                <div style="text-align: center;"><span class="lt57"></span><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/doctor.png">
                </div>
            </div>
            <div class="b9-right">
                <h2 class="lt58">MIŠLJENJE STRUKE</h2>
                <p class="lt59">Poslednjih godina, broj ljudi sa gubitkom vida povećan je <span>za 18 puta</span>. Mnogi pacijenti u tražili da im prepišemo sočiva i naočare, iako ne razumeju da takva mera <span>dodatno pogoršava situaciju</span>.</p>
                <p class="lt60">Danas postoji mogućnost poboljšanja stanja uz pomoć suplemenata. U tu svrhu je kreiran preparat <span>VITAMIX</span>. Preporučujem ga svakom pacijentu i u 99% slučajeva dobijemo <span>osetno poboljšanje</span>.</p>
                <p class="lt61">Sastav leka uključuje <span>posebno odabrane komponente</span> koje vraćaju <span>pravilno funkcionisanje očnih mišića</span> koji su glavni faktor dobrog vida.</p>
                <p class="lt62">Ova vrsta terapije daje <span>pouzdan rezultat u najkraćem mogućem roku</span>.</p>
            </div>
            <div class="clearfix"></div>
            <div class="cta-button"><a href="#bottom_form">Poruči sada</a></div>
        </div>
    </div>
    <div class="block-10">
        <div class="wrapper">
            <h2 class="lt63">UTISCI NAŠIH KUPACA</h2>
            <div class="owl-carousel">
                <div class="client">
                    <div class="head">
                        <div class="client-info">
                            <img src="{{ asset('/') }}naturapharmFiles/cleanvision/human-1.png">
                            <p class="name lt64">Ema Tomić,</p>
                            <p class="city lt65">Beograd, 31 godina</p>
                        </div>
                    </div>
                    <p class="text lt66">Vid mi se pogoršao pre nekoliko godina. U početku nisam obraćala pažnju sve dok na desno oko nisam skoro potpuno prestala da vidim. Ja sam pijanista i naravno da mi je mnogo lakše svirati po notama
                        nego po osećaju. Naočare i kontaktna sočiva mi nisu pomogli jer me je posle toga bolela glava. Obratila sam se lekaru koji mi je preporučio VITAMIX. Naravno, nisam verovala ali sam na kraju odlučila da probam.
                        Posle 2 meseca, osetila sam da mi se vid značajno poboljšao. Na sledećem lekarskom pregledu pokazalo se da mi je dioptija minus jedan. Doktor mi se nasmešio i rekao da smo napravili ogroman napredak.
                        Srećna sam i nastaviću da koristim VITAMIX.</p>
                </div>
                <div class="client">
                    <div class="head">
                        <div class="client-info">
                            <img src="{{ asset('/') }}naturapharmFiles/cleanvision/human-2.jpg">
                            <p class="name lt67">Goran Petrović,</p>
                            <p class="city lt68">Novi Sad, 36 godina</p>
                        </div>
                    </div>
                    <p class="text lt69">Radim kao programer u jednoj domaćoj kompaniji. Većinu vremena provodim ispred monitora, zbog čega mi je oslabio vid i imao sam stalnu glavobolju. Tada sam odlučio da stavim tačku na sve, uzeo sam dvonedeljni odmor
                        i poručio VITAMIX. Odmarao sam, jeo sveže voće i povrće, i radio vežbe za oči. Bio sam fasciniran rezultatom! Sada sve vidim još bolje nego dok sam bio student. Odličan preparat, sve preporuke!</p>
                </div>
                <div class="client">
                    <div class="head">
                        <div class="client-info">
                            <img src="{{ asset('/') }}naturapharmFiles/cleanvision/human-3.png">
                            <p class="name lt70">Suzana Filipović,</p>
                            <p class="city lt71">Badovinci, 51 godina</p>
                        </div>
                    </div>
                    <p class="text lt72">Za Vitamix sam saznala u bolnici. Doktori su razgovarali o ovom preparatu pa sam odlučila da ga probam i pokušam. Zbog dugogodišnjeg rada kao šnajderka i naprezanja očiju, vid mi je znatno oslabio, a imala sam i problem sa mrežnjačom.
                        Vitamix mi je pomogao i sa sigurnošću mogu da kažem da može da se koristi za sve probleme sa očima. Sada vidim mnogo bolje, čak mogu videte i sitne detalje u daljini što je pre bilo nemoguće. </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-11">
        <div class="wrapper">
            <div class="b11-left">
                <div class="alert">
                    <h3 class="lt73">ČUVAJTE SE FALSIFIKATA <span>VITAMIXA</span></h3>
                    <p class="lt74">Da biste izbegli falsifikovane i nekvalitetne proizvode, <span>kupujte samo originalni proizvod na ovom sajtu</span>.</p>
                </div>
                <p class="quality lt75">100% KVALITET</p>
            </div>
            <div class="b11-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block11Product"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-12">
        <div class="wrapper">
            <h2 class="lt76">DA LI ŽELITE DA PORUČITE VITAMIX?</h2>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-1.png">
                <p class="lt77">Unesite podatke za dostavu na našem sajtu</p>
                <img alt="" class="arrow" src="{{ asset('/') }}naturapharmFiles/cleanvision/arrow.png">
            </div>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-2.png">
                <p class="lt78">Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                <img alt="" class="arrow" src="{{ asset('/') }}naturapharmFiles/cleanvision/arrow.png">
            </div>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-3.png">
                <p class="lt79">Nema plaćanja unapred, pošiljku plaćate kuriru po pouzeću</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header">
        <div class="wrapper">
            <div class="header-top">
                <div class="ht-left">
                    <h2 class="lt80"> <span>REŠENJE ZA</span> OČUVANJE I POPRAVLJANJE VIDA</h2>
                </div>
                <div class="ht-right">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-1.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-2.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-3.png">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom">
                <div class="hb-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="headerProduct"></div>
                <div class="hb-center">
                    <ul>
                        <li class="lt81">Ublažava napetost <br>i bol u očima</li>
                        <li class="lt82">Odlično utiče <br>na poboljšanje vida</li>
                        <li class="lt83">Sprečava <br>razvoj očnih bolesti</li>
                    </ul>
                    <p class="promo lt84">AKO PORUČITE SADA, ODOBRAVA SE <br>
                        <span class="sale">POPUST OD 40%!</span></p>
                    <div class="price">
                        <p class="price_old">
                            {{ $prices[1]['originalPrice'] }}<span> RSD</span>
                        </p>
                        <p class="price_main">
                            {{ $prices[1]['amount'] }}
                            <span> RSD</span>
                        </p>
                    </div>
                </div>
                <div class="hb-right">
                    <div class="timer-wrap">
                        <p class="lt85">Unesite podatke za dostavu:</p>
                        <div class="landing__countdown"></div>
                    </div>
                    <form action="{{$orderRoute}}" method="post" class="order_form cpa__order_form" id="bottom_form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <label class="lt87" for="name">Ime i prezime</label>
                        <input id="name" name="name" required="" type="text">
                        <label class="lt88" for="phone">Telefon</label>
                        <input id="phone" name="phone" required="" type="tel">
                        <label class="lt89" for="shipping_address">Adresa</label>
                        <input id="shipping_address" name="shipping_address" required="" type="text">
                        <label class="lt810" for="shipping_city">Grad</label>
                        <input id="shipping_city" name="shipping_city" required="" type="text">
                        <input type="submit" value="PORUČI ODMAH">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(function() {
            var owl = $('.owl-carousel');

            owlOptions = {
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: false,
                items: 1
            };

            if ( $(window).width() < 768 ) {
                var owlActive = owl.owlCarousel(owlOptions);
            } else {
                owl.addClass('off');
            }

            $(window).resize(function() {
                if ( $(window).width() < 768 ) {
                    if ( $('.owl-carousel').hasClass('off') ) {
                        var owlActive = owl.owlCarousel(owlOptions);
                        owl.removeClass('off');
                    }
                } else {
                    if ( !$('.owl-carousel').hasClass('off') ) {
                        owl.addClass('off').trigger('destroy.owl.carousel');
                        owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
                    }
                }
            });
        });
    });
</script>
</body>
</html>

