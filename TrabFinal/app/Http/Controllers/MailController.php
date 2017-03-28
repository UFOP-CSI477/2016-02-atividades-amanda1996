<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Bebes;
use Auth;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;



class MailController extends Controller {

  public function __construct()
  {
      $this->middleware('auth');
  }

   public function basic_email(){
      $data = array('name'=>"Gestando");

      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('aline.marina94@gmail.com', 'Gestando avisando!')->subject
            ('Adivinha quem está chegando?');
         $message->from('gestandolaravel@gmail.com','Gestando');
      });
      //echo "Basic Email Sent. Check your inbox.";
      return redirect('/');
   }

   public function html_email(){
     $user = Auth::user();
     $contatos = DB::select(DB::raw("SELECT * FROM contatos WHERE user_id = '$user->id' AND tipo = 1"));

     if($contatos != null){

       $data = array('name'=>"Gestando");

       foreach($contatos as $c){
         $email = $c->email;
         Mail::send('mail', ['user' => $user], function ($m) use ($c) {
           $m->from('gestandolaravel@gmail.com', 'Gestando');
           $m->to($c->email, $c->nome)->subject('Adivinha quem está chegando?');
       });
       };

       //echo "HTML Email Sent. Check your inbox.";
       return redirect('/');

      }else{

        session()->flash('message','Você não possui nenhum contato cadastrado!');
        return redirect('contatos/create');
      }

   }

   public function attachment_email(){
      $data = array('name'=>"Gestando");
      Mail::send('mail', $data, function($message) {
         $message->to('aline.marina94@gmail.com', 'Gestando avisando!')->subject
            ('Adivinha quem está chegando?');
         $message->attach('img/89995.gif');
         //$message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('gestandolaravel@gmail.com','Gestando');
      });
      //echo "Email Sent with attachment. Check your inbox.";
      return redirect('/');

   }
}
