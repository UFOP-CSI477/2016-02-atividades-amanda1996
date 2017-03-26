<?php
namespace App;
//<!-- php artisan make:model Aluno para acessar aqui app/aluno-->

use Illuminate\Database\Eloquent\Model;
use App\Eloquent;
use App\Estado;
class Cidade extends Model
  {
    protected $fillable = ['nome', 'estado_id'];

    public function estado()
    {
      return $this->belongsTo('App\Estado');
    }
  }
