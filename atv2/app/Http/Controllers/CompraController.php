<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use Session;
use DB;
use Carbon\Carbon;

class CompraController extends Controller

{
    public function __construct()
    {
          $this->middleware('auth');
    }

    public function index()
    {
          if(auth()->user()->type ==1)
          {
              $compras = Compra::with('produto')->where('user_id', auth()->user()->id)->get();

              return view('compras.index')->with('compras', $compras);
          }
          else
          {
            $mensagem = "Desculpe, você não tem permissão para visualizar uma compra.";
            flash($mensagem, 'danger');
            return redirect()->to('/home');
          }
          $request->session()->flush();

    }


    public function store(Request $request)
    {
      if(auth()->user()->type ==1)
      {
        Compra::create([
            'user_id'=> auth()->user()->id,
            'produto_id' => Session::get('produto'),
            'quantidade' => Session::get('quantidade'),
            'data' => Carbon::now(),
        ]);
        $mensagem = "Compra realizada com sucesso.";
        flash($mensagem, 'success');
      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para realizar uma compra.";
        flash($mensagem, 'danger');

      }
      $compras = Compra::with('produto')->where('user_id', auth()->user()->id)->get();
      return view('compras.index')->with('compras', $compras);
    }




}
