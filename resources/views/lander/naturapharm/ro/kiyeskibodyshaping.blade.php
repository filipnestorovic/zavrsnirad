<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,cyrillic-ext,latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=cyrillic,cyrillic-ext,latin-ext"
          rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/style-2.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/media-2.css" rel="stylesheet">
    <style>
        .sec10__part img {
            width: 240px;
        }

        @media (max-width: 991px) {
            .header .logo {
                width: 180px;
            }

            .header .logo b {
                font-size: 17px;
            }

            .header .logo:before {
                left: 180px;
            }
        }

        .sec9__container:before {
            background: url({{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png) no-repeat;
            width: 472px;
            height: 584px;
            right: -90px;
            bottom: -100px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="main__wrapper s__main">
    <div class="header">
        <div class="header__container">
            <div class="logo font-mons"><b> MODELATORUL CORPORAL KIYESKI </b></div>
            <div class="h1 font-mons" data-xd="t3"><b>Pentru un abdomen plat și atractiv!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Slăbește rapid și ușor, într-un mod
                complet natural!
            </div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Slăbește rapid și ușor</div>
            <div class="h2 only-mob font-mons" data-xd="t2">într-un mod complet natural!</div>
            <img alt class="sec1__prod only-web"
                 src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt
                                                                                          class="sec1__prod only-mob"
                                                                                          src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
            <button class="btn for_scroll"> PLASEAZĂ COMANDA</button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Slăbește cât este ziua de lungă!</div>
                <div class="h1 blue font-mons" data-xd="t2">Sistem de 24 de ore</div>
                <div class="h2 green font-mons" data-xd="t2">Scapă de depozitele de grăsime și elimină toxinele fără a
                    pierde masa musculară
                </div>
                <ul class="font-PT">
                    <li><b>Îmbunătățește</b> digestia</li>
                    <li>100% <b>natural</b></li>
                    <li><b>Accelerează</b> metabolismul chiar și atunci când te odihnești</li>
                </ul>
                <div class="kletki font-mons">
                    <span>celule de grăsime (înainte)</span><span>celule de grăsime (după)</span><img alt
                                                                                                      src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png">
                </div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"
                     width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> Rezultatele</div>
                    <div class="h2 blue font-mons" data-xd="t2">analizelor de laborator</div>
                    <p class="font-PT">Analiza de laborator a determinat că produsul conține <b class="green">substanțe
                            complet naturale care au un efect pozitiv asupra întregului organism.</b></p>
                    <p class="font-PT"><b class="green">Acestea accelerează circulația, cresc metabolismul și elimină
                            toxinele și lichidele din organism. </b> Topește rapid depozitele de grăsime și face ca
                        stomacul să fie tonifiat și plat.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Începe-ți ziua cu energie de la</span>
            <div class="h1 blue font-mons" data-xd="t2">PLASTURII KIYESKI</div>
            <div class="h2 pink font-mons" data-xd="t2">În doar câteva zile, corpul tău va fi <b>purificat, plin de
                    energie, iar greutatea va fi redusă vizibil.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod"
                                               src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod"
                                               src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">MODELATORUL CORPORAL KIYESKI ÎȚI OFERĂ ENERGIE PE
                        PARCURSUL ÎNTREGII ZILE</p>
                    <button class="btn for_scroll only-web"> PLASEAZĂ COMANDA</button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">Combinația unică de ingrediente stimulează funcționarea sănătoasă a organismului.
                        Această formulă nu provoacă efecte negative și scăderi de energie în timpul zilei. Grăsimile se
                        topesc rapid și sunt aruncate la suprafață, iar metabolismul accelerat declanșează expulzarea
                        lichidelor.
                        <b class="pink">În acest fel, balonarea este redusă, mobilitatea este mai ușoară, iar cel mai
                            important factor este pierderea în greutate și un corp tonifiat.</b></p>
                    <ul class="font-PT">
                        <li>Îmbunătățește starea organismului</li>
                        <li>Crește arderea grăsimilor</li>
                        <li>Reduce nivelul de colesterol din sânge</li>
                        <li>Reduce pofta de mâncare</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">MODELATORUL CORPORAL KIYESKI ÎȚI OFERĂ ENERGIE PE
                        PARCURSUL ÎNTREGII ZILE</p>
                    <button class="btn for_scroll only-mob"> PLASEAZĂ COMANDA</button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2"> MODELATORUL CORPORAL KIYESKI</div>
            <div class="h2 blue font-mons" data-xd="t2">Ce este atât de unic în compoziția sa?</div>
            <p class="font-PT"> Corpul tău se transformă datorită unei combinații speciale de ingrediente naturale <b
                    class="blue">care oferă energie și accelerează arderea grăsimilor</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons">Pierdere în greutate în kg</p>
                            <ul class="font-PT">
                                <li> -15</li>
                                <li> -12</li>
                                <li> -10</li>
                                <li> -5</li>
                                <li> -3</li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Luna </p>
                            <ul class="font-PT">
                                <li> 1</li>
                                <li> 2</li>
                                <li> 3</li>
                                <li> 4</li>
                                <li> 5</li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Pierdere în greutate</div>
                            <ul class="font-PT">
                                <li class="red">Diete obișnuite</li>
                                <li class="gr"> MODELATORUL CORPORAL KIYESKI</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons">Menținerea greutății în kg</p>
                            <ul class="font-PT">
                                <li> 80</li>
                                <li> 70</li>
                                <li> 60</li>
                                <li> 50</li>
                                <li> 45</li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Luna </p>
                            <ul class="font-PT">
                                <li> 1</li>
                                <li> 2</li>
                                <li> 3</li>
                                <li> 4</li>
                                <li> 5</li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons">Menținerea greutății</div>
                            <ul class="font-PT">
                                <li class="red">Diete regulate</li>
                                <li class="gr">Kiyeski modelare corporală</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> Rezultatele</div>
            <div class="h2 blue font-mons" data-xd="t2"> utilizatorilor</div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Înainte de </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> după o lună </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> după două luni </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> după trei luni </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Diana, 28 de ani</div>
                    <p class="last-p font-PT">Am luat în greutate după ce am născut. Am crezut că voi slăbi ușor, dar
                        după multe diete, tot m-am îngrășat. Mi-era mereu foame și aveam o dispoziție proastă. După ce
                        am folosit plasturii Kiyeski, am început imediat să mă simt mai bine. Aveam mai multă energie în
                        timpul zilei, eram mai puțin obosită seara, trăiam cu mai puțin stres. Ca urmare, am ajuns la
                        greutatea mea ideală în 2,5 luni. Apropo, nu am ajuns la greutatea ideală nici după un an de
                        dietă!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Pierdere rapidă în greutate în primele 2 săptămâni</div>
                <div class="h1 blue font-mons" data-xd="t2">12 KG MAI PUȚIN</div>
                <div class="h2 pink font-mons" data-xd="t2">în 2 luni</div>
                <p class="font-PT up_p"> Astfel de rezultate sunt obținute datorită combinației a doi factori - <b
                        class="blue">descompunerea grăsimilor + eliminarea toxinelor.</b></p>
                <div class="only-web"><img alt class="prod"
                                           src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod"
                                           src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">Toxinele părăsesc organismul încă din primele săptămâni de
                    tratament.</b><br> De aceea, rezultatele sunt vizibile imediat. </p>
            <p class="font-PT"> În decurs de 2 săptămâni, <b class="pink">depozitele de grăsime din straturile profunde
                    încep să se descompună, nivelul de alcalinitate revine, iar compoziția sângelui se
                    îmbunătățește. </b> Pierderea în greutate poate fi lentă din cauza procesului de restabilire a
                sănătății generale. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Recomandarea</div>
            <div class="h1 green font-mons" data-xd="t2"> specialistului</div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Violeta, <br> dietetician </p>
                </div>
                <p class="font-PT">Kiyeski Body Shaping este un produs biologic activ cu un efect de îmbunătățire
                    globală a sănătății pe care îl vor observa chiar și cei din jur. Rezultatele pozitive pot fi
                    observate și în urma unui test de sânge. Nivel scăzut de colesterol, nivel stabil de zahăr,
                    cantitate sănătoasă de proteine sunt ceea ce arată constatările pacienților mei datorită plasturilor
                    Kiyeski!</p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web"
                                              src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2"> MODELATORUL CORPORAL KIYESKI</div>
                    <div class="h2 pink font-mons" data-xd="t2">Modelează-ți corpul!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png">
                    <button class="btn for_scroll"> PLASEAZĂ COMANDA</button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Ce spun</div>
            <div class="h2 green font-mons" data-xd="t2"> clienții</div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Am auzit de Kiyeski Body Shaping acum 6 luni. Atunci cântăream 90 kg. În doar două
                    luni, am slăbit aproape 20 kg! Sunt atât de fericită! După aceea, am început să slăbesc încet. În
                    ciuda acestui fapt, acum am 62,5 kg și mă simt mai bine ca niciodată.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Maria
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Ura! Modelatorul corporal Kiyeski este ceva uimitor! Am pierdut 7 kg fără niciun
                    efort în doar o lună. Acum lucrez la abdomen.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Dorian
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Am slăbit cu ajutorul plasturilor Kiyeski de mai bine de o lună. Încetul cu încetul,
                    apetitul meu a scăzut. Am început să mă simt sătul chiar și după porții mici. Nu am ținut o dietă,
                    ci doar mi-am limitat consumul de zahăr și de paste făinoase. Ca urmare, am slăbit 12 kg. Grăsimea
                    de pe piept și stomac a dispărut. Uitați-vă la silueta mea.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Elisabeta
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Nu știu ce cred alții, dar eu sunt foarte mulțumită de acest produs. M-a ajutat cu
                    adevărat! Am pierdut 23,5 kg. Acum vreau să fac sport! În prezent, am o siluetă pe care nici măcar
                    nu mi-o puteam imagina înainte.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Alina
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING - Pentru un abdomen plat și
                        atractiv!
                    </div>
                    <div class="h1 blue font-mons" data-xd="t2"> MODELATORUL CORPORAL KIYESKI</div>
                    <div class="h2 pink font-mons" data-xd="t2">Pentru un corp perfect, fără a dăuna sănătății</div>
                    <div class="discount font-PT"> -40%</div>
                    <img alt class="prod only-web"
                         src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt
                                                                                                  class="prod only-mob"
                                                                                                  src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form"
                              method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue">INTRODUC DETALIILE DE EXPEDIERE</div>
                            <input class="inp font-mons" name="name" placeholder="Nume" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone"
                                   placeholder="Număr de telefon"
                                   type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Adresa" type="text"
                                   required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Oraș" type="text" required>
                            <select
                                class="form-content__element form-content__select change-package-selector2 form_control font-mons"
                                name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }}
                                        ({{ $singlePrice['amount'] }} {{ $prices[1]['currency'] }})
                                    </option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift"
                                     id="{{ $singlePrice['quantity'] }}"
                                     @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }}
                                    x {{ $product->product_name }} <br><strike
                                        class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }}
                                        {{ $prices[1]['currency'] }} </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $prices[1]['currency'] }}
                                    <br> @if($singlePrice['is_free_shipping'])
                                        + LIVRARE GRATUITA
                                    @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text">COMANDĂ ACUM</button>
                            <div class></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}natureteaFiles/slimonex1/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
