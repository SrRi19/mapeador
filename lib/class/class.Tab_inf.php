<?php
class Tab_inf{

	private $schema;
	private $nome;
	
	private $coluna;
	 
	private $npag;
	private $nreg;

	//metodos sets
	public function setschema($schema){ 
 	 	$this->schema = $schema; 
 	} 

	public function setnome($nomev){ 
 	 	$this->nome = $nomev; 
 	}
	
	public function setcoluna($colunav){ 
 	 	$this->coluna = $colunav; 
 	}
	
	public function setNpag($npagv){ 
 	 	$this->npag = $npagv; 
 	} 

	public function setNreg($nregv){ 
 	 	$this->nreg = $nregv; 
 	} 

         
	
	//metodos gets
	public function getschema(){ 
 	 	return $this->schema;
 	} 

	public function getnome(){ 
 	 	return $this->nome;
 	}
	
	public function getcoluna(){ 
 	 	return $this->coluna;
 	}

	public function getNpag(){
 	 	return $this->npag;
 	} 

	public function getNreg(){
 	 	return $this->nreg;
 	} 

}
?>