<?php

namespace qaddition;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function createdQuest()
   {
       return $this->hasMany('qaddition\quest');
   }
    public function takenQuest()
   {
       return $this->belongsToMany('qaddition\task');
   }

}
