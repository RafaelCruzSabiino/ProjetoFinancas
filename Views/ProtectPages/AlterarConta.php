<?php
    include 'Header.php';
?>
    <div class="container">
        <br>
        <h2 class="text-center">Alterar Conta</h2>
        <br>
        <hr>
        <br>
        <form method="POST" action="../../Controllers/Rooter.php?Controller=ContaController&Funcao=AlterarConta">            
            <input type="hidden" name="IdConta" id="IdConta" class="form-control">            
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>Nome Conta:</label>                 
                    <input type="text" name="Conta" id="Conta" class="form-control" required="/" disabled>                    
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <label>Valor Total:</label>                    
                    <input type="text" name="Valor" id="Valor" class="form-control" required="/" disabled>                    
                </div>
                <div class="col-sm-2">
                    <label>Tipo Conta:</label>                        
                    <select name="Tipo" id="Tipo" class="form-control" required="/" disabled>
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
                    <input type="hidden" name="Parcela_Paga" id="Parcela_Paga" class="form-control">                    
                    <label>Qtd. Parcela:</label>                   
                    <input type="number" name="Parcela" id="Parcela" class="form-control" value="1" min="0" disabled>                                      
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
                    <textarea name="Obs" id="Obs" class="form-control" rows="3" disabled></textarea>                                   
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
<script src="../../Js/AlterarConta.js"></script>