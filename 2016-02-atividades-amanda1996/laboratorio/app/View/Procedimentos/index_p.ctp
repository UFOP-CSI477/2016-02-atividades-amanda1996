<h1>Procedimentos</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Usuario</th>
    <th name="editar" value="1">#</th>
    <th name="excluir">#</th>
  </tr>

<?php foreach ($procedimentos as $p): ?>
  <tr>
    <td>
      <?php echo $p['Procedimento']['id']?>
    </td>
    <td>
      <?= $this->Html->link($p['Procedimento']['nome'],
      array('controller' => 'procedimentos',
      'action' => 'view',
      $p['Procedimento']['id'])) ?>
    </td>
    <td>
      <?php echo $p['Procedimento']['preco'] ?>
    </td>
    <td>
      <?php echo $p['Procedimento']['usuario_id'] ?>
    </td>
    <td>
      <?= $this->Html->link('Editar',array('controller' => 'procedimentos',
      'action' => 'edit', $p['Procedimento']['id']))?>
  </td>
  <td>
    <?= $this->Html->link('Excluir', array('controller' => 'procedimentos',
    'action' => 'delete', $p['Procedimento']['id']), array('confirm' => 'Tem certeza que deseja excluir o procedimento?'));?>
  </td>
  </tr>
<?php endforeach; ?>

<?= $this->Html->link('Cadastrar novo procedimento', array('controller' => 'procedimentos',
  'action' => 'add')) ?>
</table>
