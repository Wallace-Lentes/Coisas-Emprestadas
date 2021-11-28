<?php
	$conn = mysqli_connect("localhost", "root", "" , "atp");
	
	if($conn == false){
		die ("ERRO: Não conseguiu logar no Mysql. " .mysqli_connect_error());
	}
	
?>