<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produtos;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produtos = Produtos :: all();
      return view('produtos.index',compact('produtos',$produtos));
    }

    public function home_admin(){
      if(Auth::user()->type == 2 || Auth::user()->type == 3 ){
        $produtos = Produtos :: all();
        return view('users.home_admin', compact('produtos'));
      }else{
        if(Auth::user()->type == 1){
          session()->flash('error','Você não tem permissaõ para fazer isso!');
          return redirect('/users/home_cliente');
        }else{
          session()->flash('error','Você não tem permissaõ para fazer isso!');
          return redirect('/');
        }
    }
  }

    public function home_cliente(){
      if(Auth::user()->type == 1){
        $id = Auth::user()->id;
        return view('users.home_cliente',compact('id',$id));
      }else{
        session()->flash('error','Você não tem permissaõ para fazer isso!');
        return redirect('/');      }
    }
}
