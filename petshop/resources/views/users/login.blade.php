@extends('principal')

@section('titulo')
  Login
@endsection

@section('conteudo')
<h1>Efetuar login</h1>

<form id="login" class="w3-form">
    <table>
      <tr>
        <td>
          <label for="email">Email: </label>
        </td>
        <td>
          <input name="email" class="form-control" type="text"></input>
        </td>
      </tr>
      <tr>
        <td style="text-align: right;">
          <label for="senha">Senha: </label>
        </td>
        <td>
          <input name="senha" class="form-control" type="password"></input>
        </td>
      </tr>
    </table>
    <br>
    <center>
      <input type="button" value="Entrar"/>
    </center>
    <br></br>
</form>
@endsection
