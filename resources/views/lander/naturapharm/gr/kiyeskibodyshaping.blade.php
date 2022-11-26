<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/style-2.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/media-2.css" rel="stylesheet">
    <style>
        .sec10__part img {
            width: 240px;
        }
        @media (max-width: 991px) {
            .header .logo {
                width: 180px;
            }
            .header .logo b {
                font-size: 17px;
            }
            .header .logo:before {
                left: 180px;
            }
        }
        .sec9__container:before {
            background: url({{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png) no-repeat;
            width: 472px;
            height: 584px;
            right: -90px;
            bottom: -100px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="main__wrapper s__main">
    <div class="header">
        <div class="header__container">
            <div class="logo font-mons"><b>KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ</b></div>
            <div class="h1 font-mons" data-xd="t3"><b>Για επίπεδο και ελκυστικό στομάχι!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Χάστε βάρος γρήγορα και εύκολα, με έναν εντελώς φυσικό τρόπο!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Χάστε βάρος γρήγορα και εύκολα</div>
            <div class="h2 only-mob font-mons" data-xd="t2">με έναν εντελώς φυσικό τρόπο! </div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><button class="btn for_scroll"> ΠΑΡΑΓΓΕΙΛΤΕ </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Χάστε βάρος όλη μέρα!</div>
                <div class="h1 blue font-mons" data-xd="t2">Σύστημα 24 ωρών</div>
                <div class="h2 green font-mons" data-xd="t2"><b>Ξεφορτωθείτε τα αποθέματα λίπους</b> και διώξτε τις τοξίνες χωρίς να χάσετε μυική μάζα</div>
                <ul class="font-PT">
                    <li><b>Βελτιώνει</b> την πέψη</li>
                    <li>100% <b>φυσικό</b></li>
                    <li><b>Επιταχύνει τον μεταβολισμό</b> ακόμα και όταν ξεκουράζεστε</li>
                </ul>
                <div class="kletki font-mons"><span>κύτταρα λίπους (πριν)</span><span>κύτταρα λίπους (μετά)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> Αποτελέσματα </div>
                    <div class="h2 blue font-mons" data-xd="t2">εργαστηριακής ανάλυσης</div>
                    <p class="font-PT">Η εργαστηριακή ανάλυση καθόρισε ότι το <b class="green">προϊόν περιέχει απολύτως φυσικές ουσίες που έχουν θετικό αποτέλεσμα σε όλο τον οργανισμό.</b></p>
                    <p class="font-PT"><b class="green">Επιταχύνουν την κυκλοφορία, αυξάνουν τον μεταβολισμό και διώχνουν τις τοξίνες και τα υγρά από το σώμα.</b> Λιώνει γρήγορα τα αποθέματα λίπους και κάνει το στομάχι να φαίνεται επίπεδο και γυμνασμένο.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Ξεκινήστε τη μέρα σας με Ενέργεια από τα</span>
            <div class="h1 blue font-mons" data-xd="t2">ΕΠΙΘΕΜΑΤΑ KIYESKI</div>
            <div class="h2 pink font-mons" data-xd="t2">Σε λίγες μόλις ημέρες, το σώμα σας θα έχει καθαριστεί, <b>θα είναι γεμάτο ενέργεια και το βάρος θα έχει μειωθεί ορατά.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">ΤΟ KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ ΣΑΣ ΔΙΝΕΙ ΕΝΕΡΓΕΙΑ ΚΑΤΑ ΤΗ ΔΙΑΡΚΕΙΑ ΟΛΗΣ ΤΗΣ ΗΜΕΡΑΣ</p>
                    <button class="btn for_scroll only-web"> ΠΑΡΑΓΓΕΙΛΤΕ </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Ο μοναδικός συνδυασμός συστατικών διεγείρει την υγιή λειτουργία του σώματος. Αυτή η φόρμουλα δεν έχει αρνητικά αποτελέσματα και μειώσεις στην ενέργεια κατά τη διάρκεια της ημέρας. Τα λίπη λιώνουν γρήγορα και πετάγονται στην επιφάνεια και ο μεταβολισμός σε επιτάχυνση διεγείρει την απώλεια των υγρών.
                        <b class="pink">Με αυτόν τον τρόπο, το πρήξιμο μειώνεται, η κινητικότητα είναι πιο εύκολη και το πιο σημαντικό είναι ότι αποκτάτε ένα πιο αδύνατο και γυμνασμένο σώμα.</b>
                    </p>
                    <ul class="font-PT">
                        <li>Βελτιώνει την κατάσταση του οργανισμού</li>
                        <li>Αυξάνει την καύση λίπους</li>
                        <li>Μειώνει το επίπεδο χοληστερόλης στο αίμα</li>
                        <li>Μειώνει την όρεξη</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">ΤΟ KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ ΣΑΣ ΔΙΝΕΙ ΕΝΕΡΓΕΙΑ ΚΑΤΑ ΤΗ ΔΙΑΡΚΕΙΑ ΟΛΗΣ ΤΗΣ ΗΜΕΡΑΣ</p>
                    <button class="btn for_scroll only-mob"> ΠΑΡΑΓΓΕΙΛΤΕ </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2">KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ</div>
            <div class="h2 blue font-mons" data-xd="t2">Τί είναι τόσο μοναδικό σε αυτή τη σύνθεση?</div>
            <p class="font-PT"> Το σώμα σας μετατρέπεται χάρη στον ειδικό συνδυασμό φυσικών συστατικών που <b class="blue">παρέχουν ενέργεια και επιταχύνουν την καύση λίπους.</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons">Απώλεια βάρους σε κιλά</p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Μήνας </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Απώλεια βάρους </div>
                            <ul class="font-PT">
                                <li class="red">Κανονικές δίαιτες</li>
                                <li class="gr">Kiyeski Σμήλευση Σώματος</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons">διατήρηση βάρους σε κιλά</p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Μήνας </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons">Διατήρηση βάρους</div>
                            <ul class="font-PT">
                                <li class="red">Κανονικές δίαιτες</li>
                                <li class="gr">Kiyeski Σμήλευση Σώματος</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> Αποτελέσματα </div>
            <div class="h2 blue font-mons" data-xd="t2"> χρηστών </div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Πριν </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> μετά από ένα μήνα </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> μετά από δύο μήνες </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> μετά από τρεις μήνες </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Diana, 28 ετών</div>
                    <p class="last-p font-PT">
                        Πήρα κιλά αφού γέννησα. Πίστευα ότι θα μπορούσα να χάσω το βάρος εύκολα, αλλά μετά από πολλές δίαιτες, συνέχισα να παίρνω βάρος. Πεινούσα συνέχεια και ήμουν σε κακή διάθεση. Αφού χρησιμοποίησα τα επιθέματα Kiyeski, άρχισα αμέσως να νιώθω καλύτερα. Είχα περισσότερη ενέργεια κατά τη διάρκεια της ημέρας, ήμουν λιγότερο κουρασμένη το απόγευμα, ζούσα με λιγότερο άγχος. Ως αποτέλεσμα, έφτασα στον στόχο μου μέσα σε 2,5 μήνες. Επίσης, με απλή δίαιτα δεν πέτυχα το στόχο μου ούτε σε έναν χρόνο!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Γρήγορη απώλεια βάρους στις πρώτες 2 εβδομάδες</div>
                <div class="h1 blue font-mons" data-xd="t2">12 κιλά λιγότερα</div>
                <div class="h2 pink font-mons" data-xd="t2">μέσα σε 2 μήνες</div>
                <p class="font-PT up_p"> Τέτοια αποτελέσματα έρχονται χάρη στον συνδυασμό δύο παραγόντων - <b class="blue">γρήγορο σπάσιμο + εξάλειψη τοξινών.</b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">Οι τοξίνες αφήνουν το σώμα ήδη από τις πρώτες εβδομάδες θεραπείας. </b><br> Γι' αυτό τα αποτελέσματα είναι ορατά άμεσα. </p>
            <p class="font-PT"> Μέσα σε 2 εβδομάδες, <b class="pink">τα βαθιά αποθέματα λίπους αρχίζουν να σπάνε, τα επίπεδα αλκαλικότητας επιστρέφουν και η σύνθεση του αίματος βελτιώνεται. </b> Η απώλεια βάρους μπορεί να είναι αργή λόγω της διαδικασίας ανάκτησης της συνολικής υγείας. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Πρόταση από την </div>
            <div class="h1 green font-mons" data-xd="t2"> ειδικό </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Ευαγγελία, <br> διαιτολόγος </p>
                </div>
                <p class="font-PT">
                    Το Kiyeski Σμήλευση Σώματος είναι ένα βιολογικά ενεργό προϊόν με ολοκληρωμένο αποτέλεσμα βελτίωσης της υγείας που ακόμα και οι άνθρωποι γύρω σας θα παρατηρήσουν. Τα θετικά αποτελέσματα μπορείτε να τα δείτε ακόμα και σε εξέταση αίματος. Το χαμηλό επίπεδο χοληστερόλης, το σταθερό επίπεδο σακχάρων, η υγιής ποσότητα πρωτεϊνών είναι αυτά που παρατηρούνται χάρη στα επιθέματα Kiyeski!
                </p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2">Kiyeski Σμήλευση Σώματος</div>
                    <div class="h2 pink font-mons" data-xd="t2">Σμιλεύστε το σώμα σας!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"><button class="btn for_scroll"> ΠΑΡΑΓΓΕΙΛΤΕ </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Τί λένε οι </div>
            <div class="h2 green font-mons" data-xd="t2"> καταναλωτές </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Άκουσα για το Kiyeski Σμίλευση Σώματος πριν από 6 μήνες. Ήμουν 90 κιλά τότε. Σε μόλις δύο μήνες, έχασα σχεδόν 20 κιλά! Είμαι πολύ χαρούμενη! Μετά από αυτό, άρχισα να χάνω κιλά αργά. Τώρα είμαι 62,5 κιλά και νιώθω καλύτερα από ποτέ.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Μαρία
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Ναι! Το Kiyeski Σμίλευση Σώματος είναι εκπληκτικό! Έχασα 7 κιλά χωρίς καν να προσπαθήσω σε μόλις ένα μήνα. Τώρα δουλεύω στους κοιλιακούς μου.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Χρήστος
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Χάνω βάρος με τα επιθέματα Kiyeski εδώ και έναν μήνα. Λίγο λίγο, η όερξή μου μειώθηκε. Ξεκίνησα να νιώθω χορτάτη ακόμα και μετά από μικρές ποσότητες φαγητού. Δεν έκανα δίαιτα, απλώς μείωσα την κατανάλωση ζάχαρης και ζυμαρικών. Αυτό είχε ως αποτέλεσμα να χάσω 12 κιλά. Το λίπος από το στήθος και το στομάχι μου έχει φύγει. Δείτε το σώμα μου.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Μαριαλένα
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Δεν ξέρω τί πιστεύουν οι άλλοι, αλλά εγώ είμαι πολύ ικανοποιημένη με το προϊόν. Με βοήθησε πραγματικά! Έχασα 23,5 κιλά. Τώρα θέλω μόνο να παίζω αθλήματα! Τώρα το σώμα μου είναι έτσι όπως δεν θα φανταζόμουν ποτέ να είναι.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Ιωάννα
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ – Για επίπεδο και ελκυστικό στομάχι!</div>
                    <div class="h1 blue font-mons" data-xd="t2">KIYESKI ΣΜΙΛΕΥΣΗ ΣΩΜΑΤΟΣ</div>
                    <div class="h2 pink font-mons" data-xd="t2">Για ένα τέλειο σώμα χωρίς να βλάψετε την υγεία σας</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue">ΕΙΣΑΓΕΤΕ ΠΛΗΡΟΦΟΡΙΕΣ ΑΠΟΣΤΟΛΗΣ</div>
                            <input class="inp font-mons" name="name" placeholder="Όνομα" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone" placeholder="Αριθμός τηλεφώνου" type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Διεύθυνση" type="text" required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Πόλη" type="text" required>
                            <select class="form-content__element form-content__select change-package-selector2 form_control font-mons" name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} {{ $prices[1]['currency'] }})</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift"
                                     id="{{ $singlePrice['quantity'] }}"
                                     @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }}
                                    x {{ $product->product_name }} <br><strike
                                        class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} {{ $prices[1]['currency'] }} </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $prices[1]['currency'] }}
                                    <br> @if($singlePrice['is_free_shipping'])
                                        + ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΑ
                                    @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text"> ΠΑΡΑΓΓΕΙΛΤΕ ΤΩΡΑ </button>
                            <div class></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}natureteaFiles/slimonex1/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
