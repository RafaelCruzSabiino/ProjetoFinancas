<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <br>
            <h2 class="text-center">Cadastro</h2>
            <br>
            <hr>
            <br>
            <form method="POST" action="../Controllers/Rooter.php?Controller=HomeController&Funcao=InsertUser">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>Nome:</label>                    
                        <input type="text" name="Nome" id="Nome" class="form-control" required="/">                    
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>E-mail:</label>                    
                        <input type="email" name="Email" id="Email" class="form-control" required="/">       
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>Senha:</label>                    
                        <input type="password" name="Senha" id="Senha" class="form-control" required="/">       
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label>Salario:</label>                    
                        <input type="text" name="Salario" id="Salario" class="form-control" required="/">       
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2">                  
                        <button type="submit" class="btn btn-primary" style="width:100%" required="/">Cadastrar</button>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <br>
                <hr>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
