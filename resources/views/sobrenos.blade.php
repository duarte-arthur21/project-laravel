@extends('layouts.apoio')
@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'MCPAC')

@section('content')

       <!-- Page Content  -->
       <div id="content">       
         <div class="container-fluid">
          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <div>           
              <div id="title_quem_somos" class="card-body"><b>NOSSO TIME</b></div>
              <h3 id="title_nossa_historia"><b>Conheça os nossos monitores</b></h3>    
            </div>

            <div class="card-body mb-4">
              <!--Personas 1ª coluna-->  
              <div class="row">

              @foreach($user as $usuario)
                <div id="coluna">
                  <figure>
                  <img title="cicle" src="/img/monitores/{{ $usuario->image}}"
                      width="150" height="140" id="persona">

                      <figcaption>Código ID: {{$usuario->id}}</figcaption>
                      <figcaption><b>{{$usuario->name}}</b></figcaption>
                      <figcaption>{{$usuario->email}}</figcaption>
                </figure>
                </div>
                @endforeach
                  @if(count($user)==0)
                <p> Não há monitores Cadastrados</p>
                @endif

              </div>

            <!--Div Projetos Atuais-->
            <hr>
              <div>
                <h3 id="title_nossa_historia"><b>Projetos Atuais</b></h3>         
                <div id="title_2021" class="card-body"><b>2022</b></div>                 
              </div>

              @foreach($user as $usuario)
              <h3 id="title_projeto"><b>Projeto de monitoria.</b></h3>         
              <div id="name_monitor" class="card-body"><b>Monitor: {{$usuario->name}}</b></div>
              <div id="descricao">{{$usuario->projeto}}</div>
              <hr>
              @endforeach
              @if(count($user)==0)
                <p> Não há projetos Cadastrados</p>
              @endif

              <!-- Page Content  -->           
           <!-- Basic Card Example -->
           <div>           
            <div id="title_quem_somos" class="card-body"><b>Sigam nossas Redes Sociais</b></div>
            <h1 ><b>CONTATE-NOS</b></h1>    
          </div>

          <div class="card-body">        
             <div class="row Feed">
               <!--Google Maps-->              
                <div id="Contatos" class="mb-3">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.422663146786!2d-39.097087585670614!3d-8.058296582740745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a093c32c636e07%3A0x2c829dd0d1e04b49!2sBR-232%2C%20Km%20508%2C%20s%2Fn%20-%20Zona%20Rural%2C%20Salgueiro%20-%20PE%2C%2056000-000!5e0!3m2!1spt-BR!2sbr!4v1646193940522!5m2!1spt-BR!2sbr" 
                  width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>

                  <!--Informações para Contato-->
                  <div id="Contatos" class="mb-3">                     
                   <h3 id="title_contatos"><b>Museu de Ciências Profº Antonio Carneiro</b></h3>                        
                   <div id="title_contatos-2">BR-232, Km 508, s/n - Zona Rural, Salgueiro - PE, 56000-000</div>

                   <h3 id="title_contatos"><b>Telefone</b></h3>                        
                   <div id="title_contatos-2">87 3456 7890</div>

                   <h3 id="title_contatos"><b>E-mail</b></h3>                        
                   <a id="title_quem_somos" class="card-body">museudeciencias11@gmail.com</a>

                   <h3 id="title_contatos"><b>Siga-nos</b></h3>                        
                   <a href="https://www.youtube.com/channel/UCAKoX7cv9BbysI5eXpHwetg" 
                   target="_blank" id="title_quem_somos" class="card-body">YouTube</a><br>
                   <br>
                   <a href="https://www.instagram.com/museudeciencias.a.c/"
                   target="_blank" id="title_quem_somos" class="card-body">Instagram</a>
                  </div>
            </div>
            
          <hr>
          <h1><b> Estamos ansiosos para receber sua <br>
            visita em nosso Museu</b></h1>
         
          </div>
         </div>
@endsection