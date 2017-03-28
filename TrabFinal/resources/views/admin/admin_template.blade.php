<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <title>Gestando</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap2.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css"> -->
  <link rel='stylesheet prefetch' href='/css/googleapis.css'>
  <link rel='stylesheet prefetch' href='/css/general.css'>

  <link rel="stylesheet" href="/css/style.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="/plugins/fullcalendar/fullcalendar.print.css" media="print">

  <link rel="shortcut icon" href="{{{ asset('img/gestando2.png') }}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
@if(Auth::check())

    <div class="wrapper">

    @include('admin.header')  <!-- =============================================== -->

      @if(Auth::check())
      <!-- Left side column. contains the sidebar -->
        @include('admin.sidebar')
      @endif
      <!-- =============================================== -->
      <center>
            @if(Session::has('error'))
              <div class="alert alert-danger">
                {{Session::get('error')}}
              </div>
            @endif
            @if(Session::has('message'))
              <div class="alert alert-info">
                {{Session::get('message')}}
              </div>
            @endif
            @yield('conteudo')
      </center>
      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content-header')
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      @include('admin.footer')

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        @include('admin.control-sidebar')
      </aside>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->
@else
@include('admin.header')  <!-- =============================================== -->

      <center>
            @if(Session::has('error'))
              <div class="alert alert-danger">
                {{Session::get('error')}}
              </div>
            @endif
            @if(Session::has('message'))
              <div class="alert alert-info">
                {{Session::get('message')}}
              </div>
            @endif
            @yield('conteudo')
      </center>
      <!-- Content Wrapper. Contains page content -->

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
@endif
<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/gcal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/locale/pt-br.js"></script>

<script src="../plugins/fullcalendar/fullcalendar.min.js"></script>


@if(Auth::check())
<!-- Page specific script -->
<script>
$(function () {
  /* initialize the external events
   -----------------------------------------------------------------*/
  function ini_events(ele) {
    ele.each(function () {
      // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
      // it doesn't need to have a start or end
      var eventObject = {
        title: $.trim($(this).text()) // use the element's text as the event title
      };

      // store the Event Object in the DOM element so we can get to it later
      $(this).data('eventObject', eventObject);

      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 1070,
        revert: true, // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });

    });
  }

  ini_events($('#external-events div.external-event'));

  /* initialize the calendar
   -----------------------------------------------------------------*/
  //Date for the calendar events (dummy data)
  var date = new Date();
  var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();
//while(reload==false){
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    buttonText: {
      today: 'Hoje',
      month: 'mês',
      week: 'semana',
      day: 'dia'
    },

    events: { url:"cargaEventos"},

    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar !!!

    drop: function (date, allDay) { // this function is called when something is dropped
      // retrieve the dropped element's stored Event Object
      var originalEventObject = $(this).data('eventObject');
      // we need to copy it, so that multiple events don't have a reference to the same object
      var copiedEventObject = $.extend({}, originalEventObject);
      allDay=true;
      // assign it the date that was reported
      copiedEventObject.start = date;
      copiedEventObject.allDay = allDay;
      copiedEventObject.backgroundColor = $(this).css("background-color");
      copiedEventObject.borderColor = $(this).css("border-color");

      // render the event on the calendar
      //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
      // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
      // is the "remove after drop" checkbox checked?
      if ($('#drop-remove').is(':checked')) {
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
      }
      //Guardamos el evento creado en base de datos
      var title=copiedEventObject.title;
      var start=copiedEventObject.start.format("YYYY-MM-DD HH:mm");
      var back=copiedEventObject.backgroundColor;
      var id = '{{auth()->user()->id}}';

      crsfToken = document.getElementsByName("_token")[0].value;
      $.ajax({
           url: 'guardaEventos',
           data: 'id=' + id + '&title='+ title+'&start='+ start+'&allday='+allDay+'&background='+back,
           type: "POST",
           headers: {
                  "X-CSRF-TOKEN": crsfToken
              },
            success: function(events) {
              console.log('Evento creado');
              $('#calendar').fullCalendar('refetchEvents' );
            },
            error: function(json){
              console.log("Error al crear evento");
            }
      });
    },
    eventResize: function(event) {
          var start = event.start.format("YYYY-MM-DD HH:mm");
          var back=event.backgroundColor;
          var allDay=event.allDay;
          if(event.end){
            var end = event.end.format("YYYY-MM-DD HH:mm");
          }else{var end="NULL";
          }
          crsfToken = document.getElementsByName("_token")[0].value;
            $.ajax({
              url: 'atualizaEventos',
              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id+'&background='+back+'&allday='+allDay,
              type: "POST",
              headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
                success: function(json) {
                  console.log("Updated Successfully");
                },
                error: function(json){
                  console.log("Error al actualizar evento");
                }
            });
      },
      eventDrop: function(event, delta) {
        var start = event.start.format("YYYY-MM-DD HH:mm");
        if(event.end){
          var end = event.end.format("YYYY-MM-DD HH:mm");
        }else{var end="NULL";
        }
        var back=event.backgroundColor;
        var allDay=event.allDay;
        crsfToken = document.getElementsByName("_token")[0].value;

          $.ajax({
            url: 'atualizaEventos',
            data: 'title='+ event.title+'&start='+ start +'&end='+ end+'&id='+ event.id+'&background='+back+'&allday='+allDay ,
            type: "POST",
            headers: {
              "X-CSRF-TOKEN": crsfToken
            },
            success: function(json) {
              console.log("Evento deletado com sucesso!");
            },
            error: function(json){
              console.log("Erro ao tentar atualizar o evento!");
            }
          });
      },
      eventClick: function (event, jsEvent, view) {
        crsfToken = document.getElementsByName("_token")[0].value;
        var con=confirm("Está seguro que desejar excluir o evento?");
        if(con){
            $.ajax({
               url: 'eliminaEvento',
               data: 'id=' + event.id,
               headers: {
                  "X-CSRF-TOKEN": crsfToken
                },
               type: "POST",
               success: function () {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    console.log("Evento eliminado!");
                }
            });
        }else{
           console.log("Cancelado!");
        }
      },
      eventMouseover: function( event, jsEvent, view ) {
        var start = (event.start.format("HH:mm"));
        var back=event.backgroundColor;
        if(event.end){
            var end = event.end.format("HH:mm");
        }else{var end="Não definido";
        }
        if(event.allDay){
            var allDay = "Sim";
        }else{var allDay="Nao";
        }
        var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center>'+'Todo dia: '+allDay+'<br>'+ 'Inicio: '+start+'<br>'+ 'Fim: '+ end +'</div>';
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });
      },

      eventMouseout: function(calEvent, jsEvent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },
      dayClick: function(date, jsEvent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      }
  });

  /* AGREGANDO EVENTOS AL PANEL */
  var currColor = "#3c8dbc"; //Red by default
  //Color chooser button
  var colorChooser = $("#color-chooser-btn");
  $("#color-chooser > li > a").click(function (e) {
    e.preventDefault();
    //Save color
    currColor = $(this).css("color");
    //Add color effect to button
    $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
  });
  $("#add-new-event").click(function (e) {
    e.preventDefault();
    //Get value and make sure it is not null
    var val = $("#new-event").val();
    if (val.length == 0) {
      return;
    }

    //Create events
    var event = $("<div />");
    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
    event.html(val);
    $('#external-events').prepend(event);

    //Add draggable funtionality
    ini_events(event);

    //Remove event from text input
    $("#new-event").val("");
  });
});
</script>
@endif

</body>
</html>
