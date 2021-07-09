<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <script type="text/javascript" src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}thankyouFiles/thankyouUpSell/bootstrap.min.css">
    <style>@import url(https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap);*{margin:0;padding:0;box-sizing:border-box}body{background:#f4f9fd;font-family:"Montserrat",sans-serif;font-size:14px;font-weight:400;color:#2e2e2e;line-height:1.5}img{max-width:100%;border:0}ul{margin:0;list-style:none}.container1{max-width:794px;margin:auto;margin-top:75px;margin-bottom:230px;background:#fff;box-shadow:0 4px 20px rgba(0,0,0,.1)}.success-page__header{background-color:#28a6ea;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxoAAABECAYAAAAGLENIAAAIJUlEQVR4nO3dj1EcRxYH4N5LwMoAHIHIQGQgMhAZnC4C5AhkRwDOADJAEdwSgdcR3GYwrkGvr0YLiGV3/nZ/X9XWICFXYaRt+tfvdfcqAQDAjDRN8y6ldJpSOovnSUop/967+EpPX/iKN53nNqX0dzzX7e+tVqv1k/+CQQgaAABMJkLFebxOOuFiSOsIIvcppYf216vVautfQb8EDQAARhPBog0TFymlD/HxHLTh41uEjzZ4bPyrOI6gAQDAoCJcfIpwcdZpf5qzXPFoX98Ej7cTNAAA6N1OuDgv4DucKx63Wq32I2gAANCbpmnaUPHvCBdLqFwc6j5Cx51qx/MEDQAAjhLVizZcXI6wkXuOcpvVn6vV6t6/pu8EDQAADtI0TRsqPkeLVMnVi7fY5kpHGz5qbrESNAoTb/i0s5qwu7KwjVf2WO5T9gMA9hHtUVeF7L0Y2m28qttQLmgsSISIdzuX15x2Lq/pYyVh27ngZhOX3GziZeMTAFRMwDha21Z1U0voEDRmqHO+9Pt4nu3chDmlfLNme7nNX+1TLyIAlE3AGEQOHXelLuQKGhPbCRXnI92GOQSX3ABAYaKb4lrAGNxje9VqtfqzpP8pQWNk8YbNgWJOt2H2LZ++cCd4AMCyxELoVWz0Zjx5I3kRp1cJGgOLN2q+Yv+80iPfUr5VM9L6+slnAYDJdY6p/ewUqcnlRds/ljp3EjR6Fm/Q83h9rDhY/IyzpgFgZmIfxrW5yyy1c6cvS9tELmj0oGma3AZVyhX7YxI6AGBC9mEszuMm8iXs5xA0DtDZwH3hgppe5dDxmz0dADCsTpvUF9/qRZr9Yq2gsafOXotPETKEi2G1vYi/13i5DQAMTZtUcWbZWiVo/ESEi09aoiZ3o7UKAI4Xc5vrmNtQptnMmwSNHcLFrOW0XuzFNgAwlKZpcpuUrow6bDqhY5Iqh6AhXCyRvRwAsCebvenczXE75jej2qAhXBRDWxUAvEAVgx2jVjmqChqd06KubOguzmNbVWlX9wPAIVQx2MPgi7VVBI04WcFRtHUQOGACManJ3j0z1m7j9fixfVYwHFUM3miwE6uKDRqu0K/e5BugYOliHM2V4JOU0q8ppV/iOMwcLI45GjOHj008/47nOj8FEtifKgY9uOlzD2xRQcO+C56xiQ1Qfwgc8LxOW+n7CBMn8es5nK+fg8dDSumveAogsEMVg571cvt4EUFDaxR76jWlwxI1TXMWISIHi6XuV1vHq/1h+LBardZP/gRUQBWDgW3iAuW7Q+ZPiw0andaoc28u3kjgoAoxATmPMPEhKhSlLsZsInjcCh7UQhWDkd1Eh8je4+vigkZUL3LA8MbiGAIHRYnx8X1nAabmMTLft3PXPrVaURJVDCa2d1vVIoJGp3pxEStz0KcvNo2zRDHZ+ChY7OU+Fhd6P1UFxtQ0zUWEDO93pvbqaVWzDhqqF4zIKVXMXmfT9kUEjDls1l4ioYPFiff/15TSpb89ZujZLpHZBQ0nRzGxTfQf/u4vgjmIMfEi9lhcWHTpndDB7MXC67XFBRbgh0sAZxM04iSUSydHMRMu/mMyncrF1YJPhVqi2/gBeVv7N4J5iLHgKu4EgyX5vo9j6i84UvqV6gUzJXAwGkd1z0beSP6kDQDGoopBCSYJGm7tZoEEDgbhsIvZW3fOkHdyFYNTxaAkowYNq3UUoJ10/Cf3HsKhVHMXZxutVW86Qx7eQhWD0owSNPxApUDPnq4AP6N6UYy9z5CHfahiUKrBgkbn9KhLP1ApmMDBq+K+i8+qucWxl4OjqWJQst6Dhv0XVErg4AnV3KrktiptlexFFYMa9BY0HE8LjwQO2vEwj4UCRn3yTbk2j/MiVQxqcXTQsGIHT7hlvEKquezQVsUTqhjU5uCgIWDAqxyJWwEBgz38cFMudWqapj0E4qsqBjV5U9DobPD+7I0CexM4CiRgcABjQYXiMIhrC7PUaK+g4Qcq9MIkowCxHy2fIAWH0FZViaZprsydqNlPg4aAAYMQOBZIuygD0VZVIJu94btng4aAAaMQOBZAwGAkTqsqQLRJfY1LOaF6PwQNAQMmIXDMkIDBRLZxJ4e2qgUxf4LnPQaNSOBf9BzDpKxozoCAwYy07VQ3FiHmLe7N+SpgwFOrpmluBAyYFfdwTCAmC1d6qpkhm8dnKBYl2oBxVvv3Al7SBo3mhc8B03PT+IC0O7BAqhwTU/WE/QkasAxOpumRgEEB8l4O48JIBAx4O0EDlsXG8SMIGBRKu+WABAw4nKABy6Rn+w0EDCpyH6Hjm7HhOAIGHE/QgOXTs/2CmChcOvCCSgkdb2RRAvolaEA5cpWj+p5tK5HwxH3s6WhDx/rJZysXY8ZFLEoIGNATQQPK1IaOu6h0VDGpsBIJe/v/okRKaV3rvT0xZnyKgGFRAgYgaED5ig0dMVHIq5AmCnCYXO14KL0aKlzAuAQNqEteyWyDx/0SVzI74eJDPFUvoD/tmNAuSHyLsWLxFY+madpLOD8KFzA+QQPqdr+ECUXTNGedYGGiAONad14Pcw8fsRhxHq+PbvuH6QgaQFdeyfxvtFGM3moVk4Q2WLzvTBZULWBe1lEhfYiPt1MEkBgvTmMh4izGC8ECZkLQAF7TnVD8L57tZGJz6KQiJgc5UJyklH6N55lJAizaNsaLbXesiFfKn9t37OiMFafx+sV4AcshaADHypOK1yYOpztPgJfu9zBOQAEEDQAAoHf/8i0FAAD6JmgAAAC9EzQAAIDeCRoAAEDvBA0AAKBfKaV/ALht5FumlEqSAAAAAElFTkSuQmCC) no-repeat center bottom,#28a6ea linear-gradient(81.52deg,#28a6ea 35.1%,#127cde 72.28%);padding:45px 10px 65px;text-align:center;color:#fff}.success-page__header-wrapper{max-width:528px;margin:auto}.success-page__header-check{background:#3cd654;width:70px;height:70px;border-radius:50%;position:relative;margin:auto;margin-bottom:25px}.success-page__header-check::after,.success-page__header-check::before{content:"";background:#fff;position:absolute}.success-page__header-check::before{width:14px;height:4px;left:19px;top:37px;transform:rotate(45deg)}.success-page__header-check::after{width:28px;height:4px;left:26px;top:34px;transform:rotate(135deg)}.success-page__title{font-weight:700;font-size:30px;margin-bottom:15px}.success-page__title span{text-transform:uppercase}.success-page__message_success{font-weight:500;line-height:1.57}.success-page__body{background:#fff;margin-top:-1px;padding:85px 10px 65px}.success-page__body-wrapper{max-width:385px;margin:auto}.success-page__text{font-size:16px;font-weight:500;margin-bottom:18px}.list-info{background:#f4f9fd;padding:20px;margin-bottom:15px}.list-info__text{color:#000;font-weight:600;margin-right:10px}.success-page__message_fail__link{color:#147fdf;margin-bottom:40px;display:inline-block}.success-page__message_fail__link:hover{text-decoration:none}.success-page__text{font-size:16px;font-weight:500;margin-bottom:30px}.success-page__form__input{font-family:"Montserrat",sans-serif;outline:none;height:52px;padding:20px;border:1px solid #b8b8b8;border-radius:10px;width:100%;margin-bottom:25px}.success-page__form__label{display:block;margin-bottom:10px}input::-webkit-input-placeholder{color:#b8b8b8}input::-moz-placeholder{color:#b8b8b8}input:-moz-placeholder{color:#b8b8b8}input:-ms-input-placeholder{color:#b8b8b8}.success-page__form__button button{font-size:16px;background:#3AE86B;box-shadow:0 4px 20px rgba(0,0,0,.15);color:#fff;text-align:center;width:100%;font-weight:700;border-radius:10px;padding:15px;transition:0.3s;cursor:pointer;margin-bottom:30px}.success-page__form__button button:hover{box-shadow:none;background:#27ac3b}a:visited{color:rgb(144,144,144)}a{color:rgb(144,144,144)}@media (max-width:795px){.container1{margin-top:0;margin-bottom:0}.success-page__header{padding-top:55px}.success-page__title{font-size:24px}.success-page__body{padding:30px 10px 130px}.success-page__text{font-size:14px;margin-bottom:20px}}.upcrosssell h3{width:150px;text-align:center;color:#fff;margin-bottom:10px;font-weight:600;text-transform:uppercase}.upCrossSellRadio{visibility:hidden}.upcrosssell{flex-wrap:wrap;background-color:#C6E2FF;margin-bottom:20px!important}.upcrosssell label{margin-bottom:0}.img-holder{padding:10px;border:2px solid #fff;max-width:320px;margin:10px;cursor:pointer}.img{max-width:180px}input[type="radio"]:checked+label>.img-holder{border:2px solid #E84343}.cancelUpCrossSell button{background:white!important;color:#000;font-weight:lighter}.pricesUpCrossSell{width:100%;display:block;text-align:center;margin-bottom:10px;font-size:18px}.oldPriceUpCrossSell{color:red;text-decoration:line-through;text-decoration-thickness:2px}.oldPriceUpCrossSell p{color:#000;display:inline;margin-right:2px}.newPriceUpCrossSell{font-size:22px;font-weight:700}.labelUpCrossSell{position:relative}.quantity-badge{background-color:rgba(242,242,242,1);text-align:center;border-radius:50%;border:1px solid grey;padding:10px;font-size:20px;position:absolute;top:-10px;left:-15px;width:50px!important;height:50px!important}.best-option-badge{position:absolute;top:-25px;right:-30px;width:90px!important;height:90px!important}@media (max-width:767px){.upcrosssell{margin:0 -10px 20px -10px!important}}</style>
    <style>
        .specialOfferHeading {
            text-align: center;
            font-size: 22px;
            line-height: 1.4em;
        }
        .specialOfferHeadingBold {
            color: #127cde;
            display: block;
            font-weight: bold;
        }
    </style>
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
                        <span>{{ $order->name }}</span>, hvala na porudžbini!
                    @else
                        Hvala na porudžbini!
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
                @if(isset($successUpCrossSell))
                    <div class="alert alert-success">
                        Hvala! Proizvod je uspešeno dodat Vašoj porudžbini!
                    </div>
                    <br>
                @else
                    @if(isset($order))
                    @isset($upCrossSells)
                        <h3 class="success-page__text specialOfferHeading">KAO ZNAK ZAHVALNOSTI NUDIMO VAM OVU <span class="specialOfferHeadingBold">NEVEROVATNU PONUDU</span> KOJA SE NE PROPUŠTA!</h3>
                        {{--<h3 class="success-page__text specialOfferSubheading">SAMO SADA</h3>--}}
                        <form action="/upCrossSellOrder" method="POST" id="upCrossSellOrderForm">
                            {{ csrf_field() }}
                            <input type="hidden" name="orderIdUpCrossSell" value="{{ $order->id_order }}"/>
                            <input type="hidden" name="variationIdUpCrossSell" value="{{ $order->variation_id }}"/>
                            <input type="hidden" name="sessionIdUpCrossSell" value="{{ $session_id }}"/>
                            <input type="hidden" name="firstOrderQuantity" value="{{ $order->quantity }}"/>
                            @isset($test_variation_id)
                            <input type="hidden" name="testVariationIdUpCrossSell" value="{{ $test_variation_id }}"/>
                            @endisset
                            <div class="upcrosssell d-inline-flex p-2 justify-content-center">
                                @foreach($upCrossSells as $crossSell)
                                    @if($crossSell['is_crossSell'])
                                        <input type="hidden" name="isCrossSell" value="1"/>
                                        <input type="hidden" name="hiddenPriceUpCrossSell-{{ $crossSell['id_upcrosssell'] }}" value="{{ $crossSell['pricePerPiece']*$crossSell['quantity'] }}"/>
                                        <input type="hidden" name="quantityUpCrossSell-{{ $crossSell['id_upcrosssell'] }}" value="{{ $crossSell['quantity'] }}"/>
                                        <input type="hidden" name="isFreeShippingUpCrossSell-{{ $crossSell['id_upcrosssell'] }}" value="{{ $crossSell['isFreeShipping'] }}"/>
                                        <input type="hidden" name="productIdUpCrossSell-{{ $crossSell['id_upcrosssell'] }}" value="{{ $crossSell['upcrosssell_product_id'] }}"/>
                                        <input type="hidden" name="skuUpCrossSell-{{ $crossSell['id_upcrosssell'] }}" value="{{ $crossSell['sku'] }}"/>
                                        <h3 class="success-page__text">{{ $crossSell['description'] }}</h3>
                                        <input type="radio" class="upCrossSellRadio" value="{{ $crossSell['id_upcrosssell'] }}" id="rb-{{ $crossSell['id_upcrosssell'] }}" name="upCrossSellId" @if($crossSell['isBestOption']) checked @endif/>
                                        <label class="labelUpCrossSell" for="rb-{{ $crossSell['id_upcrosssell'] }}">
                                        @if($upCrossSells[0]['upSellCount'] > 1)
                                            <span class="quantity-badge">{{ $crossSell['quantity'] }}</span>
                                        @endif
                                        @if($crossSell['isBestOption'])
                                            <span class="best-option-badge"><img src="{{ asset('/')}}thankyouFiles/thankyouUpSell/best-offer-badge.png"/></span>
                                        @endif
                                        <div class="img-holder">
                                            <img class="img" src="{{ asset('/').$crossSell['product_image'] }}"/>
                                        </div>
                                        </label>
                                        @if(count($prices) === 1)
                                            <span class="pricesUpCrossSell"><span class="oldPriceUpCrossSell"><p>{{ $prices[1]['amount']*$crossSell['quantity'] }} RSD</p></span> <span class="newPriceUpCrossSell">{{ $crossSell['pricePerPiece']*$crossSell['quantity'] }} RSD</span></span>
                                        @else
                                            <span class="pricesUpCrossSell">SAMO SADA <span class="newPriceUpCrossSell">{{ $crossSell['pricePerPiece']*$crossSell['quantity'] }} RSD</span></span>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                            <div class="success-page__form__button"><button type="submit">DODAJ U PORUDŽBINU</button></div>
                            <div class="success-page__form__button cancelUpCrossSell"><button id="cancelUpCrossSell" type="button">NE, HVALA</button></div>
                        </form>
                    @endisset
                    @endif
                @endif
                <h3 class="success-page__text" id="lowerH">
                    Za sve informacije možete nas kontaktirati putem društvenih mreža i na <b>060/046-0469</b>
                    <br/><br/>
                    <p style="text-align: center;">Vaš {{ $product->brand_name }}</p>
                </h3>
                <img src="{{ asset('/') }}shared_files/safe_purchase.png" alt="Safe purchase icons"/>
            </div>
            <p class="success-page__message_fail" style="margin-top: 20px; text-align: center;">
                <a href="/{{$product->slug}}">Povratak na početnu stranu</a>
            </p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.alert-success').slideDown("slow", function() {});
        function scrollToForm() {
            $('html, body').animate({
                scrollTop: $("#upCrossSellOrderForm").offset().top+100
            }, 1000);
        }
        if(window.outerWidth < 425) {
            setTimeout(scrollToForm,4000);
        }
        $('#cancelUpCrossSell').click(function() {
            $('#upCrossSellOrderForm').slideUp("slow", function() {});
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>