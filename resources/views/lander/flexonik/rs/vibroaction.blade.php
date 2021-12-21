<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/vibroaction/styles.css">
    <script>
        var ww = window.innerWidth;
        if(ww <= 500){
            viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute('content', 'width=440, user-scalable=no');
        }
    </script>
    <style>.form-control{text-align-last:center;display:block;margin:0 auto 15px;padding:0 20px;width:114%;height:64px;border:1px solid #fff;-webkit-border-radius:32px;-moz-border-radius:32px;border-radius:32px;background:#fff;-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.4);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.4);box-shadow:inset 0 2px 4px rgba(0,0,0,.4);font-family:'Akrobat',sans-serif;font-weight:400;font-size:18px;color:#111;text-align:center}.promoBlock{display:none}.promo{background-image:linear-gradient(45deg,#9dc66b 5%,#4fa49a 30%,#87a0ef);position:fixed;height:56px;width:710px;margin:0 auto;bottom:0;z-index:999;left:0;right:0;border-radius:10px 10px 0 0;font-family:'Roboto'}.promo:before{content:"";position:absolute;width:86px;background:url() no-repeat;height:68px;top:-11px;left:20px}.close{position:absolute;background:#5d687a;width:20px;height:20px;text-align:center;border-radius:50%;line-height:19px;cursor:pointer;font-weight:700;color:#fff;right:-5px;top:-7px;font-family:'Roboto';font-size:18px}.promo p{display:inline-block;color:#fff;font-size:16px;padding:16px 0 0 130px;font-family:'Roboto';margin:0}.promo p span{font-size:24px}.promo p span:after{content:"";background:url() no-repeat;width:20px;height:23px;position:absolute}a.btnPromo{color:#fff;text-decoration:none;width:170px;height:35px;text-align:center;line-height:35px;border-radius:20px;background:#0b5889;font-size:17px;margin:11px 30px 0 0;display:block;float:right;font-family:'Roboto'}.bgPromo{background:url() no-repeat;width:960px;height:311px;padding:25px;margin-bottom:40px;clear:both;overflow:hidden;color:#222}.bgPromo .video-container{width:480px;height:260px}.bgPromo .left{width:420px;float:left}.bgPromo .right{float:right}.bgPromo h2{color:#222;margin-bottom:10px;padding-bottom:0;font-family:'Roboto';line-height:1.2;font-size:24px}.bgPromo h2 span{color:#a44598}.bgPromo .infoGift{clear:both;overflow:hidden}.infoGift img{float:left;margin-right:20px}.infoGift h3{margin:10px;font-size:30px;font-family:'Roboto';padding:0}.infoGift p{font-family:'Roboto'}.bgPromo p{padding:0}.bgPromo p.info{margin-top:20px;color:#1d73ca}@media (max-width:976px){.bgPromo{background:url() no-repeat;margin:0 auto 40px;width:510px;height:auto;background-size:cover}.bgPromo .left,.bgPromo .right{float:none;margin:0 auto;width:420px}.bgPromo .video-container{width:420px;height:240px;margin:0 auto}.bgPromo h2{margin-bottom:30px}}@media (max-width:730px){.promo{width:300px;height:112px}.bgPromo{width:320px;height:auto;padding:20px}.bgPromo .left,.bgPromo .right{width:280px}.infoGift h3{display:none}.promoBlock .wrap{padding:0}.infoGift img{max-width:80px}.infoGift p{width:288px;font-size:13px;text-align:left}p.info{margin-top:10px}.bgPromo .video-container{width:280px;height:138px;margin:0 auto}.promo:before{background:url() no-repeat;height:121px;left:5px}.promo p{padding-left:100px;padding-top:10px;font-weight:400}a.btnPromo{float:none;margin-left:110px}.bgPromo h2{text-align:center}}</style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h1 class="main_title">VIBRACIONI POJAS<br> Vibroaction</h1>
            <p class="subtitle">VIBRACIONI MASAŽNI POJAS <br>ZA OBLIKOVANJE TELA</p>
        </div>
        <img class="mobile_product" src="{{ asset('/') }}flexonikFiles/vibroaction/mobile__offer_product.png" alt="Vibroaction">
        <ul class="benefits_list">
            <li>SMANJUJE <span> STRUK</span></li>
            <li>OSLOBAĐA <span> VIŠKA TEŽINE</span></li>
            <li>UBLAŽAVA <span> BOLOVE U LEĐIMA</span></li>
        </ul>
        <div class="form_block">
            <div class="action_block clearfix">
                <div class="discount_block">
                    <div class="text">Akcija</div>
                    <div class="value">-40%</div>
                </div>
                <div class="price_block">
                    <div class="price_wrapper">
                        <div class="price_old al-cost-promo"><b class="price_old13599">{{ $prices[1]['originalPrice'] }}</b><b class="price_currency">RSD</b></div>
                        <div class="price_new al-cost"><b class="price_only13599">{{ $prices[1]['amount'] }} </b><b class="price_currency">RSD</b></div>
                    </div>
                </div>
            </div>
            <div>
                <a href="#order_form" class="button">Poručite sada</a>
            </div>
        </div>
    </div>
</header>
<section class="about_section">
    <div class="wrapper clearfix">
        <img src="{{ asset('/') }}flexonikFiles/vibroaction/about__image.jpg" alt="Vibroaction">
        <div class="content_block">
            <h2>JEDINSTVENI VIBRACIONI POJAS <span>Vibroaction</span></h2>
            <p><b>Vibroaction pojas je neizostavan dodatak koji pomaže u smanjenju struka.</b></p>
            <p>Koristeći ga, mogu se sagoreti masti čak i bez intenzivnog treninga.
                Pojas će učiniti da se mišići zategnu bolje nego na bilo kojoj spravi u teretani.</p>
            <p>Proizvođači su obezbedili dve vrste vibracija, automatske i manuelne:</p>
            <ul>
                <li>1. Automatski režim ima opuštajući efekat masaže i <b>eliminiše celulit</b></li>
                <li>2. Manuelni režim ima <b>5 različitih intenziteta</b>, i može se podešavati jačina kontrakcije mišića.</li>
            </ul>
            <p>Specijalno dizajnirani kaiševi olakšavaju nošenje i učvršćivanje na telo.
                Može se staviti za nekoliko sekundi i spreman je za upotrebu bilo gde:</p>
            <ul>
                <li>Na poslu</li>
                <li>Kod kuće</li>
                <li>U šetnji</li>
                <li>U teretani itd.</li>
            </ul>
        </div>
    </div>
</section>
<!-- /about -->
<!-- benefits -->
<section class="benefits_section">
    <div class="wrapper">
        <h2><span>KOJA JE TAJNA</span> EFIKASNOSTI POJASA?</h2>
        <div class="benefits_block">
            <img src="{{ asset('/') }}flexonikFiles/vibroaction/benefits__image.jpg" alt="Vibroaction">
            <ul>
                <li>Tehnologija dvostruke kompresije - čvrsto obavija leđa, struk i stomak</li>
                <li>Ne steže mišiće zahvaljujući visokotejnološkom materijalu</li>
                <li>Može se koristiti na različitim delovima tela, ležeći, sedeći za računarom ili bilo kom drugom položaju</li>
                <li>Mrežasti materijal obezbeđuje dobru ventilaciju</li>
                <li>Odnos kompresije je podesiv, a vi sami birate željeni efekat</li>
                <li>Nežno podržava mišiće leđa za odlično držanje</li>
            </ul>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
    </div>
</section>
<!-- /benefits -->
<!-- use -->
<section class="use_section">
    <div class="wrapper">
        <h2>ZAŠTO LJUDI ŠIROM SVETA KORISTE <span> VIBRACIONI POJAS?</span></h2>
        <div class="use_list clearfix">
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use1_image.jpg" alt="Vibroaction">
                    <p>POSLE TRUDNOĆE</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Vraća tonus oslabljenih trbušnih i leđnih mišiča</li>
                        <li>Sprečava kilu prilikom nošenja bebe svaki dan</li>
                    </ul>
                </div>
            </div>
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use2_image.jpg" alt="Vibroaction">
                    <p>RAD U SEDEĆEM POLOŽAJU</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Eliminiše napetost u leđima i umor - uzroke glabolje</li>
                        <li>Sigurna i udobna upotreba tokom celog dana</li>
                    </ul>
                </div>
            </div>
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use3_image.jpg" alt="Vibroaction">
                    <p>PREKOMERNA TEŽINA</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Smanjenje struka za nekoliko veličina</li>
                        <li>Prirodno oblikovanje struka</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /use -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2>DOSTAVA I PLAĆANJE</h2>
        <div class="steps_list clearfix">
            <div class="step_item">
                <div class="number">1</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step1_image.jpg" alt="Vibroaction">
                <h4>PORUČITE</h4>
                <p>Ostavite vaše podatke na našem sajtu i smatrajte da ste poručili proizvod.</p>
            </div>
            <div class="step_item">
                <div class="number">2</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step2_image.jpg" alt="Vibroaction">
                <h4>KONTATIRAĆEMO VAS</h4>
                <p>Naš tim za komunikaciju sa kupcima će vas kontaktirati da potvri porudžbinu.</p>
            </div>
            <div class="step_item">
                <div class="number">3</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step3_image.jpg" alt="Vibroaction">
                <h4>ISPORUKA</h4>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana. Pošiljku plaćate kuriru po preuzimanju.</p>
            </div>
        </div>
    </div>
</section>
<!-- order steps -->
<!-- reviews -->
<section class="reviews_section">
    <div class="wrapper">
        <h2>POSTALI SU <span>VITKI I PRIVLAČNI</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review1_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>TATJANA NIKOLIĆ, 29 GODINA</h4>
                    <p>Kada sam sa 27 godina rodila drugo dete, nisam se više nadala da ću vratiti nekadašnju figuru. Pre par meseci došao je prijatelj
                        iz Nemačke i rekao da većina devojaka tamo nosi vibracioni pojas. Otišla sam na vaš sajt i pročitala sve o proizvodu. Nažalost, tada nije bio
                        nikakav popust ali sam ga kupila po punoj ceni i nisam se pokajala. Već sutradan mi je stigao pojas i odmah sam počela da ga koristim. Za manje od mesec dana
                        bila sam prezadovoljna mojom figurom. Koristila sam i na zadnjici koja se zategla i podigla. <br/>PREPORUČUJEM SVIMA KUPOVINU OVOG PROIZVODA!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review2_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>VALERIJA TOMIĆ, 19 GODINA</h4>
                    <p>Dugo sam sanjala o tankom struku koji će poželeti da zagrli svaki muškarac. Pokušavala sam sa raznim dijetama i izgladnjivanjima ali efekat je bio loš.
                        Iskočila mi je reklama za vibracioni masažni pojas i rekoh da pokušam. Moj struk nakon 20 dana korišćenja je bio WOW. Savršeno zategnut stomak, konačno
                        mi se vide i pločice na stomaku. Moj dečko obožava moj novi struk. :)</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review3_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>DARIJA BOGDANOVIĆ, 41 GODINA</h4>
                    <p>PO PRVI PUT MOGU DA BIRAM MUŠKARCA ZAHVALJUJUĆI SAVRŠENOM STRUKU. <br/>Ovaj pojas je Božji dar. Stavite ga i figura se trenutno transformiše. Nosim ga već drugi mesec i rezultat je neverovatan. Struk mi je postao uzak,
                        stomak se smanjio a grudi došle do izražaja. Objavila sam sliku na drušvene mreže i zatrpavaju me poruke od udvarača, koje su mi moram priznati ranije mnogo nedostajale.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- offer -->
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        {{--<div class="title_block">--}}
            {{--<h3 class="main_title">VIBRACIONI POJAS <br>Vibroaction</h3>--}}
            {{--<p class="subtitle">VIBRACIONI MASAŽNI POJAS <br>ZA OBLIKOVANJE TELA</p>--}}
        {{--</div>--}}
        <img class="mobile_product" src="{{ asset('/') }}flexonikFiles/vibroaction/mobile__offer_product.png" alt="Vibroaction">
        <div class="form_block">
            <div class="action_block clearfix">
                <div class="discount_block">
                    <div class="text">Akcija</div>
                    <div class="value">-40%</div>
                </div>
                <div class="price_block">
                    <div class="price_wrapper">
                        <div class="price_old al-cost-promo"><b class="price_old13599">{{ $prices[1]['originalPrice'] }}</b><b class="price_currency">RSD</b></div>
                        <div class="price_new al-cost"><b class="price_only13599">{{ $prices[1]['amount'] }} </b><b class="price_currency">RSD</b></div>
                    </div>
                </div>
            </div>
            <form class="order_form al-form" action="{{$orderRoute}}" method="post" id="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required>
                <input class="input" type="tel" name="phone" id="phone" placeholder="Telefon" required>
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required>
                <input class="input" type="text" name="shipping_city" placeholder="Grad" required>
                <button class="button">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('a[href^="#"]').click(function () {
            var target = $(this).attr('href');
            $('html, body').animate({scrollTop: $(target).offset().top - 0 }, 800);
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>