<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validação</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <?php
    if(isset($_POST["nome"])){
      $nome = "POST: ".$_POST["nome"];
      $datanasc = "POST: ".$_POST["datanasc"];
      $sexo = "POST: ".$_POST["sexo"];
      $curso = "POST: ".$_POST["curso"];
      $matricula = "POST: ".$_POST["matricula"];
      $senha = "POST: ".$_POST["senha1"];
    }
    ?>
  </head>
  <body>

    <h1>Dados cadastrados</h1>

    <?php
      echo "<table>";
      echo "<tr><td>Nome: </td><td>".$_POST["nome"];
      echo "</td></tr>";
      echo "<tr><td>Data de nascimento: </td><td>".$_POST["datanasc"];
      echo "</td></tr>";
      echo "<tr><td>Sexo: </td><td>".$_POST["sexo"];
      echo "</td></tr>";
      echo "<tr><td>Curso: </td><td>".$_POST["curso"];
      echo "</td></tr>";
      echo "<tr><td>Matrícula: </td><td>".$_POST["matricula"];
      echo "</td></tr>";
    ?>

    <br><a href="CadastroJS.html">Voltar</a>

  </body>
</html>
