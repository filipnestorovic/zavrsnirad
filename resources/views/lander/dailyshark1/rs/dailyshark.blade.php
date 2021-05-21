<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="HandheldFriendly" content="true" />
    <link rel='icon' type='image/png' href='{{ asset('/') }}dailysharkFiles/dailyshark/header_shark.png'/>
    <link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/dailyshark/base.css" type="text/css" rel="stylesheet">
    <script src="{{ asset('/') }}dailysharkFiles/dailyshark/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}dailysharkFiles/dailyshark/jquery-ui.min.js" type="text/javascript"></script>
    <style>html{scroll-behavior:smooth}.red_text{color:red}#VbAH1H7oOcTviNLA3T42vrV7SvyfEpGN{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3065.jpg");background-position:center;background-repeat:no-repeat;background-attachment:scroll;background-size:cover;border-top:0;border-left:0;border-right:0;border-bottom:0;position:relative;display:block}#gfsPMpsoiaBKQUsIKDIVTyvkLJRdIXyk{border-top:0;border-left:0;border-right:0;border-bottom:0;background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3111.jpg");background-position:top center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;position:relative;display:block}#wG1zWKLmbd6Ta08CohngsUOzV6DBBIXr{border-top:0;border-left:0;border-right:0;border-bottom:0;background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/bg3.png");background-position:center;background-repeat:no-repeat;background-attachment:scroll;background-size:cover;position:relative;display:block}#Ze0yZRo020SXAUuTnqZc08C4b775r5Tb{position:absolute;display:block;z-index:100007;background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3073.jpg");background-position:center;background-repeat:repeat;background-attachment:scroll;background-size:cover;border-top:0;border-left:0;border-right:0;border-bottom:0;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;box-shadow:0 0 7px rgba(0,0,0,.21);height:282px;width:290px;top:70.171875px;left:635.984375px;display:block}#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0{border-top:0;border-left:0;border-right:0;border-bottom:0;background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/back5.jpg");background-position:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;position:relative;display:block}#FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ{border-top:0;border-left:0;border-right:0;border-bottom:0;background-color:#b5b5b5;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3131.jpg");background-position:center right;background-repeat:repeat-x;background-attachment:fixed;background-size:cover;position:relative;display:block}@media only screen and (max-width:763px){#VbAH1H7oOcTviNLA3T42vrV7SvyfEpGN{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3065.jpg");background-position:center;background-repeat:no-repeat;background-attachment:scroll;background-size:cover;display:block}}@media only screen and (max-width:763px){#gfsPMpsoiaBKQUsIKDIVTyvkLJRdIXyk{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3111.jpg");background-position:bottom center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;display:block}}@media only screen and (max-width:763px){#wG1zWKLmbd6Ta08CohngsUOzV6DBBIXr{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/bg3.png");background-position:center;background-repeat:no-repeat;background-attachment:scroll;background-size:cover;display:block}}@media only screen and (max-width:763px){#Ze0yZRo020SXAUuTnqZc08C4b775r5Tb{width:312px;height:290px;top:906px;left:4px;background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3073.jpg");background-position:center;background-repeat:no-repeat;background-attachment:scroll;background-size:cover;display:block}}@media only screen and (max-width:763px){#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/back5.jpg");background-position:top center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;border-top:0;border-left:0;border-right:0;border-bottom:0;display:block}}@media only screen and (max-width:763px){#FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ{background-color:#fff;background-image:url("{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3124.jpg");background-position:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;display:block}}#discountText{color:red;display:block;width:600px;position:absolute;font-family:"russo one";font-size:24px;font-weight:400;z-index:100006;top:190px;left:150px;height:60px;text-align:center;text-align-last:center;font-style:normal;display:block;text-align:center}@media only screen and (max-width:763px){#discountText{width:320px;height:180px;top:250px;left:0;text-align:center;text-align-last:center;z-index:100007;line-height:1.3;display:block}}</style>
</head>
<body id="Zcc579e32ab7c2c234c287cbcbc03f3a7639f9f1">
@include('components.display_errors')
<div id="oqg4FEKLQtgTinqigLcaCTK6SpmrSWdS" class="widget widget-section">
    <div class="row">
    </div>
</div>
<div id="VbAH1H7oOcTviNLA3T42vrV7SvyfEpGN" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="eQEVU6WQLDdMoRkTXNVRCKr48cVWyW8Q" class="widget widget-text">
                <p>AKTIVNA PENA ZA SUVO PRANJE <br> <span style="color: rgb(66, 113, 134);">DAILYSHARK</span>
                </p>
            </div>
            <div id="C2JMPRz3u1H8S2l5I4HErc1HzUXXPbO7" class="widget widget-text">
                <p>Daily Shark pena je sprej za suvo pranje i dezinfekciju svih površina – automobila, nameštaja, kuhinjskih stolica, tepiha pa čak i prljavih cipela!</p>
            </div>
            <div id="omKCV1kAKgrozxE5h7vMHnFpU2Bvm6fM" class="widget widget-box"></div>
            <div id="ooXWT9qcRm5vsMsup0N2EOUFTv6Z8VNW" class="widget widget-box"></div>
            <a href="#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" id="OmJQwPJ7fVKpQqf97V1b34JUzGmKZopX" class="widget widget-button" version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="LkOHEkkTGVX4Pf87a4accAa2Vm3vC1t9" class="widget widget-text">Naručite odmah</div>
            </a>
            <div id="hDKEo2vuXPyg7iV4A5nwnauFEyw8HHB7" class="widget widget-box"></div>
            <div id="f3FCiMVk8mcuqxNE3bp09qoUUAhzB2TG" class="widget widget-box"></div>
            <div id="vnZNTy7r52hUWrnuW8lSSfzCyGThC2zL" class="widget widget-box"></div>
            <div id="XrXHSdiVTQTXImRGIAb7xHWalKI7G007" class="widget widget-text">
                <p><span style="text-decoration-line: line-through; color: rgb(215, 82, 38);">{{ $prices[1]['originalPrice'] }} RSD</span></p>
            </div>
            <div id="KsSsNhiqwzb3OTPLHyKDTLNfrzdy49vH" class="widget widget-text"><p>{{ $prices[1]['amount'] }} RSD</p></div>
            <div id="anu051xvDkL4NUBrpDbMoJ6b7gLgdhnM" class="widget widget-text">
                <p>Uštedi 40%
                    @if($discount)
                        <span class="red_text">+ {{ $discount }}% dodatno</span>
                    @endif
                </p>
            </div>
            <img id="Nqtm0kFhH0hI9vbsH8uMOPS9gSN9TlUy" width="66" height="210"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark1.png"
                 alt="" >
            <img id="CsFTug0wCEgr4waD4rqQJOHpTgXOnsdk"  width="340" height="87"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/bg6.png"
                 alt="" >
            <i id="PtfIRyK4zOiHyBOLUUKtd2F2QMUOXguO" class="fa fa-arrow-down widget widget-icon"></i>
            <div id="p83SwEIXxyhqDhEAdZWWrIlrqddLUW3J" class="widget widget-text">
                <p>AKTIVNA PENA ZA SUVO PRANJE <span style="color: rgb(215, 82, 38);">DAILYSHARK</span></p>
            </div>
            <img id="xrlLiI2hDnQ7tUTblwUUSl5h1kChM9gF"  width="60" height="61"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/logo_daily.png"
                 alt="" >
        </div>
    </div>
</div>
<div id="hUXgIGk0xCP7Rkv1nzxguQx3XRblRGRu" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="KXsADkNFB0VRf7vHaOf1sdSp713INbeH" class="widget widget-box"></div>
            <div id="lSdZKnaTEVuz3tOeLKaAxizE9H1fDltC" class="widget widget-text">
                <p>Dokazani kvalitet</p>
            </div>
            <div id="sFwbCwUcoGIr16KBRd4qgrs05EeCzUly" class="widget widget-text">
                <p>Preko 10 različitih primena proizvoda</p>
            </div>
            <div id="aIQ3kAxUh7WoiVwumU4KiWU4WHRCSb9k" class="widget widget-text">
                <p>Više od 10 000 zadovoljnih kupaca</p>
            </div>
            <div id="sh1HTPMbO2pBA5v8uHEnXqcTIBLn4s2d" class="widget widget-box"></div>
            <div id="PCxkQq2QXImC4piNWl2PRgtbkOiGm4vh" class="widget widget-box"></div>
            <div id="K8gi1l5QJdJVsZ7DTygzz2ptisH5xJiM" class="widget widget-box"></div>
            <div id="xBiTKIo6ys426Q7IJZTNbBE7xyTP2s5R" class="widget widget-box"></div>
            <i id="qiX1u2KewWfgcxAHCNJ4imExDQ75TGEq" class="fa fa-arrow-down widget widget-icon"></i>
        </div>
    </div>
</div>
<div id="nBak5bgWTTneZHhXuhppRG0xKnu5PlU1" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="xHs9xRtWSTxZV6m1iI4zZGEJRmefvyhE" class="widget widget-text">
                <p><span style="color: rgb(215, 82, 38);">AKTIVNA PENA ZA SUVO PRANJE</span></p>
            </div>
            <div id="UbgCoO3tq9RWbg6ZAGvoSHJWdsWSiAR8" class="widget widget-text">
                <p><span style="color: rgb(66, 113, 134);">DAILYSHARK</span></p>
            </div>
            <div id="keH3aZUKLnccVAUuhTZwWS8G7e2Tpp0g" class="widget widget-text">
                <p><span style="color: rgb(255, 255, 255);">Gusta pena rastvara prljavštinu i čini je lakom za otklanjanje. Daily Shark je inovativno rešenje za brzo, lako i efikasno čišćenje najefikasnijih površina.</span></p>
            </div>
            <a href="#GHkJN4VGRI7o0yDNOxIncXHLpUtfHuuw" id="tHZqcuDeAVy3mzdFqTIQI2LCckNT1ZLX" class="widget widget-button"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="vCUclL0TacdTdo9RUFoinRwlhqMTIABD" class="widget widget-text">Saznaj više</div>
            </a>
            <i id="XZFXC3KsaebcikDIyb596pCraGF8HKgM" class="fa fa-arrow-down widget widget-icon"></i>
            <img id="KPHn6Zn2OATKE0cTyfRRS8vuOsVdFbzQ"  width="87" height="272"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark1.png"
                 alt="" >
            <img id="Q2Hm1pP8OkxcQZLywc42ZxA5JJRd2CbG"  width="100" height="103"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/logo_daily.png"
                 alt="" >
        </div>
    </div>
</div>
<div id="GHkJN4VGRI7o0yDNOxIncXHLpUtfHuuw" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="RJuTZTbHLKrWdpIN9zMkKTbnRb0NbLoV" class="widget widget-text">
                <p>JEDAN PROIZVOD – VIŠE NAMENA</p>
            </div>
            <div id="nhqV2tzuvvIitDLvzrm3R7GAdbhlwkUQ" class="widget widget-text">
                <p>Čist i svež automobil</p>
            </div>
            <img id="T6TAw0wg0AExxx6EQdDSFDEO021evce1"  width="460" height="306"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/DSCF3073.jpg"
                 alt="" >
            <div id="ThA2JQ2bGV0ygvvfHBpvFiiz1EaJgohA" class="widget widget-box"></div>
            <div id="k35JLBTmWzfOhdZWsGPyfPkdSAhSRTZF" class="widget widget-box"></div>
            <div id="NUlVi9DE4tbdK5xvOBwdGrsHM69kLMtu" class="widget widget-box"></div>
            <div id="idQvuJMQ8LVsKRHT2cJgG9XX6L5quOXw" class="widget widget-text">
                <p>Pena je pogodna za čišćenje unutrašnjosti, sedišta pa čak i spoljašnjosti Vašeg automobila</p>
            </div>
            <div id="TbCP1nR3HN7w8GTiD0Hq99gAS939CMIG" class="widget widget-text">
                <p>Čist nameštaj i tapacirane površine</p>
            </div>
            <div id="NXFz6RTQ9DqvHRUt0d10g54wKNkgJCQW" class="widget widget-box"></div>
            <div id="SQeRSaKNau2uRhyGlWSnxGTghomNBetg" class="widget widget-text">
                <p>Pena se može koristiti za čišćenje tepiha, nameštaja, kuhinjskih stolica pa čak i prozora i keramičkih površina. </p>
            </div>
            <div id="EE61nTuybBvTp8nVvBCCsNITesnALbD6" class="widget widget-text">
                <p>Udahnite Vašoj obući nov život</p>
            </div>
            <div id="O5ZGK45wMzpC2WDnKieOZHlWMSGwfxed" class="widget widget-box"></div>
            <div id="UCWQgJBASIxZKc6wRzkWqQJGrXhTygli" class="widget widget-text">
                <p>Pena se može korisiti na bilo kojoj tekstilnoj površini bez rizika da je oštetite. Vaše omiljene cipele biće ponovo kao nove!</p>
            </div>
            <div id="IfLocBbVGnBqqIVAwDF9pQH0XI44QcZc" class="widget widget-text">
                <p>Lako, brzo i praktično</p>
            </div>
            <div id="Ahdv2V6PTtuF4cNfGmgh5FegwyHNFxcK" class="widget widget-box"></div>
            <div id="tORrd1uMyyoy2dstzCTWLQStXZ4UtTai" class="widget widget-text">
                <p>Dovoljno je samo naprskati na željeno mesto, sačekati par minuta i gotovo!</p>
            </div>
            <div id="A7fRX1H2eCBawTk8gaNnWEcPTz4UPrI0" class="widget widget-text">
                <p>100% biorazgradiv</p>
            </div>
            <div id="nQswBu1JMIu1o5P8Cz4GDI5An7S1oqI3" class="widget widget-text">
                <p>Proizvod je potpuno biorazgradiv! Čuvati na suvom i hladnom mestu. Izbegavati kontakt sa kožom i držati van domašaja dece.</p>
            </div>
            <div id="ak2TvM8wecQTJavRIPDhxIsT4QsEueSW" class="widget widget-box"></div>
            <div id="BTzIAe4v7bbpR5WhUfC7vfAKon6cgZSi" class="widget widget-text">
                <p>Inovativni Daily Shark sprej će se pobrinuti za to u roku od samo par minuta. </p>
            </div>
            <a href="#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" id="wblIGrckytqEaJThfhxdlpTPu8PG6s7u" class="widget widget-button"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="lHH1Giwfh1rkaDs16PTPil1gGnFtG9ab" class="widget widget-text">Naručite odmah</div>
            </a>
            <div id="CUybPHoJD3gfGaCBW8psDXKkLxFfcRLa" class="widget widget-text">
                <p><span style="text-decoration-line: line-through; color: rgb(215, 82, 38);">{{ $prices[1]['originalPrice'] }} RSD</span></p>
            </div>
            <div id="fp6rODgWdFeivqrTQea8sw6EanXXc1Wz" class="widget widget-text"><p>{{ $prices[1]['amount'] }} RSD</p></div>
            <div id="UwD126gR360vrfourFTJ18teksT09Pp7" class="widget widget-text">
                <p>Uštedi 40%
                    @if($discount)
                        <span class="red_text">+ {{ $discount }}% dodatno</span>
                    @endif
                </p>
            </div>
            <i id="SiQ9yluK4QMMhtD8LvTcTkAi3H6Ci9pK" class="fa fa-arrow-down widget widget-icon"></i>
        </div>
    </div>
</div>
<div id="vawgfZ1QKOoT3ZAfmZ5OpfalXMnqb7d1" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="wPH71G2LF9ErNaeiwsCbZXtM44KGEzWC" class="widget widget-text">
                <p>SUPER AKTIVNA PENA ZA ČIŠĆENJE SVIH POVRŠINA</p>
            </div>
            <div id="hAVEkodOkph0otVufg08ee1QOGVMz7c2" class="widget widget-text">
                <p>DAILY SHARK AKTIVNA PENA 400ML</p>
            </div>
            <div id="rhymQ2paiD2qJCzpV0lJTgxLvsdcduuZ" class="widget widget-text">
                <p>Mnogo problema se može rešiti samo jednim proizvodom. Praktična primena u kući, kancelariji ili automobilu. Proizvod visokog kvaliteta! Proizvedeno u Nemačkoj.</p>
            </div>
            <img id="AI0oAcV80XvTsVMCPkiXm8Lv84xsPppe"  width="214" height="214"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark2.jpg"
                 alt="" >
            <a href="#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" id="QTpVwUTrF4df7baLZD7Vl6aRup37Zfmn" class="widget widget-button"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="Twd2FRWNLTotbulSXclZiOGSAoRWEVWO" class="widget widget-text">Pogledaj ponudu</div>
            </a>
            <i id="TsRWTf7XI7d5EayZFWRJiHeXJgsOE4q5" class="fa fa-arrow-down widget widget-icon"></i>
        </div>
    </div>
</div>
<div id="gfsPMpsoiaBKQUsIKDIVTyvkLJRdIXyk" class="widget widget-section  ">
    <div class="row">
        <div class="container">
            <a href="#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" id="NbBsZrXazUSWbMgFUDMbBR0JIOZ7rlUy" class="widget widget-button"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="w8HQigvIudPPODpIZP3drSAuNz9HsRi8" class="widget widget-text">Naručite odmah</div>
            </a>
            <div id="yeK7ImHxUhzVJ9OrrqozL5BsS3lfP71F" class="widget widget-text">
                <p>ZAŠTO JE DAILY SHARK BOLJI OD OSTALIH PROIZVODA?</p>
            </div>
            <div id="e5pQNb0yrmT3sNMs0O3hTTIEyZO8OySQ" class="widget widget-text">
                <p>Proizvod je potpuno biorazgradiv! Čuvati na suvom i hladnom mestu. Izbegavati kontakt sa kožom i držati van domašaja dece!</p>
            </div>
            <div id="kLuF7eWFbaMaXNCfGJTUazQK26SQLWID" class="widget widget-box"></div>
            <div id="n53r3FD3uoT9B08p9IcXSV3ze9pyFE3C" class="widget widget-text"><br>
                <ul>
                    <li>Automobili</li>
                    <li>Motocikli, čamci, bicikli</li>
                    <li>Kuhinjske stolice i ostale tekstilne presvlake</li>
                    <li>Tepisi prostirke</li>
                    <li>Prozori, keramičke površine, drvo, plastika</li>
                    <li>Cipele, koža, antilop koža</li>
                </ul>
            </div>
            <div id="ZBfXOgz5s9KSXiRta8RqzBb1Gd0BVmTG" class="widget widget-text  ">
                <p>Gusta pena rastvara prljavštinu i izbija je na površinu!</p>
            </div>
            <div id="yvuA53N32Gn1TKoHrHEL42ONQP30kqSN" class="widget widget-text  ">
                <p>Primena: Pena se naprska na površinu koju želite da očistite, sačekajte par sekundi, a zatim obrišite vlažnom krpom ili peškirom (preporuka je da bude neutralne boje)</p>
            </div>
            <div id="qQwT7Ap3hSPZyT1xg25r8TS2a1B1CwRL" class="widget widget-box  "></div>
            <div id="KZ41i2SixQLbd2cOsJQxtCXDiWbuFTCx" class="widget widget-box  "></div>
            <div id="TQ66ZPLiWZ8tc9S2b4tiQPRAh74cEb0c" class="widget widget-text  ">
                <p>Sadržaj: Alifatski ugljovodonoci 5%-15%</p>
                <p>Anjonski tenzidi: <5%</p>
                <p>Parfemi: citrus</p>
            </div>
            <div id="BofrNma3dZfedlZmigaGyi0V9afCLqbf" class="widget widget-box"></div>
            <i id="bSy9l9WXNQm0KXwZf30Tuky1k8WXQecV" class="fa fa-arrow-down widget widget-icon"></i>
            <div id="TRIrrPQa3AUiZS4csKDCMbnWzGX1HxcB" class="widget widget-box  "></div>
            <div id="IOiAg1yHegb2cHv3TsPz56RTqHfiehIm" class="widget widget-box  "></div>
            <div id="OJhLXEcv3DCGXCETP93w9ItTCiddefge" class="widget widget-box"></div>
            <div id="n8eTzRCzHnPuslPOLB3kAZnAhC14k5g5" class="widget widget-box"></div>
        </div>
    </div>
</div>
<div id="wG1zWKLmbd6Ta08CohngsUOzV6DBBIXr" class="widget widget-section">
    <div class="row">
        <div class="container">
            <div id="NoFshoeBfyEiTga1BrRZffDecT6t9yDN" class="widget widget-text">
                <p>ŠTA KAŽU NAŠI KORISNICI?</p>
            </div>
            <img id="J1UOWnplGHNTxyxUM2IE8nDLggLpI3oW"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-open.png"
                 alt="" >
            <img id="JHpwtNVTKJCLCy7LqAf0SH2JoGwcHIzT"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-close.png"
                 alt="" >
            <div id="zfFH179mEgGykducDribfONXG0ZFzSTN" class="widget widget-text">
                <p>Utisci kupaca</p>
            </div>
            <img id="MCXgmUQHRZ1bgpC8Me3zz9VCs0hacpFr"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-close.png"
                 alt="" >
            <img id="CvqO6TG1b4T5JEQI1ur6CdBzwP8W8Ebz"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-open.png"
                 alt="" >
            <img id="Ct4xTZVNBM58QOPhmhKtzT5RDldau4Ki"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-open.png"
                 alt="" >
            <img id="ky5ot9nFynXTr8zxTwGhagkzRm1F9Fqm"  width="45" height="32"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/quote-close.png"
                 alt="" >
            <div id="tzqI3EqocaDEiUWwTsWnqKvoimIBLz1U" class="widget widget-box"></div>
            <div id="wpxxNXRJ15DIdnxIcEaTAMTS5KTemZ65" class="widget widget-box"></div>
            <div id="T5Mu5N4dbHJrenJOwt0vkLnDedP7lkrs" class="widget widget-box"></div>
            <div id="mUfPMAQMTotxcdOeUMgN7mZSVXDIDnSI" class="widget widget-text">
                <p>Veoma sam zadovoljan! Čisti odlično. Jedna boca je bila dovoljna za sva sedišta u mom automobilu.</p>
            </div>
            <div id="mW7VhF8JBriblnUSTGiFTfx5mdHAQ6KW" class="widget widget-text">
                <p>Veoma ekonomičan proizvod. Radi na svakim površinama, premašilo je sva moja očekivanja!</p>
            </div>
            <div id="PJR9KUBkbTgZlnqtueZgMCwbIolqNBVA" class="widget widget-text">
                <p>Marko Petrović</p>
            </div>
            <div id="OFxHdOwNmreSolbS004id5Vo42zH94N5" class="widget widget-text">
                <p>Predrag Marković</p>
            </div>
            <div id="mGbsbUJAqk2FIKlA8mlIJSaPQP5S6mUq" class="widget widget-text">
                <p>Nisam verovao da ću ikada uspeti da uklonim mrlje sa cipela ali prevario sam se. Daily Shark čisti sve!</p>
            </div>
            <div id="f0TzzuTBaEJ2mfR3C5kL42Hm00860f9L" class="widget widget-text">
                <p>Jovan Lazarević</p>
            </div>
            <i id="qVbnoC79UyNtCUX8HVLa8eJc4TVu9NIs" class="fa fa-star widget widget-icon"></i>
            <i id="UBtx3U9ox92ukT4armmygmeKudSCAZTc" class="fa fa-star widget widget-icon"></i>
            <i id="BykgTiPvEFRfFW8u2Tns26lgRGqfHN2Z" class="fa fa-star widget widget-icon"></i>
            <i id="zoTzoPEriSCJAu0pCf7f1R5CTv0swIvw" class="fa fa-star widget widget-icon"></i>
            <i id="FFSn9nSQlexo6UmUV6SRn79VWpTJiFAa" class="fa fa-star widget widget-icon"></i>
            <div id="Ze0yZRo020SXAUuTnqZc08C4b775r5Tb" class="widget widget-box"></div>
            <div id="datnwgmGBw68kzuVXgRl76u1HC5Uaohl" class="widget widget-box"></div>
            <div id="xs1O600hA3WzgXalCsqseUy18qqmzTsH" class="widget widget-box"></div>
            <div id="FipmKQHLE9ZUDDKDRkAKTT6aFBhTqftJ" class="widget widget-box"></div>
            <div id="VeLFKOePLHU8To1UP3TRKQ925WoAZURv" class="widget widget-box"></div>
            <div id="nT00XUZdSB2Trg1eoVG3N3qZEh3zssgC" class="widget widget-box"></div>
            <div id="MycZqwnw5iNALvwVRvO4t2rJ1VDssEFm" class="widget widget-box"></div>
            <i id="Fkf6ghA8dToqzf57FxWfc7VFm5QuT2mt" class="fa fa-arrow-down widget widget-icon"></i>
            <a href="#TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" id="wa4TdDO7QF2JIvilh5vnl054IkmJ108D" class="widget widget-button"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="qx7RFCJzKwzVJqet3nKQz1GctSIBSGxr" class="widget widget-text">Naručite odmah</div>
            </a>
        </div>
    </div>
</div>
<div id="TOgUWOUmyyUyArTT5ia49mJie6dBaAp0" class="widget widget-section  ">
    <div class="row">
        <div class="container">
            <div id="J7cGtZHgNv5WMpiWSzbz0Uv0JgIhy8ky" class="widget widget-text">
                <h4>DVA KOMADA</h4>
            </div>
            <div id="mJCodTD4Kl1cXfoDHbZhEt5MrVuDUZMl" class="widget widget-text">
                <p>2 komada</p>
            </div>
            <div id="Ll0M2IZJmgpgCkt0GJXdDopFhhA1BKZ3" class="widget widget-box  "></div>
            <div id="iCFLuHwh2xO3rT1iuJwUnJSMTqPg9pT4" class="widget widget-text">
                <h4>{{ $prices[2]['amount'] }} RSD</h4>
            </div>
            <div id="m0lHl93TRgtoU5r4mQZPxDlODe2BXP9k" class="widget widget-text">
                <h4>JEDAN KOMAD</h4>
            </div>
            <div id="eCC06BqkKvTA56TVVA09kkSTFf2K5qLw" class="widget widget-text">
                <h4>{{ $prices[1]['amount'] }} RSD</h4>
            </div>
            <div id="UbJeZpdmmgmoySriEziTgsRtMdg02533" class="widget widget-text  ">
                <p>1 komad</p>
            </div>
            <div id="mrTN7qs3TkosJKh8fdM8ktU5zFIDJvRK" class="widget widget-text  ">
                <p>3 komada</p>
            </div>
            <div id="NIwCuzXVeJ2pfscRFnwTsT2bpiUiNosW" class="widget widget-text">
                <h4>{{ $prices[3]['amount'] }} RSD</h4>
            </div>
            <div id="DJyV5nz04nvwKZkg3gSN65HFwT0r7AaX" class="widget widget-text  ">
                <h4>TRI KOMADA</h4>
            </div>
            <div id="yC8ETMWfTzO9EdGo8qlaq4uW0l9NIBv9" class="widget widget-text">
                <h2><span style="color: rgb(215, 82, 38);">NAŠA POSEBNA PONUDA</span></h2>
            </div>
            <div id="JrINmqT719i177efKOKHKcdw8gI9zNHW" class="widget widget-text">
                <p><span style="color: rgb(215, 82, 38);">Požurite!</span> Specijalna ponuda je ograničena. Uštedite novac, napor i vreme!</p>
            </div>
            <div id="HMlkbdaTeI7HZA57SRNqAwbventJZTcc" class="widget widget-text">
                <h4><strike>{{ $prices[2]['originalPrice'] }} RSD</strike></h4>
            </div>
            <div id="zOgpwHTaLzHtyJzLE9NoDH53lKw4AIGW" class="widget widget-text">
                <p>UŠTEDI {{ 40+$discount }}%</p>
            </div>
            <div id="dVirGpfnLxnzdiNn4Zwt527FmZkB44uv" class="widget widget-text">
                <h4><strike>{{ $prices[1]['originalPrice'] }} RSD</strike></h4>
            </div>
            <div id="gh4wNTxl6oRR6EZZkENaIpMrBAGxxSR4" class="widget widget-text">
                <p>UŠTEDI {{ 40+$discount }}%</p>
            </div>
            <div id="m0TOFQlviwLfEMR5MBFepHZ3ClhklnaQ" class="widget widget-text">
                <h4><strike>{{ $prices[3]['originalPrice'] }} RSD</strike></h4>
            </div>
            <div id="E2h7xgQ3LUibsWXMr13DqJgRFen7oTPp" class="widget widget-text  ">
                <p>UŠTEDI {{ 40+$discount }}% + BESPLATNA POŠTARINA</p>
            </div>
            <img id="eQwnZUeK7OrJyXMlfudcQLh0Aac1QRDT"  width="145" height="191"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/2BR.png"
                 alt="" >
            <img id="W7RTfm5os75omrpK9AVLKTU1V6Bk1s9J"  width="134" height="177"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/3BR.png"
                 alt="" >
            <div id="a71ZgLPpylauzswwwAFl936ZgOPlTEEn" class="widget widget-text">
                <p>NAŠA POSEBNA PONUDA</p>
            </div>
            <div id="NrVZgamvvWk82PST79aJRZAaoaz78PDt" class="widget widget-box"></div>
            <img id="m5Im2Wge1XyqtBrbyiVcxms2VAiLoB95"  width="163" height="163"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark2.jpg"
                 alt="" >
            <img id="tuNr9c4AXanqR5xzmKOoD5ctytRglWZT"  width="163" height="163"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark2.jpg"
                 alt="" >
            <img id="LONs3VgtxxnkIT5IZ89bUbdaVZn6QvPI"  width="163" height="163"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark2.jpg"
                 alt="" >
            <div id="OoAcPTQWKVgM9SxBxo0q3Ax7VrSUDhWN" class="widget widget-box  "></div>
            <div id="TGFSRyvpxIeBn5czNDx8cK35cU5zVQhk" class="widget widget-box  "></div>
            <a href="#FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ" title="2" id="EGdzLH7rfZxki6kylubsXAUlBweSDcPz" class="widget widget-button button-quantity"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="Etzk4gDlrV3BT0O0BVZHvkdXKl100zNs" class="widget widget-text">Naručite odmah</div>
            </a>
            <a href="#FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ" title="1" id="gUPHxZcXD1IxWqWbQqnb26Tm23nA5Ic9" class="widget widget-button button-quantity"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="runk11LJXmfQB9VmwzNaumFPcLB1Dudu" class="widget widget-text">Naručite odmah</div>
            </a>
            <a href="#FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ" title="3" id="awFeHzUksHuZUQRV7sl9wF80nSKuqC1L" class="widget widget-button button-quantity"  version="3" subtype="anchor" rel="noopener noreferrer" >
                <div class="widget-overlay"></div>
                <div id="Z1yA6VJ1tH0e2OSHXQvtinx0ML0mGmJF" class="widget widget-text">Naručite odmah</div>
            </a>
            <div id="z7IoAEmRG0pao6Cvuqql8hOZFfsphH39" class="widget widget-box  "></div>
            <img id="yZ5aSW3z0oJ8mULvHOMOL2SyU7rZ3qSV"  width="49" height="152"  class="widget widget-image"
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark1.png"
                 alt="" >

            <div id="discountText" class="widget widget-text" style="text-transform: uppercase;">
                @if($discount)
                Primenjen dodatni popust od {{ $discount }}%!
                @endif
            </div>
            <div id="EhOMza4DDLfh5W2vupdPvNAtkSdBwftP" class="widget widget-text">
                <p><span style="color: rgb(215, 82, 38);">Požurite!</span> Specijalna ponuda je ograničena. Uštedite novac, napor i vreme!</p>
            </div>
        </div>
    </div>
</div>
<div id="FJm07HkB5uIWzEAkIMmDEr6wnT2RefoZ" class="widget widget-section  ">
    <div class="row">
        <div class="container">
            <div id="Ih2KxrspqMlURe6s87uwdEKXqV6eG68i" class="widget widget-text">
                <p>Naruči brzo i lako</p>
            </div>
            <div id="NxhNM3luC2GGQ6TaEbPAm3evOuSuGm5r" class="widget widget-text">
                <ul>
                    <li>Besplatna dostava za 2 i više komada</li>
                    <li>Plaćanje pouzećem</li>
                    <li>Brza dostava u roku od 2 radna dana</li>
                </ul>
            </div>
            <div id="k8qEzWHDX3GsSA1tponmcHqkfyZc0uwq" class="widget widget-text spacing">
                <p>ODMAH!</p>
            </div>
            <div id="n2Ww0BsaZvXQdlxd59wLXmzZ6TrPgDAs" class="widget widget-box"></div>
            <div id="nLcVbDW4fHqBoGvWyySh1ckwv3fHTUo8" class="widget widget-box"></div>
            <div id="qhu952oVJwZuInk2ZSirHdzabpgFVq3A" class="widget widget-box  "></div>
            <img id="wE7DsScTvzQXGTWBEyfv9Nl74tH3opwr"  width="223" height="223" class="widget widget-image  "
                 src="{{ asset('/') }}dailysharkFiles/dailyshark/dailyshark2.jpg" alt="" >
            <form action="{{$orderRoute}}" method="post" id="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF" class="widget widget-form" data-orientation="vertical">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div id="pFZ1XGVea6n7b0yUKl9Hi9HBTAMEmQTU" class="widget widget-container clearfix">
                    <label id="vwpxKdxlxInKgD6IUAyiLyqATvirEiSq" class="widget widget-text widget-regular-label widget-label">Ime i prezime</label>
                    <input class="widget widget-input-text" id="bfTiFzhSXQkP0ALx4z9TJsXrEn0XZkhW"  type="text" subtype="name" parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF"  name="name"  value="{{ old('name') }}" required>
                </div>
                <div id="kURK9ObgBkHfn2QeMPcJqAUDmc65elSQ" class="widget widget-container clearfix">
                    <label id="fWtPfOFJJTDmv8a3epRdoDeSGtNITeEx" class="widget widget-text widget-regular-label widget-label">Telefon</label>
                    <input class="widget widget-input-text" id="xecZtqsHbU4udwDeK2lamJD4nKWTGVdG"  type="tel" subtype="phone" parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF"  name="phone"  value="{{ old('phone') }}" required>
                </div>
                <div id="kURK9ObgBkHfn2QeMPcJqAUDmc65elSQ" class="widget widget-container clearfix">
                    <label id="fWtPfOFJJTDmv8a3epRdoDeSGtNITeEx" class="widget widget-text widget-regular-label widget-label">Email</label>
                    <input class="widget widget-input-text" id="xecZtqsHbU4udwDeK2lamJD4nKWTGVdG"  type="email" subtype="email" parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF"  name="email"  value="{{ old('email') }}" required>
                </div>
                <div id="ZkoOIgHnRiT1EmgTbQxUDi9FLdnJJA4M" class="widget widget-container clearfix">
                    <label id="i9uuTeAxCFqmIbzzhpW4EGMvywb9IAZA" class="widget widget-text widget-regular-label widget-label">Adresa</label>
                    <input class="widget widget-input-text" id="xecZtqsHbU4udwDeK2lamJD4nKWTGVdG"  type="text" subtype="address" parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF"  name="shipping_address"  value="{{ old('shipping_address') }}" required>
                </div>
                <div id="ZkoOIgHnRiT1EmgTbQxUDi9FLdnJJA4M" class="widget widget-container clearfix">
                    <label id="i9uuTeAxCFqmIbzzhpW4EGMvywb9IAZA" class="widget widget-text widget-regular-label widget-label">Grad</label>
                    <input class="widget widget-input-text" id="xecZtqsHbU4udwDeK2lamJD4nKWTGVdG" type="text" subtype="address" parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF"  name="shipping_city"  value="{{ old('shipping_city') }}" required>
                </div>
                <div id="HZNKpHdTyzIpHtmhC4C7m2DyUKcWvFUZ" class="widget widget-container clearfix">
                    <label id="radnggSbVAq11dawC483l00uTkEDvotT" class="widget widget-text widget-regular-label widget-label">Izaberite količinu</label>
                    <select class="widget-select widget widget-input-select" id="u7VbdNnn6wtyhGoOB5xzbIyfGnnztDkb"  parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF" name="quantity" required>
                        @foreach($prices as $singlePrice)
                            <option value="{{$singlePrice['quantity']}}"
                            @if($singlePrice['is_default']) selected @endif
                            @if(old('quantity') == $singlePrice['quantity']) selected @endif
                            >
                                {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                            </option>
                        @endforeach
                    </select>
                </div>
                <div id="fGrhELSUfpPrn2H1UAZmnQ5O8OtAUeu0" class="widget widget-container input-button-container clearfix">
                    <button class="widget widget-input-button" type="submit" id="Nc1KGnUgGe0ltXhXo5ARe0OMKdET0P1H"  parentId="lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF">
                        <div class="widget-overlay"></div>
                        Naručite odmah
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<div id="F5tv4gPZwiyufwT0JSv5guxvFWSUh2i3" class="widget widget-section  ">
    <div class="row">
    </div>
</div>
@include('components.pixel_footer')
<script>
    $(document).ready(function(){
        $('.button-quantity').click(function(){
            $title = $(this).attr('title');
            $('#u7VbdNnn6wtyhGoOB5xzbIyfGnnztDkb').val($title);
            $('#lTL0DB5wB1dxxL8yd3Hoe3Fl9d6HTzaF').effect("shake", "slow");
        });

        $(".widget-button").click(function() {
            fbq('track', 'AddToCart');
        });
    });
</script>
</body>
</html>