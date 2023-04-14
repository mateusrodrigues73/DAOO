<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $newProduto = $request->all();
        if (!Produto::create($newProduto)) {
            dd("Error ao criar produto!!");
        }
        return redirect('/produtos');
    }

    public function edit($id)
    {
        return view('produtos.edit',[
            'produto'=>Produto::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $newProduto = $request->all();
        if (!Produto::find($id)->update($newProduto)) {
            dd("Error ao criar produto!!");
        }
        return redirect('/produtos');
    }

    public function delete($id)
    {
        return view('produtos.delete',[
            'produto'=>Produto::find($id)
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if($request->has('confirmar'))
            if (!Produto::destroy($id))
                dd("Error ao deletar produto!!");

        return redirect('/produtos');
    }
}
