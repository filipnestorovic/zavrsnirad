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
            @if($singleVariation->getAttribute('deleted_at'))
                class="table-danger"
            @endif
            @if($singleVariation->getAttribute('is_variation_default'))
                class="table-primary"
            @endif
            @if(!$singleVariation->getAttribute('is_active'))
                class="table-danger"
            @endif
        >
            <td>{{ $singleVariation->getAttribute('id_variation') }}</td>
            <td>{{ $singleVariation->getAttribute('variation_name') }}</td>
            <td>{{ $singleVariation->getAttribute('variation_description') }}</td>
            <td>{{ $singleVariation->product->getAttribute('product_name') }} ({{ $singleVariation->product->country->getAttribute('country_name') }})</td>
            <td>{{ $singleVariation->lander->getAttribute('lander_name') }}</td>
            <td>{{ $singleVariation->checkout->getAttribute('checkout_name') }}</td>
            <td>{{ $singleVariation->thankyou->getAttribute('thankyou_name') }}</td>
            <td>
                <span class="table-edit"><a href="{{ route('variation',['id' => $singleVariation->getAttribute('id_variation')]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 editVariationButton">DETAILS</button></a></span>
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

