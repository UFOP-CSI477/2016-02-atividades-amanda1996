@extends('principal')

@section('titulo')
  Home
@endsection

@section('conteudo')

<table class="w3-table">
  <thead>
        <tr>
          <th>Evento</th>
          <th>Data</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php $qtd = 0;
            $total = 0;
      ?>
      @foreach($eventos as $r)
        <tr>
          <td>{{$r->nome}}</td>
          <td>{{$r->data}}</td>
          <td>{{$r->pago}}</td>
          <?php $qtd = $qtd + $r->qtd ?>
          <?php $total = $total + ($r->qtd*$r->total) ?>
        </tr>
      @endforeach
   </tbody>
   <tfoot>
     <tr>
       <td><b>Total de inscrições: <?php echo $qtd ?></b></td>
       <td><b>Valor total: <?php echo $total ?></b></td>
     </tr>
   </tfoot>
</table>

@endsection
