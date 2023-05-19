@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
{{--    <div class="card-body">--}}
{{--        <div class="col-xl-12 col-md-12">--}}
{{--            Country:--}}
{{--            <select name="countryDdl" id="countryDdl" data-toggle="dropdown">--}}
{{--                @foreach($countries as $country)--}}
{{--                    <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="card" id="tableStatisticAjax">
                </div>
            </div>
        </div>
    </div>
    <style>
        h2 {
            text-align: center;
        }
        .btn-link {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
@endsection
@section('scripts')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            function fetch_data() {--}}
{{--                let country_id = $('#countryDdl').val();--}}
{{--                let currentPage = 1;--}}
{{--                $.ajax({--}}
{{--                    url: baseURL + "ajaxData/getActiveVariationsStatistic?page=" + currentPage,--}}
{{--                    data: {country_id:country_id},--}}
{{--                    success: function (data) {--}}
{{--                        console.log(data);--}}
{{--                        $('#tableStatisticAjax').html('');--}}
{{--                        $('#tableStatisticAjax').html(data);--}}
{{--                    },--}}
{{--                    error: function (req, err) {--}}
{{--                        $('#errorMessageHeader').html('Error on getting variations list');--}}
{{--                        $('#errorMessageHeader').slideDown();--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--            fetch_data();--}}
{{--            // setInterval(fetch_data, 20000);--}}
{{--            $('#countryDdl').change(fetch_data);--}}
{{--        });--}}
{{--    </script>--}}
@endsection
