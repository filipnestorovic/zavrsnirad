<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="" >
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/koleno3/style_mb.css">
    <link rel=icon type="image/png" href="{{ asset('/') }}flexovalFiles/koleno3/0-1ec8318cb6c67b59fee79f014394a12e.png">
</head>
<body>
<div class="mobile">
    <div id="root">
        <div>
            <div class="Box-sc-1063fjo-0 Mobile___StyledBox-sc-1a7nboa-0 iFPEmP">
                @include('components.display_errors')
                <div class="alert alert-success" role="alert" style="">
                    <h3 class="alert-heading">SPECIJALNA BLACK FRIDAY PONUDA!</h3>
                </div>
                <section height="auto" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 eGHXZI">
                    <div width="320" class="Box-sc-1063fjo-0 OrderScreen___StyledContainer-sc-3z9c1a-0 bIPlcn Container__BoxMax-sc-1d5v2pc-0 dMAeUO">
                        <div class="Box-sc-1063fjo-0 drByVp">
                            <div class="Box-sc-1063fjo-0 drByVp">
                                <div font-family="gilroy" font-size="35px" font-weight="600" letter-spacing="1.6px" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Text-oy5r1a-0 jCbWlg Card-sc-16nnnkc-0 cjQdkt">
                                    STEZNIK ZA KOLENO
                                    <div font-size="18px" font-weight="300" letter-spacing="0.68px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 cBHsuP">
                                        {{--«FLEXOVAL»--}}
                                        <img src="{{ asset('/') }}flexovalFiles/shared_files/Flexoval_logo.png" class="elIMG ximg" width="170" height="">
                                    </div>
                                </div>
                                <div height="363px" font-size="18px" font-weight="600" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 OrderScreen___StyledFlex-sc-3z9c1a-1 hCojAQ Text-oy5r1a-0 iKtyOM">
                                    Oslobodite se ukočenih, umornih i bolnih kolena
                                </div>
                            </div>
                            <div class="Box-sc-1063fjo-0 fcWDWT">
                                <a>
                                    <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Flex-lw4abu-0 hBXkmQ Section-tj5oh1-0 iXxOFo">
                                        <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Card-sc-16nnnkc-0 exMjpH Section-tj5oh1-0 bdWzmQ">
                                            <div width="43" height="84" font-family="gilroy" color="#fff" font-weight="700" font-size="21px" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Text-oy5r1a-0 fPBDQR Flex-lw4abu-0 hmYHwO">
                                                <div font-size="8px" font-weight="400" letter-spacing="1px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 bLZRBM">
                                                    Popust
                                                </div>
                                                <div class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">
                                                    <span>40</span>
                                                    <span font-size="1em" class="Box-sc-1063fjo-0 Text-oy5r1a-0 aHtGv">%</span>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 chqlaC">
                                            <div class="Box-sc-1063fjo-0 drByVp">
                                                <div class="Box-sc-1063fjo-0 drByVp">
                                                    <div font-size="50" font-family="gilroy" color="#d31f07" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 cLlWrm">
                                                        <span class="price_land_s1">{{ $prices[2]['amount'] }}</span>
                                                        <span size="20" class="Currency__CurrencyWrapper-d7ax3o-0 jkThTP"> RSD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 jJRvU">
                                            <div font-size="10" font-family="gilroy" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kDmOby">
                                                Stara cena:
                                            </div>
                                            <div font-size="14" font-family="roboto" font-weight="700" color="#000000" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dsGBDi" style="text-decoration: line-through;">
                                                <span class="price_land_s2">{{ $prices[2]['originalPrice'] }}</span>
                                                <span size="10" class="Currency__CurrencyWrapper-d7ax3o-0 fuUtFg"> RSD</span>
                                            </div>
                                        </div>
                                    </section>
                                </a>
                            </div>
                            {{--<div class="Box-sc-1063fjo-0 kHPXnb">--}}
                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Box-sc-1063fjo-0 Flex-lw4abu-0 bTgGmD Relative-e3vdap-0 gyZwbu">--}}
                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 hOEIxB">--}}
                            {{--<div font-family="gilroy" color="#fff" class="Box-sc-1063fjo-0 Text-oy5r1a-0 cCxblX">--}}
                            {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 ikQccu">--}}
                            {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 bTYtQt">--}}
                            {{--<div font-size="14" font-weight="800" class="Box-sc-1063fjo-0 Text-oy5r1a-0 eyXTsY">--}}
                            {{--До конца акции осталось:--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<script src="../../megatimer.ru/get/cccd62375b303beccb7f763844baa47a.js"></script>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <section name="orderBlockTop" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 fKJsSG">
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 w-form Form___StyledSection-sc-1skpxzk-0 cZXZbG">
                                    <form class="form orderformcdn" method="post" action="{{$orderRoute}}">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <input type="hidden" name="bfgratis" value="1"/>
                                        <div font-family="gilroy" font-size="18" font-weight="800" class="Box-sc-1063fjo-0 Text-oy5r1a-0 ibLqWq">
                                            Podaci za dostavu
                                        </div>
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Ime i prezime" id="name-2" name="name" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="tel" placeholder="Broj telefona" id="phone" name="phone" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Adresa" id="address" name="shipping_address" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Grad" id="city" name="shipping_city" required="">
                                        @foreach($prices as $singlePrice)
                                            @if(($singlePrice['quantity'] === 2) || ($singlePrice['quantity'] === 4))
                                                <div style="margin-top: 10px; margin-left: 10px;">
                                                    <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="productLabel{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                                           @if($singlePrice['is_default']) checked @endif
                                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                                        @if($singlePrice['quantity'] === 2)
                                                            1 komad <span style="color:#00fa93">+ 1 GRATIS</span> ({{$singlePrice['amount']}} RSD)
                                                        @endif
                                                        @if($singlePrice['quantity'] === 4)
                                                            2 komada <span style="color:#00fa93">+ 2 GRATIS</span> ({{$singlePrice['amount']}} RSD)
                                                        @endif
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                        <button class="Button-sc-1u3615l-0 submit w-button Form___StyledButton-sc-1skpxzk-1 hCwHxj" type="submit" font-size="18" color="black" font-family="gilroy" height="63" font-weight="800">
                                            PORUČITE ODMAH
                                        </button>
                                    </form>
                                </section>
                            </section>
                        </div>
                        <div width="320" class="Box-sc-1063fjo-0 DeliveryInfo___StyledBox-o1hk6h-0 eDGfNY">
                            <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 fuByBr">
                                <img src="{{ asset('/') }}flexovalFiles/koleno3/truck-a1cf6c6b34b99f10aaa414bdfee44402.png" width="28" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 hURAvY">
                                <div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dgGlAO">
                                    Dostava na adresu u celoj Srbiji!
                                </div>
                            </div>
                            <div width="161" height="1" class="Box-sc-1063fjo-0 kPobpA"></div>
                            <div font-family="gilroy" font-size="14" width="220" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dLmprL">
                                Plaćanje pouzećem
                            </div>
                        </div>
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <div width="320" class="Box-sc-1063fjo-0 Autoplay___StyledContainer-jo0lhz-0 jzUQKQ Container__BoxMax-sc-1d5v2pc-0 hFPqcP">
                        <div font-size="20px" font-weight="600" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jgPUrM">
                            Predstavljamo vam broj 1 steznik na tržištu:
                        </div>
                        <div class="Box-sc-1063fjo-0 drByVp">
                            <section width="290" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Autoplay___StyledCard-jo0lhz-1 eEaOub Section-tj5oh1-0 jPquGL">
                                <video width="100%" height="100%" controls="controls" controls autoplay loop muted playsinline>
                                    <source src="{{ asset('/') }}flexovalFiles/koleno3/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                </video>
                                <div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 bNqQey">
                                    <div font-family="gilroy" font-size="15px" color="#393a45" font-weight="300" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dpyNLn">
                                        Masira tokom hodanja
                                    </div>
                                </div>
                            </section>
                            <section width="290" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Autoplay___StyledCard-jo0lhz-1 eEaOub Section-tj5oh1-0 jPquGL">
                                <video width="100%" height="100%" controls="controls" controls autoplay loop muted playsinline>
                                    <source src="{{ asset('/') }}flexovalFiles/koleno3/2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                </video>
                                <div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 bNqQey">
                                    <div font-family="gilroy" font-size="15px" color="#393a45" font-weight="300" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dpyNLn">
                                        Pruža efekat zagrevanja
                                    </div>
                                </div>
                            </section>
                            <section width="290" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Autoplay___StyledCard-jo0lhz-1 eEaOub Section-tj5oh1-0 jPquGL">
                                <video width="100%" height="100%" controls="controls" controls autoplay loop muted playsinline>
                                    <source src="{{ asset('/') }}flexovalFiles/koleno3/3.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                </video>
                                <div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 bNqQey">
                                    <div font-family="gilroy" font-size="15px" color="#393a45" font-weight="300" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dpyNLn">
                                        Smanjuje opterećenje zgloba
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <img src="{{ asset('/') }}flexovalFiles/koleno3/bg-393b81a931dde92717974c72a708c20e.png" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 DarRM Image-sc-1ruv6ez-0 bfRkSv" height="auto">
                    <div width="320" class="Box-sc-1063fjo-0 Benefits___StyledContainer-sc-1fmyp4m-0 gTXxon Container__BoxMax-sc-1d5v2pc-0 bkwREE">
                        <div font-weight="600" font-size="14px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dvXrqe">
                            <img src="{{ asset('/') }}flexovalFiles/koleno3/main-a182a910d12b85add498bf347d01af07.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">
                            <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 fAjNvW">
                                <div class="Box-sc-1063fjo-0 drByVp">
                                    <img src="{{ asset('/') }}flexovalFiles/koleno3/0-1ec8318cb6c67b59fee79f014394a12e.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gRrges">
                                    <div class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">
                                        Mekani neoprenski materijal
                                    </div>
                                </div>
                                <div class="Box-sc-1063fjo-0 drByVp">
                                    <img src="{{ asset('/') }}flexovalFiles/koleno3/1-2fe0137517a2dd46e2e26dd51ec3855f.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gRrges">
                                    <div class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">
                                        Podesive čičak trake
                                    </div>
                                </div>
                            </div>
                            <div class="Box-sc-1063fjo-0 ZrbPu">
                                <img src="{{ asset('/') }}flexovalFiles/koleno3/01-9c4ca9497e619bc85766441e29ea6033.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bzeqOJ">
                                <div class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">
                                    Univerzalna veličina
                                </div>
                            </div>
                            <div class="Box-sc-1063fjo-0 drByVp">
                                <a href="#form-1" style="text-decoration: none">
                                    <button font-size="18" color="#fff" font-family="gilroy" height="63" font-weight="800" class="Button-sc-1u3615l-0 OrderButton___StyledButton-sc-1kw3ml0-0 PIZhM">
                                        PORUČITE ODMAH
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <div width="320" class="Box-sc-1063fjo-0 VideoSection___StyledContainer-sc-8cxq57-0 rMqMT Container__BoxMax-sc-1d5v2pc-0 jmvIZc">
                        <div font-family="gilroy" font-size="17px" color="#fff" class="Box-sc-1063fjo-0 Text-oy5r1a-0 VideoSection___StyledText-sc-8cxq57-1 fFrGqm">
                            STEZNIK ZA KOLENO «FLEXOVAL»
                        </div>
                        <div font-size="22px" font-family="gilroy" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 dakODw">
                            SLOBODA I LAKOĆA SVAKOG POKRETA!
                        </div>
                        {{--<div class="Box-sc-1063fjo-0 fQHViT">--}}
                        {{--<div class="sc-bdVaJa jooVSH">--}}
                        {{--<div class="video">--}}
                        {{--<div class="pic"><img src="../../i.ytimg.com/vi/bfDLs_ockEc/sddefault.jpg" alt="">--}}
                        {{--<iframe width="100%" height="315" src="https://www.youtube.com/embed/bfDLs_ockEc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <div width="320" height="760px" class="Box-sc-1063fjo-0 BeforeAfter___StyledContainer-klrtms-0 gJGfXS Container__BoxMax-sc-1d5v2pc-0 fsUtir">
                        <div class="slick-slider slick-initialized" dir="ltr">
                            <div class="slick-list">
                                <div class="slick-track" style="width: 2880px; opacity: 1;">
                                    {{--<div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/7-226a6968f6836f05cb65c55794552deb.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Скованность движений--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/8-cbd5f9395884b25113f796c1d5759946.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Микромассажное действие снимает напряжение--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/1-8d2220db8f9f2e6af15998eb06bf6c23.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Старые травмы могут напомнить о себе--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/2-23d6a0b1212e260feaef40884bb16966.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Снижает нагрузку на сустав, чтобы прежние боли не возвращались--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/3-7525975a1fe2245f9869b5b8bdf28b09.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Травмированный сустав может деформироваться--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/4-114bf138fc735b3193cf596fc3b33c1b.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Обеспечивает трехмерную фиксацию и безопасность движений--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div data-index="2" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="true" style="outline: none; width: 320px;">
                                        <div>
                                            <div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">
                                                <div class="Box-sc-1063fjo-0 gWSdNr">
                                                    <img src="{{ asset('/') }}flexovalFiles/koleno3/5-284b391d4ef65e616a76b5d8419ead51.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">
                                                    <div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">
                                                        <div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">
                                                            OBIČNI STEZNICI ZA KOLENO
                                                        </div>
                                                        <div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">
                                                            Bol pri hodu i teško penjanje uz stepenice
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Box-sc-1063fjo-0 fxCkYy">
                                                    <img src="{{ asset('/') }}flexovalFiles/koleno3/6-b7af6388cd50c95657cc3df9e2df481e.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">
                                                    <div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">
                                                        <div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">
                                                            STEZNIK ZA KOLENO «FLEXOVAL»
                                                        </div>
                                                        <div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">
                                                            Noga je pokretna i savija se bez bolova
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/7-226a6968f6836f05cb65c55794552deb.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Скованность движений--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/8-cbd5f9395884b25113f796c1d5759946.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Микромассажное действие снимает напряжение--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/1-8d2220db8f9f2e6af15998eb06bf6c23.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Старые травмы могут напомнить о себе--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/2-23d6a0b1212e260feaef40884bb16966.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Снижает нагрузку на сустав, чтобы прежние боли не возвращались--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/3-7525975a1fe2245f9869b5b8bdf28b09.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Травмированный сустав может деформироваться--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/4-114bf138fc735b3193cf596fc3b33c1b.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Обеспечивает трехмерную фиксацию и безопасность движений--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/5-284b391d4ef65e616a76b5d8419ead51.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Больно ходить и невозможно подниматься по лестнице--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/6-b7af6388cd50c95657cc3df9e2df481e.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Сможете сгибать и разгибать ногу без боли--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 320px;">--}}
                                    {{--<div>--}}
                                    {{--<div tabindex="-1" class="Box-sc-1063fjo-0 BeforeAfter___StyledBox-klrtms-1 bKaNtM" style="width: 100%; display: inline-block;">--}}
                                    {{--<div class="Box-sc-1063fjo-0 gWSdNr">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/7-226a6968f6836f05cb65c55794552deb.jpg" width="310" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 keMVkk">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 dEyZHH">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold-klrtms-2 hUQoyp">--}}
                                    {{--OBIČNI STEZNICI ZA KOLENO--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Скованность движений--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="Box-sc-1063fjo-0 fxCkYy">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/8-cbd5f9395884b25113f796c1d5759946.jpg" width="310" height="184px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bEzqwZ">--}}
                                    {{--<div color="black" height="127" width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 BeforeAfter___StyledFlex-klrtms-3 bejade">--}}
                                    {{--<div font-family="gilroy" font-size="14" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 BeforeAfter___StyledTextBold2-klrtms-4 kYawPJ">--}}
                                    {{--STEZNIK ZA KOLENO «FLEXOVAL»--}}
                                    {{--</div>--}}
                                    {{--<div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kpQvTO">--}}
                                    {{--Микромассажное действие снимает напряжение--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <img src="{{ asset('/') }}flexovalFiles/koleno3/decor_right-45bd88e181cd2a1a35b71eafb344909e.png" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 cLtUfX Image-sc-1ruv6ez-0 bfRkSv" height="auto">
                    <div width="320" class="Box-sc-1063fjo-0 Container__BoxMax-sc-1d5v2pc-0 kqHJmZ">
                        <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 dcyFSe">
                            <div font-family="gilroy" font-size="20" font-weight="800" color="black" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kAhmQl">
                                KARAKTERISTIKE
                            </div>
                            <div class="Box-sc-1063fjo-0 cRjIWu">
                                <div class="Box-sc-1063fjo-0 drByVp">
                                    <div font-weight="300" font-size="14" color="#000" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jsLgHV">
                                        <span font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 belVXy"></span>
                                        <span class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">Održava kolena toplim, pruža laku pokretljivost zglobova i sprečava povrede.</span>
                                    </div>
                                    <div font-weight="300" font-size="14" color="#000"
                                         class="Box-sc-1063fjo-0 Text-oy5r1a-0 jsLgHV">
                                        <span font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 belVXy"></span>
                                        <span class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">Najsavremenija tehnologija stabilizacije omogućava puni opseg pokreta bez uvijanja ili istezanja.</span></div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('/') }}flexovalFiles/koleno3/pic-3d75146951940c1ecf4af81f84d0b4a8.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 ibSwJ">
                        <div font-size="20" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 jbmokB">
                            NAČIN UPOTREBE:
                        </div>
                        <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 czdZQT">
                            <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 eBVlMS">
                                <img src="{{ asset('/') }}flexovalFiles/koleno3/1-ffaef16ed8d43d569feaac275584b680.jpg" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">
                                <div font-size="14px" width="250px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 erVYlI">
                                    1. Stavite steznik za koleno na desnu ili levu nogu
                                </div>
                            </div>
                            <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 eBVlMS">
                                <img src="{{ asset('/') }}flexovalFiles/koleno3/2-a352686e8891e8c6d46b7121511cf814.jpg" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">
                                <div font-size="14px" width="250px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 erVYlI">
                                    2. Pričvrstite elastične trake i zalepite na čičak
                                </div>
                            </div>
                            {{--<div height="280px" class="Box-sc-1063fjo-0 Flex-lw4abu-0 jTutEF">--}}
                            {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/mark-7b7abe3861fd1ff156e66706f0f62fa6.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 kaXtFV">--}}
                            {{--<div width="220px" class="Box-sc-1063fjo-0 dtgCvM">--}}
                            {{--<div font-size="20px" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 khUyLd">--}}
                            {{--Осторожно:--}}
                            {{--</div>--}}
                            {{--<div font-size="20px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kNHKAL">--}}
                            {{--наколенник не должен пережимать ногу или сползать с ноги--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="Box-sc-1063fjo-0 ifzqnV">
                            <a href="#form-1" style="text-decoration: none">
                                <button font-size="18" color="#fff" font-family="gilroy" height="63" font-weight="800" class="Button-sc-1u3615l-0 OrderButton___StyledButton-sc-1kw3ml0-0 PIZhM">
                                    PORUČITE ODMAH
                                </button>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 gdrpPM">
                    <div width="320px" class="Box-sc-1063fjo-0 Container__BoxMax-sc-1d5v2pc-0 dyvXRQ">
                        <div class="Box-sc-1063fjo-0 drByVp">
                            <div font-family="gilroy" font-size="20px" font-weight="800" class="Box-sc-1063fjo-0 Text-oy5r1a-0 Comments___StyledText-sc-1piyd6n-2 kMqotx">
                                Šta kažu neki od kupaca o našem proizvodu:
                            </div>
                            {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 gTADAz">--}}
                            {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#444950"--}}
                            {{--class="Box-sc-1063fjo-0 Text-oy5r1a-0 mqEPO">Самые актуальные--}}
                            {{--</div>--}}
                            {{--<div class="Comments__Triangle-sc-1piyd6n-0 hgYkbD"></div>--}}
                            {{--</div>--}}
                            <div font-family="tahoma" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fxQFKu">
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 cmPUMP">
                                    <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cEJE">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/0-470e7fb515c348224cf964638c1954f0.png" alt="" width="30px" height="30px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gKRAFt">
                                        <div width="255px" class="Box-sc-1063fjo-0 Comments___StyledBox-sc-1piyd6n-3 kyWLHa">
                                            <span font-size="12px" font-weight="700" color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hoUbbW">
                                            </span>
                                            <span font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hHWbes">
                                                Kolena su me bolela kada bih išla niz i uz stepenice. Sada sam kupila ovaj steznik za kolena i osećam se mnogo bolje.
                                                Izgleda da ipak moja kolena imaju snage da izdrže svakodnevne aktivnosti. Odličan proizvod!
                                            </span>
                                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 jCUBNt">--}}
                                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 Comments___StyledFlex-sc-1piyd6n-4 bFrsoI">--}}
                                            {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/smiles0-9ac31c9f415e715cae7e281127e81a9d.png" alt="" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">--}}
                                            {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#898989" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jYWUet">--}}
                                            {{--12--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    {{--<div width="225px" font-family="tahoma" font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 icFXhg Text-oy5r1a-0 gzSmDT">--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Нравится</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Ответить</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#444950" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fnheXH">Сообщение 1 дн.</div>--}}
                                    {{--</div>--}}
                                </section>
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 iCnxRm">
                                    <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cEJE">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/1-dc04cc51fd6cf0114e0f703553577bb6.png" alt="" width="30px" height="30px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gKRAFt">
                                        <div width="255px" class="Box-sc-1063fjo-0 Comments___StyledBox-sc-1piyd6n-3 kyWLHa">
                                            <span font-size="12px" font-weight="700" color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hoUbbW">

                                            </span>
                                            <span font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hHWbes">
                                                Isprobao sam toliko različitih vrsta steznika otkad sam istrošio hrskavicu pre 10 godina. Ovi steznici za kolena su vrlo udobni i pružaju odličnu potporu.
                                                Ranije sam kupovao jeftine steznike koji su bili beskorisni. Na kraju sam zaključio da su ovo najbolji steznici za kolena koje sam ikad kupio.
                                            </span>
                                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 jCUBNt">--}}
                                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 Comments___StyledFlex-sc-1piyd6n-4 iQnHKr">--}}
                                            {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/smiles0-9ac31c9f415e715cae7e281127e81a9d.png" alt="" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">--}}
                                            {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#898989" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jYWUet">--}}
                                            {{--12--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    {{--<div width="225px" font-family="tahoma" font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 icFXhg Text-oy5r1a-0 gzSmDT">--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Нравится</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Ответить</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#444950" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fnheXH">Сообщение 1 дн.</div>--}}
                                    {{--</div>--}}
                                </section>
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 cmPUMP">
                                    <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cEJE">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/2-6c8b11bdce383ae59dbb285830ba09dd.png" alt="" width="30px" height="30px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gKRAFt">
                                        <div width="255px" class="Box-sc-1063fjo-0 Comments___StyledBox-sc-1piyd6n-3 kyWLHa">
                                            <span font-size="12px" font-weight="700" color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hoUbbW">

                                            </span>
                                            <span font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hHWbes">
                                                Veoma udoban i dobro se uklapa, svakodnevno ga nosim na poslu. Pruža pristojnu zaštitu oko kolena bez uticaja na pokretljivost.
                                                Sjajna stvar je što drugi ne primećuju da ovo nosim. Elegantan dizajn je najveća prednost!
                                            </span>
                                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 jCUBNt">--}}
                                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 Comments___StyledFlex-sc-1piyd6n-4 iQnHKr">--}}
                                            {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/smiles2-1af84911dbb4d6a79cdf99445748bf5d.png" alt="" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">--}}
                                            {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#898989" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jYWUet">--}}
                                            {{--7--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    {{--<div width="225px" font-family="tahoma" font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 icFXhg Text-oy5r1a-0 gzSmDT">--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Нравится</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Ответить</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#444950" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fnheXH">Сообщение 2 дн.</div>--}}
                                    {{--</div>--}}
                                </section>
                                {{--<section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 cmPUMP">--}}
                                {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cEJE">--}}
                                {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/3-cfc39ba8cfa25375de3ae692318e6881.png" alt="" width="30px" height="30px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gKRAFt">--}}
                                {{--<div width="255px" class="Box-sc-1063fjo-0 Comments___StyledBox-sc-1piyd6n-3 kyWLHa">--}}
                                {{--<span font-size="12px" font-weight="700" color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hoUbbW">--}}
                                {{--Мария Полежаева--}}
                                {{--</span>--}}
                                {{--<span font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hHWbes">--}}
                                {{--Обычно я хожу очень медленно и мало гуляю, потому что после любой нагрузки у меня болят колени. Поэтому я приобрела STEZNIK ZA KOLENO «FLEXOVAL» и теперь ходить гораздо проще, нагрузка снижена и ничего не болит.--}}
                                {{--</span>--}}
                                {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 jCUBNt">--}}
                                {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 Comments___StyledFlex-sc-1piyd6n-4 iQnHKr">--}}
                                {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/smiles3-401bad7fd315f042aa05a813edbcfb07.png" alt="" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">--}}
                                {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#898989" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jYWUet">--}}
                                {{--21--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div width="225px" font-family="tahoma" font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 icFXhg Text-oy5r1a-0 gzSmDT">--}}
                                {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Нравится</div>--}}
                                {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Ответить</div>--}}
                                {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                {{--<div color="#444950" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fnheXH">Сообщение 3 дн.</div>--}}
                                {{--</div>--}}
                                {{--</section>--}}
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 cmPUMP">
                                    <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cEJE">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/4-ba58068e1040e377d480b80cdb16d3bc.png" alt="" width="30px" height="30px" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 gKRAFt">
                                        <div width="255px" class="Box-sc-1063fjo-0 Comments___StyledBox-sc-1piyd6n-3 kyWLHa">
                                            <span font-size="12px" font-weight="700" color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hoUbbW">

                                            </span>
                                            <span font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Text-oy5r1a-0 hHWbes">
                                                Moji roditelji pate od jakih bolova u kolenima. Prema njihovim rečima, ovaj steznik za kolena im pruža podršku i udobnost koji su potrebni kako bi se kretali bez poteškoća.
                                                Drago mi je što sam pronašla ovaj steznik i toplo ga preporučujem svima koji imaju slične probleme.
                                            </span>
                                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Absolute-sc-2057zu-0 jCUBNt">--}}
                                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 Comments___StyledFlex-sc-1piyd6n-4 iQnHKr">--}}
                                            {{--<img src="{{ asset('/') }}flexovalFiles/koleno3/smiles4-98f68c7f94fcf8ac167377f079864091.png" alt="" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">--}}
                                            {{--<div font-family="tahoma" font-size="12px" font-weight="400" color="#898989" class="Box-sc-1063fjo-0 Text-oy5r1a-0 jYWUet">--}}
                                            {{--9--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    {{--<div width="225px" font-family="tahoma" font-size="12px" font-weight="400" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Flex-lw4abu-0 icFXhg Text-oy5r1a-0 gzSmDT">--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Нравится</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#385898" class="Box-sc-1063fjo-0 Text-oy5r1a-0 gVrJsk">Ответить</div>--}}
                                    {{--<div class="Comments__Circle-sc-1piyd6n-1 ixEIuR"></div>--}}
                                    {{--<div color="#444950" class="Box-sc-1063fjo-0 Text-oy5r1a-0 fnheXH">Сообщение 4 дн.</div>--}}
                                    {{--</div>--}}
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section height="1210px" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 iGFmeD">
                    <div width="320" class="Box-sc-1063fjo-0 OrderScreen___StyledContainer-sc-3z9c1a-0 bIPlcn Container__BoxMax-sc-1d5v2pc-0 dMAeUO">
                        <div class="Box-sc-1063fjo-0 drByVp">
                            <div class="Box-sc-1063fjo-0 jsjIKM">
                                <div font-size="22px" font-weight="600" font-family="gilroy" class="Box-sc-1063fjo-0 Text-oy5r1a-0 VMcIR">
                                    Steznik za koleno
                                    <div font-weight="300" class="Box-sc-1063fjo-0 Text-oy5r1a-0 klWLkV">
                                        {{--«FLEXOVAL»--}}
                                        <img src="{{ asset('/') }}flexovalFiles/shared_files/Flexoval_logo.png" class="elIMG ximg" width="170" height="">
                                    </div>
                                </div>
                                <div font-family="gilroy" font-size="15px" font-weight="600" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Text-oy5r1a-0 feGeRz Card-sc-16nnnkc-0 iNjJcz">
                                    Oslobodite se ukočenih, umornih i bolnih kolena
                                </div>
                                <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 cSefPr">
                                    <div class="Box-sc-1063fjo-0 drByVp">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/0-74c4ead8200ff19b9c253e3792b229b0.jpg" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 OrderScreen___StyledImage-sc-3z9c1a-2 gekNSZ">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/1-bee776c1abf972f6ef5e9e1ee9942d6d.jpg" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 OrderScreen___StyledImage-sc-3z9c1a-2 gekNSZ">
                                        <img src="{{ asset('/') }}flexovalFiles/koleno3/2-1b6f8f6eb40ce08d50a669317ee4b7fa.jpg" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 OrderScreen___StyledImage-sc-3z9c1a-2 gekNSZ">
                                    </div>
                                    <img src="{{ asset('/') }}flexovalFiles/koleno3/main-3abe8ee03aef9926147ae6357e5d5996.png" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 bfRkSv">
                                </div>
                            </div>
                            <div class="Box-sc-1063fjo-0 fcWDWT">
                                <a>
                                    <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Flex-lw4abu-0 hBXkmQ Section-tj5oh1-0 iXxOFo">
                                        <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Box-sc-1063fjo-0 Card-sc-16nnnkc-0 exMjpH Section-tj5oh1-0 bdWzmQ">
                                            <div width="43" height="84" font-family="gilroy" color="#fff" font-weight="700" font-size="21px" class="Box-sc-1063fjo-0 Box-sc-1063fjo-0 Text-oy5r1a-0 fPBDQR Flex-lw4abu-0 hmYHwO">
                                                <div font-size="8px" font-weight="400" letter-spacing="1px" class="Box-sc-1063fjo-0 Text-oy5r1a-0 bLZRBM">
                                                    Popust
                                                </div>
                                                <div class="Box-sc-1063fjo-0 Text-oy5r1a-0 cZmRIV">
                                                    <span>40</span>
                                                    <span font-size="1em" class="Box-sc-1063fjo-0 Text-oy5r1a-0 aHtGv">%</span>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 chqlaC">
                                            <div class="Box-sc-1063fjo-0 drByVp">
                                                <div class="Box-sc-1063fjo-0 drByVp">
                                                    <div font-size="50" font-family="gilroy" color="#d31f07" font-weight="bold" class="Box-sc-1063fjo-0 Text-oy5r1a-0 TextBold-sc-10ffoo0-0 cLlWrm">
                                                        <span class="price_land_s1">{{ $prices[2]['amount'] }}</span>
                                                        <span size="20" class="Currency__CurrencyWrapper-d7ax3o-0 jkThTP"> RSD </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 jJRvU">
                                            <div font-size="10" font-family="gilroy" class="Box-sc-1063fjo-0 Text-oy5r1a-0 kDmOby">
                                                Stara cena:
                                            </div>
                                            <div font-size="14" font-family="roboto" font-weight="700" color="#000000" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dsGBDi" style="text-decoration: line-through;">
                                                <span class="price_land_s2">{{ $prices[2]['originalPrice'] }} </span>
                                                <span size="10" class="Currency__CurrencyWrapper-d7ax3o-0 fuUtFg"> RSD </span>
                                            </div>
                                        </div>
                                    </section>
                                </a>
                            </div>
                            {{--<div class="Box-sc-1063fjo-0 kHPXnb">--}}
                            {{--<div class="Box-sc-1063fjo-0 Position-t5gbtq-0 Box-sc-1063fjo-0 Flex-lw4abu-0 bTgGmD Relative-e3vdap-0 gyZwbu">--}}
                            {{--<div width="100%" class="Box-sc-1063fjo-0 Flex-lw4abu-0 hOEIxB">--}}
                            {{--<div font-family="gilroy" color="#fff" class="Box-sc-1063fjo-0 Text-oy5r1a-0 cCxblX">--}}
                            {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 ikQccu">--}}
                            {{--<div class="Box-sc-1063fjo-0 Flex-lw4abu-0 bTYtQt">--}}
                            {{--<div font-size="14" font-weight="800" class="Box-sc-1063fjo-0 Text-oy5r1a-0 eyXTsY">--}}
                            {{--До конца акции осталось:--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<script src="../../megatimer.ru/get/cccd62375b303beccb7f763844baa47a.js"></script>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <section name="orderBlockBottom" class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 fKJsSG">
                                <section class="Box-sc-1063fjo-0 Card-sc-16nnnkc-0 Section-tj5oh1-0 w-form Form___StyledSection-sc-1skpxzk-0 cZXZbG">
                                    <form class="form orderformcdn" method="post" id="form-1" action="{{$orderRoute}}">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <input type="hidden" name="bfgratis" value="1"/>
                                        <div font-family="gilroy" font-size="18" font-weight="800" class="Box-sc-1063fjo-0 Text-oy5r1a-0 ibLqWq">
                                            Podaci za dostavu
                                        </div>
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Ime i prezime" id="name-2" name="name" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="tel" placeholder="Broj telefona" id="phone" name="phone" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Adresa" id="address" name="shipping_address" required="">
                                        <input class="input w-input styled__Input-sc-91uzmk-0 dTjgh" type="text" placeholder="Grad" id="city" name="shipping_city" required="">
                                        @foreach($prices as $singlePrice)
                                            @if(($singlePrice['quantity'] === 2) || ($singlePrice['quantity'] === 4))
                                            <div style="margin-top: 10px; margin-left: 10px;">
                                                <input type="radio" name="quantity" value="{{ $singlePrice['quantity'] }}" id="product1Label1{{ $singlePrice['quantity'] }}"
                                                       @if($singlePrice['is_default']) checked @endif
                                                       @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                                <label for="product1Label1{{$singlePrice['quantity']}}">
                                                    @if($singlePrice['quantity'] === 2)
                                                        1 komad <span style="color:#00fa93">+ 1 GRATIS</span> ({{$singlePrice['amount']}} RSD)
                                                    @endif
                                                    @if($singlePrice['quantity'] === 4)
                                                        2 komada <span style="color:#00fa93">+ 2 GRATIS</span> ({{$singlePrice['amount']}} RSD)
                                                    @endif
                                                </label>
                                            </div>
                                            @endif
                                        @endforeach
                                        <button class="Button-sc-1u3615l-0 submit w-button Form___StyledButton-sc-1skpxzk-1 hCwHxj" type="submit" font-size="18" color="black" font-family="gilroy" height="63" font-weight="800">
                                            PORUČITE ODMAH
                                        </button>
                                    </form>
                                </section>
                            </section>
                        </div>
                        <div width="320" class="Box-sc-1063fjo-0 DeliveryInfo___StyledBox-o1hk6h-0 eDGfNY">
                            <div class="Box-sc-1063fjo-0 Flex-lw4abu-0 fuByBr">
                                <img src="{{ asset('/') }}flexovalFiles/koleno3/truck-a1cf6c6b34b99f10aaa414bdfee44402.png" width="28" height="auto" class="Box-sc-1063fjo-0 Image-sc-1ruv6ez-0 hURAvY">
                                <div font-family="gilroy" font-size="14" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dgGlAO">
                                    Dostava na adresu u celoj Srbiji!
                                </div>
                            </div>
                            <div width="161" height="1" class="Box-sc-1063fjo-0 kPobpA"></div>
                            <div font-family="gilroy" font-size="14" width="220" class="Box-sc-1063fjo-0 Text-oy5r1a-0 dLmprL">
                                Plaćanje pouzećem
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>