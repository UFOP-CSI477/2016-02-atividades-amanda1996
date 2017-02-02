<h1><?= $procedimento['Procedimento']['nome']; ?></h1>
<p>ID: <?= $procedimento['Procedimento']['id'] ?></p>
<p>Valor: <?= $procedimento['Procedimento']['preco']?></p>
<p>Usuário: <?= $procedimento['Procedimento']['preco']?></p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'procedimentos',
        'action' => 'index'));
?>
