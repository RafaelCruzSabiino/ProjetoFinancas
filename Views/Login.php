<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <br>
            <h2 class="text-center">Banco Sabino</h2>
            <br>
            <hr>
            <br>
            <form method="POST" action="../Controllers/Rooter.php?Controller=HomeController&Funcao=ValidarLogin">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>E-mail</label>                    
                        <input type="text" name="Email" id="Email" class="form-control">                    
                    </div>
                    <div class="col-sm-4"></div>
                </div>      
                <br>      
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>Senha</label>              
                        <input type="password" name="Senha" id="Senha" class="form-control">                    
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">                        
                        <a href="../Controllers/Rooter.php?Controller=HomeController&Funcao=Redirect&Page=CadastroUser">Cadastre-se</a>                                    
                    </div>
                    <div class="col-sm-2">                        
                        <button type="submit" class="btn btn-primary" style="width:100%">Entrar</button>                                     
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </form>
            <br>
            <hr>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
