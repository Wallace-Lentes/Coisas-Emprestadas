
<html>
<head>
    
    <title>Meus Itens</title>
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
				<h1> Cadastro de usuário</h1>
			
			<table id="table2" >
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>CPF</td>
					<td>Telefone</td>
					<td>Editar</td>
					<td>Excluir</td>
				</tr>
<?php
		include "includes/autentica.php";

		include "includes/conecta.php";
	
		$sql = "SELECT id, nome, cpf, telefone FROM usuario";

		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['nome'] ."</td>
					<td>". $row['cpf'] ."</td>
					<td>". $row['telefone'] ."</td>
					<td><a href='cadusuario.php?id=". $row['id'] ."'>Editar</a></td>
					<td><a href= 'excluiusuarios.php?id=". $row['id'] ."'>Excluir</a></td>
				</tr>";
			
		}
		
?>
			</table>
			
			
		</form>
		<a href="painelini.php">voltar</a><br></br>
		<?php	echo date("d/m/Y");		?>
		<?php echo date("H:i:s");      ?>
			</td>
	</tr>
	<tr>
		<td colspan="2">
		<h2>Direitos reservados</h2></td>
</tr>
</table>
</body>
</html>