@extends('layouts.app')

@section('content')

<div class="container">

      <h1>Meus dados</h1>

        <p><b>Nome</b>: {{$user->name}}</p>
        <p><b>Email</b>: {{$user->email}}</p>
        <a href="{{ route('clientes.edit', $user) }}" >Editar meus dados</a>

</div>

@endsection
