<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    public $primaryKey = 'id_video';

    public function link()
    {
        return $this->link;
    }
}
