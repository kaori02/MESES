<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriSoal extends Model
{
    protected $table = 'kategori_soal';
    public $primaryKey = 'id_kategori';

    public function soal(){
        return $this->hasMany('App\Soal');
    }
}
