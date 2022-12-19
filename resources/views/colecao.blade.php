@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'MCPAC')

@section('content')
        <!-- Page Content  -->
        <div id="content">       
          <div class="container-fluid">         
          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div>           
                <h3 id="title_nossa_historia"><b>Acervo do Museu</b></h3>    
              </div>

              <!--Primeira linha de imagens-->
              <div class="row">
                <div id="galeria">
                      <figure>
                      <img src=".\img\Galeria\IMG_01.jpg" 
                      width="330" height="200">
                      <figcaption>Descrition</figcaption>
                    </figure>
                </div>

                <div id="galeria">
                    <figure>
                      <img src=".\img\Galeria\IMG_03.jpg" 
                      width="330" height="200">
                      <figcaption>Descrition</figcaption>
                    </figure>
                </div>
                <div id="galeria">
                    <figure>
                      <img src=".\img\Galeria\IMG_02.jpg" 
                      width="330" height="200">
                      <figcaption>Descrition</figcaption>
                    </figure>
              </div> 
            </div>

            <!--Segunda linha de imagens-->
            <div class="row">
              <div id="galeria">
                    <figure>
                    <img src=".\img\Galeria\IMG_04.jpg" 
                    width="330" height="200">
                    <figcaption>Descrition</figcaption>
                  </figure>
              </div>

              <div id="galeria">
                  <figure>
                    <img src=".\img\Galeria\IMG_05.jpg" 
                    width="330" height="200">
                    <figcaption>Descrition</figcaption>
                  </figure>
              </div>
              <div id="galeria">
                  <figure>
                    <img src=".\img\Galeria\IMG_06.jpg" 
                    width="330" height="200">
                    <figcaption>Descrition</figcaption>
                  </figure>
            </div> 
          </div>

          <!--terceira linha de imagens-->
          <div class="row">
            <div id="galeria">
                  <figure>
                  <img src=".\img\Galeria\IMG_07.jpg" 
                  width="330" height="200">
                  <figcaption>Descrition</figcaption>
                </figure>
            </div>

            <div id="galeria">
                <figure>
                  <img src=".\img\Galeria\IMG_08.jpg" 
                  width="330" height="200">
                  <figcaption>Descrition</figcaption>
                </figure>
            </div>
            <div id="galeria">
                <figure>
                  <img src=".\img\Galeria\IMG_09.jpg" 
                  width="330" height="200">
                  <figcaption>Descrition</figcaption>
                </figure>
          </div> 
        </div>

        <!--Quarta linha de imagens-->
        <div class="row">
          <div id="galeria">
                <figure>
                <img src=".\img\Galeria\IMG_10.jpg" 
                width="330" height="200">
                <figcaption>Descrition</figcaption>
              </figure>
          </div>

          <div id="galeria">
              <figure>
                <img src=".\img\Galeria\IMG_11.jpg" 
                width="330" height="200">
                <figcaption>Descrition</figcaption>
              </figure>
          </div>
          <div id="galeria">
              <figure>
                <img src=".\img\Galeria\IMG_12.jpg" 
                width="330" height="200">
                <figcaption>Descrition</figcaption>
              </figure>
        </div> 
      </div>

      <!--Quinta linha de imagens-->
      <div class="row">
        <div id="galeria">
              <figure>
              <img src=".\img\Galeria\IMG_13.jpg" 
              width="330" height="200">
              <figcaption>Descrition</figcaption>
            </figure>
        </div>

        <div id="galeria">
            <figure>
              <img src=".\img\Galeria\IMG_14.jpg" 
              width="330" height="200">
              <figcaption>Descrition</figcaption>
            </figure>
        </div>
        <div id="galeria">
            <figure>
              <img src=".\img\Galeria\IMG_15.jpg" 
              width="330" height="200">
              <figcaption>Descrition</figcaption>
            </figure>
          </div> 
        </div>

          <!--Sexta linha de imagens-->
          <div class="row">
            <div id="galeria">
                  <figure>
                  <img src=".\img\Galeria\IMG_16.jpg" 
                  width="330" height="200">
                  <figcaption>Descrition</figcaption>
                </figure>
            </div>

            <div id="galeria">
                <figure>
                  <img src=".\img\Galeria\IMG_17.jpg" 
                  width="330" height="400">
                  <a href=".\img\Galeria\IMG_17.jpg">
                  <figcaption>Descrition</figcaption>
                  </a>
                </figure>
            </div>
        </div>
         </div>
       </div>
     </div>
     </div>
@endsection