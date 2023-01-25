<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/hairmachine/favicon2c560.png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/hairmachine/styled4261.css">
    <style>
        @font-face {
            font-family:'Bebas Neue Regular';
            src: url('{{ asset('/') }}fonts/Bebas_Neue_Regular_Regular8c61b.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Bebas_Neue_Regular_Regulared965.html') format('woff'),
            url('{{ asset('/') }}fonts/Bebas_Neue_Regular_Regular50c06.html') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0451;
        }
        @font-face {
            font-family:'Bebas Neue Bold';
            src: url('{{ asset('/') }}fonts/Bebas_Neue_Bold_Regular3e996.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Bebas_Neue_Bold_Regularb70c4.html') format('woff'),
            url('{{ asset('/') }}fonts/Bebas_Neue_Bold_Regular9d8af.html') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0451;
        }
    </style>
    <script>
        function dtime_nums(d) {
            let now = new Date();
            now.setDate(now.getDate() + d);
            let mm = now.getMonth() + 1;
            let day = now.getDate();
            if (now.getDate() < 10) day = '0' + now.getDate();
            if (mm < 10) mm = '0' + mm;
            document.write(day + "." + mm + "." + now.getFullYear());
        }
    </script>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <div style="
            color: #ffd600;
            background: #373a41;
            padding: 25px 0;
            text-align: center;
            font-size: 31px;
            text-transform: uppercase;
            font-family: 'Bebas Neue Bold';
            ">
        HAIR MACHINE
    </div>
    <section class="b1">
        <div class="block1-pod"></div>
        <div class="sale1">
            Akcija!
            <p>-40%</p>
            popusta
        </div>
    </section>
    <div class="price clearfix">
        <div class="old-cost">
               <span>
                  {{ $prices[1]['originalPrice'] }}
                  {{ $prices[1]['currency'] }}
               </span>
        </div>
        <div class="new-cost">
            {{ $prices[1]['amount'] }}
            {{ $prices[1]['currency'] }}
        </div>
    </div>
    <p style="text-align: center;font-weight: bold">Pletenice ili dredovi za samo par sekundi</p>
    <br>
    <a href="#buy" class="button-m">PORUČI SA 40% POPUSTA</a>
    <section class="b2">
        <h2 class="title">BRZO <span> I EFIKASNO</span></h2>
        <picture>
            <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/led2e1d6e.jpg">
        </picture>
        <p style="text-align: center;"><b>Jednostavno za korišćenje</b></p>
        <p>Lako se rukuje, potrebno je samo ubaciti kosu u uređaj i pritisnuti dugme. Pletenice će se brzo i nežno isplesti za samo dve sekunde.</p>
        <p style="text-align: center;"><b>Inteligentni uređaj</b></p>
        <p>Uređaj poseduje indukcioni senzor koji sprečava da se kosa zaglava, što ga čini potpuno bezbednim za upotrebu.</p>
        <p style="text-align: center;"><b>Pletenice u boji</b></p>
        <p>U paketu dobijate 3 različita konca zahvaljujući kome dobijate šarene pletenice. Vaši mališani će potpuno biti oduševljeni ovim uređajem.</p>
        <br>
{{--        <video style="display:block;" autoplay="" loop="" muted="" playsinline=""--}}
{{--               src="{{ asset('/') }}purplerelaxFiles/hairmachine/ledvideofd034.mp4" class="product"></video>--}}
    </section>
    <section class="b3">
        <h2 class="title">OBRADUJTE VAŠE NAJMLAĐE,<span> A ZAŠTO DA NE I SEBE</span></h2>
        <picture>
            <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/led336059.jpg">
        </picture>
        <br>
        <picture>
            <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/led336055.jpg">
        </picture>
        <br>
        <h2 class="title">NAJPRODAVANIJI PROIZVOD <span> MEĐU TINEJDŽERIMA U EVROPI</span></h2>
        <picture>
            <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/led336051.jpg">
        </picture>
        <br>
        <br>
        <p class="center"><b>Karakteristike</b></p>
        <br>
        <li class="tab3"><b>Materijal: plastika</b></li>
        <li class="tab3"><b>Napajanje: 2 x AA baterije</b></li>
        <li class="tab3"><b>Brzina pravljenja pletenica: 2 sekunde</b></li>
        <li class="tab3"><b>Predviđeni uzrast: 6 i više godina</b></li>
        <ul class="plus">
            <li>
                <p>PROVERENO</p>
            </li>
            <li>
                <p>EFIKASNO</p>
            </li>
            <li>
                <p>UNIVERZALNO</p>
            </li>
        </ul>
        <a href="#buy" class="button-m">PORUČI SA 40% POPUSTA</a>
    </section>
    <section class="b5">
        <h2 class="title">KAKO <span> PORUČITI?</span></h2>
        <ul class="ship">
            <li>
                <span></span>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <span></span>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <span></span>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <span></span>
                <p>Plaćate po pouzeću</p>
            </li>
        </ul>
    </section>
    <section class="b6">
        <h2 class="title">UTISCI <span>KUPACA</span></h2>
        <div font-family="tahoma" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 iIuMwG"
             style="background: rgb(255, 255, 255); padding: 0 20px;">
            <div class="Box-jgrcqq-0 Flex-sc-4bijj7-0 ksTSWJ">
                <div width="100%" class="Box-jgrcqq-0 Flex-sc-4bijj7-0 bpgmEB">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/rev2460fe.jpg" width="30px" height="30px" class="Box-jgrcqq-0 Image-cz8wc4-0 hhFvJt">
                    <div class="Box-jgrcqq-0 ggLknz">
                        <div style="position:relative" class="Box-jgrcqq-0 Card-wapdpa-0 eWitUL">
                            <span color="#2b588f" font-size="12" font-weight="bold" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 TextBold-otlfxb-0 gKpCSo">Elena Jovanović</span>
                            <span style="position:relative" font-size="12" color="#000000" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 degbuh">
                                Kupila sam ovaj uređaj svojoj kćerci, moram da vam priznam da je potpuno oduševljena!
                                Nikada nije bila srećnija, svi u razredu su se oduševili njenim pletenicama.
                           </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Box-jgrcqq-0 Flex-sc-4bijj7-0 ksTSWJ">
                <div width="100%" class="Box-jgrcqq-0 Flex-sc-4bijj7-0 bpgmEB">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/rev18663f.jpg" width="30px" height="30px" class="Box-jgrcqq-0 Image-cz8wc4-0 hhFvJt">
                    <div class="Box-jgrcqq-0 ggLknz">
                        <div style="position:relative" class="Box-jgrcqq-0 Card-wapdpa-0 eWitUL">
                            <span color="#2b588f" font-size="12" font-weight="bold" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 TextBold-otlfxb-0 gKpCSo">Mihajlo Čodić</span>
                            <span style="position:relative" font-size="12" color="#000000" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 degbuh">
                                Kupio sam kćerki za rođendan, ali ga je moja žena prisvojila. Šta da vam kažem, potpuno je podetinjila.
                                Svaki dan mota pletenice, ne znam šta da kažem na to. :)
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Box-jgrcqq-0 Flex-sc-4bijj7-0 ksTSWJ">
                <div width="100%" class="Box-jgrcqq-0 Flex-sc-4bijj7-0 bpgmEB">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairmachine/rev3555f4.jpg" width="30px" height="30px" class="Box-jgrcqq-0 Image-cz8wc4-0 hhFvJt">
                    <div class="Box-jgrcqq-0 ggLknz">
                        <div style="position:relative" class="Box-jgrcqq-0 Card-wapdpa-0 eWitUL">
                            <span color="#2b588f" font-size="12" font-weight="bold" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 TextBold-otlfxb-0 gKpCSo">Natalija Popović</span>
                            <span style="position:relative" font-size="12" color="#000000" class="Box-jgrcqq-0 Text-sc-1y0d3e1-0 degbuh">
                                Ovo je odlična stvar. Moje blizanke imaju novu zanimaciju, glavne su u društvu.
                                Po ceo dan devojčice dolaze kod nas u stan i prave dredove i pletenice. Deca su se načisto zaljubila u ovo.
                                Šarene se, ali ruku na srce slatke su i lepo im stoji.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b7">
        <h2>ISKORISTITE <span>POPUST</span></h2>
    </section>
    <section class="b1 end">
        <div class="block1-pod"></div>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popusta
        </div>
    </section>
    <section class="b8">
        <div class="price clearfix" style="top:0px">
            <div class="old-cost">
                  <span>
                     {{ $prices[1]['originalPrice'] }}
                     {{ $prices[1]['currency'] }}
                  </span>
            </div>
            <div class="new-cost">
                {{ $prices[1]['amount'] }}
                {{ $prices[1]['currency'] }}
            </div>
        </div>
        <br>
        <p style="text-align: center; color:white;">
            Unesite podatke za dostavu
        </p>
        <br>
        <form id="buy" class="m1-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div>
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required="">
                <input class="field" name="phone" type="tel" placeholder="Telefon" required="">
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required="">
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required="">
                <button class="button-m button-submit">PORUČITE SADA</button>
            </div>
        </form>
        <br>
        <picture>
        </picture>
    </section>
</div>
<script src="{{ asset('/') }}purplerelaxFiles/hairmachine/main5fe73.js"></script>
@include('components.pixel_footer')
</body>
</html>
