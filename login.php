
<html>
	<head>
		<title>Coisas Emprestadas - Login</title>
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
			<?php
				if(isset($_GET['erro'])) {
					echo '<p style= "text-align:center;color:red"> Usuário e/ou Senha incorreto(s).</p>';
				}
				if(isset($_GET['autentica'])) {
					echo '<p style= "text-align:center;color:red"> Você não tem premissão de acesso.</p>';
				}
			?>
			<form action="recebelog.php" method="post">
		
			Login: <input type="text" name="login" required //><br/><br/>
			
			Senha: <input type="password" name="senha" required /><br/><br/>
			
			<input type="submit"><br/><br/>
			</form>
			<a href="inicio.php">voltar</a><br/>
			<a href="cadusuario.php">cadastrar</a>
			</td>
	</tr>
	<?php 
			include('includes/footer.php');
		?>
</table>
	</body>
</html>