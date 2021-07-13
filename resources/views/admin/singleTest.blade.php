@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('testsIndex') }}">Tests</a></li>
            <li class="breadcrumb-item active" aria-current="page">Test</li>
            <li class="breadcrumb-item" aria-current="page">Product:&nbsp;<strong>{{ $product->product_name }} ({{ $product->country_name }})</strong></li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <form action="{{ route('addVariationToTest') }}" id="formSingleTest" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="testIdHidden" id="testIdHidden" value="{{ $testId }}"/>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Add variation to test</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Variation</span>
                                </div>
                                <select name="variationIdTest" id="variationIdTest" id="inputGroupSelect01" data-toggle="dropdown" required>
                                   @foreach($availableVariationsForProduct as $variation)
                                       <option value="{{ $variation->id_variation }}">{{ $variation->variation_name }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Traffic (%)</span>
                                </div>
                                <input type="number" name="trafficPercentage" id="trafficPercentage" class="form-control" data-value="trafficPercentage" value="" required="" min="1" max="100">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addBrandButton" class="btn btn-primary btn-lg btn-block testOperations">Add variation</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Variations</h5>
                    <div class="card-body">
                        <div id="tableTestVariations" class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Variation</th>
                                    <th class="text-center @isset($wrongSum) bg-warning @endisset">Traffic (%)</th>
                                    <th class="text-center">Added/Removed</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody id="tableTestVariationsBody">
                                <input type="hidden" id="wrongSum" value="@isset($wrongSum) {{ $wrongSum }} @endisset"/>
                                @isset($testVariations)
                                    @foreach($testVariations as $variations)
                                        @foreach($variations as $singleVariation)
                                            @if($singleVariation['id_tests_variations'] != null)
                                                <tr
                                                    @if($singleVariation['removed_at'] != null)
                                                        class="table-danger"
                                                    @endif
                                                >
                                                <td class="pt-3-half">{{ $singleVariation['id_tests_variations'] }}</td>
                                                <td class="pt-3-half">
                                                    <a class="text-primary" href="{{ route('variation',['id' => $singleVariation['id_variation']]) }}">
                                                        {{ $singleVariation['variation_name'] }}
                                                    </a>
                                                </td>
                                                <td class="pt-3-half
                                                @if((isset($wrongSum) && $wrongSum===1) && ($singleVariation['removed_at'] === null)) bg-warning @endif
                                                ">{{$singleVariation['traffic_percentage']}}</td>
                                                <td class="pt-3-half">{{$singleVariation['added_at']}}<br/>{{$singleVariation['removed_at']}}</td>
                                                <td>
                                                    <span class="table-details"><button type="button" class="btn btn-secondary btn-rounded btn-sm my-0 viewVariationDetailsBtn" data-toggle="modal" data-target="#viewVariationDetails" value="{{ $singleVariation['id_variation'] }}">DETAILS</button></span>
                                                    @if(($singleVariation['removed_at'] === null))
                                                        <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editTestVariationBtn testOperations" data-toggle="modal" data-target="#editTestVariation" value="{{ $singleVariation['id_tests_variations'] }}">EDIT</button></span>
                                                        <span class="table-remove"><a class="testOperations" href="{{ route('removeVariationFromTest',['id' => $singleVariation['id_tests_variations']]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteTestVariationBtn testOperations">DELETE</button></a></span>
                                                    @else
                                                        <span class="table-remove"><a class="testOperations" href="{{ route('restoreVariationTest',['id' => $singleVariation['id_tests_variations']]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 restoreTestVariation testOperations">RESTORE</button></a></span>
                                                    @endif

                                                </td>
                                                </tr>
                                            @else
                                                <tr><td colspan="6">No variations in this test!</td></tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mb-4 wow fadeIn">
        <div class="card-body d-lg-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if($singleTest->is_active === 0 && $singleTest->ended_at === null)
                            <a href="{{ route('startTest',['id' => $testId, 'wrongSum' => isset($wrongSum) === true ? $wrongSum : 0, 'pricesNotSet' => isset($pricesNotSet) === true ? $pricesNotSet : 0]) }}"><button type="button" class="btn btn-success btn-rounded btn-lg startTestBtn">Start test</button></a>
                        @endif
                        @if($singleTest->ended_at === null && $singleTest->started_at != null && $singleTest->is_active === 1 )
                            <a href="{{ route('pauseTest',['id' => $testId]) }}"><button type="button" class="btn btn-primary btn-rounded btn-lg pauseTestBtn">Pause test</button></a>
                        @endif
                        @if($singleTest->started_at != null && $singleTest->ended_at === null)
                            <a href="{{ route('endTest',['id' => $testId]) }}"><button type="button" class="btn btn-danger btn-rounded btn-lg endTestBtn">End test</button></a>
                        @endif
                        @if($singleTest->ended_at != null)
                            This test has been ended, you can create another one!
                        @endif
                        <p style="display: inline-block; margin-left: 20px;">Started at: {{ $singleTest->started_at }}</p>
                        <p style="display: inline-block; margin-left: 20px;">Ended at: {{ $singleTest->ended_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 wow fadeIn">
        <div class="card-body d-lg-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-responsive-sm table-striped text-center">
                            <caption>
                                <span class="badge bg-success">Best conversion rate</span>
                            </caption>
                            <tr>
                                <th>#</th>
                                <th>Variation</th>
                                <th>Lander</th>
                                <th>Checkout</th>
                                <th>Thankyou</th>
                                <th>CTR</th>
                                <th>CR</th>
                                <th>Orders</th>
                                <th>Revenue</th>
                                <th style="border-right: 3px solid #4a5568;">AOV</th>
                                <th>Views</th>
                                <th>Purchase</th>
                                <th>CR</th>
                                <th>Revenue</th>
                                <th>AOV</th>
                            </tr>
                            @foreach($singleVariationStatistic as $key => $singleVariation)
                                @isset($singleVariation['VariationName'])
                                <tr>
                                    <td>{{ $key }}</td>
                                    <th>{{ isset($singleVariation['VariationName']) ? $singleVariation['VariationName'] : "" }}</th>
                                    <td class="landerViews">{{ isset($singleVariation['LanderView']) ? $singleVariation['LanderView'] : 0 }}</td>
                                    <td class="checkoutViews">{{ isset($singleVariation['CheckoutView']) ? $singleVariation['CheckoutView'] : 0 }}</td>
                                    <td class="thankyouViews">{{ isset($singleVariation['Purchase']) ? $singleVariation['Purchase'] : 0 }}</td>
                                    <td>
                                        @if(isset($singleVariation['CheckoutView']) && isset($singleVariation['LanderView']))
                                            {{ number_format(($singleVariation['CheckoutView']/$singleVariation['LanderView'])*100, 2) }}%
                                        @endif
                                    </td>
                                    <td>
                                        @if(isset($singleVariation['Purchase']) && isset($singleVariation['LanderView']))
                                            {{ number_format(($singleVariation['Purchase']/$singleVariation['LanderView'])*100, 2) }}%
                                        @endif
                                    </td>
                                    <td class="ordersColumn">{{ $testOrders[$key]['orders'] }}</td>
                                    <td class="revenueColumn">{{ $testOrders[$key]['revenue'] }} RSD</td>
                                    <td class="aovColumn" style="border-right: 3px solid #4a5568;">
                                        @if($testOrders[$key]['orders'] != 0)
                                            {{ number_format(($testOrders[$key]['revenue']/$testOrders[$key]['orders']), 2) }} RSD
                                        @endif
                                    </td>
                                    <td class="upCrossSellViews">{{ isset($singleVariation['UpCrossSellShown']) ? $singleVariation['UpCrossSellShown'] : 0 }}</td>
                                    <td class="upCrossSellPurchases">{{ isset($singleVariation['Purchase2']) ? $singleVariation['Purchase2'] : 0 }}</td>
                                    <td>
                                        @if(isset($singleVariation['Purchase2']) && isset($singleVariation['UpCrossSellShown']))
                                            {{ number_format(($singleVariation['Purchase2']/$singleVariation['UpCrossSellShown'])*100, 2) }}%
                                        @endif
                                    </td>
                                    <td class="upCrossSellRevenue">{{ $testOrders[$key]['RevenueUpCrossSells'] }} RSD</td>
                                    <td>
                                        @if($testOrders[$key]['UpCrossSells'] != 0)
                                            {{ number_format(($testOrders[$key]['RevenueUpCrossSells']/$testOrders[$key]['UpCrossSells']), 2) }} RSD
                                        @endif
                                    </td>
                                </tr>
                                @endisset
                            @endforeach
                            <tr class="table-secondary">
                                <th></th>
                                <th><b>Total</b></th>
                                <th id="landerTotal"></th>
                                <th id="checkoutTotal"></th>
                                <th id="thankyouTotal"></th>
                                <th id="ctrTotal"></th>
                                <th id="conversionTotal"></th>
                                <th id="ordersTotal"></th>
                                <th id="revenueTotal"></th>
                                <th id="aovTotal" style="border-right: 3px solid #4a5568;"></th>
                                <th id="upSellViewsTotal"></th>
                                <th id="upSellPurchasesTotal"></th>
                                <th id="upSellCrTotal"></th>
                                <th id="upSellRevenueTotal"></th>
                                <th id="upSellAovTotal"></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editTestVariation" tabindex="-1" role="dialog" aria-labelledby="editTestVariation" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="editCouponTitle">Edit Traffic Percent</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editTestVariationForm" action="{{ route('editTestVariationTraffic') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="testVariationIdModal" id="testVariationIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Traffic (%)</span>
                            </div>
                            <input type="number" name="trafficModal" id="trafficModal" min="1" max="100" class="form-control" data-value="trafficModal" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit traffic</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewVariationDetails" tabindex="-1" role="dialog" aria-labelledby="viewVariationDetails" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="editCouponTitle">Variation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBodyVariationDetails">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        #tableCouponBody td {
            vertical-align: middle;
        }
        .variationDetailsLink {

        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

            $landerSum = 0;
            $checkoutSum = 0;
            $thankyouSum = 0;
            $orderSum = 0;
            $revenueSum = 0;

            $upCrossViewsSum = 0;
            $upCrossPurchaseSum = 0;
            $upCrossRevenueSum = 0;

            $('.landerViews').each(function() {
                $landerSum += parseInt($(this).html());
            });
            $('.checkoutViews').each(function() {
                $checkoutSum += parseInt($(this).html());
            });
            $('.thankyouViews').each(function() {
                $thankyouSum += parseInt($(this).html());
            });
            $('.ordersColumn').each(function() {
                $orderSum += parseInt($(this).html());
            });
            $('.revenueColumn').each(function() {
                $singleField = $(this).html();
                $slicedField = $singleField.slice(0, -4);
                $revenueSum += parseInt($slicedField);
            });

            $('.upCrossSellViews').each(function() {
                $upCrossViewsSum += parseInt($(this).html());
            });
            $('.upCrossSellPurchases').each(function() {
                $upCrossPurchaseSum += parseInt($(this).html());
            });
            $('.upCrossSellRevenue').each(function() {
                $singleField = $(this).html();
                $slicedField = $singleField.slice(0, -4);
                $upCrossRevenueSum += parseInt($slicedField);
            });

            $ctrTotal = ($checkoutSum/$landerSum)*100;
            $conversionTotal = ($thankyouSum/$landerSum)*100;
            $aovTotal = $revenueSum/$orderSum;
            $upCrossSellCrTotal = ($upCrossPurchaseSum/$upCrossViewsSum)*100;
            $upCrossSellAovTotal = $upCrossRevenueSum/$upCrossPurchaseSum;

            $('#landerTotal').html($landerSum);
            $('#checkoutTotal').html($checkoutSum);
            $('#thankyouTotal').html($thankyouSum);
            $('#ctrTotal').html($ctrTotal.toFixed(2) + "%");
            $('#conversionTotal').html($conversionTotal.toFixed(2) + "%");
            $('#ordersTotal').html($orderSum);
            $('#revenueTotal').html($revenueSum + " RSD");
            $('#aovTotal').html($aovTotal.toLocaleString('rs', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + " RSD");

            $('#upSellViewsTotal').html($upCrossViewsSum);
            $('#upSellPurchasesTotal').html($upCrossPurchaseSum);
            $('#upSellCrTotal').html($upCrossSellCrTotal.toFixed(2) + "%");
            $('#upSellRevenueTotal').html($upCrossRevenueSum + " RSD");
            $('#upSellAovTotal').html($upCrossSellAovTotal.toLocaleString('rs', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + " RSD");

            let max = 0;
            let maxIndex = 0;
            let newvalue = 0;
            for (let i=1; i < document.getElementById('dataTable').rows.length-1; i++){
                newRow = document.getElementById('dataTable').rows[i].cells[6].innerText;
                newvalue = parseFloat(newRow.slice(0, -1));
                if (newvalue > max) {
                    max = newvalue;
                    maxIndex = document.getElementById('dataTable').rows[i];
                }
            }

            $(maxIndex).addClass("table-success");

            @if($singleTest->is_active ===1)
                $('.testOperations').prop('disabled', true);
                $('.testOperations').click(function (e) {
                    e.preventDefault();
                    return alert('You have to pause test before you make any changes!');
                });
            @endif

            @if(isset($wrongSum) && $wrongSum === 1)
                $('.startTestBtn').prop('disabled', true);
                $('.startTestBtn').click(function (e) {
                    e.preventDefault();
                    return alert('Traffic percent sum must be 100!');
                });
            @endif

            @if(isset($pricesNotSet) && $pricesNotSet === 1)
                $('.startTestBtn').prop('disabled', true);
                $('.startTestBtn').click(function (e) {
                    e.preventDefault();
                    return alert('One or more variations have no prices!');
                });
            @endif

            $('.editTestVariationBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getTestVariation/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        // console.log(data);
                        $('#trafficModal').val(data.traffic_percentage);
                        $('#testVariationIdModal').val(data.id_tests_variations);
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                });
            });

            $('.viewVariationDetailsBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "variation/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        let text = "";
                        for (const [key, value] of Object.entries(data)) {
                            let variations = data[key];
                            let firstVariation = variations[0];
                            text += "<table class='table table-bordered table-responsive-sm table-striped text-center tableVariationDetails'>";
                            text += "<tr><th>Name</th><td>" + firstVariation['variation_name'] + "</td></tr>";
                            text += "<tr><th>Description</th><td>" + firstVariation['variation_description'] + "</td></tr>";
                            text += "<tr><th>Lander</th><td>" + firstVariation['lander_name'] + "</td></tr>";
                            text += "<tr><th>Checkout</th><td>" + firstVariation['checkout_name'] + "</td></tr>";
                            text += "<tr><th>Thankyou</th><td>" + firstVariation['thankyou_name'] + "</td></tr>";
                            for (let i = 0; i < variations.length; i++) {
                                if(variations[i]['quantity'] != null) {
                                    text += "<tr><th>Price for " + variations[i]['quantity'] + "</th><td>" + variations[i]['amount'] + " " + variations[i]['currency_symbol'] + "</td></tr>";
                                } else {
                                    text += "<tr><td colspan='2'>Prices not set yet</td></tr>"
                                }
                            }
                            text += "</table>";
                            $('#modalBodyVariationDetails').html(text);
                        }
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteTestVariationBtn').click(function () {
                return confirm('Are you sure that you want to delete this variation from the test?');
            });
            $('.startTestBtn').click(function () {
                return confirm('Are you sure that you want to start the test?');
            });
            $('.pauseTestBtn').click(function () {
                return confirm('Are you sure that you want to pauste the test?');
            });
            $('.endTestBtn').click(function () {
                return confirm('Are you sure that you want to end the test permanently?');
            });
            $('.restoreTestVariation').click(function () {
                return confirm('Are you sure that you want to restore this variation?');
            });
        });
    </script>
@endsection
