@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Disciplinas</h1>

  <a href="/disciplinas/create" class = "btn btn-primary">Inserir</a>
  <table class="table  table-striped">

  <thead>
     <tr>
     <th>Nome</th>
     <th>Codigo</th>
     <th>C.H</th>
</thead>
<tbody>
  @foreach($disciplinas as $d)
<tr>
 <td> <a href="/disciplinas/{{ $d->id }}">{{ $d->nome }}</a></td>
 <td>{{ $d->codigo}}</td>
 <td>{{ $d->carga}}</td>

</tr>

</tbody>
  @endforeach

      </table>
</div>


@endsection
