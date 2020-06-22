<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('usuario-list', compact('users'));
    }

    public function create()
    {
       // $clientes = Cliente::all();
        return view('usuario-new');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);

        if(isset($user)) {
            return view('usuario-edit', compact('user'));
        }

        return redirect('/');

    }


    public function store(Request $request)
    {


        $message = [
            'required' => 'Campo Obrigatório',
            'integer' => 'Insira um valor válido',
        ];


        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'birth_date' => 'required'
        ], $message);

        $user = new Users();

        $user->nome = $request->input('nome');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->celular = $request->input('tel');
        $user->categoria = $request->input('categoria');
        $user->birth_date = $request->input('birth_date');
        $user->save();

        return redirect('/');
    }

    public function update(Request $request, $id)
    {

        $user = Users::find($id);

        if(isset($user)) {
            $user->nome = $request->input('nome');
            $user->cpf = $request->input('cpf');
            $user->email = $request->input('email');
            $user->celular = $request->input('tel');
            $user->categoria = $request->input('categoria');
            $user->birth_date = $request->input('birth_date');
            $user->save();


        }

        return redirect('/');

    }


    public function destroy($id)
    {


        $user = Users::find($id);

        if(isset($user)){
            $user->delete();
        }

        return redirect('/');
    }

}
