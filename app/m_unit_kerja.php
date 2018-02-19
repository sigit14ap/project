<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_unit_kerja extends Model
{
    public $table = "m_unit_kerja";

    protected $fillable = [
        'nama_unit_kerja', 'nama_pimpinan', 'nip_pimpinan',
    ];
}
