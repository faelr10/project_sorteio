<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro</h1>

    <form action="{{route('cadastrar')}}" method="POST">
    {{ csrf_field() }}

        <label for="">Nome</label>
        <input name="nome" type="text">

        <label for="">CPF</label>
        <input name="cpf" type="text">

        <label for="">E-mail</label>
        <input name="email" type="email">

        <label for="">Nome de usuário</label>
        <input name="login" type="text">

        <label for="">Senha</label>
        <input name="senha" type="password">

        <button type="input">Cadastrar</button>

    </form>

</body>

</html>