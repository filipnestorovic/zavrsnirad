<?php

namespace App\Http\Controllers;

use App\Models\Pixel;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //logika za logovanje i Auth

    public function __construct()
    {
//        $this->middleware('countryCheck');
        $this->modelStatistic = new Statistic();
    }

    public function admin() {
        return view('admin.index');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
