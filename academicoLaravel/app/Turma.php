<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Eloquent;
use App\Disciplina;
class Turma extends Model
{
  protected $fillable = ['nome', 'disciplina_id'];

  public function disciplina()
  {
    return $this->belongsTo('App\Disciplina');
  }
}
