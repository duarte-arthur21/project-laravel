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
              <div id="title_quem_somos" class="card-body"><b>SAIBA MAIS SOBRE NOSSAS EXPOSIÇÕES</b></div>
              <h3 id="title_nossa_historia"><b>Museu Itinerante</b></h3>    
            </div>

            <!--Primeira Linha do Feed-->
            <div class="card-body row Feed">
              <div id="Feed" class="card2 mb-2">
                <figure class="img">
                  <img src=".\img\Feed\Post1.jpg" 
                        alt="Fjords" width="200" height="200">
                </figure>
                <a class="txt desc" target="_blank"><b>LIVE - CORDAS VIBRANTES</b></a>
                <i>14/09/2021</i>
                <figcaption><p class="breakWord narrow">No dia 17 de Dezembro, nosso monitor Thulio
                          Muniz esteve apresentando sua Live "Cordas Vibrantes",
                          através da plataforma...</p></figcaption>
                  </div>

                <div id="Feed" class="card2 mb-2">
                  <figure class="img">
                    <img src=".\img\Feed\Post2.jpg" 
                          alt="Fjords" width="220" height="170">
                  </figure>
                  <a class="txt desc" target="_blank"><b>Visita a Escola Pais e Mestres</b></a>
                  <i> 04/11/2021</i>
                  <figcaption><p class="breakWord narrow">No dia 04 de Novembro, o projeto Museu Itinerante esteve 
                    presente na escola Pais e Mestres na cidade de Salgueiro....</p></figcaption>
                    </div>
    
                  <div id="Feed" class="card2 mb-2">
                    <figure class="img">
                      <img src=".\img\Feed\Post3.jpg" 
                            alt="Fjords" width="220" height="170">
                    </figure>
                    <a class="txt desc" target="_blank"><b>Visita a EREM Salgueiro</b></a>                    
                    <i>04/10/2021</i>
                    <figcaption><p class="breakWord narrow">No dia 17 de Dezembro, nosso monitor Thulio
                              Muniz esteve apresentando sua Live "Cordas Vibrantes",
                              através da plataforma...</p></figcaption>
                      </div>
    
                    <div id="Feed" class="card2  mb-2">
                      <figure class="img">
                        <img src=".\img\Feed\Post4.jpeg" 
                              alt="Fjords" width="200" height="180">
                      </figure>
                      <a class="txt desc" target="_blank"><b>FAÇA VOCÊ MESMO: Como Construir um Pêndalo Eletroestático.</b></a>
                        <i>25/09/2022</i>
                      <figcaption><p class="breakWord narrow">FAÇA VOCÊ MESMO é um projeto do museu de ciências Professor 
                        Antônio Carneiro, que movimenta conteúdos no nosso canal do...</p></figcaption>
                        </div>
              </div>
              
              <!--Segunda Linha do Feed-->
              <div class="row Feed">
                <div id="Feed" class="card2 mb-2">
                  <figure class="img">
                    <img src=".\img\Feed\Post4.jpg" 
                          alt="Fjords" width="240" height="200">
                  </figure>
                  <a class="txt desc" target="_blank"><b>Visita a Conceição das Criolas</b></a>
                  <i>14/09/2021</i>
                  <figcaption><p class="breakWord narrow">Exposição do projeto Museu Itinerante realizado na escola estadual indígena 
                    Capitão Dena, em Ilha de Assunção - PE...</p></figcaption>
                    </div>
  
                  <div id="Feed" class="card2 mb-2">
                    <figure class="img">
                      <img src=".\img\Feed\Post5.jpg" 
                            alt="Fjords" width="240" height="200">
                    </figure>
                    <a class="txt desc" target="_blank"><b>FAÇA VOCÊ MESMO - Como construir um Eletroscópio de folhas caseiro</b></a>
                      <i>23/08/2021</i>
                    <figcaption><p class="breakWord narrow">FAÇA VOCÊ MESMO é um projeto do museu de ciências Professor Antônio Carneiro, 
                      que movimenta vídeo no nosso canal do YouTube...</p></figcaption>
                      </div>
      
                    <div id="Feed" class="card2 mb-2">
                      <figure class="img">
                        <img src=".\img\Feed\Post6.jpg" 
                              alt="Fjords" width="210" height="200">
                      </figure>
                      <a class="txt desc" target="_blank"><b>LIVE: Aplicativo Phyphox - Uma Ferramenta no Ensino de Fisíca</b></a>
                        <i>06/08/2021</i>
                      <figcaption><p class="breakWord narrow">No dia 06 de Agosto nosso Monitor, João Santos orientado pelo professor 
                        Eriverton Rodrigues, estará apresentando...</p></figcaption>
                        </div>
      
                      <div id="Feed" class="card2 mb-2">
                        <figure class="img">
                          <img src=".\img\Feed\Post7.jpg" 
                                alt="Fjords" width="200" height="200">
                        </figure>
                        <a class="txt desc" target="_blank"><b>LIVE: Acessibilidade - Museu Inclusivo</b></a>
                        <i>14/06/2021</i>
                        <figcaption><p class="breakWord narrow">No ultimo dia 17 de Junho, nossa monitora Rosimayre Santos, orientado pela 
                          professora Patrícia, apresentou uma transmissão ao...</p></figcaption>
                          </div>
                    
                </div>

                <!--Terceira Linha do Feed-->
              <div class="row Feed">
                <div id="Feed" class="card2 mb-2">
                  <figure class="img">
                    <img src=".\img\Feed\Post8.jpg" 
                          alt="Fjords" width="200" height="200">
                  </figure>
                  <a class="txt desc" target="_blank"><b>Semana da Fisica</b></a>
                  <i>04/11/2021</i>
                  <figcaption><p class="breakWord narrow">Amanhã a professora Daiane Ribeiro irá participar de uma mesa redonda sobre 
                    Mulheres na Física, na Semana de Física organizada...</p></figcaption>
                    </div>
  
                  <div id="Feed" class="card2 mb-2">
                    <figure class="img">
                      <img src=".\img\Feed\Post9.jpg" 
                            alt="Fjords" width="220" height="200">
                    </figure>
                    <a class="txt desc" target="_blank"><b>Semana da Fisica</b></a>
                    <i>01/11/2021</i>
                    <figcaption><p class="breakWord narrow">Entre os dias 03 e 05 de novembro ocorrerá a Semana de Física 
                      do IFSertao/campus Petrolina. No dia 05 Teremos uma palestra falando...</p></figcaption>
                      </div>
      
                    <div id="Feed" class="card2 mb-2">
                      <figure class="img">
                        <img src=".\img\Feed\Post10.jpg" 
                              alt="Fjords" width="240" height="200">
                      </figure>
                      <a class="txt desc" target="_blank"><b>Visita a Escola Euclides da Cunha</b></a>
                      <i>08/07/2021</i>
                      <figcaption><p class="breakWord narrow">No dia 08 de Julho, o museu esteve na cidade de Parnamirim
                        realizando mais uma edição do projeto "Museu Itinerante"...</p></figcaption>
                        </div>
      
                      <div id="Feed" class="card2 mb-2">
                        <figure class="img">
                          <img src=".\img\Feed\Post11.jpg" 
                                alt="Fjords" width="220" height="200">
                        </figure>
                        <a class="txt desc" target="_blank"><b>Seleção para Bolsistas</b></a>
                        <i>03/02/2021</i>
                        <figcaption><p class="breakWord narrow">Estão abertas as inscrições para monitores do Museu de Ciências 
                          Professor Antônio Carneiro....</p></figcaption>
                          </div>
                </div>
            <hr>
            <div>           
              <div id="title_quem_somos" class="card-body"><b>E AGORA?</b></div>
              <div id="title_nossa_historia" class="card-body login-form-1">                                  
                <button  type="button" class="btn btn-primary btnSubmit">
                  <a class="nav-link" href="visita">Agende sua Visita!</a>
                </button>
              </div>  
            </div>
                         
         </div>
       </div>
     </div>
     </div>
@endsection