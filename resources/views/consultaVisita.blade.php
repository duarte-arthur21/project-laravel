@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'MCPAC')

@section('content')
       <!-- Page Content  -->
       <div id="content">       
         <div class="container-fluid">
          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
          <form action="/consultaVisita" method="GET">
              <input type="text" name="search" placeholder="Buscar" class="form-control" data-target="all">
          </form>
            @if($search)
            <h3 id="title-mc-2" class="text-center mb-4">BUSCANDO POR: {{$search}}</h3>
            @else
            <h3 id="title-mc-2" class="text-center mb-4">PROXIMAS VISITAS</h3>
            @endif
            
            <div class="card-body">
            @foreach($visitas as $visita)
              <div class="col-md-10 offset-md-1">
                <div class="row">
                  <div id="info-container" class="col-md-6">
                  <p class="event-city">Código: {{$visita->id}}</p>
                  <h3>Data:
                      <b>{{date('d/m/y', strtotime($visita->date)) }}</b>
                         <span><i>Horário: {{$visita->horario}}</i></span>
                  </h3>
                  <p class="event-city">{{$visita->descricao}}</p>
                  <p class="event-city">Agendada por: {{$visitasOwner['name']}}</p>
                  </div>
                </div>
              </div>
            @endforeach
            @if(count($visitas)==0 && $search)
              <p> Não foi possivel encontrar nenhum evento com {{$search}}}! <a href="/">Ver Todos!</a></p>
            @elseif(count($visitas)==0)
              <p> Não há proximas Visitas</p>
            @endif
        <!-- Example single danger button -->
        
        <div class="col-md-8 col-md-offset-2 btn btn-outline">
          <div class="pull-right">
              <div class="form-group">
                 <div id="sidebarCollapse" class="card-body">

                    <input type="button" value="Concluido" class="btn btn-success btn-filter" data-target="concluido">
                    <a href="/visita" type="button" value="Agendado" class="btn btn-warning btn-filter" data-target="agendado">Agendado</a>
                    <input type="button" value="Cancelar" class="btn btn-danger btn-filter" data-target="cancelado">
                 </div>       
               </div>
            </div>           
          </div>
        </div>   
      </div>
    </div>
</div>
@endsection