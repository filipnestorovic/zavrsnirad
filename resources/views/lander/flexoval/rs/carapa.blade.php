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
</head>
<body>
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Улучшают</b><br>проходимость крови</li>
            <li><b>Снимают</b><br>воспаление и отечность</li>
            <li><b>Не имеют</b><br>побочных эффектов</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">VenuSocks</h1>
                <p>Компрессионные гольфы <span>от варикоза</span></p>
            </div>
            <div class="discount">Popust <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <form class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required>
                <input class="input" type="text" name="shipping_city" placeholder="Grad" required>
                <button class="button">PORUČI SADA</button>
            </form>
        </div>
    </div>
</header>
<section class="risks_section">
    <div class="wrapper">
        <h2>Почему варикоз <span>нельзя игнорировать?</span></h2>
        <div class="risks_list">
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk1_image.jpg" alt="" title="">
                </div>
                <p><b>Даже нулевая степень</b> заболевания может привести к хронической венозной недостаточности, перед которой медицина до сих пор бессильна</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk2_image.jpg" alt="" title="">
                </div>
                <p><b>Варикоз</b> - это в первую очередь высочайший риск тромбоза. Тромб может порваться в любую минуту и в одно мгновенье отправить человека на тот свет!</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk3_image.jpg" alt="" title="">
                </div>
                <p><b>Прогрессирующий варикоз</b> вызывает распространение на всем теле трофической язвы, избавиться от которой можно только с помощью пересадки кожи.</p>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper">
        <h2>VenuSocks <span>защитит ваше здоровье!</span></h2>
        <img src="{{asset('/')}}flexovalFiles/carapa/about__image.png" alt="" title="">
        <div class="text_block">
            <p>Секрет их эффективности заключается в <b>уникальном составе:</b> гольфы изготовлены из комбинированного медицинского трикотажа и четырех видов водорослевых волокон, широко использующихся в азиатских странах для лечения варикоза - хлороглеи, ламинарии, спирогиры и зигнемы. Действуя в комплексе, водоросли воздействуют на первопричину заболевания - нарушение кровообращения. В отличие от множества других средств, Venusocks не просто облегчают состояние пациента - <b>гольфы способны решить проблему полностью и избавить от варикоза навсегда.</b></p>
        </div>
        <ul>
            <li><b>Избавляют ноги от усталости</b> и ноющей боли, снимают воспаление и отечность</li>
            <li><b>Оказывают компрессионное воздействие</b>, за счет чего отток крови в венах проходит быстрее</li>
            <li><b>Нормализуют кровообращение</b> и укрепляют стенки сосудов</li>
            <li><b>Оказывают необходимую тромботическую профилактику</b>, защищая от несчастных случаев</li>
        </ul>
        <a href="#order_form" class="button">ISKORISTI PONUDU</a>
    </div>
</section>
<section class="components_section">
    <div class="wrapper">
        <h2>Чем полезны <span>водорослевые волокна?</span></h2>
    </div>
    <div class="components_list">
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component1_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Хлороглея</h3>
                    <p>Основной компонент в структуре водорослевых волокон. Снижают опасную густоту крови до допустимых значений и существенно облегчают ее транспортировку по венам.</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component2_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Ламинария</h3>
                    <p>Помимо широкого использования в пищевой промышленности, ламинария применяется наружно для укрепления стенок кровеносных сосудов и защиты от трофической язвы.</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component3_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Спирогира</h3>
                    <p>Контролирует кровообращение, не позволяя образоваться новым застоям и спровоцировать повторное возникновение варикоза.</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component4_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Зигнема</h3>
                    <p>Обладает мощным обезболивающим эффектом. Снимает ноющую боль и усталость, а также способствует уменьшению воспаления и опухоли.</p>
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
            <h3>Вам срочно необходимы <b>гольфы VenuSocks, если вы:</b></h3>
            <ul>
                <li><b>Находитесь на ногах</b> большую часть дня или трудитесь на “стоячей” работе</li>
                <li><b>Страдаете от избытка лишнего веса,</b> либо беременны</li>
                <li><b>Слишком часто</b> используете каблуки в своем гардеробе</li>
                <li><b>Заметили, что вены на ногах</b> явно просматриваются и даже вздулись</li>
            </ul>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h3>Почему VenuSocks - единственное средство, <span>гарантирующее результат</span></h3>
        <div class="table">
            <div class="row">
                <div class="cell head">Компрессионные гольфы</div>
                <div class="cell head">VenuSocks</div>
                <div class="cell head">Крема и мази</div>
            </div>
            <div class="row">
                <div class="cell">Не оказывают комплексного воздействия на варикоз. Используются только для компрессионного эффекта.</div>
                <div class="cell">Оказывают комплексное воздействие на первопричину варикоза. В результате болезнь проходит полностью.</div>
                <div class="cell">Не оказывают комплексного воздействия на варикоз. В результате они лишь временно облегчают состояние.</div>
            </div>
            <div class="row">
                <div class="cell">После нескольких применений существенно снижается усталость и опухоль.</div>
                <div class="cell">После первого же применения существенно снижается усталость и отечность в ногах. Полное избавление от варикоза наступает через 3-4 недели.</div>
                <div class="cell">Эффект заметен лишь через неделю после начала использования, либо не заметен вообще.</div>
            </div>
            <div class="row">
                <div class="cell">Имеют ограниченное время воздействия. Носить их целый день невозможно, так как возникает побочный эффект в виде отеков.</div>
                <div class="cell">Имеют неограниченное время воздействия, так как Venusocks можно носить сутками - они очень легкие, удобные и комфортные.</div>
                <div class="cell">Имеют ограниченное время воздействия.</div>
            </div>
            <div class="row">
                <div class="cell">Плохо дышат, провоцируют неприятный запах ног.</div>
                <div class="cell">Вообще не имеют запаха. Отлично дышат и не провоцируют потливость.</div>
                <div class="cell">Обладают неприятным остаточным запахом.</div>
            </div>
            <div class="row">
                <div class="cell">Отличный компрессионный эффект.</div>
                <div class="cell">Комбинированный трикотаж сам по себе оказывает компрессионный эффект, поэтому никакие дополнительные процедуры не нужны.</div>
                <div class="cell">В большинстве случаев обработанные участки тела нужно перевязывать бинтами - для улучшения компрессии.</div>
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
                <div class="author_name">Виктория Никифорова</div>
                <p>флеболог, стаж работы 34 года</p>
            </div>
            <div class="text_block">
                <h3>Мнение <span>специалиста</span></h3>
                <p>В своей практике я встречала тысячи различных венозных патологий, и поверьте, далеко не всегда удается найти единственно правильную методику лечения для пациента. Однако гольфы Venusocks позволили это сделать - их успешно протестировали более сотни больных варикозом людей с совершенно разной клинической спецификой. И абсолютно во всех случаях мы зафиксировали снижение уровня опасности - кровообращение нормализовалось, транспортировка крови наладилась. Я рекомендую гольфы Venusocks каждому, кто обнаружил у себя первые признаки варикоза.  Они настолько легкие и удобные, что большинство пациентов надевают их прямо на работу.</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>Отзывы <span>покупателей</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review1_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Екатерина Светлакова, <span>г. Нижний Новгород</span></div>
                    <p>Если честно, я вообще не верила, что эти гольфы смогут мне как-то помочь. Но положительные отзывы и низкая стоимость все-таки убедили меня их попробовать. И в итоге я не разочаровалась: за неполных 20 дней вены на ногах действительно стали такими, как в молодости, я стала меньше страдать от ноющей боли в икрах и голени. Сейчас ношу их каждый день по 3-4 часа для профилактики. Самочувствие - супер!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review2_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Анастасия Катаева, <span>г. Москва</span></div>
                    <p>Купила две пары для мамы, ей очень понравились. Говорит, похожи на обычные чулки, только плотнее и мягче. Эффект - просто супер! Еще две недели назад она еле передвигалась по комнате, а теперь уже снова наяривает в парке со своими палками для скандинавской ходьбы. Прямо в этих гольфах, кстати. Выражаем вам огромную благодарность за действительно эффективное средство!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review3_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Оля Кузнецова, <span>г. Минск</span></div>
                    <p>Не думала, что варикоз настигнет меня так рано, но это все же случилось. Начала замечать явное выступание вен, ноги каждый вечер стали неприятно ныть. Заказала Venusocks. Спасибо, что доставили очень быстро - благодаря этому я “вернулась в строй” как можно раньше. Усталость ушла, вены вернулись в нормальное положение. Эти водоросли - просто чудо. Рекомендую всем!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_info_section">
    <div class="wrapper">
        <h2>Доставка и <span>оплата</span></h2>
        <div class="info_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info1_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Как заказать?</h3>
                    <p>Оставьте заявку на нашем сайте. Наш менеджер свяжется с Вами в ближайшее время для оформления заказа.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info2_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Доставка</h3>
                    <p>Мы отправляем Ваш заказ почтой. После получения Вы оплачиваете товар наложенным платежом.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info3_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>Гарантии</h3>
                    <p>Мы проверяем качество всех товаров перед отправкой заказа. Вы также вправе отказаться от покупки в течение 14 дней.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Улучшают</b><br>проходимость крови</li>
            <li><b>Снимают</b><br>воспаление и отечность</li>
            <li><b>Не имеют</b><br>побочных эффектов</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h3 class="main_title">VenuSocks</h3>
                <p>Компрессионные гольфы <span>от варикоза</span></p>
            </div>
            <div class="discount">Popust <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="input" type="tel" name="phone" placeholder="Telefon" required>
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required>
                <input class="input" type="text" name="shipping_city" placeholder="Grad" required>
                <button class="button">PORUČI SADA</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>