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
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_periode');
            $table->char('id_no', 4);
            $table->string('nama_lengkap'); 
            $table->string('tempat_lahir', 50); 
            $table->date('tanggal_lahir'); 
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->tinyInteger('id_agama'); 
            $table->tinyInteger('id_kelas'); 
            $table->tinyInteger('id_walas'); 
            $table->tinyInteger('id_divisi'); 
            $table->text('alasan'); 
            $table->tinyInteger('id_izin_ortu'); 
            $table->char('hp_siswa'); 
            $table->char('hp_ortu'); 
            $table->string('akun_ig', 50); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
