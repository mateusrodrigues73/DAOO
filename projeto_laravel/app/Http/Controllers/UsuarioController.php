<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $newUsuario = $request->all();
        if (!Usuario::create($newUsuario)) {
            dd("Error ao criar usuário!!");
        }
        return redirect('/usuarios');
    }

    public function edit($id)
    {
        return view('usuarios.edit',[
            'usuario'=>Usuario::find($id)
        ]);
    }

    public function update(Request $request,$id)
    {
        $newUsuario = $request->all();
        if (!Usuario::find($id)->update($newUsuario)) {
            dd("Error ao criar usuário!!");
        }
        return redirect('/usuarios');
    }

    public function delete($id)
    {
        return view('usuarios.delete',[
            'usuario'=>Usuario::find($id)
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if($request->has('confirmar'))
            if (!Usuario::destroy($id))
                dd("Error ao deletar usuário!!");

        return redirect('/usuarios');
    }

}
