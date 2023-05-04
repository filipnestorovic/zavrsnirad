<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/silencenight/favicon.ico" />
    <style>
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.ttf") format("truetype");
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
        }
        .freeShippingHolder {
            color: #ff7f2b;
            font-size: 23px;
            font-weight: 700;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/silencenight/style.css" />
</head>
<body>
@include('components.display_errors')
<!-- ШАПКА 1 -->
<!-- after_qbici -->
<section class="topul">
    <div class="wrap">
        <ul class="toplist">
            <li>
                <p>Ekološki prihvatljiv materijal</p>
            </li>
            <li>
                <p>100% garancije rezultata</p>
            </li>
            <li>
                <p>6789 je već poručilo</p>
            </li>
        </ul>
    </div>
</section>
<section class="header-one">
    <div class="wrap">
        <h1>ANTI - SNORING</h1>
        <h2>PRAVI LEK ZA HRKANJE!</h2>
        <div class="tovar-sale-cont">
            <div class="tovar-sale">
                <p>40%</p> popusta
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/silencenight/header1_tovar.jpg" alt="" />
        </div>
        <ul class="header-one_plus">
            <li>
                <p>100% ELIMINIŠE HRKANJE</p>
            </li>
            <li>
                <p>NE OMETA SAN</p>
            </li>
            <li>
                <p>FILTRIRA VAZDUH OD ŠTETNIH GASOVA I PRAŠINE</p>
            </li>
        </ul>
        <div class="price-button">
{{--            @foreach($prices as $q => $singlePrice)--}}
{{--                <div class="price clearfix price_holder" data-quantity="{{$q}}">--}}
{{--                    <div class="old-cost">--}}
{{--                        <span>Stara cena za {{$q}}:</span>--}}
{{--                        <p><span>{{ $singlePrice['originalPrice'] }}</span><small> {{ $singlePrice['currency'] }}</small></p>--}}
{{--                    </div>--}}
{{--                    <div class="new-cost">--}}
{{--                        <span>Nova cena za {{$q}}:</span>--}}
{{--                        <p>{{ $singlePrice['amount'] }}<small> {{ $singlePrice['currency'] }}</small></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena za 1:</span>
                    <p><span>{{ $prices[1]['originalPrice'] }}</span><small> {{ $prices[1]['currency'] }}</small></p>
                </div>
                <div class="new-cost">
                    <span>Nova cena za 1:</span>
                    <p>{{ $prices[1]['amount'] }}<small> {{ $prices[1]['currency'] }}</small></p>
                </div>
            </div>
            <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
        </div>
    </div>
</section>
<section class="plus">
    <div class="wrap nopad">
        <ul class="list col4">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl1.png" alt="" />
                <p>Efikasno smanjuje hrkanje i poboljšava kvalitet sna</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl2.png" alt="" />
                <p>Napravljen od ekološki prihvatljivog materijala, ne šteti zdravlju</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl3.png" alt="" />
                <p>Obezbeđuje priliv čistog vazduha, filtrira vazduh od štetnih gasova i prašine</p>
            </li>
            <!-- <li><img src="img/pl4.png" alt=""><p>Расширяет дыхательных каналы, повышает содержание кислорода в крови</p></li> -->
        </ul>
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 1-2 -->
<section class="after">
    <div class="wrap nopad">
        <h2 class="title">POSLEDICE HRKANJA</h2>
        <!--ПРЕИМУЩЕСТВА 2-->
        <ul class="plus2 list col3 round border">
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po1.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>GOJAZNOST</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po2.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>HIPERTENZIJA</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po3.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>GLAVABOLJA</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po4.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>KARDIOVASKULARNI PROBLEMI</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po5.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>APNEJA</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po6.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>IMPOTENCIJA</h3>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--ХАРАКТЕРИСТИКИ 2-->
<section>
    <div class="wrap nopad">
        <h2 class="h2 title">KAKO SE REŠITI HRKANJA?</h2>
        <p class="subtitle">Hrkanje je problem koji može biti štetan po zdravlje i opasan po život.
            Hrkanje može dovesti do apneje u snu i poremetiti disanje, odnosno dovesti do potpunog prestanka.
            Osim toga, hrkanje otežava san vašim najmilijima.</p>
        <div class="char2 two-col">
            <div class="two-col_left border2">
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/photo.jpg" alt="" />
            </div>
            <div class="two-col_right">
                <p>Vreme je da ovi problemi prestanu <b>jednom zauvek!</b></p>
                <p>Inovativni uređaj protiv hrkanja pomaže u rešavanju problema za manje od mesec dana i vraća slobodno disanje.</p>
                <p>Mekani silikon od kog je napravljen <b>ne izaziva alergijske reakcije</b> i praktično se ne oseća na koži. Zbog toga
                    može lako zaspati sa ovim uređajem.</p>
                <ul class="char2_ul">
                    <li>
                        <p>
                            <b>Veličina:</b> 55x30x17mm
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Težina:</b> 20g
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Materijal:</b> ABS, silikon
                        </p>
                    </li>
                </ul>
                <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
            </div>
        </div>
    </div>
</section>
<!--ВИДЕО-->
<section class="video">
    <div class="wrap">
        <h2 class="title">ZAUVEK ĆEŠ ZABORAVITI NA HRKANJE!</h2>
        <div class="video-container shadow">
            <div class="youtube" id="WMS41j1kB2k">
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/video-bg.jpg" alt=""/>
            </div>
        </div>
    </div>
</section>

<section class="legend">
    <div class="wrap">
        <h2 class="title">ANTI SNORING UREĐAJ PROTIV HRKANJA I PREČISTAČ VAZDUHA 2 U 1</h2>
{{--        <h3>LAKO SE STAVLJA I SKIDA I NE IZAZIVA NEPRIJATNOSTI TOKOM SPAVANJA</h3>--}}
        <div class="legend-img1"></div>
        <ul class="legend-list hidden">
            <li>Mekani silikonski materijal</li>
            <li>Moderan dizajn</li>
            <li>Kvalitetna ABS plastika</li>
            <li>Filteri za čišćenje vazduha</li>
        </ul>
    </div>
</section>
<!--
<section class="expert"><div class="wrap"><h2 class="title">Мнение эксперта</h2><div class="expert-cont"><p>Известно, что каждый пятый человек ведет борьбу с храпом во сне. Как правило, его могут замечать близкие. Храп не только мешает спать вашим родным, он также пагубно влияет на ваше здоровье, уже не говоря о смертельном исходе. Но хирургическое вмешательство является слишком радикальным шагом устранения храпа. Вам поможет инновационная клипса-антихрап Snorest!</p><p>По результатам клинических исследований я могу утверждать, что клипса-антихрап Snorest является самым эффективным средством в борьбе с храпом. В 93% случаев клипса полностью избавила участников исследования от храпа за короткий срок.</p><div class="expert-meta"><b>Юрий Лавров,</b> врач-отоларинголог (стаж работы 28 лет)</div></div></div></section>
-->
<section>
    <div class="wrap nopad">
        <h2 class="title">UTISCI NAŠIH ZADOVOLJNIH KUPACA</h2>
        <p class="subtitle">Svaki dan dobijamo stotine zahvalnih recenzija. Nadamo se da ćete biti zadovoljni porudžbinom i da ćete nam se ponovo vratiti!</p>
        <div class="reviews-5">
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev1.jpg" alt="" />
                    <h3>Elena Marković</h3>
                    <p class="just">Odlučio sam da kupim ovaj uređaj za svog tatu. Već dugi niz godina pati od hrkanja, što ometa san moje majke.
                        Probali smo neku vrstu spreja za hrkanje, ali nije pomoglo. Tata ga koristi već nedelju  dana, a mama kaže da otac normalno spava.</p>
                </div>
            </div>
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev2.jpg" alt="" />
                    <h3>Gavrilo Aleksić</h3>
                    <p class="just">Jako hrčem u snu. Kod kuće su svi već navikli, ali kada negde odem je jako nezgodno.
                        Kupio sam ovaj proizvod i zaboravio na hrkanje. Veoma je prijatan, u početku sam mislio da će ispasti, ali je jako stabilan i prilično sam se navikao.
                        Dolazi sa torbicom za nošenje i veoma je zgodan uređaj.</p>
                </div>
            </div>
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev3.jpg" alt="" />
                    <h3>Željko Samardžija</h3>
                    <p class="just">Dugi niz godina sam patio od hrkanja, a moja supruga je počela da spava u drugoj sobi.
                        Otišao sam kod doktora i on je je preporučio ovaj proizvod. Kupio sam ga, moja žena je počela ponovo da spava pored mene, zato ga svima preporučujem. :)</p>
                </div>
            </div>
        </div>
        <!--end reviews-5  -->
    </div>
</section>
<section class="dark-bg">
    <div class="wrap nopad">
        <h2 class="title">DOSTAVA I PLAĆANJE</h2>
        <!--ДОСТАВКА 2-->
        <ul class="delivery-2 list col3">
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-1.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>PORUČIVANJE</h3>
                    <p>Ostavite svoje podatke na našoj web stranici</p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-2.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>POTVRDA</h3>
                    <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-3.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>SLANJE</h3>
                    <p>Pošiljku šaljemo brzom poštom u roku od 1-2 dana. Plaćate kuriru prilikom preuzimanja.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="footer-one">
    <div class="wrap">
        <h1>ANTI - SNORING</h1>
        <h2>PRAVI LEK ZA HRKANJE!</h2>
        <div class="tovar-sale-cont">
            <div class="tovar-sale">
                <p>40%</p> popusta
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/silencenight/header1_tovar.jpg" alt="" />
        </div>
        <div class="formbox shadow">
            @foreach($prices as $q => $singlePrice)
                <div class="price clearfix price_holder" data-quantity="{{$q}}">
                    <div class="old-cost">
                        <span>Stara cena za {{$q}}:</span>
                        <p><span>{{ $singlePrice['originalPrice'] }}</span><small> {{ $singlePrice['currency'] }}</small></p>
                    </div>
                    <div class="new-cost">
                        <span>Nova cena za {{$q}}:</span>
                        <p>{{ $singlePrice['amount'] }}<small> {{ $singlePrice['currency'] }}</small></p>
                    </div>
                </div>
            @endforeach
            <div class="price clearfix freeShippingHolder">
                <p>+ BESPLATNA DOSTAVA</p>
            </div>
            <form id="order_form" class="m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required/>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required/>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required/>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required/>
                <label for="quantity">Izaberite količinu</label>
                <select name="quantity" id="quantity" class="field quantity" required>
                    @foreach($prices as $singlePrice)
                        <option value="{{ $singlePrice['quantity'] }}"
                                data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                                @if($singlePrice['is_default']) selected @endif
                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                        >
                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}}
                            ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                        </option>
                    @endforeach
                </select>
                <button class="button-m">PORUČITE ODMAH</button>
            </form>
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
        })
        $('.char3, .reviews-4, .reviews-5').slick({
            dots: false,
            infinite: true,
            speed: 200,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 976,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 659,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                }
            ]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#order_form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            $prices.hide();
            $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

            selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();

            $quantitySelect.on('change', function() {
                selectedQuantity = $(this).val();
                selectedOption = $(this).find(':selected');

                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

                selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();
            });
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
