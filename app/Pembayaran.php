<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    public $primaryKey = 'id';

    public function userss()
    {
        return $this->belongsTo('App\User');
    }
}
