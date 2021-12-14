<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/easytrainer/s13-img-7.png">
    <style>
        @font-face {
            font-family: 'Circe';
            src: url('{{ asset('/') }}fonts/Circe-Regular.eot');
            src: url('{{ asset('/') }}fonts/Circe-Regular.eot@#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/Circe-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Circe-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/Circe-Regular.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/Circe-Regular.svg#Circe-Regular') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'CirceBold';
            src: url('{{ asset('/') }}fonts/Circe-Bold.eot');
            src: url('{{ asset('/') }}fonts/Circe-Bold.eot@#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/Circe-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/Circe-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/Circe-Bold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/Circe-Bold.svg#Circe-Bold') format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/easytrainer/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/easytrainer/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/easytrainer/stacktable.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/easytrainer/app.css">
</head>
<body>
<section class="content">
    @include('components.display_errors')
    <section class="section section-main">
        <div class="container">
            <div class="row flex">
                <div class="col-xl-6 col-lg-6 flex-middle">
                    <div class="image-container">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/product.png">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 flex-item-bottom">
                    <div class="left-side">
                        <img class="main-logo" style="max-width: 300px;" src="{{ asset('/') }}flexonikFiles/easytrainer/logo.png">
                        <h2 class="main-title">Do željene figure <span>3-4 puta brže</span> nego tradicionalnim putem!</h2>
                        <div class="image-container mobile">
                            <img src="{{ asset('/') }}flexonikFiles/easytrainer/product.png">
                        </div>
                        <div class="row flex">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 flex-middle">
                                <ul class="main-list">
                                    <li><span>Rešava</span> celulita</li>
                                    <li><span>Eliminiše</span> neproporcionalno široke kukove i uklanja višak masti</li>
                                    <li>Vrhunski <span>kvalitet</span></li>
                                    <li><span>Ojačava</span> zadnju ložu i zateže mišiće</li>
                                    <li>Za uzak i vitak struk <span>bez mnogo muke!</span></li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 flex-middle">
                                <form action="{{$orderRoute}}" method="post" class="site-form order_form">
                                    <p class="title">Unesite podatke za dostavu</p>
                                    {{csrf_field()}}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <p class="price text-green">
                                        <small class="old-price price_old">{{ $prices[1]['originalPrice'] }} RSD</small>
                                        <span class="price_main">{{ $prices[1]['amount'] }} RSD</span>
                                    </p>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Ime i prezime" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="phone" placeholder="Telefon" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="shipping_address" placeholder="Adresa" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="shipping_city" placeholder="Grad" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-accent">
                                        PORUČITE SADA
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-info" id="s1">
        <div class="container">
            <h2 class="text-center">Svi mi sanjamo o <span class="text-accent">vitkom i izvajanom telu</span>, zar ne?</h2>
            <p class="text-subtitle text-center">Zategnuta zadnjica, uzak struk i vitka linija?</p>
            <div class="row flex">
                <div class="col-xl-12 col-lg-12 flex-middle text-center">
                    <p class="subtitle">Bilo bi dobro da postoji magična pilula, ali šta god naučnici izmislili, još uvek je jedini pravi način samo trening!</p>
                    <p>Za to je potrebno vreme, novac i čelična volja, a u današnje vreme malo ljudi ima sve. Zato je ovo neoprensko odelo posebno - omogućava vam da vežbate manje a ostvarujete bolje rezultate i štedite vaše vreme i novac. </p>
                    <p>Easy Shape olakšava topljenje masti fokusirajući se na ključne i na najproblematičnije delove tela i to čak do 6 puta brže nego bez odela. Zahvaljujući tome efekti su vidljiviji brže, masti se tope, a vitka linija dolazi do izražaja.</p>
                    <p><b>Easy Shape nije magična pilula koja Vam obećava rezultate preko noći</b>, brzo skidanje i još brže vraćanje kilograma. Easy Shape će Vam pomoći da uz manje uloženog truda, za kraće vreme ostvarite željene rezultate uz fizičku aktivnost - To ga čini vrlo efikasnim i omiljenim proizvodom naših kupaca!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-info" id="s2">
        <div class="container">
            <div class="row flex">
                <div class="col-xl-6 col-lg-6 flex-middle">
                    <p class="text-label">Šta je Neopren i zašto je poseban?</p>
                    <h2>Neopren <span class="text-regular">je posebna vrsta materijala koji je lagan, prijatan za nošenje i ne upija vodu.</span></h2>
                    <p class="subtitle">Zato stvara takozvani <span class="text-accent">“efekat saune”</span> koji pomaže telu da brže sagoreva masti.</p>
                    <p>Prilikom korišćenja ovog kompleta, mišići se brže zagrevaju, povećavaju efekat treninga i brzinu topljenja masti,
                        a istovremeno se i smanjuje rizik od povreda. Zato što eliminiše sve pa i podkožne masti, jako je efikasan u borbi protiv celulita!</p>
                </div>
                <div class="col-xl-6 col-lg-6 flex-middle right-image"><img src="{{ asset('/') }}flexonikFiles/easytrainer/s2_mobile.jpg"></div>
            </div>
        </div>
    </section>
    <section class="section section-cards" id="s3">
        <div class="container">
            <h2 class="text-center">Kakve rezultate ostvaruju naši kupci?</h2>
            <div class="row flex">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s3-img-1.png">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s3-img-2.png">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s3-img-3.png">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s3-img-4.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-info" id="s4">
        <div class="container">
            <div class="row flex">
                <div class="col-xl-8 col-lg-8 flex-center" id="section-content">
                    <h2>Počni sa mršavljenjem još danas - Easy Shape je prečica do vitke linije</h2>
                    <a href="#order_form" class="btn btn-accent" data-toggle="modal" data-target="#contact">
                        Poručite sada
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-cards" id="s5">
        <div class="container">
            <h2 class="text-center">KAKO POMAŽE</h2>
            <p class="text-subtitle text-center">ovaj EasyShape komplet?</p>
            <div class="row flex-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-1.png">
                        <span>Sužava struk</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-2.png">
                        <span>Rešava nepropocionalnih kukova</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-3.png">
                        <span>Topi masti</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-4.png">
                        <span>Uklanja celulit</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-5.png">
                        <span>Zateže stomak</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-6.png">
                        <span>Rešava gojaznosti</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s5-img-7.png">
                        <span>Zateže liniju</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-info" id="s6">
        <div class="container">
            <div class="row flex">
                <div class="col-xl-6 col-lg-6 flex-middle left-image">
                    <img src="{{ asset('/') }}flexonikFiles/easytrainer/s6.jpg">
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-6 offset-lg-6 flex-middle">
                    <h2>Kako <span class="text-regular">ovaj komplet</span> radi?</h2>
                    <ul class="list">
                        <li>U kompletu odradite trening, ili jednostavno ga nosite dok obavljate <b>svakodnevne aktivnosti po kući</b></li>
                        <li>Komplet pomaže <b>bržem zagrevanju masti celog organizma</b></li>
                        <li><b>Ubrzava proces</b> razgradnje masti</li>
                        <li>Zahvaljujući specijalnom dizajnu i elastičnošću <b>omogućava ravnomernu raspodelu težine</b></li>
                        <li>Krajnji rezultat je <b>zategnuta figura, uzak struk i vitka linija</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-cards" id="s7">
        <div class="container">
            <h2 class="text-center">Tri ključne stvari</h2>
            <div class="row flex-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s7-img-1.svg">
                        <p>Uklanjanje celulita</p>
                        <span>Zbogom “pomorandžinoj kori”</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s7-img-2.svg">
                        <p>Topi masti</p>
                        <span>Čak i one najdublje</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s7-img-3.svg">
                        <p>Jača mišiće nogu i struka</p>
                        <span>Vratite se u formu</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-cards" id="s8">
        <div class="container">
            <h2 class="text-center">Zašto baš Easy Shape?</h2>
            <div class="row flex-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-1.png">
                        <span>Šorts i pojas mogu da se nose posebno</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-2.png">
                        <span>Prilagodljive veličine</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-3.png">
                        <span>Snažna kompresija za pojačan efekat</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-4.png">
                        <span>Specijalan dizajn zateže zadnjicu</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-5.png">
                        <span>Visoko kvalitetan spandeks prati svaki vaš pokret</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-6.png">
                        <span>Postava upija znoj i sprečava iritaciju kože</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-7.png">
                        <span>Može da se nosi ispod odeće</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s8-img-8.png">
                        <span>Ubrzava metabolizam i pomaže podmlađivanju kože</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-expert" id="s10">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <h2>Mišljenje struke</h2>
                    <p>Posvećen sam pomaganju ljudima da dodju do tela kakvog su oduvek želeli. Naravno, rezultati nisu mogući preko noći i potrebno je uložiti određen trud. Neoprenski komplet omogućava povećanju efikasnost treninga. Easy Shape komplet je po meni jedan od najboljih na tržištu.</p>
                    <p class="subtitle">Veoma je kvalitetne izrade i primetio sam da moji klijenti dolaze do rezultata 3-4 puta brže.</p>
                    <p>Vežbači koji koriste ovakva odela uz manje napora i manji broj treninga ostvaruju dosta bolje rezultate. Takođe je sada dosta lakše eliminisati celulit i višak masti na kukovima što je do sad bio najveći problem. Moja preporuka za ovaj proizvod!</p>
                </div>
                <div class="col-xl-4 col-lg-4 mt-2">
                    <div class="expert">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/expert.png">
                        <p>Žikica Miletić,</p>
                        <span>fitnes trener</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-cards" id="s12">
        <div class="container">
            <h2 class="text-center">Gde mogu da nosim <span class="text-regular">ovaj komplet?</span></h2>
            <div class="row flex-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-1.svg">
                        <span>Teretana</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-2.svg">
                        <span>Uz obavljanje <br> kućnih poslova</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-3.svg">
                        <span>Joga</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-4.svg">
                        <span>Trčanje</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-5.svg">
                        <span>Šetanje</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-6.svg">
                        <span>Vožnja bicikla</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="a-card">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/s12-img-7.svg">
                        <span>Rad na otvorenom</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="ordera0"></div>
    <section class="section section-main">
        <div class="container">
            <div class="row flex">
                <div class="col-xl-6 col-lg-6 flex-middle">
                    <div class="image-container">
                        <img src="{{ asset('/') }}flexonikFiles/easytrainer/product.png">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 flex-item-bottom">
                    <div class="left-side">
                        <img class="main-logo" style="max-width: 300px;" src="{{ asset('/') }}flexonikFiles/easytrainer/logo.png">
                        <h2 class="main-title">Do željene figure <span>3-4 puta brže</span> nego tradicionalnim putem!</h2>
                        <div class="image-container mobile">
                            <img src="{{ asset('/') }}flexonikFiles/easytrainer/product.png">
                        </div>
                        <div class="row flex">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 flex-middle">
                                <ul class="main-list">
                                    <li><span>Rešava</span> celulita</li>
                                    <li><span>Eliminiše</span> neproporcionalno široke kukove i uklanja višak masti</li>
                                    <li>Vrhunski <span>kvalitet</span></li>
                                    <li><span>Ojačava</span> zadnju ložu i zateže mišiće</li>
                                    <li>Za uzak i vitak struk <span>bez mnogo muke!</span></li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 flex-middle">
                                <form action="{{$orderRoute}}" method="post" class="site-form order_form" id="order_form">
                                    <p class="title">Unesite podatke za dostavu</p>
                                    {{csrf_field()}}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <p class="price text-green">
                                        <small class="old-price price_old">{{ $prices[1]['originalPrice'] }} RSD</small>
                                        <span class="price_main">{{ $prices[1]['amount'] }} RSD</span>
                                    </p>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Ime i prezime" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="phone" placeholder="Telefon" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="shipping_address" placeholder="Adresa" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="shipping_city" placeholder="Grad" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-accent">
                                        PORUČITE SADA
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<footer>
    <center></center>
</footer>
<script type="text/javascript">
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
<script src="{{ asset('/') }}flexonikFiles/easytrainer/slick.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/easytrainer/stacktable.js"></script>
<script src="{{ asset('/') }}flexonikFiles/easytrainer/app.js"></script>
@include('components.pixel_footer')
</body>
</html>