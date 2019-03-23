<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>	
	<div class="container">			
		<h1>LOGO</h1>
		<form>
			<div>
				<input class="email" type="text" name="email" placeholder="E-mail" required=""> <br>
			</div>
			<div>
				<input class="senha" type="password" name="senha" placeholder="Senha" required=""> <br>			
			</div>
			<div>
				<a href="login.php"><input class="submit" type="submit" value="Entrar"></a>
				<a href="cadastrar.php"><input class="submit" type="submit" value="Cadastrar"></a> 
			</div>

			<a href="recup-senha.php">Esqueceu sua senha?</a>
		</form>				
	</div><!--container-->
</body>
</html>