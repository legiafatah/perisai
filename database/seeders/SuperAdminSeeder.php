<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        // Buat admin baru
        DB::table('superadmins')->insert([
            'username' => 'Sadmin',
            'password' => Hash::make('admin'),
            // ...
        ]);
    }
}
