<?php

// SuperAdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        session_start();
        if ($_SESSION["admin"] == null){
            return redirect('admin/login');
        }
    }
    
    public function dashboard()
    {
        return view('superadmin.dashboard');
    }

    public function registration()
    {
        return view('superadmin.registration');
    }

    public function payment()
    {
        return view('superadmin.payment');
    }

    public function report()
    {
        return view('superadmin.report');
    }

    public function laporan()
    {
        return view('peserta.laporan');
    }

    public function accountList()
    {
        // Contoh: Mengambil daftar akun admin dari database
        $admins = \App\Models\Admin::all();

        return view('superadmin.account_list', compact('admins'));
    }
}

