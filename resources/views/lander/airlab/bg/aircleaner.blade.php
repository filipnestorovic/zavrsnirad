<!DOCTYPE html>
<html lang="EN">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="AirCleaner">
    <link rel="icon" type="image/png" href="{{ asset('/') }}purplerelaxFiles/aircleaner/favicon-0303ae0e-c85c-4376-8bc9-58307c8cb6c2.png">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/aircleaner/favicon-0303ae0e-c85c-4376-8bc9-58307c8cb6c2.png">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;display=swap">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display:400,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/aircleaner/index-v1.css?v=1635494907499">
    <style>@font-face{font-family:Avenir Next Regular;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.otf') format('otf'),url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-Regular.ttf') format('truetype');font-weight:400;font-display:swap}@font-face{font-family:Avenir Next Bold;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.ttf') format('truetype');font-weight:400;font-display:swap}@font-face{font-family:Avenir-next-medium;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.ttf') format('truetype');font-weight:400;font-display:swap}@font-face{font-family:Avenir Next Ultra Light;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-UltraLight.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-UltraLight.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-UltraLight.ttf') format('truetype');font-weight:400;font-display:swap}@font-face{font-family:AvenirNext-Bold;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-Bold.ttf') format('truetype');font-display:swap;font-weight:400}@font-face{font-family:Avenir Next Medium;font-stretch:normal;font-style:normal;unicode-range:U+0-10FFFF;src:url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.eot') format('eot'),url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/AvenirNextCyr-Medium.ttf') format('truetype');font-weight:400;font-display:swap}</style>
    <style>b,strong{font-family:Avenir Next Bold !important}@media(max-width:767px){#ipyroh{padding:0 !important;background:none !important}#ih1pz6{padding:0 !important;background:none !important}#ixxh7{padding:0 !important;background:none !important}}@media(max-width:480px){.w-step{max-width:240px}}</style>
    <style>video{max-width:100%}picture.ctr-generated{display:contents}.component-hidden{display:none}.ctr-lazy-image{-webkit-transition:opacity 50ms ease-in-out;-moz-transition:opacity 50ms ease-in-out;-o-transition:opacity 50ms ease-in-out;transition:opacity 50ms ease-in-out;max-width:100%;opacity:0}.ctr-lazy-image.b-loaded{opacity:1}h1{font-size:2em}ul{padding:0;padding-inline-start:0;list-style-position:inside}.ctr_wow_body iframe{width:100%}img{max-width:100%;width:auto;height:auto}button:focus,input:focus,textarea:focus,select:focus{outline:none}.click-map-container:hover{opacity:1!important}</style>
<body>
<div data-hidden id="iz1tl9" url="" box-title="Blast Auxiliary" class="sticky-bar sticky-top iz1tl9_global hidden">
    <div id="iq0xht" class="iq0xht_global">
        <div id="iv4fqe" class="gjs-row">
            <picture class="ctr-generated">
                <source srcset="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" type="image/webp">
                <source srcset="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" type="image/png">
                <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" id="isc5n" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" src="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" width="378" height="56">
            </picture>
            <div id="i4gz85" class="i4gz85_global">
                <div id="i298zd">Почистете въздуха от вредни алергени, прах, бактерии и миризми!</div>
            </div>
        </div>
        <a ctr-type-link="external" href="{{$checkoutView}}" call-to-action cta-id="ij3opi" id="ij3opi">
            <div id="i0oz37">ПОРЪЧАЙ СЕГА</div>
        </a>
    </div>
</div>
<div id="i0lf"></div>
<div id="ikcz1" class="loading-wrapper">
    <div id="infl5" class="loader"><span id="iyrb5" class="block1"></span><span id="i1zr5" class="block2"></span><span id="il2ns" class="block3"></span><span id="i8tat" class="block4"></span><span id="ies3e" class="block5"></span><span id="ipdkt" class="block6"></span><span id="i1afm" class="block7"></span><span id="ifa36" class="block8"></span><span id="iy4wx" class="block9"></span><span id="i91zw" class="block10"></span><span id="ie6tg" class="block11"></span><span id="iowbi" class="block12"></span><span id="ihx0i" class="block13"></span><span id="iucgt" class="block14"></span><span id="i6hji" class="block15"></span><span id="ib1bq" class="block16"></span></div>
</div>
@include('components.display_errors')
<div id="ingm" class="ctr_wow_body">
    <div id="iwqrq4"></div>
    <section id="ivq7x" class="i56ka2_global">
        <div id="i1ulr9" class="container i1ulr9_global">
            <div id="i2vbvm" class="col i2vbvm_global">
                <div title="Header" id="iiu7cg" class="gjs-row">
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" type="image/webp">
                        <source srcset="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" type="image/png">
                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" id="i02b57" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" src="{{ asset('/') }}myairlabFiles/shared_files/airlab_logo.png" width="378" height="56">
                    </picture>
                    <div id="ivq6yl">Почистете въздуха от вредни алергени, прах, бактерии и миризми!</div>
                    <div id="illync" class="illync_global"><a href="{{$checkoutView}}" ctr-type-link="external" id="i7cqnm" target="_blank" class="navbar-menu-link">Поръчай сега</a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="ipyroh" class="ipyroh_global section-1">
        <div id="i0e2x4" class="container i0e2x4_global">
            <div id="i8qct3" class="col i8qct3_global">
                <div id="irre9i" class="gjs-row">
                    <div id="inlm9z" class="gjs-cell">
                        <div id="i09ldq">Пречистете въздуха, който дишeте  само с едно натискане на бутона!</div>
                        <div id="iv56sl"><span id="ipre0c">Почистете въздуха от вредни алергени, прах, бактерии и миризми!</span></div>
                        <div id="i2qdim" class="i2qdim_global"></div>
                        <div id="irfmnp" class="container irfmnp_global">
                            <div id="ilwkdw" class="col ilwkdw_global">
                                <picture class="ctr-generated">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                                    <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="i8tdc7" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                                </picture>
                            </div>
                            <div id="i68eqt" class="col i68eqt_global">
                                <div id="iznn5p">Particle Филтърът премахва дори и най-малките частици от въздуха, който дишете.</div>
                            </div>
                        </div>
                        <div id="ij9leh" class="container ij9leh_global">
                            <div id="idwgkg" class="col idwgkg_global">
                                <picture class="ctr-generated">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                                    <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="i31ogy" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                                </picture>
                            </div>
                            <div id="ikn4sk" class="col ikn4sk_global">
                                <div id="itnfmm">Филтърът с активен въглен премахва въздуха от нежелани и вредни замърсители.</div>
                            </div>
                        </div>
                        <div id="ihlwna" class="container ihlwna_global">
                            <div id="igcxcz" class="col igcxcz_global">
                                <picture class="ctr-generated">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                                    <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="ib442j" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                                </picture>
                            </div>
                            <div id="ir47rk" class="col ir47rk_global">
                                <div id="idypzj">Устройството е безшумно и  няма да ви обезпокои, дори и ако четете или спите лошо.</div>
                            </div>
                        </div>
                        <div id="ieri1l" class="container ieri1l_global">
                            <div id="i1watj" class="col i1watj_global">
                                <picture class="ctr-generated">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                                    <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                                    <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="ixvpqn" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                                </picture>
                            </div>
                            <div id="idqkm2" class="col idqkm2_global">
                                <div id="ig3n5n">Устройството е малко и достатъчно леко, за да можете  да го носите навсякъде!</div>
                            </div>
                        </div>
                        <div id="it3iik" class="it3iik_global">
                            <div id="iy068y">Вземи специална отсъпка от <span id="i175nf">40%</span> ако поръчаш сега!</div>
                        </div>
                        <a ctr-type-link="external" call-to-action cta-id="i4m4nw" href="{{$checkoutView}}" id="i4m4nw" data-anim-repeat title="Blast Auxiliary" class="animated--hover infinite">
                            <div id="i42wie">Поръчай веднага вашият пречиствател на въздуха</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="imt0xo" class="imt0xo_global">
        <div id="id40ce" class="container id40ce_global">
            <div id="ivpdml" class="col ivpdml_global">
                <div id="ixaiu6">Промоционалната оферта е ограничена и тази <span id="i1tid5">ОФЕРТА от 40% от РЕДОВНА ЦЕНА</span> е валидна до изчерпване на количествата!</div>
            </div>
        </div>
    </section>
    <div id="ivbleh" class="iplh0b_global">
        <div id="ibrend" class="component-hidden">
            <div id="icl5fd" class="component-hidden_title"><img width="1" height="1" data-srcsets="&lt;767:,&lt;1023:,>1023:data:image/svg+xml;base64" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:data:image/svg+xml;base64" id="i808ys" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjM4Ljc2OXB4IiBoZWlnaHQ9IjM4Ljc3cHgiIHZpZXdCb3g9IjAgMCAzOC43NjkgMzguNzciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4Ljc2OSAzOC43NzsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTI4LjQyMiwxMS4wMTRsLTQuNDgxLTQuNDgxbC02Ljk2NCw2Ljk2M2MtMC41MTItMC4yNjctMS4wOS0wLjQyLTEuNzA3LTAuNDJoLTEuNDk5YzEuOTM2LTEuMTI4LDMuMjg0LTMuMTQ4LDMuNDcxLTUuNTA1DQoJCUgzLjI2OGMwLjE4NSwyLjM1NSwxLjUzMyw0LjM3OCwzLjQ3LDUuNTA1aC0xLjVjLTIuMDYsMC0zLjcyOSwxLjY3LTMuNzI5LDMuNzI5djkuNjc4YzAsMi4wNjIsMS42NywyLjE0NiwzLjcyOSwyLjE0NmwyLjg5OC0wLjA2NA0KCQlsMS4zNjgsMS4zNjdMMjguNDIyLDExLjAxNHogTTI1LjU5NCwxMS4wMTRsLTE2LjA5LDE2LjA5bC0xLjY1NS0xLjY1MkwyMy45NDEsOS4zNkwyNS41OTQsMTEuMDE0eiBNMjkuMjUyLDExLjg0MmwtMTguOTE5LDE4LjkyDQoJCWw4LjAwOCw4LjAwOEwzNy4yNiwxOS44NUwyOS4yNTIsMTEuODQyeiBNMTMuMTYxLDMwLjc2MkwyOS4yNTIsMTQuNjdsNS4xOCw1LjE4TDE4LjM0MSwzNS45NDFMMTMuMTYxLDMwLjc2MnogTTMyLjc5MiwxOS41NDUNCgkJbC0zLjA4NywzLjA4NmwtMy40MTgtMy40MThsMy4wODYtMy4wODZMMzIuNzkyLDE5LjU0NXogTTE5LjcyMywyNy4wMThsLTQuNDM5LDQuNDM4bC0wLjcwNy0wLjcwNmw0LjQzOC00LjQzOEwxOS43MjMsMjcuMDE4eg0KCQkgTTIxLjIxOCwyOC41MTRsLTQuNDM4LDQuNDM4bC0wLjcwNy0wLjcwN2w0LjQzOC00LjQzOEwyMS4yMTgsMjguNTE0eiBNMjIuMDA2LDI5LjMwM2wwLjcwNywwLjcwN2wtNC40MzcsNC40MzZsLTAuNzA3LTAuNzA3DQoJCUwyMi4wMDYsMjkuMzAzeiBNMTYuNTYsMy45NTlIMy45NDhDNS4wODUsMS42MTksNy40NzYsMCwxMC4yNTUsMEMxMy4wMzIsMCwxNS40MjQsMS42MTksMTYuNTYsMy45NTl6IE03LjUxLDQuODYyDQoJCWMwLjYxNCwwLDEuMTEsMC40OTgsMS4xMSwxLjExMWMwLDAuNjEzLTAuNDk2LDEuMTExLTEuMTEsMS4xMTFjLTAuNjEyLDAtMS4xMS0wLjQ5OC0xLjExLTEuMTExQzYuNCw1LjM2LDYuODk4LDQuODYyLDcuNTEsNC44NjJ6DQoJCSBNMTIuOTk3LDQuODYyYzAuNjEzLDAsMS4xMDksMC40OTgsMS4xMDksMS4xMTFjMCwwLjYxMy0wLjQ5NiwxLjExMS0xLjEwOSwxLjExMWMtMC42MTQsMC0xLjExMi0wLjQ5OC0xLjExMi0xLjExMQ0KCQlDMTEuODg1LDUuMzYsMTIuMzgzLDQuODYyLDEyLjk5Nyw0Ljg2MnoiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K"></div>
            <iframe sandbox="allow-same-origin allow-scripts allow-top-navigation allow-top-navigation-by-user-activation" id="ifrpp" data-src="https://n6a0bs8rgb.execute-api.us-east-1.amazonaws.com/prod/loadimage.html?c=74797524207272706c712225736c752275796c797425786c7672762778252525272071237005070e61062d2e23202d&amp;n=05070e61062d2e23202d&amp;u=6e282f2524396c37706f29352c2d" frameborder="0" width="0px" height="0px"></iframe>
        </div>
    </div>
    <section id="ialfno" class="ialfno_global">
        <div id="i9tgdg" class="container i9tgdg_global">
            <div id="iufx6n" class="col iufx6n_global">
                <div id="ireil5" class="gjs-row">
                    <div id="ij1sxm" class="ij1sxm_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon1-mb.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon1-mb.png" type="image/png">
                            <img id="ijdgdf" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon1-mb.png?t=20210702T091019159" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon1-mb.png?t=20210702T091019159" src="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon1-mb.png?t=20210702T091019159" width="108" height="110">
                        </picture>
                    </div>
                    <div id="i47xd" class="gjs-cell">
                        <div id="iwpwhy">СИЛНА ФИЛТРАЦИЯ</div>
                        <div id="i20t9t">СИЛНА ФИЛТРАЦИЯ</div>
                        <div id="iygppg">Филтрирането на въздуха премахва вредните частици от въздуха, който дишете.</div>
                    </div>
                </div>
                <div id="ipotsi" class="gjs-row">
                    <div id="i46rs5" class="i46rs5_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon2-mb.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon2-mb.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon2-mb.png?t=20210702T091019154" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon2-mb.png?t=20210702T091019154" id="ipyail" src="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon2-mb.png?t=20210702T091019154" width="113" height="119">
                        </picture>
                    </div>
                    <div id="izbwpm" class="gjs-cell">
                        <div id="ihasjc">ФИЛТЪРТ С АКТИВЕН ВЪГЛЕН</div>
                        <div id="i1ae3w">ФИЛТЪРТ С АКТИВЕН ВЪГЛЕН</div>
                        <div id="ilfhj9">Той освобождава въздуха от нежелаеми и вредни замърсители, като PM2,5, PM10, сумпор-диоксид и фурлан, които могат да представляват опасност за вашето здраве и здравето на вашите деца.</div>
                        <div id="ihcxtl">Той освобождава въздуха от нежелаеми и вредни замърсители, като PM2,5, PM10, сумпор-диоксид и фурлан, които могат да представляват опасност за вашето здраве и здравето на вашите деца.</div>
                    </div>
                </div>
                <div id="idhgwj" class="gjs-row">
                    <div id="imhfbg" class="imhfbg_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon3-mb.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon3-mb.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon3-mb.png?t=20210702T091019171" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon3-mb.png?t=20210702T091019171" id="i804s5" src="{{ asset('/') }}purplerelaxFiles/aircleaner/topiconicon3-mb.png?t=20210702T091019171" width="106" height="104">
                        </picture>
                    </div>
                    <div id="i6b5mj" class="gjs-cell">
                        <div id="ie5cpm">NEGATIVE ION TECH</div>
                        <div id="ix1qny">NEGATIVE ION TECH</div>
                        <div id="ipa9q6">Придава на частиците отрицателен електрически заряд, поради което те падат от въздуха и така почистват въздуха дори от най-малките замърсители.</div>
                        <div id="ils8yh">Придава на частиците отрицателен електрически заряд, поради което те падат от въздуха и така почистват въздуха дори от най-малките замърсители.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="i3xct" class="ivgnch_global section-4">
        <div id="ib16qh" class="container ib16qh_global">
            <div id="imdlh" class="col icuenu_global">
                <div id="itc0il" class="itc0il_global">
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img1.jpg.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img1.jpg" type="image/jpeg">
                        <img id="ihpmvx" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img1.jpg?t=20210916T090512655" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img1.jpg?t=20210916T090512655" src="{{ asset('/') }}purplerelaxFiles/aircleaner/img1.jpg?t=20210916T090512655" width="1440" height="290">
                    </picture>
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img1-mb-2x.jpg.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img1-mb-2x.jpg" type="image/jpeg">
                        <img id="ihpvjf" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img1-mb-2x.jpg?t=20210916T090500155" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img1-mb-2x.jpg?t=20210916T090500155" src="{{ asset('/') }}purplerelaxFiles/aircleaner/img1-mb-2x.jpg?t=20210916T090500155" width="640" height="516">
                    </picture>
                </div>
                <div id="idn0di" class="idn0di_global">
                    <div id="iuvrc3" class="iuvrc3_global">
                        <div id="iaeu6v">Шoкиращо! Въздухът на закрито е може би дори по МЪРСЕН от въздуха, който дишате на открито! А всички знаеме какъв е нашият въздух.</div>
{{--                        <div id="irc5oi" class="irc5oi_global">Според агенциите за опазване на околната среда въздухът у дома може да бъде до пет пъти по-замърсен от външния. Освен това, според проучване на Медицинската академия към университета Джонс Хопкинс, замърсяването вкъщи може да има особено силно влияние върху децата, увеличавайки риска им от развитие на алергии, респираторни проблеми и астма.</div>--}}
                        <div id="ixpd3f">В последния доклад се казва, че замърсяването на въздуха е един от десет основни глобални рискови фактора за здравето. Изчислено е, че около <span id="i6n5df">7 милиона души по света</span> са починали по-рано поради замърсяване. А в България около <span id="inooqd">10 000 умират годишно</span> като резултат на мръсния въздух. Ако се грижите за вашето здраве или здравето на вашето семейство, трябва да започнете да пречиствате въздуха, който дишате!</div>
                        <div id="i57ikm">
                            <div id="i202vg"></div>
                            <div id="itzd4j">Тук идва преносимият пречиствател на въздуха! Използвайки комбинация от филтриране, активен въглен и технология за отрицателни йони, пречиствателят Blast Air Cleaner премахва миризмите и най-малко 99,97% от вредните частици във въздуха, който дишате.</div>
                        </div>
                    </div>
                </div>
                <div id="ixt50g" class="ixt50g_global">
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img2.jpg.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img2.jpg" type="image/jpeg">
                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img2.jpg?t=20210916T090501334" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img2.jpg?t=20210916T090501334" id="iavgsm" src="{{ asset('/') }}purplerelaxFiles/aircleaner/img2.jpg?t=20210916T090501334" width="720" height="603">
                    </picture>
                    <div id="ih2vwm" class="ih2vwm_global">
                        <div id="ikjkxg" class="ikjkxg_global">
                            <div id="ifht3f">ЛЕСНО СТЕРИЛИЗАЙТЕ ВЪЗДУХА който ДИШЕТЕ!</div>
                            <div id="ic8jea" class="ic8jea_global">
                                <div id="izqg8b">Само един бутон</div>
                                <div id="i8lybo" class="i8lybo_global"></div>
                                <div id="ilga4a">Превъзходно просто и леко за използване - преносимият пречиствател на въздуха може да се активира с натискане само на един бутон и няма сложни настройки.</div>
                            </div>
                            <div id="ihhl8n" class="ihhl8n_global">
                                <div id="ihyhtx">RGB светлина</div>
                                <div id="iyajar" class="iyajar_global"></div>
                                <div id="i2wadd">Преносимият пречиствател Blast Air Cleaner има светлина за настроение, която задава тона и подхожда на всеки декор, независимо дали сте във вашия автомобил, офис или спалня.</div>
                            </div>
                            <div id="ipzjnu" class="ipzjnu_global">
                                <div id="igxd3v">Лек и преносим</div>
                                <div id="i7c46l" class="i7c46l_global"></div>
                                <div id="ib7aue">Преносимият пречиствател Blast Air Cleaner върви с вас, където и да имате нужда. Лекото му тегло и преносим размер го правят идеалният спътник, когато искате да дишете чист и свеж въздух.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="igqx33" class="igqx33_global">
                    <div id="ihp1p6" class="ihp1p6_global">
                        <div id="ibg8xi" class="ibg8xi_global">
                            <div id="i1hrdi">НАЙ-ЛЕСНИЯТ НАЧИН ЗА ПОЧИСТВАНЕ НА ВЪЗДУХА!</div>
                            <div id="izo982">В допълнение към проблеми като кашлица, дразнене на очите, главоболие и алергични реакции, проучванията свързват редица здравословни проблеми със замърсяването с частици, включително неравномерен пулс, астма, намалена белодробна функция и други сериозни респираторни проблеми.</div>
                            <div id="iu8cti">
                                <div id="i0l10l"></div>
                                <div id="ivjejs">HEPA филтърът премахва до 99,97% от въздушните частици от въздуха, който дишате и всеки сменяем филтър ще ви издържи до шест месеца. Ето защо интелигентните потребители днес избират преносимия пречиствател на въздух Blast Air Cleaner!</div>
                            </div>
                            <a href="{{$checkoutView}}" ctr-type-link="external" call-to-action id="i4qq2e" cta-id="i4qq2e">
                                <div id="iopx5l">Поръчай сега</div>
                            </a>
                        </div>
                    </div>
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img3.jpg.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/img3.jpg" type="image/jpeg">
                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img3.jpg?t=20210916T09050209" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/img3.jpg?t=20210916T09050209" id="ilybye" src="{{ asset('/') }}purplerelaxFiles/aircleaner/img3.jpg?t=20210916T09050209" width="720" height="603">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="iptkha" class="iptkha_global">
        <div id="i0ozu8" class="container i0ozu8_global">
            <div id="ic675z" class="col ic675z_global">
                <h1 id="i1r3io">BLAST AIR CLEANER ПОЧИСТВА ВЪЗДУХА ВИ ПО ТРИ НАЧИНА</h1>
                <div id="i1txao" class="i1txao_global w-step">
                    <div id="iqgj6i" class="iqgj6i_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}airlabFiles/aircleaner/air-filter.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}airlabFiles/aircleaner/air-filter.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}airlabFiles/aircleaner/air-filter.png?t=20210708T065047141" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}airlabFiles/aircleaner/air-filter.png?t=20210708T065047141" id="i1kd9o" src="{{ asset('/') }}airlabFiles/aircleaner/air-filter.png?t=20210708T065047141" width="210" height="41">
                        </picture>
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/7-2x.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/7-2x.jpg" type="image/jpeg">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/7-2x.jpg?t=20210916T091102878" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/7-2x.jpg?t=20210916T091102878" id="ipqyvp" src="{{ asset('/') }}purplerelaxFiles/aircleaner/7-2x.jpg?t=20210916T091102878" width="480" height="480">
                        </picture>
                        <div id="itovvy">Премахва частиците от въздуха, който дишате.</div>
                    </div>
                    <div id="i0zypp" class="i0zypp_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}airlabFiles/aircleaner/activated-carbon.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}airlabFiles/aircleaner/activated-carbon.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}airlabFiles/aircleaner/activated-carbon.png?t=20210708T065047132" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}airlabFiles/aircleaner/activated-carbon.png?t=20210708T065047132" id="i8ju01" src="{{ asset('/') }}airlabFiles/aircleaner/activated-carbon.png?t=20210708T065047132" width="271" height="26">
                        </picture>
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/8-2x.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/8-2x.jpg" type="image/jpeg">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/8-2x.jpg?t=20210916T091102664" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/8-2x.jpg?t=20210916T091102664" id="il42ok" src="{{ asset('/') }}purplerelaxFiles/aircleaner/8-2x.jpg?t=20210916T091102664" width="480" height="480">
                        </picture>
                        <div id="if4h9j">Най-ефективният начин за премахване на дим и миризми.</div>
                    </div>
                    <div id="ia2jji" class="ia2jji_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/negative-ion-tech.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/negative-ion-tech.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/negative-ion-tech.png?t=20210702T075725253" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/negative-ion-tech.png?t=20210702T075725253" id="isbw7i" src="{{ asset('/') }}purplerelaxFiles/aircleaner/negative-ion-tech.png?t=20210702T075725253" width="278" height="33">
                        </picture>
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/9-2x.jpg.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/9-2x.jpg" type="image/jpeg">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/9-2x.jpg?t=20210916T091102457" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/9-2x.jpg?t=20210916T091102457" id="i9b8zy" src="{{ asset('/') }}purplerelaxFiles/aircleaner/9-2x.jpg?t=20210916T091102457" width="480" height="480">
                        </picture>
                        <div id="icy5dk">Придава отрицателен заряд на частиците, което води до падането им и отстраняването им от въздуха.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iqeriz" class="iqeriz_global section-9">
        <div id="ierdyz" class="container ierdyz_global">
            <div id="iz0jga" class="col iz0jga_global">
                <div id="iyjwj9">КАКВО НАШИТЕ КЛИЕНТИ KAЗВАТ  ЗА преносимия пречиствател на въздух Blast Air Cleaner!</div>
                <div id="i0oqfp" class="i0oqfp_global">
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/right-quote-mb.png.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/right-quote-mb.png" type="image/png">
                        <img id="il3vgi" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/right-quote-mb.png?t=20210702T081120023" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/right-quote-mb.png?t=20210702T081120023" src="{{ asset('/') }}purplerelaxFiles/aircleaner/right-quote-mb.png?t=20210702T081120023" width="96" height="76">
                    </picture>
                    <div id="i4fu46" class="i4fu46_global">
                        <div id="iiib6x">АЛЕРГИИТЕ МИ ИЗЧЕЗНАХА!</div>
                        <div id="ipbxi4">Това невероятно малко устройство излекува алергиите ми! Имах постоянно зачервяване, сърбящи очи и запушени синуси, но преносимия пречиствател на въздуха сложи край на всичко. ОБИЧАМ това нещо, напълно промени живота ми и нямам търпение да кажа на сестрите си за него. Цялото ми семейство страда от проблеми с алергиите и сe радваме, че са направили нещо, което работи толкова добре.</div>
                        <div id="icerkf"><span id="irzn3y">Йована Д. – София</span></div>
                    </div>
                    <picture class="ctr-generated">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/left-quote-mb.png.webp" type="image/webp">
                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/left-quote-mb.png" type="image/png">
                        <img id="i2pq42" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/left-quote-mb.png?t=20210702T081306936" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/left-quote-mb.png?t=20210702T081306936" src="{{ asset('/') }}purplerelaxFiles/aircleaner/left-quote-mb.png?t=20210702T081306936" width="96" height="76">
                    </picture>
                </div>
                <a ctr-type-link="external" id="i6vvlr" data-anim-repeat call-to-action cta-id="i6vvlr" href="{{$checkoutView}}" title="Blast Auxiliary" class="animated--hover infinite">
                    <div id="iy1rpi">ПОРЪЧАЙ СЕГА</div>
                </a>
            </div>
        </div>
    </section>
    <section id="i71gzw" class="i71gzw_global">
        <div id="ifjl3f" class="container ifjl3f_global">
            <div id="iuei4e" class="col iuei4e_global">
                <div param-control="testi=0" id="i653x8" class="i653x8_global">
                    <div id="ihx6ki" class="ihx6ki_global">
                        <div id="i126oj" class="i126oj_global">
                            <div id="i9dzfo">4.6</div>
                            <picture class="ctr-generated">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/45-stars.png.webp" type="image/webp">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/45-stars.png" type="image/png">
                                <img id="ijvl9h" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/45-stars.png?t=20210409T110358385" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/45-stars.png?t=20210409T110358385" src="{{ asset('/') }}purplerelaxFiles/aircleaner/45-stars.png?t=20210409T110358385" width="226" height="42">
                            </picture>
                            <div id="icheoh">Среден рейтинг</div>
                        </div>
                        <div id="iu13yj" class="iu13yj_global">
                            <div id="itnysh" class="itnysh_global">
                                <div id="iakor7" class="iakor7_global">
                                    <div id="ig637l"></div>
                                </div>
                                <div id="ijwd2j" class="ijwd2j_global"></div>
                                <div id="i55eho" class="i55eho_global">
                                    <div id="icdfoq"></div>
                                </div>
                                <div id="islybo" class="islybo_global"></div>
                                <div id="i068m4" class="i068m4_global"></div>
                                <div id="iflw9i" class="iflw9i_global"></div>
                            </div>
                            <div id="i10l46" class="i10l46_global">
                                <div id="izsk5a" class="izsk5a_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png" type="image/png">
                                        <img id="im6g9l" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" src="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" width="224" height="40">
                                    </picture>
                                    <div id="ipvbhd">89%</div>
                                </div>
                                <div id="ilkugf" class="ilkugf_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png" type="image/png">
                                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" id="ibpm1n" src="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" width="226" height="42">
                                    </picture>
                                    <div id="iui6qm">0%</div>
                                </div>
                                <div id="ijeyja" class="ijeyja_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/4-stars.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/4-stars.png" type="image/png">
                                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/4-stars.png?t=20210409T110304118" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/4-stars.png?t=20210409T110304118" id="i1jr7n" src="{{ asset('/') }}purplerelaxFiles/aircleaner/4-stars.png?t=20210409T110304118" width="226" height="42">
                                    </picture>
                                    <div id="ilai3k">11%</div>
                                </div>
                                <div id="iy6iv8" class="iy6iv8_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png" type="image/png">
                                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" id="i0v5vf" src="{{ asset('/') }}purplerelaxFiles/aircleaner/3-stars.png?t=20210409T11030413" width="226" height="42">
                                    </picture>
                                    <div id="iytyxv">0%</div>
                                </div>
                                <div id="igqk12" class="igqk12_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/2-stars.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/2-stars.png" type="image/png">
                                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/2-stars.png?t=20210409T110303983" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/2-stars.png?t=20210409T110303983" id="i6tv7f" src="{{ asset('/') }}purplerelaxFiles/aircleaner/2-stars.png?t=20210409T110303983" width="226" height="42">
                                    </picture>
                                    <div id="ingspj">0%</div>
                                </div>
                                <div id="illurg" class="illurg_global">
                                    <picture class="ctr-generated">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/1-star.png.webp" type="image/webp">
                                        <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/1-star.png" type="image/png">
                                        <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/1-star.png?t=20210409T110304166" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/1-star.png?t=20210409T110304166" id="ijs0bz" src="{{ asset('/') }}purplerelaxFiles/aircleaner/1-star.png?t=20210409T110304166" width="226" height="42">
                                    </picture>
                                    <div id="iajv1i">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="iql6l5" class="iql6l5_global">
                        <div id="iomaam" class="iomaam_global">
                            <div id="iyrtol"><b id="ipk9dt">Boyana B. </b> — София</div>
                            <picture class="ctr-generated">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png.webp" type="image/webp">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png" type="image/png">
                                <img id="iu2di4" data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" src="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" width="224" height="40">
                            </picture>
                            <div id="imhpc9"></div>
                            <div id="isbuh">Събуждах се по няколко пъти през нощта, винаги кашлях. Но след като започнах да използвам преносимиа пречиствател BLAST AIR CLEANER в продължение на няколко дни, кашлицата ми спря напълно! Не мога да ви опиша колко е хубаво най-накрая отново да заспите! Всичко, което мога да кажа, е, вземете си преносимиа пречиствател на въздуха, докато можете - с удоволствие би платила и двойна цена за него.</div>
                        </div>
                        <div id="iu6do5" class="iu6do5_global">
                            <div id="ii825r"><font face="Avenir Next Bold" id="iju52j"><b id="icz1mg">Nayden Y. </b></font>— Пловдив</div>
                            <picture class="ctr-generated">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png.webp" type="image/webp">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png" type="image/png">
                                <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" id="itntbg" src="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" width="224" height="40">
                            </picture>
                            <div id="ijcfkv"></div>
                            <div id="idsa5f">Със съпругата ми наскоро станахме родители и не искахме да излагаме бебето на мръсен и вреден въздух. Видяхме обява за Blast Air Cleaner и не се мислихме много – взехме 2 бр., един за хола и един за спалнята, които носим със себе си на работа през деня. Много сме доволни от простотата на продукта и ефекта, защото отдавна не сме спали така хубаво.</div>
                        </div>
                        <div id="ib4p7c" class="ib4p7c_global">
                            <div id="io07dy"><font face="Avenir Next Bold" id="ib3co9"><b id="ivki99">Ognian T. </b></font> — София</div>
                            <picture class="ctr-generated">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png.webp" type="image/webp">
                                <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png" type="image/png">
                                <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" id="iq97ip" src="{{ asset('/') }}purplerelaxFiles/aircleaner/5-stars.png?t=20210408T074805963" width="224" height="40">
                            </picture>
                            <div id="itpmra"></div>
                            <div id="iwyecg">Като таксиметров шофьор забелязах, че все по-мръсният въздух в трафика се отразява на здравето ми. Реших да взема нещата в свои ръце и купих преносим пречиствател на въздух BLAST AIR CLEANER. Само след няколко дни започнах да спим по-добре и да имам много по-голяма концентрация по време на шофериране, а клиентите ми също са приятно изненадени от свежестта на въздуха и от факта, че се грижа за тях по време на тази пандемия.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="i6mz0a" class="i6mz0a_global">
        <div id="i09o4g" class="container i09o4g_global">
            <div id="i6cujo" class="col i6cujo_global">
                <div id="iedsdb" class="gjs-cell">
                    <div id="iowl5a">СПЕЦИАЛНА ОФЕРТА САМО ДНЕС!</div>
                    <p id="i11x08">ПОРЪЧАЙТЕ ДНЕС И ЩЕ ПОЛУЧИТЕ ОТСТЪПКА</p>
                    <div id="ixwwus">Няма НИЩО по-освежаващо от дълбоко вдишване на красив, чист въздух! Спрете да се задушавате от изпарения, дим и прах! Вземете своя BLAST AIR CLEANER сега и започнете да се наслаждавате на усещането да дишате свеж, чист въздух!</div>
                    <a ctr-type-link="external" id="izorm8" data-anim-repeat call-to-action cta-id="izorm8" href="{{$checkoutView}}" title="Blast Auxiliary" class="animated--hover infinite">
                        <div id="izx1qk">ПОРЪЧАЙ СЕГА</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="ice3gj" class="ice3gj_global">
        <div id="insoe1" class="container insoe1_global">
            <div id="i9tsec" class="col i9tsec_global">
                <div id="ixsh4w">Промоционалната оферта е ограничена и тази <span id="i1tid5">ОФЕРТА от 40% от РЕДОВНА ЦЕНА</span> е валидна до изчерпване на количествата!</div>
            </div>
        </div>
    </section>
    <section id="ip9gzd" class="ip9gzd_global">
        <div id="ihj3x4" class="container ihj3x4_global">
            <div id="id9nh5" class="col id9nh5_global">
                <div id="ixmeth" class="gjs-cell">
                    <div id="izzf6n">Пречистете въздуха, който дишeте  само с едно натискане на бутона!</div>
                    <div id="izafln">Почистете въздуха от вредни алергени, прах, бактерии и миризми!</div>
                    <div id="it8ctn" class="it8ctn_global"></div>
                    <div id="ih8uyi" class="ih8uyi_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="ihlcw5" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                        </picture>
                        <div id="iqq45c">Particle Филтърът премахва дори и най-малките частици от въздуха, който дишете.</div>
                    </div>
                    <div id="iish8n" class="iish8n_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="iymyk8" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                        </picture>
                        <div id="ibs1y9">Филтърът с активен въглен премахва въздуха от нежелани и вредни замърсители.</div>
                    </div>
                    <div id="ida15q" class="ida15q_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="ieoevv" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                        </picture>
                        <div id="ix2kxe">Устройството е безшумно и  няма да ви обезпокои, дори и ако четете или спите лошо.</div>
                    </div>
                    <div id="iegs7a" class="iegs7a_global">
                        <picture class="ctr-generated">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png.webp" type="image/webp">
                            <source srcset="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png" type="image/png">
                            <img data-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" data-lazy-srcsets="&lt;767:,&lt;1023:,>1023:{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" id="izodaj" src="{{ asset('/') }}purplerelaxFiles/aircleaner/symbol-2x.png?t=20210408T065348661" width="34" height="34">
                        </picture>
                        <div id="iwakgb">Устройството е малко и достатъчно леко, за да можете  да го носите навсякъде!</div>
                    </div>
                    <div id="isyapy" class="isyapy_global">
                        <div id="igynlo">Вземи специална отсъпка от <span id="i175nf">40%</span> ако поръчаш сега!</div>
                    </div>
                    <a ctr-type-link="external" data-anim-repeat call-to-action cta-id="inc7rm" href="{{$checkoutView}}" id="inc7rm" title="Blast Auxiliary" class="animated--hover infinite">
                        <div id="iz7084">Поръчай веднага вашият пречиствател на въздуха</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<style base-animation-css id="i8ir9f">.animated,.animated--hover:hover{animation-duration:1s;animation-fill-mode:both}.animated.infinite,.animated--hover.infinite:hover{animation-iteration-count:infinite}.animated.delay-1s,.animated--hover.deplay-1s:hover{animation-delay:1s}.animated.delay-2s,.animated--hover.deplay-2s:hover{animation-delay:2s}.animated.delay-3s,.animated--hover.deplay-3s:hover{animation-delay:3s}.animated.delay-4s,.animated--hover.deplay-4s:hover{animation-delay:4s}.animated.delay-5s,.animated--hover.deplay-5s:hover{animation-delay:5s}.animated.fast,.animated--hover.fast:hover{animation-duration:800ms}.animated.faster,.animated--hover.faster:hover{animation-duration:500ms}.animated.slow,.animated--hover.slow:hover{animation-duration:2s}.animated.slower,.animated--hover.slower:hover{animation-duration:3s}@media (print),(prefers-reduced-motion:reduce){.animated,.animated--hover:hover{animation-duration:1ms !important;transition-duration:1ms !important;animation-iteration-count:1 !important}}#i7mhik{display:inline-block}</style>
<style data-style-component-id="i6vvlr" id="iuatnj"></style>
<style data-style-component-id="izorm8" id="ix95iy"></style>
<style data-style-component-id="i4m4nw" id="ileaci"></style>
<style data-style-component-id="ig9pck" id="ijn2az"></style>
<style data-style-component-id="ivfi7d" id="i8g0qz"></style>
<script src="{{ asset('/') }}purplerelaxFiles/aircleaner/index-v1.js?v=1635494907499" defer></script>
@include('components.pixel_footer')
<html>
