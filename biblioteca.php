<?php

session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Dados de livros</h1>
    <form action = "dados.php" method = "post" >
       <label for="name">Nome</label>
       <input type = "text" id = "name" name = "name"><br><br>
       <label for="autor">Autor</label>
       <input type="text" id="autor" name = "autor"><br><br>
       <label for="dtHoje">Dia de hoje</label>
       <input type="date" id ="dtHoje" name="dtHoje"><br><br>
    
        <a href="cadastroLivro.php">Cadastros</a><br><br>
       <a href="navegacaoprof.php" class="btn btn-danger" >Enviar</a>

    </form>
</body>
</html>
