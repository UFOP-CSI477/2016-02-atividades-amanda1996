<?php

namespace App\Http\Controllers;

use App\Atletas;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Redirect;


class AtletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function home(){
      $atletas = Atletas :: all();
      return view('atletas.home', compact('atletas',$atletas));
    }

    function selecionaAtleta(Request $request){
      $atleta_id = $request->atleta_id;
      return redirect()->route('getEventosAtleta', ['id' => $atleta_id]);
    }

    public function index()
    {

        $atletas = DB::select(DB::raw("SELECT * FROM atletas ORDER BY nome ASC"));
        return view ('atletas.index', compact('atletas',$atletas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function show(Atletas $atletas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function edit(Atletas $atletas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atletas $atletas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atletas $atletas)
    {
        //
    }
}
