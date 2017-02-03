<?php

class PacientesController extends AppController{
  public $helpers = array('Form');
  public $components = array('Flash');

    public function afterFilter(){
      $podeAcessar = array('index_login', 'index_p','index_e','add_e', 'logout_pa','pagina_inicial');
      if (!in_array($this->action, $podeAcessar)) {
          $this->autenticar();
      }
    }

    public function autenticar() {
    if (!$this->Session->check('Paciente')) {
        $this->redirect(array('controller' => 'paciente', 'action' => 'index_login'));
        exit();
    } else {
        $paciente = $this->Session->read('Paciente');
        $this->Flash->set('Seja bem-vindo(a) ' . $paciente['0']['Paciente']['nome']);
    }
  }

  function index_pa(){
    $this->set('pacientes', $this->Paciente->find('all', array('order' => array('Paciente.nome' => 'asc'))));
  }

  function pagina_inicial(){
  }

  function view_pa ($id){
    if(!$id){
      throw new NotFoundException("Paciente não encontrado!");
    }else{
      $paciente = $this->Paciente->findById($id);
      $this->set('paciente', $paciente);
    }
  }

  function add_pa(){
      //se os campos estiverem vazios, carrego as opções para o select
    if(!empty($this->request->data)){
      if($this->Paciente->save($this->request->data)){
        $this->Flash->set('Cadastro realizado com sucesso!');
        $this->redirect(array('controller' => 'pacientes', 'action' => 'index_pa'));
      }
    }
  }

  function index_login(){

  }

  function login(){
    if(!empty($this->data['Paciente']['login'])){//se os campos não esiverem vazio
      //Validar
      $paciente = $this->validar();//se o retorno da função for verdadeiro é autenticado, senão não

      if($paciente != false){
        $this->Flash->set('Acesso realizado com sucesso!');
        $this->Session->write('Usuario', $paciente);//nome gravado na sessão

        $this->redirect(array('controller' => 'pacientes', 'action' => 'pagina_inicial'));//redireciona para a página principal
      }
    }else{
      $this->Flash->set('Usuário ou senha incorretos!');
      $this->redirect(array('action' => 'index_login'));
      exit();
    }
  }

  function validar(){
    $paciente = $this->Paciente->findAllByLoginAndSenha($this->data['Paciente']['login'], $this->data['Paciente']['senha']);//faz a busca passando login e senha como parâmetro

    if(!empty($paciente)){ //se a busca não for vazia significa que tem um usuário com aquele login e senha
      return $paciente;
    }else{
          return false; // se for vazia, retorna falso
    }
  }


  function delete($id=null){
    if(!$id){
      throw new NotFoundException("Paciente não encontrado!");
    }else{
      $this->Paciente->delete($id);
      $this->Flash->set('Paciente excluído!');
      $this->redirect(array('controller' => 'usuarios', 'action' => 'index'));
    }
  }
}

 ?>
