<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    @if ($usuarios->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Estatus</th>
                <th>Imagem</th>
                <th>Administrador</th>
                <th>Media de avaliações</th>
                <th>Total de avaliações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>
                    <a href="/usuario/{{$usuario->id}}">
                        {{$usuario->id}}
                    </a>
                </td>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->sobrenome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{($usuario->estatus)?'Verificado':'Não verificado'}}</td>
                <td>{{$usuario->imagem}}</td>
                <td>{{($usuario->administrador)?'Sim':'Não'}}</td>
                <td>{{$usuario->media_de_avaliacoes}}</td>
                <td>{{$usuario->total_de_avaliacoes}}</td>
                <td>
                    <a href="{{ route('usuario.edit',$usuario->id) }}">
                        <button>Editar</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('usuario.delete',$usuario->id) }}">
                        <button>Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuários não encontrados! </p>
    @endif
    <div>
        <a href="/usuario">
            <button>Criar</button>
        </a>
    </div>
</body>
</html>