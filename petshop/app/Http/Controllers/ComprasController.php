<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;
use App\Produtos;
use DB;
use App\Quotation;
use Auth;

class ComprasController extends Controller
{



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
        $compras = DB::select(DB::raw("SELECT p.nome, p.preco, c.quantidade, c.id FROM compras  c
                  INNER JOIN produtos p ON p.id =  c.produto_id WHERE c.user_id = '$id' GROUP BY p.id"));
        return view ('compras.index',['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $user_id = Auth::user()->id;
      $ids = session()->get('carrinho');

      foreach ($ids as $i) {
        $compras = new Compras;
        $compras->produto_id = $i[0];
        $compras->user_id = $user_id;
        $compras->quantidade = $i[1];
        $compras->save();
      }
      session()->flash('message','Compra realizada com sucesso!');
      return redirect('/carrinho');
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
    public function update(Request $request, $id)
    {
        //
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

    public function addCarrinho($produto_id, Request $request){
      $this->validate($request,[
        'quantidade' => 'required',
      ]);
      $qtd = $request->quantidade;
      session()->push('carrinho',[$produto_id,$qtd]);
      session()->flash('message','Produto adicionado ao carrinho!');
      return redirect('/produtos')->with($produto_id);
    }

    public function removeCarrinho($produto_id){
      $ids = session()->get('carrinho');
      $indice = 0;
      foreach ($ids as $i) {
        if($i[0] == $produto_id){
          $indice = $i;
        }
      }
      session()->forget('carrinho', $indice);
    }

    public function verCarrinho(){
      $prod = array();
      $ids = session()->get('carrinho');
      if($ids != null){
      foreach ($ids as $i) {
        $p = Produtos :: find($i);
        array_push($prod,$i[0]);
      }
      $produtos = Produtos::find($prod);
      return view('carrinho', compact('produtos', $produtos));
    }else{
      session()->flash('message','Carrinho vazio! Adicione produtos ao carrinho');
      return redirect('/produtos');
    }
    }
}
