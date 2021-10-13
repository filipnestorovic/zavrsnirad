<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href=""/>
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/cleanvision/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/cleanvision/mobile.css">
    <style>@font-face{font-family:OpenSans;font-style:normal;font-weight:700;src:url("{{asset('/')}}fonts/OpenSans-Boldd41d.eot@#iefix") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans-Bold.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans-Bold.ttf") format("truetype")}@font-face{font-family:OpenSansExtraBold;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/OpenSans-Boldd41d.eot@#iefix") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans-Bold.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans-Bold.ttf") format("truetype")}@font-face{font-family:OpenSansLight;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/OpenSansd41d.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/OpenSans.woff") format("woff"),url("{{asset('/')}}fonts/OpenSans.ttf") format("truetype")}@font-face{font-family:Roboto;font-style:normal;font-weight:400;src:url("{{asset('/')}}fonts/roboto-regular.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/roboto-regular.woff") format("woff"),url("{{asset('/')}}fonts/roboto-regular.ttf") format("truetype")}@font-face{font-family:Roboto;font-style:normal;font-weight:700;src:url("{{asset('/')}}fonts/roboto-bold.eot@") format("embedded-opentype"),url("{{asset('/')}}fonts/robotobold.woff") format("woff"),url("{{asset('/')}}fonts/robotobold.ttf") format("truetype")}</style>
    <style>
        .headerProduct {
            width: 400px;
        }
        .block5Product {
            width: 400px;
            margin: 60px 0 0 100px;
        }
        .block6Product {
            width: 250px;
        }
        .block11Product {
            width: 220px;
            margin: 20px 0 0 120px;
        }
    </style>
</head>
<body>
<div class="js__countryblock">
    <div class="header">
        <div class="wrapper">
            <div class="header-top">
                <div class="ht-left">
                    <h2 class="lt0"> <span>Es ist an der Zeit</span> das Sehvermögen wiederherzustellen!</h2>
                </div>
                <div class="ht-right">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-1.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-2.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-3.png">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom">
                <div class="hb-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="headerProduct"></div>
                <div class="hb-center">
                    <ul>
                        <li class="lt1">Lindert in nur 5 Minuten <br>Spannungen und Augenschmerzen</li>
                        <li class="lt2">Stellt zu 99% das Sehvermögen 99% nach nur einer<br>Behandlung wieder her</li>
                        <li class="lt3">Verhindert die Entwicklung von Augenerkrankungen<br>und<br>Sehschwächen</li>
                    </ul>
                    <p class="promo lt4">Bei einer Bestellung jetzt wird ein<br>
                        <span class="sale">Rabatt gewährt!</span> </p>
                    <div class="price">
                        <p class="price_old">
                            {{ $prices[1]['originalPrice'] }}<span> RSD</span>
                        </p>
                        <p class="price_main">
                            {{ $prices[1]['amount'] }}<span> RSD</span>
                        </p>
                    </div>
                </div>
                <div class="hb-right">
                    <div class="timer-wrap">
                        <p class="lt5">Bis Aktionsende bleiben noch:</p>
                        <div class="landing__countdown"></div>
                    </div>
                    <form action="{{$orderRoute}}" method="post" class="order_form cpa__order_form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <label class="lt7" for="name">Ime i prezime</label>
                        <input id="name" name="name" required="" type="text">
                        <label class="lt8" for="phone">Telefon</label>
                        <input id="phone" name="phone" required="" type="tel">
                        <label class="lt9" for="shipping_address">Adresa</label>
                        <input id="shipping_address" name="shipping_address" required="" type="text">
                        <label class="lt10" for="shipping_city">Grad</label>
                        <input id="shipping_city" name="shipping_city" required="" type="text">
                        <input type="submit" value="PORUČI">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="block-2">
        <div class="wrapper">
            <div class="b2-left">
                <h2><span class="str-1 lt10">Wird Ihr Sehvermögen</span><br>
                    <span class="str-2 lt11">jeden Tag</span><br>
                    <span class="str-3 lt12">schlechter?</span>
                </h2>
                <p class="lt13">Die Hauptbedingung für normales Sehvermögen — <span>ist die Elastizität der Augenlinse</span>
                    . Leider wird diese Fähigkeit unter dem Einfluss vieler Faktoren <span>beeinträchtigt</span> :
                </p>
                <ul>
                    <li><span class="lt14">Alter</span></li>
                    <li class="lt15"> <span>Belastung</span> der Augen</li>
                    <li class="lt16"> <span>Verschiedene pathologische Prozesse</span> (am häufigsten Entzündungen)</li>
                    <li><span class="lt17">Unzureichende Blutversorgung</span></li>
                    <li class="lt18"> <span>Myasthenia</span> und Muskelschwäche</li>
                </ul>
            </div>
            <div class="b2-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b2-image.png"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-3">
        <div class="wrapper">
            <div class="b3-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b3-image.png"></div>
            <div class="b3-right">
                <h2><span class="str-1 lt19">Hauptursache für schlechtes Sehvermögen</span><br>
                    <span class="str-2 lt20">Arbeitsstörung</span><br>
                    <span class="str-3 lt21">Augenmuskeln!</span>
                </h2>
                <ul>
                    <li class="lt22"> <span>Die Muskulatur fokussiert die Augen</span> so, damit die resultierenden Bilder, die
                        durch die Linse gehen, auf die Netzhaut zu projizieren.
                    </li>
                    <li class="lt23"> <span>Die Störungen im Gleichgewicht der Muskelarbeit</span> verursachen ein
                        Unzureichendes oder übermäßiges Zusammendrücken des Augapfels.
                    </li>
                    <li class="lt24"> <span>Die Augenlinse verformt sich</span> , der Fokus wird verzerrt, das Bild wird
                        verschwommen dargestellt.
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-4">
        <div class="wrapper">
            <div class="b4-left">
                <div class="b4l-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/alert-2.png"></div>
                <div class="b4l-right">
                    <h2><span class="str-1 lt25">Linsen und Brillen</span><br>
                        <span class="str-2 lt26">werden dabei nicht helfen</span><br>
                    </h2>
                </div>
                <div class="clearfix"></div>
                <p class="lt27">Sie entspannen die Augenmuskeln, was<br>zu Ihrer Verformung führt und das Problem nur
                    verschlimmert
                </p>
            </div>
            <div class="b4-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/b4-image.png"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-5">
        <div class="wrapper">
            <div class="b5-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block5Product"></div>
            <div class="b5-right">
                <h2><span class="str-1 lt28">Cleanvision</span><br>
                    <span class="str-2 lt29">innovative Entwicklung zur</span><br>
                    <span class="str-3 lt30">Wiederherstellung der Sehkraft</span>
                </h2>
                <p class="lt31"> <span>Cleanvision</span> - ist ein biogener Komplex aus natürlichen Extrakten, die eine gezielte
                    Wirkung bei der Verringerung des Sehvermögens haben und eine vollständige Beseitigung der häufigsten
                    menschlichen Augenkrankheiten bieten.
                </p>
                <p class="lt32">Es ist das einzige Medikament, das die Arbeit der Augapfelmuskeln reguliert, was hilft, den
                    normalen Fokus wiederherzustellen und ein klares und helles, räumliches Sehvermögen zurückzugeben.
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-6">
        <div class="wrapper">
            <div class="b6-left">
                <ul>
                    <li class="lt33"> <span>Lindert Entzündungen</span> , Verspannungen, Trockenheit und Reizungen</li>
                    <li class="lt34"> <span>Verbessert die Sehschärfe</span>, stärkt die Netzhaut des Auges</li>
                    <li class="lt35"> <span>Stimuliert Nervensynapsen</span>, die ein klares Sehvermögen bieten</li>
                    <li class="lt36"> <span>Verbessert die Reaktionsfähigkeit der Muskeln</span> auf sich ändernde Belastungen ,
                        entlastet und verhindert den Hypertonus
                    </li>
                    <li class="lt37"> <span>Sorgt für die richtige</span> Fokussierung der Linsen</li>
                    <li class="lt38"> <span>Verbessert die</span> Kapillardurchblutung</li>
                    <li class="lt39"> <span>Beseitigt das Risiko</span> von gefährlichen Augenerkrankungen</li>
                    <li class="lt40"> <span>Normalisiert den Druck</span> des Augenhintergrunds</li>
                </ul>
            </div>
            <div class="b6-right">
                <h2 class="lt41">Technologie <span>eye muscle support</span> </h2>
                <p class="lt42">Die Muskeln <span>werden tonisiert</span> und <span>hören auf, den Augapfel</span> zu
                    deformieren
                </p>
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block6Product">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-7">
        <div class="wrapper">
            <h2 class="lt43">Wann wird <span>Cleanvision?</span> benötigt </h2>
            <div class="b7-top">
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-1.png">
                    <p class="lt44">Bei <span>schlechtem</span> Sehvermögen</p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-2.png">
                    <p class="lt45">Bei<span>Krankheiten und Pathologien</span> des Sehapparates</p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-3.png">
                    <p class="lt46">Bei häufigem <span>Brennen und Rötungen</span> der Augen</p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-4.png">
                    <p class="lt47">Beim <span>Tragen einer Brille oder Kontaktlinsen</span> </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="b7-bottom">
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-5.png">
                    <p class="lt48">Bei <span>Kopfschmerzen</span>, die von vielen als Migräne oder erhöhter Blurdruck angesehen
                        werden
                    </p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-6.png">
                    <p class="lt49">Bei schneller <span>Ermüdung der Augen während der Arbeit</span> und allgemeiner
                        Leistungsminderung
                    </p>
                </div>
                <div class="factor">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/factor-7.png">
                    <p class="lt50">Bei einer <span>genetischen Veranlagung</span> , Ihre Verwandten leiden unter Sehstörungen
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="block-8">
        <div class="wrapper">
            <div class="b8-left">
                <h2 class="lt51">Was haben Studien gezeigt?</h2>
                <ul>
                    <li class="lt52">In 99% von 100 Fällen <span>konnte das Sehvermögen vollständig wiederhergestellt
                        werden</span>
                    </li>
                    <li class="lt53">Es wurde eine bessere Arbeit aller Körpersysteme festgestellt, die <span> ein einwandfreies
                        Funktionieren des Sehapparates gewährleisten </span>
                    </li>
                    <li class="lt54">In 9 von 10 Fällen <span>musste keine Operation mehr</span> zur Wiederherstellung des
                        Sehvermögens durchgeführt werden
                    </li>
                    <li class="lt55">In 10 von 10 Fällen - <span>gab es keine Nebenwirkungen</span> </li>
                </ul>
            </div>
            <div class="b8-right">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/graphic.png">
                <p class="lt56">35.000 Freiwillige nahmen an klinischen Studien des Medikaments Teil. <span>Sie alle hatten
                     Sehstörungen, die durch übermäßige Belastung der Augen oder Augenerkrankungen verursacht wurden.</span>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-9">
        <div class="wrapper">
            <div class="b9-left">
                <div style="text-align: center;"><span class="lt57">Frank Wagner</span><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/doctor.png">
                </div>
            </div>
            <div class="b9-right">
                <h2 class="lt58">Expertengutachten</h2>
                <p class="lt59">In den letzten Jahren hat sich die Zahl der Menschen mit Sehverlust <span>um das 18-fache
                     erhöht</span> . Viele meiner Patienten geraten in Panik und fordern mich auf, ihnen Linsen und Brillen zu
                    verschreiben, obwohl sie nicht verstehen, dass eine solche Maßnahme <span>die Situation weiter
                     verschlechtert und die Augen vollständig zerstört</span> .
                </p>
                <p class="lt60">Heute gibt es die Möglichkeit, das Problem mit Medikamenten zu LÖSEN. Für diese Zwecke
                    <span>wurde das Präparat Cleanvision</span> erstellt. Ich verschreibe es jedem Patienten und <span>in 99% der Fälle
                     bekommen sie nach 1 Behandlungskurs ein klares Sehvermögen.</span> .
                </p>
                <p class="lt61">In der Tat enthält die Zusammensetzung des Arzneimittels speziell ausgewählte Komponenten, die
                    das ordnungsgemäße Funktionieren der Augenmuskulatur wiederherstellen und den Zustand der Linse verbessern -
                    die Hauptfaktoren für gutes Sehvermögen.
                </p>
                <p class="lt62">In Kombination mit der augengymnastik liefert eine solche Therapie in kürzester Zeit ein
                    sicheres Ergebnis und hilft, chirurgische Eingriffe zu vermeiden.
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-10">
        <div class="wrapper">
            <h2 class="lt63">Ihr Sehvermögen wurde bereits mit <span> Cleanvision</span> wiederhergestellt </h2>
            <div class="client">
                <div class="head">
                    <div class="client-info">
                        <img alt="Emma Swan" src="{{ asset('/') }}naturapharmFiles/cleanvision/human-1.png">
                        <p class="name lt64">Emma Dietrich,</p>
                        <p class="city lt65">Berlin, 31 Jahre</p>
                    </div>
                </div>
                <p class="text lt66">Mehrere Jahre lang hat sich mein Sehvermögen verschlechtert. Zunächst habe nicht darauf
                    geachtet, bis mein rechtes Auge fast vollständig aufgehört hat zu sehen. Dabei bin ich Klavierspielerin und
                    natürlich fällt es viel leichter nach Noten, anstatt nach Gefühl zu spielen. Was soll ich aber tun, wenn ich
                    sie überhaupt nicht sehe? Brillen und Kontaktlinsen haben mir nicht geholfen, da ich anschließend
                    Kopfschmerzen bekommen habe. Ich wendete mich anschließend an einen Arzt, der mir gesagt hat, dass es nichts
                    besseres als Cleanvision gibt. Ich habe natürlich nicht mit einem Wunder, habe aber trotzdem beschlossen Cleanvision
                    auszuprobieren. Bereits nach dem ersten Behandlungskurs hat sich mein Sehvermögen wesentlich verbessert!
                    Beim nächsten Arzttermin stellte es sich heraus, dass mein Sehvermögen bereits bei minus eins liegt! Mein
                    Arzt lächelte mich an und sagte, dass sich das Sehvermögen weiter verbessern wird! Ich bin so froh! Werde Cleanvision
                    weiter bestellen.
                </p>
            </div>
            <div class="client">
                <div class="head">
                    <div class="client-info">
                        <img alt="Gabriel Stewart" src="{{ asset('/') }}naturapharmFiles/cleanvision/human-2.jpg">
                        <p class="name lt67">Gabriel Lehmann,</p>
                        <p class="city lt68">Hamburg, 36 Jahre</p>
                    </div>
                </div>
                <p class="text lt69">Ich bin Softwarespezialist in einem internationalen Unternehmen. Die meiste Zeit
                    verbringe ich hinter dem Monitor, weshalb ich auch ein schlechtes Sehvermögen bekommen habe. Hatte ständig
                    Kopfschmerzen. Dann habe ich beschlossen dem Ganzen ein Ende zu setzen. Habe mir einen zweiwöchigen Urlaub
                    genommen und Cleanvision bestellt. In dieser Zeit habe ich Cleanvision eingenommen, Augengymnastik gemacht und frisches Obst
                    und Gemüse gegessen. Das Ergebnis hat mich fasziniert! Ich sehe jetzt alles noch besser als zur Studienzeit!
                    Nun werde ich darauf besser aufpassen!
                </p>
            </div>
            <div class="client">
                <div class="head">
                    <div class="client-info">
                        <img alt="Ирина Карпова" src="{{ asset('/') }}naturapharmFiles/cleanvision/human-3.png">
                        <p class="name lt70">Susanne Fischer,</p>
                        <p class="city lt71">Bielefeld, 51 Jahre</p>
                    </div>
                </div>
                <p class="text lt72">Von Cleanvision habe ich im Krankenhaus erfahren. Die Ärzte haben gerade über dieses Mittel
                    diskutiert, deshalb habe ich beschlossen es auszuprobieren. Schließlich bin ich ja nicht mehr gerade jung
                    und habe schon aufgehört die Busnummern zu sehen. Darüber hinaus habe ich auch Probleme mit meiner Netzhaut
                    bekommen. Und Cleanvision kann bei allen Augenproblemen verwendet werden. Was soll ich noch sagen, das Präparat ist
                    wunderbar! Jetzt sehe ich alles viel besser, ich kann sogar die kleinen Details in der Ferne sehen. Empfehle
                    ich auf jeden Fall weiter!
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-11">
        <div class="wrapper">
            <div class="b11-left">
                <div class="alert">
                    <h3 class="lt73">Hüten Sie sich vor Fälschungen! <span>Cleanvision</span> </h3>
                    <p class="lt74">Um Fälschungen und minderwertige Analoga zu vermeiden, <span>kaufen Sie nur das
                        Originalprodukt nur auf dieser Webseite</span> .
                    </p>
                </div>
                <p class="quality lt75">100% QUALITÄT!</p>
            </div>
            <div class="b11-right"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="block11Product"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="block-12">
        <div class="wrapper">
            <h2 class="lt76">Möchten Sie Cleanvision bestellen?</h2>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-1.png">
                <p class="lt77">Füllen Sie das Bestellformular aus</p>
                <img alt="" class="arrow" src="{{ asset('/') }}naturapharmFiles/cleanvision/arrow.png">
            </div>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-2.png">
                <p class="lt78">Warten Sie auf den Anruf unseres Kundenberaters, um die Bestellung zu bestätigen</p>
                <img
                        alt="" class="arrow" src="{{ asset('/') }}naturapharmFiles/cleanvision/arrow.png">
            </div>
            <div class="stage">
                <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/stage-3.png">
                <p class="lt79">Wir arbeiten ohne VORAUSZAHLUNGEN! Bezahlen Sie Ihre Bestellung nur nach Erhalt</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header">
        <div class="wrapper">
            <div class="header-top">
                <div class="ht-left">
                    <h2 class="lt80"> <span>Es ist an der Zeit,</span> die Sehkraft wiederherzustellen!</h2>
                </div>
                <div class="ht-right">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-1.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-2.png">
                    <img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/ht-3.png">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom">
                <div class="hb-left"><img alt="Alt" src="{{ asset('/') }}naturapharmFiles/cleanvision/oci.png" class="headerProduct"></div>
                <div class="hb-center">
                    <ul>
                        <li class="lt81">Lindert in nur 5 Minuten <br>Verspannungen und Schmerzen in den Augen</li>
                        <li class="lt82">Stellt die Sehkraft zu 99% nach 1 Behandlungskurs<br>wieder her</li>
                        <li class="lt83">Verhindert die Entwicklung von Augenkrankheiten <br>und die Schwächung<br>des
                            Sehvermögens
                        </li>
                    </ul>
                    <p class="promo lt84">Bei einer Bestellung jetzt<br><span class="sale">bekommen Sie einen Rabatt!</span>
                    </p>
                    <div class="price">
                        <p class="price_old">
                            {{ $prices[1]['originalPrice'] }}<span> RSD</span>
                        </p>
                        <p class="price_main">
                            {{ $prices[1]['amount'] }}
                            <span> RSD</span>
                        </p>
                    </div>
                </div>
                <div class="hb-right">
                    <div class="timer-wrap">
                        <p class="lt85">Bis Aktionsende sind noch:</p>
                        <div class="landing__countdown"></div>
                    </div>
                    <form action="{{$orderRoute}}" method="post" class="order_form cpa__order_form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <label class="lt87" for="name">Ime i prezime</label>
                        <input id="name" name="name" required="" type="text">
                        <label class="lt88" for="phone">Telefon</label>
                        <input id="phone" name="phone" required="" type="tel">
                        <label class="lt89" for="shipping_address">Adresa</label>
                        <input id="shipping_address" name="shipping_address" required="" type="text">
                        <label class="lt810" for="shipping_city">Grad</label>
                        <input id="shipping_city" name="shipping_city" required="" type="text">
                        <input type="submit" value="PORUČI">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>