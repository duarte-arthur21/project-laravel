@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'MCPAC')

@section('content')
 
       <!-- Page Content  -->
       <div id="content">       
         <div class="container-fluid">
          <!-- Basic Card Example style="background-image: url('/img/Planodefundo/background-museu.png')" -->
          <div class="card shadow mb-4">
          <div class="card-body">
          <div id="search-container" class="col-md-20">
              <h3 id="title-mc-2" class="text-center mb-4">BUSQUE UM USUARIO</h3>

              <form action="">
                <input id="search" name="search"
                        class="btn btn-light col-sm-10" 
                        type="text" placeholder="Nome...">
              </form>
          </div>

 <!--  
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Senha</th>
                  <th scope="col">Data</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td><</td>
                  <td> </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
               
              </tbody>
            </table>
            -->
            </div>
            <div class="card-body">
            <div id="users-container" class="col-md-10">
              <h3 id="title-mc-2" class="text-center mb-4">Todos os Usuarios Cadastrados</h3>

              <div id="cards-container" class="row">
              @foreach($user as $usuario)
              <div id="Feed" class="card2 mb-2">
                <figure class="img">
                  <img src="/img/users/{{ $usuario->image}}" class="img-fluid" alt="{{$usuario->name}}">
                </figure>
                  <div class="card-body">
                  <p class="card-date">Código ID: {{$usuario->id}}</p>
                  <a class="txt desc" target="_blank"><b>{{$usuario->name}}</b></a>
                  <p class="card-participants"> {{$usuario->email}} -- {{$usuario->created_at}}</p>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
            </div>

              <div id="sidebarCollapse" class="card-body">
                  <a href="" type="button" class="col-sm-6 btn btn-outline"></a>                                     
                  <a href="" type="button" class="btn btn-primary">Salvar</a>
                  <a href="" type="button" class="btn btn-primary">Excluir</a>
                  <a href="" type="button" class="btn btn-primary">Cancelar</a>
              </div>
         </div>
       </div>
     </div>
     </div>
@endsection