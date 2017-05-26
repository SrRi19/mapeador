<?php

require_once("../../lib/class/config.php");
	
	$banco = $_SESSION["banco"];

	if(isset($_POST['valor'])){
		$tabela = $_POST['valor'];
	}
	
	$conexaoBeans = new ConexaoBeans();
	$tab_inf = new Tab_inf();
	$acao = $_POST['acao'];
	
	if($acao){
		if($acao == "conexao"){
			$veri = $conexaoBeans->GetTabelas($banco);
			$lista = "";
			if($veri){
				$linha = "";
				foreach($veri as $item){
					$linha = '<div class="col-md-6 text-center margin-12">';
					$linha .= '<div class="btn btn-primary botao col-md-12" title="'.$item->getnome().'" onclick = "classeBotao(this)" >'.$item->getnome().'</div>';
					$linha .= '</div>';
					
					$lista = $lista.$linha;
				}
			}
			
			echo $lista;
			
		}else if($acao == "minhaClass"){
			
			$veri = $conexaoBeans->GetColunas($banco,$tabela);
			
			$atibutos ="";
			$gets = "";
			$sets = "";
			
			$tamanho = count($veri);
			
			$atributo = "";
			for($i = 0; $i< $tamanho; $i++){
				$atributo = 'private '.$veri[$i]->getcoluna().'; <br>';
				$atibutos = $atibutos.$atributo;
			}
			
			for($i = 0; $i< $tamanho; $i++){
				$set  = '<br>public function set'.$veri[$i]->getcoluna().'($'.$veri[$i]->getcoluna().'a){ <br>';
				$set .= '	$this->'.$veri[$i]->getcoluna().' = $'.$veri[$i]->getcoluna().'a; <br>';
				$set .= '} ';
				$sets = $sets.$set;
			}
			
			for($i = 0; $i< $tamanho; $i++){
				$get  = '<br>public function get'.$veri[$i]->getcoluna().'(){ <br>';
				$get .= '	return $this->'.$veri[$i]->getcoluna().';<br>';
				$get.='} ';
				$gets = $gets.$get;
			}
			
			
			echo '<pre>'.$atibutos.'</pre>';
			echo '<pre>'.$sets.'</pre>';
			echo '<pre>'.$gets.'</pre>';

		}
	}
	

?>