@extends('admin.adminTemplate')
@section('content')

    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tests</li>
        </ol>
    </nav>
    <div class="card-body">
        <div class="col-xl-12 col-md-12">
            <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#createTest" value="">Add new test</button>
        </div>
    </div>

    <div class="mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold text-uppercase py-3">
                        <form id="searchForm" action="#" class=" " autocomplete="off">
                            <span class="col col-xl-3 col-lg-6 col-md-10 mt-2 mr-3 float-right" style="position:relative;">
                                <input type="search" placeholder="Test search" aria-label="Search" class="form-control" id="searchFilter" name="searchFilter" style="">
                                <button class="btn btn-primary btn-md my-0 p waves-effect waves-light" id="searchButton" type="submit" style="position: absolute;right: 10px;top:0;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            <span class="col col-xl-auto col-lg-12 col-md-12 float-right" style="margin-left:auto;">
                                <span style="margin-right: 10px;"><a href="{{ route('testsIndex') }}">Reset filters</a></span>
                                <select id="productFilter"  name="productFilter">
                                    <option value="" data-width="auto" selected>Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id_product }}">{{ $product->product_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                   $("#productFilter").selectpicker("render");
                                </script>
                                <select id="activeFilter"  name="activeFilter">
                                    <option value="" data-width="auto" selected>All</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    <option value="2">Finished</option>
                                </select>
                                <script>
                                   $("#activeFilter").selectpicker("render");
                                </script>

                            </span>
                        </form>
                    </div>
                    <div class="card-body">
                        <div id="tableTests" class="table-editable">
                            <table class="table table-bordered table-responsive-lg table-striped text-center" id="testTableAjax">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createTest" tabindex="-1" role="dialog" aria-labelledby="addTestTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="addTestTitle">Create new test</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="createTestForm" action="{{ route('createTest') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Please select product</span>
                            </div>
                            <select name="productIdTestCreate" id="productIdTestCreate" data-toggle="dropdown" required>
                                @foreach($products as $product)
                                    <option value="{{ $product->id_product }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Create test</button>
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
        let productFilter = getUrlParams.get('productFilter');
        let activeFilter = getUrlParams.get('activeFilter');

        $(document).ready(function () {

            $('#searchFilter').val(searchFilter);
            $('#productFilter').val(productFilter).selectpicker('refresh');
            $('#activeFilter').val(activeFilter).selectpicker('refresh');

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
                    url: baseURL + "ajaxData/getTestsAjax?page=" + currentPage,
                    data: {searchFilter:searchFilter, productFilter: productFilter, activeFilter: activeFilter},
                    success: function (data) {
                        $('#testTableAjax').html('');
                        $('#testTableAjax').html(data);
                    },
                    error: function (req, err) {
                        $('#errorMessageHeader').html('Error on getting tests list');
                        $('#errorMessageHeader').slideDown();
                    }
                });
            }

            fetch_data();

        });
    </script>
@endsection
