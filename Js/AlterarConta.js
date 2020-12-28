$(document).ready(function(){
    Conta = window.location.search.replace("?", "");
    Conta = Conta.split("=")[1];

    $.post(
        "../../Controllers/Rooter.php?Controller=ContaController&Funcao=BuscarContaExpecifica",
        {
            ID: Conta
        },function(data)
        {
            if(data != 0)
            {
                Info = JSON.parse(data);                                
                if(Info[0].TIPO == "Parcelado")
                {
                    $("#DivParcelas").fadeIn();
                    Resultado   =  parseFloat(Info[0].VALOR) / Info[0].PARCELA;
                    $("#Valor_Parcela").val(Resultado);
                }
                $("#Conta").val(Info[0].CONTA);
                $("#Valor").val(Info[0].VALOR);
                $("#Parcela").val(Info[0].PARCELA);
                $("#Tipo").val(Info[0].TIPO);
                $("#Obs").val(Info[0].OBS);
                $("#IdConta").val(Info[0].ID);
                $("#Parcela").prop("min", (parseInt(Info[0].PARCELA_PAGA) + 1));
                $("#Parcela_Paga").val(parseInt(Info[0].PARCELA_PAGA) + 1); 
            }
            else
            {
                alert("Erro!");
            }
        }
    );
});

$("#Tipo").change(function(e){
    Dados = e.target.value;
    if(Dados == "Parcelado")
    {
        $("#DivParcelas").fadeIn();
    }
    else
    {
        $("#Parcela").val(1);
        $("#Valor_Parcela").val("");
        $("#DivParcelas").fadeOut();
    }
});

$("#Parcela").change(function(e){
    Dados       = e.target.value;
    if(Dados <= $("#Parcela_Paga").val())
    {
        Dados = parseInt($("#Parcela_Paga").val());
        $("#Parcela").val(Dados);
    }
    Resultado   =  parseFloat($("#Valor").val()) / Dados;
    $("#Valor_Parcela").val(Resultado);
});

$("#Alterar").click(function(){
    $("#Alterar").fadeOut();
    $("#Confirmar").fadeIn();
    $("#Cancelar").fadeIn();
    $("#Conta").prop("disabled", false);
    $("#Valor").prop("disabled", false);
    $("#Parcela").prop("disabled", false);
    $("#Tipo").prop("disabled", false);
    $("#Obs").prop("disabled", false);
    $("#IdConta").prop("disabled", false);

})

$("#BtnCancelar").click(function(){
    $("#Alterar").fadeIn();
    $("#Confirmar").fadeOut();
    $("#Cancelar").fadeOut();
    $("#Conta").prop("disabled", true);
    $("#Valor").prop("disabled", true);
    $("#Parcela").prop("disabled", true);
    $("#Tipo").prop("disabled", true);
    $("#Obs").prop("disabled", true);
    $("#IdConta").prop("disabled", true);
});