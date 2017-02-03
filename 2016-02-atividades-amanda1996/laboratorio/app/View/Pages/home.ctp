<ul class="nav nav-tabs" style="margin:5px;padding: 0px">
		<li class="active">
			<?= $this->Html->link("Ver procedimentos", array('controller' => 'procedimentos', 'action' => 'index_p'))?></li>
		<li><?= $this->Html->link("Área do paciente", array('controller' => 'pacientes', 'action' => 'index_login'))?></li>
		<li>	<?= $this->Html->link("Área do administrador", array('controller' => 'usuarios', 'action' => 'index_login'))?></li>
	</ul>
