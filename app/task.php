<?php

namespace qaddition;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
  protected $fillable = [];
  //
  public function quest()
  {
      return $this->belongsTo('qaddition\quest');
  }
  public function questTakers()
  {
      return $this->belongsToMany('qaddition\User');
  }
    //
}
