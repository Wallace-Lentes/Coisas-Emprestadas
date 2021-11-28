<?php
	include "includes/autentica.php";
	include "includes/conecta.php";
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$telefone = $_POST['telefone'];
	$quant = $_POST['quant'];
	
	if(empty($id)){
			
	$sql = "INSERT INTO item (nome, descricao, telefone, quant) 
			VALUES ('$nome', '$descricao', '$telefone', '$quant')";
			
	$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: meusits.php");
	}
	else {
		echo "ERRO AO INSERIR!";
		}
	}
	else {
		$sql = "UPDATE item SET
			nome = '$nome',
			descricao = '$descricao',
			telefone = '$telefone',
			quant = '$quant'
		WHERE
			id = $id";
			
		$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: meusits.php");
	}
	else {
		echo "ERRO AO INSERIR!";
		}
	}
	
	
	
	
	/*
	echo "Nome do item: " . $_POST["nome"] . "<br>";
	echo "Descrição: " . $_POST["desc"] . "<br>";
	echo "Telefone/Celular: " . $_POST["telefone"] . "<br>";
	echo "Quantidade: " . $_POST["quant"] . "<br>";
	*/
?>