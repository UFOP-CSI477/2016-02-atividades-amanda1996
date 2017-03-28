<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contatos;
use Auth;
use DB;

class ContatosController extends Controller
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
      $id = Auth::user()->id;
      $contatos = DB::select(DB::raw("SELECT * FROM contatos WHERE user_id = '$id' AND tipo = 1"));

      if($contatos != null){
        return view ('contatos.index',compact('contatos',$contatos));
      }else{
        session()->flash('message','Você não possui nenhum contato cadastrado!');
        return redirect('contatos/create');
      }
    }

    public function indexT()
    {
      $id = Auth::user()->id;
      $contatos = DB::select(DB::raw("SELECT * FROM contatos WHERE user_id = '$id' AND tipo = 2"));
      if($contatos != null){
        return view ('contatos.indexT',compact('contatos',$contatos));
      }else{
        session()->flash('message','Você não possui nenhum telefone útil cadastrado!');
        return redirect('contatos/create');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contatos.create');
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
        'nome' => 'required',
        'tipo' => 'required',
        'celular' => 'required',
        'email' => 'required',
      ]);

      $id = Auth::user()->id;

      $contato = new Contatos;
      $contato->nome = $request->nome;
      $contato->tipo = $request->tipo;
      $contato->celular = $request->celular;
      $contato->email = $request->email;
      $contato->user_id = $id;
      $contato->save();

      session()->flash('message','Contato cadastrado com sucesso!');
      return redirect('contatos');
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
      $contato = Contatos::find($id);
      return view('contatos.edit')->with('contato', $contato);
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
      $this->validate($request, [
          'nome' => 'required',
          'email' => 'required',
      ]);

      $contato = Contatos::find($id);
      $contato->nome = $request->nome;
      $contato->email = $request->email;
      $contato->celular = $request->celular;
      $contato->save();

      session()->flash('message','Informações do contato foram modificadas!');
      return redirect('contatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $contato = Contatos::find($id);
      $contato->delete();
      return redirect('contatos')->with('error', 'Contato excluído com sucesso!');
    }
}
