<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Cidade;
class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cidades = Cidade::all();
      return view('cidades.index')->with('cidades', $cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estados = Estado ::orderby('nome','asc')->get();
        return view('cidades.create')-> with('estados', $estados );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cidade = new Cidade();
      $cidade->nome=$request->nome;
      $cidade->estado_id=$request->estado_id;
      $cidade->save();

      return redirect('/cidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cidade = Cidade::find($id);
      return view('cidades.show')->with('cidade',$cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cidade = Cidade::find($id);
      return view('cidades.edit')->with('cidade', $cidade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cidade = Cidade::find($id);
      $cidade->nome=$request->nome;
      $cidade->estado_id=$request->estado_id;
      $cidade->save();

      return redirect('/cidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cidade = Cidade::find($id);
      $cidade->delete();
      return redirect('cidades')->with('message','Cidade excluída!');
    }
}
