@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Bem vindo {{Auth::user()->name}}!</h2>

  <div class="links">
      <a href="{{ url('/produtos')}}">Área Geral</a><br>
      <a href="{{ url('/compras')}}">Meus Pedidos</a><br>
      <a href="{{ url('/carrinhos')}}">Carrinho</a>
  </div>

</div>
@endsection
