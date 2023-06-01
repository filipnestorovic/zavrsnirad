<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset+=utf-8"/>
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
    <style>.button-m{position:relative;display:block;width:312px;height:100px;line-height:1;padding:39px 21px;margin:0 auto;border:0;text-align:center;font-size:22px;font-weight:700;text-transform:uppercase;text-decoration:none;cursor:pointer;color:#111;background:url({{asset('/')}}flexonikFiles/ems/button.png) no-repeat 0 0 / contain;-webkit-transition:all .2s;-moz-transition:all .2s;-o-transition:all .2s;-ms-transition:all .2s;transition:all .2s;-webkit-appearance:none;-moz-appearance:none;appearance:none}.slick-prev,.slick-next{font-size:0;line-height:0;position:absolute;top:125px;display:block;width:30px;height:40px;padding:0;cursor:pointer;color:transparent;border:0;outline:0;background:#fff url({{asset('/')}}flexonikFiles/ems/sprite.png) no-repeat 7px -89px;z-index:3;border-radius:0 3px 3px 0;-webkit-border-radius:0 3px 3px 0}.top ul li:before{content:'';width:42px;height:30px;background:url({{asset('/')}}flexonikFiles/ems/icons.png) no-repeat center 0;float:left;margin:0 10px 0 0}.block1{background:url({{asset('/')}}flexonikFiles/ems/b1.jpg) no-repeat center top;color:#fff;padding:15px 0 0;margin-bottom:-120px;z-index:2}.block1 h4{font-size:23px;font-weight:700;width:347px;position:absolute;left:10px;bottom:26px;top:500px}.block1 a.button-m{margin:145px 0 0 528px}.plus li:before{content:'';width:67px;height:60px;background:url({{asset('/')}}flexonikFiles/ems/plus.png) no-repeat center 0;float:left;margin:0 10px 0 0}.logo{background:url({{asset('/')}}purplegraceFiles/abdominalmusclecream/logo.png) no-repeat 0 0 / contain;width:350px;height:64px;position:absolute;left:10px;top:0}.tovar{background:url({{asset('/')}}purplegraceFiles/abdominalmusclecream/tovar.png) no-repeat 0 0/ contain;width:374px;height:349px;position:absolute;left:10px;top:75px}.block2{padding:125px 0 20px;background:url({{asset('/')}}flexonikFiles/ems/b2.png) no-repeat center top;-webkit-background-size:cover;background-size:cover;z-index:0}.block2 .message__delivery_info{margin:0 0 0 534px;width:300px;font-size:18px;line-height:18px;color:#fff;text-align:center}.block4{background:url({{asset('/')}}flexonikFiles/ems/b3.jpg) no-repeat center top;background-size:cover;color:#fff}.ideal li:before{content:'';display:block;background:url('{{ asset('/') }}flexonikFiles/ems/sprite.png') no-repeat 0 0;width:24px;height:24px;float:left;margin:3px 10px 0 0}.block5{background:url({{asset('/')}}purplegraceFiles/abdominalmusclecream/b4.jpg) no-repeat center top;height:629px}.block6{background:url({{asset('/')}}flexonikFiles/ems/b5.png) no-repeat center center / contain;padding-bottom:40px}.what:before{content:'';display:block;background:url({{asset('/')}}purplegraceFiles/abdominalmusclecream/tovar.png) no-repeat center center/ contain;width:300px;height:275px;position:absolute;top:237px;left:50%;-moz-transform:translateX(-50%);-webkit-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.what li:before{content:'';display:block;background:url({{asset('/')}}flexonikFiles/ems/1.jpg) no-repeat 0 0;width:158px;height:158px;border-radius:100%;-webkit-border-radius:100%;margin:0 auto 10px;border:6px solid #d75417}.what li:nth-child(2):before{background-image:url({{asset('/')}}flexonikFiles/ems/2.jpg)}.what li:nth-child(3):before{background-image:url({{asset('/')}}flexonikFiles/ems/3.jpg)}.what li:nth-child(4):before{background-image:url({{asset('/')}}flexonikFiles/ems/4.jpg)}.what li:nth-child(5):before{display:none}.what li:nth-child(6):before{background-image:url({{asset('/')}}flexonikFiles/ems/5.jpg)}.what li:nth-child(7):before{background-image:url({{asset('/')}}flexonikFiles/ems/6.jpg)}.what li:nth-child(8):before{background-image:url({{asset('/')}}flexonikFiles/ems/7.jpg)}.what li:nth-child(9):before{background-image:url({{asset('/')}}flexonikFiles/ems/8.jpg)}.block7{background:url({{asset('/')}}flexonikFiles/ems/b6.jpg) no-repeat center top;background-size:cover;padding-bottom:40px}.spoiler-head{background:url({{asset('/')}}flexonikFiles/ems/sp.png) no-repeat 12px center #ebebeb;cursor:pointer;padding:12px 0 12px 65px;font-size:20px;text-transform:uppercase;font-weight:700}.spoiler-wrap.active .spoiler-head{background-image:url({{asset('/')}}flexonikFiles/ems/spact.png)}.block10{background:url({{asset('/')}}flexonikFiles/ems/b7.jpg) no-repeat center top;height:502px;padding-top:60px}.ship li:before{content:'';display:block;width:78px;height:78px;background:url({{asset('/')}}flexonikFiles/ems/ship.png) no-repeat 0 0;float:left;margin:0 20px 0 0}.block11 h2:before{content:'';display:block;background:url('{{ asset('/') }}flexonikFiles/ems/sprite.png') no-repeat 0 -41px;width:34px;height:30px;position:absolute;top:12px;left:-47px}.end{background-image:url({{asset('/')}}flexonikFiles/ems/b8.jpg);height:590px;z-index:0}.end h4{display:none}@media screen and (max-width:976px){.top ul li:before{margin:7px 10px 0 0}.plus li:before{margin:0 auto;float:none;display:block}.logo{width:291px;height:54px;top:-1px}.tovar{width:306px;height:280px;left:0}.block2{margin-top:0;padding:0;position:relative;padding:20px 0;z-index:10}.block2 .message__delivery_info{margin:0 auto}.block1{background-image:url({{asset('/')}}flexonikFiles/ems/b1m.jpg);margin-bottom:0;background-size:cover}.block1 h4{font-size:27px;width:271px;bottom:183px}.block1 a.button-m{margin:39px auto 0}.end{background-image:url({{asset('/')}}flexonikFiles/ems/bfm.jpg);height:573px}.end h4{display:block;top:395px}.end .gift{top:433px;left:186px}.block4{height:auto;background-image:url({{asset('/')}}flexonikFiles/ems/b3m.jpg);padding-bottom:30px}.block5{background-image:url({{asset('/')}}flexonikFiles/ems/b4m.jpg)}.block7{background-image:url({{asset('/')}}flexonikFiles/ems/bfm.jpg);height:auto}.block10{background-image:url({{asset('/')}}flexonikFiles/ems/b7m.jpg)}}@media screen and (max-width:659px){.logo{width:300px;height:55px;top:20px}.tovar{width:260px;height:260px;top:159px;left:26px}.block1{background-image:url({{asset('/')}}flexonikFiles/ems/b1s.jpg)}.block1 h4{position:static;font-size:29px;text-align:center;padding-top:69px}.block1 h4,.video-container,.ideal li,.ship li{width:100%}.block2{margin-top:0;background:url({{asset('/')}}flexonikFiles/ems/b2s.png) no-repeat center top;-webkit-background-size:cover;background-size:cover;position:static}.block4{background-image:url({{asset('/')}}flexonikFiles/ems/b3s.jpg);padding-bottom:20px}.block7{background-image:url({{asset('/')}}flexonikFiles/ems/bfs.jpg) center center}.spoiler-head{background:url({{asset('/')}}flexonikFiles/ems/sp.png) no-repeat 9px center #ebebeb;padding:12px 0 12px 52px;font-size:16px;line-height:20px;text-transform:none}.end{background-image:url({{asset('/')}}flexonikFiles/ems/bfs.jpg);height:872px}.what:before,.what li:nth-child(5),.block11 h2:before,.end h4{display:none}.gift,.end .gift{top:270px;left:181px}.block5,.block10{height:auto;background:#f1f1f1}}</style>
    <style>
        .block5 h3 {
            font-size: 42px;
            padding: 80px 0 0 30px;
        }
        @media screen and (max-width: 659px) {
            .block5 h3 {
                padding: 20px 0;
            }
        }
    </style>
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
                <h2>SAVRŠENI TRBUŠNJACI - DA MOGUĆE JE!</h2>
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
            <h4>ISKORISTITE SPECIJALNU AKCIJU</h4>
            <a class="button-m" href="#toform">PORUČI ODMAH</a>
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
            <h2 class="title">ABDOMINAL MUSCLE CREAM IDEALAN JE ZA SVE:</h2>
            <ul class="ideal">
                <li>
                    <p>Koji žele savršene trbušnjake</p>
                </li>
                <li>
                    <p>Koji treniraju a ne postižu efekat</p>
                </li>
                <li>
                    <p>Koji idu u teretanu i žele ubrzati sagorevanje masnoće na stomaku</p>
                </li>
                <li>
                    <p>Koji žele da imaju savršeno telo</p>
                </li>
                <li>
                    <p>Koji žele da budu privlačni i zadovljivi</p>
                </li>
                <li>
                    <p>Koji žele smršati bez mnogo napora i truda</p>
                </li>
            </ul>
            <a class="button-m" href="#toform">PORUČI ODMAH</a>
        </div>
    </section>
    <section class="block5">
        <div class="wrap">
            <h2>ŠTA JE <span>ABDOMINAL MUSCLE <br/> CREAM?</span></h2>
            <p>
                Reč je o potpuno prirodnoj i efikasnoj kremi čija se formula sastoji od aktivnih sastojaka iz prirode koji pospešuju sagorevanje masnoće i dovode do oblikovanja savršenog tela.
                Nema štetnih sastojaka, ne izaziva iritacije i kontraindikacije. Preporučuju je treneri širom sveta.
            </p>
            <h3>ABDOMINAL MUSCLE  <span> CREAM </span></h3>
        </div>
    </section>
    <section class="gallery">
        <div class="wrap">
            <div class="galleries">
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g1.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g2.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g3.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g4.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g5.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g6.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g7.jpg"/></div>
                <div><img alt="" src="{{ asset('/') }}purplegraceFiles/abdominalmusclecream/g8.jpg"/></div>
            </div>
        </div>
    </section>
    <!-- owmen17 -->
    <section class="block6">
        <div class="wrap">
            <h2 class="title">ŠTA VAM PRUŽA ABDOMINAL MUSCLE CREAM</h2>
            <ul class="what">
                <li>
                    <p>CILJANO ISTICANJE MIŠIĆNE MASE</p>
                </li>
                <li>
                    <p>TOPLJENJE MASNIH NASLAGA</p>
                </li>
                <li>
                    <p>OBLIKOVANJE SAVRŠENOG TELA</p>
                </li>
                <li>
                    <p>JAČANJE MIŠIĆA</p>
                </li>
                <li>
                    <p></p>
                </li>
                <li>
                    <p>MRŠAVLJENJE</p>
                </li>
                <li>
                    <p>IZVAJANU FIGURU</p>
                </li>
                <li>
                    <p>SMANJENJE OBIMA KUKOVA</p>
                </li>
                <li>
                    <p>SMANJENJE OBIMA STRUKA</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="block7">
        <div class="wrap">
            <h2>I SVE TO BEZ VELIKOG NAPORA,</h2>
            <h3>DOVOLJNO JE SAMO NAMAZATI KREMU I OSTAVITI DA DELUJE</h3>
            <a class="button-m" href="#toform">PORUČI ODMAH</a>
        </div>
    </section>
    <section class="block11">
        <div class="wrap">
            <h2 class="title">MIŠLJENJA NAŠIH KUPACA</h2>
            <div class="reviews">
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev1.jpg"/>
                    <h3>DARKO MARIĆ, 35 GODINA</h3>
                    <p>
                        Testirao sam ovu kremu na stomaku i kada sam se pogledao u ogledalo nakon 20 dana samo što nisam vrisnuo od sreće. Trbušni mišići su mi bili kao sa reklame. Učinak je WOW!
                        Toplo preporučujem ovu kremu!
                    </p>
                    <div class="clear"></div>
                </div>
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev2.jpg"/>
                    <h3>DUŠAN PAVIĆEVIĆ, 25 GODINA</h3>
                    <p>
                        Sveukupno, rezultat ove kreme je iznad mojih očekivanja. Nisam mogao da zamislim da je tako dobro. Kao što vidite, moje telo je doživelo transformaciju. Abdominal Muscle Cream je top stvar!
                        I bez treninga daje rezultate, ali u kombinaciji sa treningom rezultati su fenomenalni i vrhunski!
                    </p>
                    <div class="clear"></div>
                </div>
                <div>
                    <img alt="EMS-Trainer отзывы" src="{{ asset('/') }}flexonikFiles/ems/rev3.jpg"/>
                    <h3>RADMILA KRSTIĆ, 30 GODINA</h3>
                    <p>
                        Ova krema mi je privukla pažnju od samog početka, ali nisam mogla da verujem da ovako dobro deluje. Nemam vremena za teretanu, a htela sam svoje telo da dovedem u lepu formu.
                        Kada sam videla prve rezultate bila sam baš oduševljena, mišići su bili jasno definisani i mogli su da se napipaju prstom. Nisam trenirala apsolutno ništa, a rezultati su bili sve bolji i bolji.
                        U mesec dana sam izgubila 6kg i postala sam vitkija!
                    </p>
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
                <h2>SAVRŠENI TRBUŠNJACI - DA MOGUĆE JE!</h2>
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
            <h4>ISKORISTITE SPECIJALNU AKCIJU</h4>
        </div>
    </section>
    <section class="block12">
        <div class="wrap">
            <div class="message__delivery_info">PODACI ZA DOSTAVU</div>
            <br/>
            <form action="{{$orderRoute}}" class="m1-form" id="buy" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" placeholder="Ime i prezime" type="text"/>
                <input class="field only_number" name="phone" placeholder="Telefon" type="text"/>
                <input class="field" name="shipping_address" placeholder="Adresa" type="text"/>
                <input class="field" name="shipping_city" placeholder="Grad" type="text"/>
                <button type="submit" class="button-m js_pre_toform button__text">Naruči odmah</button>
                <div id="toform"></div>
            </form>
        </div>
    </section>
</div>
<div class="ac_footer" style="text-align: center; margin-top: 20px;">
    <span>&copy; {{ now()->year }} Copyright. Sva prava zadržana.</span><br>
    <p></p>
</div>
@include('components.pixel_footer')
</body>
</html>
