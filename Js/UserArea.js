$(document).ready(function(){
    $.post(
        "../../Controllers/Rooter.php?Controller=HomeController&Funcao=GetInfoUser",
        {
        },function(data)
        {
            if(data != 0)
            {
                Dados = JSON.parse(data);
                $("#Nome").val(Dados[0].NOME);
                $("#Email").val(Dados[0].EMAIL);
                $("#Senha").val(Dados[0].SENHA);
                $("#Salario").val(Dados[0].SALARIO);
            }
            else
            {
                alert("Erro!");
            }
        }
    );
});

$("#Alterar").click(function(){
    $("#Alterar").fadeOut();
    $("#Confirmar").fadeIn();
    $("#Cancelar").fadeIn();
    $("#Nome").prop("disabled", false);
    $("#Email").prop("disabled", false);
    $("#Senha").prop("disabled", false);
    $("#Salario").prop("disabled", false);
});

$("#BtnCancelar").click(function(){
    $("#Alterar").fadeIn();
    $("#Confirmar").fadeOut();
    $("#Cancelar").fadeOut();
    $("#Nome").prop("disabled", true);
    $("#Email").prop("disabled", true);
    $("#Senha").prop("disabled", true);
    $("#Salario").prop("disabled", true);
});