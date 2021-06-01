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
            <h1 class="main_title">Mosquito<br> trap <span><br>Mosquito Magnet</span></h1>
            <p class="subtitle">take care of your good sleep!</p>
        </div>
        <div class="info_block">
            <ul>
                <li>Safe for people <br>and pets</li>
                <li>Highly efficient due to ultraviolet</li>
                <li>No noise odorless and smoke free</li>
                <li>Compact size <br> and stylish design</li>
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
        <h2>Tired of annoying insects <br> <span> in &nbsp; your house?</span></h2>
        <div class="problems_list">
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo3.jpg" alt="">
                <p>Do not get enough sleep due to constant buzzing?</p>
            </div>
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo4.jpg" alt="">
                <p>Constantly bitten by mosquito bites?</p>
            </div>
            <div class="problem_item">
                <img src="{{ asset('/') }}dailysharkFiles/mosquito/photo5.jpg" alt="">
                <p>Your tool does not cope with the problem?</p>
            </div>
        </div>
        <div class="text">Mosquito Magnet quickly and easily solve these problems! </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>Just activate <br><span>Mosquito Magnet</span></h2>
        <p class="subtitle">And get rid of mosquitoes once and for all!</p>
        <div class="text_block">
            <p>In the fight against annoying insects will help an environmentally friendly device - an electric trap for mosquitoes Mosquito Magnet.</p>
            <p>The principle of operation of the insect trap is quite simple: an ultraviolet lamp is used as a bait in the lamp. A special range and light source attract insects in the dark. Around the lamp is a special grid through which the insects can not get out. Once trapped, they will be collected in a removable tray from which they can be quickly and easily removed.</p>
        </div>
        <ul>
            <li>Safe for people, cats, dogs and large pets. Affects insects only.</li>
            <li>The absence of noise and foreign odor will make it possible to replace uncomfortable smoking spirals or constantly changing bottles with a raptor.</li>
            <li>It will effectively help get rid of mosquitoes, midges and other small flying insects in rooms up to 40 sq.m. </li>
            <li>It can be used in an apartment, office, cottage, cottage, dining room, shop, hospital and any other place.</li>
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
                <p>Deliver within 2-3 business days by OAE</p>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Pay upon delivery!</p>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>FREE delivery!</p>
            </div>
        </div>
    </div>
</div>
<section class="reviews_section">
    <div class="wrapper">
        <h2>Customer <span> Reviews</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo10.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review1_avatar.jpg" alt="">
                        <div class="author_name">Abda</div>
                    </div>
                    <p>For a family with young children it’s just perfect, it replaces a nightlight and there is no need to buy medicine for itchy skin. My big kids don’t rush around and sleep peacefully at night. I highly recommend it, especially if you live in the countryside.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo11.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review2_avatar.jpg" alt="">
                        <div class="author_name">Yunus</div>
                    </div>
                    <p>Finally! Big need not burn spirals. This trap is powered by USB, which makes it easy to use it not only at home, but also when traveling in nature or fishing. In addition, it does not make noise, and it does not emit an unpleasant odor. Exactly what I wanted!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/mosquito/photo12.jpg" alt="">
                <div class="text_block">
                    <div class="author_block clearfix">
                        <img class="avatar" src="{{ asset('/') }}dailysharkFiles/mosquito/reviews__review3_avatar.jpg" alt="">
                        <div class="author_name">Madi</div>
                    </div>
                    <p>Usually I do not trust this kind of goods. But, when once again you do not sleep at night, because mosquitoes are buzzing around, you are thinking about buying such a tool. With Mosquito Magnet, now I can safely fall asleep and are not afraid to be bitten. Recomend for everybody!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h1 class="main_title">Mosquito trap <span><br>Mosquito Magnet</span></h1>
            <p class="subtitle">take care <br>of your good sleep!</p>
        </div>
        <div class="info_block">
            <ul>
                <li>Safe for children <br>and pets</li>
                <li>Mains powered, <br>no recharging required</li>
                <li>No addictive <br>effect on pests</li>
                <li>Large area <br>of the device</li>
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