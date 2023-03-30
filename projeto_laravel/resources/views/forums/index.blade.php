<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fóruns</title>
</head>
<body>
    <h1>Fóruns</h1>
    @if ($forums->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Tema</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forums as $forum)
            <tr>
                <td>
                    <a href="/forum/{{$forum->id}}">
                        {{$forum->id}}
                    </a>
                </td>
                <td>{{$forum->titulo}}</td>
                <td>{{$forum->tema}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Fóruns não encontrados! </p>
    @endif
</body>
</html>
