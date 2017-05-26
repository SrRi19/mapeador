<?php
class Tab_vot{

	 private $votId;
	 private $enqId;
	 private $enqResp;
	 private $npag;
	 private $nreg;

	//metodos sets
	 public function setVotId($votId){ 
 	 	 $this->votId = $votId; 
 	 } 

	 public function setEnqId($enqIdv){ 
 	 	 $this->enqId = $enqIdv; 
 	 } 

	 public function setEnqResp($enqRespV){ 
 	 	 $this->enqResp = $enqRespV; 
 	 } 


	 public function setNpag($npagv){ 
 	 	 $this->npag = $npagv; 
 	 } 

	 public function setNreg($nregv){ 
 	 	 $this->nreg = $nregv; 
 	 } 

         
	
	//metodos gets
	 public function getVotId(){ 
 	 	 return $this->votId;
 	 } 

	 public function getEnqId(){ 
 	 	 return $this->enqId;
 	 } 

	 public function getEnqResp(){ 
 	 	 return $this->enqResp;
 	 } 

	 public function getNpag(){
 	 	 return $this->npag;
 	 } 

	 public function getNreg(){
 	 	 return $this->nreg;
 	 } 

}
?>