<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_kabupaten extends Model
{
    public $table = "m_kabupaten";

    protected $fillable = [
        'nama_kabupaten', 'provinsi_id',
    ];
}
