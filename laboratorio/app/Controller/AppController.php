<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller {
  public function afterFilter(){
    // $acessogeral = array('index_login', 'index_p' );
    // $acessopaciente = array('index_e','add_e', 'logout_pa','pagina_inicial');
    // $acessoRestritoAdm1 = array('add_e','index_e','logout_pa');
    // $acessoRestritoAdm2 = array('add_e','index_e','logout_pa');
    // $usuario = $this->Session->read('Usuario');
    // if($usuario != null){
    //   $tipoUsuario = $usuario['0']['Usuario']['tipo'];
    //   if(!in_array($this->action, $acessogeral)){//se o usuário tentar acessar uma área que não é publica precisa efetuar login
    //     $this->autenticar();
    //     exit();
    //   }
    //   if($tipoUsuario == 2){
    //     if(in_array($this->action, $acessoRestritoAdm2)){//se a área que o adm tipo 2 tenta acessar for restrita...
    //       $this->Flash->set('Acesso negado!');
    //       $this->redirect('/');
    //     }
    //   }
    //   else if($tipoUsuario == 1){
    //     if(in_array($this->action, $acessoRestritoAdm1)){
    //       $this->Flash->set('Acesso negado!');
    //       $this->redirect('/');
    //     }
    //   }else{//se for um paciente
    //     if(!in_array($this->action, $acessopaciente)){
    //       $this->Flash->set('Acesso negado!');
    //       $this->redirect('/');
    //     }
    //   }
    // }
  }

	public function autenticar(){
		// if(!$this->Session->check('Usuario')){
		// 	$this->redirect(array('controller'=>'usuarios', 'action'=>'index_login'));
		// 	exit();
		// }
		// else{
		// 	$usuario = $this->Session->read('Usuario');
		// 	$this->Flash->set('Seja bem-vindo(a) '.$usuario['0']['Usuario']['nome']);
		// }
	}
}
