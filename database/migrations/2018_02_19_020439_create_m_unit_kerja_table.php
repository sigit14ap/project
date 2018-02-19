<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUnitKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_unit_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_unit_kerja');
            $table->string('nama_pimpinan');
            $table->string('nip_pimpinan');
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
        Schema::dropIfExists('m_unit_kerja');
    }
}
