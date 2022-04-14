<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link href="{{ asset('/') }}dailysharkFiles/nightview/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/nightview/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/nightview/indexb.min.css">
</head>
<body class="indextemplate index">
<div class="loading-container">
    <div class="preloading-wrapper">
        <div class="loader2">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<div class="wrapper">
    <main>
        @include('components.display_errors')
        <section class="section-1">
            <div class="container">
                <div class="wysiwyg-content header-top ">
                    <div class="logo">
                        <a href="{{$checkoutView}}"><img src="{{ asset('/') }}dailysharkFiles/nightview/logo.png" width="auto" height="80" class=" b-loaded"></a>
                    </div>
                    <div class="btn-order"><a href="{{$checkoutView}}">Poruči</a></div>
                    <div class="navigation">
                        <ul>
                            <li><a data-scroll="#overview" class="nav_item" data-section="section-4">OPIS</a></li>
                            <li><a data-scroll="#benefits" class="nav_item" data-section="section-5">PREDNOSTI</a></li>
                            <li><a data-scroll="#features" class="nav_item" data-section="section-7">KARAKTERISTIKE</a></li>
                            <li><a data-scroll="#use"      class="nav_item" data-section="section-8">UPOTREBA</a></li>
                            <li><a data-scroll="#reviews"  class="nav_item" data-section="section-11">KOMENTARI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <section class="section-2">
            <div class="container">
                <div class="heading-title">
                    <h1 class="title">
                        INOVATIVNE NAOČARE POSLEDNJE GENERACIJE KOJE ĆE VAM POMOĆI DA SE FOKUSIRATE U TOKU NOĆNE VOŽNJE I ZAŠTITITE OD JAKE DNEVNE SVETLOSTI
                    </h1>
                    <small class="sub-text">Lagane. Otporne. Poboljšana jasnoća. HD noćni vid.</small>
                </div>
                <div id="player-overlay">
                    <img src="{{ asset('/') }}dailysharkFiles/nightview/header_image.png" alt="" class="img-view no-lazy">
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="container">
                <div class="list-claims ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/organic.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Povećana jasnoća</h4>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/plant-based.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Prijatna svetlost</h4>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/gluten-free.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Otporne</h4>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/gmo-free.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">HD noćni vid</h4>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/dairy-free.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Garantovano zadovoljstvo</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <a class="anchor" id="overview"></a>
        <section class="section-4">
            <div class="container">
                <div class="wysiwyg-content overview ">
                    <p>Night View su nove visokokvalitetne naočare dizajnirane tako da smanje <b>naprezanje očiju</b> i odsjaj od jake svetlosti u toku vožnje danju ili noću, u toku snega ili kiše.</p>
                    <p>Da li ste ikada imali utisak da vam kapci postaju teži za volanom? Mrak ima značajne posledice po bezbednost na putevima i povećava šansu za nezgodama čak <b>osam puta</b>. Night View naočare su nove inovativne
                        naočare koje su izdržljive, lagane i otporne. Omogućavaju da jasnije vidite boje baš kao na televizorima visoke rezolucije. Štiti oči sa svih strana, a mogu da se nose i preko naočara sa dioptrijom.
                        Bilo da vozite, čitate ili igrate golf, ove svestrane naočare čine gledanje potpuno novim iskustvom. Dizajnirane su da zaštite oči od <b>štetnih UV zraka</b> i blokiraju prejaku svetlost.
                        Ova tehnologija stakala visoke definicije dramatično smanjuje odsjaj i pruža <b>kristalnu jasnoću</b>.</p>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <a class="anchor" id="benefits"></a>
        <section class="section-5">
            <div class="container">
                <div class="benefits ">
                    <h2 class="w_main_title"><span class="text">PREDNOSTI</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/back.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">LAGANE I OTPORNE</h4>
                                    <div class="w_desc">
                                        <p>Ove naočare su lagane i otporne. Nećete ni primetiti da ih nosite.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/atom.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">ELIMINIŠU PREJAKU SVETLOST</h4>
                                    <div class="w_desc">
                                        <p>Smanjen odsjaj tokom noćne vožnje može ublažiti naprezanje očiju, glavobolju i napade migrene kada ste na putu.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/molecules.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">POVEĆANA JASNOĆA</h4>
                                    <div class="w_desc">
                                        <p>U toku noćne vožnje imaćete veću izoštrenost i bolju vidljivost.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}dailysharkFiles/nightview/brain.jpg" alt="" class="img-view no-lazy">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">POMAŽU U SLABOM SVETLU I MAGLI</h4>
                                    <div class="w_desc">
                                        <p>Naočare Night View su tako dizajnirane da su savršene i za slabije osvetljenje u uslovima magle i oblačnosti.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <a class="anchor" id="features"></a>
        <section class="section-6">
            <div class="container">
                <div class="section-title">
                    <h3 class="title">
                        PO ČEMU SE NIGHT VIEW NAOČARE RAZLIKUJU OD BILO KOJIH KONKURENTNIH MODELA NA TRŽIŠTU?
                    </h3>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <section class="section-7">
            <div class="container">
                <div class="ct_jumbotron thumb-pd thumb-1">
                    <picture class="ct_thumb_wrap ct_thumb">
                        <div class="ct_thumb">
                            <img src="{{ asset('/') }}dailysharkFiles/nightview/turmeric2.jpg">
                        </div>
                    </picture>
                    <div class="ct_wrap_content">
                        <div class="w_title">
                            <h3>POVEĆAVAJU BEZBEDNOST VOŽNJE</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>Prvi korak da postanete siguran vozač je da obezbedite jasnu vidljivost!
                                    Naočare Night View su dizajnirane da vam pomognu kada su uslovi vožnje okrenuti protiv vas. Kroz mrak, sneg i kišu, ove naočare mogu da se bore protiv odsjaja i jake svetlosti, tako da možete da se fokusirate na put.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct_jumbotron thumb-pd thumb-2">
                    <picture class="ct_thumb_wrap ct_thumb">
                        <div class="ct_thumb">
                            <img src="{{ asset('/') }}dailysharkFiles/nightview/liposomal-smaller.jpg">
                        </div>
                    </picture>
                    <div class="ct_wrap_content">
                        <div class="w_title">
                            <h3>JASNA VIDLJIVOST</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>Naočare Night View su opremljene staklima za poboljšanje boje, jasnoće i vidljivosti. Vaše oko će se manje naprezati, čime ćete izbegavati umor i pospanost. Savršeno za duga putovanja noću.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct_jumbotron thumb-pd thumb-3">
                    <picture class="ct_thumb_wrap ct_thumb">
                        <div class="ct_thumb">
                            <img src="{{ asset('/') }}dailysharkFiles/nightview/IMG_7577-min.jpg">
                        </div>
                    </picture>
                    <div class="ct_wrap_content">
                        <div class="w_title">
                            <h3>UKOLIKO NOSITE DIOPTRIJSKE NAOČARE - NEMA PROBLEMA</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>Naočare Night View lako se stavljaju preko dioptrijskih naočara. Njihova lakoća ni na koji način ne ometa vozača koji neće ni osetiti da ih nosi. Konačno može da se vozi u mraku bez odsjaja!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <a class="anchor" id="use"></a>
        <section class="section-8">
            <div class="container">
                <div class="ct_jumbotron usage">
                    <picture class="ct_thumb_wrap ct_thumb">
                        <div class="ct_thumb">
                            <img src="{{ asset('/') }}dailysharkFiles/nightview/IMG_7469-min.jpg">
                        </div>
                    </picture>
                    <div class="ct_wrap_content">
                        <div class="w_title">
                            <h3>UPOTREBA</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>
                                <strong>Preporučena upotreba:<br></strong>
                                Jednostavno stavite naočare Night View (može i preko dioptrijskih) i moći ćete da vozite noću bez opterećenja i zamaranja.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <!-- /row-wrapper-->
        <section class="section-10">
            <div class="container">
                <div class="wysiwyg-content remind ">
                    <ul>
                        <li class="dktop"><img src="{{ asset('/') }}dailysharkFiles/nightview/icon-bar-cropped.png"></li>
                        <li><img src="{{ asset('/') }}dailysharkFiles/nightview/newfast.jpg" alt="icon-bar-cropped" width="" height="" class=" b-loaded"></li>
                        <li><img src="{{ asset('/') }}dailysharkFiles/nightview/newbest.jpg" alt="icon-bar-cropped" width="" height="" class=" b-loaded"></li>
                        <li><img src="{{ asset('/') }}dailysharkFiles/nightview/pt-3.jpg" alt="icon-bar-cropped" width="" height="" class=" b-loaded"></li>
                    </ul>
                    <div class="section-title">
                        <h3>PORUČITE SVOJE NIGHT VIEW NAOČARE JOŠ DANAS!</h3>
                        <a class="anchor" id="reviews"></a>
                        <h3>KOMENTARI NAŠIH KUPACA</h3>
                    </div>
                </div>
            </div>
            <!--/container-->
        </section>
        <!-- /row-wrapper-->
        <section class="section-11">
            <div class="container">
                <div class="wysiwyg-content  ">
                    <div class="review-wrap">
                        <div class="w-thumb">
                            <picture>
                                <img alt="349 Reviews" src="{{ asset('/') }}dailysharkFiles/nightview/stars.png">
                            </picture>
                        </div>
                        <h3 class="w-title">
                            363 Ocena
                        </h3>
                        <span class="w-sub-img">
                     <img alt="Reviews" src="{{ asset('/') }}dailysharkFiles/nightview/review.png">
                     </span>
                    </div>
                </div>
                <div class="reviews ">
                    <h2 class="w_main_title"><span class="text">Komentari (349)</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <h3 class="w_toptext">J</h3>
                                <div class="w_content_wrap">
                                    <h4 class="w_title"><b>Kristina</b> Verifikovani kupac</h4>
                                    <span class="w_sub_img">
                              <img src="{{ asset('/') }}dailysharkFiles/nightview/stars.png" alt="" class="no-lazy">
                              </span>
                                    <div class="w_desc">
                                        <p><strong>Neverovatan proizvod!</strong></p>
                                        <p>Ne mogu da verujem da sam pre vozila uveče bez ovih naočara! Wow, preporučujem ih!</p>
                                        <p class="date">10/06/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">M</h3>
                                <div class="w_content_wrap">
                                    <h4 class="w_title"><b>Filip</b> Verifikovani kupac</h4>
                                    <span class="w_sub_img">
                              <img src="{{ asset('/') }}dailysharkFiles/nightview/stars.png" alt="" class="no-lazy">
                              </span>
                                    <div class="w_desc">
                                        <p><strong>Toplo preporučujem!</strong></p>
                                        <p>Kao vozač kamiona, uvek vozim noću. Nikada nisam imao migrene ali nedavno je postalo prilično loše i nekoliko puta me toliko glava zabolela da nisam mogao da vidim put ispred sebe.
                                            Naišao sam na ove naočare i odlučio da ih isprobam. Prezadovoljan sam rezultatima i sada mogu da vozim noću bez problema. Govorim drugim vozačima za ove naočare svakodnevno.</p>
                                        <p class="date">10/08/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">J</h3>
                                <div class="w_content_wrap">
                                    <h4 class="w_title"><b>Teodor</b> Verifikovani kupac</h4>
                                    <span class="w_sub_img">
                              <img src="{{ asset('/') }}dailysharkFiles/nightview/stars.png" alt="" class="no-lazy">
                              </span>
                                    <div class="w_desc">
                                        <p><strong>Brza dostava</strong></p>
                                        <p>Još od mladih dana izbegavao sam da vozim noću jer su mi smetala svetla. Poručio sam ove naočare u ponedeljak, stigle su mi u sredu. Uživam u noćnoj vožnji s njima!</p>
                                        <p class="date">10/09/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">N</h3>
                                <div class="w_content_wrap">
                                    <h4 class="w_title"><b>Nikola</b> Verifikovani kupac</h4>
                                    <span class="w_sub_img">
                              <img src="{{ asset('/') }}dailysharkFiles/nightview/stars.png" alt="" class="no-lazy">
                              </span>
                                    <div class="w_desc">
                                        <p><strong>Sviđa mi se!<br></strong></p>
                                        <p>Jako mi se dopadaju naočare, svaka preporuka!</p>
                                        <p class="date">10/09/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">T</h3>
                                <div class="w_content_wrap">
                                    <h4 class="w_title"><b>Tihomir</b> Verifikovani kupac</h4>
                                    <span class="w_sub_img">
                              <img src="{{ asset('/') }}dailysharkFiles/nightview/stars.png" alt="" class="no-lazy">
                              </span>
                                    <div class="w_desc">
                                        <p><strong>WOW!</strong></p>
                                        <p>Ogromna razlika sa i bez njih! Puno je lakše voziti sa njima.</p>
                                        <p class="date">10/07/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /row-wrapper-->
    </main>
</div>
<script>
    $(function(){
        $('.nav_item').click(function(e){
            e.preventDefault();
            var link = $(this).data('scroll');
            $('html, body').animate({
                scrollTop: parseInt($(link).offset().top)
            }, 100);
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
