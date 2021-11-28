<?php
	// include "includes/autentica.php";
	include "includes/conecta.php";
	
	$id = '';
	$nome = '';
	$email='';
	$cpf = '';
	$telefone = '';
	$dtnascimento = '';
	$genero = '';
	$nomerua = '';
	$cep = '';
	$numero = '';
	$comp = '';
	$cidade = '';
	$estado = '';
	$senha = '';
		
	
	if(isset($_GET['id'])) {	
		
		$id = $_GET['id']; 
		
		$sql = "SELECT * FROM usuario WHERE id = $id";
		
		$res = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_assoc($res);
			
			$nome = $row['nome'];
			$email = $row['email'];
			$cpf = $row['cpf'];
			$telefone = $row['telefone'];
			$dtnascimento = $row['dtnascimento'];
			$genero = $row['genero'];
			$nomerua = $row['nomerua'];
			$cep = $row['cep'];
			$numero = $row['numero'];
			$comp = $row['comp'];
			$cidade = $row['cidade'];
			$estado = $row['estado'];
			$senha = $row['senha'];
		
	}
?>


<html>
	<head>
		<title>Coisas Emprestadas - Cadastro de usuário</title>
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
		<form action="recebeusuario.php" method="post">
		
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		
	Nome <input type="text" name="nome" value="<?php echo $nome; ?>"/><br></br>
	Email <input type="text" name="email" value="<?php echo $email; ?>"/><br></br>
	CPF  <input type="text" name="cpf" value="<?php echo $cpf; ?>" /><br></br>
	Telefone/celular  <input type="text" name="telefone" value="<?php echo $telefone; ?>" /><br></br>
	Data de nascimento  <input type="date" name="dtnascimento" value="<?php echo $dtnascimento; ?>"/><br></br>
	Gênero <select name="genero">
				<option value="M" <?php if($genero=='M') {echo "selected";} ?>>Masculino</option>
				<option value="F" <?php if($genero=='F') {echo "selected";} ?>>Feminino</option>
			</select><br><br>			
	Logradouro (rua, avenida, etc.)  <input type="text" name="nomerua" value="<?php echo $nomerua; ?>" /><br></br>
	CEP  <input type="text" name="cep" value="<?php echo $cep; ?>"/><br></br>
	Número  <input type="text" name="numero" value="<?php echo $numero; ?>"/><br></br>
	Complemento <input type="text" name="comp" value="<?php echo $comp; ?>"/><br></br>
	Cidade  <input type="text" name="cidade" value="<?php echo $cidade; ?>"/><br></br>
	Estado  <input type="text" name="estado" value="<?php echo $estado; ?>"/><br></br>
	Senha <input type="password" name="senha" value="<?php echo $senha; ?>"/><br></br>
		
		<input type="submit">
		</form>
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