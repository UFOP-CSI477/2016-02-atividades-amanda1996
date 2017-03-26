<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Aluno;
use App\Cidade;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $alunos = Aluno::all();
      return view('alunos.index')->with('alunos', $alunos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cidades = Cidade::all();
      return view('alunos.create')->with('cidades', $cidades);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Aluno::create($request->all());
      session()->flash('message', 'Novo aluno adicionado!');
      return redirect('/alunos');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $aluno = Aluno::find($id);
        return view('alunos.show')->with('aluno',$aluno);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $aluno = Aluno::find($id);
      return view('alunos.edit')->with('aluno', $aluno);
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
      $aluno = Aluno::find($id);
      $aluno->nome=$request->nome;
      $aluno->rua=$request->rua;
      $aluno->numero=$request->numero;
      $aluno->cep=$request->cep;
      $aluno->mail=$request->mail;
      $aluno->cidade_id=$request->cidade;

      $aluno->save();

      return redirect('/alunos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $aluno = Aluno::find($id);
      $aluno->delete();
      session()->flash('message','Aluno exluído com sucesso!');
      return redirect('/alunos');
    }
}
