<?php
    include 'Header.php';
?>
    <div class="container">
        <br>
        <h2 class="text-center">Cadastrar Conta</h2>
        <br>
        <hr>
        <br>
        <form method="POST" action="../../Controllers/Rooter.php?Controller=ContaController&Funcao=InsertConta">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Nome Conta:</label>                 
                    <input type="text" name="Conta" id="Conta" class="form-control" required="/">                    
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <label>Valor Total:</label>                    
                    <input type="text" name="Valor" id="Valor" class="form-control" required="/">                    
                </div>
                <div class="col-sm-2">
                    <label>Tipo Conta:</label>                        
                    <select name="Tipo" id="Tipo" class="form-control" required="/">
                        <option value="">Selecione</option>
                        <option value="Fixo">Fixo</option>
                        <option value="Parcelado">Parcelado</option>
                    </select>                                    
                </div>  
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row" id="DivParcelas" style="display: none;">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <label>Qtd. Parcela:</label>                   
                    <input type="number" name="Parcela" id="Parcela" class="form-control" value="1" min="0">                                      
                </div>
                <div class="col-sm-2">
                    <label>Valor Parcela:</label>                   
                    <input type="text" name="Valor_Parcela" id="Valor_Parcela" class="form-control" disabled>                    
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Observação:</label>                    
                    <textarea name="Obs" id="Obs" class="form-control" rows="3"></textarea>                                   
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">                   
                    <button type="submit" class="btn btn-primary" style="width:100%">Cadastrar</button>                                                      
                </div>
                <div class="col-sm-5"></div>
            </div>
        </form>
    </div>
<?php
    include 'Footer.php';
?>
<script src="../../Js/CadastroConta.js"></script>