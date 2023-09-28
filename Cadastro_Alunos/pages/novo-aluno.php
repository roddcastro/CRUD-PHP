<?php
    include "header.php";
?>

<!DOCTYPE html>
<head>
<link href="../styles/style_form.css" rel="stylesheet">
    <title>Novo Aluno</title>
</head>

<style>
    .btn{
        font-size: 17px;
        font-weight: bold;
        color: black;
        border: 1px solid black;
        margin-right: 10px;
    }
</style>

<body>
    <div class="container">
        <div id="titulo">
            <b>Novo Aluno</b>
        </div>

        <div id="conteudo">
        <form method="POST" action="../controllers/cadastro.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do aluno" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Digite o email" required>
            </div>
            <div class="text-center">
                <button class="btn btn-danger" type="button" onclick="window.location.href='index.php';"> Cancelar</button>
                <button class="btn btn-success" type="submit"> Cadastrar</button>
            </div>
        </form>
        </div>
        <div class="text-center">
            <button class="btn btn-warning" type="button" onclick="window.location.href='index.php';"> Voltar a página inicial</button>
        </div>
    </div>
</body>
</html>