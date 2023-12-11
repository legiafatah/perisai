<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tanggal_lahir',
        'alamat_desa',
        'no_hp',
        'email',
        'pekerjaan_1',
        'pekerjaan_2',
        'paket',
        'bulan_iuran',
        // tambahkan field lainnya sesuai kebutuhan
    ];

    // Contoh Peserta.php (model)

    // ... (kode lainnya)

    // Metode untuk mendapatkan harga berdasarkan bulan
    public static function getHargaPerBulan($bulan)
    {
        $harga_per_bulan = [
            '1' => 17000,
            '2' => 34000,
            '3' => 52000,
            '6' => 102000,
            '12'=> 202000,
            // ... dan seterusnya
        ];

        return $harga_per_bulan[$bulan] ?? null;
    }
    protected static function booted()
    {
        static::creating(function ($peserta) {
            // Pastikan NIK tidak sudah terdaftar
            $existingPeserta = static::where('nik', $peserta->nik)->first();

            if ($existingPeserta) {
                // Jika NIK sudah terdaftar, batalkan proses pembuatan peserta baru
                return false;
            }

            // Logika lain untuk mengisi jatuh_tempo, dst.
        });
    }
    // protected $dates = ['jatuh_tempo', 'bulan_iuran'];
    // protected static function booted()
    // {
        // static::creating(function ($peserta) {
        //     // Pastikan bulan_iuran tidak null
        //     if (!is_null($peserta->bulan_iuran)) {
        //         // Ambil nilai bulan_iuran dari model
        //         $bulanIuran = $peserta->bulan_iuran;

        //         // Hitung tanggal jatuh tempo dengan menambahkan bulan_iuran ke updated_at (sebagai default nilai updated_at)
        //         $jatuhTempo = now()->addMonths($bulanIuran);

        //         // Set nilai kolom jatuh_tempo
        //         $peserta->jatuh_tempo = $jatuhTempo;
        //     }
        // });
    }

