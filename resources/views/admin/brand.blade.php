@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Brand</li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <form action="{{ route('addBrand') }}" id="formBrand" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Add Brand</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand name</span>
                                </div>
                                <input type="text" name="brand_name" id="brand_name" class="form-control" data-value="country_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Logo</span>
                                </div>
                                <input type="file" name="brand_logo" id="brand_logo" required/>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addBrandButton" class="btn btn-primary btn-lg btn-block">Add brand</button>
                            </div>
                        </div>
                    </div>
                </form>

                <form action="{{ route('addDomain') }}" id="formDomain" method="post">
                    {{ csrf_field() }}
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Add Domain</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Domain Url</span>
                                </div>
                                <input type="text" name="domain_url" id="domain_url" class="form-control" placeholder="https://domain.com" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                                </div>
                                <select name="brandDdl" id="brandDdl" data-toggle="dropdown" required data-live-search="true">
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addDomainButton" class="btn btn-primary btn-lg btn-block">Add domain</button>
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
                        <div id="tableOrderDetails" class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Brand name</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody id="tableOrderDetailsBody">
                                @foreach($brands as $brandSingle)
                                    <tr>
                                        <td class="pt-3-half">{{$brandSingle->id_brand}}</td>
                                        <td class="pt-3-half">{{$brandSingle->brand_name}}</td>
                                        <td class="pt-3-half"><img src="{{ asset('/').$brandSingle->logo_url }}" height="70px"/></td>
                                        <td>
                                            <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editBrandBtn" data-toggle="modal" data-target="#editBrand" value="{{$brandSingle->id_brand}}">EDIT</button></span>
                                            <span class="table-remove"><a href="{{ route('deleteBrand',['id' => $brandSingle->id_brand]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteBrandBtn">DELETE</button></a></span>
                                            <span class="table-edit"><button type="button" class="btn btn-success btn-rounded btn-sm my-0 brandDomainsBtn" data-toggle="modal" data-target="#brandDomains" value="{{$brandSingle->id_brand}}">DOMAINS</button></span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editBrand" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Brand</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCountryForm" action="{{ route('editBrand') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <input type="hidden" name="brandIdModal" id="brandIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                            </div>
                            <input type="text" name="brandNameModal" id="brandNameModal" class="form-control" data-value="brandNameModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Logo</span>
                            </div>
                            <div style="margin: 10px;"><img id="logoImgModal" src="" height="100px"/><input type="hidden" name="logoHiddenModal" id="logoHiddenModal"/></div>
                            <div style="margin-top: 40px;"><input type="file" name="brandLogoModal" id="brandLogoModal"/></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit brand</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="brandDomains" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Brand Domains</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="tablePixelDomains">
                        <table class="table table-responsive-sm table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Domain</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody id="tableBrandDomainsBody">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editDomain" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Domain</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editDomainForm" action="{{ route('editDomain') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="domainIdHiddenModal" id="domainIdHiddenModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Domain</span>
                            </div>
                            <input type="text" name="domainUrlModal" id="domainUrlModal" class="form-control" data-value="domainUrlModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                            </div>
                            <select name="brandDdlModal" id="brandDdlModal" data-toggle="dropdown" required data-live-search="true">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit domain</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        #tableOrderDetailsBody td {
            vertical-align: middle;
        }
        li {
            list-style: none;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

            $('.editBrandBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getBrand/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('.brandPixelDiv').hide();
                        $('#brandIdModal').val(data.id_brand);
                        $('#brandNameModal').val(data.brand_name);
                        $('#logoHiddenModal').val(data.logo_url);
                        $('#logoImgModal').attr('src','{{ asset('/') }}' + data.logo_url);
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteBrandBtn').click(function () {
                return confirm('Are you sure that you want to delete brand?');
            });
            $('.brandDomainsBtn').click(function () {
                let id = $(this).val();
                let text = "";
                let deleteRoute = "";
                $.ajax({
                    type: "GET",
                    url: baseURL + "getBrandDomains/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        for (let dataIndex in data) {
                            text += '<tr>';
                            text += '<td class="pt-3-half">' + data[dataIndex][0].id_domain + '</td>';
                            text += '<td class="pt-3-half"><a target="_blank" href="' + data[dataIndex][0].domain_url + '">' + data[dataIndex][0].domain_url + '</a></td>';
                            text += '<td class="pt-3-half">';
                            deleteRoute = "{{ route('deleteDomain',['id' => ':id']) }}";
                            deleteRoute = deleteRoute.replace(':id', data[dataIndex][0].id_domain);
                            text += '<span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editDomainBtn" data-toggle="modal" data-target="#editDomain" value="' + data[dataIndex][0].id_domain + '">EDIT</button></span>';
                            text += '<span class="table-remove"><a href="' + deleteRoute + '"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 removeDomainBtn">DELETE</button></a></span>';
                            text += '</td>';
                            text += '</tr>';
                        }
                        $('#tableBrandDomainsBody').html(text);

                        $('.removeDomainBtn').click(function () {
                            return confirm('Are you sure that you want to delete this domain?');
                        });

                        $('.editDomainBtn').click(function(){
                            let id = $(this).val();
                            $.ajax({
                                type: "GET",
                                url: baseURL + "getDomain/" + parseInt(id),
                                dataType: 'json',
                                success: function (data) {
                                    $('#domainIdHiddenModal').val(data[0].id_domain);
                                    $('#domainUrlModal').val(data[0].domain_url);
                                    $('#brandDdlModal').val(data[0].brand_id).selectpicker('refresh');
                                },
                                error: function (req, err) {
                                    console.log(req);
                                }
                            })
                        });
                    },
                    error: function (req, err) {
                        console.log(req);
                        $('#errorMessage').html(req.responseText).removeClass('d-none');
                    }
                })
            });
        });
    </script>
@endsection
