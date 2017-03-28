<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Bebes;
use App\User;

class BebesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bebes.create');
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
        'idade' => 'required',
        'sexo' => 'required',
      ]);

      $id = Auth::user()->id;

      $bebe = new Bebes;
      $bebe->nome = $request->nome;
      $bebe->idade = $request->idade;
      $bebe->sexo = $request->sexo;
      $bebe->user_id = $id;
      $bebe->save();

      return view ('bebes.show')->with('bebe',$bebe);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bebe = User::find($id)->bebes;
        if($bebe != null){
          return view('bebes.show',compact('bebe', $bebe));
        }else{
          session()->flash('message','Você precisa cadastrar informações do bebê antes de fazer isso!');
          return redirect('/bebes/create');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $bebe = User::find($id)->bebes;
      if($bebe != null){
        return view('bebes.edit')->with('bebe', $bebe);
      }else{
        session()->flash('message','Você precisa cadastrar informações do bebê antes de fazer isso!');
        return redirect('/bebes/create');
      }
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
          'sexo' => 'required',
          'idade' => 'required',
      ]);

      $bebe = Bebes::find($id);
      $bebe->nome = $request->nome;
      $bebe->sexo = $request->sexo;
      $bebe->idade = $request->idade;
      $bebe->save();

      return view ('bebes.show')->with('bebe',$bebe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
