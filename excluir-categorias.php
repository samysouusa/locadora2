<div class="container">
    <h2>Excluir Categorias</h2>
    <?php
    $idCategoria = $_GET["idCategoria"];

    $resposta = (isset($_GET["resposta"])) ? $_GET["resposta"] : "";

    if ($resposta === "sim") {
        $sql = "delete from tbcategorias where idCategoria = '{$idCategoria}'";

        $rs = mysqli_query($conexao, $sql);
        
        header('Location: index.php?menu=categorias');
    } elseif ($resposta === "nao") {
        header('Location: index.php?menu=categorias');
    } else {
    ?>
        <div class="alert alert-danger col-12 col-sm-6" role="alert">
            <h4 class="alert-heading bi bi-question-diamond-fill">Excluir Categoria</h4>
            <hr>
            <p>Tem certeza que deseja excluir este registro?</p>
            <div class="d-flex justify-content-center">
                <a
                    href="index.php?menu=excluir-categorias&idCategoria=<?= $idCategoria ?>&resposta=sim"
                    class="btn btn-danger m-4">
                    Sim
                </a>
                <a
                    href="index.php?menu=excluir-categorias&idCategoria=<?= $idCategoria ?>&resposta=nao"
                    class="btn btn-secondary m-4">
                    Não
                </a>
            </div>
        <?php
    }
        ?>

        </div>