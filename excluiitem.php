<?php
	include "includes/autentica.php";
	include "includes/conecta.php";

	$id = $_GET['id'];
	
	$sql = "DELETE FROM item WHERE id= $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: meusits.php");
?>