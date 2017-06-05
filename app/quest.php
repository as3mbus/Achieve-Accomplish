<?php

namespace qaddition;

use Illuminate\Database\Eloquent\Model;

class quest extends Model
{
    protected $fillable = [];
    //
    public function tasks()
    {
        return $this->hasMany('qaddition\task');
    }
    public function author()
    {
        return $this->belongsTo('qaddition\User');
    }
}
