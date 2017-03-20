@extends('layouts.app')

@section('content')

<div class="container">



  <h1>Editar Usuário - {{$user->name}} </h1>
  <p class="lead">Edite seus dados abaixo, ou <a href="{{ route('clientes.index') }}">Volte para seus dados</a></p>
  <hr>

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Editar usuário</div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('clientes.update',$user) }}">
                    <input name="_method" type="hidden" value="PATCH">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                      <div class="form-group">
                          <label for="email" class="col-md-4 control-label">Email</label>
                          <div class="col-md-6">
                              <input id="email" type="email"  name="email" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">Senha</label>
                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Editar Usuário
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