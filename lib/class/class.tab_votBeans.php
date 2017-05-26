<?php
class tab_votBeans{

    
	private $lista;

	public function getAll($ordem="votId"){
		$this->lista = array();
		$sql="SELECT * FROM tab_vot ORDER BY ".$ordem." ASC" ;
		$verifica = @mysql_query($sql); 
	 	 if(@mysql_num_rows($verifica)>0){ 
			 $x = 0;
			 while($array = @mysql_fetch_array($verifica)){
				 $beans = new Tab_vot();
				 $beans->setVotId($array["votId"]);
				 $beans->setEnqId($array["enqId"]);
				 $beans->setEnqResp($array["enqResp"]);
				$this->lista[$x] = $beans;

				$x++;

			 }

			 return $this->lista;

	 	 }else{ 
 		 	 return false; 
	 	 } 
 	}
   
	public function setTab_vot($beans){
		if(is_object($beans)){
			$sql = "UPDATE tab_vot  SET enqId = ".$beans->getEnqId().", enqResp = ".$beans->getEnqResp()."  WHERE votId = ".$beans->getVotId();
			@mysql_query($sql);
			return true;


		}else{
			return false;
		}
	}

	public function delTab_vot($beans){
		if(is_object($beans)){
			$sql = "DELETE FROM tab_vot WHERE votId = ".$beans->getVotId();
			@mysql_query($sql);
			$verifica = @mysql_affected_rows();
			if($verifica > 0){
				return true;

			}else{
				return false;

			}

		}else{
			return false;
		}

	}
   

	
	public function insertTab_vot($beans){
		if(is_object($beans)){
			$sql = "INSERT INTO tab_vot ( enqId, enqResp) VALUES ( ".$beans->getEnqId().", ".$beans->getEnqResp().")";
			
			
			@mysql_query($sql);
			$verifica = @mysql_affected_rows();
			if($verifica > 0){
				return true;

			}else{
				return false;

			}



		}else{
			return false;

		}

	}
	
 

	public function getTab_vot($id){
		$sql="SELECT * FROM tab_vot WHERE votId = ".$id;
		$verifica = @mysql_query($sql); 
	 	 if(@mysql_num_rows($verifica)>0){ 
			 $array = @mysql_fetch_array($verifica);
			$beans = new Tab_vot();
                        $beans->setVotId($array["votId"]);
                        $beans->setEnqId($array["enqId"]);
                        $beans->setEnqResp($array["enqResp"]);
                        
                                 
			 return $beans;

	 	 }else {
			 return false;
	 	 }
	}
	
	
	public function getTab_votTot($id){
	$this->lista = array();
		$sql="SELECT * FROM tab_vot WHERE enqId = ".$id;
		
		$verifica = @mysql_query($sql); 
	 	 if(@mysql_num_rows($verifica)>0){ 
			 $x = 0;
			 while($array = @mysql_fetch_array($verifica)){
				 $beans = new Tab_vot();
				 $beans->setVotId($array["votId"]);
				 $beans->setEnqId($array["enqId"]);
				 $beans->setEnqResp($array["enqResp"]);
				$this->lista[$x] = $beans;

				$x++;

			 }

			 return $this->lista;

	 	 }else{ 
 		 	 return false; 
	 	 } 
	}
	
	
	public function getTab_votTotTip($tip){
	$this->lista = array();
		$sql="SELECT * FROM tab_vot WHERE enqResp = ".$tip;
		$verifica = @mysql_query($sql); 
	 	 if(@mysql_num_rows($verifica)>0){ 
			 $x = 0;
			 while($array = @mysql_fetch_array($verifica)){
				 $beans = new Tab_vot();
				 $beans->setVotId($array["votId"]);
				 $beans->setEnqId($array["enqId"]);
				 $beans->setEnqResp($array["enqResp"]);
				$this->lista[$x] = $beans;

				$x++;

			 }

			 return $this->lista;

	 	 }else{ 
 		 	 return false; 
	 	 } 
	}
	
	
	
	

	public function getAllPag($limite,$atual,$ordem="votId"){
		$this->lista = array();
		$comeco = $atual*$limite;
		$sql="SELECT * FROM tab_vot ORDER BY ".$ordem;
		$verifica = @mysql_query($sql); 
	 	 if(@mysql_num_rows($verifica)>0){ 
			$total = $verifica;
			$nreg  = @mysql_num_rows($total);
			$npag  = @ceil($nreg/$limite);
			$sql="SELECT * FROM tab_vot ORDER BY ".$ordem." LIMIT ".$comeco.",".$limite;
			$verifica = @mysql_query($sql);
			 $x = 0;
			 while($array = @mysql_fetch_array($verifica)){
				 $beans = new Tab_vot();
                                $beans->setVotId($array["votId"]);
                                $beans->setEnqId($array["enqId"]);
                                $beans->setEnqResp($array["enqResp"]);
				   $beans->setNpag($npag);
				   $beans->setNreg($nreg);

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