@extends('layouts.admin')

@section('content')
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-success">
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
         
            <li class="nav-item">
                <a href="{{ route('peserta.create') }}" class="collapsed">
                    <i class="fas fa-clipboard-list"></i>
                    <p>Pendaftaran</p>
                </a>
            </li>
                <li class="nav-item">
                    <a href="{{ route('pembayaran.create') }}" class="collapsed">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('laporan.index') }}" class="collapsed">
                        <i class="fas fa-file-alt"></i>
                        <p>Laporan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Laporan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('laporan.index') }}">Laporan</a>
                    </li>
                </ul>
            </div>

          <!-- Form Pencarian -->
          <form action="{{ route('laporan.cari') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="desa" class="form-label">Cari Berdasarkan Desa</label>
                <input type="text" class="form-control" id="desa" name="desa" required>
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <!-- Tabel Hasil Pencarian -->
        @if(isset($dataPeserta))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Tenaga Kerja</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Bulan Iuran</th>
                        <th scope="col">Terhitung Sejak</th>
                        <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPeserta as $peserta)
                        <tr>
                            <td>{{ $peserta->nik }}</td>
                            <td>{{ $peserta->nama_lengkap }}</td>
                            <td>{{ $peserta->alamat_desa }}</td>
                            <td>{{ $peserta->bulan_iuran }}</td>
                            <td>{{ $peserta->updated_at }}</td>


                            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
            
        </div>

       
    </div>
</div>
@endsection
