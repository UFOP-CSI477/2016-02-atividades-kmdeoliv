<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('carrinhos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      session(['produto' =>  $request->input('produto_id')]);
      session(['quantidade' => $request->input('quantidade') ]);


      $id = $request->input('produto_id');
      $quantidade= $request->input('quantidade');
      $nome = $request->input('nome');
      $preco = $request->input('preco');
      $imagem = $request->input('imagem');
      return view('carrinhos.index')->with('nome',$nome)->with('preco',$preco)->with('imagem',$imagem);
    }


}
