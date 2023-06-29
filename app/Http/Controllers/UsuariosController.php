<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function add()
    {
        return view('usuarios.add');
    }

    public function listAll()
    {
       $users = Usuario::all();
       return view('usuarios.index', [
           'users' => $users
       ]);
    }
    public function addSave(Request $form)
    {
        //dd($form); -> Vardump e die
        $dados = $form->validate([
            'name' => 'required',
            'password' => 'required',

        ]);
        Usuario::create($dados);
        return redirect()->route('usuarios.add');
    }
}
