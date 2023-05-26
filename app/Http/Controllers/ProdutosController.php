<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function index () {
return view('produtos.index');
    }
    public function add () {
        return   view('produtos.add');
    }

    public function view () {

    }

    public function addsave (request $form){
        dd($form);
    }
}
