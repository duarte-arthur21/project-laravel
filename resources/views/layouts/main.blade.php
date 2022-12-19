<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
     <link rel="stylesheet" href="/css/style.css">
     <link rel="stylesheet" href="/css/tableEasy.css">
    <script src="/js/scripts.js"></script>

</head>

<body style="background-image: url('/img/space.jpg')">
<main>
  <div class="container-fluid">
    <div class="row">
      @if(session('msg'))
      <p class="msg">{{session('msg')}}</p>
      @endif
    @yield('content')
    </div>
  </div>
</main>
</body>
</html>