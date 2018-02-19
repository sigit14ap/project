<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_provinsi extends Model
{
    public $table = "m_provinsi";

    protected $fillable = [
        'nama_provinsi',
    ];
}
