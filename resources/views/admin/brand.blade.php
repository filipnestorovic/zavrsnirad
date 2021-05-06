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
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand URL</span>
                                </div>
                                <input type="text" name="brand_url" id="brand_url" class="form-control" data-value="country_shortcode" value="" required="">
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

                <form action="{{ route('connectBrandPixel') }}" id="formPixelBrand" method="post">
                    {{ csrf_field() }}
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Brand - Pixel</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Brand</span>
                                </div>
                                <select name="brandDdl" id="brandDdl" data-toggle="dropdown" required>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id_brand }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Pixel</span>
                                </div>
                                <select name="pixelDdl" id="pixelDdl" data-toggle="dropdown" required>
                                    @foreach($pixelsDdl as $pixel)
                                        <option value="{{ $pixel->id_pixel }}">{{ $pixel->fb_pixel }} - {{ $pixel->pixel_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addBrandButton" class="btn btn-primary btn-lg btn-block">Connect</button>
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
                                    <th class="text-center">Brand URL</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Pixel</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody id="tableOrderDetailsBody">

                                @foreach($brandsPixels as $brandSingle)
                                        <tr>
                                            <td class="pt-3-half">{{$brandSingle[0]['id_brand']}}</td>
                                            <td class="pt-3-half">{{$brandSingle[0]['brand_name']}}</td>
                                            <td class="pt-3-half"><a href="{{$brandSingle[0]['brand_url']}}">{{$brandSingle[0]['brand_url']}}</a></td>
                                            <td class="pt-3-half"><img src="{{ asset('/').$brandSingle[0]['logo_url'] }}" height="80px"/></td>
                                            <td class="pt-3-half">
                                                @foreach($brandSingle as $pixel)
                                                    @if($pixel['fb_pixel'] == null)
                                                        <div style="color: red;">Please connect pixel</div>
                                                    @else
                                                        <div style="margin-top: 10px;">{{ $pixel['fb_pixel'] }} - {{ $pixel['pixel_name'] }}</div>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editBrandBtn" data-toggle="modal" data-target="#editBrand" value="{{$brandSingle[0]['id_brand']}}">EDIT</button></span>
                                                <span class="table-remove"><a href="{{ route('deleteBrand',['id' => $brandSingle[0]['id_brand']]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteBrandBtn">DELETE</button></a></span>
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
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Url</span>
                            </div>
                            <input type="text" name="brandUrlModal" id="brandUrlModal" class="form-control" data-value="brandUrlModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Logo</span>
                            </div>
                            <div style="margin: 10px;"><img id="logoImgModal" src="" height="100px"/><input type="hidden" name="logoHiddenModal" id="logoHiddenModal"/></div>
                            <div style="margin-top: 40px;"><input type="file" name="brandLogoModal" id="brandLogoModal"/></div>
                        </div>
                        <hr>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Pixel</span>
                            </div>
                            @foreach($brandsPixels as $brandSingle)
                                <div class="brandPixelDiv brandPixelModal-{{ $brandSingle[0]['id_brand'] }}">
                                    <ul>
                                @foreach($brandSingle as $pixel)
                                    @if($pixel['fb_pixel'] != null)
                                        <li>
                                            <input type="text" name="brandPixelModal" value="{{ $pixel['fb_pixel'] }} - {{ $pixel['pixel_name'] }}" readonly/>
                                            <a href="{{ route('disconnectBrandPixel',['id' => $pixel['id_pixel_brands']]) }}">
                                                <button type="button" class="btn btn-danger btn-sm waves-effect disconnectBrandPixelBtn">DISCONNECT</button>
                                            </a>
                                        </li>
                                    @else
                                        <li style="color:red;">Please connect pixel</li>
                                    @endif
                                @endforeach
                                    </ul>
                                </div>
                            @endforeach
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
                        $('#brandUrlModal').val(data.brand_url);
                        $('#logoHiddenModal').val(data.logo_url);
                        $('#defaultProductDdl').val(data.default_product_id).selectpicker('refresh');
                        $('#logoImgModal').attr('src','{{ asset('/') }}' + data.logo_url);
                        $('.brandPixelModal-' + data.id_brand).show();
                        $('.disconnectBrandPixelBtn').click(function () {
                            return confirm('Are you sure that you want to disconnect pixel?');
                        });
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteBrandBtn').click(function () {
                return confirm('Are you sure that you want to delete brand?');
            });
        });
    </script>
@endsection
