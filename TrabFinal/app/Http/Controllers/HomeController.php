<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Eventos;
use DB;
use DateTime;

class HomeController extends Controller
{

  public function bebes(){
    return $this->hasOne('App\Bebes');
  }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $evs = array();
      $id = Auth::user()->id;
      $eventos = DB::select(DB::raw("SELECT * FROM eventos WHERE user_id = '$id'"));
      $hoje = new DateTime();
      foreach ($eventos as $e) {
        $qtdDias = $this->calculaDias($e->fechaIni);
        if ($qtdDias >= 0 && $qtdDias <= 7) {
          array_push($evs,$e->id);
        }
      }
      $eventosProximos = Eventos::find($evs);
      return view('home', compact('eventos',$eventosProximos));
    }

    function calculaDias($DataEvento){
        $hoje = new DateTime();
        $diferenca = $hoje->diff(new DateTime($DataEvento));
        return $diferenca->d;
    }
}
