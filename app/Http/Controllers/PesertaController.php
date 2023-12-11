<?php
// app/Http/Controllers/PesertaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    // ... metode lainnya ...
// app/Http/Controllers/PesertaController.php

public function create()
{
    if ($_SESSION["admin"] == null){
        return redirect('admin/login');
    }
    $harga_per_bulan = [
        '1' => 17000,
        '2' => 34000,
        '3' => 52000,
        '6' => 102000,
        '12'=> 202000,
        // ... dan seterusnya
    ];
    return view('peserta.create',compact('harga_per_bulan'));
}

    public function store(Request $request)
    {
        // dd($request->all());    
        $validator=Validator::make($request->all(),[
            'nik' => 'required|string',
            'nama_lengkap' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat_desa' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|email',
            'pekerjaan_1' => 'required|string',
            'pekerjaan_2' => 'required|string',
            'paket' => 'required|in:jkk,jkm',
            'bulan_iuran' => 'required|string',
        ]);
        

            $data['nik'] =              $request->nik;
            $data['nama_lengkap'] =     $request->nama_lengkap;
            $data['tanggal_lahir'] =    $request->tanggal_lahir;
            $data['alamat_desa'] =      $request->alamat_desa;
            $data['no_hp'] =            $request->no_hp;
            $data['email'] =        $request->email;
            $data['pekerjaan_1'] = $request->pekerjaan_1;
            $data['pekerjaan_2'] = $request->pekerjaan_2;
            $data['paket'] = $request->paket;
            $data['bulan_iuran'] = $request->bulan_iuran;

            // dd($request->pekerjaan_1);

            Peserta::create($data);

        return view('pembayaran.index', $data);
        // return redirect()->route('pembayaran.index')->with('success', 'Peserta berhasil didaftarkan!');
    }
        public function rules()
        {
            return [
                // Aturan validasi lainnya,
                'nik' => 'required|unique:pesertas,nik',
                // ...
            ];
        }
        public function laporan()
        {
            return view('peserta.laporan');
        }
    
}
