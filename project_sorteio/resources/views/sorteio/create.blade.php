@extends('layout.main')

@section('content')

<div class="containerformulario">

    <div class="mb-5">
        <h1>Criar Rifa</h1>
    </div>

    <form method="POST" action="/sorteio">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome da Rifa</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantidade de números</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Selecione o valor de cada número</label>
            <select class="form-select" aria-label="Default select example" id="valor" name="valor">
                <option value="1">10$</option>
                <option value="2">20$</option>
                <option value="3">50$</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Porcentagem do ganhador</label>
            <select class="form-select" aria-label="Default select example" id="porcentagem" name="porcentagem" >
                <option value="1">5%</option>
                <option value="2">10%</option>
                <option value="3">15%</option>
                <option value="3">20%</option>
                <option value="3">25%</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image">Imagem do Evento</label>
            <input type="file" id="image" required name="image" class="form-control-file">
        </div>


        <button type="submit" class="btn btn-primary">Criar Evento</button>
    </form>



</div>















@endsection