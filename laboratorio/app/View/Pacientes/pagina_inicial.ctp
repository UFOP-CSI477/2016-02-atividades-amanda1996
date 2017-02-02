<?= $this->Html->link("Ver exames", array('controller' => 'exames', 'action' => 'index_e', $this->Session->read('Paciente')['id']));?>
<br><br>
<?= $this->Html->link("Solicitar exame", array('controller' => 'exames', 'action' => 'add'));?>
<br><br>
