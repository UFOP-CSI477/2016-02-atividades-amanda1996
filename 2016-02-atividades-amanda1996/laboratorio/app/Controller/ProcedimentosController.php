<?php

class ProcedimentosController extends AppController{

  public $helpers = array('Html','Form');
  public $components = array('Flash');


  public function view($id){
    if(!$id){//se não encontrar o
      throw new NotFoundException('Procedimento não encontrado!');
    }else{
      $procedimento = $this->Procedimento->findById($id);
      $this->set('procedimento',$procedimento);
    }
  }

  public function index_p(){
    // $usuario = $this->Session->read('Usuario');
    // $tipo_usuario = $usuario['0']['Usuario']['tipo'];
    // if($tipo_usuario == 2){
    //   echo $this->Form->hidden('excluir');
    // }
    $this->set('procedimentos', $this->Procedimento->find('all', array('order' => array('Procedimento.nome' => 'asc'))));
  }

  public function add(){
    //se os campos estiverem vazios, carrego as opções para o select
    if(empty($this->request->data)){

      $usuarios = $this->Procedimento->Usuario->find('list',array('fields' => array('id','nome')));

      $this->set('usuarios',$usuarios);

    }else{
      if($this->Procedimento->save($this->request->data)){
        $this->Flash->set('Procedimento cadastrado com sucesso!');
        $this->redirect(array('action' => 'index'));
      }
    }
  }

  public function edit($id){
    if(!$id){
      throw new NotFoundException("Procedimento não encontrado!");
    }
    if(empty($this->request->data)){
      $usuarios = $this->Procedimento->Usuario->find('list',array('fields' => array('id','nome')));
      $this->set('usuarios',$usuarios);
      $this->request->data = $this->Procedimento->findById($id);
    }else{
      if($this->Procedimento->save($this->request->data)){
        $this->Flash->set('Procedimento atualizado com sucesso!');
        $this->redirect(array('action' => 'index'));
      }
    }
  }

  public function delete($id=null){
    if(!$id){
      throw new NotFoundException("Procedimento não encontrado!");
    }else{
      $this->Procedimento->delete($id);
      $this->Flash->set('Procedimento excluído!');
      $this->redirect(array('action' => 'index'));//recarrega a página
    }
  }

}

 ?>
