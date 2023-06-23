<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
use Exception;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $produtosPaginated = Produto::paginate($perPage);
        $produtosPaginated->appends([
            'per_page' => $perPage
        ]);
        return response() -> json($produtosPaginated);
    }

    public function show($id)
    {
        try {
            return response() -> json(Produto::findOrFail($id));
        } catch (Exception $error) {
            $responseError = [
                'Erro' => "O produto de id $id não foi encontrado!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response() -> json($responseError, $statusHttp);
        }
    }

    public function store(ProdutoRequest $request)
    {
        try {
            $newProduto = $request->all();
            $newProduto['preco'] = floatval($newProduto['preco']);

            $storedProduto = Produto::create($newProduto);
            return response()->json([
                'Message' => "Produto inserido com sucesso",
                'Produto' => $storedProduto
            ]);
        } catch(Exception $error) {
            $responseError = [
                'Erro' => "Erro ao inserir novo produto!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 500;
            return response() -> json($responseError, $statusHttp);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $updateProduto = $request->all();
            $updateProduto['preco'] = floatval($updateProduto['preco']);
            $produto = Produto::findOrFail($id);
            $produto->update($updateProduto);
            return response()->json([
                'Message'=>"Produto de id $id atualizado com sucesso",
                'Produto'=>$produto
            ]);
        } catch (Exception $error) {
            $responseError = [
                'Message'=>"Erro ao atualizar produto de id $id!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    public function remove($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            $produto->delete();
            return response()->json([
                'Message'=>"Produto de id:$id removido com sucesso",
                'Produto excluído'=>$produto
            ]);
        } catch(Exception $error) {
            $responseError = [
                'Message'=>"Erro ao excluir produto de id $id!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }
}
