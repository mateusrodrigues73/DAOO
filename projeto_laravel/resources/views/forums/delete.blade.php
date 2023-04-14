<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar fórum</title>
</head>
<body>
    @if ($forum)
        <h1>{{ $forum->titulo }}</h1>
        <ul>
            <li>Tema: {{ $forum->email }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('forum.remove', $forum->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/forums"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>Fórum não encontrados! </p>
    @endif
    <a href="/forums">&#9664;Voltar</a>
</body>
</html>