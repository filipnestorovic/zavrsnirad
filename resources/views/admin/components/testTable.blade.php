@if(count($paginatedItems)>0)
    <thead>
    <tr class="text-center">
        <th class="text-center">#</th>
        <th class="text-center">Product</th>
        <th class="text-center">Created</th>
        <th class="text-center">Started/Ended</th>
        <th class="text-center">Variations</th>
        <th class="text-center"></th>
    </tr>
    </thead>
    <caption>
        <span class="badge bg-success">Active test</span>
        <span class="badge bg-danger">Finished test</span>
    </caption>
    <tbody style="vertical-align: middle;">
    @foreach($paginatedItems as $singleTest)

        <tr style="padding-top: 0px;"
            @if($singleTest[0]["is_test_active"] === 1)
            class="table-success"
            @endif
            @if($singleTest[0]["ended_at"] != null)
            class="table-danger"
            @endif
        >
            @php
                $countVariations = 0;
                foreach($singleTest as $singleTestVariations) {
                    if($singleTestVariations['variation_name'] != null) {
                        $countVariations++;
                    }
                }
            @endphp

            <td>{{ $singleTest[0]["id_test"] }}</td>
            <td>{{ $singleTest[0]["product_name"] }} ({{ $singleTest[0]["country_name"] }})</td>
            <td>{{ $singleTest[0]["created_at"] }}</td>
            <td>{{ $singleTest[0]["started_at"] }}<br/>{{ $singleTest[0]["ended_at"] }}</td>
            <td>{{ $countVariations }}</td>
            <td>
                <span class="table-edit"><a href="{{ route('singleTest',['id' => $singleTest[0]["id_test"]]) }}"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 detailsTestButton">DETAILS</button></a></span>
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
        <th class="text-center">No tests for selected criteria</th>
    </tr>
    </tbody>
@endif

