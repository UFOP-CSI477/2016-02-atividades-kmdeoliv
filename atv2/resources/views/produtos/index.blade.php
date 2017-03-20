@extends('layouts.app')

@section('content')

<div class="container">

      <h1>Produtos</h1>

    <table style="width:100%" class="table table-striped">

     @foreach ($produtos as $p)
       <tr >
        <td style="padding:10px; margin:10px">{{$p->nome}}</td>
        <td>{{$p->preco}}</td>
        <td><img src="{{$p->imagem}}" height=30% weigth=30%></td>
         <td><a href="{{ route('produtos.show', $p->id) }}" >Ver produto</a></td>
         <td><a href="{{ route('produtos.edit', $p) }}" >Editar Produto</a></td>
         <td><form class="form-inline" role="form" method="POST" action="{{ route('carrinhos.store')}}">
           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input id="produto_id" value="{{$p->id}}" name="produto_id" type="hidden" class="col-md-4 control-label">
              <input id="nome" value="{{$p->nome}}" name="nome" type="hidden" class="col-md-4 control-label">
              <input id="imagem" value="{{$p->imagem}}" name="imagem" type="hidden" class="col-md-4 control-label">
                <input id="preco" value="{{$p->preco}}" name="preco" type="hidden" class="col-md-4 control-label">
           <div class="form-group">
               <label for="quantidade" class="col-md-4 control-label">Quantidade</label>
               <input id="quantidade" type="number" min="1" name="quantidade" placeholder="1" required>
               <button type="submit" class="btn btn-primary">
                   <i class="fa fa-cart-plus" aria-hidden="true"></i>
               </button>
          </div>
         </form></td>

       </tr>
      @endforeach

      </table>
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">Criar Produto</a></td>

</div>



@endsection
