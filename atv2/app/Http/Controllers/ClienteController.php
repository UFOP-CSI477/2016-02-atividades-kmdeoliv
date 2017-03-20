<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      if(auth()->user()->type ==1)
      {

        return view('clientes.index')->with('user',auth()->user());
      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para visualizar essa página.";
        flash($mensagem, 'danger');
        return redirect()->to('/');
      }

    }

    public function edit(User $user)
    {
        if(auth()->user()->type ==1)
        {
          return view('clientes.edit')->withUser($user);
        }
        else
        {
          $mensagem = "Desculpe, você não tem permissão para editar seus dados.";
          flash($mensagem, 'danger');
          return redirect()->to('/');
        }
    }

    public function update($id)
    {
      $user = Auth::user();
      $user->name = request()->input('name');
      $user->email =  request()->input('email');
      $user->password = \Hash::make($request->input('password'));
      $user->save();
      $mensagem = "Usuário " . $request->input('name') . " alterado com sucesso.";
      flash($mensagem, 'success');
      return view('clientes.index')->withUser($user);
    }



}
