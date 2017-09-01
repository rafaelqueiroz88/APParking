$(document).ready(function(){
    $("#vagas").on("change", function(){
        var quantidade = $(this).val();
        if(quantidade <= 0 ){
            alert("A quantidade de vagas não pode ser menor ou igual a 0");
            $(this).val(1);
            $(this).focus();
        }
        else{
            //console.log("Quantidade de vagas: "+quantidade);
        }
    });
    $("#btn_novo").on("click", function(){
        window.location = "?pagina=Admin&acao=CadastroEndereco";
    });
    $("#btn_retornar").on("click", function(){
        window.location = "?pagina=Admin";
    });
    $("#estado").on("change", function(){
        var estadoId = $("#estado").val();
        $("#cidade").removeAttr("disabled");
        $("#cidade").load("Functions/listarCidadesSelect.php?id="+estadoId);
        //console.log("Estado: "+estadoId);
    });
});