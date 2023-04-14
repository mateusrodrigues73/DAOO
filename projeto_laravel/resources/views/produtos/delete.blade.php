<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar produto</title>
</head>
<body>
    @if ($produto)
        <h1>{{$produto->modelo}}</h1>
        <ul>
            <li>Marca: {{ $produto->marca }}</li>
            <li>Categoria: {{ $produto->categoria }}</li>
            <li>Informações: {{ $produto->informacoes }}</li>
            <li>Preço: {{ $produto->preco }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('produto.remove', $produto->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/produtos"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>Produto não encontrados! </p>
    @endif
    <a href="/produtos">&#9664;Voltar</a>
</body>
</html>