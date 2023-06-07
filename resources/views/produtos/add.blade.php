@extends('includes.base')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('title', 'produtos - adicionar')

@section('content')
<h2>Adicione seu produto</h2>

@if ($errors)
@foreach ($errors->all() as $err)

 {{$err}} <br>
@endforeach
@endif


<form action="{{url()->current()}}" method="post">
@csrf
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="nome do produto" value="{{ old ('name' ,$prod->name ??'')}}">
<br>
<input type="number"  class="form-control" name="price" placeholder="preço do produto" step="0.01" min="0.1" value="{{ old ('price' ,$prod->price ??'')}}">
<br>
<input type="number"  class="form-control" name="quantity" placeholder="quantidade" min="0" value="{{ old ('quantity' ,$prod->quantity ??'')}}">

<div style="text-align: center; height='100px' , weight='100px'">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
<hr width="100%" align="left" color="black" >
<a href="{{ route('produtos')}}">voltar pagina</a>



  @endsection
