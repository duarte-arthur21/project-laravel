<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function show(){
       return view('login');
    }

    public function auth(Request $request){
        $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required'
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
           
            return redirect('/')->with('msg','Usuario Logado com Sucesso!');
        }else{
                return redirect()->back()->with('danger', 'E-mail ou senha invalido'); 
              //return back()->withErrors(['login' => 'Email ou senha incorretos.']);
       }

        }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}