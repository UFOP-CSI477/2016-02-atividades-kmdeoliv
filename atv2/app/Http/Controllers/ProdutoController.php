<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Compra;
use Illuminate\Http\Request;
use Session;
use DB;


class ProdutoController extends Controller

{
    public function __construct()
    {
          $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
          $produtos = produto::all();
          return view('produtos.index')->with('produtos', $produtos);
    }

    public function create()
    {
      if(auth()->user()->type ==2)
      {
          return view('produtos.create');
      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para criar um produto.";
        flash($mensagem, 'danger');
        return redirect()->route('produtos.index');
      }
    }

    public function store(Request $request)
    {
      Produto::create([
          'nome' => $request->input('nome'),
          'preco' => $request->input('preco'),
          'imagem' =>$request->input('imagem'),
      ]);
      $mensagem = "Produto " . $request->input('nome') . " adicionado com sucesso.";
      flash($mensagem, 'success');

      return redirect()->back();
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show')->withProduto($produto);
    }

    public function edit(Produto $produto)
    {
        if(auth()->user()->type ==2||auth()->user()->type ==3)
        {
          return view('produtos.edit')->withProduto($produto);
        }
        else
        {

          $mensagem = "Desculpe, você não tem permissão para editar um produto.";
          flash($mensagem, 'danger');
          return redirect()->route('produtos.index');
        }
    }

    public function update(Request $request, Produto $produto)
    {
        if(auth()->user()->type ==2)
        {
        $produto->update($request->all());
        $mensagem = "Produto " . $request->input('nome') . " alterado com sucesso.";
        flash($mensagem, 'success');
        }
        elseif (auth()->user()->type ==3)
        {
          $produto->nome = $produto->nome;
          $produto->preco = $request->input('preco');
          $produto->imagem = $request->input('imagem');
          $produto->update();
          $mensagem = "Produto " . $request->input('nome') . " alterado com sucesso.";
          flash($mensagem, 'success');
        }
        else
        {
          $mensagem = "Desculpe, você não tem permissão para editar um produto.";
          flash($mensagem, 'danger');
        }

        return view('produtos.edit')->withProduto($produto);
    }

    public function destroy(Produto $produto)
    {
      if(auth()->user()->type ==2)
      {
        $compras = DB::table('compras')->where('produto_id', $produto->id)->first();

        if($compras)
        {
          debug($compras);
          flash('Produto aparece em uma compra.','danger');

        }
        else{
          $produto->delete();
          flash('Produto deletado com sucesso.','success');
        }

      }
      else
      {
        $mensagem = "Desculpe, você não tem permissão para deletar produtos.";
        flash($mensagem, 'danger');
      }
        return redirect()->route('produtos.index');
    }


}
