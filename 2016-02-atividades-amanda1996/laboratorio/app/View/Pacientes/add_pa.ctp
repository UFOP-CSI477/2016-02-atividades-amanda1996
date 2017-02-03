<h1>Criar conta</h1>

<?php

  echo $this->Form->create('Paciente');
  echo $this->Form->input('nome');
  echo $this->Form->input('usuario');?>
  <h1>Senha: </h1> <?= $this->Form->password('senha'); ?>
<?= $this->Form->end('Criar conta'); ?>
