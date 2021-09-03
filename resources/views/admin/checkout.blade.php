@extends('admin.adminTemplate')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>

    <form action="{{route('addCheckout')}}" id="formCheckout" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Checkout name</span>
                                </div>
                                <input type="text" name="checkout_name" id="checkout_name" class="form-control" data-value="checkout_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                                </div>
                                <select name="countryIdCheckout" id="countryIdCheckout" id="inputGroupSelect01" data-toggle="dropdown" required data-live-search="true">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addLanderBtn" class="btn btn-primary btn-lg btn-block">Add checkout page</button>
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
                                        <th class="text-center">Checkout name</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableOrderDetailsBody">
                                    @isset($checkouts)
                                        @foreach($checkouts as $checkout)
                                            <tr>
                                                <td class="pt-3-half">{{$checkout->id_checkout}}</td>
                                                <td class="pt-3-half">{{$checkout->checkout_name}}</td>
                                                <td class="pt-3-half">{{$checkout->country_name}}</td>
                                                <td>
                                                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editCheckoutBtn" data-toggle="modal" data-target="#editCheckout" value="{{$checkout->id_checkout}}">EDIT</button></span>
                                                    <span class="table-remove"><a href="{{ route('deleteCheckout',['id' => $checkout->id_checkout]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteCheckoutBtn">DELETE</button></a></span>
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
    <div class="modal fade" id="editCheckout" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Checkout</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCheckoutForm" action="{{ route('editCheckout') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="checkoutIdModal" id="checkoutIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Checkout</span>
                            </div>
                            <input type="text" name="checkoutNameModal" id="checkoutNameModal" class="form-control" data-value="checkoutNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                            </div>
                            <select name="countryIdModal" id="countryIdModal" data-toggle="dropdown" required data-live-search="true">
                                @foreach($countries as $country)
                                    <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit checkout</button>
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
            $('.editCheckoutBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getCheckout/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#checkoutIdModal').val(data.id_checkout);
                        $('#checkoutNameModal').val(data.checkout_name);
                        $('#countryIdModal').val(data.country_id);
                        $('#countryIdModal').selectpicker('refresh');
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteCheckoutBtn').click(function () {
                return confirm('Are you sure that you want to delete checkout?');
            });
        });
    </script>
@endsection
