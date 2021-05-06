@extends('admin.adminTemplate')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Thankyou</li>
        </ol>
    </nav>

    <form action="{{route('addThankyou')}}" id="formThankyou" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Thankyou name</span>
                                </div>
                                <input type="text" name="thankyou_name" id="thankyou_name" class="form-control" data-value="thankyou_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                                </div>
                                <select name="countryIdThankyou" id="countryIdThankyou" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addThankyouBtn" class="btn btn-primary btn-lg btn-block">Add thankyou page</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <h5 class="card-header text-center font-weight-bold text-uppercase py-3">

                        </h5>
                        <div class="card-body">
                            <div id="tableOrderDetails" class="table-editable">
                                <table class="table table-bordered table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Thankyou name</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableOrderDetailsBody">
                                    @isset($thankyous)
                                        @foreach($thankyous as $thankyou)
                                            <tr>
                                                <td class="pt-3-half">{{$thankyou->id_thankyou}}</td>
                                                <td class="pt-3-half">{{$thankyou->thankyou_name}}</td>
                                                <td class="pt-3-half">{{$thankyou->country_name}}</td>
                                                <td>
                                                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editThankyouBtn" data-toggle="modal" data-target="#editThankyou" value="{{$thankyou->id_thankyou}}">EDIT</button></span>
                                                    <span class="table-remove"><a href="{{ route('deleteThankyou',['id' => $thankyou->id_thankyou]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteThankyouBtn">DELETE</button></a></span>
                                                </td>
                                            </tr>
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
    </form>
    <div class="modal fade" id="editThankyou" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Thankyou</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editThankyouForm" action="{{ route('editThankyou') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="thankyouIdModal" id="thankyouIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Thankyou</span>
                            </div>
                            <input type="text" name="thankyouNameModal" id="thankyouNameModal" class="form-control" data-value="thankyouNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                            </div>
                            <select name="countryIdModal" id="countryIdModal" data-toggle="dropdown" required>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit thankyou page</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.editThankyouBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getThankyou/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#thankyouIdModal').val(data.id_thankyou);
                        $('#thankyouNameModal').val(data.thankyou_name);
                        $('#countryIdModal').val(data.country_id);
                        $('#countryIdModal').selectpicker('refresh');
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteThankyouBtn').click(function () {
                return confirm('Are you sure that you want to delete thankyou page?');
            });
        });
    </script>
@endsection
