<?php


class UsuariosController extends AppController{
  public $helpers = array('Form');
  public $components = array('Flash');


  public function afterFilter(){
    $naoPodeAcessar = array('add_e', 'index_e','logout_pa','pagina_inicial');
    if (in_array($this->action, $naoPodeAcessar)) {
        $this->autenticar();
    }
  }

  public function autenticar() {
  if (!$this->Session->check('Usuario')) {
      $this->redirect(array('controller' => 'paciente', 'action' => 'index_login'));
      exit();
  } else {
      $paciente = $this->Session->read('Usuario');
      $this->Flash->set('Seja bem-vindo(a) ' . $paciente['0']['Usuario']['nome']);
  }
  }

  function relatoriogeral(){
    $this->loadModel('Exame');
    $exames = $this->Exame->query("SELECT p.id,p.nome,p.preco,e.data,COUNT(p.id) qtd FROM procedimentos p INNER JOIN exames e ON p.id=e.procedimento_id GROUP BY p.id");
    $this->set('exames', $exames);
  }

  function index(){
  }

  function index_login(){
  }

  function login(){
    if(!empty($this->data['Usuario']['login'])){//se os campos não esiverem vazio
      //Validar
      $usuario = $this->validar();//se o retorno da função for verdadeiro é autenticado, senão não

      if($usuario != false){
        $this->Flash->set('Acesso realizado com sucesso!');
        $this->Session->write('Usuario', $usuario);//nome gravado na sessão

        $this->redirect('/');//redireciona para a página principal
      }
    }else{
      $this->Flash->set('Usuário ou senha incorretos!');
      $this->redirect(array('action' => 'index_login'));
      exit();
    }
  }

  function validar(){
    $usuario = $this->Usuario->findAllByLoginAndSenha($this->data['Usuario']['login'], $this->data['Usuario']['senha']);//faz a busca passando login e senha como parâmetro

		if(!empty($usuario)){ //se a busca não for vazia significa que tem um usuário com aquele login e senha
			return $usuario;
		}else{
      return false; // se for vazia, retorna falso
    }
  }

  function logout(){

  }

}

 ?>
