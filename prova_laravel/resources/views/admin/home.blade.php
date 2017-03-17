@extends('principal')

@section('titulo')
  Área administrativa
@endsection

@section('conteudo')
<button type="submit" class="w3-btn-block" onclick="window.location='{{route ('getRegistrosIndex')}}'">Lista de registros</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='{{route ('getAtletas')}}'">Lista de atletas</button>
<br><br>
<button type="submit" class="w3-btn-block" onclick="window.location='{{route ('getRelatorio')}}'">Lista de registros/atletas</button>

@endsection
