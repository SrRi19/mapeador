<?php

require_once("../../lib/class/config.php");

$usuario = $_POST['usuario']; 
$senha = $_POST['senha']; 
$banco = $_POST['banco']; 
$url = $_POST['url']; 
$resposta = Array('mensagem'=>'','caminho'=>'','status'=>'');

$conexao->setConexao($usuario,$senha,$banco,$url);
$conn = $conexaoBeans->conectaBanco($conexao);


if(!$conn){
	
	$resposta['status'] = "ERRO";
	$resposta['mensagem'] = "ERRO ao tentar se conecatar ao banco";
	
}else{
	
	$_SESSION["conexao"] = 'conecatado';
	
	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	$_SESSION["banco"] = $banco;
	$_SESSION["url"] = $url;
	
	$resposta['status'] = "OK";
	$resposta['mensagem'] = "Bem vindo";
	$resposta['caminho'] = "index.php?pag=1&modu=1";
	
}

echo json_encode($resposta);

?>
