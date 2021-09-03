@extends('admin.adminTemplate')
@section('content')

    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Variations</li>
        </ol>
    </nav>
    <div class="card-body">
        <div class="col-xl-12 col-md-12">
            <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#addVariation" value="">Add new variation</button>
        </div>
    </div>

    <div class="mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold text-uppercase py-3">
                        <form id="searchForm" action="#" class=" " autocomplete="off">
                            <span class="col col-xl-3 col-lg-6 col-md-10 mt-2 mr-3 float-right" style="position:relative;">
                                <input type="search" placeholder="Variation search" aria-label="Search" class="form-control" id="searchFilter" name="searchFilter" style="">
                                <button class="btn btn-primary btn-md my-0 p waves-effect waves-light" id="searchButton" type="submit" style="position: absolute;right: 10px;top:0;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            <span class="col col-xl-auto col-lg-12 col-md-12 float-right" style="margin-left:auto;">
                                <span style="margin-right: 10px;"><a href="{{ route('variationsIndex') }}">Reset filters</a></span>
                                <select id="productFilter"  name="productFilter" data-live-search="true">
                                    <option value="" data-width="auto" selected>Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id_product }}">{{ $product->product_name }} ({{ $product->country_name }})</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#productFilter").selectpicker("render");
                                </script>

                                <select id="brandFilter"  name="brandFilter" data-live-search="true">
                                    <option value="" data-width="auto" selected>Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#brandFilter").selectpicker("render");
                                </script>

                                <select id="landerFilter"  name="landerFilter" data-live-search="true">
                                    <option value="" data-width="auto" selected>Lander</option>
                                    @foreach($landers as $lander)
                                        <option value="{{ $lander->id_lander }}">{{ $lander->lander_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#landerFilter").selectpicker("render");
                                </script>

                                <select id="checkoutFilter" name="checkoutFilter">
                                    <option value="" data-width="auto" selected>Checkout</option>
                                    @foreach($checkouts as $checkout)
                                        <option value="{{ $checkout->id_checkout }}">{{ $checkout->checkout_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#checkoutFilter").selectpicker("render");
                                </script>

                                <select id="thankyouFilter" name="thankyouFilter">
                                    <option value="" data-width="auto" selected>Thankyou</option>
                                    @foreach($thankyous as $thankyou)
                                        <option value="{{ $thankyou->id_thankyou }}">{{ $thankyou->thankyou_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#thankyouFilter").selectpicker("render");
                                </script>

                            </span>
                        </form>
                    </div>
                    <div class="card-body">
                        <div id="tableVariations" class="table-editable">
                            <table class="table table-bordered table-responsive-lg table-striped text-center" id="variationTableAjax">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addVariation" tabindex="-1" role="dialog" aria-labelledby="addVariationTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="addVariationTitle">Add variation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="newVariationForm" action="{{ route('newVariation') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Please select product first</span>
                            </div>
                            <select name="productDdlModal" id="productDdlModal" data-toggle="dropdown" required data-live-search="true">
                                @foreach($products as $product)
                                    <option value="{{ $product->id_product }}">{{ $product->product_name }} ({{ $product->country_name }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Select product</button>
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
        let landerFilter = getUrlParams.get('landerFilter');
        let checkoutFilter = getUrlParams.get('checkoutFilter');
        let thankyouFilter = getUrlParams.get('thankyouFilter');
        let productFilter = getUrlParams.get('productFilter');
        let brandFilter = getUrlParams.get('brandFilter');

        $(document).ready(function () {

            $('#searchFilter').val(searchFilter);
            $('#productFilter').val(productFilter).selectpicker('refresh');
            $('#brandFilter').val(brandFilter).selectpicker('refresh');
            $('#landerFilter').val(landerFilter).selectpicker('refresh');
            $('#checkoutFilter').val(checkoutFilter).selectpicker('refresh');
            $('#thankyouFilter').val(thankyouFilter).selectpicker('refresh');

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
                    url: baseURL + "ajaxData/getVariationsAjax?page=" + currentPage,
                    data: {searchFilter:searchFilter, landerFilter:landerFilter, checkoutFilter:checkoutFilter, thankyouFilter: thankyouFilter, productFilter: productFilter, brandFilter:brandFilter},
                    success: function (data) {
                        // console.log(data);
                        $('#variationTableAjax').html('');
                        $('#variationTableAjax').html(data);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('[data-toggle="popover"]').popover({
                            html: true
                        });

                        $('.copyVariationButton').click(function () {
                            return confirm('Are you sure that you want to create new variation from this variation?');
                        });
                    },
                    error: function (req, err) {
                        $('#errorMessageHeader').html('Error on getting variations list');
                        $('#errorMessageHeader').slideDown();
                    }
                });
            }

            fetch_data();

            $('body').on('click', function (e) {
                $('[data-toggle=popover]').each(function () {
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        $(this).popover('hide');
                    }
                });
            });

        });
    </script>
@endsection
