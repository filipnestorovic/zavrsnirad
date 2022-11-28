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
            <li style="color: #fff;"><b style="color: #fff;">Подобрява </b><br>кръвообръщението</li>
            <li><b>Намалява </b><br>възпаление <br> и подуване</li>
            <li style="color: #8a705a;"><b>Без </b><br>страничен <br> ефект</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">КОМПРЕС</h1>
                <p>ЗА ПОДОБРЕНА ЦИРКУЛАЦИЯ <span>СРЕЩУ разширени вени</span></p>
            </div>
            <div class="discount">ОТСТЪПКА <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">СТАРА ЦЕНА:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">НОВА ЦЕНА:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Име и фамилия" required>
                <input class="input" type="tel" name="phone" placeholder="Телефон" required>
                <input class="input" type="text" name="shipping_address" placeholder="Адрес" required>
                <input class="input" type="text" name="shipping_city" placeholder="Град" required>
                <button class="button">ПОРЪЧАЙ СЕГА</button>
            </form>
        </div>
    </div>
</header>
<section class="risks_section">
    <div class="wrapper">
        <h2>ЗАЩО НЕ МОЖЕМ ДА <span>ПРЕНЕБРЕГНЕМ РАШИРЕНИТЕ ВЕНИ?</span></h2>
        <div class="risks_list">
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk1_image.jpg" alt="" title="">
                </div>
                <p><b>Дори най-леката степен</b> на разширени вени може да доведе до венозна недостатъчност – трайно състояние, за което няма лечение.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk2_image.jpg" alt="" title="">
                </div>
                <p><b>Разширените вени</b> са преди всичко висок риск от тромбоза и подходящи са за образуване на кръвни съсиреци.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk3_image.jpg" alt="" title="">
                </div>
                <p><b>Разширените вени причиняват</b> разпространението на трофични извивки в тялото, които могат да бъдат отстранени само чрез трансплантация на кожа</p>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper">
        <h2>КОМПРЕСНИТЕ ЧОРАПИ <span>ПАЗЯТ ЗДРАВЕТО!</span></h2>
        <img src="{{asset('/')}}flexovalFiles/carapa/about__image1.png" alt="" title="">
        <div class="text_block">
            <p>
{{--                Компресивните чорапи са метод на лечение и превенция на разширени вени или така наречената варикоза.--}}
{{--                Днес знаем, че разширените вени се развиват с години и можем да помогнем на състоянието на долните--}}
{{--                крайници преди да <b>настъпят тежки усложнения.</b>--}}
{{--                Компресивните чорапи могат да имат също огромна полза за предотвратяване на неприятните симптоми и--}}
{{--                ефекти от продължителното седене или стоене в изправено положение.--}}
{{--                <br><br>--}}
                <b>Тайната на тяхната ефективност</b> се крие в уникалния състав - Комбиниран медицински трико и памук. Те
                регулират телесната температура и не само осигуряват много приятно усещане, но и регулират нивото на
                влажност на кожата. За разлика от други чорапи, превантивни и медицински компресиращи трикотажни изделия
                <b>решават проблема в основата!</b>
            </p>
        </div>
        <ul>
            <li>Решават <b>уморта, болката, изтръпването на краката</b>, както и възпаленията и отоците</li>
            <li>Нормализират <b>циркулацията и укрепват стените</b> на кръвоносните съдове</li>
            <li>Благодарение на <b>компресионния ефект</b> кръвта циркулира по-бързо във вените</li>
            <li>Осигуряват необходимата <b>тромботична профилактика</b>, предпазвайки от инциденти</li>
        </ul>
        <a href="#order_form" class="button">ПОРЪЧАЙ СЕГА</a>
    </div>
</section>
<section class="components_section">
    <div class="wrapper">
        <h2><span>ЗА КОГО СА </span>КОМПРЕСНИТЕ ЧОРАПИ?</h2>
    </div>
    <div class="components_list">
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component1_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ЗА РАБОТНИЦИ</h3>
                    <p>За тези, които прекарват по-голямата част от деня или работното време прави</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component2_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>БРЕМЕННИ ЖЕНИ</h3>
                    <p>За пълни и бременни жени</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component3_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>НЕУДОБНИ ОБУВКИ</h3>
                    <p>Често носите обувки с токчета</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component4_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ИЗРАЗЕНИ ВЕНИ</h3>
                    <p>Забелязвате, че вените на краката ви са по-изразени и "подути"</p>
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
            <h3>ЗАЩО СА <b>ПОЛЕЗНИ КОМПРЕСИОННИТЕ ЧОРАПИ?</b></h3>
            <ul>
                <li>Предотвратяват врастнали нокти, мазоли, мазоли и други подобни</li>
                <li>Те нямат никакви странични ефекти</li>
                <li>Те са еднакво удобни за носене както в обувките, така и вкъщи без нищо друго по краката</li>
                <li>Много качествени и удобни</li>
            </ul>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h3>КАКВО ПРАВИ <span>КОМПРЕСНИТЕ ЧОРАПИ УНИКАЛНИ НА ПАЗАРА?</span></h3>
        <div class="table">
            <div class="row">
                <div class="cell head">ОБИКНОВЕНИ КОМПРЕСИОННИ ЧОРАПИ</div>
                <div class="cell head">КОМПРЕСНИ ЧОРАПИ</div>
                <div class="cell head">КРЕМ И МАСЛО</div>
            </div>
            <div class="row">
                <div class="cell">Те нямат цялостен ефект върху разширените вени и кръвообращението. Те имат само ефект на компресия.</div>
                <div class="cell">Те имат широк спектър от ефекти, които одстранява проблема в неговия корен. Като резултат на това разширените вени изчезват.</div>
                <div class="cell">Те нямат цялостен ефект върху корена на проблема. Те имат ефект само докато се използват.</div>
            </div>
            <div class="row">
                <div class="cell">След няколко дни употреба умората и отоците се регулират значително.</div>
                <div class="cell">Още след първата употреба умората и отоците изчезват. Необходими са 3-4 седмици за решаване на целия проблем.</div>
                <div class="cell">Ефектът е видим едва след седмица, а е възможно и да липсва напълно.</div>
            </div>
            <div class="row">
                <div class="cell">Не могат да се носят цял ден - има ограничено време за носене. Появата на оток като страничен ефект.</div>
                <div class="cell">Могат да се носят цял ден. Носете ги цял ден. Те са много леки и удобни.</div>
                <div class="cell">Ограничено време за употреба.</div>
            </div>
            <div class="row">
                <div class="cell">Те не позволяват на кожата да диша, което може да доведе до неприятни миризми.</div>
                <div class="cell">Те позволяват на кожата да диша - без потни крака и неприятни миризми.</div>
                <div class="cell">Те могат да имат неприятна миризма.</div>
            </div>
            <div class="row">
                <div class="cell">Отличен ефект на компресия</div>
                <div class="cell">Комбинираните материали осигуряват достатъчна компресия, така че не са необходими допълнителни препарати.</div>
                <div class="cell">В повечето случаи третираната зона трябва да бъде превързана, за да се постигне това компресионен ефект.</div>
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
                <h3>ПРОФЕСИОНАЛНО <span>МНЕНИЕ</span></h3>
                <p>На голям брой проби от различни проблеми с вените и кръвообращението се стигна до заключението, че е много трудно
                    има един универсален начин за лечение за всеки случай.
                    Kompress dokolenice обаче отричат това -  многобройни потребители, които потвърждават
                    изключителни резултати при лечението на този проблем. Всички съобщават, че циркулацията се е нормализирала и да
                    кръвният поток се подобрява. Препоръчват се на всеки, който забележи първите признаци на разширени вени. Толкова много са
                    леки и удобни, че повечето потребители ги носят на работа.</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>Utisci <span>kupaca</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review1_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Илина Филипов, <span>Пловдив</span></div>
                    <p>Честно казано, не очаквах много от тези продукт. Но достъпна цена (много по-евтино, отколкото в
                        аптеки) и положителният опит на моите приятели ме накара да ги опитам - и не останах разочарована. За по-малко от един месец се отървах от разширените вени. Краката спряха да ми изтръпват, особено в прасците и стъпалата.. Сега ги нося
                        всеки ден поне 3-4 часа превантивно. Страхотни са и мога да ви кажа, че и аз се чувствам страхотно!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review2_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Аделина Бакалов, <span>София</span></div>
                    <p>Купих на майка ми два чифта. Наистина ги харесва. Казва, че много приличат на обикновени чорапи но са
                        по-пълни и по-меки. Ефектът е страхотен!, Преди няколко седмици тя едва да можеше да се разхожда по къщата, а днес се играе с
                        внуците в нашия  парк.
                        Много сме благодарни за тези чорапи.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review3_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Ольга Атанасов, <span>Варна</span></div>
                    <p>Не очаквах разширени вени на тази възраст, но ето, случило се.
                        Забелязах, че ме болят прасците
                        всяка вечер и изтръпвам.
                        Поръчах компресионните чорапи веднага щом видях рекламата в Instagram.
                        Веднага поисках експресна доставка - благодарение на това много бързо си стъпих на краката. Умората изчезна,
                        и вените вече не са разширени. Тези чорапи са чудо - горещо ги препоръчвам!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_info_section">
    <div class="wrapper">
        <h2>ДОСТАВКА И <span>ПЛАЩАНЕ</span></h2>
        <div class="info_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info1_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>КАК ДА ПОРЪЧАМ?</h3>
                    <p><a style="text-decoration: none; color: #32455d;" href="#order_form">Попълнете формата</a> на нашия уебсайт. Ще получите потвърждение на поръчката и можете да го очаквате след 24-48 часа.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info2_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ДОСТАВКА</h3>
                    <p>Изпращаме стоки с експресна поща. Плащате на куриера само след получаване.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info3_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ГАРАНЦИЯ</h3>
                    <p>Даваме гаранция за качество на всички продукти. Ако по някаква причина не сте доволни, ние ще ви върнем парите.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Подобряват </b><br>кръвообръщението</li>
            <li><b>Намалява </b><br>възпаление <br>и подуване</li>
            <li><b>Без </b><br>страничен ефект</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">КОМПРЕС</h1>
                <p>ЗА ПОДОБРЕНА ЦИРКУЛАЦИЯ <span>И ПРОТИВ РАЗЛИЧНИ ВЕНИ</span></p>
            </div>
            <div class="discount">ОТСТЪПКА <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">СТАРА ЦЕНА:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">НОВА ЦЕНА:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Име и фамилия" required>
                <input class="input" type="tel" name="phone" placeholder="Телефон" required>
                <input class="input" type="text" name="shipping_address" placeholder="Адрес" required>
                <input class="input" type="text" name="shipping_city" placeholder="Град" required>
                <button class="button">ПОРЪЧАЙ СЕГА</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
