<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request) {
        // echo 'Admin';
        // die();
        return view('admin.index');
    }
}
