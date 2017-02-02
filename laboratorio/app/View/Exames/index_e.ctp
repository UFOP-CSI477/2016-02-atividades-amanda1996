<h1>Exames do Paciente</h1>

<table>
  <tr>
    <th>Nome</th>
    <th>Data</th>
  </tr>

<?php foreach ($exames as $e): ?>
  <?= Debugger::dump($e) ?>
  <tr>
    <td>
      <?= $this->Html->link($e['Procedimento']['nome'],
      array('controller' => 'procedimentos',
      'action' => 'view',
      $e['Exame']['procedimento_id'])); ?>
    </td>
    <td>
      <?php echo $e['Exame']['data'] ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>

<h1>Quantidade de exames solicitados: </h1><?= $quantidade ?>
