$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('select').material_select();

	$("#evento").on("change", function(){
		
		var evento = $("#evento").val();
		// console.log("TESTE: "+evento);
		if(evento == "software"){
			$("ocorrencia").val(null);
			$("#ocorrencia_hard").attr("hidden", true);
			$("#ocorrencia_soft").removeAttr("hidden");
		}
		else{
			$("ocorrencia").val(null);
			$("#ocorrencia_soft").attr("hidden", true);
			$("#ocorrencia_hard").removeAttr("hidden");
		}
	});
	$("#ocorrencia_s").on("change", function(){
		$("#descricao").removeAttr("hidden");
	});
	$("#ocorrencia_h").on("change", function(){
		$("#descricao").removeAttr("hidden");
	});
	$("#descricao_texto").on("change", function(){		
		var total = $("#descricao_texto").val();
		console.log(total);
		if(total != null || total != ""){
			$("#enviar").removeAttr("disabled");
		}
		else{
			$("#enviar").attr("disabled", true);
		}
	});
	$("#btn_retorno").on("click", function(){
		window.location = "?pagina=Home";
	});
});