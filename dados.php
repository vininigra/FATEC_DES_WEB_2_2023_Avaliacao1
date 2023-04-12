<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere Dados</title>
</head>
<body>
    <p>
        Cadastro realizado com sucesso <br> <br>
    </p>
</body>
</html>

    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
        header("location: login.php");
        exit;
    }



<?php

session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: login.php");
    exit;
}
// Backend do cadastro de usuários do HTML
print_r($_POST);

$filename = "Usuarios.txt";

if(!file_exists('Usuarios.txt')){
    $handle=  fopen('Usuarios.txt','w');
 }else{
     $handle = fopen('Usuarios.txt','a');
 }
if(is_string($_POST['name'])&& $_POST['name'] != " "){
    print $_POST['name'];
    print "\n";
    fwrite($handle,$_POST['name']);
    fwrite($handle,",");

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}
if(is_string($_POST['autor'])&& $_POST['autor'] != " "){
    print $_POST['autor'];
    print "\n";
    fwrite($handle,$_POST['autor']);
    fwrite($handle,",");
    
    fflush($handle);
}
if(is_string($_POST['dtHoje'])&& $_POST['dtHoje'] != " "){
    print $_POST['dtHoje'];
    print "\n";
    fwrite($handle,$_POST['dtHoje']);
    fwrite($handle,",");
    
    fflush($handle);
} 

fwrite($handle,"\n");
fflush($handle);
fclose($handle);



?>
