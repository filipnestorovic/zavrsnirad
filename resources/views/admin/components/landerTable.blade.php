@if(count($paginatedItems)>0)
    <thead>
    <tr class="text-center">
        <th class="text-center">#</th>
        <th class="text-center">Lander</th>
        <th class="text-center">Brand</th>
        <th class="text-center">Product</th>
        <th class="text-center"></th>
    </tr>
    </thead>
    <tbody style="vertical-align: middle;">
    <caption>
        <span class="badge bg-warning">Have mobile version</span>
    </caption>
    @foreach($paginatedItems as $singleLander)
        <tr style="padding-top: 0px;"
            @if($singleLander[0]["lander_deleted"])
            class="table-danger"
            @endif
            @if($singleLander[0]["mobile_version"])
            class="table-warning"
                @endif
        >
            <td>{{ $singleLander[0]["id_lander"] }}</td>
            <td>{{ $singleLander[0]["lander_name"] }}</td>
            <td>{{ $singleLander[0]["brand_name"] }}</td>
            <td>{{ $singleLander[0]["product_name"] }} ({{ $singleLander[0]["country_name"] }})</td>
            <td>
                @if($singleLander[0]["lander_deleted"])
                    <span class="table-review"><a href="{{ route('restoreLander',['id' => $singleLander[0]["id_lander"]]) }}"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 restoreProductBtn">RESTORE</button></a></span>
                @else
                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editLanderBtn" data-toggle="modal" data-target="#editLander" value="{{$singleLander[0]["id_lander"]}}">EDIT</button></span>
                    <span class="table-remove"><a href="{{ route('deleteLander',['id' => $singleLander[0]["id_lander"]]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteLanderBtn">DELETE</button></a></span>
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
        <th class="text-center">No landers for selected criteria</th>
    </tr>
    </tbody>
@endif

