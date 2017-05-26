<?php
class ConexaoBeans{
	private $conn;
	private $lista;
	
	function conectaBanco($beans){
		$this->conn = @mysql_pconnect($beans->getHost(),$beans->getUsuario(),$beans->getSenha());
		
		if($this->conn){
			@mysql_select_db($beans->getBase());
			return $this->conn;
		}else{
			return false;			
		}
		
	}
	
	function desconectaBanco($conec){
		mysql_close($conec);
	}
	
	function GetTabelas($banco){
		$this->lista = array();
		$sql = "SELECT * FROM information_schema.tables WHERE table_schema = '".$banco."'";
		$verifica = @mysql_query($sql) or die(mysql_error()); 
	
		if(@mysql_num_rows($verifica)>0){ 
			$x = 0;
			while($array = @mysql_fetch_array($verifica)){
				$beans = new Tab_inf();
				$beans->setschema($array["TABLE_SCHEMA"]);
				$beans->setnome($array["TABLE_NAME"]);
				$this->lista[$x] = $beans;
				$x++;
			}
			return $this->lista;
		}else{ 
			return false;
		}
	}
	
	
	function GetColunas($banco,$tabela){
		$this->lista = array();
		
		$sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$tabela."' AND TABLE_SCHEMA = '".$banco."'";
		$verifica = @mysql_query($sql) or die(mysql_error()); 
	
		if(@mysql_num_rows($verifica)>0){ 
			$x = 0;
			while($array = @mysql_fetch_array($verifica)){
				$beans = new Tab_inf();
				$beans->setschema($array["TABLE_SCHEMA"]);
				$beans->setnome($array["TABLE_NAME"]);
				$beans->setcoluna($array["COLUMN_NAME"]);
				$this->lista[$x] = $beans;
				$x++;
			}
			return $this->lista;
		}else{ 
			return false;
		}
	}
	
}
?>
