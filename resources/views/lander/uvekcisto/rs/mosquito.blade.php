<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/mosquito/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/mosquito/reset.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/mosquito/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/mosquito/styles.css">
    <style>@font-face{font-family:'Montserrat';src:url({{asset('/')}}fonts/Montserrat-Regular.eot) format('eot'),url({{asset('/')}}fonts/Montserrat-Regular.woff) format('woff'),url({{asset('/')}}fonts/Montserrat-Regular.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Montserrat';src:url({{asset('/')}}fonts/Montserrat-Bold.eot) format('eot'),url({{asset('/')}}fonts/Montserrat-Bold.woff) format('woff'),url({{asset('/')}}fonts/Montserrat-Bold.ttf) format('truetype');font-weight:700;font-style:normal}</style>
    <script src="{{ asset('/') }}dailysharkFiles/mosquito/jquery.min.js"></script>
</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h1 class="main_title">ZAMKA ZA<br> KOMARCE <span><br>MOSQUITO TRAP</span></h1>
            <p class="subtitle">POBRINUĆE SE ZA VAŠ MIRAN SAN!</p>
        </div>
        <div class="info_block">
            <ul>
                <li>Bezbedno za ljude i kućne ljubimce</li>
                <li>Visoko efikasno zahvaljujući ultraljubičastom svetlu</li>
                <li>Nema buke, nema mirisa i nema dima</li>
                <li>Kompaktne veličine i modernog dizajna</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }}<font class=""></font> RSD<span class=""></span></div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }}<font class=""></font> RSD<span class=""></span></div>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČI ODMAH</a>
            {{--<div class="products_count"></div>--}}
        </div>
        <div class="sale">
            <span>POPUST<br>40%</span>
        </div>
        <img class="img" src="{{ asset('/') }}dailysharkFiles/mosquito/photo1.png" alt="">
    </div>
</header>
<section class="problems_section">
    <div class="wrapper">
        <h2>DOSTA VAM JE DOSADNIH INSEKATA <br> <span> U VAŠEM DOMU?</span></h2>
        <div class="problems_list">
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo3.jpg" alt="">
                <p>Ne spavate dovoljno zbog stalnog zujanja?</p>
            </div>
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo4.jpg" alt="">
                <p>Iritiraju vas i svrbe ubodi komaraca?</p>
            </div>
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo5.jpg" alt="">
                <p>Ne uspevate da se rešite komaraca?</p>
            </div>
        </div>
        <div class="text">MOSQUITO TRAP TE PROBLEME REŠAVA BRZO I JEDNOSTAVNO! </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>SAMO AKTIVIRAJTE <br><span>Mosquito Magnet</span></h2>
        <p class="subtitle">I REŠITE SE KOMARACA JEDNOM ZAUVEK!</p>
        <div class="text_block">
            <p>U borbi protiv dosadnih insekata pomoći će ekološki prihvatljiv uređaj - električna zamka protiv komaraca Mosquito Trap.</p>
            <p>Princip rada zamke za insekte prilično je jednostavan: koristi se ultraljubičasta svetiljka kao mamac u lampi. 
Poseban domet i izvor svetlosti privlače insekte u mraku. Oko lampe postoji posebna mreža kroz koju insekti ne mogu izaći.
Jednom zarobljeni, sakupit će se u ladicu iz koje se mogu brzo i lako ukloniti.</p>
        </div>
        <ul>
            <li>Sigurno za ljude, mačke, pse i ostale kućne ljubimce. Utiče samo na insekte.</li>
            <li>Odsutnost buke i bilo kakvog mirisa omogućava vam da u potpunosti uživate u svom domu.</li>
            <li>Učinkovito će pomoći da se rešite komaraca, mušica i ostalih malih letećih insekata u sobama do 40 m².</li>
            <li>Može se koristiti u stanu, kancelariji, vikendici, trgovini, bolnici i bilo kom drugom mestu.</li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo6.jpg" alt="Pest Reject">
    </div>
</section>
<section class="gallery_block">
    <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo8.jpg" class="panorama" width="1920" height="320" alt="">
</section>
<div class="order_info_section">
    <div class="wrapper">
        <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo9.jpg" alt="Pest Reject">
        <div class="info_list">
            <div class="info_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Dostava poštom u roku od 1-2 radna dana u seloj Srbiji</p>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Plaćanje porudžbine vrši se po prijemu robe</p>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Ukoliko niste zadovoljni proizvodom, vratićemo vam novac.</p>
            </div>
        </div>
    </div>
</div>
<section class="reviews_section">
    <div class="wrapper">
        <h2>UTISCI <span> KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo10.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review1_avatar.jpg" alt="">
                        <div class="author_name">Ana Kokić</div>
                    </div>
                    <p>Za porodicu s malom decom ovo je idealan proizvod. Nema prskanja štetne hemije i otrovnih ispavanja, potpuno je bezbedno za okruženje.
Moja deca konačno spavaju mirno. Toplo preporučujem, posebno ako živite na selu.
</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo11.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review2_avatar.jpg" alt="">
                        <div class="author_name">Jovan Petrović</div>
                    </div>
                    <p>Napokon! Ne moram više paliti spirale, koje i nisu imale nekog efekta. Ovaj uređaj napaja USB, što ga čini vrlo jednostavnom za upotrebu. 
Uz to, ne stvara buku i ne emituje neugodan miris. Upravo ono što sam želio!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo12.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review3_avatar.jpg" alt="">
                        <div class="author_name">Milan Kljajić</div>
                    </div>
                    <p>Obično ne vjerujem ovoj vrsti proizvoda, ali sam imao takve probleme sa komarcima da sam se na kraju odlučio za kupovinu.
Sa zamkom za komarce sada mogu mirno zaspati, a danju ne češem iritacije i plikove od komaraca jer ih nema. Preporuka za sve!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h1 class="main_title">ZAMKA ZA<br> KOMARCE <span><br>MOSQUITO TRAP</span></h1>
            <p class="subtitle">POBRINUĆE SE ZA VAŠ MIRAN SAN!</p>
        </div>
        <div class="info_block">
            <ul>
                <li>Bezbedno za ljude i kućne ljubimce</li>
                <li>Visoko efikasno zahvaljujući ultraljubičastom svetlu</li>
                <li>Nema buke, nema mirisa i nema dima</li>
                <li>Kompaktne veličine i modernog dizajna</li>
            </ul>
        </div>
        <div class="form_block">
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }}<font class=""></font> RSD<span class=""></span></div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }}<font class=""></font> RSD<span class=""></span></div>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" id="name" type="text" name="name" placeholder="Ime i prezime" required/>
                <input class="field" id="phone" type="tel" name="phone" placeholder="Telefon" required/>
                <input class="field" id="shipping_address" type="text" name="shipping_address" placeholder="Adresa" required/>
                <input class="field" id="shipping_city" type="text" name="shipping_city" placeholder="Grad" required/>
                <button class="button">PORUČI ODMAH</button>
            </form>
            {{--<div class="products_count"></div>--}}
            <br>
        </div>
        <div class="sale sale2">
            <span>POPUST<br>40%</span>
        </div>
        <img class="img img2" src="{{ asset('/') }}dailysharkFiles/mosquito/photo1.png" alt="">
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/mosquito/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/mosquito/jquery.panorama.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/mosquito/scripts.js"></script>
<script>$("img.panorama").panorama();</script>
@include('components.pixel_footer')
</body>
</html>