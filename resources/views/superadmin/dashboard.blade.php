@extends('layouts.admin')

@section('content')
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-success">
                <li class="nav-item active">
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
                <li class="nav-item">
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
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ url('superadmin/dashboard') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('superadmin/dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <br>
                <br>
                
                <p class="d-inline p-3 bg-primary text-white">Admin 1</p>
                <p class="d-inline p-3 bg-primary text-white">Admin 2</p>
                <p class="d-inline p-3 bg-primary text-white">Admin 3</p>
                <p class="d-inline p-3 bg-primary text-white">Admin 4</p>
            </div>
            
        </div>

       
    </div>
</div>
@endsection
