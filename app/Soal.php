<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soals';
    public $primaryKey = 'id_soal';

    public function kategori()
    {
        return $this->belongsTo('App\KategoriSoal');
    }
}

