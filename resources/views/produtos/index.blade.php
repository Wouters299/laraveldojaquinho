@extends('includes.base')

@section('title' , 'Produtos')
@section('content3')
<table style="border-color:gold" border="3">
    <tr>
        <th> nome </th>
        <th> preco</th>
        <th>  quantidade </th>
    </tr>

@foreach ( $prods as $prod )


    <tr>
        <td> {{$prod->name}} </td>
        <td> R$ {{number_format($prod->price, 2 , ',', '.')}} </td>
        <td>  {{$prod->quantity}}  </td>
    </tr>

    @endforeach
</table>

<br>
<a href="{{ route('produtos.add')}}">adicionara produto</a>
@endsection
