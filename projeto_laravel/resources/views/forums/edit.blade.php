<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de fórum</title>
</head>

<body>
    <h1>Atualize o fórum</h1>
    <form action="{{route('forum.update', $forum->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="titulo" value="{{$forum->titulo}}"/></td>
            </tr>
            <tr>
                <td>Tema:</td>
                <td><input type="text" name="tema" value="{{$forum->tema}}"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/forums">
                        <button form=cancel >Cancelar</button>
                    </a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
