<h1>Editar Procedimento</h1>
<?php echo $this->Form->create('Procedimento');?>
<?= $this->Form->input('id'); ?>
<?= $this->Form->input('nome'); ?>
<?= $this->Form->input('preco'); ?>
<?= $this->Form->select('usuario_id',$usuarios); ?>

<?= $this->Form->end('Salvar alterações'); ?>
