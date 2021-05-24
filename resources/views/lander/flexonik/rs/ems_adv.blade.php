<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    {{--<script>--}}
        {{--window.domain_has_valid_cert = true;--}}
        {{--window.show_gdpr_warning = true;--}}
        {{--window.is_adlt = false;--}}
        {{--window.is_our_click = location.href.indexOf('oc_') !== -1;--}}
        {{--window.dpush = location.href.indexOf('dpush_') !== -1 || !false;--}}
        {{--window.dsopush = location.href.indexOf('dsopush_') !== -1 || !true;--}}
        {{--window.back_url = "";--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/jquery-1.12.4.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/placeholders-3.0.2.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/moment-with-locales-2.18.1.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/dr-dtime.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/order_me.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/validation.min.js"></script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/shared/js/video_avid.min.js"></script>--}}

    {{--<link type="text/css" href="{{ asset('/') }}flexonikFiles/ems/adv/order_me.min.css" rel="stylesheet" media="all">--}}

    {{--<script>--}}
        {{--history.pushState({init:true},document.title,"");var adc_listener=function(){history.pushState({init:true},document.title,"");document.body.removeEventListener("click",adc_listener)};document.addEventListener("DOMContentLoaded",function(event){document.body.addEventListener("click",adc_listener)});function addDPushParamToBackURL(){if(window.back_url===""){return}if(!window.dpush){return}if(window.back_url.indexOf("dpush_")!==-1){return}var sep=window.back_url.indexOf("?")===-1?"?":"&";window.back_url+=sep+"dpush_=1"}$(window).on("popstate",function(e){$(window).off("beforeunload");if(acrum_extra&&acrum_extra.type==="landing"&&window.back_url!==""&&window.location.href.indexOf("dbbtn_")===-1){addDPushParamToBackURL();location.replace(window.back_url)}if(acrum_extra&&acrum_extra.type==="prelanding"&&window.location.href.indexOf("dbbtn_")===-1){var next_url=location.protocol+"//"+location.host+"/next/?esub=-7EBRQCgQAAAEBAz1GA3lHN343AYICAAAP8QZklgABD00spmAREQoRCSIRDUIRDVoHbmwxAAB_YWRjb21ib_9RN0pwdjFHdwADZ3k&";var sep=next_url.indexOf("?")===-1?"?":"&";next_url+=sep+"cb=1";if(window.dpush===true||window.dsopush===true||window.sawpp===true||location.protocol==="http:"||window.location.href.indexOf("showing_push_")>-1||window.location.href.indexOf("site_option")>-1){window.location=next_url}else if(location.protocol==="index.html"){show_pushwru_show();window.open(next_url,"_blank")}}else if(window.sawpp!==true&&window.dpush!==true){if(window.domain_has_valid_cert===true&&location.protocol==="index.html"){location.replace(get_same_location_with_push())}else if(location.protocol==="index.html"){show_pushwru_show()}}});--}}

        {{--function move_next(a, obj, openSelf = false) {--}}
            {{--{--}}
                {{--$(window).off("beforeunload");--}}
                {{--a.preventDefault();--}}
                {{--a.stopPropagation();--}}

                {{--if (!Object.keys) {--}}
                    {{--Object.keys = function (obj) {--}}
                        {{--var keys = [];--}}
                        {{--for (var i in obj) {--}}
                            {{--if (obj.hasOwnProperty(i)) {--}}
                                {{--keys.push(i);--}}
                            {{--}--}}
                        {{--}--}}
                        {{--return keys;--}}
                    {{--};--}}
                {{--}--}}
                {{--var redirect_url = "http://ro3.muscle-growth.me/next/?esub=-7EBRQCgQAAAEBAz1GA3lHN343AYICAAAP8QZklgABD00spmAREQoRCSIRDUIRDVoHbmwxAAB_YWRjb21ib_9RN0pwdjFHdwADZ3k&amp;";--}}
                {{--if (obj !== undefined) {--}}
                    {{--redirect_url += '&' + Object.keys(obj).map(k => k + '=' + encodeURIComponent(obj[k])).join('&');--}}
                {{--}--}}
                {{--if (window.back_url === "" && window.sawpp !== true && window.dpush !== true) {--}}
                    {{--if (window.domain_has_valid_cert === true &&--}}
                        {{--location.protocol === "index.html") {--}}
                        {{--window.back_url = get_same_location_with_push();--}}
                    {{--} else if (location.protocol === "index.html") {--}}
                        {{--setTimeout(function () {--}}
                            {{--window.show_pushwru_show && window.show_pushwru_show();--}}
                        {{--}, 1);--}}
                    {{--}--}}
                {{--}--}}
                {{--if (acrum_extra.type === 'landing' && window.back_url !== '') {--}}
                    {{--location.replace(window.back_url);--}}
                {{--}--}}

                {{--var open_target = '';--}}
                {{--(open_target === 'self' || openSelf) ?--}}
                    {{--window.open(redirect_url, "_self") :--}}
                    {{--window.open(redirect_url) && (window.back_url !== '' && location.replace(window.back_url));--}}
            {{--}--}}
        {{--}--}}
        {{--function hide_warn(){$('.ac_gdpr_fix').hide();}--}}
        {{--$(document).ready(function () {--}}


            {{--window.adcTitleChange;(function(){var smile="☺";var currentText=smile;var title=document.title;var adc_favic=["//febatigr.com/content/!common_files/images/favi3.ico"];var interval;var deffaultIcon;var isSafari=/^((?!chrome|android).)*safari/i.test(navigator.userAgent)||navigator.userAgent.indexOf("MSIE")>=0;var nodeList=document.querySelectorAll("link[rel*='icon']");deffaultIcon=nodeList.length?nodeList[nodeList.length-1].href:"//febatigr.com/content/!common_files/images/star.ico";var img=new Image;var adc_init=function(){if(!nodeList.length){link=document.createElement("link");link.type="image/x-icon";link.rel="shortcut icon";link.href=deffaultIcon;document.getElementsByTagName("head")[0].appendChild(link)}else{setAllLinks(nodeList,true)}};img.onload=function(){deffaultIcon=img.height?deffaultIcon:"//febatigr.com/content/!common_files/images/star.ico";adc_favic.push(deffaultIcon);adc_init()};img.onerror=function(){deffaultIcon="http://febatigr.com/content/!common_files/images/star.ico";adc_favic.push(deffaultIcon);adc_init()};img.src=deffaultIcon;var setAllLinks=function(nodelist,setDefault){[].forEach.call(nodelist,function(item){item.href=setDefault?deffaultIcon:adc_favic[0]});!setDefault&&adc_favic.reverse()};window.adcTitleChange={start:function(){!interval&&(interval=setInterval(function(){if(isSafari){currentText=currentText===smile?title:smile;document.title=currentText}else{setAllLinks(document.querySelectorAll("link[rel*='icon']"))}},500))},stop:function(){nodeList=document.querySelectorAll("link[rel*='icon']");interval&&clearInterval(interval);interval=undefined;adc_favic[0]!==deffaultIcon&&adc_favic.reverse();isSafari&&(document.title=title)||setAllLinks(nodeList)}}})();window.addEventListener("blur",function(){window.adcTitleChange.start()});window.addEventListener("focus",function(){window.adcTitleChange.stop()});--}}

            {{--function getParameterByName(name, url) {--}}
                {{--if (!url) url = window.location.href;--}}
                {{--name = name.replace(/[\[\]]/g, "\\$&");--}}
                {{--var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),--}}
                    {{--results = regex.exec(url);--}}
                {{--if (!results) return null;--}}
                {{--if (!results[2]) return '';--}}
                {{--return decodeURIComponent(results[2].replace(/\+/g, " "));--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--function adc_clearFooter() {--}}
            {{--var ac_footer__elem = document.getElementsByClassName('ac_footer'),--}}
                {{--ac_footer__p = ac_footer__elem.length ? ac_footer__elem[0].getElementsByTagName('p') : [],--}}
                {{--ac_footer__p_last = ac_footer__p[ac_footer__p.length - 1];--}}
            {{--ac_footer__p_last && ac_footer__p_last.innerText === '' && ac_footer__p_last.remove();--}}
        {{--}--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="../febatigr.com/content/second/EMS_Trainer_RO/js/secondPage.js"></script>--}}
    {{--<link type="text/css" href="../febatigr.com/content/second/EMS_Trainer_RO/css/secondPage.css" rel="stylesheet" media="all">--}}
    <!--retarget-->
    <!--retarget-->
    {{--<script>var product_extra = {};</script>--}}
    {{--<script>var FoxyAPI = {--}}
            {{--getFoxycartPaymentUrl: function(callback) {--}}
                {{--$.post('/api/v3/foxy/get_payment_url', {--}}
                    {{--esub: acrum_extra.esub,--}}
                    {{--name: product_extra.name,--}}
                    {{--price: product_extra.price,--}}
                    {{--thumbnail: product_extra.thumbnails && product_extra.thumbnails.length ? product_extra.thumbnails[0] : null,--}}
                    {{--country_code: $('[name="country_code"]').val(),--}}
                    {{--variant_id: $('[name="variant_id"]').val(),--}}
                    {{--quantity: $('[name="quantity"]').val(),--}}
                    {{--currency: product_extra.currency,--}}
                {{--}, function(data) {--}}
                    {{--if (!data.hasOwnProperty('payment_url')) {--}}
                        {{--alert('Cannot get foxycart payment url');--}}
                        {{--return--}}
                    {{--}--}}

                    {{--callback(data.payment_url);--}}
                {{--})--}}
            {{--},--}}
            {{--createOrder: function() {--}}
                {{--$('input[name=esub]').val(acrum_extra.esub);--}}
                {{--var form = $('input[name=esub]').first().closest('form');--}}

                {{--FoxyAPI.getFoxycartPaymentUrl(function(payment_url) {--}}
                    {{--$('.js_submit').prop('disabled', false);--}}
                    {{--document.location.href = payment_url;--}}
                {{--});--}}
            {{--},--}}
        {{--};--}}
    {{--</script>--}}
    <!-- optimizations -->
    <!---->
    <meta charset="utf-8"/>
    <title> CORP SUBȚIRE, BINE DEFINIT, FĂRĂ EFORT FIZIC ÎN 30 DE ZILE </title>
    <meta content="initial-scale=1, maximum-scale=1, width=device-width" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap" rel="stylesheet"/>
    {{--<link href="http://febatigr.com/content/nZrNIuQCvDQbpnd/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>--}}
    <link href="{{ asset('/') }}flexonikFiles/ems/adv/index.css" media="all" rel="stylesheet" type="text/css"/>
        <style>
            .ac_footer {
                position: relative;
                text-align: center;
                overflow: hidden;
                padding: 50px 0;
                color: #A12000;
            }
            .ac_footer a {
                color: #A12000;
            }
            .ac_footer p {
                text-align: center;
            }
            img[height="1"], img[width="1"] {
                display: none !important;
            }
            .button__text:after {
                content: '*';
                display: inline-block;
                font-size: 75%;
                vertical-align: top;
            }
            @media only screen and (max-width: 1230px) {
                .ac_footer {
                    padding-bottom: 50px;
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
            @media only screen and (max-width: 991px) {
                .ac_footer {
                    padding: 15px;
                    font-size: 11px;
                    line-height: 1.2;
                }
            }
        </style>
</head>
<body>
<!--retarget-->
<!--retarget-->
<div class="main-container">
    <div class="header">
        <div id="logo"> <img alt="" src="{{ asset('/') }}flexonikFiles/ems/adv/logo.png"/></div>
        <ul class="nav">
            <li> Sănătate </li>
            <li> Familie </li>
            <li> Fitness </li>
            <li class="m-hide"> Călătorii </li>
            <li> Contacte </li>
            <li class="m-hide"> Twitter-ul meu </li>
            <li class="m-hide"> Facebook-ul meu </li>
        </ul>
    </div>
    <div class="content">
        <img align="left" class="avatar" src="{{ asset('/') }}flexonikFiles/ems/adv/avatar.png"/>
        <div style="text-align: left;">
            <h1 style="color: #58b44f">
                CORP SUBȚIRE, BINE DEFINIT, FĂRĂ EFORT FIZIC ÎN 30 DE ZILE
            </h1>
        </div>
        <div id="info" style="text-align: left">
            Publicat
            <span>
                  
               </span>
            19:51 | Autor: Bianca-Elena și Bogdan
        </div>
        <div class="clear">   </div>
        <div class="wrap first" style="width: 100%;">
            <img align="center" class="firstImg" src="{{ asset('/') }}flexonikFiles/ems/adv/abs-3.jpg" style="display: block; margin: 0 auto;"/>
            <p></p>
        </div>
        Bună, suntem Bianca-Elena Dogaru și Bogdan Dogaru. Vă vom spune <b>cum să vă aduceți corpul în formă într-un timp scurt</b>, fără să mergeți la sală, fără să pierdeți timp, energie și bani.
        <p>
            <b>Fiecare dintre voi</b> poate folosi această metodă acasă și <b>să obțină rezultatul dorit</b> în câteva săptămâni.
        </p>
        <p>
            Dacă sportul și dietele nu vi se potrivesc din anumite motive, iar dorința de a avea un corp frumos nu vă părăsește, citiți povestea noastră până la capăt, promitem, <b>vă va schimba viața</b>.
        </p>
        <div class="clear"></div>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                De la femeie dolofană la femeie frumoasă
            </h2>
        </div>
        <!-- <div id="info" style="text-align: center"> Publicat  <span> <script>dtime_nums(-15, true)</script> </span> 19:51 | Autor: dorina </div> -->
        <div class="clear">   </div>
        <img align="left" class="right-img" src="{{ asset('/') }}flexonikFiles/ems/adv/2.jpg" style="padding-right: 15px;"/>
        <p>
            Acum un an și jumătate cântăream 90 kg. Profesia de medic chirurg și programul agitat practic m-au impus să mă hrănesc cu fast-food și produse semifabricate. Într-o bună zi situația ieșise de sub control, nu mai puteam nici măcar să mă privesc în oglindă. Imaginea îmi demonstra o femeie grasă și urâtă la exterior… <b>Am început să-mi urăsc corpul</b>.
        </p>
        <p>
            Când Bogdan m-a cerut în căsătorie, l-am refuzat. Orice fată își dorește să fie frumoasă și suplă la nunta sa, astfel încât să-și poată privi cu mândrie fotografiile de nuntă. Prin urmare, cererea lui Bogdan m-a determinat să-mi schimb aspectul o dată pentru totdeauna.
        </p>
        <p>
            Problema lipsei de timp a rămas pe ordinea zilei. Nu puteam să mă concediez sau să-mi scurtez programul, de munca mea depindea viața oamenilor. Nu-mi puteam lăsa pacienții în voia sorții!
        </p>
        <p>Dietele, mersul la sală sau liposucția necesită mult timp, or acesta îmi lipsea. În plus, toate aceste metode implică o sumă imensă de bani.
        </p>
        <p>Deci, principala sarcină era să găsesc o soluție diferită.
        </p>
        <p>În timpul liber făceam search pe Google „metode simple și eficiente pentru slăbit” și „metode simple pentru creșterea masei musculare”. Da, da, voiam totul din prima…
        </p>
        <p>După 2 săptămâni de căutări, Internetul se împânzise de reclame direcționate care mă îndemnau să mă înscriu pentru consultări la antrenorii de fitness sau să cumpăr diverse produse pentru slăbit, de la pastile până la cocteiluri.
        </p>
        <p>Odată, căutarea m-a direcționat către anunțul unui aparat de antrenament, producătorii căruia promiteau <b>„să facă din orice corp unul atletic”</b>. Am studiat informațiile, am citit o mulțime de păreri pozitive. Deși eram incertă, am decis să încerc această metodă. Un lucru îl știam sigur, nu putea fi mai rău!
        </p>
        <img align="left" class="right-img" src="{{ asset('/') }}flexonikFiles/ems/adv/prod.jpg" style="padding-right: 15px;"/>
        <p>
            Pachetul a fost livrat rapid, în interior era un set de echipamente de exerciții realizate în formă de curele.
        </p>
        <p>După ce am citit instrucțiunile, am început imediat să-l folosesc. Senzațiile erau destul de ciudate, dar plăcute, parcă aveam parte de un masaj intens. Am simțit furnicături și pulsații, dar după 2-3 ședințe mă obișnuisem cu senzațiile.
        </p>
        <p>Folosind simulatorul timp de <b>25 de minute, de 3 ori pe zi</b>, pielea devenise elastică,  <b>grăsimea subcutanată și celulita</b> s-au redus! După o săptămână de utilizare am observat progrese, cântarul arăta minus 3 kg de la greutatea inițială.
        </p>
        <p><b>După 2,5 luni am slăbit 26 kg. </b></p>
        <p><b>Mă simțeam tânără, încrederea în forțele proprii creștea pe zi ce trece.</b>  Practic eram pregătită de nuntă, dar am vrut să continui cursul de creștere a reliefului pentru a <b>deveni și mai frumoasă.</b>
        </p>
        <p>
            Scăpând de grăsime, am început să-mi cresc masa musculară folosind același aparat universal. A fost o surpriză plăcută faptul că aparatul este la fel de comod de utilizat pe orice parte a corpului.
        </p>
        <img align="left" class="right-img" src="{{ asset('/') }}flexonikFiles/ems/adv/prod2.jpg" style="padding-right: 15px;"/>
        <p>
            Și de data aceasta aparatul și-a demonstrat latura pozitivă. După o lună s-au întărit toți mușchii, aveam un corp <b>reliefat și sexy</b>. Aceste schimbări mă <b>încântau.</b>
        </p>
        <p>Îmi plăcea imaginea din oglindă mai mult ca niciodată. Incredibil, nu-mi venea să cred, <b>un aparat de pe Internet m-a ajutat să slăbesc fără diete și sport</b>! Deși nu dispuneam de timp liber, <b>mi-am îndeplinit visul de a deveni frumoasă!</b> </p>
        <div class="clear"></div>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                Istoria lui Bogdan
            </h2>
        </div>
        <p> Datorită trăsăturilor fizice, a fost mult mai simplu să-mi aduc corpul în formă decât pentru Bianca-Elena. Am avut nevoie de <b>mai puțin timp</b> pentru a obține rezultatul dorit.
        </p>
        <p>
            Când Bianca-Elena a cumpărat aparatul, mi-am dat ochii peste cap, nu credeam în proprietățile sale fabuloase. Dar după un timp a început să slăbească. Eram <b>șocat,</b> mi-am dorit să-l testez și eu. În afară de stimularea mușchilor, am folosit aparatul pentru masaj. Mă ajuta să-mi relaxez coloana vertebrală după o zi grea de muncă, izbăvindu-mă de spasmele musculare.
        </p>
        <img align="left" class="right-img" src="{{ asset('/') }}flexonikFiles/ems/adv/story3.jpg" style="padding-right: 15px;"/>
        <p>
            O lună mai târziu <b>mă simțeam un Apollo</b>. Datorită acestei invenții, mi-am putut transforma corpul <b>fără efort fizic</b>! Ar părea o prostie dacă nu eram chiar noi cei care au obținut aceste rezultate.
        </p>
        <div class="clear"></div>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                Bianca-Elena continuă:
            </h2>
        </div>
        <img align="left" class="right-img" src="{{ asset('/') }}flexonikFiles/ems/adv/wife.jpg" style="padding-right: 15px;"/>
        <p>
            Așadar, la 5 luni de la cererea în căsătoria am organizat nunta perfectă. Purtam o rochie de vis, mă îndreptam spre altar cu o constituție fizică la care <b>nici că visasem… </b>
        </p>
        <p>
            Privesc cu <b>mândrie</b> fotografiile noastre de nuntă! Zici că am devenit modelele unei reviste sport și asta <b>datorită aparatului</b> comandat online!
        </p>
        <p><b>Imaginați-vă, oricine poate avea un corp de vis, fără prea mult efort!</b></p>
        <div class="clear"></div>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                Despre aparat
            </h2>
        </div>
        <p>Nu vă mai ținem în suspans, este vorba de stimulatorul muscular <a class="green-link" href="#">EMS-trainer</a>
            Sarcina sa principală este aceea de a ajuta la <b>întărirea mușchilor și slăbitul</b> în zonele-problemă ale corpului. În prezent este cel mai simplu și rapid mod de a obține <b>rezultatele dorite!</b>
        </p>
        <p>Antrenamentul cu un stimulator muscular se bazează pe efortul muscular declanșat de impulsurile electrice.</p>
        <p>În prezent, aparatul se bucură de o mare popularitate, deoarece oferă posibilitatea de a slăbi și de a <b>construi relieful corpului</b>, stimulând mușchii cu ajutorul impulsurilor electrice, <b>în loc de antrenamente epuizante</b>.</p>
        <p>Efectul va apărea după <b>10-15 ședințe</b> (individual). În <b>4-6 săptămâni</b> cu o investiție mică de timp, incomparabilă cu antrenamentul de forță, dispozitivul <b>vă va permite</b> să obțineți rezultate vizibile indiferent de caracteristicile fizice inițiale. </p>
        <p><b>25 de minute</b> de utilizare a aparatului <b>înlocuiesc 3 ore de antrenament intensiv</b> la sală. Persoanele ocupate <b>pot cheltui 2-3 ore pe săptămână pentru a avea un corp tonifiat și în formă perfectă</b>.
        </p>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                Utilizarea regulată a simulatorului va ajuta la rezolvarea unor astfel de sarcini precum:
            </h2>
        </div>
        <p>✔  Modelarea siluete, arderea excesului de grăsime;</p>
        <p>✔  Obținerea unui relief perfect al corpului; </p>
        <p>✔  Menținerea musculaturii în formă;</p>
        <p>✔  Creșterea indicatorilor de forță și rezistență;</p>
        <p>✔  Creșterea masei musculare în regiunile dorite;</p>
        <p>✔  Izbăvirea de celulită și piele lăsată;</p>
        <p>✔  Pierderea a 10-12 kg timp de o lună, fără diete și antrenamente;</p>
        <p>✔  Întărirea mușchilor, tonifierea lor;</p>
        <p>✔  Căpătarea fermității pielii;</p>
        <p>✔  Restabilirea țesuturilor după entorse, traume, hematom..</p>
        <div style="text-align: center;">
            <h2 style="color: #58b44f">
                Care este modul de utilizare EMS-trainer?
            </h2>
            <ol class="list-last" style="text-align: left; padding: 0 50px;">
                <li>
                    <p>Atașați stimulatorul muscular în zona-problemă, fixându-l strâns pe piele.</p>
                </li>
                <li>
                    <p></p>
                    Porniți simulatorul și începeți cu nivelul 1, când mușchii se obișnuiesc cu impulsurile electrice, puteți trece la următorul nivel de sarcină (în total 15 nivele de intensitate).
                </li>
                <li>
                    <p>Utilizați aparatul timp de 10-25 de minute maxim 3 ori pe zi, în funcție de starea fizică.</p>
                </li>
                <li>
                    <p>Dacă folosiți stimulatorul suplimentar la exercițiile fizice, puteți limita timpul de utilizare până la 10 minute.</p>
                </li>
                <li>
                    <p>Dacă utilizați centura în calitate de aparat de antrenament, durata ședinței poate atinge 25 de minute.</p>
                </li>
                <li>
                    <p>După terminarea antrenamentului, detașați simulatorul de la suprafața corpului și aplicați un antiseptic.</p>
                </li>
            </ol>
        </div>
        <p>Prețul unui stimulator muscular se egalează cu cel al unui abonament la sală, dar nu uitați: la sală trebuie să mergeți preț de câteva luni și nu aveți nicio garanție.</p>
        <hr/>
        <p>Sperăm că informațiile pe care le-am împărtășit astăzi vă vor fi de folos și în câteva săptămâni veți avea <b>corpul visurilor voastre!</b></p>
        <div class="wrapper-borded" style="border: 3px solid red;padding: 10px;">
            <p>
                Vă avertizăm că în goana pentru a economisi ați putea întâlni escroci de la care să achiziționați un produs contrafăcut care se poate defecta rapid sau să dăuneze corpului dumneavoastră!
            </p>
            <p>Iată de ce pe această pagină puteți găsi <a href="#form" style="color:#ffc14f;text-decoration: none;font-weight: bold;">canalul de vânzări</a> care interacționează cu site-ul oficial</p>
        </div>
        <p><b>Doar astăzi, pentru cititorii blogului nostru este organizată tombola de reduceri, puteți participa la un joc simplu și să câștigați o reducere de până la 50%, succes!</b></p>
        <!--koleso  -->
        <div class="wheel" id="form">
            <p class="order__title accent2">  Extragerea este deja în desfășurare!  </p>
            <h2 class="wheel__title">
                Reține, oferta specială este valabilă până la:
                <span class="accent2">
                     
                  </span>
            </h2>
            <!-- wheel -->
            {{--<div class="prize" id="form">--}}
                {{--<div class="wheel__wrapper">--}}
                    {{--<h2 class="wheel__title">  ATENȚIE!  </h2>--}}
                    {{--<p class="order__title">  Doar astăzi, pentru cititorii blogului nostru este organizată tombola de reduceri, puteți participa la un joc simplu și să câștigați o reducere de până la 50%, succes!  </p>--}}
                    {{--<div class="wheel__pic">--}}
                        {{--<img class="prize-wheel" src="{{ asset('/') }}flexonikFiles/ems/adv/prizewheel.png"/>--}}
                        {{--<div class="wheel__cursor" data-link=""><img src="{{ asset('/') }}flexonikFiles/ems/adv/wheel-cursor.png"/>--}}
                            {{--<span class="wheel__cursor-text" onclick="spin(); ym(74683693,'reachGoal','spin'); return true;">  Rotește  </span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- form -->
            <div class="order" style="display: block;">
                <div class="order__afisha">
                    <div class="order__product">
                        <span class="sale" style="background: url('{{ asset('/') }}flexonikFiles/ems/adv/sale.png') center center/cover no-repeat;">  -50%  </span>
                        <img src="{{ asset('/') }}flexonikFiles/ems/adv/product.png"/>
                    </div>
                    <div class="order__info">
                        <div class="order__lead">  Oferta ta  </div>
                        <div class="order__price old">458 RON</div>
                        <br/>
                        <div class="order__price new">229 RON</div>
                    </div>
                </div>
                <h2 class="order__title">  Felicitări!  </h2>
                <br/>
                <p class="accent2" style="margin-bottom: 15px;">  Ai câștigat premiul cel mare: EMS-Trainer cu 50% reducere!  </p>
                <p>  Grăbește-te și plasează comanda, înainte ca reducerea să fie acordată următorului cititor. Oferta ta unică se încheie în:  </p>
                <br/>
                <div class="timer"><span class="time accent" data-minutes="14" data-seconds="59">14:27</span>
                </div>
                <form action="" class="order__form" id="order_form" method="POST">
                    <div class="order__form-row">
                        <select id="country_code_selector" name="country">
                            <option value="RO">  România  </option>
                            <option selected="selected" value="RU">Russian Federation</option>
                        </select>
                    </div>
                    <div class="order__form-row">
                        <label class="data_label" for="name">  Nume:  </label>
                        <input class="wheel_input" id="name" name="name" placeholder="" required="" type="text"/>
                    </div>
                    <div class="order__form-row">
                        <label class="data_label" for="phone">  Telefon:  </label>
                        <input class="only_number wheel_input onlynumber" id="phone" name="phone" required="" type="tel"/>
                    </div>
                    <button class="btn btn--submit button__text js_pay_online_secondpage">  Comandă EMS-Trainer cu 50% reducere!  </button>
                </form>
                <p class="notice">  * Unul dintre specialiștii noștri te va contacta pentru a confirma comanda. Plata este ramburs.  </p>
            </div>
        </div>
        <!--koleso  -->
        <div class="vk-container">
            <div class="vk-header">
                <div class="vk-logo">

                </div>
                <div class="vk-header-text">
                    <span class="vk-link"><span class="comment-count"> 159 comentarii </span></span>
                </div>
            </div>
            <div class="vk-comment-load comment-id-1">
                <div class="vk-avatar">
                    <img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-16.jpg"/>
                </div>
                <div class="vk-comment-name">
                    Pavel
                </div>
                <div class="vk-comment-text">
                    Funcționează perfect, rezultatele sunt incredibile, nu se descarcă mult timp. Stimulatorul m-a ajutat să slăbesc 5 kg în 2 săptămâni, deși nu l-am folosit prea des!
                    Recomand tuturor, este o experiență de neuitat, eram sigur că trebuie să merg la sală. S-a dovedit că nu este necesar! Americanii au inventat deja un înlocuitor pentru sala de sport. Sunt fericit!
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link" href="#">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link" href="#">1</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load">
                <div class="vk-avatar">
                    <img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-17.jpg"/>
                </div>
                <div class="vk-comment-name">
                    Ana
                </div>
                <div class="vk-comment-text">
                    Iubitul mi-a spus că nu a putut să-și contureze un abdomen atât de reliefat la sală, dar EMS l-a ajutat să facă aceasta! E foarte fericit, eu ce să mai zic! Ador să pipăi aceste pătrățele tari și reliefate
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-18.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Alexandru </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Istoria voastră m-a impresionat, este un produs minunat pentru corecția siluetei în condiții de casă!Am făcut deja comanda. </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-19.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Emilia</span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Bianca-Elena și Bogdan, vă mulțumesc! Am făcut comanda acum 2 zile, ieri am început deja să-l utilizez. Sunt niște senzații absolut plăcute - este important să începeți cu intensitate redusă, trecând treptat spre următoarea, organismul are nevoie de timp pentru a se adapta unui regim mai puternic)  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-20.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Sorina  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Tinerii au rezultate incredibile, un cuplu foarte frumos! Voi comanda EMS și voi împărtăși rezultatele.  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">1</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-21.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Ștefan Buzoi  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> EMS este un stimulator pentru leneșii de pe canapea, ar face mai bine să meargă la sală! </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">1</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load m-hide question">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-22.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Constanța  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"><b>Ștefan Buzoi</b>, du-te tu, dacă simți nevoie)) Nu toți oamenii adoră să facă sport, aceasta este opțiunea perfectă pentru menținerea tonusului muscular! </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-23.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Emilian   </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Ador sportul, mă încarcă de energie, dar era ceva care nu-mi permitea să am un corp frumos. Iată de ce am achiziționat stimulatorul EMS în calitate de stimulare suplimentară pentru mușchi. Îmbunătățește  efectul antrenamentului. Sunt mulțumit de achiziție 100%, îl folosesc deja de o lună, efectul este vizibil! </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-24.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Melissa Cioran   </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Fratele meu locuiește în SUA, acolo această metodă a devenit demult populară datorită eficacității sale.</span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">0</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment-load m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-25.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Nicole   </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link">Am folosit acest aparat. Are un efect super. Îl foloseam de 3 ori pe zi și peste o săptămână progresul începuse să fie vizibil. Recomand această metodă tuturor, efectul vă va uimi.</span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">1</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-1.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Andrei  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Puteți avea un abdomen reliefat în mod simplu. Dispozitivul mi-a venit pe plac, are 15 trepte de intensitate, îl folosesc de 1 lună, rezultatul este vizibil. Am deja 6 pătrățele, iar înainte aveam o burtă umflată de grăsime) </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">21</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-2.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link">Corina Ardelescu </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link">N-aș fi crezut niciodată că voi avea un abdomen asemeni unui culturist. Fetele știu despre ce vorbesc, nouă ne este mult mai dificil să creștem masa musculară decât bărbaților. Dar datorită EMS totul este posibil, în doar 5 săptămâni de „antrenament” am deja pătrățele ferme.  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">9</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-3.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Andreea    </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link">La noi tehnologiile moderne ajung cu mare întârziere. În Occident această metodă este foarte populară </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">5</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-4.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Răzvan  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Un stimulator muscular care chiar funcționează? La început am crezut că e o glumă. S-a dovedit a fi adevărat! L-am testat și rezultatele m-au uimit. L-am folosit practic pe toate grupurile de mușchi. Fetele au observat diferența, demonstrându-și interesul cu mult entuziasm! </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">18</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-5.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Lavinia  </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Un aparat care antrenează mușchii la care visează toată lumea. O achiziție care merită atenție, am auzit o mulțime de păreri pozitive de la amicii mei. A sosit timpul să-l comand și eu)) </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">2</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-6.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Ioana Enescu    </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link">Medicul mi-a recomandat să achiziționez un stimulator muscular de uz casnic pentru perioada de recuperare posttraumatică. N-aveam chef să cheltuiesc o groază de bani, totuși aveam nevoie de un aparat decent. Am ales EMS trainer. S-a dovedit a fi cea mai bună achiziție! Mi-am recuperat musculatura în câteva săptămâni. Datorită producătorilor care au creat un aparat universal, după perioada de recuperare am putut să-mi cresc masa musculară.  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">47</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-7.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Adina   </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link">Important este să nu exagerați, de altfel pot apărea dureri musculare ca și după un antrenament de 3 ore la sală! Am învățat deja să dozez sarcina corect și urmăresc treptat cum progresează rezultatul. Aceasta mă bucură.   </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                           
                        </span>
                        |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">47</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-8.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Mihai    </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Cred că EMS va deveni extrem de popular în cel mai apropiat timp și va apărea în toate casele. </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                            |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                        </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">31</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-9.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> Cătălin </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Ems trainer este o replică demnă efortului fizic! Are și efect de relaxare, aparatul poate fi folosit pentru automasaj.  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                            |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                        </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">11</span>
                    </div>
                </div>
            </div>
            <div class="vk-comment m-hide">
                <div class="vk-avatar">
                    <span class="vk-link"><img src="{{ asset('/') }}flexonikFiles/ems/adv/vk-avatar-10.jpg"/></span>
                </div>
                <div class="vk-comment-name">
                    <span class="vk-link"> George Tabac </span>
                </div>
                <div class="vk-comment-text">
                    <span class="vk-link"> Cel mai bun stimulator muscular pe care l-am încercat. Iată principalele avantaje: nu este nevoie să folosesc geluri pentru a avea efect, înainte trebuia să-mi cumpăr regulat; Nu există contacte deschise ca și în cazul altor modele care, utilizate o perioadă îndelungată, îmi ardeau pielea, când am început să folosesc o centură de la reclama TV, aveam arsuri în mod regulat; Cost redus pentru calitate înaltă; Nu trebuie să aștepți câteva luni pentru a vedea efectul, totul se petrece relativ rapid.  </span>
                </div>
                <div class="vk-comment-date">
                     <span class="vk-link">
                        <span>
                            |  <span class="vk-comment-answer"> Lasă un comentariu </span>
                        </span>
                     </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">
                        <span class="vk-link">38</span>
                    </div>
                </div>
            </div>
        </div>
        <a class="button" href="#form" target="_top"> Comandă EMS Trainer </a>
    </div>
</div>
<div class="footer">
    Blogul Dogaru  <span class="ryear">2021</span> <br/><br/>
    <a>Report</a>
</div>
{{--<div class="overlay overlay-prize">--}}
    {{--<div class="popup">--}}
        {{--<div class="popup__body">--}}
            {{--<div class="popup__title shown">  Felicitări!  </div>--}}
            {{--<p class="popup__text shown">  Ai câștigat premiul cel mare: EMS-Trainer cu 50% reducere!  </p>--}}
            {{--<div class="btn btn--submit btn--submit1 btn-popup eventClick scrollto" data-link="">  OK  </div>--}}
            {{--<div class="popup__icon prize">     </div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<script src="../febatigr.com/content/nZrNIuQCvDQbpnd/js/func.js"></script>--}}
{{--<script src="../febatigr.com/content/nZrNIuQCvDQbpnd/js/packs.js"></script>--}}
{{--<script></script>--}}
{{--<script type="text/javascript" src="../febatigr.com/content/shared/js/js.cookie.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--try {--}}
            {{--moment.locale("");--}}
            {{--$('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));--}}
            {{--$('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));--}}
        {{--} catch (e) { console.log('moment problems!'); }--}}
    {{--});--}}
{{--</script>--}}
<!--retarget-->
<!--retarget-->
{{--<script type="text/javascript" src="../febatigr.com/content/shared/js/sender.min.js"></script>--}}
<div class="ac_footer">
    <span></span><br>
    <span>&copy; 2021 Copyright. All rights reserved.</span><br>
    <p></p>
</div>
{{--<script type="text/javascript" src="../febatigr.com/content/%21common_files/js/fingerprint2.2.1.0.min.js"></script>--}}
{{--<script type="text/javascript">--}}
    {{--function addPixel(){var image=document.createElement("img");image.src="//pixel.tomono.com/ac/v2?"+"esub="+acrum_extra["esub"]+"&offer_id="+acrum_extra["offer_id"]+"&land_id="+acrum_extra["id"]+"&type="+acrum_extra["type"];image.width=0;image.height=0;document.body.appendChild(image)}function addFingerprintToForms(components){addPixel();var values=components.map(function(component){return component.value});window.fingerprint=Fingerprint2.x64hash128(values.join(""),31);var input=document.createElement("input");input.type="hidden";input.name="fingerprint_";input.value=window.fingerprint;$('input[name="esub"]').each(function(i,item){item.closest("form")&&item.closest("form").appendChild(input)})}if(window.requestIdleCallback){requestIdleCallback(function(){Fingerprint2.get(function(components){addFingerprintToForms(components)})})}else{setTimeout(function(){Fingerprint2.get(function(components){addFingerprintToForms(components)})},1)}--}}
{{--</script>--}}
</body>
</html>