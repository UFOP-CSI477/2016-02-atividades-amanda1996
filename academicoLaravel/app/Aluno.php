<?php
namespace App;
//<!-- php artisan make:model Aluno para acessar aqui app/aluno-->

use Illuminate\Database\Eloquent\Model;
use App\Eloquent;
use App\Cidade;
class Aluno extends Model
{
    protected $fillable = ['nome', 'rua', 'numero', 'bairro','cidade_id', 'cep', 'mail'];

    //Podemos definir quais campos podem ser definidos
    //testar usando o tinker
    //>>> $aluno = DB::table('alunos')->get();
    //protected $table = 'cidades';
    public function isMatriculado(){
      return true;
    }

    public function cidade()
    {
    return $this->belongsTo('App\Cidade');
    }
}
