<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_peserta_kegiatan extends Model
{
    public $table = "ref_peserta_kegiatan";

    protected $fillable = [
        'laporan_kegiatan_id', 'nip', 'nama_peserta', 'instansi_terkait', 'undangan_path', 'biodata_path', 'materi_path', 'daftar_hadir_path',
    ];
}
