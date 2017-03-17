<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Produtos;
use Auth;

class ProdutosController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth', ['except' => ['index','show']]);
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $produtos = Produtos :: all();
         return view ('produtos.index',['produtos' => $produtos]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
          if(Auth::user()->type == 2){
            return view ('produtos.create');
          }else{
            return view ('denied');
          }
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
           'preco' => 'required',
           'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if($request->hasFile('imagem')) {
           $file = Input::file('imagem');

           $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

           $nome = $timestamp. '-' .$file->getClientOriginalName();

           $imagem = new \stdClass();//instanciando
           $imagem->filePath = $nome;

           $file->move(public_path().'/images/', $nome);

           $produtos = new Produtos;
           $produtos->nome = $request->nome;
           $produtos->preco = $request->preco;
           $produtos->imagem = $nome;
           $produtos->save();
       }

         return $this->create()->with('success', 'Produto cadastrado com sucesso!');
      }
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $produto = Produtos::find($id);
         if(!$produto){
           abort(404);
         }
         return view ('produtos.show')->with('produto', $produto);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       if(Auth::user()->type == 2 || Auth::user()->type == 3){
       $produto = Produtos::find($id);
       if(!$produto){
         abort(404);
       }
       return view ('produtos.edit')->with('produto', $produto);
     }else{
       session()->flash('error','Acesso negado!');
       return redirect('/produtos');
     }
    }

    /**
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
     public function update(Request $request, $id)
     {
         $this->validate($request, [
           'preco' => 'required',
           'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if($request->hasFile('imagem')) {
           $file = Input::file('imagem');

           $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

           $nome = $timestamp. '-' .$file->getClientOriginalName();

           $imagem = new \stdClass();//instanciando
           $imagem->filePath = $nome;

           $file->move(public_path().'/images/', $nome);

           $produtos = Produtos::find($id);
           $produtos->preco = $request->preco;
           $produtos->imagem = $nome;
           $produtos->save();
       }

         return $this->create()->with('success', 'Produto cadastrado com sucesso!');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       if(Auth::user()->type == 2){
         $produtos = Produtos::find($id);
         $produtos->delete();
         return redirect('produtos')->with('message', 'Produto excluído com sucesso!');
       {
         session()->flash('error','Você não tem permissaõ para fazer isso!');
         return redirect('/users/home_admin');
       }
     }
   }
}
