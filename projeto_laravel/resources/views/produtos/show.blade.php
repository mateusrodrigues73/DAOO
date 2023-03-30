<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <h1>Produto</h1>
    @if (isset($produto))
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
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->modelo}}</td>
                <td>{{$produto->marca}}</td>
                <td>{{$produto->categoria}}</td>
                <td>{{$produto->informacoes}}</td>         
                <td>{{$produto->preco}}</td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Produto não encontrado! </p>
    @endif
    <a href="/produtos/">
        Voltar
    </a>
</body>
</html>