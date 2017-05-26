$(function(){
	
	$('#conexao').submit(function(e){
		
		var usuario = $('#usuario').val();
		var senha = $('#senha').val();
		var banco = $('#banco').val();
		var url = $('#caminho').val();
		
		if(!usuario){
			alert('Informe um usuario!');
			return false;
		}
		else if(!banco){
			alert('Informe o nome do banco');
			return false;
		}
		else if(!url){
			alert('Informe o caminho do banco');
			return false;
		}else{
			
			$.ajax({
				url:'modulos/conexao/servidor.php',
				data: {usuario:usuario,senha:senha,banco:banco,url:url},
				dataType: 'json',
				method:'POST',
				success:function(retorno){
					if(retorno.status == 'OK'){
						
						alert(retorno.mensagem);
						
						var url = 'http://localhost/mapeador/'+retorno.caminho;
						console.log(url);
						
						window.location = url;
					}else{
						alert(retorno.mensagem);
						return false;
					}
				}
			});
			
			return false;
			
		}
	
	});
	
})