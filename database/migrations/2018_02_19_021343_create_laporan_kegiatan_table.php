<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->integer('pagu_anggaran');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->integer('kabupaten_id');
            $table->integer('provinsi_id');
            $table->integer('unit_kerja_id');
            $table->integer('jenis_kegiatan_id');
            $table->string('laporan_narasi');
            $table->string('tor');
            $table->decimal('rab');
            $table->string('rab_path');
            $table->string('sk_panitia');
            $table->string('sk_moderator');
            $table->string('sk_peserta');
            $table->string('sk_narsum');
            $table->string('jadwal_kegiatan');
            $table->string('laporan_ketua_pembukaan');
            $table->string('arahan_pembukaan');
            $table->string('laporan_ketua_penutupan');
            $table->string('arahan_penutupan');
            $table->string('undangan_peserta');
            $table->string('notulasi_kegiatan');
            $table->string('materi_kegiatan');
            $table->string('daftar_hadir_panitia');
            $table->string('daftar_hadir_moderator');
            $table->string('daftar_hadir_peserta');
            $table->string('bukti_penerimaan_seminarkit');
            $table->string('bukti_pengeluaran');
            $table->string('bukti_pengembalian');
            $table->string('bukti_pengembalian_path');
            $table->string('foto_kegiatan_path');
            $table->string('sppd_path');
            $table->string('spm_path');
            $table->string('sptjb_path');
            $table->string('kwitansi_honor_path');
            $table->string('bukti_penerimaan_honor_path');
            $table->string('bukti_transportasi_path');
            $table->string('kwitansi_atk_path');
            $table->string('ssp_honor_path');
            $table->string('nama_pejabat_pengadaan');
            $table->string('sk_pejabat_pengadaan_path');
            $table->string('sk_ppk_path');
            $table->string('bukti_pembelian_path');
            $table->string('bukti_setor_pajak_path');
            $table->string('rks_path');
            $table->string('hps_path');
            $table->string('tahapan_jadwal_pengadaan');
            $table->string('sbd_path');
            $table->integer('createdby');
            $table->integer('updatedby');
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
        Schema::dropIfExists('laporan_kegiatan');
    }
}
