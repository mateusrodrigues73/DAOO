<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de produto</title>
</head>

<body>
    <h1>Atualize o produto</h1>
    <form action="{{route('produto.update', $produto->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" name="modelo" value="{{$produto->modelo}}"/></td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td><input type="text" name="marca" value="{{$produto->marca}}"/></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td><input type="text" name="categoria" value="{{$produto->categoria}}"/></td>
            </tr>
            <tr>
                <td>Informações:</td>
                <td><input type="text" name="informacoes" value="{{$produto->informacoes}}"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco" value="{{$produto->preco}}"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/produtos">
                        <button form=cancel >Cancelar</button>
                    </a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
