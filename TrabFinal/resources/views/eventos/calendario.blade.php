@extends('admin.admin_template')

@section('content-header')

    <section class="content-header">
      <h1 class="input-gestante">
        Calendário
        <small class="label-gestante">Controle de Eventos</small>
      </h1>

    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
  <div class="col-md-3">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h4 class="box-title label-gestante">Eventos</h4>
      </div>
      <div class="box-body">
        <!-- the events -->
        <div id="external-events">
          <div class="external-event bg-green">Ultrassom</div>
          <div class="external-event bg-yellow">Consulta</div>
          <div class="external-event bg-aqua">Chá de Bebê</div>
          <div class="external-event bg-light-blue">Chá Revelação</div>
          <div class="checkbox">
            <!-- <label for="drop-remove">
              <input type="checkbox" id="drop-remove">
              Eliminar ao arrastar
            </label> -->
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /. box -->
    <div class="box box-solid">
      <!-- <div class="box-header with-border">
        <h3 class="box-title">Crear evento</h3>
      </div> -->
      <div class="box-body">
        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
          <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
          <!-- <ul class="fc-color-picker" id="color-chooser">
            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
            <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
          </ul> -->
        </div>
        <!-- /btn-group -->
        <div class="input-group">
          <!-- <input id="new-event" type="text" class="form-control" placeholder="Titulo de evento">

          <div class="input-group-btn">
            <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
          </div> -->
          <!-- /btn-group -->
        </div><br/><br/>
        <!-- /input-group -->
        {!! Form::open(['route' => ['guardaEventos'], 'method' => 'POST', 'id' =>'form-calendario']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="box box-primary">
      <div class="box-body no-padding">
        <!-- THE CALENDAR -->
        <div id="calendar"></div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /. box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
    </section>
    @endsection
