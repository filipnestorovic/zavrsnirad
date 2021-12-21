<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" href=>
    <link href="{{ asset('/') }}flexovalFiles/softknee/index.css" rel="stylesheet">
</head>
<body>
@include('components.display_errors')
<section class="section-1">
    <div class="section-wrap">
        <div class="flex-wrap">
            <div class="flex-wrap__column">
                <div class="img-box--logo">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/main-arthrostrap-logo.svg" alt="Logo"/>
                </div>
                <div class="text-box">
                    <p>UNESITE PODATKE ZA DOSTAVU</p>
                </div>
                <div class="discount__titile">
                    <p> Iskoristite popust od <span class="text-yellow span-bold">40%</span></p>
                </div>
                <div class="discount-box">
                    <p class="discount-box__header"><span class="text-yellow">SAMO DANAS!</span></p>
                    <div class="discount-box__price">
                        <div class="box__price box__price--old">
                            <p>Stara cena</p>
                            <p class="price al-cost-promo">
                                {{ $prices[1]['originalPrice'] }}
                                RSD
                            </p>
                        </div>
                        <div class="box__price box__price--new">
                            <p>Nova cena</p>
                            <p class="price price--green al-cost">
                                {{ $prices[1]['amount'] }}
                                RSD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-container">
                        <form class="main-order-form al-form" method="POST" action="{{$orderRoute}}">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="first_form">
                                <div class="first_form--1">
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <input type="text" name="name" class="input name_form-bottom" placeholder="Ime i prezime" required="">
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <div class="hover">
                                                <input type="tel" name="phone" class="input phone_form-bottom" placeholder="Telefon" required="">
                                                <div class="hover_circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <input type="text" name="shipping_address" class="input name_form-bottom" placeholder="Adresa" required="">
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <input type="text" name="shipping_city" class="input name_form-bottom" placeholder="Grad" required="">
                                        </div>
                                    </div>
                                    <div class="button-wrapper form_button1">
                                        <button type="submit" class="form_btn">DA, ŽELIM DA NARUČIM SOFTKNEE<br/> PO SNIŽENOJ CENI OD 40%</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-wrap__column">
                <div class="blue__border">
                    <p><span class="span-bold">Sa SoftKnee-em</span> ćete zaboraviti na bolove u zglobovima i kičmi.
                        Ova moderna formula <span class="span-bold">trenutno eliminiše bol i oštećene zglobove za samo 28 dana!</span>
                    </p>
                </div>
                <h4 class="title__h4">STOP invazivnim lekovima, injekcijama i neefikasnim pomagalima!</h4>
                <div class="img-box--product"><img src="{{ asset('/') }}flexovalFiles/softknee/product-image.png" alt="Produkt"/></div>
            </div>
        </div>
        <div class="benefits__wrap">
            <div class="img-box--arrow"><img src="{{ asset('/') }}flexovalFiles/softknee/icon-arrow-down.svg" alt=""/></div>
            <h4 class="benefits__title">SOFTKNEE <br/>BRZO I EFIKASNO</h4>
            <div class="benefits__items">
                <ul class="list__left">
                    <li class="item">Uklanja hronične bolove u <span class="span-bold">kolenima, kukovima i kičmi</span></li>
                    <li class="item"><span class="span-bold">Obnavlja i ojačava </span>zglobove, tetive i mišiće za 87%</li>
                    <li class="item"><span class="span-bold">Vraća fizičke sposobnosti</span> na maksimum</li>
                    <li class="item"><span class="span-bold">Eliminiše degeneraciju, </span>upalu i otok</li>
                </ul>
                <ul class="list__right">
                    <li class="item"> <span class="span-bold">7 puta brže regeneriše </span>zglobove i kolena nakon povreda i trauma</li>
                    <li class="item">Održava telo u <span class="span-bold">savršenoj fizičkoj formi godinama</span></li>
                    <li class="item">Daje <span class="span-bold"> 2 puta više energije</span></li>
                    <li class="item"><span class="span-bold">Štiti mišićno skeletni sistem </span>od bolesti i starenja</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="section-wrap">
        <h2><span class="span-bold text-red">SVAKO OD NAS JE IZLOŽEN</span> <br/>BOLESTI ZGLOBOVA!</h2>
        <div class="causes__wrap">
            <div class="causes__box causes__box--top">
                <p>Ako se bilo koja od ovih tačaka odnosi na vas, poželjno je da koristite SoftKnee</p>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec2-1.jpg" alt="Nadwaga foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Prekomerna težina</span> i malo vežbi</p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec2-2.jpg" alt="Nadmierna aktywnośc fizyczna foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Prekomerna</span> fizička aktivnost</p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec2-3.jpg" alt="Wiek foto"/></div>
                <div class="red__content--item">
                    <p>Stariji od <span class="span-bold">35 godina</span></p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec2-4.jpg" alt="Stany zapane foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Upale, infekcije </span> i hronične bolesti </p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec2-5.jpg" alt="Nadwaga foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Česte traume,</span> otok, modrice </p>
                </div>
            </div>
        </div>
        <div class="content__bottom">
            <p>
                <span class="span-bold">SoftKnee</span> se bori protiv bolesti <span class="span-bold">zglobova i kičmenog stuba</span> i sprečava njihovu degeneraciju.
                Ova revolucionarna metoda <span class="span-bold">zaustavlja i eliminiše probleme</span> u ranim fazama, kao i kod onih koji već <span class="span-bold">dugi niz godina</span> pate od <span class="span-bold">hroničnih oboljenja zglobova.</span>
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="section-wrap">
        <h2> SOFTKNEE –<br/> REVOLUCIONARNI PROIZVOD
            <span class="span-bold">U BORBI PROTIV </span> OŠTEĆENIH ZGLOBOVA I KIČME
        </h2>
        <div class="green__border">
            <p>
                "Ova biomedicinska formula najbolji je način za <span class="span-bold">momentalno oslobađanje od bolova</span> kolena, kuka i kičme"
            </p>
        </div>
        <div class="advantages__wrap">
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec3-natural.svg" alt="Ikona naturas"/></div>
                <p class="content__item">To je potpuno bezbedna metoda, koja se zasniva na najnovijim dostignućima u biomagnetnoj terapiji. <span class="text-green">100% PRIRODNO</span> i ne izaziva nikakve neželjene efekte.</p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec3-magnetic.svg" alt="Ikona pole magnetyczne"/></div>
                <p class="content__item">Zahvaljujući feritnim magnetima ugrađenim u analgetičko - regenerativu traku, magnetno polje prodire direktno do izvoda bola. <span class="text-green">RADI 7 PUTA EFIKASNIJE</span> od bilo koje druge poznate metode.</p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec3-bicycle.svg" alt="Ikona rower"/></div>
                <p class="content__item"><span class="text-green">ZA KRATAK PERIOD TELO POTRPUNO VRATI U FORMU</span> nakon povreda, upale i drugih komolikacija i povreda kolena, kuka i kičme.</p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/softknee/sec3-bones.svg" alt="Ikona stawów"/></div>
                <p class="content__item">Pored toga, <span class="text-green">SMANJUJE TENZIJU</span> u mišićima kuka, potkolenice i zadnjice, što ublažava bol ne samo pri hodu već i pri mirovanju.</p>
            </div>
        </div>
        <h4>Metoda koja obnavlja zglobove iznutra!</h4>
    </div>
</section>
<section class="section-5">
    <div class="section-wrap">
        <h3><span class="span-bold">ŠTA ČINI SOFTKNEE</span> TAKO EFIKASNIM <span class="span-bold">ZA ZDRAVLJE ZGLOBOVA I KIČME?</span></h3>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/sec5-knee-pulse.jpg" alt="Soft Knee"/>
            </div>
            <p><span class="span-bold">Magnetni impulsi</span> odmah prodiru u bolna područja i <span class="span-bold">gase signale bola na ćelijskom nivou</span></p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/sec5-blood.jpg" alt="Soft Knee"/>
            </div>
            <p>Zahvaljujući termostatskim svojstvima, stimulišu ćelijsku cirkulaciju, što <span class="span-bold">ubrzava regenerativne procese za 300%.</span> Istovremeno, impulsi prirodno pokreću rekonstrukciju hrskavice i sinovijalne tečnosti.</p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/sec5-exercise.jpg" alt="Soft Knee"/>
            </div>
            <p><span class="span-bold">Dovoljno je na dnevnom nivou nositi SoftKnee da bi regeneracija delovala non stop.</span> Radite ono što inače radite i zglobovi će se podmlađivati i vraćati u punu snagu.</p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/sec5-pills-vaccines.jpg" alt="Soft Knee"/>
            </div>
            <p><span class="span-bold"></span>Bez otrovnih hemikalija, bez neefikasne zamorne rehabilitacije i bez najmanjih nuspojava!</p>
        </div>
    </div>
</section>
<section class="section-6">
    <div class="section-wrap">
        <div class="flex-wrap flex-wrap--top">
            <h4>Nema više invazivnih lekova, injekcija i neefikasnih masti!</h4>
            <a href="#order_form">
                <div class="order-btn">DA, ŽELIM DA NARUČIM <br/>SOFTKNEE PO SNIŽENOJ CENI OD 40%</div>
            </a>
        </div>
        <div class="flex-wrap flex-wrap--bottom">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/product-image.png" alt="Produkt"/>
            </div>
        </div>
    </div>
</section>
<section class="section-7">
    <div class="section-wrap">
        <h2>OTKRIJTE <span class="span-bold">TEHNOLOGIJU BUDUĆNOSTI!</span></h2>
        <div class="flex__wrap">
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec7-knee-step1.jpg" alt="Etap 1"/>
                </div>
                <p><span class="span-bold">Stimuliše proces proizvodnje sinovijalne tečnosti,</span> ubrzava stvaranje proteina vezivnog tkiva (kolagena) do 4 puta, što povećava snagu mišića za 78%.</p>
            </div>
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec7-knee-step2.jpg" alt="Etap 2"/>
                </div>
                <p><span class="span-bold">Ojačava mišiće i zglobne tetive 5 puta,</span> zahvaljujući 89% dekompresije eliminiše mikro-lezije koje se formiraju u kičmenom stubu i smanjuje bolan pritisak na diskove i nerve.</p>
            </div>
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec7-knee-step3.jpg" alt="Etap 3"/>
                </div>
                <p>Za tren oka <span class="span-bold">eliminiše bolove u zglobovima,</span> upale i degeraciju i obnavlja hrskavicu kolega, kukova i kičme.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-8">
    <div class="section-wrap">
        <h2>MIŠLJENJE <span class="span-bold">STRUKE</span></h2>
        <div class="doctor__wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/softknee/sec8-doctor-mobile.jpg" class="img__doctor--mobile" alt="Doktor"/>
            </div>
            <div class="doctor__text">
                <div class="doctor__text--content">
                    <p>U današnje vreme prosečna starost osoba sa ortopedskim smetnjama je sve niža. U klinikama srećem sve više dvadesetogodišnjaka koji boluju od teških oboljenja zglobova, koji im
                        otežavaju svakodnevne aktivnosti.</p>
                    <p>Uveren sam da su lekovi, bolne injekcije, masti ili različite operacije najgora rešenja. Oni dovode do komplikacija i fatalnih zdravstvenih posledica i deluju samo privremeno, ne otklanjajući
                        uzroke problema. <span class="span-bold">Biomedicinska metoda je najefikasniji način lečenja bolesti zglobova i kičme koju sam iskusio tokom svoje duge karijere i prakse.</span>
                        Ne izaziva nikakve neželjene efekte štetne po telo.
                    </p>
                    <p>Tretman je potpuno bezbolan i ima trenutne i trajne efekte. 8 od 10 pacijenata u potpunosti je obnovilo skeletno zglobni sistem za 28 dana, a onima sa najnaprednijim oštećenjima bilo je potrebno samo 45 dana.
                        Pored toga, 99,2% pacijenata je uklonilo bol u toku prvog sata od postavljanja trake. SoftKnee je odličan proizvod!</p>
                </div>
                <div class="show-btn"></div>
            </div>
        </div>
    </div>
</section>
<section class="section-10">
    <div class="section-wrap">
        <h2> ZAŠTO <span class="span-bold">SOFTKNEE</span> RADI EFIKASNIJE<br/> <span class="text-green span-bold">OD DRUGIH METODA?</span>
        </h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-1-mobile.jpg" class="img__slide--mobile" alt="Slide 1"/>
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-1-desktop.jpg" class="img__slide--desktop" alt="Slide 1"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Marina</span> <br/> 31 godina </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p>Moji problemi sa zglobovima su počeli kada sam imala 25 godina. Veoma sam fizički aktivna osoba i svakodnevno radim kao fitnes instruktor. Nažalost, moj način života je doprineo problemima sa kolenima. Koristila sam
                            nekoliko masti i radila mnogo vežbi za rehabilitaciju, ali bol nije nestajao. Razmišljala sam i o operaciji. Ipak, moj novi ortoped mi je preporučio SoftKnee. Od prvog dana nošenja bolovi su nestali, a drugog dana sam
                            mogla da se vratim na časove fitnesa. Sada se osećam odlično i mogu bez problema da se posvetim svojim strastima!</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-2-mobile.jpg" class="img__slide--mobile" alt="Slide 2"/>
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-2-desktop.jpg" class="img__slide--desktop" alt="Slide 2"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Dobrica</span> <br/> 52 godine </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p>Godine sedenja su imale veliki uticaj na moje zdravlje. Ponekad me kičma toliko bolela da sam morao da ostajem u krevetu i po nedelju dana. Otišao sam kod doktora koji mi je prepisao ovaj proizvod. U početku nisam mislio
                            da će biti od koristi, sumnjao sam da je to još jedan promašaj. Ali ne! Od kada sam počeo da nosim SoftKnee, bol je potpuno nestao. Od tada više nemam problema sa kičmom i osećam se kao da ponovo imama 20 godina!</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-3-mobile.jpg" class="img__slide--mobile" alt="Slide 3"/>
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-3-desktop.jpg" class="img__slide--desktop" alt="Slide 3"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Biljana</span> <br/> 64 godine </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p>Od kada sam saznala da imam artritis, mislila sam da sve što mogu da uradim je operacija. Imala sam otečenu kost na stopalu koja me je strašno bolela. Cipele mi nisu pristajale i imala sam veliki problem sa kretanjem.
                            Zbog svega ovoga nisam mogla ni unuke da pokupim iz vrtića. Ali onda sam otkrila ovaj proizvod i odlučila da ga isprobam. Zbog mog stanja, ortoped mi je preporučio Atrhrostrap, U početku nisam verovao da može da deluje,
                            ali sam na kraju odlučila da probam. Nisam mogla da verujem, bol je nestao za samo nekoliko dana, a nakon 2 nedelje sam bila kao nova. Sada mogu da uživam u životu!</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-4-mobile.jpg" class="img__slide--mobile" alt="Slide 4"/>
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-4-desktop.jpg" class="img__slide--desktop" alt="Slide 4"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Aleksandar</span> <br/> 35 godina </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p>Radim fizički, pa me je teška degeneracija kičme skroro potpuno onemogućila da radim. Pio sam tablete koje mi nisu pomagale, samo je počeo stomak da me boli od njih. Trčao sam do toaleta svako malo.
                            Na kraju sam počeo da tražim neku drugu soluciju i otkrio sam ovaj proizvod. Pokušao sam i bio pozitivno iznenađen. Nisam mogao verovati da tako može da pomogne ova mala stvar. Posle nekoliko dana sam mogao da se vratim na
                            posao. Preporučio bih SoftKnee svima koji imaju sličan problem.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-5-mobile.jpg" class="img__slide--mobile" alt="Slide 5"/>
                        <img src="{{ asset('/') }}flexovalFiles/softknee/sec10-testimonial-5-desktop.jpg" class="img__slide--desktop" alt="Slide 5"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Djordje</span> <br/> 69 godina </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p>Kako sam stario, osećao sam se sve gore i gore od problema sa kukovima, a bol je bila nepodnošljiva. Pošto sam bolovao od osteoporoze, plašio sam se da ću završiti u invalidskim kolicima. Mislio sam da mi više nema spasa,
                            ali na sreću našao sam odličnog specijalistu koji mi je preporučio da nosim ovaj proizvod. Posle mesec dana, kada sam otišao na testove, doktor je bio šokiran mojim rezultatima a ja sada svako veče igram fudbal u našem
                            Senior Klubu. Ponovo se osećam kao mladić!
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="section-12">
    <div class="section-wrap">
        <h2>KAKO PORUČITI <span class="span-light">SOFTKNEE?</span></h2>
        <div class="flex-wrap">
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec12-order-step1.png" alt="Krok 1"/>
                </div>
                <h4>KORAK <span class="span-bold">1</span></h4>
                <p>Ostavite <span class="span-bold">podatke za dostavu</span> na našem sajtu</p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec12-order-step2.png" alt="Krok 2"/>
                </div>
                <h4>KORAK <span class="span-bold">2</span></h4>
                <p>Kontaktiraćemo vas u najkraćem roku da <span class="span-bold">potvrdimo porudžbinu</span></p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec12-order-step3.png" alt="Krok 3"/>
                </div>
                <h4>KORAK <span class="span-bold">3</span></h4>
                <p>Paket šaljemo brzom poštom u roku <span class="span-bold">od 1-2 radna dana</span></p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/softknee/sec12-order-step4.png" alt="Krok 4"/>
                </div>
                <h4>KORAK <span class="span-bold">4</span></h4>
                <p>Proizvod plaćate kuriru <span class="span-bold">pri preuzimanju</span></p>
            </div>
        </div>
        <p class="section-12__subtitle">PORUČITE I IMAJTE POTPUNO ZDRAVE ZGLOBOVE ZA JAKO KRATAK PERIOD!</p>
    </div>
</section>
<section class="section-1 section-13" id="order_form">
    <div class="section-wrap">
        <div class="flex-wrap">
            <div class="flex-wrap__column">
                <div class="text-box">
                    <p>UNESITE PODATKE ZA DOSTAVU</p>
                </div>
                <div class="discount__titile">
                    <p> Iskoristite popust od <span class="text-yellow span-bold">40%</span></p>
                </div>
                <div class="discount-box">
                    <p class="discount-box__header"><span class="text-yellow">SAMO DANAS!</span></p>
                    <div class="discount-box__price">
                        <div class="box__price box__price--old">
                            <p>Stara cena</p>
                            <p class="price l-cost-promo">
                                {{ $prices[1]['originalPrice'] }}
                                RSD
                            </p>
                        </div>
                        <div class="box__price box__price--new">
                            <p>Nova cena </p>
                            <p class="price price--green al-cost">
                                {{ $prices[1]['amount'] }}
                                RSD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-container">
                        <form class="main-order-form al-form" method="POST" action="{{$orderRoute}}">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div id="anchor" class="first_form">
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <input type="text" name="name" class="input name_form-bottom" placeholder="Ime i prezime" required="">
                                    </div>
                                </div>
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <div class="hover">
                                            <input type="tel" name="phone" class="input phone_form-bottom" placeholder="Telefon" required="">
                                            <div class="hover_circle"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <input type="text" name="shipping_address" class="input name_form-bottom" placeholder="Adresa" required="">
                                    </div>
                                </div>
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <input type="text" name="shipping_city" class="input name_form-bottom" placeholder="Grad" required="">
                                    </div>
                                </div>
                                <div class="button-wrapper form_button1">
                                    <button type="submit" class="form_btn-bottom">ZAVRŠI PORUDŽBINU</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-wrap__column">
                <div class="benefits__wrap">
                    <ul class="benefits__items">
                        <li class="item"><span class="span-bold">Uklonite hronične bolove u kolenima, </span>kukovima i kičmi</li>
                        <li class="item">Obnavlja i jača <span class="span-bold"> zglobove, tetive i mišiće</span></li>
                        <li class="item">Eliminiše <span class="span-bold"> degeneraciju, upale i otok</span></li>
                        <li class="item"><span class="span-bold">Vraća energiju 100% </span> i održava je stabilnom dugi niz godina</li>
                    </ul>
                </div>
                <div class="img-box--product img-box--product13"><img src="{{ asset('/') }}flexovalFiles/softknee/product-image.png" alt="Produkt"/></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/softknee/swiper-bundle.min.js"></script>
<script>
    new Swiper(".swiper-container",{
        slidesPerView: 1,
        spaceBetween: 80,
        loop: !0,
        pagination: {
            el: ".swiper-pagination",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        keyboard: {
            enabled: !0,
            onlyInViewport: !1
        }
    });
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>