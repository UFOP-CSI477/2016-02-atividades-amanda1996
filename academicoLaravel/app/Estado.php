<?php
namespace App;
//<!-- php artisan make:model Aluno para acessar aqui app/aluno-->

use Illuminate\Database\Eloquent\Model;
use App\Eloquent;
use App\Cidade;
  class Estado extends Model
  {
    protected $fillable = ['nome', 'sigla'];

    public function cidade()
    {
      return $this->hasMany('App\Cidade');
    }
  }
