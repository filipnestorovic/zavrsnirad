@include('lander.flexoval.components.head')

<!-- display:mobile -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 emptySection midWideContainer borderLightTop border10px addBonusBottomSpacing activeSection innerToolsTop" style="padding-top: 10px; padding-bottom: 15px; outline: none; background-color: rgb(255, 255, 255); border-color: rgb(0, 70, 129); margin-top: 0px;" data-hide-on="mobile">
    <div class="containerInner ui-sortable" style="padding-left: 20px; padding-right: 20px;">

        <!-- display:mobile -->
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin innerToolsTop" style="margin-bottom: 0px; outline: none; padding: 0px 20px;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer;">
                        <a href="#"><img src="{{ asset('/') }}flexovalFiles/shared_files/logo.jpg" class="elIMG ximg" width="125" height=""></a>
                    </div>
                    <div class="de elSeperator elMargin0 ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer;">
                        <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                            <div class="elDividerInner" style="border-color: rgb(211, 211, 211);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="margin-bottom: 0px; outline: none; padding: 10px 0px 0px; margin-top: 0px;">
            <div id="scroll-Section1" class="col-md-6 innerContent col_left ui-resizable" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 P0-top P0-bottom P0H noTopMargin shadow0">

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;" data-hide-on="mobile">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 18px;">
                            <b>Στήριγμα πλάτης®</b>
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 5px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;" >
                            <p style="color:#ff0000"><b>40% ΕΚΠΤΩΣΗ - ΣΗΜΕΡΑ ΜΟΝΟ!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 elAlign_center ui-droppable elButtonBlock de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" data-hide-on="mobile">
                        <a href="{{$checkoutView}}" id="mobileSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonShadow2 elButtonCorner3 elBTNone elButtonFull elBtnHP_00 elBtnVP_20" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 16px; cursor: pointer;">
                            <span class="elButtonMain" aria-label="">ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΟ ΣΤΗΡΙΓΜΑ ΠΛΑΤΗΣ ΣΑΣ!</span>
                            <span class="elButtonSub" style="font-size: 13px;">ΚΑΝΤΕ ΚΛΙΚ ΕΔΩ!</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- display:desktop -->
<div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 emptySection borderLightTop border10px wideContainer" style="padding-top: 20px; padding-bottom: 10px; outline: none; background-color: rgb(255, 255, 255); border-color: rgb(0, 70, 129); margin-top: 0px;" data-hide-on="desktop">
    <div class="containerInner ui-sortable" style="padding-left: 20px; padding-right: 20px;">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin innerToolsTop" style="margin-bottom: 0px; outline: none; padding: 0px 20px;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer;">
                        <a href=""><img src="{{ asset('/') }}flexovalFiles/shared_files/logo.jpg" class="elIMG ximg" width="200" height=""></a>
                    </div>
                    <div class="de elSeperator elMargin0 ui-droppable de-editable" style="margin-top: 10px; outline: none; cursor: pointer;">
                        <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                            <div class="elDividerInner" style="border-color: rgb(211, 211, 211);">
                            </div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 10px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 30px;">
                            <b>Απαλλαγείτε από τη δυσκαμψία στην πλάτη και στον λαιμό</b>
                            <div><b>Χωρίς χάπια, ακτινογραφίες ή χειρουργική επέμβαση</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 20px;">
                            Σας δίνουμε το νούμερο 1 στήριγμα στην αγορά
                        </div>
                    </div>
                    <div class="de elSeperator elMargin0 ui-droppable de-editable" style="margin-top: 10px; outline: none; cursor: pointer;">
                        <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                            <div class="elDividerInner" style="border-color: rgb(211, 211, 211);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer addBonusBottomSpacing activeSection innerToolsTop" style="padding-top: 0px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255);" data-hide-on="desktop">
    <div class="containerInner ui-sortable" style="padding-left: 0px; padding-right: 0px;">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="margin-bottom: 0px; outline: none; padding-top: 0px; padding-left: 10px; padding-right: 10px; width: 90%; max-width: 100%; margin-left: auto; margin-right: auto;">
            <div class="innerContent col_left ui-resizable col-md-6" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elImageWrapper de-image-block elMargin0 elAlign_center ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer;" data-hide-on="desktop">
                        <img src="{{ asset('/') }}flexovalFiles/ledja/gr_drposture.png" class="elIMG ximg" height="400" width="" alt="" style="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="innerContent col_right ui-resizable col-md-6" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="scroll-Section2" style="margin-top: 0px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 27px;">
                            <b style="color: inherit;">Στήριγμα πλάτης®</b>
                            <b style="color: inherit;"></b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 10px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <p style="color:#ff0000"><b>40% ΕΚΠΤΩΣΗ - ΣΗΜΕΡΑ ΜΟΝΟ!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">

                        <a href="{{$checkoutView}}" id="desktopSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonCorner5 elButtonShadow2 elBtnVP_15 elBtnHP_40 elButtonFull" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 26px; cursor: pointer;">
                            <span class="elButtonMain">ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΟ ΣΤΗΡΙΓΜΑ ΠΛΑΤΗΣ ΣΑΣ!</span>
                            <span class="elButtonSub">ΚΑΝΤΕ ΚΛΙΚ ΕΔΩ!</span>
                        </a>

                    </div>


                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_gr.png" class="elIMG ximg" alt="" height="60" tabindex="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 30px; padding-bottom: 30px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23);" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin cfRowAlignLeft" style="padding: 0px; margin: 0px auto; outline: none; width: 100%; max-width: 100%;">
            <div class="innerContent col_left ui-resizable col-md-4" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 3px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/harvard.png" class="elIMG ximg" alt="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="innerContent col_right ui-resizable col-md-8" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 3px; outline: none; cursor: pointer;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 22px; color: rgb(0, 0, 0);">
                            <i>"Ο πόνος στην πλάτη και στον αυχένα γίνεται πιο εμφανής καθώς γερνάτε, ακόμη και κατά τη διάρκεια απλών καθημερινών δραστηριοτήτων. Με τα χρόνια, ο πόνος γίνεται πιο συχνός και έντονος. Μετά τον ύπνο, όταν κάθεστε στον υπολογιστή ή συχνά χωρίς κανένα λόγο."</i><div><i> - Ιατρική Σχολή του Χάρβαρντ</i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:mobile -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container midWideContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23); margin-top: 0px;" data-hide-on="mobile">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/harvard.png" class="elIMG ximg" alt="" width="200" tabindex="0">
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 16px; color: rgb(0, 0, 0);" >
                            <i>"Ο πόνος στην πλάτη και στον αυχένα γίνεται πιο εμφανής καθώς γερνάτε, ακόμη και κατά τη διάρκεια απλών καθημερινών δραστηριοτήτων. Με τα χρόνια, ο πόνος γίνεται πιο συχνός και έντονος. Μετά τον ύπνο, όταν κάθεστε στον υπολογιστή ή συχνά χωρίς κανένα λόγο." - Ιατρική Σχολή του Χάρβαρντ</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:desktop -->
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 0px; padding-bottom: 20px; background-color: rgb(255, 255, 255); outline: none; margin-top: 0px;" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 0px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 32px;">
                            <b>ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΟ ΣΤΗΡΙΓΜΑ ΠΛΑΤΗΣ ΣΑΣ ΣΗΜΕΡΑ!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Κατάλληλο για άνδρες και γυναίκες</b>
                            <div><br></div>
                            <div>
                                <b>Αυτό το στήριγμα είναι ιδανικό για όσους θέλουν πίσω τη ζωή τους χωρίς πόνο, αλλά και για άτομα που θέλουν να βελτιώσουν τη στάση τους και να απαλλαγούν μόνιμα από τον πόνο στον λαιμό και στην πλάτη χωρίς ακριβές ιατρικές θεραπείες, επικίνδυνες χειρουργικές επεμβάσεις ή δαπανηρά παυσίπονα!</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 10px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-6 innerContent col_left ui-resizable" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable hiddenElementTools" style="margin-top: 10px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/ledja/ledja2.jpg" class="elIMG ximg" alt="" height="" width="" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/ledja/ledja3.jpg" class="elIMG ximg" alt="" height="290" width="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="col-md-6 innerContent col_right ui-resizable" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elBullet elMargin0 ui-droppable de-editable hiddenElementTools" style="margin-top: 20px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <ul class="ne elBulletList listSize1 listIconBlack listBorder0 listIconSize0 listIcon6" style="color: rgb(0, 0, 0); bullet-color:rgb(30, 201, 1);">
                            <li style="font-size: 20px;">Η μαλακή θήκη από νεοπρέν διατηρεί την πλάτη ζεστή, παρέχοντας υποστήριξη για σωστή στάση του σώματος.</li>
                            <li style="font-size: 20px;">Ιδανικό για όσους περνούν το μεγαλύτερο μέρος της ημέρας καθισμένοι στον υπολογιστή ή στο γραφείο.</li>
                            <li style="font-size: 20px;">Το σχήμα του περιγράμματος παρέχει απόλυτη άνεση και παρέχει αντιολισθητική υποστήριξη.</li>
                            <li style="font-size: 20px;">Η τεχνολογία αιχμής της σταθεροποίησης επιτρέπει ένα πλήρες φάσμα κινήσεων χωρίς συστροφή ή πίεση.</li>
                            <li style="font-size: 20px;">Διαθέτει χαμηλό προφίλ και κομψό σχεδιασμό, οπότε κανείς δεν θα ξέρει ότι το φοράτε κάτω από τα ρούχα σας.</li>
                            <li style="font-size: 20px;">Αναπνεύσιμο, ελαστικό, πλένεται στο πλυντήριο, ελαφρύ ύφασμα.</li>
                            <li style="font-size: 20px;">Ασφαλής, αποτελεσματική και φυσική εναλλακτική λύση για χειρουργική επέμβαση, ενέσεις και παυσίπονα.</li>
                            <li style="font-size: 20px;">Ιδανικό για άνδρες και γυναίκες.</li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">Πώς να παραγγείλετε</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:mobile -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container midWideContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" style="padding-top: 0px; padding-bottom: 20px; background-color: rgb(255, 255, 255); outline: none; margin-top: 0px;" data-hide-on="mobile">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 0px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/ledja/gr_drposture.png" class="elIMG ximg" alt="" height="300" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_gr.png" class="elIMG ximg" alt="" height="60" tabindex="0">
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <b>ΠΑΡΑΓΓΕΙΛΕΤΕ ΤΟ ΣΤΗΡΙΓΜΑ ΠΛΑΤΗΣ ΣΑΣ ΣΗΜΕΡΑ!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Κατάλληλο για άνδρες και γυναίκες</b><div><br></div>
                            <div>
                                <b>Αυτό το στήριγμα είναι ιδανικό για όσους θέλουν πίσω τη ζωή τους χωρίς πόνο, αλλά και για άτομα που θέλουν να βελτιώσουν τη στάση τους και να απαλλαγούν μόνιμα από τον πόνο στον λαιμό και στην πλάτη χωρίς ακριβές ιατρικές θεραπείες, επικίνδυνες χειρουργικές επεμβάσεις ή δαπανηρά παυσίπονα!</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 0px; padding-bottom: 20px; margin: 0px auto; outline: none; width: 75%; max-width: 100%;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elBullet elMargin0 ui-droppable de-editable hiddenElementTools" style="margin-top: 10px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <ul class="ne elBulletList listSize1 listIconBlack listBorder0 listIconSize0 listIcon6" style="color: rgb(0, 0, 0); bullet-color:rgb(30, 201, 1);">
                            <li style="font-size: 20px;">Η μαλακή θήκη από νεοπρέν διατηρεί την πλάτη ζεστή, παρέχοντας υποστήριξη για σωστή στάση του σώματος.</li>
                            <li style="font-size: 20px;">Ιδανικό για όσους περνούν το μεγαλύτερο μέρος της ημέρας καθισμένοι στον υπολογιστή ή στο γραφείο.</li>
                            <li style="font-size: 20px;">Το σχήμα του περιγράμματος παρέχει απόλυτη άνεση και παρέχει αντιολισθητική υποστήριξη.</li>
                            <li style="font-size: 20px;">Η τεχνολογία αιχμής της σταθεροποίησης επιτρέπει ένα πλήρες φάσμα κινήσεων χωρίς συστροφή ή πίεση.</li>
                            <li style="font-size: 20px;">Διαθέτει χαμηλό προφίλ και κομψό σχεδιασμό, οπότε κανείς δεν θα ξέρει ότι το φοράτε κάτω από τα ρούχα σας.</li>
                            <li style="font-size: 20px;">Αναπνεύσιμο, ελαστικό, πλένεται στο πλυντήριο, ελαφρύ ύφασμα.</li>
                            <li style="font-size: 20px;">Ασφαλής, αποτελεσματική και φυσική εναλλακτική λύση για χειρουργική επέμβαση, ενέσεις και παυσίπονα.</li>
                            <li style="font-size: 20px;">Ιδανικό για άνδρες και γυναίκες.</li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">Πώς να παραγγείλετε</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:both -->
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23);" data-hide-on="">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <p style="color:#2d2d2d"><b>Συχνές Ερωτήσεις</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat wideContainer emptySection addBonusBottomSpacing activeSection innerToolsTop" style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="">
    <div id="accordion">
        <h3>Τι μεγέθη στηριγμάτων πλάτης είναι διαθέσιμα?</h3>
        <div>
            <p>Το στήριγμα έχει 2 ρυθμιζόμενους ιμάντες με τους οποίους μπορείτε να προσαρμόσετε τις διαστάσεις έτσι ώστε να εφαρμόζει απολύτως στο σώμα σας.</p>
        </div>
        <h3>Μπορώ να φοράω το στήριγμα πλάτης όλη την ημέρα?</h3>
        <div>
            <p>Απολύτως, μπορείτε να φοράτε το στήριγμα όλη την ημέρα. Είτε χαλαρώνετε στο σπίτι, κατά τη διάρκεια της άσκησης ή στην εργασία. Έχει σχεδιαστεί για να σας παρέχει σωστή στάση και να διευκολύνει τις καθημερινές υποχρεώσεις.</p>
        </div>
        <h3>Δεν θα ήθελα κάτι ογκώδες. Θα χωράει κάτω από τα ρούχα?</h3>
        <div>
            <p>Ναι. Το στήριγμα διαθέτει υψηλής ποιότητας σχεδιασμό χαμηλού προφίλ. Μπορείτε να το φορέσετε κάτω από οποιοδήποτε μπλουζάκι, πουκάμισο, πουλόβερ - είναι απολύτως αδιόρατο. Είναι τόσο λεπτό και δυσδιάκριτο, που κανείς δεν θα ξέρει ότι το φοράτε.</p>
        </div>
        <h3>Ποια οφέλη θα μπορούσα να περιμένω από το στήριγμα πλάτης σας?</h3>
        <div>
            <p>Πρώτα απ’ όλα, το στήριγμα πλάτης θα σας ανακουφίσει από τον πόνο στην πλάτη και στον αυχένα, καθώς και στους ώμους. Επίσης, ανεξάρτητα από το πόσο καλά φαίνεστε, δεν μπορείτε να κρύψετε την κακή σας στάση. Η κακή στάση του σώματος δεν συμβάλλει μόνο στην υποβάθμιση της συνολικής εξωτερικής σας εμφάνισης, αλλά επίσης επηρεάζει σημαντικά τόσο τη σωματική όσο και την ψυχική σας κατάσταση. Η κακή στάση του σώματος συνεπάγεται επίσης κινδύνους εκφυλιστικών ασθενειών της σπονδυλικής στήλης που μπορούν να αφήσουν μόνιμες συνέπειες στο σώμα σας, και αυτό το στήριγμα σίγουρα θα σας βοηθήσει να βελτιώσετε τη στάση σας σε πολύ σύντομο χρονικό διάστημα.</p>
        </div>
        <h3>Ποια είναι η πολιτική επιστροφής χρημάτων?</h3>
        <div>
            <p>Η ικανοποίησή σας είναι ο νούμερο 1 στόχος μας. Εάν για οποιονδήποτε λόγο θέλετε να επιστρέψετε το προϊόν, απλώς επικοινωνήστε μαζί μας στη διεύθυνση info@wombatshop.eu, εντός 30 ημερών από την παραλαβή της παραγγελίας σας, και θα σας δώσουμε πλήρη επιστροφή χρημάτων μαζί με τα έξοδα παράδοσης.</p>
        </div>
    </div>
</div>

<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div id="col-full-160" class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 35px">
                    <img src="{{ asset('/') }}flexovalFiles/ledja/ledja4.png"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:desktop -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23);" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <p style="color:#2d2d2d"><b>Αυτοί είναι οι λόγοι για τους οποίους οι πελάτες μας λατρεύουν αυτό το στήριγμα πλάτης!</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:mobile -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container midWideContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23);" data-hide-on="mobile">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px" >
                            <p style="color:#2d2d2d"><b>Αυτοί είναι οι λόγοι για τους οποίους οι πελάτες μας λατρεύουν αυτό το στήριγμα πλάτης!</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:desktop -->
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐ "Νιώθω σαν να ξαναγεννήθηκα"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Έχω δοκιμάσει τόσους πολλούς διαφορετικούς τύπους στηριγμάτων πλάτης. Από τότε που κάνω δουλειά γραφείου, είχα μεγάλα προβλήματα με τον πόνο στον αυχένα και τη δυσκαμψία. Αυτό το στήριγμα με έχει αναγεννήσει. Συνήθιζα να αγοράζω φτηνά στηρίγματα που ήταν άχρηστα. Τελικά, κατάλαβα ότι είναι το καλύτερο πράγμα που αγόρασα για τον εαυτό μου τα τελευταία 5 χρόνια.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Ένα απαραίτητο προϊόν για όλους όσους κάθονται σε υπολογιστή"  ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Κάθομαι στον υπολογιστή για περισσότερο από 8 ώρες την ημέρα και γι’ αυτόν τον λόγο ένιωθα έντονο πόνο στον αυχένα μέχρι πρόσφατα. Χάρη σε αυτό το στήριγμα πλάτης η στάση έχει βελτιωθεί και δεν έχω πια αυτά τα προβλήματα.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐ "Οι καλύτερες συστάσεις!"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Το στήριγμα πλάτης έφτασε εγκαίρως και όλα είναι όπως περιγράφονται στο κείμενο του ιστότοπου. Είμαι επίσης ευγνώμων για την υποστήριξη πελατών που μου παρείχε βοήθεια και απάντησε σε όλες τις ερωτήσεις μου.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Χάρη σε αυτό το στήριγμα πλάτης, είμαι καλύτερα από ποτέ" ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Χάρη σε αυτό το στήριγμα πλάτης, ο πόνος στο κάτω μέρος της πλάτης και της σπονδυλικής στήλης μου έχει μειωθεί δραστικά, και η συνάδελφός μου πήρε επίσης 2 για την ίδια και τον σύζυγό της. Ευχαριστώ πολύ και εύχομαι όλα τα καλύτερα!
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">Πώς να παραγγείλετε</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display:mobile -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container midWideContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="mobile">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Νιώθω σαν να ξαναγεννήθηκα"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Έχω δοκιμάσει τόσους πολλούς διαφορετικούς τύπους στηριγμάτων πλάτης. Από τότε που κάνω δουλειά γραφείου, είχα μεγάλα προβλήματα με τον πόνο στον αυχένα και τη δυσκαμψία. Αυτό το στήριγμα με έχει αναγεννήσει. Συνήθιζα να αγοράζω φτηνά στηρίγματα που ήταν άχρηστα. Τελικά, κατάλαβα ότι είναι το καλύτερο πράγμα που αγόρασα για τον εαυτό μου τα τελευταία 5 χρόνια.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐</b><div>
                                <b>"Ένα απαραίτητο προϊόν για όλους όσους κάθονται σε υπολογιστή"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Κάθομαι στον υπολογιστή για περισσότερο από 8 ώρες την ημέρα και γι’ αυτόν τον λόγο ένιωθα έντονο πόνο στον αυχένα μέχρι πρόσφατα. Χάρη σε αυτό το στήριγμα πλάτης η στάση έχει βελτιωθεί και δεν έχω πια αυτά τα προβλήματα.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Οι καλύτερες συστάσεις!"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Το στήριγμα πλάτης έφτασε εγκαίρως και όλα είναι όπως περιγράφονται στο κείμενο του ιστότοπου. Είμαι επίσης ευγνώμων για την υποστήριξη πελατών που μου παρείχε βοήθεια και απάντησε σε όλες τις ερωτήσεις μου.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <div><b>⭐⭐⭐⭐⭐</b></div>
                            <b>"Χάρη σε αυτό το στήριγμα πλάτης, είμαι καλύτερα από ποτέ"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Χάρη σε αυτό το στήριγμα πλάτης, ο πόνος στο κάτω μέρος της πλάτης και της σπονδυλικής στήλης μου έχει μειωθεί δραστικά, και η συνάδελφός μου πήρε επίσης 2 για την ίδια και τον σύζυγό της. Ευχαριστώ πολύ και εύχομαι όλα τα καλύτερα!
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">Πώς να παραγγείλετε</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('lander.flexoval.components.footer')