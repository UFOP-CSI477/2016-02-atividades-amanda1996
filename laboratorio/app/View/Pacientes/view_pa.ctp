<h1><?= $paciente['Paciente']['nome']; ?></h1>
<p>Login: <?= $paciente['Paciente']['login'] ?></p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'pacientes',
        'action' => 'index'));
?>
