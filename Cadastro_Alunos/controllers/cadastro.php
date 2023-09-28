<?php
    //Incluindo conexão
    include "conexao.php";

    //Criando as variaveis com conexão ao banco
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //Verificando se já existe o cadastro na tabela
    $verificar = mysqli_query ($conn, "SELECT * FROM alunos WHERE  nome = '$nome'");
    $dados = mysqli_fetch_row($verificar);
    $dados_nome = $dados[1];
    
    if(isset($dados_nome)){
        echo "<script>alert ('Aluno já cadastrado!')</script>";
        echo "<script>window.location.href='../pages/novo-aluno.php'</script>";
     }else{
        //Comando sql para inserir dados à tabela
        $inserir = mysqli_query ($conn, "INSERT INTO alunos (nome, email) VALUES('$nome', '$email')");
       
        //Retorna se deu certo ou não
        if($inserir){
            echo "<script>alert ('Aluno inserido com sucesso!')</script>";
            echo "<script>window.location.href='../pages/novo-aluno.php'</script>";
        }else{
            echo "<script>alert ('Erro ao inserir aluno.')</script>";
            echo "<script>window.location.href='../pages/novo-aluno.php'</script>";
        }
    }
?>