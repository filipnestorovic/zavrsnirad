<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function admin() {
        return view('admin.index');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
