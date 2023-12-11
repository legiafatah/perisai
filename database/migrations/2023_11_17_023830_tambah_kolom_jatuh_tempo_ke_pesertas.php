<?php
// database/migrations/[timestamp]_tambah_kolom_jatuh_tempo_ke_pesertas.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomJatuhTempoKePesertas extends Migration
{
    public function up()
    {
        Schema::table('pesertas', function (Blueprint $table) {
            $table->date('jatuh_tempo')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pesertas', function (Blueprint $table) {
            $table->dropColumn('jatuh_tempo');
        });
    }
}
