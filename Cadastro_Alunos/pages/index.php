<?php
    include "header.php";

        $sql = "SELECT * FROM alunos";
        $query = mysqli_query ($conn, $sql);
?>

<!DOCTYPE html>
<head>
<link href="..styles//style_form.css" rel="stylesheet">
    <title>Página inicial</title>
</head>

<style>
    .container{
        margin-top: 5%;
    }

    #btnNovo{
        width: 100px;
        color: black;
        font-weight: bold;
        border: 1px solid black;
    }

    #editar{
        border-radius: 5px;
        width: 100px;
        padding: 5px;
        color: black;
        font-weight: bold;
        border: 1px solid black;
    }

    #excluir{
        border-radius: 5px;
        width: 100px; 
        padding: 5px;
        color: black;
        font-weight: bold;
        border: 1px solid black;
    }
</style>

<body>
    <div class="container">
        <div id="titulo">
            <h3>Lista de alunos</h3>
        </div>

        <div id="conteudo">
            <table id="todosAlunos" class="table table-striped table-bordered text-center" style="width:100%;">
            <center>
                <thead>
                    <tr style="background-color: #00008B; color: white; font-size: 18px;">
                        <th>Nome</th>
                        <th>Email</th>
                        <th data-orderable="false">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($dados = $query->fetch_array()){ ?>
                    <tr style="font-size: 16px;">
                        <td><b><?php echo $dados["nome"]; ?></b></td>
                        <td><?php echo $dados["email"]; ?></td>
                        <td>
                            <a href="../controllers/selecionaCadastro.php?id=<?php echo $dados["id"]; ?>"><button class="btn btn-warning" id="editar" title="Editar">Editar</button></a>
                            <a href="javascript: if(confirm('Tem certeza que deseja excluir esse cadastro: <?php echo $dados['nome']?>?'))
                            location.href='../controllers/excluirCadastro.php?id=<?php echo $dados["id"]; ?>'"><button class="btn btn-danger" id="excluir" title="Excluir">Excluir</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </center>    
            </table>

            <br>

            <div style="margin: 0 auto;">
            <button class="btn btn-success" id="btnNovo" type="button" onclick="window.location.href='novo-aluno.php';"  style="float: left;">Novo</button>
            </div>
        </div>
    </div>
</body>
</html>