<div class="container">
    <?php
    $idCliente = $_GET["idCliente"];
    $sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
    ?>

    <h2>Editar Cliente</h2>

    <form action="index.php?menu=atualizar-clientes" method="post">
        <div class="mb-3 col-12 col-sm-2">
            <label class="form-label" for="idCliente">ID</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-key"></i>
                </div>
                <input class="form-control" type="text" name="idCliente" id="idCliente" value="<?= $dados['idCliente'] ?>" readonly required>
            </div>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="nomeCliente">Nome do Cliente</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-person"></i>
                </div>
                <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" required>
            </div>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="telefoneCliente">Telefone</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </div>
                <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" required>
            </div>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="emailCliente">E-Mail</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </div>
                <input class="form-control" type="email" name="emailCliente" id="emailCliente" required>
            </div>
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <button class="btn btn-success bi bi-floppy-fill" type="submit"> Salvar</button>
            </div>
        </div>
    </form>
</div>