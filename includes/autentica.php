<?php

	session_start();
		
	if(!isset($_SESSION['id'])) {
		
		header("Location: login.php?autentica=1");
	}
?>