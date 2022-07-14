<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/solarledlamp/favicon.ico" type="image/x-icon">
    <link href="{{ asset('/') }}shared_files/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/solarledlamp/slick.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/solarledlamp/app.css" rel="stylesheet">
    <style type="text/css">
        * {
            font-family: Zawgyi-One;
        }
        @font-face{
            font-family: 'Zawgyi-One';
            src: url('{{ asset('/') }}fonts/zawgyi.eot');
            src: url('{{ asset('/') }}fonts/zawgyi.eot@iefix') format('eot'),
            url('{{ asset('/') }}fonts/zawgyi.woff') format('woff'),
            url('{{ asset('/') }}fonts/zawgyi.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/zawgyi.svg#webfont') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body class="zawgyi">
<section class="sec-1">
    <div class="row-2">
        <div class="pageTitle">
            <br>
            <p>ECOLIGHT ရဲ႕ ေ႐ြ႕လ်ားမႈ Sensor နဲ႔အတူ အလြန္ေတာက္ပထိန္လင္းေသာ မီးလုံးမ်ား </p>
            <h2>အလင္းေရာင္ကို တိုးျမင့္လိုက္ပါ</h2>
            <p class="sub">ေမွာင္ေနတဲ့ ဘယ္ေနရာမွာမဆိုပါ </p>
            <br>
        </div>
    </div>
    <div class="row-3">
        <div class="mainProduct">
            <img class="label" src="{{ asset('/') }}dailysharkFiles/solarledlamp/hit.svg"> <img
                src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-product.png">
            <div class="daybuy"><span>ယေန႔အတြက္ </span> စုစုေပါင္းဝယ္ယူသူ ၉၁ဦး</div>
        </div>
        <div class="mainForm">
            <div class="formWrap">
                <div class="form-box">
                    <div class="price">
                        <div class="price-title"><span>50%</span> အထူးေလွ်ာ့ေစ်း</div>
                        <div class="price-box">
                            <p class="price-old">
                              <span class="al-cost-promo">
                                 {{ $prices[1]['originalPrice'] }}
                                 {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                            <p class="price-new al-cost">
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="#" class="al-form">
                        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="အမည္"
                                                       required="" value=""></div>
                        <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                       placeholder="ဖုန္းနံပါတ္" required="" value=""></div>
                        <div class="formFoot">
                            <button class="button" type="submit">ေအာ္ဒါမွာယူရန္</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mainInfo">
            <div class="infoBox">
                <div id="main-2">
                    <h2 style="color: #fff;">အေသးစိတ္ေဖာ္ျပခ်က္မ်ား</h2>
                </div>
                <div id="main-1">
                    <p class="timerWrap-p">ပ႐ိုမိုးရွင္းကာလ ၿပီးဆုံးသည္အထိ</p>
                    <div class="countbox"></div>
                </div>
                <ul>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>ဝါယာႀကိဳးမ်ား မပါဘဲ <b>တပ္ဆင္ႏိုင္ပါတယ္။</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>ေနေရာင္ျခည္မွရရွိေသာ စြမ္းအင္ျဖင့္ <b>အားျဖည့္ထားပါတယ္။</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>ေ႐ြ႕လ်ားမႈကို အာ႐ုံခံၿပီး <b>အလိုအေလ်ာက္ပြင့္ေစပါတယ္။</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>မည္သည့္မ်က္ႏွာျပင္မွာမဆို အလြယ္တကူ <b> လ်င္ျမန္စြာ ကပ္ႏိုင္ပါတယ္။</b></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-img-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg-2.svg"></div>
    <div class="bg-img"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg.jpg"></div>
</section>
<section class="sec-2">
    <div class="container">
        <div class="block-1">
            <h2>Ecolight ဆိုတာ ဘာပါလဲ။</h2>
            <p class="font-m">Ecolight မီးအိမ္ကို<b>အလြန္ေတာက္ပလင္းထိန္ၿပီး စြမ္းအားအရင္းအျမစ္မ်ားကို ေခြၽတာတဲ့
                </b>COB LED မီးသီးမ်ားျဖင့္ ျပဳလုပ္ထားပါတယ္။
            </p>
            <p> Ecolight မီးအိမ္ကို တပ္ဆင္ရာတြင္ ဝါယာႀကိဳးမ်ားအသုံးျပဳစရာမလိုသည့္အျပင္ အလြန္စိတ္ခ်ယုံၾကည္ရတဲ့
                ကပ္ခြာမ်ားပါရွိတာေၾကာင့္ ၅ စကၠန႔္အတြင္း မိမိစိတ္ႀကိဳက္ မည္သည့္မ်က္ႏွာျပင္မွာမဆို အလြယ္တကူ
                တပ္ဆင္ႏိုင္ပါတယ္။
            <p>ကပ္ခြာရဲ႕ အပိုင္းေလးကိုခြာလိုက္ၿပီး မီးအိမ္ေလးနဲ႔ကပ္ေပးလိုက္႐ုံပါပဲ။ အဲ့ဒါဆိုရင္ေတာ့ ေမွာင္ေနတဲ့
                ေနရာေလးေတြမွာ ထြန္းလင္းႏိုင္ပါၿပီ။
            </p>
        </div>
    </div>
</section>
<section class="sec-3">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>လိုအပ္တဲ့ အခ်ိန္ေလးမွာ ဖြင့္လိုက္႐ုံပါပဲေနာ္။</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-product.png"></div>
        <div class="block-2">
            <p>Ecolight မွာေ႐ြ႕လ်ားမႈကို အာ႐ုံခံႏိုင္တဲ့ Sensor ေတြနဲ႔ ထည့္သြင္းစဥ္းစားထားတာေၾကာင့္ မီးအိမ္ေရွ႕ကို
                လူတစ္ဦးတစ္ေယာက္ကပဲျဖစ္ျဖစ္၊ အိမ္ေမြးတိရစာၦန္ေလးေတြကပဲျဖစ္ျဖစ္၊ ကားတစ္စီးကပဲျဖစ္ျဖစ္ ေဘးနားက
                ျဖတ္သြားတဲ့အခါမွာ သူ႔အလိုသူ မီးအိမ္ကိုပြင့္လာေစပါတယ္။ အကယ္လို႔ မီးအိမ္ေလးကို
                အဆက္မျပတ္လင္းေစခ်င္တယ္ဆိုရင္လည္း Mode ေလးကိုေျပာင္းၿပီး သတ္မွတ္ေပးထား႐ုံပါပဲ။
            </p>
            <ul class="itemList">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-1.jpg">
                    <p>တစ္ဖက္မွာေတာ့ ဘက္ထရီေခြၽတာႏိုင္ၿပီး ေနာက္တစ္ဖက္မွာေတာ့ လိုအပ္တဲ့ေနရာေတြကို
                        ထြန္းလင္းေပးႏိုင္ပါတယ္။
                    </p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-2.jpg">
                    <p><b>ညဘက္ေတြမွာလည္း ေမွာင္ေမွာင္မဲမဲထဲမွာ </b>ေသာ့ေတြ မီးခလုတ္ေတြကိုလည္း ရွာစရာမလိုေတာ့ပါဘူး။
                        အဲ့ဒါဆိုရင္ သင္လည္း ေခ်ာ္လဲတာေတြ ထိခိုက္မႈေတြ ျဖစ္စရာမလိုေတာ့ပါဘူး
                    </p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-3.jpg">
                    <p><b> </b>သင္ရဲ႕ အိမ္နဲ႔ ဧရိယာေတြကို မလိုလားအပ္တဲ့ ျပင္ပဧည့္သည္ေတြနဲ႔ တိရစာၦန္ေတြ
                        ဝင္ေရာက္ျခင္းမွ ကာကြယ္ပါ။ မီးဖြင့္လိုက္တာနဲ႔ သူတို႔ေျပးသြားပါလိမ့္မယ္။
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sec-4">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Ecolight ကို ဘယ္ေနရာမွာတပ္ဆင္ရမလဲ။</h2>
            <div class="subtitle">Ecolight ကို အလိုအေလ်ာက္ အလင္းကရရွိတဲ့ စြမ္းအင္အရင္းအျမစ္ေတြနဲ႔
                အသုံးျပဳထားတာေၾကာင့္ လွ်ပ္စစ္မီးမရရွိတဲ့ေနရာေတြ မီးပ်က္ေနတဲ့ အခ်ိန္ေတြမွာေတာင္ သုံးလို႔ရပါတယ္။
            </div>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided-l.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="icons">
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-1.svg">
                <p>အိမ္ေရွ႕တံခါးရဲ႕ အေပၚ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-2.svg">
                <p>ၿခံဂိတ္တံခါး၀ အေပၚ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-3.svg">
                <p>ကားဂိုေထာင္ထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-4.svg">
                <p>အိမ္ထပ္ခိုး</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-5.svg">
                <p>ေျမေအာက္ခန္းထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-6.svg">
                <p>သိုေလွာင္ခန္းထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-7.svg">
                <p>ေမြးျမဴေရးၿခံထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-8.svg">
                <p>အိမ္သာထဲ </p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-9.svg">
                <p>အပန္းေျဖပန္းၿခံေလးထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-10.svg">
                <p>၀ရံတာ</p>
            </div>
        </div>
        <div id="button-cont"><a class="button" href="#buy" data-attach="scrollTo">ေအာ္ဒါတင္ရန္</a></div>
    </div>
</section>
<section class="sec-5">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Ecolight ၏အက်ိဳးေက်းဇူးမ်ား</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block">
            <div class="item">
                <div class="item-img"
                     style="background-image: url('{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-img.jpg')"><img
                        class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-icon-1.svg"></div>
                <div class="item-text">
                    <h4>အလုပ္စြမ္းအား အရင္းအျမစ္ကို ျမင့္မားလာေစပါတယ္။</h4>
                    <p>Ecolight ကိုေခတ္မီလွပတဲ့ COB Led မီးလုံးမ်ားနဲ႔ အလွဆင္ထားပါတယ္။ ဒီလို LED မီးသီးေလးေတြက
                        အေရာင္ထိန္လင္းၿပီး စီးပြားေရးအတြက္ေခြၽတာႏိုင္႐ုံတင္မဟုတ္ပဲ ၾကာရွည္အသုံးခံၿပီး
                        <b>ဆက္တိုက္ဖြင့္အသုံးျပဳရင္ေတာင္ နာရီေပါင္း တစ္သိန္းအထက္ထိ</b> အခ်ိန္တိုးျမင့္
                        အသုံးခံတာေၾကာင့္ သက္တမ္းရွည္စြာ ဖြင့္ထားလို႔ရပါတယ္။ ထို႔အျပင္ အလင္းကိုတစ္မိနစ္လွ်င္
                        မိနစ္အနည္းငယ္မွ်ဖြင့္သြားတာကို ထည့္သြင္းစဥ္းစားျခင္းအားျဖင့္ Ecolight သည္
                        အလုပ္စြမ္းအားအရင္းအျမစ္ေပါင္းမ်ားစြာကို ေခြၽတာႏိုင္ၿပီး သင့္ကိုဆယ္စုႏွစ္ေပါင္းမ်ားစြာထိ
                        အက်ိဳးျပဳႏိုင္ပါတယ္။
                    </p>
                </div>
            </div>
            <div class="shadow"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/shadow.svg"></div>
        </div>
        <div class="block">
            <div class="item">
                <div class="item-img"
                     style="background-image: url('{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-img-2.jpg')"><img
                        class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-icon-2.svg"></div>
                <div class="item-text">
                    <h4>ေနေရာင္ျခည္မွရရွိေသာ စြမ္းအင္ျဖင့္ အားသြင္းႏိုင္ပါတယ္။</h4>
                    <p>Ecolight မွာ Energy ကိုေခြၽတာတဲ့ Solar System ပါရွိပါတယ္။Solar System ပါရွိပါတယ္။</p>
                    <p>အလင္းက ၁၅ မီတာ အခ်င္းဝက္ထိ ျပန႔္လင္းႏိုင္ပါတယ္။ Ecolight ကို သင့္ရဲ႕ လိုခ်င္တဲ့
                        ပုံစံအတိုင္းကိုက္ညီေအာင္ ျပဳျပဳင္လို႔ရပါတယ္။
                    </p>
                </div>
            </div>
            <div class="shadow"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/shadow.svg"></div>
        </div>
    </div>
</section>
<section class="sec-6">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>ရာသီဥတုဆိုးဝါးတဲ့ဒဏ္ေတြကို ႀကံ့ႀကံ့ခံႏိုင္စြမ္းရွိပါတယ္။</h2>
            <div class="subtitle">အျပင္က ေရစိုခံအကာေလးက LED မီးသီးမ်ားကို ရာသီဥတုဆိုးဝါးမႈဒဏ္မ်ားကို ႀကံ့ႀကံံ့ခံ
                ကာကြယ္ေပးပါတယ္။<br><b>Ecolight ရဲ႕ တည္ၿငိမ္တဲ့လုပ္ေဆာင္ႏိုင္စြမ္းရည္ကိုေတာ့ အာမခံပါတယ္။ </b>
            </div>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided-l.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="icons">
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-1.svg">
                <p>မိုးေရထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-2.svg">
                <p>ဆီးႏွင္းထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-3.svg">
                <p>ႏွင္းခဲထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-4.svg">
                <p>ေနအပူခ်ိန္</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-5.svg">
                <p>ျမဴခိုးထဲ</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-6.svg">
                <p>ေလျပင္းထဲ</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-7">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>၅ စကၠန႔္အတြင္းလြယ္ကူစြာတပ္ဆင္ႏိုင္ပါတယ္။</h2>
            <div class="subtitle">မည္သည့္မ်က္ႏွာျပင္မွာမဆို အလြယ္တကူ ကပ္ႏိုင္ပါတယ္။</div>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block">
            <h3>Ecolight ကိုတပ္ဆင္ဖို႔ အေၾကာင္းျပခ်က္ေတြက လုံေလာက္ေနပါၿပီ။</h3>
            <ul class="stepList">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-img-2.jpg">
                    <p>ျပားေနတဲ့ မ်က္ႏွာျပင္အပိုင္းေလးကိုႏွိပ္လိုက္ပါ။</p>
                </li>
            </ul>
        </div>
        <div class="block">
            <div class="content">
                <ul class="materialList">
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-1.jpg">
                        <p>သတၱဳ</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-2.jpg">
                        <p>ကြန္ကရစ္</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-3.jpg">
                        <p>အုတ္</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-4.jpg">
                        <p>သစ္သား </p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-5.jpg">
                        <p>ေႂကြထည္</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-6.jpg">
                        <p>ပလပ္စတစ္ </p>
                    </li>
                </ul>
                <div class="content-foot">
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-icon.svg">
                    <p>LUMINAIR BASE ရဲ႕ ေနာက္ေက်ာဘက္မွာေတာ့ <b> မူလီေတြ သံမႈိေလးေတြကိုေတာ့
                        </b>ကိုယ္တိုင္ျပင္လို႔ရႏိုင္တဲ့ Kit ေလးေတြပါရွိပါတယ္။
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-8">
    <div class="container">
        <div class="block-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-product.png"></div>
        <div class="block-2">
            <h2>Ecolight ရဲ႕ ဝိေသသလကၡဏာမ်ား</h2>
            <ul class="mainList" အေသးစိတ္နည္းပညာ="" အခ်က္အလက္မ်ား="">
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-1.svg">
                        <p class="title">လုံၿခဳံမႈ အဆင့္အတန္းမ်ား </p>
                        <p>IP 55</p>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-2.svg">
                        <p class="title">အမ်ိဳးအစားမ်ား</p>
                        <p>မူပိုင္</p>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-3.svg">
                        <p class="title">ဆိုလာဘက္ထရီ</p>
                        <p>0.55 Watt</p>
                    </div>
                </li>
            </ul>
            <ul class="paramList">
                <li>
                    <p><b>အေရာင္-</b>အနက္ေရာင္</p>
                </li>
                <li>
                    <p><b>အလင္းျဖာထြက္ႏႈန္း-</b>1200 Lumens</p>
                </li>
                <li>
                    <p><b>အပူခ်ိန္ ႏုန္း-</b>- 40°С မွ 55°С ထိ</p>
                </li>
                <li>
                    <p><b> မီးသီးထြန္းလင္းႏိုင္စြမ္း- </b>100 Watt</p>
                </li>
                <li>
                    <p><b> အလြန္တိက်ေသာေ႐ြ႕လ်ားမႈအာ႐ုံခံကိရိယာ- </b>ပါရွိပါတယ္။</p>
                </li>
                <li>
                    <p><b> အလိုအေလ်ာက္ပိတ္ခ်ိန္- </b>30စကၠန႔္ ၿပီးေနာက္</p>
                </li>
                <li>
                    <p><b> အဆက္မျပတ္လုပ္ႏိုင္စြမ္းအား-</b>100.000နာရီ</p>
                </li>
                <li>
                    <p>
                        <> 0,55 Watt
                    </p>
                </li>
                <li>
                    <p><b>ထုပ္ပိုးမႈအ႐ြယ္အစား- </b>12*13*16 စင္တီမီတာ</p>
                </li>
            </ul>
            <a class="button" href="#buy" data-attach="scrollTo">မွာယူရန္ </a>
        </div>
    </div>
</section>
<section class="sec-9">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>ေဖာက္သည္မ်ားထံမွ သုံးသပ္ခ်က္မ်ား</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container2">
        <div class="reviews">
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev1.png">
                            <h3>“ေႏြရာသီ အပန္းေျဖအိမ္ေတြအတြက္ အရမ္းကိုသင့္ေတာ္တဲ့ မီးအိမ္ေလးပါ။”</h3>
                            <p class="name">ေဒၚတင္အုန္းေမာ္၊ ၄၄ႏွစ္၊ ရန္ကုန္ၿမိဳ႕။</p>
                        </div>
                        <div class="userText">
                            <p>ကြၽန္မနဲ႔ ကြၽန္မေယာက္်ားက ဒီမီးအိမ္ေလးကိုနယ္မွာရွိတဲ့ ကြၽန္မတို႔ရဲ႕
                                ေႏြရာသီအပန္းေျဖအိမ္ေလးအတြက္ ဝယ္ဖို႔ဆုံးျဖတ္ခဲ့လိုက္ပါတယ္။ ကြၽန္မတို႔
                                စတိုးဆိုင္ေတြအႏွံ႔ ပစၥည္းကိုလိုက္ရွာၾကည့္ခဲ့ၾကေသးတယ္။ ဒါေပမယ့္ တစ္ခုမွကို
                                စိတ္တိုင္းမက်ပါဘူး။ ကြၽန္မတို႔ေတြ ဝက္ဘ္ဆိုက္မွာ Ecolight
                                အေၾကာင္းကိုဖတ္ၾကည့္ၿပီးတာနဲ႔ ေအာ္ဒါတင္ဖို႔ ဆုံးျဖတ္လိုက္ေတာ့တာပဲ။ မွာၿပီး
                                ခ်က္ခ်င္းကို ၅ရက္ အတြင္းကို ေရာက္လာေတာ့တာပါပဲ။ မီးအိမ္ေလးကို တကယ္ကို
                                ကြာလတီေကာင္းေကာင္းေလးနဲ႔ ေရာက္လာတာပါပဲ။ မိုး႐ြာ႐ြာ ေနပူပူ နံရံေပၚကေန
                                လုံးဝကြာမက်တာေၾကာင့္ စိတ္ပူစရာကို မလိုခဲ့ပါဘူး။ ဖြင့္လိုက္တာနဲ႔ ခ်က္ခ်င္းပြင့္လာၿပီး
                                လင္းသြားတာပဲ ဒါေပမယ့္ သူ႔အလင္းက မ်က္လုံးမက်ိန္းသြားဘူး။ ၀ယ္ရတာ အရမ္းကို စိတ္ခ်မ္းသာ
                                ေပ်ာ္႐ႊင္ရတဲ့ အတြက္ေၾကာင့္ ေက်းဇူးတင္ပါတယ္။
                            </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev1.png">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev2.png">
                            <h3>“အရင္က ဒီလိုဟာမ်ိဳး ဝယ္မသုံးခဲ့မိတာ အရမ္းေနာင္တရတာပဲ။”</h3>
                            <p class="name">ဦးရန္ႏိုင္ေအာင္၊ ၃၅ႏွစ္၊ မႏၲေလးၿမိဳ႕။</p>
                        </div>
                        <div class="userText">
                            <p>Ecolight မီးသီးကို ၄ လုံးေလာက္မွာလိုက္တယ္။ ကြၽန္ေတာ့္မွာဆိုရင္ ေျမဧက
                                အက်ယ္ႀကီးတစ္ခုရွိထားေတာ့ အဲ့ဒီ့ေနရာေတြအကုန္ မီးလင္းဖို႔အတြက္
                                မီးသီးေတြအမ်ားႀကီးလိုတယ္။ အခုေတာ့ ညေနခင္းမွာ လမ္းေလးပတ္ေလွ်ာက္ၿပီးၾကည့္ရတာ
                                စိတ္ခ်မ္းကိုသာေနေရာပဲ။ အေရွ႕ကိုသြားလိုက္တာနဲ႔
                                မီးကလင္းလာေရာ။ကားဂိုေထာင္ထဲကိုသြားရင္လည္းမီးဖြင့္ဖို႔ ခလုတ္လိုက္ရွာေနစရာေတာင္မလိုဘူး
                                အရာအားလုံးကိုျပည့္စုံေနေရာပဲ။ အေကာင္းဆုံးအခ်က္ကေတာ့ မီးအိမ္ေတြကို တပ္ဆင္ဖို႔ အတြက္
                                ဝါယာႀကိဳးလုံးဝမလိုတာပဲ။ ဒီတိုင္းကပ္လိုက္႐ုံနဲ႔ပဲ ညဘက္မွာ မီးလင္းလာၿပီး
                                ေန႔ဘက္မွာသူ႔အလိုသူအားသြင္းေန႐ုံပဲ။ ပစၥည္းက ေလးရက္အတြင္း ေရာက္လာတာကို စာတိုက္ကေန
                                သြားထုတ္ၿပီး ပိုက္ဆံေလးရွင္းလိုက္႐ုံပဲ။ အရမ္းကိုသေဘာက်သြားၿပီ။
                            </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev1.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev3.png">
                            <h3>“ေတာ္ေတာ္ကို လြယ္တယ္။”</h3>
                            <p class="name">ေဒၚနီလာေအာင္၊ ၄၀ႏွစ္၊ ဖ်ာပုံၿမိဳ႕။</p>
                        </div>
                        <div class="userText">
                            <p>မၾကာေသးမီကမွ ကြၽန္မတို႔အဖြဲ႕ေတြ အပန္းေျဖအိမ္ Construction
                                ေဆာက္လုပ္ေရးေလးကိုၿပီးသြားၾကတာ ဒါေပမယ့္ ျပႆနာက Site တစ္ခုလုံးကို
                                မီးလင္းေအာင္လုပ္ဖို႔ပဲ။ ကြၽန္မတို႔ေတြ မီးဆင္ဖို႔အတြက္ ဝါယာေတြကို ဘယ္လိုတပ္မလဲ
                                ဝါယာႀကိဳးေတြကို ဘယ္လိုျမႇဳပ္ထားမလဲ အဲ့ႀကိဳးေတြကို မိုးမမိေအာင္ေရာဘယ္လိုလုပ္ရပါ့
                                ဆိုၿပီး အၾကာႀကီး ေတြးၿပီးစဥ္းစားေနခဲ့ရတာ။ ေနာက္ဆုံးမွာေတာ့ Landscape Designer
                                တစ္ေယာက္က ကြၽန္မတို႔ကို အင္တာနက္ကေန ECOLIGHT မီးလုံးေတြကို ဝယ္ဖို႔ အႀကံေပးခဲ့တာ။
                                မီးလုံးေတြက ဝါယာႀကိဳးမလိုတာကိုေတြ႕လိုက္ရေတာ့ ကြၽန္မ အရမ္းကိုေပ်ာ္သြားတာပဲ။ အခ်ိန္ေတြ
                                လူအားေတြ ကုန္စရာမလိုေတာ့ဘူး။ၿပီးရင္သူ႔အလိုသူပိတ္သြားႏိုင္တာေၾကာင့္
                                ျပဴတင္းေပါက္ကေနလည္း အလင္းဝင္မလာႏိုင္ေတာ့ဘူး သူတို႔ကိုဖြင့္လိုက္တာနဲ႔ နည္းနည္းေလးမွ
                                မၾကာပဲ ခ်က္ခ်င္းပြင့္တယ္။အလုပ္အရမ္းသက္သာေစတဲ့အတြက္ေၾကာင့္မို႔လို႔
                                တကယ္ကိုေက်းဇူးတင္ပါတယ္။
                            </p>
                            <img class="image" src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev2.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev4.png">
                            <h3>“ထပ္ၿပီးေတာ့လည္း အမ်ားႀကီးမွာဦးမလို႔ စိတ္ကူးေနတယ္။”</h3>
                            <p class="name">ဦးျမင့္ေအာင္၊ ၅၈ႏွစ္၊ ေကာ့ေသာင္းၿမိဳ႕။</p>
                        </div>
                        <div class="userText">
                            <p>ကြၽန္ေတာ္နဲ႔ကြၽန္ေတာ့္မိန္းမနဲ႔က နယ္ဘက္မွာေနေနေတာ့ တစ္ခါတစ္ေလ မီးလုံးေတြမွိန္တာနဲ႔
                                ပတ္သက္ၿပီး အရမ္းဒုကၡေရာက္ရတယ္။ ညေနတိုင္း အိမ္ျပန္လာတဲ့အခ်ိန္တိုင္း အိမ္တံခါးဝေရွ႕မွာ
                                ေမွာင္ေမွာင္မဲမဲထဲ ေသာ့ရွာရတာ သိပ္ေတာ့ အဆင္မေျပလွဘူး အခုေခတ္စားေနတဲ့
                                ေဈးကြက္စီးပြားေရးေတြကို စုံစမ္းၿပီး Ecolight ကိုစမ္းၿပီးသုံးၾကည့္မလို႔
                                စဥ္းစားခဲ့တယ္။ မီးအိမ္ဆင္ဖို႔အတြက္လိုအပ္တဲ့
                                ပစၥည္းကိရိယာေတြေတာင္ျပင္ဆင္ထားလိုက္ေသးတယ္ ဒါေပမယ့္ ဘာမွမလိုဘူး တိပ္ကေလးကိုခြါၿပီး
                                ကပ္လိုက္႐ုံပဲ။ ေကာ္က အရမ္းကိုခိုင္ပါတယ္။ ေမွာင္ေမွာင္မဲမဲထဲ ေသာ့ရွာရတဲ့ ျပႆနာ
                                ၿငိမ္းေအးသြားလို႔ ေက်းဇူးတင္ပါတယ္။
                            </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-10">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Ecolight မီးအိမ္ကို ဘယ္လိုမွာရမလဲ။</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-1.svg">
            <p><b></b>၀က္ဘ္ဆိုက္မွာ Request တင္ထားႏိုင္ပါတယ္။</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-2.svg">
            <p><b> </b>ကြၽန္ေတာ္တို႔က သင့္ကို ေနရပ္လိပ္စာအတည္ျပဳဖို႔အတြက္ ျပန္ၿပီးဆက္သြယ္မွာပါ။</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-3.svg">
            <p><b></b>ကြၽန္ေတာ္တို႔က Ecolight ကိုႏိုင္ငံအႏွံ႔ ပို႔ေဆာင္ေပးေနပါၿပီ။</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-4.svg">
            <p><b> </b>ေငြျဖတ္ပိုင္းေပၚမွာ ေငြေပးေခ်႐ုံပါပဲ</p>
        </div>
    </div>
    <div class="bg-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/spte-bg-1.svg"></div>
    <div class="bg-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/spte-bg-2.svg"></div>
</section>
<section class="sec-1">
    <div class="row-2">
        <div class="pageTitle">
            <br>
            <p style="font-size: 20px">အိမ္ရဲ႕ ဘယ္ေနရာမဆို မီးထိန္ထိန္လင္းႏိုင္ပါတယ္။</p>
            <h2>အလင္းေရာင္ကို တိုးျမင့္လိုက္ပါ</h2>
            <p class="sub">ေမွာင္ေနတဲ့ ဘယ္ေနရာမွာမဆိုပါ </p>
            <br>
        </div>
    </div>
    <div class="row-3">
        <div class="mainProduct">
            <img class="label" src="{{ asset('/') }}dailysharkFiles/solarledlamp/hit.svg"> <img
                src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-product.png">
            <div class="daybuy"><span>ယေန႔အတြက္ </span> စုစုေပါင္းဝယ္ယူသူ ၉၁ဦး</div>
        </div>
        <div class="mainForm" id="buy">
            <div class="formWrap">
                <div class="form-box">
                    <div class="price">
                        <div class="price-title"><span>50% </span> အထူးေလွ်ာ့ေစ်း</div>
                        <div class="price-box">
                            <p class="price-old">
                              <span class="al-cost-promo">
                                 {{ $prices[1]['originalPrice'] }}
                                 {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                            <p class="price-new al-cost">
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="#" class="al-form">
                        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="အမည္"
                                                       required="" value=""></div>
                        <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                       placeholder="ဖုန္းနံပါတ္" required="" value=""></div>
                        <div class="formFoot">
                            <button class="button" type="submit">ေအာ္ဒါမွာယူရန္</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mainInfo">
            <div class="infoBox">
                <div id="main-2">
                    <h2 style="color: #fff;">အေသးစိတ္ေဖာ္ျပခ်က္မ်ား</h2>
                </div>
                <div id="main-1">
                    <p class="timerWrap-p">promotion ကာလ အဆုံးထိ</p>
                    <div class="countbox"></div>
                </div>
                <ul>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p><b>အလိုရွိတဲ့အခိုက္</b> အလိုအေလ်ာက္ပြင့္ႏိုင္ပါတယ္။</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>၅စကၠန႔္အတြင္း<b> တပ္ဆင္ႏိုင္ပါတယ္။</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p><b>ေနရာဝန္းက်င္အေတာ္က်ယ္သည္အထိ</b> လင္းႏိုင္ပါတယ္</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p><b>မည့္သည့္ရာသီဥတု အေျခအေနကိုမဆို</b> ႀကံ့ႀကံ့ခံကာကြယ္ေပးထားပါတယ္။</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-img-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg-2.svg"></div>
    <div class="bg-img"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg.jpg"></div>
</section>
<div aria-hidden="true" aria-labelledby="orderModalTitle" class="modal fade" id="orderModal" role="dialog"
     tabindex="-1" data-attach="OrderFormModal" data-id="order-form-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button aria-hidden="true" class="close" data-dismiss="modal"
                        type="button">&times;
                </button>
                <div class="progress-wrapper hide-on-success">
                    <p class="current-progress"><span class="value">50</span>% ၿပီးေျမာက္သြားပါၿပီ။</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active"
                             role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                             style="width: 50%;"></div>
                    </div>
                    <div class="progress-description">
                        <p>အမည္နဲ႔ ဖုန္းနံပါတ္ကို႐ိုက္ထည့္ၿပီးေနာက္ Click ႏွိပ္ပါ။<br>«အခုပဲမွာယူလိုက္ပါ။»</p>
                    </div>
                </div>
                <div class="lead-text hide-on-success">
                    <p>ပစၥည္းအေရအတြက္အကန႔္အသတ္နဲ႔ပါ။ ေနာက္မွ ဝယ္ဖို႔ စဥ္းစာမေနပါနဲ႔ေတာ့။ အခုသာ ဝယ္လိုက္ၾကပါ။</p>
                </div>
                <div class="well error_message" style="display: none;">
                    <p class="text-danger outerNone"></p>
                </div>
                <div class="success_message text-center" style="display: none;">
                    <p class="h2">၀ယ္ယူအားေပးမႈအတြက္ ေက်းဇူးတင္ပါတယ္။</p>
                    <p>ကြၽန္ေတာ္တို႔ရဲ႕ မန္ေနဂ်ာက ၅မိနစ္ကေန ၁၀မိနစ္အတြင္း ျပန္လည္ဆက္သြယ္ပါလိမ့္မယ္။</p>
                    <p>ေက်းဇူးျပဳၿပီး သင္၏ အခ်က္အလက္မ်ား မွန္မမွန္ ျပန္လည္စစ္ေဆးေပးပါ</p>
                    <div class="user-data">
                        <p>အမည္: <span class="order-modal-user-name"></span></p>
                        <p>ဖုန္းနံပါတ္: <span class="order-modal-user-phone"></span></p>
                    </div>
                    <p class="text-small">အခ်က္အလက္မ်ား မွားေနပါက <a href="#"
                                                                     class="show-form">ျပန္လည္ျဖည့္စြက္ေပးပါ။ </a></p>
                </div>
                <form method="POST" action="#" class="al-form">
                    <div class="form-group"><input type="text" class="form-control" name="name" placeholder="အမည္"
                                                   required="" value=""></div>
                    <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                   placeholder="ဖုန္းနံပါတ္" required="" value=""></div>
                    <div class="formFoot">
                        <button class="button" type="submit">ေအာ္ဒါမွာယူရန္</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--<script src="http://ecolightled.xcartpro.com/r1/js/jquery.min.js"></script>--}}
<script src="{{ asset('/') }}shared_files/bootstrap.min.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
{{--<script src="{{ asset('/') }}dailysharkFiles/solarledlamp/app.js"></script>--}}
<script>
    $(document).ready(function() {
        $("a").on("click", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1000);
        });
        $(".reviews").slick({
            dots: !1,
            infinite: !0,
            speed: 300,
            autoplay: !0,
            autoplaySpeed: 7e3,
            adaptiveHeight: !0,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [{
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        })
    });
</script>
</body>
</html>
