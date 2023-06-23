<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Exception;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario; 
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->usuario->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return response()->json([
                'Message' => 'Usuário criado com sucesso',
                'Usuário:' => $this->usuario->create($request->all())
            ]);
        } catch (Exception $error) {
            $responseError = [
                'Erro' => "Erro ao criar usuário!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 500;
            return response() -> json($responseError, $statusHttp);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        try {
            $usuario->update($request->all());
            return response()->json([
                'Message' => 'Usuário atualizado com sucesso',
                'Usuário' => $usuario
            ]);
        } catch (Exception $error) {
            $responseError = [
                'Erro' => "Erro ao atualizar o usuário!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        try {
            $usuario->delete();
            return response()->json([
                'Message' => "Usuário removido com sucesso",
                'Usuário excluído' => $usuario
            ]);
        } catch(Exception $error) {
            $responseError = [
                'Message'=>"Erro ao excluir usuário!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = 500;
            return response()->json($responseError, $statusHttp);
        }
    }
}
