<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset+=utf-8" />
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="width=device-width" name="viewport"/>
    <link href="{{ asset('/') }}flexonikFiles/ems/favicon.ico" rel="shortcut icon"/>
    <link href="{{ asset('/') }}flexonikFiles/ems/settings.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}flexonikFiles/ems/slick.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}flexonikFiles/ems/style.css" rel="stylesheet"/>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}flexonikFiles/ems/slick.js"></script>
    <script src="{{ asset('/') }}flexonikFiles/ems/main.js"></script>
    <style>.ac_footer{position:relative;text-align:center;overflow:hidden;padding:20px 0;color:#A12000;font-size:16px}.ac_footer a{color:#A12000}.ac_footer p{text-align:center}img[height="1"],img[width="1"]{display:none!important}.button-m{position:relative;display:block;width:312px;height:100px;line-height:1;padding:39px 21px;margin:0 auto;border:none;text-align:center;font-size:22px;font-weight:700;text-transform:uppercase;text-decoration:none;cursor:pointer;color:#111;background:url({{asset('/')}}flexonikFiles/ems/button.png) no-repeat 0 0 / contain;-webkit-transition:all 0.2s;-moz-transition:all 0.2s;-o-transition:all 0.2s;-ms-transition:all 0.2s;transition:all 0.2s;-webkit-appearance:none;-moz-appearance:none;appearance:none}.slick-prev,.slick-next{font-size:0;line-height:0;position:absolute;top:125px;display:block;width:30px;height:40px;padding:0;cursor:pointer;color:transparent;border:none;outline:none;background:#fff url({{asset('/')}}flexonikFiles/ems/sprite.png) no-repeat 7px -89px;z-index:3;border-radius:0 3px 3px 0;-webkit-border-radius:0 3px 3px 0}.top ul li:before{content:'';width:42px;height:30px;background:url({{asset('/')}}flexonikFiles/ems/icons.png) no-repeat center 0;float:left;margin:0 10px 0 0}.block1{background:url({{asset('/')}}flexonikFiles/ems/b1.jpg) no-repeat center top;color:#fff;padding:15px 0 0;margin-bottom:-120px;z-index:2}.block1 h4{font-size:23px;font-weight:700;width:347px;position:absolute;left:10px;bottom:26px;top:500px}.block1 a.button-m{margin:145px 0 0 528px}.plus li:before{content:'';width:67px;height:60px;background:url({{asset('/')}}flexonikFiles/ems/plus.png) no-repeat center 0;float:left;margin:0 10px 0 0}.logo{background:url({{asset('/')}}flexonikFiles/ems/logo.png) no-repeat 0 0 / contain;width:350px;height:64px;position:absolute;left:10px;top:0}.tovar{background:url({{asset('/')}}flexonikFiles/ems/tovar.png) no-repeat 0 0/ contain;width:374px;height:349px;position:absolute;left:10px;top:75px}.block2{padding:125px 0 20px;background:url({{asset('/')}}flexonikFiles/ems/b2.png) no-repeat center top;-webkit-background-size:cover;background-size:cover;z-index:0}.block2 .message__delivery_info{margin:0 0 0 534px;width:300px;font-size:18px;line-height:18px;color:#fff;text-align:center}.block4{background:url({{asset('/')}}flexonikFiles/ems/b3.jpg) no-repeat center top;background-size:cover;color:#fff}.ideal li:before{content:'';display:block;background:url('{{ asset('/') }}flexonikFiles/ems/sprite.png') no-repeat 0 0;width:24px;height:24px;float:left;margin:3px 10px 0 0}.block5{background:url({{asset('/')}}flexonikFiles/ems/b4.jpg) no-repeat center top;height:629px}.block6{background:url({{asset('/')}}flexonikFiles/ems/b5.png) no-repeat center center / contain;padding-bottom:40px}.what:before{content:'';display:block;background:url({{asset('/')}}flexonikFiles/ems/tovar.png) no-repeat center center/ contain;width:300px;height:275px;position:absolute;top:237px;left:50%;-moz-transform:translateX(-50%);-webkit-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.what li:before{content:'';display:block;background:url({{asset('/')}}flexonikFiles/ems/1.jpg) no-repeat 0 0;width:158px;height:158px;border-radius:100%;-webkit-border-radius:100%;margin:0 auto 10px;border:6px solid #d75417}.what li:nth-child(2):before{background-image:url({{asset('/')}}flexonikFiles/ems/2.jpg)}.what li:nth-child(3):before{background-image:url({{asset('/')}}flexonikFiles/ems/3.jpg)}.what li:nth-child(4):before{background-image:url({{asset('/')}}flexonikFiles/ems/4.jpg)}.what li:nth-child(5):before{display:none}.what li:nth-child(6):before{background-image:url({{asset('/')}}flexonikFiles/ems/5.jpg)}.what li:nth-child(7):before{background-image:url({{asset('/')}}flexonikFiles/ems/6.jpg)}.what li:nth-child(8):before{background-image:url({{asset('/')}}flexonikFiles/ems/7.jpg)}.what li:nth-child(9):before{background-image:url({{asset('/')}}flexonikFiles/ems/8.jpg)}.block7{background:url({{asset('/')}}flexonikFiles/ems/b6.jpg) no-repeat center top;background-size:cover;padding-bottom:40px}.spoiler-head{background:url({{asset('/')}}flexonikFiles/ems/sp.png) no-repeat 12px center #ebebeb;cursor:pointer;padding:12px 0 12px 65px;font-size:20px;text-transform:uppercase;font-weight:700}.spoiler-wrap.active .spoiler-head{background-image:url({{asset('/')}}flexonikFiles/ems/spact.png)}.block10{background:url({{asset('/')}}flexonikFiles/ems/b7.jpg) no-repeat center top;height:502px;padding-top:60px}.ship li:before{content:'';display:block;width:78px;height:78px;background:url({{asset('/')}}flexonikFiles/ems/ship.png) no-repeat 0 0;float:left;margin:0 20px 0 0}.block11 h2:before{content:'';display:block;background:url('{{ asset('/') }}flexonikFiles/ems/sprite.png') no-repeat 0 -41px;width:34px;height:30px;position:absolute;top:12px;left:-47px}.end{background-image:url({{asset('/')}}flexonikFiles/ems/b8.jpg);height:590px;z-index:0}.end h4{display:none}@media screen and (max-width:976px){.top ul li:before{margin:7px 10px 0 0}.plus li:before{margin:0 auto;float:none;display:block}.logo{width:291px;height:54px;top:-1px}.tovar{width:306px;height:280px;left:0}.block2{margin-top:0;padding:0;position:relative;padding:20px 0;z-index:10}.block2 .message__delivery_info{margin:0 auto}.block1{background-image:url({{asset('/')}}flexonikFiles/ems/b1m.jpg);margin-bottom:0;background-size:cover}.block1 h4{font-size:27px;width:271px;bottom:183px}.block1 a.button-m{margin:39px auto 0}.end{background-image:url({{asset('/')}}flexonikFiles/ems/bfm.jpg);height:573px}.end h4{display:block;top:395px}.end .gift{top:433px;left:186px}.block4{height:auto;background-image:url({{asset('/')}}flexonikFiles/ems/b3m.jpg);padding-bottom:30px}.block5{background-image:url({{asset('/')}}flexonikFiles/ems/b4m.jpg)}.block7{background-image:url({{asset('/')}}flexonikFiles/ems/bfm.jpg);height:auto}.block10{background-image:url({{asset('/')}}flexonikFiles/ems/b7m.jpg)}}@media screen and (max-width:659px){.logo{width:300px;height:55px;top:20px}.tovar{width:260px;height:260px;top:159px;left:26px}.block1{background-image:url({{asset('/')}}flexonikFiles/ems/b1s.jpg)}.block1 h4{position:static;font-size:29px;text-align:center;padding-top:69px}.block1 h4,.video-container,.ideal li,.ship li{width:100%}.block2{margin-top:0;background:url({{asset('/')}}flexonikFiles/ems/b2s.png) no-repeat center top;-webkit-background-size:cover;background-size:cover;position:static}.block4{background-image:url({{asset('/')}}flexonikFiles/ems/b3s.jpg);padding-bottom:20px}.block7{background-image:url({{asset('/')}}flexonikFiles/ems/bfs.jpg) center center}.spoiler-head{background:url({{asset('/')}}flexonikFiles/ems/sp.png) no-repeat 9px center #ebebeb;padding:12px 0 12px 52px;font-size:16px;line-height:20px;text-transform:none}.end{background-image:url({{asset('/')}}flexonikFiles/ems/bfs.jpg);height:872px}.what:before,.what li:nth-child(5),.block11 h2:before,.end h4{display:none}.gift,.end .gift{top:270px;left:181px}.block5,.block10{height:auto;background:#f1f1f1}}</style>
</head>
<body>
<div class="s__main">
    @include('components.display_errors')
    <section class="top">
        <div class="wrap">
            <ul>
                <li>
                    <p><b>100% garantovan rezultat</b></p>
                </li>
                <li>
                    <p><b>Američka tehnologija</b></p>
                </li>
                <li>
                    <p><b>Odobreno od strane udruženja trenera</b></p>
                </li>
            </ul>
        </div>
    </section>
    <section class="block1">
        <div class="wrap">
            <div class="logo"></div>
            <div class="tovar"></div>
            <div class="righttop">
                <h2>EFIKASAN TRENING MIŠIĆA</h2>
                <ul class="plus">
                    <li>
                        <p><span> SAGOREVA </span> MASTI </p>
                    </li>
                    <li>
                        <p><span> TRENIRA </span> MIŠIĆE </p>
                    </li>
                    <li>
                        <p><span> OBLIKUJE </span> TELO </p>
                    </li>
                </ul>
                <div class="price clearfix">
                    <div class="old-cost ">{{ $prices[1]['originalPrice'] }} RSD</div>
                    <div class="new-cost ">{{ $prices[1]['amount'] }} RSD</div>
                    <div class="action"> Popust <p> {{ $discount != null ? "-".(40+$discount)."%" : "-40%" }} </p>
                    </div>
                </div>
            </div>
            <h4>TRENIRAJTE BEZ NAPORA</h4>
            <a class="button-m" href="{{$checkoutView}}">PORUČI ODMAH</a>
        </div>
    </section>
    <!-- michael-k90 -->
    <section class="block2">
        <div class="wrap">
            <div class="message__delivery_info"></div>
        </div>
    </section>
    <!-- bizlife_inc -->
    <section class="block4">
        <div class="wrap">
            <h2 class="title">EMS TRENAŽER IDEALAN JE ZA SVE:</h2>
            <ul class="ideal">
                <li>
                    <p>Koji nemaju vremena i energije za trening u teretani</p>
                </li>
                <li>
                    <p>Koji žele da imaju oblikovane mišiće, ali su lenji da treniraju</p>
                </li>
                <li>
                    <p>Koji imaju fizički neaktivan način života, a žele da aktiviraju svoje mišiće</p>
                </li>
                <li>
                    <p>Koji žele smršati bez mnogo napora</p>
                </li>
                <li>
                    <p>Koji idu u teretanu i žele pojačati efekat</p>
                </li>
                <li>
                    <p>Koji žele da imaju savršeno telo bez mnogo truda</p>
                </li>
            </ul>
            <a class="button-m" href="{{$checkoutView}}">PORUČI ODMAH</a>
        </div>
    </section>
    <section class="block5">
        <div class="wrap">
            <h2> ŠTA JE <span> EMS TRENAŽER? </span></h2>
            <p>Skraćenica EMS znači električna mišićna stimulacija, pa se EMS trening zasniva na radu mišića koji se pokreću električnim impulsima.
                Drugim rečima, umesto vežbanja i sportske opreme, mišići se stimulišu i treniraju strujom.
                Veliki broj istraživanja potvrđuje učinkovitost i apsolutnu sigurnost EMS trenažera.</p>
            <h3> EMS trenažer <span> – FITNESS BUDUĆNOSTI! </span></h3>
        </div>
    </section>
    <section class="gallery">
        <div class="wrap">
            <div class="galleries">
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g1.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g2.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g3.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g4.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g5.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g6.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g7.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}flexonikFiles/ems/g8.jpg"/></div>
            </div>
        </div>
    </section>
    <!-- owmen17 -->
    <section class="block6">
        <div class="wrap">
            <h2 class="title">ŠTA VAM PRUŽA EMS TRENAŽER</h2>
            <ul class="what">
                <li>
                    <p>Ciljani rast mišićne mase</p>
                </li>
                <li>
                    <p>Topljenje masnih naslaga</p>
                </li>
                <li>
                    <p>Oblikovanje savršenog tela</p>
                </li>
                <li>
                    <p>Jačanje mišića</p>
                </li>
                <li>
                    <p></p>
                </li>
                <li>
                    <p>Mršavljenje</p>
                </li>
                <li>
                    <p>Trbušnjaci, noge i zadnjica postaju čvršći</p>
                </li>
                <li>
                    <p>Smanjenje obima kukova</p>
                </li>
                <li>
                    <p>Smanjenje obima struka</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="block7">
        <div class="wrap">
            <h2>I SVE TO BEZ NAPUŠTANJA KUĆE I BEZ NAPORA,</h2>
            <h3> ZA PAR MINUTA DNEVNO!</h3>
            <a class="button-m" href="{{$checkoutView}}">PORUČI ODMAH</a>
        </div>
    </section>
    <section class="block9">
        <div class="wrap">
            <h2 class="title">ČESTO POSTAVLJANA PITANJA</h2>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">KAKAV OSEĆAJ IZAZIVA EMS TRENAŽER?</div>
                <div class="spoiler-body">Efekat koji pravi EMS trenažer je jednak efektu koji se postiže napornim treningom.
                    Neki naši kupci kažu da za vreme korišćenja EMS trenažera osećaju blage trnce i naprezanje mišića koje upoređuju sa
                    jakim i ugodnim mlazom vode koji udara u mišiće.</div>
            </div>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">MOGU LI SMRŠATI POMOĆU EMS-A?</div>
                <div class="spoiler-body">Da. Ali trebali biste znati da vam treba malo strpljenja, najmanje 4-6 nedelja treninga
                    (zavisno o fizičkim karakteristikama, genetici, ishrani), jer EMS pomaže telu pre svega u rastu mišićne mase.
                    Povećanje mišićne mase pojačava proces sagorevanja masti, jer mišići počinju trošiti veću količinu energije (čak i u mirovanju).
                    Drugim rečima, "mršavite čak i tokom spavanja". Regulišite svoju ishranu i uz pomož EMS trenažera dobićete fantastične rezultate.</div>
            </div>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">MOGU LI POVEĆATI MIŠIĆNU MASU POMOĆU EMS-A?</div>
                <div class="spoiler-body">Naravno, to će se definitivno dogoditi! Rast mišića glavni je cilj EMS treninga.
                    Način rada: vaš mozak pokreće mišiće zbog bioelektričnih impulsa. Tokom EMS treninga te impulse trenažer isporučuje umesto mozga.</div>
            </div>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">KADA MOGU VIDETI PRVE REZULTATE?</div>
                <div class="spoiler-body">Morate znati da vam treba malo strpljenja, najmanje 4-6 nedelja treninga.
                    Povećanje mišićne mase pojačava proces sagorevanja masti, jer mišići počinju trošiti veću količinu energije (čak i u mirovanju).
                    Drugim rečima, "mršavite čak i tokom spavanja", i uz pomoć EMS-a dobićete sjajne rezultate mršavljenja.</div>
            </div>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">I MOGU LI ŽENE BRZO POVEĆATI SVOJU MIŠIĆNU MASU?</div>
                <div class="spoiler-body">Zbog fizioloških razloga i niskog nivoa testosterona, žene ne mogu dobiti toliko mišićne mase kao muškarci
                    koji se bave body buildingom. Bez obzira koliko trenirali s EMS-om, on vam neće učiniti mišiće nogu i ruku velikim.
                    Ženski se mišići više razvijaju u „dužinu“, a to se delovanje može uporediti s vežbama istezanja za jačanje.
                    Uz pomoć EMS treninga, žene će imati snažne mišiće i smanjiti sloj masti. Na taj način žene postižu seksi, lepu i zavidnu figuru.</div>
            </div>
            <div class="spoiler-wrap disabled">
                <div class="spoiler-head">JE LI EMS UČINKOVIT ZA CELULIT?</div>
                <div class="spoiler-body">Da. To potvrđuju i naši kupci. EMS istovremeno trenira sve mišiće, puno intenzivnije nego kada radite teške vežbe.
                    Sagoreva se masnoća, povećava se mišićna masa, jača vezivno tkivo, pojačava se metabolizam i izdržljivost tela.
                    Koža postaje elastičnija i smanjuje se celulit.</div>
            </div>
        </div>
    </section>
    <section class="block11">
        <div class="wrap">
            <h2 class="title">MIŠLJENJA NAŠIH KUPACA</h2>
            <div class="reviews">
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev1.jpg"/>
                    <h3>DARKO MARIĆ, 35 GODINA</h3>
                    <p>Testirao sam ga na bicepsu. Čim sam aktivirao trenažer, bio sam šokiran, samo što nisam vrisnuo.
                        Ruka se sama podigla, biceps se stegao i počeo se kretati u ritmu koji sam mu zadao na trenažeru.
                        Učinak je odmah nakon treninga bio vidljiv. Odličan rezultat za kratko vreme.</p>
                    <div class="clear"></div>
                </div>
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev2.jpg"/>
                    <h3>DUŠAN PAVIĆEVIĆ, 25 GODINA</h3>
                    <p>Sveukupno, efekat trenažera je iznad mojih očekivanja. Nisam mogao ni da zamislim da je tako dobro.
                        Mišići se skupljaju i „rade“ bez vaše pomoći. Ovaj uređaj je odličan!
                        Ako vreme provodite sedeći i ležeći, vaši mišići neće biti aktivni i počeće da atrofiraju.
                        Evo sigurnog načina da ih pokrenete sa EMS trenažerom!</p>
                    <div class="clear"></div>
                </div>
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev3.jpg"/>
                    <h3>RADMILA KRSTIĆ, 30 GODINA</h3>
                    <p>EMS trenažer privukao mi je pažnju od samog početka, ali nisam mogla da verujem da ovako dobro deluje.
                        Nemam vremena za teretanu, a htela sam svoje telo dovesti u savršenu formu.
                        Kad sam ga prvi put uključila, bila sam šokirana. Mišići su se sami stezali.
                        Nisam radila apsolutno ništa, a oni su nakon svakog treninga bili sve bolji i bolji.
                        U mesec dana sam izgubila 6 kg i postala sam vitkija!</p>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="block1 end">
        <div class="wrap">
            <div class="logo"></div>
            <div class="tovar"></div>
            <div class="righttop">
                <h2>EFIKASAN TRENING MIŠIĆA</h2>
                <ul class="plus">
                    <li>
                        <p><span> SAGOREVA </span> MASTI </p>
                    </li>
                    <li>
                        <p><span> TRENIRA </span> MIŠIĆE </p>
                    </li>
                    <li>
                        <p><span> OBLIKUJE </span> TELO </p>
                    </li>
                </ul>
                <div class="price clearfix">
                    <div class="old-cost ">{{ $prices[1]['originalPrice'] }} RSD</div>
                    <div class="new-cost ">{{ $prices[1]['amount'] }} RSD</div>
                    <div class="action"> Popust <p> {{ $discount != null ? "-".(40+$discount)."%" : "-40%" }} </p>
                    </div>
                </div>
            </div>
            <h4>TRENIRAJTE BEZ NAPORA</h4>
        </div>
    </section>
    <section class="block12">
        <div class="wrap">
            <a class="button-m" href="{{$checkoutView}}">PORUČI ODMAH</a>
        </div>
    </section>
</div>

<div class="ac_footer">
    <span>&copy; {{ now()->year }} Copyright. Sva prava zadržana.</span><br>
    <p></p>
</div>
@include('components.pixel_footer')
</body>
</html>