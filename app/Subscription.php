<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    public $primaryKey = 'id';

    public function userss2()
    {
        return $this->belongsTo('App\User');
    }
}
