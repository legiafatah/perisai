<!-- resources/views/profile.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Profil Admin</h1>
                </div>

                <div>
                    {{-- <p>Nama Admin: {{ auth()->user()->username }}</p> --}}

                    <!-- Form untuk perubahan kata sandi -->
                    <form action="{{ route('admin.change-password') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="current_password">Password Lama:</label>
                            <input type="password" name="current_password" id="current_password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">Password Baru         :</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation">Konfirmasi Password Baru:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>

                        <button type="submit">Simpan</button>
                    </form>
                    <form action="{{ route('logout') }}" method="post">
                    <!-- Tombol Logout -->
                    <a href="{{ route('logout') }}">Logout</a></form>
                </div>
            </main>
        </div>
    </div>
@endsection
