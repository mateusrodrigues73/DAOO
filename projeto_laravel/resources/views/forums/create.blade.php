<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criação de fórum</title>
</head>

<body>
    <h1>Inserir fórum</h1>
    <form action="/forum" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="titulo"/></td>
            </tr>
            <tr>
                <td>Tema:</td>
                <td><input type="text" name="tema"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr>
                <td colspan="2"><a href="/forums" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>