@if(count($paginatedItems)>0)
    <thead>
    <tr class="text-center">
        <th class="text-center">#</th>
        <th class="text-center">Name</th>
        <th class="text-center">Sku</th>
        <th class="text-center">Slug</th>
        <th class="text-center">Image</th>
        <th class="text-center">Brand</th>
        <th class="text-center">Country</th>
        <th class="text-center">Woocommerce ID</th>
        <th class="text-center"></th>
    </tr>
    </thead>

    <tbody style="vertical-align: middle;">
    <caption>
        <span class="badge bg-primary">Default product</span>
        <span class="badge bg-danger">Deleted product</span>
    </caption>
    @foreach($paginatedItems as $singleProduct)
        <tr style="padding-top: 0px;"
            @if($singleProduct[0]["product_deleted"])
                class="table-danger"
            @endif
            @if($singleProduct[0]["is_default_product"])
                class="table-primary"
            @endif
        >
            <td>{{ $singleProduct[0]["id_product"] }}</td>
            <td>{{ $singleProduct[0]["product_name"] }}&nbsp;</td>
            <td>{{ $singleProduct[0]["sku"] }}</td>
            <td>{{ $singleProduct[0]["slug"] }} @isset($singleProduct[0]["urlPreview"]) <a href="{{ $singleProduct[0]["urlPreview"] }}" target="_blank"><i class="fas fa-external-link-alt fa-lg"></i></a> @endisset</td>
            <td><img src="{{ asset('/').$singleProduct[0]["product_image"] }}" height="70px"/></td>
            <td>{{ $singleProduct[0]["brand_name"] }}</td>
            <td>{{ $singleProduct[0]["country_name"] }}</td>
            <td>{{ $singleProduct[0]["woocommerce_product_id"] != null ? $singleProduct[0]["woocommerce_product_id"] : 'x' }}</td>
            <td class="productButtons">
                @if($singleProduct[0]["product_deleted"])
                    <span class="table-review"><a href="{{ route('restoreProduct',['id' => $singleProduct[0]["id_product"]]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 restoreProductBtn">RESTORE</button></a></span>
                @else
                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm editProductBtn" data-toggle="modal" data-target="#editProduct" value="{{$singleProduct[0]["id_product"]}}">EDIT</button></span>
                    <span class="table-remove"><a href="{{ route('deleteProduct',['id' => $singleProduct[0]["id_product"]]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm deleteProductBtn">DELETE</button></a></span>
                @endif
             </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="9">{{$paginatedItems->appends(request()->input())->render("pagination::bootstrap-4")}}</td>
    </tr>
    </tfoot>
@else
    <tbody>
    <tr class="text-center">
        <th class="text-center">No products for selected criteria</th>
    </tr>
    </tbody>
@endif
