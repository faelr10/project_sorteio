@extends('layout.main')

@section('content')

<div class="perfilcorpo">

    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->
    <!--MENU LATERAL-->

    <div class="dashboardLateral">

        <div class="fotoperfil">
            <img src="img/iphone.png" alt="">
        </div>

        <div class="containertopicosperfil">

            <div class="topicosperfil">
                <p>Meu perfil</p>
            </div>
            <div class="topicosperfil">
                <p>Minhas Rifas</p>
            </div>
            <div class="topicosperfil">
                <p>Carteira</p>
            </div>
            <div class="topicosperfil">
                <p>Sair</p>
            </div>

        </div>

    </div>

    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->
    <!--RESULTADOS-->

    

    <div class="resultados">

    <h1>Seja bem-vindo(a) {{ Auth::user()->nome }}!</h1>

    @foreach($resultados as $resultados)
        <div class="carddash">
            <div class="cardtopicos">
                <h1>{{$resultados->nome}}</h1>
                <h2 class="numeros">{{$resultados->quantidade}}</h2>
                <a href="{{route('comprarrifa',$resultados->id)}}" class="valor">Valor arrecadado: R$ 205</a>
            </div>
        </div>
    @endforeach

    </div>
</div>




@endsection