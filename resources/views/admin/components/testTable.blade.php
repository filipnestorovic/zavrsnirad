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
            @if($singleTest->getAttribute('is_active') === 1)
            class="table-success"
            @endif
            @if($singleTest->getAttribute('ended_at'))
            class="table-danger"
            @endif
        >
            <td>{{ $singleTest->getAttribute('id_test') }}</td>
            <td>{{ $singleTest->product->getAttribute('product_name') }} ({{  $singleTest->product->country->getAttribute('country_name') }})</td>
            <td>{{ $singleTest->getAttribute('created_at') }}</td>
            <td>
                {{ $singleTest->getAttribute('started_at') }}<br/>
                {{ $singleTest->getAttribute('ended_at') }}
            </td>
            <td>{{ $singleTest->testVariations->count() }}</td>
            <td>
                <span class="table-edit"><a href="{{ route('singleTest',['id' => $singleTest->getAttribute('id_test')]) }}"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 detailsTestButton">DETAILS</button></a></span>
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

