@extends('admin.admin_template')

@section('content-header')
<hr />
<center>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>#</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contatos as $c)
      <tr>
        <td>{{$c->nome}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->celular}}</td>
        <td><a href="/contatos/{{$c->id}}/edit">Editar</a></td>
        <td>
        <form class="" action="/contatos/{{$c->id}}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{ method_field('DELETE')}}
          <button type="submit" name="excluir" class="btn-danger">Excluir</button>
        </form>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
</center>
@endsection
