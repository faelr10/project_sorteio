@extends('layout.main')

@section('content')


<div class="perfilcorpo">

    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->
    <!--MENU LATERAL-->

    <div class="dashboardLateral">

        <div class="fotoperfil">
            <img src="img/rs.png" alt="">
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

        <h1>Minhas Rifas</h1>

        <div class="container" id="containerresultados">

            <div class="row" id="row">
                <div class="col-3">Nome</div>
                <div class="col-3">Numeros</div>
                <div class="col-2">Valor</div>
                <div class="col-2">Prêmio</div>
                <div class="col-1">Editar</div>
                <div class="col-1">Sortear</div>
            </div>

            @foreach($resultados as $resultados)
            <div class="row" id="rowresultados">
                <div class="col-3">{{$resultados->nome}}</div>
                <div class="col-3">{{$resultados->quantidade}}</div>
                <div class="col-2">${{$resultados->valor}}</div>
                <div class="col-2">{{$resultados->porcentagem}}%</div>
                <div class="col-1"><a href="">
                        <ion-icon name="construct-outline" style="font-size: 20px; color:black;"></ion-icon>
                    </a></div>
                <div class="col-1"><a href="">
                        <ion-icon name="podium-outline" style="font-size: 20px; color:black;"></ion-icon>
                    </a></div>
            </div>
            @endforeach

        </div>

        


    </div>



    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->


</div>

@endsection