@extends('admin.adminTemplate')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Lander</li>
        </ol>
    </nav>
    <form action="{{route('addLander')}}" id="formLander" method="post">
        {{ csrf_field() }}
    <div class="mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Lander name</span>
                            </div>
                            <input type="text" name="lander_name" id="lander_name" class="form-control" data-value="lander_name" value="" required="">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                            </div>
                            <select name="brandIdLander" id="brandIdLander" data-toggle="dropdown" required>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Product</span>
                            </div>
                            <select name="productIdLander" id="productIdLander" data-toggle="dropdown" required>
                                @foreach($products as $product)
                                    <option value="{{ $product->id_product }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Mobile version</span>
                            </div>
                            <select name="differentMobileVersion" id="differentMobileVersion" data-toggle="dropdown" required>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <button type="submit" id="addLanderBtn" class="btn btn-primary btn-lg btn-block">Add lander page</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold text-uppercase py-3">
                        <form id="searchForm" action="#" class=" " autocomplete="off">
                        <span class="col col-xl-3 col-lg-6 col-md-10 mt-2 mr-3 float-right" style="position:relative;">
                            <input type="search" placeholder="Landers search" aria-label="Search" class="form-control" id="searchFilter" name="searchFilter" style="">
                            <button class="btn btn-primary btn-md my-0 p waves-effect waves-light" id="searchButton" type="submit" style="position: absolute;right: 10px;top:0;">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                            <span class="col col-xl-auto col-lg-12 col-md-12 float-right" style="margin-left:auto;">
                            <span style="margin-right: 10px;"><a href="{{ route('landerIndex') }}">Reset filters</a></span>
                            <select id="brandFilter"  name="brandFilter">
                                <option value="" data-width="auto" selected>Brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                            <script>
                               $("#brandFilter").selectpicker("render");
                            </script>
                            <select id="productFilter"  name="productFilter">
                                <option value="" data-width="auto" selected>Product</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id_product }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                            <script>
                               $("#productFilter").selectpicker("render");
                            </script>
                        </span>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center" id="landerTableAjax">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editLander" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Lander</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCountryForm" action="{{ route('editLander') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="landerIdModal" id="landerIdModal" value=""/>
                    <div class="md-form input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Lander</span>
                        </div>
                        <input type="text" name="landerNameModal" id="landerNameModal" class="form-control" data-value="landerNameModal" value="" autocomplete="off">
                    </div>
                    <div class="md-form input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                        </div>
                        <select name="brandIdModal" id="brandIdModal" data-toggle="dropdown" required>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md-form input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Product</span>
                        </div>
                        <select name="productIdModal" id="productIdModal" data-toggle="dropdown" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id_product }}">{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md-form input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Mobile version</span>
                        </div>
                        <select name="differentMobileVersionModal" id="differentMobileVersionModal" data-toggle="dropdown" required>
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit lander</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let getUrlParams = new URLSearchParams(window.location.search);

        let searchFilter = getUrlParams.get('searchFilter');
        let brandFilter = getUrlParams.get('brandFilter');
        let productFilter = getUrlParams.get('productFilter');

        $(document).ready(function () {

            $('#searchFilter').val(searchFilter);
            $('#brandFilter').val(brandFilter).selectpicker('refresh');
            $('#productFilter').val(productFilter).selectpicker('refresh');

            $('#searchForm select').change(function() {
                $('#searchForm').submit();
            });

            function fetch_data(goToPage) {

                let currentPage = 1;
                if(goToPage){
                    currentPage = goToPage;
                }
                if(currentPage==null||currentPage==""){
                    currentPage = 1;
                } else{
                    currentPage = getQueryVariable("page");
                }

                $.ajax({
                    url: baseURL + "ajaxData/getLandersAjax?page=" + currentPage,
                    data: {searchFilter:searchFilter, brandFilter:brandFilter, productFilter:productFilter},
                    success: function (data) {
                        $('#landerTableAjax').html('');
                        $('#landerTableAjax').html(data);

                        $('.editLanderBtn').click(function(){
                            let id = $(this).val();
                            $.ajax({
                                type: "GET",
                                url: baseURL + "getLander/" + parseInt(id),
                                dataType: 'json',
                                success: function (data) {
                                    console.log(data);
                                    $('#landerIdModal').val(data.id_lander);
                                    $('#landerNameModal').val(data.lander_name);
                                    $('#brandIdModal').val(data.brand_id);
                                    $('#brandIdModal').selectpicker('refresh');
                                    $('#productIdModal').val(data.product_id);
                                    $('#productIdModal').selectpicker('refresh');
                                    $('#differentMobileVersionModal').val(data.mobile_version).selectpicker('refresh');
                                },
                                error: function (req, err) {
                                    console.log(req);
                                }
                            })
                        });
                        $('.deleteLanderBtn').click(function () {
                            return confirm('Are you sure that you want to delete lander?');
                        });
                    },
                    error: function (req, err) {
                        $('#errorMessageHeader').html('Error on getting landers list');
                        $('#errorMessageHeader').slideDown();
                    }
                });
            }

            fetch_data();
        });
    </script>
@endsection
