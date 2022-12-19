<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;
use App\Models\User;

class VisitaController extends Controller
{
    public function createvisita(){
        return view('agendamento');
    }
    public function ConsultaVisita(){
        $search = request('search');

        if($search){
            $visitas = Visita::where([
                ['date','like','%'.$search.'%']
            ])->get();
        }else {
            $visitas = Visita::all();
        }
        return view('consultaVisita',['visitas'=>$visitas, 'search'=>$search]);
    }
    public function store(Request $request){
        $visitas = new Visita;
        //Campos da tabela 
        $visitas->horario = $request->horario;
        $visitas->date = $request->date;
        $visitas->descricao = $request->descricao;

        //$user = auth()->user();
        //$visitas->user_id = $user->id;
        $visitas->save();

        return redirect('/visita')->with('msg','Visita Agendada com Sucesso!');
    } 
    public function show($id){
        $visitas = Visita::findOrFail($id);

        $visitasOwner = User::where('id', $visitas->user_id)->first()->toArray();

        return view('consultaVisita', ['visitas'=>$visitas, 'visitasOwner'=>$visitasOwner]);
    }
    public function dashboard(){
        $user = auth()->user();

        $agendamento = $user->agendamento;

        return view("dashboard", ['visitas'=>$visitas]);
    }
    public function destroy($id){
        Visita::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Visita excluida com sucesso!');
    }
    public function edit($id){
        Visita::findOrFail($id)->delete();

        return view('editVisita', ['visita'=>$visita]);
    }
    public function update(Request $requet){
        Visita::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Visita editada com sucesso!');
    }
}


