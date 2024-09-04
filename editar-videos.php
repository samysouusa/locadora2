<?php
$idFilme = $_GET["idFilme"];
$sql = "SELECT * FROM tbfilmes WHERE idFilme = '{$idFilme}'";
$rs = mysqli_query($conexao, $sql)
    or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<div class="container">
    <h2>Editar Video</h2>
    <form action="index.php?menu=atualizar-videos" method="post">
        <div class="mb-3 col-12 col-sm-2">
            <label class="form-label" for="idFilme">ID</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-key"></i>
                </div>
                <input class="form-control" type="text" name="idFilme" id="idFilme" value="<?= $dados['idFilme'] ?>"
                    readonly required>
            </div>
        </div>
        <div class="mb-3 col-12 col-sm-6">
            <label class="form-label" for="tituloFilme">Título do Vídeo</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-film"></i>
                </div>
                <input class="form-control" type="text" name="tituloFilme" id="tituloFilme"
                    value="<?= $dados['tituloFilme'] ?>" required>
            </div>
        </div>
        <div class="mb-3 col-12 col-sm-2">
            <label class="form-label" for="duracaoFilme">Duração do Vídeo</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-clock"></i>
                </div>
                <input class="form-control" type="text" name="duracaoFilme" id="duracaoFilme"
                    value="<?= $dados['duracaoFilme'] ?>" required>
            </div>
        </div>
        <div class="mb-3 col-12 col-sm-2">
            <label class="form-label" for="valorLocacao">Valor da Locação</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <input class="form-control" type="text" name="valorLocacao" id="valorLocacao"
                    value="<?= $dados['valorLocacao'] ?>" required>
            </div>
        </div>
        <div class="mb-3 col-12 col-sm-3">
            <label class="form-label" for="idCategoria">Categoria</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-bookmark-plus"></i>
                </div>
                <select class="form-select" name="idCategoria" id="idCategoria" required>
                    <option value="">Selecione a categoria</option>
                    <?php
                    $sql = "SELECT * FROM tbcategorias order by nomeCategoria ASC";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados2 = mysqli_fetch_assoc($rs)) {
                    ?>
                        <option <?php echo ($dados["idCategoria"] == $dados2["idCategoria"]) ? "selected" : "" ?>
                            value="<?= $dados2["idCategoria"] ?>">
                            <?= $dados2["nomeCategoria"] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>

            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-success bi bi-floppy-fill" type="submit"> Salvar</button>
        </div>
    </form>
</div>