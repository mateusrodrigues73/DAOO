<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index()
    {
        return view('produtos.index', ['produtos'=>$this->produto->all()]);
    }

    public function show($id)
    {
        return view('produtos.show', ['produto'=>$this->produto->find($id)]);
    }
}
