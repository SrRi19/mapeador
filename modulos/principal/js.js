$(function(){
	procurarTabelas();
});


function procurarTabelas(){
	var acao = "conexao";
	
	$.ajax({
		url: 'modulos/principal/servidor.php',
		data: {acao:acao},
		method: 'POST',
		success:function(retorno){
			$('#options').html(retorno);
		}
	})
}


 function classeBotao(valor){

 	$('#options .botao').each(function(){
 		if($(this).hasClass('active')){
 			$(this).removeClass('active');
 		}
 	});
 	
	$(valor).addClass('active');

	var valor = $(valor).attr('title');
	var acao = "minhaClass";
	
	$.ajax({
		url: 'modulos/principal/servidor.php',
		data: {valor:valor,acao:acao},
		method: 'POST',
		success:function(retorno){
			$('.inf').html(retorno);
		}
	})
}