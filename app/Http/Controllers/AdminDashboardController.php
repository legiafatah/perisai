<?php

// app/Http/Controllers/AdminDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    public function index()
    {
        if ($_SESSION["admin"] == null){
            return redirect('admin/login');
        }
        return view('admin.dashboard');
    }
}

