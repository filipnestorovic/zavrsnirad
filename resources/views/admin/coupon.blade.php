@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Coupon</li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <form action="{{ route('addCoupon') }}" id="formCoupon" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Add coupon</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Coupon</span>
                                </div>
                                <input type="text" name="coupon_name" id="coupon_name" class="form-control" data-value="coupon_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Discount(%)</span>
                                </div>
                                <input type="number" name="coupon_discount" id="coupon_discount" class="form-control" data-value="coupon_discount" value="" required="" min="1" max="100">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                                </div>
                                <select name="isCouponActive" id="isCouponActive" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addBrandButton" class="btn btn-primary btn-lg btn-block">Add coupon</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <h5 class="card-header text-center font-weight-bold text-uppercase py-3">
                    </h5>
                    <div class="card-body">
                        <div id="tableCoupon" class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Coupon</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Active</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody id="tableCouponBody">
                                @isset($coupons)
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td class="pt-3-half">{{$coupon->id_coupon}}</td>
                                            <td class="pt-3-half">{{$coupon->coupon}}</td>
                                            <td class="pt-3-half">{{$coupon->discount}}</td>
                                            <td class="pt-3-half">{{ ($coupon->is_active == 1) ? "Yes" : "No" }}</td>
                                            <td>
                                                <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editCouponBtn" data-toggle="modal" data-target="#editCoupon" value="{{$coupon->id_coupon}}">EDIT</button></span>
                                                <span class="table-remove"><a href="{{ route('deleteCoupon',['id' => $coupon->id_coupon]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteCouponBtn">DELETE</button></a></span>
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
    <div class="modal fade" id="editCoupon" tabindex="-1" role="dialog" aria-labelledby="editCouponForm" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="editCouponTitle">Edit Coupon</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCouponForm" action="{{ route('editCoupon') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="couponIdModal" id="couponIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Coupon</span>
                            </div>
                            <input type="text" name="couponNameModal" id="couponNameModal" class="form-control" data-value="couponNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Discount</span>
                            </div>
                            <input type="number" name="couponDiscountModal" id="couponDiscountModal" class="form-control" data-value="couponDiscountModal" value="" autocomplete="off" min="1" max="100">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                            </div>
                            <select name="isCouponActiveModal" id="isCouponActiveModal" data-toggle="dropdown" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit coupon</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        #tableCouponBody td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.editCouponBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getCoupon/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#couponIdModal').val(data.id_coupon);
                        $('#couponNameModal').val(data.coupon);
                        $('#couponDiscountModal').val(data.discount);
                        $('#isCouponActiveModal').val(data.is_active).selectpicker('refresh');
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteCouponBtn').click(function () {
                return confirm('Are you sure that you want to delete coupon?');
            });
        });
    </script>
@endsection
