<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PembayaranController extends Controller
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
        // Logika untuk menampilkan menu pembayaran
        return view('pembayaran.index'); // Sesuaikan dengan struktur tampilan Anda
    }
    public function process(Request $request)
    {
          // Validasi formulir
        $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'bulan_iuran' => 'required',
        ]);

        // Cari peserta berdasarkan NIK dan nama lengkap
        $peserta = Peserta::where('nik', $request->nik)
            ->where('nama_lengkap', $request->nama_lengkap)
            ->first();

        // Jika peserta ditemukan
        if ($peserta) {
            // Lakukan logika pembayaran di sini
            // Contoh: $peserta->prosesPembayaran($request->bulan_iuran);
            // Setelah selesai, mungkin Anda ingin mengarahkan pengguna kembali ke halaman tertentu.
            // return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diproses!');

            $data = [
                'bulan_iuran' => $request->bulan_iuran,
            ];

            return view('pembayaran.index', $data);
        } else {
            // Jika peserta tidak ditemukan
            return redirect()->route('pembayaran.create')->with('error', 'Maaf, data Anda tidak ditemukan di database kami.');
        }
    }
    public function create()
    {
        if ($_SESSION["admin"] == null){
            return redirect('admin/login');
        }
        return view('pembayaran.create');
    }
    // Tambahkan metode lain sesuai kebutuhan
    public function laporan()
    {
        return view('pembayaran.laporan');
    }
}
