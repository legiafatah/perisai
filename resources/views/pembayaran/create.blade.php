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
                <li class="nav-item active">
                    <a href="{{ route('pembayaran.create') }}" class="collapsed">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item">
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
                <h4 class="page-title">Pembayaran</h4>
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
                        <a href="{{ route('pembayaran.create') }}">Pembayaran</a>
                    </li>
                </ul>
            </div>

            <form action="{{ route('pembayaran.process') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="bulan_iuran" class="form-label">Bulan Iuran</label>
                    <select class="form-select" id="bulan_iuran" name="bulan_iuran" required>
                        <!-- Tambahkan pilihan bulan iuran sesuai kebutuhan -->   
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="6">6</option>
                    <option value="12">122</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Proses Pembayaran</button>
            </form>
            
        </div>

       
    </div>
</div>
@endsection
