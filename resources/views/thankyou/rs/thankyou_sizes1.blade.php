<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <script type="text/javascript" src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}thankyouFiles/thankyouUpSell/bootstrap.min.css">
    <style>body{background:#f4f9fd;font-family:Montserrat,sans-serif;font-size:14px;font-weight:400;color:#2e2e2e;line-height:1.5}img{max-width:100%;border:0}ul{margin:0;list-style:none}.container1{max-width:794px;margin:auto;margin-top:75px;margin-bottom:230px;background:#fff;box-shadow:0 4px 20px rgba(0,0,0,.1)}.success-page__header{background-color:#bd8f2f;background:url(data:image/png;base64,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) no-repeat center bottom,#28a6ea linear-gradient(81.52deg,#28a6ea 35.1%,#127cde 72.28%);padding:25px 10px 55px;text-align:center;color:#fff}.success-page__header-wrapper{max-width:528px;margin:auto}.success-page__header-check{background:#3cd654;width:70px;height:70px;border-radius:50%;position:relative;margin:auto;margin-bottom:25px}.success-page__header-check::after,.success-page__header-check::before{content:"";background:#fff;position:absolute}.success-page__header-check::before{width:14px;height:4px;left:19px;top:37px;transform:rotate(45deg)}.success-page__header-check::after{width:28px;height:4px;left:26px;top:34px;transform:rotate(135deg)}.success-page__title{font-weight:700;font-size:30px;margin-bottom:15px}.success-page__title span{text-transform:uppercase}.success-page__message_success{font-weight:500;line-height:1.57}.success-page__body{background:#fff;margin-top:-1px;padding:45px 10px 65px}.success-page__body-wrapper{max-width:600px;margin:auto}.success-page__text{font-size:17px;font-weight:500;margin-top:20px;padding:20px 80px 0 80px}#safe_purchase_img{width:80%;margin-left:10%;margin-bottom:20px}input::-webkit-input-placeholder{color:#b8b8b8}input::-moz-placeholder{color:#b8b8b8}input:-moz-placeholder{color:#b8b8b8}input:-ms-input-placeholder{color:#b8b8b8}.success-page__form__button button{font-size:16px;background:#3ae86b;box-shadow:0 4px 20px rgba(0,0,0,.15);color:#fff;text-align:center;width:100%;font-weight:700;border-radius:10px;padding:15px;transition:.3s;cursor:pointer;margin-bottom:30px}.success-page__form__button button:hover{box-shadow:none;background:#27ac3b}a:visited{color:#909090}a{color:#909090}@media (max-width:795px){.container1{margin-top:0;margin-bottom:0}.success-page__header{padding-top:55px}.success-page__title{font-size:24px}.success-page__body{padding:30px 10px 30px}.success-page__text{font-size:17px;margin-bottom:20px;padding:20px 40px 0 40px;text-align:center}}.upcrosssell h3{width:150px;text-align:center;margin-bottom:10px;font-weight:600;text-transform:uppercase}.upcrosssell label{margin-bottom:0}input[type=radio]:checked+label{border:4px solid #000;background-color:#d1ecfa}.cancelUpCrossSell button{background:#fff!important;color:#000;font-weight:lighter}.oldPriceUpCrossSell p{color:#000;display:inline;margin-right:2px}#lowerH{font-size:18px}.plans{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;max-width:970px;padding:25px 50px;-webkit-box-sizing:border-box;box-sizing:border-box;background:#fff;border-radius:20px;-webkit-box-shadow:0 8px 10px 0 #d8dfeb;box-shadow:0 8px 10px 0 #d8dfeb;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;text-align:center}.plans .plan input[type=radio]{position:absolute;opacity:0}.plans .plan{cursor:pointer;width:48.5%;margin-top:15px}.plans .plan .plan-content{display:-webkit-box;display:-ms-flexbox;display:flex;padding:30px;-webkit-box-sizing:border-box;box-sizing:border-box;border:2px solid #e1e2e7;border-radius:10px;-webkit-transition:-webkit-box-shadow .4s;transition:-webkit-box-shadow .4s;-o-transition:box-shadow .4s;transition:box-shadow .4s;transition:box-shadow .4s,-webkit-box-shadow .4s;position:relative}.plans .plan .plan-content img{margin-right:30px;height:72px}.plans .plan .plan-details span{margin-bottom:10px;display:block;font-size:20px;line-height:24px;color:#252f42}.container .title{font-size:20px;font-weight:500;-ms-flex-preferred-size:100%;flex-basis:100%;color:#252f42;margin-bottom:20px}.plans .plan .plan-details p{color:#646a79;font-size:14px;line-height:18px;height:auto}.plans .plan .plan-content:hover{-webkit-box-shadow:0 3px 5px 0 #e8e8e8;box-shadow:0 3px 5px 0 #e8e8e8}.plans .plan input[type=radio]:checked+.plan-content:after{content:"";position:absolute;height:8px;width:8px;background:#216fe0;right:20px;top:20px;border-radius:100%;border:3px solid #fff;-webkit-box-shadow:0 0 0 2px #06f;box-shadow:0 0 0 2px #06f}.plans .plan input[type=radio]:checked+.plan-content{border:2px solid #216ee0;background:#eaf1fe;-webkit-transition:ease-in .3s;-o-transition:ease-in .3s;transition:ease-in .3s}@media screen and (max-width:991px){.plans{margin:0 20px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;padding:40px}.plans .plan{width:100%}.plan.complete-plan{margin-top:20px}.plans .plan .plan-content .plan-details{width:70%;display:inline-block}.plans .plan input[type=radio]:checked+.plan-content:after{top:45%;-webkit-transform:translate(-50%);-ms-transform:translate(-50%);transform:translate(-50%)}}@media screen and (max-width:767px){.plans .plan .plan-content .plan-details{width:60%;display:inline-block}}@media screen and (max-width:540px){.plans .plan .plan-content img{margin-bottom:20px;height:56px;-webkit-transition:height .4s;-o-transition:height .4s;transition:height .4s}.plans .plan input[type=radio]:checked+.plan-content:after{top:20px;right:10px}}.inspiration{font-size:12px;margin-top:50px;position:absolute;bottom:10px;font-weight:300}.inspiration a{color:#666}@media screen and (max-width:767px){.inspiration{display:none}}.form .form_submit{position:relative;top:-5px;flex:1 1 100px;margin:10px;cursor:pointer;border:none;padding:20px;border-radius:10px;background-color:#708dfd;color:#fff;box-shadow:0 12px 7px -5px rgba(0,0,0,.35);transition:box-shadow .2s,top .2s,background-color .2s,flex-basis .2s}.form .form_submit:focus,.form .form_submit:hover{box-shadow:0 0 0 0 rgba(0,0,0,.35);top:0}.form .form_submit:focus{background-color:#4a65ce;outline:0}.button-58{align-items:center;background-color:#06f;border:2px solid #06f;box-sizing:border-box;color:#fff;cursor:pointer;display:inline-flex;fill:#000;font-family:Inter,sans-serif;font-size:16px;font-weight:600;height:48px;justify-content:center;letter-spacing:-.8px;line-height:24px;min-width:140px;outline:0;padding:0 17px;text-align:center;text-decoration:none;transition:all .3s;user-select:none;-webkit-user-select:none;touch-action:manipulation;margin:0 auto;margin-top:30px}.button-58:focus{color:#171e29}.button-58:hover{background-color:#3385ff;border-color:#3385ff;fill:#06f}.button-58:active{background-color:#3385ff;border-color:#3385ff;fill:#06f}@media (min-width:768px){.button-58{min-width:170px}.plans .plan .plan-details p{height:60px}}@media (max-width:768px){.button-58{width:100%}}.specialOfferHeading{text-align:center;font-size:22px;line-height:1.4em}.specialOfferHeadingBold{color:#127cde;display:block;font-weight:700}#currentOrder{padding: 0 40px;}</style>
</head>
<body>
@include('components.display_errors')
<div class="mod success-page">
    <div class="container1">
        <div class="success-page__header">
            <div class="success-page__header-wrapper">
                <div class="success-page__header-check"></div>
                <h2 class="success-page__title">
                    @if(isset($order))
                        <span>{{ $order->name }}</span>, hvala na ukazanom poverenju!
                    @else
                        Hvala na ukazanom poverenju!
                    @endif
                </h2>
                <p class="success-page__message_success">
                    @if(isset($order))
                        Vaša porudžbina sa brojem <b>#{{ $order->id_order }}</b> je prihvaćena i uskoro će biti spremna za slanje!
                    @else
                        Vaša porudžbina je prihvaćena i uskoro će biti spremna za slanje!
                    @endif
                    <br>
                </p>
            </div>
        </div>
        <div class="success-page__body">
            <div class="success-page__body-wrapper">
                @if(isset($order))
                    <div id="currentOrder">
                        <h3 class="success-page__text specialOfferHeading">
                            PREGLED VAŠE PORUDŽBINE
                        </h3>
                        <table class="table borderless" style="margin-top: 20px;">
                            <tr id="basicOrderItems">
                                <td>{{ $order->quantity }} x {{ $order->product_name }}</td>
                                <td><span class="sumItem">{{ $order->price }}</span> {{ $order->currency_symbol }}</td>
                            </tr>
                            @if(isset($successUpCrossSell))
                                <tr style="color: #3cd654;font-weight: bold;">
                                    <td>{{ $successUpCrossSell->UpCrossSellQuantity }} x {{ $successUpCrossSell->uc_product_name }}</td>
                                    <td><span class="sumItem">{{ $successUpCrossSell->UpCrossSellPrice }}</span> {{ $order->currency_symbol }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td>Dostava</td>
                                <td>
                                    @if($order->is_free_shipping)
                                        <b>BESPLATNA</b>
                                    @else
                                        <span class="sumItem">{{ $order->shipping_cost }}</span> {{ $order->currency_symbol }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>UKUPNO</th>
                                <th style="font-size: 19px;"><span id="orderSum"></span> {{ $order->currency_symbol }}</th>
                            </tr>
                        </table>
                    </div>
                @endif
                <div id="beforeForm"></div>
                @if(isset($productSizes) && isset($order))
                <form method="POST" id="pickProductSizeForm">
                    {{ csrf_field() }}
                    <input type="hidden" name="orderId" value="{{ $order->id_order }}" required/>
                    <input type="hidden" name="productSku" value="{{ $order->sku }}" required/>
                    <input type="hidden" name="productQuantity" value="{{ $order->quantity }}" required/>
                    <div class="container" style="margin-bottom:0px !important;padding-top:30px;">
                        <div class="plans">
                            <div class="title">Molimo Vas izaberite veličinu</div>
                            <p style="font-size:18px;">Kako bismo Vam poslali proizvod koji će Vam savršeno odgovarati, molimo Vas da izaberete adekvatnu veličinu a zatim kliknite na dugme <b>SAČUVAJ</b>.</p>
                                @foreach($productSizes as $singleSize)
                                    <label class="plan basic-plan" for="size-{{strtolower($singleSize->product_size)}}">
                                        <input type="radio" id="size-{{strtolower($singleSize->product_size)}}" name="size" value="{{$singleSize->product_size}}" required/>
                                        <div class="plan-content">
                                            <img src="{{ asset('/') }}thankyouFiles/thankyouSizes/size-square-{{strtolower($singleSize->product_size)}}.png" alt="" />
                                            <div class="plan-details">
                                                <span>{{$singleSize->product_size}} veličina</span>
                                                <p>{{$singleSize->description}}</p>
                                            </div>
                                        </div>
                                    </label>
                                @endforeach
                                <button class="button-58" role="button" type="submit">SAČUVAJ</button>
                        </div>
                    </div>
                </form>
                @endif
                <h3 class="success-page__text" id="lowerH">
                    Za sve informacije možete nas kontaktirati putem društvenih mreža i na <b>+38160/046-0469</b>
                    <br/><br/>
                    <p style="text-align: center;">Vaš {{ $product->brand_name }}</p>
                </h3>
                <img src="{{ asset('/') }}shared_files/safe_purchase.png" alt="Safe purchase icons" id="safe_purchase_img"/>
            </div>
            <p class="success-page__message_fail" style="margin-top: 20px; text-align: center;">
                <a href="/{{$product->slug}}">Povratak na početnu stranu</a>
            </p>
        </div>
    </div>
</div>
<script>
    const token = '{{ csrf_token() }}';
    const baseURL = "{{ asset('/') }}";

    $(document).ready(function() {
        $('#successUpCrossSell').slideDown("slow", function() {});
        function scrollToForm() {
            $('html, body').animate({
                scrollTop: $("#upCrossSellOrderForm").offset().top+100
            }, 1000);
        }
        if(window.outerWidth < 425) {
            setTimeout(scrollToForm,4000);
        }
        function orderTotal() {
            let orderSum = 0;
            $('.sumItem').each(function() {
                let singleItem = Number($(this).html());
                orderSum += singleItem;
            });
            $('#orderSum').html(orderSum.toFixed(0));
        }
        orderTotal();

        $(document).on('submit','#pickProductSizeForm',function(e) {
            e.preventDefault();
            let formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: baseURL + "selectProductSize",
                data: formData,
                success: function (data) {
                    console.log(data);
                    if(data === "1") {
                        $('#pickProductSizeForm').hide("down");
                        $('#beforeForm').html(`<div class="alert alert-success">Uspešno ste izabrali veličinu, hvala!</div>`).show();
                    } else {
                        $('#pickProductSizeForm').hide("down");
                        $('#beforeForm').html(`<div class="alert alert-danger">Greška prilikom izbora veličine, molimo da nas kontaktirate!</div>`).show();
                    }
                },
                error: function (data) {
                    console.log(data);
                    $('#pickProductSizeForm').hide("slow", function() {
                        $('#beforeForm').html(`<div class="alert alert-danger">Greška prilikom izbora veličine, molimo da nas kontaktirate!</div>`).slideDown("slow", function() {});
                    });
                }
            });
        });

    });
</script>
@include('components.pixel_footer')
</body>
</html>