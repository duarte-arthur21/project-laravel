@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Editando:'.$visita->title)

@section('content')
       <!-- Page Content  -->
       <div id="content">       
         <div class="container-fluid">
          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <h3 id="title-mc-2" class="text-center mb-4">Editando: {{$visita->title}}</h3>

            <div class="card-body">
        <!-- Example single danger button -->
        
        <div class="col-md-8 col-md-offset-2 btn btn-outline">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="rounded-left">
              <div class="row">

                  <form action="/consultaVisita/update/{{$visita->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')          
                  <div id="coluna">
                  <select name="horario" class="btn btn-secondary btn-lg dropdown-toggle" type="button" 
                              data-bs-toggle="dropdown" rows="10"  value="{{$visita->horario"}}>
                           <option class="dropdown-menu" name="horario" aria-labelledby="dropdownMenuButton1">Selecione um Horario</option>
                           <option class="dropdown-item" name="horario" value="09:00">09:00 am</option>
                           <option class="dropdown-item" name="horario" value="09:30">09:30 am</option>
                           <option class="dropdown-item" name="horario" value="10:00">10:00 am</option>
                           <option class="dropdown-item" name="horario" value="10:30">10:30 am</option>
                           <option class="dropdown-item" name="horario" value="11:00">11:00 am</option>
     
                           <option class="dropdown-item" name="horario" value="14:00">14:00 am</option>
                           <option class="dropdown-item" name="horario" value="14:30">14:30 am</option>
                           <option class="dropdown-item" name="horario" value="15:00">15:00 am</option>
                           <option class="dropdown-item" name="horario" value="15:30">15:30 am</option>
                           <option class="dropdown-item" name="horario" value="16:00">16:00 am</option>
                           <option class="dropdown-item" name="horario" value="16:00">16:30 am</option>
                    </select>
                  </div>
                  
                  <div id="coluna">
                      <label for="date">Data do evento:</label>
                      <input type="date" class="form-control" id="date" name="date" value="{{$visita->date->format('y-m-d'}}">
                </div>

                <div id="coluna">
                    <label >Alguma observação?</label>
                      <textarea class="form-control" cols="60" rows="5" name="descricao">{{$visita->descricao}}"</textarea>
                 </div>
            </div>
            <div id="row">
                    <input type="submit" class="btn btn-success" value="CADASTRAR">
                    <input type="submit" class="btn btn-danger" value="CANCELAR">
            </div>       
      </div>
</form>

                  </div>             
              </div>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-2 btn btn-outline">
              <div class="pull-right">
                 
                </div>           
            </div>

            </div>
          </div>

          <div class="col-md-6 col-md-offset-2 btn btn-outline">
              <div class="pull-right">
                         
            </div>
</div>
@endsection