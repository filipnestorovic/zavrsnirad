<!DOCTYPE html>
<html class="translated-ltr" style="height: 100%;">
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/washwand/main.css" type="text/css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/washwand/favicon.ico" type="image/x-icon">
    <style>
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/slick.html');
            src: url('{{ asset('/') }}fonts/slick-2.html#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick-3.html') format('woff'), url('{{ asset('/') }}fonts/slick-4.html') format('truetype'), url('{{ asset('/') }}fonts/slick-5.html#slick') format('svg');
        }
    </style>
</head>
@include('components.display_errors')
<section class="block-1">
    <div class="wrap">
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">WASH WAND</font></font></h1>
        <div class="container">
            <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NAJBOLJE SREDSTVO ZA SKIDANJE NASLAGA I KAMENCA SA ZUBA</font></font><br><br>
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SPREČAVA STVARANJE KARIJESA</font></font></h2>
            <ul class="list">
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Potpuno bezbedno</font></font></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Razbija i najtvrdokornije naslage na zubima</font></font></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Potpuno bezbedan za zubnu gleđ</font></font></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Puni se putem USBa</font></font></li>
            </ul>
            <div class="cost clearfix">
               <span class="old-cost">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Regularna cena:</font></font><br>
                  <span class="price_old3834">
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['originalPrice'] }}
                           </font>
                        </font>
                     </div>
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['currency'] }}
                           </font>
                        </font>
                     </div>
                  </span>
                  <span class="price_currency"></span>
               </span>
                <span class="new-cost">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Cena sada:</font></font><br>
                  <span class="price_only3834">
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['amount'] }}
                           </font>
                        </font>
                     </div>
                      <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['currency'] }}
                           </font>
                        </font>
                     </div>
                  </span>
                  <span class="price_currency"></span>
               </span>
            </div>
            <a class="button-m" href="#zakaz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PORUČITE SADA</font></font></a>
        </div>
    </div>
</section>
<section class="block-3">
    <div class="wrap">
        <div class="use">
            <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">U KOJIM SE SVE SLUČAJEVIMA MOŽE UPOTREBLJAVATI WASH WAND</font></font></h2>
            <ul class="clearfix">
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/washwand/use-1.png" alt="Power Floss"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            IMATE IMPLANTE
                        </font></font>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/washwand/use-2.png" alt="Power Floss"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            IMATE PROTEZU
                        </font></font>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/washwand/use-3.png" alt="Power Floss"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            IMATE KRUNICE
                        </font></font>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/washwand/use-4.png" alt="Power Floss"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            IMATE SVOJE ZUBE
                        </font></font>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="block-stress">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">OSLOBODITE SE TVRDOKORNIH ZUBNIH NASLAGA  I NEČISTOĆA OD KAFE, DUVANA I HRANE UZ POMOĆ OVOG UREĐAJA KOJI RADI NA BAZI VISOKIH MIKRO VIBRACIJA.</font></font></h2>
        <div class="stress"><img src="{{ asset('/') }}purplerelaxFiles/washwand/iriggat.jpg" alt="Power Floss"></div>
        <a class="button-m" href="#zakaz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PORUČITE SADA</font></font></a>
    </div>
</section>
<section class="block-2">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PREDNOSTI KORIŠĆENJA WASH WAND UREĐAJA</font></font></h2>
        <div class="sizes">
            <table>
                <tbody>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uklanja bakterije, plak i ostatke hrane sa teško dostupnih mesta između zuba i desni</font></font></td>
                </tr>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vibracija prodire u prostore između zuba i gingivalnih đžepova, do kojih se ne može dosegnuti četkicom za zube ili zubnim koncem</font></font></td>
                </tr>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Efikasna prevencija kamenca</font></font></td>
                </tr>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nema ni najmanje štetno dejstvo na zube, desne ili zubnu gleđ</font></font></td>
                </tr>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Idealan je za poboljšanje stanja desni, kao i za prevenciju nastavnka određenih problema zbog lošije oralne higijene</font><font style="vertical-align: inherit;">Ideal for cleaning dentures, implants, braces and bridges</font></font></td>
                </tr>
                <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eliminiše neprijatan zadah koji nastaje usled naslaga hrane na nedostupnim mestima za standardna sredstva održavanja oralne higijene</font></font></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="block-option">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KARAKTERISTIKE DENTAL CALCULUS 	REMOVER UREĐAJA</font></font></h2>
        <div class="itemBlock">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/washwand/tov.png" alt="Power Floss">
            </div>
            <div class="right">
                <div class="first-right">
                    <ul>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Broj nivoa jačine mikrovibracije:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pet</font></font></p>
                        </li>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Materijali izrade:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hirurški čelik, guma, abs plastika</font></font></p>
                        </li>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Izvor energije:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">baterija</font></font></p>
                        </li>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Izvor napajanja:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">USB kabl</font></font></p>
                        </li>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dimenzije proizvoda:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">183.6 x 30 x 22 mm</font></font></p>
                        </li>
                        <li>
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kapacitet baterije:</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">300mAh</font></font></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wrap">
    <div class="slider_1">
        <div class="gal">
            <div class="slide_1"> <img src="{{ asset('/') }}purplerelaxFiles/washwand/prod-1.jpg"></div>
        </div>
    </div>
</div>
<section class="block-option">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KAKO FUNKCIONIŠE WASH WAND</font></font></h2>
        <div class="itemBlock">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/washwand/tov.jpg" alt="Power Floss">
            </div>
            <div class="right">
                <ul>
                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Isperite usta običnom vodom oko 10 sekundi.</font></font></li>
                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uključite uređaj i naslonite vrh metalnog nastavka nežno na zub.</font></font></li>
                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kružnim pokretima prelazite preko zuba sa svih strana i ponovite to za svaki zub posebno.</font></font></li>
                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Na kraju postupka operite zube i usnu duplju pastom za zube. Nakon nekoliko tretmana primetićete razliku u belini vaših zuba.</font></font></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="block-4">
    <div class="wrap clearfix">
        <div class="container left">
            <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KAKO PORUČITI</font></font></h2>
            <ul class="deliv clearfix">
                <li>
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ostavite svoje podatke na našem web sajtu</font></font></p>
                </li>
                <li>
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kontaktiraćemo vas da potvrdimo porudžbinu</font></font></p>
                </li>
                <li>
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pošiljku šaljemo u roku od 1-2 radna dana</font></font></p>
                </li>
            </ul>
        </div>
        <div class="container right">
            <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NAŠE PREDNOSTI</font></font></h2>
            <ul class="sup clearfix">
                <li>
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bez plaćanja unapred</font></font></h3>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Plaćanje porudžbine se vrši po prijemu</font></font></p>
                </li>
                <li>
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Brza isporuka</font></font></h3>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pošiljku šaljemo brzom poštom</font></font></p>
                </li>
                <li>
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garancija kvaliteta</font></font></h3>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ukoliko niste zadovoljni proizvodom vratićemo vam novac</font></font></p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="block-6" id="block66">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">UTISCI ZADOVOLJNIH KUPACA</font></font></h2>
        <div class="rev-slider clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/washwand/rep-1.jpg" alt="Power Floss">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marina</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Za 2 meseca korišćenja, naslage na zubima su potpuno nestale, a zubi su beli. Dah je svež.
                            Kada sam htela da izbelim zube gledala sam stomatološke tretmane koji su bili jako skupi.
                            Sa ovim prozivodom sam uspela da izbelim zube za veoma mali novac. Sve preporuke.</font></font></p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/washwand/rep-2.jpg" alt="Power Floss">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Monika</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nezamenljiva stvar – zubni konac se ne može porediti sa ovim. Konačno mogu da očistim prostor između zuba i više mi se ne javlja neprijatan zadah nakon 5-6 sati od pranja zuba.
                            Osećam da je moja usna duplja čista i to mi daje samopouzdanje za vreme poslovnog sastanka i razgovora.</font></font></p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/washwand/rep-3.jpg" alt="Power Floss">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aleksandar</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Koristim WASH WAND već treći mesec i oduševljen sam. Nosim proteze i naslage hrane su mi se nakupljale koje nisam mogao da eliminišem. To je bilo baš nezgodno jer sam vrlo često imao loš zadah. Kupio sam ovo čudo i moram da kažem da je razgradilo sve tvrdokorne naslage koje su me mučile. Sada sam smanjio upotrebu jer nema više toliko potrebe za tim, samo održavam da mi se naslage ponovo ne naprave.</font></font></p>
            </div>
        </div>
    </div>
</section>
<section class="block-8">
    <div class="wrap">
        <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Poručite Wash Wand sada i iskoristite 40% POPUSTA</font></font></h2>
        <div class="container clearfix">
            <div class="cost clearfix">
               <span class="old-cost">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Regularna cena:</font></font><br>
                  <span class="price_old3834">
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['originalPrice'] }}
                           </font>
                        </font>
                     </div>
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['currency'] }}
                           </font>
                        </font>
                     </div>
                  </span>
                  <span class="price_currency"></span>
               </span>
                <span class="new-cost">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Cena sada:</font></font><br>
                  <span class="price_only3834">
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['amount'] }}
                           </font>
                        </font>
                     </div>
                     <div>
                        <font style="vertical-align: inherit;">
                           <font style="vertical-align: inherit;">
                              {{ $prices[1]['currency'] }}
                           </font>
                        </font>
                     </div>
                  </span>
                  <span class="price_currency"></span>
               </span>
            </div>
            <div class="order" id="zakaz">
                <form class="m1-form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div>
                        <input type="text" name="name" placeholder="Ime i prezime" class="-metrika-nokeys" required>
                    </div>
                    <div>
                        <input type="tel" name="phone" id="phone1" placeholder="Telefon" class="input-phone" required>
                    </div>
                    <div class="footxt">
                        <p>  </p>
                    </div>
                    <div>
                        <button class="button-m" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PORUČITE SADA</font></font></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
