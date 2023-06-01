<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function index () {
$prods= Produto::all();


return view('produtos.index', ['prods'=> $prods ,]);

    }
    public function add () {
        return   view('produtos.add');
    }



    public function addsave (request $form){

        $dados = $form->validate([
            'name' => 'required|Unique:produtos|min:3',
            'price' =>'required|min:0|numeric',
            'quantity' => 'required| min:1|numeric|integer'
        ]);
        Produto::create($dados);
        return redirect() ->route('produtos');

    }
}
