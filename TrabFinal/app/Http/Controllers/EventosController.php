<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Eventos;

class EventosController extends Controller
{



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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
         {
             $data = array(); //declaramos un array principal que va contener los datos
             $id = Eventos::all()->pluck('id'); //listamos todos los id de los eventos
             $titulo = Eventos::all()->pluck('titulo'); //lo mismo para lugar y fecha
             $fechaIni = Eventos::all()->pluck('fechaIni');
             $fechaFin = Eventos::all()->pluck('fechaFin');
             $allDay = Eventos::all()->pluck('todoeldia');
             $background = Eventos::all()->pluck('color');
             $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos

             //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
             for($i=0;$i<$count;$i++){
                 $data[$i] = array(
                     "title"=>$titulo[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
                     "start"=>$fechaIni[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
                     "end"=>$fechaFin[$i],
                     "allDay"=>$allDay[$i],
                     "backgroundColor"=>$background[$i],
                     "id"=>$id[$i]
                     //"url"=>"cargaEventos".$id[$i]
                     //en el campo "url" concatenamos el el URL con el id del evento para luego
                     //en el evento onclick de JS hacer referencia a este y usar el método show
                     //para mostrar los datos completos de un evento
                 );
             }

             json_encode($data); //convertimos el array principal $data a un objeto Json
            return $data; //para luego retornarlo y estar listo para consumirlo
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(){
         //Valores recebidos via ajax
         $title = $_POST['title'];
         $start = $_POST['start'];
         $back = $_POST['background'];
         $id = $_POST['id'];

         $evento = new Eventos;
         $evento->fechaIni=$start;
         //$evento->fechaFin=$end;
         $evento->todoeldia=true;
         $evento->color=$back;
         $evento->titulo=$title;
         $evento->user_id = $id;
         $evento->save();
    }


    public function salvaEvento($Evento){
      $id = Auth::user()->id;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(){

       $id = $_POST['id'];
       $title = $_POST['title'];
       $start = $_POST['start'];
       $end = $_POST['end'];
       $allDay = $_POST['allday'];
       $back = $_POST['background'];
       $evento=Eventos::find($id);
       if($end=='NULL'){
           $evento->fechaFin=NULL;
       }else{
           $evento->fechaFin=$end;
       }
       $evento->fechaIni=$start;
       $evento->todoeldia=$allDay;
       $evento->color=$back;
       $evento->titulo=$title;
       $evento->save();
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
      $id = $_POST['id'];

      Eventos::destroy($id);
    }
}
