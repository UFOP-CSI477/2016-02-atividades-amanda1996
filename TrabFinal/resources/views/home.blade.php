@extends('admin.admin_template')

@section('content-header')
<section class="content-header">
  <h1 class="input-gestante">
    Bem vindo ao nosso Sistema!
    <small class="label-gestante">Acompanhe as informações de seu bebê</small>
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Boxed</li>
  </ol> -->
</section>
@endsection

@section('content')
  <div class="container">
    @if($eventos != null)
      <h1 class="label-gestante">Olá! Não se esqueça dos compromissos dessa semana!</h1>
      <br><br>
      @foreach($eventos as $e)
      <div class="col-sm-4 input-gestante ">
        {{ Carbon\Carbon::parse($e->fechaIni)->format('d/m/Y') }}
        <br>
        <hr />

        {{$e->titulo}}
      </div>
      <div class="col-sm-1">

      </div>

      @endforeach
    @endif
  </div>
@endsection
