<div class="container">
    <h2 class="bi bi-bookmark-plus"> Inserir Categoria</h2>
    <?php
    $nomeCategoria = $_POST["nomeCategoria"];


    $sql = "INSERT INTO tbcategorias (
        nomeCategoria
        )
        VALUES(
        '$nomeCategoria'
        )
        ";
        $rs = mysqli_query($conexao,$sql);

        if ($rs) {
            ?>
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Adicionando novo registro</h4>
                <p>Registro inserido com sucesso!</p>
                <p>Clique <a href="index.php?menu=categorias" class="alert-link">aqui</a> para voltar à lista de categorias.</p>
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Erro ao inserir um novo registro.</p>
            </div>
            <?php
        }
    ?>
</div>