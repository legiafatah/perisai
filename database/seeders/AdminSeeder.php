<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    public function run()
    {
        // Buat admin baru
        DB::table('admin')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            // ...
        ]);
    }
}
