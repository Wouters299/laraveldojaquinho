<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class ProdutosController extends Controller
{
    public function index () {
$prods= Produto::all();
$prods= Produto::withTrashed()->get();

return view('produtos.index', ['prods'=> $prods ,]);

    }
    public function add () {
        return   view('produtos.add');
    }



    public function addsave (request $form){

        $dados = $form->validate([
            'name' => 'required|Unique:produtos|min:3',
            'price' =>'required|gte:0|numeric',
            'quantity' => 'required| gte:1|numeric|integer'
        ]);
        Produto::create($dados);
        return redirect() ->route('produtos')->with('sucesso', 'Produto inserido com sucesso');

    }

public function editsave(request $form , Produto $produto) {

    $dados = $form->validate([
        'name' => ['required',
     Rule::unique('produtos')->ignore($produto->id),
        'min:3'],
        'price' =>'required|gte:0|numeric',
        'quantity' => 'required| gte:0|numeric|integer'
    ]);
    $produto->fill($dados);
    $produto->save();

    return redirect() ->route('produtos');
}

    public function view (Produto $produto) {
       return view ('produtos.view' , ['prod' => $produto , ]);
    }

    public function edit (Produto $produto) {

        return view ('produtos.add' , ['prod' => $produto , ]);
     }



public function delete (Produto $produto) {
return view('produtos.delete', ['prod'=> $produto,]);
}
public function deleteforreal (Produto $produto) {
$produto->delete();
return redirect()->route('produtos')->with('sucesso', 'produto apagado');
}
    }

