@extends('layouts.app')

@section('content')

<div class="container">

  <h1>Estados</h1>
  <a href="/estados/create" class = "btn btn-primary">Inserir</a>
  <br><br>
  <table class="table  table-striped">
      <thead>
        <tr>
         <th>Nome</th>
         <th>Sigla</th>
       </tr>
      </thead>

    <tbody>
      @foreach($estados as $e)

        <tr>
         <td> <a href="/estados/{{ $e->id }}">{{ $e->nome }}</a></td>
         <td>{{ $e->sigla}}</td>
       </tr>

      @endforeach
    </tbody>
  </table>
</div>


@endsection
