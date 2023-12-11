<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class LaporanController extends Controller
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
        return view('laporan.index');
    }

    public function cari(Request $request)
    {
        if ($_SESSION["admin"] == null){
            return redirect('admin/login');
        }
        $desa = $request->input('alamat_desa');

        // Query data peserta berdasarkan desa
        $dataPeserta = Peserta::where('alamat_desa', 'LIKE', "%$request->desa%")->get();

        return view('laporan.index', ['dataPeserta' => $dataPeserta]);
    }
}
