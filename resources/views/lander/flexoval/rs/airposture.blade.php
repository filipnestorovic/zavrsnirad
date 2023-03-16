<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="telephone=no" name="format-detection">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/doctorback/favicon.ico">
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/doctorback/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/doctorback/reset.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/doctorback/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/doctorback/style.css">
    <script src="{{ asset('/') }}flexovalFiles/doctorback/jquery.min.js"></script>
</head>
<body>
@include('components.display_errors')
<section class="base banner">
    <div class="container main_title">
        <h1 class="h1">INOVATIVNI <br class="mobileRow">KOREKTOR DRŽANJA<br><span>AIR <span>POSTURE</span></span></h1>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>100% stabilizacija opterećenja kičme</li>
            <li>Položaj leđa je pravilan i prirodan</li>
            <li>Hronična bol nestaje</li>
        </ul>
        <div class=smart_inner>
            <div class="sale">
                <p>popust</p>
                <p>-40<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>Put do zdravog tela</p>
            <div class="sale_block">
                <div class="count">
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                                <span class="price">{{ $prices[1]['originalPrice'] }}<small> RSD</small></span>
                            </div>
                            <div class="new_price">
                                <span class="price">{{ $prices[1]['amount'] }}<small> RSD</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container how_text" style="background-color: white;">
                    <a href="{{$checkoutView}}" class="btn">PORUČI ODMAH</a>
                </div>
            </div>
        </div>
{{--        <div class="backline">--}}
{{--            <img src="{{ asset('/') }}flexovalFiles/doctorback/backline.png">--}}
{{--        </div>--}}
    </div>
</section>
<section class="base show">
    <h2 class="titles"><span class="orange">INOVATIVNA METODA</span> KOREKCIJE DRŽANJA</h2>
    <p class="container">Korektor držanja <b>Air Posture</b> je najnoviji izum. Najbolji svetski ortopedi učestvovali su u njegovom razvoju.</p>
    <div class="container show_slider">
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s1.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s2.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s3.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s4.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s5.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/doctorback/s6.jpg"></div>
    </div>
</section>
<section class="base problems">
    <h2 class="titles white"><span class="orange">Air Posture</span> ĆE ZAUVEK REŠITI PROBLEME SA LEĐIMA</h2>
    <div class="container problems_inner" >
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/doctorback/p1.jpg"></div>
            <p>Bol u leđima</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/doctorback/p2.jpg"></div>
            <p>Loše držanje</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/doctorback/p3.jpg"></div>
            <p>Konstantan umor</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/doctorback/p4.jpg"></div>
            <p>Opterećenje zbog viška kilograma</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/doctorback/p5.jpg"></div>
            <p>Nedovoljno vremena za trening</p>
        </div>
    </div>
</section>
<section class="base how">
    <div class="container">
        <h2 class="titles"><span class="blue">KAKO DELUJE</span> VAZDUŠNI KOREKTOR DRŽANJA <span class="blue">AIR POSTURE?</span></h2>
        <div class="container how_inner">
            <div class="how_item">
                <img src="{{ asset('/') }}flexovalFiles/doctorback/m1.png">
                <h3>BEZ POMOĆI STRUČNJAKA</h3>
                <p>držanje će biti korigovano, a kičma biti u pravilnom položaju</p>
            </div>
            <div class="how_item">
                <img src="{{ asset('/') }}flexovalFiles/doctorback/m2.png">
                <h3>ISPRAVLJANJE <br>KIČME</h3>
                <p>zahvaljujući kaiševima koji povlače ramena unazad</p>
            </div>
            <div class="how_item">
                <img src="{{ asset('/') }}flexovalFiles/doctorback/m3.png">
                <h3>VAZDUŠNI DŽEP</h3>
                <p>stvaraju snažno prijanjanje lumbalnom delu, poboljšava cirkulaciju i tonira mišiće leđa</p>
            </div>
            <div class="how_item">
                <img src="{{ asset('/') }}flexovalFiles/doctorback/m4.png">
                <h3>LAKO <br>PODESIV</h3>
                <p>Zahvaljujući njegovom dizajnu I vazdušnoj pumpici lako podesiv za sve oblike tela</p>
            </div>
        </div>
        <div class="container how_text">
            <p>Momentalno vraća kičmu u prirodan položaj i ispravlja ramena i leđa. Proizvod se može nositi celi dan i potpuno je nevidljiv ispod odeće.</p>
            <a href="{{$checkoutView}}" class="btn">PORUČI ODMAH</a>
        </div>
    </div>
</section>
<section class="base how2">
    <h2 class="titles white">KAKO KORISTITI <br><span class="orange">AIR POSTURE KOREKTOR DRŽANJA TELA</span></h2>
    <p class="container"><b>Air Posture</b> ne samo da pomaže u ispravljanju leđa, već i ublažava bolove, uklanja upale i obnavlja nervni i kardiovaskularni sistem. Podesivi čičak pomaže da se korektor postavi na telo čvrsto i udobno, bez smanjenja pokretljivosti.</p>
    <div class="container how2_inner">
        <div class="how2_item">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/how1.png">
            <p>Navucite trake korektora preko ramena</p>
        </div>
        <div class="how2_item">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/how2.png">
            <p>Stegnite lumbalni deo udobnim elastičnim čičak trakama</p>
        </div>
        <div class="how2_item">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/how3.png">
            <p>Ostvarite sjajne rezultate, i dovedite leđa i kičmu u pravilan položaj</p>
        </div>
    </div>
</section>
<section class="base why">
    <h2 class="titles"><span class="blue">PREDNOSTI</span> VAZDUŠNOG KOREKTORA DRŽANJA <br><span class="blue">AIR POSTURE</span></h2>
    <div class="container why_inner">
        <table>
            <thead>
            <tr>
                <th><p></p></th>
                <th><p>Air Posture</p></th>
                <th><p>Fizička <br>vežba</p></th>
                <th><p>Ostali <br>korektori držanja</p></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jednostavnost <br>upotrebe</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
            </tr>
            <tr>
                <td>Ušteda <br>vremena</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
            </tr>
            <tr>
                <td>Brzina <br>rezultata</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
            </tr>
            <tr>
                <td>Lekoviti <br>efekat</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
            </tr>
            <tr>
                <td>Može se koristiti <br>tokom rada</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
            </tr>
            <tr>
                <td>Inovativni <br>aktivni magneti</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
            </tr>
            <tr>
                <td>Kvalitetni <br>materijali</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
            </tr>
            <tr>
                <td>Pristupačna cena</td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/check_g.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/doctorback/cross.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="base expert">
    <div class="container expert_inner">
        <h2 class="titles white">MIŠLJENJE <span class="orange">STRUKE</span></h2>
        <div class="expert_text">
            <p>Držanje tela podrazumeva uobičajeno držanje osobe koja stoji mirno. Uz pravilno držanje tela, svi delovi tela smešteni su simetrično u odnosu na kičmu, ramena su raširena, glava je malo podignuta, ruke i noge su ravne i ispružene, a stomak je uvučen. Kod velikog broja ljudi držanje nije pravilno, a ono negativno utiče na rad celog organizma, ne samo mišića leđa i vrata.</p>
            <p>Većina korektora držanja funkcioniše na principu ukrućenja i jako su neprijatni. Fiksiraju figuru i daju telu određeni stav, ograničavajući kretanje. Princip <b>Air Posture</b> korektora je drugačiji. Ne utiče direktno na kičmu i jača mišiće leđa koji sami daju telu prirodan položaj. Zahvaljujući tom principu je znatno efikasniji u poređenju sa ostalim korektorima.</p>
            <p><b>Air Posture</b> pomogao je mnogima čiji su problemi bili uzrokovani konstantnim lošim držanjem. Primetili su velika poboljšanja u svom zdravlju, nisu se više manifestovali bolovi u leđima i ustanovljeno je veliko popravljanje samog držanja. Preporučuje se upotreba ovog korektora u kombinaciji sa dodatnim vežbama i masažom, što vrlo brzo dovodi do dobrih rezultata.</p>
        </div>
    </div>
</section>
<section class="base feedback">
    <h2 class="titles"><span class="orange">UTISCI </span> ONIH KOJI SU VEĆ PROBALI <span class="orange">AIR POSTURE</span></h2>
    <div class="feedback_slider">
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/doctorback/f1.jpg"></div>
            <div class="comment">
                <h4>Davor Sikima, 70 godina</h4>
                <p>Nedavno su me počela boleti leđa, imao sam užasne bolove. Pio sam lekove i dok su oni delovali nisam imao bolove. Čim prestane dejstvo, bolovi su se vraćali. Otišao sam kiropraktičaru i ustanovio je da mi problem pravi loše držanje zbog viška kilograma. Preporučio mi je Air Posture korektor držanja i ja sam ga poručio preko interneta. Nosim ga već 20 dana i mogu vam reći da mi je dosta bolje. Prva 2-3 dana mi je bilo neobično, ali sam se brzo navikao. Odličan je i mogu svakome da ga preporučim.</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/doctorback/f2.jpg"></div>
            <div class="comment">
                <h4>Aleksandar Pavlović, 31 godina</h4>
                <p>Za leđa mi puno pomaže, prestao sam da imam bolove pri sedenju. Air Posture je udoban, drži mi leđa pravim i ne osetim da ga nosim. Konačno hodam pravih leđa. Sve preporuke, odličan proizvod!</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/doctorback/f3.jpg"></div>
            <div class="comment">
                <h4>Vera Kapuran, 64 godine</h4>
                <p>Ja sam penzioner i problemi s leđima pojavili su mi se pre skoro 10 godina. Celu karijeru sam radila u kancelariji, i mnogo sam sedela. Bolovi u leđima su me stalno pratili i imala sam velike probleme. Doktor, koji je inače bio moj školski drug preporučio mi je da koristim ovaj steznik, ali se nije mogao kupiti u Srbiji tada. Poslao mi ga je brat iz Nemačke, i osetila sam poboljšanje već nakon 15 dana nošenja. Sada kada sam videla ovu reklamu, kupila sam još 2 za slučaj da nestane ponovo, jer ga je zaista teško nabaviti.</p>
            </div>
        </div>
    </div>
</section>
<section class="base simple_steps">
    <h2 class="titles white">3 JEDNOSTAVNA KORAKA DA PORUČITE <br><span class="black">Air Posture</span></h2>
    <div class="container steps">
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/step1.png" alt="картинка">
            <p>Popunite formu podacima za dostavu</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/step2.png" alt="картинка">
            <p>Potvrdićemo vašu porudžbinu</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/doctorback/step3.png" alt="картинка">
            <p>Pošiljku plaćate <br>pouzećem</p>
        </div>
    </div>
</section>
<div class="base action">
    <div class="action_item">
        <p>
            <span>ROBA SE ISPORUČUJE<br class="br1"></span>
            <span class="color1">BILO GDE U ZEMLJI<br></span>
            <span>U ROKU OD 1-2 RADNA DANA</span>
        </p>
        <p>
            <span>BEZ PLAĆANJA UNAPRED<br class="br2"></span>
            <span class="color1"><br class="br3">ROBU PLAĆATE<br class="br4"></span>
            <span>TEK </span><span class="color2"><br class="br6">NAKON PREUZIMANJA</span>
        </p>
        <p>
            <span>UKOLIKO NE BUDETE <br>ZADOVOLJNI </span>
            <span class="color1"><br class="br5">VRATIĆEMO VAM <br class="br1"> NOVAC U NAJKRAĆEM ROKU</span>
        </p>
    </div>
</div>
<section class="base banner bottom_block">
    <div class="container main_title">
        <h3 class="h1">INOVATIVNI <br class="mobileRow"> VAZDUŠNI KOREKTOR DRŽANJA <br><span>Air <span>Posture</span></span></h3>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>100% stabilizacija opterećenja kičme</li>
            <li>Položaj leđa je pravilan i prirodan</li>
            <li>Hronična bol nestaje</li>
        </ul>
        <div class=smart_inner>
            <div class="sale">
                <p>popust</p>
                <p>-40<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>Put do zdravog tela</p>
            <div class="sale_block">
                <div class="count">
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                                <span class="price">{{ $prices[1]['originalPrice'] }}<small> RSD</small></span>
                            </div>
                            <div class="new_price">
                                <span class="price">{{ $prices[1]['amount'] }}<small> RSD</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container how_text" style="background-color: white;">
                    <a href="{{$checkoutView}}" class="btn">PORUČI ODMAH</a>
                </div>
            </div>
        </div>
{{--        <div class="backline">--}}
{{--            <img src="{{ asset('/') }}flexovalFiles/doctorback/backline.png">--}}
{{--        </div>--}}
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/doctorback/jquery.min.js"></script>
<script src="{{ asset('/') }}flexovalFiles/doctorback/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexovalFiles/doctorback/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
