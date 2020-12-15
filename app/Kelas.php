<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    public $primaryKey = 'id_kelas';

    public function forum()
    {
        return $this->hasMany('App\Forum');
    }
}
