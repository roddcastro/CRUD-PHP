<?php
    include "conexao.php";

    $id = $_GET['id'];

    if(isset($id)){
        echo "<script>window.location.href='../pages/editar-aluno.php?id=$id'</script>";
    }else{
        echo "<script>alert('Não existe esse cadastro no sistema');</script>";
        echo "<script>window.location.href='../pages/index.php'</script>";
    }
?>