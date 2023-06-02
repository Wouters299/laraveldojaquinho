@extends('includes.base')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@section('title' , 'Produtos')
@section('content3')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">nome</th>
        <th scope="col">price</th>
        <th scope="col">quantidae</th>
      </tr>
    </thead>



@foreach ( $prods as $prod )


    <tr>
        <td><a href="{{route('produto.view'  , $prod->id)}}"> {{$prod->name}} </a> </td>
        <td> R$ {{number_format($prod->price, 2 , ',', '.')}} </td>
        <td>  {{$prod->quantity}}  </td>
    </tr>

    @endforeach
</table>

<br>
<a href="{{ route('produtos.add')}}">PRODUTOS ADD <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
  </svg></a>
@endsection

