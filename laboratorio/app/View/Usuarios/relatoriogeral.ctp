<h1>Relatório geral de procedimentos</h1>

<table>
  <tr>
    <th>Nome</th>
    <th>Valor Unitário</th>
    <th>Quantidade</th>
    <th>Valor Total</th>
  </tr>

<?php foreach ($exames as $e): ?>
  <tr>
    <td>
      <?php echo $e['p']['nome']?>
    </td>
    <td>
      <?php echo $e['p']['preco']?>
    </td>
    <td>
      <?php echo $e[0]['qtd'] ?>
    </td>
    <td>
      <?php echo $e[0]['qtd']*$e['p']['preco'] ?>
    </td>
    <td>
      <?php  ?>
    </td>
  </tr>
<?php endforeach; ?>

<?= $this->Html->link('Cadastrar novo procedimento', array('controller' => 'procedimentos',
  'action' => 'add')) ?>
</table>
