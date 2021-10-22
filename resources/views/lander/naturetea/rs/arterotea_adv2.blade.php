<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext" rel="stylesheet">--}}
    <link href="{{ asset('/') }}natureteaFiles/hyperless_adv2/index_1.css" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}natureteaFiles/hyperless_adv2/adapt.css-851.css" media="all" rel="stylesheet" type="text/css">
</head>
<body>
@include('components.display_errors')
<div class="container" id="container">
    <div class="header_box">
        <div class="regions_list">
            <div class="cont_center">
                <a href="#product-box"></a>
                <ul>
                    <li><a href="#product-box"> SRBIJA </a></li>
                    <li><a href="#product-box"> BEOGRAD </a></li>
                </ul>
            </div>
        </div>
        <header class="header">
            <div class="cont_center">
                <div class="left_header_box">
                    <div class="logo"><a class="logo_img" href="#product-box"><img src="{{ asset('/') }}natureteaFiles/hyperless_adv2/blagologo.png"><span class="list"> Bilje i zdravlje </span></a></div>
                    <nav class="main_menu_box">
                        <img alt class="burger" src="{{ asset('/') }}natureteaFiles/hyperless_adv2/menu.png">
                        <ul class="main_menu">
                            <li class="active"><span> Pisma uredniku <i class="black_angle_down"></i></span></li>
                            <li><span> Novosti <i class="black_angle_down"></i></span></li>
                            <li class="hide_on_479"><a href="#product-box"> Članci </a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right_header_box">
                    <div><a class="fright" href="#product-box"><i class="user_icon"></i> Prijava </a></div>
                    <div class="sharings_box">
                        <a class="show_shar_icon" href="#product-box"></a>
                        <ul class="soc">
                            <li><a href="#product-box"><img alt height="20" src="{{ asset('/') }}natureteaFiles/hyperless_adv2/ad7bba00abf5a4f86f346f78fa7c5ebd.png" width="20"></a></li>
                            <li><a href="#product-box"><img alt height="20" src="{{ asset('/') }}natureteaFiles/hyperless_adv2/61a19fac1a03da59113825bfff8fdebe.jpg" width="20"></a></li>
                            <li><a href="#product-box"><img alt height="20" src="{{ asset('/') }}natureteaFiles/hyperless_adv2/f6ca3315502b25e51806bdc6f204c0f3.jpg" width="20"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fixed_menu">
                <div class="cont_center">
                    <div class="logo"><a class="logo_img" href="#product-box"><img src="{{ asset('/') }}natureteaFiles/hyperless_adv2/logo.jpg"></a><a class="region" href="#product-box"><img alt src="{{ asset('/') }}natureteaFiles/hyperless_adv2/aif-0.png"></a></div>
                    <ul class="rubrics_menu_list">
                        <li><a href="#product-box"> Glavna </a></li>
                        <li><a href="#product-box"> Nova tema </a></li>
                        <li><a href="#product-box"> Društvo </a></li>
                        <li><a href="#product-box"> Najnovije </a></li>
                        <li><a href="#product-box"> Politika </a></li>
                        <li><a href="#product-box"> Novac </a></li>
                        <li><a href="#product-box"> Kultura </a></li>
                        <li><a href="#product-box"> Sport </a></li>
                        <li><a href="#product-box"> Kuhinja </a></li>
                        <li><a href="#product-box"> Glavna </a></li>
                        <li class="active"><a href="#product-box"> Zdravlje i velnes </a></li>
                        <li><a href="#product-box"> Automobili </a></li>
                        <li><a href="#product-box"> Nekretnine </a></li>
                        <li><a href="#product-box"> Mišljenja </a></li>
                    </ul>
                    <div class="fixed_rubrics_link"><a href="#product-box"> Još... </a></div>
                </div>
            </div>
            <div class="fixPoint"></div>
        </header>
        <div class="rubricator">
            <div class="rubrics_menu">
                <div class="cont_center">
                    <ul class="rubrics_menu_list">
                        <li><a href="#product-box"> Glavna </a></li>
                        <li><a href="#product-box"> Nova tema </a></li>
                        <li><a href="#product-box"> Društvo </a></li>
                        <li><a href="#product-box"> Najnovije </a></li>
                        <li><a href="#product-box"> Politika </a></li>
                        <li><a href="#product-box"> Novac </a></li>
                        <li><a href="#product-box"> Kultura </a></li>
                        <li><a href="#product-box"> Sport </a></li>
                        <li><a href="#product-box"> Kuhinja </a></li>
                        <li><a href="#product-box"> Glavna </a></li>
                        <li class="active"><a href="#product-box"> Zdravlje i velnes </a></li>
                        <li><a href="#product-box"> Automobili </a></li>
                        <li><a href="#product-box"> Nekretnine </a></li>
                        <li><a href="#product-box"> Mišljenja </a></li>
                    </ul>
                    <ul class="rubrics_menu_list">
                        <li><a href="#product-box"> "Krenimo!" </a></li>
                        <li><a href="#product-box"> Pozdrav, civilizacijo </a></li>
                        <li><a href="#product-box"> Uskrs </a></li>
                        <li><a href="#product-box"> Proizvedeno u srpskoj kulturi </a></li>
                        <li><a href="#product-box"> Najveća pitanja </a></li>
                        <li><a href="#product-box"> Dečje knjige </a></li>
                        <li><a href="#product-box"> Sirija </a></li>
                        <li><a href="#product-box"> Umoran sam i moram da idem... </a></li>
                        <li><a href="#product-box"> Svi projekti </a></li>
                    </ul>
                    <div class="rubricator_menu_link"><a href="#product-box"> Još... </a></div>
                </div>
            </div>
        </div>
        <div class="content_overlay"></div>
    </div>
    <div class="subrubrics">
        <div class="rubrics_menu">
            <div class="cont_center">
                <ul class="rubrics_menu_list">
                    <li class="active"><a href="#product-box"> Saveti čitalaca </a></li>
                    <li><a href="#product-box"> Zdrava hrana </a></li>
                    <li><a href="#product-box"> Dečje zdravlje </a></li>
                    <li><a href="#product-box"> Tajne lepote </a></li>
                    <li><a href="#product-box"> Svakodnevna psihologija </a></li>
                    <li><a href="#product-box"> Muško zdravlje </a></li>
                    <li><a href="#product-box"> Medicinski priručnik </a></li>
                </ul>
                <div class="subrubric_menu_link showLink"><a href="#product-box"> Još... </a></div>
            </div>
        </div>
    </div>
    <div class="content_overlay"></div>
    <div class="cont_center">
        <div class="content_body">
            <div class="content">
                <div class="material_box">
                    <section class="material_header">
                        <div class="material_topline_info">
                            <img class="letter-img" src="{{ asset('/') }}natureteaFiles/hyperless_adv2/letter.png">
                            <p><b> Pisma uredniku </b></p>
                            <div class="zoom_min_press"><a href="#product-box"><i></i></a><a href="#product-box"><i></i></a><a href="#product-box"><i></i></a></div>
                        </div>
                        <h1> "Kada sam pronašao biljni proizvod koji čisti krvne sudove, počeo sam da se osećam mlađe, mozak mi je bio kao kod 35-godišnjaka, a krvni pritisak se vratio u normalu." </h1>
                        <p><i> Rodoljub Aleksić je poljoprivrednik iz okoline Topole. Visok pritisak imao je 8 godina. Sad je zdrav i ponovo živi normalnim životom. </i></p>
                    </section>
                    <article class="material_content">
                        <center>
                            <img src="{{ asset('/') }}natureteaFiles/hyperless_adv2/01a.jpg">
                            <p> Rodoljub Aleksić, 64 </p>
                        </center>
                        <h2 class="material_title"> Prvo sam izlečio sebe i ženu, a onda i majku koja je imala vrlo visok pritisak. Kada su ljudi počeli da me preporučuju prijateljima i rodbini, shvatio sam da mogu da pomognem mnogim ljudima. </h2>
                        <p> Ceo život sam proveo radeći na imanju. Sejao, žeo itd... Nikada se nisam žalio na zdravlje - nije bilo razloga. Oduvek sam pun snage. Nikada čak ni prehladu nisam imao. Ali sve ovo se promenilo kada sam napunio 40 godina. </p>
                        <p> Na početku sam imao samo par simptoma koje čak nisam ni primećivao. Mislio sam da je sve to zbog starenja. Počeo sam se brzo umarati, svake večeri bio sam potpuno iscrpljen. Ujutru se nisam osećao dovoljno odmorno. Imao sam problema sa spavanjem, pa nisam imao dovoljno energije. I zato nisam bio dovoljno snažan, a moji prijatelji i žena primetili su da sam postao umorniji i sporiji. A još sam postao i osetljiviji na promenu vremena. Svaki put kada se vreme menja, počeo bih osećati bol. </p>
                        <p> Ovo je trajalo nekoliko godina. Nisam ni pomišljao na odlazak kod doktora. Najgore je što sam ja još mislio da sam zdrav. Svi oko mene su se žalili na slične probleme i mislio sam da je ovo normalan deo starenja. Ali moja bolest se pogoršala kada sam napunio 46 godina. </p>
                        <p> U početku sam bio bolestan samo par puta nedeljno, a onda skoro svaki dan... Jednog dana sam shvatio da se više i ne sećam kada sam se poslednji put osećao dobro. Nije lako opisati u kakvom sam stanju bio tada. Svakog jutra sam bio veoma umoran i imao sam glavobolje. Svaka fizička aktivnost me je iscrpljivala. Pritisak mi je stalno bio 160/100. </p>
                        <h3> Bilo mi je jasno da u ovom stanju moram da odem kod doktora. </h3>
                        <p> Porodični doktor mi je rekao da imam visok pritisak drugog stepena. Dao mi je neke lekove kao što su diuretici, Captopril (da mi spusti pritisak), Atorvastatin (da spusti holesterol) i Cardiomagnyl (da razredi krv). Spisak lekova je bio dug. Osim toga morao sam da budem i na dijeti i da vežbam. </p>
                        <p> Šest meseci sam radio sve što mi doktor kaže, pio lekove i žena mi je davala samo zdravu hranu. Činilo mi se da je moj problem rešen jer sam se osećao mnogo bolje. Ali nešto me je mučilo - morao sam da uzimam šaku tableta svakog dana i da pratim krvni pritisak. Ponavljao sam to i svake večeri. </p>
                        <p> Doktor mi je rekao da ću ovo verovatno morati da radim do kraja života. Rekao je da se visok pritisak ne može izlečiti i da je jedino moguće sniziti ga. Prosto rečeno, lekovi protiv visokog pritiska su poput lekova protiv bolova - ako ih uzimate, pritisak će biti normalan i vaše zdravlje će se popraviti. Ali ako ih prestanete uzimati, pritisak će vam ponovno skočiti. </p>
                        <p> Šokirao sam se. Shvatio sam da taj način lečenja uopšte ne utiče na moj pritisak i da se verovatno nikada neću otarasiti mog problema. Nisam mogao da verujem da će moje zdravlje zavisiti o lekovima zauvek. Nisam bio spreman da to prihvatim i bojao sam se kakve posledice bi lekovi mogli imati jer, kao što svi znamo, lekovi imaju mnogo negativnih posledica. </p>
                        <p> Najmanje negativne posledice bile su nesanica i umor. A šta sam trebao da radim ako bih imao probleme sa vidom, bolest bubrega ili aritmiju? Šta ako bi mi udovi otekli ili ako bih imao giht? Ako pročitate informacije o lekovima, naći ćete sve ove negativne posledice. Doktori za to znaju i svejedno propisuju te tablete. </p>
                        <h3> Nažalost, savremena medicina još uvek ne može da nam da alternativno rešenje. </h3>
                        <p> Hteo sam da imam normalan krvni pritisak, ali nisam želeo da rizikujem da oštetim druge organe u telu. Moj doktor mi nije mogao pomoći, pa sam počeo sam da izučavam ovu tematiku i počeo da tražim metode za samolečenje. Ja sam poljoprivrednik, pa sam počeo tražiti preparate sa lekovitim biljem ili drugim biljkama. Pre sto godina ljudi su koristili trave i biljke za lečenje mnogih bolesti, uključujući i one najozbiljnije. Znao sam da je to moguće i verovao sam da biljni lekovi deluju. Ali prvo sam hteo da razumem moju bolesti i saznam uzroke hipertenzije tako da bih mogao naći najbolji mogući lek. I uspeo sam. </p>
                        <h3> Uzrok bolesti </h3>
                        <p> Nažalost, bez obzira koliko smo zdravi kad smo mladi, svi starimo. Ovaj proces započinje mnogo pre nego što bilo ko od nas može da zamisli. Upravo tako telo funkcioniše. Pre nego što napunite 40 godina, vaši krvni sudovi počinju da razvijaju omotač koji na kraju može da ih blokira. Vene i krvni sudovi gube elastičnost i napune se masnim tkivom. Usporava se protok krvi, a srce mora pumpati mnogo jače da bi dostavilo krv u celo telo. Krvni pritisak se povećava i vaše zdravlje se urušava. </p>
                        <p> Ako imate visok pritisak, to znači da su vam krvni sudovi bolesni. Visok pritisak znači da vaše vene treba očistiti. Zato je neophodno da se pobrinete za vaše vene i da ih "očistite". </p>
                        <p> Čišćenjem krvnih sudova možete da poboljšate celokupno zdravlje, izbegnete kardiovaskularne bolesti i izlečite bolesti krvnih sudova. Otarasićete se svih štetnih stvari u telu, očistićete krvne sudove od holesterola i proširiti ih. Takođe ćete se otarasiti glavobolje i popraviće vam se vid i sluh. Štaviše, bićete puni energije i snage i zaboravićete na umor i visok pritisak zauvijek. </p>
                        <h3> Ako ne očistite krvne sudove, posledice će biti strašne! </h3>
                        <p> Ako se ne pobrinete za krvne sudove, imaćete mnogo problema: visok pritisak, slabo srce što dovodi do zastoja srca i imaćete veći rizik od dobijanja dijabetesa. Delovanje visokog pritiska je naročito ozbiljno jer može dovesti do infarkta i moždanog udara. Ovo će imati trajnu štetu na telo, pa čak i smrt. Ovi problemi su jako ozbiljni. </p>
                        <h3> Kako lečiti visok pritisak </h3>
                        <p> Da budem iskren, mislim da bi svi trebali da čiste krvne sudove bar jednom godišnje ako su stariji od 40 godina. Mnogo je jeftinije od lečenja visokog pritiska. Ako već imate visok pritisak, popraviće vam opšte zdravstveno stanje i u mnogim slučajevima može da olakša sve simptome. </p>
                        <p> Najlakši i najdelotvorniji način čišćenja krvnih sudova je upotreba biljne terapije. Lekovite biljke leče telo, njihov efekat je kumulativan i deluju dugoročno tako da možete dobiti stvarno odlične rezultate. </p>
                        <p> Trebalo mi je malo vremena da pronađem recept koji stvarno deluje. Jednog dana sam gledao u enciklopediji lekovitog bilja i pronašao opis jednog leka koji se prvi put pominje u 18. veku. Prvi ga je koristio neki iscelitelj Celesta koji je lečio kraljevsku porodicu. </p>
                        <p> Moderni proizvod na bazi ovog leka se zove <b>Arterotea.</b> </p>
                        <p> Ovaj proizvod sadrži veoma delotvorne sastojke koji doprinose obnovi krvotoka, uklanjanju štetnih stvari iz tela, rastvaranju krvnih ugrušaka, lečenju upale, poboljšanju propustljivosti krvnih sudova i obnovi njihove elastičnosti. Ovaj proizvod nema nikakvih neželjenih posledica. </p>
                        <p> Odmah sam znao da je to ono što sam tražio. Nakon jednog meseca upotrebe leka Arterotea svaki dan, izlečio sam visok pritisak i osetio nalet vitalnosti. Mozak mi je ponovo radio kao kad sam imao 35 godina. Osećao sam se slobodno (nakon 8 dugih godina!). </p>
                        <p> Ako vam se pritisak postepeno pogoršava i jako se razbolite, umorni ste i ne želite samo preživeti, nego živeti punim životom, a ne želite ni zavisiti od lekova, treba početi sa uzimanjem Arterotea-a. Ako to uradite, kvalitet života će se poboljšati i moći ćete da zaboravite na glavobolje, probadanje srca (anginu) i umorne noge. Oticanje, vrećice ispod očiju i sva prekomerna težina će nestati. Osećaćete kao da ste ponovo počeli živeti. Vaše opšte zdravstveno stanje i produktivnost će se poboljšati i izbeći ćete prevremenu smrt uzrokovanu infarktom ili moždanim udarom. </p>
                        <h3> Počeo sam da osećam delovanje proizvoda skoro pa odmah. </h3>
                        <p> Nakon mesec dana korišćenja proizvoda osetio sam znatno poboljšanje. Zdravlje mi se popravljalo svakog dana, pa sam preporučio Arterotea ženi i majci. Ponovo ću to da kažem. Svi trebaju da čiste krvne sudove. A za starije ljude poput moje majke, poboljšanje će biti čak i bolje. Cela moja porodica je počela da koristi ovaj proizvod. </p>
                        <p> Nakon otprilike šest meseci, otarasio sam se svih simptoma visokog pritiska i počeo se osećati odlično. Moja žena se takođe osećala bolje, a moja majka mnogo mlađe. Svi naši prijatelji su primetili ovu promenu i bili su znatiželjni i hteli da znaju šta sam radio. Nakon toga su i oni hteli da probaju Arterotea. Pomogao sam im. </p>
                        <center>
                            <a href="#product-box"><img src="{{ asset('/') }}natureteaFiles/arterotea/pack.png"></a>
                            <p> Evo kako izgleda originalni Arterotea. </p>
                        </center>
                        <p> Ako imate visok pritisak, preporučujem da odmah donesete ispravne odluke. Ne gubite vreme. Što duže odlažete lečenje, više holesterola ćete imati u telu i lošije ćete se osećati. Prestanite da čekate čuda. Ne ignorišite vašu situaciju dok ne bude puno gore. Evo jednog pravila narodne medicine: </p>
                        <p><i> "Mudar čovek leči one koji su zdravi, a ne one koji su već bolesni. Lečenje bolesnika je kao da čekaš da ožedniš, a onda počneš da kopaš bunar." </i></p>
                        <p> Ako čišćenje krvnih sudova uzmete kao glavni način borbe protiv visokog pritiska, otarasićete se svih simptoma za jedan mesec. Glavobolje, problemi sa disanjem, nesvestica, gubljenje osećaja u rukama će nestati. Ako znate da imate visok pritisak, takođe trebate da znate kako je lepo kada se ponovo osećate zdravo! </p>
                        <p> Ako odlučite da naručite Arterotea, ne zaboravite da se originalni proizvod prodaje samo na <a href="#product-box"> zvaničnoj stranici Arterotea </a></p>
                        <p> Želim vam ugodan dan i budite zdravi! Zdravlje je nešto najvrednije što imamo. </p>
                        <p><b><i> Reč urednika: </i> Ako naručite Arterotea <a href="#product-box"> sa zvanične stranice </a> dobićete 40% popusta </b></p>
                        <p></p>
                        <p></p>
                        {{--<p class="order-now"><a href="#product-box"><span class="qq"> Naruči Arterotea </span></a></p>--}}
                    </article>
                    <section class="bordered_top mbottom10">
                        <div class="product-box" id="product-box">
                            <div class="prd-lft">
                                <img alt="img" class="btls" src="{{ asset('/') }}natureteaFiles/arterotea/pack.png"/>
                            </div>
                            <div class="prd-rit">
                                <p class="prd-p3" style="padding-bottom: 5px;">Unesite podatke za dostavu</p>
                                <form action="{{$orderRoute}}" method="POST" id="order-form">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <input type="text" name="name" class="form-input" placeholder="Ime i prezime" required/>
                                    <input type="text" name="phone" class="form-input" placeholder="Broj telefona" required/>
                                    <input type="text" name="shipping_address" class="form-input" placeholder="Adresa" required/>
                                    <input type="text" name="shipping_city" class="form-input" placeholder="Grad" required/>
                                    <select class="form-input change-package-selector" id="product" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)
                                                @if($singlePrice['is_free_shipping']) * @endif
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                                    <button type="submit" class="btn">PORUČI ODMAH</button>
                                </form>
                            </div>
                        </div>
                        <hr><br>
                        <h3> Komentari: </h3>
                        <div>
                            <div>
                                <div class="author"> Sandra R. </div>
                                <div class="comment"> Neka te bog čuva, Rodoljube! Odlično je što si prošao kroz sve ovo, a još uvek možeš da imaš vedar duh. Mora da je bilo teško... I ja imam visok pritisak i znam šta doktori misle o ljudima poput nas. Loše nas leče. Propisuju lekove koji nas na kraju ubijaju i baš ih briga za nas. <br></div>
                            </div>
                            <div>
                                <div class="author"> Miloš Brkić </div>
                                <div class="comment"> Kao što se u narodu kaže - vežbanje je lek. Ako niste lenji i počnete vežbati, ići u šetnju i kretati se, sve će biti u redu. Znam da su lekovite biljke dobre, ali mora telo da bude u dobroj formi. Izbeći ćete trošenje puno para na lekove. <br></div>
                            </div>
                            <div>
                                <div class="author"> Jelena Krstić </div>
                                <div class="comment"> Ranije sam bila stalno umorna i bezvoljna. Nisam znala u čemu je problem. Nisam mogla ništa da radim. Ništa nisam htela da jedem, a pritisak mi je bio nestabilan. Otišla sam doktoru jer sam htela da znam šta je sa mnom. Uradili su neke nalaze i otkrili da imam visok holesterol. Sama sam bila kriva - jela sam nezdravu hranu što je dovelo do ovih problema. Naravno da sam odmah počela da jedem zdravo, ali nije bilo lako. Morate pomoći svom telu da se otarasi holesterola što pre. Zato sam kupila Arterotea. Kolega mi ga je preporučio. Sada sam opet zdrava. </div>
                            </div>
                            <div>
                                <div class="author"> Nada Tadić </div>
                                <div class="comment"> Dobar dan. Mnogo ljudi ima visok holesterol, a ja ovaj problem imam hronično. Pre mesec dana doktor mi je propisao Arterotea da mi umiri žuč. Sviđa mi se što je ovo prirodan proizvod i nema nikakvih hemikalija. Takođe čisti i limfu i snižava nivo "lošeg" holesterola. Prestala sam da ga koristim pre nekoliko dana, jedna terapija traje mesec dana. Tokom ovog perioda mi se popravila cirkulacija i holesterol se spustio. Osećam se puno bolje i više nemam bolove. Mogu preporučiti ovaj proizvod svima koji žele da se brinu o svom zdravlju. <br></div>
                            </div>
                            <div>
                                <div class="author"> Nikola T. </div>
                                <div class="comment"> Kupio sam Arterotea za baku jer je imala problema sa srcem. Ona ništa ne može da kupi preko interneta, njoj je kupovanje preko interneta špansko selo, pa sam joj ja naručio. Puno joj je pomogao, a imala je puno ozbiljnih problema i to dugo vremena. Nekoliko godina je pila lekove. Sada joj je sve lakše jer je očistila krvne sudove. <br></div>
                            </div>
                            <div>
                                <div class="author"> Marina </div>
                                <div class="comment"> Ovo će da bude moje prvo naručivanje preko interneta. Lako je. Samo sam ubacila svoje podatke i za 5 minuta operater me je pozvao. Bio je baš fin. Potvrdio je detalje moje porudžbine sa sve adresom i rekao da ću paket da dobijem u naredna 2 do 3 dana. E to se zove savršena usluga! <br></div>
                            </div>
                            <div>
                                <div class="author"> Tamara Vujić </div>
                                <div class="comment"> Nadam se da Arterotea nije skup. </div>
                            </div>
                            <div>
                                <div class="author"> Sanja: </div>
                                <div class="comment"> Naručila sam ovaj proizvod jer se bojim da će da poskupi. Sramota je da moram ovo da radim. Apoteke prodaju samo tablete protiv bolova i vitamine koji su beskorisni. Morate probati naći stvarno delotvoran lek, a apoteke vam u tome neće pomoći. </div>
                            </div>
                            <div>
                                <div class="author"> Marinko J. </div>
                                <div class="comment"> Život je težak i tužan kad moraš da se odrekneš nečeg što voliš i ideš na strogu dijetu. Ništa slatko i ništa fino. Lečio sam se raznim lekovima, dijetama i napitkom od zobi. Nisam mogao to više da podnesem! Onda sam video članak o Arterotea u jednom stručnom časopisu. Tu sam pročitao da je ovaj preparat savršeno rešenje za visok holesterol i visok pritisak! Otišao sam mojoj doktorici i ona je to potvrdila i počeo sam da uzimam Arterotea. Najbolja stvar je da ovo uopšte i nije lek. Ovaj proizvod osigurava da se previše holesterola ne nagomila u telu i uklanja holesterol iz organa. Sada mogu da jedem sve što poželim, dovoljno je da s vremena na vreme uzimam Arterotea i sve je ok! </div>
                            </div>
                            <div>
                                <div class="author"> Rada K. </div>
                                <div class="comment"> Imala sam visok pritisak i morala sam da pijem dosta lekova. Probala sam sve preparate, ali mi ništa nije pomoglo. Drugarica moje majke iz drugog sela mi je bukvalno spasla život! Napravila mi je posebnu biljnu tinkturu i zdravlje mi se popravilo za mesec! Prirodni lekovi su najbolji. Nikad nisam verovala hemijskim lekovima. Ništa od toga mi nije pomoglo. <br></div>
                            </div>
                            <div>
                                <div class="author"> Nenad Z. </div>
                                <div class="comment"> Arterotea je dobro poznat u Evropi gde sam ja i odrastao. Ljudi ga koriste već dugo vremena. Moja baka ga je uzimala. Dobro je da je sad dostupan u Srbiji tako da svi mogu kupiti ovaj čudotvorni preparat. </div>
                            </div>
                        </div>
                        {{--<p class="order-now"><a href="#product-box"><span class="qq"> Naruči Arterotea </span></a></p>--}}
                        <div class="product-box" id="product-box">
                            <div class="prd-lft">
                                <img alt="img" class="btls" src="{{ asset('/') }}natureteaFiles/arterotea/pack.png"/>
                            </div>
                            <div class="prd-rit">
                                <p class="prd-p3" style="padding-bottom: 5px;">Unesite podatke za dostavu</p>
                                <form action="{{$orderRoute}}" method="POST" id="order-form">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <input type="text" name="name" class="form-input" placeholder="Ime i prezime" required/>
                                    <input type="text" name="phone" class="form-input" placeholder="Broj telefona" required/>
                                    <input type="text" name="shipping_address" class="form-input" placeholder="Adresa" required/>
                                    <input type="text" name="shipping_city" class="form-input" placeholder="Grad" required/>
                                    <select class="form-input change-package-selector" id="product" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)
                                                @if($singlePrice['is_free_shipping']) * @endif
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                                    <button type="submit" class="btn">PORUČI ODMAH</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="right_column">
                <!-- Актуальные вопросы -->
                <section class="topical_issues size3 item_box bordered">
                    <div class="section_header">
                        <h3> Pitanja i odgovori </h3>
                    </div>
                    <ol class="topical_issues_list">
                        <li><a href="#product-box"> Za šta su dobre japanske kupke? </a></li>
                        <li><a href="#product-box"> Hemijski lekovi, bilje ili narodna medicina: šta je najbolje za zdravlje? </a></li>
                        <li><a href="#product-box"> Kako lečiti opekline od sunca </a></li>
                    </ol>
                    <div class="bottom_links"><a class="link_bottom_right" href="#product-box"><i class="red_mini_tri"></i> Sva pitanja </a></div>
                </section>
                <section class="popul_comment size3 bordered item_box">
                    <ul class="tabgroup-tabs">
                        <li class="tabgroup-tab on"><a href="#product-box"> Najtraženije </a></li>
                        <li class="tabgroup-tab"><a href="#product-box"> Najkomentiranije </a></li>
                    </ul>
                    <div>
                        <div>
                            <ul class="time_sorter">
                                <li><a href="#product-box"> 24 sata </a></li>
                                <li><a href="#product-box"> Nedelja </a></li>
                                <li><a href="#product-box"> Mesec </a></li>
                            </ul>
                            <div>
                                <ol class="popular_block_list">
                                    <li><a href="#product-box"> Prirodni preparati za kosu </a></li>
                                    <li><a href="#product-box"> 5 prirodnih proizvoda koji će vam pomoći sa spavanjem </a></li>
                                    <li><a href="#product-box"> Kako smanjiti znojenje </a></li>
                                    <li><a href="#product-box"> Kako lečiti afte </a></li>
                                    <li><a href="#product-box"> Šta raditi kad se koža ljušti? </a></li>
                                    <li><a href="#product-box"> Kako se otarasiti gljivica na stopalima </a></li>
                                    <li><a href="#product-box"> Narodni lekovi za zube i usta </a></li>
                                    <li><a href="#product-box"> Kako očistiti urinarni trakt </a></li>
                                    <li><a href="#product-box"> Dijeta za čišćenje pankreasa </a></li>
                                    <li><a href="#product-box"> Kako povećati proizvodnju mleka </a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- segment footer -->
    {{--<footer class="footer">--}}
    {{--<div class="cont_center">--}}
    {{--<div class="footer_text">--}}
    {{--<p><b> © <span class="ryear"> 2018 </span> Sva prava rezervisana. </b></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</footer>--}}
</div>
<style>
    .freeShippingDiv {
        color: #ff0000;
        text-align: center;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
<script>
    $('.change-package-selector').click(function () {
        let fsh = $('option:selected', this).attr('placeholder');
        if(fsh == 1) {
            $(this).next('.freeShippingDiv').slideDown();
        } else {
            $(this).next('.freeShippingDiv').slideUp();
        }
    })
</script>
@include('components.pixel_footer')
</body>
</html>