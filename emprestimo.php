<html>
	<head>
		<title>Coisas Emprestadas - Itens Emprestados</title>
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
			<h1> Empréstimos </h1>
		<ul>
			<li><a href="nvemprset.php">Novo Emprestimo</a></li>
			<li><a href="meusits.php">Meus itens</a></li>
			
		</ul>
	<table id="table2" >
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>Data devolucao</td>
					<td>Data emprestimo</td>

				</tr>
<?php
		
		include "includes/conecta.php";
	
		$sql = "SELECT id, nome, devolucao, dataemprestimo FROM item WHERE flagemprestado = '1'";

		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['nome'] ."</td>
					<td>". $row['devolucao'] ."</td>
					<td>". $row['dataemprestimo'] ."</td>

				</tr>";
			
		}
		
?>
			</table>
			
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