@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
            <form action="{{ route('addProduct') }}" id="formProduct" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                                </div>
                                <input type="text" name="product_name" id="product_name" class="form-control" data-value="product_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Sku</span>
                                </div>
                                <input type="text" name="product_sku" id="product_sku" class="form-control" data-value="product_sku" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Slug</span>
                                </div>
                                <input type="text" name="product_slug" id="product_slug" class="form-control" data-value="product_slug" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Image</span>
                                </div>
                                <input type="file" name="product_image" id="product_image" required/>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                                </div>
                                <select name="brandDdl" id="brandDdl" data-toggle="dropdown" required data-live-search="true">
                                    @foreach($brandsDdl as $brand)
                                        <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Default</span>
                                </div>
                                <select name="defaultProduct" id="defaultProduct" data-toggle="dropdown" required>
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                                </div>
                                <select name="countryDdl" id="countryDdl" data-toggle="dropdown" required data-live-search="true">
                                    @foreach($countriesDdl as $country)
                                        <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3" id="wooId" style="display: none;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Woocommerce ID</span>
                                </div>
                                <input type="text" name="product_woocommerce_id" id="product_woocommerce_id" class="form-control" data-value="product_woocommerce_id" value="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addProductBtn" class="btn btn-primary btn-lg btn-block">Add product</button>
                            </div>
                        </div>
                    </div>
            </form>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold text-uppercase py-3">
                        <form id="searchForm" action="#" class=" " autocomplete="off">
                            <span class="col col-xl-3 col-lg-6 col-md-10 mt-2 mr-3 float-right" style="position:relative;">
                                <input type="search" placeholder="Product search" aria-label="Search" class="form-control" id="searchFilter" name="searchFilter" style="">
                                <button class="btn btn-primary btn-md my-0 p waves-effect waves-light" id="searchButton" type="submit" style="position: absolute;right: 10px;top:0;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            <span class="col col-xl-auto col-lg-12 col-md-12 float-right" style="margin-left:auto;">
                                <span style="margin-right: 10px;"><a href="{{ route('productIndex') }}">Reset filters</a></span>
                                <select id="brandFilter"  name="brandFilter" data-live-search="true">
                                    <option value="" data-width="auto" selected>Brand</option>
                                    @foreach($brandsDdl as $brand)
                                        <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#brandFilter").selectpicker("render");
                                </script>

                                <select id="countryFilter"  name="countryFilter">
                                    <option value="" data-width="auto" selected>Country</option>
                                    @foreach($countriesDdl as $country)
                                        <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#countryFilter").selectpicker("render");
                                </script>

                            </span>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center" id="productTableAjax">
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProductForm" action="{{ route('editProduct') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}
                        <input type="hidden" name="productIdModal" id="productIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                            </div>
                            <input type="text" name="productNameModal" id="productNameModal" class="form-control" data-value="productNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Sku</span>
                            </div>
                            <input type="text" name="productSkuModal" id="productSkuModal" class="form-control" data-value="productSkuModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Slug</span>
                            </div>
                            <input type="text" name="productSlugModal" id="productSlugModal" class="form-control" data-value="productSlugModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Image</span>
                            </div>
                            <div style="margin: 10px;"><img id="productImgModal" src="" height="100px"/><input type="hidden" name="imageHiddenModal" id="imageHiddenModal"/></div>
                            <div style="margin-top: 40px;"><input type="file" name="productImageModal" id="productImageModal"/></div>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                            </div>
                            <select name="brandDdlModal" id="brandDdlModal" data-toggle="dropdown">
                                @foreach($brandsDdl as $brand)
                                    <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Default</span>
                            </div>
                            <select name="defaultProductModal" id="defaultProductModal" data-toggle="dropdown" required>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                            </div>
                            <select name="countryDdlModal" id="countryDdlModal" data-toggle="dropdown">
                                @foreach($countriesDdl as $country)
                                    <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3" id="wooIdModal" style="display: none;">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Woocommerce</span>
                            </div>
                            <input type="text" name="woocommerceIdModal" id="woocommerceIdModal" class="form-control" data-value="woocommerceIdModal" value="" autocomplete="off">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit product</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="productPixel" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Pixel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="successAjaxMessage" class="note note-success" style="display: none"></div>
                    <div id="errorAjaxMessage" class="note note-danger" style="display: none"></div>
                    <form id="productPixelForm" action="{{ route('connectProductPixel') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}
                         <input type="hidden" name="productIdHidden" id="productIdHidden"/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand pixels (already connected)</span>
                            </div>
                            <div id="listBrandPixelsForProduct">

                            </div>
                        </div>
                        <div id="pixelSectionModal">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Want different product pixel?</span>
                                </div>
                                <select name="pixelDdlModal" id="pixelDdlModal" data-toggle="dropdown">
                                    @foreach($pixels as $pixel)
                                        <option value="{{ $pixel->id_pixel }}">{{ $pixel->fb_pixel }} - {{ $pixel->pixel_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect">Connect product</button>
                            </div>
                        </div>
                        <div id="pixelForSingleProduct"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        #productTableAjax td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('scripts')
    <script>

        let getUrlParams = new URLSearchParams(window.location.search);

        let searchFilter = getUrlParams.get('searchFilter');
        let brandFilter = getUrlParams.get('brandFilter');
        let countryFilter = getUrlParams.get('countryFilter');

        $(document).ready(function () {

            $('#searchFilter').val(searchFilter);
            $('#brandFilter').val(brandFilter).selectpicker('refresh');
            $('#countryFilter').val(countryFilter).selectpicker('refresh');

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
                    url: baseURL + "ajaxData/getProductsAjax?page=" + currentPage,
                    data: {searchFilter:searchFilter, brandFilter:brandFilter, countryFilter:countryFilter},
                    success: function (data) {
                        $('#productTableAjax').html('');
                        $('#productTableAjax').html(data);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('[data-toggle="popover"]').popover({
                            html: true
                        });
                        afterInitialAjax();
                    },
                    error: function (req, err) {
                        $('#errorMessageHeader').html('Error on getting products list');
                        $('#errorMessageHeader').slideDown();
                    }
                });
            }

            $('body').on('click', function (e) {
                $('[data-toggle=popover]').each(function () {
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        $(this).popover('hide');
                    }
                });
            });

            fetch_data();

            function afterInitialAjax() {
                $('#countryDdl').change(function () {
                    let id = $(this).val();
                    if(id==="1") {
                        $('#wooId').slideUp();
                    } else {
                        $('#wooId').slideDown();
                    }
                });

                $('.showProductPixel').click(function () {
                    let id = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: baseURL + "getBrandPixelForSingleProduct/" + parseInt(id),
                        dataType: 'json',
                        success: function (data) {
                            let text = "";
                            for (let i = 0; i < data.length; i++) {
                                if(data[i].id_pixel != null) {
                                    text += '<input type="hidden" name="brandHiddenPixel' + i + '" id="brandHiddenPixel" class="form-control" value="' + data[i].id_pixel + '"/>';
                                    text += '<input type="text" name="productBrandPixel' + i + '" id="productBrandPixel" class="form-control" data-value="productBrandPixel" value="' + data[i].fb_pixel + ' - ' + data[i].pixel_name + '" autocomplete="off" readonly>';
                                } else {
                                    text += '<span style="color:red;">Please connect brand with pixel first!</span>'
                                }
                            }
                            $('#listBrandPixelsForProduct').html(text);
                            $('#productIdHidden').val(id);
                        },
                        error: function (req, err) {
                            console.log(req);
                        }
                    });
                    $.ajax({
                        type: "GET",
                        url: baseURL + "getProductPixel/" + parseInt(id),
                        dataType: 'json',
                        success: function (data) {
                            if(data.id_pixel != "undefined") {
                                $('#pixelSectionModal').hide();
                                $('#pixelForSingleProduct').show();
                                let text = '';
                                text += '<span><strong>Product pixel</strong></span>';
                                text += '<input type="text" name="productPixel" id="productPixel" class="form-control" data-value="productPixel" value="' + data[0].fb_pixel + ' - ' + data[0].pixel_name + '" autocomplete="off" readonly style="margin-top: 10px;">';
                                text += '<button type="button" class="btn btn-danger btn-sm waves-effect disconnectProductPixelBtn" style="margin-top: 15px;" value="' + data[0].id_pixel_products + '">DISCONNECT</button>';
                                $('#pixelForSingleProduct').html(text);

                                $('.disconnectProductPixelBtn').click(function () {
                                    $confirm = confirm('Are you sure that you want to disconnect pixel?');
                                    if($confirm) {
                                        let id = $(this).val();
                                        $.ajax({
                                            type: "GET",
                                            url: baseURL + "disconnectProductPixel/" + parseInt(id),
                                            dataType: 'json',
                                            success: function (data) {
                                                $('#successAjaxMessage').text("Pixel has been disconnected successfully!");
                                                $('#successAjaxMessage').show();
                                                $('#errorAjaxMessage').hide();
                                            },
                                            error: function (req, err) {
                                                console.log(req);
                                                $('#errorAjaxMessage').text("Error with disconnecting pixel!");
                                                $('#errorAjaxMessage').show();
                                                $('#successAjaxMessage').hide();
                                            }
                                        })
                                    }
                                });
                            }
                        },
                        error: function (req, err) {
                            $('#pixelSectionModal').show();
                            $('#pixelForSingleProduct').hide();
                            console.log(req);
                        }
                    });
                });

                $('.editProductBtn').click(function(){
                    let id = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: baseURL + "getProduct/" + parseInt(id),
                        dataType: 'json',
                        success: function (data) {
                            $('#wooIdModal').hide();
                            $('#productIdModal').val(data.id_product);
                            $('#productNameModal').val(data.product_name);
                            $('#productSkuModal').val(data.sku);
                            $('#productSlugModal').val(data.slug);
                            $('#imageHiddenModal').val(data.product_image);
                            $('#productImgModal').attr('src','{{ asset('/') }}' + data.product_image);
                            $('#countryDdlModal').val(data.country_id);
                            $('#countryDdlModal').selectpicker('refresh');
                            $('#brandDdlModal').val(data.brand_id);
                            $('#brandDdlModal').selectpicker('refresh');
                            $('#defaultProductModal').val(data.is_default_product).selectpicker('refresh');
                            if(data.country_id != "1") {
                                $('#woocommerceIdModal').val(data.woocommerce_product_id);
                                $('#wooIdModal').show();
                            }

                            $('#countryDdlModal').change(function () {
                                let id = $(this).val();
                                if(id==="1") {
                                    $('#wooIdModal').slideUp();
                                } else {
                                    $('#wooIdModal').slideDown();
                                }
                            });
                        },
                        error: function (req, err) {
                            console.log(req);
                        }
                    })
                });
                $('.deleteProductBtn').click(function () {
                    return confirm('Are you sure that you want to delete product?');
                });
                $('.restoreProductBtn').click(function () {
                    return confirm('Are you sure that you want to restore product?');
                });
            }

        });
    </script>
@endsection
