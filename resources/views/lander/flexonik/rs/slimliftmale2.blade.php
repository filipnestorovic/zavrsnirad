<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/slimliftmale2/favicon.png">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimliftmale2/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/slimliftmale2/style.css">
</head>
<body>
<!-- ШАПКА 1 -->
<!-- after_qbici -->
<section class="header-one">
    <div class="wrap">
        <h2>Pánske ortopedické bielizeň</h2>
        <h1>Slim'n'lift</h1>
        <div class="sale2">
            akcia!
            <p>50%</p>
            zľava
        </div>
        <ul class="header-one_plus">
            <li>
                <p>Okamžité tvarovanie tela</p>
            </li>
            <li>
                <p>Posilnenie zadných svalov</p>
            </li>
            <li>
                <p>Korekcie polohy</p>
            </li>
        </ul>
        <div class="price-button">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Bežná cena:</span>
                    <p>
                        <span>
                           {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                        </span>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Cena dnes:</span>
                    <p>
                        {{ $prices[1]['amount'] }} <small>RSD</small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Objednajte hneď</a>
            <div class="stock">Množstvo tovaru je obmedzené.</div>
        </div>
    </div>
</section>
<!--ОПИСАНИЕ 4-->
<section class="light-bg">
    <div class="wrap nopad">
        <h2 class="title">Multifunkčná korekcia <span>Pánska spodná bielizeň Slim'n'Lift</span></h2>
        <div class="about4 two-col radius gif">
            <div class="two-col_left">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/gif1-min.gif" alt="">
            </div>
            <div class="two-col_right">
                <p><b>Spodná bielizeň Slim'n'Lift je novinkou nemeckých vedcov,</b> ktorí sa vyvinuli spoločne s
                    najlepšími ortopedickými chirurgmi sveta.
                </p>
                <p><b>Bielizeň plní funkciu korzetu.</b> Externe má vzhľad bežného trička, ktoré je ideálne pre
                    každodenné použitie.
                </p>
                <p><b>Vďaka ortopedickému spodnej bielizni môžete tieto libry okamžite skryť a správny tlak na svaly
                        brucha a chrbta postupne vracia tvar vášho tela!</b>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="problem-box">
    <div class="wrap">
        <h2 class="title">Slim'n'Lift <span>vyrieši vaše problémy radikálne</span></h2>
        <div class="clearfix">
            <div class="problem-header"></div>
        </div>
        <ul class="problems">
            <li>
                <div class="pr-left clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/p1.jpg" alt="">
                    <p>Plnosť, pivné brucho</p>
                </div>
                <div class="pr-right clearfix">
                    <p>Udržiavanie brušných svalov v tóne povedie k skutočnosti, že tuková vrstva začne klesať
                    </p>
                </div>
            </li>
            <li>
                <div class="pr-left clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/p2.jpg" alt="">
                    <p>Bolesti chrbta, osteochondróza</p>
                </div>
                <div class="pr-right clearfix">
                    <p>Udržuje prísne zdravé držanie tela a vyrovnáva chrbticu</p>
                </div>
            </li>
            <li>
                <div class="pr-left clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/p3.jpg" alt="">
                    <p>Slabé chrbtové svaly a brušné svaly</p>
                </div>
                <div class="pr-right clearfix">
                    <p>Vďaka dobre rozloženému zaťaženiu prinesie svaly tón.</p>
                </div>
            </li>
            <li>
                <div class="pr-left clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/p4.jpg" alt="">
                    <p>Bolesti brucha, zhoršené trávenie</p>
                </div>
                <div class="pr-right clearfix">
                    <p>Opravuje žalúdok a zlepšuje činnosť tráviacich orgánov</p>
                </div>
            </li>
            <li>
                <div class="pr-left clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/p5.jpg" alt="">
                    <p>Srdcové a dýchacie ťažkosti</p>
                </div>
                <div class="pr-right clearfix">
                    <p>Vďaka kompetentní fixácii sa zlepšuje činnosť srdca a dýchacích orgánov</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 3-4 -->
<section class="dark-bg general">
    <div class="wrap nopad">
        <h2 class="title">Hlavné výhody Slim'n'Lift</h2>
        <!--ПРЕИМУЩЕСТВА 4-->
        <ul class="plus4 list col4 border2 radius">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/pr1.jpg" alt="">
                <h3>Komfort</h3>
                <p>Výrobky sú vyrobené z vysoko kvalitných materiálov, nezasahujú a nevytvárajú skleníkový efekt ani
                    za teplého počasia.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/pr2.jpg" alt="">
                <h3>Účinnosť</h3>
                <p>Spodná bielizeň je nielen dobre naklonené, ale tiež vytvára správne držanie tela a podporuje tiež
                    svaly chrbta
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/pr3.jpg" alt="">
                <h3>Všestrannosť</h3>
                <p>Nápravné spodná bielizeň je navrhnuté tak, aby súčasne opravovalo vady tela a zlepšovalo zdravie.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/pr4.jpg" alt="">
                <h3>Kvalita</h3>
                <p>Výrobok nevyžaduje zvláštnu starostlivosť, možno ho prať aj každý deň a aj po stovkách praní bude
                    vyzerať dokonale
                </p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Objednajte hneď</a>
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 1-2 -->
<section class="use">
    <div class="wrap nopad">
        <h2 class="title"><span>Kde a na čo použiť</span> Slim'n'Lift</h2>
        <!--ПРЕИМУЩЕСТВА 2-->
        <ul class="plus2 list col3 ">
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/for1.jpg" alt="">
                </div>
                <div class="list-right">
                    <h3>Každý deň</h3>
                    <p>Pri každodennom nosení sa môžete spoľahnúť na zníženie hmotnosti, pretože udržiavanie
                        brušných svalov v tonusu povedie k tomu, že tuková vrstva sa bude postupne znižovať a brušné
                        svaly budú prominentnú a krásne
                    </p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/for2.jpg" alt="">
                </div>
                <div class="list-right">
                    <h3>Ako korzet</h3>
                    <p>Možno použiť namiesto špeciálneho korzetu pre chrbticu. Fixuje chrbtové svaly na správne
                        miesto po celý deň, takže sa zbaví napätia, vytvorí sa správne držanie tela a zaťaženie
                        chrbtice bude správne rozložené.
                    </p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/for3.jpg" alt="">
                </div>
                <div class="list-right">
                    <h3>Počas tréningu</h3>
                    <p>Potenie počas behu sa zvyšuje, a preto sa všetok prebytok vylučuje z tela tekutina a toxíny.
                        Účinnosť tréningu brušných svalov a chrbta sa zvyšuje 2,5-3krát
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
{{--<div class="section-table">--}}
    {{--<div class="wrap">--}}
        {{--<div class="sizes_table ">--}}
            {{--<h4>Rozmery</h4>--}}
            {{--<div class="row sizes_list ">--}}
                {{--<div class="column"><span>Veľkosť</span></div>--}}
                {{--<div class="column">S </div>--}}
                {{--<div class="column">M </div>--}}
                {{--<div class="column">L </div>--}}
                {{--<div class="column">XL</div>--}}
                {{--<div class="column">XXL </div>--}}
                {{--<div class="column">XXXL </div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="row sizes_list ">--}}
                {{--<div class="column"><span>Priemer<br> hrudníka</span></div>--}}
                {{--<div class="column">(54-85)</div>--}}
                {{--<div class="column">(68-100)</div>--}}
                {{--<div class="column">(80-115)</div>--}}
                {{--<div class="column">(92-130)</div>--}}
                {{--<div class="column">(140-145)</div>--}}
                {{--<div class="column">(120-175)</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="row ">--}}
                {{--<div class="column"><span>Priemer <br>pása</span></div>--}}
                {{--<div class="column">na<br> 75</div>--}}
                {{--<div class="column">na<br> 90</div>--}}
                {{--<div class="column">na<br> 105</div>--}}
                {{--<div class="column">na<br> 120 </div>--}}
                {{--<div class="column">na<br> 140</div>--}}
                {{--<div class="column">na<br> 160</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!--ОПИСАНИЕ 4-->
<section class="light-bg composbox">
    <div class="wrap nopad">
        <h2 class="title"><span>Zloženie tkaniny</span> Slim'n'Lift</h2>
        <div class="clearfix compos">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/photo.jpg" alt="">
            <p><b>Prezentovaný produkt je vyrobený z vysoko kvalitného materiálu – Slim'n'Lift.</b></p>
            <p>Jedná sa o 100% polyester, ktorý vám umožní udržiavať termoreguláciu a dobre prechádza vzduchom,
                takže sa budete cítiť pohodlne v tričku za každého počasia
            </p>
            <p>Tkanina je príjemná na dotyk, elastická a pri kontakte s pokožkou nespôsobuje alergické reakcie.
            </p>
        </div>
        <a href="#order_form" class="button-m">Objednajte hneď</a>
    </div>
</section>
<!--ОТЗЫВЫ 4-6 -->
<section class="dark-bg revbox">
    <div class="wrap nopad">
        <h2 class="title">Spätná väzba od spokojných kupujúcich</h2>
        <!--ОТЗЫВЫ 6-->
        <div class="reviews-6">
            <div>
                <div class="rev">
                    <div class="rev-img">
                        <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/rev1.jpg" alt="">
                    </div>
                    <div class="rev-cont">
                        <h3>Jakub, fitness trenér, 30 let</h3>
                        <p>Nedávno som pre seba urobil ohromujúci objav - ortopedické spodná bielizeň Slim'n'Lift.
                            Okamžite zrejmé, že nemecká kvalita! Tričko je vyrobené zo špeciálnej tkaniny, ktorá
                            dobre odstraňuje prebytočnú vlhkosť z povrchu kože. Je to veľmi pohodlné, odstraňuje
                            záťaž z chrbta, krku a pásu a svaly sú vždy v dobrom stave.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev">
                    <div class="rev-img">
                        <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/rev2.jpg" alt="">
                    </div>
                    <div class="rev-cont">
                        <h3>Lucia, 38 let</h3>
                        <p>K narodeninám manžela som mu dala elegantný darček - Slim'n'Lift. omáha udržiavať zdravé
                            chrbát. Skutočnosť je taká, že manžel mal prvé známky osteochondrózy, takže taký nákup
                            bol jednoducho nevyhnutný. Hovorí, že sa v tomto spodnom prádle cíti veľmi pohodlne, nie
                            je bolesť chrbta.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev">
                    <div class="rev-img">
                        <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/rev3.jpg" alt="">
                    </div>
                    <div class="rev-cont">
                        <h3>Petr, 37 let</h3>
                        <p>Nedávno mi začal divoko bolieť chrbát. Tréningy nepomohli, už som si myslel, že sa
                            nemôžem vyhnúť návšteve lekára a nejaké strašné diagnóze. Videl som reklamu
                            ortopedického spodnej bielizne Slim'n'Lift a rozhodol som sa objednať. Veľmi som
                            spokojný a neľutujem, že som peniaze minul. Pohodlne sa nosí, prakticky ho nesundávám,
                            bolesť chrbta je preč, dokonca som začal spať lepšie.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end reviews-6  -->
    </div>
</section>
<!--end ОТЗЫВЫ 4-6 -->
<!--КАК ЗАКАЗАТЬ-->
<section>
    <div class="wrap nopad">
        <h2 class="title"></h2>
        <!--КАК ЗАКАЗАТЬ 2-->
        <ul class="order2 list col4">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/order2-1.jpg" alt="">
                <p>Na našej webovej stránke zanecháte žiadosť</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/order2-2.jpg" alt="">
                <p>Náš manažér objasňuje podrobnosti objednávky.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/order2-3.jpg" alt="">
                <p>Vašu objednávku expedujeme do akéhokoľvek regiónu.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale2/order2-4.jpg" alt="">
                <p>Za objednávku platíte pri prijatí</p>
            </li>
        </ul>
    </div>
</section>
<section class="magnet-line">
    <div class="wrap">
        <h2>Objednajte Slim'n'Lift <span>so zľavou 50%</span></h2>
    </div>
</section>
<section class="footer-one">
    <div class="wrap">
        <div class="sale2">
            akcia!
            <p>50%</p>
            zľava
        </div>
        <div class="formbox shadow">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Bežná cena:</span>
                    <p>
                        <span>
                           {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                        </span>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Cena dnes:</span>
                    <p>
                        {{ $prices[1]['amount'] }} <small>RSD</small>
                    </p>
                </div>
            </div>
            <form id="order_form" class="main-order-form main-order-form m1-form" action="#" method="post">
                <label for="">Napríklad: Olda</label>
                <input class="field" type="text" name="name" placeholder="Vaše meno" required>
                <label for="">Napríklad: +420 768 987 939</label>
                <input class="field" type="tel" name="phone" placeholder="Váš telefón" required>
                <button type="submit" class="button-m">Objednajte hneď</button>
            </form>
            <div class="stock">Množstvo tovaru je obmedzené.</div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.reviews-1, .reviews-6').slick({
            dots: true,
            infinite: true,
            speed: 200,
            fade: false,
            cssEase: 'linear',
            adaptiveHeight: true
        });
    });
</script>
</body>
</html>