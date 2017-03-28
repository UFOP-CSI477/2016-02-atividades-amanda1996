@extends('admin.admin_template')

@section('content-header')

<section class="content-header">
  <h1>
    Cadastrar Dados
    <small>Insira informações sobre a gestante e o feto</small>
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

  <hr />

    <form action="/enviar" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group col-sm-10">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu Nome">
      </div>

      <div class="form-group col-sm-10">
        <label for="apelido">Como gosta de ser chamada</label>
        <input type="text" id="apelido" name="apelido" class="form-control" placeholder=" Seu Apelido">
      </div>

      <div class="form-group col-sm-10">
        <label for="companheiro">Nome do Companheiro</label>
        <input type="text" id="companheiro" name="companheiro" class="form-control" placeholder="Seu Companheiro">
      </div>

      <div class="form-group col-sm-10">
        <div class="col-sm-5">
          <label for="dataN">Data de Nascimento</label>
          <input type="date" id="dataN" name="dataN" class="form-control" placeholder="Data Nasciemento">
        </div>

        <div class="col-sm-5">
          <label for="idade">Idade</label>
          <input type="number" id="idade" name="idade" class="form-control" placeholder="Idade">
        </div>
      </div>

      <div class="form-group col-sm-10">
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Seu E-Mail">
      </div>

      <div class="form-group col-sm-10">
        <div class="col-sm-5">
          <label for="telefone">Telefone Fixo</label>
          <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
        </div>

        <div class="col-sm-5">
          <label for="celular">Celular</label>
          <input type="tel" id="celular" name="celular" class="form-control" placeholder="Seu Celular">
        </div>
      </div>

      <!-- <div class="form-group col-sm-12">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
      </div>

      <div class="form-group">
        <div class="col-sm-6">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
        </div>
        <div class="col-sm-6">
          <label for="confirmS">Confirmar Senha</label>
          <input type="password" id="confirmS" name="confirmS" class="form-control" placeholder="Confirme Senha">
        </div>
      </div> -->

      <div class="form-group col-sm-10">
      <h2>Informações da Gestante</h2>
      </div>

      <div class="form-group col-sm-10">
        <div class="col-sm-5">
          <label for="dum">DUM (Data da última menstruação)</label>
          <input type="date" id="dum" name="dum" class="form-control" placeholder="">
        </div>
        <div class="col-sm-5">
          <label for="dpp">DPP (Data Provavel do Parto)</label>
          <input type="date" id="dpp" name="dpp" class="form-control" placeholder="">
        </div>
      </div>

      <div class="form-group col-sm-10">

        <div class="col-sm-3">
          <label for="ig">IG (Idade Gestacional)</label>
          <input type="date" id="ig" name="ig" class="form-control" placeholder="">
        </div>
        <div class="col-sm-3">
          <label for="igD">IG_DUM (Idade Gestacional de Acordo com o DUM)</label>
          <input type="date" id="igD" name="igD" class="form-control" placeholder="">
        </div>

        <div class="col-sm-4">
          <label for="igU">IG_USG (IG de Acordo com o Ultrassonografia)</label>
          <input type="date" id="igU" name="igU" class="form-control" placeholder="">
        </div>
      </div>

      <div class="form-group col-sm-10">
        <div class="col-sm-3">
          <label for="au">AU (Altura Uterina)</label>
          <input type="number" id="au" name="au" class="form-control" placeholder="">
        </div>

        <div class="col-sm-3">
          <label for="pa">PA (Pressão Arterial)</label>
          <input type="number" id="pa" name="pa" class="form-control" placeholder="">
        </div>

        <div class="col-sm-4">
          <label for="bcf">BCF (Batimentos Cardiofetais)</label>
          <input type="number" id="bcf" name="bcf" class="form-control" placeholder="">
        </div>
      </div>

      <div class="form-group col-sm-10">
      <h2>Informações do Feto</h2>
      </div>

      <div class="form-group col-sm-10">
        <label for="nomeBB">Nome</label>
        <input type="text" id="nomeBB" name="nomeBB" class="form-control" placeholder="Opcional">
      </div>
      <div class="form-group col-sm-10">
        <label for="genero  ">Gênero</label>

        <fieldset class="form-group">
          <div class="form-check col-sm-2">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Principe
            </label>
          </div>
          <div class="col-sm-2">

          </div>
          <div class="form-check col-sm-2">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
              Princesa
            </label>
          </div>
          <div class="col-sm-2">

          </div>
          <div class="form-check col-sm-2">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Não sei
            </label>
          </div>
        </fieldset>
      </div>

    </form>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <input type="submit" class="button-style" value="Registrar">
      </div>
    </div>
</div>

@endsection
