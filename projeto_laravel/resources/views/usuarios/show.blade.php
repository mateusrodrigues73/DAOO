<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>
<body>
    <h1>Usuário</h1>
    @if (isset($usuario))
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Estatus</th>
                <th>Imagem</th>
                <th>Media de avaliações</th>
                <th>Total de avaliações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->sobrenome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{($usuario->estatus)?'Verificado':'Não verificado'}}</td>
                <td>{{$usuario->imagem}}</td>
                <td>{{$usuario->media_de_avaaliacoes}}</td>
                <td>{{$usuario->total_de_avaliacoes}}</td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Usuário não encontrado! </p>
    @endif
    <a href="/usuarios/">
        Voltar
    </a>
</body>
</html>