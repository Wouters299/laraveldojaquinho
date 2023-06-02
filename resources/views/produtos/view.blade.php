@extends('includes.base')
@section('title', 'Produtos - Ver')
@section ('content')
<p href="{{route('produto.view'  , $prod->id)}}"> {{$prod->name}}</p>
        <p> R$ {{number_format($prod->price, 2 , ',', '.')}} </p>
        <p>  {{$prod->quantity}}  </p>
        <a href="{{ route('produtos')}}">voltar pagina</a>
@endsection
