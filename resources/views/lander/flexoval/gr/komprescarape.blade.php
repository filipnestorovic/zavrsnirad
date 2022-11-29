<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{asset('/')}}flexovalFiles/carapa/about__tick_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}flexovalFiles/carapa/styles.css">
    <style>@font-face{font-family:'Roboto';src:local('Roboto Thin'),local('Roboto-Thin'),url('{{asset('/')}}fonts/robotothin.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothin.woff') format('woff'),url('{{asset('/')}}fonts/robotothin.ttf') format('truetype');font-weight:100;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Thin Italic'),local('Roboto-ThinItalic'),url('{{asset('/')}}fonts/robotothinitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotothinitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotothinitalic.ttf') format('truetype');font-weight:100;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Light'),local('Roboto-Light'),url('{{asset('/')}}fonts/robotolight.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolight.woff') format('woff'),url('{{asset('/')}}fonts/robotolight.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Light Italic'),local('Roboto-LightItalic'),url('{{asset('/')}}fonts/robotolightitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotolightitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotolightitalic.ttf') format('truetype');font-weight:300;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto'),local('Roboto-Regular'),url('{{asset('/')}}fonts/roboto.woff2') format('woff2'),url('{{asset('/')}}fonts/roboto.woff') format('woff'),url('{{asset('/')}}fonts/roboto.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Italic'),local('Roboto-Italic'),url('{{asset('/')}}fonts/robotoitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoitalic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Medium'),local('Roboto-Medium'),url('{{asset('/')}}fonts/robotomedium.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomedium.woff') format('woff'),url('{{asset('/')}}fonts/robotomedium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Medium Italic'),local('Roboto-MediumItalic'),url('{{asset('/')}}fonts/robotomediumitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotomediumitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotomediumitalic.ttf') format('truetype');font-weight:500;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Bold'),local('Roboto-Bold'),url('{{asset('/')}}fonts/robotobold.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobold.woff') format('woff'),url('{{asset('/')}}fonts/robotobold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Bold Italic'),local('Roboto-BoldItalic'),url('{{asset('/')}}fonts/robotobolditalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotobolditalic.woff') format('woff'),url('{{asset('/')}}fonts/robotobolditalic.ttf') format('truetype');font-weight:700;font-style:italic}@font-face{font-family:'Roboto';src:local('Roboto Black'),local('Roboto-Black'),url('{{asset('/')}}fonts/robotoblack.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblack.woff') format('woff'),url('{{asset('/')}}fonts/robotoblack.ttf') format('truetype');font-weight:900;font-style:normal}@font-face{font-family:'Roboto';src:local('Roboto Black Italic'),local('Roboto-BlackItalic'),url('{{asset('/')}}fonts/robotoblackitalic.woff2') format('woff2'),url('{{asset('/')}}fonts/robotoblackitalic.woff') format('woff'),url('{{asset('/')}}fonts/robotoblackitalic.ttf') format('truetype');font-weight:900;font-style:italic}</style>
    <style>
        .offer_section.offer_top ul {
            margin: 135px 0 0 110px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <ul>
            <li style="color: #fff;"><b style="color: #fff;">Βελτιώνει </b><br>κυκλοφορία</li>
            <li><b>Μειώνει </b><br>φλεγμονή <br>και πρήξιμο</li>
            <li style="color: #8a705a;"><b>Χωρίς </b><br>παρενέργειες</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">ΣΗΜΠΙΕΣΗ</h1>
                <p>ΓΙΑ ΒΕΛΤΙΩΜΕΝΗ ΚΥΚΛΟΦΟΡΙΑ <span>ΚΑΙ ΕΝΑΝΤΙΑ ΣΤΟΥΣ ΚΙΡΣΟΥΣ</span></p>
            </div>
            <div class="discount">ΕΚΠΤΩΣΗ <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">ΠΑΛΙΑ ΤΙΜΗ:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">ΝΕΑ ΤΙΜΗ:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Όνομα και επώνυμο" required>
                <input class="input" type="tel" name="phone" placeholder="Τηλέφωνο" required>
                <input class="input" type="text" name="shipping_address" placeholder="Διεύθυνση" required>
                <input class="input" type="text" name="shipping_city" placeholder="Πόλη" required>
                <button class="button">ΠΑΡΑΓΓΕΙΛΤΕ ΤΩΡΑ</button>
            </form>
        </div>
    </div>
</header>
<section class="risks_section">
    <div class="wrapper">
        <h2>ΓΙΑΤΙ ΔΕΝ ΜΠΟΡΟΥΜΕ ΝΑ <span>ΑΓΝΟΗΣΟΥΜΕ ΤΟΥΣ ΚΙΡΣΟΥΣ?</span></h2>
        <div class="risks_list">
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk1_image.jpg" alt="" title="">
                </div>
                <p><b>Ακόμα και στον ήπιο βαθμό,</b> οι κιρσοί μπορούν να οδηγήσουν σε ανεπάρκεια των φλεβών – μία μόνιμη συνθήκη για την οποία δεν υπάρχει θεραπεία.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk2_image.jpg" alt="" title="">
                </div>
                <p><b>Οι κιρσοί αποτελούν</b> κυρίως υψηλό ρίσκο για θρόμβωση και μπορούν αν δημιουργήσουν θρόμβους αίματος.</p>
            </div>
            <div class="risk_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/risks__risk3_image.jpg" alt="" title="">
                </div>
                <p><b>Οι κιρσοί προκαλούν</b> την εξάπλωση τροφικού έλικα σε όλο το σώμα, κάτι που μπορεί να αφαιρεθεί μόνο με μεταμόσχευση δέρματος.</p>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="wrapper">
        <h2>ΟΙ ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ <span>ΠΡΟΣΤΑΤΕΥΟΥΝ ΤΗΝ ΥΓΕΙΑ!</span></h2>
        <img src="{{asset('/')}}flexovalFiles/carapa/about__image1.png" alt="" title="">
        <div class="text_block">
            <p>Το μυστικό της αποτελεσματικότητάς του <b>βρίσκεται στη μοναδική σύνθεση</b> – Συνδυασμένο ιατρικό πλεκτό και βαμβάκι. Ρυθμίζουν τη θερμοκρασία του σώματος και παρέχουν όχι μόνο ένα ευχάριστο αίσθημα, αλλά ρυθμίζουν και την ενυδάτωση στο δέρμα. Σε αντίθεση με άλλες κάλτσες, οι κάλτσες συμπίεσης λύνουν το πρόβλημα από τη ρίζα του!</p>
        </div>
        <ul>
            <li>Λύνουν την <b>κόπωση των ποδιών, τον πόνο, τη φαγούρα καθώς</b> και τη φλεγμονή και το πρήξιμο. </li>
            <li>Ρυθμίζουν <b>την κυκλοφορία και ενδυναμώνουν</b> τα τοίχοι των αιμοφόρων αγγείων.</li>
            <li>Χάρη στη <b>δράση συμπίεσης</b>, το αίμα στις φλέβες κυλάει πιο γρήγορα. </li>
            <li>Παρέχουν την απαραίτητη <b>προφύλαξη από θρομβώσεις</b>, προστατεύοντας ενάντια σε ατυχήματα.</li>
        </ul>
        <a href="#order_form" class="button">ΠΑΡΑΓΓΕΙΛΤΕ ΤΩΡΑ</a>
    </div>
</section>
<section class="components_section">
    <div class="wrapper">
        <h2>ΓΙΑ ΠΟΙΟΝ <span>ΕΙΝΑΙ ΟΙ ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ?</span></h2>
    </div>
    <div class="components_list">
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component1_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΕΡΓΑΤΕΣ</h3>
                    <p>Για αυτούς που περνάνε το μεγαλύτερο μέρος της ημέρας τους όρθιοι</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component2_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΕΓΚΥΟΣ ΓΥΝΑΙΚΕΣ</h3>
                    <p>Για υπέρβαρες και έγκυος γυναίκες</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component3_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΑΒΟΛΑ ΠΑΠΟΥΤΣΙΑ</h3>
                    <p>Φοράτε συχνά παπούτσια με τακούνια</p>
                </div>
            </div>
        </div>
        <div class="component_item">
            <div class="wrapper">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/components__component4_image.png" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΚΙΡΣΟΥΣ</h3>
                    <p>Παρατηρείτε ότι οι φλέβες στα πόδια σας είναι πιο έντονες και ‘πρησμένες’</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="problems_section">
    <div class="wrapper clearfix">
        <div class="image_block">
            <img src="{{asset('/')}}flexovalFiles/carapa/problems__image.jpg" alt="" title="">
        </div>
        <div class="info">
            <h3>ΓΙΑΤΙ ΕΙΝΑΙ <b>ΧΡΗΣΙΜΕΣ ΟΙ ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ?</b></h3>
            <ul>
                <li>Αποτρέπουν τις παρανυχίδες, του κάλους, το ‘κότσι’ και παρόμοια πράγματα</li>
                <li>Δεν έχουν παρενέργειες</li>
                <li>Είναι το ίδιο άνετες με παπούτσια αλλά και όταν τις φοράτε μέσα στο σπίτι χωρίς κάτι άλλο στα πόδια</li>
                <li>Πολύ υψηλή ποιότητα και άνετες</li>
            </ul>
        </div>
    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h3>ΤΙ ΚΑΝΕΙ ΤΙΣ <span>ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ ΜΟΝΑΔΙΚΕΣ ΣΤΗΝ ΑΓΟΡΑ?</span></h3>
        <div class="table">
            <div class="row">
                <div class="cell head">ΑΠΛΕΣ ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ</div>
                <div class="cell head">ΚΑΛΤΣΕΣ ΣΥΜΠΙΕΣΗΣ</div>
                <div class="cell head">ΚΡΕΜΑ ΚΑΙ ΛΑΔΙ</div>
            </div>
            <div class="row">
                <div class="cell">Δεν έχουν ολιστική δράση στους κιρσούς και την κυκλοφορία. Έχουν μόνο ένα αποτέλεσμα συμπίεσης.</div>
                <div class="cell">Έχουν ευρύ φάσμα δράσεων που καταπολεμούν το πρόβλημα από τη ρίζα του. Ως αποτέλεσμα, οι κιρσοί εξαφανίζονται.</div>
                <div class="cell">Δεν έχουν ολιστική δράση στη ρίζα του προβλήματος. Απλώς επισκευάζουν τη συνθήκη προσωρινά (όσο τις χρησιμοποιείτε).</div>
            </div>
            <div class="row">
                <div class="cell">Μετά από μερικές ημέρες χρήσης, η κόπωση και το πρήξιμο ρυθμίζονται σημαντικά.</div>
                <div class="cell">Ήδη μετά την πρώτη χρήση, η κόπωση και το πρήξιμο εξαφανίζονται. Χρειάζονται 3-4 εβδομάδες για να λυθεί το πρόβλημα.</div>
                <div class="cell">Το αποτέλεσμα είναι ορατό μόνο μετά από μία εβδομάδα και είναι πιθανό να εξαφανιστεί τελείως.</div>
            </div>
            <div class="row">
                <div class="cell">Δεν γίνεται να φοριούνται όλη μέρα – υπάρχει περιορισμένος χρόνος χρήσης. Η εμφάνιση οιδήματος είναι παρενέργεια.</div>
                <div class="cell">Δεν έχουν περιορισμένο χρόνο ραφιού. Φορέστε τες όλη μέρα. Είναι πολύ ελαφριές και άνετες.</div>
                <div class="cell">Περιορισμένο χρόνος χρήσης.</div>
            </div>
            <div class="row">
                <div class="cell">Δεν επιτρέπουν στο δέρμα να αναπνεύσει που μπορεί να οδηγήσει σε ανεπιθύμητες οσμές.</div>
                <div class="cell">Επιτρέπουν στο δέρμα να αναπνέει – όχι πια ιδρωμένα πόδια και ανεπιθύμητες οσμές.</div>
                <div class="cell">Μπορεί να έχουν ανεπιθύμητη οσμή.</div>
            </div>
            <div class="row">
                <div class="cell">Τέλειες δράσεις συμπίεσης.</div>
                <div class="cell">Τα συνδυασμένα υλικά παρέχουν επαρκή συμπίεση, έτσι δεν χρειάζεται επιπλέον προετοιμασία στις.</div>
                <div class="cell">Περισσότερες περιπτώσεις, η θεραπευμένη επιφάνεια πρέπει να καλύπτεται με επίδεσμο για να επιτευχθεί το αποτέλεσμα της συμπίεσης.</div>
            </div>
        </div>
    </div>
</section>
<section class="opinion_section">
    <div class="wrapper">
        <div class="opinion_block clearfix">
            <div class="author_info">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/opinion__photo.jpg" alt="" title="">
                </div>
                <div class="author_name"></div>
                <p></p>
            </div>
            <div class="text_block">
                <h3>ΕΠΑΓΓΕΛΜΑΤΙΚΗ <span>ΓΝΩΜΗ</span></h3>
                <p>
                    Με βάση πολλά δείγματα διαφορετικών προβλημάτων με φλέβες και κυκλοφορία, βγήκε το συμπέρασμα ότι είναι πολύ δύσκολο να υπάρχει μία καθολική μέθοδος θεραπείας για κάθε περίπτωση.
                    <br>
                    Ωστόσο, οι κάλτσες συμπίεσης το αρνούνται αυτό – εκατοντάδες ικανοποιημένοι χρήστες επιβεβαιώνουν τα εκπληκτικά αποτελέσματα στη θεραπεία αυτού του προβλήματος. Όλοι δηλώνουν ότι η κυκλοφορία επέστρεψε στα κανονικά της και ότι η ροή του αίματος έχει βελτιωθεί. Συνιστούν το προϊόν σε όλους όσους βλέπουν τους πρώτους κιρσούς. Είναι επίσης ελαφριές και άνετες και οι περισσότεροι χρήστες τις φορούν στη δουλειά.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>ΕΝΤΥΠΩΣΕΙΣ <span>ΠΕΛΑΤΩΝ</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review1_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Κατερίνα Κιτέρου, <span>Πάτρα</span></div>
                    <p>Ειλικρινά, δεν είχα πολλές ελπίδες για αυτές τις κάλτσες. Αλλά η προσιτή τιμή (πολύ πιο φθηνές από άλλες στα φαρμακεία) και οι θετικές εμπειρίες των φίλων μου με έκαναν να τις δοκιμάσω – και δεν απογοητεύτηκα. Σε λιγότερο από ένα μήνα, ξεφορτώθηκα τους κιρσούς. Τα πόδια μου έπαψαν να έχουν φαγούρα, ειδικά οι γάμπες μου. Τώρα τις φοράω κάθε μέρα τουλάχιστον 3-4 ώρες ως προστατευτικό μέσο. Είναι σπουδαίες και μπορώ να σας πω ότι νιώθω τέλεια!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review2_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Αναστασία Τέλη, <span>Αθήνα</span></div>
                    <p>Αγόρασα στη μαμά μου δύο ζευγάρια και τις αρέσουν πολύ. Λέει ότι μοιάζουν με κανονικές κάλτσες, μόνο που είναι πιο γεμάτες και μαλακές. Το αποτέλεσμα είναι τέλειο! Πριν από μερικές εβδομάδες, δεν μπορούσε ούτε να περπατήσει μέσα στο σπίτι και σήμερα παίζει στο πάρκο με τα εγγόνια της. Είμαστε πολύ ευγνώμονες για αυτές τις κάλτσες.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{asset('/')}}flexovalFiles/carapa/reviews__review3_photo.jpg" alt="" title="">
                <div class="text_block">
                    <div class="author_info">Όλγα Μαραίου, <span>Βόλος</span></div>
                    <p>Δεν περίμενα να έχω κιρσούς σε αυτή την ηλικία, αλλά συνέβη. Είδα ότι οι γάμπες μου πονούσαν κάθε βράδυ και είχα φαγούρα. Παρήγγειλα τις κάλτσες συμπίεσης μόλις τις είδα στο Instagram. Θα ήθελα να ευχαριστήσω τη γρήγορη παράδοση – χάρη σε αυτή επανήλθα γρήγορα. Η κόπωση έχει εξαφανιστεί και οι φλέβες μου δεν διαστέλλονται πια. Αυτές οι κάλτσες είναι θαύμα – τις συνιστώ ανεπιφύλακτα!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_info_section">
    <div class="wrapper">
        <h2>ΠΑΡΑΔΟΣΗ ΚΑΙ <span>ΠΛΗΡΩΜΗ</span></h2>
        <div class="info_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info1_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΠΩΣ ΠΑΡΑΓΓΕΛΝΩ?</h3>
                    <p><a style="text-decoration: none; color: #32455d;" href="#order_form">Συμπληρώστε τη φόρμα</a> στην ιστοσελίδα μας. Θα λάβετε επιβεβαίωση παραγγελία και μπορείτε να την περιμένετε σε 24-48 ώρες.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info2_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΠΑΡΑΔΟΣΗ</h3>
                    <p>Στέλνουμε τα αγαθά με γρήγορο ταχυδρομείο. Πληρώνετε τον κούριερ αφού τα λάβετε.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{asset('/')}}flexovalFiles/carapa/order_info__info3_image.jpg" alt="" title="">
                </div>
                <div class="text_block">
                    <h3>ΕΓΓΥΗΣΗ</h3>
                    <p>Δίνουμε εγγύηση ποιότητας σε όλα μας τα προϊόντα. Αν για οποιονδήποτε λόγο δεν μείνετε ικανοποιημένοι, θα σας επιστρέψουμε τα χρήματά σας.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <ul>
            <li><b>Βελτιώνει </b><br>κυκλοφορία</li>
            <li><b>Μειώνει </b><br>φλεγμονή και πρήξιμο</li>
            <li><b>Χωρίς </b><br>παρενέργειες</li>
        </ul>
        <div class="info">
            <div class="title_block">
                <h1 class="main_title">ΣΗΜΠΙΕΣΗ</h1>
                <p>ΓΙΑ ΒΕΛΤΙΩΜΕΝΗ ΚΥΚΛΟΦΟΡΙΑ <span>ΚΑΙ ΕΝΑΝΤΙΑ ΣΤΟΥΣ ΚΙΡΣΟΥΣ</span></p>
            </div>
            <div class="discount">ΕΚΠΤΩΣΗ <span>-40%</span></div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">ΠΑΛΙΑ ΤΙΜΗ:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }} </div>
                </div>
                <div class="price_item new">
                    <div class="text">ΝΕΑ ΤΙΜΗ:</div>
                    <div class="value">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</div>
                </div>
            </div>
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="input" type="text" name="name" placeholder="Όνομα και επώνυμο" required>
                <input class="input" type="tel" name="phone" placeholder="Τηλέφωνο" required>
                <input class="input" type="text" name="shipping_address" placeholder="Διεύθυνση" required>
                <input class="input" type="text" name="shipping_city" placeholder="Πόλη" required>
                <button class="button">ΠΑΡΑΓΓΕΙΛΤΕ ΤΩΡΑ</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
