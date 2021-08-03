<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/skleker1/styles.css">
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title"><span>Buy Power Push Board</span></h1>
        <div class="offer_image">
            <p class="main_subtitle"></p>
            <img class="offer_product" src="{{ asset('/') }}flexonikFiles/skleker1/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>Bestseller </span> 2021!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">AKCIJA <span>-40%</span> </div>
            <div class="item old">Stara cena:<br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> RSD</small>
            </div>
            <div class="item new">NOVA CENA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> RSD</small>
            </div>
        </div>
        <ul class="bull clearfix">
            <li> Targets all muscle groups in the upper body </li>
            <li> Locks the wrist during exercise </li>
            <li> Portable, easy to mount and dismantle </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
    </header>
    <section class="sect_2 gradient_theme">
        <br></b>
        <h2 class="title separator"><span>Innovative format </span> HOME TRAINING</h2>
        <p>The push-up trainer is suitable for athletes of all skill levels. A beginner is able to perform exercises for the chest and back on it, as well as correct posture.

        </p>
        <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-01.jpg" alt="Push-up board">
        <p>The multi-functional color-coded push-up trainer strengthens and shapes the workout of 4 muscle groups: back, shoulders, chest and triceps. The ability to change the position and angle of the stop will allow you to maximize the use of the necessary
            muscles. </p>
        <div class="info"></div>
    </section>
    <section class="sect_3">
        <br></b>
        <h2 class="title">Benefits of <span> Power Push</span></h2>
        <ul class="list_4">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-03.png" alt="Push-up board">
                <p>Intensively works all muscle groups in the upper body</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-04.png" alt="Push-up board">
                <p>Reduces the likelihood of injury compared to standard push-ups.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-05.png" alt="Push-up board">
                <p>Foldable design greatly reduces storage space and overall weight</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-06.jpg" alt="Push-up board">
                <p>Compact and easy to transport while relaxing in nature</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČI ODMAH</a>
        <!--      <img src="doska-02.jpg" alt="Push-up board"> -->
    </section>
    <section class="sect_4 gradient_theme">
        <br></b>
        <h2 class="title">Dips Trainer <span> Features</span></h2>

        <ul class="char_list">
            <li><span>Material:</span> high strength plastic</li>
            <li><span>Dimensions: </span> 65x19x9 cm</li>
            <li><span>Stop material: </span> rubber</li>
            <li><span>Color: </span> multicolored</li>
        </ul>
    </section>
    <section class="sect_5">
        <br></b>
        <h2 class="title"><span>1349 people </span> have already rated the novelty</h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-07.jpg" alt="Push-up board">
                <p class="name">Jabal</p>
                <p class="text">Finally I found a machine that I really do. Houses are already standing 2 unit - gathering dust. It's compact, handy, easy to customize your level. Cool that you can pump nearly the whole body on one machine. I'm very glad I got it.)</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-08.jpg" alt="Push-up board">
                <p class="name">Adilya</p>
                <p class="text">
                    I rarely write reviews, but this is really a great device, well worth the money. Bought a couple of weeks back. We work with the whole family almost every day. It distributes the load on the whole body very cool. Can safely recommend for home workouts!
                </p>
            </div>
            <div class="rev_item stars">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/doska-09.jpg" alt="Push-up board">
                <p class="name">Hassan</p>
                <p class="text">Gave it to my husband for his birthday. For home, ideal, he is satisfied and everyone is engaged day. He said that he would take it with him to the park in the summer. The order came on the second day, for which thanks to the store. Recommended)
                </p>
            </div>
        </div>
    </section>
    <section class="sect_6">
        <br></b>
        <h2 class="title">How to order <span> Delivery and payment</span></h2>
        <ul class="order_list">
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_1.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Application </h4>
                    <p> Leave a request on our website. The manager will contact you shortly.</p>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_2.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Delivery</h4>
                    <p>Free delivery in UAE! Delivery 1-3 days! Pay upon delivery!</p>
                </div>
            </li>
            <li class="clearfix">
                <img src="{{ asset('/') }}flexonikFiles/skleker1/order_3.jpg" alt="Push-up board">
                <div class="text">
                    <h4>Warranties </h4>
                    <p> 100% quality guarantee. Each item is carefully checked before shipping.</p>
                </div>
            </li>
        </ul>
        <div class="order_info">Your goods will arrive safe and sound within 1-3 days</div>
    </section>
    <section class="offer_section offer_bot">
        <h1 class="main_title"><span>Push-up board </span> Power Push</h1>
        <div class="offer_image">
            <p class="main_subtitle">For effective workouts at home</p>
            <img class="offer_product" src="{{ asset('/') }}flexonikFiles/skleker1/doska.jpg" alt="Push-up board">
            <div class="desc">
                <p><span>Bestseller </span> 2021!</p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">SALE <span>-50%</span></div>
            <div class="item old">Stara cena: <br><span>{{ $prices[1]['originalPrice'] }}</span>
                <small> RSD</small>
            </div>
            <div class="item new">NOVA CENA: <br><span>{{ $prices[1]['amount'] }}</span>
                <small> RSD</small>
            </div>
        </div>
        <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" placeholder="Ime i prezime" required="">
            <input type="tel" name="phone" placeholder="Broj telefona" required="">
            <input type="text" name="shipping_address" placeholder="Adresa" required="">
            <input type="text" name="shipping_city" placeholder="Grad" required="">
            <button class="button-m" type="submit">PORUČI ODMAH</button>
        </form>
    </section>
</div>
<div class="foot_en_center" style="text-align: center; margin: 0px auto; padding: 30px;"></div>
@include('components.pixel_footer')
</body>
</html>