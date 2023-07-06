@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Entre pro cla</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('usuarios.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <br>
        <input type="text" name="password" placeholder="senha">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="submit" value="Adiconar User">

    </form>

@endsection
