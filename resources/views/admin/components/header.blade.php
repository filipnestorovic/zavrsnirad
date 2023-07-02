<div class="container-for-admin">
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar pt-2 pb-2">
            <div class="container-fluid">
                <!-- Brand -->
                {{--<div class="navbar-brand waves-effect" style="min-height: 50px;">--}}

                {{--</div>--}}

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item font-weight-semibold d-none d-lg-block"></li>
                    </ul>

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto" style="display:block;">
                            <a href="{{ route('adminDashboard') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-home mr-3"></i>Dashboard</a>
                            <a href="{{ route('countryIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-dollar-sign mr-3"></i>Countries/Currencies</a>
                            <a href="{{ route('brandIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-certificate mr-3"></i>Brands/Domains</a>
                            <a href="{{ route('productIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fab fa-product-hunt mr-3"></i>Products</a>
                            <a href="{{ route('landerIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-file-import mr-3"></i>Landers</a>
                            <a href="{{ route('checkoutIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-receipt mr-3"></i>Checkouts</a>
                            <a href="{{ route('thankyouIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-money-bill mr-3"></i>Thankyous</a>
                            <a href="{{ route('eventIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fas fa-user-clock mr-3"></i>Events</a>
                            <a href="{{ route('variationsIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fa fa-barcode mr-3"></i>Variations</a>
                            <a href="{{ route('testsIndex') }}" class="list-group-item list-group-item-action waves-effect">
                                <i class="fas fa-align-justify mr-3"></i>Tests</a>
                        </ul>
                        <!-- Links -->

                    <!-- Right -->

                </div>

                <div class="float-right">
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <div class="text-center">
                                @if(session('success') != null)
                                    <span id="successMessageHeader" class="note note-success">{{ session('success') }}</span>
                                @endif
                                @if(session('error') != null)
                                    <span id="errorMessageHeader" class="note note-danger">{{ session('error') }}</span>
                                @endif
                                @if(session('info') != null)
                                    <span id="infoMessageHeader" class="note note-warning">{{ session('info') }}</span>
                                @endif
                                @if($errors->any())
                                    <div class="note note-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <span id="errorMessage" class="note note-danger d-none"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="loading-spinner" class="spinner-grow text-primary" role="status" style="display:none;">
                    <span class="sr-only">Loading...</span>
                </div>
                <b>User: {{Auth::user()->name}} | <a href="{{ route('logoutAdmin') }}">Logout</a> </b>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect" href="{{route('adminDashboard')}}">
                <img src="{{asset('/')}}admin/img/wombatlogo.png" class="img-fluid" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="{{ route('adminDashboard') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-home mr-3"></i>Dashboard</a>
                <a href="{{ route('countryIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-dollar-sign mr-3"></i>Countries/Currencies</a>
                <a href="{{ route('brandIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-certificate mr-3"></i>Brands/Domains</a>
                <a href="{{ route('productIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fab fa-product-hunt mr-3"></i>Products</a>
                <a href="{{ route('landerIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-file-import mr-3"></i>Landers</a>
                <a href="{{ route('checkoutIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-receipt mr-3"></i>Checkouts</a>
                <a href="{{ route('thankyouIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-money-bill mr-3"></i>Thankyous</a>
                <a href="{{ route('eventIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user-clock mr-3"></i>Events</a>
                <a href="{{ route('variationsIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-barcode mr-3"></i>Variations</a>
                <a href="{{ route('testsIndex') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-align-justify mr-3"></i>Tests</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-12">
