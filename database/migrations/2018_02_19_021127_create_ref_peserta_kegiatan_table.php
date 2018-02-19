<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefPesertaKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_peserta_kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('laporan_kegiatan_id');
            $table->string('nip');
            $table->string('nama_peserta');
            $table->string('instansi_terkait');
            $table->string('undangan_path');
            $table->string('biodata_path');
            $table->string('materi_path');
            $table->string('daftar_hadir_path');
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
        Schema::dropIfExists('ref_peserta_kegiatan');
    }
}
