<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan_kegiatan extends Model
{
    public $table = "laporan_kegiatan";

    protected $fillable = [
        'nama_kegiatan', ' pagu_anggaran', 'tanggal', 'lokasi', 'kabupaten_id', 'provinsi_id', 'unit_kerja_id', 'jenis_kegiatan_id', 'laporan_narasi', 'tor', 'rab', 'rab_path', 'sk_panitia', 'sk_moderator', 'sk_peserta', 'sk_narsum', 'jadwal_kegiatan', 'laporan_ketua_pembukaan', 'arahan_pembukaan', 'laporan_ketua_penutupan', 'arahan_penutupan', 'undangan_peserta', 'notulasi_kegiatan', 'materi_kegiatan', 'daftar_hadir_panitia', 'daftar_hadir_moderator', 'daftar_hadir_peserta', 'bukti_penerimaan_seminarkit', 'bukti_pengeluaran', 'bukti_pengembalian', 'bukti_pengembalian_path', 'foto_kegiatan_path', 'sppd_path', 'spm_path', 'sptjb_path', 'kwitansi_honor_path', 'bukti_penerimaan_honor_path', 'bukti_transportasi_path', 'kwitansi_atk_path', 'ssp_honor_path', 'nama_pejabat_pengadaan', 'sk_pejabat_pengadaan_path', 'sk_ppk_path', 'bukti_pembelian_path', 'bukti_setor_pajak_path', 'rks_path', 'hps_path', 'tahapan_jadwal_pengadaan', 'sbd_path', 'createdby', 'updatedby',
    ];
}
