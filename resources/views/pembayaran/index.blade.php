<!-- resources/views/pembayaran/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Menu Pembayaran</h1>
                </div>

                <!-- Tambahkan konten menu pembayaran disini -->
                <div>
                    <!-- Ambil bulan_iuran dari formulir input atau data model Peserta -->
                    @php
                        $bulan_iuran = $bulan_iuran ? $bulan_iuran : '1';  // Angka 1 tidak akan muncul pada output
                        $harga_per_bulan = \App\Models\Peserta::getHargaPerBulan($bulan_iuran);
                    @endphp

                    <h2>Harga yang harus dibayarkan untuk {{ $bulan_iuran }} bulan: {{ $harga_per_bulan ?? 'Harga tidak tersedia' }}</h2>
                    
                    <!-- Tambahan konten pembayaran lainnya -->
                </div>
            </main>
        </div>
    </div>
@endsection
