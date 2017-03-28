@extends('admin.admin_template')

@section('content-header')
<section class="content-header">
  <h1 class="input-gestante">
    Informações de {{$bebe->nome}}
    <small class="label-gestante">Veja as infomações de seu bebê cadastradas no nosso sistema</small>
  </h1>
  <br><br><br>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Boxed</li>
  </ol> -->
</section>
@endsection

@section('content')

<div class="container form-group">
    <div class="row">
      <div class="form-group col-sm-3">
        <label for="" class="label-gestante"> Nome da bebê:</label>
      </div>
      <div class="form-group col-sm-3 input-gestante">
        {{$bebe->nome}}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-3">
        <label for="" class="label-gestante"> Sexo:</label>
      </div>
      <div class="form-group col-sm-3 input-gestante">
        {{$bebe->sexo}}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-3">
        <label for="" class="label-gestante"> Idade:
</label>
      </div>
      <div class="form-group col-sm-3 input-gestante">
        {{$bebe->idade}} semanas
      </div>
    </div>
</div>


@endsection
