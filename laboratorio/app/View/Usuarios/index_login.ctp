<h1>Acesso de usuários</h1>

<?= $this->Form->create('Usuario', array('controller' => 'usuarios', 'url' => 'login'))?>
<?= $this->Form->input('login')?>
<h1>Senha</h1>  <?= $this->Form->password('senha')?>
<?= $this->Form->end('Entrar')?>
