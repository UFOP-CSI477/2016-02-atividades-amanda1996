<h1>Solicitar Exame</h1>

<?php
  echo $this->Form->create('Exame');
  echo $this->Form->date('data', array('style' => 'width:180px', 'label' => 'Data'));
  ?>
  <br>
  <br>
  <?php
  echo $this->Form->test('paciente_id', array('style' =>'width:180px', 'label' => 'ID do paciente'));
  ?>
  <br><br>
  <?php echo $this->Form->select('procedimento_id', $procedimentos);

  echo $this->Form->end('Solicitar');

 ?>
