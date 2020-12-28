<?php
    include 'Header.php';
?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <a href="../../Controllers/Rooter.php?Controller=HomeController&Funcao=Redirect&Page=ProtectPages/UserArea"><h2 class="text-center"><?= $_SESSION["UserNome"] ?></h2>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <br>
                <a href="../../Controllers/Rooter.php?Controller=HomeController&Funcao=LogOut" style="font-size: 18px; color: red;">Log Out</a>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">                
                <center><a href="../../Controllers/Rooter.php?Controller=HomeController&Funcao=Redirect&Page=ProtectPages/CadastroConta"><button type="button" class="btn btn-primary">Cadastrar Conta</button></a></center>               
            </div>
            <div class="col-sm-4"></div>
        </div>
        <br>
        <br>
        <div id="divConsulta">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">                
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Conta:</th>
                                    <th>Valor Total:</th>
                                    <th>Parcela:</th>
                                    <th>Paga:</th>
                                    <th>Faltante:</th>
                                    <th>Valor à Pagar:</th>
                                    <th>Tipo:</th>
                                    <th>Data:</th>
                                </tr>
                            </thead>
                            <tbody id="ReturnConta">
                            </tbody>
                        </table>
                    </div>                                       
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <label>Salario:</label>                
                    <input type="text" name="Salario" id="Salario" class="form-control" value="<?= $_SESSION["UserSalario"] ?>" style="color: green;" disabled>                
                </div>
                <div class="col-sm-2">
                    <label>Valor à Pagar:</label>                
                    <input type="text" name="ValorPagar" id="ValorPagar" class="form-control" style="color: red;" disabled>   
                </div>
                <div class="col-sm-2">
                    <label>Disponivel:</label>                
                    <input type="text" name="Disponivel" id="Disponivel" class="form-control" style="color: blue;" disabled>   
                </div>
                <div class="col-sm-2">  
                    <br>              
                    <button type="button" class="btn btn-danger" onclick="PagarConta(0, 'Todas')">Pagar Todas</button>                
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <br>
<?php
    include 'Footer.php';
?>
<script src="../../Js/Home.js"></script>
