<!DOCTYPE html>
<html lang="EN">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_1.png">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/ultraradience/order-list.css">
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/order-cvr.min.css">
    <style>.haov3 .item-2{order:1}.haov3 .item-1{order:2}.haov3 .item-3{order:3}.list-item.list-item--checked .list-item__input--checkbox.item-check::after{border:3px solid #FF276A!important;border-top:none !important;border-right:none !important}.list-item .list-item__input--checkbox{width:26px !important;height:26px !important}.hidden{display:none}a{cursor:pointer}.billing-form_global{border:1px solid #ddd}.slick-dots li button{opacity:1 !important}.secure-lock{text-align:center}.list-item.list-item--checked.item-2{border:2px solid #FF276A!important}.list-item.list-item--checked.item-1,.list-item.list-item--checked.item-3{border:2px solid #FF276A!important}@media(max-width:767px){.list-item.item-3{border:1px solid #C1C1C1!important}.list-item.item-2,.list-item.item-1{border:1px solid #C1C1C1!important}.list-item.list-item--checked.item-2{border:2px solid #FF276A!important}.list-item.list-item--checked.item-1,.list-item.list-item--checked.item-3{border:2px solid #FF276A!important}}.text-center{text-align:center}@media(max-width:767px){.country-info{display:block}.country-info div{width:100%;padding:0}}.has-thumbnails .slick-dots li button{width:100% !important;height:100% !important}.comment .slick-dots li button{background:#FFA6C2 !important;width:16px !important;height:16px !important}.comment .slick-dots li.slick-active button{background:#FF276A !important}@media(max-width:767px){.comment .slick-dots li button{width:10px !important;height:10px !important}}.i909mah_global [type=radio]:checked+label:before,.i909mah_global [type=radio]:not(:checked)+label:before,.i909mah_global [type=radio]:checked+label:before,.i909mah_global [type=radio]:not(:checked)+label:before{border-color:#19af42!important}.i909mah_global [type=radio]:checked+label:after,.i909mah_global [type=radio]:not(:checked)+label:after,.i909mah_global [type=radio]:checked+label:after,.i909mah_global [type=radio]:not(:checked)+label:after{background:#19af42!important}.igxkjyu_global [type=radio]:checked+label:before,.igxkjyu_global [type=radio]:not(:checked)+label:before,.igxkjyu_global [type=radio]:checked+label:before,.igxkjyu_global [type=radio]:not(:checked)+label:before{border-color:#19af42!important}.igxkjyu_global [type=radio]:checked+label:after,.igxkjyu_global [type=radio]:not(:checked)+label:after,.igxkjyu_global [type=radio]:checked+label:after,.igxkjyu_global [type=radio]:not(:checked)+label:after{background:#19af42!important}.i9trx9m,.i5kf4ax,.iqkd85{margin-bottom:15px!important}#button-wrapper{height:auto!important;margin:10px 0!important;border:1px solid #9affb1;box-shadow:0 2px 10px 0 rgb(0 0 0 / 24%);border-radius:5px;font-family:'Avenir Next Bold';letter-spacing:1.2px;background-color:#30BD51!important}#iefqg1n span{content:'OR PAY WITH PAYPAL'!important}#igfx1d{color:#0091FF!important}.customer-info-mobile{border-bottom:1px solid #fff!important}#izlcwl{border-bottom:1px none #fff!important}</style>
    <style>@font-face{font-family:Proxima Nova Bold;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url({{ asset('/') }}fonts/proxima-nova-alt-bold.otf);font-weight:normal;font-display:swap}</style>
    <style>@font-face{font-family:helvetica_light;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url({{ asset('/') }}fonts/helvetica-light.ttf);font-weight:normal;font-display:swap}</style>
    <style>@font-face{font-family:Avenir Next Bold;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url({{ asset('/') }}fonts/avenirnextltpro-bold.otf);font-weight:normal}</style>
    <style>@font-face{font-family:Avenir Next Demi Bold;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url({{ asset('/') }}fonts/avenirnext-demibold.ttf);font-weight:normal;font-display:swap}</style>
    <style>@font-face{font-family:AvenirNext-Regular;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url({{ asset('/') }}fonts/avenirnextltpro-regular-new.otf);font-weight:normal;font-display:swap}</style>
    <style>.customer-info-mobile{border-bottom:1px solid #979797}.summary-col.mobile-summary{position:fixed;top:0;background:#fff;z-index:999;left:0;border:1px solid #ccc;box-shadow:0 4px 6px 0 rgba(0,0,0,.17)}.summary-col.mobile-summary .order-summary{display:flex;flex-flow:column}.summary-col.mobile-summary .order-summary__list{order:2;display:none;padding:10px 15px}.summary-col.mobile-summary .order-summary__total{order:1;border:0;border-bottom:1px solid #dedede !important;background:#f2f2f2 !important;padding:10px 15px !important}.order-summary__total .arrow.open{transform:rotate(-180deg) !important}.list-item .list-item__input--checkbox::after{background:unset !important}.js-list .item-check{display:inherit;border:2px solid #979797;border-radius:5px;width:26px !important;margin-top:-20px}.list-item.list-item--checked .list-item__input--checkbox.item-check::after{position:absolute;width:13px;height:6px;background:0 0 !important;top:4px;left:3px;border:3px solid #027FC4;border-top:none;border-right:none;border-radius:0;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}</style>
    <style>video{max-width:100%}picture.{display:contents}.component-hidden{display:none}.{-webkit-transition:opacity 500ms ease-in-out;-moz-transition:opacity 500ms ease-in-out;-o-transition:opacity 500ms ease-in-out;transition:opacity 500ms ease-in-out;max-width:100%;opacity:0}..b-loaded{opacity:1}h1{font-size:2em}ul{padding:0;padding-inline-start:0;list-style-position:inside}.ctr_wow_body iframe{width:100%}img{max-width:100%;width:auto;height:auto}button:focus,input:focus,textarea:focus,select:focus{outline:none}</style>
<body>
<div data-hidden id="io1kwf4" url="#" box-title="ULTRARADIANCE" class="sticky-bar sticky-bottom io1kwf4_global">
    <a anchor="#i5raub" href="#" data-anim-repeat id="isfxvie" class="animated--hover infinite">
        <div id="iiilxio">PORUČI ODMAH!</div>
    </a>
</div>

<div id="idkx" class="ctr_wow_body">
    <section id="iwmkj" class="iezug_global">
        <div id="i9ewv" class="container i9ewv_global">
            <div id="ityom" class="col igmf1_global">
                <img id="iplfuok" src="{{ asset('/') }}purplerelaxFiles/ultraradience/logo-2.png" loading="lazy" class="" width="1" height="1">
                <div id="iggnd7"></div>
            </div>
        </div>
    </section>
    <section id="ifg4x" class="iazh5z_global">
        <div id="iprrd3" class="container iprrd3_global">
            <div id="iv4nx" class="col ind5a6_global">
                <div id="io83g83">Omogućite svojoj koži profesionalni tretman svetlosnom i EMS terapijom bez salonskih cena</div>
                <div id="i8rur0g">Poboljšajte negu svoje kože i zadovoljite estetske potrebe za samo 10 minuta dnevno</div>
            </div>
        </div>
    </section>
    <section id="i6qku" class="iamdfz_global">
        <div id="in0q6j" class="container in0q6j_global">
            <div id="i6ckg" class="col ixbgj2_global">
                <div id="i5zdbcs" class="widget-slider i5zdbcs_global">
                    <div id="ifmfp9w" class="js-slider main-wrapper">
                        {{--<button id="isotnq9" class="slick-prev slick-arrow">--}}
                            {{--<img alt="" id="ige4td" src="{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-left.png" class="" width="1" height="1">--}}
                        {{--</button>--}}
                        <div id="ixk4smx" class="ixk4smx_global">
                            <div id="iw44jiz" class="slick main-slider">
                                <div id="ivedno1" class="slide-item">
                                    <div id="iei8w" class="slide-inner">
                                        <div id="icmme" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider1.png.webp" type="image/webp">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider1.png" type="image/png">
                                                <img alt="" srcsets="{{ asset('/') }}purplerelaxFiles/ultraradience/slider1.png" id="i7tml" src="{{ asset('/') }}purplerelaxFiles/ultraradience/slider1.png" class="img-view" width="764" height="415">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div id="i9xighf" class="slide-item">
                                    <div id="ix79til" class="slide-inner">
                                        <div id="ivyzi3g" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider2.png.webp" type="image/webp">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider2.png" type="image/png">
                                                <img alt="" id="i75vvns" src="{{ asset('/') }}purplerelaxFiles/ultraradience/slider2.png" class="img-view" width="793" height="411">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div id="iqf3bv1" class="slide-item">
                                    <div id="im6euhp" class="slide-inner">
                                        <div id="ii6nn32" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider3.png.webp" type="image/webp">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider3.png" type="image/png">
                                                <img alt="" id="iezrgp3" src="{{ asset('/') }}purplerelaxFiles/ultraradience/slider3.png" class="img-view" width="824" height="418">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div id="irfd9ut" class="slide-item">
                                    <div id="ix7nhez" class="slide-inner">
                                        <div id="iosam9o" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source data-srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider4.png.webp" type="image/webp">
                                                <source data-srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/slider4.png" type="image/png">
                                                <img alt="" id="i9hniwq" src="{{ asset('/') }}purplerelaxFiles/ultraradience/slider4.png?t=20210811T04152158" class="img-view" width="942" height="504">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div id="ik03i7p" class="slide-item">
                                    <div id="ifimgl1" class="slide-inner">
                                        <div id="in9xofr" class="slide-thumb">
                                            <img alt="" id="id0kdz4" src="{{ asset('/') }}purplerelaxFiles/ultraradience/large_image1.jpg" class="img-view" width="1" height="1">
                                        </div>
                                    </div>
                                </div>
                                <div id="iqpxhfg" class="slide-item">
                                    <div id="i527nfe" class="slide-inner">
                                        <div id="ijuabio" class="slide-thumb">
                                            <img alt="" id="ivh5ka2" src="{{ asset('/') }}purplerelaxFiles/ultraradience/large_image2.jpg" class="img-view" width="1" height="1">
                                        </div>
                                    </div>
                                </div>
                                <div id="i02t1ch" class="slide-item">
                                    <div id="i1fce" class="slide-inner">
                                        <div id="ir7iq" class="slide-thumb">
                                            <img alt="" id="i0ezt" src="{{ asset('/') }}purplerelaxFiles/ultraradience/large_image3.jpg" class="img-view" width="1" height="1">
                                        </div>
                                    </div>
                                </div>
                                <div id="it3cix3" class="slide-item">
                                    <div id="i5h22" class="slide-inner">
                                        <div id="i7pp8" class="slide-thumb">
                                            <img alt="" id="ihmw1" src="{{ asset('/') }}purplerelaxFiles/ultraradience/large_image4.jpg" class="img-view" width="1" height="1">
                                        </div>
                                    </div>
                                </div>
                                <div id="idbrtot" class="slide-item">
                                    <div id="in6ne1x" class="slide-inner">
                                        <div id="igq2hff" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/1.jpg.webp" type="image/webp">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/1.jpg" type="image/jpeg">
                                                <img alt="" id="irplylg" src="{{ asset('/') }}purplerelaxFiles/ultraradience/1.jpg" class="img-view" width="457" height="274">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div id="idlugwm" class="slide-item">
                                    <div id="iadov" class="slide-inner">
                                        <div id="ijanc" class="slide-thumb">
                                            <picture class="ctr-generated">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/2.jpg.webp" type="image/webp">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/2.jpg" type="image/jpeg">
                                                <img alt="" id="i092s" src="{{ asset('/') }}purplerelaxFiles/ultraradience/2.jpg" class="img-view" width="457" height="274">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<button id="i2886lh" class="slick-next slick-arrow">--}}
                            {{--<img alt="" id="ib9ko9" src="{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-right.png" class="" width="1" height="1">--}}
                        {{--</button>--}}
                    </div>
                </div>
                <a ctr-type-link="external" anchor="#i5raub" href="#" id="i5qgpw3" title="ULTRARADIANCE" data-anim-repeat class="animated--hover infinite">
                    <div id="igjlurn">PORUČI SADA!</div>
                </a>
            </div>
            <div id="ilbraj" class="col ilbraj_global">
                <div id="i31x5g">ULTRARADIANCE je profesionalni proizvod za negu kože koji posle određenog vremenskog perioda korišćenja dovodi do "WOW" efekta.
                    Možda ste čuli za svetlosnu i EMS terapiju koja se koristi u salonima, ali svaka sesija može da košta i na hiljade dinara i za najbolje rezultate obično se preporučuje više tretmana. <span id="i3yn6td">Ko za to ima vremena ili novca?</span></div>
                <div id="iafskk5">Učinite najbolje za svoje lice uz <span id="id95s52">ULTRARADIANCE</span>. Sistem svetlosnih talasa i elektro stimulacije siguran je i jednostavan za kućnu upotrebu.
                    Ovaj inovativni uređaj napravljen je za sve probleme i tipove kože. Koža može izgledati besprekorno tokom cele godine.
                    Suve zime i vlažna leta, ša čak ni starenje vas neće sprečiti da izgledate fenomenalno.</div>
                <div id="i9w2brx">Regenerišite i podmladite kožu!</div>
                <div id="ihk1cr7" class="ihk1cr7_global">
                    <div id="iq4zk8g" class="iq4zk8g_global">
                        <img id="igmtgc9" src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_1.png"   width="1" height="1">
                        <div id="iklokt4">Sigurno za sve tipove kože</div>
                        <div id="iin75di">Za razliku od laserske terapije, svetlosna terapija je manje izvazivna i sigurna za kućne tretmane.
                            Odaberite intenzitet koji je najbolji za vašu kožu i radite svojim tempom.</div>
                    </div>
                    <div id="iqyk5rg" class="iqyk5rg_global">
                        <img id="i8u9hrp" src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_2.png"   width="1" height="1">
                        <div id="iq0rzax">Radi u sesijama od 10 minuta</div>
                        <div id="i0y6vbi">
                            Potrebno je 10 minuta,
                            <div id="ix3e8lq">3-5 puta nedeljno da postignete željeni cilj. ULTRARADIANCE ima sigurnosnu funkciju koja će isključiti uređaj nakon 10 minuta, dajući koži vremena za regeneraciju i upijanje proizvoda.</div>
                        </div>
                    </div>
                    <div id="ivul6bl" class="ivul6bl_global">
                        <img id="i52anfp" src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_3.png"   width="1" height="1">
                        <div id="ivzwct9">Lepa koža lica bez plaćanja skupih tretmana</div>
                        <div id="i8yocpb">
                            Zavisno od vaših ciljeva koje želite da postignete, svetlosna terapija može koštati i na hiljade EUR u salonima ili klinikama.
                            Sesije mogu trajati mesecima ili čak godinama. Zašto ne tretirati kožu iz udobnosti svog doma za samo mali delić te cene?
                            <div id="i4pmpon"></div>
                            <div id="igwnzn7"></div>
                        </div>
                    </div>
                    <div id="iqwifem" class="iqwifem_global">
                        <img id="iadvd9c" src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_4.png"   width="1" height="1">
                        <div id="ici6uoi">Povećava učinkovitost proizvoda za kožu</div>
                        <div id="i49jw19">Neke kreme i losioni pokazuju rezultate nakon 2 do 4 meseca kontinuirane upotrebe. Dok se pojave minimalni rezultati,
                            vreme je da kupite drugu ili treću bočicu. Svetlosna terapija omogućava sastojcima da prodru u kožu, tako da će vaši omiljeni losioni i kreme postizati maksimalne rezultate.</div>
                    </div>
                    <div id="isucozn" class="isucozn_global">
                        <img id="ipzfa09"  src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_5.png"   width="1" height="1">
                        <div id="izgqsue">Odaberite vlastiti svetlosni tretman</div>
                        <div id="isk46fl">Pogodno za sve tipove kože! <span id="ixn2y8f">CRVENA</span> će zategnuti lice i povećati nivo kolagena, <span id="irojx3b">ZELENA</span> izjednačava ton kože, <span id="iqajnqk">ŽUTA</span> posvetljuje dosadne fleke na licu, <span id="ixn2y8f">PINK</span> daje svežinu i sjaj, a <span id="iuh6mhm">FLASH</span> osvetljenje će pospešiti
                            apsorbovanje kozmetičkih proizvoda u kožu lica.</div>
                    </div>
                    <div id="imnsvc1" class="imnsvc1_global">
                        <img id="i16e8ll"  src="{{ asset('/') }}purplerelaxFiles/ultraradience/icon_6.png"   width="1" height="1">
                        <div id="ick7v5g">Poručite i osetite NAJBOLJI efekat</div>
                        <div id="i4xevef">Započnite svoje putovanje do bolje kože uz ULTRARADIANCE. Nema potrebe skrivati se ispod šminke ili gubiti novac na proizvode koji
                            jako sporo daju efekat. Konačno možete izgledati i osećati se najbolje bez mnogo muke!</div>
                    </div>
                </div>
                <div id="i5buixx" class="i5buixx_global">
                    <div id="ij9s7pi" class="ij9s7pi_global">
                        <div id="i8t17ly" class="i8t17ly_global"></div>
                        <div id="ih3498b" class="ih3498b_global">
                            <div id="iz80pfg"><span id="i2963z9">Sigurno za sve tipove kože</span> – Za razliku od laserske terapije, svetlosna terapija je manje izvazivna i sigurna za kućne tretmane.
                                Odaberite intenzitet koji je najbolji za vašu kožu i radite svojim tempom.</div>
                        </div>
                    </div>
                    <div id="i9rcj85" class="i9rcj85_global">
                        <div id="i7aj1gq" class="i7aj1gq_global"></div>
                        <div id="ihnw8ju" class="ihnw8ju_global">
                            <div id="ivhl7pw"><span id="i99jtbg">Radi u sesijama od 10 minuta</span> – Potrebno je 10 minuta, 3-5 puta nedeljno da postignete željeni cilj.
                                ULTRARADIANCE ima sigurnosnu funkciju koja će isključiti uređaj nakon 10 minuta, dajući koži vremena za regeneraciju i upijanje proizvoda.</div>
                        </div>
                    </div>
                    <div id="iso8asb" class="iso8asb_global">
                        <div id="i2txopo" class="i2txopo_global"></div>
                        <div id="irkpdq8" class="irkpdq8_global">
                            <div id="iiubbpe"><span id="izf7bgn">Lepa koža lica bez plaćanja skupih tretmana</span> – Zavisno od vaših ciljeva koje želite da postignete, svetlosna terapija može koštati i na hiljade EUR u salonima ili klinikama.
                                Sesije mogu trajati mesecima ili čak godinama. Zašto ne tretirati kožu iz udobnosti svog doma za samo mali delić te cene?</div>
                        </div>
                    </div>
                    <div id="i0qacc7" class="i0qacc7_global">
                        <div id="i7941mj" class="i7941mj_global"></div>
                        <div id="i2damnz" class="i2damnz_global">
                            <div id="icieajl"><span id="ixwu0gg">Povećava učinkovitost proizvoda za kožu</span> – Neke kreme i losioni pokazuju rezultate nakon 2 do 4 meseca kontinuirane upotrebe. Dok se pojave minimalni rezultati,
                                vreme je da kupite drugu ili treću bočicu. Svetlosna terapija omogućava sastojcima da prodru u kožu, tako da će vaši omiljeni losioni i kreme postizati maksimalne rezultate.</div>
                        </div>
                    </div>
                    <div id="ihzov6f" class="ihzov6f_global">
                        <div id="igp30if" class="igp30if_global"></div>
                        <div id="ilifdyd" class="ilifdyd_global">
                            <div id="iuwz16k"><span id="imyh5bx">Odaberite vlastiti svetlosni tretman</span> – Pogodno za sve tipove kože! <span id="i1td4kk">CRVENA</span> će zategnuti lice i povećati nivo kolagena, <span id="is7lh1i">ZELENA</span> izjednačava ton kože, <span id="i1rmk3x">ŽUTA</span> posvetljuje dosadne fleke na licu, <span id="i4il46f">PINK</span> daje svežinu i sjaj, a <span id="i5luv0x">FLASH</span> osvetljenje će pospešiti
                                apsorbovanje kozmetičkih proizvoda u kožu lica.</div>
                        </div>
                    </div>
                    <div id="ia4w2e7" class="ia4w2e7_global">
                        <div id="ihkd43b" class="ihkd43b_global"></div>
                        <div id="irwz8k9" class="irwz8k9_global">
                            <div id="iquyh8i"><span id="is3wadf">Poručite i osetite NAJBOLJI efekat</span> – Započnite svoje putovanje do bolje kože uz ULTRARADIANCE. Nema potrebe skrivati se ispod šminke ili gubiti novac na proizvode koji
                                jako sporo daju efekat. Konačno možete izgledati i osećati se najbolje bez mnogo muke!</div>
                        </div>
                    </div>
                </div>
                <a id="i5a67j" anchor="#i5raub" href="#" title="ULTRARADIANCE"  class="animated--hover infinite">
                    <div id="i54sxc">PORUČITE ODMAH!</div>
                </a>
            </div>
        </div>
    </section>
    <div param-control="comment=0" id="iqbf81e" class="iqbf81e_global">
        <div id="i9253" class="container i9253_global">
            <div id="i8pph2" class="col i5uec_global comment">
                <div id="ih42gg">Evo zašto kupci veruju ULTRARADIANCE proizvodu</div>
                <div id="i6l8cuk" class="i6l8cuk_global">
                    <div id="i2he9so" class="widget-slider i2he9so_global">
                        <div id="ifvkdaw" class="js-slider main-wrapper">
                            {{--<button id="i24es1k" class="slick-prev slick-arrow">--}}
                                {{--<img alt="" id="ikhbqi" src="{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-left.png"  width="1" height="1">--}}
                            {{--</button>--}}
                            <div id="ixa8z2k" class="slick main-slider">
                                <div id="i6dbvf2" class="slide-item">
                                    <div id="ibvkhc3" class="slide-inner">
                                        <div id="ij6ky1a" class="slide-thumb">
                                            <picture class="">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png" media="(max-width:767px)">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png">
                                                <img alt="" id="ip696wr" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  class="img-view " width="1" height="1">
                                            </picture>
                                        </div>
                                        <div id="i1sqey6" class="slide-content i1sqey6_global">
                                            <div id="i6a64vl">Sigurno i bezbolno!</div>
                                            <div id="ikobo74">Pokušala sam sve za svoju kožu, ali često mi je samo ostavljavljalo crveno i iziritirano lice. Pokušala sam čak i svetlosnu terapiju u salonu, ali tretman je bio toliko skup da sam
                                                morala da odustanem. Ovaj uređaj mi omogućava da izaberem odgovarajući tretman i potpuno prija mojoj koži.</div>
                                            <div id="ixzyhtf">Jelena P. - Paraćin</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ivnvvrv" class="slide-item">
                                    <div id="iauxw4i" class="slide-inner">
                                        <div id="i87pw8f" class="slide-thumb">
                                            <picture class="">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png" media="(max-width:767px)">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png">
                                                <img alt="" id="i73hmyr" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  class="img-view " width="1" height="1">
                                            </picture>
                                        </div>
                                        <div id="iqocz0l" class="slide-content iqocz0l_global">
                                            <div id="iof4f55">Izgledam i osećam se 10 godina mlađe</div>
                                            <div id="it5qfew">Ovo je daleko najbolji tretman protiv starenja koji sam ikada koristila. Ukombinaciji sa mojim omiljenim serumima deluje čarobno. Čak su i svi moji prijatelji primetili razliku i poboljšanje.</div>
                                            <div id="i5586in">Ana R. - Beograd</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="in90l47" class="slide-item">
                                    <div id="inrs3k4" class="slide-inner">
                                        <div id="iy1qgob" class="slide-thumb">
                                            <picture class="">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png" media="(max-width:767px)">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png">
                                                <img alt="" id="itmyhmj" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  class="img-view " width="1" height="1">
                                            </picture>
                                        </div>
                                        <div id="irn03py" class="slide-content irn03py_global">
                                            <div id="inv3q4v">Jednostavan za korišćenje</div>
                                            <div id="i4ympm8">10 minuta i to je to! Nisam mogla verovati da sve što moram učiniti je koristiti ovaj proizvod 10 minuta dnevno. Mislila sam da neće imati neki poseban efekat ali se ispostavilo potpuno suprotno.
                                                Proizvod je kvalitetan i sve je kako piše.</div>
                                            <div id="ie9g248">Bojana M. - Valjevo</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ide0n2l" class="slide-item">
                                    <div id="ihndhn3" class="slide-inner">
                                        <div id="ilsuck3" class="slide-thumb">
                                            <picture class="">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png" media="(max-width:767px)">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png">
                                                <img alt="" id="ijtbw9j" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  class="img-view " width="1" height="1">
                                            </picture>
                                        </div>
                                        <div id="i4lmllg" class="slide-content i4lmllg_global">
                                            <div id="io8zgk5">Povoljno i isplativo</div>
                                            <div id="ir1eldt">Davala sam ogromne iznose novca za tretmane lica! Zbog visokih troškova morala sam da prekinem i potražim drugo rešenje. Ovo je čudesan proizvod koji štedi mnogo mog novca i vremena! </div>
                                            <div id="irpb7iw">Jelena V. - Subotica</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="i6p70r2" class="slide-item">
                                    <div id="irimx6t" class="slide-inner">
                                        <div id="i5jgpkh" class="slide-thumb">
                                            <picture class="">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png" media="(max-width:767px)">
                                                <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png" type="image/png">
                                                <img alt="" id="i029b1k" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  class="img-view " width="1" height="1">
                                            </picture>
                                        </div>
                                        <div id="i22iyko" class="slide-content i22iyko_global">
                                            <div id="iocmvzj">Vraćam svoje samopouzdanje!</div>
                                            <div id="iv0hrz8">Nekada sam mrzela svoju kožu. Imala sam strašne akne i mnogo ožiljaka. Korišćenje šminke mi je samo pogoršavalo stvari. Koristim ovaj uređaj već nekoliko meseci i osećam se kao potpuno nova osoba.</div>
                                            <div id="iytmwco">Tamara G. - Surdulica</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<button id="iv2uoti" class="slick-next slick-arrow">--}}
                                {{--<img alt="" id="ij7yto" src="{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-right.png"  width="1" height="1">--}}
                            {{--</button>--}}
                        </div>
                    </div>
                </div>
                <div id="ipq5dj2" class="ipq5dj2_global">
                    <div id="iccmsrw" class="iccmsrw_global">
                        <picture class="">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/aquare-screenshot-drive.google.com-2021.07.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/aquare-screenshot-drive.google.com-2021.07.jpg" type="image/jpeg">
                            <img id="iyuaysw" src="{{ asset('/') }}purplerelaxFiles/ultraradience/aquare-screenshot-drive.google.com-2021.07.jpg"  width="378" height="378">
                        </picture>
                    </div>
                    <div id="i1syi7r" class="i1syi7r_global">
                        <img id="ic0yj2k" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"  width="1" height="1">
                        <div id="id2y9fi">Jelena P. - Paraćin</div>
                    </div>
                    <div id="i116ojw" class="i116ojw_global">
                        <div id="izosxuh">Sigurno i bezbolno!</div>
                        <div id="ijrtmxr">Pokušala sam sve za svoju kožu, ali često mi je samo ostavljavljalo crveno i iziritirano lice. Pokušala sam čak i svetlosnu terapiju u salonu, ali tretman je bio toliko skup da sam
                            morala da odustanem. Ovaj uređaj mi omogućava da izaberem odgovarajući tretman i potpuno prija mojoj koži.</div>
                    </div>
                </div>
                <div id="ivbomoq" class="ivbomoq_global">
                    <div id="iywjnjl" class="iywjnjl_global">
                        <img id="isrd5ye" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"   width="1" height="1">
                        <div id="ig7eumb">Ana R. - Beograd</div>
                    </div>
                    <div id="iyicfp1" class="iyicfp1_global">
                        <div id="ie348nq">Izgledam i osećam se 10 godina mlađe</div>
                        <div id="i8u6lkh">Ovo je daleko najbolji tretman protiv starenja koji sam ikada koristila. Ukombinaciji sa mojim omiljenim serumima deluje čarobno. Čak su i svi moji prijatelji primetili razliku i poboljšanje.</div>
                    </div>
                    <div id="ixny1zv" class="ixny1zv_global">
                        <picture class="">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.jpg" type="image/jpeg">
                            <img id="iaspa28" src="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.jpg"   width="344" height="343">
                        </picture>
                    </div>
                </div>
                <div id="iajdq6k" class="iajdq6k_global">
                    <div id="iepjm8j" class="iepjm8j_global">
                        <picture class="">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.07.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.07.jpg" type="image/jpeg">
                            <img id="iwb2kvc"  src="{{ asset('/') }}purplerelaxFiles/ultraradience/square-screenshot-drive.google.com-2021.07.jpg"   width="343" height="343">
                        </picture>
                    </div>
                    <div id="it8076l" class="it8076l_global">
                        <img id="iihnhcj" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"   width="1" height="1">
                        <div id="ispg39j">Bojana M. - Valjevo</div>
                    </div>
                    <div id="il0irtd" class="il0irtd_global">
                        <div id="idogu0h">Jednostavan za korišćenje</div>
                        <div id="isara4x">10 minuta i to je to! Nisam mogla verovati da sve što moram učiniti je koristiti ovaj proizvod 10 minuta dnevno. Mislila sam da neće imati neki poseban efekat ali se ispostavilo potpuno suprotno.
                            Proizvod je kvalitetan i sve je kako piše.</div>
                    </div>
                </div>
                <div id="io7slji" class="io7slji_global">
                    <div id="i3eq7p8" class="i3eq7p8_global">
                        <img id="idt80m5" src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"   width="1" height="1">
                        <div id="io7cnx1">Jelena V. - Subotica</div>
                    </div>
                    <div id="i4t3y64" class="i4t3y64_global">
                        <div id="iw0z5vl">Povoljno i isplativo</div>
                        <div id="i1phm9i">Davala sam ogromne iznose novca za tretmane lica! Zbog visokih troškova morala sam da prekinem i potražim drugo rešenje. Ovo je čudesan proizvod koji štedi mnogo mog novca i vremena! </div>
                    </div>
                    <div id="im8648y" class="im8648y_global">
                        <picture class="">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/review2.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/review2.jpg" type="image/jpeg">
                            <img id="iatjpu6" src="{{ asset('/') }}purplerelaxFiles/ultraradience/review2.jpg"   width="150" height="150">
                        </picture>
                    </div>
                </div>
                <div id="ihke43k" class="ihke43k_global">
                    <div id="iwor6as" class="iwor6as_global">
                        <picture class="">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/sq-screenshot-drive.google.com-2021.07.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/ultraradience/sq-screenshot-drive.google.com-2021.07.jpg" type="image/jpeg">
                            <img id="ibuavsk" src="{{ asset('/') }}purplerelaxFiles/ultraradience/sq-screenshot-drive.google.com-2021.07.jpg"   width="397" height="397">
                        </picture>
                    </div>
                    <div id="io5vkcf" class="io5vkcf_global">
                        <img id="i1yvwkw"  src="{{ asset('/') }}purplerelaxFiles/ultraradience/stars.png"   width="1" height="1">
                        <div id="irg3uwr">Tamara G. - Surdulica</div>
                    </div>
                    <div id="ihqdlnj" class="ihqdlnj_global">
                        <div id="iw5rcle">Vraćam svoje samopouzdanje!</div>
                        <div id="iz4q7dt">Nekada sam mrzela svoju kožu. Imala sam strašne akne i mnogo ožiljaka. Korišćenje šminke mi je samo pogoršavalo stvari. Koristim ovaj uređaj već nekoliko meseci i osećam se kao potpuno nova osoba.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{$orderRoute}}" method="POST">
        {{ csrf_field() }}
        @include('lander.naturapharm.components.form_hidden_fields')
        <section id="i72g2g" class="i05iy8_global">
        <div id="i9mxlk" class="container i9mxlk_global">
            <div id="ioa0ce" class="col i9sb9l_global">
                <div id="i5raub" title="product-list-title">
                    <div id="i65pdt7">Otkrijte kožu kakvu ste oduvek želeli!</div>
                </div>
                <div id="is872n">Neka vaša prava lepota zablista!</div>
                <div id="iepevu" class="list js-list iepevu_global">
                    <div data-id="{{$prices[1]['quantity']}}" id="i2vr14" class="list-item js-list-item item-1">
                        <div id="iwxwrk">Discovery Package</div>
                        <div id="ikacydb" class="ikacydb_global">
                            <div id="ik4yrt" class="list-item__input list-item__input--checkbox item-check">
                                <input type="radio" name="product" id="isrn4x">
                            </div>
                            <div id="i9d7lf" class="list-item__content">
                                <div id="ig01xo" class="ig01xo_global">
                                    <h3 id="i351b6">
                                        <div id="i92ru14">Discovery Package</div>
                                        <div id="ixheew" class="title js-title">1 ULTRARADIANCE</div>
                                        <div id="invkuw" class="list-item__thumb">
                                            <img alt="" id="i1nqpg" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_1.png" class="product-img " width="1" height="1">
                                            <div id="i14h67" class="coupon-text"><span id="ic3g4z" class="js-coupon-text"></span></div>
                                        </div>
                                        <p id="ieq6h4w" class="title js-title"><b id="ifgksj"></b>
                                    </h3>
                                    <div id="ibr4sa" class="discount-price"><span id="itrik9" class="js-discount-price">{{$prices[1]['amount']}} RSD</span></div>
                                </div>
                                <div id="it0hhdk" class="it0hhdk_global mobile-group">
                                    <div id="iwaw1rb" class="iwaw1rb_global">
                                        <img id="ijsr05k" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_1_mb.png"  width="1" height="1"></div>
                                    <div id="ididq6v" class="ididq6v_global">
                                        <div id="iibq0lu" class="title js-title">1 ULTRARADIANCE</div>
                                        <div id="i5wro1i"></div>
                                        <div id="irakyuu">SAMO</div>
                                        <div id="iakxm4r" class="js-unitDiscountRates"><b>{{$prices[1]['amount']}} RSD</b></div>
                                        {{--<div id="iaywr1o" class="list-item__footer text-center">--}}
                                            {{--<div id="iv8hb8x" class="list-item__prices">--}}
                                                {{--<div id="i8ut9hi" class="retail-price">Stara cena <span id="i3magfl" class="js-retail-price">{{$prices[1]['originalPrice']}} RSD</span></div>--}}
                                            {{--</div>--}}
                                            {{--<div id="ix8slh8">Uštedi</div>--}}
                                            {{--<div id="iczkzqh" class="js-save-price">{{$prices[1]['originalPrice']-$prices[1]['amount']}} RSD</div>--}}
                                            {{--<div id="itinqw4"></div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div id="ihzectc" class="list-item__footer">
                                    <div id="i89bkn4" class="list-item__thumb">
                                        <div id="ines5o9" class="coupon-text"><span id="iw8c6ki" class="js-coupon-text"></span></div>
                                    </div>
                                    {{--<div id="ir2987h" class="list-item__prices">--}}
                                        {{--<div id="irqpaji" class="retail-price"><span id="ihube4r">Stara cena</span> <span id="ivhh765" class="js-retail-price">{{$prices[1]['originalPrice']}} RSD</span></div>--}}
                                    {{--</div>--}}
                                    {{--<br>--}}
                                    {{--<div id="iwvew0e">Uštedi</div>--}}
                                    {{--<div id="ie4lkem" class="js-save-price">{{$prices[1]['originalPrice']-$prices[1]['amount']}} RSD</div>--}}
                                    {{--<div id="ip2vxal"></div>--}}
                                </div>
                                <div id="ias1ntk"></div>
                                <div id="iiz6gg" title="ULTRARADIANCE"  class="iiz6gg_global order-btn animated--hover infinite">
                                    <div id="i0fr19"  class="animated--hover infinite">IZABERI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-id="{{$prices[2]['quantity']}}" id="i6ocfb" class="list-item js-list-item item-2 hello-123 list-item--checked">
                        <div id="i8xwci">NAJPOPULARNIJE</div>
                        <div id="i50bqjp" class="i50bqjp_global">
                            <div id="ixkx39" class="list-item__input list-item__input--checkbox item-check"><input type="radio" name="product" checked id="ixx6rg"></div>
                            <div id="ibhuhw" class="list-item__content">
                                <div id="inye6e1">NAJPOPULARNIJE</div>
                                <h3 id="i9mqv4"></h3>
                                <div id="imovkus" class="imovkus_global text-center">
                                    <div id="iqr8eg" class="title js-title">2 ULTRARADIANCE</div>
                                    <img alt="" id="ivvd8f" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_2.png" class="product-img " width="1" height="1">
                                    <div id="igwp2i">BESPLATNA DOSTAVA</div>
                                    <div id="iwjnwxs">SAMO</div>
                                    <span id="ins8xj">{{$prices[2]['amount']}}</span>
                                    <div id="iwmtgzb" class="js-unitDiscountRates"><b>{{$prices[2]['amount']}}</b></div>
                                    <div id="ik4k3ji"><b>RSD</b></div>
                                    <div id="iqnrxbj" class="list-item__footer">
                                        <div id="iea0rxl" class="list-item__thumb">
                                            <div id="izoldnm" class="coupon-text"><span id="i0tmt7f" class="js-coupon-text"></span></div>
                                        </div>
                                        <div id="ipnjbuq" class="list-item__prices">
                                            <div id="i0ppfg4" class="retail-price"><span id="iih0bv9">Stara cena</span> <span id="io0z4p3" class="js-retail-price">{{$prices[2]['originalPrice']}} RSD</span></div>
                                        </div>
                                        <br>
                                        <div id="ixkrrzx">Uštedi</div>
                                        <div id="ixezvz9" class="js-save-price">{{$prices[2]['originalPrice']-$prices[2]['amount']+300}} RSD</div>
                                        <div id="irfm5yx"></div>
                                    </div>
                                    <div id="ij98pp1"></div>
                                    <div id="i5df6wg">100% Satisfaction Guarantee</div>
                                </div>
                                <div id="in50rue" class="in50rue_global mobile-group">
                                    <div id="i7zt38a" class="i7zt38a_global">
                                        <img id="iecmbdb" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_2_mb.png"  width="1" height="1">
                                    </div>
                                    <div id="ismrb62" class="ismrb62_global">
                                        <div id="ieksr1k" class="title js-title">2 ULTRARADIANCE</div>
                                        <div id="ihohc6a">BESPLATNA DOSTAVA</div>
                                        <div id="ijon0mn">SAMO</div>
                                        <div id="ibhg87d" class="js-unitDiscountRates"><b>{{$prices[2]['amount']}}</b></div>
                                        <div id="ivt9o7g"><b>RSD</b></div>
                                        <div id="i2rixqy" class="list-item__footer text-center">
                                            <div id="i47h73p" class="list-item__prices">
                                                <div id="ib3489i" class="retail-price">Stara cena <span id="ibnemyg" class="js-retail-price">{{$prices[2]['originalPrice']}} RSD</span></div>
                                            </div>
                                            <div id="ijihfz5">Uštedi</div>
                                            <div id="iuxk0an" class="js-save-price">{{$prices[2]['originalPrice']-$prices[2]['amount']+300}} RSD</div>
                                            <div id="i4e11ry"></div>
                                        </div>
                                        <div id="ig0e9lq"></div>
                                    </div>
                                </div>
                                <div id="ikaq72" title="ULTRARADIANCE"  class="ikaq72_global order-btn animated--hover infinite">
                                    <div id="i4g6zn">IZABERI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-id="{{$prices[3]['quantity']}}" id="i2oi2h" class="list-item js-list-item item-3">
                        <div id="i2h02no">NAJBOLJA PONUDA</div>
                        <div id="irlpipr" class="irlpipr_global">
                            <div id="iu0jfb" class="list-item__input list-item__input--checkbox item-check">
                                <input type="radio" name="product" id="i1jyeg">
                            </div>
                            <div id="ipq3fd" class="list-item__content">
                                <div id="iwog7zm">NAJBOLJA PONUDA</div>
                                <div id="ig0ca0t" class="ig0ca0t_global text-center">
                                    <div id="in03dh" class="title js-title">3 ULTRARADIANCE</div>
                                    <img alt="" id="iflxso" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_3.png" class="product-img " width="1" height="1">
                                    <div id="itzada2">40% POPUSTA + BESPLATNA DOSTAVA</div>
                                    <div id="i5w2tcb">SAMO</div>
                                    <span id="irbdex"></span>
                                    <div id="i78xifj" class="js-unitDiscountRates"><b>{{$prices[3]['amount']}}</b></div>
                                    <div id="iloc2bs"><b>RSD</b></div>
                                    <div id="ishzqr1"></div>
                                    <div id="ibgt01" class="list-item__footer">
                                        <div id="i5dtix" class="list-item__thumb">
                                            <div id="icnd2b" class="coupon-text"><span id="ivj0hk" class="js-coupon-text"></span></div>
                                        </div>
                                        <div id="i3ndo5" class="list-item__prices">
                                            <div id="i72g7i" class="retail-price"><span id="i0o5pl">Stara cena</span> <span id="ind9ij" class="js-retail-price">{{$prices[3]['originalPrice']}} RSD</span></div>
                                        </div>
                                        <br>
                                        <div id="iymjwj">Uštedi</div>
                                        <div id="iyxjse" class="js-save-price">{{$prices[3]['originalPrice']-$prices[3]['amount']+300}} RSD</div>
                                        <div id="igc565"></div>
                                    </div>
                                    <div id="iyvuej4"></div>
                                    <div id="ilkn9pt">100% Satisfaction Guarantee</div>
                                </div>
                                <div id="if9ag7z" class="if9ag7z_global mobile-group">
                                    <div id="izp05vs" class="izp05vs_global">
                                        <img id="iysn94h" src="{{ asset('/') }}purplerelaxFiles/ultraradience/offer_3_mb.png"  width="1" height="1">
                                    </div>
                                    <div id="ijx8uns" class="ijx8uns_global">
                                        <div id="iiayfk5" class="title js-title">3 ULTRARADIANCE</div>
                                        <div id="iydokp9">40% POPUSTA + BESPLATNA DOSTAVA</div>
                                        <div id="ie13xab">SAMO</div>
                                        <div id="i8tz6iq" class="js-unitDiscountRates"><b>{{$prices[3]['amount']}}</b></div>
                                        <div id="io0mg9l"><b>RSD</b></div>
                                        <div id="ibrc285" class="list-item__footer text-center">
                                            <div id="igfjpd2" class="list-item__prices">
                                                <div id="isxltde" class="retail-price">Stara cena  <span id="ipesxmk" class="js-retail-price">{{$prices[3]['originalPrice']}} RSD</span></div>
                                            </div>
                                            <div id="ipi8ryu">Uštedi</div>
                                            <div id="ix53oyf" class="js-save-price">{{$prices[3]['originalPrice']-$prices[3]['amount']+300}} RSD</div>
                                            <div id="igespnn"></div>
                                        </div>
                                        <div id="i0wjhf9"></div>
                                    </div>
                                </div>
                                <div id="ify3o7" title="ULTRARADIANCE"  class="ify3o7_global order-btn animated--hover infinite">
                                    <div id="ic09gj"  class="animated--hover infinite">IZABERI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="scroll-form">
        <div class="orderst-form container">
            <div class="step-title js-customer-title">
                <h2 class="title">
                    <strong>Podaci za dostavu</strong>
                </h2>
            </div>
            <div class="widget-customer-form">
                <div class="full-name">
                    <div class="form-group">
                        <input id="customer_firstname" value="{{ old('name') }}" name="name" class="shipping-firstname" type="text" maxlength="30" placeholder="Ime i prezime" required="">
                    </div>
                </div>
                <div class="form-group form-group--email">
                    <input id="customer_email" value="{{ old('email') }}" name="email" class="customer-email" type="email" maxlength="200" placeholder="Email adresa" required="" type="email">
                </div>
                <div class="form-group form-group--phone">
                    <input id="customer_phone" value="{{ old('phone') }}" name="phone" class="customer-phone" type="tel" maxlength="20" placeholder="Broj telefona" required="">
                </div>
            </div>
            <div class="widget-shipping-form ">
                <div class="form-group">
                    <input id="shipping_address" value="{{ old('shipping_address') }}" name="shipping_address" class="shipping-address" type="text" maxlength="80" placeholder="Ulica i broj" required="">
                </div>
                <div class="form-group">
                    <input id="shipping_city" value="{{ old('shipping_city') }}" name="shipping_city" class="shipping-city" type="text" maxlength="30" placeholder="Grad" required="">
                </div>
                <div class="form-group">
                    <input id="shipping_zip" value="{{ old('shipping_zip') }}" name="shipping_zip" class="shipping-postal" type="text" placeholder="Postanski broj" required="" pattern="\d*" maxlength="5">
                </div>
            </div>
            <div class="form-group">
                <select name="quantity" class="quantity">
                    @foreach($prices as $singlePrice)
                        <option value="{{$singlePrice['quantity']}}">{{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD) @if(!$singlePrice['is_free_shipping']) + DOSTAVA @endif</option>
                    @endforeach
                </select>
            </div>
            <div class="w_button btn-order-now">
                <button type="submit">
                    <span>ZAVRŠI KUPOVINU</span>
                </button>
            </div>
        </div>
    </section>
    </form>
</div>
<style>
    html {
        scroll-behavior: smooth;
    }
    .orderst-form {
        display: none;
        margin-left:auto;
        margin-right:auto;
        margin-bottom: 50px;
    }
    input, select {
        width: 100%;
    }
    select {
        border: 1px solid rgba(0, 0, 0, .2);
        -webkit-border-radius: 3px;
        border-radius: 3px;
        font-size: 16px;
        padding: 15px 18px;
        height: auto;
    }
    .btn-order-now button {
        border-radius: 3px;
        color: #fff;
        font-weight: 700;
        font-size: 16px;
        background-color: #30bd51;
        padding: 18px 5px 17px;
        display: block;
        width: 100%;
        line-height: 1;
        text-transform: uppercase;
        box-shadow: none;
        cursor: pointer;
    }
    .btn-order-now button:hover {
        transform: scale(1);
       opacity: 0.8;
    }

    #ctrwow-accordion {
        display: none;
    }
    @media(max-width:767px){
        .orderst-form {
            padding: 20px;
        }
    }
</style>
<style id="itl03qj">.animated,.animated--hover:hover{animation-duration:1s;animation-fill-mode:both}.animated.infinite,.animated--hover.infinite:hover{animation-iteration-count:infinite}.animated.delay-1s,.animated--hover.deplay-1s:hover{animation-delay:1s}.animated.delay-2s,.animated--hover.deplay-2s:hover{animation-delay:2s}.animated.delay-3s,.animated--hover.deplay-3s:hover{animation-delay:3s}.animated.delay-4s,.animated--hover.deplay-4s:hover{animation-delay:4s}.animated.delay-5s,.animated--hover.deplay-5s:hover{animation-delay:5s}.animated.fast,.animated--hover.fast:hover{animation-duration:800ms}.animated.faster,.animated--hover.faster:hover{animation-duration:500ms}.animated.slow,.animated--hover.slow:hover{animation-duration:2s}.animated.slower,.animated--hover.slower:hover{animation-duration:3s}@media (print),(prefers-reduced-motion:reduce){.animated,.animated--hover:hover{animation-duration:1ms !important;transition-duration:1ms !important;animation-iteration-count:1 !important}}#i5a67j{display:inline-block}</style>
<script src="{{asset('/')}}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function () {

        {{--let previousImgUrl = "{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-left.png";--}}
        {{--let nextImgUrl = "{{ asset('/') }}purplerelaxFiles/ultraradience/chevron-small-right.png";--}}

        $('.slick').slick({
            dots: false,
            infinite: true,
            cssEase: 'linear',
            swipe: true,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '',
            nextArrow: '',
            // nextArrow: '<img alt="" id="ige4td" src="'+ nextImgUrl +'" class="" width="1" height="1">',
            // prevArrow: '<img alt="" id="ib9ko9" src="'+ previousImgUrl +'" class="" width="1" height="1">'
        });



        for (i = 0, len = (items = document.querySelectorAll("#ctrwow-accordion")).length; i < len; i++)
            (function () {
                var a = !1;
                this.addEventListener("click", function (e) {
                    var t = e.target.closest(".accordion__header");
                    t &&
                    (function (e) {
                        !a &&
                        (function (e) {
                            var t = document.querySelector(".js-accordion__item.accordion__item--is-open");
                            if (t) {
                                var n = t.querySelector(".js-tab-focus");
                                n && n != e && n.click();
                            }
                        })(e);
                        var t = "true" === e.getAttribute("aria-expanded"),
                            n = t ? "false" : "true";
                        e.parentNode.classList.toggle("accordion__item--is-open"), e.setAttribute("aria-expanded", n);
                        var r,
                            i,
                            o = e.nextElementSibling;
                        t
                            ? (i = o.querySelectorAll("iframe")).length &&
                            i.forEach(function (e) {
                                var t = e.src;
                                -1 !== t.indexOf("autoPlay=1") && (e.setAttribute("autoPlay", 1), (t = t.replace("autoPlay=1", "autoPlay=0"))), (e.src = t);
                            })
                            : (r = o.querySelectorAll("iframe")).length &&
                            r.forEach(function (e) {
                                var t = e.src;
                                1 == e.getAttribute("autoPlay") && ((t = t.replace("autoPlay=0", "autoPlay=1")), (e.src = t));
                            });
                    })(t);
                });
        }.bind(items[i])());

        for (i = 0, len = (items = document.querySelectorAll("#io1kwf4")).length; i < len; i++)
            (function () {
                var e,
                    t = this,
                    n = [],
                    r = t.getAttribute("url"),
                    i = t.getAttribute("box-title");
                function o(e) {
                    return new RegExp(/({\[(\s|\S)*?\]})/g).test(e);
                }
                if (i && i.length)
                    document.querySelectorAll('[title="' + i + '"]').forEach(function (e) {
                        n.push(e), (e.dataset.title = e.getAttribute("title")), e.removeAttribute("title");
                    });
                else if (o(r) || (r && ((e = r), new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)?/gi).test(e)))) {
                    var a = document.querySelectorAll("a");
                    if (!a.length) return;
                    var s = void 0;
                    for (s = 0; s < a.length; s++) {
                        var c = new RegExp(r, "gi"),
                            l = decodeURI(a[s].href);
                        o(r) && (c = new RegExp(r.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"), "gi")), l.match(c) && !a[s].closest(".sticky-bar") && a[s].hasAttribute("call-to-action") && n.push(a[s]);
                    }
                }
                function d() {
                    n.some(function (e) {
                        return (n = (t = e.getBoundingClientRect()).top), (r = t.bottom), (i = t.width), (o = t.height), (a = window.innerHeight || document.documentElement.clientHeight), (0 < n || 0 < r) && n < a && 0 < i && 0 < o;
                        var t, n, r, i, o, a;
                    })
                        ? !t.classList.contains("hidden") && t.classList.add("hidden")
                        : t.classList.contains("hidden") && t.classList.remove("hidden");
                }
                setTimeout(function () {
                    d();
                    var e = (window["__ctrStickyBarScrollEvent__" + t.id] = d);
                    window.addEventListener("scroll", e);
                }, 500);
            }.bind(items[i])());

        $('.list-item').click(function(){
            let quantity = $(this).attr('data-id');
            $('.quantity').val(quantity);
            $('.list-item').removeClass('list-item--checked');
            $(this).addClass('list-item--checked');
            $('.orderst-form').show();
            $('#io1kwf4').hide();
            function scrollToForm(formHeight) {
                $('html, body').animate({
                    scrollTop: $("#scroll-form").offset().top-formHeight+100
                }, 1);
            }
            if(window.outerWidth < 425) {
                scrollToForm(260);
            } else {
                scrollToForm(780);
            }
        });

        $('.orderst-form').is(':visible',function(){
            if(!$('#io1kwf4').hasClass('hidden')) {
                $('#io1kwf4').addClass('hidden');
            }
        });

        $('#iefp89').click(function() {
            $('#ctrwow-accordion').toggle(0, function () {
                $('html, body').animate({
                    "scrollTop": $('#iefp89').offset().top
                    + $('#ctrwow-accordion').height()
                }, 'fast');
            })
        });

        $('a[href$="#"]').click(function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $($(this).attr("anchor")).offset().top
            }, 'fast');
        });

});
</script>
@include('components.pixel_footer')
</body>
</html>