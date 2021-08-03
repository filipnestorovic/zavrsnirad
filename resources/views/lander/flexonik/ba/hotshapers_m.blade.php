<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=480">
    <link rel="icon" href="{{ asset('/') }}flexonikFiles/hotshaper/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/hotshaper/favicon.ico" type="image/x-icon">
    <script src="{{ asset('/') }}flexonikFiles/hotshaper/jquery.js" type="text/javascript"></script>
    <style> html{scroll-behavior: smooth;} html, body, div, span, h1, h2, h3, h4, p, a, img, strong, b, ul, li, form, canvas {margin: 0;padding: 0;border: 0;outline: 0;}ul {list-style: none;}img {max-width: 100%;height: auto;}a {text-decoration: underline;}a:hover {cursor: pointer;}*::-webkit-input-placeholder {color: #a9a9a9;opacity: 1;}*:-moz-placeholder {color: #a9a9a9;opacity: 1;}*::-moz-placeholder {color: #a9a9a9;opacity: 1;}*:-ms-input-placeholder {color: #a9a9a9;opacity: 1;}* {margin: 0;padding: 0;}* {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}button, input {outline: none;}.center {text-align: center;}.clearfix:after {content: "";display: block;clear: both;}h1, h2, h3, h4 {font-weight: 500;}b, strong {font-weight: 500;}html {-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}body {position: relative;width: 100%;min-width: 320px;padding: 0;margin: 0;font-family: "Roboto", "Arial", "Helvetica", sans-serif;font-size: 18px;line-height: 1.5em;background: #fff;color: #333;font-weight: 400;}.main-wrap {position: relative;width: 480px;margin: 0 auto;}.section {position: relative;padding: 20px;}h2 {position: relative;display: block;margin: 0 auto;font-size: 40px;font-weight: 400;line-height: 1.2em;text-align: center;text-transform: uppercase;}h2 > span {position: relative;display: inline-block;font-weight: 700;font-size: 42px;}h2 > span:before, h2 > span:after {content: "";position: relative;display: inline-block;width: 42px;height: 2px;background: #e8de46;top: -0.3em;margin: 0 15px;}.button-m {display: block;position: relative;outline: none;width: 387px;height: 88px;background: url({{asset('/') }}flexonikFiles/hotshaper/button.jpg) top center no-repeat;cursor: pointer;}.button-m:active {top: -1px;}.center .button-m {margin: 0 auto;}.block-1 {padding: 0;padding-top: 580px;background: url({{asset('/') }}flexonikFiles/hotshaper/hotShapers_bannerMb.png) top center no-repeat;}.block-1 .container-1 {padding-bottom: 40px;}.block-1 .container-1 > div {position: relative;float: left;}.cost {width: 190px;text-align: center;}.cost > p {padding-bottom: 12px;font-size: 20px;color: #333;}.cost > strong {font-weight: 500;font-size: 30px;}.old-cost > strong {color: #9e9e9e;text-decoration: line-through;}.new-cost > strong {color: #333;}.block-1 .sale {width: 100px;padding-top: 5px;text-align: center;color: #f9e901;text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);}.block-1 .sale > p {padding-bottom: 10px;font-weight: 500;text-transform: uppercase;}.block-1 .sale > strong {font-weight: 500;font-size: 36px;}.block-1 .container-2 {padding-bottom: 40px;}.block-1 .timer {width: 80%;height: 200px;margin: 0 auto;padding-bottom: 15px;}.block-1 .timer > p {padding: 20px 0;text-align: center;font-size: 24px;color: #333;}.attention {padding-bottom: 15px;font-size: 18px;font-weight: 500;text-align: center;}.attention:before {content: "";display: block;width: 44px;height: 44px;margin: 0 auto;background: url({{asset('/') }}flexonikFiles/hotshaper/att-sign.jpg) top center no-repeat;margin-bottom: 10px;}.block-2, .block-4 {padding: 40px 0 40px 0;background: url({{asset('/') }}flexonikFiles/hotshaper/dark-bg.jpg) repeat;color: #fff;}.block-2 .container {padding-top: 10px;}.block-2 ul {position: relative;padding: 40px 20px;}.block-2 ul li {position: relative;padding-left: 130px;padding-bottom: 40px;}.block-2 ul li span {border-bottom: 1px solid #ffe300;}.block-2 ul li:before {content: "";position: absolute;display: block;width: 113px;height: 113px;left: 0;background: url({{asset('/') }}flexonikFiles/hotshaper/adv-icon.png) no-repeat;}.block-2 ul li:nth-child(1):before {background-position: 0 0;}.block-2 ul li:nth-child(2):before {background-position: 0 -113px;}.block-2 ul li:nth-child(3):before {background-position: 0 -226px;}.block-2 ul li h4 {font-size: 18px;line-height: 1.4em;padding-bottom: 10px;font-weight: 700;text-transform: uppercase;}.block-2 h3 {padding: 0 20px;text-align: center;color: #e8de46;font-weight: 700;}.block-3 {padding: 40px 10px;}.block-3 h2 {font-size: 30px;padding-bottom: 30px;}.block-3 .container {height: 890px;background: url({{asset('/') }}flexonikFiles/hotshaper/hotShapers_mobileImages.png) center top no-repeat;}.block-4 h2 {font-size: 35px;}.block-4 .container {padding-top: 10px;}.block-4 .clearfix {padding-bottom: 30px;}.block-4 .clearfix:last-child {border: 0;}.block-4 .elem-item {position: relative;width: 220px;float: left;margin: 0 10px;text-align: center;padding-top: 20px;color: #fff;}.block-4 .elem-item .elem-pic {position: relative;width: 112px;height: 112px;margin: 0 auto;background: url({{asset('/') }}flexonikFiles/hotshaper/icon-icon.png) no-repeat;}.block-4 .elem-item .elem-pic-1 {background-position: 0 0;}.block-4 .elem-item .elem-pic-2 {background-position: 0 -112px;}.block-4 .elem-item .elem-pic-3 {background-position: 0 -224px;}.block-4 .elem-item .elem-pic-4 {background-position: 0 -336px;}.block-4 .elem-item .elem-text {padding-top: 10px;}.block-5 {padding: 20px 0;}.block-5 .container {text-align: center;padding: 30px 0;}.block-5 .container .tov-2 {position: relative;height: 240px;margin: 0 auto;padding-left: 250px;padding-top: 25px;background: url({{asset('/') }}flexonikFiles/hotshaper/tov-2.jpg) left top no-repeat;}.block-5 .old-cost {padding-bottom: 15px;}.block-7 {padding: 40px 20px 0 20px;background: url({{asset('/') }}flexonikFiles/hotshaper/white-bg.jpg) repeat;}.block-7 h2 {font-size: 35px;}.block-7 .container {padding: 40px 0 0 0;}.block-7 .rev {position: relative;padding-bottom: 40px;}.block-7 .rev-pic {position: relative;width: 360px;height: 266px;margin: 0 auto;background: url({{asset('/') }}flexonikFiles/hotshaper/rev.jpg) no-repeat;}.block-7 .rev-1 .rev-pic {background-position: 0 0;}.block-7 .rev-2 .rev-pic {background-position: 0 -266px;}.block-7 .rev-3 .rev-pic {background-position: 0 -532px;}.block-7 .rev-title {font-size: 22px;font-weight: 500;padding: 25px 0 15px 0;text-align: center;}.block-7 .rev-text {text-align: justify;}.block-6 {padding-top: 40px;}.block-6 .deliv-item {text-align: center;font-size: 20px;padding: 30px 0;border-bottom: 1px dashed #ccc;}.block-6 .deliv-item:last-child {border-bottom: 0;}.block-6 .deliv-item p {padding-top: 10px;}.block-6 .deliv-item .deliv-icon {position: relative;display: inline-block;width: 119px;height: 119px;background: url({{asset('/') }}flexonikFiles/hotshaper/delivery-icon.png) center top no-repeat;}.block-6 .deliv-item .deliv-pic-1 {background-position: 50% 0;}.block-6 .deliv-item .deliv-pic-2 {background-position: 0% 0;}.block-6 .deliv-item .deliv-pic-3 {background-position: 100% 0;}.block-1 .order {padding-top: 20px;}.block-1 .order > p.center {font-weight: 500;}.block-1 .order > p.center strong {text-transform: uppercase;font-size: 22px;}.block-1 form {position: relative;width: 388px;margin: 0 auto;padding-top: 30px;}.block-1 form > div {padding-bottom: 15px;}.block-1 form input, .block-1 form button {border: 0;outline: 0;background: none;padding: 0;margin: 0;}.block-1 form input, form select {width: 388px;height: 80px;border: 1px solid #ccc;line-height: 80px;text-indent: 40px;-webkit-border-radius: 45px;-moz-border-radius: 45px;border-radius: 45px;font-size: 20px;}.block-1 form input:focus {border-color: #999;}.block-1 form button {display: block;position: relative;width: 387px;height: 88px;background: url({{asset('/') }}flexonikFiles/hotshaper/button.jpg) top center no-repeat;cursor: pointer;}.block-1 form button:focus {top: -1px;}.footer {font-size: 16px;background: #eee;line-height: 1.3em;}</style>
    <style> .time_circles {position: relative;width: 100%;height: 100%;}.time_circles > div {position: absolute;text-align: center;}.time_circles > div > h4 {margin: 0;padding: 0;text-align: center;text-transform: uppercase;font-family: "Century Gothic", Arial, sans-serif;color: #333;}.time_circles > div > span {display: block;width: 100%;text-align: center;font-family: "Century Gothic", Arial, sans-serif;font-size: 300%;font-weight: 400;line-height: 1.2em;color: #333;}</style>
    <style> @font-face {font-family: "Roboto";src: local("Roboto Thin"), local("Roboto-Thin"), url({{asset('/') }}fonts/robotothin.woff2) format("woff2"), url({{asset('/') }}fonts/robotothin.woff) format("woff"), url({{asset('/') }}fonts/robotothin.ttf) format("truetype");font-weight: 100;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Thin Italic"), local("Roboto-ThinItalic"), url({{asset('/') }}fonts/robotothinitalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotothinitalic.woff) format("woff"), url({{asset('/') }}fonts/robotothinitalic.ttf) format("truetype");font-weight: 100;font-style: italic;}@font-face {font-family: "Roboto";src: local("Roboto Light"), local("Roboto-Light"), url({{asset('/') }}fonts/robotolight.woff2) format("woff2"), url({{asset('/') }}fonts/robotolight.woff) format("woff"), url({{asset('/') }}fonts/robotolight.ttf) format("truetype");font-weight: 300;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Light Italic"), local("Roboto-LightItalic"), url({{asset('/') }}fonts/robotolightitalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotolightitalic.woff) format("woff"), url({{asset('/') }}fonts/robotolightitalic.ttf) format("truetype");font-weight: 300;font-style: italic;}@font-face {font-family: "Roboto";src: local("Roboto"), local("Roboto-Regular"), url({{asset('/') }}fonts/roboto.woff2) format("woff2"), url({{asset('/') }}fonts/roboto.woff) format("woff"), url({{asset('/') }}fonts/roboto.ttf) format("truetype");font-weight: 400;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Italic"), local("Roboto-Italic"), url({{asset('/') }}fonts/robotoitalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotoitalic.woff) format("woff"), url({{asset('/') }}fonts/robotoitalic.ttf) format("truetype");font-weight: 400;font-style: italic;}@font-face {font-family: "Roboto";src: local("Roboto Medium"), local("Roboto-Medium"), url({{asset('/') }}fonts/robotomedium.woff2) format("woff2"), url({{asset('/') }}fonts/robotomedium.woff) format("woff"), url({{asset('/') }}fonts/robotomedium.ttf) format("truetype");font-weight: 500;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Medium Italic"), local("Roboto-MediumItalic"), url({{asset('/') }}fonts/robotomediumitalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotomediumitalic.woff) format("woff"), url({{asset('/') }}fonts/robotomediumitalic.ttf) format("truetype");font-weight: 500;font-style: italic;}@font-face {font-family: "Roboto";src: local("Roboto Bold"), local("Roboto-Bold"), url({{asset('/') }}fonts/robotobold.woff2) format("woff2"), url({{asset('/') }}fonts/robotobold.woff) format("woff"), url({{asset('/') }}fonts/robotobold.ttf) format("truetype");font-weight: 700;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Bold Italic"), local("Roboto-BoldItalic"), url({{asset('/') }}fonts/robotobolditalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotobolditalic.woff) format("woff"), url({{asset('/') }}fonts/robotobolditalic.ttf) format("truetype");font-weight: 700;font-style: italic;}@font-face {font-family: "Roboto";src: local("Roboto Black"), local("Roboto-Black"), url({{asset('/') }}fonts/robotoblack.woff2) format("woff2"), url({{asset('/') }}fonts/robotoblack.woff) format("woff"), url({{asset('/') }}fonts/robotoblack.ttf) format("truetype");font-weight: 900;font-style: normal;}@font-face {font-family: "Roboto";src: local("Roboto Black Italic"), local("Roboto-BlackItalic"), url({{asset('/') }}fonts/robotoblackitalic.woff2) format("woff2"), url({{asset('/') }}fonts/robotoblackitalic.woff) format("woff"), url({{asset('/') }}fonts/robotoblackitalic.ttf) format("truetype");font-weight: 900;font-style: italic;}</style>
</head>
<body>
@include('components.display_errors')
<div class="main-wrap">
    <div class="section block-1">
        <div class="container-1 clearfix">
            <div class="cost old-cost">
                <p>Stara cena:</p>
                <strong><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr"> RSD</span></strong>
            </div>
            <div class=sale>
                <p>Popust</p>
                <strong>{{ $discount != null ? (40+$discount)."%" : "40%" }}</strong>
            </div>
            <div class="cost new-cost">
                <p>Nova cena:</p>
                <strong><span class="price_land_s1">{{ $prices[1]['amount'] }}</span> <span class="price_land_curr"> RSD</span></strong>
            </div>
        </div>
        <div class="container-2">
            <div class="center"><a href="#order" class="button-m"></a></div>
        </div>
    </div>
    <div class="section block-2">
        <h2>Efikasnost<br><span>HOT SHAPERSA</span></h2>
        <div class="container">
            <ul>
                <li>
                    <h4>Povećava znojenje <span>4 puta</span></h4>
                    <p>Smanjiće masne naslage na nepotrebnim mestima, a mišići će postati istaknutiji.</p>
                </li>
                <li>
                    <h4>Napravljen je od <span>NEOTEX tkanine</span></h4>
                    <p>čiji unutrašnji sloj pojačava rad znojnih žlezda, a spoljašnji sloj upija znoj sprečavajući vlaženje tkanine.</p>
                </li>
                <li>
                    <h4><span>Udoban</span> u svakodnevnom životu</h4>
                    <p>Nevidljiv je ispod odeće, ne propušta znoj i ne ostavlja tragove na telu.</p>
                </li>
            </ul>
            <h3>TANAK STRUK I ČVRSTA ZADNJICA ZA SAMO MESEC DANA!</h3>
        </div>
    </div>
    <div class="section block-3">
        <h2>KADA NOSITI POJAS ZA VRUĆE OBLIKOVANJE:</h2>
        <div class="container"></div>
    </div>
    <div class="section block-4">
        <h2><span>HOT SHAPERS</span><br>VAM TREBA UKOLIKO:</h2>
        <div class="container">
            <div class="clearfix">
                <div class="elem-item">
                    <div class="elem-pic elem-pic-1"></div>
                    <div class="elem-text">
                        Želite vitku figuru koja privlači pažnju drugih
                    </div>
                </div>
                <div class="elem-item">
                    <div class="elem-pic elem-pic-2"></div>
                    <div class="elem-text">
                        Želite da smršate bez tableta i iscrpljujućih dijeta
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="elem-item">
                    <div class="elem-pic elem-pic-3"></div>
                    <div class="elem-text">
                        Nikako ne uspevate da skinete poslednjih par kilograma
                    </div>
                </div>
                <div class="elem-item">
                    <div class="elem-pic elem-pic-4"></div>
                    <div class="elem-text">
                        Želite efikasno mršavljenje, bez ugrožavanja zdravlja
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dot-line-1"></div>
    <div class="section block-5" >
        <div class="container">
            <div class="tov-2">
                <div class="cost old-cost">
                    <p>Stara cena:</p>
                    <strong><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr"> RSD</span></strong>
                </div>
                <div class="cost new-cost">
                    <p>Nova cena:</p>
                    <strong><span class="price_land_s1">{{ $prices[1]['amount'] }}</span> <span class="price_land_curr"> RSD</span></strong>
                </div>
            </div>
            {{--<div class="attention">Осталось всего 9 упаковок по акции!</div>--}}
            <div class="center"><a href="#order" class="button-m"></a></div>
        </div>
    </div>
    <div class="section block-7">
        <h2>Utisci kupaca<br><span>HOT SHAPERSA</span></h2>
        <div class="container">
            <div class="rev rev-1">
                <div class="rev-pic"></div>
                <p class="rev-title">Milica Mitrović, 33 godine</p>
                <p class="rev-text">Videla sam oglas i i odlučila sam da pokušam. Rezultati su neverovatni! Sviđa mi se što steže bočne strane i nije vidljiv
                    ispod odeće. Samo nedelju dana kasnije ljudi iz moje okoline su počeli da mi govore da sam smršala! Moj rezultat za mesec dana je čak minus 8
                    kilograma! Preporučujem svakome ovaj proizvod!</p>
            </div>
            <div class="rev rev-2">
                <div class="rev-pic"></div>
                <p class="rev-title">Boriša Gavrić , 31 godina</p>
                <p class="rev-text">Kupio sam pojas za svoju suprugu, jer je dugo pokušavala da izgubi kilograme. Imao sam sreću da sam proizvod kupio sa
                    popustom, a ona je izgubila kilograme i srećna je kao nikada do sada, a i ja sa njom! Hvala Vam!</p>
            </div>
            <div class="rev rev-3">
                <div class="rev-pic"></div>
                <p class="rev-title">Dragana Marković, 29 godina</p>
                <p class="rev-text">Pojas je isporučen 2 dana nakon što sam ga poručila. Koristim ga već 9 nedelja. Nosim ga gde god je to moguće – u šetnji sa
                    detetom, kod kuće, na trčanju. Rezultat je kao što i sami vidite. Struk mi je tanji za 14 centimetara, a bokovi za 12. Ne želim da stanem na
                    ovome, nastaviću da ga nosim.</p>
            </div>
            <div style="text-align:center; margin-top:50px;">
                <img style="display:inline-block; vertical-align:top;" src="{{ asset('/') }}flexonikFiles/hotshaper/conversation2.png">
                <br><br>
                <img style="display:inline-block; vertical-align:top;" src="{{ asset('/') }}flexonikFiles/hotshaper/conversation1.png">
                <br><br>
            </div>
        </div>
    </div>
    <div class="section block-6">
        <h2>Dostava i plaćanje</h2>
        <div class="container">
            <div class="deliv-item">
                <span class="deliv-icon deliv-pic-1"></span>
                <p>Proizvod dostavljamo brzom poštom u roku 2 dana od dana prijema porudžbine.</p>
            </div>
            <div class="deliv-item">
                <span class="deliv-icon deliv-pic-2"></span>
                <p>Nije potrebno da proizvod plaćate unapred. Porudžbinu plaćate po prijemu robe.</p>
            </div>
            <div class="deliv-item">
                <span class="deliv-icon deliv-pic-3"></span>
                <p>Imate pravo da vratite proizvod u roku od 14 dana od prijema paketa ukoliko niste zadovoljni!</p>
            </div>
        </div>
    </div>
    <div class="dot-line-2"></div>
    <div class="section block-1" >
        <div class="container-1 clearfix">
            <div class="cost old-cost">
                <p>Stara cena:</p>
                <strong><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr"> RSD</span></strong>
            </div>
            <div class="sale">
                <p>Popust</p>
                <strong>{{ $discount != null ? (40+$discount)."%" : "40%" }}</strong>
            </div>
            <div class="cost new-cost">
                <p>Nova cena:</p>
                <strong><span class="price_land_s1">{{ $prices[1]['amount'] }}</span> <span class="price_land_curr"> RSD</span></strong>
            </div>
        </div>
        <div class="order" id="order">
            <p class="center">
                <strong>Podaci za dostavu</strong><br/>
            </p>
            <form action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="text" name="phone" class="only_number" placeholder="Telefon" required></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                <div><button type="submit" class="js_submit"></button></div>
            </form>
        </div>
    </div>
    <div class="section footer">
        <div class="center">
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
<style> * {outline: 0 }[class*="price_land_"] {font-weight: inherit;font-size: inherit;font-style: inherit;color: inherit }.padding {padding: 10px }.modal {width: 100%;height: 100%;position: fixed;display: none;left: 0;top: 0 }.modal {z-index: 900001;overflow: auto;font-family: Arial, Helvetica, sans-serif;font-size: 14px;color: #000;text-align: justify;margin-left: auto;margin-right: auto;background-color: transparent }.modal-block {position: relative;width: 600px;background: #fff;box-shadow: 2px 2px 10px rgba(0, 0, 0, .35);border: 1px solid #3a87ad }.modal-block .icon-close {position: absolute;right: 0;margin: 15px 20px;z-index: 1000 }.modal-block .title {background: #4d83c0;text-align: center;line-height: 50px;text-shadow: 1px 1px 0 #3a87ad;border-bottom: 1px solid #3a87ad;padding: 0 100px;font-size: 18px;color: #fff;width: auto;height: auto;margin: 0 !important;letter-spacing: 0 }.modal-block .icon-close:hover, .icon-close:hover {background-position: 0 -19px }.modal p {font-weight: normal;width: auto }.modal .content {background: #fff repeat;width: auto;overflow: hidden;margin: 0;box-shadow: none }@media screen and (max-width:767px) {.modal-block {width: 380px }.modal-block .title {padding: 0 50px;line-height: 39px }}@media screen and (max-width:405px) {.modal-block {width: 300px }.modal-block .title {padding: 0 }}#kmacb {position: fixed;*visibility: hidden;display: none;background-color: transparent;width: 160px;height: 160px;z-index: 200000 !important;-webkit-backface-visibility: hidden;-webkit-transform: translateZ(0);-webkit-transition: visibility .5s;-moz-transition: visibility .5s;-o-transition: visibility .5s;transition: visibility .5s;right: 15px;bottom: 15px }@media screen and (max-width:991px) {#kmacb {display: none !important }}#kmacb a {text-decoration: none }@-moz-keyframes kmacb__phone-circle-anim {0% {-moz-transform: rotate(0deg) scale(0.5) skew(1deg);opacity: .1;-moz-opacity: .1;-webkit-opacity: .1;-o-opacity: .1 }30% {-moz-transform: rotate(0deg) scale(.7) skew(1deg);opacity: .5;-moz-opacity: .5;-webkit-opacity: .5;-o-opacity: .5 }100% {-moz-transform: rotate(0deg) scale(1) skew(1deg);opacity: .6;-moz-opacity: .6;-webkit-opacity: .6;-o-opacity: .1 }}@-webkit-keyframes kmacb__phone-circle-anim {0% {-webkit-transform: rotate(0deg) scale(0.5) skew(1deg);-webkit-opacity: .1 }30% {-webkit-transform: rotate(0deg) scale(.7) skew(1deg);-webkit-opacity: .5 }100% {-webkit-transform: rotate(0deg) scale(1) skew(1deg);-webkit-opacity: .1 }}@-o-keyframes kmacb__phone-circle-anim {0% {-o-transform: rotate(0deg) scale(0.5) skew(1deg);-o-opacity: .1 }30% {-o-transform: rotate(0deg) scale(.7) skew(1deg);-o-opacity: .5 }100% {-o-transform: rotate(0deg) scale(1) skew(1deg);-o-opacity: .1 }}@keyframes kmacb__phone-circle-anim {0% {transform: rotate(0deg) scale(0.5) skew(1deg);opacity: .1 }30% {transform: rotate(0deg) scale(.7) skew(1deg);opacity: .5 }100% {transform: rotate(0deg) scale(1) skew(1deg);opacity: .1 }}@-moz-keyframes kmacb__phone-circle-fill-anim {0% {-moz-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }50% {-moz-transform: rotate(0deg) skew(1deg);opacity: .2 }100% {-moz-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }}@-webkit-keyframes kmacb__phone-circle-fill-anim {0% {-webkit-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }50% {-webkit-transform: rotate(0deg) scale(1) skew(1deg);opacity: .2 }100% {-webkit-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }}@-o-keyframes kmacb__phone-circle-fill-anim {0% {-o-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }50% {-o-transform: rotate(0deg) scale(1) skew(1deg);opacity: .2 }100% {-o-transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }}@keyframes kmacb__phone-circle-fill-anim {0% {transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }50% {transform: rotate(0deg) scale(1) skew(1deg);opacity: .2 }100% {transform: rotate(0deg) scale(0.7) skew(1deg);opacity: .2 }}@keyframes kmacb__phone-circle-img-anim {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {transform: rotate(-25deg) scale(1) skew(1deg) }20% {transform: rotate(25deg) scale(1) skew(1deg) }30% {transform: rotate(-25deg) scale(1) skew(1deg) }40% {transform: rotate(25deg) scale(1) skew(1deg) }50% {transform: rotate(0deg) scale(1) skew(1deg) }100% {transform: rotate(0deg) scale(1) skew(1deg) }}@-moz-keyframes kmacb__phone-circle-img-anim {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {-moz-transform: rotate(-25deg) scale(1) skew(1deg) }20% {-moz-transform: rotate(25deg) scale(1) skew(1deg) }30% {-moz-transform: rotate(-25deg) scale(1) skew(1deg) }40% {-moz-transform: rotate(25deg) scale(1) skew(1deg) }50% {-moz-transform: rotate(0deg) scale(1) skew(1deg) }100% {-moz-transform: rotate(0deg) scale(1) skew(1deg) }}@-webkit-keyframes kmacb__phone-circle-img-anim {0% {-webkit-transform: rotate(0deg) scale(1) skew(1deg) }10% {-webkit-transform: rotate(-25deg) scale(1) skew(1deg) }20% {-webkit-transform: rotate(25deg) scale(1) skew(1deg) }30% {-webkit-transform: rotate(-25deg) scale(1) skew(1deg) }40% {-webkit-transform: rotate(25deg) scale(1) skew(1deg) }50% {-webkit-transform: rotate(0deg) scale(1) skew(1deg) }100% {-webkit-transform: rotate(0deg) scale(1) skew(1deg) }}@-o-keyframes kmacb__phone-circle-img-anim {0% {-o-transform: rotate(0deg) scale(1) skew(1deg) }10% {-o-transform: rotate(-25deg) scale(1) skew(1deg) }20% {-o-transform: rotate(25deg) scale(1) skew(1deg) }30% {-o-transform: rotate(-25deg) scale(1) skew(1deg) }40% {-o-transform: rotate(25deg) scale(1) skew(1deg) }50% {-o-transform: rotate(0deg) scale(1) skew(1deg) }100% {-o-transform: rotate(0deg) scale(1) skew(1deg) }}@keyframes kmacb__phone-circle-img-anim-hover {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {transform: rotate(-35deg) scale(1) skew(1deg) }20% {transform: rotate(35deg) scale(1) skew(1deg) }30% {transform: rotate(-35deg) scale(1) skew(1deg) }40% {transform: rotate(35deg) scale(1) skew(1deg) }50% {transform: rotate(0deg) scale(1) skew(1deg) }100% {transform: rotate(0deg) scale(1) skew(1deg) }}@-moz-keyframes kmacb__phone-circle-img-anim-hover {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {transform: rotate(-35deg) scale(1) skew(1deg) }20% {transform: rotate(35deg) scale(1) skew(1deg) }30% {transform: rotate(-35deg) scale(1) skew(1deg) }40% {transform: rotate(35deg) scale(1) skew(1deg) }50% {transform: rotate(0deg) scale(1) skew(1deg) }100% {transform: rotate(0deg) scale(1) skew(1deg) }}@-webkit-keyframes kmacb__phone-circle-img-anim-hover {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {transform: rotate(-35deg) scale(1) skew(1deg) }20% {transform: rotate(35deg) scale(1) skew(1deg) }30% {transform: rotate(-35deg) scale(1) skew(1deg) }40% {transform: rotate(35deg) scale(1) skew(1deg) }50% {transform: rotate(0deg) scale(1) skew(1deg) }100% {transform: rotate(0deg) scale(1) skew(1deg) }}@-o-keyframes kmacb__phone-circle-img-anim-hover {0% {transform: rotate(0deg) scale(1) skew(1deg) }10% {transform: rotate(-35deg) scale(1) skew(1deg) }20% {transform: rotate(35deg) scale(1) skew(1deg) }30% {transform: rotate(-35deg) scale(1) skew(1deg) }40% {transform: rotate(35deg) scale(1) skew(1deg) }50% {transform: rotate(0deg) scale(1) skew(1deg) }100% {transform: rotate(0deg) scale(1) skew(1deg) }}.kmacb__manager {width: 150px !important;height: 150px !important }.kmacb__manager-circle {background: #52aff7;position: absolute;width: 120px;height: 120px;top: 50%;left: 50%;margin-top: -60px;margin-left: -60px;border-radius: 100% }.kmacb__manager-img {background: center bottom no-repeat;position: absolute;width: 120px;height: 120px;top: 50%;left: 50%;margin-top: -60px;margin-left: -60px;border-radius: 100% }.kmacb__manager-border {position: absolute;width: 75px;height: 75px;top: 50%;left: 50%;margin-top: -39.5px;margin-left: -39.5px;border-radius: 100%;border: 2px solid #ffe787;-webkit-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;-moz-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;-ms-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;-o-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;opacity: .8;transform-origin: center }@-webkit-keyframes kmacb__manager-border-anim {0% {transform: scale(1) }75% {opacity: .6 }100% {transform: scale(2.1);opacity: .3 }}@-moz-keyframes kmacb__manager-border-anim {0% {transform: scale(1) }75% {opacity: .6 }100% {transform: scale(2.1);opacity: .3 }}@-ms-keyframes kmacb__manager-border-anim {0% {transform: scale(1) }75% {opacity: .6 }100% {transform: scale(2.1);opacity: .3 }}@-o-keyframes kmacb__manager-border-anim {0% {transform: scale(1) }75% {opacity: .6 }100% {transform: scale(2.1);opacity: .3 }}@keyframes kmacb__manager-border-anim {0% {transform: scale(1) }75% {opacity: .6 }100% {transform: scale(2.1);opacity: .3 }}.kmacb__manager-fill {background: #52aff7 center bottom no-repeat;position: absolute;width: 75px;height: 75px;top: 50%;left: 50%;margin-top: -37.5px;margin-left: -37.5px;border-radius: 100%;opacity: .5;-webkit-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;-moz-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;-ms-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;-o-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;transform-origin: center }@-webkit-keyframes kmacb__manager-fill-anim {0% {transform: scale(1) }75% {opacity: .3;transform: scale(2.1) }100% {opacity: 0;transform: scale(2.1) }}@-moz-keyframes kmacb__manager-fill-anim {0% {transform: scale(1) }75% {opacity: .3;transform: scale(2.1) }100% {opacity: 0;transform: scale(2.1) }}@-ms-keyframes kmacb__manager-fill-anim {0% {transform: scale(1) }75% {opacity: .3;transform: scale(2.1) }100% {opacity: 0;transform: scale(2.1) }}@-o-keyframes kmacb__manager-fill-anim {0% {transform: scale(1) }75% {opacity: .3;transform: scale(2.1) }100% {opacity: 0;transform: scale(2.1) }}@keyframes kmacb__manager-fill-anim {0% {transform: scale(1) }75% {opacity: .3;transform: scale(2.1) }100% {opacity: 0;transform: scale(2.1) }}.kmacb-form .modal-block {border: 0;box-shadow: none;font-family: Arial;border-radius: 10px;overflow: hidden;color: #222;line-height: 1.5 !important;width: 570px }.kmacb-form .modal-block .title {background: transparent;text-shadow: none;color: #222;font-weight: bold;font-size: 22px;border-bottom: 0;text-transform: none }.kmacb-form .modal-block .icon-close {margin: 10px }.kmacb-form .modal-block .padding {padding: 20px 40px 40px }.kmacb-form .modal-block p {font-size: 16px;text-align: left;line-height: 1.5 }.kmacb-form form {margin: 10px 0;text-align: center;width: 100%;height: auto;background: 0;position: static;padding: 0;border: 0 }.kmacb-form form input[type="text"] {height: 36px;line-height: 36px;color: #222;border: 1px solid #aaa;padding: 0 10px;width: 200px;display: inline-block;text-indent: 0;border-radius: 3px;background: #fff;font-size: 14px;font-style: normal;box-shadow: none;position: static;margin: 0 0 10px 0 }.kmacb-form form ::-webkit-input-placeholder {color: #888 }.kmacb-form form ::-moz-placeholder {color: #888 }.kmacb-form form :-moz-placeholder {color: #888 }.kmacb-form form :-ms-input-placeholder {color: #888 }.kmacb-form form input {float: none }.kmacb-form form input[name="name"] {padding-right: 10px }.kmacb-form form input[type="submit"] {position: static;cursor: pointer;border: 0;background: #c4191c;color: #fff;font-size: 16px;padding: 0 10px;color: #fff;text-transform: uppercase;line-height: 38px;height: 38px;vertical-align: top;margin: 0;display: inline-block;text-indent: 0;text-align: center !important;border-radius: 3px;font-style: normal;font-size: 14px;font-family: Arial, Helvetica, sans-serif;width: auto;opacity: 1 }.kmacb-form form input[type="submit"]:hover {background: #dd070b;text-decoration: none }.kmacb-form2 .modal-block {font-family: sans-serif }.kmacb-form2 .modal-block {width: 300px;border-radius: 5px }.kmacb-form2 .modal-block .title {padding: 0;text-align: center;line-height: 100px;position: relative;color: #fff;text-transform: uppercase;background: #1c70d8;font-size: 20px;font-weight: bold;letter-spacing: 1px }.kmacb-form2 .modal-block .padding {padding: 30px }.kmacb-form2 .modal-block p {color: rgba(0, 0, 0, .75);line-height: 1.5;font-size: 16px }.kmacb-form2 form {margin: 30px 0 }.kmacb-form2 form * {box-sizing: border-box }.kmacb-form form input[type="text"] {border: 2px solid #bdbdbd;height: 56px;line-height: 56px;width: 100%;padding: 0 15px;font-size: 20px }.kmacb-form form input[type="submit"] {width: 100%;background: #f13650;height: 80px;line-height: 80px;border-radius: 40px;color: #fff;font-size: 20px;letter-spacing: 1px;font-weight: bold;margin-top: 10px }.kmacb-form .kmacb-form-clock {line-height: 33px !important;padding-left: 46px;background: left center no-repeat;}.kmacb-form .kmacb-form-rectangle {position: absolute;width: 48px;height: 24px;bottom: -12px;left: 50%;margin-left: -24px;background: center bottom no-repeat;}#agreement .title {line-height: 1.3;padding-top: 15px;padding-bottom: 15px }#agreement .content {line-height: 1.5;font-size: 12px }#agreement .content p {margin-bottom: 20px;font-size: 12px }#agreement .content p.no-margin {margin: 0 }rekv {display: inline-block;font-size: 12px }select, button, input[type="submit"] {-webkit-appearance: none;-moz-appearance: none }@media screen and (min-width:470px) {.kmacb-form2 .modal-block {width: 460px }}#polit.modal .content {font-size: 12px }@media screen and (max-width:500px) {.kmacb-form2 .modal-block .title {line-height: 30px;padding: 35px 0 }.modal-block .icon-close {top: 0;margin: 5px;width: 10px;height: 10px;background-size: cover }}</style>
</html>