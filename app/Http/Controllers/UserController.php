<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Monitor;

class UserController extends Controller
{
    public function perfil(){

        $user = User::all();

        return view('perfil',['user'=>$user]);
    }
    public function sobrenos(){

        $user = Monitor::all();;

        return view('sobrenos',['user'=>$user]);
    }
}
