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
                                                <td class="pt-3-half">{{ $singleVariation['variation_name'] }}</td>
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
                                <th>AOV</th>
                            </tr>
                            @foreach($singleVariationStatistic as $key => $singleVariation)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <th>{{ isset($singleVariation[0]->variation_name) ? $singleVariation[0]->variation_name : "" }}</th>
                                    <td class="landerViews">{{ isset($singleVariation[0]->TestVariationVisits) ? $singleVariation[0]->TestVariationVisits : 0 }}</td>
                                    <td class="checkoutViews">{{ isset($singleVariation[1]->TestVariationVisits) ? $singleVariation[1]->TestVariationVisits : 0 }}</td>
                                    <td class="thankyouViews">{{ isset($singleVariation[2]->TestVariationVisits) ? $singleVariation[2]->TestVariationVisits : 0 }}</td>
                                    <td>
                                        @if(isset($singleVariation[1]->TestVariationVisits) && isset($singleVariation[0]->TestVariationVisits))
                                            {{ number_format(($singleVariation[1]->TestVariationVisits/$singleVariation[0]->TestVariationVisits)*100, 2) }}%
                                        @endif
                                    </td>
                                    <td>
                                        @if(isset($singleVariation[2]->TestVariationVisits) && isset($singleVariation[0]->TestVariationVisits))
                                            {{ number_format(($singleVariation[2]->TestVariationVisits/$singleVariation[0]->TestVariationVisits)*100, 2) }}%
                                        @endif
                                    </td>
                                    <td class="ordersColumn">{{ $testOrders[$key]['orders'] }}</td>
                                    <td class="revenueColumn">{{ $testOrders[$key]['revenue'] }} RSD</td>
                                    <td class="aovColumn">
                                        @if($testOrders[$key]['orders'] != 0)
                                            {{ number_format(($testOrders[$key]['revenue']/$testOrders[$key]['orders']), 2) }} RSD
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="table-secondary">
                                <th></th>
                                <th>Total</th>
                                <th id="landerTotal"></th>
                                <th id="checkoutTotal"></th>
                                <th id="thankyouTotal"></th>
                                <th id="ctrTotal"></th>
                                <th id="conversionTotal"></th>
                                <th id="ordersTotal"></th>
                                <th id="revenueTotal"></th>
                                <th id="aovTotal"></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            {{--<div class="col-xl-8 col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="chart">--}}
                            {{--<canvas id="myChart"></canvas>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
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
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    {{--<script>--}}
        {{--function BuildChart(labels, values, chartTitle) {--}}
            {{--var ctx = document.getElementById("myChart").getContext('2d');--}}
            {{--var myChart = new Chart(ctx, {--}}
                {{--type: 'line',--}}
                {{--data: {--}}
                    {{--labels: labels, // Our labels--}}
                    {{--datasets: [{--}}
                        {{--label: chartTitle, // Name the series--}}
                        {{--data: values, // Our values--}}
                        {{--backgroundColor: [ // Specify custom colors--}}
                            {{--'rgba(255, 99, 132, 0.2)',--}}
                            {{--'rgba(54, 162, 235, 0.2)',--}}
                            {{--'rgba(255, 206, 86, 0.2)',--}}
                            {{--'rgba(75, 192, 192, 0.2)',--}}
                            {{--'rgba(153, 102, 255, 0.2)',--}}
                            {{--'rgba(255, 159, 64, 0.2)'--}}
                        {{--],--}}
                        {{--borderColor: [ // Add custom color borders--}}
                            {{--'rgba(255,99,132,1)',--}}
                            {{--'rgba(54, 162, 235, 1)',--}}
                            {{--'rgba(255, 206, 86, 1)',--}}
                            {{--'rgba(75, 192, 192, 1)',--}}
                            {{--'rgba(153, 102, 255, 1)',--}}
                            {{--'rgba(255, 159, 64, 1)'--}}
                        {{--],--}}
                        {{--fill: false,--}}
                        {{--borderWidth: 1 // Specify bar border width--}}
                    {{--}]--}}
                {{--},--}}
                {{--options: {--}}
                    {{--responsive: true, // Instruct chart js to respond nicely.--}}
                    {{--maintainAspectRatio: false, // Add to prevent default behavior of full-width/height--}}
                {{--}--}}
            {{--});--}}
            {{--return myChart;--}}
        {{--}--}}

        {{--var table = document.getElementById('dataTable');--}}
        {{--var json = []; // First row needs to be headers--}}
        {{--var headers =[];--}}
        {{--for (var i = 0; i < table.rows[0].cells.length; i++) {--}}
            {{--headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi, '');--}}
        {{--}--}}

        {{--// Go through cells--}}
        {{--for (var i = 1; i < table.rows.length; i++) {--}}
            {{--var tableRow = table.rows[i];--}}
            {{--var rowData = {};--}}
            {{--for (var j = 0; j < tableRow.cells.length; j++) {--}}
                {{--rowData[headers[j]] = tableRow.cells[j].innerHTML;--}}
            {{--}--}}

            {{--json.push(rowData);--}}
        {{--}--}}

        {{--console.log(json);--}}


        {{--// Map JSON values back to label array--}}
        {{--var labels = json.map(function (e) {--}}
            {{--return e.event;--}}
        {{--});--}}
        {{--console.log(labels); // ["2016", "2017", "2018", "2019"]--}}


        {{--// Map JSON values back to values array--}}
        {{--var values = json.map(function (e) {--}}
            {{--return e.test2;--}}
        {{--});--}}
        {{--console.log(values); // ["10", "25", "55", "120"]--}}

        {{--var chart = BuildChart(labels, values, "Items Sold Over Time");--}}


    {{--</script>--}}


    <script>
        $(document).ready(function () {

            $landerSum = 0;
            $checkoutSum = 0;
            $thankyouSum = 0;
            $orderSum = 0;
            $revenueSum = 0;

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

            $ctrTotal = ($checkoutSum/$landerSum)*100;
            $conversionTotal = ($thankyouSum/$landerSum)*100;
            $aovTotal = $revenueSum/$orderSum;

            $('#landerTotal').html($landerSum);
            $('#checkoutTotal').html($checkoutSum);
            $('#thankyouTotal').html($thankyouSum);
            $('#ctrTotal').html($ctrTotal.toFixed(2) + "%");
            $('#conversionTotal').html($conversionTotal.toFixed(2) + "%");
            $('#ordersTotal').html($orderSum);
            $('#revenueTotal').html($revenueSum + " RSD");
            $('#aovTotal').html($aovTotal.toLocaleString('rs', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + " RSD");

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
                        console.log(data);
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
