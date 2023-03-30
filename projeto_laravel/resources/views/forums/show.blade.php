<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
</head>
<body>
    <h1>Fórum</h1>
    @if (isset($forum))
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Tema</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$forum->id}}</td>
                <td>{{$forum->titulo}}</td>
                <td>{{$forum->tema}}</td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Fórum não encontrado! </p>
    @endif
    <a href="/forums/">
        Voltar
    </a>
</body>
</html>