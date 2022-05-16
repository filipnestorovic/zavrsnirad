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
                            <b>Correct Belt ®</b>
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 5px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;" >
                            <p style="color:#ff0000"><b>40% POPUSTA - SAMO DANAS!</b></p>
                        </div>
                    </div>

                    <div class="de elBTN elMargin0 elAlign_center ui-droppable elButtonBlock de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;" data-hide-on="mobile">
                        <a href="{{$checkoutView}}" id="mobileSubmit" class="elButton elButtonSize1 elButtonColor1 elButtonSquare elButtonPadding3 elButtonShadow2 elButtonCorner3 elBTNone elButtonFull elBtnHP_00 elBtnVP_20" style="color: rgb(255, 255, 255); background-color: rgb(26, 184, 0); font-size: 16px; cursor: pointer;">
                            <span class="elButtonMain" aria-label="">PORUČITE VAŠ CORRECT BELT</span>
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
                            <b>Oslobodite se ukočenosti u leđima i vratu</b>
                            <div><b>Bez tableta, snimaka ili hirurgije</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 20px;">
                            Predstavljamo vam broj 1 pojas za leđa na tržištu
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
                        <img src="{{ asset('/') }}flexovalFiles/backsupport/ledja1.jpg" class="elIMG ximg" height="400" width="" alt="" style="" tabindex="0">
                    </div>
                </div>
            </div>
            <div class="innerContent col_right ui-resizable col-md-6" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elHeadlineWrapper ui-droppable de-editable" id="scroll-Section2" style="margin-top: 0px; cursor: pointer; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 27px;">
                            <b style="color: inherit;">Correct Belt ®</b>
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
                            <span class="elButtonMain">PORUČITE VAŠ CORRECT BELT</span>
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
                            <i>"Bol u leđima i vratu postaje sve češći kako starite, čak i od jednostavnih svakodnevnih aktivnosti. Tokom godina bol postaje sve učestaliji i intenzivniji – Nakon spavanja, prilikom sedenja za računarom ili često bez ikakvog razloga."</i><div><i> - Medicinska škola Harvard</i></div>
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
                            <i>"Bol u leđima i vratu postaje sve češći kako starite, čak i od jednostavnih svakodnevnih aktivnosti. Tokom godina bol postaje sve učestaliji i intenzivniji – Nakon spavanja, prilikom sedenja za računarom ili često bez ikakvog razloga." - Medicinska Škola Harvard</i>
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
                            <b>PORUČITE CORRECT BELT JOŠ DANAS!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;" >
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan i za muškarce i za žene</b>
                            <div><br></div>
                            <div>
                                <b>Ovaj pojas je savršen za one koji bi želeli da se vrate bezbolnom životu, ali takođe da poboljšaju svoje držanje i trajno se reše bolova u vratnom i leđnom delu - bez skupih poseta lekaru, rizičnih operacija ili skupih lekova protiv bolova!</b>
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
                        <img src="{{ asset('/') }}flexovalFiles/backsupport/ledja2.jpg" class="elIMG ximg" alt="" height="" width="" tabindex="0">
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
                            <li style="font-size: 20px;">Mekani neoprenski materijal<b> održava leđa toplim, pruža potporu za pravilno držanje.</b></li>
                            <li style="font-size: 20px;">Savršeno za one koji većinu dana provode sedeći za računarom ili u kancelariji.</li>
                            <li style="font-size: 20px;">Oblikovana kontura omogućava <b>maksimalnu udobnost i sprečava sklizavanje.</b></li>
                            <li style="font-size: 20px;"><b>Najsavremenija tehnologija stabilizacije omogućava puni opseg pokreta bez uvijanja ili istezanja.</b></li>
                            <li style="font-size: 20px;">Niskog profila i elegantnog dizajna, tako da niko neće znati da ovo nosite ispod odeće.</li>
                            <li style="font-size: 20px;">Prozračan, rastegljiv, lagan materijal koji se može prati u mašini.</li>
                            <li style="font-size: 20px;">Sigurna, efikasna i prirodna alternativa operaciji, injekcijama i lekovima protiv bolova</li>
                            <li style="font-size: 20px;">Savršeno i za muškarce i za žene<br></li>
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
                        <img src="{{ asset('/') }}flexovalFiles/backsupport/ledja1.jpg" class="elIMG ximg" alt="" height="300" tabindex="0">
                    </div>
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" style="margin-top: 20px; outline: none; cursor: pointer;">
                        <img src="{{ asset('/') }}flexovalFiles/shared_files/stars_rs.jpg" class="elIMG ximg" alt="" height="60" tabindex="0">
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px">
                            <b>PORUČITE CORRECT BELT JOŠ DANAS!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 25px; cursor: pointer; outline: none; display: block; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px; color: rgb(0, 0, 0);">
                            <b>Pogodan i za muškarce i za žene</b><div><br></div>
                            <div>
                                <b>Ovaj steznik je savršen za one koji bi želeli da se vrate bezbolnom životu, ali takođe da poboljšaju svoje držanje i trajno se reše bolova u vratnom i leđnom delu - bez skupih poseta lekaru, rizičnih operacija ili skupih lekova protiv bolova!</b>
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
                            <li style="font-size: 20px;">Mekani neoprenski materijal<b> održava leđa toplim, pruža potporu za pravilno držanje.</b></li>
                            <li style="font-size: 20px;">Savršeno za one koji većinu dana provode sedeći za računarom ili u kancelariji.</li>
                            <li style="font-size: 20px;">Oblikovana kontura omogućava <b>maksimalnu udobnost i sprečava sklizavanje.</b></li>
                            <li style="font-size: 20px;"><b>Najsavremenija tehnologija stabilizacije omogućava puni opseg pokreta bez uvijanja ili istezanja.</b></li>
                            <li style="font-size: 20px;">Niskog profila i elegantnog dizajna, tako da niko neće znati da ovo nosite ispod odeće.</li>
                            <li style="font-size: 20px;">Prozračan, rastegljiv, lagan materijal koji se može prati u mašini.</li>
                            <li style="font-size: 20px;">Sigurna, efikasna i prirodna alternativa operaciji, injekcijama i lekovima protiv bolova</li>
                            <li style="font-size: 20px;">Savršeno i za muškarce i za žene<br></li>
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
        <h3>Koje su veličine Correct Belt-a?</h3>
        <div>
            <p>Dostupne veličine pojasa: M, L, XL</p>
        </div>
        <h3>Mogu li nositi Correct Belt ceo dan?</h3>
        <div>
            <p>Apsolutno, možete nositi Correct Belt tokom celog dana. Bilo da se opuštate kod kuće, vežbate ili ste na poslu. Dizajniran je da Vam obezbedi pravilno držanje I olakša svakodnevne obaveze.</p>
        </div>
        <h3>Ne želim nešto glomazno - Hoće li steznik stati ispod odeće?</h3>
        <div>
            <p>Da, steznik je vrhunskog niskoprofilnog dizajna. Možete ga nositi ispod bilo koje majice, košulje, džempera – apsolutno je neprimetan. Toliko je tanak i diskretan - niko neće znati da ga nosite</p>
        </div>
        <h3>Koje pogodnosti mogu da očekujem od Correct Belt-a?</h3>
        <div>
            <p>Pre svega Correct Belt će Vas rešiti bolova u leđima I vratnom delu kao I ramenima. Takođe Bez obzira na to koliko lepo izgledate, loše držanje tela se ne možete sakriti. Ne samo da povijena leđa doprinose skrnavljenu sveukupne vizuelne slike o vama, već u značajnoj meri utiču, kako na fizičko, tako i na psihičko stanje. Loše držanje sa sobom nosi i rizike od degenerativnih bolesti kičme koje mogu ostaviti trajne posledice na Vaš organizam, a ovaj pojas će Vam sa sigurnošću pomoći da popravite svoje držanje u vrlo kratkom vremenskom roku.</p>
        </div>
        <h3>Kakva je vaša politika vraćanja novca?</h3>
        <div>
            <p>Vaše zadovoljstvo je naš glavni cilj. Ako iz bilo kog razloga želite da vratite proizvod - samo nas kontaktirajte na info@flexoval.com, u roku od 30 dana od prijema porudžbine, a mi ćemo izvršiti povraćaj novca i troškova dostave.</p>
        </div>
    </div>
</div>

<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer" style="padding-top: 20px; padding-bottom: 40px; background-color: rgb(255, 255, 255); outline: none;" data-hide-on="desktop">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div id="col-full-160" class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 35px">
                    <img src="{{ asset('/') }}flexovalFiles/backsupport/ledja4.png"/>
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
                            <p style="color:#2d2d2d"><b>Evo zašto naši kupci vole Correct Belt!</b></p>
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
                            <p style="color:#2d2d2d"><b>Evo zašto naši kupci vole Correct Belt!</b></p>
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
                            <b>⭐⭐⭐⭐⭐ "Osećam se kao ponovo rođen"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Isprobao sam toliko različitih vrsti pojaseva. Pošto radim kancelarijski posao imao sam velikih problema sa bolovima u vratu I ukočenošću. Ovaj pojas me je preporodio. Ranije sam kupovao jeftine pojaseve koji su bili beskorisni. Na kraju sam zaključio je ovo najbolja stvar koju sam priuštio sebi u poslednjih 5 godina..
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Neophodan proizvod za sve koji sede za kompjuterom"  ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Za kompjuterom sam u proseku više od 8h dnevno i zbog toga sam do skoro osećao jake bolove u vratu. Zahvaljujući ovom pojasu držanje se popravilo i nemam više tih problema.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐ "Sve pohvale!"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Correct Belt je stigao u predviđenom roku i sve je kao što je opisano u tekstu na sajtu, zahvalna sam i korisničkoj podršci koja mi je izašla u susret i odgovorila na sva moja pitanja.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: right; font-size: 24px;">
                            <b>"Zahvaljujući ovom pojasu, ja sam bolje nego ikad" ⭐⭐⭐⭐⭐</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Zahvaljujući ovom pojasu drasntično sam smanjila bolove u gornjim leđima i kičmi. Koleginica je takođe uzela 2 za nju i muža. Hvala puno i sve najbolje!
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
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Osećam se kao ponovo rođen"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Isprobao sam toliko različitih vrsti pojaseva. Pošto radim kancelarijski posao imao sam velikih problema sa bolovima u vratu I ukočenošću. Ovaj pojas me je preporodio. Ranije sam kupovao jeftine pojaseve koji su bili beskorisni. Na kraju sam zaključio je ovo najbolja stvar koju sam priuštio sebi u poslednjih 5 godina..
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐</b><div>
                                <b>"Neophodan proizvod za sve koji sede za kompjuterom"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Za kompjuterom sam u proseku više od 8h dnevno i zbog toga sam do skoro osećao jake bolove u vratu. Zahvaljujući ovom pojasu držanje se popravilo i nemam više tih problema.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <b>⭐⭐⭐⭐⭐&nbsp;</b><div><b>"Sve pohvale!"</b></div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Correct belt je stigao u predviđenom roku i sve je kao što je opisano u tekstu na sajtu, zahvalna sam i korisničkoj podršci koja mi je izašla u susret i odgovorila na sva moja pitanja.
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 30px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 24px;">
                            <div><b>⭐⭐⭐⭐⭐</b></div>
                            <b>"Zahvaljujući ovom pojasu, ja sam bolje nego ikad"</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable" style="margin-top: 15px; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 20px;">
                            Zahvaljujući ovom pojasu drasntično sam smanjila bolove u gornjim leđima i kičmi. Koleginica je takođe uzela 2 za nju i muža. Hvala puno i sve najbolje!
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
