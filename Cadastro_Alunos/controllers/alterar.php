<?php
    include "conexao.php";
    
    $id = $_POST['id'];
    $email = $_POST['email'];


    $editar = mysqli_query($conn, "UPDATE alunos SET email = '$email' WHERE id = '$id'");

    if($editar){
        echo "<script>alert ('Cadastro atualizado com sucesso!')</script>";
        echo "<script>window.location.href='../pages/index.php'</script>"; 
    }else{
        echo "<script>alert ('Não foi possível alterar o cadastro.')</script>";
        echo "<script>window.location.href='../pages/index.php'</script>";
    }
?>