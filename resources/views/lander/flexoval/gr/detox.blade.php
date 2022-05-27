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
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.header__title h2 {font-size: 50px;}.firstCircle{position:relative;top:30px}.doctorSection img{margin-top:-40px!important}.productSection{margin-top:50px}.scroll__list{position:relative;top:30px}.pair img{margin-top:40px}}@media only screen and (min-width:424px){.scroll__list{position:relative;top:60px}.pair img{margin:50px}}.manual__icon-inner--1 .manual__icon{width:152px;height:185px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)}.manual__icon-inner--2{padding-top:24px}.manual__icon-inner--2 .manual__icon{margin-left:0;width:166px;height:169px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)}.manual__icon-inner--3 .manual__icon{width:143px;height:213px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)}</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Φυτικά επιθέματα αποτοξίνωσης</h1>
                <h2>ΑΠΟΤΟΞΙΝΩΣΗ</h2>
                <span>"Κινεζική σοφία, σύγχρονη τεχνολογία"</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">Πώληση!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">νέα τιμή</div>
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
                        <h3>ΠΡΟΣΟΧΗ, ΔΡΑΣΗ!</h3>
                        <span>ΕΚΠΤΩΣΗ 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Τιμή</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Όνομα και επώνυμο" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Τηλέφωνο" type="text" required/>
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
                            <div class="freeShippingDiv">* ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΑ</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Παράγγειλε τώρα"/>
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
                <div class="triggers__desc">Συνταγή ενός αιώνα</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Ενεργοποίηση της μικροκυκλοφορίας στο δέρμα</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Αποβολή περίσσειας νερού από το σώμα</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Ένα ευρύ φάσμα αποτελεσμάτων</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Πλήρης αποτοξίνωση του οργανισμού</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% αποτελεσματικό και ασφαλές</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">ΣΗΜΕΡΑ ΕΙΝΑΙ ΕΠΙΘΥΜΗΤΟ ΝΑ ΑΠΟΤΟΞΙΝΩΝΕΤΕ ΤΟΝ ΟΡΓΑΝΙΣΜΟ ΣΑΣ ΤΟΥΛΑΧΙΣΤΟΝ ΜΙΑ ΦΟΡΑ ΤΟ ΜΗΝΑ ΚΑΙ ΝΑ ΑΝΑΓΕΝΝΑΤΕ ΤΟ ΣΩΜΑ ΣΑΣ</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Σήμερα, όλοι ζούμε έναν μερικώς ανθυγιεινό τρόπο ζωής και είναι πολύ σημαντικό να <span>αποτοξινώνουμε τον οργανισμό τακτικά.</span>
                    Τα επιθέματα αποτοξίνωσης φτιάχνονται από φυτικά εκχυλίσματα σύμφωνα με μια παραδοσιακή κινέζικη συνταγή και προορίζονται
                    για την αποβολή της περίσσειας υγρών και τοξινών από το σώμα μέσω των <span>σημείων βελονισμού.</span></p>
                <p>Τα επιθέματα Kinoki ανακουφίζουν από <span>την ένταση και την κούραση, βελτιώνουν τον ύπνο, καθαρίζουν το δέρμα και
                    βελτιώνουν τη γενική υγεία.</span> Χρησιμοποιώντας αυτά τα επιθέματα, οι τοξίνες που συσσωρεύονται στο σώμα και στην κυκλοφορία
                    του αίματος αποβάλλονται γρήγορα από το σώμα.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">ΤΟΜΕΙΣ ΕΦΑΡΜΟΓΗΣ ΤΩΝ ΕΠΙΘΕΜΑΤΩΝ “KINOKI”</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Ρευματολογία</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Λεμφολογία</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Νευρολογία</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">ΚΑΘΑΡΙΣΤΕ ΤΟ ΣΩΜΑ ΣΑΣ ΑΠΟ ΤΟΞΙΝΕΣ ΣΕ 5 ΜΟΛΙΣ ΜΕΡΕΣ ΜΕ ΤΗ ΒΟΗΘΕΙΑ ΤΩΝ ΕΠΙΘΕΜΑΤΩΝ «KINOKI»</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Ακόμη και οι πρώτοι Ταοϊστές είπαν ότι οι <span>τοξίνες</span> ήταν η κύρια αιτία της πτώσης της ενέργειας στο σώμα.</p>
                <p>Οι υπερβολικές ποσότητες τοξινών αφήνουν αναπόφευκτα σημάδια στην υγεία ή σε κάποιο όργανο και προκαλούν ασθένειες όπως <span>ανικανότητα, μαστοπάθεια, υπέρταση, πονοκεφάλους, χρόνια κόπωση και πολλές άλλες.</span></p>
                <p>Σύμφωνα με τις ιδέες των Ταοϊστών μοναχών και την παραδοσιακή κινεζική ιατρική, η αρνητική ενέργεια που εξαπλώνεται σε όλο το σώμα μπορεί να σταματήσει με την <span>αποτοξίνωση</span> που μπορεί να διακόψει την κίνησή της σε όλο το σώμα.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">"Υγιές σώμα - υγιές πνεύμα"</div>
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
                    <p class="scroll__text">Το θεραπευτικό αποτέλεσμα του επιθέματος βασίζεται στα ακόλουθα αποτελέσματα:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Αποτοξίνωση του οργανισμού</li>
                        <li class="scroll__list-item">Ανακούφιση από πονοκεφάλους και στρες</li>
                        <li class="scroll__list-item">Αναζωογόνηση του σώματος</li>
                        <li class="scroll__list-item">Αύξηση της ποιότητας του ύπνου</li>
                        <li class="scroll__list-item">Θετική επίδραση στα εσωτερικά όργανα</li>
                        <li class="scroll__list-item">Πρόληψη δυσάρεστων οσμών</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">ΣΥΝΘΕΣΗ ΕΠΙΘΕΜΑΤΩΝ ΑΠΟΤΟΞΙΝΩΣΗΣ "KINOKI": </h2>
                <p>Η συνταγή για τα επιθέματα περιλαμβάνει πάνω από 9 φαρμακευτικά βότανα και ελήφθη ως αποτέλεσμα αιώνων έρευνας από λαϊκούς θεραπευτές.</p>
                <p>Τα επιθέματα αποτοξίνωσης παράγονται σύμφωνα με τη σύγχρονη τεχνολογία και τα υψηλότερα διεθνή πρότυπα ποιότητας. Τα επιθέματα Kinoki δεν περιέχουν χημικά πρόσθετα, είναι αβλαβή για τον οργανισμό.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">homalomena</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--burnaska-camphor">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">notopterygium incisum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--milletia-net">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Σαφράν</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--ginura-peritonita">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">millettia reticulata</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--corydalis-questionable">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">άγριο τζίντζερ</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--angelica-croproperty">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">panax pseudoginseng</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">cistanche salsa</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline2">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">η ρίζα του skullcaps</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">Το "KINOKI" ΘΑ ΚΑΘΑΡΙΣΕΙ ΤΟ ΣΩΜΑ ΣΑΣ ΑΠΟ ΤΟΞΙΝΕΣ <br> ΣΤΟ ΠΙΟ ΣΥΝΤΟΜΟ ΔΥΝΑΤΟ ΧΡΟΝΟ!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> Πώληση!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> νέα τιμή</div>
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
                        <div>Θεραπευτικός, φυσικός και ισχυρός αποτοξινωτικός παράγοντας.</div>
                        <div>Βοηθά στην ανακούφιση από πονοκεφάλους, στρες, απελευθερώνει το σώμα από υγρά, βελτιώνει την ποιότητα του ύπνου και αποκαθιστά την ενέργεια.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Ένας ιδιαίτερος συνδυασμός φαρμακευτικών κινέζικων βοτάνων</li>
                        <li class="list-checked__item">Συνταγές κινέζικης ιατρικής αιώνων</li>
                        <li class="list-checked__item">Σύγχρονη τεχνολογία παραγωγής</li>
                        <li class="list-checked__item">Θα συσσωρεύσει όλες τις τοξίνες από το σώμα σε ένα μέρος</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ΠΡΟΣΟΧΗ, ΔΡΑΣΗ!</h3>
                        <span>ΕΚΠΤΩΣΗ 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Τιμή</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Όνομα και επώνυμο" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Τηλέφωνο" type="text" required/>
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
                            <div class="freeShippingDiv">* ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΑ</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Παράγγειλε τώρα"/>
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
                <h2 class="section__title">ΤΙ ΛΕΝΕ ΟΙ ΓΙΑΤΡΟΙ ΓΙΑ ΤΑ ΦΥΤΙΚΑ ΕΠΙΘΕΜΑΤΑ «KINOKI» <br> ΓΙΑ ΑΠΟΤΟΞΙΝΩΣΗ</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Το πιο σημαντικό πράγμα στη διαδικασία θεραπείας οποιασδήποτε ασθένειας είναι να καθαρίσετε το σώμα από τις τοξίνες που συλλέγει λόγω ενός ανθυγιεινού τρόπου ζωής.
                        Παλαιότερα, η μόνη λύση ήταν η συνταγογράφηση προϊόντων αποτοξίνωσης που επηρεάζουν αρνητικά το συκώτι και το πεπτικό σύστημα.</p>
                    <p>Είχα ασθενείς που παραπονέθηκαν για πονοκεφάλους, χρόνια κόπωση, πόνο στην αυχενική μοίρα της σπονδυλικής στήλης, όλα ως αποτέλεσμα της συσσώρευσης τοξινών στο σώμα που διαταράσσουν τις φυσιολογικές σωματικές λειτουργίες.</p>
                    <p>Όταν άρχισα να προτείνω το KINOKI στους ασθενείς μου, μετά από λίγο καιρό, οι περισσότεροι από αυτούς είχαν σημαντικά λιγότερα προβλήματα και τα περισσότερα προβλήματα εξαφανίστηκαν εντελώς. Τα επιθέματα KINOKI είναι εξαιρετικά για τη φυσική αποβολή των τοξινών από το σώμα και συνιστώ την αποτοξίνωση σε όλους τουλάχιστον μία φορά το μήνα.</p>
                </div>
                <div class="comment__author">Παντελής Σαμαράς</div>
                <div class="comment__job"> Ρευματολόγος</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">ΚΡΙΤΙΚΕΣ ΠΕΛΑΤΩΝ ΜΑΣ</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Δήμητρα, 21 ετών</div>
                <div class="comments__text">
                    <p>Γεια. Δουλεύω πολύ στο γραφείο, και είχα πρόβλημα με μυϊκούς πόνους, ένιωθα τα πόδια μου βαριά, δεν είχα αρκετή ενέργεια και ήμουν πολύ γκρινιάρα. Βρήκα τα επιθέματα KINOKI στο διαδίκτυο και προσπάθησα να αποτοξινώσω το σώμα μου. Μετά από δύο κουτιά εξαφανίστηκαν τελείως τα συμπτώματα που με ενοχλούσαν και εδώ και 3 μήνες νιώθω υπέροχα. Τώρα προληπτικά ξοδεύω ένα κουτί κάθε μήνα γιατί δεν θέλω καν να ξαναπεράσω εκείνη τη δύσκολη περίοδος.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Λένα, 65 ετών</div>
                <div class="comments__text">
                    <p>Για χρόνια είχα πρόβλημα με τα υπερβολικά υγρά στο σώμα και πρήξιμο στα πόδια. Δοκίμασα τα πάντα, αλλά τα φάρμακα μου προκαλούσαν συχνά άλλα προβλήματα. Η κόρη μου μού αγόρασε τα Kinoki και είναι το μόνο προϊόν που με βοήθησε. Τα έχω στο κουτί φαρμάκων μου σε μεγάλες ποσότητες. Σας ευχαριστώ!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Αντρέας, 32 ετών</div>
                <div class="comments__text">
                    <p>Τρώω συχνά φαγητό από έξω και γλυκά, πίνω πολλά αναψυκτικά και είμαι καπνιστής. Με τον καιρό άρχισα να αντιμετωπίζω δυσκολίες όπως εξάντληση και πονοκεφάλους. Η μητέρα μου χρησιμοποιούσε τα kinoki και μου τα συνέστησε και εμένα. Στην αρχή, δεν πίστευα ότι θα βοηθούσαν, αλλά η μητέρα μου επέμενε, δεν τα παράτησα και ήδη από τη δεύτερη εβδομάδα χρήσης, ένιωθα πολύ καλύτερα. Ξυπνούσα πιο ξεκούραστος, είχα περισσότερη ενέργεια και ο πονοκέφαλος είχε φύγει. Μπορώ ελεύθερα να πω ότι προτείνω αυτό το προϊόν σε όλους, γιατί είναι πραγματικά καλό!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">ΠΩΣ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ ΣΩΣΤΑ ΤΟ ΕΠΙΘΕΜΑ "ΚΙΝΟΚΙ"</h2>
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
                <div class="manual__title">ΑΝΟΙΞΤΕ ΤΗ ΣΥΣΚΕΥΑΣΙΑ ΚΑΙ <br> ΑΦΑΙΡΕΣΤΕ ΤΟ ΕΠΙΘΕΜΑ</div>
                <div class="manual__desc">Πλύνετε τα πόδια σας με νερό και στεγνώστε</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">ΚΟΛΛΗΣΤΕ ΤΟ ΕΠΙΘΕΜΑ <br> ΣΤΑ ΠΟΔΙΑ</div>
                <div class="manual__desc">Αφήστε το όλο το βράδυ</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">ΒΓΑΛΤΕ ΤΑ ΕΠΙΘΕΜΑΤΑ <br> ΤΟ ΠΡΩΙ</div>
                <div class="manual__desc">Πλύνετε τα πόδια σας με νερό!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Κρατήστε ένα έμπλαστρο σε κάθε πόδι όλη τη νύχτα</div>
        <center>
            <br/><br/>
            <h3><strong>Τα αποτελέσματα είναι ορατά μετά από 1 κουτί</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Για καλύτερα αποτελέσματα, συνιστάται η χρήση 2-3 κουτιών χωρίς διακοπή</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">Το «ΕΠΙΘΕΜΑ ΑΠΟΤΟΞΙΝΩΣΗΣ» ΔΕΝ ΕΙΝΑΙ ΠΡΟΣΩΡΙΝΗ, <br> ΑΛΛΑ ΜΟΝΙΜΗ ΑΠΕΛΕΥΘΕΡΩΣΗ ΑΠΟ <br> ΤΙΣ ΒΛΑΒΕΡΕΣ ΤΟΞΙΝΕΣ ΣΤΟ ΣΩΜΑ!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> Πώληση!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> νέα τιμή</div>
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
                        <div>Θεραπευτικός, φυσικός και ισχυρός αποτοξινωτικός παράγοντας.</div>
                        <div>Βοηθά στην ανακούφιση από πονοκεφάλους, στρες, απελευθερώνει το σώμα από υγρά, βελτιώνει την ποιότητα του ύπνου και αποκαθιστά την ενέργεια.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Ένας ιδιαίτερος συνδυασμός φαρμακευτικών κινέζικων βοτάνων</li>
                        <li class="list-checked__item">Συνταγές κινέζικης ιατρικής αιώνων</li>
                        <li class="list-checked__item">Σύγχρονη τεχνολογία παραγωγής</li>
                        <li class="list-checked__item">Θα συσσωρεύσει όλες τις τοξίνες από το σώμα σε ένα μέρος</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>ΠΡΟΣΟΧΗ, ΔΡΑΣΗ!</h3>
                        <span>ΕΚΠΤΩΣΗ 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Τιμή</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Όνομα και επώνυμο" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Τηλέφωνο" type="text" required/>
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
                            <div class="freeShippingDiv">* ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΑ</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Παράγγειλε τώρα"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Ολα τα δικαιώματα διατηρούνται.</span>
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
