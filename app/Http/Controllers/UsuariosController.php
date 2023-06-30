<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $dados['password'] = Hash::make($dados['password']);
        Usuario::create($dados);
        return redirect()->route('usuarios.add');
    }

    public function logout()
    {
        //dd($form); -> Vardump e die
       Auth::logout();
        return redirect()->route('welcome');
    }


    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            $dados= $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
            if(Auth::attempt($dados)) {
                return redirect()->route('produtos');
            }
            else{
                return redirect()->route('login')->with('erro', 'deu ruim');
            }
        }
        return view('usuarios.login');
    }
}
