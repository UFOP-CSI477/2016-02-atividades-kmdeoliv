@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Produto</h1>
    <p class="lead">Criar novo produto abaixo, ou <a href="{{ route('produtos.index') }}">Volte para todos os produtos.</a></p>
    <hr>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">          
            <div class="panel panel-default">
                <div class="panel-heading">Criar produto</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('produtos.store') }}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="preco" class="col-md-4 control-label">Preço</label>

                            <div class="col-md-6">
                                <input id="preco" type="number" step="any" name="preco" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imagem" class="col-md-4 control-label">Imagem</label>

                            <div class="col-md-6">
                                <input id="imagem" type="imagem" class="form-control" name="imagem" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Criar Produto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
