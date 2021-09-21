<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="{{route('logar')}}" method="POST">
    {{ csrf_field() }}

        <label for="">E-mail</label>
        <input name="email" type="text">

        <label for="">Senha</label>
        <input name="senha" type="password">

        <button type="input">Entrar</button>

    </form>

</body>
</html>