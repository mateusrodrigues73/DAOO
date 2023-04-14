<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criação de produtos</title>
</head>

<body>
    <h1>Inserir produto</h1>
    <form action="/produto" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" name="modelo"/></td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td><input type="text" name="marca"/></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td><input type="text" name="categoria"/></td>
            </tr>
            <tr>
                <td>Informações:</td>
                <td><input type="text" name="informacoes"></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr>
                <td colspan="2"><a href="/produtos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>