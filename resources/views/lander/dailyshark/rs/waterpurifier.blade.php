<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="{{ asset('/') }}dailysharkFiles/waterpurifier/app.css">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/waterpurifier/4.png" type="image/x-icon">
</head>
<body>
<div class="out">
    @include('components.display_errors')
    <div class="b-fixed">
        <div class="in">
            <div class="content">
                <div class="left">
                    <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/1.png" alt="">
                </div>
                <div class="right">
                    <a href="#form2" class="btn">Poručite sada</a>
                </div>
            </div>
        </div>
    </div>
    <div class="b1">
        <div class="in">
            <div class="left">
                <p class="ts">Predstavljamo vam <span>WATER PURIFIER prečišćivač vode</span></p>
                <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/2.png" alt="">
            </div>
            <div class="form_wrap">
                <div id="form1" class="form_block">
                    <span class="sp white">Požurite da poručite odmah sa <span class="adfh-discount">40%</span> popusta!</span>
                    <span class="sp white">AKCIJA SAMO DANAS</span>
                    <span class="sp white old-price">
                        Redovna cena:
                        <b class="price_old14920">
                           {{ $prices[1]['originalPrice'] }}
                        </b>
                        <b class="price_currency">{{ $prices[1]['currency'] }}</b>
                     </span>
                    <span class="sp new-price">
                        Cena na akciji:
                        <br/>
                        <b class="price_only14920">
                           {{ $prices[1]['amount'] }}
                        </b>
                        <b class="price_currency">{{ $prices[1]['currency'] }}</b>
                     </span>
                    <div id="form-wrapper1" class="form form-wrapper">
                        <form class="form orderformcdn" action="{{$orderRoute}}" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="form-name name fio" name="name" type="text" placeholder="Ime i prezime" required="">
                            <input class="form-phone phone tel" name="phone" id="phone" placeholder="Telefon" required="" type="tel">
                            <button type="submit" class="button-m" >Poručite sada</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b2">
        <div class="in">
            <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/13.png" alt="">
            <div class="block">
                <div class="img active">
                    <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/3.png" alt="">
                    <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/4.png" alt="" style="max-width: 370px;">
                </div>
                <div class="text">
                    <p>
                        Iako voda iz slavine izgleda čisto, može da sadrži opasne štetne materije kao što su olovo i hlor.
                        WATER FAUCET prečišćava vodu od štetnih zagađivača i mikroba, ostavljajući joj korisne minerale koji su od vitalnog
                        značaja za vaše zdravlje.
                        <br>
                        Ovaj filter može ukloniti nečistoće, teške metale hlor, smanjiti kamenac, poboljšati kvalitet vode, poboljšati ukus
                        i pomoći vam da vodite zdraviji život.
                    </p>
                    <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/3.png" class="hidden" alt="">
                    <p><strong>Filter obezbeđuje dve faze čišćenja:</strong><br><br>
                        <strong>Prva faza</strong> - uklanja prljavštinu, bakterije, hlor i organske materijale
                    </p>
                    <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/4.png" class="hidden" alt="">
                    <p><strong>Druga faza</strong> - Nanočestice unutar filtera uklanjaju hemikalije, teške metale i kamenac.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="b3">
        <div class="in">
            <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/6.png" alt="">
        </div>
    </div>
    <div class="b4">
        <div class="in">
            <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/7.png" alt="">
            <ul>
                <li><strong>Karakteristike</strong>:</li>
                <li>1- Male dimenzije</li>
                <li>2- Lako se instalira</li>
                <li>3- Unutrašnji filter se lako čisti</li>
            </ul>
        </div>
    </div>
    <div class="b5">
        <div class="in">
            <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/8.png" alt="">
            <p>Preporučeni vek trajanja filtera je 10 meseci. Filter se može cistiti više puta i potrebno ga je očistiti jednom mesečno finim brusnim papirom (šmirglom).
                <br>Nemojte koristiti deterdžent.</p>
        </div>
    </div>
    <div class="reviews">
        <div class="in">
            <div class="reviews__caption">UTISCI KUPACA</div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}dailysharkFiles/waterpurifier/rev1.png" alt=""></div>
                <div class="reviews__text">
                    <p>Prvo, sviđa mi se činjenica da ima nekoliko slojeva filtriranja. Uklanja sve teške metale iz vode koji najčešće izazivaju razne bolesti.
                        Lako se postavlja, voda ima lepši ukus, i najbolje mi je što se filter pere.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}dailysharkFiles/waterpurifier/rev2.png" alt=""></div>
                <div class="reviews__text">
                    <p>Zaista mi se sviđa ovaj prečišćivač vode, odlično radi. Dizajn je odličan i savršeno se slaže sa našom slavinom.
                        Testirali smo ga i rezultati su neverovatni. Prokuvana voda koja je nasuta preko ovog filtera ne ostavja tragove kamenca na šerpi.</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}dailysharkFiles/waterpurifier/rev3.png" alt=""></div>
                <div class="reviews__text">
                    <p>Pročitao sam mnogo recenzija o različitim filterima i na kraju sam morao da zatvorim oči i izaberem jedan.
                        Izabrao sam Water Purifier i nisam pogrešio. Odličnog je kvaliteta i mnogo je jeftiniji u poređenju sa drugim filterima.
                        Stvarno funkcioniše. Toplo preporučujem!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="in">
            <div class="left">
                <p class="ts">Univerzalni nastavci za sve tipove česmi</p>
                <img src="{{ asset('/') }}dailysharkFiles/waterpurifier/12.png" alt="">
            </div>
            <div class="form_wrap">
                <div id="form2" class="form_block">
                    <span class="sp white">Požurite da poručite odmah sa <span class="adfh-discount">40%</span> popusta!</span>
                    <span class="sp white">AKCIJA SAMO DANAS</span>
                    <span class="sp white free_del"></span>
                    <span class="sp white old-price">
                        Redovna cena:
                        <b class="price_old14920">
                           {{ $prices[1]['originalPrice'] }}
                        </b>
                        <b class="price_currency">{{ $prices[1]['currency'] }}</b>
                     </span>
                    <span class="sp new-price">
                        Cena na akciji:
                        <br/>
                        <b class="price_only14920">
                           {{ $prices[1]['amount'] }}
                        </b>
                        <b class="price_currency">{{ $prices[1]['currency'] }}</b>
                     </span>
                    <div id="form-wrapper2" class="form form-wrapper">
                        <form class="form orderformcdn" action="{{$orderRoute}}" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="form-name name fio" name="name" placeholder="Ime i prezime" type="text" required="">
                            <input class="form-phone phone tel" name="phone" id="phone2" placeholder="Telefon" required="" type="tel">
                            <button type="submit" class="form-btn btn button-m" >Poručite sada</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
