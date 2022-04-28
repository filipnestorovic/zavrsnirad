<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/kneesupport/styles.css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="top_line">
    <div class="wrapper clearfix">
        <img src="{{ asset('/') }}flexovalFiles/shared_files/Flexoval_logo.png" alt="" class="logo" width="225px">
        <ul>
            <li>100% dokazana efikasnost</li>
            <li>Više od 12.000 <br/> zadovoljnih kupaca</li>
            <li>Kvalitet zagarantovan</li>
        </ul>
    </div>
</section>
<section class="offer_section">
    <div class="wrapper clearfix">
        <h1 class="main_title">OSLOBODITE SE UKOČENIH, UMORNIH I BOLNIH KOLENA</h1>
        <p class="main_subtitle">Najbolji steznik sa silikonskim umetkom preporučen od strane reumatologa</p>
        <div class="sale"><div>Akcija! <span>40%</span> popust</div></div>
        <div class="right">
            <ul class="ofr_bull">
                <li>Oslobađa bola i eliminiše otok</li>
                <li>Povećava pokretljivost kolena</li>
                <li>Štiti od ponovnih povreda</li>
            </ul>
            <div class="price clearfix">
                <div class="old">
                    Stara cena:
                    <p><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD </small></p>
                </div>
                <div class="new">
                    Nova cena:
                    <p><span>{{ $prices[1]['amount'] }}</span><small>RSD </small></p>
                </div>
            </div>
            <a href="#unic_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>
{{--<section class="gallery_sect">--}}
{{--    <img src="{{ asset('/') }}flexovalFiles/kneesupport/gallery.jpg" alt="" class="panorama" height="323" width="1968">--}}
{{--</section>--}}
<section class="sect2">
    <div class="wrapper">
        <h2 class="title"><span>VAŽNO JE </span> POČETI NA VREME!</h2>
        <p class="subtitle">Nerešeni problemi sa kolenima mogu da izazovu <b>još veće komplikacije!</b></p>
        <h4 class="action">SIMPTOMI KOJI DOVODE DO KOMPLIKACIJA</h4>
        <ul class="benef1">
            <li>Bol u kolenu tokom kretanja ili mirovanja</li>
            <li>Bol pri savijanju kolena</li>
            <li>Koleno je otečeno, a tablete i kreme ne pomažu</li>
            <li>Zglob se ne savija u potpunosti ili "klikće" pri savijanju</li>
            <li>Nemogućnost potpune kontrole pri savijanju kolena</li>
        </ul>
        <div class="start_heal clearfix">
            <p>AKO JE PRISUTAN BAR JEDAN OD NAVEDENIH SIMPTOMA, POTREBNO JE ZAPOČETI OPORAVAK!</p>
            <a href="#unic_form" class="button-m">Poručite sada</a>
        </div>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <div class="pulse_desc"><div></div></div>
        <h2 class="title">BRZO REŠAVANJE <span>PROBLEMA SA KOLENOM</span></h2>
        <div class="leg">
            <img src="{{ asset('/') }}flexovalFiles/kneesupport/leg.png" alt="">
            <div class="pulse"><div></div></div>
        </div>
        <p class="subtitle">Flexoval steznik za koleno čvrsto fiksira zglob, ravnomerno raspoređuje opterećenje i štiti čašicu.</p>
        <ul class="benef2">
            <li>Ubrzava oporavak nakon uganuća i dislokacija</li>
            <li>Smanjuje bol kod artritisa</li>
            <li>Sprečava oticanje i upalu</li>
        </ul>
        <a href="#unic_form" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <h2 class="title">JEDINSTVENI DIZAJN ZA <span>MAKSIMALNU EFIKASNOST</span></h2>
        <div class="construction">
            <img src="{{ asset('/') }}flexovalFiles/kneesupport/construction.png" alt="">
            <img class="cons_tab" src="{{ asset('/') }}flexovalFiles/kneesupport/construction_tab.jpg" alt="">
            <ul>
                <li>
                    <span>1.</span>
                    <p>Specijalne izbočine masiraju koleno pri kretanju i smanjuju bol</p>
                </li>
                <li>
                    <span>2.</span>
                    <p>Bočne gume pružaju savršeno prijanjanje steznika uz koleno</p>
                </li>
                <li>
                    <span>3.</span>
                    <p>Anatomska viskoza čvrsto fiksira koleno i poboljšava cirkulaciju krvi</p>
                </li>
                <li>
                    <span>4.</span>
                    <p>Silikonski umetak u obliku prstena pruža zaštitu od povreda</p>
                </li>
                <li>
                    <span>5.</span>
                    <p>Stabilizator sprečava pomeranje čašice</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title">FLEXOVAL STEZNIK ZA KOLENO <span>UDOBNOST I FUNKCIONALNOST</span></h2>
        <ul class="benef3">
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/benef3_img1.jpg" alt="">
                <p>Ne trlja poplitealnu jamu prilikom savijanja kolena</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/benef3_img2.jpg" alt="">
                <p>Ivice su mekane i ne urezuju se u kožu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/benef3_img3.jpg" alt="">
                <p>Ne klizi prilikom kretanja</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/benef3_img4.jpg" alt="">
                <p>Propušta vazduh i sprečava znojenje</p>
            </li>
        </ul>
        <a href="#unic_form" class="button-m">Poručite sada</a>
    </div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title">EVO ŠTA KAŽU NEKI OD NAŠIH <span>12.000 KUPACA</span></h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/rev1.jpg" alt="">
                <div class="text">
                    <span>Veliki oslonac, moja kolena su bolje nego ikad!</span>
                    <p>Veoma udoban i dobro se uklapa, svakodnevno ga nosim na poslu. Pruža pristojnu zaštitu oko kolena bez uticaja na pokretljivost.
                        Sjajna stvar je što drugi ne primećuju da ovo nosim. Elegantan dizajn je najveća prednost!</p>
                </div>
                <div class="info clearfix">
                    <img src="{{ asset('/') }}flexovalFiles/kneesupport/ava1.jpg" alt="">
                    <p><span>Darija Popović</span> Zrenjanin</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/rev2.jpg" alt="">
                <div class="text">
                    <span>Osećam se kao da imam nova kolena!</span>
                    <p>Isprobao sam toliko različitih vrsta steznika otkad sam istrošio hrskavicu pre 10 godina. Ovi steznici za kolena su vrlo udobni i pružaju odličnu potporu.
                        Ranije sam kupovao jeftine steznike koji su bili beskorisni. Na kraju sam zaključio da su ovo najbolji steznici za kolena koje sam ikad kupio.</p>
                </div>
                <div class="info clearfix">
                    <img src="{{ asset('/') }}flexovalFiles/kneesupport/ava2.jpg" alt="">
                    <p><span>Makso Đukić</span> Požarevac</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/rev3.jpg" alt="">
                <div class="text">
                    <span>Mekan, siguran i udoban!</span>
                    <p>Već duže vreme patim od bolova u kolenu koje nisam znao kako da rešim. Sestra mi je poručila Flexoval steznik, prvo nisam verovao da će imati efekta a onda sam nakon nekoliko dana osetio promenu. Manje me je bolelo i nisam imao strah pri naglim pokretima da se ponovo ne povredim. Nosim ga 8 sati dnevno i koleno mi više ne otiče.</p>
                </div>
                <div class="info clearfix">
                    <img src="{{ asset('/') }}flexovalFiles/kneesupport/ava3.jpg" alt="">
                    <p><span>Kosta Davidović</span> Beograd</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sect8">
    <div class="wrapper">
        <h2 class="title">ODGOVORI NA PITANJA</h2>
        <img src="{{ asset('/') }}flexovalFiles/kneesupport/product.png" alt="" class="product">
        <div class="accordion">
            <div class="accordion_item active_block">
                <div class="title-accordion">Koliko snažno steznik fiksira zglob. Da li je udoban pri savijanju kolena?</div>
                <div class="info" style="display: block;">Flexoval steznik je srednjeg stepena fiksacije. Ne stvara neprijatan osećaj stezanja i dozvoljava nozi da se lagano savija.</div>
            </div>
            <div class="accordion_item">
                <div class="title-accordion">Da li je ovaj steznik efikasan samo kada se krećete?</div>
                <div class="info">Kompresiona tkanina poboljšava cirkulaciju krvi i smanjuje bol, bilo da ležite ili da hodate. Za brži oporavak preporučuje se kretanje, jer će zona čašice biti dodatno stimulisana.</div>
            </div>
            <div class="accordion_item">
                <div class="title-accordion">Da li se steznik vremenom rasteže?</div>
                <div class="info">Ne. Flexoval steznik se neće rastegnuti čak ni nakon 3 godine svakodnevne upotrebe. Stoji čvrsto na nozi i ne klizi.</div>
            </div>
            <div class="accordion_item">
                <div class="title-accordion">Da li je potrebno posebno održavanje steznika?</div>
                <div class="info">Ne, dovoljno je samo da ga operete sapunom i dobro isperete. Proizvod se može sušiti na bilo koji način.</div>
            </div>
        </div>
    </div>
</section>
<section class="sect9">
    <div class="wrapper">
        <h2 class="title">KAKO DO <span>FLEXOVAL</span> STEZNIKA ZA KOLENO?</h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/order1.png" alt="">
                <p class="number">01</p>
                <span>Poručite</span>
                <p>Ostavite podatke za dostavu na sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/order2.png" alt="">
                <p class="number">02</p>
                <span>Potvrda</span>
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/order3.png" alt="">
                <p class="number">03</p>
                <span>Slanje</span>
                <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexovalFiles/kneesupport/order4.png" alt="">
                <p class="number">04</p>
                <span>Plaćanje</span>
                <p>Paket plaćate kuriru po preuzimanju</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper clearfix">
        <h1 class="main_title">POŽURITE DA PORUČITE SA POPUSTOM</h1>
        <p class="main_subtitle">Najbolji steznik sa silikonskim umetkom preporučen od strane reumatologa</p>
        <div class="sale"><div>Akcija! <span>40%</span> popust</div></div>
        <div class="right">
            <div class="formbox">
                <div class="price clearfix">
                    <div class="old">
                        Stara cena:
                        <p><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD </small></p>
                    </div>
                    <div class="new">
                        Nova cena:
                        <p><span>{{ $prices[1]['amount'] }}</span><small>RSD </small></p>
                    </div>
                </div>
                <form class="m1-form" action="{{$orderRoute}}" method="post" >
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div id="unic_form"></div>
                    <input type="text" name="name" placeholder="Ime i prezime" required="">
                    <input type="tel" name="phone" placeholder="Telefon" required="">
                    <input type="text" name="shipping_address" placeholder="Adresa" required="">
                    <input type="text" name="shipping_city" placeholder="Grad" required="">
                    <label>Količina</label>
                    <select name="quantity" class="quantity" required>
                        @foreach($prices as $singlePrice)
                            <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                    @if($singlePrice['is_default']) selected @endif
                                    @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                    @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                            >
                                &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                            </option>
                        @endforeach
                    </select>
                    <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                    <button class="button-m" type="submit" >Poručite sada</button>
                </form>
            </div>
        </div>
    </div>
</section>
<style>
    .freeShippingDiv {
        color: #d31f07;
        text-align: center;
        margin-bottom: 0;
        display: none;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .quantity option {
        font-size: 1em;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $('option:selected', this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).closest('.m1-form').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.m1-form').find('.freeShippingDiv').slideUp();
        }
    })
</script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexovalFiles/kneesupport/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
