<?php $user = Auth::user() ?>
<aside class="main-sidebar" style="background-color: #a1c8b8;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="background-color: #d9e9e3;">
      <div class="pull-left image">
        <img src="/img/gestando.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info input-gestante">
        @if (Auth::check())

        <p>{{ Auth::user()->apelido }}</p>
        @endif
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">

    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header" style="color: #de9494;">MENU</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-floppy-o " aria-hidden="true" style="color: #0190a1;"></i><span>Informações da gestante</span>
          <!-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> -->
        </a>
        <ul class="treeview-menu">
          <li><a href="/users/{{$user->id}}"><i class="fa fa-circle-o"style="color: #0190a1;"></i> Ver</a></li>
          <li><a href="/users/{{$user->id}}/edit"><i class="fa fa-circle-o" style="color: #0190a1;"></i> Editar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-floppy-o" aria-hidden="true" style="color: #0190a1;"></i><span>Informações do bebê</span>
          <!-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> -->
        </a>
        <ul class="treeview-menu">
          <li><a href="/bebes/{{$user->id}}"><i class="fa fa-circle-o" style="color: #0190a1;"></i> Ver</a></li>
          <li><a href="/bebes/create"><i class="fa fa-circle-o" style="color: #0190a1;"></i> Cadastrar</a></li>
          <li><a href="/bebes/{{$user->id}}/edit"><i class="fa fa-circle-o" style="color: #0190a1;"></i> Editar</a></li>
        </ul>
      </li>

      <li class="">
        <a href="#">
          <i class="fa fa-phone" aria-hidden="true" style="color: #0190a1;"></i>
          <span>Agenda</span>
          <span class="pull-right-container">
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/contatos/create"><i class="fa fa-circle-o" style="color: #0190a1;"></i> Cadastrar Contato</a></li>
          <li><a href="/contatos"><i class="fa fa-circle-o"style="color: #0190a1;"></i> Listar Contatos</a></li>
          <li><a href="/indexT"><i class="fa fa-circle-o"style="color: #0190a1;"></i> Telefones Úteis</a></li>

        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-clock-o" aria-hidden="true" style="color: #0190a1;"></i><span>Acompanhar Desenvol.</span>
          <span class="pull-right-container">
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/desenv/1m"><i class="fa fa-circle-o" style="color: #0190a1;"></i> 1° Trimestre</a></li>
          <li><a href="/desenv/2m"><i class="fa fa-circle-o"style="color: #0190a1;"></i> 2° Trimestre</a></li>
          <li><a href="/desenv/3m"><i class="fa fa-circle-o" style="color: #0190a1;"></i> 3° Trimestre</a></li>


        </ul>
      </li>
      <li>
        <a href="/calendar">
          <i class="fa fa-calendar"style="color: #0190a1;"></i> <span>Calendar</span>

        </a>
      </li>
      <li><a href="/chegando"><i class="fa fa-volume-up" aria-hidden="true" style="color: #0190a1;"></i> <span> Está Chegandoooo!</span></a></li>

      <form style="padding-left:15px;padding-top:10px" action="/users/{{$user->id}}" id="delete" method="post" onsubmit="ConfirmDelete()">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('DELETE')}}
        <li>
          <a href="" onClick="document.getElementById('delete').submit()">
            <i class="fa fa-trash" aria-hidden="true" style="color: #0190a1;"></i>
            <span style="padding:6px">Excluir Conta</span>
          </a>
        </li>
      </form>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<script>

  function ConfirmDelete()
  {
  var x = confirm("Tem certeza que deseja excluir a conta?");
  if (x)
    return true;
  else
    return false;
  }

</script>
