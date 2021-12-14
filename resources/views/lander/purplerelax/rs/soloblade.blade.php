<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" media="all" href="{{ asset('/') }}purplerelaxFiles/soloblade/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
<!-- BEGIN content -->
<div class="out">
    @include('components.display_errors')
    <div class="b1">
        <div class="in">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/1.png" alt="">
                <div>
                    <p>
                        MicroTouch SOLO
                    </p>
                    <span>Punjivi aparat za brijanje</span>
                </div>
            </div>
            <div class="form_wrap">
                <div id="form1" class="form_block">
                    <span class="sp white">Požurite i poručite sa popustom od <span class="adfh-discount" style="color: #f5e51b;">40</span>%!</span>
                    <span class="sp white old-price">
                        Stara cena:
                        <span class="adfh-old-price">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="adfh-currency">
                           RSD
                        </span>
                     </span>
                    <span class="sp new-price">
                        Nova cena:
                        <span class="adfh-new-price" style="color: #f5e51b;">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="adfh-currency" style="color: #f5e51b;">
                           RSD
                        </span>
                     </span>
                    <div id="form-wrapper2" class="form form-wrapper">
                        <form class="form orderformcdn" action="{{$orderRoute}}" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input class="form-name name fio" name="name" placeholder="Ime i prezime" required="" type="text">
                            <input class="form-phone phone tel" name="phone" placeholder="Telefon" required="" type="tel">
                            <input class="" name="shipping_address" placeholder="Adresa" required="" type="text">
                            <input class="" name="shipping_city" placeholder="Grad" required="" type="text">
                            <button name="button" class="form-btn" type="submit">PORUČITE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b2">
        <div class="in">
            <img src="{{ asset('/') }}purplerelaxFiles/soloblade/2.png" alt="">
            <div>
                <p>Brijte, podrežite i napravite savršene ivice svoje brate sa Micro Touch Solo - preciznim brijačem sa zamenjivim sečivom od nerđajućeg čelika i ugrađenim led svetlom.</p>
                <p>Pogodan i lak za putovanje - ne zahteva vodu ili penu za brijanje, tako da nema nereda.<br>
                    Ugrađena baterija traje 45 minuta i puni se uz pomoć priloženog USB kabla. Micro Touch Solo (sve u jednom) brijač seče najdeblje brade i ne pravi posekotine, neravnine, iritacije i urasle dlake.<br>
                    Pruža mogućnost idealnog stilizovanja brade i brkova i pomoći će vam da izgledate fenomenalno i budete zapeženi. Ovaj uređaj će zasluženo zauzeti prvo mesto među vašim priborom za brijanje.<br>
                </p>
            </div>
        </div>
    </div>
    <div class="b3">
        <div class="in">
            <img src="{{ asset('/') }}purplerelaxFiles/soloblade/3.png" alt="" class="active">
            <img src="{{ asset('/') }}purplerelaxFiles/soloblade/4.png" alt="" class="hidden">
            <div class="text">
                <p>Micro Touch SOLO - trimer i aparat za brijanje i podrezivanje sa pokretljivom glavom i ugrađenim led svetlom pružiće milimetarsku preciznost u sređivanju brade.</p>
                <p>Uz njega se dobijaju 3 češlja za podrezivanje (1mm, 3mm, 5mm), četka za čišćenje i USB kabal za punjenje.</p>
                <p>Punjiva litijum jonska baterija traje do 45 minuta. Micro Touch Solo će vrlo lako i brzo srediti vašu bradu i biće kao na TV reklamama.</p>
                <p>Zamenjivo dvostrano sečivo od nerđajućeg čelika sa lakoćom seče bradu, a fleksibilna glava prati konture lica.</p>
            </div>
            <a href="#form2" class="btn">PORUČITE SADA</a>
        </div>
    </div>
    <div class="b4">
        <div class="in">
            <div class="text">
                <div>
                    <span>JEDNOSTAVNO I LAKO ZA KORIŠĆENJE</span>
                    <p>Micro Touch Solo brijač ima ergonomski dizajn. Možete ga lako poneti sa sobom gde god pođete. Glatka drška se može čvrsto držati u ruci, obezbeđuje apsolutnu preciznost pokreta, a zahvaljujući
                        kvalitetnoj oštrici nećete propustiti nijednu dlaku.</p>
                </div>
                <div>
                    <span>BEZBEDNO I POUZDANO</span>
                    <p>Micro Touch Solo brijač je sigurna alternativa makazama i običnim brijačima. Uklanjanje dlačica običnim brijačima, pa čak i brijačima poznatih proizvođača, može biti veoma neprijatno i može izazvati
                        posekotine. Micro Touch Solo brijač nežno uklanja dlačice bilo koje dužine ili gustine.</p>
                </div>
                <div>
                    <span>MULTIFUNKCIONALNOST</span>
                    <p>Uz pomoć ovog aparata za brijanje ne samo da možete ukloniti dlačice sa lica već i održati svoju frizuru u savršenom stanju. Podrezivanje zalizaka, dlaka oko ušiju ili brijanje viška dlačica na vratu - sa Micro
                        Touch Solo brijačem lako je kao nikada pre.</p>
                </div>
            </div>
            <img src="{{ asset('/') }}purplerelaxFiles/soloblade/10.png" alt="">
        </div>
    </div>
    <div class="b5">
        <div class="in">
        </div>
    </div>
    <div class="b6">
        <div class="in">
            <a href="#form2" class="btn">PORUČITE SADA</a>
        </div>
    </div>
    <div class="reviews">
        <div class="in">
            <div class="reviews__caption">Utisci naših kupaca:</div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}purplerelaxFiles/soloblade/rev1.png" alt=""></div>
                <div class="reviews__text">
                    <p>Ako vodite računa o sebi, ovaj aparat za brijanje je veoma korisna stvar. <br>Uklanjanje dlačica sa vrata običnim brijačem je veoma neprijatno i sve vreme se plašim da se ne posečem, ali sa Micro Touch
                        Solo brijačem je potpuno jednostavno i 100% bezbedno.</p>
                    <div class="reviews__name">Maksim</div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}purplerelaxFiles/soloblade/rev3.png" alt=""></div>
                <div class="reviews__text">
                    <p>Vrlo kvalitetan proizvod i zaista odlična izrada. Probao sam mnogo brendova, koristim mašine za brijanje dugo, ali ovaj trimer je najbolji do sada.
                        Brije fenomenalno i sa lakoćom, precizan je u milimetar. Kupio sam i svom bratu jedan.</p>
                    <div class="reviews__name">Edin </div>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__img"><img src="{{ asset('/') }}purplerelaxFiles/soloblade/rev2.png" alt=""></div>
                <div class="reviews__text">
                    <p>Odlično radi svoj posao, jutarnje brijanje mi traje manje od minut. Ranije sam znao da se zadržim i već ujutru iznerviram. Baterija zaista dugo traje.<br>
                        Podjednako lako brije i dugu i kratku bradu. Za ovaj novac nikada nisam kupio bolji proizvod. Toplo preporučujem!</p>
                    <div class="reviews__name">Mišo</div>
                </div>
            </div>
        </div>
    </div>
    <div class="b7">
        <div class="in">
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/5.png" alt="">
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/6.png" alt="">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/7.png" alt="">
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/8.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="in">
            <div class="footer__form">
                <div class="form_wrap">
                    <div id="form2" class="form_block">
                        <span class="sp white">Požurite i poručite sa popustom od <span class="adfh-discount" style="color: #f5e51b;">40</span>%!</span>
                        <span class="sp white old-price">
                           Stara cena:
                           <span class="adfh-old-price">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           <span class="adfh-currency">
                              RSD
                           </span>
                        </span>
                        <span class="sp new-price">
                           Nova cena:
                           <span class="adfh-new-price" style="color: #f5e51b;">
                              {{ $prices[1]['amount'] }}
                           </span>
                           <span class="adfh-currency" style="color: #f5e51b;">
                              RSD
                           </span>
                        </span>
                        <div id="form-wrapper2" class="form form-wrapper">
                            <form class="form orderformcdn" action="{{$orderRoute}}" method="post">
                                {{ csrf_field() }}
                                @include('lander.naturapharm.components.form_hidden_fields')
                                <input class="form-name name fio" name="name" placeholder="Ime i prezime" required="" type="text">
                                <input class="form-phone phone tel" name="phone" placeholder="Telefon" required="" type="tel">
                                <input class="" name="shipping_address" placeholder="Adresa" required="" type="text">
                                <input class="" name="shipping_city" placeholder="Grad" required="" type="text">
                                <button name="button" class="form-btn" type="submit">PORUČITE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="{{ asset('/') }}purplerelaxFiles/soloblade/9.png" alt="">
                <div>
                    <p>
                        MicroTouch SOLO
                    </p>
                    <span>Punjivi aparat za brijanje</span>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>