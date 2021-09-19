@extends('layout.main')

@section('content')

    <div class="comprar">
        <div class="numero">

        @php
            $quantidade = $resultados->quantidade;
        @endphp

            @for ($i = 1; $i <= $quantidade ; $i++)    

                <a href="" class="tijolinho">{{$i}}</a>

            @endfor

        </div>

        <div class="confirmarnumero">

        </div>
    </div>

@endsection