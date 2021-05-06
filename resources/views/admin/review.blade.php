
@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('productIndex') }}">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
        </ol>
    </nav>

    <form action="{{ route('addReview') }}" id="formReview" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Product</span>
                                </div>
                                <input type="hidden" name="productId" id="productId" value="{{ $product->id_product }}"/>
                                <input type="text" class="form-control" value="{{ $product->product_name }} ({{ $product->sku }})" disabled>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                                </div>
                                <input type="text" name="review_name" id="review_name" class="form-control" data-value="review_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Image</span>
                                </div>
                                <input type="file" name="review_image" id="review_image" required/>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Stars</span>
                                </div>
                                <select name="reviewStars" id="reviewStars" data-toggle="dropdown" required>
                                    @for($i=5;$i>=1;$i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Text</span>
                                </div>
                                <textarea name="review_text" id="review_text" class="form-control" data-value="review_text" required="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addProductBtn" class="btn btn-primary btn-lg btn-block">Add review</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Reviews</h5>
                        <div class="card-body">
                            <div id="tableOrderDetails" class="table-editable">
                                <table class="table table-bordered table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Text</th>
                                        <th class="text-center">Stars</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableOrderDetailsBody">
                                    @isset($reviews)

                                        @if(count($reviews) == 0)
                                            <tr>
                                                <td colspan="6">There are no reviews for this product yet</td>
                                            </tr>
                                        @else
                                            @foreach($reviews as $review)
                                                <tr>
                                                    <td class="pt-3-half">{{$review->id_review}}</td>
                                                    <td class="pt-3-half">{{$review->review_text}}</td>
                                                    <td class="pt-3-half">{{$review->review_name}}</td>
                                                    <td class="pt-3-half">{{$review->stars}}</td>
                                                    <td class="pt-3-half"><img src="{{ asset('/').$review->review_image }}" height="50px"/></td>
                                                    <td>
                                                        <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editReviewBtn" data-toggle="modal" data-target="#editReview" value="{{$review->id_review}}">EDIT</button></span>
                                                        <span class="table-remove"><a href="{{ route('deleteReview',['id' => $review->id_review]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteReviewBtn">DELETE</button></a></span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

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
    <div class="modal fade" id="editReview" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editReviewForm" action="{{ route('editReview') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}
                        <input type="hidden" name="reviewIdModal" id="reviewIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                            </div>
                            <input type="text" name="reviewNameModal" id="reviewNameModal" class="form-control" data-value="reviewNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Stars</span>
                            </div>
                            <select name="reviewStarsModal" id="reviewStarsModal" data-toggle="dropdown" required>
                                @for($i=5;$i>=1;$i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Image</span>
                            </div>
                            <div style="margin: 10px;"><img id="reviewImgModal" src="" height="50px"/><input type="hidden" name="imageHiddenModal" id="imageHiddenModal"/></div>
                            <div style="margin-top: 40px;"><input type="file" name="reviewImageModal" id="reviewImageModal"/></div>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Text</span>
                            </div>
                            <textarea name="reviewTextModal" id="reviewTextModal" class="form-control" data-value="reviewTextModal" required="" cols="30" rows="5"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit review</button>
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

            $('#countryDdl').change(function () {
                let id = $(this).val();
                if(id!==1) {
                    $('#wooId').slideDown();
                }
            });
            $('.editReviewBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getReview/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#reviewIdModal').val(data.id_review);
                        $('#reviewNameModal').val(data.review_name);
                        $('#reviewStarsModal').val(data.stars);
                        $('#reviewStarsModal').selectpicker('refresh');
                        $('#imageHiddenModal').val(data.review_image);
                        $('#reviewImgModal').attr('src','{{ asset('/') }}' + data.review_image);
                        $('#reviewTextModal').val(data.review_text);
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteReviewBtn').click(function () {
                confirm('Are you sure that you want to delete review?');
            });
        });
    </script>
@endsection
