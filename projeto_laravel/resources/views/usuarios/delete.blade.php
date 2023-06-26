<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar usuário</title>
</head>
<body>
    @if ($usuario)
        <h1>{{ $usuario->nome . ' ' . $usuario->sobrenome}}</h1>
        <ul>
            <li>Email: {{ $usuario->email }}</li>
            <li>Senha: {{ $usuario->senha }}</li>
            <li>Estatus: {{ $usuario->email }}</li>
            <li>Imagem: {{ $usuario->imagem }}</li>
            <li>Papel: {{ $usuario->papel }}</li>
            <li>Média de avaliações: {{ $usuario->media_de_avaliacoes }}</li>
            <li>Total de avaliações: {{ $usuario->total_de_avaliacoes }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('usuario.remove',$usuario->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/usuarios"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>Usuário não encontrados! </p>
    @endif
    <a href="/usuarios">&#9664;Voltar</a>
</body>
</html>