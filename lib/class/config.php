<?php

session_start();

require_once("class.conexao.php");
require_once("class.conexaoBeans.php");
require_once("class.Tab_inf.php");

$conexao      = new Conexao();
$conexaoBeans = new ConexaoBeans();

$resp = "";

if(isset($_SESSION["usuario"])){
	$usuario = $_SESSION["usuario"];
	$resp = 1;
}

if(isset($_SESSION["senha"])){
	$senha = $_SESSION["senha"]; 
	$resp = 1;
}

if(isset($_SESSION["banco"])){
	$banco = $_SESSION["banco"];
	$resp = 1;
}

if(isset($_SESSION["url"])){
	$url = $_SESSION["url"];
	$resp = 1;
}



if($resp == 1){
	$conexao->setConexao($usuario,$senha,$banco,$url);
	$conn = $conexaoBeans->conectaBanco($conexao);

}

// session_destroy();



?>
