<html>
	<head>
		<title>Coisas Emprestadas - Painel de itens</title>
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
			<h3>Após Cadastro dos Itens </h3>
			<table id="table2" >
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td></td>
				</tr>
<?php
		
		include "includes/conecta.php";
	
		$sql = "SELECT id, nome FROM item WHERE flagemprestado = '0'";

		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['nome'] ."</td>
					<td><a href='emprestaritem.php?id=". $row['id'] ."'>Emprestar</a></td>
				</tr>";
			
		}
		
?>
			</table>
			
			<a href="inicio.php">voltar</a>
			</td>
	</tr>
	<tr>
		<td colspan="2">
		<h2>Direitos reservados</h2></td>
</tr>
</table>
	</body>
</html>