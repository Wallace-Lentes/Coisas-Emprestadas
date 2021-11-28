<?php
	include "includes/autentica.php";
	include "includes/conecta.php";
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$dataEmprestimo = $_POST['dataEmprestimo'];
	$dataDevolucao = $_POST['dataDevolucao'];
	
	
		$sql = "UPDATE item SET
			dataemprestimo = '$dataEmprestimo',
			devolucao = '$dataDevolucao',
			flagemprestado = '1'
		WHERE
			id = $id ";

		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: meusits.php");
		}
		else {
			echo "ERRO AO EMPRESTAR!";
			}
	
	
	
	
	
	/*
	echo "Nome do item: " . $_POST["nome"] . "<br>";
	echo "Descrição: " . $_POST["desc"] . "<br>";
	echo "Telefone/Celular: " . $_POST["telefone"] . "<br>";
	echo "Quantidade: " . $_POST["quant"] . "<br>";
	*/
?>