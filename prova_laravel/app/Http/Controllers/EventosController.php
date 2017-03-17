<?php

namespace App\Http\Controllers;

use App\Eventos;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class EventosController extends Controller
{

    public function indexA($id){

      $eventos = DB::select(DB::raw("SELECT e.nome, r.data, r.pago,
                      count(r.atleta_id) AS qtd, count(r.atleta_id) * e.preco AS total
                      FROM eventos e INNER JOIN registros r ON e.id = r.evento_id WHERE r.atleta_id = '$id'
                      GROUP BY e.id ORDER BY e.nome ASC"));

      return view('eventos.indexA',compact('eventos',$eventos));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $eventos = Eventos :: all();
      return view ('eventos.index',['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {

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
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventos $eventos)
    {
        //
    }
}
