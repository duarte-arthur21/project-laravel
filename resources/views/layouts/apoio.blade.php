<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  
     <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
      <!--Div Apoio-->
        @yield('apoio')
        <div class="card shadow mb-4">
       
        <div class="card shadow mb-4">
              <h3 id="apoio">Apoio:</h3>
    
              <div class="row">
                <div id="coluna">
                <img src="\img\logo_Salgueiro.png" 
                  width="240" height="110">
                  </div>
                  <div id="coluna">
                  <img src="\img\FACEPE.png" 
                    width="280" height="100">
                  </div>
                  <div id="coluna">
                  <img src="\img\IF_campus_salgueiro.jpg" 
                        width="240" height="90">
                    </div>
              </div>
            </div>
            </div>
</body>
</html>