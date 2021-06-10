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
                            <b>BACK STRETCH ®</b>
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 5px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;" >
                            <p style="color:#ff0000"><b>40% POPUSTA - SAMO DANAS!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 elAlign_center ui-droppable elButtonBlock de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" data-hide-on="mobile">
                        <a href="{{$checkoutView}}" id="mobileSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonShadow2 elButtonCorner3 elBTNone elButtonFull elBtnHP_00 elBtnVP_20" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 16px; cursor: pointer;">
                            <span class="elButtonMain" aria-label="">PORUČITE VAŠ BACK STRETCH</span>
                            <span class="elButtonSub" style="font-size: 13px;">KLIKNITE OVDE</span>
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
                            <b>NAJBOLJA SPRAVA ZA ISTEZANJE I PRAVILAN POLOŽAJ LEĐA</b>
                            <div><b></b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 20px;">
                            Predstavljamo vam broj 1 spravu za istezanje na tržištu
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
                        <img src="{{ asset('/') }}flexovalFiles/backstretch/backstretch_1.jpg" class="elIMG ximg" height="400" width="" alt="" style="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="innerContent col_right ui-resizable col-md-6" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="scroll-Section2" style="margin-top: 0px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 27px;">
                            <b style="color: inherit;">BACK STRETCH ®</b>
                            <b style="color: inherit;"></b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 10px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <p style="color:#ff0000"><b>40% POPUSTA - SAMO DANAS!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">

                        <a href="{{$checkoutView}}" id="desktopSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonCorner5 elButtonShadow2 elBtnVP_15 elBtnHP_40 elButtonFull" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 26px; cursor: pointer;">
                            <span class="elButtonMain">PORUČITE VAŠ BACK STRETCH</span>
                            <span class="elButtonSub">KLIKNITE OVDE</span>
                        </a>

                    </div>


                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_rs.jpg" class="elIMG ximg" alt="" height="60" tabindex="0">
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
                            <i>"Bol u leđima postaje sve češći kako starite, zbog fizički neaktivnog načina života i dugog sedenja na radnom mestu. Tokom godina leđni mišići mogu oslabiti zbog nepravilnog držanja, što pravi direktan pritisak na kičmene pršljenove."</i><div><i> - Medicinska škola Harvard</i></div>
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
                            <i>"Bol u leđima postaje sve češći kako starite, zbog fizički neaktivnog načina života i dugog sedenja na radnom mestu. Tokom godina leđni mišići mogu oslabiti zbog nepravilnog držanja, što pravi direktan pritisak na kičmene pršljenove."
                                - Medicinska skola Harvard</i>
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
                            <b>PORUČITE BACK STRETCH JOŠ DANAS!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan za sve uzraste i polove</b>
                            <div><br></div>
                            <div>
                                <b>Back Stretch je savršen za one koji bi želeli da se vrate bezbolnom životu, ali takođe da čuvaju i pružaju leđima podršku - bez skupih poseta lekaru, rizičnih operacija ili skupih lekova protiv bolova!</b>
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
                        <img src="{{ asset('/') }}flexovalFiles/backstretch/backstretch_2.png" class="elIMG ximg" alt="" height="" width="" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/backstretch/backstretch_3.png" class="elIMG ximg" alt="" height="290" width="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="col-md-6 innerContent col_right ui-resizable" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elBullet elMargin0 ui-droppable de-editable hiddenElementTools" style="margin-top: 20px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <ul class="ne elBulletList listSize1 listIconBlack listBorder0 listIconSize0 listIcon6" style="color: rgb(0, 0, 0); bullet-color:rgb(30, 201, 1);">
                            <li style="font-size: 20px;">Oslobađanje od problema s kičmom i potpuni oporavak za 30 dana</li>
                            <li style="font-size: 20px;">Ublažava bolove u leđima u roku od 10 minuta</li>
                            <li style="font-size: 20px;">Momentalno smanjuje pritisak na kičmu za 98%</li>
                            <li style="font-size: 20px;">Smanjuje rizik od skolioze kičme</li>
                            <li style="font-size: 20px;">Kod 100% ispitanika bolovi u leđima su potpuno nestali u roku od 10-15 dana korišćenja Back Stretch-a.</li>
                            <li style="font-size: 20px;">100% kupaca je prijavilo primetno povećanje energije i elana</li>
                            <li style="font-size: 20px;">97% ljudi se u potpunosti rešilo išijasa</li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">Pogledajte kako da poručite</span>
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
                        <img src="{{ asset('/') }}flexovalFiles/backstretch/backstretch_1.jpg" class="elIMG ximg" alt="" height="300" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_rs.jpg" class="elIMG ximg" alt="" height="60" tabindex="0">
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <b>PORUČITE BACK STRETCH JOŠ DANAS!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan za sve uzraste i polove</b><div><br></div>
                            <div>
                                <b>Back Stretch je savršen za one koji bi želeli da se vrate bezbolnom životu, ali takođe da čuvaju i pružaju leđima podršku - bez skupih poseta lekaru, rizičnih operacija ili skupih lekova protiv bolova!</b>
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
                            <li style="font-size: 20px;">Oslobađanje od problema s kičmom i potpuni oporavak za 30 dana</li>
                            <li style="font-size: 20px;">Ublažava bolove u leđima u roku od 10 minuta</li>
                            <li style="font-size: 20px;">Momentalno smanjuje pritisak na kičmu za 98%</li>
                            <li style="font-size: 20px;">Smanjuje rizik od skolioze kičme</li>
                            <li style="font-size: 20px;">Kod 100% ispitanika bolovi u leđima su potpuno nestali u roku od 10-15 dana korišćenja Back Stretch-a.</li>
                            <li style="font-size: 20px;">100% kupaca je prijavilo primetno povećanje energije i elana</li>
                            <li style="font-size: 20px;">97% ljudi se u potpunosti rešilo išijasa</li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">Pogledajte kako da poručite</span>
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
                            <p style="color:#2d2d2d"><b>Često postavljena pitanja (FAQ)</b></p>
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
        <h3>Zašto je Back Stretch važan?</h3>
        <div>
            <p>Kičma je pod velikim pritiskom usled fizički neaktivnog načina života. Javlja se osećaj umora i bola u leđima.
                Povećava se rizik od razvoja kile, skolioze i raznih drugih problema. Back Stretch vraća telo u pravilan položaj i kičmene pršljenove oslobađa pritiska.</p>
        </div>
        <h3>Mogu li koristiti Back Stretch za vreme vožnje u automobilu?</h3>
        <div>
            <p>Lumbalni oslonac je neophodan za one koji često voze! Zakrivljeni oblik omogućava pravilno postavljanje leđa, korekciju držanja, ublažavanje stalne napetosti.</p>
        </div>
        <h3>Ko sve može da koristi Back Stretch?</h3>
        <div>
            <p>Pogodan je za sve uzraste i polove. Ne postoji starosna granica za korišćenje. Potpuno je bezbedan i prirodan.</p>
        </div>
        <h3>Koje pogodnosti mogu da očekujem od Back Stretch-a?</h3>
        <div>
            <p>Udobnost, efikasnost, preventivno delovanje, univerzalnost i visoki kvalitet.</p>
        </div>
        <h3>Kakva je vaša politika vraćanja novca?</h3>
        <div>
            <p>Vaše zadovoljstvo je naš glavni cilj. Ako iz bilo kog razloga želite da vratite proizvod - samo nas kontaktirajte na info@wombatsbrand.com, u roku od 30 dana od prijema porudžbine, a mi ćemo izvršiti povraćaj novca i troškova dostave.</p>
        </div>
    </div>
</div>

{{--<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="desktop">--}}
    {{--<div class="containerInner ui-sortable">--}}
        {{--<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">--}}
            {{--<div id="col-full-160" class="col-md-12 innerContent col_left" style="outline: none;">--}}
                {{--<div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 35px">--}}
                    {{--<img src=""/>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- display:desktop -->
{{--<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>--}}
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(223, 223, 223); color: rgba(47, 47, 47, 0.23);" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 0px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <p style="color:#2d2d2d"><b>Evo zašto naši kupci vole Back Stretch!</b></p>
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
                            <p style="color:#2d2d2d"><b>Evo zašto naši kupci vole Back Stretch!</b></p>
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
                            <b>⭐⭐⭐⭐⭐ "Vrlo korisna stvar!"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Zbog osteohondroze imao sam velike probleme sa leđima. Propisani tretman neurologa nije pomogao.
                            Nakon ležanja na ovoj spravi možete osetiti kako se pršljenovi istežu i olakšanje dolazi odmah. Svakako bih preporučio!
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Najbolja sprava za leđa koju sam kupila u životu!"  ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Možda je ovo najbolja sprava za leđa koju sam kupila u životu, a kupovala sam ih mnogo. Činjenica je da imam probleme s leđima, tačnije imam vrlo strašne bolove u lumbalnoj regiji.
                            Dugo sam tragala za nečim što mi može pomoći, isprobala sam puno različitih masažnih proizvoda i uređaja. Ni jedan od njih nije pomogao onako kako mi je ova podrška za leđa pomogla.
                            Toplo preporučujem svima koji imaju nelagodu u leđima da isprobaju ovo čudo! Sigurna sam da ćete biti zadovoljni.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Trebalo je da ga kupim ranije!" ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Ni sam ne znam zašto ovaj proizvod nisam nabavio ranije. Bolovi u leđima su nestali jer ga koristim svakodnevno za istezanje lumbalnog dela. Sve preporuke!
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">Pogledajte kako da poručite</span>
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
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Vrlo korisna stvar!"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Zbog osteohondroze imao sam velike probleme sa leđima. Propisani tretman neurologa nije pomogao.
                            Nakon ležanja na ovoj spravi možete osetiti kako se pršljenovi istežu i olakšanje dolazi odmah. Svakako bih preporučio!
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐</b><div>
                                <b>"Najbolja sprava za leđa koju sam kupila u životu!"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Možda je ovo najbolja sprava za leđa koju sam kupila u životu, a kupovala sam ih mnogo. Činjenica je da imam probleme s leđima, tačnije imam vrlo strašne bolove u lumbalnoj regiji.
                            Dugo sam tragala za nečim što mi može pomoći, isprobala sam puno različitih masažnih proizvoda i uređaja. Ni jedan od njih nije pomogao onako kako mi je ova podrška za leđa pomogla.
                            Toplo preporučujem svima koji imaju nelagodu u leđima da isprobaju ovo čudo! Sigurna sam da ćete biti zadovoljni.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Sve pohvale!"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Pojas je stigao u predviđenom roku i sve je kao što je opisano u tekstu na sajtu, zahvalna sam i korisničkoj podršci koja mi je izašla u susret i odgovorila na sva moja pitanja.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <div><b>⭐⭐⭐⭐⭐</b></div>
                            <b>"Trebalo je da ga kupim ranije!"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Ni sam ne znam zašto ovaj proizvod nisam nabavio ranije. Bolovi u leđima su nestali jer ga koristim svakodnevno za istezanje lumbalnog dela. Sve preporuke!
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">Pogledajte kako da poručite</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('lander.flexoval.components.footer')