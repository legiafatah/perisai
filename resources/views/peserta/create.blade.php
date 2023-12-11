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
         
            <li class="nav-item active">
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
                <h4 class="page-title">Pendaftaran</h4>
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
                        <a href="{{ route('peserta.create') }}">Pendaftaran</a>
                    </li>
                </ul>
            </div>

            <form action="{{ route('peserta.store') }}" method="post">
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
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
    
                <div class="mb-3">
                    <label for="alamat_desa" class="form-label">Alamat Desa</label>
                    <input type="text" class="form-control" id="alamat_desa" name="alamat_desa" required>
                </div>
    
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
    
    
                <div class="mb-3">
                    <label for="pekerjaan_1">Pekerjaan 1</label>
                    <select class="form-control" id="pekerjaan_1" required name="pekerjaan_1">
                        <option value="P083">ADMINISTRASI</option>
                        <option value="P116">AGEN BJB LAKU PANDAI</option>
                        <option value="P096">AGEN BRILINK</option>
                        <option value="P096">AGEN POS</option>
                        <option value="P092">AGEN46</option>
                        <option value="P073">AHLI GIZI</option>
                        <option value="P042">APOTEKER</option>
                        <option value="P038">ARSITEK</option>
                        <option value="P061">ARTIS</option>
                        <option value="P060">ATLET</option>
                        <option value="P051">BIARAWATI</option>
                        <option value="P041">BIDAN</option>
                        <option value="P066">BURUH BONGKAR MUAT/BAGASI</option>
                        <option value="P007">BURUH NELAYAN/PERIKANAN</option>
                        <option value="P008">BURUH PETERNAKAN</option>
                        <option value="P006">BURUH TANI/PERKEBUNAN</option>
                        <option value="P108">DAILY WORKER HOTEL</option>
                        <option value="P040">DOKTER</option>
                        <option value="P074">DOKTER GIGI</option>
                        <option value="P034">DOSEN</option>
                        <option value="P075">FISIKAWAN MEDIK</option>
                        <option value="P035">GURU</option>
                        <option value="P027">IMAM MESJID</option>
                        <option value="P032">JURU MASAK</option>
                        <option value="P062">JURU PARKIR</option>
                        <option value="P039">KONSULTAN</option>
                        <option value="P114">KURIR</option>
                        <option value="P085">LOGISTIK</option>
                        <option value="P098">MANDIRI AGEN</option>
                        <option value="P070">MARBOT MESJID</option>
                        <option value="P021">MEKANIK</option>
                        <option value="P053">MITRA GOJEK</option>
                        <option value="P071">MITRA GOJEK-GO LIFE</option>
                        <option value="P054">MITRA GRAB</option>
                        <option value="P113">MITRA INDRIVER</option>
                        <option value="P095">MITRA LALAMOVE</option>
                        <option value="P093">MITRA SOHPEE</option>
                        <option value="P055">MITRA UBER</option>
                        <option value="P003">NELAYAN/PERIKANAN</option>
                        <option value="P037">NOTARIS</option>
                        <option value="P117">0-RANGER POS INDONESIA</option>
                        <option value="P111">OJEK PANGKALAN</option>
                        <option value="P104">PANDAI BESI</option>
                        <option value="P105">PANDITA/PEMANGKU</option>
                        <option value="P105">PARAJI</option>
                        <option value="P105">PARANORMAL</option>
                        <option value="P105">PASTOR</option>
                        <option value="P105">PEKERJA DIGITAL</option>
                        <option value="P105">PEKERJA MANDIRI PNM</option>
                        <option value="P105">PEKERJA RUMAH TANGGA</option>
                        <option value="P105">PELAUT</option>
                        <option value="P105">PELAYAN GEREJA</option>
                        <option value="P105">PEMANDU LAGU</option>
                        <option value="P105">PEMANDU WISATA</option>
                        <option value="P105">PEMASAR</option>
                        <option value="P105">PEMASAR IKAN</option>
                        <option value="P105">PEMASAR PELABUHAN</option>
                        <option value="P105">PEMBUDIDAYA IKAN</option>
                        <option value="P105">PEMILIK USAHA</option>
                        <option value="P105">PEMULUNG</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pekerjaan_1">Pekerjaan 2</label>
                    <select class="form-control" id="pekerjaan_2" required name="pekerjaan_2">
                        <option value="P083">ADMINISTRASI</option>
                        <option value="P116">AGEN BJB LAKU PANDAI</option>
                        <option value="P096">AGEN BRILINK</option>
                        <option value="P096">AGEN POS</option>
                        <option value="P092">AGEN46</option>
                        <option value="P073">AHLI GIZI</option>
                        <option value="P042">APOTEKER</option>
                        <option value="P038">ARSITEK</option>
                        <option value="P061">ARTIS</option>
                        <option value="P060">ATLET</option>
                        <option value="P051">BIARAWATI</option>
                        <option value="P041">BIDAN</option>
                        <option value="P066">BURUH BONGKAR MUAT/BAGASI</option>
                        <option value="P007">BURUH NELAYAN/PERIKANAN</option>
                        <option value="P008">BURUH PETERNAKAN</option>
                        <option value="P006">BURUH TANI/PERKEBUNAN</option>
                        <option value="P108">DAILY WORKER HOTEL</option>
                        <option value="P040">DOKTER</option>
                        <option value="P074">DOKTER GIGI</option>
                        <option value="P034">DOSEN</option>
                        <option value="P075">FISIKAWAN MEDIK</option>
                        <option value="P035">GURU</option>
                        <option value="P027">IMAM MESJID</option>
                        <option value="P032">JURU MASAK</option>
                        <option value="P062">JURU PARKIR</option>
                        <option value="P039">KONSULTAN</option>
                        <option value="P114">KURIR</option>
                        <option value="P085">LOGISTIK</option>
                        <option value="P098">MANDIRI AGEN</option>
                        <option value="P070">MARBOT MESJID</option>
                        <option value="P021">MEKANIK</option>
                        <option value="P053">MITRA GOJEK</option>
                        <option value="P071">MITRA GOJEK-GO LIFE</option>
                        <option value="P054">MITRA GRAB</option>
                        <option value="P113">MITRA INDRIVER</option>
                        <option value="P095">MITRA LALAMOVE</option>
                        <option value="P093">MITRA SOHPEE</option>
                        <option value="P055">MITRA UBER</option>
                        <option value="P003">NELAYAN/PERIKANAN</option>
                        <option value="P037">NOTARIS</option>
                        <option value="P117">0-RANGER POS INDONESIA</option>
                        <option value="P111">OJEK PANGKALAN</option>
                        <option value="P104">PANDAI BESI</option>
                        <option value="P105">PANDITA/PEMANGKU</option>
                        <option value="P105">PARAJI</option>
                        <option value="P105">PARANORMAL</option>
                        <option value="P105">PASTOR</option>
                        <option value="P105">PEKERJA DIGITAL</option>
                        <option value="P105">PEKERJA MANDIRI PNM</option>
                        <option value="P105">PEKERJA RUMAH TANGGA</option>
                        <option value="P105">PELAUT</option>
                        <option value="P105">PELAYAN GEREJA</option>
                        <option value="P105">PEMANDU LAGU</option>
                        <option value="P105">PEMANDU WISATA</option>
                        <option value="P105">PEMASAR</option>
                        <option value="P105">PEMASAR IKAN</option>
                        <option value="P105">PEMASAR PELABUHAN</option>
                        <option value="P105">PEMBUDIDAYA IKAN</option>
                        <option value="P105">PEMILIK USAHA</option>
                        <option value="P105">PEMULUNG</option>
                    </select>
                </div>

                
    
                <div class="mb-3">
                    <label for="paket" class="form-label">Pilih Paket</label>
                    <select class="form-control" id="paket" name="paket" required>
                        <option value="T">(JKK,JKM)</option>
                        <option value="F">(JKK,JKM,JHT)</option>
                    </select>
                </div>
    
                <div class="mb-3">
                    <label for="bulan_iuran" class="form-label">Masukkan Bulan Iuran</label>
                    <select class="form-control" id="bulan_iuran" name="bulan_iuran" required>
                        <option value="1">(1)</option>
                        <option value="2">(2)</option>
                        <option value="3">(3)</option>
                        <option value="6">(6)</option>
                        <option value="12">(12)</option>
                    </select>
                </div>
    
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>

        
    </div>
</div>
@endsection
