<?php

class ExamesController extends AppController{

  public $helpers = array('Html','Form');
  public $components = array('Flash');

  //lista todos os exames do paciente
  function index_e($paciente_id){
    $exame_retorno = $this->Exame->findAllByPacienteId($paciente_id);
    if(!$exame_retorno){
      $this->Flash->set('Nenhum exame solicitado até o momento!');
      $this->set('exames', null);
      $this->set('quantidade', 0);
    }else{
      $this->set('exames', $exame_retorno);
      $this->set('quantidade', count($exame_retorno));
    }
  }

  public function view ($id){
    if(!$id){
      throw new NotFoundException('Exame não encontrado!');
    }else{
      $exame = $this->Exame->findById($id);
      if(!$exame){
        $this->Flash->set('Exame não encontrado!');
        $this->set('exame', null);
      }else{
        $this->set('exame',$exame);
      }
    }
  }

  public function add_e(){
    $p = $this->Session->read('Usuario');
    if(empty($this->request->data)){
      //acessa o modelo de exame que possui chave estrangeira para procedimento e busca os atributos id e nome de procedimento
      $procedimentos = $this->Exame->Procedimento->find('list',array('fields' => array('id','nome')));

      $this->set('procedimentos', $procedimentos);

    }else{
      if($this->Exame->save($this->request->data)){
        $this->Flash->set('Exame solicitado com sucesso!');
        $this->redirect(array('action' => 'index_e',$p['Usuario']['id']));
      }
    }
  }

  function contaExames($id){
    $exames = $this->Exame->find('all', array('conditions' => array('Exame.paciente_id' => $id)));
    $quantidade = count($exames);
  }
}

 ?>
