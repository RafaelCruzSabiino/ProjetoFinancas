<?php
    include 'Header.php';
?>
    <div class="container">
        <br>
        <h2 class="text-center">Alterar Usuario</h2>
        <br>
        <hr>
        <br>
        <form method="POST" action="../../Controllers/Rooter.php?Controller=HomeController&Funcao=AlterarUser">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Nome:</label>                
                    <input type="text" name="Nome" id="Nome" class="form-control" required="/" disabled>               
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>E-mail:</label>                
                    <input type="email" name="Email" id="Email" class="form-control" required="/" disabled>               
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Senha:</label>                
                    <input type="password" name="Senha" id="Senha" class="form-control" required="/" disabled>               
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Salario:</label>                
                    <input type="text" name="Salario" id="Salario" class="form-control" required="/" disabled>               
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2" id="Alterar">                   
                    <button type="button" class="btn btn-danger" style="width:100%">Alterar</button>                                         
                </div>
                <div class="col-sm-1" id="Cancelar" style="display:none;">                  
                    <button type="button" class="btn btn-danger" style="width:100%;" id="BtnCancelar">X</button>                                                    
                </div>
                <div class="col-sm-1" id="Confirmar" style="display:none;">                  
                    <button type="submit" class="btn btn-primary" style="width:100%;">V</button>                                                       
                </div>
                <div class="col-sm-5"></div>
            </div>
        </form>
    </div>
<?php
    include 'Footer.php';
?>
<script src="../../Js/UserArea.js"></script>
