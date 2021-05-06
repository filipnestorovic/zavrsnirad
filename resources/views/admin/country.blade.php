@extends('admin.adminTemplate')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Country</li>
        </ol>
    </nav>

    <form action="{{route('addCountry')}}" id="formCountry" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                                </div>
                                <input type="text" name="country_name" id="country_name" class="form-control" data-value="country_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country shortcode</span>
                                </div>
                                <input type="text" name="country_shortcode" id="country_shortcode" class="form-control" data-value="country_shortcode" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Shipping cost</span>
                                </div>
                                <input type="number" name="shipping_cost" id="shipping_cost" class="form-control" data-value="shipping_cost" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency</span>
                                </div>
                                <select name="currencyIdCountry" id="currencyIdCountry" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency->id_currency }}">{{ $currency->currency_symbol }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                                </div>
                                <select name="isCountryActive" id="isCountryActive" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addCountryButton" class="btn btn-primary btn-lg btn-block">Add country</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Country</h5>
                        <div class="card-body">
                            <div id="tableOrderDetails" class="table-editable">
                                <table class="table table-bordered table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Country shortcode</th>
                                        <th class="text-center">Shipping cost</th>
                                        <th class="text-center">Currency</th>
                                        <th class="text-center">Active</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableOrderDetailsBody">
                                    @isset($countries)
                                        @foreach($countries as $country)
                                            <tr>
                                                <td class="pt-3-half">{{$country->id_country}}</td>
                                                <td class="pt-3-half">{{$country->country_name}}</td>
                                                <td class="pt-3-half">{{$country->country_code}}</td>
                                                <td class="pt-3-half">{{$country->shipping_cost}}</td>
                                                <td class="pt-3-half">{{$country->currency_symbol}}</td>
                                                <td class="pt-3-half">
                                                    {{ ($country->is_active == 1) ? "Yes" : "No" }}
                                                </td>
                                                <td>
                                                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editCountryBtn" data-toggle="modal" data-target="#editCountry" value="{{$country->id_country}}">EDIT</button></span>
                                                    <span class="table-remove"><a href="{{ route('deleteCountry',['id' => $country->id_country]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteCountryBtn">DELETE</button></a></span>
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
    <form action="{{route('addCurrency')}}" id="formCurrency" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency</span>
                                </div>
                                <input type="text" name="currency_name" id="currency_name" class="form-control" data-value="currency_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency symbol</span>
                                </div>
                                <input type="text" name="currency_symbol" id="currency_symbol" class="form-control" data-value="currency_symbol" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addCurrencyButton" class="btn btn-primary btn-lg btn-block">Add currency</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Currency</h5>
                        <div class="card-body">
                            <div id="tableOrderDetails" class="table-editable">
                                <table class="table table-bordered table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Currency</th>
                                        <th class="text-center">Currency symbol</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableOrderDetailsBody">
                                    @isset($currencies)
                                        @foreach($currencies as $currency)
                                            <tr>
                                                <td class="pt-3-half">{{$currency->id_currency}}</td>
                                                <td class="pt-3-half">{{$currency->currency}}</td>
                                                <td class="pt-3-half">{{$currency->currency_symbol}}</td>
                                                <td>
                                                    <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editCurrencyBtn" data-toggle="modal" data-target="#editCurrency" value="{{$currency->id_currency}}">EDIT</button></span>
                                                    <span class="table-remove"><a href="{{ route('deleteCurrency',['id' => $currency->id_currency]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteCurrencyBtn">DELETE</button></a></span>
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


    <div class="modal fade" id="editCountry" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Country</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCountryForm" action="{{ route('editCountry') }}" method="POST" autocomplete="off">
                        {{ csrf_field() }}
                        <input type="hidden" name="countryIdModal" id="countryIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Country</span>
                            </div>
                            <input type="text" name="countryNameModal" id="countryNameModal" class="form-control" data-value="countryNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Shortcode</span>
                            </div>
                            <input type="text" name="countryShortcodeModal" id="countryShortcodeModal" class="form-control" data-value="countryShortcodeModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Shipping cost</span>
                            </div>
                            <input type="text" name="shippingCostModal" id="shippingCostModal" class="form-control" data-value="shippingCostModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency</span>
                            </div>
                            <select name="currencyIdCountryModal" id="currencyIdCountryModal" data-toggle="dropdown" required>
                                @foreach($currencies as $currency)
                                    <option value="{{ $currency->id_currency }}">{{ $currency->currency_symbol }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                            </div>
                            <select name="isCountryActiveModal" id="isCountryActiveModal" data-toggle="dropdown" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit country</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCurrency" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Currency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCurrencyForm" action="{{ route('editCurrency') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="currencyIdModal" id="currencyIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency</span>
                            </div>
                            <input type="text" name="currencyNameModal" id="currencyNameModal" class="form-control" data-value="currencyNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Currency symbol</span>
                            </div>
                            <input type="text" name="currencySymbolModal" id="currencySymbolModal" class="form-control" data-value="currencySymbolModal" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit currency</button>
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
            $('.editCountryBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getCountry/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#countryIdModal').val(data.id_country);
                        $('#countryNameModal').val(data.country_name);
                        $('#countryShortcodeModal').val(data.country_code);
                        $('#shippingCostModal').val(data.shipping_cost);
                        $('#currencyIdCountryModal').val(data.currency_id);
                        $('#currencyIdCountryModal').selectpicker('refresh');
                        $('#isCountryActiveModal').val(data.is_active);
                        $('#isCountryActiveModal').selectpicker('refresh');
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteCountryBtn').click(function () {
                confirm('Are you sure that you want to delete country?');
            });
            $('.editCurrencyBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getCurrency/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#currencyIdModal').val(data.id_currency);
                        $('#currencyNameModal').val(data.currency);
                        $('#currencySymbolModal').val(data.currency_symbol);
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteCurrencyBtn').click(function () {
                confirm('Are you sure that you want to delete currency?');
            });
        });
    </script>
@endsection
