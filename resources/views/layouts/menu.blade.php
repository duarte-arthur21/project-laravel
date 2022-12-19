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
@yield('menu') 
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url('/img/space.jpg') !important;">
           
      <img src="/img/logo.png" width="80" height="80" 
        class="d-inline-block align-top" alt="">
  
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          @guest
            <li class="nav-item active">
              <a class="a nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="a nav-link" href="sobrenos">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="a nav-link" href="exposicao">Exposições</a>
            </li>
            <li class="nav-item">
              <a class="a nav-link" href="colecao">Coleções</a>
            </li>

            @if (Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="a nav-link" href="consultaVisita">Visita</a>
            </li>
            <li class="nav-item">
              <a class="a nav-link" href="perfil">Perfil</a>
            </li>

            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <a class="a nav-link" 
                    href="/logout" 
                    onclick="Monitor.preventDefault();
                    this.closet('form').submit();">Sair</a>
              </form>
            </li>
            @endauth

            @else
            <li class="nav-item">
              <a href="login" class="a nav-link">Login</a>        
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="a nav-link">Register</a>
            </li>
            @endif
            @endguest

      </ul>       
    </nav>
</header>

</body>
</html>