<?php
	include "includes/autentica.php";
	include "includes/conecta.php";
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$dtnascimento = $_POST['dtnascimento'];
	$genero = $_POST['genero'];
	$nomerua = $_POST['nomerua'];
	$cep = $_POST['cep'];
	$numero = $_POST['numero'];
	$comp = $_POST['comp'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$senha = $_POST['senha'];
	
	if(empty($id)) {
		
	$sql = "INSERT INTO usuario (nome, email, cpf, telefone, dtnascimento, genero, nomerua, cep, numero, comp, cidade, estado, senha)
			VALUES ('$nome', '$email', '$cpf', '$telefone', '$dtnascimento', '$genero', '$nomerua', '$cep', '$numero', '$comp', '$cidade', '$estado', '$senha')";
			
	$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: usuarios.php");
	}
	else {
		echo "ERRO AO INSERIR!";
		}
	}
	
	else {
		$sql = "UPDATE usuario SET
			nome = '$nome',
			email = '$email',
			cpf = '$cpf',
			telefone = '$telefone',
			dtnascimento = '$dtnascimento',
			genero = '$genero',
			nomerua= '$nomerua',
			cep = '$cep',
			numero = '$numero',
			comp = '$comp',
			cidade = '$cidade',
			estado = '$estado',
			senha = '$senha'
		WHERE
			id = $id";
			
		$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: usuarios.php");
	}
	else {
		echo "ERRO AO INSERIR!";
		}
	}
	
	
	/*
	echo "Nome: " . $_POST["nome"] . "<br>";
	echo "CPF: " . $_POST["cpf"] . "<br>";
	echo "Telefone/Celular: " . $_POST["telefone"] . "<br>";
	echo "Data de nascimento: " . $_POST["dtnascimento"] . "<br>";
	echo "Gênero: " . $_POST["genero"] . "<br>";
	echo "Logradouro (rua,avenida,etc.): " . $_POST["nomerua"] . "<br>";
	echo "CEP: " . $_POST["cep"] . "<br>";
	echo "Número: " . $_POST["numero"] . "<br>";
	echo "Complemento: " . $_POST["comp"] . "<br>";
	echo "Cidade: " . $_POST["cidade"] . "<br>";
	echo "Estado: " . $_POST["estado"] . "<br>";
	*/

?>