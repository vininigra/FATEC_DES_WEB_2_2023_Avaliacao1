<?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            session_start();
            if($_POST['username']  == "fatec" and $_POST['senha'] == 'araras'){
                $_SESSION['logado'] = TRUE;
                header("location: navegacaoprof.php");
            }else{
                $_SESSION['logado'] = FALSE;
            }   
         }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Area de Login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="POST" action="login.php">
		<label for="username">nome :</label>
		<input type="text" name="username" id="username"><br><br>
		<label for="password">senha :</label>
		<input type="password" name="senha" id="password"><br><br>
		<input type="submit" value="Entrar">
	</form>
</body>
</html>
