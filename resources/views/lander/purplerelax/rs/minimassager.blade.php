<!DOCTYPE html>
<html lang="en-EN">
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=480">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/minimassager/7w0buxl3.css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/minimassager/ndky84dd.jpg" type="image/x-icon">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">Prenosivi Mini Masažer</h1>
        <div class="info_block">
            <p class="subtitle">PROFESIONALNA MASAŽA BILO KADA I BILO GDE</p>
            <div class="discount"><b>-40% POPUSTA</b></div>
            <img src="{{ asset('/') }}purplerelaxFiles/minimassager/4qch0s0x.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena na akciji:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/g0o3bekf.jpg" alt="">
                <p>
                    <span style="font-size:11.0pt;line-height:107%;font-family:'Calibri',sans-serif;">
                        Umirujući <br> efekat
                    </span>
                </p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/jjs1srge.jpg" alt="">
                <p>
                    <span style="font-size:11.0pt;line-height:107%;font-family:'Calibri',sans-serif;">
                        Poboljšava cirkulaciju krvi
                    </span>
                </p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/ndky84dd.jpg" alt="">
                <p>
                    <span style="font-size:11.0pt;line-height:107%;font-family:'Calibri',sans-serif;">
                        Ublažava nelagodu <br> u mišićima
                    </span>
                </p>
            </div>
            <h2 class="title"><span>MULTIFUNKCIONALNI</span> <br>MINI MASAŽER</h2>
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/minimassager/5nme56kz.jpg" alt="">
            <img class="image" src="{{ asset('/') }}purplerelaxFiles/minimassager/9hebj7gx.jpg" alt="">
        </div>
        <a href="#order_form" class="button">PORUČI SA 40% POPUSTA</a>
        <div class="products_count"?>U ponudi je ostalo <b>9</b> komada</div>
    </header>
    <div class="benefits_list7">
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/minimassager/dwbi4u-7.jpg" alt="">
            <div class="text_block">
                <h4>SHIATSU MASAŽA</h4>
                <p>
                    Oslobađa napetost mišića, opušta telo, ubrzava protok krvi i eliminiše tenziju.
                </p>
            </div>
        </div>
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/minimassager/9hebj7gx-2.jpg" alt="">
            <div class="text_block">
                <h4>RELAKS MASAŽA</h4>
                <p>
                    Smanjuje bolove u vratu, leđima, donjem delu leđa, kukovima, listovima itd.
                    Pomaže u regeneraciji mišića i povećava vitalnost.
                </p>
            </div>
        </div>
        <div class="benefit_item clearfix">
            <img src="{{ asset('/') }}purplerelaxFiles/minimassager/abj_0id8-2.jpg" alt="">
            <div class="text_block">
                <h4>LAKO PRENOSIV</h4>
                <p>Mali je i lagan, možete ga poneti sa sobom na posao, na odmor ili bilo gde drugo.</p>
            </div>
        </div>
    </div>
    <section class="description_section">
        <h2 class="title"><span>MASAŽA</span> BILO KOG DELA TELA</h2>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/minimassager/mq1yld6h.jpg" alt="">
        <p>Prenosivi mini masažer je multifunkcionalni uređaj koji je veoma zgodan i jednostavan za upotrebu.</p>
        <p>Oslobodite se stresa i umora! Samo postavite uređaj na pravo mesto (vrat, struk, leđa, ruke, kukovi ili noge),
            pritisnite prekidač i opustite se. Dakle, pritiskom na jedno dugme odagnaćete svu napetost i tenziju i potpuno se opustiti.
            Videćete kakvu energiju ćete dobiti. Pulsna masaža pomaže smanjenju grčeva u mišićima i pojačava cirkulaciju krvi.
            Takođe će poboljšati protok limfnih čvorova što će dovesti do značajnog poboljšanja imunog sistema i opšteg stanja organizma.</p>
    </section>
    <section class="description_section">
        <h2 class="title"><span>PRENOSIVI UREĐAJ</span><br>ZA MASAŽU</h2>
        <img class="image" src="{{ asset('/') }}purplerelaxFiles/minimassager/hvzje8xj.jpg" alt="">
        <a href="#order_form" class="button">PORUČI SA 40% POPUSTA</a>
    </section>
    <section class="characteristics_section">
        <h2 class="title"><span>KARAKTERISTIKE</span><br>MASAŽERA</h2>
        <ul class="characteristics__list">
            <li><b>Materijal:</b> ABS plastika i silikon</li>
            <li><b>Boja:</b> Crna</li>
            <li><b>Polje primene:</b> vrat / leđa / struk / karlica / noge i drugi delovi</li>
            <li><b>Količina:</b> 1 komplet</li>
        </ul>
    </section>
    <img style="margin-left: 80px;" class="image" src="{{ asset('/') }}purplerelaxFiles/minimassager/13.gif" alt="">
    <br><br>
    <section class="reviews2_section gray_theme">
        <h2 class="title">UTISCI <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/minimassager/lzpg9q3x.jpg" alt="">
                <p>
                    Sada radim od kuće preko kompjutera, stolica nije udobna kao u kancelariji, imam bolove u vratu i leđima. Već dugo sam tražio nešto
                    ovako i konačno sam uspeo da pronađem. Dostava je bila brza, za 2 dana je proizvod bio kod mene. Čim sam krenuo da ga koristim osetio
                    sam ogromno olakšanje. Leđa me ne bole, koristim ga svaki dan i nadam se da ću ga koristiti još dugo godina, jer sam ovim ja problem
                    sa leđima nemam. Vredi svakog dinara.
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/minimassager/pe35var1.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Đorđe Topalović</div>
                        <div class="text">40 godina</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/minimassager/roln5dwv.png" alt="">
                <p>
                    Odličan uređaj! Može se masirati skoro svaki deo tela. Vrat, noge, zadnjica, gornji deo leđa, kičma, stomak.
                    Takođe mi se dopalo što ne pravi buku, možete se potpuno opustiti bez ikakvih zvukova.
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/minimassager/mw-8ezv2.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Slađana</div>
                        <div class="text">34 godine</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}purplerelaxFiles/minimassager/u9qk9qtt.png" alt="">
                <p>
                    Ovo je treći masažer koji sam poručila, a mislim da nije poslednji. Još uvek imam mnogo rođaka kojima sam pričala koliko je ovo dobro,
                    i koji hoće da i njima poručim. Ranije sam stalno imala probleme sa glavoboljom, i od kada ovo čudo koristim osećam se mnogo bolje.
                    Nakon 7 dana masiranja leđa i ramena glavobolje su prestale. Šta da vam kažem osim da je ovo predobra stvar!
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}purplerelaxFiles/minimassager/s-8d-no0.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Danica Čolaković</div>
                        <div class="text">31 godina</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tlt">
        <h2 class="title"><span>KAKO PORUČITI</span> <br>SMART MASAŽER?</h2>
    </section>
    <div class="order_steps1">
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/xb36g0d4.png" alt="">
                <h4>PORUDŽBINA</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/1vv3xb-2.png" alt="">
                <h4>POTVRDA</h4>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/4qzbbnw1.png" alt="">
                <h4>SLANJE</h4>
                <p>Paket šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/7kr_g0s0.png" alt="">
                <h4>PLAĆANJE</h4>
                <p>Plaćate paket kuriru brze pošte po pouzeću</p>
            </div>
        </div>
    </div>
    <section class="offer_section offer3 order">
        <h1 class="main_title">Prenosivi Mini Masažer</h1>
        <div class="info_block">
            <p class="subtitle">PROFESIONALNA MASAŽA BILO KADA I BILO GDE</p>
            <div class="discount"><b>-40% POPUSTA</b></div>
            <img src="{{ asset('/') }}purplerelaxFiles/minimassager/4qch0s0x.jpg" alt="">
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Cena na akciji:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/g0o3bekf.jpg" alt="">
                <p>Umirujući <br> efekat</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/jjs1srge.jpg" alt="">
                <p>Poboljšava cirkulaciju krvi</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}purplerelaxFiles/minimassager/ndky84dd.jpg" alt="">
                <p>Ublažava nelagodu <br> u mišićima</p>
            </div>
        </div>
        <form action="{{$orderRoute}}" id="order_form" method="POST" name="order-form">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" name="name" required placeholder="Ime i prezime" type="text">
            <input class="field" name="phone" required placeholder="Telefon" type="tel">
            <input class="field" name="shipping_address" required placeholder="Adresa" type="text">
            <input class="field" name="shipping_city" required placeholder="Grad" type="text">
            <br>
            <button class="button">PORUČI SADA</button>
        </form>
        <div class="products_count"?>U ponudi je ostalo <b>9</b> komada</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/minimassager/oojgjhzb.js"></script>
@include('components.pixel_footer')
</body>
</html>
