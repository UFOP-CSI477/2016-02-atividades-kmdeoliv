@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Exibir estados</h1>

  <form method="post" action="/estados/{{ $estado->id }}">

    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    Nome:  {{ $estado->nome }}<br>
    Código: {{ $estado->sigla }}<br>
<br>
    <a href="/estados" class="btn btn-primary" >Voltar</a>
    <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
    <button href="{{route('estados.edit', $estado->id)}}" class="btn btn-primary"> Editar</button>


  </form>
</div>


@endsection
