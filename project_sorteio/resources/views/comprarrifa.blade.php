@extends('layout.main')

@section('content')

    <div class="comprar">
        <div class="numero">

        
        @for($i=1;$i<=$quantidade;$i++)

        <div id="{{$i}}" onClick="clicar(this.id)" class="tijolinho">{{$i}}</div>
        
        @endfor

        


        </div>

        <div class="confirmarnumero">

            <div class="confirmarnumerotitulo">
                <h1>{{$resultados->nome}}</h1>
            </div>

            <div class="confirmarnumerovalor">
                <p>Valor da rifa: {{$resultados->valor}}$</p>
                <p class="numeroteste">{{$quantidade}}</p>
            </div>

            <div class="confirmarnumeroporcentagem">
                <p>Porcentagem do prêmio: {{$resultados->porcentagem}}%</p>
            </div>

            <div class="confirmarnumeroquantidade">
                <p>Números escolhidos: </p>
            </div>

            <div class="confirmarnumerovalorfinal">
                <p> Valor final: 0$</p>
            </div>

            <div class="confirmarnumerocomprar">
                <a onclick="fim()" class="comprarfim" href="">Comprar</a>
            </div>

        </div>
    </div>

@endsection