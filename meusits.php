<?php
session_start();
	
	// if(!isset($_SESSION['id'])) {
		// header("Location: login.php?autentica=1");
	// }
	$title = 'Meus Itens';
?>

<html>
<head>
    
    <title><?php echo $title; ?></title>
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
			
			<table id="table2" >
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>Descricao</td>
					<td>Quantidade</td>
					<td>Editar</td>
					<td>Excluir</td>
				</tr>
<?php
		
		include "includes/conecta.php";
	
		$sql = "SELECT id, nome, descricao, quant FROM item where flagemprestado = '0' ";

		$res = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['nome'] ."</td>
					<td>". $row['descricao'] ."</td>
					<td>". $row['quant'] ."</td>
					<td><a href='caditem.php?id=". $row['id'] ."'>Editar</a></td>
					<td><a href= 'excluiitem.php?id=". $row['id'] ."'>Excluir</a></td>
				</tr>";
			
		}
		
?>
			</table>
			
			
		</form>
		<a href="painelini.php">voltar</a>
			</td>
	</tr>
	<?php 
			include('includes/footer.php');
		?>
</table>
</body>
</html>