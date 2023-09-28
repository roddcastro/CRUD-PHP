<?php
    include "header.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM alunos WHERE id = '$id'";
    $query = mysqli_query ($conn, $sql);
    $fetch = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<head>
<link href="../styles/style_form.css" rel="stylesheet">
    <title>Editar cadastro</title>
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
            <b>Editar Cadastro</b>
        </div>

        <div id="conteudo">
        <form method="POST" action="../controllers/alterar.php">
            <input name="id" type="hidden" class="form-control" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="nome">Aluno:</label>
                <b><?php echo $fetch['nome']; ?></b>
            </div>
            <div class="form-group">
                <label for="email">Novo email:</label>
                <input type="text" class="form-control" name="email" placeholder="Digite um novo email" required>
            </div>
            <div class="text-center">
                <button class="btn btn-danger" type="button" onclick="window.location.href='index.php';"> Cancelar</button>
                <button class="btn btn-success" type="submit"> Salvar</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>