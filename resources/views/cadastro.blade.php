<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCPAC</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="/css/style.css">

    <!--Dual Login designer-->
    <link rel="stylesheet" href="/css/dualLoginStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body style="background-image: url('/img/space.jpg')">
    <div class="container login-container">
        <div class="row">
            
            <!--Primeira tela de LOGIN-->
            <div class="col-md-6 login-form-1">
                <h3 id="title-mc-3" class="text-center mb-4">CADASTRO DE MONITOR</h3>
                <form action="/createmonitors" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Foto do perfil:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                  </div>
                    <div class="form-group">
                        <input class="btn btn-light col-sm-10" type="text" placeholder="Nome*" name="name">
                      </div>
          
                      <div class="form-group">
                        <input id="title-mc-2" class="btn btn-light col-sm-10" type="text" placeholder="Telefone*" name="telefone">
                      </div>

                      <div class="form-group">          
                        <input id="title-mc-2" class="btn btn-light col-sm-10" type="text" placeholder="E-mail*" name="email">
                      </div>
                      <div class="form-group">
                        <input class="btn btn-light col-sm-4" type="password" placeholder="Senha*" name="password">
          
                        <input id="input-esp" class="btn btn-light col-sm-5" type="password" placeholder="Confirme senha*">
                      </div>
                      <div class="form-group">
                          <label for="title"></label>
                          <textarea class="form-control btn" cols="6" rows="5" name="projeto"
                              placeholder="Informe o titulo do Projeto:"></textarea>
                      </div>
                      <div class="form-group center">
                          <input type="submit" class="btn btn-primary btnSubmit" value="CADASTRAR" />
                      </div>
                </form>
            </div>

            <!--Segunda tela de LOGIN-->
            <div class="col-md-6 login-form-2">
                <h3 id="title-mc-2" class="text-center mb-4">CADASTRO DE VISITANTE</h3>

                <form action="/createusers" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="image">Foto do perfil:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                  </div>
                    <div class="form-group">
                        <input class="btn btn-light col-sm-10" type="text" placeholder="Nome*" name="name">
                      </div>
          
                      <div class="form-group">
                        <input class="btn btn-light col-sm-10" type="text" placeholder="Telefone*" name="telefone">          
                      </div>

                      <div class="form-group">
                        <input class="btn btn-light col-sm-10" type="text" placeholder="E-mail*" name="email">
                      </div>

                      <div class="form-group">
                        <input class="btn btn-light col-sm-4" type="password" placeholder="Senha*" name="password">
          
                        <input id="input-esp" class="btn btn-light col-sm-5" type="password" placeholder="Confirme senha*" name="confsenha">
                      </div>                     
               
                <div class="form-group  center">
                    <button type="submit" class="btn btn-primary btnSubmit" name="cadastrar">CADASTRAR</button>
                </div>
                </form>
                <div class="card-body">
                    <a href="login" class="ForgetPwd">Ou faça Login</a>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>


