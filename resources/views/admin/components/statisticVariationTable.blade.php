@if(count($paginatedItems)>0)
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
                <td>{{ isset($singleVariation['orders_revenue']) ? $singleVariation['orders_revenue'] : '0' }} RSD</td>
                <td>
                    <span class="table-edit"><a href="{{ route('variation',['id' => $singleVariation['id_variation']]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">DETAILS</button></a></span>
                </td>
            @endisset
        </tr>
    @endforeach
    </tbody>
    {{--<tfoot>--}}
    {{--<tr>--}}
        {{--<td colspan="8">{{$paginatedItems->appends(request()->input())->render("pagination::bootstrap-4")}}</td>--}}
    {{--</tr>--}}
    {{--</tfoot>--}}
@else
    {{--<tbody>--}}
    {{--<tr class="text-center">--}}
        {{--<th class="text-center">No variations for selected criteria</th>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
@endif

