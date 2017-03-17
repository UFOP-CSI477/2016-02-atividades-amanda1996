<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Registros;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class RegistrosController extends Controller
{

  public function index2(){
    $eventos = DB::select(DB::raw("SELECT e.nome,
                    count(r.evento_id) AS qtd, count(r.evento_id) * e.preco AS total
                    FROM eventos e INNER JOIN registros r ON e.id = r.evento_id
                    GROUP BY e.nome ORDER BY e.nome ASC"));

    $atletas = DB::select(DB::raw("SELECT a.nome,
                    count(r.atleta_id) AS qtd, count(r.atleta_id) * e.preco AS total
                    FROM eventos e INNER JOIN registros r ON e.id = r.evento_id
                    INNER JOIN atletas a ON a.id = r.atleta_id
                    GROUP BY a.nome ORDER BY e.nome ASC"));

    return view('registros/index2', compact('eventos', 'atletas'));
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = DB::select(DB::raw("SELECT e.nome as nomeEvento, a.nome as nomeAtleta, r.data
                        FROM eventos e INNER JOIN registros r ON e.id = r.evento_id
                        INNER JOIN atletas a ON a.id = r.atleta_id
                        GROUP BY e.id ORDER BY r.data DESC"));

        return view('registros.index', compact('registros', $registros));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        $eventos = Eventos :: all();
        return view ('registros.create', compact('eventos'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $this->validate($request, [
           'atleta_id' => 'required',
           'evento_id' =>'required',
           'data' => 'required',
           'pago' => 'required',
         ]);

         $registros = new Registros;
         $registros->atleta_id = $request->atleta_id;
         $registros->evento_id = $request->evento_id;
         $registros->data = $request->data;
         $registros->pago = $request->pago;
         $registros->save();

         return $this->create()->with('success', 'Inscrição realizada com sucesso!');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(Registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit(Registros $registros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registros $registros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registros $registros)
    {
        //
    }
}
