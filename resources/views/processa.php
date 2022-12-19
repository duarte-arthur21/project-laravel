<?php
    $nome = $_POST["nome"]; //variavel php recebe dados do form html
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confsenha = $_POST["confsenha"];

    if ($nome == null){
        echo "<script>alert('Campo em branco!)<script>";

    }else {
        if($senha == $confsenha){
            include("conexao.php");

            $sql = "INSERT INTO usuario (nome, telefone, email, senha, created_at) VALUES('$nome', '$telefone', '$email', '$senha$', NOW())";

            $result = $mysqli->query($sql); //query executa o comando no bnco de dados

            header("Location: index.html");
        }else {
            echo "Senhas não correspondem";
        }
    }   

    if($mysqli->insert_id){
        echo "ID: ".$mysqli->insert_id;
    }
?>
    