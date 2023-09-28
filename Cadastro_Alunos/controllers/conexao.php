<?php

    //Informações do banco
    $hostname = 'localhost';
    $bd = 'cadalunos';
    $user = 'root';
    $pass = '';

    // Criando conexão
    $conn = mysqli_connect($hostname, $user, $pass, $bd);
    // Checando conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }else{
        echo '';
    }
?>