<?php
	// include "includes/autentica.php";

	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	if(!$login or !$senha){
		echo 'teste';
		header("Location: login.php?erro=1");
		die();
	}

	include "includes/conecta.php";
	
	$sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
		
	$res = mysqli_query($conn, $sql);
	
	$qtdeRegistros = mysqli_num_rows($res);
			$row = mysqli_fetch_assoc($res);

	if($qtdeRegistros > 0) {

		session_start();
		
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		header("Location: painelini.php");
	}
	else {

		header("Location: login.php?erro=1");
	}
	
	

?>