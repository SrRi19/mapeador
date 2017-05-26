<?php
class Conexao{
	private $base;
	private $usuario;
	private $senha;
	private $host;
	
	function setConexao($usu, $sen, $bass, $hos){
		$this->usuario = $usu;
		$this->senha	= $sen;
		$this->base		= $bass;
		$this->host		= $hos;
	}
	
	function getBase(){ 
		return $this->base; 
	}
	
	function getUsuario(){
		return $this->usuario;
	}
	
	function getSenha(){
		return $this->senha;
	}
	
	function getHost(){
		return $this->host;
	}
	
}
?>