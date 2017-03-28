<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{

  protected $table = 'eventos';
  protected $fillable = ['fechaIni','fechaFin','todoeldia','lugar','color','titulo'];
  protected $hidden = ['id','user_id'];
}
