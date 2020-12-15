<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    public $primaryKey = 'id_forum';

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
