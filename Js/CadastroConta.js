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

$("#Parcela").keyup(function(e){
    Dados       = e.target.value;
    Resultado   =  parseFloat($("#Valor").val()) / Dados;
    $("#Valor_Parcela").val(Resultado);
});