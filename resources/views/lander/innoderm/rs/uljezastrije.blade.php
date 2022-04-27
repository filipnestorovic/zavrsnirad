<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}innodermFiles/kremazacelulit/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}innodermFiles/kremazacelulit/style.css">
    <style>
        @media screen and (min-width: 1199px) {
            section.end {
                background: url('{{ asset('/') }}innodermFiles/uljezastrije/footer.png') no-repeat;
                background-position: right center;
                min-height: 609px;
                padding: 0;
            }
        }
    </style>
</head>
<body class="home">
<div class="wrapper">
    @include('components.display_errors')
    <div class="menu-overlay"></div>
    <header class="header scroll" id="header">
        <div class="container">
            <div class="row align-items-center vertical-align-center">
                <div class="col-md-3 col-sm-7 col-6">
                    <a href="#">
                        <img src="{{ asset('/') }}innodermFiles/uljezastrije/logo.png" class="cellulite-logo" />
                    </a>
                </div>
                <nav class="col-md-7 col-3">
                    <ul class="list-unstyled list">
                        <li class="nav-el"><a href="#effectiveness" class="about">Efikasnost</a></li>
                        <li class="nav-el"><a href="#how-to-fight" class="how-to-fight">O celulitu</a></li>
                        <li class="nav-el"><a href="#testimonials" class="testimonials">Recenzije</a></li>
                        <li class="nav-el"><a href="#faq" class="faq">FAQ</a></li>
                        <li class="nav-el"><b><a href="{{$checkoutView}}" class="order">Poručite odmah</a></b></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="top">
        <section class="first pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <h1 class="text-uppercase">ULJE PROTIV STRIJA PO INOVATIVNOJ FORMULI</h1>
                        <ul class="list-unstyled list">
                            <li>Vidljivo smanjenje strija</li>
                            <li>Čvrsta i glatka koža</li>
                            <li>Dobra hidratacija</li>
                            <li>Manji obim</li>
                            <li>Klinički potvrđeni rezultati</li>
                            <li>Prirodan i siguran sastav</li>
                        </ul>
                        <p>Sanfe ulje je brz i efikasan način za borbu protiv strija. Ovaj problem muči većinu žena, ali se konačno pojavilo efikasno rešenje.
                            Ako sanjate o lepom i glatkom telu bez strija, onda je ovaj proizvod baš za vas!</p>
                        <div class="btn-container mt-4 mt-lg-5">
                            <a href="{{$checkoutView}}" class="btn" id="slm-btn">PORUČITE ODMAH SA 40% POPUSTA</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mobile-bg">
                        <picture>
                            <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" type="image/png" class="">
                            <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" alt="" class="packshot">
                        </picture>
                    </div>
                </div>
                <picture>
                    <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" type="image/png" class="">
                    <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" alt="" class="packshot">
                </picture>
            </div>
        </section>
        <section class="what-is-cellulite">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <h3>Šta su strije i kako da ih se rešim?</h3>
                        <p>Strije su višestruki problem koji ima oko 80% žena. Strije su disfunkcija kože i ove promene se obično nazivaju efektom "ispresecane kože".
                            Nepravilne pukotine su uglavnom vidljive na butinama, stomaku ili zadnjici. Ove nesavršenosti su veoma neestetske, međutim možete ih se efikasno rešiti. </p>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-md-4 skin-types text-center text-md-left">
                        <div class="row">
                            <div class="col-6">
                                <span class="normal-skin">Normalna koža</span>
                            </div>
                            <div class="col-6">
                                <span class="cellulite">Strije</span>
                            </div>
                        </div>
                        <picture>
                            <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/cellulite-02.png" type="image/png" class="">
                            <img src="{{ asset('/') }}innodermFiles/kremazacelulit/cellulite-02.png" alt="" class="">
                        </picture>
                    </div>
                    <div class="col-md-4 text-center text-md-left pt-4 pt-md-0">
                        <picture>
                            <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/cellulite-01.png" type="image/png" class="">
                            <img src="{{ asset('/') }}innodermFiles/uljezastrije/cellulite-01.png" alt="" class="">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <picture>
            <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-02.png" type="image/png" class="">
            <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-02.png" alt="" class="packshot-cellulite">
        </picture>
    </section>
    <section class="effectiveness" id="effectiveness">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/cellulie-3.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/cellulie-3.png" alt="" class="d-block mx-auto">
                    </picture>
                </div>
                <div class="col-md-6 content">
                    <h3 class="pt-5 pt-md-0">Klinički <br class="d-block d-md-none"/>potvrđena efikasnost</h3>
                    <p>Sanfe ulje protiv strija je napravljeno za žensko telo kako bi pomoglo zatezanju kože. Ovaj proizvod sadrži pažljivo odabrane aktivne sastojke, koji
                        efikasno smanjuju obim tela, oslobađaju od strija, poboljšavaju hidrataciju, čvrstoću i glatkoću kože.</p>
                    <ul class="list-unstyled list mt-5 mt-md-0">
                        <li>87% smanjenje strija</li>
                        <li>73% zaglađena koža</li>
                        <li>68% bolja hidratacija kože</li>
                        <li>4cm manji obim kukova i zadnjice</li>
                    </ul>
                    <br>
                    <a href="{{$checkoutView}}" class="btn mt-5 mt-md-0">PORUČITE ODMAH <br class="d-block d-md-none" /> DOK TRAJE POPUST</a>
                </div>
            </div>
        </div>
    </section>
    <section class="causes">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Šta uzrokuje strije?</h3>
                    <p>Kao što smo već pomenuli, strije mogu biti uzrokovan mnogim faktorima. Najčešći su:</p>
                    <ul class="list-unstyled list">
                        <li>genetske predispozicije</li>
                        <li>stacionarni način života</li>
                        <li>niska fizička aktivnost</li>
                        <li>loša ishrana (previše ugljenih hidrata)</li>
                        <li>naglo mršavljenje</li>
                        <li>problemi sa hormonima</li>
                        <li>stres</li>
                        <li>problemi sa mikrocirkulacijom</li>
                        <li>alkohol, cigarete</li>
                        <li>trudnoća</li>
                        <li>gojaznost</li>
                    </ul>
                    <p>Najčešći uzrok problema je povezan sa mnoštvom faktora koji je teško eliminisati. Međutim, možete se boriti protiv efekta "ispresecane kože" uz Sanfe ulje protiv strija.</p>
                </div>
                <div class="col-md-5 pt-4 pt-md-0">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/cellulie-4.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/uljezastrije/cellulie-4.png" alt="" class="mobile-img">
                    </picture>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{$checkoutView}}" class="btn mt-5">NEKA VAŠE TELO IZGLEDA ONAKO KAKO VI ŽELITE - PORUČITE ODMAH</a>
                </div>
            </div>
        </div>
    </section>
    <section id="how-to-fight" class="how-to-fight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/cellulie-5.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/cellulie-5.png" alt="" class="mobile-img">
                    </picture>
                </div>
                <div class="col-md-6">
                    <h3 class="pt-5 pt-md-0">Kako se boriti protiv strija?</h3>
                    <p>Ispucale linije na koži koje se uglavnom nakupljaju na butinama i zadnjici, za većinu žena uzrok su kompleksa i lošeg raspoloženja. Važno je osećati se dobro u sopstenoj
                        koži.</p>
                    <p>Imajte na umu da su strije složen problem i zbog toga je potreban kompleksan pristup. Važni su fizička aktivnost, zdrava i uravnotežena ishrana, odgovarajuća hidratacija, ali je najvažnija
                        dobra nega kože, odnosno ulje protiv celulita.</p>
                    <p>Neophodno je uzeti dokazan i efikasan proizvod kao što je Sanfe ulje protiv strija. Veoma brzo i efikasno eliminiše strije, a rezultati su vidljivi već nakon nekoliko dana.
                        Neravna koža se zategne vrlo brzo i postaje čvrsta i glatka.</p>
                </div>
            </div>
            <div class="row">
                <div class="col mobile-bg">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" alt="" class="packshot d-block mx-auto mx-md-0">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="effective-safe">
        <div class="container">
            <div class="box">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h3>Sanfe ulje protiv celulita je efikasno i bezbedno</h3>
                        <p>Žene koje su odlučile da se podvrgnu skupim i invazivnim tretmanima ili jakim lekovima ne pretpostavljaju da mogu dobiti kontra produktivan i neželjen efekat.
                            Tajna savršenog tela bez strija leži u prirodnom sastavu ovog ulja i postiže se na brz i siguran način. Sanfe krema protiv strija hrani kožu, regeneriše je
                            i sprečava ponovno pojavljivanje strija - zato mnoge žene koriste ovo ulje preventivno.</p>
                        <ul class="list-unstyled list">
                            <li>Da li želite da imate glatku i čvrstu kožu?</li>
                            <li>Da li želite savršeno telo?</li>
                            <li>Da li želite da budete zavodljivi i privlačni?</li>
                            <li>Da li želite da uživate u letnjoj odeći?</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="if-you mt-2 mt-md-5 mb-5">Ako ste odgovorili sa DA na bilo koje od pitanja, onda morate isprobati Sanfe ulje protiv strija!</p>
                        <a href="{{$checkoutView}}" class="btn">PORUČI ODMAH SA POPUSTOM</a>
                    </div>
                </div>
                <picture>
                    <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" type="image/png" class="">
                    <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-01.png" alt="" class="packshot">
                </picture>
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="mb-4">Mišljenja žena koje su krenule u borbu protiv strija</h3>
                </div>
            </div>
            <div class="row testimonials--row">
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/test1.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/test1.png" alt="" class="">
                    </picture>
                    <p>Uvek sam bila ljuta zbog izjave da moram voleti svoje telo ma kakvo god ono bilo. To nije istina, ne možete da volite strije.
                        Štaviše, možete ih se efikasno rešiti! Ja sam fizički aktivna osoba, ali mi je samo Sanfe ulje pomoglo da eliminišem strije koji su činile da ne budem srećna u svojoj koži.</p>
                    <p class="author">Ana, 33 godine</p>
                </div>
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/test2.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/test2.png" alt="" class="">
                    </picture>
                    <p>Sanfe ulje je super efikasan proizvod. Sve moje prijateljice ga vole i svi treba da ga koriste. Koža izgleda lepše nakon 15 dana korišćenja.
                        Masaže, losioni, pilinzi - ništa nije uspelo. Međutim, primetila sam značajnu razliku nakon što sam počeka da koristim Sanfe ulje. Nakon 3 meseca korišćenja
                        moja koža je bila apsolutno bez strija i glatka kao nikada do sada.</p>
                    <p class="author">Biljana, 29 godina</p>
                </div>
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/test3.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/test3.png" alt="" class="">
                    </picture>
                    <p>Mislila sam da ništa ne može pomoći ljudima u mojim godinama da reše problem sa strijama. Uvek sam skrivala svoje telo na plaži i bila sramežljiva.
                        Moja kćerka je kupila sebi Sanfe ulje i počela sam da ga koristim. Moj muž ne može da prestane da gleda u moje telo jer se baš mnogo promenilo na bolje.
                        Sada za sebe kupujem ulje i moja koža je glatka, lepa, zategnuta i bez strija. Sve preporuke!</p>
                    <p class="author">Marija, 45 godina</p>
                </div>
                <div class="col-md-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/test4.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/test4.png" alt="" class="">
                    </picture>
                    <p>Ako želite da se borite sa strijama, uradite to sa Sanfe uljem. Godinama sam koristila razne proizvode i potrošila bogatstvo na stvari koje mi nisu pomagale.
                        Činjenica da ništa ne pomaže bila je frustrirajuća. Srećom, Sanfe ulje je u potpunosti eliminisalo moj problem. Koža mi izgleda sjajno i toplo preporučujem ovaj proizvod!</p>
                    <p class="author">Hana, 34 godine</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{$checkoutView}}" class="btn mt-3 mt-lg-5">Prvi rezultati su vidljivi <br class="d-block d-md-none" /> za samo nekoliko nedelja | <br class="d-block d-md-none" /> PORUČI ODMAH</a>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h3>Mišljenje struke</h3>
                    <p>Svaki dan u svojoj ordinaciji srećem žene koje su pokušavale da se otarase strija, nažalost bezuspešno. Načina je mnogo, ali uglavnom ne daju nikakve rezultate.
                        Tretmani za uklanjanje strija su skupi i svojim klijentima preporučujem prirodna rešenja. Prirodni pilinzi (npr. kafa, kokosovo ulje i med) su odlični ali nisu dovoljni.</p>
                    <p>Naše telo zahteva složeniji pristup kao što je Sanfe ulje. Ima veoma dobar sastav koji garantuje njegovu efikasnost. To je efikasan i potpuno bezbedan način za oslobađanje od strija.</p>
                    <div class="btn-container mt-5 ml-auto mr-auto ml-lg-0 mr-lg-0">
                        <p class="btn-attention">Da li ste spremni da počnete da menjate svoje telo?</p>
                        <a href="{{$checkoutView}}" class="btn">Poručite proizvod za eliminisanje celulita danas!</a>
                    </div>
                </div>
            </div>
            <picture>
                <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/doctor.png" type="image/png" class="">
                <img src="{{ asset('/') }}innodermFiles/kremazacelulit/doctor.png" alt="" class="doctor--img">
            </picture>
            <div class="row">
                <div class="col mobile-bg">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/mobile-doctor.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/mobile-doctor.png" alt="" class="packshot d-block mx-auto mx-md-0">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">FAQ – NAJČEŠĆE POSTAVLJANA PITANJA</h3>
                    <div id="accordionFaq">
                        <h5 class="active">1. Da li je Sanfe ulje bezbedno?</h5>
                        <div>
                            <p>Proizvod ima jedinstvenu i bezbednu formulu koja se sastoji od prirodnih sastojaka. Ne izaziva neželjene efekte i potpuno je bezbedan.</p>
                        </div>
                        <h5 >2. Kako koristiti Sanfe ulje?</h5>
                        <div>
                            <p>Utrljajte ulje na željenu površinu i pustite je da upije.</p>
                        </div>
                        <h5 >3. Koliko je vremena potrebno da se koristi Sanfe ulje protiv strija?</h5>
                        <div>
                            <p>Ulje daje najbolji efekat nakon 3 meseca korišćenja.</p>
                        </div>
                        <h5 >4. Kada ću videti prve rezultate?</h5>
                        <div>
                            <p>Prvi rezultati su vidljivi nakon 2-3 nedelje upotrebe.</p>
                        </div>
                        <h5 >5. Koliko dugo moram da čekam svoju pošiljku?</h5>
                        <div>
                            <p>Porudžbine se šalju u roku od 1-2 radna dana i stižu sledeći dan na vašu adresu.</p>
                        </div>
                        <h5 >6. Mogu li da platim po pouzeću?</h5>
                        <div>
                            <p>Da, možete platiti kuriru brze pošte pri preuzimanju pošiljke.</p>
                        </div>
                        <h5 >7. Na kojoj teritoriji šaljete?</h5>
                        <div>
                            <p>Šaljemo na teritoriji cele Srbije.</p>
                        </div>
                        <h5 >8. Da li će neko znati šta sam poručila?</h5>
                        <div>
                            <p>Naš glavni prioritet je vaše zadovoljstvo i privatnost. Sva roba se šalje u kutijama za pakovanje pošiljki i niko neće znati sadržaj paketa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="end">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/footer-logo.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/uljezastrije/footer-logo.png" alt="" class="cellulite-end-logo d-block ml-auto mr-auto d-md-inline ml-md-0 mr-md-0 mb-3">
                    </picture>
                    <h2 class="text-uppercase">ULJE PROTIV STRIJA PO INOVATIVNOJ FORMULI</h2>
                    <ul class="list-unstyled list">
                        <li>Vidljivo smanjenje celulita</li>
                        <li>Čvrsta i glatka koža</li>
                        <li>Dobra hidratacija</li>
                        <li>Manji obim</li>
                        <li>Klinički potvrđeni rezultati</li>
                        <li>Prirodan i siguran sastav</li>
                    </ul>
                    <a href="{{$checkoutView}}" class="btn ml-auto mr-auto ml-0 mr-0">PORUČITE ODMAH SA 40% POPUSTA!</a>
                </div>
            </div>
            <div class="row d-block d-md-none">
                <div class="col mobile-bg">
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/uljezastrije/product-02.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/uljezastrije/product-02.png" alt="" class="packshot">
                    </picture>
                    <picture>
                        <source srcset="{{ asset('/') }}innodermFiles/kremazacelulit/mobile-footer-woman.png" type="image/png" class="">
                        <img src="{{ asset('/') }}innodermFiles/kremazacelulit/mobile-footer-woman.png" alt="" class="woman">
                    </picture>
                </div>
            </div>
        </div>
    </section>
</div>
<script defer type="text/javascript" src="{{ asset('/') }}shared_files/jquery-ui.min.js"></script>
<script src="{{ asset('/') }}shared_files/popper.min.js"></script>
<script src="{{ asset('/') }}shared_files/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#accordionFaq').accordion({
            active: 0,
            heightStyle: "content"
        });

        $('#accordionFaq h5').click(function(){
            $('#accordionFaq h5').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
