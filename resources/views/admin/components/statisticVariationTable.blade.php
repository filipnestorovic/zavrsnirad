@if(count($paginatedItems->items())>1)
<div class="accordion" id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Today - Regular Orders</button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
            <div class="card-body">
                <div id="tableStatistic" class="table-editable">
                    <table class="table table-bordered table-responsive-lg table-striped text-center">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center"></th>
                            <th class="text-center">Orders</th>
                            <th class="text-center">Revenue</th>
                        </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                            <tr style="padding-top: 0;" class="table-info">
                                @isset($paginatedItems->values()->get(0)['todayOrders'])
                                    <th>Today</th>
                                    <td>{{ $paginatedItems->values()->get(0)['todayOrders'] }}</td>
                                    <td>{{ $paginatedItems->values()->get(0)['todayRevenue'] }} {{ $paginatedItems->values()->get(0)['currency'] }}</td>
                                @endisset
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">Today - Up/Cross Orders</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
            <div class="card-body">
                <div id="tableStatistic" class="table-editable">
                    <table class="table table-bordered table-responsive-lg table-striped text-center" id="">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">Total</th>
                            <th class="text-center">Orders</th>
                            <th class="text-center">Revenue</th>
                        </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                            @isset($paginatedItems->values()->get(0)['todayUpSells'])
                                <tr style="padding-top: 0;">
                                    <th>Up Sells</th>
                                    <td>{{ $paginatedItems->values()->get(0)['todayUpSells'] }}</td>
                                    <td>{{ $paginatedItems->values()->get(0)['todayUpSellsRevenue'] }} {{ $paginatedItems->values()->get(0)['currency'] }}</td>
                                </tr>
                            @endisset
                            @isset($paginatedItems->values()->get(0)['todayCrossSells'])
                                <tr style="padding-top: 0;">
                                    <th>Cross Sells</th>
                                    <td>{{ $paginatedItems->values()->get(0)['todayCrossSells'] }}</td>
                                    <td>{{ $paginatedItems->values()->get(0)['todayCrossSellsRevenue'] }} {{ $paginatedItems->values()->get(0)['currency'] }}</td>
                                </tr>
                            @endisset
                            @isset($paginatedItems->values()->get(0)['todayTotal'])
                                <tr style="padding-top: 0;" class="table-info">
                                    <th>Total</th>
                                    <td>{{ $paginatedItems->values()->get(0)['todayTotal'] }}</td>
                                    <td>{{ $paginatedItems->values()->get(0)['todayTotalRevenue'] }} {{ $paginatedItems->values()->get(0)['currency'] }}</td>
                                </tr>
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">Last 10 Regular orders</button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
            <div class="card-body">
                <div id="tableStatistic" class="table-editable">
                    <table class="table table-bordered table-responsive-lg table-striped text-center" id="">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Lander</th>
                            <th class="text-center">Checkout</th>
                            <th class="text-center">Thankyou</th>
                            <th class="text-center">CTR</th>
                            <th class="text-center">CR</th>
                            <th class="text-center">Orders</th>
                            <th class="text-center">Revenue</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody style="vertical-align: middle;">
                        @foreach($paginatedItems as $singleVariation)
                            <tr></tr>
                            <tr style="padding-top: 0px;">
                                @isset($singleVariation['id_variation'])
                                    <td>{{ isset($singleVariation['id_variation']) ? $singleVariation['id_variation'] : '' }}</td>
                                    <td>{{ isset($singleVariation['variation_name']) ? $singleVariation['variation_name'] : '' }}</td>
                                    <td>{{ isset($singleVariation['LanderView']) ? $singleVariation['LanderView'] : '0' }}</td>
                                    <td>{{ isset($singleVariation['CheckoutView']) ? $singleVariation['CheckoutView'] : '0' }}</td>
                                    <td>{{ isset($singleVariation['Purchase']) ? $singleVariation['Purchase'] : '0' }}</td>
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
                                    <td>{{ isset($singleVariation['orders_count']) ? $singleVariation['orders_count'] : '0' }}</td>
                                    <td>{{ isset($singleVariation['orders_revenue']) ? $singleVariation['orders_revenue'] : '0' }} {{ $singleVariation['currency'] }}</td>
                                    <td>
                                        <span class="table-edit"><a href="{{ route('variation',['id' => $singleVariation['id_variation']]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">DETAILS</button></a></span>
                                    </td>
                                @endisset
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

