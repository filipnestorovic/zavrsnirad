@extends('admin.adminTemplate')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Variation</li>
        </ol>
    </nav>

    <form action="{{route('addVariation')}}" id="formAddVariation" method="post">
        {{ csrf_field() }}
        <div class="mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="productIdVariation" id="productIdVariation" value="{{ $product_id }}"/>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Variation name</span>
                                </div>
                                <input type="text" name="variation_name" id="variation_name" class="form-control" data-value="variation_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Variation description</span>
                                </div>
                                <textarea name="variation_description" id="variation_description" class="form-control" data-value="variation_description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Lander</span>
                                </div>
                                <select name="landerIdVariation" id="landerIdVariation" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    @foreach($landers as $lander)
                                        <option value="{{ $lander->id_lander }}">{{ $lander->lander_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Checkout</span>
                                </div>
                                <select name="checkoutIdVariation" id="checkoutIdVariation" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    @foreach($checkouts as $checkout)
                                        <option value="{{ $checkout->id_checkout }}">{{ $checkout->checkout_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Thankyou</span>
                                </div>
                                <select name="thankyouIdVariation" id="thankyouIdVariation" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    @foreach($thankyous as $thankyou)
                                        <option value="{{ $thankyou->id_thankyou }}">{{ $thankyou->thankyou_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Default</span>
                                </div>
                                <select name="defaultVariation" id="defaultVariation" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    <option value="1">Yes</option>
                                    <option value="0" selected>No</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Active</span>
                                </div>
                                <select name="isVariationActive" id="isVariationActive" id="inputGroupSelect01" data-toggle="dropdown" required>
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addVariationBtn" class="btn btn-primary btn-lg btn-block">Add variation</button>
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

        });
    </script>
@endsection
