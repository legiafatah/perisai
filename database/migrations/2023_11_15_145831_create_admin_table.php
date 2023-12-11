<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
// Contoh migrasi untuk tabel admins
public function up()
{
    Schema::create('admin', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('username')->unique();
        $table->string('password');
        $table->timestamps();
        $table->string('role')->default('admin');
    });
    // Tambahkan ini pada fungsi up()

}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
