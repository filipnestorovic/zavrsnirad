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
                            <b>RAPID RELIEF ®</b>
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 5px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;" >
                            <p style="color:#ff0000"><b>40% POPUSTA - SAMO DANAS!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 elAlign_center ui-droppable elButtonBlock de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" data-hide-on="mobile">
                        <a href="{{$checkoutView}}" id="mobileSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonShadow2 elButtonCorner3 elBTNone elButtonFull elBtnHP_00 elBtnVP_20" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 16px; cursor: pointer;">
                            <span class="elButtonMain" aria-label="">PORUČITE VAŠ RAPID RELIEF</span>
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
                            <b>Rešite problem bolnih leđa i vrata momentalno</b>
                            <div><b>Bez lekova i nepraktičnih kućnih obloga</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 20px;">
                            Predstavljamo vam najnoviju hladno-toplu terapiju koja se pojavila na tržištu!
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
                        <img src="{{ asset('/') }}flexovalFiles/rapidrelief/paincake1.png" class="elIMG ximg" height="400" width="" alt="" style="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="innerContent col_right ui-resizable col-md-6" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="scroll-Section2" style="margin-top: 0px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 27px;">
                            <b style="color: inherit;">RAPID RELIEF ®</b>
                            <b style="color: inherit;"></b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 10px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <p style="color:#ff0000"><b>40% POPUSTA - SAMO DANAS!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">

                        <a id="desktopSubmit" href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonCorner5 elButtonShadow2 elBtnVP_15 elBtnHP_40 elButtonFull" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 26px; cursor: pointer;">
                            <span class="elButtonMain">PORUČITE VAŠ RAPID RELIEF</span>
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
                            <i>"Bol u leđima i vratu postaje sve češći kako starite, čak i od jednostavnih svakodnevnih aktivnosti. Tokom godina vaši zglobovi mogu oslabiti od trčanja, hodanja i rutinskih aktivnosti i postati skloni upali."</i><div><i> - Medicinska škola Harvard</i></div>
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
                            <i>"Bol u leđima i vratu postaje sve češći kako starite, čak i od jednostavnih svakodnevnih aktivnosti. Tokom godina vaši zglobovi mogu oslabiti od trčanja, hodanja i rutinskih aktivnosti i postati skloni upali." - Medicinska škola Harvard</i>
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
                            <b>Poručite RAPID RELIEF hladno-toplu terapiju za bolne mišiće i zglobove još danas!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan za sve uzraste i polove.</b>
                            <div><br></div>
                            <div>
                                <b>Rešava problem hroničnog bola u leđima i vratu, mišićnih upala i prenapregnutih mišića.</b>
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
                        <img src="{{ asset('/') }}flexovalFiles/rapidrelief/paincake2.png" class="elIMG ximg" alt="" height="" width="" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/rapidrelief/paincake4.png" class="elIMG ximg" alt="" height="290" width="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="col-md-6 innerContent col_right ui-resizable" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                    <div class="de elBullet elMargin0 ui-droppable de-editable hiddenElementTools" style="margin-top: 20px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <ul class="ne elBulletList listSize1 listIconBlack listBorder0 listIconSize0 listIcon6" style="color: rgb(0, 0, 0); bullet-color:rgb(30, 201, 1);">
                            <li style="font-size: 20px;">Opuštajuće hladi ili greje, prija i <b>oslobađa od pritiska i bola</b></li>
                            <li style="font-size: 20px;">Primenjuje se tako što se jednim potezom stavlja oko vrata</li>
                            <li style="font-size: 20px;">Nema lepljivih traka, curenja, kvašenja odeće i ostalih nepraktičnih stvari</li>
                            <li style="font-size: 20px;">Možete nesmetano da vršite svakodnevne aktivnosti, jer jednom stavljen <b>RAPID RELIEF ne spada dok ga vi ne skinete</b></li>
                            <li style="font-size: 20px;">Nije glomazan i kao takvog možete da ga nosite sa sobom</li>
                            <li style="font-size: 20px;">Veoma je dugotrajan i može da se upotrebi <b>beskonačan broj puta</b></li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">POGLEDAJTE KAKO DA PORUČITE</span>
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
                        <img src="{{ asset('/') }}flexovalFiles/rapidrelief/paincake1.png" class="elIMG ximg" alt="" height="300" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_rs.jpg" class="elIMG ximg" alt="" height="60" tabindex="0">
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <b>Poručite RAPID RELIEF hladno-toplu terapiju za bolne mišiće i zglobove još danas!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan za sve uzraste i polove.</b><div><br></div>
                            <div>
                                <b>Rešava problem hroničnog bola u leđima i vratu, mišićnih upala i prenapregnutih mišića.</b>
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
                            <li style="font-size: 20px;">Opuštajuće hladi ili greje, prija i <b>oslobađa od pritiska i bola</b></li>
                            <li style="font-size: 20px;">Primenjuje se tako što se jednim potezom stavlja oko vrata</li>
                            <li style="font-size: 20px;">Nema lepljivih traka, curenja, kvašenja odeće i ostalih nepraktičnih stvari</li>
                            <li style="font-size: 20px;">Možete nesmetano da vršite svakodnevne aktivnosti, jer jednom stavljen <b>RAPID RELIEF ne spada dok ga vi ne skinete</b></li>
                            <li style="font-size: 20px;">Nije glomazan i kao takvog možete da ga nosite sa sobom</li>
                            <li style="font-size: 20px;">Veoma je dugotrajan i može da se upotrebi <b>beskonačan broj puta</b></li>
                        </ul>
                    </div>
                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">POGLEDAJTE KAKO DA PORUČITE</span>
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
        <h3>Koliko dugo smem da koristim RAPID RELIEF?</h3>
        <div>
            <p>Preporučeno trajanje terapije hlađenja je od 1 do 10 minuta. Obavezna pauza između 2 terapije je minimalno 30 minuta.</p>
        </div>
        <h3>Kako se koristi?</h3>
        <div>
            <p>
                Ohladite RAPID RELIEF od 1 do 3 sata u frižideru, i stavite hladnu terapiju ramena.
                Ukoliko želite toplu terapiju stavite RAPID RELIEF oko 1 minut u mikrotalasnu. Ako želite da bude još topliji, stavite ga još 1 minut.
                Dizajniran je da vam pruži udobnost i olakšanje - gde god da se nalazite!
            </p>
        </div>
        <h3>Da li RAPID RELIEF ostavlja tragove na koži?</h3>
        <div>
            <p>Ne. Formula koja lepi za kožu ne ostavlja tragove.</p>
        </div>
        <h3>Da li mogu koristiti RAPID RELIEF za vreme treninga?</h3>
        <div>
            <p>Ne preporučujemo da u toku treninga koristite RAPID RELIEF. Hladni mišići su osetljivi na povrede.</p>
        </div>
        <h3>Kakva je vaša politika vraćanja novca?</h3>
        <div>
            <p>Vaše zadovoljstvo je naš glavni cilj. Ako iz bilo kog razloga želite da vratite proizvod - samo nas kontaktirajte na info@wombatsbrand.com u roku od 30 dana od prijema porudžbine, a mi ćemo izvršiti povraćaj novca i troškova dostave.</p>
        </div>
    </div>
</div>

<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div id="col-full-160" class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 35px">
                    <img src="{{ asset('/') }}flexovalFiles/rapidrelief/paincake5.png"/>
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
                            <p style="color:#2d2d2d"><b>RECENZIJE</b></p>
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
                            <p style="color:#2d2d2d"><b>RECENZIJE</b></p>
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
                            <b>⭐⭐⭐⭐⭐ "KONAČNO SAM USPELA DA SE REŠIM BOLOVA U RAMENIMA"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Koristim ovo čudo nekoliko meseci i moram da vam priznam da je super stvar. Leđa i ramena me ne bole, a i terapija uz RAPID RELIEF mi je potpuno uživanje.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"OPUŠTANJE MIŠIĆA NAKON NAPORNOG DANA" ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Radim u supermarketu i celo radno vreme sam prinuđena da sedim. Kada dođem kući i stavim RAPID RELIEF na leđa, toliko se opustim da potonem u san. Sve preporuke!
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐ "BOLNA LEĐA SU ZA MENE PROŠLOST"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Karatista sam i primam dosta udaraca po telu za vreme treninga. Leđa me često znaju da bole. Od kako koristim RAPID RELIEF hladnu terapiju nemam više problem sa bolom.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"NAJBOLJI ROĐENDANSKI POKLON KOJI SAM MOGAO DOBITI" ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Pošto sam imao probleme sa bolnim ramenom i leđima, brat se dosetio i za rođendan mi je poklonio RAPID RELIEF. Nakon tog rođendana, zaboravio sam kako izgleda bol. Kada me zaboli rame, samo stavim terapiju na ramena i ĆAO.
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 24px;">
                            <span class="elButtonMain">POGLEDAJTE KAKO DA PORUČITE</span>
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
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"KONAČNO SAM USPELA DA SE REŠIM BOLOVA U RAMENIMA"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Koristim ovo čudo nekoliko meseci i moram da vam priznam da je super stvar. Leđa i ramena me ne bole, a i terapija uz RAPID RELIEF mi je potpuno uživanje.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐</b><div><b>"OPUŠTANJE MIŠIĆA NAKON NAPORNOG DANA"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Radim u supermarketu i celo radno vreme sam prinuđena da sedim. Kada dođem kući i stavim RAPID RELIEF na leđa, toliko se opustim da potonem u san. Sve preporuke!
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"BOLNA LEĐA SU ZA MENE PROŠLOST"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Karatista sam i primam dosta udaraca po telu za vreme treninga. Leđa me često znaju da bole. Od kako koristim RAPID RELIEF hladnu terapiju nemam više problem sa bolom.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <div><b>⭐⭐⭐⭐⭐</b></div>
                            <b>"NAJBOLJI ROĐENDANSKI POKLON KOJI SAM MOGAO DOBITI"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Pošto sam imao probleme sa bolnim ramenom i leđima, brat se dosetio i za rođendan mi je poklonio RAPID RELIEF. Nakon tog rođendana, zaboravio sam kako izgleda bol. Kada me zaboli rame, samo stavim terapiju na ramena i ĆAO.
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 ui-droppable elAlign_left de-editable" style="margin-top: 40px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <a href="{{$checkoutView}}" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonFull elButtonCorner5 elButtonShadow2 elBtnVP_15" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 22px;">
                            <span class="elButtonMain">POGLEDAJTE KAKO DA PORUČITE</span>
                            <span class="elButtonSub"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('lander.flexoval.components.footer')
