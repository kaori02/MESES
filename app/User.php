<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'issubscriber'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isKamiSama()
    {
        return ($this->role == 'admin' || $this->role == 'tutor');
    }

    public function isSubbed()
    {
        return ($this->issubscriber == 'true');
    }

    public function isSubber(){
        return $this->hasMany('App\Pembayaran');
    }

    public function isSubbewr(){
        return $this->hasMany('App\Subscription');
    }
}
