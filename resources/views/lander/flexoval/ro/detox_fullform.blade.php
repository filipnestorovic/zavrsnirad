<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript" ></script>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.firstCircle{position:relative;top:30px}.doctorSection img{margin-top:-40px!important}.productSection{margin-top:50px}.scroll__list{position:relative;top:30px}.pair img{margin-top:40px}}@media only screen and (min-width:424px){.scroll__list{position:relative;top:60px}.pair img{margin:50px}}.manual__icon-inner--1 .manual__icon{width:152px;height:185px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)}.manual__icon-inner--2{padding-top:24px}.manual__icon-inner--2 .manual__icon{margin-left:0;width:166px;height:169px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)}.manual__icon-inner--3 .manual__icon{width:143px;height:213px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)}</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Plasturi de detoxifiere pe bază de plante</h1>
                <h2>DETOX</h2>
                <span>„Înțelepciunea chineză, tehnologia modernă”</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">ACȚIONAȚI!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">preț nou</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                <div class="monk"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/monk.png"/></div>
                <div class="ingredients"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/></div>
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture">
                    <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ATENȚIE, ACȚIONAȚI!</h3>
                        <span>40% REDUCERE</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Preț</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Nume și prenume" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Strada și numărul" type="text" required/>
                            <input name="shipping_city" placeholder="Oraș" type="text" required/>
                            <input name="shipping_zip" placeholder="Cod postal" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="productLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* LIVRARE GRATUITA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Comanda acum"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="triggers hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 triggers__item triggers__icon--bowl">
                <div class="triggers__desc">Rețetă veche de secole</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Activarea micro circulației în piele</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Excreția excesului de apă din organism</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">O gamă largă de efecte</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Detoxifierea completă a organismului</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% eficient și sigur</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">ASTĂZI, ESTE DE DORIT SĂ DETOXIFIAȚI ORGANISMUL CEL PUȚIN O DATĂ PE LUNĂ ȘI SĂ VĂ REGENERAȚI CORPUL</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Astăzi, cu toții trăim un stil de viață parțial nesănătos și este foarte important să <span>detoxifiem organismul în mod regulat.</span>
                    Plasturii de detoxifiere sunt fabricați din extracte de plante conform unei rețete tradiționale chinezești și sunt destinate să elimine excesul de lichid și toxinele din organism prin <span>punctele de acupunctură.</span></p>
                <p>Plasturii Kinoki ameliorează <span>tensiunea și oboseala, îmbunătățesc somnul, curăță pielea și îmbunătățesc sănătatea generală.</span>
                    Folosind acești plasturi, toxinele toxinele care se acumulează în organism și în fluxul sanguin sunt eliminate rapid din organism.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">ZONE DE APLICARE A PLASTURILOR „KINOKI”</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Reumatologie</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Limfologie</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Neurologie</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">CURĂȚĂ CORPUL DE TOXINE ÎN DOAR 5 ZILE CU AJUTORUL PLASTURILOR „KINOKI”</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Chiar și primii taoiști au spus că toxinele au fost principala cauză a scăderii energiei din organism.</p>
                <p>Cantități excesive de toxine lasă în mod inevitabil o amprentă asupra sănătății sau a organelor și provoacă boli precum impotența, mastopatia, hipertensiunea, durerile de cap, oboseala cronică și multe altele.</p>
                <p>Conform ideilor călugărilor taoiști și medicinei tradiționale chineze, energia negativă care se răspândește în tot corpul poate fi oprită prin detoxifiere și întrerupe răspândirea acesteia în tot corpul.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">„Corp sănătos - spirit sănătos”</div>
                <div class="quote__author"> Sun Šu-Min</div>
            </div>
        </div>
    </div>
    <div class="scroll">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="video">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="scroll__text">Efectul de vindecare al plasturelui se bazează pe următoarele efecte:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoxifierea organismului</li>
                        <li class="scroll__list-item">Ameliorarea durerilor de cap și a stresului</li>
                        <li class="scroll__list-item">Întinerirea corpului</li>
                        <li class="scroll__list-item">Creșterea calității somnului</li>
                        <li class="scroll__list-item">Efect pozitiv asupra organelor interne</li>
                        <li class="scroll__list-item">Prevenirea mirosurilor neplăcute</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">COMPOZIȚIA PLASTURILOR DE DETOXIFIERE "KINOKI":</h2>
                <p>Rețeta pentru plasturi include peste 9 plante medicinale și a fost obținută ca urmare a secolelor de cercetare de către vindecătorii tradiționali.</p>
                <p>Plasturii Detox sunt produși în conformitate cu tehnologia modernă și cele mai înalte standarde internaționale de calitate. Plasturii Kinoki nu conțin aditivi chimici, sunt inofensivi pentru organism. </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Homalomena</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--burnaska-camphor">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Notopterygium incisum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--milletia-net">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Șofran</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--ginura-peritonita">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Millettia reticulata</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--corydalis-questionable">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Ghimbir sălbatic</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--angelica-croproperty">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Panax pseudoginseng</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Cistanche salsa</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline2">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Rădăcină de skullcaps</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"KINOKI" VĂ VA CURĂȚA CORPUL DE TOXINE <br> ÎN CEL MAI SCURT TIMP POSIBIL!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> ACȚIONAȚI!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> preț nou</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Agent de vindecare, natural și puternic detoxifiant.</div>
                        <div>Ajută la ameliorarea durerilor de cap, a stresului, eliberează organismul de lichide, îmbunătățește calitatea somnului și restabilește energia.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">O combinație specială de plante medicinale chinezești</li>
                        <li class="list-checked__item">Rețete vechi de secole din medicină Chineză</li>
                        <li class="list-checked__item">Tehnologie modernă de producție</li>
                        <li class="list-checked__item">Acestea vor prelua toate toxinele din organism într-un singur loc</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ACȚIONAȚI, ACȚIONAȚI!</h3>
                        <span>40% REDUCERE</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Preț</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Nume și prenume" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Strada și numărul" type="text" required/>
                            <input name="shipping_city" placeholder="Oraș" type="text" required/>
                            <input name="shipping_zip" placeholder="Cod postal" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="SecondProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* LIVRARE GRATUITA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Comanda acum"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">CE SPUN MEDICII DESPRE PLASTURII DIN PLANTE „KINOKI” <br> PENTRU DETOXIFIERE?</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Cel mai important lucru în procesul de tratare a oricărei boli este curățarea corpului de toxine pe care organismul le colectează din cauza unui stil de viață nesănătos.
                        Anterior, singura soluție a fost prescrierea produselor de detoxifiere care afectează negativ ficatul și tractul digestiv.</p>
                    <p>Am avut pacienți care s-au plâns de dureri de cap, oboseală cronică, dureri la nivelul coloanei vertebrale cervicale, toate ca urmare a acumulării de toxine în organism care au perturbat funcțiile normale ale corpului.</p>
                    <p>Când am început să recomand KINOKI pacienților mei, după un timp, o bună parte dintre ei au avut semnificativ mai puține probleme și majoritatea problemelor au dispărut complet.
                        Plasturii KINOKI sunt excelenți pentru eliminarea naturală a toxinelor din organism și recomand detoxifierea tuturor cel puțin o dată pe lună.</p>
                </div>
                <div class="comment__author">Marius Daniel</div>
                <div class="comment__job"> Reumatolog</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">COMENTARIILE CLIENȚILOR NOȘTRI</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Ligia, 21 de ani</div>
                <div class="comments__text">
                    <p>Bună. Lucrez mult la birou și am avut o problemă cu durerile musculare, picioarele îmi păreau grele, nu aveam suficientă energie și eram foarte morocănoasă. Am găsit plasturii KINOKI pe internet și am încercat să-mi detoxifiez corpul. După două cutii, simptomele care m-au deranjat au dispărut complet și mă simt minunat de 3 luni de acum. Acum, preventiv, folosesc o cutie în fiecare lună pentru că nici măcar nu vreau ca acea perioadă dificilă să se repete.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Elena, 65 godina</div>
                <div class="comments__text">
                    <p>De ani de zile am avut o problemă cu excesul de lichid în corp și umflarea picioarelor. Am încercat tot, dar medicamentele mi-au cauzat adesea alte probleme. Fiica mea mi-a cumpărat Kinoki și este singurul produs care m-a ajutat. Am în cutia mea de medicamente mai multe cutii. Mulțumesc!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Octavian, 32 godine</div>
                <div class="comments__text">
                    <p>Adesea mănânc fast-food și dulciuri, beau o mulțime de sucuri carbogazoase și sunt fumător. De-a lungul timpului, am început să întâmpin dificultăți precum epuizarea și durerile de cap. Mama mea a folosit kinoki și mi l-a recomandat și mie. La început, nu credeam că mă va ajuta, dar mama a insistat, nu am renunțat și deja în a doua săptămână de utilizare, m-am simțit mult mai bine. M-am trezit mai odihnit, am avut mai multă energie și durerea de cap a dispărut. Pot spune sincer că recomand acest produs tuturor, pentru că este foarte bun!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">CUM SĂ UTILIZAȚI CORECT PLASTURII „KINOKI”</h2>
            </div>
        </div>
        <div class="row manual">
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-180">
                    <div class="manual__icon-inner manual__icon-inner--1">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">1</div>
                <div class="manual__title">DESCHIDEȚI AMBALAJUL ȘI <br> ÎNDEPĂRTAȚI PLASTURII </div>
                <div class="manual__desc"> Spălați-vă picioarele cu apă și uscați</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">LIPIȚI PLASTURII PE <br> LABA PICIORULUI</div>
                <div class="manual__desc">Peste noapte.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">SCOATEȚI PLASTURII <br> DIMINEAȚA</div>
                <div class="manual__desc">Spălați-vă picioarele cu apă!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice">* Păstrați un plasture pe ambele picioare toată noaptea</div>
        <center>
            <br/><br/>
            <h3><strong>Rezultate vizibile după 1 cutie</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Pentru cele mai bune rezultate, se recomandă utilizarea a 2-3 cutii fără întrerupere</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">„DETOX PATCH” NU ESTE O AMELIORARE TEMPORARĂ, CI O ELIBERARE PERMANENTĂ DE TOXINELE DĂUNĂTOARE DIN ORGANISM!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> ACȚIONAȚI!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> preț nou</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Agent de vindecare, natural și puternic detoxifiant.</div>
                        <div>Ajută la ameliorarea durerilor de cap, a stresului, eliberează organismul de lichide, îmbunătățește calitatea somnului și restabilește energia.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">O combinație specială de plante medicinale chinezești</li>
                        <li class="list-checked__item">Rețete vechi de secole din medicină Chineză</li>
                        <li class="list-checked__item">Tehnologie modernă de producție</li>
                        <li class="list-checked__item">Acestea vor prelua toate toxinele din organism într-un singur loc</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ACȚIONAȚI, ACȚIONAȚI!</h3>
                        <span>40% REDUCERE</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Preț</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Nume și prenume" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Strada și numărul" type="text" required/>
                            <input name="shipping_city" placeholder="Oraș" type="text" required/>
                            <input name="shipping_zip" placeholder="Cod postal" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="ThirdProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* LIVRARE GRATUITA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Comanda acum"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Toate drepturile rezervate.</span>
    </div>
</footer>
<style>
    .freeShippingDiv {
        color: #d31f07;
        text-align: center;
        margin-bottom: 0;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideUp();        }
    })
</script>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>
