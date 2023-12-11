<!-- resources/views/layouts/superadmin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tambahkan tag head sesuai kebutuhan -->
</head>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Super Admin Dashboard</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('superadmin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('superadmin.registration') }}">
                                Pendaftaran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('superadmin.payment') }}">
                                Pembayaran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('superadmin.report') }}">
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('superadmin.accountList') }}">
                                Daftar Akun Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Tambahkan konten halaman di sini -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Tambahkan skrip-skrip JS atau tag script lainnya sesuai kebutuhan -->

</body>
</html>
