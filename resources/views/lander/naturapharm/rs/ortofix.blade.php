<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/ortofix/style.css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.eot');src:local('{{ asset('/') }}fonts/GothamPro'),local('{{ asset('/') }}fonts/GothamPro'),url('{{ asset('/') }}fonts/GothamPro.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'GothamProMedium';src:url('{{ asset('/') }}fonts/GothamProMedium.eot');src:url('{{ asset('/') }}fonts/GothamProMedium.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamProMedium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamProMedium.ttf') format('truetype'),url('{{ asset('/') }}fonts/GothamProMedium.svg#GothamProMedium') format('svg')}@font-face{font-family:'GothamPro-Bold';src:url('{{ asset('/') }}fonts/GothamPro-Bold.eot');src:url('{{ asset('/') }}fonts/GothamPro-Bold.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype'),url('{{ asset('/') }}fonts/GothamPro-Bold.svg#GothamProBold') format('svg')}@font-face{font-family:'GothamProBlack';src:url('{{ asset('/') }}fonts/GothamProBlack.eot');src:url('{{ asset('/') }}fonts/GothamProBlack.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/GothamProBlack.woff') format('woff'),url('{{ asset('/') }}fonts/GothamProBlack.ttf') format('truetype'),url('{{ asset('/') }}fonts/GothamProBlack.svg#GothamProBlack') format('svg')}@font-face{font-family:'RobotoLight';src:url('{{ asset('/') }}fonts/roboto-light.eot');src:url('{{ asset('/') }}fonts/roboto-light.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/robotolight.woff') format('woff'),url('{{ asset('/') }}fonts/robotolight.ttf') format('truetype'),url('{{ asset('/') }}fonts/robotolight.svg#roboto-light') format('svg')}@font-face{font-family:'RobotoRegular';src:url('{{ asset('/') }}fonts/roboto-regular.eot');src:url('{{ asset('/') }}fonts/roboto-regular.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/roboto-regular.woff') format('woff'),url('{{ asset('/') }}fonts/roboto-regular.ttf') format('truetype'),url('{{ asset('/') }}fonts/RobotoRegular.svg#RobotoRegular') format('svg')}@font-face{font-family:'RobotoMedium';src:url('{{ asset('/') }}fonts/RobotoMedium.eot');src:url('{{ asset('/') }}fonts/RobotoMedium.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/robotomedium.woff') format('woff'),url('{{ asset('/') }}fonts/robotomedium.ttf') format('truetype'),url('{{ asset('/') }}fonts/RobotoMedium.svg#RobotoMedium') format('svg')}@font-face{font-family:'RobotoBold';src:url('{{ asset('/') }}fonts/roboto-bold-1.eot');src:url('{{ asset('/') }}fonts/roboto-bold-1.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/roboto-bold.woff') format('woff'),url('{{ asset('/') }}fonts/roboto-bold.ttf') format('truetype'),url('{{ asset('/') }}fonts/RobotoBold.svg#RobotoBold') format('svg')}@font-face{font-family:'RobotoBlack';src:url('{{ asset('/') }}fonts/RobotoBlack.eot');src:url('{{ asset('/') }}fonts/RobotoBlack.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/robotoblack.woff') format('woff'),url('{{ asset('/') }}fonts/robotoblack.ttf') format('truetype'),url('{{ asset('/') }}fonts/RobotoBlack.svg#RobotoBlack') format('svg')}</style>
</head>
<body>
@include('components.display_errors')
<div class="info">
    <div class="info__body">
        <div class="info__logo">
            <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-logo.png">
            <p class="lt0">Ορθοπεδικοί διορθωτές για τη θεραπεία του βλαισού μεγάλου δακτύλου</p>
        </div>
        <div class="info__title">
            <h1 class="lt1">Φροντίστε για την υγεία των ποδιών σας</h1>
        </div>
        <div class="info__content">
            <div class="info__left">
                <div class="info__pack"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-pack.png"></div>
                <div class="info__pl">
                    <p class="lt2">Κατά την παραγγελία <span> OrthoFix Flexumgel </span> δωρεάν!</p>
                </div>
                <div class="info__gift"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-gift.png"></div>
            </div>
            <div class="info__list">
                <ul>
                    <li class="lt3">Απαλλαγείτε από τον βλαισό μεγάλο δάκτυλο σε οποιοδήποτε στάδιο</li>
                    <li class="lt4">Εξάλειψη του πόνου μετά την πρώτη εφαρμογή</li>
                    <li class="lt5">Εξασφάλιση του αποτελέσματος</li>
                </ul>
            </div>
            <div class="info__right">
                <div class="info__timer">
                </div>
                <div class="info__action">
                    <div class="info__price">
                        <h5 class="lt10">Ειδική τιμή</h5>
                        <p class="info__price-new">
                           <span>
                              <span class="new_price_val">
                                 <b class="price_only13152">
                                    {{ $prices[1]['amount'] }}
                                 </b>
                              </span>
                              <span class="new_price_cur lt11">
                                 <b class="price_currency">
                                    RSD
                                 </b>
                              </span>
                           </span>
                        </p>
                        <p class="info__price-old">
                           <span>
                              <span class="old_price_val">
                                 <b class="price_old13152">
                                    {{ $prices[1]['originalPrice'] }}
                                 </b>
                              </span>
                              <span class="old_price_cur lt12">
                                 <b class="price_currency">
                                    RSD
                                 </b>
                              </span>
                           </span>
                        </p>
                    </div>
                    <div class="info__form">
                        <form class="landing__form" action="{{$orderRoute}}" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" required placeholder="Ime i prezime" type="text">
                            <input name="phone" required id="phone" placeholder="Telefon" type="tel">
                            <input name="shipping_address" required placeholder="Adresa" type="text">
                            <input name="shipping_city" required placeholder="Grad" type="text">
                            <button class="lt13" type="submit">Poručite sada</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="symptom">
    <div class="symptom__title">
        <h2 class="lt14"><span> Έχετε κουραστεί </span> αυτά τα συμπτώματα</h2>
    </div>
    <div class="symptom__list">
        <ul>
            <li>
                <div class="symptom__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img1.png"></div>
                <div class="symptom__desc">
                    <p class="lt15">Το μεγάλο δάκτυλο γέρνει εμφανώς προς το πλάι</p>
                </div>
            </li>
            <li>
                <div class="symptom__img dec"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img3.png"></div>
                <div class="symptom__desc">
                    <p class="lt16">Τα άλλα δάχτυλα άρχισαν να παίρνουν ένα χαρακτηριστικό σφυροειδές σχήμα</p>
                </div>
                <div class="symptom__img mob"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img3.png"></div>
            </li>
            <li>
                <div class="symptom__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img2.png"></div>
                <div class="symptom__desc">
                    <p class="lt17">Με βασανίζουν οι ατέλειωτοι πόνοι και πρήξιμο</p>
                </div>
            </li>
            <li>
                <div class="symptom__img dec"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img4.png"></div>
                <div class="symptom__desc">
                    <p class="lt18">Το κόκκαλο του μεγάλου ποδιού με εμποδίζει να επιλέξω τα παπούτσια που με
                        βολεύουν
                    </p>
                </div>
                <div class="symptom__img mob"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img4.png"></div>
            </li>
            <li>
                <div class="symptom__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/symptom-img5.png"></div>
                <div class="symptom__desc">
                    <p class="lt19">Κουράζεστε γρηγορά κατά τη διάρκεια της ημέρας λόγω ακατάλληλης επιβάρυνσης στα
                        παραμορφωμένα
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="happen">
    <div class="happen__body">
        <div class="happen__title">
            <h2 class="lt20">Τι θα συμβεί αν το <span> δεν αντιμετωπιστεί ο βλαισός μεγάλος δάχτυλος</span></h2>
        </div>
        <div class="happen__list dec">
            <ul>
                <li>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img1.png"></div>
                    <div class="happen__desc">
                        <p class="lt21">Η θυλακίτιδα είναι μια ασθένεια που χαρακτηρίζεται από την παρουσία ενός σοβαρού
                            επώδυνου οιδήματος που περιορίζει την κινητική δραστηριότητα
                        </p>
                    </div>
                </li>
                <li>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img2.png"></div>
                    <div class="happen__desc">
                        <p class="lt22">Η εξόστωση είναι ένας καλοήθης οστικός χόνδρος ή οσφυϊκή ανάπτυξη στην επιφάνεια
                            του οστού
                        </p>
                    </div>
                </li>
                <li>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img3.png"></div>
                    <div class="happen__desc">
                        <p class="lt23">Η αρθροπάθεια είναι μια προοδευτική ασθένεια των αρθρικών επιφανειών που οδηγεί
                            σε λέπτυνση και καταστροφή του ιστού του χόνδρου
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="happen__slider mob" role="toolbar">
            <section class="regular">
                <div>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img1.png"></div>
                    <div class="happen__desc">
                        <p class="lt26">Η θυλακίτιδα είναι μια ασθένεια που χαρακτηρίζεται από την παρουσία ενός σοβαρού
                            επώδυνου οιδήματος που περιορίζει την κινητική δραστηριότητα
                        </p>
                    </div>
                </div>
                <div>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img2.png"></div>
                    <div class="happen__desc">
                        <p class="lt27">Η εξόστωση είναι ένας καλοήθης οστικός χόνδρος ή οσφυϊκή ανάπτυξη στην επιφάνεια
                            του οστού
                        </p>
                    </div>
                </div>
                <div>
                    <div class="happen__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/happen-img3.png"></div>
                    <div class="happen__desc">
                        <p class="lt28">Η αρθροπάθεια είναι μια προοδευτική ασθένεια των αρθρικών επιφανειών που οδηγεί
                            σε λέπτυνση και καταστροφή του ιστού του χόνδρου
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="weak">
    <div class="weak__body">
        <div class="weak__title">
            <h2 class="lt31"><span class="big"> 16,5 </span> εκατομμύρια άνθρωποι
                <span class="yellow">ήδη πάσχουν </span>
            </h2>
        </div>
        <div class="weak__content">
            <div class="weak__graph">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/weak-graph.jpg">
            </div>
            <div class="weak__desc">
                <p class="lt32">Σύμφωνα με στατιστικές μελέτες,
                    <span> περισσότερο από δεκαεξίμισι εκατομμύρια άνθρωποι </span>
                    στην Ευρώπη σήμερα <span> έχουν βλαισό μεγάλο δάχτυλο </span>
                    3ου βαθμού, ενδεικτικός της κρισιμότητας της κατάστασης!
                    <span> Ο αριθμός αυτός αυξάνεται κάθε χρόνο !</span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="fight">
    <div class="fight__body">
        <div class="fight__title">
            <h2 class="lt33">Ήρθε η ώρα να αρχίσουμε τον αγώνα κατά του βλαισού μεγάλου δαχτύλου</h2>
        </div>
        <div class="fight__wait">
            <div class="fight__wait-img">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/fight-img1.jpg">
            </div>
            <div class="fight__wait-desc">
                <p class="lt34">
                    Μην περιμένετε μέχρις ότου ένα επώδυνο οστό να σας κάνει να καταλήξετε στο χειρουργικό
                    τραπέζι ή να σας βάλει σε μια αναπηρική καρέκλα.
                    <span>Ξεκινήστε την θεραπεία του βλαισού μεγάλου δακτύλου σήμερα έτσι ώστε να μην είναι αργά!</span>
                </p>
            </div>
        </div>
        <div class="fight__claim">
            <div class="fight__claim-img mob">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/fight-img2.jpg">
            </div>
            <div class="fight__claim-desc">
                <p class="lt35">
                    Οι γιατροί λένε: αν αντιληφθείτε έγκαιρα και αναλάβετε δράση, μπορείτε να σωθείτε,
                    αλλιώς δεν μπορείτε να ανακτήσετε την υγεία σας!
                    <span> Τα θραυσμένα παραμορφωμένα πέλματα θα βλάψουν ανεπανόρθωτα την ζωή σας.</span>
                </p>
            </div>
            <div class="fight__claim-img dec">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/fight-img2.jpg">
            </div>
        </div>
    </div>
</div>
<!--<div class="test">-->
<!--    <div class="test__body">-->
<!--        <div class="test__title">-->
<!--            <h2 class="lt36"><span> ανακαλύψτε το πόσο επικίνδυνη είναι <span>η κατάστασή σας</span></span></h2>-->
<!--        </div>-->
<!--        <div class="test__content">-->
<!--            <div class="test__form">-->
<!--                <form>-->
<!--                    <input id="age" placeholder="Η ηλικία σας" type="number">-->
<!--                    <input id="height" placeholder="Το ύψος σας" type="number">-->
<!--                    <input id="weight" placeholder="Το βάρος σας" type="number">-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="test__rezult">-->
<!--                <div class="test__rezult-body">-->
<!--                    <p class="lt37">Βλαισό μεγάλο δάχτυλο τρίτου βαθμού</p>-->
<!--                </div>-->
<!--                <div class="test__rezult-note">-->
<!--                    <p class="lt38">Ξεκινήστε αμέσως τη θεραπεία σας!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="technology">
    <div class="technology__body">
        <div class="technology__title">
            <h2 class="lt39">Η τελευταία τεχνολογία του XXI αιώνα <span> ενάντια στο βλαισό μεγάλου δαχτύλου lgus</span>
            </h2>
        </div>
        <div class="technology__list">
            <ul>
                <li>
                    <div class="technology__img mob"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/technology-img1.jpg"></div>
                    <div class="technology__desc">
                        <p class="lt40">Το 2016, μια ομάδα επιστημόνων από την Ευρώπη, τις ΗΠΑ και την Ιαπωνία ανέπτυξε
                            και έκανε δοκιμές στον ορθοπεδικό ρυθμιστή OrthoFix, ο οποίος έως και σήμερα δεν έχει
                            αναλογίες
                        </p>
                    </div>
                    <div class="technology__img dec"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/technology-img1.jpg"></div>
                </li>
                <li>
                    <div class="technology__img mob"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/technology-img2.jpg"></div>
                    <div class="technology__desc">
                        <p class="lt41">Επιστρέφει το παραμορφωμένο δάκτυλο στην κανονική του θέση, ομαλοποιεί την
                            κυκλοφορία του αίματος και το σωστό ανατομικό σχήμα του ποδιού.
                        </p>
                    </div>
                    <div class="technology__img dec"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/technology-img2.jpg"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="complex">
    <div class="complex__body">
        <div class="complex__title">
            <h2 class="lt42"> Διπλό σύνολο <span class="white"> orthofix και <span class="orange"> flexum<span>gel</span></span></span></h2>
        </div>
        <div class="complex__content">
            <div class="complex__pack"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/complex-pack.png"></div>
            <div class="complex__plus">
                <p class="lt43">+</p>
            </div>
            <div class="complex__gift"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/complex-gift.png"></div>
        </div>
        <div class="complex__desc">
            <p class="lt44">
                Για πιο αποτελεσματική δράση και μείωση της πορείας της θεραπείας, οι ειδικοί συστήνουν τη
                χρήση μαζί με τους διορθωτές
                <span>
                     OrthoFix
                     <span>
                        του φαρμάκου Flexumgel. Διεισδύει βαθιά  στον ιστό, εξαλείφει την φλεγμονή και ενεργοποιεί τη διαδικασία αναγέννησης.
                     </span>
                </span>
            </p>
        </div>
    </div>
</div>
<div class="right">
    <div class="right__title">
        <h2 class="lt45">Το OrthoFix είναι η σωστή λύση</h2>
    </div>
    <div class="right__content">
        <div class="right__pack">
            <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/right-pack.png">
            <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/right-gift.png">
        </div>
        <div class="right__list">
            <ul>
                <li class="lt46"><span> Άμεση </span> δράση</li>
                <li class="lt47"><span> Απαλή απομάκρυνση </span> του προβλήματος</li>
                <li class="lt48"><span> Πρόληψη </span> υποτροπής</li>
                <li class="lt49">Έλλειψη <span> αντενδείξεων και παρενεργειών</span></li>
                <li class="lt50"><span> Συνολική λύση </span> στα προβλήματα</li>
            </ul>
        </div>
    </div>
</div>
<div class="order">
    <div class="order__body">
        <div class="order__top">
            <div class="order__price">
                <div class="order__price-title">
                    <h5 class="lt51">Ειδική τιμή</h5>
                </div>
                <div class="order__price-body">
                    <p class="order__price-new">
                        <span>
                           <span class="new_price_val">
                              <b class="price_only13152">
                                 {{ $prices[1]['amount'] }}
                              </b>
                           </span>
                           <span class="new_price_cur lt52">
                              <b class="price_currency">
                                 RSD
                              </b>
                           </span>
                        </span>
                    </p>
                    <p class="order__price-old">
                        <span>
                           <span class="old_price_val">
                              <b class="price_old13152">
                                 {{ $prices[1]['originalPrice'] }}
                              </b>
                           </span>
                           <span class="old_price_cur lt53">
                              <b class="price_currency">
                                 RSD
                              </b>
                           </span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="order__timer">
            </div>
        </div>
        <div class="order__form">
            <form class="landing__form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input name="name" required placeholder="Ime i prezime" type="text">
                <input name="phone" required id="phone2" placeholder="Telefon" type="tel">
                <input name="shipping_address" required placeholder="Adresa" type="text">
                <input name="shipping_city" required placeholder="Grad" type="text">
                <button class="lt58" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</div>
<div class="do">
    <div class="do__body">
        <div class="do__title">
            <h2 class="lt59">Πώς λειτουργεί το <span> OrthoFix</span></h2>
        </div>
        <div class="do__list">
            <ul>
                <li>
                    <div class="do__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/do-img2.jpg"></div>
                    <div class="do__content">
                        <div class="do__number">
                            <p>1</p>
                        </div>
                        <div class="do__desc">
                            <p class="lt60">Ο διορθωτής θέτει το βλαισό μεγάλο δάκτυλο στο σωστό σχήμα και εκφορτώνει
                                τους τεταμένους μυς και τα αιμοφόρα αγγεία. Βοηθάει στην εξάλειψη του σφηνώματος και του
                                πόνου.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="do__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/do-img1.jpg"></div>
                    <div class="do__content">
                        <div class="do__number">
                            <p>2</p>
                        </div>
                        <div class="do__desc">
                            <p class="lt61">Φορώντας το για κάποιο χρονικό διάστημα θα έχει ως αποτέλεσμα θα
                                σταθεροποιηθούν τα δάχτυλα στην σωστή ανατομική θέση τους, οι μύες επιστρέφουν στη
                                φυσιολογική τους κατάσταση και σταθεροποιούν σωστά τα οστά. Εξαλείφετε το βλαισό μεγάλο
                                δάχτυλο.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="do__note">
            <p class="lt62">Θα αισθανθείτε αισθητή ανακούφιση μετά τη χρήση του διορθωτή</p>
        </div>
    </div>
</div>
<div class="step">
    <div class="step__body">
        <div class="step__title">
            <h2 class="lt63"><span> 7 βήματα </span> για τη θεραπεία του βλαισού μεγάλου δαχτύλου</h2>
        </div>
        <div class="step__pack"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/step-pack.png"></div>
        <div class="step__list dec">
            <ul>
                <li>
                    <div class="step__number">
                        <p class="lt64">στάδιο 1</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt65">Χαλάρωση των μυών, ανακούφιση από το άγχος και το σφήνωμα</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt66">στάδιο 2</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt67">Ανακούφιση του πόνου και παύση της φλεγμονώδους διαδικασίας</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt68">στάδιο 3</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt69">Επαναφορά της ευαισθησίας</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt70">στάδιο 4</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt71">Ομαλοποίηση της κυκλοφορίας του αίματος και της λεμφικής ροής</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt72">στάδιο 5</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt73">Μείωση του οιδήματος</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt74">στάδιο 6</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt75">Επιστροφή του μεγάλου δαχτύλου στην κανονική του θέση</p>
                    </div>
                </li>
                <li>
                    <div class="step__number">
                        <p class="lt76">στάδιο 7</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt77">Διασφάλιση της σωστής ανατομικής θέσης των δακτύλων</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="step__slider mob" role="toolbar">
            <section class="regular">
                <div>
                    <div class="step__number">
                        <p class="lt81">στάδιο 1</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt82">Χαλάρωση των μυών, ανακούφιση από το άγχος και το σφήνωμα</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt83">στάδιο 2</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt84">Ανακούφιση του πόνου και παύση της φλεγμονώδους διαδικασίας</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt85">στάδιο 3</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt86">Επαναφορά της ευαισθησίας</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt87">στάδιο 4</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt88">Ομαλοποίηση της κυκλοφορίας του αίματος και της λεμφικής ροής</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt89">στάδιο 5</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt90">Μείωση του οιδήματος</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt91">στάδιο 6</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt92">Επιστροφή του μεγάλου δαχτύλου στην κανονική του θέση</p>
                    </div>
                </div>
                <div>
                    <div class="step__number">
                        <p class="lt93">στάδιο 7</p>
                    </div>
                    <div class="step__desc">
                        <p class="lt94">Διασφάλιση της σωστής ανατομικής θέσης των δακτύλων</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="order item2">
    <div class="order__body">
        <div class="order__top">
            <div class="order__price">
                <div class="order__price-title">
                    <h5 class="lt98">Ειδική τιμή</h5>
                </div>
                <div class="order__price-body">
                    <p class="order__price-new">
                        <span>
                           <span class="new_price_val">
                              <b class="price_only13152">
                                 {{ $prices[1]['amount'] }}
                              </b>
                           </span>
                           <span class="new_price_cur lt99">
                              <b class="price_currency">
                                 RSD
                              </b>
                           </span>
                        </span>
                    </p>
                    <p class="order__price-old">
                        <span>
                           <span class="old_price_val">
                              <b class="price_old13152">
                                 {{ $prices[1]['originalPrice'] }}
                              </b>
                           </span>
                           <span class="old_price_cur lt100">
                              <b class="price_currency">
                                 RSD
                              </b>
                           </span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="order__timer">
            </div>
        </div>
        <div class="order__form">
            <form class="landing__form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input name="name" required placeholder="Ime i prezime" type="text">
                <input name="phone" required id="phone3" placeholder="Telefon" type="tel">
                <input name="shipping_address" required placeholder="Adresa" type="text">
                <input name="shipping_city" required placeholder="Grad" type="text">
                <button class="lt105" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</div>
<div class="use">
    <div class="use__body">
        <div class="use__title">
            <h2 class="lt106">Πώς να χρησιμοποιήσετε το <span>"OrthoFix"</span></h2>
        </div>
        <div class="use__list dec">
            <ul>
                <li>
                    <div class="use__number">
                        <p>1</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img1.png"></div>
                    <div class="use__desc">
                        <p class="lt107">Στερεώστε τον διορθωτή στο μεγάλο δάχτυλο</p>
                    </div>
                </li>
                <li>
                    <div class="use__number">
                        <p>2</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img2.png"></div>
                    <div class="use__desc">
                        <p class="lt108">Αφήστε τον για μια νύχτα</p>
                    </div>
                </li>
                <li>
                    <div class="use__number">
                        <p>3</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img3.png"></div>
                    <div class="use__desc">
                        <p class="lt109">Επαναλάβετε τη διαδικασία κάθε βράδυ για ένα μήνα</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="use__slider mob" role="toolbar">
            <section class="regular">
                <div>
                    <div class="use__number">
                        <p>1</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img1.png"></div>
                    <div class="use__desc">
                        <p class="lt112">Στερεώστε τον διορθωτή στο μεγάλο δάχτυλο</p>
                    </div>
                </div>
                <div>
                    <div class="use__number">
                        <p>2</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img2.png"></div>
                    <div class="use__desc">
                        <p class="lt113">Αφήστε τον για μια νύχτα</p>
                    </div>
                </div>
                <div>
                    <div class="use__number">
                        <p>3</p>
                    </div>
                    <div class="use__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/use-img3.png"></div>
                    <div class="use__desc">
                        <p class="lt114">Επαναλάβετε τη διαδικασία κάθε βράδυ για ένα μήνα</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="expert">
    <div class="expert__body">
        <div class="expert__img dec"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/expert-img.png"></div>
        <div class="expert__content">
            <div class="expert__title">
                <h2 class="lt117">οι εμπειρογνώμονες <span> λένε</span></h2>
            </div>
            <div class="expert__desc">
                <p class="lt118">Είμαι βέβαιος ότι η πλειοψηφία των φορέων αυτής της επικίνδυνης ασθένειας δεν
                    συνειδητοποιούν ακόμη και τις τρομερές συνέπειες. Είναι σημαντικό να καταλάβουμε ότι πρόκειται για
                    βλαισό μεγάλο δάχτυλο. Αν δεν λάβετε μέτρα, μπορεί να αντιμετωπίσετε στο μέλλον παραμόρφωση του
                    πέλματος και νέκρωση διότι οι διαταραχές του κυκλοφορικού συστήματος και η θρέψη των ιστών θα
                    διαταράσσονται.
                </p>
                <p class="lt119">Είναι πολύ σημαντικό να ξεκινήσετε την θεραπεία εγκαίρως. Ευτυχώς, υπάρχουν τρόποι που
                    μπορούν να βοηθήσουν στο σπίτι. Για παράδειγμα, προτείνω να χρησιμοποιήσετε τους ορθοπεδικούς
                    διορθωτές OrthoFix. Επαναφέρουν και σταθεροποιούν τα δάκτυλά στη σωστή τους θέση. Ως αποτέλεσμα, ο
                    πόνος και η δυσφορία εξαφανίζονται.
                </p>
                <p class="lt120">Ο Χρήστος Σταυρόπουλος, ορθοπεδικός χειρουργός, υποψήφιος ιατρικών επιστημών, με
                    εμπειρία 27 ετών
                </p>
            </div>
        </div>
    </div>
</div>
<div class="feed">
    <div class="feed__body">
        <div class="feed__title">
            <h2 class="lt121">Οι κριτικές πελατών μας</h2>
        </div>
        <div class="feed__list dec">
            <ul>
                <li>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img1.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt122">Θέλω να εκφράσω τεράστια ευγνωμοσύνη στον παραγωγό του "Orthofix", ο οποίος
                                με έσωσε από μεγάλη ταλαιπωρία. Για πολλά χρόνια ζούσα με βλαισό μεγάλου δαχτύλου και
                                δεν μπορούσα να σηκώσω τα παπούτσια μου και ο πόνος ήταν βασανιστικός. Είναι τρομακτικό
                                να μην μπορείτε να περπατήσετε. Αλλά το "Orthofix" βοήθησε με την πρώτη. Αμέσως μετά την
                                τοποθέτησή του, ο πόνος έφυγε και με την πάροδο του χρόνου το οστό άρχισε να μειώνεται
                                και τώρα σχεδόν δεν υπάρχει. Είμαι χαρούμενη!
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt123">Βάσω, Νομός Λαρίσης</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img2.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt124">Όλη μου τη ζωή φόραγα ψηλά τακούνια, αλλά στα γεράματα
                                τα σιχάθηκα όλα. Γιατί δεν φορούσα άνετα παπούτσια; "Για ποιο λόγο το έκανα,
                                όταν τώρα ουρλιάζω από τον πόνο εξαιτίας ενός χτυπήματος;"
                                Ευτυχώς βρήκα το OrthoFix. Όταν άρχισα να βάζω τους διορθωτές τη
                                νύχτα και ένιωσα μια πρωτοφανή ανακούφιση. Σταμάτησαν να με ενοχλούν
                                οι πόνοι. Είναι ένα πρωτόγνωρο συναίσθημα. Πάει η πέμπτη ημέρα της χρήσης.
                                Σιγά σιγά αρχίζω να παρατηρώ πως το πρήξιμο υποχωρεί. Θα κάνω όλο τον κύκλο
                                θεραπείας
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt125">Άννα, Καρδίτσα</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img3.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt126">Αυτό το βλαισό δάχτυλο ήθελαν να μου το διορθώσουν
                                με εγχείρηση. Αρνήθηκα. Πρώτον, είναι επικίνδυνο και τρομακτικό.
                                Δεύτερον, είναι πολύ ακριβό. Παραπονέθηκα στην κόρη μου. Μου βρήκε
                                τους διορθωτές OrthoFix στο Ίντερνετ. Έκανα θεραπεία για ενάμιση
                                μήνα και δεν υπάρχει κανένα ίχνος πρηξίματος. Μόνο που δεν πωλείται
                                στα φαρμακεία, κρίμα.
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt127">Μιχάλης, Περιφέρεια Αττικής</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="feed__slider mob" role="toolbar">
            <section class="regular">
                <div>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img1.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt131">Θέλω να εκφράσω τεράστια ευγνωμοσύνη στον παραγωγό του "Orthofix", ο οποίος
                                με έσωσε από μεγάλη ταλαιπωρία. Για πολλά χρόνια ζούσα με βλαισό μεγάλου δαχτύλου και
                                δεν μπορούσα να επιλέξω τα κατάλληλα παπούτσια και ο πόνος ήταν δυσβάσταχτος. Είναι
                                τρομακτικό να μην μπορείτε να περπατήσετε. Αλλά το "Orthofix" βοήθησε με την πρώτη.
                                Αμέσως μετά την τοποθέτησή του, ο πόνος έφυγε και με την πάροδο του χρόνου το οστό
                                άρχισε να μειώνεται και τώρα σχεδόν δεν υπάρχει. Είμαι χαρούμενη!
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt132">Βάσω, Νομός Λαρίσης</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img2.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt133">Όλη μου τη ζωή φόραγα ψηλά τακούνια, αλλά στα γεράματα
                                τα σιχάθηκα όλα. Γιατί δεν φορούσα άνετα παπούτσια; "Για ποιο λόγο το έκανα,
                                όταν τώρα ουρλιάζω από τον πόνο εξαιτίας ενός χτυπήματος;"
                                Ευτυχώς βρήκα το OrthoFix. Όταν άρχισα να βάζω τους διορθωτές τη
                                νύχτα και ένιωσα μια πρωτοφανή ανακούφιση. Σταμάτησαν να με ενοχλούν
                                οι πόνοι. Είναι ένα πρωτόγνωρο συναίσθημα. Πάει η πέμπτη ημέρα της χρήσης.
                                Σιγά σιγά αρχίζω να παρατηρώ πως το πρήξιμο υποχωρεί. Θα κάνω όλο τον κύκλο
                                θεραπείας
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt134">Άννα, Καρδίτσα</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feed__img"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/feed-img3.jpg"></div>
                    <div class="feed__content">
                        <div class="feed__desc">
                            <p class="lt135">Αυτό το βλαισό δάχτυλο ήθελαν να μου το διορθώσουν με εγχείρηση. Αρνήθηκα.
                                Πρώτον, είναι επικίνδυνο και τρομακτικό. Δεύτερον, είναι πολύ ακριβό. Παραπονέθηκα στην
                                κόρη μου. Μου βρήκε τους διορθωτές OrthoFix στο Ίντερνετ. Έκανα θεραπεία για ενάμιση
                                μήνα και δεν υπάρχει κανένα ίχνος πρηξίματος. Μόνο που δεν πωλείται στα φαρμακεία,
                                κρίμα.
                            </p>
                        </div>
                        <div class="feed__name">
                            <p class="lt136">Μιχάλης, Περιφέρεια Αττικής</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="info">
    <div class="info__body">
        <div class="info__logo">
            <img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-logo.png">
            <p class="lt140">Ορθοπεδικοί διορθωτές για τη θεραπεία του βλαισού μεγάλου δαχτύλου</p>
        </div>
        <div class="info__title">
            <h1 class="lt141">Φροντίστε για την υγεία των ποδιών σας</h1>
        </div>
        <div class="info__content">
            <div class="info__left">
                <div class="info__pack"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-pack.png"></div>
                <div class="info__pl">
                    <p class="lt142">
                        Κατά την παραγγελία
                        <span>
                           OrthoFix παίρνετε δώρο το Flexumgel!
                        </span>
                    </p>
                </div>
                <div class="info__gift"><img alt="" src="{{ asset('/') }}naturapharmFiles/ortofix/info-gift.png"></div>
            </div>
            <div class="info__list">
                <ul>
                    <li class="lt143">Απαλλαγείτε από το βλαισό μεγάλο δάχτυλο σε οποιοδήποτε στάδιο</li>
                    <li class="lt144">Εξάλειψη του πόνου από την πρώτη εφαρμογή</li>
                    <li class="lt145">Εξασφάλιση του αποτελέσματος</li>
                </ul>
            </div>
            <div class="info__right">
                <div class="info__timer">
                </div>
                <div class="info__action">
                    <div class="info__price">
                        <h5 class="lt150">Ειδική τιμή</h5>
                        <p class="info__price-new">
                           <span>
                              <span class="new_price_val">
                                 <b class="price_only13152">
                                    {{ $prices[1]['amount'] }}
                                 </b>
                              </span>
                              <span class="new_price_cur lt151">
                                 <b class="price_currency">
                                    RSD
                                 </b>
                              </span>
                           </span>
                        </p>
                        <p class="info__price-old">
                           <span>
                              <span class="old_price_val">
                                 <b class="price_old13152">
                                    {{ $prices[1]['originalPrice'] }}
                                 </b>
                              </span>
                              <span class="old_price_cur lt152">
                                 <b class="price_currency">
                                    RSD
                                 </b>
                              </span>
                           </span>
                        </p>
                    </div>
                    <div class="info__form">
                        <form class="landing__form" action="{{$orderRoute}}" method="post" id="form" name="form">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" required placeholder="Ime i prezime" type="text">
                            <input name="phone" required id="phone4" placeholder="Telefon" type="tel">
                            <input name="shipping_address" required placeholder="Adresa" type="text">
                            <input name="shipping_city" required placeholder="Grad" type="text">
                            <button class="lt153" type="submit">Poručite sada</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>