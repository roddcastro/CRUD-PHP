<?php
    include "conexao.php";

    $id = $_GET['id'];
    $excluir = "DELETE FROM alunos WHERE id = '$id'";

    if($excluir){
        $queryDelete = mysqli_query($conn, $excluir);
        echo "<script>alert ('O cadastro foi excluído com sucesso!')</script>";
        echo "<script>window.location.href='../pages/index.php'</script>";   
    }else{
        echo "<script>alert ('Erro ao excluir cadastro.')</script>";
        echo "<script>window.location.href='../pages/index.php'</script>";
    }
?>