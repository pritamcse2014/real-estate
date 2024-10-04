<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request) {
        // echo 'Admin';
        // die();
        return view('admin.index');
    }

    public function AdminLogout(Request $request) {
        // echo 'Admin';
        // die();
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
