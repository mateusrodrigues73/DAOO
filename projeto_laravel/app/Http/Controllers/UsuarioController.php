<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index()
    {
        return view('usuarios.index', ['usuarios'=>$this->usuario->all()]);
    }

    public function show($id)
    {
        return view('usuarios.show', ['usuario'=>$this->usuario->find($id)]);
    }
}
