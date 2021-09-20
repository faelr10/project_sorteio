@extends('layout.main')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('danger'))

<div class="alert alert-danger">
    {{session('danger')}}
</div>

@endif

<form action="{{route('auth.user')}}" method="post">
    @csrf
    <label for="">Email</label>
    <input name="email" id="email" type="text">
    <label for="">Senha</label>
    <input name="password" id="password" type="text">
    <button type="submit">Entrar</button>
</form>

<div class="card5">
    <div class="imgbx">
        <img src="img/iphone.png" alt="">
    </div>

</div>
</div>



@endsection