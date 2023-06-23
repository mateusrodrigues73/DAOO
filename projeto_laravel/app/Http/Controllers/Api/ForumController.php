<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;

class ForumController extends Controller
{
    private $forum;

    public function __construct(Forum $forum)
    {
        $this->forum = $forum; 
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->forum->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'titulo' => 'required',
                'tema' => 'required',
            ]);
            return response()->json([
                'Message' => 'Fórum criado com sucesso',
                'Fórum' => $this->forum->create($request->all())
            ]);
        } catch (Exception $error) {
            $responseError = [
                'Erro' => "Erro ao criar novo fórum!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 500;
            return response() -> json($responseError, $statusHttp);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        return $forum;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        try {
            $forum->update($request->all());
            return response()->json([
                'Message' => 'Fórum atualizado com sucesso',
                'Fórum' => $forum
            ]);
        } catch (Exception $error) {
            $responseError = [
                'Erro' => "Erro ao atualizar o fórum!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        try {
            $forum->delete();
            return response()->json([
                'Message' => "Fórum removido com sucesso",
                'Fórum excluído' => $forum
            ]);
        } catch(Exception $error) {
            $responseError = [
                'Message'=>"Erro ao excluir fórum!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }
}
