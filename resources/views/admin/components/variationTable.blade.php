@if(count($paginatedItems)>0)
    <thead>
    <tr class="text-center">
        <th class="text-center">#</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Product</th>
        <th class="text-center">Lander</th>
        <th class="text-center">Checkout</th>
        <th class="text-center">Thankyou</th>
        <th class="text-center"></th>
    </tr>
    </thead>
    <caption>
        <span class="badge bg-primary">Default variation</span>
        <span class="badge bg-danger">Deleted variation</span>
    </caption>
    <tbody style="vertical-align: middle;">
    @foreach($paginatedItems as $singleVariation)
        <tr style="padding-top: 0px;"
            @if($singleVariation[0]["variation_deleted"])
            class="table-danger"
                @endif
            @if($singleVariation[0]["is_variation_default"])
            class="table-primary"
                @endif
            @if($singleVariation[0]["is_active"] == 0)
            class="table-danger"
                @endif
        >

            @php
                $variationPrices = "";
                foreach($singleVariation as $singleVariationPrices) {
                    if($singleVariationPrices['id_variations_prices'] != null) {
                        $variationPrices .= "Price for ".$singleVariationPrices['quantity'].": ".$singleVariationPrices['amount']." ".$singleVariationPrices['currency_symbol']." <br/>";
                    }
                }
            @endphp


            <td>{{ $singleVariation[0]["id_variation"] }}</td>
            <td>
                <a data-toggle="popover" data-placement="right" title="Prices" data-content="{{ $variationPrices }}">{{ $singleVariation[0]["variation_name"] }}</a>
            </td>
            <td>{{ $singleVariation[0]["variation_description"] }}</td>
            <td>{{ $singleVariation[0]["product_name"] }} ({{ $singleVariation[0]["country_name"] }})</td>
            <td>{{ $singleVariation[0]["lander_name"] }}</td>
            <td>{{ $singleVariation[0]["checkout_name"] }}</td>
            <td>{{ $singleVariation[0]["thankyou_name"] }}</td>
            <td>
                <span class="table-edit"><a href="{{ route('variation',['id' => $singleVariation[0]["id_variation"]]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 editVariationButton">DETAILS</button></a></span>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="8">{{$paginatedItems->appends(request()->input())->render("pagination::bootstrap-4")}}</td>
    </tr>
    </tfoot>
@else
    <tbody>
    <tr class="text-center">
        <th class="text-center">No variations for selected criteria</th>
    </tr>
    </tbody>
@endif

