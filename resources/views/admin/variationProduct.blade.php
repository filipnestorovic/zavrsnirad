@extends('admin.adminTemplate')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('variationsIndex') }}">Variations</a></li>
            <li class="breadcrumb-item active" aria-current="page">Variation</li>
        </ol>
    </nav>

    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <form action="{{ route('editVariation') }}" id="formVariation" method="POST">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">Edit variation</div>
                        <div class="card-body">
                            <input type="hidden" name="variationIdEdit" id="variationIdEdit" value="{{ $variation->id_variation }}"/>
                            <input type="hidden" name="productIdVariationEdit" id="productIdVariationEdit" value="{{ $variation->product_id }}"/>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Variation name</span>
                                </div>
                                <input type="text" name="variationNameEdit" id="variationNameEdit" class="form-control" data-value="variationNameEdit" value="{{ $variation->variation_name }}" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Variation description</span>
                                </div>
                                <textarea name="variationDescriptionEdit" id="variationDescriptionEdit" class="form-control" data-value="variationDescriptionEdit" cols="10" rows="3">{{ $variation->variation_description }}</textarea>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Lander</span>
                                </div>
                                <select name="landerIdVariationEdit" id="landerIdVariationEdit" data-toggle="dropdown" required>
                                    @foreach($landers as $lander)
                                        <option value="{{ $lander->id_lander }}"
                                        @if($lander->id_lander === $variation->lander_id) selected @endif
                                        >{{ $lander->lander_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Checkout</span>
                                </div>
                                <select name="checkoutIdVariationEdit" id="checkoutIdVariationEdit" data-toggle="dropdown" required>
                                    @foreach($checkouts as $checkout)
                                        <option value="{{ $checkout->id_checkout }}"
                                        @if($checkout->id_checkout === $variation->checkout_id) selected @endif
                                        >{{ $checkout->checkout_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Thankyou</span>
                                </div>
                                <select name="thankyouIdVariationEdit" id="thankyouIdVariationEdit" data-toggle="dropdown" required>
                                    @foreach($thankyous as $thankyou)
                                        <option value="{{ $thankyou->id_thankyou }}"
                                        @if($thankyou->id_thankyou === $variation->thankyou_id) selected @endif
                                        >{{ $thankyou->thankyou_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Default</span>
                                </div>
                                <select name="defaultVariationEdit" id="defaultVariationEdit" data-toggle="dropdown" required>
                                    <option value="0"
                                    @if($variation->is_variation_default === 0) selected @endif
                                    >No</option>
                                    <option value="1"
                                            @if($variation->is_variation_default === 1) selected @endif
                                    >Yes</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                                </div>
                                <select name="isVariationActiveEdit" id="isVariationActiveEdit" data-toggle="dropdown" required>
                                    <option value="1"
                                    @if($variation->is_active === 1) selected @endif
                                    >Yes</option>
                                    <option value="0"
                                    @if($variation->is_active === 0) selected @endif
                                    >No</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="editVariationBtn" class="btn btn-primary btn-lg btn-block" @if($disableButtons === 1) disabled @endif>Edit variation</button>
                                @if($variation->deleted_at == null)
                                    <a style="width: 100% !important;" class="deleteVariationBtn" href="{{ route('deleteVariation',['id' => $variation->id_variation]) }}"><button type="button" id="deleteVariationBtn" class="btn btn-danger btn-lg btn-block deleteVariationBtn" @if($disableButtons === 1) disabled @endif>Delete variation</button></a>
                                @else
                                    <a style="width: 100% !important;" href="{{ route('restoreVariation',['id' => $variation->id_variation]) }}"><button type="button" id="restoreVariationBtn" class="btn btn-success btn-lg btn-block restoreVariationBtn">Restore variation</button></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card mt-5">
                    <div class="card-header">Statistic</div>
                    <div class="card-body">
                        <table id="statisticTable" class="table table-bordered table-responsive-sm table-striped text-center">
                            <tr>
                                <th>Quantity</th>
                                <th>Orders</th>
                                <th>Percentage</th>
                            </tr>
                            @foreach($groupedOrders as $singleRow)
                                @php
                                    $percentage = round(($singleRow->order_count/$allOrders)*100);
                                @endphp
                                <tr>
                                    <td>{{ $singleRow->quantity }}</td>
                                    <td>{{ $singleRow->order_count }}</td>
                                    <td>{{ $percentage }}%</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <th>Total orders</th>
                                    <th colspan="2">{{ $allOrders }}</th>
                                </tr>
                                <tr>
                                    <th>Revenue</th>
                                    <th colspan="2">{{ $totalRevenue }} {{ $currency_symbol }}</th>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('addPricesToVariation') }}" id="formVariationPrices" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="variationIdPrices" id="variationIdPrices" value="{{ $variation->id_variation }}"/>
                            <input type="hidden" name="currencyIdPrices" id="currencyIdPrices" value="{{ $currency_id }}"/>
                            <div class="card">
                                <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Prices</h5>
                                <div class="card-body">
                                    <div id="pricesDiv" class="table-editable">
                                        <table class="table table-bordered table-responsive-sm table-striped text-center">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Default</th>
                                                <th class="text-center">Free shipping</th>
                                                <th class="text-center"></th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablePriceBody">
                                            @for($i=1;$i<=4;$i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                        <span>
                                                             <input type="text" value="@if(isset($prices[$i])){{ $prices[$i]['amount'] }}@endif" tabindex="{{ $i }}" class="form-control priceInput" id="priceFor{{ $i }}" name="priceFor{{ $i }}" style="width: 100px !important; display: inline-block !important;"/>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <input type="radio" class="form-control" name="isPriceDefault" value="{{ $i }}"
                                                        @if(isset($prices[$i]) && $prices[$i]['is_default'] === 1) checked @endif
                                                        />
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="form-control" name="isFreeShipping[{{$i}}]" value="{{ $i }}"
                                                        @if(isset($prices[$i]) && $prices[$i]['is_free_shipping'] === 1) checked @endif
                                                        />
                                                    </td>
                                                    <td>
                                                        @if(isset($prices[$i]) && $prices[$i]['id_variations_prices'] != null)
                                                            <span class="table-remove"><a class="deletePriceBtn" href="{{ route('deleteVariationPrice',['id' => $prices[$i]['id_variations_prices']]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deletePriceBtn" @if($disableButtons === 1) disabled @endif>DELETE</button></a></span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endfor
                                            <tr>
                                                <td colspan="5">
                                                    <button type="submit" tabindex="5" id="addPricesBtn" class="btn btn-primary btn-lg btn-block" @if($disableButtons === 1) disabled @endif>Add prices</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('addCouponsToVariation') }}" id="formVariationCoupon" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="variationIdCoupons" id="variationIdCoupons" value="{{ $variation->id_variation }}"/>
                            <div class="card">
                                <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Coupons</h5>
                                <div class="card-body">
                                    <div id="couponsDiv">
                                        @isset($coupons)
                                            @foreach($coupons as $coupon)
                                                <span class="spanCoupon">
                                                <input type="checkbox" class="couponCheckbox" name="variation_coupons[]" id="coupon{{ $coupon->id_coupon }}" value="{{ $coupon->id_coupon }}"
                                                @if(in_array($coupon->id_coupon,$variationCoupons)) checked @endif
                                                />
                                                <label class="couponLabel" for="coupon{{ $coupon->id_coupon }}">{{ $coupon->coupon }} ({{ $coupon->discount }}%)</label>
                                                </span>
                                            @endforeach
                                        @endisset
                                    </div>
                                    <button type="submit" id="addCouponsBtn" class="btn btn-primary btn-lg btn-block">Add coupons</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #couponsDiv {
            margin: 20px 10px;
        }
        .spanCoupon {
            margin-left: 10px;
        }
        .couponCheckbox {
            cursor: pointer;
        }
        .couponLabel {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            cursor: pointer;
            margin-left: 3px;
        }
    </style>
@endsection

@section('scripts')
    <script>
        var disableButtons = '{{$disableButtons}}';
        $(document).ready(function () {
            $('.priceInput').after(" {{ $currency_symbol }}");

            $('.deletePriceBtn').click(function (e) {
               if(disableButtons === "1") {
                   return e.preventDefault();
               }
                return confirm('Are you sure that you want to delete price?');
            });
            $('.deleteVariationBtn').click(function (e) {
                if(disableButtons === "1") {
                    return e.preventDefault();
                }
                return confirm('Are you sure that you want to delete variation?');
            });
            $('.restoreVariationBtn').click(function () {
                return confirm('Are you sure that you want to restore variation?');
            });
        });
    </script>
@endsection
