<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta name=viewport id=vp content="width=device-width, initial-scale=1.0" />
    <meta http-equiv=X-UA-Compatible content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/beardgrowth/favicon.ico" type="image/x-icon">
    <link rel=icon href="{{ asset('/') }}purplerelaxFiles/beardgrowth/favicon.ico" type="image/x-icon">
    <link type="text/css" href="{{ asset('/') }}purplerelaxFiles/beardgrowth/A.style.css" rel=stylesheet />
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/beardgrowth/A.bootstrap-grid.min.css">
    <link type="text/css" href="{{ asset('/') }}purplerelaxFiles/beardgrowth/style.css" rel=stylesheet />
    <script>
        var ww = window.innerWidth;
        if(ww <= 500){
            viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute('content', 'width=480, user-scalable=no');
        }
    </script>
</head>
<body>
<div class=general-wrapper>
    <div class=center-wrapper>
        @include('components.display_errors')
        <section class="section header ">
            <div class=section-header-left></div>
            <div class=section-header-right>
                <div class=clearfix>
                    <div class="bordered-price">
                        <span class="lp-price">
                           <b class="price_only15058">
                              {{ $prices[1]['amount'] }}
                              {{ $prices[1]['currency'] }}
                           </b>
                        </span>
                        <span class="lp-currency"><b class="price_currency"></b>
                        </span>
                    </div>
                    <div class=old-price>
                        Redovna cena
                        <br>
                        <span>
                           <span class=lp-prev-price>
                              <b class="price_old15058">
                                 {{ $prices[1]['originalPrice'] }}
                                 {{ $prices[1]['currency'] }}
                              </b>
                           </span>
                           <span class=lp-currency><b class="price_currency"></b>
                           </span>
                        </span>
                    </div>
                </div>
                <div class=quantity><span class=lastpack>40</span> KOMADA JE OSTALO U PRODAJI</div>
                <div class=button-arrows>
                    <a href="#order" class="custom button"></a>
                </div>
            </div>
        </section>
        <section class="section introduce">
            <div class="bg man"></div>
            <div class="bg comb"></div>
            <div class=wrapper>
                <p class=heading><span>BRUTALNO DOBRA BRADA</span><br> I GUSTA KOSA
                    <br>ZA KRATKO VREME - DA MOGUĆE JE!
                </p>
                <p><b>Sada vam je dostupna</b> efikasna stvar za rast dlaka!</p>
                <div class=columns>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-img-1.png" alt=section-introduce-img-1>
                        <p>Kosa i brada rastu mnogo brže</p>
                    </div>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-img-2.png" alt=section-introduce-img-2>
                        <p>Brada postaje gusta, lepa i svilenkasta</p>
                    </div>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-img-3.png" alt=section-introduce-img-3>
                        <p>Sprečava pucanje vrhova i gubitak kose</p>
                    </div>
                </div>
            </div>
            <div class=extend>
                <div class="bg stuff-medium"></div>
                <p class="heading black"><span class=orange>3 JEDNOSTAVNA KORAKA</span>
                    <br>DO MUŽEVNE I PRIVLAČNE KOSE I BRADE
                </p>
                <div class=columns>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-extend-img-1.png" alt=section-introduce-extend-img-1>
                        <p>Trajanje tretmana - <b>4 nedelje</b></p>
                    </div>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-extend-img-2.png" alt=section-introduce-extend-img-2>
                        <p><b>5 minuta dnevno</b> i vaša kosa počinje da raste brže, a brada izgleda savršeno</p>
                    </div>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-introduce-extend-img-3.png" alt=section-introduce-extend-img-3>
                        <p>Rezultat je <b>gusta brada i kosa</b> bez proćelavih krugova</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section ingredients">
            <p>Sredstvo za rast brade i kose BEARD GROWTH je inovativni proizvod napravljen od prirodnih sastojaka</p>
            <div class=columns>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-1.png" alt=section-ingredients-img-1  >
                    <p>ČIČKOVO ULJE</p>
                    <ul class=list>
                        <li>Jača koren kose</li>
                        <li>Stimuliše rast dlake</li>
                    </ul>
                </div>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-2.png" alt=section-ingredients-img-2  >
                    <p>EKSTRAKT KOPRIVE</p>
                    <ul class=list>
                        <li>Čini kosu gušćom, bez ćelavih krugova</li>
                        <li>Aktivira rad folikula kose</li>
                    </ul>
                </div>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-3.png" alt=section-ingredients-img-3  >
                    <p>VITAMIN E</p>
                    <ul class=list>
                        <li>Daje kosi prirodan sjaj</li>
                        <li>Daje bradi svilenkast izgled</li>
                    </ul>
                </div>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-4.png" alt=section-ingredients-img-4  >
                    <p>VITAMIN A</p>
                    <ul class=list>
                        <li>Sprečava gubitak kose</li>
                        <li>Ubrzava rast</li>
                    </ul>
                </div>
            </div>
            <div class=columns>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-5.png" alt=section-ingredients-img-5  >
                    <p>EKSTRAKT BOROVNICE</p>
                    <ul class=list>
                        <li>Hidrira kožu</li>
                        <li>Sprečava isušivanje i ljuštenje</li>
                    </ul>
                </div>
                <div class="col w25p img-p mb45">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-6.png" alt=section-ingredients-img-6  >
                    <p>EKSTRAKT MASLINE</p>
                    <ul class=list>
                        <li>Daje kosi snagu</li>
                        <li>Održava lepu boju brade</li>
                    </ul>
                </div>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-7.png" alt=section-ingredients-img-7  >
                    <p>ULJE VANILE</p>
                    <ul class=list>
                        <li>Sprečava stvaranje ispucalih krajeva</li>
                        <li>Sprečava isušivanje kože</li>
                    </ul>
                </div>
                <div class="col w25p img-p">
                    <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-ingredients-img-8.png" alt=section-ingredients-img-8  >
                    <p>EKSTRAKT KAMILICE</p>
                    <ul class=list>
                        <li>Daje blagi miris</li>
                        <li>Čini kožu mekom i prijatnom na dodir</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section effect">
            <div class="bg man"></div>
            <div class=wrapper>
                <p class=heading><span>MILIONI MUŠKARACA ŠIROM SVETA</span>
                    <br>VEĆ SU ISKUSILI NEVEROVATNI EFEKAT ULJA ZA MUŽEVNU KOSU I BRADU
                </p>
                <p>Dovoljno je da prođete kroz čitav tok korišćenja sredstva za negu kose i brade i sami ćete se uveriti
                    u njegovu moć! Ovo potvrđuju mnogobrojne pozitivne recenzije kupaca.</p>
            </div>
            <div class=ta-c>
                <div class=extend>
                    <p class=heading>UBRZAVA <br>RAST BRADE</p>
                    <div class=frame>
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-effect-foto-1.jpg" alt=section-effect-foto-1>
                    </div>
                    <ul class=list>
                        <li>Stimuliše rast dlaka</li>
                        <li>Jača koren dlake</li>
                    </ul>
                </div>
                <div class=extend>
                    <p class=heading>MUŽEVNA BRADA <br>KONAČNO</p>
                    <div class=frame>
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-effect-foto-2.jpg" alt=section-effect-foto-2>
                    </div>
                    <ul class=list>
                        <li>Daje bradi čvrstinu i snagu</li>
                        <li>Eliminiše formiranje belih krugova bez dlaka</li>
                    </ul>
                </div>
                <div class=extend>
                    <p class=heading>DAJE BRADI <br>VOLUMEN</p>
                    <div class=frame>
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-effect-foto-3.jpg" alt=section-effect-foto-3>
                    </div>
                    <ul class=list>
                        <li>Čini bradu bujnom i lepom</li>
                        <li>Održava prirodni volumen</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section usage">
            <div class=wrapper>
                <p class=heading>
                    <span class=orange>DOBITI </span>
                    BRUTALNU KOSU I
                    <span class=orange>MUŽEVNU BRADU</span>
                    JE JEDNOSTAVNO</p>
                <p>Tretman sa BEARD GROWTH proizvodom je jednostavan i prijatan.
                    <br>Evo kako da ga primenite:</p>
                <div class=columns>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-usage-img-1.png" alt=section-usage-img-1>
                        <p>Nanesite proizvod na kožu</p>
                    </div>
                    <div class="col w33p img-p">
                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-usage-img-2.png" alt=section-usage-img-2>
                        <p>Utrljajte proizvod na kožu kružnim pokretima</p>
                    </div>
                    <div class="col w33p img-p">
{{--                        <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/section-usage-img-2.png" alt=section-usage-img-3>--}}
                        <p>Ne ispirati. Dlake će rasti brže, kosa i brada postaće glatki, bujni i svilenkasti</p>
                    </div>
                </div>
                <div class=section-usage-note>
                    <p>Sredstvo za kosu "BEARD GROWTH" je neprocenjivo otkriće za svakog muškarca. Pomoći će vam da imate
                        muževnu i privlačnu bradu i kosu!</p>
                </div>
            </div>
        </section>
        <section class="section ribbon">
            <div class=label-choice></div>
            <div class=orange>AKCIJA! CENA SADA </div>
            <div class="bordered-price small white">
                  <span class=lp-price>
                     <span >
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                  </span>
                <span class=lp-currency><b class="price_currency"></b></span>
            </div>
            <div class=white style="margin: 20px 0;">
                REDOVNA CENA
                <span class=red>
                     <span class=lp-prev-price>
                        <b class="price_old15058">
                           {{ $prices[1]['originalPrice'] }}
                           {{ $prices[1]['currency'] }}
                        </b>
                     </span>
                     <span class=lp-currency><b class="price_currency"></b></span>
                  </span>
            </div>
            <div class="button-arrows left">
                <a href="#order" class="custom button"></a>
            </div>
        </section>
        <section class="section certified">
            <div class="bg stuff-big"></div>
            <div class=wrapper>
                <p class=heading>UZ <span class=orange> "BEARD GROWTH" </span> LEPA KOSA I BRADA BIĆE VAŠ PONOS!</p>
                <p>Sastav proizvoda je odabran tako da utiče na sva moguća problematična područja na kojima rastu dlake.</p>
                <p>Mnogi muškarci širom sveta su probali ovaj proizvod i potpuno su zadovoljni rezultatom!</p>
            </div>
        </section>
        <section class="section form clearfix">
            <p class=heading>PORUČITE ODMAH <span>"BEARD GROWTH"</span> I UŽIVAJTE U VAŠEM <span>NOVOM RUHU</span></p>
            <div id=order>
                <div class=container>
                    <div class="row justify-content-center justify-content-lg-between">
                        <div class="col-10 col-md-8 col-lg-6">
                            <div class=item style="background-color: #c9f3ff;">
                                <img src="{{ asset('/') }}purplerelaxFiles/beardgrowth/pack_two_sng-mini.png" alt="">
                            </div>
                        </div>
                        <div class="col-10 col-md-8 col-lg-6">
                            <div class=item style="background-color: #c9f3ff;">
                                <div class=price>
                                    <div class=new>
                                    <span class="">
                                       <b class="price_only15058">
                                          {{ $prices[1]['originalPrice'] }}
                                          {{ $prices[1]['currency'] }}
                                       </b>
                                    </span>
                                        <span><b class="price_currency"></b></span>
                                    </div>
                                    <div class=old style="font-size: 45px;">
                                    <span>
                                       <b class="price_old15058">
                                          {{ $prices[1]['amount'] }}
                                          {{ $prices[1]['currency'] }}
                                       </b>
                                    </span>
                                        <span><b class="price_currency"></b></span>
                                    </div>
                                </div>
                                <form class=order-form action="{{$orderRoute}}" method="post" id=order-form>
                                    {{csrf_field()}}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <input class=form-element name=name placeholder="Ime i prezime" type=text required>
                                    <input class=form-element name=phone id="phone" placeholder="Telefon" type=tel required>
                                    <button class="upper gradient open-order-form" type=submit></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-10 col-md-8 col-lg-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
