@extends('layout.main')

@section('content')

<div class="formulariologin">

<h1>Login</h1>

    <form method="post" action="{{route('logar')}}" >
        @csrf
        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1">

        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection