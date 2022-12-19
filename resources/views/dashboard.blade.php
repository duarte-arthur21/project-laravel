@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Proximas Visitas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($visitas)> 0 )
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Horario</th>
                <th scope="col">Data</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td scropt="row">{{$loop->index+1}}</td>
                <td><a href="/visita/{{$visita->id}}">{{$visita->title}}</a></td>
                <td>0</td>
                <td>
                    <a href="/consultaVisita/edit/{{visita->id}}" class="btn btn-info edit-btn">Editar</a>
                    <form action="/consultaVisita/{{$visita->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem Visitas, <a href="/agendar"></a></p>
    @enif
</div>
@endsection