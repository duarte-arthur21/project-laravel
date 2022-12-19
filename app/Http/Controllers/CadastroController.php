<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Monitor;


class CadastroController extends Controller
{
    public function createusers(Request $request){
        $user = new User;
        //Campos da tabela
        $user->name = $request->name;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->password = $request->password;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("Now")) . "." . $extension;

            $requestImage->move(public_path('img/users'), $imageName);

            $user->image = $imageName;

        }

        $user->save();

        return redirect('/')->with('msg','Usuario Cadastrado com Sucesso!');
    }

    public function createmonitors(Request $request){
        $user = new Monitor;
        //Campos da tabela
        $user->name = $request->name;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->projeto = $request->projeto;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("Now")) . "." . $extension;

            $requestImage->move(public_path('img/monitores'), $imageName);

            $user->image = $imageName;
        }

        $user->save();

        return redirect('/')->with('msg','Usuario Cadastrado com Sucesso!');
    }
}


