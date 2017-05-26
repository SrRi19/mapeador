<?php

require_once("lib/class/config.php");

// if(isset($_SESSION["conexao"]) &&  $_SESSION["conexao"] == 'conecatado'){
	// $pagina = 1;
// }else{
	// if(isset($_GET["pag"]) && is_numeric($_GET["pag"]) ){
		// $pagina = $_GET["pag"];	
		  
	// }else{
		// $pagina = 0;	
	// }
// }

if(isset($_GET["pag"]) && is_numeric($_GET["pag"]) ){
	$pagina = $_GET["pag"];	
	  
}else{
	$pagina = 0;	
}

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <?php
    	switch($pagina){
			case 1:
				echo '<title>Mapeador</title>';
				break;
			default:
				echo '<title>Login</title>';
				break;
		}
    ?>
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
  </head>

  <body>
  
  
    <?php 
		switch($pagina){
			case 1:
				require("modulos/principal/index.php");
				break;
			default:
				require("modulos/conexao/index.php");
				break;
				
		}	
    ?>
	
	
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="assets/js/js.js"></script>
  </body>
</html>
