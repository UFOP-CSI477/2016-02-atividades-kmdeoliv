@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $produto->nome }}</h1>
    <p class="lead">Preço: R${{ $produto->preco }}</p>
    <img src="{{$produto->imagem}}">
    <hr>

    <a href="{{ route('produtos.index') }}" class="btn btn-info">Voltar para produtos</a>

    <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-info">Editar Produto</a>

  

    <div class="pull-right">

      <form class="form-horizontal" role="form" method="POST" action="{{ route('produtos.destroy', $produto) }}">
          <input name="_method" type="hidden" value="DELETE">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-danger">
                      Deletar produto?
                  </button>
              </div>
          </div>
      </form>
    </div>


</div>

@endsection
