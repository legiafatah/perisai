<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class AdminAuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('admin.login'); // Sesuaikan dengan nama file view Anda
    }

    public function login(Request $request)
    {
        // dd("asd");
        $credentials = $request->only('username', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
            session_start();
            $_SESSION["admin"] = 'admin';
            // Jika autentikasi berhasil, redirect ke halaman admin
            return redirect()->intended('/admin/dashboard');
        }
    
        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        Session()->flash('error', 'Username atau password salah');
        return redirect()->route('admin.login');
    }

    // Metode login lainnya tetap ada...
    public function profil()
    {
        return view('admin.profil');
    }

    // public function changePassword(Request $request)
    // {
    //     $user = Auth::guard('admin')->user();
    //     // Memeriksa apakah password lama yang dimasukkan cocok dengan password yang disimpan di database
    //     if (!Hash::check($request->current_password, $user->password)) {
    //                 return redirect()->route('admin.profile')->with('error', 'Password lama tidak cocok.');}
    //     // menyimpan sandi baru
    //     $user = Auth::guard('admin')->user();
    //     $user->password = bcrypt($request->password);
    //     $user->save();
    
    //     return redirect()->route('admin.profile')->with('success', 'Password berhasil diubah!');
    // }
    

    public function logout(Request $request)
{
    session_start();
    $_SESSION["admin"] = null;
 
    return redirect('/admin/login');
}
    // AdminController.php

public function authenticate(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'superadmin') {
            return redirect()->route('superadmin.dashboard');
        }
    }

    return redirect()->route('login')->with('error', 'Login failed, please check your credentials.');
}
public function registration()
{
    $data['title'] = 'Register';
    return view('admin/akun', $data);
}

public function register_action(Request $request)
{
    $request->validate([
        'name' => 'required',
        'username' => 'required|unique:admin',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
    ]);

    $admin = new admin([
        'name' => $request->name,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);
    $admin->save();

    return redirect()->route('admin.akun')->with('Daftar Akun Berhasil');
}


}
