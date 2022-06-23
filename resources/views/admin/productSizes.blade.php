@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('productIndex') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sizes</li>
        </ol>
    </nav>
    <form action="{{ route('addProductSize') }}" id="formSizes" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="productId" id="productId" value="{{ $product_id }}"/>
                            <input type="hidden" name="sizeId" id="sizeId" value=""/>
                            @if(isset($product))
                                <div class="md-form input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon">Product</span>
                                    </div>
                                    <input type="text" id="product_name" class="form-control" required="" value="{{$product->product_name}} ({{$product->sku}})" disabled>
                                </div>
                            @endif
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Size</span>
                                </div>
                                <input type="text" name="size" id="size" class="form-control" data-value="size" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Description</span>
                                </div>
                                <input type="text" name="size_description" id="size_description" class="form-control" data-value="size_description" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Priority</span>
                                </div>
                                <input type="number" name="priority" id="priority" class="form-control" data-value="priority" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Woocommerce ID</span>
                                </div>
                                <input type="text" name="woo_variation_id" id="woo_variation_id" class="form-control" data-value="woo_variation_id">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addProductSizeBtn" class="btn btn-primary btn-lg btn-block">Add size</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Sizes</h5>
                        <div class="card-body">
                            <div id="tableOrderDetails" class="table-editable">
                                <table class="table table-bordered table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Priority</th>
                                        <th class="text-center">Woocommerce ID</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableSizesBody">
                                    @isset($allSizes)
                                        @if(count($allSizes) == 0)
                                            <tr>
                                                <td colspan="6">There are no sizes for this product yet!</td>
                                            </tr>
                                        @else
                                            @foreach($allSizes as $size)
                                                <tr>
                                                    <td class="pt-3-half">{{$size->id}}</td>
                                                    <td class="pt-3-half sizeTd">{{$size->product_size}}</td>
                                                    <td class="pt-3-half descriptionTd">{{$size->description}}</td>
                                                    <td class="pt-3-half priorityTd">{{$size->priority}}</td>
                                                    <td class="pt-3-half wooVariationTd">{{$size->woo_variation_id ?? 'x'}}</td>
                                                    <td>
                                                        <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editSizeBtn" value="{{$size->id}}">EDIT</button></span>
                                                        <span class="table-remove"><a href="{{ route('deleteProductSize',['id' => $size->id]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteSizeBtn">DELETE</button></a></span>
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
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.editSizeBtn').click(function(){
                let sizeId = $(this).val();
                if(sizeId != null) {
                    let size = $(this).parent().parent().parent().find('.sizeTd').text();
                    let sizeDescription = $(this).parent().parent().parent().find('.descriptionTd').text();
                    let priority = $(this).parent().parent().parent().find('.priorityTd').text();
                    let wooVariation = $(this).parent().parent().parent().find('.wooVariationTd').text();
                    $('#sizeId').val(sizeId);
                    $('#size').val(size);
                    $('#size_description').val(sizeDescription);
                    $('#priority').val(priority);
                    $('#woo_variation_id').val(wooVariation);
                }
            });
            $('.deleteSizeBtn').click(function () {
                confirm('Are you sure that you want to delete this product size?');
            });
        });
    </script>
@endsection
