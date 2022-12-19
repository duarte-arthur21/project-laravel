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
            <h3>Bem Vindo!</h3>
  
            <iframe width="760" height="415" src="https://www.youtube.com/embed/YW2Ztb0t4-M" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                          clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen></iframe>
            
             <div class="btn card-body">
               <a href="https://www.youtube.com/channel/UCAKoX7cv9BbysI5eXpHwetg" id="sidebarCollapse">
                <button type="button" class="btn btn-primary">
                    CONHEÇO NOSSO CANAL NO YOUTUBE</button> </a>
              </div>

        <!-- Div Quem somos -->
        <div class="card shadow mb-4" style="background-image:url('/img/planodefundo/background-museu.png') ;">
          <h2><b>QUEM SOMOS</b></h2>

          <p id="text-quem-somos">O museu de ciências Professor Antônio Carneiro é uma entidade que trabalha
             em parceira 
            com o Instituto Federal do sertão campus Salgueiro e a Prefeitura municipal de Salgueiro, 
            promovendo exposições das suas coleções e divulgando e fomentando o ensino de ciências no 
            sertão pernambucano. Clique aqui e conheça mais sobre nossos monitores e os projetos atuais
            o museu.</p>
        </div>

        <!-- Div Quem somos -->
      <div id="div_quem_somos" class="card shadow mb-4">           
        <div id="title_quem_somos" class="card-body"><b>QUEM SOMOS</b></div>
        <h3 id="title_nossa_historia"><b>Essa é a nossa história</b></h3>

        <p id="text">O Museu de Ciências Professor Antônio Carneiro (MCPAC) é oriundo de uma parceria entre o espaço ciência e a
           prefeitura municipal. Até meados de 2013, o MCPAC não estava preparado para atender o público e a utilização
           de sua estrutura era pontual e precária. Poucas atividades foram desenvolvidas neste espaço durante esse
           período, onde a carência de recursos humanos se configura como um dos principais entraves para o efetivo
           funcionamento do museu. Por outro lado, o desenvolvimento de projetos de pesquisa, ensino e extensão 
           realizados pelo Instituto Federal do Sertão Pernambucano Campus Salgueiro na época, tais como: "Divulgação
           científica e a concepção da natureza das ciências", "Projeto de Difusão de Atividades Experimentais no Ensino de
           Ciências", "Difusão da Astronomia em Escolas Públicas", era os principais mecanismos de divulgação científica da
           região. Dentro dessa conjuntura e "Com o objetivo de estimular a busca pelo conhecimento e o gosto pela
           ciência, o Museu de Ciências Antônio Carneiro abriu as portas para os alunos das redes públicas e privadas de
           ensino, de todo o Sertão-Central" (sg10 - Portal de Notícias de Salgueiro) através de uma nova parceria firmada,
           agora com o IF Sertão-PE - Campus Salgueiro como instituição gestora do MCPAC. A solenidade de inauguração
           do Museu nas dependências do IF foi realizada no dia 15 de abril de 2014 e, a partir dessa data, o Museu passou
           a receber visitantes dos mais diversos locais do sertão central de Pernambuco.

           <div class="row">
            <div class="coluna">
              <img src="./img/IMG_20190919_155503.jpg"
              width="460" height="320" alt="descrição da imagem" style="width:100%">
            </div>
            <div class="coluna">
              <img src="./img/IMG_20190919_155653.jpg"
              width="460" height="520" alt="descrição da imagem" style="width:100%">
            </div>
            <div class="coluna">
              <img src="./img/IMG_20190919_155729.jpg" alt="descrição da imagem" style="width:100%">
            </div>
          </div>

          <p id="text">Em meados de 2016 houve acentuada redução da produtividade e queda do número de atividades realizadas
             pelo Museu de Ciências que, por sua vez, estavam novamente relacionadas à carência de recursos humanos. No
             fim de 2016 o Museu de Ciências retoma suas atividades e segue seu processo de reestruturação e crescimento.
             Em 2017, 2018 e 2019, através dos Editais da FACEPE direcionados para o apoio de atividades de monitoria em
             centros e museus de ciências, o MCPAC foi agraciado com três bolsas destinadas a atividades de divulgação e
             popularização da Ciência no Sertão Central do Estado de Pernambuco. As atividades do museu continuam a
             ocorrer três vezes por semana em turnos alternados (manhã, tarde e noite) e fora das dependências do espaço 
             através da realização de exposições e mostras itinerantes em Salgueiro e cidades vizinhas. Apesar das trê
             bolsas concedidas em 2017, 2018 e 2019 (Edital 16/2017, 16/2018 e 16/2019 da FACEPE), as carências,
             relacionadas a recursos humanos e condições de transporte não são satisfatórias e não garantem o
             funcionamento do Museu em tempo integra</p>                   
      </div>

      <!--div Feed de noticias-->
      <div>           
        <div id="title_quem_somos" class="card-body"><b>COMO TRABALHAMOS</b></div>
        <h3 id="title_nossa_historia"><b>Nossos projetos</b></h3>

        <!--Primeira Linha do Feed-->
        <div class="row Feed">
          <div id="Feed" class="card2 mb-2">
            <figure class="img">
              <img src="\img\Feed\Post1.jpg" 
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
                <img src="\img\Feed\Post2.jpg" 
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
                       
        </div>
        </div>
        </div>
      </div>
@endsection
