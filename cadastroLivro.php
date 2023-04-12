<?php

if(!file_exists("Usuarios.txt")){
    echo "Arquivo nao criado";
    exit;
}
$file = fopen("Usuarios.txt","r");

while(!feof($file)){

    $line = fgets($file);
    echo $line;
    echo "<br>";
    
}

?>