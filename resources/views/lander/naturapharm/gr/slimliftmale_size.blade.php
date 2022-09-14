<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimliftmale/styles.css">
    <link href="{{ asset('/') }}flexonikFiles/slimliftmale/custom-styless.min.css" type="text/css" rel="stylesheet">
    <style>
        .sizeDiv {
            display: block;
            margin: 10px auto 10px auto;
            padding: 0 15px;
            width: 300px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
        }
        .size {
            -webkit-appearance: radio;
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
            margin-left: 50px;
            margin-top: 18px;
            cursor: pointer;
        }
        .sizeDiv span {
            display: block;
            margin-top: 20px;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }
        label {
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">ΜΠΛΟΥΖΑΚΙ ΓΙΑ ΤΗΝ ΤΕΛΕΙΑ ΜΕΣΗ ΚΑΙ ΚΟΡΜΟ</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Υλικά υψηλής ποιότητας</li>
                <li>Δεν προκαλεί δυσφορία</li>
                <li>Αόρατη κάτω από ρούχα</li>
            </ul>
            <a href="#order_form" class="button">Παραγγείλτε τώρα</a>
        </div>
        <div class="discount"><span>-40%</span>έκπτωση</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Αυτό το εκπληκτικό αμάνικο μπλουζάκι είναι φτιαγμένο από μεταξένιο υλικό και ελαστικό lycra, είναι άνετο και ταιριάζει όμορφα στο σώμα.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Βοηθάει στη διατήρηση μιας ελκυστικής εμφάνισης κατά τη διάρκεια της διαδικασίας απώλειας βάρους.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Συσφίγγει αποτελεσματικά το στομάχι και τονίζει τον κορμό, χάρη στο ειδικό του σχήμα και δομή.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimliftmale/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Χάρη στον καινοτόμο σχεδιασμό, μπορείτε να φοράτε λεπτά μπλουζάκια, φούτερ και τα λεπτά πουκάμισα πάνω από αυτή.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>ΣΧΕΤΙΚΑ ΜΕ ΤΗΝ ΜΠΛΟΥΖΑ SLIN ‘N FIT ΠΟΥ ΔΙΝΕΙ ΣΧΗΜΑ</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>Η μπλούζα SLIM ‘N LIFT βοηθάει να έχετε μία αντρική και ελκυστική φιγούρα. Το σώμα γίνεται αμέσως πιο σφιχτό και πιο ελκυστικό – χωρίς δίαιτες και κουραστικές προπονήσεις. Χάρη στο μοναδικό σχεδιασμό με ελαστικές πλάκες συμπίεσης, το SLIM ‘N LIFT κατανέμει σωστά το περίσσιο βάρος. Τα ειδικά διχτυωτά πάνελ ισιώνουν κάθε τσαλάκωμα. Το ‘μπυροκοίλι’ και τα αποθέματα λίπους εξαφανίζονται πολύ γρήγορα. Επίσης, το SLIM ‘N LIFT βοηθάει στο ίσιωμα της πλάτης και βελτιώνει αισθητά τη στάση του σώματος. Περισσότερη αυτοπεποίθηση, περισσότερη επιτυχία στη δουλειά, επικοινωνία και γοητεία.</p>
        </div>
    </div>
</section>
<section id="catalog" class="catalog_section">
    <div class="wrapper">
        <div class="product_item male clearfix">
            <div class="gallery_block">
                <img class="image one" src="{{ asset('/') }}flexonikFiles/slimliftmale/b4-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
            </div>
            <div class="info">
                <h3>ΧΑΡΑΚΤΗΡΙΣΤΙΚΑ ΤΗΣ ΜΠΛΟΥΖΑΣ SLIM ‘N LIFT</h3>
                <ul>
                    <li><b>Σύνθεση:</b> μεταξένιο υλικό και ελαστικό lycra</li>
                    <li><b>Συνθήκες θερμοκρασίας:</b> κάθε στιγμή του χρόνου</li>
                    <li><b>Φυσική δραστηριότητα:</b> οποιαδήποτε</li>
                    <li><b>Περιγραφή:</b> Φτιαγμένη από πολύ άνετο ύφασμα, είναι η πιο αποτελεσματική λύση για την τέλεια μέση.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Παλιά τιμή:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <a href="#order_form" class="button">Παράγγειλε</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>ΠΛΕΟΝΕΚΤΗΜΑΤΑ ΤΟΥ SLIM ‘N LIFT</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ΔΥΝΑΜΗ ΚΑΙ ΑΝΤΟΧΗ</h4>
                    <p>Φτιαγμένο από ασφαλή υλικά υψηλής ποιότητας, έτσι δεν προκαλεί ενοχλήσεις και φαγούρες. </p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ΕΛΑΣΤΙΚΟΤΗΤΑ</h4>
                    <p>Ελαστικό, απαλό και σταδιακά συσφίγγει το δέρμα και δεν φαίνεται όταν φοριέται. </p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ΑΠΟΔΟΤΙΚΟΤΗΤΑ</h4>
                    <p>Συσφίγγει τέλεια τις τσακίσεις στο στομάχι και την πλάτη, κάνοντας τη φιγούρα πιο αδύνατη και ελκυστική. </p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ΕΥΚΟΛΗ ΔΙΑΤΗΡΗΣΗ</h4>
                    <p>Δεν χρειάζεται ειδική φροντίδα. Μπορεί να πλυθεί στο χέρι και στο πλυντήριο σε ήπιο κύκλο. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>ΠΩΣ ΝΑ ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΟ <span>Slim'N Lift?</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__keyboard.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Αφήστε τις πληροφορίες αποστολής σας στην ιστοσελίδα</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Θα επικοινωνήσουμε μαζί σας για να επιβεβαιώσουμε την παραγγελία</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Θα στείλουμε το δέμα μέσω άμεσου ταχυδρομείου</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Η πληρωμή γίνεται με μετρητά κατά την παράδοση</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>ΕΝΤΥΠΩΣΕΙΣ ΙΚΑΝΟΠΟΙΗΜΕΝΩΝ <span>ΠΕΛΑΤΩΝ</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Θεόφιλος, 42 χρονών</div>
                    <p>Για να είμαι ειλικρινής, δεν μπορούσα να πιστέψω ότι ήταν εφικτό να φορέσω ρούχα 2-3 νούμερα μικρότερα. Όταν το δοκίμασα, ήξερα ότι είναι καλό. Όλα έγιναν πιο εύκολα με τις γυναίκες και οι συνάδελφοί μου στη δουλειά με ρωτάνε συνεχώς ποια είναι η μυστική μου δίαιτα.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimliftmale/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Γιώργος, 39 χρονών</div>
                    <p>Είμαι υπέρβαρος. Το Slim and Lift συσφίγγει πραγματικά το στομάχι και τονίζει τους ώμους που φαίνονται πιο μεγάλοι. Δέχομαι συνεχώς κομπλιμέντα για την εμφάνισή μου και νιώθω πιο όμορφος όταν κοιτάζω τον εαυτό μου στον καθρέφτη.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">ΜΠΛΟΥΖΑΚΙ ΓΙΑ ΤΗΝ ΤΕΛΕΙΑ ΜΕΣΗ ΚΑΙ ΚΟΡΜΟ</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Υλικά υψηλής ποιότητας</li>
                <li>Δεν προκαλεί δυσφορία</li>
                <li>Αόρατη κάτω από ρούχα</li>
            </ul>
        </div>
        <div class="form_block">
            <p>Επωφεληθείτε από ΕΙΔΙΚΗ ΕΚΠΤΩΣΗ 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Παλιά τιμή:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Ονομα και επίθετο" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Τηλεφωνικό νούμερο" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Oδός και αριθμός" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Πόλη" required="">
                <input class="input" type="text" name="shipping_zip" placeholder="Ταχυδρομικός αριθμός" required="">
                @isset($productSizes)
                <div class="sizeDiv">
                    <span>Επιλέξτε ένα μέγεθος</span>
                    @foreach($productSizes as $singleSize)
                        <input type="radio" name="size" class="size" value="{{$singleSize->product_size}}" id="size-{{strtolower($singleSize->product_size)}}" checked/>
                        <label for="size-{{strtolower($singleSize->product_size)}}">
                             {{$singleSize->product_size}} ({{$singleSize->description}})
                        </label>
                        <br>
                    @endforeach
                </div>
                @endisset
                <button type="submit" class="button">Παραγγείλτε τώρα</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimliftmale/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
