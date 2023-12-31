<!DOCTYPE html>
<html class="clickfunnels-com bgCover wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active wf-proximanova-i3-active wf-proximanova-n3-active elFont_helvectica wf-proximanovasoft-n4-active wf-proximanovasoft-n7-active wf-proximasoft-n4-active wf-proximasoft-i4-active wf-proximasoft-i6-active wf-proximasoft-n6-active wf-proximasoft-i7-active wf-proximasoft-n7-active avcHn2VQJenBvoR5hilPG "
      style="overflow: initial; background-color: rgb(45, 45, 45);">
<head>
    @include('components.front_header')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" media="screen" href="{{ asset('/') }}testFiles/koleno/lander.css">
    <link rel='icon' type='image/png' href='{{ asset('/') }}testFiles/shared_files/favicon.png'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,600,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700"
          rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <style>a:visited {
            color: rgb(211, 211, 211);
        }

        a {
            color: rgb(211, 211, 211);
        }</style>
</head>
<body>
<div class="container noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection wideContainer"
     style="padding-top: 10px; padding-bottom: 10px; outline: none; background-color: rgb(255, 255, 255);">
    <div class="containerInner ui-sortable">
        <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
             style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
            <div class="col-md-12 innerContent col_left" style="outline: none;">
                <div class="col-inner bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                    <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                         style="margin-top: 0px; outline: none;">
                        <img src="{{ asset('/').$product->brand->getAttribute('logo_url')}}" class="elIMG ximg" width="200" height=""
                             data-imagelink="">
                    </div>
                    <div class="de elSeperator elMargin0 ui-droppable de-editable"
                         style="margin-top: 10px; outline: none;">
                        <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                            <div class="elDividerInner" style="border-color: rgb(211, 211, 211);">
                            </div>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable"
                         style="margin-top: 10%; outline: none; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                             style="text-align: center; font-size: 30px; color:#3e54a9;">
                            <b>Благодарим, че ни избрахте!</b>
                        </div>
                    </div>
                    <div class="de elHeadlineWrapper ui-droppable de-editable"
                         style="margin-top: 10%; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                             style="text-align: center; font-size: 20px; color:#3f8fca;">
                            Поръчката Ви е получена<br/><br/>
                            Ако имате някакви въпроси или предложения, ние ще сме тук за Вас във Facebook, Instagram и
                            на <b>info@wombatshop.eu</b><br/><br/><br/><br/>
                            Ваш {{$product->brand->getAttribute('brand_name')}}
                        </div>
                    </div>

                    <div class="de elHeadlineWrapper ui-droppable de-editable"
                         style="margin-top: 10%; margin-bottom: 10%; outline: none; cursor: pointer; font-family: 'Open Sans', Helvetica, sans-serif !important;">
                        <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                             style="text-align: center; font-size: 20px; ">
                            <a href="/{{$product->getAttribute('slug')}}">Върнете се на началната страница</a>
                        </div>
                    </div>

                    <div class="de elSeperator elMargin0 ui-droppable de-editable"
                         style="margin-top: 10px; outline: none; cursor: pointer;">
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
<style>
    a:visited {
        color: rgb(211, 211, 211);
    }

    a {
        color: rgb(211, 211, 211);
    }
</style>
@include('components.front_footer')
