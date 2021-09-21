<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


    <title>Document</title>

    <!--FONTES GOOGLE-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oldenburg&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap');
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


    <!--IMPORT ICONS-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--IMPORT BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="{{URL::asset('js/script.js')}}"></script>

</head>


<body>

    <div class="corpo">

        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!--MENU-->

        <div class="menu">

            <div class="menucentral">
                <a href="{{URL::asset('/')}}">Inicio</a>
                <a href="">Sorteios</a>
                <a href="{{URL::asset('/sorteio/create')}}">Criar Sorteio</a>
            </div>

            <div class="menuentrar">

                @auth

                <div class="menuperfilprincipal">

                    <a href="{{URL::asset('dashboard')}}">
                        <ion-icon id="iconperfil" name="person-circle-outline"></ion-icon>
                    </a>

                    <div class="submenuperfilprincipal">
                        <a href="{{URL::asset('dashboard')}}">Meu Perfil</a>
                        <a href="{{URL::asset('dashboard')}}">Minhas Rifas</a>
                        <a href="{{URL::asset('dashboard')}}">Carteira</a>
                        <a href="{{route('logout')}}">Sair</a>
                        </form>
                    </div>


                </div>

                @endauth

                @guest
                <div class="menuperfilprincipal">

                    <a href="{{route('cadastro')}}">
                        Cadastrar
                    </a>

                    <a href="{{route ('login')}}">
                        Entrar
                    </a>




                </div>
                @endguest
            </div>

        </div>


        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!--FLASH-MESSAGE-->

        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif


        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!--CONTEÚDO-->

        @yield('content')


        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!--FOOTER-->

        <div class="footer">
            Criado por: Rafael Victor Boscato
        </div>


        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->

    </div>

</body>

</html>