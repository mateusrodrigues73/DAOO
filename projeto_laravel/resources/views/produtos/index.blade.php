<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    @if ($produtos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Informações</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>
                    <a href="/produto/{{$produto->id}}">
                        {{$produto->id}}
                    </a>
                </td>
                <td>{{$produto->modelo}}</td>
                <td>{{$produto->marca}}</td>
                <td>{{$produto->categoria}}</td>
                <td>{{$produto->informacoes}}</td>         
                <td>{{$produto->preco}}</td>
                <td>
                    <a href="{{ route('produto.edit', $produto->id) }}">
                        <button>Editar</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('produto.delete', $produto->id) }}">
                        <button>Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Produtos não encontrados! </p>
    @endif
    <div>
        <a href="/produto">
            <button>Criar</button>
        </a>
    </div>
</body>
</html>