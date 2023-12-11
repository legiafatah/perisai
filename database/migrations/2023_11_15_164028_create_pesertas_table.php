<?php
// database/migrations/xxxx_xx_xx_create_pesertas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('alamat_desa');
            $table->string('no_hp');
            $table->string('email');
            $table->string('pekerjaan_1');
            $table->string('pekerjaan_2')->nullable();
            $table->string('paket');
            $table->string('bulan_iuran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
