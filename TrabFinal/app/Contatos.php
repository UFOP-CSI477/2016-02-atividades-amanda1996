<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
  public function user(){
    return $this->belongsTo('App\User');
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nome','celular','email',
  ];
}
