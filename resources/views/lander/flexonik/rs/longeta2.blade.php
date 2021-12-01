<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel=stylesheet>
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/slick.css">
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/slick-theme.css">
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/style.css">
    <link rel=icon type="image/png" href="{{ asset('/') }}naturapharmFiles/longeta2/info-check-1.png"/>
    <style>
        @font-face {
            font-family: "GothamPro-Bold";
            src: url({{ asset('/') }}fonts/GothamPro-Bold.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/GothamPro-Bold.otf) format("opentype"), url({{ asset('/') }}fonts/GothamPro-Bold.woff) format("woff"), url({{ asset('/') }}fonts/GothamPro-Bold.ttf) format("truetype"),
            url({{ asset('/') }}fonts/GothamPro-Bold.svg#GothamPro-Bold) format("svg");
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "GothamPro";
            src: url({{ asset('/') }}fonts/GothamPro.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/GothamPro.otf) format("opentype"), url({{ asset('/') }}fonts/GothamPro.woff) format("woff"), url({{ asset('/') }}fonts/GothamPro.ttf) format("truetype"),
            url({{ asset('/') }}fonts/GothamPro.svg#GothamPro) format("svg");
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "MuseoSansCyrl";
            src: url({{ asset('/') }}fonts/MuseoSansCyrl_2.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/MuseoSansCyrl_2.woff) format("woff"), url({{ asset('/') }}fonts/MuseoSansCyrl_2.ttf) format("truetype"),
            url({{ asset('/') }}fonts/MuseoSansCyrl_2.svg#MuseoSansCyrl_2) format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class=info>
    <div class=info__body>
        <div class=info__top>
            <div class=info__top-logo>
                <img src="{{ asset('/') }}flexonikFiles/shared_files/flexonik_logo.png" alt="" height="50px"/>
            </div>
            <div class=info__top-title>
                <h2>Najbolje rešenje za hallux valgus</h2>
            </div>
        </div>
        <div class=info__title>
            <h3>Zdravo stopalo bez "čukljeva"</h3>
        </div>
        <div class=info__content>
            <div class="info__pack dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
            </div>
            <div class=info__list>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/gif.gif" alt=""/>
                <ul>
                    <li>Zaustavlja bol i upalu za 10 dana</li>
                    <li>Vraća prst u normalan položaj</li>
                    <li>Jača mišiće stopala i sprečava ponovnu pojhavu valgusa</li>
                </ul>
            </div>
            <div class="info__pack mob">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
            </div>
        </div>
        <div class=info__action>
            <div class=info__action-top>
                <div class=info__action-title>
                    <p>Požurite da poručite i iskoristite <span>popust!</span></p>
                </div>
                <div class=info__action-price>
                    <p class=info__action-price__old>Stara cena <span><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></s></span></p>
                    <p class=info__action-price__new><span><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b>*</span></p>
                </div>
            </div>
            <div class=info__action-form>
                <form action="{{$orderRoute}}" method=post class=landing__form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type=text name=name placeholder="Ime i prezime">
                    <input type=tel name=phone placeholder="Telefon">
                    <input type=text name=shipping_address placeholder="Adresa">
                    <input type=text name=shipping_city placeholder="Grad">
                    <button type=submit>Poručite sada</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=problem>
    <div class=problem__body>
        <div class=problem__title>
            <h2>OVI PROBLEMI SU JAKO UČESTALI I NEPRIJATNI</h2>
        </div>
        <div class=problem__list>
            <ul>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img1.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>NELAGODA</h4>
                        <p>Ne mogu se obuti cipele zbog izbočenog prsta</p>
                    </div>
                </li>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img2.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>ZAKRIVLJENOST</h4>
                        <p>Kvrga deformiše stopalo do neprepoznatljivosti</p>
                    </div>
                </li>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img3.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>BOL</h4>
                        <p>Javljaju se nepodnošljivi bolovi u stopalu za vreme hodanja</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=come>
    <div class=come__title>
        <h2>ŠTA UZROKUJE ČULJEVE?</h2>
    </div>
    <div class=come__list>
        <ul>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img1.jpg" alt=""/>
                <p>Neudobne cipele i visoke potpetice</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img2.jpg" alt=""/>
                <p>Višak kilograma</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img3.jpg" alt=""/>
                <p>Bolesti mišićno-skeletnog sistema</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img4.jpg" alt=""/>
                <p>Slab ligamentno-mišićni aparat</p>
            </li>
        </ul>
    </div>
</div>
<div class=bg>
    <div class=time>
        <div class=time__body>
            <div class=time__title>
                <h2>VREME JE ZA IZLEČENJE</h2>
            </div>
            <div class=time__content>
                <div class=time__pack style="padding: 0 150px;">
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
                </div>
                <div class=time__desc>
                    <p>Prema statistikama, svaka druga žena preko 45 godina ima valgus stopala - vidljivu izbočenost palca i izraslinu u oblike loptice.
                        <span>Kada dođe u najrazvijeniji stadijum teško je rešiti problem, zato treba delovati na na vreme.</span>
                        Do skoro, pacijenti sa valgusom su morali da se podvrgnu operaciji ali <span>od sada to više nije neophodno jer postoji Kyrok longeta za čukljeve.</span>
                    </p>
                    <p>Danas se možete rešiti valgusa za par meseci uz pomoć Kyrok longete za čukljeve.
                        Dizajnirana je tako da <span>aktivno deluje na deformitet, suzbijajući ga i vraćajući kost u pravilan položaj.</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class=work>
        <div class=work__body>
            <div class=work__title>
                <h2>KAKO FUNKCIONIŠE KYROK LONGETA?</h2>
            </div>
            <div class=work__content>
                <div class=work__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/work-img.png" alt=""/>
                </div>
                <div class=work__list>
                    <ul>
                        <li>Prilagođava anatomiji stopala i nećete osetiti da je nosite. Pažljivo i sigurno će držati vaš prst u pravilnom položaju.</li>
                        <li>Pod pritiskom, kost se vraća u normalan položaj, a palac ostaje paralelan s ostalim prstima.</li>
                        <li>Bol u hodu nestaje, a omiljene cipele mogu da se nose ponovo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=expert>
        <div class=expert__body>
            <div class="expert__img dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/expert-img.png" alt=""/>
                <button data-toggle=scroll data-id="#footerForm">Poručite</button>
            </div>
            <div class=expert__desc>
                <div class=expert__desc-title>
                    <h2>MIŠLJENJE STRUKE</h2>
                </div>
                <div class=expert__desc-text>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/expert-img.png" alt="" class=mob   />
                    <p>Haluks valgus se javlja usled velikog opterećenja, nepravilnog položaja stopala i slabog ligamentno - mišićnog aparata.
                        Zbog toga je za <span>prevenciju i lečenje valgusa potrebna fizička potpora problematičnog dela stopala.</span></p>
                    <p>Kyrok longeta za čukljeve vraća nožni prst u ispravan položaj, čak i ako su nožni prsti ukršteni i zbijeni.
                        Sprečava razvoj bolesti i komplikacija kao što su upale zglobova i žuljevi.
                        <span>Opterećenje na stopalima tokom hodanja je ravnomerno raspoređeno, tako da bol nestaje ne samo u prstima nego i u stopalima, a noge se mnogo manje umaraju.</span>
                    </p>
                    <p><span></span></p>
                    <button data-toggle=scroll data-id="#footerForm" class=mob>Poručite</button>
                </div>
            </div>
        </div>
    </div>
    {{--<div class=consist>--}}
        {{--<div class=consist__body>--}}
            {{--<div class=consist__title>--}}
                {{--<h2>Уникальный комплекс активных компонентов</h2>--}}
            {{--</div>--}}
            {{--<div class=consist__content>--}}
                {{--<div class=consist__pack>--}}
                    {{--<img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-pack.png" alt="" style="max-width: 100%"/>--}}
                {{--</div>--}}
                {{--<div class=consist__list>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<div class=consist__list-top>--}}
                                {{--<img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img1.png" alt=""/>--}}
                                {{--<h4><span>Вулканическая--}}
                                 {{--соль</span>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div class=consist__list-text>--}}
                                {{--<p>Быстро снимает воспаление и боль, регенерирует больные клетки,--}}
                                    {{--благодаря высокой концентрации аллантоина--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class=consist__list-top>--}}
                                {{--<img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img2.png" alt=""/>--}}
                                {{--<h4><span>Куркума</span></h4>--}}
                            {{--</div>--}}
                            {{--<div class=consist__list-text>--}}
                                {{--<p>Выпрямляет сдавленные и искривленные мягкие части--}}
                                    {{--основного сустава большого пальца, а также исправляет развивающееся искривление--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class=consist__list-top>--}}
                                {{--<img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img3.png" alt=""/>--}}
                                {{--<h4><span>Муравьиная--}}
                                 {{--кислота</span>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div class=consist__list-text>--}}
                                {{--<p>Снимает воспаления в суставах и хрящевых тканях--}}
                                    {{--стопы, предотвращает мозолистые образования--}}
                                    {{--и размягчает хрящевые наросты--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class=consist__list-top>--}}
                                {{--<img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img4.png" alt=""/>--}}
                                {{--<h4><span>Филлантус--}}
                                 {{--нирури</span>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div class=consist__list-text>--}}
                                {{--<p>Возвращает стопе природную форму, предохраняет--}}
                                    {{--и снимает болезненную опухоль, укрепляет мышцы--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<div class=why>
    <div class=why__title>
        <h2>Zašto je Kyrok longeta bolja od drugih metoda?</h2>
    </div>
    <div class=why__list>
        <ul>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/why-img1.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4>LEKOVI</h4>
                    <ul>
                        <li>Hemijski sastav</li>
                        <li>Privremeni efekat</li>
                        <li>Uklanja simptome, a ne uzrok</li>
                        <li>Narušava metabolizam</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/why-img2.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4>OPERACIJA</h4>
                    <ul>
                        <li>Potpuno uklanja problem</li>
                        <li>Problem bi se mogao uskoro vratiti</li>
                        <li>Ima kontraindikacije</li>
                        <li>Dug i težak oporavak</li>
                        <li>Visoka cena</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4>KYROK LONGETA</h4>
                    <ul>
                        <li>Apsolutno prirodan način</li>
                        <li>Zauvek rešava problem</li>
                        <li>Oslobađa od bola i neprijatnosti</li>
                        <li>Nema kontraindikacija</li>
                        <li>Apsolutno sigurno</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class=use>
    <div class=use__title>
        <h2>Kako se koristi?</h2>
    </div>
    <div class=use__list>
        <ul>
            <li>
                <div class=use__number>
                    <p>01</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use1.png" alt=""/>
                </div>
                <div class=use__text>
                    <p>Olabavite trake i uvucite stopalo.</p>
                </div>
            </li>
            <li>
                <div class=use__number>
                    <p>02</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use2.png" alt=""/>
                </div>
                <div class=use__text>
                    <p>Pritisnite longetu prema unutrašnjosti stopala, poravnajući sa zglobom, dok drugom rukom držite krajeve oba kaiša. Zategnite trake.</p>
                </div>
            </li>
            <li>
                <div class=use__number>
                    <p>03</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use3.png" alt=""/>
                </div>
                <div class=use__text>
                    <p>Podesite trake sa jednakim zatezanjem na ugodan nivo.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class=feed>
    <div class=feed__title>
        <h2>UTISCI NAŠIH KUPACA</h2>
    </div>
    <div class=feed__list>
        <ul>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img1.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Dragana, 30 godina</h4>
                    <p>Problem se pojavio pre 10 godina na fakultetu, i od tada nisam nosila cipele s visokom potpeticom jer mi se činilo
                        kao da svi gledaju u moje ružne noge. Uz to, plašila sam se posledica i potencijalne operacije.
                        Onda sam naišla na ovu longetu i kupila sam je odmah. Nakon 4 meseca nožni prsti su mi se vratili u normalu!
                        Sada bez problema nosim otvorene cipele sa potpeticom i uživam u tome.
                        Toplo preporučujem svima!</p>
                </div>
            </li>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img2.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Marina, 74 godine</h4>
                    <p>Longeta za čukljeve me je spasila! Bolovi u nogama bili su užasni, nosila sam veći broj cipela i jedva sam se
                        kretala. Čim sam počeo nositi longetu, osjećala sam se puno bolje. Sada opet nosim normalne cipele i čizme.
                        Vratila sam se u život i jako sam zahvalna onima koji su smislili ovako neverovatnu stvar.
                    </p>
                </div>
            </li>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img3.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Marija, 47 godina</h4>
                    <p>U ranom detinjstvu lekar mi je ustanovio da imam ravna stopala.
                        Prošle godine jednostavno nisam mogla nositi normalne cipele i bila sam iskrivljena.
                        Dok sam tražila rešenje, naišla sam na ortopeda koji mi preporučio ove longete.
                        Koristim ih već dva meseca i zaboravila sam na probleme sa čukljevima. Osećam se sjajno!</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="hr dec">
    <hr/>
</div>
<div class=info>
    <div class=info__body>
        <div class=info__top>
            <div class=info__top-logo>
                <img src="{{ asset('/') }}flexonikFiles/shared_files/flexonik_logo.png" alt="" height="50px"/>
            </div>
            <div class=info__top-title>
                <h2>Najbolje rešenje za hallux valgus</h2>
            </div>
        </div>
        <div class=info__title>
            <h3>Zdravo stopalo bez "čukljeva"</h3>
        </div>
        <div class=info__content>
            <div class="info__pack dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
            </div>
            <div class=info__list>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/gif.gif" alt=""/>
                <ul>
                    <li>Zaustavlja bol i upalu za 10 dana</li>
                    <li>Vraća prst u normalan položaj</li>
                    <li>Jača mišiće stopala i sprečava ponovnu pojhavu valgusa</li>
                </ul>
            </div>
            <div class="info__pack mob">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/longeta2.png" alt=""/>
            </div>
        </div>
        <div class=info__action>
            <div class=info__action-top>
                <div class=info__action-title>
                    <p>Požurite da poručite i iskoristite <span>popust!</span></p>
                </div>
                <div class=info__action-price>
                    <p class=info__action-price__old>Stara cena <span><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></s></span></p>
                    <p class=info__action-price__new><span><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b>*</span></p>
                </div>
            </div>
            <div class=info__action-form id="footerForm">
                <form action="{{$orderRoute}}" method=post class=landing__form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type=text name=name placeholder="Ime i prezime">
                    <input type=tel name=phone placeholder="Telefon">
                    <input type=text name=shipping_address placeholder="Adresa">
                    <input type=text name=shipping_city placeholder="Grad">
                    <button type=submit>Poručite sada</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}naturapharmFiles/longeta2/scripts.js"></script>
<script>eval(mod_pagespeed_s1mKdTeuWx);</script>
<script>eval(mod_pagespeed_XYXCDI$GL5);</script>
</body>
</html>