@extends('layouts.app')

@section('content')

<div class="container">

      <h1>Compras</h1>
      <table style="width:100%" class="table table-striped">
          <tr>
            <th>Data</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Imagem</th>
          </tr>
          @foreach ($compras as $c)

            <tr>
            <td>{{$c->data}}</td>
            <td>{{$c->produto->first()->nome}}</td>
            <td>{{$c->produto->first()->preco}}</td>
            <td>{{$c->quantidade}}</td>
            <td><img src="{{$c->produto->first()->imagem}}"height=30% weigth=30%></td>
          </tr>



          @endforeach
      </table>
</div>

@endsection
