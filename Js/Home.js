$(document).ready(function(){
    $.post(
        "../../Controllers/Rooter.php?Controller=ContaController&Funcao=ConsultarConta",
        {
        },function(data)
        {
            if(data != 0)
            {
                Despesas    = 0;
                Dados       = JSON.parse(data);
                for(i=0; i<Dados.length; i++)
                {
                    $("#ReturnConta").append(""+
                        "<tr>"
                            +"<td><a href='AlterarConta.php?Conta="+Dados[i].ID+"'>" + Dados[i].CONTA + "</a></td>"
                            +"<td>"+ Dados[i].VALOR +"</td>"
                            +"<td>"+ Dados[i].PARCELA +"</td>"
                            +"<td style='color: green;'>"+ Dados[i].PARCELA_PAGA +"</td>"
                            +"<td style='color: red;'>"+ (Dados[i].PARCELA - Dados[i].PARCELA_PAGA) +"</td>"
                            +"<td>"+ (Dados[i].VALOR / Dados[i].PARCELA) +"</td>"
                            +"<td>"+ Dados[i].TIPO +"</td>"
                            +"<td>"+ Dados[i].DATA_INSERT +"</td>"
                            +"<td><button type='button' class='btn btn-danger' onclick='PagarConta(" + Dados[i].ID + ")'>Pagar</button></td>"
                        +"</tr>"
                    +"");
                    
                    Despesas += (Dados[i].VALOR / Dados[i].PARCELA);
                }                
                $("#ValorPagar").val("R$ " + Despesas);
                $("#Disponivel").val("R$ " + (parseFloat($("#Salario").val()) - Despesas));
            }
            else
            {
                $("#divConsulta").css({display: "none"});
                alert("Nenhum Registro Encontrado Para Esse Usuario!");
            }
        }
    )
});

function PagarConta(ID, Filtro="Expecifico"){
    $.post(
        "../../Controllers/Rooter.php?Controller=ContaController&Funcao=PagarConta",
        {
            ID: ID,
            Filtro: Filtro
        },function(data)
        {
            if(data != 0)
            {
                alert("Conta Paga com Sucesso");
                location.reload();
            }
            else
            {
                alert("Erro!");
            }
        }
    );
}