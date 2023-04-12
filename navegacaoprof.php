<?php

    session_start();

    if(!isset($_SESSION["logado"]) || !$_SESSION["logado"] ){
        echo "text";
        header("location: login.php");
        exit;
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegação</title>

</head>
<body>
    
        <h1>Olá, Professor(a) Vini Wini Bem vindo(a)</h1>

        
        <a href="biblioteca.php">Biblioteca</a><br><br>
        
        <a href="login.php">Sair da conta</a>

    
</body>
</html>