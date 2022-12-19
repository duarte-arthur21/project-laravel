<?php
    $hostname = "localhost";
    $bd = "museu";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);
    
    if($mysqli->connect_error){
        echo "Erro na conexão";
        die('Conexão errada'.$mysqli->connect_error);

    }//else {
       // echo "Conexão bem sucedida!";
   // }
?>