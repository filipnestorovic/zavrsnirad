<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{asset('/')}}flexovalFiles/carapa/about__tick_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}flexovalFiles/carapa/styles.css">
    <style>@font-face{font-family:'Roboto';src:local('Roboto Thin'),local('Roboto-Thin'),url('{{asset('/')}}fonts/robotothin.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothin.woff') format('woff'),url('{{asset('/')}}fonts/robotothin.ttf') format('truetype');font-weight:100;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Thin Italic'),local('Roboto-ThinItalic'),url('{{asset('/')}}fonts/robotothinitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothinitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotothinitalic.ttf') format('truetype');font-weight:100;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Light'),local('Roboto-Light'),url('{{asset('/')}}fonts/robotolight.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolight.woff') format('woff'),url('{{asset('/')}}fonts/robotolight.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Light Italic'),local('Roboto-LightItalic'),url('{{asset('/')}}fonts/robotolightitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolightitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotolightitalic.ttf') format('truetype');font-weight:300;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto'),local('Roboto-Regular'),url('{{asset('/')}}fonts/roboto.woff2') format('woff2'),url('{{asset('/')}}fonts/roboto.woff') format('woff'),url('{{asset('/')}}fonts/roboto.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Italic'),local('Roboto-Italic'),url('{{asset('/')}}fonts/robotoitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoitalic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Medium'),local('Roboto-Medium'),url('{{asset('/')}}fonts/robotomedium.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomedium.woff') format('woff'),url('{{asset('/')}}fonts/robotomedium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Medium Italic'),local('Roboto-MediumItalic'),url('{{asset('/')}}fonts/robotomediumitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomediumitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotomediumitalic.ttf') format('truetype');font-weight:500;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Bold'),local('Roboto-Bold'),url('{{asset('/')}}fonts/robotobold.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobold.woff') format('woff'),url('{{asset('/')}}fonts/robotobold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Bold Italic'),local('Roboto-BoldItalic'),url('{{asset('/')}}fonts/robotobolditalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobolditalic.woff') format('woff'),url('{{asset('/')}}fonts/robotobolditalic.ttf') format('truetype');font-weight:700;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Black'),local('Roboto-Black'),url('{{asset('/')}}fonts/robotoblack.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblack.woff') format('woff'),url('{{asset('/')}}fonts/robotoblack.ttf') format('truetype');font-weight:900;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Black Italic'),local('Roboto-BlackItalic'),url('{{asset('/')}}fonts/robotoblackitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblackitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoblackitalic.ttf') format('truetype');font-weight:900;font-style:italic}</style>
    <style>
        .offer_section.offer_top ul {
            margin: 135px 0 0 110px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <ul>
            <li style="color: #fff;"><b style="color: #fff;">Se îmbunătățește </b><br>circulaţie</li>
            <li><b>Reduce </b><br>inflamație și umflare</li>
            <li><b>Fără </b><br>efecte secundare</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">COMPRIMA</h1>
                <p>PENTRU ÎMBUNĂTĂȚAREA CIRCULAȚIEI <span>ȘI ÎMPOTRIVA VARICELOR</span></p>
            </div>
            <div class="discount">REDUCERE <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">PREȚ VECHI:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">PRET NOU:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Numele și prenumele" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                <input class="input" type="text" name="shipping_address" placeholder="Abordare" required>
                <input class="input" type="text" name="shipping_city" placeholder="Oraș" required>
                <button class="button">COMANDA ACUM</button>
            </form>
        </div>
    </div>
</header>
<section class="risks_section">
    <div class="wrapper">
        <h2>DE CE NU PUTEM <span>IGNORA VARICELE?</span></h2>
        <div class="risks_list">
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk1_image.jpg" alt="" title="">
                </div>
                <p><b>Chiar și cel mai ușor grad</b> de varice poate duce la insuficiență venoasă - o afecțiune permanentă pentru care nu există tratament.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk2_image.jpg" alt="" title="">
                </div>
                <p><b>Venele varicoase</b> prezintă în primul rând un risc ridicat de tromboză și sunt potrivite pentru formarea de cheaguri de sânge.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk3_image.jpg" alt="" title="">
                </div>
                <p><b>Venele varicoase provoacă</b> răspândirea girusului trofic în tot corpul, care poate fi îndepărtat doar prin transplant de piele</p>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper">
        <h2>SOSETELE DE COMPRESIE <span>PROTEJEAZA SANATATEA!</span></h2>
        <img src="{{asset('/')}}flexovalFiles/carapa/about__image1.png" alt="" title="">
        <div class="text_block">
            <p>Secretul eficacității lor constă în <b>compoziția unică</b> - tricotaje medicale combinate și bumbac. Acestea
                reglează temperatura corpului și nu numai că oferă o senzație foarte plăcută, dar reglează și nivelul de
                umiditate al pielii. Spre deosebire de alte șosete, șosetele <b>Compress pentru genunchi rezolvă problema la rădăcină!</b></p>
        </div>
        <ul>
            <li>Ele rezolvă oboseala <b>picioarelor, durerea, furnicăturile</b>, precum și inflamația și umflarea.</li>
            <li>Normalizează <b>circulația și întăresc pereții</b> vaselor de sânge.</li>
            <li>Datorită <b>efectului de compresie</b>, sângele în vene circulă mai repede.</li>
            <li>Ele asigură profilaxia <b>trombozei necesară</b>, protejând împotriva accidentelor.</li>
        </ul>
        <a href="#order_form" class="button">PROFITĂ OFERTA</a>
    </div>
</section>
<section class="components_section">
    <div class="wrapper">
        <h2>PENTRU CINE <span>SUNT ȘOSETELI COMPRESS?</span></h2>
    </div>
    <div class="components_list">
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component1_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>MUNCITORII</h3>
                    <p>Pentru cei care petrec cea mai mare parte a zilei sau a timpului de lucru în picioare</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component2_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>FEMEILE ÎNSĂRCINATE</h3>
                    <p>Pentru femeile obeze și gravide</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component3_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>PANTOFI INCONFOBILI</h3>
                    <p>Porți adesea pantofi cu tocuri</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component4_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>VARICE</h3>
                    <p>Observați că venele de pe picioare sunt mai exprimate și „umflate”</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="problems_section">
    <div class="wrapper clearfix">
        <div class="image_block">
            <img src="{{asset('/')}}flexovalFiles/carapa/problems__image.jpg" alt="" title="">
        </div>
        <div class="info">
            <h3>DE CE SUNT <b>UTILE SOSETELE DE COMPRESIE?</b></h3>
            <ul>
                <li>Ele previn unghiile încarnate, calusurile, oingotele și altele asemenea</li>
                <li>Nu au efecte secundare</li>
                <li>Sunt la fel de confortabile de purtat atat in pantofi cat si in casa fara nimic altceva la picioare</li>
                <li>Foarte de înaltă calitate și confortabil</li>
            </ul>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h3>CE FACE ȘOSEI <span>COMPRESS UNICI PE PIAȚĂ?</span></h3>
        <div class="table">
            <div class="row">
                <div class="cell head">ȘOSETE DE COMPRESIUNE SIMPLĂ</div>
                <div class="cell head">ȘOSETE DE COMPRESIUNE</div>
                <div class="cell head">CREMA ȘI ULEI</div>
            </div>
            <div class="row">
                <div class="cell">Nu au un efect holistic asupra venelor varicoase și circulației. Au doar efect de compresie. </div>
                <div class="cell">Au o gamă largă de efecte care satirizează problema la rădăcină. Ca urmare, varicele dispar. </div>
                <div class="cell">Ele nu au un efect holistic asupra rădăcinii problemei. În prezent, doar repară starea (în timpul utilizării). </div>
            </div>
            <div class="row">
                <div class="cell">După câteva zile de utilizare, oboseala și umflarea sunt reglate semnificativ.</div>
                <div class="cell">Deja după prima utilizare, oboseala și umflarea dispar. Este nevoie de 3-4 săptămâni pentru a rezolva întreaga problemă.</div>
                <div class="cell">Efectul este vizibil abia după o săptămână și este posibil să lipsească complet.</div>
            </div>
            <div class="row">
                <div class="cell">Nu pot fi purtate toată ziua - există un timp limitat de purtare. Apariția edemului ca efect secundar.</div>
                <div class="cell">Nu au un termen de valabilitate limitat. Purtați-le toată ziua. Sunt foarte usoare si confortabile.</div>
                <div class="cell">Timp limitat de utilizare.</div>
            </div>
            <div class="row">
                <div class="cell">Nu permit pielii să respire, ceea ce poate duce la mirosuri neplăcute. </div>
                <div class="cell">Permite pielii să respire - fără picioare transpirate și mirosuri neplăcute. </div>
                <div class="cell">Pot avea un miros neplăcut. </div>
            </div>
            <div class="row">
                <div class="cell">Efecte excelente de compresie.</div>
                <div class="cell">Materialele combinate asigură o compresie suficientă, deci nu sunt necesare preparate suplimentare.</div>
                <div class="cell">În majoritatea cazurilor, suprafața tratată trebuie bandajată pentru a obține efectul de compresie.</div>
            </div>
        </div>
    </div>
</section>
<section class="opinion_section">
    <div class="wrapper">
        <div class="opinion_block clearfix">
            <div class="author_info">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/opinion__photo.jpg" alt="" title="">
                </div>
                <div class="author_name"></div>
                <p></p>
            </div>
            <div class="text_block">
                <h3>OPINIE <span>PROFESIONALA</span></h3>
                <p>Pe baza multor mostre de diferite probleme cu venele și circulația, s-a ajuns la concluzia că este foarte dificil să existe o metodă universală de tratament pentru fiecare caz.
                    Cu toate acestea, șosetele Compress neagă acest lucru - sute de utilizatori mulțumiți își confirmă rezultatele remarcabile în tratarea acestei probleme. Toți raportează că circulația a revenit la normal și fluxul sanguin s-a îmbunătățit. Sunt recomandate oricui observa primele semne de varice. Sunt atât de ușoare și confortabile încât majoritatea utilizatorilor le poartă la serviciu.</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>IMPRESII <span>CLIENT</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review1_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Elisabeta Iliescu, <span>București</span></div>
                    <p>Sincer, nu aveam prea multe speranțe în acești șosete pentru genunchi. Dar prețul accesibil (mult mai ieftin decât în farmacii) și experiențele pozitive ale prietenilor m-au făcut să le încerc - și nu sunt dezamăgită. În mai puțin de o lună am scăpat de varice. Mi-au încetat să-mi furnică picioarele, mai ales gambele. Acum le port zilnic minim 3-4 ore ca măsură preventivă. Sunt grozavi și pot să vă spun că și eu mă simt grozav!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review2_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Alina Dalca, <span>Timișoara</span></div>
                    <p>I-am cumpărat mamei două perechi și îi plac foarte mult. Ea spune că arată ca șosete obișnuite, doar că mult mai pline și mai moi. Efectul este grozav! În urmă cu câteva săptămâni, abia se putea plimba prin casă, iar astăzi se joacă cu nepoții ei în parc. Suntem foarte recunoscători pentru acești șosete.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review3_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Floriana Dumitrescu, <span>Constanța</span></div>
                    <p>Nu ma asteptam la varice la varsta asta, dar asa s-a intamplat. Am observat că mă dor gambele în fiecare noapte și furnicau. Am comandat șosete Compress imediat ce am văzut anunțul pe Instagram. Aș dori să vă mulțumesc pentru livrarea rapidă - datorită faptului că m-am întors foarte repede pe picioare. Oboseala a dispărut, iar venele nu mai sunt dilatate. Acesti ciorapi sunt un miracol - ii recomand cu drag!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_info_section">
    <div class="wrapper">
        <h2>LIVRARE SI <span>PLATA</span></h2>
        <div class="info_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info1_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>CUM COMAND?</h3>
                    <p><a style="text-decoration: none; color: #32455d;" href="#order_form">Completați formularul</a> de pe site-ul nostru. Veți primi o confirmare a comenzii și vă puteți aștepta la aceasta în 24-48 de ore.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info2_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>LIVRARE</h3>
                    <p>Trimitem marfa prin posta rapida. Plătiți curierul doar după ridicare.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info3_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>GARANȚIE</h3>
                    <p>Oferim o garanție de calitate pentru toate produsele. Dacă din orice motiv nu sunteți mulțumit, vă vom rambursa banii.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Se îmbunătățește </b><br>circulaţie</li>
            <li><b>Reduce </b><br>inflamație și umflare</li>
            <li><b>Fără </b><br>efecte secundare</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">COMPRIMA</h1>
                <p>PENTRU ÎMBUNĂTĂȚAREA CIRCULAȚIEI <span> ȘI ÎMPOTRIVA VARICELOR</span></p>
            </div>
            <div class="discount">REDUCERE <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">PREȚ VECHI:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">PRET NOU:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Numele și prenumele" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                <input class="input" type="text" name="shipping_address" placeholder="Abordare" required>
                <input class="input" type="text" name="shipping_city" placeholder="Oraș" required>
                <button class="button">COMANDA ACUM</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
