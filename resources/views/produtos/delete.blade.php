@extends('includes.base')
@section('title', 'Produtos')

@section('content')

<h2>apagar</h2>
<p>tem certeza que deseja apagar {{$prod->name}} ? </p>
<p>certeza ?</p>
<form action="{{ route('produtos.deleteforreal', $prod->id)}}" method="post" >
    @csrf
    @method('delete')

    <input type="submit" value="apagar">
</form>
@endsection
