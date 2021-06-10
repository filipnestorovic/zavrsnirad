@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold text-uppercase py-3">
                        Serbia - last orders
                    </div>
                    <div class="card-body">
                        <div id="tableStatistic" class="table-editable">
                            <table class="table table-bordered table-responsive-lg table-striped text-center" id="tableStatisticAjax">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(document).ready(function () {

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
                    url: baseURL + "ajaxData/getActiveVariationsStatistic?page=" + currentPage,
                    // data: {searchFilter:searchFilter, landerFilter:landerFilter, checkoutFilter:checkoutFilter, thankyouFilter: thankyouFilter, productFilter: productFilter, brandFilter:brandFilter},
                    success: function (data) {
                        // console.log(new Date().toLocaleString());
                        $('#tableStatisticAjax').html('');
                        $('#tableStatisticAjax').html(data);
                        // $('[data-toggle="tooltip"]').tooltip();
                        // $('[data-toggle="popover"]').popover({
                        //     html: true
                        // });
                    },
                    error: function (req, err) {
                        $('#errorMessageHeader').html('Error on getting variations list');
                        $('#errorMessageHeader').slideDown();
                    }
                });
            }

            fetch_data();
            setInterval(fetch_data, 10000);

            // $('body').on('click', function (e) {
            //     $('[data-toggle=popover]').each(function () {
            //         if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            //             $(this).popover('hide');
            //         }
            //     });
            // });

        });
    </script>
@endsection
