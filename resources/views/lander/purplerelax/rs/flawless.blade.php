<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta content='user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0' name=viewport>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/flawless/styles.css">
    <style>
        .newprice {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<header>
    <div class=mw>
        <div class=r>
            <div class='s m g6'></div>
            <div class='s m g6 ch'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch> Αποκτήστε την πιο ολοκληρωμένη αποτριχωτική μηχανή που έχει κυκλοφορήσει ποτέ! </p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Σχεδιάστηκε και κατασκευάζεται στην Γερμανία</span> </li>
                            <li> <span>4 κυμαινόμενες κεφαλές με επίστρωση χρυσού 18 καρατίων</span> </li>
                            <li> <span>Ανώδυνο, δεν τραυματίζει το δέρμα, δεν προκαλεί ερεθισμούς</span> </li>
                            <li> <span>Κατάλληλο για όλους τους τύπους επιδερμίδας</span> </li>
                        </ul>
                        <img class=slogan2 src='{{ asset('/') }}purplerelaxFiles/flawless/1.svg'>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <p></p>
                            <div class=timer>
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b> </div>
                            </div>
                            <input placeholder='Ime i prezime' type=text name=name value="" required>
                            <input placeholder='Broj telefona' type=text name=phone value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='PORUČI ODMAH'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<article id=art1>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg> ΕΥΚΟΛΗ ΑΠΟΤΡΙΧΩΣΗ <strong>για ανεπανάληπτη απαλότητα!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6 ch'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <p class=ch>Η αποτρίχωση δεν ήταν ποτέ τόσο απλή, προσβάσιμη και γρήγορη!</p>
                <p> Η αποτριχωτική μηχανή "Flawless Legs" είναι εξοπλισμένο με <strong style=color:black>4 κυμαινόμενες κεφαλές, οι οποίες επαναλαμβάνουν ακριβώς τις καμπύλες του σώματος.</strong> Κατά τη διάρκεια της ομαλής κίνησης της συσκευής αποτρίχωσης, όλες οι τρίχες, ακόμη και οι πιο κοντές, αφαιρούνται. Για απόλυτη, τέλεια αποτρίχωση, αρκεί να περάσετε το σημείο με την συσκευή αποτρίχωσης μία φορά. </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num1.svg'> <span> Το Flawless Legs παρέχουν ένα ξηρό ξυρίσμα χωρίς νερό και σαπούνι, με αποτέλεσμα να μπορεί να χρησιμοποιηθεί οποιαδήποτε στιγμή οπουδήποτε. </span> </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num2.svg'> <span> Λόγω του μικρού μεγέθους και της αυτονομίας του, είναι ιδανικό για γρήγορη αποτρίχωση, για παράδειγμα, σε ένα διάλειμμα μεταξύ εργασίας ή πριν από μια σημαντική συνάντηση! Αποτρίχωση χωρίς ερεθισμό και τραυματισμούς! </span> </p>
            </div>
        </div>
    </div>
</article>
<article id=art2>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> ΑΠΟΤΡΙΧΩΣΗ <strong>χωρίς ερεθισμούς και κοψήματα!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <p class=ch>Flawless Legs – η πρώτη αποτριχωτική μηχανή που οι κεφαλές της οποίας καλύπτονται με πραγματικό ιατρικό χρυσό 18 καρατίων.</p>
                <p> Αυτό σας επιτρέπει να αποφύγετε εντελώς τον ερεθισμό του δέρματος και να εξασφαλίσετε 100% υποαλλεργικότητα. Το Flawless Legs δεν προκαλεί ερεθισμούς ακόμα και στο πιο ευαίσθητο δέρμα. </p>
                <p> Η συσκευή αποτρίχωσης είναι εξοπλισμένη με ιδιαίτερα αιχμηρές λεπίδες, κατασκευασμένες από χάλυβα υψηλής ποιότητας. Τέτοιες λεπίδες παρέχουν ανώδυνη αφαίρεση ακόμη και λεπτών τριχών και δεν αμβλύνουνται για τουλάχιστον 5 χρόνια. Προκειμένου να εξαλειφθούν εντελώς τα κοψίματα και οι μικρο-τραύματισμοί του δέρματος, τα πτερύγια περικλείονται σε ειδικά περιβλήματα. </p>
                <a class='btn chhh' href="#buy_form" src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'>Αποκτήστε το</a>
            </div>
            <div class='s m6 g6'>
                <video width="100%" controls>
                    <source src="{{ asset('/') }}purplerelaxFiles/flawless/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class=chh>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/logo-min.svg'>
                    <p>Πράγματι η πιο εξειδηκευμένη γυναικεία αποτριχωτική μηχανή που υπήρξε ποτέ!</p>
                </div>
            </div>
        </div>
    </div>
</article>
<article id=art3>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2> ΚΑΤΑΛΛΗΛΟ ΓΙΑ ΑΠΟΤΡΙΧΩΣΗ <strong>οποιουδήποτε μέρους του σώματος</strong> </h2>
                <figure class=chh> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.jpg'> </figure>
            </div>
        </div>
    </div>
</article>
<article id=art33>
    <div class=mw>
        <div class=r>
            <div class=s>
                <ul class=ul>
                    <li>Πρόσωπο</li>
                    <li>Ντεκολτέ</li>
                    <li>Στήθος</li>
                    <li>Μασχάλες</li>
                    <li>Χέρια + δάχτυλα</li>
                    <li>Πλευρά</li>
                    <li>Ηβική περιοχή</li>
                    <li>Κοιλιά</li>
                    <li>Μπικίνι εξωτερικά</li>
                    <li>Μπικίνι εσωτερικά</li>
                    <li>Μηροί</li>
                    <li>Γόνατα</li>
                    <li>Γάμπες</li>
                    <li>Αστράγαλοι</li>
                    <li>Δάχτυλα ποδιών</li>
                </ul>
            </div>
        </div>
    </div>
</article>
<article id=art4>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>ΑΠΟΤΕΛΕΣΜΑΤΑ ΧΡΗΣΗΣ</h2>
                <p class=ch> Η τακτική χρήση του Flawless Legs βοηθά στη επιβράδυνση της ανάπτυξης της τρίχας, την αραίωση και τον αποχρωματισμό της</p>
                <br/>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <span>100%</span>
                    <p>απομάκρυνση τριχών οποιουδήποτε μήκους, πάχους και δομής</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>70%</span>
                    <p>πιο λεία, απαλή και βελούδινη επιδερμίδα</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>2 φορές</span>
                    <p>λιγότερος χρόνος αποτρίχωσης</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art5>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg2> Flawless Legs <strong>Γιατί να το χρησιμοποιήσω?</strong> </h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.jpg'> </figure>
                    <p>Εργονομικός, πρωτοποριακός και σύγχρονος σχεδιασμός</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.jpg'> </figure>
                    <p>Εξαιρετικά αποδοτικές λεπίδες</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.jpg'> </figure>
                    <p>Χωρίς κοψίματα, ερεθισμούς και πόνο </p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.jpg'> </figure>
                    <p>Μικρό μέγεθος, χωράει εύκολα σε γυναικείο τσαντάκι</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/8.jpg'> </figure>
                    <p>4 κυμαινόμενες κεφαλές, εξασφαλίζουν απόλυτη απομάκρυνση τριχών</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.jpg'> </figure>
                    <p>Αυτόνομη λειτουργία έως και 4 ώρες από μία μόνο φόρτιση</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.jpg'> </figure>
                    <p>Ενσωματωμένα LED φωτάκια που σας καθοδηγούν κατά την αποτρίχωση</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.jpg'> </figure>
                    <p>Κατάλληλο για όλους τους τύπους επιδερμίδας, συμπεριλαμβανομένης και της εξαιρετικά ευαίσθητης</p>
                </div>
            </li>
        </ul>
        <ul class='r chhh'>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.svg'>
                <p>Μπορεί να χρησιμοποιηθεί στο μπάνιο</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.svg'>
                <p>Για γυναίκες όλων των ηλικιών</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.svg'>
                <p>Απολύτως υποαλλεργικό</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.svg'>
                <p>Σχεδιασμένο και κατασκευασμένο στη Γερμανία</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.svg'>
                <p>Περιλαμβάνει φόρτιση μέσω USB</p>
            </li>
        </ul>
    </div>
</article>
<article id=art6>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> ΓΙΑΤΙ ΤΟ FLAWLESS LEGS ΕΙΝΑΙ ΚΑΛΥΤΕΡΟ <strong>από άλλες μεθόδους αφαίρεσης ανεπιθύμητης τριχοφυΐας?</strong> </h2>
                <a class='btn chhh' href="#buy_form" src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'>Παραγγελία με έκπτωση</a>
            </div>
        </div>
        <div class='r r1'>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.png'> </figure>
            </div>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Ξυράφια</h3>
                    <p>Δύσκολο και χρονοβόρο, είναι απαραίτητο να χρησιμοποιήσετε κρέμες και αφρούς. Συχνά μετά από ξυράφια υπάρχει ερεθισμός, γυρισμένες τριχούλες και ξηροδερμία.</p>
                    <p> <strong>Μπορείτε να κοπείτε.</strong> Μετά το ξύρισμα, η τρίχα επανεμφανίζεται σε 2 ημέρες. Όσο πιο συχνά ξυρίζεστε, τόσο πιο παχιά, σκληρή και σκουρόχρωμη γίνεται η τρίχα. </p>
                    <a class=link src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Είναι καλύτερο να παραγγείλετε Flawless Legs</span> </a>
                </div>
            </div>
        </div>
        <div class='r r2'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Κρέμες αποτρίχωσης</h3>
                    <p>Η τρίχα μεγαλώνει γρήγορα και γίνεται ακόμα πιο σκληρή. Μπορεί να προκαλέσει ερεθισμό και αλλεργία, δυσάρεστη οσμή.</p>
                    <a class=link src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Είναι καλύτερο να παραγγείλετε Flawless Legs</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.png'> </figure>
            </div>
        </div>
        <div class='r r3'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Αποτρίχωση με κερί η χαλάουα</h3>
                    <p>Πολύ τραυματικές διαδικασίες για το δέρμα.</p>
                    <p> Εάν κάνετε συχνά αποτρίχωση με αυτούς τους τρόπους, <strong>μπορείτε να προκαλέσετε επικίνδυνες δερματικές παθήσεις,</strong> μέχρι και καρκίνο. </p>
                    <a class=link src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Είναι καλύτερο να παραγγείλετε Flawless Legs</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.png'> </figure>
            </div>
        </div>
        <div class='r r4'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Laser ή Φωτόλυση</h3>
                    <p>Χωρίς χημική αναισθησία με λιδοκαΐνη (ή άλλους παράγοντες) δεν πραγματοποιούνται. Πολλές αντενδείξεις, σοβαρό οίδημα και ερεθισμοί του δέρματος.</p>
                    <p class=ch>Υψηλό κόστος. Μετά από ορμονικές αλλαγές ή διαταραχές, η τριχοφυΐα μπορεί να επανεμφανιστεί.</p>
                    <a class=link src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Είναι καλύτερο να παραγγείλετε Flawless Legs</span> </a>
                </div>
            </div>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.png'> </figure>
            </div>
        </div>
    </div>
</article>
<article id=art7>
    <div class=mw>
        <div class=r>
            <div class='s gm g'>
                <h2 class=bg2> ΓΝΩΜΗ ΕΛΛΗΝΩΝ ΠΕΛΑΤΩΝ ΓΙΑ ΤΟ FLAWLESS LEGS </h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.jpg'> <span> Μαρίνα <strong>24 ετών, Αθήνα</strong> </span> <img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.jpg'> </figure>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>
                    <p>Είναι πραγματικά το κάτι άλλο! Το Flawless Legs είναι εξαιρετικό από όλες τις απόψεις. Μου αρέσει και η εμφάνισή του, και το πώς κάθεται στο χέρι μου, και το πώς αποτριχώνει. Πολύ απαλό και λείο δέρμα. Ποιότητα εξαιρετική. Ο σχεδιασμός είναι υπέροχος. Πρότεινα και στις φίλες μου αυτή την συσκευή αποτρίχωσης. Τους άρεσε επίσης. Είναι απλά μια εξαιρετική συσκευή αποτρίχωσης.</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/14.jpg'> <span> Φωτεινή <strong>31 ετών, Χίος</strong> </span> <img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/15.jpg'> </figure>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>
                    <p>Χρησιμοποιώ το Flawless Legs εδώ και δύο μήνες, είμαι απόλυτα ικανοποιημένη. Το δέρμα είναι απαλό, χωρίς ερεθισμούς, η τρίχα μετά την αποτρίχωση βγαίνει αργά, όχι όπως μετά το ξύρισμα. Πριν από αυτό, είχα δοκιμάσει και άλλες αποτριχωτικές μηχανές, αλλά τα Flawless Legs με ικανοποίησε περισσότερο απ’ όλα. Κάθεται εξαιρετικά στο χέρι μου, αφαιρεί την τρίχα πολύ καλά, δεν καταλαμβάνει πολύ χώρο στο τσαντάκι. Ιδανικό για την γρήγορη και τοπική αφαίρεση τριχών, αν κάπου κατά λάθος εμφανίστηκαν. Λόγω των 4 κεφαλών, επαναλαμβάνει καλά τις στροφές του σώματος - γι 'αυτή την αποτριχωτική μηχανή δεν υπάρχουν δύσκολες σημεία. Προτείνω σε όλους!</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/16.jpg'> <span> Τζένη <strong>28 ετών, Λάρισα</strong> </span> <img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/1.gif'> </figure>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>
                    <p>Για το λεπτεπίλεπτο και ευαίσθητο δέρμα μου ταίριαξε τέλεια. Παλαιότερα, κάθε φορά που αποφάσιζα να κάνω αποτρίχωση, ήταν εφιάλτης. Οι ερεθισμοί στο δέρμα δεν υποχωρούσαν για πολλές ημέρες. Με το Flawless Legs, δεν υπάρχει καθόλου ερεθισμός. Επίσης, άλλες αποτριχωτικές μηχανές τραβάνε πολλές φορές την τρίχα, αυτή όχι. Απόλυτα ανώδυνη αποτρίχωση και χωρίς ερεθισμό, και χωρίς κόκκινες κουκίδες. Τελικά βρήκα την συσκευή αποτρίχωσης που με ικανοποίησε απόλυτα. Σας ευχαριστώ πολύ!</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art8>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg> ΠΕΡΙΕΧΟΜΕΝΟ <strong>Τι περιέχει η συσκευασία?</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/8.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <ol>
                    <li>Αποτριχωτική μηχανή Flawless Legs</li>
                    <li>Όμορφη συσκευασία δώρου</li>
                    <li>Οδηγίες χρήσης</li>
                    <li>Φορτιστή</li>
                </ol>
                <div class=price>
                    <span style='text-decoration: line-through'> <span class="js_old_price oldproductsum"></span> </span>
                    <div class=price> <span class="js_new_price productsum"></span> <strong> <span class=js_curs></span> </strong> </div>
                </div>
                <a class='btn chhh' href="#buy_form" src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'>ΠΑΡΑΓΓΕΛΙΑ ΜΕ ΕΚΠΤΩΣΗ</a>
            </div>
        </div>
    </div>
</article>
<article id=art12>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>ΠΩΣ ΛΕΙΤΟΥΡΓΟΥΜΕ</h2>
            </div>
        </div>
        <ul class=r>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.svg'>
                    <p>Αφήνετε την παραγγελία στην ιστοσελίδα μας</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.svg'>
                    <p>Ένας εκπρόσωπός μας σας καλεί για επιβεβαίωση της παραγγελίας</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.svg'>
                    <p>Σας παραδίδουμε το Flawless Legs σε οποιοδήποτε σημείο της Ελλάδος</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.svg'>
                    <p>Πληρώνετε στην παραλαβή</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<footer>
    <div class=mw>
        <div class=r>
            <div class='s m g6'>
            </div>
            <div class='s m g6 ch'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch> Αποκτήστε την πιο ολοκληρωμένη αποτριχωτική μηχανή που έχει κυκλοφορήσει ποτέ! </p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Σχεδιάστηκε και κατασκευάζεται στην Γερμανία</span> </li>
                            <li> <span>4 κυμαινόμενες κεφαλές με επίστρωση χρυσού 18 καρατίων</span> </li>
                            <li> <span>Ανώδυνο, δεν τραυματίζει το δέρμα, δεν προκαλεί ερεθισμούς</span> </li>
                            <li> <span>Κατάλληλο για όλους τους τύπους επιδερμίδας</span> </li>
                        </ul>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post id="buy_form">
                            <p>ΖΕΣΤΑΙ ΠΩΛΗΣΗ 2019</p>
                            <div class=timer>
                                {{--
                                <div id=timer6cc94deb8168d75418be5ef86d3dcf630 style='min-width:283px;height:72px;'></div>
                                --}}
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b> </div>
                            </div>
                            <input placeholder='Εισάγετε ονοματεπώνυμο' type=text name=name value="" required>
                            <input placeholder='Εισάγετε τηλέφωνο' type=text name=phone value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='Παραγγείλετε με έκπτωση'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class=footer style="text-align: center; font-size: 14px;">
    <footer style="padding: 20px 0">
    </footer>
</div>
</body>
</html>