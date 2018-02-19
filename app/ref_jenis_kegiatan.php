<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_jenis_kegiatan extends Model
{
    public $table = "ref_jenis_kegiatan";

    protected $fillable = [
        'nama_jenis_kegiatan', 'keterangan',
    ];
}
