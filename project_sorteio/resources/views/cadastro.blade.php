@extends('layout.main')

@section('content')

<div class="formulariocadastro">

<h1>Cadastrar</h1>

    <form method="post" action="{{route('cadastrar')}}" >
        @csrf

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>


        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" required>

        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection