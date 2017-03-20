@extends('layouts.app')

@section('content')

<div class="container">

      <h1>Carrinho</h1>

      @if(session()->has('produto'))


        <p><b>Nome:</b> {{$nome}}</p>
        <p><b>Quantidade:</b> {{request()->session()->get('quantidade')}}</p>
        <p><b>Preco:</b> {{$preco}}</p>
        <img src="{{$imagem}}" alt="">

        <form class="inline-form" role="form" method="POST" action="{{ route('compras.store') }}">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <button type="submit" class="btn btn-primary">
                Comprar
            </button>
        </form>

      @else
       <p> Você ainda não adicionou nenhum produto ao carrinho<p>
      @endif






</div>



@endsection
