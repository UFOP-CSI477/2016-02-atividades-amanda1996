<h1>Pacientes Cadastrados</h1>

<table>
  <tr>
    <th>Nome</th>
    <th>#</th>
  </tr>

<?php foreach ($pacientes as $p): ?>
  <tr>
    <td>
      <?= $this->Html->link($p['Paciente']['nome'],
      array('controller' => 'pacientes', 'action' => 'view', $p['Paciente']['id'])); ?>
    </td>
    <td>
    <?=  $this->Html->link("Excluir", array('controller' => 'pacientes', 'action' => 'delete')); ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>


<?php
$this->Html->link("Solicitar Exame", array('controller' => 'exames', 'action' => 'add'));
$this->Html->link("Ver exames", array('controller' => 'exames', 'action' => 'index'));
 ?>
