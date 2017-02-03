<h1> <?php echo $exame['Procedimento']['nome']; ?> </h1>
<?php echo $exame['Exame']['id']; ?>
<br><br>
<?php echo $exame['Procedimento']['preco']; ?>
<br><br>
<?=
  $this->Html->link("Voltar",
    array('controller' => 'exames',
        'action' => 'index'));
?>
