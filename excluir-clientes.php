<div class="container">
    <h2>Excluir Cliente</h2>

    <?php
    $idCliente = $_GET["idCliente"];

    $resposta = (isset($_GET["resposta"])) ? $_GET["resposta"] : "";

    if ($resposta === "sim") {
        $sql = "delete from tbclientes where idCliente = '{$idCliente}'";

        $rs = mysqli_query($conexao, $sql);

        header('Location: index.php?menu=clientes');
    } elseif ($resposta === "nao") {
        header('Location: index.php?menu=clientes');
    } else {
    ?>
        <div class="alert alert-danger col-12 col-sm-6" role="alert">
            <h4 class="alert-heading bi bi-question-diamond-fill"> Excluir Cliente</h4>
            <hr>
            <p>Tem certeza que deseja excluir este registro?</p>
            <div class="d-flex justify-content-center">
                <a href="index.php?menu=excluir-clientes&idCliente=<?= $idCliente ?>&resposta=sim" class="btn btn-danger m-4">Sim</a>
                <a href="index.php?menu=excluir-clientes&idCliente=<?= $idCliente ?>&resposta=nao" class="btn btn-secondary m-4">Não</a>

            </div>
        <?php
    }


    ?>

</div>