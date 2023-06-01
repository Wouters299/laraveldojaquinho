@extends('includes.base')

@section('title', 'produtos - adicionar')

@section('content')
<h2>Adicione seu produto</h2>

@if ($errors)
@foreach ($errors->all() as $err)

 {{$err}} <br>
@endforeach
@endif
<a href="{{ route('produtos')}}">voltar pagina</a>


<form action="{{ route('produtos.addsave')}}" method="post" >
@csrf
<input type="text" name="name" placeholder="nome do produto">
<br>
<input type="number" name="price" placeholder="preço do produto" step="0.01" min="0">
<br>
<input type="number" name="quantity" placeholder="quantidade" min="0">
<hr width="100%" align="left" color="red" >
<input type="submit"  value="gravar">
</form>
@endsection
