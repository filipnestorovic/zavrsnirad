<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}naturapharmFiles/kneepatch2/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/animation.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/woco-accordion.css" rel="stylesheet">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/style.css" rel="stylesheet" type="text/css" />
    <style>
        html {
            scroll-behavior: smooth;
        }
        .bottombtn a {
            background-color: #f57623;
            color: #FFF;
            font-size: 20px;
        }
        @font-face {
            font-family: 'Avenir Next';
            src: url({{ asset('/') }}fonts/AvenirNext-Regular.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-Regulard41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-Regular.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-Regular.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-Regular.ttf) format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Avenir Next';
            src: url({{ asset('/') }}fonts/AvenirNext-Medium.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-Mediumd41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-Medium.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-Medium.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-Medium.ttf) format('truetype'), url({{ asset('/') }}fonts/AvenirNext-Medium.svg#AvenirNext-Medium) format('svg');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Avenir Next Ultra';
            src: url({{ asset('/') }}fonts/AvenirNext-UltraLight.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-UltraLightd41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.ttf) format('truetype'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.svg#AvenirNext-UltraLight) format('svg');
            font-weight: 200;
            font-style: normal
        }
    </style>
</head>
<body class="theme-default ">
<div class="main_checkout_section" style="">
    @include('components.display_errors')
    <div class="top-outer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand indexUrl"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/Q1Qn2d_6O2c82_logo.jpg" width="177" height="25" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="{{ asset('/') }}naturapharmFiles/kneepatch2/toggle.png" width="40" height="27" alt=""></button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="mainNav">
                                <li> <a class="scroll-menu" href="#sec1">WHY HYDROGEL</a> </li>
                                <li> <a class="scroll-menu" href="#sec2">Our Mission</a> </li>
                                <li> <a class="scroll-menu" href="#sec3">Hydrogel Benefits</a> </li>
                                <li> <a class="scroll-menu" href="#sec4">Reviews</a> </li>
                                <li> <a class="scroll-menu" href="#sec5">FAQ</a> </li>
                            </ul>
                            <div class="buttonouter d-none d-xl-inline-block">
                                <a href="{{$checkoutView}}" class="btn-default wow zoomIn orderNowmove">order Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="banner section">
        <div class="container">
            <div class="bannerprodimg d-none d-sm-block"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/bannerrightimg1-391.png" alt="" width="459" height="579" /></div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>How are you dealing with your pain?</h1>
                    <h6>We manufacture innovative hemp oil products that are all-natural and lab tested.</h6>
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-9 col-12">
                            <div class="bannercontent">
                                <ul>
                                    <li>Relieves Occasional&nbsp;Pain</li>
                                    <li>Fast Acting in Minutes</li>
                                    <li>Regulates Inflammation Levels</li>
                                    <li>Boosts Range of Motion</li>
                                </ul>
                                <div class="buttonouter d-none d-xl-block">
                                    <a class="btn-default btn-default-orange wow zoomIn" href="{{$checkoutView}}">Try something new</a>
                                    <div class="reusetext d-none d-xl-inline-block">Reusable for over 72 hours of relief</div>
                                </div>
                                <div class="bannertesti d-none d-xl-block">
                                    <p class="m-0">I really like the Nano Patch. I've tried a number of patches and these work the best and last the longest. You can take them off and put them back on. That's an added bonus.</p>
                                    <div class="authortext">
                                        <div class="authorcontent">
                                            <div class="authorname">Al&iacute;z S.</div>
                                            <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star1-360.png" alt="" width="123" height="20" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="d-lg-none">reusable for over 72 hours of relief</h5>
                    <div class="buttonouter d-xl-none">
                        <a class="btn-default btn-default-orange wow zoomIn" href="{{$checkoutView}}">Try something new</a>
                        <div class="reusetext d-none d-lg-inline-block">Reusable for over 72 hours of relief</div>
                    </div>
                    <div class="bannertesti d-xl-none">
                        <p class="m-0">I really like the Nano Patch. I've tried a number of patches and these work the best and last the longest. You can take them off and put them back on. That's an added bonus.</p>
                        <div class="authortext">
                            <div class="authorcontent">
                                <div class="authorname">Al&iacute;z S.</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star1-360.png" alt="" width="123" height="20" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section logosec">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-center"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/C29muW_logos.png" width="700" height="115" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section whysec" id="sec1">
        <div class="container">
            <h3 class="text-center">Why Grown <span class="d-block d-sm-inline">Science Hydrogel?</span></h3>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">1</div>
                        <h4>Comfort</h4>
                        <p>Our hydrogel adhesive is soothing and comfortable on the skin. The high water content of hydrogel allows&nbsp;hemp extract to easily be absorbed into the skin without causing irritation.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">2</div>
                        <h4>Time-Release Formula</h4>
                        <p>Our patch releases a steady stream of&nbsp;hemp extract through the skin&nbsp;straight to where its needed&nbsp;over a period of time.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">3</div>
                        <h4>Reusable</h4>
                        <p>Our patch can be removed and reapplied multiple times. Our hydrogel adhesive technology allows our patches to retain their adhesion over time.</p>
                    </div>
                </div>
            </div>
            <div class="buttonouter text-center"><a class="btn-default wow zoomIn" href="{{$checkoutView}}">Try something new</a></div>
        </div>
    </div>
    <div class="missionsec" id="sec2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12">
                    <div class="missionimg wow slideInLeft"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/missionimg-369.jpg" alt="" width="716" height="819" /></div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
                    <div class="missioncontent">
                        <h6>Built in Nature. Supported by Science.</h6>
                        <h3>Our Mission</h3>
                        <p>At&nbsp;Grown Science&nbsp;we believe that nature knows best. We research and develop natural products that work without harmful side effects. Our Mission is to empower self-care by incorporating natural products with research science.</p>
                        <p>At Grown Science, it&rsquo;s all about you.</p>
                        <p>Our Broad Spectrum Hemp Extract&nbsp;contains 0.0% THC. It is made of industrial hemp sourced from premium, organic, non-GMO farms. We use the latest technologies to extract and process the Hemp's active ingredients.</p>
                        <p>We offer the only nano-hemp hydrogel patch on the market.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="midsec">
        <div class="midsec-left">
            <div class="midimg wow slideInLeft"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/otbk9t_midimg1.jpg" width="617" height="338" alt=""></div>
            <h3>Built in Nature</h3>
            <p>All the ingredients in our products are natural and tested by time. We never use harmful additives, fillers.  Our products are free of THC, latex, parabens, sulfates, synthetic fragrances, artificial dyes, and colors.</p>
        </div>
        <div class="midsec-right">
            <div class="midimg wow slideInRight"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/mcqCfl_midimg2.jpg" width="617" height="338" alt=""></div>
            <h3>Backed by Science</h3>
            <p>We designed our state-of-the-art patch to deliver sustained, discrete application. Each batch is third-party tested for safety, purity, and potency. We post the results for every batch on the Internet with a tracking code on every unit, so you know what you are getting.</p>
        </div>
    </div>
    <div class="benifitsec section" id="sec3">
        <div class="container">
            <h3 class="text-center">Benefits of Grown <span class="d-block d-md-inline">Science Hydrogel</span></h3>
            <div class="row benifitrow">
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-12 leftbenifit">
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon1-705.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>THC-Free</h6>
                                <p>We ensure that all THC is naturally removed from our products during manufacturing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon2-415.png" alt="" width="80" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>Lab Tested</h6>
                                <p>Every batch is tested for quality, potentcy, and to ensure it's free of pesticides, solvents, and heavy metals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon3-284.png" alt="" width="80" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>Quality Ingredients</h6>
                                <p>All of our ingredients are of the highest quality</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="benifitimg wow zoomIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/botimg-198.jpg" alt="" width="359" height="481" /></div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-12 rightbenifit">
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon4-968.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>GMP Certified</h6>
                                <p>We follow good manufacturing processes in our production facilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon5-299.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>Industrial Hemp</h6>
                                <p>We use Farm Bill compliant industrial hemp in our manufacturing process. Our products are legal in all states.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon6-841.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>Made in the USA</h6>
                                <p>All of our products are manufactured in the USA from USA-sourced ingredients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttonouter text-center"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">Try something new</a></div>
        </div>
    </div>
    <div class="moneybacksec section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 order-2 order-md-1">
                    <h3>Money Back Guarantee</h3>
                    <p>Here at Grown Science, we want to take the guesswork out of purchasing All orders are covered by a 180 day, 100% money back guarantee.  If you are not satisfied with your purchase get in touch with us for a full refund. No questions asked!  </p>
                    <div class="buttonouter"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">Try something new</a></div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-md-2">
                    <div class="moneybakimg wow slideInRight"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/lK522j_botimg.jpg" width="359" height="481" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviewsec section" id="sec4">
        <div class="container">
            <h3 class="text-center">Here’s what our customers have to say...</h3>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/vwBc1Z_reviewimg1.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Raechel T.</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>&ldquo;With the growing Opiod epidemic, I wanted a safe, more natural approach to pain management. This patch is perfect!&rdquo;</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/Iy5eeE_reviewimg2.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Graham S.</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>&ldquo;These patches from grown science have helped me stay on track with my fitness training with little to no pain.&rdquo;</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/DalYn2_reviewimg3.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Jeff N.</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>&ldquo;I love that this patch lasts 72 hrs, I do not need to worry about carrying several with me if I go on a weekend trip!&rdquo;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqsec section" id="sec5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="faqcontent">
                        <h3 class="text-center">Got Questions?</h3>
                        <h6 class="text-center">We’ve got you covered!</h6>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accordion">
                        <h6>Where should I apply the patch?</h6>
                        <div>
                            <p>CBD patches are good for the whole body.</p>
                            <p>One major misconception about patches is that they are mainly used to treat targeted areas of the body. That can’t be further from the truth.</p>
                            <p>Ideally, you want to place it on a venous area of the body that is free of hair,  irritation, burns or open wounds.</p>
                            <p>Some places on the body absorb better and allow more of the product to flow into the body faster and at higher levels than others. The lower back area is way more effective then it would be if you placed the patch on top of your foot, even if you are experiencing foot pain. While the foot has a lot of little veins, the area on the lower back is much more absorbent. Even if you’re not currently experiencing pain in your low back, applying the patch to this area allows the product to flow to the desired area.</p>
                        </div>
                        <h6>How often do I need to wear the patch?</h6>
                        <div>
                            <p>With a CBD patch, you don’t need to worry about dosing schedules.</p>
                            <p>Another benefit of CBD patches is that it provides a steady dose of CBD. For those people who have a hard time remembering to take their vitamins or struggle swallowing pills or oils then a CBD patch is a very easy way to incorporate CBD into your daily routine. You can stick the patch on and forget about it.</p>
                            <p>The patch lasts a long time. The patch releases slowly and allows your body to get a continuous stream of CBD. This is beneficial because it doesn’t spike a quick uptake of CBD. Instead, it provides gradual relief.</p>
                        </div>
                        <h6>How long does it last?</h6>
                        <div>
                            <p>The CBD patch lasts up to 72 hours</p>
                            <p>The patch lasts a long time. The patch releases slowly and allows your body to get a continuous stream of CBD. This is beneficial because it doesn’t spike a quick uptake of CBD. Instead, it provides gradual relief.</p>
                        </div>
                        <h6>Can I get the patch wet?</h6>
                        <div>
                            <p>The CBD patch can get wet. You can bathe, shower or even swim at the pool or the beach and it won’t cause any problems with your patch. Just put your patch on and go about your day.</p>
                            <p>The patch is perfect to use when you’re about to do something physically exerting. </p>
                            <p>Other CBD products can offer higher levels of CBD at one time. A few drops of CBD oil can bring you really fast relief when you’re suffering with anxiety or pain. And then you’ll want to continue to take more drops throughout the day to keep feeling good. However with patches you simply place it once a day. At the end of the period simply remove the patch and discard. It is always good to clean the area thoroughly before and after using the patch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="buttonouter text-center bottombtn"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">Try something new</a></div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 order-xl-2">
                <div class="footlogo"><a href="{{$checkoutView}}" class="indexUrl"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/5n3mVl_footlogo.jpg" width="177" height="25" alt=""></a></div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 order-xl-1">
                <div class="copyright">© 2020 Grown Science. All Rights Reserved</div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/bootstrap.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/kneepatch2/woco.accordion.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/kneepatch2/wow.js"></script>
<script>
    new WOW().init();
    $( document ).ready(function() {
        $(".accordion").accordion();
        $(window).scroll(function() {
            $(window).scrollTop() >= 80 ? $(".top-outer").addClass("fixednav") : $(".top-outer").removeClass("fixednav")
        })
        $(".navbar-nav>li>a").on("click", function() {
            $(".navbar-collapse").collapse("hide")
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
