<?php
	include "includes/autentica.php";
	include "includes/conecta.php";
	
	$id = '';
	$nome = '';
	$descricao = '';
	$telefone = '';
	$quant = '';
	
	
	if(isset($_GET['id'])) {
		
	$id = $_GET['id']; 
	
	$sql = "SELECT * FROM item WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$descricao = $row['descricao'];
		$telefone = $row['telefone'];
		$quant = $row['quant'];
	}
?>

<html>
	<head>
		<title>Coisas Emprestadas - Cadastro de item</title>
		<link rel="stylesheet" href="new.css">
	</head>
	<body>
		<table id="table1">
		<tr>
		<td colspan="2">
		<h1>Coisas Emprestadas</h1>
		</td>
		</tr>
		
		<tr valign="top">
		<td>
		<h2>Seja bem-vindo!</h2>		
		
		<ul>		
			<li><a href="inicio.php">Inicio</a></li>
			<li><a href="painel.php">Painel de itens</a></li>
			<li><a href="cadusuario.php">Cadastro de usuarios</a></li>
			<li><a href="login.php">Painel de login</a></li>
		</ul>
		</td>
		
		<td style="background-color:#eee;height:200px;width:400px;">
				<h1> Cadastro de itens</h1>
			<form action="recebeitem.php" method="post">
			
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		
			Nome do item <input type="text" name="nome" value="<?php echo $nome; ?>"/><br></br>
			Descrição <input type="text" name="descricao" value="<?php echo $descricao; ?>"/><br></br>
			Telefone/celular  <input type="text" name="telefone" value="<?php echo $telefone; ?>"/><br></br>
			Quantidade <input type="text" name="quant" value="<?php echo $quant; ?>"/><br></br>		
	
		
		<input type="submit">
		</form>
		<a href="painelini.php">voltar</a>
			</td>
	</tr>
	<tr>
		<td colspan="2">
		<h2>Direitos reservados</h2></td>
</tr>
</table>
	</body>
</html>