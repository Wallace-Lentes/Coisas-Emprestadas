<html>
	<head>
		<title>Coisas Emprestadas - Página inicial</title>
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
				
				<?php 
			include('includes/menu.php');
		?>
				<td style="background-color:#eee;height:200px;width:400px;">
					<form action="recebelog.php" method="post">
				
					Login: <input type="text" name="login"/><br/><br/>
					
					Senha: <input type="password" name="senha"/><br/><br/>
					
					<input type="submit"><br/><br/>
				</td>
			</tr>
		<?php 
			include('includes/footer.php');
		?>
</table>
	</body>
</html>