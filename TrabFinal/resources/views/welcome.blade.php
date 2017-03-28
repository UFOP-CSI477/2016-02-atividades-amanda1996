<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>


  <link rel='stylesheet prefetch' href='css/css.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Logar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrar</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="nome" class="label">Nome</label>
					<input id="nome" type="text" class="input">
				</div>
				<div class="group">
					<label for="senha" class="label">Senha</label>
					<input id="senha" type="password" class="input" data-type="Senha">
				</div>
				<div class="group">
					<input type="submit" class="button-style" value="Logar">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Esqueceu a senha?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="nome" class="label-login">Nome</label>
					<input id="nome" type="text" class="input">
				</div>
				<div class="group">
					<label for="senha" class="label-login">Senha</label>
					<input id="senha" type="password" class="input" data-type="Senha">
				</div>
				<div class="group">
					<label for="senha" class="label-login">Repita a Senha</label>
					<input id="senha" type="password" class="input" data-type="Senha">
				</div>
				<div class="group">
					<label for="email" class="label-login">Email</label>
					<input id="email" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button-style" value="Registrar">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>


</body>
</html>
