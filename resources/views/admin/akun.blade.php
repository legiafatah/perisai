@extends('layouts.admin')

@section('content')
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-success">
                <li class="nav-item">
                    <a href="{{ url('superadmin/dashboard') }}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
         
            <li class="nav-item">
                <a href="{{ route('peserta.laporan') }}" class="collapsed">
                    <i class="fas fa-clipboard-list"></i>
                    <p>Pendaftaran</p>
                </a>
            </li>
                <li class="nav-item">
                    <a href="{{ route('pembayaran.laporan') }}" class="collapsed">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('admin.akun') }}" class="collapsed">
                        <i class="fas fa-user-plus"></i>
                        <p>Daftar Akun</p>
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
                <h4 class="page-title">Pendaftaran Admin</h4>
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
                        <a href="{{ route('peserta.create') }}">Pendaftaran Admin</a>
                    </li>
                </ul>
            </div>

            <form action="{{ route('register.action') }}" method="post">

                            @csrf
                            <div class="mb-3">
                                <label>Nama <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <div class="mb-3">
                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirm" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
               
    </div>
</div>
@endsection
